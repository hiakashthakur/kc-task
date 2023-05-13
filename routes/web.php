<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;

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
});

// Route::get('/dashboard', function () {return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::get('/dashboard', [OrderController::class, 'dashboard'])->middleware(['auth'])->name('dashboard');;
Route::post('create-order', [OrderController::class, 'createOrder'])->middleware(['auth']);
Route::get('edit-order/{id}', [OrderController::class, 'editOrder'])->middleware(['auth']);
Route::post('edit-order/{id}', [OrderController::class, 'updateOrder'])->middleware(['auth'])->name('update.order');
Route::DELETE('delete-order/{id}', [OrderController::class, 'deleteOrder'])->middleware(['auth']);

require __DIR__.'/auth.php';
