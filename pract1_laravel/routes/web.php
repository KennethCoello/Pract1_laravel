<?php
use App\Http\Controllers\CortoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PruebaController;

//Ruta a la página de inicio//
Route::get('/', function () {
    return view('inicio');
})->name("inicio");

//Ruta para show y index//
Route::resource("cortos",CortoController::class)->only(["index","show"]);

//Esto es lo ultimo que hicimos en clase //
Route::get('/prueba-simple', [PruebaController::class, 'pruebaSimple']);
Route::get('/prueba-con-cabeceras', [PruebaController::class, 'pruebaConCabeceras']);
Route::get('/prueba-con-view', [PruebaController::class, 'pruebaConView'])->name('prueba');
Route::get('/prueba-redireccion', [PruebaController::class, 'pruebaRedireccion']);
Route::get('/prueba-redireccion-con-route', [PruebaController::class, 'pruebaRedireccionConRoute'])->name('prueba.index');