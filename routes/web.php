<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Models\Student;

// ✅ Dashboard route with chart data
Route::get('/', function () {

    $totalStudents = Student::count();
    $totalCourses = Student::distinct('course')->count('course');

    // 📊 Chart data (students per course)
    $courses = Student::select('course')
        ->selectRaw('count(*) as total')
        ->groupBy('course')
        ->pluck('total', 'course');

    return view('home', compact('totalStudents', 'totalCourses', 'courses'));
});

// ✅ Student CRUD routes
Route::resource('students', StudentController::class);