<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

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
    return view('welcome');
})->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/alle-autos', function () {
        return view('layouts.alle-autos');
    })->name('alle-autos');

    Route::get('/mijn-aanbod', function () {
        return view('layouts.mijn-aanbod');
    })->name('mijn-aanbod');

    Route::get('/aanbod-plaatsen', function () {
        return view('layouts.aanbod-plaatsen');
    })->name('aanbod-plaatsen');

    // routes die form doen submitten
    Route::post('/aanbod-plaatsen/submit', [FormController::class, 'submitForm'])->name('aanbod.submit');

    Route::post('/next-page/submit', [FormController::class, 'SaveToDB'])->name('aanbod.toDB');
    // rout om de kenteken data in de volgende pagina in te laden
    Route::get('/next-page', [FormController::class, 'showNextPage'])->name('next-page.show');
});

Route::get('test', function() {return view('test');});

require __DIR__.'/auth.php';
