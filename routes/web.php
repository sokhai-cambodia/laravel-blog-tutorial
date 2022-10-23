<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TagController;

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
    return view('index');
})->name('home');

Route::get('/article', function () {
    return view('article');
})->name('article');

// Route::get('/tag', function() {
//     return 'this is tag page';
// });

// Route::get('/category', function() {
//     return 'this is category page';
// });

// Route::get('/blog', function() {
//     return 'this is blog page';
// });

Route::get('/tag', [DemoController::class, 'tag']);
Route::get('/category', [DemoController::class, 'category']);
Route::get('/blog', [DemoController::class, 'blog']);

Route::get('/admin/category', [CategoryController::class, 'index'])->name('admin.category.index');
Route::get('/admin/category/create', [CategoryController::class, 'create'])->name('admin.category.create');
Route::post('/admin/category/store', [CategoryController::class, 'store'])->name('admin.category.store');
Route::get('/admin/category/{id}', [CategoryController::class, 'edit'])->name('admin.category.edit');
Route::put('/admin/category/{id}', [CategoryController::class, 'update'])->name('admin.category.update');
Route::delete('/admin/category/{id}', [CategoryController::class, 'destroy'])->name('admin.category.destroy');

Route::get('/admin/tag', [TagController::class, 'index'])->name('admin.tag.index');
Route::get('/admin/tag/create', [TagController::class, 'create'])->name('admin.tag.create');
Route::post('/admin/tag/store', [TagController::class, 'store'])->name('admin.tag.store');
Route::get('/admin/tag/{id}', [TagController::class, 'edit'])->name('admin.tag.edit');
Route::put('/admin/tag/{id}', [TagController::class, 'update'])->name('admin.tag.update');
Route::delete('/admin/tag/{id}', [TagController::class, 'destroy'])->name('admin.tag.destroy');