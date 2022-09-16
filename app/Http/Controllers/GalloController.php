<?php

namespace App\Http\Controllers;

use App\Models\Gallo;
use App\Models\Equipo;
use App\Models\Partido;
use Illuminate\Http\Request;

/**
 * Class GalloController
 * @package App\Http\Controllers
 */
class GalloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gallos = Gallo::paginate();

        return view('gallo.index', compact('gallos'))
            ->with('i', (request()->input('page', 1) - 1) * $gallos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $gallo = new Gallo();
        $equipo = Equipo::pluck('name','id');
        $partido = Partido::pluck('name','id');

        return view('gallo.create', compact('gallo', 'equipo', 'partido'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Gallo::$rules);

        $gallo = Gallo::create($request->all());

        return redirect()->route('gallos.index')
            ->with('success', 'Registro creado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $gallo = Gallo::find($id);

        return view('gallo.show', compact('gallo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gallo = Gallo::find($id);
        $equipo = Equipo::pluck('name','id');
        $partido = Partido::pluck('name','id');

        return view('gallo.edit', compact('gallo', 'equipo', 'partido'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Gallo $gallo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallo $gallo)
    {
        request()->validate(Gallo::$rules);

        $gallo->update($request->all());

        return redirect()->route('gallos.index')
            ->with('success', 'Registro editado con éxito');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $gallo = Gallo::find($id)->delete();

        return redirect()->route('gallos.index')
            ->with('success', 'Registro eliminado con éxito');
    }
}
