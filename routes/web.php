<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Livewire\Orders;

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

Route::get('/', Orders::class);
Route::get('orders/{order}', [OrderController::class, 'show'])->name('show');

require __DIR__.'/auth.php';
