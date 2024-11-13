<?php

namespace Database\Seeders;
use App\Models\Carrera;
use App\Models\Reticula;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReticulaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Obtiene todas las carreras y crea una retícula para cada una
        $carreras = Carrera::all();

        foreach ($carreras as $carrera) {
            Reticula::factory()->create([
                'idCarrera' => $carrera->idCarrera,
            ]);
        }
    }
}
