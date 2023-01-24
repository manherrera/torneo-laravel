<?php

namespace App\Http\Controllers;

use App\Models\User;
use Spatie\Permission\Models\Role;
use App\Models\Participante;
use App\Models\Ronda1pelea;
use App\Models\Ronda2pelea;
use App\Models\Ronda3pelea;
use App\Models\Ronda4pelea;
use App\Models\Ronda5pelea;
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

        $verde = Participante::count()/2;
        $rojo = Participante::count()/2;

        $participante = Participante::count();
        $role = Role::count();
        $total = Ronda1pelea::count()+Ronda2pelea::count()+Ronda3pelea::count()
                +Ronda4pelea::count()+Ronda5pelea::count();

        $participantes = DB::select('SELECT * FROM participantes ORDER BY ABS(puntaje_total) DESC LIMIT 10');
        $g1llos = DB::select('SELECT * FROM participantes ORDER BY ABS(puntos1) DESC LIMIT 5');
        $g2llos = DB::select('SELECT * FROM participantes ORDER BY ABS(puntos2) DESC LIMIT 5');
        $g3llos = DB::select('SELECT * FROM participantes ORDER BY ABS(puntos3) DESC LIMIT 5');
        $g4llos = DB::select('SELECT * FROM participantes ORDER BY ABS(puntos4) DESC LIMIT 5');
        $g5llos = DB::select('SELECT * FROM participantes ORDER BY ABS(puntos5) DESC LIMIT 5');


        return view('dashboard', compact('participantes', 'g1llos', 'g2llos', 'g3llos', 'g4llos', 'g5llos'), [
            'user' => $user,
            'role' => $role,
            'verde' => $verde,
            'rojo' => $rojo,
            'participante' => $participante,
            'total' => $total

        ])
        ->with('i');
    }
}
