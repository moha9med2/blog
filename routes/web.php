<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::prefix('admin')->group(function () {

Route::get('/home', function(){
    return view('pages.home');
})->name('home');
Route::get('/articles2', [ArticleController::class,'index'] )->name('articles.articles');

});


Route::get('/articles/create', [ArticleController::class,'create'] )->name('articles.create');
Route::post('/articles/store', [ArticleController::class,'store'] )->name('articles.store');


Route::get('/category/{id}',[CategoryController::class,'show'])->name('categories');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
