<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

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

Route::get('/', [SiteController::class, 'index'])->name('index');
Route::get('/services', [SiteController::class, 'services'])->name('services');
Route::get('/services/{id}', [SiteController::class, 'serviceById'])->name('serviceById');
Route::post('/contact', [SiteController::class, 'createMessage'] )->name('createMessage');
Route::get('/contact', [SiteController::class, 'contact'])->name('contact');

// Route::get('/blog/{id}', [SiteController::class, 'post_detail'])->name('post_detail');
// Route::get('/post_list', [SiteController::class, 'post_list'])->name('post_list');