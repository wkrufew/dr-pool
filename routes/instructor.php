<?php

use Illuminate\Support\Facades\Route;

use App\Http\Livewire\InstructorServices;
use App\Http\Controllers\Instructor\ServiceController;
use App\Http\Livewire\Instructor\ServicesPersonas;
use App\Http\Livewire\Instructor\ServicesRechazados;


//Route::group(['middleware' => ['can:Leer Servicios']], function () {
    Route::redirect('', 'instructor/services'); 
    Route::get('services', InstructorServices::class)->middleware('can:Leer Servicios')->name('services.index');

    Route::resource('services', ServiceController::class)->middleware('can:Leer Servicios')->names('services');

    Route::get('services/{service}/goals', [ServiceController::class, 'goals'])->name('services.goals');

    Route::get('services/{service}/contactos', ServicesPersonas::class)->name('services.contactos');/* ->middleware('can:Actualizar Servicio') */

    Route::get('services/{service}/finalizados', ServicesRechazados::class)->name('services.finalizados');

    Route::post('services/{service}/status', [ServiceController::class, 'status'])->name('services.status');
//});
    