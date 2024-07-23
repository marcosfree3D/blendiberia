<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegistroController;
// Principal
Route::get('/', [HomeController::class, 'index']);

Route::get('/ponencia/{titulo}', function($titulo) {
    return "Esta pagina corresponde a la ponencia {$titulo}";
});
Route::get('/taller/{titulo}', function($titulo) {
    return "Esta pagina corresponde a la ponencia {$titulo}";
});

Route::get('/ponente/{nombre}', function($nombre) {
    return "Esta pagina corresponde a la ficha de perfil de: {$nombre}";
});


Route::get('/ponencias/{dia}', function($dia){
    return "esta pagina devuleve todas las ponencias del día: {$dia}";
});

Route::get('/talleres/{dia}', function($dia){
    return "esta pagina devuleve todos los talleres del día: {$dia}";
});

Route::get("/registro", [RegistroController::class, 'index']);

Route::get('politica-privacidad', function(){
    return "esta pagina muestra la politica de privacidad";
});



// Acceso admins
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
