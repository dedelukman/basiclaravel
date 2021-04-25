<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servis;
use Illuminate\Support\Carbon;

class ServisController extends Controller
{
    public function HomeServis(){
        $servis = Servis::latest()->get();
        return view('admin.servis.index', compact('servis'));
    }


    public function AddServis(){
        return view('admin.servis.create');
    }

    public function StoreServis(Request $request){
            
        Servis::insert([
             'title' => $request->title,
             'servis1_title' => $request->servis1_title,
             'servis1_contain' => $request->servis1_contain,
             'servis2_title' => $request->servis2_title,
             'servis2_contain' => $request->servis2_contain,
             'servis3_title' => $request->servis3_title,
             'servis3_contain' => $request->servis3_contain,
             'servis4_title' => $request->servis4_title,
             'servis4_contain' => $request->servis4_contain,
             'servis5_title' => $request->servis5_title,
             'servis5_contain' => $request->servis5_contain,
             'servis6_title' => $request->servis6_title,
             'servis6_contain' => $request->servis6_contain,
             'created_at'=> Carbon::now()
         ]);
 
 
         return Redirect()->route('home.servis')->with('success', 'Servis Inserted Successfull');
    }

    public function Edit($id){
        $servis = Servis::find($id);       
        return view('admin.servis.edit', compact('servis'));

    }

    public function Update(Request $request, $id){
    
        
        Servis::find($id)->update([
                'title' => $request->title,
                'servis1_title' => $request->servis1_title,
                'servis1_contain' => $request->servis1_contain,
                'servis2_title' => $request->servis2_title,
                'servis2_contain' => $request->servis2_contain,
                'servis3_title' => $request->servis3_title,
                'servis3_contain' => $request->servis3_contain,
                'servis4_title' => $request->servis4_title,
                'servis4_contain' => $request->servis4_contain,
                'servis5_title' => $request->servis5_title,
                'servis5_contain' => $request->servis5_contain,
                'servis6_title' => $request->servis6_title,
                'servis6_contain' => $request->servis6_contain,           
                'created_at'=> Carbon::now()
           ]);
      


        return Redirect()->route('home.servis')->with('success', 'Servis Updated Successfull');
    }



    public function Delete($id){
      
        Servis::find($id)->delete();       
        return Redirect()->back()->with('success', 'Servis Permanently Deleted ');

    }
}
