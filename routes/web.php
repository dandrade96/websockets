<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\PageController;
use Inertia\Inertia;
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

Route::get('/', [PageController::class, 'welcome'])->name('Welcome');

Route::group(['middleware' => ['auth:sanctum', config('jetstream.auth_session'), 'verified',]], function(){
    Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');
    Route::get('/chat', [PageController::class, 'chat'])->name('Chat'); 
});

