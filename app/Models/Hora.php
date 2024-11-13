<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hora extends Model
{
    use HasFactory;

    protected $primaryKey = 'idHora';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'idHora', 
        'horaIni', 
        'horaFin'
    ];
}
