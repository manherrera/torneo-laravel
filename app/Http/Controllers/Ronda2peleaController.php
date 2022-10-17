<?php

namespace App\Http\Controllers;

use App\Models\Ronda2pelea;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use PDF;

/**
 * Class Ronda2peleaController
 * @package App\Http\Controllers
 */
class Ronda2peleaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ronda2peleas = Ronda2pelea::paginate();

        return view('ronda2pelea.index', compact('ronda2peleas'))
            ->with('i', (request()->input('page', 1) - 1) * $ronda2peleas->perPage());
    }

    public function pdf()
    {
        $ronda2peleas = Ronda2pelea::paginate(32);

        $pdf = PDF::loadView('ronda2pelea.pdf',['ronda2peleas'=>$ronda2peleas]);
        return $pdf->stream();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ronda2pelea = new Ronda2pelea();
        return view('ronda2pelea.create', compact('ronda2pelea'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Ronda2pelea::$rules);

        $ronda2pelea = Ronda2pelea::create($request->all());

        return redirect()->route('ronda2peleas.index')
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
        $ronda2pelea = Ronda2pelea::find($id);

        return view('ronda2pelea.show', compact('ronda2pelea'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ronda2pelea = Ronda2pelea::find($id);

        return view('ronda2pelea.edit', compact('ronda2pelea'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Ronda2pelea $ronda2pelea
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ronda2pelea $ronda2pelea)
    {
        request()->validate(Ronda2pelea::$rules);

        $ronda2pelea->update($request->all());

        return redirect()->route('ronda2peleas.index')
            ->with('success', 'Pelea editada con exito');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $ronda2pelea = Ronda2pelea::find($id)->delete();

        return redirect()->route('ronda2peleas.index')
            ->with('success', 'Pelea eliminada con exito');
    }
}
