<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

use App\Comment ; 

class CommentController extends Controller
{

	public function __construct()
	{
		$this->middleware('auth');   // for authentication:
	}



    public function store(Post $post){

        $this->validate(request(),['body' => 'required']);
        
        $post->addcomment(request('body'));

    	return back();

    	// Create new post using request data
    	// Save it to Data base
    	// Redirect to Home page.


    }
}
