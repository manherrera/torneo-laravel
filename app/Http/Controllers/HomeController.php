<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Equipo;
use App\Models\Gallo;
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
        $equipo = Equipo::count();
        $gallo = Gallo::count();
        $total = Ronda1pelea::count()+Ronda1pelea::count()+Ronda1pelea::count()
                +Ronda1pelea::count()+Ronda1pelea::count()+Ronda1pelea::count()
                +Ronda1pelea::count();

        $equipos = DB::select('SELECT * FROM equipos ORDER BY ABS(puntaje) DESC LIMIT 10');
        $gallos = DB::select('SELECT * FROM gallos ORDER BY ABS(puntos) DESC LIMIT 15');


        return view('dashboard', compact('equipos', 'gallos'), [
            'user' => $user,
            'equipo' => $equipo,
            'gallo' => $gallo,
            'total' => $total

        ])
        ->with('i');
    }
}
