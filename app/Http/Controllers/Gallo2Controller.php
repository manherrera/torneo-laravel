<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Participante;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use PDF;


class Gallo2Controller extends Controller
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

        $g2llos = Participante::orderBy('puntos2', 'DESC')->get();

        return view('gallo2.index', compact('g2llos'))->with('i');
    }

    public function pdf()
    {
        $g2llos = Participante::orderBy('puntos2', 'DESC')->get();

        $pdf = PDF::loadView('gallo2.pdf',['g2llos'=>$g2llos]);
        return $pdf->stream();
    }
}