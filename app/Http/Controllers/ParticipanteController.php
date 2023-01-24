<?php

namespace App\Http\Controllers;

use App\Models\Participante;
use Illuminate\Http\Request;
use PDF;

/**
 * Class ParticipanteController
 * @package App\Http\Controllers
 */
class ParticipanteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $busqueda = $request->busqueda;
        $participantes = Participante::where('equipo','LIKE','%'.$busqueda.'%')
                          ->orWhere('partido','LIKE','%'.$busqueda.'%')
                          ->orWhere('gallo1_anillo','LIKE','%'.$busqueda.'%')
                          ->orWhere('gallo2_anillo','LIKE','%'.$busqueda.'%')
                          ->orWhere('gallo3_anillo','LIKE','%'.$busqueda.'%')
                          ->orWhere('gallo4_anillo','LIKE','%'.$busqueda.'%')
                          ->orWhere('gallo5_anillo','LIKE','%'.$busqueda.'%')
                          ->latest('id')
                          ->paginate(25);
        $data = [
            'participantes'=>$participantes,
            'busqueda'=>$busqueda,
        ];
 
        return view('participante.index', $data)
        ->with('i', (request()->input('page', 1) - 1) * $participantes->perPage());
    }

    public function pdf()
    {
        $participantes = Participante::paginate(500);

        $pdf = PDF::loadView('participante.pdf',['participantes'=>$participantes]);
        return $pdf->setPaper('a4', 'landscape')->stream('participante.pdf');
    }

    public function pdf2()
    {
        $participantes = Participante::paginate(500);

        $pdf = PDF::loadView('participante.pdf2',['participantes'=>$participantes]);
        return $pdf->setPaper('a4', 'landscape')->stream('participante.pdf2');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $participante = new Participante();
        return view('participante.create', compact('participante'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Participante::$rules);

        $participante = Participante::create($request->all());

        return redirect()->route('participantes.index')
            ->with('success', 'Participante creado con exito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $participante = Participante::find($id);

        return view('participante.show', compact('participante'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $participante = Participante::find($id);

        return view('participante.edit', compact('participante'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Participante $participante
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Participante $participante)
    {
        request()->validate(Participante::$rules);

        $participante->update($request->all());

        return redirect()->route('participantes.index')
            ->with('success', 'Participante editado con exito');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $participante = Participante::find($id)->delete();

        return redirect()->route('participantes.index')
            ->with('success', 'Participante eliminado con exito');
    }
}
