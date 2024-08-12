<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\RegistroController;
// Principal
Route::get('/', [HomeController::class, 'index']);

Route::get('ponencias/', function(){

    $conferencias = DB::select('select * from conferencias');
    $ponencia = DB::select('select * from conferencias where id = 1' );
    $dia = 9;
    return view('lista_conferencias', compact('conferencias','dia','ponencia'));
});
Route::get('ponencias/{titulo}', function(){

    $conferencias = DB::select('select * from conferencias');
    $ponencia = DB::select('select * from conferencias where id = 1' );
    $dia = 9;
    return view('lista_conferencias', compact('conferencias','dia','ponencia'));
});

Route::get('talleres/', function(){
    return view('lista_talleres');
});
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
Route::post("/registro/store", [RegistroController::class, 'store'])->name('registro.store');

Route::get("/politica-privacidad", function(){
    return view('politicaprivacidad');
});



// Acceso admins
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/control', function () {
        return view('dashboard');
    })->name('dashboard');
});
