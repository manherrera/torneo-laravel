<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Participante;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use PDF;


class Gallo1Controller extends Controller
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

        $g1llos = Participante::orderBy('puntos1', 'DESC')->get();

        return view('gallo1.index', compact('g1llos'))->with('i');
    }

    public function pdf()
    {
        $g1llos = Participante::orderBy('puntos1', 'DESC')->get();

        $pdf = PDF::loadView('gallo1.pdf',['g1llos'=>$g1llos]);
        return $pdf->stream();
    }
}