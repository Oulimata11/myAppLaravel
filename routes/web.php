<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\myController;

Route::get('/', function () {
    return view('layout');
});

Route::get('myview',[myController::class, 'index']);
