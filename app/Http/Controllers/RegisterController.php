<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use App\Mail\Welcome;

class RegisterController extends Controller
{
    public function create()
    {
    	return view('register.create');
    }

    public function store()
    {
    	// validate:

    	$this->validate(request(),[

            'name'=> 'required',
            'city'=> 'required',
    		'country'=> 'required',
    		'email'=> 'required',
    		'password' => 'required|confirmed'

    	]);

    	// create user :

    	$user = User::Create([


            'name' => request('name') , 
            'city' => request('city') , 
    		'country' => request('country') , 
    		'email' => request('email'),
    	    'password'=> bcrypt(request('password'))

    	]);

    	// sign them in:

    	auth()->login($user);

        \Mail::to($user)->send(new Welcome($user));          // to send email to user.


        session()->flash('message','Thanks so much for Signing Up !');

    	// redirect them:

    	return redirect()->home();
    }
}
