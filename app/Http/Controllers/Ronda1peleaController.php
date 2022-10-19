<?php

namespace App\Http\Controllers;

use App\Models\Ronda1pelea;
use App\Models\Gallo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use PDF;

/**
 * Class Ronda1peleaController
 * @package App\Http\Controllers
 */
class Ronda1peleaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ronda1peleas = Ronda1pelea::paginate();

        return view('ronda1pelea.index', compact('ronda1peleas'))
            ->with('i', (request()->input('page', 1) - 1) * $ronda1peleas->perPage());
    }

    public function pdf()
    {
        $ronda1peleas = Ronda1pelea::paginate(64);

        $pdf = PDF::loadView('ronda1pelea.pdf',['ronda1peleas'=>$ronda1peleas]);
        return $pdf->stream();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ronda1pelea = new Ronda1pelea();
        $gallo = Gallo::pluck('id');

        return view('ronda1pelea.create', compact('ronda1pelea', 'gallo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Ronda1pelea::$rules);

        $ronda1pelea = Ronda1pelea::create($request->all());

        return redirect()->route('ronda1peleas.index')
            ->with('success', 'Pelea creada con exito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ronda1pelea = Ronda1pelea::find($id);

        return view('ronda1pelea.show', compact('ronda1pelea'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ronda1pelea = Ronda1pelea::find($id);
        $gallo = Gallo::pluck('id');

        return view('ronda1pelea.edit', compact('ronda1pelea','gallo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Ronda1pelea $ronda1pelea
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ronda1pelea $ronda1pelea)
    {
        request()->validate(Ronda1pelea::$rules);

        $ronda1pelea->update($request->all());

        return redirect()->route('ronda1peleas.index')
            ->with('success', 'Pelea editada con exito');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $ronda1pelea = Ronda1pelea::find($id)->delete();

        return redirect()->route('ronda1peleas.index')
            ->with('success', 'Pelea eliminada con exito');
    }
}
