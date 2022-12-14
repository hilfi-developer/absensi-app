<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataKepsekController;

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
    return redirect('/login');
});

Auth::routes();

Route::group([
    'prefix' => '/admin',
    'middleware' => 'auth'
], function () {
    Route::get('/', function () {
        return redirect()->route('dashboard');
    });
    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('dashboard');
    /**
     * Data Users
     */
    Route::get('/data-kepsek', [DataKepsekController::class, 'index'])->name('datakepsek.index');
    Route::any('/data-kepsek/data', [DataKepsekController::class, 'data']);
    Route::post('/data-kepsek/{id}', [DataKepsekController::class, 'update'])->name('datakepsek.update');
});
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
