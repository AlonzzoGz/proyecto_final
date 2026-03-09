<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProyectoController;

Route::get('/', function () {
    return redirect()->route('proyectos.index');
});

Route::get('/proyectos/pdf', [ProyectoController::class, 'pdf'])->name('proyectos.pdf');
Route::resource('proyectos', ProyectoController::class);
