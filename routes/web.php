<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeudoresController;
use App\Http\Controllers\pagoController;
use App\Http\Controllers\PDFController;


Route::get('/', function () {
    return view('index');
});
#Route::get('/deudores', 'DeudoresController@index');
#Route::get('/deudores/create', 'DeudoresController@create');
Route::get('/deudores', [DeudoresController::class, 'index']);
Route::get('/deudores/create', [DeudoresController::class, 'create']);
Route::post('/deudores', [DeudoresController::class, 'store']);
Route::delete('/deudores/{id}', [DeudoresController::class, 'destroy']);
Route::get('/deudores/{id}/edit', [DeudoresController::class, 'edit']);
Route::patch('/deudores/{id}', [DeudoresController::class, 'update']);

#Route::resource('deudores', 'DeudoresController');

// Listar todos los pagos
Route::get('/pagos', [PagoController::class, 'index']);

// Mostrar el formulario para crear un nuevo pago
Route::get('/pagos/create', [PagoController::class, 'create']);

// Almacenar un nuevo pago
Route::post('/pagos', [PagoController::class, 'store']);

// Mostrar el formulario para editar un pago existente
Route::get('/pagos/{id}/edit', [PagoController::class, 'edit']);

// Actualizar un pago existente
Route::patch('/pagos/{id}', [PagoController::class, 'update']);

// Eliminar un pago
Route::delete('/pagos/{id}', [PagoController::class, 'destroy']);

//ruta PDF
Route::get('/pagos/pdf', [PDFController::class, 'generatePDF_Pagos']);

Route::get('/deudores/pdf', [PDFController::class, 'generatePDF_Deudores']);
#Route::resource('pagos', 'pagoController');
#Route::get('/generar-pdf', [PDFController::class, 'generarPDF'])->name('generar.pdf');
#Route::get('generate-pdf', [PDFController::class, 'generatePDF']);