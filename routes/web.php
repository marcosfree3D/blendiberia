<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\RegistroController;
// Principal
Route::get('/', [HomeController::class, 'index']);

Route::get('ponencias/{dia}', function($dia){

    $conferencias = DB::table('conferencias')->where('dia',$dia);
    $ponencia = DB::select('select * from conferencias where id = 1' );
    $conferencias = $conferencias->get();
    return view('lista_conferencias', compact('conferencias','dia','ponencia'));
});

Route::get('ponencias/{dia}/{titulo}', function($dia,$titulo){

    $conferencias = DB::table('conferencias')->where('dia',$dia);
    $ponencia = DB::table('conferencias')->where('url',$titulo);
    $conferencias = $conferencias->get();
    $ponencia = $ponencia->get();
    return view('lista_conferencias', compact('conferencias','dia','ponencia'));
});



Route::get('talleres/{dia}', function($dia){
    $talleres = DB::table('talleres')->where('dia',$dia);
    $tallerConcreto = DB::table('talleres')->where('id',1);
    $talleres = $talleres->get();
    $tallerConcreto= $tallerConcreto->get();
    return view('lista_talleres', compact('talleres','dia','tallerConcreto'));
});

Route::get('talleres/{dia}/{titulo}', function($dia, $titulo){
    $talleres = DB::table('talleres')->where('dia',$dia);
    $tallerConcreto = DB::table('talleres')->where('url',$titulo);
    $talleres = $talleres->get();
    $tallerConcreto = $tallerConcreto->get();
    return view('lista_talleres', compact('talleres','dia','tallerConcreto'));
});

Route::get('/ponencia/{titulo}', function($titulo) {
    $ponencia = DB::table('conferencias')->where('url',$titulo);
    $ponencia = $ponencia->get();
    return view('ponencia', compact($ponencia));
});
Route::get('/taller/{titulo}', function($titulo) {
    $taller = DB::table('talleres')->where('url',$titulo);
    $taller = $taller->get();
    return view('taller', compact($taller));
});

Route::get('/ponente/{nombre}', function($nombre) {
    $ponente = DB::table('ponentes')->where('url',$nombre);
    $ponente = $ponente->get();
    return view('ponente', compact($ponente));

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
