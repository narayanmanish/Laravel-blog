<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\admin\adminController;
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
})->name('home');




Route::get('/posts', [PostController::class, 'index'])->name('post.index');
//Route::resource('post', PostController::class);


Route::get('/post/create', [PostController::class, 'create'])->middleware('auth')->name('post.create');
Route::post('/post/create', [PostController::class, 'store'])->middleware('auth')->name('post.store');
Route::get('/dashboard1', [PostController::class, 'dashboard'])->middleware('auth')->name('post.dashboard');
Route::get('/profile', [adminController::class, 'index'])->middleware('auth')->name('post.profile');
Route::post('/profile', [adminController::class, 'update'])->middleware('auth')->name('post.profile');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
