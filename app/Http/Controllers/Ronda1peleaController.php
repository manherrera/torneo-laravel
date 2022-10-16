<?php

namespace App\Http\Controllers;

use App\Models\Ronda1pelea;
use Illuminate\Http\Request;

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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ronda1pelea = new Ronda1pelea();
        return view('ronda1pelea.create', compact('ronda1pelea'));
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
            ->with('success', 'Ronda1pelea created successfully.');
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

        return view('ronda1pelea.edit', compact('ronda1pelea'));
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
            ->with('success', 'Ronda1pelea updated successfully');
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
            ->with('success', 'Ronda1pelea deleted successfully');
    }
}
