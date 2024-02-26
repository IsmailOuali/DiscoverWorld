<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aventure;

class FilterController extends Controller
{
    public function filterAventures(Request $request)
    {
        $destinationId = $request->input('destination_id');

        $filteredAventures = Aventure::where('destination_id', $destinationId)->get();

        return response()->json($filteredAventures);
    }

 
}
