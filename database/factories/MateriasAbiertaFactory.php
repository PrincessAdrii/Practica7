<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MateriasAbierta>
 */
class MateriasAbiertaFactory extends Factory
{
    protected $model = MateriaAbierta::class;
    
    public function definition(): array
    {
        return [
            'idMateria' => Materia::factory(),  
            'idPeriodo' => Periodo::factory(),       
            
        ];

    }
}
