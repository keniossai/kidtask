<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/user/tasks', [TaskController::class, 'index'])->name('index.task');
    Route::get('tasks/create', [TaskController::class, 'create'])->name('task.create');
    Route::post('user/tasks/create', [TaskController::class, 'store'])->name('task.store');
    Route::get('task/delete/{id}', [TaskController::class, 'destroy'])->name('task.delete');
    Route::get('task/edit/{id}', [TaskController::class, 'edit'])->name('task.edit');
    Route::put('tasks/update/{id}', [TaskController::class, 'update'])->name('task.update');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
