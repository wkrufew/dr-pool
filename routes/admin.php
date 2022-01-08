<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\EmpresaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\RoleController;

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ResenaController;
use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\UserController;

//Route::group(['middleware' => ['role:Admin']], function () {
    Route::get('', [HomeController::class, 'index'])->name('home');
    Route::resource('roles', RoleController::class)->names('roles');
    Route::resource('users', UserController::class)->only('index','edit','update')->names('users');
    Route::resource('brands', BrandController::class)->names('brands');
    Route::resource('empresas', EmpresaController::class)->only(['index','edit', 'update'])->names('empresas');
    Route::resource('categories', CategoryController::class)->names('categories');
    Route::resource('resenas', ResenaController::class)->names('resenas');
    //Ruta para asignar un contacto a un servicio
    Route::get('contacts', [ContactController::class, 'index'])->name('contacts.index');
    Route::delete('contacts/{contact}', [ContactController::class, 'destroy'])->name('contacts.destroy');
    Route::post('contacts/{contact}/aprobar', [ContactController::class, 'aprobar'])->name('contacts.aprobar');
    Route::post('contacts/{contact}/desaprobar', [ContactController::class, 'desaprobar'])->name('contacts.desaprobar');
    Route::post('contacts/{contact}/rechazar', [ContactController::class, 'rechazar'])->name('contacts.rechazar');
    Route::get('contacts/aprobada', [ContactController::class, 'aprobada'])->name('contacts.aprobada');
    Route::get('contacts/rechazo', [ContactController::class, 'rechazo'])->name('contacts.rechazo');
    //Rutas para listar aprobar y eliminar comentarios 
    Route::get('reviews', [ReviewController::class, 'index'])->name('reviews.index');
    Route::get('reviews/aprobada', [ReviewController::class, 'aprobada'])->name('reviews.aprobada');
    Route::post('reviews/{review}/estado', [ReviewController::class, 'estado'])->name('reviews.estado');
    Route::delete('reviews/{review}', [ReviewController::class, 'destroy'])->name('reviews.destroy');

    //Rutas para el slider
    Route::resource('sliders', SliderController::class)->only('index','create','store','destroy','edit','update')->names('sliders');
    Route::resource('abouts', AboutController::class)->only('index','edit','update')->names('abouts');
//});


