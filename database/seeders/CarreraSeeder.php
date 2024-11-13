<?php

namespace Database\Seeders;
use App\Models\Depto;
use App\Models\Carrera;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarreraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       
        Carrera::factory(7)->create()->each(function ($carrera) {
           
            $depto = Depto::factory()->create();
            $carrera->idDepto = $depto->idDepto;
            $carrera->save();
        });
    }

}
