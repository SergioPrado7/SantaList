<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\StudentsController;

Route::get('/', function () {
    return redirect()->route('students.index');
});

Route::resource('students', StudentsController::class);