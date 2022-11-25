<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\AdminController;

/*
/ Fiz essa mudança do namespace com elias que foi implementado a partir do php 5.3
/ porque assim fica menos confuso de acordo com livro php moderno de Josh Lockhat pag 33.
/*

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

Route::get('/',[HomeController::class,'index']);

Route::get('/product',[ProdutoController::class, 'index']);

Route::get('/admin/products',[AdminController::class, 'index']);

Route::get('/admin/products/edit',[AdminController::class,'edit']);