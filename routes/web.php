<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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
    return view('home');
});
Route::get('/main', function () {
    return view('app/main');
});

Route::get('/login',[LoginController::class, 'create']) -> name('login.index');

Route::get('/register',[RegisterController::class, 'create']) -> name('register.index');

Route::post('/register', [RegisterController::class, 'store']) -> name ('register.store');

Route::post('/login', [LoginController::class, 'store']) -> name('login.store');

Route::get('/logout',[LoginController::class, 'destroy']) -> name('login.destroy');