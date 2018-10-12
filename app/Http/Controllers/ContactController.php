<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use Session;

class ContactController extends Controller
{
  public function index()
  {
    $contacts = Contact::latest()->get();
    return view('admin.contacts.index')->withContacts($contacts);
  }

    public function postMess(Request $request)
    {
      $this->validate($request, array(
        'name'=>'required|max:255',
        'body'=>'required|max:3000',
        'email'=>'required|email|max:100',
        'subj'=>'required|max:255'
      ));

      $contact = new Contact;
      $contact->name = $request->name;
      $contact->body = $request->body;
      $contact->email = $request->email;
      $contact->subj = $request->subj;

      $contact->save();


      session()->put('success','Your message Successfully Sent');

      return back();

    }

    public function show($id)
    {
      $contact = Contact::find($id);
      return view('admin.contacts.show')->withContact($contact);
    }

    public function destroy($id)
    {
      $contact = Contact::findOrFail($id);
      $contact->delete();
      return redirect('/admin/contacts');
    }

}
