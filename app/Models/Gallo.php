<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Gallo
 *
 * @property $id
 * @property $equipo_id
 * @property $partido
 * @property $peso
 * @property $puntos
 * @property $estado
 * @property $created_at
 * @property $updated_at
 *
 * @property Equipo $equipo
 * @property Ronda1pelea[] $ronda1peleas
 * @property Ronda1pelea[] $ronda1peleas
 * @property Ronda2pelea[] $ronda2peleas
 * @property Ronda2pelea[] $ronda2peleas
 * @property Ronda3pelea[] $ronda3peleas
 * @property Ronda3pelea[] $ronda3peleas
 * @property Ronda4pelea[] $ronda4peleas
 * @property Ronda4pelea[] $ronda4peleas
 * @property Ronda5pelea[] $ronda5peleas
 * @property Ronda5pelea[] $ronda5peleas
 * @property Ronda6pelea[] $ronda6peleas
 * @property Ronda6pelea[] $ronda6peleas
 * @property Ronda7pelea[] $ronda7peleas
 * @property Ronda7pelea[] $ronda7peleas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Gallo extends Model
{
    
    static $rules = [
    'id' => 'required',
		'equipo_id' => 'required',
		'partido' => 'required',
		'peso' => 'required',
		'puntos' => 'required',
		'estado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id','equipo_id','partido','peso','puntos','estado'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function equipo()
    {
        return $this->hasOne('App\Models\Equipo', 'id', 'equipo_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ronda1pelea1() 
    {
        return $this->hasMany('App\Models\Ronda1pelea', 'peleador2', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ronda1pelea2()
    {
        return $this->hasMany('App\Models\Ronda1pelea', 'peleador1', 'id');
    }

    public function ronda2pelea1() 
    {
        return $this->hasMany('App\Models\Ronda2pelea', 'peleador2', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ronda2pelea2()
    {
        return $this->hasMany('App\Models\Ronda2pelea', 'peleador1', 'id');
    }

    public function ronda3pelea1() 
    {
        return $this->hasMany('App\Models\Ronda3pelea', 'peleador2', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ronda3pelea2()
    {
        return $this->hasMany('App\Models\Ronda3pelea', 'peleador1', 'id');
    }

    public function ronda4pelea1() 
    {
        return $this->hasMany('App\Models\Ronda4pelea', 'peleador2', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ronda4pelea2()
    {
        return $this->hasMany('App\Models\Ronda4pelea', 'peleador1', 'id');
    }

    public function ronda5pelea1() 
    {
        return $this->hasMany('App\Models\Ronda5pelea', 'peleador2', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ronda5pelea2()
    {
        return $this->hasMany('App\Models\Ronda5pelea', 'peleador1', 'id');
    }

    public function ronda6pelea1() 
    {
        return $this->hasMany('App\Models\Ronda6pelea', 'peleador2', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ronda6pelea2()
    {
        return $this->hasMany('App\Models\Ronda6pelea', 'peleador1', 'id');
    }

    public function ronda7pelea1() 
    {
        return $this->hasMany('App\Models\Ronda7pelea', 'peleador2', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ronda7pelea2()
    {
        return $this->hasMany('App\Models\Ronda7pelea', 'peleador1', 'id');
    }
    

}
