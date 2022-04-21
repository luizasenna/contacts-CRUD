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
          return view('/home', [
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
        $new = Contact::create($request->all());
		    return redirect()->intended('/home')->with('status', 'New contact created sucesfully.');


      }






  }
