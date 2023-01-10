<?php

namespace App\Http\Controllers;

use App\Models\Clonparticipante;
use Illuminate\Http\Request;

/**
 * Class ClonparticipanteController
 * @package App\Http\Controllers
 */
class ClonparticipanteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clonparticipantes = Clonparticipante::paginate();

        return view('clonparticipante.index', compact('clonparticipantes'))
            ->with('i', (request()->input('page', 1) - 1) * $clonparticipantes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clonparticipante = new Clonparticipante();
        return view('clonparticipante.create', compact('clonparticipante'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Clonparticipante::$rules);

        $clonparticipante = Clonparticipante::create($request->all());

        return redirect()->route('clonparticipantes.index')
            ->with('success', 'Clonparticipante created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $clonparticipante = Clonparticipante::find($id);

        return view('clonparticipante.show', compact('clonparticipante'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $clonparticipante = Clonparticipante::find($id);

        return view('clonparticipante.edit', compact('clonparticipante'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Clonparticipante $clonparticipante
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Clonparticipante $clonparticipante)
    {
        request()->validate(Clonparticipante::$rules);

        $clonparticipante->update($request->all());

        return redirect()->route('clonparticipantes.index')
            ->with('success', 'Clonparticipante updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $clonparticipante = Clonparticipante::find($id)->delete();

        return redirect()->route('clonparticipantes.index')
            ->with('success', 'Clonparticipante deleted successfully');
    }
}
