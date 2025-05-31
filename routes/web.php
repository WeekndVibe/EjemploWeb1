<?php

use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/alumnos/create', [AlumnoController::class, 'create'])
        ->name('alumnos.create');
Route::get('/alumnos/store', [AlumnoController::class, 'store'])
        ->name('alumnos.store');