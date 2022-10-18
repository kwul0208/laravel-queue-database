<?php

use App\Http\Controllers\UserController;
use App\Jobs\SendEmailUser;
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
    App\Jobs\SendEmailUser::dispatch();
    // (new App\Jobs\SendEmailUser())->handle();
    return view('welcome');
});

Route::get('/user', [UserController::class, 'index']);
