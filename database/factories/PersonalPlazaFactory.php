<?php

namespace Database\Factories;
use App\Models\PersonalPlaza;
use App\Models\Personal;
use App\Models\Plaza;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PersonalPlaza>
 */
class PersonalPlazaFactory extends Factory
{
    protected $model = PersonalPlaza::class;
    
    public function definition(): array
    {   
        return [
           'idPersonal' => Personal::inRandomOrder()->first()->idPersonal ?? Personal::factory()->create()->idPersonal, 
           'idPlaza' => Plaza::inRandomOrder()->first()->idPlaza ?? Plaza::factory()->create()->idPlaza,        
            'tipoNombramiento' => fake()->numberBetween(10,20,95), 
        ];

    }
}
