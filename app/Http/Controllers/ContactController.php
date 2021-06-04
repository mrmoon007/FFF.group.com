<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\ContactForm;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function adminContact()
    {
        $contacts=Contact::all();
        return view('admin.contacts.index',compact('contacts'));
    }

    public function adminAddContact()
    {
        return view('admin.contacts.create');
    }

    public function adminStoreContact(Request $request)
    {
        Contact::insert([
            'email' => $request->email,
            'address' => $request->address,
            'phone' => $request->phone,
            'created_at' => Carbon::now()
        ]);

        return Redirect()->route('admin.contact')->with('success','Contact Inserted Successfully');
    }

    public function adminEditContact($id){
        $contacts = Contact::find($id);
        return view('admin.contacts.edit',compact('contacts'));
    }

    public function adminUpdateContact(Request $request, $id){
        //return $request;
        $update = Contact::find($id)->update([
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,

        ]);

        return Redirect()->route('admin.contact')->with('success','Contact Updated Successfully');
    }


    public function adminDeleteContact($id){
        $delete = Contact::find($id)->Delete();
        return Redirect()->back()->with('success','Contact Deleted Successfully');
    }

    public function contact()
    {
        $contacts=Contact::get()->first();
        return view('pages.contact',compact('contacts'));
    }

    public function contactForm(Request $request)
    {
        ContactForm::insert([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
            'created_at' => Carbon::now()
        ]);

        return Redirect()->route('contact')->with('success','Your Message Send Successfully');
    }
    
    public function adminMessageContact(){
        $messages = ContactForm::all();
        return view('admin.contacts.message',compact('messages'));
    }

    public function adminDeleteMessageContact($id){
        $delete = ContactForm::find($id)->Delete();
        return Redirect()->back()->with('success','Contact Deleted Successfully');
    }
}
