<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Controllers\Controller;

class DestinationViewController extends Controller
{
    //
    public function index(){

        $destination = DB::table('destination')
        ->select("*")
        ->get();
    
        return view('addAdv',['destination'=>$destination]);
        }
}