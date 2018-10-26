@extends ('layouts.master')

@section('content')
  
<div class="col-sm-8 blog-main" style="color: white;">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

		<script type="text/javascript">
				

		$(document).ready(function () {

		    $.ajaxSetup({
		        headers: {
		            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		        }
		    });


			$.ajax({
		            url: "https://eonet.sci.gsfc.nasa.gov/api/v2.1/events",
		            type: "GET",

		            contentType: 'application/json; charset=utf-8',
		            success: function(resultData) {
		                var myObj = resultData;
		                var event = myObj.events;
		                var x=0;
								for (i in event) {

									var str =JSON.stringify(myObj.events[i].sources[0].url);

									var anr = document.createElement("a");
									anr.setAttribute("href", myObj.events[i].sources[0].url); 	

		   							document.getElementById("demo").innerHTML += "<div class = 'jumbotron' style = 'background-color: white ; color:black; '>" +"<h4>"+ myObj.events[i].categories[0].title +"</h4>"+ myObj.events[i].title+ "<br>" + myObj.events[i].geometries[0].date + "<br>" + "</div>" ;
								}


		               //console.log(myObj);
		            },
		            error : function(jqXHR, textStatus, errorThrown) {
		            },

		            timeout: 120000,
		        });

		});	

		</script>

		<div id="demo" class="well" style="color: yellow;"></div>


</div><!-- /.blog-main -->

@endsection
