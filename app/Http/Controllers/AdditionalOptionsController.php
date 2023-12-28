<?php

namespace App\Http\Controllers;

use App\Models\Options;
use Illuminate\Http\Request;

class AdditionalOptionsController extends Controller
{
    public function store(Request $request)
    {
        foreach ($request->option_name as $key => $name) {
            $create = Options::create([
                'title' => $name,
                'price' => $request->option_price[$key]
            ]);
        }

        return json_encode([
            'Error' => false,
            'Message' => 'Option Stored successfuly'
        ]);
    }
}
