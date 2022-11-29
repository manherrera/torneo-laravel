<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Participante
 *
 * @property $id
 * @property $equipo
 * @property $gallo1_anillo
 * @property $peso1
 * @property $estado1
 * @property $puntos1
 * @property $gallo2_anillo
 * @property $peso2
 * @property $estado2
 * @property $puntos2
 * @property $gallo3_anillo
 * @property $peso3
 * @property $estado3
 * @property $puntos3
 * @property $gallo4_anillo
 * @property $peso4
 * @property $estado4
 * @property $puntos4
 * @property $puntaje_total
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Participante extends Model
{
    
    static $rules = [
		'equipo' => 'required',
		'gallo1_anillo' => 'required',
		'peso1' => 'required',
		'estado1' => 'required',
		'gallo2_anillo' => 'required',
		'peso2' => 'required',
		'estado2' => 'required',
		'gallo3_anillo' => 'required',
		'peso3' => 'required',
		'estado3' => 'required',
		'gallo4_anillo' => 'required',
		'peso4' => 'required',
		'estado4' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['equipo','gallo1_anillo','peso1','estado1','puntos1','gallo2_anillo','peso2','estado2','puntos2','gallo3_anillo','peso3','estado3','puntos3','gallo4_anillo','peso4','estado4','puntos4','puntaje_total'];



}
