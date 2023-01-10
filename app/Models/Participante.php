<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Participante extends Model
{
    
    static $rules = [
		'equipo' => 'required',
		'gallo1_anillo' => 'required',
		'peso1' => 'required',
		'gallo2_anillo' => 'required',
		'peso2' => 'required',
		'gallo3_anillo' => 'required',
		'peso3' => 'required',
		'gallo4_anillo' => 'required',
		'peso4' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['equipo','gallo1_anillo','peso1','puntos1','gallo2_anillo','peso2','puntos2','gallo3_anillo','peso3','puntos3','gallo4_anillo','peso4','puntos4','gallo5_anillo','peso5','puntos5','puntaje_total'];



}
