<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Ronda1pelea
 *
 * @property $id
 * @property $equipo1
 * @property $participante_id
 * @property $peso1
 * @property $equipo2
 * @property $clonparticipante_id
 * @property $peso2
 * @property $created_at
 * @property $updated_at
 *
 * @property Clonparticipante $clonparticipante
 * @property Participante $participante
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Ronda1pelea extends Model
{
    
    static $rules = [
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['equipo1','participante_id','peso1','equipo2','clonparticipante_id','peso2'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function clonparticipante()
    {
        return $this->hasOne('App\Models\Clonparticipante', 'id', 'clonparticipante_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function participante()
    {
        return $this->hasOne('App\Models\Participante', 'id', 'participante_id');
    }
    

}
