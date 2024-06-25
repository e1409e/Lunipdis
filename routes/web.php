<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstudiantesController;
use App\Http\Controllers\PadresController;
use App\Http\Controllers\ParientesController;
use App\Http\Controllers\CitasController;
use App\Http\Controllers\DiscapacidadesController;
use App\Http\Controllers\HistorialMedicoController;
use App\Http\Controllers\IncidenciasController;
use App\Http\Controllers\ReportePsicoController;
use App\Http\Controllers\PeriodosController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/Facultades', function () {
    return view('universidad.Facultades');
});
Route::get('/carreras', function () {
    return view('universidad.carreras');
});




Route::resource('estudiantes', EstudiantesController::class);
Route::resource('padres', PadresController::class);
Route::resource('parientes', ParientesController::class);
Route::resource('citas', CitasController::class);
Route::resource('discapacidades', DiscapacidadesController::class);
Route::resource('historialmedico', HistorialMedicoController::class);
Route::resource('incidencias', IncidenciasController::class);
Route::resource('reportePisco', ReportePsicoController::class);
Route::resource('periodos', PeriodosController::class);