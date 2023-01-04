<?php

namespace App\Http\Controllers;

use App\Models\Ronda4pelea;
use App\Models\Participante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use PDF;

/**
 * Class Ronda4peleaController
 * @package App\Http\Controllers
 */
class Ronda4peleaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ronda4peleas = Ronda4pelea::paginate();

        return view('ronda4pelea.index', compact('ronda4peleas'))
            ->with('i', (request()->input('page', 1) - 1) * $ronda4peleas->perPage());
    }

    public function pdf()
    {
        $ronda4peleas = Ronda4pelea::paginate(8);

        $pdf = PDF::loadView('ronda4pelea.pdf',['ronda4peleas'=>$ronda4peleas]);
        return $pdf->setPaper('a4', 'landscape')->stream('ronda4pelea.pdf');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ronda4pelea = new Ronda4pelea();
        $anillo = Participante::pluck('gallo4_anillo','gallo4_anillo');
        $equipo = Participante::pluck('equipo','equipo');
        $peso = Participante::pluck('peso4','peso4');

        return view('ronda4pelea.create', compact('ronda4pelea','anillo','equipo','peso'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Ronda4pelea::$rules);

        $ronda4pelea = Ronda4pelea::create($request->all());

        return redirect()->route('ronda4peleas.index')
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
        $ronda4pelea = Ronda4pelea::find($id);

        return view('ronda4pelea.show', compact('ronda4pelea'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ronda4pelea = Ronda4pelea::find($id);
        $anillo = Participante::pluck('gallo4_anillo','gallo4_anillo');
        $equipo = Participante::pluck('equipo','equipo');
        $peso = Participante::pluck('peso4','peso4');

        return view('ronda4pelea.edit', compact('ronda4pelea','anillo','equipo','peso'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Ronda4pelea $ronda4pelea
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ronda4pelea $ronda4pelea)
    {
        request()->validate(Ronda4pelea::$rules);

        $ronda4pelea->update($request->all());

        return redirect()->route('ronda4peleas.index')
            ->with('success', 'Pelea editada con exito');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $ronda4pelea = Ronda4pelea::find($id)->delete();

        return redirect()->route('ronda4peleas.index')
            ->with('success', 'Pelea eliminada con exito');
    }
}
