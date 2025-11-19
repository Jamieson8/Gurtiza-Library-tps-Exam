<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\SectionController;
use Illuminate\Support\Facades\Route;

Route::resource('students', StudentController::class);
Route::resource('sections', SectionController::class);
Route::get('/', function () { return redirect()->route('students.index'); });
