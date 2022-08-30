<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Gallo
 *
 * @property $id
 * @property $partido
 * @property $personas
 * @property $peso
 * @property $anillo
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Gallo extends Model
{
    
    static $rules = [
		'partido' => 'required',
		'personas' => 'required',
		'peso' => 'required',
		'anillo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['partido','personas','peso','anillo'];



}
