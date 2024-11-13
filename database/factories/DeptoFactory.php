<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Depto>
 */
class DeptoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        static $deptos = ['ISC', 'IE', 'IM', 'II', 'IGE', 'CP', 'IMT','Direccion','Subdireccion','Ciencias Basicas'];
        
       
        $nombreDepto = $this->faker->unique()->randomElement($deptos);
        
        return [ 
            'idDepto' => $this->faker->unique()->bothify("???####"),
            'nombreDepto' => $nombreDepto,
            'nombreMediano' => $this->faker->lexify(str_repeat("?", 15)),
            'nombreCorto' => strtoupper($this->faker->unique()->lexify('????')),
        ];
    }


}
