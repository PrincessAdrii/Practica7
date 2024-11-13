<?php

namespace Database\Seeders;

use App\Models\Alumno;
use App\Models\Carrera;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AlumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $carreras = Carrera::all()->take(5);

       
        foreach ($carreras as $carrera) {
            Alumno::factory(5)->create([
                'idCarrera' => $carrera->idCarrera, 
            ]);
        }
    }
}
