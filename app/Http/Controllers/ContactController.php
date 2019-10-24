<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Http\Requests\ContactVerification;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function index()
    {
        $index=Contact::paginate(5);
        return view('admin.contact.index',compact('index'));
    }

    public function create()
    {
        //
    }


    public function store(ContactVerification $request)
    {
        $store=new Contact();
        $store->FullName=$request->fullname;
        $store->Email=$request->email;
        $store->Comment=$request->comment;
        $store->save();
        session()->flash('save', 'successfully saved!');
        return redirect('/');
    }


    public function show($contact)
    {
        $show=Contact::findOrFail($contact);
        return view('admin.contact.showDetails',compact('show'));
    }


    public function destroy($contact)
    {
        Contact::destroy($contact);
        session()->flash('delete', 'the selected row deleted!');
        return redirect()->route('contact.index');
    }
}
