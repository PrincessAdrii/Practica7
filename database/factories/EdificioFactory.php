<?php

namespace Database\Factories;
use App\Models\Edificio;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Edificio>
 */
class EdificioFactory extends Factory
{  
    protected $model = Edificio::class;

    public function definition(): array
    {
       
        $edificios = [
            ['nombreCompleto' => 'Edificio K', 'nombreCorto' => 'K'],
            ['nombreCompleto' => 'Edificio D', 'nombreCorto' => 'D'],
            ['nombreCompleto' => 'Edificio H', 'nombreCorto' => 'H'],
            ['nombreCompleto' => 'Edificio Ciencias Basicas', 'nombreCorto' => 'ECB'],
            ['nombreCompleto' => 'Edificio Industrial', 'nombreCorto' => 'EI'],
            ['nombreCompleto' => 'Edificio Sistemas', 'nombreCorto' => 'ES'],
          
        ];
 
       

        // Selecciona aleatoriamente un edificio de la lista
        $edificio = $this->faker->unique()->randomElement($edificios);

        return [
            'idEdificio' => $this->faker->unique()->bothify('####'),
            'nombreEdificio' => $edificio['nombreCompleto'],
            'nombreCorto' => $edificio['nombreCorto'],
            
        ];

    }
}
