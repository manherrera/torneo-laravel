<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Clonparticipante
 *
 * @property $id
 * @property $equipo_id
 * @property $equipo
 * @property $gallo1_anillo
 * @property $peso1
 * @property $puntos1
 * @property $gallo2_anillo
 * @property $peso2
 * @property $puntos2
 * @property $gallo3_anillo
 * @property $peso3
 * @property $puntos3
 * @property $gallo4_anillo
 * @property $peso4
 * @property $puntos4
 * @property $gallo5_anillo
 * @property $peso5
 * @property $puntos5
 * @property $created_at
 * @property $updated_at
 *
 * @property Participante $participante
 * @property Ronda1pelea $ronda1pelea
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Clonparticipante extends Model
{
    
    static $rules = [
		'equipo' => 'required',
		'gallo1_anillo' => 'required',
		'peso1' => 'required',
		'puntos1' => 'required',
		'gallo2_anillo' => 'required',
		'peso2' => 'required',
		'puntos2' => 'required',
		'gallo3_anillo' => 'required',
		'peso3' => 'required',
		'puntos3' => 'required',
		'gallo4_anillo' => 'required',
		'peso4' => 'required',
		'puntos4' => 'required',
		'puntos5' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['equipo','gallo1_anillo','peso1','puntos1','gallo2_anillo','peso2','puntos2','gallo3_anillo','peso3','puntos3','gallo4_anillo','peso4','puntos4','gallo5_anillo','peso5','puntos5'];

    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function ronda1pelea()
    {
        return $this->hasOne('App\Models\Ronda1pelea', 'clonparticipante_id', 'id');
    }
    

}
