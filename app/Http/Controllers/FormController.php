<?php

namespace App\Http\Controllers;

use App\Models\CarInfo;
use App\Models\CustomerAdditionalOptions;
use App\Models\CustomerEquipments;
use App\Models\CustomerInfo;
use App\Models\Equipment;
use App\Models\Options;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FormController extends Controller
{
    public function store(Request $request)
    {

        $storeCustomerInfo = CustomerInfo::create([
            'date' => Carbon::parse($request->date),
            'buyer_name' => $request->buyer_name ?? '',
            'po_number' => $request->po_number ?? '',
            'contact' => $request->contact ?? '',
            'invoice_no' => $request->invoice_number ?? '',
            'address' => $request->address ?? '',
            'city' => $request->city ?? '',
            'state' => $request->state ?? '',
            'zip' => $request->zip ?? '',
            'telephone' => $request->telephone ?? '',
            'email' => $request->email ?? '',
        ]);

        $storeCarInfo = CarInfo::create([
            'customer_id' => $storeCustomerInfo->id,
            'base_car' => $request->base_car ?? '',
            'vin' => $request->vin ?? '',
            'exterior_color' => $request->exterior_color ?? '',
            'interior_color' => $request->interior_color ?? '',
            'mb_code' => $request->mb_code ?? '',
            'rep' => $request->rep ?? '',
        ]);

        if ($request->has('equipments')) {
            foreach ($request->equipments as $equipment) {
                $storeEquipments = CustomerEquipments::create([
                    'customer_id' => $storeCustomerInfo->id,
                    'equipment_id' => $equipment
                ]);
            }
        }
        if ($request->has('options')) {
            foreach ($request->options as $option) {
                $storeCustomerOptions = CustomerAdditionalOptions::create([
                    'customer_id' => $storeCustomerInfo->id,
                    'option_id' => $option
                ]);
            }
        }

        return redirect(route('download.pdf', $storeCustomerInfo->id));
    }

    public function downloadPdf($customer_id)
    {
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
        return view('pdf', compact('customerInfo', 'carInfo', 'chunked', 'customerEquipments', 'equipmentsPrice', 'options', 'customerOptions', 'customerOptionsPrice'));
    }
}
