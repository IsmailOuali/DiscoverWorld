<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Controllers\Controller;

class DestViewController extends Controller
{
    //
    public function index(){

        $destination = DB::table('destination')
        ->select("*")
        ->get();
    
        return view('welcome',['destination'=>$destination]);
        }
}