<?php

use App\Http\Controllers\PessoaController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Home');
});

Route::controller(PessoaController::class)->group(function () {
    Route::get('/pessoas', 'index');
    Route::get('/search-pessoa', 'filter');
});
