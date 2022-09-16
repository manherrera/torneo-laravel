<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Gallo
 *
 * @property $id
 * @property $equipo_id
 * @property $partido_id
 * @property $peso
 * @property $anillo
 * @property $created_at
 * @property $updated_at
 *
 * @property Equipo $equipo
 * @property Partido $partido
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Gallo extends Model
{
    
    static $rules = [
		'equipo_id' => 'required',
		'partido_id' => 'required',
		'peso' => 'required',
		'anillo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['equipo_id','partido_id','peso','anillo'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function equipo()
    {
        return $this->hasOne('App\Models\Equipo', 'id', 'equipo_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function partido()
    {
        return $this->hasOne('App\Models\Partido', 'id', 'partido_id');
    }

}
