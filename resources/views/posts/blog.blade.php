@extends ('layouts.master')

@section('content')
  
    <div class="col-sm-8 blog-main" style="color: white;">

          @foreach($posts as $post)

            @include('posts.post')

          @endforeach

          <nav class="blog-pagination">
            <a class="btn btn-outline-primary" href="/">Move to Top</a>
            
          </nav>


   </div><!-- /.blog-main -->

@endsection
