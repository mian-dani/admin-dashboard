<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;




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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [UserController::class, 'dashboard'])->name('dashboard');
Route::get('/yajrainitialize', [UserController::class, 'yajraInitialize'])->name('yajrainitialize');
Route::post('/users', [UserController::class, 'create'])->name('users.create');
Route::post("/deletecrud/{id}", [UserController::class, 'delete'])->name('deletecrud');
Route::get("/fetchuserdata/{id}", [UserController::class, 'fetchuserdata'])->name('fetchuserdata');
Route::post("/updateuser/{id}", [UserController::class, 'updateuser'])->name('updateuser');