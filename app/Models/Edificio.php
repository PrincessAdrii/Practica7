<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Edificio extends Model
{
    use HasFactory;
 
    protected $primaryKey = 'idEdificio';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'idEdificio', 
        'nombreEdificio', 
        'nombreCorto'
    ];

    public function lugares(): HasMany
    {
        return $this->hasMany(Lugar::class, 'idEdificio');
    }
}
