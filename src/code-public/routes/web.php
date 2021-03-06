<?php

use App\Http\Controllers\produit;
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

Route::get('/index', function () {
    return view('pages.index');
});


route::get('/login',[produit::class,'login'])->name('login');
route::get('/logout',[produit::class,'logout'])->name('logout');
route::get('/produit',[produit::class,'afficher_produit']);
route::get('/detailProduit/{id}',[produit::class,'afficher_detail_produit'])->middleware('login');
route::post('/msg',[produit::class,'message_wh']);
route::post('/user',[produit::class,'userlogin']);