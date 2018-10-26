<?php $__env->startSection('content'); ?>
           <div class="col-sm-8 blog-main">
  
           <h1>Feedback</h1>

           <hr>

           <form>
                    <div class="form-group">

                      <label for="title">Title:</label>
                      <input type="text" class="form-control" id="title" name="title">

                    </div>


                    <div class="form-group">

                      <label for="body">Body:</label>
                      <input type="text" class="form-control" id="body" name="body">

                    </div>
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
            </form>

         </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>