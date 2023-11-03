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


Route::get('/', function () {
    return view('onboarding');
})->name('onboarding');


Route::post('/onboarding-submit',[PageController::class,'onboarding_submit'])->name('onboarding-submit');



Route::get('landing', function () {
    return view('home');
})->name('home');

Route::get('contact', function () {
    return view('contact');
})->name('contact');

Route::get('nda', [PageController::class,'nda'])->name('nda');

Route::post('nda-submit', [PageController::class,'nda_submit'])->name('nda-submit');
