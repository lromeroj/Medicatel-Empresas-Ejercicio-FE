<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('login');
});

Route::get('login', function(){
    return view('login');
});

Route::get('dashboard', function(){
    return view('empresa.dashboard');
});

Route::get('colaboradores', function(){
    return view('empresa.colaboradores');
});

Route::get('layout', function(){
    return view('layout.index');
});