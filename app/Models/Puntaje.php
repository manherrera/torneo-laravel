<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Puntaje
 *
 * @property $id
 * @property $equipo_id
 * @property $puntos1
 * @property $puntos2
 * @property $puntos3
 * @property $puntos4
 * @property $puntos5
 * @property $created_at
 * @property $updated_at
 *
 * @property Participante $participante
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Puntaje extends Model
{
    
    static $rules = [
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['equipo_id','puntos1','puntos2','puntos3','puntos4','puntos5'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function participante()
    {
        return $this->hasOne('App\Models\Participante', 'id', 'equipo_id');
    }
    

}
