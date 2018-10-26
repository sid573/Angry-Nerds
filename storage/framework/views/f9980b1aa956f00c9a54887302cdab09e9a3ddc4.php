    <div class="blog-masthead" style="position: relative;">
      <div class="container">
        <nav class="nav blog-nav">
          <a class="nav-link active" href="/">Home</a>
          <a class="nav-link" href="/posts/create">Publish</a>
          <a class="nav-link" href="/map">Location</a>
          <a class="nav-link" href="/guideline">Guidelines</a>
          <a class="nav-link" href="/video">Help</a>

          <a class="nav-link" href="/data">Updates</a>


          <?php if(!Auth::check()): ?>
          <div class="nav-link ml-auto" >

          <a  href="/login" style="color: white;">Sign in</a>
            &nbsp;&nbsp;
          <a  href="/register" style="color: white;">Sign up</a>    

        </div>
          <?php endif; ?>

          

          <?php if(Auth::check()): ?>

                 <div class="nav-link ml-auto" >

                 <a  href="#" style="color: white;"><?php echo e(Auth::user()->name); ?></a>
                       &nbsp;&nbsp;
                 <a  href="/logout" style="color: white;">Logout</a>    
                   
                </div>

            


          <?php endif; ?>

          
        </nav>
      </div>
    </div>