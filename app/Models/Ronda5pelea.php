<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Ronda5pelea
 *
 * @property $id
 * @property $peleador1
 * @property $peleador2
 * @property $created_at
 * @property $updated_at
 *
 * @property Gallo1 $gallo1
 * @property Gallo2 $gallo2
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Ronda5pelea extends Model
{
    
    static $rules = [
		'peleador1' => 'required',
		'peleador2' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['peleador1','peleador2'];


    public function gallo1()
    {
        return $this->hasOne('App\Models\Gallo', 'id', 'peleador1');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function gallo2()
    {
        return $this->hasOne('App\Models\Gallo', 'id', 'peleador2');
    }

}
