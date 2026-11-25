<?php

use App\Http\Controllers\AlatController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('alat', AlatController::class);
