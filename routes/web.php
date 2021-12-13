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
/*
Route::get('/cursos', [CursoController::class,'index'])->name('cursos.index');// para indicar que quiero q la ruta acceda al metodo index de CuroController debo crearlo con este formato: Route::get('URL', [controlladora, 'metodo a acceder']);

Route::get('/cursos/create', [CursoController::class, 'create'])->name('cursos.create');//el metodo name nos permite tener un nombre identificador de la vista a la que quiero routear, permitiendo un acceso mas sencillo a ella desde el codigo

Route::post('cursos', [CursoController::class, 'store'])->name('cursos.store');

Route::get('/cursos/{curso}', [CursoController::class, 'show'])->name('cursos.show');

Route::get('cursos/{curso}/edit', [CursoController::class, 'edit'])->name('cursos.edit');

Route::put('cursos/{curso}', [CursoController::class, 'update'])->name('cursos.update');// al momento de realizar un update es recomendabel usar el metodo put y no el metodo post

Route::delete('cursos/{curso}',[CursoController::class, 'destroy'])->name('cursos.destroy'); // nuevamente, como el URL de este metodo es identico a algunos anteriores, Laravel nos ofrece la opcion de cambiar el metodo usado para mantener una url sencilla sin perder funcionalidad
*/

// Route::resource('asignaturas', CursoController::class)->parameters(['asignaturas'=>'curso'])->names('cursos');  //de esta forma se crean todas las routes automaticamente, con las convenciones que veniamos trabajando ademas de simplificar el codigo. los routes los crea con el nombre del primer parametro de esta funcion y llaman a los metodos con el mismo nombre que ya estan creados en CursosController. Al cambiar el parametro por asignaturas, es requerido agregar el metodo names, de lo contrario buscaria acceder a los metodos como asginaturas.X, generando error. El metodo parameters() cambia el nombre de las variables enviadas a los metodos de la controladora (como a edit o delete)


Route::resource('cursos', CursoController::class);
