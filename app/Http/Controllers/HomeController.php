<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Participante;
use App\Models\Ronda1pelea;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;


class HomeController extends Controller
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
        $user = User::count();
        $participante = Participante::count();
        $gallo = Ronda1pelea::count();
        $total = Ronda1pelea::count()+Ronda1pelea::count()+Ronda1pelea::count()
                +Ronda1pelea::count()+Ronda1pelea::count()+Ronda1pelea::count()
                +Ronda1pelea::count();

        $participantes = DB::select('SELECT * FROM participantes ORDER BY ABS(puntaje_total) DESC LIMIT 10');
        $gallos = DB::select('SELECT * FROM participantes ORDER BY ABS(puntos1) DESC LIMIT 15');


        return view('dashboard', compact('participantes', 'gallos'), [
            'user' => $user,
            'participante' => $participante,
            'gallo' => $gallo,
            'total' => $total

        ])
        ->with('i');
    }
}
