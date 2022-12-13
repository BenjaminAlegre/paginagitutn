<?php

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

//GET, POST, PUT, DELETE, PATCH -> VERBOS HTTP
Route::get('/', function () {
    return "Hola Mundo!";
});
/*
Route::resource('home', \App\Http\Controllers\HomeController::class);
Route::resource('aceite', [\App\Http\Controllers\HomeController::class, 'viewAceite']);
Route::resource('conos', [\App\Http\Controllers\HomeController::class,'viewContact']);
Route::resource('contact', [\App\Http\Controllers\HomeController::class,'viewFooter']);
Route::resource('footer', [\App\Http\Controllers\HomeController::class,'viewFooter']);
Route::resource('index', [\App\Http\Controllers\HomeController::class,'viewIndex']);
Route::resource('product', [\App\Http\Controllers\HomeController::class,'viewProduct']);
Route::resource('sagrada', [\App\Http\Controllers\HomeController::class,'viewSagrada']);
Route::resource('soja', [\App\Http\Controllers\HomeController::class,'viewSoja']);
Route::resource('todos', [\App\Http\Controllers\HomeController::class,'viewTodos']);
Route::resource('tradicional', [\App\Http\Controllers\HomeController::class,'viewTradicional']);
Route::resource('vela', [\App\Http\Controllers\HomeController::class,'viewVela']);
Route::resource('velon ', [\App\Http\Controllers\HomeController::class,'viewVelon']);
*/
Route::resource('home', \App\Http\Controllers\HomeController::class);
Route::get('/aceite.blade.php', [\App\Http\Controllers\HomeController::class, 'viewAceite']);
Route::get('/conos.blade.php', [\App\Http\Controllers\HomeController::class,'viewConos']);
Route::get('/contact.blade.php', [\App\Http\Controllers\HomeController::class,'viewContact']);
Route::get('/footer.blade.php', [\App\Http\Controllers\HomeController::class,'viewFooter']);
Route::get('/index.blade.php', [\App\Http\Controllers\HomeController::class,'viewIndex']);
Route::get('/product.blade.php', [\App\Http\Controllers\HomeController::class,'viewProduct']);
Route::get('/sagrada.blade.php', [\App\Http\Controllers\HomeController::class,'viewSagrada']);
Route::get('/soja.blade.php', [\App\Http\Controllers\HomeController::class,'viewSoja']);
Route::get('/todos.blade.php', [\App\Http\Controllers\HomeController::class,'viewTodos']);
Route::get('/tradicional.blade.php', [\App\Http\Controllers\HomeController::class,'viewTradicional']);
Route::get('/vela.blade.php', [\App\Http\Controllers\HomeController::class,'viewVela']);
Route::get('/velon.blade.php ', [\App\Http\Controllers\HomeController::class,'viewVelon']);

Route::resource('tecnicos', \App\Http\Controllers\TecnicosController::class)
    ->middleware('auth')
    ->middleware('can:verificar_apellido');

Route::resource('login', \App\Http\Controllers\LoginController::class)
    ->only(['index', 'store']);

Route::post('logout', [\App\Http\Controllers\LoginController::class, 'destroy']);
