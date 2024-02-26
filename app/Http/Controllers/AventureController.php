<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aventure;
use App\Models\Destination;
use App\Services\ImageService;

class AventureController extends Controller
{
    private $imageService;
    public function __construct (ImageService $imageService){
        $this->imageService = $imageService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aventureCount = Aventure::adventureCount(); 
        $destinationCount = Aventure::destinationCount();

        return view ("welcome",[
            "aventures" => Aventure::all(),
            "destinations" => Destination::all(),
            "aventureCount" => $aventureCount, 
            "destinationCount" => $destinationCount, 

        ]);
        
    }


    public function create()
    {
        
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            "name" => ["required"],
            "description" => ["required"],
            "destination_id" => ["required"],
        ]);
        $aventure = Aventure::create($validatedData);
        $this->imageService->store($request->file("images"), $aventure);
        return redirect("/");
    }


    public function show($id)
    {
        $aventure = Aventure::findOrFail($id);
        $destinations = $aventure->destinations;
    
        return view('show', ['aventure' => $aventure, 'destinations' => $destinations]);
    }
}
