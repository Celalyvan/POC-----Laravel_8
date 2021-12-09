<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeCotroller;
use App\Http\Controllers\CursoController;

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

Route::get('/', HomeCotroller::class);

// Route::get('cursos', CursoCotroller::class); en caso de yo dejar la sentencia de esta forma Laravel buscaria automaticamente el metodo invoke de la clase CursoController. Pero siendo que puede ser llamado de varias formas, no fue creado, consecuentemente, no lo va a encontrar
Route::get('/cursos', [CursoController::class,'index']);// para indicar que quiero q la ruta acceda al metodo index de CuroController debo crearlo con este formato: Route::get('URL', [controlladora, 'metodo a acceder']);
Route::get('/cursos/create', [CursoController::class, 'create']);
Route::get('/cursos/{curso}', [CursoController::class, 'show']);

