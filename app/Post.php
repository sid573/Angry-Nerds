<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;

class Post extends Model
{
    //protected $fillable = ['title' , 'body'];

 	protected $guarded = [];          


    public function comment()
 	{
 		return $this->hasMany(Comment::class);
 	}


    public function user()      
 	{
 		 return $this->belongsTo(User::class);
 	}


    public function addcomment($body)
 	{

    	Comment::Create([

            'post_id'=> $this->id ,
            'body'=> $body ,
            'user_name'=> auth()->user()->name

        ]);
 	}


 	public function scopeFilter($query, $filters)

 	{
        if($month = $filters['month']){

            $query->whereMonth('created_at',Carbon::parse($month)->month);
        }

        if($year = $filters['year']){

            $query->whereYear('created_at', $year);
        }

        		
 	} 	

 	public static function archives()
 	{
 		return static::selectRaw('year(created_at) year , monthname(created_at) month , count(*) published')
                    ->groupBy('year','month')
                    ->orderByRaw('min(created_at) desc')
                    ->get()
                    ->toArray();
 	}


    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
