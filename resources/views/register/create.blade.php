@extends ('layouts.master')

@section('content')
  
    <div class="col-sm-8 blog-main">

    	<h1><u>Sign Up: </u></h1>

    	<form method="POST" action="/register">
    		{{csrf_field()}}
    		 
            <div class="form-group">
                
                <label for="name">Name:</label>
                <input class="form-control" type="text" id="name" name="name" placeholder="Your Name" required>

            </div>   

            <div class="form-group">
                
                <label for="city">City:</label>
                <input class="form-control" type="text" id="city" name="city" placeholder="Your City" required>

            </div>   

      		<div class="form-group">
    			
 				<label for="country">Country:</label>
 				<input class="form-control" type="text" id="country" name="country" placeholder="Your Country" required>

            </div>
    		
            
            


    		<div class="form-group">
    			
 				<label for="email">Email:</label>
 				<input class="form-control" type="email" id="email" name="email" placeholder="Enter Email" required>

    		</div>

    		<div class="form-group">
    			
 				<label for="password">Password:</label>
 				<input class="form-control" type="password" id="password" name="password" placeholder="Enter Password" required>

    		</div>


    		<div class="form-group">
    			
 				<label for="password_confirmation">Confirm Password:</label>
 				<input class="form-control" type="password" id="password_confirmation" name="password_confirmation" placeholder="Enter Password" required>

    		</div>


            <div class="form-group">
                      
              	<button type="submit" class="btn btn-primary">Register</button>

            </div>

    	</form>

    	@include('layouts.er')


   </div><!-- /.blog-main -->

@endsection