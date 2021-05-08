<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomeAbout;
use App\Models\Multipic;
use Illuminate\Support\Carbon;
use Auth;


class AboutController extends Controller
{
    public function HomeAbout(){
        $abouts = HomeAbout::latest()->get();
        return view('admin.about.index', compact('abouts'));
    }


    public function AddAbout(){
        return view('admin.about.create');
    }

    public function StoreAbout(Request $request){
            
        HomeAbout::insert([
             'title' => $request->title,
             'short_dis' => $request->short_dis,
             'long_dis' => $request->long_dis,
             'created_at'=> Carbon::now()
         ]);
 
 
         return Redirect()->route('home.about')->with('success', 'About Inserted Successfull');
    }

    public function Edit($id){
        $abouts = HomeAbout::find($id);       
        return view('admin.about.edit', compact('abouts'));

    }

    public function Update(Request $request, $id){
    
        
            HomeAbout::find($id)->update([
                'title' => $request->title,
                'short_dis' => $request->short_dis,
                'long_dis' => $request->long_dis,               
                'created_at'=> Carbon::now()
           ]);
      


        return Redirect()->route('home.about')->with('success', 'About Updated Successfull');
    }



    public function Delete($id){
      
        HomeAbout::find($id)->delete();       
        return Redirect()->back()->with('success', 'About Permanently Deleted ');

    }


    public function Portfolio(){
        $images = Multipic::all();
        return view('pages.portfolio', compact('images'));
    }
}
