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
        $verde = 10;
        $rojo = 10;
        $participante = Participante::count();
        $total = Ronda1pelea::count()+Ronda2pelea::count()+Ronda3pelea::count()
                +Ronda4pelea::count()+Ronda5pelea::count();


        return view('layouts.headers.cards', compact(), [
            'verde' => $verde,
            'role' => $role,
            'participante' => $participante,
            'total' => $total

        ])
        ->with('i');
    }
}
