<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Participante;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use PDF;


class EquipoController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {

        $equipos = Participante::orderBy('puntaje_total', 'DESC')->get();

        return view('equipo.index', compact('equipos'))->with('i');
    }

    public function pdf()
    {
        $equipos = Participante::orderBy('puntaje_total', 'DESC')->get();

        $pdf = PDF::loadView('equipo.pdf',['equipos'=>$equipos]);
        return $pdf->stream();
    }
}