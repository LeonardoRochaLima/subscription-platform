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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

//Post Routes
Route::resource('posts', 'PostController');
Route::get('posts', 'PostController@index')->name('posts.index');
Route::post('/posts/create', 'PostController@store');
Route::post('posts/{post}/update', 'PostController@update');
Route::post('/posts/{post}/deletePost', 'PostController@destroy');
Route::post('/cadastros/{empresa}/excluirCadastro', 'EmpresaController@excluirCadastro')->name('cadastroEmpresa.excluirCadastro');

//Site Routes
