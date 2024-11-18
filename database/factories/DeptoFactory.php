<?php

namespace Database\Factories;
use App\Models\Depto;
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
        // static $deptos = ['ISC', 'IE', 'IM', 'II', 'IGE', 'CP', 'IMT','Direccion','Subdireccion','Ciencias Basicas'];
        
       
        // $nombreDepto = $this->faker->unique()->randomElement($deptos);
        
        // return [ 
        //     'idDepto' => $this->faker->unique()->bothify("???####"),
        //     'nombreDepto' => $nombreDepto,
        //     'nombreMediano' => $this->faker->lexify(str_repeat("?", 15)),
        //     'nombreCorto' => strtoupper($this->faker->unique()->lexify('????')),
        // ];
        static $indice = 0; // Start from 0

        $deptos = [
            ['Sistemas Computacionales', 'Sistemas', 'DISC'],
            ['Electrónica, Mecatronica y Mecánica', 'Electrónica', 'DIE'],
            ['Industrial', 'Industrial', 'DII'],
            ['Contaduría Pública', 'Cont. Pública', 'DCP'],
            ['Gestión Empresarial', 'Ing. Gestión', 'DIGE'],
            ['Direccion', 'Dire', 'DD'],
            ['Subdireccion', 'SubDire', 'DS'],
            ['Ciencias Basicas', 'Ciencias', 'DCB'],
        ];

        $depto = $deptos[$indice];

        // Increment the index and wrap it around if necessary
        $indice = ($indice + 1) % count($deptos);

        return [
            'idDepto' =>  $this->faker->unique()->bothify("???####"),
            'nombreDepto' => $depto[0],
            'nombreMediano' => $depto[1],
            'nombreCorto' => $depto[2],
        ];
    }


}
