<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
//     return view('clients.iframe');
// });

Route::prefix('/web') -> group(function () {
    Route::get('/', [UserController::class, 'home'])->name('home');

    Route::get('/index1', [UserController::class, 'showDashboard1'])->name('web.index1');

    Route::get('index2', [UserController::class, 'showDashboard2'])->name('web.index2');

    Route::get('simple', [UserController::class, 'showSimpleTables'])->name('web.simple');

    Route::get('data', [UserController::class, 'showDataTables'])->name('web.data');
});

