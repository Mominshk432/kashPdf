<?php

use App\Models\CarInfo;
use App\Models\CustomerAdditionalOptions;
use App\Models\CustomerEquipments;
use App\Models\CustomerInfo;
use App\Models\Equipment;
use App\Models\Options;
use Illuminate\Support\Facades\DB;
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

Route::get('new-pdf/{customer_id}', function ($customer_id = 1) {
    $chunked = "";
    $customerInfo = CustomerInfo::where('id', $customer_id)->first();
    $carInfo = CarInfo::where('customer_id', $customerInfo->id)->first();
    $numberOfParts = 3;
    $records = DB::table('equipment')->get();
    $chunkSize = ceil($records->count() / $numberOfParts);
    $chunked = $records->chunk($chunkSize);
    $customerEquipments = CustomerEquipments::where('customer_id', $customer_id)->pluck('equipment_id')->toArray();
    $equipmentsPrice = Equipment::whereIn('id', $customerEquipments)->sum('price');
    $options = Options::get();
    $customerOptions = CustomerAdditionalOptions::where('customer_id', $customer_id)->pluck('option_id')->toArray();
    $customerOptionsPrice = Options::whereIn('id', $customerOptions)->sum('price');
    return view('newpdf', compact('customerInfo', 'carInfo', 'chunked', 'customerEquipments', 'equipmentsPrice', 'options', 'customerOptions', 'customerOptionsPrice'));

});
