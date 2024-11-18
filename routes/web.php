<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlazaController;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\CarreraController;
use App\Http\Controllers\DeptoController;
use App\Http\Controllers\MateriaController;
use App\Http\Controllers\PeriodoController;
use App\Http\Controllers\PuestoController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReticulaController;
use App\Http\Controllers\EdificioController;
use App\Http\Controllers\LugarController;
use App\Http\Controllers\PersonalController;
use App\Http\Controllers\PersonalPlazaController;
use App\Http\Controllers\GrupoController;
use App\Http\Controllers\GrupoHorarioController;
use App\Http\Controllers\MateriasAbiertaController;




Route::get('/catalogos', function(){
    return view ('catalogos');
})->middleware("auth") ->name("catalogos");

Route::get('/horarios', function(){
    return view ('horarios');
})->middleware("auth") ->name("horarios");

Route::get('/proyectos', function(){
    return view ('proyectos');
})->middleware("auth") ->name("proyectos");

Route::get('/Puestos.index', [PuestoController::class, 'index'])->name('Puestos.index');
    Route::get('/Puestos.create', [PuestoController::class, 'create'])->name('Puestos.create');
    Route::post('/Puestos.store', [PuestoController::class, 'store'])->name('Puestos.store');
    Route::get('/Puestos.editar/{puesto}', [PuestoController::class, 'edit'])->name('Puestos.editar');
    Route::get('/Puestos.ver/{puesto}', [PuestoController::class, 'show'])->name('Puestos.ver');
    Route::post('/Puestos.eliminar/{puesto}', [PuestoController::class, 'destroy'])->name('Puestos.eliminar');
    Route::post('/Puestos.update/{puesto}', [PuestoController::class, 'update'])->name('Puestos.update');
    
    Route::get('/Plazas.index', [PlazaController::class, 'index'])->name('Plazas.index');
    Route::get('/Plazas.create', [PlazaController::class, 'create'])->name('Plazas.create');
    Route::post('/Plazas.store', [PlazaController::class, 'store'])->name('Plazas.store');
    Route::get('/Plazas.editar/{plaza}', [PlazaController::class, 'edit'])->name('Plazas.editar');
    Route::get('/Plazas.ver/{plaza}', [PlazaController::class, 'show'])->name('Plazas.ver');
    Route::post('/Plazas.eliminar/{plaza}', [PlazaController::class, 'destroy'])->name('Plazas.eliminar');
    Route::post('/Plazas.update/{plaza}', [PlazaController::class, 'update'])->name('Plazas.update');




Route::get('/Alumnos2.index', [AlumnoController::class, 'index'])->name('Alumnos.index');
    Route::get('/Alumnos2.create', [AlumnoController::class, 'create'])->name('Alumnos.create');
    Route::post('/Alumnos2.store', [AlumnoController::class, 'store'])->name('Alumnos.store');
    Route::get('/Alumnos2.editar/{alumno}', [AlumnoController::class, 'edit'])->name('Alumnos.editar');
    Route::get('/Alumnos2.ver/{alumno}', [AlumnoController::class, 'show'])->name('Alumnos.ver');
    Route::post('/Alumnos2.eliminar/{alumno}', [AlumnoController::class, 'destroy'])->name('Alumnos.eliminar');
    Route::post('/Alumnos2.update/{alumno}', [AlumnoController::class, 'update'])->name('Alumnos.update');

    Route::get('/Deptos.index', [DeptoController::class, 'index'])->name('Deptos.index');
    Route::get('/Deptos.create', [DeptoController::class, 'create'])->name('Deptos.create');
    Route::post('/Deptos.store', [DeptoController::class, 'store'])->name('Deptos.store');
    Route::get('/Deptos.editar/{depto}', [DeptoController::class, 'edit'])->name('Deptos.editar');
    Route::get('/Deptos.ver/{depto}', [DeptoController::class, 'show'])->name('Deptos.ver');
    Route::post('/Deptos.eliminar/{depto}', [DeptoController::class, 'destroy'])->name('Deptos.eliminar');
    Route::post('/Deptos.update/{depto}', [DeptoController::class, 'update'])->name('Deptos.update');

    Route::get('/Periodos.index', [PeriodoController::class, 'index'])->name('Periodos.index');
    Route::get('/Periodos.create', [PeriodoController::class, 'create'])->name('Periodos.create');
    Route::post('/Periodos.store', [PeriodoController::class, 'store'])->name('Periodos.store');
    Route::get('/Periodos.editar/{periodo}', [PeriodoController::class, 'edit'])->name('Periodos.editar');
    Route::get('/Periodos.ver/{periodo}', [PeriodoController::class, 'show'])->name('Periodos.ver');
    Route::post('/Periodos.eliminar/{periodo}', [PeriodoController::class, 'destroy'])->name('Periodos.eliminar');
    Route::post('/Periodos.update/{periodo}', [PeriodoController::class, 'update'])->name('Periodos.update');

    Route::get('/Carreras.index', [CarreraController::class, 'index'])->name('Carreras.index');
    Route::get('/Carreras.create', [CarreraController::class, 'create'])->name('Carreras.create');
    Route::post('/Carreras.store', [CarreraController::class, 'store'])->name('Carreras.store');
    Route::get('/Carreras.editar/{carrera}', [CarreraController::class, 'edit'])->name('Carreras.editar');
    Route::get('/Carreras.ver/{carrera}', [CarreraController::class, 'show'])->name('Carreras.ver');
    Route::post('/Carreras.eliminar/{carrera}', [CarreraController::class, 'destroy'])->name('Carreras.eliminar');
    Route::post('/Carreras.update/{carrera}', [CarreraController::class, 'update'])->name('Carreras.update');


    Route::get('/Reticulas.index', [ReticulaController::class, 'index'])->name('Reticulas.index');
    Route::get('/Reticulas.create', [ReticulaController::class, 'create'])->name('Reticulas.create');
    Route::post('/Reticulas.store', [ReticulaController::class, 'store'])->name('Reticulas.store');
    Route::get('/Reticulas.editar/{reticula}', [ReticulaController::class, 'edit'])->name('Reticulas.editar');
    Route::get('/Reticulas.ver/{reticula}', [ReticulaController::class, 'show'])->name('Reticulas.ver');
    Route::post('/Reticulas.eliminar/{reticula}', [ReticulaController::class, 'destroy'])->name('Reticulas.eliminar');
    Route::post('/Reticulas.update/{reticula}', [ReticulaController::class, 'update'])->name('Reticulas.update');

    Route::get('/Materias.index', [MateriaController::class, 'index'])->name('Materias.index');
    Route::get('/Materias.create', [MateriaController::class, 'create'])->name('Materias.create');
    Route::post('/Materias.store', [MateriaController::class, 'store'])->name('Materias.store');
    Route::get('/Materias.editar/{materia}', [MateriaController::class, 'edit'])->name('Materias.editar');
    Route::get('/Materias.ver/{materia}', [MateriaController::class, 'show'])->name('Materias.ver');
    Route::post('/Materias.eliminar/{materia}', [MateriaController::class, 'destroy'])->name('Materias.eliminar');
    Route::post('/Materias.update/{materia}', [MateriaController::class, 'update'])->name('Materias.update');


    Route::get('/MateriasA.index', [MateriasAbiertaController::class, 'index'])->name('MateriasA.index');
    Route::post('/MateriasA.store', [MateriasAbiertaController::class, 'store'])->name('MateriasA.store');




    Route::get('/Edificios.index', [EdificioController::class, 'index'])->name('Edificios.index');    
    Route::get('/Edificios.create', [EdificioController::class, 'create'])->name('Edificios.create'); 
    Route::post('/Edificios.store', [EdificioController::class, 'store'])->name('Edificios.store');       
    Route::get('/Edificios.editar/{edificio}', [EdificioController::class, 'edit'])->name('Edificios.editar');   
    Route::get('/Edificios.ver/{edificio}', [EdificioController::class, 'show'])->name('Edificios.ver');     
    Route::post('/Edificios.eliminar/{edificio}', [EdificioController::class, 'destroy'])->name('Edificios.eliminar');
    Route::post('/Edificios.update/{edificio}', [EdificioController::class, 'update'])->name('Edificios.update');
    
  
    Route::get('/Lugares.index', [LugarController::class, 'index'])->name('Lugares.index');   
    Route::get('/Lugares.create', [LugarController::class, 'create'])->name('Lugares.create'); 
    Route::post('/Lugares.store', [LugarController::class, 'store'])->name('Lugares.store');       
    Route::get('/Lugares.editar/{lugar}', [LugarController::class, 'edit'])->name('Lugares.editar');       
    Route::get('/Lugares.ver/{lugar}', [LugarController::class, 'show'])->name('Lugares.ver');      
    Route::post('/Lugares.eliminar/{lugar}', [LugarController::class, 'destroy'])->name('Lugares.eliminar');
    Route::post('/Lugares.update/{lugar}', [LugarController::class, 'update'])->name('Lugares.update');


    Route::get('/Personal.index', [PersonalController::class, 'index'])->name('Personal.index');    
    Route::get('/Personal.create', [PersonalController::class, 'create'])->name('Personal.create');
    Route::post('/Personal.store', [PersonalController::class, 'store'])->name('Personal.store');       
    Route::get('/Personal.ediar/{personal}', [PersonalController::class, 'edit'])->name('Personal.editar');      
    Route::get('/Personal.ver/{personal}', [PersonalController::class, 'show'])->name('Personal.ver');     
    Route::post('/Personal.eliminar/{personal}', [PersonalController::class, 'destroy'])->name('Personal.eliminar');
    Route::post('/Personal.update/{personal}', [PersonalController::class, 'update'])->name('Personal.update');


    Route::get('/PersonalPlazas.index', [PersonalPlazaController::class, 'index'])->name('PersonalPlazas.index');   
    Route::get('/PersonalPlazas.create', [PersonalPlazaController::class, 'create'])->name('PersonalPlazas.create'); 
    Route::post('/PersonalPlazas.store', [PersonalPlazaController::class, 'store'])->name('PersonalPlazas.store');   
    Route::get('/PersonalPlazas.editar/{personalPlaza}', [PersonalPlazaController::class, 'edit'])->name('PersonalPlazas.editar');       
    Route::get('/PersonalPlazas.ver/{personalPlaza}', [PersonalPlazaController::class, 'show'])->name('PersonalPlazas.ver');       
    Route::post('/PersonalPlazas.eliminar/{personalPlaza}', [PersonalPlazaController::class, 'destroy'])->name('PersonalPlazas.eliminar');
    Route::post('/PersonalPlazas.update/{personalPlaza}', [PersonalPlazaController::class, 'update'])->name('PersonalPlazas.update');
    

    Route::get('/Grupos.index', [GrupoController::class, 'index'])->name('Grupo.index');    
    Route::get('/Grupos.create', [GrupoController::class, 'create'])->name('Grupo.create');
    Route::post('/Grupos.store', [GrupoController::class, 'store'])->name('Grupo.store');       
    Route::get('/Grupos.ediar/{personal}', [GrupoController::class, 'edit'])->name('Grupo.editar');      
    Route::get('/Grupos.ver/{personal}', [GrupoController::class, 'show'])->name('Grupo.ver');     
    Route::post('/Grupos.eliminar/{personal}', [GrupoController::class, 'destroy'])->name('Grupo.eliminar');
    Route::post('/Grupos.update/{personal}', [GrupoController::class, 'update'])->name('Grupo.update');
    Route::resource('/Grupo.index', GrupoController::class);

    

    Route::get('/', function () {
    return view('inicio');
});

Route::get('/dashboard', function () {
    return view('inicio');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
