<?php

namespace App\Http\Controllers;

use App\Models\Equipment;
use Illuminate\Http\Request;

class EquipmentsController extends Controller
{
    public function store(Request $request)
    {
        foreach ($request->equipment_name as $key => $name) {
            $create = Equipment::create([
                'title' => $name,
                'price' => $request->equipment_price[$key]
            ]);
        }

        return json_encode([
            'Error' => false,
            'Message' => 'Equipments Stored successfuly'
        ]);
    }
}
