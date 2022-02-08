<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Http\Livewire\LoginModal;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;


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

Route::get('/', HomeController::class)->name('home');

Route::get('servicios', function () {
    return view('servicios');
})->name('servicio');

//ruta que visualiza la lista de servicios
Route::get('services', [ServiceController::class, 'index'])->name('services.index');

//ruta que visualiza un servicio en especifico
Route::get('services/{service}', [ServiceController::class, 'show'])->name('services.show');

Route::get('contact/{service}', [ServiceController::class, 'cotizacion'])->name('cotizacion');

Route::get('contact/',function () {
    return view('cotizacion_simple');
})->name('cotizacion2');

Route::get('about/', [AboutController::class, 'index'])->name('about');

Route::get('coverage/',function () {
    return view('limit');
})->name('coverage');


//rutas para la app y su funcionamiento
Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    return 'Cache de la app eliminada';
});

 // borrar caché de ruta
 Route::get('/route-cache', function() {
    $exitCode = Artisan::call('route:cache');
    return 'Cache de rutas eliminada';
});

// borrar caché de configuración
Route::get('/config-cache', function() {
    $exitCode = Artisan::call('config:cache');
    return 'Configuracion de cache eliminada';
}); 

// borrar caché de vista
Route::get('/view-clear', function() {
    $exitCode = Artisan::call('view:clear');
    return 'Cache de vistas eliminada';
});

// optimmizar cache
Route::get('/optimize', function() {
    $exitCode = Artisan::call('optimize');
    return 'Cache de vistas eliminada';
});

Route::get('storage-link', function () {
    $exitCode = Artisan::call('storage:link');
    return 'Simbolic Link establecido';
});

Route::get('modo-down', function () {
    $exitCode = Artisan::call('down --secret="drpools2022"');
    return 'The system in maintenance mode';
})->name('down');

Route::get('up', function () {
    $exitCode = Artisan::call('up');
    //return 'The system is already active';
    return back()->with('notificacion','System Up');
})->name('up');

//ruta para refrescar la cache de la app
Route::get('/fresh', function() {
    $exitCode = Artisan::call('cache:clear');
    return back()->with('notificacion','System cache is up to date');
})->name('fresh');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
