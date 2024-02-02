<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Destination;
use App\Http\Controllers\Controller;

class DestinationViewController extends Controller
{
    //
    public function index(){

        $destinations = Destination::all();
    
        return view('addAdv',['destinations'=>$destinations]);
        }
}