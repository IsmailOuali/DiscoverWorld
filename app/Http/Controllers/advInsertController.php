<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class adInsertController extends Controller
{
    //
    public function insertform(){
        return view('addAdv');
        }
        public function insert(Request $request){
        $name = $request->input('name');
        $description = $request->input('description');
        $photo = $request->input('photo');
        $data=array('name'=>$name,"description"=>$description,"photo"=>$photo);
        DB::table('aventure')->insert($data);
        echo "Record inserted successfully.<br/>";
        // echo '<a href = "/insert">Click Here</a> to go back.';
        }
        }