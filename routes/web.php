<?php


use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\PerfilController;
use Illuminate\Support\Facades\Auth;
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
/*HOME*/
Route::get("/",HomeController::class)->name("home");

/*POST*/
Route::resource("post", PostController::class);

/*REGISTRAR*/
Route::get("usuario/registrar",[RegisterController::class,"registrar"])->name("usuario.registrar");
Route::post("usuario/registrado",[RegisterController::class,"create"])->name("usuario.crear");

/*LOGIN*/
Route::get("usuario/login",[LoginController::class,"index"])->name("usuario.login");
Route::post("usuario/loguearse",[LoginController::class,"login"])->name("usuario.loguearse");
Route::get("usuario/logout",[LoginController::class,"logout"])->name("usuario.logout");

/*USUARIO*/
Route::resource("usuario", UsuarioController::class);

/*PERFIL*/
Route::get("perfil",[PerfilController::class,"posts"])->name("perfil.posts");

/*CATEGORIAS*/
Route::resource('categoria', CategoriaController::class);

/*AUTH*/
Auth::routes();
