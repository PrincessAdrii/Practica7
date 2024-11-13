<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Puesto>
 */
class PuestoFactory extends Factory
{
    public function definition(): array
    {
        $tipos=array('Docente','Direccion','Administrativo','No Docente','Auxiliar');
        return [
            'idPuesto' => fake()->bothify("???####"),
            'nombrePuesto' => fake()->jobTitle(),
            'tipo' => fake()->randomElement($tipos),
           
        ];

    }
}
