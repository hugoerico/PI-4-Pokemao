<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\TipoController;
use App\Http\Controllers\UsuarioController;

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
    return redirect('/login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::group(['middleware'=>'auth'], function(){
//produto

Route::resource('/produto', ProdutosController::class);

//lixeira Produto
Route::get('/lixeira/produto', [ProdutosController::class, 'lixeira'])->name('produto.lixeira');

//restaurar Produto
Route::patch('/produto/restaurar/{id}', [ProdutosController::class, 'restaurar'])->name('produto.restaurar');

//categoria

Route::resource('/categoria', CategoriasController::class);

//tipo

Route::resource('/tipo', TipoController::class);

//usuario
Route::get('/usuarios', [UsuarioController::class, 'usuarios'])->name('usuario.usuarios');
Route::get('/usuarios/edit/{id}', [UsuarioController::class, 'editar'])->name('usuario.editar');
Route::patch('/usuario/updater/{id}', [UsuarioController::class, 'updater'])->name('usuario.updater');

});