<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


// Route::get('/', function () {
//     return view('welcome');
// });

                        //////    YAJRA TABLE AND CRUD OPERATIONS
Route::get('/', [UserController::class, 'dashboard'])->name('dashboard');
Route::get('/yajrainitialize', [UserController::class, 'yajraInitialize'])->name('yajrainitialize');
Route::post('/users', [UserController::class, 'create'])->name('users.create');
Route::post("/deletecrud/{id}", [UserController::class, 'delete'])->name('deletecrud');
Route::get("/fetchuserdata/{id}", [UserController::class, 'fetchuserdata'])->name('fetchuserdata');
Route::post("/updateuser/{id}", [UserController::class, 'updateuser'])->name('updateuser');


                /////////   FILTER //////
Route::get('/applyfilters', [UserController::class, 'applyFilter']);


////////  ROUTES OF YAJRA TABLE THAT COMES AFTER REDIRCT TO NEW VIEW AFTER CLICKING ON SPECIFIC COUNTRY IN GRPAH
Route::get('/countrywisedetail', [UserController::class, 'countryWiseDetail']);
Route::post('/countrywiseusers', [UserController::class, 'countryWiseUsers']);
Route::get('/getcountrywiserecords', [CountryWiseUsersController::class, 'countryWiseUsers']);





// route to export Excel file
Route::get('/export', [UserController::class, 'export'])->name('export');
