<?php

use Illuminate\Support\Facades\Route;
use App\Models\Student;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});

 

Route::get('/test', function () {
    $student = Student::first();
    return $student->name_upper;
});

Route::get('/delete', function () {
    $student = Student::find(1);
    $student->delete();

    return "Deleted";
});

Route::get('/restore', function () {
    Student::withTrashed()->find(1)->restore();

    return "Restored";
});

Route::get('/students', [StudentController::class, 'index']);