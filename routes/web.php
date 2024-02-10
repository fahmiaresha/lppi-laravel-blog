<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoriesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PortfolioController::class, 'index'])->name('index');
Route::get('/todo', [PortfolioController::class, 'todo']);

Route::get('/login', [PortfolioController::class, 'showLoginForm'])->name('login');
Route::post('/login', [PortfolioController::class, 'login']);
Route::get('/about', [PortfolioController::class, 'about']);
Route::get('/contact', [PortfolioController::class, 'contact']);

Route::get('/posts', [PostController::class, 'index']);
Route::post('/posts', [PostController::class, 'store']);
Route::post('/posts/{id}', [PostController::class, 'update']);
Route::delete('/posts/{id}', [PostController::class, 'destroy']);

Route::get('/category', [CategoriesController::class, 'index']);
Route::post('/category', [CategoriesController::class, 'store']);
Route::post('/category/{id}', [CategoriesController::class, 'update']);
Route::delete('/category/{id}', [CategoriesController::class, 'destroy']);

Route::get('/comments', [CommentsController::class, 'index']);
Route::post('/comments', [CommentsController::class, 'store']);
Route::post('/comments/{id}', [CommentsController::class, 'update']);
Route::delete('/comments/{id}', [CommentsController::class, 'destroy']);

Route::get('/blog', [BlogController::class, 'index']);


