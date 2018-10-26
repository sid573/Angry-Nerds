@extends ('layout')

	@section ('content')
	    <ul>
	        @foreach ($tasks as $task) 
	            <li> <a href="task/{{$task->id}}">
	             {{$task->body}}  
	         </a>
	            </li>
	        @endforeach
	    </ul>
	@endsection

	
