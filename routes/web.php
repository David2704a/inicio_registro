<?php

use App\Http\Controllers\FileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

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

 
// Route::get('/login-google', function () {
//     return Socialite::driver('google')->redirect();
// });
 
// Route::get('/auth/callback', function () {
//     $user = Socialite::driver('google')->user();
//     dd($user);
//     // $user->token
// });

Route::get('/', [HomeController::class, 'index']); 

////usuarios
Route::resource('/usuarios', UserController::class);


//registro
Route::get('/register', [RegisterController::class, 'show']);
Route::post('/register', [RegisterController::class, 'register']); 
//Inicio de session
Route::get('/login', [LoginController::class, 'show']);
Route::post('/login', [LoginController::class, 'login']); 
Route::get('/logout', [LogoutController::class, 'logout']); 

///HOME
Route::get('/home', [HomeController::class, 'index']); 
Route::post('/home', [HomeController::class, 'index']); 

/*
=============================
PERFIL
=============================
*/
Route::get('/perfil', [HomeController::class, 'perfil']); 
Route::post('/perfil', [HomeController::class, 'perfil']); 

///FOTOS
Route::resource('/imgs', FileController::class)->names('files');

