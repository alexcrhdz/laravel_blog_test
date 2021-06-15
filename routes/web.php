<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\courseController;
use App\Http\Controllers\homeController;

/* 
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', homeController::class);

Route::get('courses', [courseController::class, 'index'])->name('courses.index');

Route::get('courses/create', [courseController::class, 'create'])->name('courses.create');

Route::post('courses', [courseController::class, 'store'])->name('courses.store');

Route::get('courses/{course}', [courseController::class, 'show'])->name('courses.show');

Route::get('courses/{course}/edit', [courseController::class, 'edit'])->name('courses.edit');

Route::put('courses/{course}/update',[courseController::class, 'update'])->name('courses.update');