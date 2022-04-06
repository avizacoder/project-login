<?php

use App\Http\Controllers\UserController;
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

Route::view('home', 'home');
// Route::get('/users', [UserController::class, 'login'])->middleware('auth')->name('auth.login');
// Route::post('/users', [UserController::class, 'store'])->middleware('auth')->name('auth.store');

require_once __DIR__ . '/fortify.php';
