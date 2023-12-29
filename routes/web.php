<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EquipmentsController;
use App\Http\Controllers\AdditionalOptionsController;
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
});

Route::prefix('equipment')->group(function () {
    Route::post('store', [EquipmentsController::class, 'store'])->name('equipment.store');
});

Route::prefix('options')->group(function () {
    Route::post('store', [AdditionalOptionsController::class, 'store'])->name('option.store');
});

Route::post('store', [FormController::class, 'store'])->name('form.store');

Route::get('pdf/{customer_id}', [FormController::class, 'downloadPdf'])->name('download.pdf');

Route::get('new-pdf', function () {
    return view('newpdf');
});
