<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
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

Route::middleware(['auth'])->group(function () {

	Route::get('/', [HomeController::class, 'index'])->name('home');

	Route::name('post.')->group(function () {

		Route::prefix('post')->group(function () {
		    Route::get('add', [PostController::class, 'index'])->name('add');
		    Route::post('add', [PostController::class, 'add'])->name('add.act');
		});

	});

});


require __DIR__.'/auth.php';
