<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\User;
use App\Models\Contact;
use Illuminate\Support\Facades\DB;


class ContactsController extends Controller
{

      public function __construct()
      {
        //  $this->middleware('auth');
      }

      public function home()
      {
          $contacts = Contact::all();
          return view('/index', [
            'contacts' => $contacts
          ]);
      }

      public function show(int $id){

          $contact = Contact::find($id);
          return view('/contacts/index', [
            'contact' => $contact
          ]);
      }

      public function create(Request $request){

        $this->validate($request, [
             'name' => 'required|min:6',
             'email' => 'required|email|unique:contacts,email',
             'contact' => 'required|numeric|digits:9|unique:contacts,contact'

         ]);


        $new = Contact::create($request->all());
		    return redirect()->intended('/home')->with('status', 'New contact created sucesfully.');


      }

      public function edit(int $id){
        $contact = Contact::findOrFail($id);
        return view('/contacts/edit', [
          'contact' => $contact
        ]);

      }

      public function update(Request $request){
        $this->validate($request, [
             'name' => 'required|min:6',
             'email' => 'required|email',
             'contact' => 'required|numeric|digits:9'

         ]);

        $contact = Contact::findOrFail($request->id);

        $contact->fill($request->all());
        $contact->save();

        return redirect()->intended('/home')->with('status', 'Contact updated sucesfully.');

      }

      public function delete(int $id){

        Contact::findOrFail($id)->delete();
        return redirect()->intended('/home')
          ->with('status', 'Contact softly deleted sucesfully.');

      }





  }
