<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\StudentController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/welcome', function () {
    return view('welcome');
});

// Route::get('/login', [Auth\LoginController::class, 'showLoginForm'])->name('login');
Route::get('/', [LoginController::class, 'showLoginForm'])->name('loginForm');
Route::post('/', [LoginController::class, 'login'])->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/students-list', [StudentController::class, 'allStudent'])->name('studentsList');
    Route::get('/student', [StudentController::class, 'studentForm'])->name('student');
    Route::post('/add-student', [StudentController::class, 'create'])->name('add-student');
    Route::get('/show-student/{id}', [StudentController::class, 'show'])->name('show-student');
    Route::put('/update-student/{id}', [StudentController::class, 'update'])->name('update-student');
    Route::get('/update-status/{id}/{status}', [StudentController::class, 'updateStatus'])->name('update-status');
    Route::delete('delete-student/{id}', [StudentController::class, 'destroy'])->name('delete-student');

});



