<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadosController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', EmpleadosController::class .'@index')->name('Empleados.index');
Route::get('/Empleados/create', EmpleadosController::class . '@create')->name('Empleados.create');
Route::post('/Empleados', EmpleadosController::class .'@store')->name('Empleados.store');
Route::get('/Empleados/{empleado}', EmpleadosController::class .'@show')->name('Empleados.show');
Route::get('/Empleados/{empleado}/edit', EmpleadosController::class .'@edit')->name('Empleados.edit');
Route::put('/Empleados/{empleado}', EmpleadosController::class .'@update')->name('Empleados.update');
Route::delete('/Empleados/{empleado}', EmpleadosController::class .'@destroy')->name('Empleados.destroy');
