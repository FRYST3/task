<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PagesController;

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

Route::get('/', [PagesController::class,'index'])->name('index');
Route::get('/article/{id}', [PagesController::class,'article'])->name('article');

Route::post('/get/articles', [MainController::class,'getArticles']);
Route::post('/add/comment', [MainController::class,'addComment']);

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
    Route::get('/login', [PagesController::class, 'admin_login'])->name('admin_login');
    Route::post('/login', [AdminController::class, 'login']);

    Route::group(['middleware' => 'admin'], function () {
        Route::get('/', [AdminController::class, 'index'])->name('admin_index');
        Route::get('/edit/article/{id}', [AdminController::class, 'article_edit']);

        Route::post('/save/article/{id}', [AdminController::class, 'article_save']);
        Route::get('/delete/article/{id}', [AdminController::class, 'article_delete']);
    });
});
