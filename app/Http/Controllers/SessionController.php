<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{

	public function __construct()
	{
		$this->middleware('guest')->except(['destroy']);
	}



    public function create()
    {
    	return view('sessions.create');
    }

    public function store()
    {
    	// Attempt to authenticate

    	if(! auth()->attempt(request(['email','password']))){

    		return back();
    	}
    	// if not return back

    	// if so sign in

    	return redirect()->home();

    	//redirect to home page 
    }


    public function destroy()
    {
    	auth()->logout();

        session()->flash('message' , 'Successfully Logged Out !');

    	return redirect()->home();
    }
}
