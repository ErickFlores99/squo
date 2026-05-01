<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// 1. Ruta Raíz: Redirección inteligente
Route::get('/', function () {
    return redirect('/login');
});

// 2. Grupo Protegido: Requiere Autenticación
Route::group(["prefix" => "/app", 'middleware' => ['auth','revalidate']], function () {
    // Vista principal del dashboard
    Route::get('/', [App\Http\Controllers\AppController::class, 'index'])->name('appIndex');

    // Grupo de rutas para seccion Clientes
    Route::group(["prefix" => "/clientes", 'middleware' => ['auth','revalidate']], function () {
        // Vista principal de clientes
        Route::get('/', [App\Http\Controllers\ClienteController::class, 'index'])->name('clienteIndex');
    });

    // Gestión del Perfil
    Route::middleware('auth')->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });
});

// Importante: Las rutas de autenticación (Login, Registro) 
// suelen estar en routes/auth.php y se cargan automáticamente.
require __DIR__.'/auth.php';

/*Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');*/
