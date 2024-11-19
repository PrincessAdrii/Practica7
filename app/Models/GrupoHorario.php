<?php

namespace App\Models;
use App\Models\Grupo;
use App\Models\Lugar;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class GrupoHorario extends Model
{
    /** @use HasFactory<\Database\Factories\GrupoHorarioFactory> */
    use HasFactory;

    protected $primaryKey = 'idHorarios';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'idHorarios', 
        'dia',
        'hora', 
        'idLugar',
        'idGrupo',
        
        
    ];

    public function lugar(): BelongsTo
    {
        return $this->belongsTo(Lugar::class, 'idLugar');
    }
    public function grupo(): BelongsTo
    {
        return $this->belongsTo(Grupo::class, 'idGrupo');
    }
  
}
