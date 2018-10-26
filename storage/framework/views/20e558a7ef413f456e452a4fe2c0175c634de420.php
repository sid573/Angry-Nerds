<?php $__env->startSection('content'); ?>
  
    <div class="col-sm-8 blog-main">

        <div class="blog-post" style="color: white;">


            <h2 class="blog-post-title"> 

              <a href="/posts/<?php echo e($post->id); ?>">

                <?php echo e($post->title); ?> 

              </a>
              
            </h2>

            <p class="blog-post-meta" ><?php echo e($post -> user->name); ?> , <?php echo e($post->created_at->toFormattedDateString()); ?></p>

            <?php echo e($post->body); ?>


          </div><!-- /.blog-post -->





          <hr>

          
          <div class="comments">

            <ul class="list-group">
            
            <?php $__currentLoopData = $post->comment; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <li class="list-group-item">

               <b><a href="#"><?php echo e($comment->user_name); ?></a> :</b> <?php echo e($comment->body); ?>


            </li>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </ul>

          </div>  


          <hr>

              <div class="card">

                <div class="card-block">
                  
                  <form method="POST" action="/posts/<?php echo e($post->id); ?>/comments">

                    <?php echo e(csrf_field()); ?>


                    <div class="form-group">
                      
                       <textarea name="body" placeholder="YOUR COMMENT HERE." class="form-control"></textarea>

                    </div>

                    <div class="form-group">
                      
                      <button type="submit" class="btn btn-primary">Comment</button>

                    </div>

                     </form>

                </div>         
                
              </div>  
         
        <?php echo $__env->make('layouts.er', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


   </div><!-- /.blog-main -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>