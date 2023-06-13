<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmailController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('collectuserdata', [EmailController::class, 'collectUserData'])->name('email.datacollection');
Route::get('sendemails', [EmailController::class, 'sendEmails'])->name('sendemails');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
