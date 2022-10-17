<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Ronda6pelea
 *
 * @property $id
 * @property $peleador1
 * @property $peleador2
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Ronda6pelea extends Model
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



}
