@extends ('layouts.master')

@section('content')
  
    <div class="col-sm-8 blog-main">

        <div class="blog-post" style="color: white;">


            <h2 class="blog-post-title"> 

              <a href="/posts/{{$post->id}}">

                {{$post->title}} 

              </a>
              
            </h2>

            <p class="blog-post-meta" >{{ $post -> user->name}} , {{$post->created_at->toFormattedDateString()}}</p>

            {{$post->body}}

          </div><!-- /.blog-post -->





          <hr>

          
          <div class="comments">

            <ul class="list-group">
            
            @foreach($post->comment as $comment)

            <li class="list-group-item">

               <b><a href="#">{{$comment->user_name}}</a> :</b> {{$comment->body}}

            </li>

            @endforeach

            </ul>

          </div>  


          <hr>

              <div class="card">

                <div class="card-block">
                  
                  <form method="POST" action="/posts/{{$post->id}}/comments">

                    {{ csrf_field() }}

                    <div class="form-group">
                      
                       <textarea name="body" placeholder="YOUR COMMENT HERE." class="form-control"></textarea>

                    </div>

                    <div class="form-group">
                      
                      <button type="submit" class="btn btn-primary">Comment</button>

                    </div>

                     </form>

                </div>         
                
              </div>  
         
        @include ('layouts.er')


   </div><!-- /.blog-main -->

@endsection
