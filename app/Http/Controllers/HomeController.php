<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactList;

class HomeController extends Controller
{
    //
    public function index()
    {

        $data = ContactList::all();
        // dd($data);
        return view('home.index')->with(['data' => $data]);
    }


    public function createContact()
    {
        return view('home.form');
    }

    public function storeFormData(Request $request){

        $validatedData = $request->validate([
            'fname' => ['required','min:2',' max:60'],
            'lname' => ['required', 'min:2', ' max:60'],
            'email' => ['required'],
            'address' => ['required'],
            'phone' => ['required'],
            'nrc' => ['required'],
        ]);

        // dd($validatedData);

        ContactList::create($validatedData);

        return redirect()->route('home')->with('success', 'successfully created a contact Yey!');
    }
}
