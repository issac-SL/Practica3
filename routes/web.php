<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlazaController;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\PuestoController;
use App\Http\Controllers\CarreraController;
use App\Http\Controllers\DeptoController;
use App\Http\Controllers\MateriaController;
use App\Http\Controllers\PeriodoController;
use App\Http\Controllers\ReticulaController;
use App\Http\Controllers\ProfileController;
use App\Models\Carrera;
use App\Models\Depto;
use App\Models\Materia;

Route::get('/alumnos.index', [AlumnoController::class, 'index'])->name('alumnos.index');
Route::get('/alumnos.create', [AlumnoController::class, 'create'])->name('alumnos.create');
Route::post('/alumnos.store', [AlumnoController::class, 'store'])->name('alumnos.store');
Route::get('/alumnos.edit/{alumno}', [AlumnoController::class, 'edit'])->name('alumnos.edit');
Route::post('/alumnos.update/{alumno}', [AlumnoController::class, 'update'])->name('alumnos.update');
Route::get('/alumnos.show/{alumno}', [AlumnoController::class, 'show'])->name('alumnos.show');
Route::post('/alumnos.destroy/{alumno}', [AlumnoController::class, 'destroy'])->name('alumnos.destroy');

Route::get('/puestos.index', [PuestoController::class, 'index'])->name('puestos.index');
Route::get('/puestos.create', [PuestoController::class, 'create'])->name('puestos.create');
Route::post('/puestos.store', [PuestoController::class, 'store'])->name('puestos.store');
Route::get('/puestos.edit/{puesto}', [PuestoController::class, 'edit'])->name('puestos.edit');
Route::post('/puestos.update/{puesto}', [PuestoController::class, 'update'])->name('puestos.update');
Route::get('/puestos.show/{puesto}', [PuestoController::class, 'show'])->name('puestos.show');
Route::post('/puestos.destroy/{puesto}', [PuestoController::class, 'destroy'])->name('puestos.destroy');

Route::get('/plazas.index', [PlazaController::class, 'index'])->name('plazas.index');
Route::get('/plazas.create', [PlazaController::class, 'create'])->name('plazas.create');
Route::post('/plazas.store', [PlazaController::class, 'store'])->name('plazas.store');
Route::get('/plazas.edit/{plaza}', [PlazaController::class, 'edit'])->name('plazas.edit');
Route::post('/plazas.update/{plaza}', [PlazaController::class, 'update'])->name('plazas.update');
Route::get('/plazas.show/{plaza}', [PlazaController::class, 'show'])->name('plazas.show');
Route::post('/plazas.destroy/{plaza}', [PlazaController::class, 'destroy'])->name('plazas.destroy');

Route::get('/carreras.index', [CarreraController::class, 'index'])->name('carreras.index');
Route::get('/carreras.create', [CarreraController::class, 'create'])->name('carreras.create');
Route::post('/carreras.store', [CarreraController::class, 'store'])->name('carreras.store');
Route::get('/carreras.edit/{carrera}', [CarreraController::class, 'edit'])->name('carreras.edit');
Route::post('/carreras.update/{carrera}', [CarreraController::class, 'update'])->name('carreras.update');
Route::get('/carreras.show/{carrera}', [CarreraController::class, 'show'])->name('carreras.show');
Route::post('/carreras.destroy/{carrera}', [CarreraController::class, 'destroy'])->name('carreras.destroy');

Route::get('/deptos.index', [DeptoController::class, 'index'])->name('deptos.index');
Route::get('/deptos.create', [DeptoController::class, 'create'])->name('deptos.create');
Route::post('/deptos.store', [DeptoController::class, 'store'])->name('deptos.store');
Route::get('/deptos.edit/{depto}', [DeptoController::class, 'edit'])->name('deptos.edit');
Route::post('/deptos.update/{depto}', [DeptoController::class, 'update'])->name('deptos.update');
Route::get('/deptos.show/{depto}', [DeptoController::class, 'show'])->name('deptos.show');
Route::post('/deptos.destroy/{depto}', [DeptoController::class, 'destroy'])->name('deptos.destroy');

Route::get('/materias.index', [MateriaController::class, 'index'])->name('materias.index');
Route::get('/materias.create', [MateriaController::class, 'create'])->name('materias.create');
Route::post('/materias.store', [MateriaController::class, 'store'])->name('materias.store');
Route::get('/materias.edit/{materia}', [MateriaController::class, 'edit'])->name('materias.edit');
Route::post('/materias.update/{materia}', [MateriaController::class, 'update'])->name('materias.update');
Route::get('/materias.show/{materia}', [MateriaController::class, 'show'])->name('materias.show');
Route::post('/materias.destroy/{materia}', [MateriaController::class, 'destroy'])->name('materias.destroy');

Route::get('/periodos.index', [PeriodoController::class, 'index'])->name('periodos.index');
Route::get('/periodos.create', [PeriodoController::class, 'create'])->name('periodos.create');
Route::post('/periodos.store', [PeriodoController::class, 'store'])->name('periodos.store');
Route::get('/periodos.edit/{periodo}', [PeriodoController::class, 'edit'])->name('periodos.edit');
Route::post('/periodos.update/{periodo}', [PeriodoController::class, 'update'])->name('periodos.update');
Route::get('/periodos.show/{periodo}', [PeriodoController::class, 'show'])->name('periodos.show');
Route::post('/periodos.destroy/{periodo}', [PeriodoController::class, 'destroy'])->name('periodos.destroy');

Route::get('/reticulas.index', [ReticulaController::class, 'index'])->name('reticulas.index');
Route::get('/reticulas.create', [ReticulaController::class, 'create'])->name('reticulas.create');
Route::post('/reticulas.store', [ReticulaController::class, 'store'])->name('reticulas.store');
Route::get('/reticulas.edit/{reticula}', [ReticulaController::class, 'edit'])->name('reticulas.edit');
Route::post('/reticulas.update/{reticula}', [ReticulaController::class, 'update'])->name('reticulas.update');
Route::get('/reticulas.show/{reticula}', [ReticulaController::class, 'show'])->name('reticulas.show');
Route::post('/reticulas.destroy/{reticula}', [ReticulaController::class, 'destroy'])->name('reticulas.destroy');


Route::get('/', function () {
    return view('inicio');
});

Route::get('/dashboard', function () {
    return view('inicio');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/menu1', function () {
    return view('menu1');
});

Route::get('/menu2', function () {
    return view('menu2');
})->middleware('auth');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
