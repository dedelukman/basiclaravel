<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function Password(){
        return view('admin.profile.change-password');
    }

    public function UpdatePassword(Request $request){

        $validateData =  $request->validate([
            'current_password' => 'required',
            'password' => 'required|confirmed'
        ]);

        $hashedPassword = Auth::user()->password;
        if(Hash::check($request->current_password,$hashedPassword)){
            $user = User::find(Auth::id());
            $user->password = Hash::make($request->password);
            $user->save();
            Auth::logout();

            $notification = array(
                'message' => 'User Profile Updated Succesfully',
                'alert-type' => 'success'
            );
            
            return Redirect()->route('login')->with($notification);

        }else{

            $notification = array(
                'message' => 'Current Password is Invalid',
                'alert-type' => 'error'
            );

            return Redirect()->back()->with($notification);
        }
            
     
    }

    public function Profile(){
        if(Auth::user()){
            $user = User::find(Auth::user()->id);
            if($user){
                return view('admin.profile.index', compact('user'));
            }
            
        }
       
    }

    public function UpdateProfile(Request $request){
        $data = User::find(Auth::user()->id);
        $data->name = $request->name;
        $data->email = $request->email;

        if($request->file('profile_photo_path')){
            $file = $request->file('profile_photo_path');
            @unlink(public_path('upload/user/'.$data->profile_photo_path));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/user'),$filename);
            $data['profile_photo_path'] = $filename;
        }

        $notification = array(
            'message' => 'User Profile Updated Succesfully',
            'alert-type' => 'success'
        );


        $data->save();
            return Redirect()->back()->with($notification);
      
        
     
}

}
