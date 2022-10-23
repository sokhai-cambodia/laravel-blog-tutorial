<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\TagController;

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


Route::prefix('admin')->name('admin.')->group(function () {
    // Route::resource('category', CategoryController::class);
    Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
    Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
    Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');
    Route::get('/category/{id}', [CategoryController::class, 'edit'])->name('category.edit');
    Route::put('/category/{id}', [CategoryController::class, 'update'])->name('category.update');
    Route::delete('/category/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');

    Route::get('/tag', [TagController::class, 'index'])->name('tag.index');
    Route::get('/tag/create', [TagController::class, 'create'])->name('tag.create');
    Route::post('/tag/store', [TagController::class, 'store'])->name('tag.store');
    Route::get('/tag/{id}', [TagController::class, 'edit'])->name('tag.edit');
    Route::put('/tag/{id}', [TagController::class, 'update'])->name('tag.update');
    Route::delete('/tag/{id}', [TagController::class, 'destroy'])->name('tag.destroy');
});

