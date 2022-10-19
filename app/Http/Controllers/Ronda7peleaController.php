<?php

namespace App\Http\Controllers;

use App\Models\Ronda7pelea;
use App\Models\Gallo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use PDF;

/**
 * Class Ronda7peleaController
 * @package App\Http\Controllers
 */
class Ronda7peleaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ronda7peleas = Ronda7pelea::paginate();

        return view('ronda7pelea.index', compact('ronda7peleas'))
            ->with('i', (request()->input('page', 1) - 1) * $ronda7peleas->perPage());
    }

    public function pdf()
    {
        $ronda7peleas = Ronda7pelea::paginate(8);

        $pdf = PDF::loadView('ronda7pelea.pdf',['ronda7peleas'=>$ronda7peleas]);
        return $pdf->stream();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ronda7pelea = new Ronda7pelea();
        $gallo = Gallo::pluck('id');

        return view('ronda7pelea.create', compact('ronda7pelea', 'gallo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Ronda7pelea::$rules);

        $ronda7pelea = Ronda7pelea::create($request->all());

        return redirect()->route('ronda7peleas.index')
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
        $ronda7pelea = Ronda7pelea::find($id);

        return view('ronda7pelea.show', compact('ronda7pelea'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ronda7pelea = Ronda7pelea::find($id);
        $gallo = Gallo::pluck('id');

        return view('ronda7pelea.edit', compact('ronda7pelea','gallo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Ronda7pelea $ronda7pelea
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ronda7pelea $ronda7pelea)
    {
        request()->validate(Ronda7pelea::$rules);

        $ronda7pelea->update($request->all());

        return redirect()->route('ronda7peleas.index')
            ->with('success', 'Pelea editada con exito');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $ronda7pelea = Ronda7pelea::find($id)->delete();

        return redirect()->route('ronda7peleas.index')
            ->with('success', 'Pelea eliminada con exito');
    }
}
