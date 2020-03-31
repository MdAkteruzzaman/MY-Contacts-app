<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
class ContactController extends Controller
{
    public function index()
    {
      $contacts = Contact::paginate(3);

      return view( 'welcome',compact('contacts'));
    }
    public function create()
    {
      return view('create');
    }
    public function store(Request $request)
    {
      $this->validate($request,[
        'firstname' => 'required',
        'lastname' => 'required',
        'address' => 'required',
        'email' => 'required',
        'phone' => 'required',
      ]);

      $contact = new Contact;
      $contact->first_name = $request->firstname;
      $contact->last_name  = $request->lastname;
      $contact->address = $request->address;
      $contact->email = $request->email;
      $contact->phone = $request->phone;
      $contact->save();
      return redirect(route('home'))->with('successMsg', 'Contact Information Successfully Added');

    }

    public function edit($id)
    {
      $contact = Contact::find($id);
      return view('edit',compact('contact'));
    }

    public function update(Request $request,$id)
    {
      $this->validate($request,[
        'firstname' => 'required',
        'lastname' => 'required',
        'address' => 'required',
        'email' => 'required',
        'phone' => 'required',
      ]);
      $contact = Contact::find($id);
      $contact->first_name = $request->firstname;
      $contact->last_name  = $request->lastname;
      $contact->address = $request->address;
      $contact->email = $request->email;
      $contact->phone = $request->phone;
      $contact->save();
      return redirect(route('home'))->with('successMsg', 'Contact Information Successfully Updated');
    }

    public function delete($id)
   {
      Contact::find($id)->delete();
       return redirect(route('home'))->with('successMsg','Contact Information Successfully Deleted');
   }
}
