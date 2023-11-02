<?php

    use App\Http\Controllers\PageController;
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

Route::get('/landing', function () {
    return view('home');
})->name('landing');

Route::get('contact', function () {
    return view('contact');
})->name('contact');

Route::get('/', [PageController::class,'nda'])->name('home');

Route::post('nda-submit', [PageController::class,'nda_submit'])->name('nda-submit');
