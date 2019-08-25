<?php

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

Route::resource('products', 'ProductController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/produto', 'HomeController@produto')->name('produto');

Route::post('/cadastroProduto', 'HomeController@cadastroProduto')->name('cadastroProduto');

Route::get('/alterarProduto', 'HomeController@alterarProduto')->name('alterarProduto');

Route::get('/verProdutos', 'HomeController@verProdutos')->name('verProdutos');
