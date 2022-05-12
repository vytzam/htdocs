<?php

use App\Http\Controllers\AssignmentsController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard',[AssignmentsController::class, 'index'])->name('dashboard');

    Route::get('/assignment',[AssignmentsController::class, 'add']);
    Route::post('/assignment',[AssignmentsController::class,'çreate']);

    Route::get('/assignment/{assignment}',[AssignmentsController::class,' edit']);
    Route::post('/assignment/{assignment}',[AssignmentsController::class,' update']);
});
// to do: Assignments index, add, create, edit, update
