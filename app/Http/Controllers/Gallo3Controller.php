<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Participante;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use PDF;


class Gallo3Controller extends Controller
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

        $g3llos = Participante::orderBy('puntos3', 'DESC')->get();

        return view('gallo3.index', compact('g3llos'))->with('i');
    }

    public function pdf()
    {
        $g3llos = Participante::orderBy('puntos3', 'DESC')->get();

        $pdf = PDF::loadView('gallo3.pdf',['g3llos'=>$g3llos]);
        return $pdf->stream();
    }
}