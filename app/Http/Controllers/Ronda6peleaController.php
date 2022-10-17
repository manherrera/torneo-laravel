<?php

namespace App\Http\Controllers;

use App\Models\Ronda6pelea;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use PDF;

/**
 * Class Ronda6peleaController
 * @package App\Http\Controllers
 */
class Ronda6peleaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ronda6peleas = Ronda6pelea::paginate();

        return view('ronda6pelea.index', compact('ronda6peleas'))
            ->with('i', (request()->input('page', 1) - 1) * $ronda6peleas->perPage());
    }

    public function pdf()
    {
        $ronda6peleas = Ronda6pelea::paginate(8);

        $pdf = PDF::loadView('ronda6pelea.pdf',['ronda6peleas'=>$ronda6peleas]);
        return $pdf->stream();
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ronda6pelea = new Ronda6pelea();
        return view('ronda6pelea.create', compact('ronda6pelea'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Ronda6pelea::$rules);

        $ronda6pelea = Ronda6pelea::create($request->all());

        return redirect()->route('ronda6peleas.index')
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
        $ronda6pelea = Ronda6pelea::find($id);

        return view('ronda6pelea.show', compact('ronda6pelea'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ronda6pelea = Ronda6pelea::find($id);

        return view('ronda6pelea.edit', compact('ronda6pelea'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Ronda6pelea $ronda6pelea
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ronda6pelea $ronda6pelea)
    {
        request()->validate(Ronda6pelea::$rules);

        $ronda6pelea->update($request->all());

        return redirect()->route('ronda6peleas.index')
            ->with('success', 'Pelea editada con exito');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $ronda6pelea = Ronda6pelea::find($id)->delete();

        return redirect()->route('ronda6peleas.index')
            ->with('success', 'Pelea eliminada con exito');
    }
}
