<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::controller(PageController::class)->group(function () {     
    Route::get('/',                 'home')             ->name('home');
    Route::get('login',             'login')            ->name('login');
    Route::get('dashboard',         'dashboard')        ->name('dashboard');
    Route::get('colaboradores',     'colaboradores')    ->name('colaboradores');
    
    Route::post('dashboard',        'iniciar_sesion')   ->name('iniciar_sesion');
    Route::get('cerrar_sesion',     'cerrar_sesion')    ->name('cerrar_sesion');
});