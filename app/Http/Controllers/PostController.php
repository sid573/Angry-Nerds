<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

use Carbon\Carbon;

class PostController extends Controller
{

	public function __construct()
	{
		$this->middleware('auth')->except(['blog','show']);   // for authentication:
	}

    public function blog(){

        //dd(request(['month'])==NULL || request(['year'])==NULL);

        if(request(['month'])!=NULL || request(['year'])!=NULL){

            $posts =Post::latest()
                ->filter(request(['month','year']))
                ->get();

        }

        else{

            $posts =Post::latest()->get();
        }


        $archives = Post::archives();

        //sreturn $archives;
    	return view('posts.blog' , compact('posts'));
    }



    public function create(){

    	return view('posts.create');
    }


    public function store(){

/*    	$post = new Post; 									// one of the way  :)
    	$post->title = request('title');
    	$post->body = request('body');
    	$post->save();
*/
    	$this->validate(request(),[

    			'title'=>'required',
    			'body'=>'required'
    	]);

    	Post::Create([

    		'user_id' => auth()->user()->id ,
    		'title' => request('title'),
    		'body' => request('body')

    	]);

        session()->flash('message' , 'Your Blog has been Published !');

    	return Redirect('/');

    	// Create new post using request data
    	// Save it to Data base
    	// Redirect to Home page.


    }


    public function show($id)
    {
    	$post = Post::find($id);

        $archives = Post::selectRaw('year(created_at) year , monthname(created_at) month , count(*) published')
                    ->groupBy('year','month')
                    ->orderByRaw('min(created_at) desc')
                    ->get()
                    ->toArray();

    	return view('posts.show' , compact('post', 'archives'));

    }

    public function map()
    {
        return view('maps');
    } 


   

    public function gdline()
    {
        return view('gdline');
    }


    public function vdo()
    {
        return view('video');
    }


}
