<?php

namespace Database\Seeders;
use App\Models\Puesto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PuestoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       
        $tiposPuestos = ['Docente', 'Direccion', 'Administrativo', 'No Docente', 'Auxiliar'];

     
        foreach ($tiposPuestos as $tipo) {
            Puesto::factory()->count(3)->create([
                'tipo' => $tipo,
            ]);

        }
    }
}
