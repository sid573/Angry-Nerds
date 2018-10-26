        
<div class="col-sm-3 offset-sm-1 blog-sidebar">


          <div class="sidebar-module sidebar-module-inset">
            <h4>About</h4>
            <p>A natural disaster is a major event caused by the natural processes of the Earth including extreme weather. Examples include floods, hurricanes, tornadoes, volcanic eruptions, earthquakes, tsunamis and other geologic processes. A natural disaster causes loss of life or property damage, and leaves some economic damage afterwards.
 </p>
          </div>

        <div class="sidebar-module">

            <h4>Archives</h4>

            <ol class="list-unstyled">

              @foreach ($archives as $stats)

                     <li>
                        <a href="/?month={{$stats['month']}}&year={{$stats['year']}}">

                            {{$stats['month']." ".$stats['year']}}
                            
                        </a>
                    </li>

              @endforeach

            </ol>

        </div>

          <div class="sidebar-module">
            <h4>Contact</h4>
            <ol class="list-unstyled">
              <li><a href="https://ndma.gov.in/en/">NDMA</a></li>
            </ol>
          </div>



  </div><!-- /.blog-sidebar -->