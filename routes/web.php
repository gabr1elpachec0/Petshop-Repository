<?php

use App\Http\Controllers\PetshopController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
Route::get('/', [PetshopController::class, 'inicio']);

// Rota que acessa a home
Route::get('/principal', [PetshopController::class, 'principal']);

// Rota que acessa o banho e tosa
Route::get('/banhoTosa', [PetshopController::class, 'banhoTosa']);

// Rota que acessa os dados do banho e tosa
Route::post('/dataBanhoTosa', [PetshopController::class, 'dataBanhoTosa']);

// Rotas de Listagem de produtos
Route::get('/produtos', [PetshopController::class, 'mostrarProdutos'])->name('produtos');

//Rotas de Cadastro produtos
Route::get('/cadastroProdutos', [PetshopController::class, 'cadastrarProdutos'])->name('cadastroProdutos');
Route::post('/insereProdutos', [PetshopController::class, 'insereProdutos']);

// Rotas de Edição de produtos
Route::get('/editaProdutos/{id}', [PetshopController::class, 'editaProdutos'])->name('editaProdutos');
Route::post('/atualizaProdutos/{id}', [PetshopController::class, 'atualizaProdutos'])->name('atualizaProdutos');

// Rota apaga Produtos
Route::get('/apagaProdutos/{id}', [PetshopController::class, 'apagaProdutos'])->name('apagaProdutos');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

