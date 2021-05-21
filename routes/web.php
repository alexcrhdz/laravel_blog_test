<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\cursoController;
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

Route::get('courses', [cursoController::class, 'index']);

Route::get('courses/create', [cursoController::class, 'create']);

Route::get('courses/{course}', [cursoController::class, 'show']);
