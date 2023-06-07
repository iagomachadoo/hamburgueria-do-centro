<?php

use App\Http\Controllers\BannerController;
use App\Http\Controllers\PainelController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [SiteController::class, 'index'])->name('site.index');

// Rotas admin
Route::prefix('painel')->name('painel.')->group(function(){
    // Route::permanentRedirect('/painel', '/painel/banner');

    Route::resource('/banner', BannerController::class);
});
