<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\ContactForm;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Auth;

class ContactController extends Controller
{
    public function AdminContact(){
        $contacts = Contact::all();
        return view('admin.contact.index', compact('contacts'));
    }


    public function AddContact(){
        return view('admin.contact.create');
    }

    public function StoreContact(Request $request){
            
        Contact::insert([
            'address'  => $request->address,
            'email'  => $request->email,
            'phone'  => $request->phone,           
             'created_at'=> Carbon::now()
         ]);
 
 
         return Redirect()->route('admin.contact')->with('success', 'Contact Inserted Successfull');
    }

    public function Edit($id){
        $contacts = Contact::find($id);       
        return view('admin.contact.edit', compact('contacts'));

    }

    public function Update(Request $request, $id){
    
        
        Contact::find($id)->update([
                'address'  => $request->address,
                'email'  => $request->email,
                'phone'  => $request->phone,         
                'created_at'=> Carbon::now()
           ]);
      


        return Redirect()->route('admin.contact')->with('success', 'Contact Updated Successfull');
    }



    public function Delete($id){
      
        Contact::find($id)->delete();       
        return Redirect()->back()->with('success', 'Contact Permanently Deleted ');

    }


    public function Profile(){
        $contacts = DB::table('contacts')->first();
        return view('pages.contact', compact('contacts'));
    }

    public function MessageContact(){
        $messages = ContactForm::all();
        return view('admin.contact.message', compact('messages'));
    }

    public function StoreMessage(Request $request){
            
        ContactForm::insert([            
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,       
             'created_at'=> Carbon::now()
         ]);
 
         return Redirect()->back()->with('success', 'Your Message Send Successfull ');
         
    }


    public function DeleteMessage($id){
      
        ContactForm::find($id)->delete();       
        return Redirect()->back()->with('success', 'Message Permanently Deleted ');

    }


}
