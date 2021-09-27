<?php

use App\Http\Controllers\ApiProdutosController;
use App\Http\Controllers\ApiCategoriaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//todos os produtos
Route::get('/produtos',[ApiProdutosController::class,'index']);

//1 produto
//Route::get('/produto/{produto}',[ApiProdutosController::class,'show']);
//1 produto
Route::get('/produto/{id}',[ApiProdutosController::class,'show']);

//buscar produto no Pesquisar
Route::get('/produtos/buscar/{nome}',[ApiProdutosController::class,'search']);


//buscar produto por categoria
Route::get('produtos/categoria/buscar/{nome}',[ApiCategoriaController::class,'search']);