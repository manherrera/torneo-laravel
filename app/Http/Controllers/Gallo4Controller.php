<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Participante;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use PDF;


class Gallo4Controller extends Controller
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

        $g4llos = Participante::orderBy('puntos4', 'DESC')->get();

        return view('gallo4.index', compact('g4llos'))->with('i');
    }

    public function pdf()
    {
        $g4llos = Participante::orderBy('puntos4', 'DESC')->get();

        $pdf = PDF::loadView('gallo4.pdf',['g4llos'=>$g4llos]);
        return $pdf->stream();
    }
}