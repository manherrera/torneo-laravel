<?php

namespace App\Http\Controllers;

use App\Models\Ronda3pelea;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use PDF;

/**
 * Class Ronda3peleaController
 * @package App\Http\Controllers
 */
class Ronda3peleaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ronda3peleas = Ronda3pelea::paginate();

        return view('ronda3pelea.index', compact('ronda3peleas'))
            ->with('i', (request()->input('page', 1) - 1) * $ronda3peleas->perPage());
    }

    public function pdf()
    {
        $ronda3peleas = Ronda3pelea::paginate(32);

        $pdf = PDF::loadView('ronda3pelea.pdf',['ronda3peleas'=>$ronda3peleas]);
        return $pdf->stream();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ronda3pelea = new Ronda3pelea();
        return view('ronda3pelea.create', compact('ronda3pelea'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Ronda3pelea::$rules);

        $ronda3pelea = Ronda3pelea::create($request->all());

        return redirect()->route('ronda3peleas.index')
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
        $ronda3pelea = Ronda3pelea::find($id);

        return view('ronda3pelea.show', compact('ronda3pelea'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ronda3pelea = Ronda3pelea::find($id);

        return view('ronda3pelea.edit', compact('ronda3pelea'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Ronda3pelea $ronda3pelea
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ronda3pelea $ronda3pelea)
    {
        request()->validate(Ronda3pelea::$rules);

        $ronda3pelea->update($request->all());

        return redirect()->route('ronda3peleas.index')
            ->with('success', 'elea editada con exito');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $ronda3pelea = Ronda3pelea::find($id)->delete();

        return redirect()->route('ronda3peleas.index')
            ->with('success', 'Pelea eliminada con exito');
    }
}
