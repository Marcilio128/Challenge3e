<?php

use App\Http\Controllers\UsuariosController;
use App\Models\User;
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

Route::get('/', [UsuariosController::class, 'index']);
Route::get('/home', [UsuariosController::class, 'index']);
Route::get('/cadastro', [UsuariosController::class, 'form']);
Route::post('/cadastrar', [UsuariosController::class, 'store']);
