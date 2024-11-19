<?php

namespace App\Models;
use App\Models\Periodo;
use App\Models\Grupo;
use App\Models\Materia;
use App\Models\Personal;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Grupo extends Model
{
    /** @use HasFactory<\Database\Factories\GrupoFactory> */
    use HasFactory;


    protected $primaryKey = 'idGrupo';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'idGrupo', 
        'grupo',
        'fecha',
        'maxAlumnos', 
        'descripcion',
        'idPeriodo',
        'idMateria',
        'idPersonal',
        
    ];


    public function periodo(): BelongsTo
    {
        return $this->belongsTo(Periodo::class, 'idPeriodo');
    }
    public function materia(): BelongsTo
    {
        return $this->belongsTo(Materia::class, 'idMateria');
    }
    public function personal(): BelongsTo
    {
        return $this->belongsTo(Personal::class, 'idPersonal');
    }

}

