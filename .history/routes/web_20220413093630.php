<?php

use App\Http\Controllers\ContatoController;
use App\Http\Controllers\Site\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\LoginController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

/*Route::get('/', function ()
{
    return view('home');
});*/

//Route::get('/', [ContatoController::class, 'index']);
Route::get('/', [HomeController::class, 'index'])->name('site.home');
Route::get('/login', [LoginController::class, 'index'])->name('site.login');
Route::get('/sair', [LoginController::class, 'index'])->name('site.sair');
Route::post('/login/entrar', [LoginController::class, 'entrar'])->name('site.login.entrar');

// Route::post('/contato', ['uses' => 'ContatoController@criar']);

//Route::get('/contato', [ContatoController::class, 'index']);

Route::get('/admin/cursos', [ContatoController::class, 'cursos']);
//Route::get('/admin', [ContatoController::class, 'admin']);

// Route::put('/contato', ['uses' => 'ContatoController@editar']);
//Route::get('/contato/editar', [ContatoController::class, 'editar']);
//Route::get('/contato/criar', [ContatoController::class, 'criar'])->name('contato.criar');



Route::group(['middleware' => 'auth'], function(){


    // Route::put('/admin/cursos/atualizar/{id}',['as'=>'admin.cursos.atualizar','uses'=>'Admin\CursoController@atualizar']);
    Route::put('/admin/cursos/atualizar/{id}', [ContatoController::class, 'atualizar'])->name('admin.cursos.atualizar');

    // Route::get('/admin/cursos/deletar/{id}',['as'=>'admin.cursos.deletar','uses'=>'Admin\CursoController@deletar']);
    Route::get('/admin/cursos/deletar/{id}', [ContatoController::class, 'deletar'])->name('admin.cursos.deletar');

});


