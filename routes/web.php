<?php

use Illuminate\Support\Facades\Route;

use App\Models\Medicos;

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
    return view('vista');
});

Route::get('/receta', function () {
    return view('receta');
});

Route::get('/lista', function () {
    $medicos = Medicos::all();
    return view('lista', compact(['medicos']));
});

Route::get('/medicos/filtro/{id}', function ($id) {
    return Medicos::where('nombre', $id)->first();
});

Route::get('/medicos/actualizar', function () {
    return Medicos::updateOrCreate(
        ['id' => '4'],
        ['nombre' => 'JC', 'establecimiento' => 'UES']
    );
});

Route::get('/medicos/eliminar/{id}', function ($id) {
    return Medicos::destroy($id);
});

Route::resource('medicos', \App\Http\Controllers\MedicosController::class)->names('medicos');
