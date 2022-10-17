<?php

namespace App\Http\Controllers;

use App\Models\Ronda5pelea;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use PDF;

/**
 * Class Ronda5peleaController
 * @package App\Http\Controllers
 */
class Ronda5peleaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ronda5peleas = Ronda5pelea::paginate();

        return view('ronda5pelea.index', compact('ronda5peleas'))
            ->with('i', (request()->input('page', 1) - 1) * $ronda5peleas->perPage());
    }

    public function pdf()
    {
        $ronda5peleas = Ronda5pelea::paginate(8);

        $pdf = PDF::loadView('ronda5pelea.pdf',['ronda5peleas'=>$ronda5peleas]);
        return $pdf->stream();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ronda5pelea = new Ronda5pelea();
        return view('ronda5pelea.create', compact('ronda5pelea'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Ronda5pelea::$rules);

        $ronda5pelea = Ronda5pelea::create($request->all());

        return redirect()->route('ronda5peleas.index')
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
        $ronda5pelea = Ronda5pelea::find($id);

        return view('ronda5pelea.show', compact('ronda5pelea'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ronda5pelea = Ronda5pelea::find($id);

        return view('ronda5pelea.edit', compact('ronda5pelea'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Ronda5pelea $ronda5pelea
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ronda5pelea $ronda5pelea)
    {
        request()->validate(Ronda5pelea::$rules);

        $ronda5pelea->update($request->all());

        return redirect()->route('ronda5peleas.index')
            ->with('success', 'Pelea editada con exito');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $ronda5pelea = Ronda5pelea::find($id)->delete();

        return redirect()->route('ronda5peleas.index')
            ->with('success', 'Pelea eliminada con exito');
    }
}
