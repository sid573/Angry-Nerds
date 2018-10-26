<?php $__env->startSection('content'); ?>
  
    <div class="col-sm-8 blog-main">

    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

          <script src="<?php echo e(asset('js/weather.js')); ?>"></script> 

  <div class="city ">

  <div class="container">

    <div class="city-title ">
      <span id="location"> </span>
    </div>
   
    <div class="city-weather-temperature loader">
      <span class="celsius fahrenheit-btn "></span>
      <span class="fahrenheit celsius-btn"></span>
    </div>

    <div class="city-weather-description">
      <span id="icon"></span><br>
      <span id="description"></span>
    </div>


    <div class="bottom">
      <div class="nav-info clearfix">
        <div class="add-info">
          <ul id="details">
            <li class="list-group-item">
             <span id="todayC"> </span>
              <span id="todayF"> </span>
            </li>
            <li class="list-group-item">
              <span id="tomorrowC"> </span>
              <span id="tomorrowF"> </span>
            </li>
            <li class="list-group-item">
              <span id="afterTomorrowC"> </span>
              <span id="afterTomorrowF"> </span>
            </li>
            <li class="list-group-item">
              <span id="afterAfterTomorrowC"> </span>
              <span id="afterAfterTomorrowF"> </span>
            </li>
            
          </ul>
            
        </div>  <!-- add-info -->
      </div> <!-- nav-info -->

    </div> <!-- bottom -->

  </div>
</div>



   </div><!-- /.blog-main -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>