<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class G5llo
 *
 * @property $id
 * @property $equipo_id
 * @property $gallo5_anillo
 * @property $created_at
 * @property $updated_at
 *
 * @property Participante $participante
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class G5llo extends Model
{
    use HasFactory;
    
    static $rules = [
		'equipo_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['equipo_id','gallo5_anillo'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function participante()
    {
        return $this->hasOne('App\Models\Participante', 'id', 'equipo_id');
    }

}
