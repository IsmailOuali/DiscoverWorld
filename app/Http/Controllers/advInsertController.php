<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdvInsertController extends Controller
{
    //
    public function insertform(){
        return view('addAdv');
    }

        public function insert(Request $request){
            // $request->validate([
            //     "image" => "required"
            // ]);
        $name = $request->input('name');
        $description = $request->input('description');
        // $image = $request->input('image');
        $data=array(
            'name'=>$name,"description"=>$description,
        // "image"=>$image
    );
        DB::table('aventure')->insert($data);
        echo "Record inserted successfully.<br/>";
        echo '<a href = "/insert">Click Here</a> to go back.';
        }
        }