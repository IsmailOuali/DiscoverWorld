<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
  
class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): View
    {
        return view('addAdv');
    }
        
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'image' => 'required',
        ]);
        
        $imageName = time().'.'.$request->image->extension();  
         
        $request->image->move(public_path('images'), $imageName);
      
        DB::table('student_details')->insert($data);

        
        return back()
                    ->with('success', 'You have successfully upload image.')
                    ->with('image', $imageName); 
    }
}