<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Alumno extends Model
{
    use HasFactory;

    public function carrera():BelongsTo{
     return $this->belongsTo(Carrera::class,'idCarrera');

 }
 protected $fillable =['noctrl','nombre','apellidoP','apellidoM','sexo','idCarrera'];

 protected $primaryKey= 'noctrl'; //relacion de laravel id
 protected $casts = ['noctrl'=>'string'];
 public $incrementing = false; //me trae los valores incrementable

}
