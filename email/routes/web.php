<?php

use App\Http\Controllers\EmailController;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\AdminController;
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
Route::get('/email', [EmailController::class, 'index']);

Route::get('/email/{name_email}', [EmailController::class, 'show']);

Route::view('/createEmail', 'email.emailCreate');

Route::get('/createWebsite', [EmailController::class, 'give']);

Route::get('/website', [WebsiteController::class, 'index']);

Route::resource('emails', EmailController::class);

Route::resource('websites', WebsiteController::class);

Route::get('/email/remove/{id}', [EmailController::class, 'destroy']);

Route::get('/website/remove/{id}', [WebsiteController::class, 'destroy']);

Route::post('/email/create/store', [EmailController::class, 'store']);

Route::post('/website/create/store', [WebsiteController::class, 'store']);

Route::get('/website/edit/{id}', [WebsiteController::class, 'edit']);

Route::post('/website/update/{id}', [WebsiteController::class, 'update']);


Route::post('check', [AdminController::class, 'check']);

Route::view('/admin', 'admin');

Route::view('/guide', 'guide');

Route::get('/', [EmailController::class, 'indexUser']);

Route::get('/websiteUser', [WebsiteController::class, 'indexUser']);