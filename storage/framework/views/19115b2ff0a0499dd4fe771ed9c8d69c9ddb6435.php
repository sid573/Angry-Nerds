<!DOCTYPE html>

<html lang="en">

  <head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">

    <meta name="author" content="">

    

    <title> </title>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

          <script src="<?php echo e(asset('js/weather.js')); ?>"></script> 


    

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

   
    <!-- Custom styles for this template -->
    <link href="<?php echo e(asset('css/blog.css')); ?>" rel="stylesheet">

  </head>

  <body>

   <?php echo $__env->make('layouts.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


   <?php if($flash = session('message')): ?>

   <div id="flash-message" class="alert alert-success" role="alert" >
     
      <?php echo e($flash); ?>


   </div>  

   <?php endif; ?> 

    <div class="blog-header">

      <div class="container">

        <h1 class="blog-title"> RESCUER </h1>

        <p class="lead blog-description"> <strong>We cannot stop natural disasters but we can arm ourselves with knowledge ! </strong></p>


      <div style="position: fixed; top:100px ; left:1500px ; background-color: black;" class="glyphicon glyphicon-cloud">

     <b style="color: white;">TEMPERATURE :</b>  <br>
      <div class="city-weather-temperature loader" style="color: white;">
        <span class="celsius fahrenheit-btn "></span>
        <span class="fahrenheit celsius-btn"></span>
      </div>
      <b style="color: white;">SKY:</b>  <br>
      <div class="city-weather-description" style="color: white;">
        <span id="description"></span>
      </div>
    </div>


      </div>

    </div>

    <div class="container">

      <div class="row">

        

            <?php echo $__env->yieldContent('content'); ?>
          
            <?php echo $__env->make('layouts.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        
        

      </div><!-- /.row -->

    </div><!-- /.container -->

    <?php echo $__env->make('layouts.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


  </body>


</html>
