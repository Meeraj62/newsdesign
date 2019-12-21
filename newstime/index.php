<?php include 'inc/tophead.php' ?>

  <div class="container-fluid">

    <!-- Top ko nav begins -->
    <!-- <div class="row">
      
      <div class="col-lg-6 col-sm-12">
        <img src="" alt="" class="">
      </div>
    
      <div class="col-lg-6 col-sm-12">
      </div>
    </div> -->
    <!-- Top ko nav Ends -->

    <!-- Second navbar begins here -->
      <?php include 'inc/navbar.php' ?>
    <!-- Second navbar ends here -->
    
    <div class="col-sm-12 col-md-12 pt-2">
     <div class="row">
        <!-- Newsticker Begins -->
        <div class="col-md-6">
          <marquee behavior="scroll" direction=""> News TIcker Moves here from right to left</marquee>
          <marquee behavior="scroll" direction=""> News TIcker Moves here from right to left</marquee>
          <marquee behavior="scroll" direction=""> News TIcker Moves here from right to left</marquee>
          <marquee behavior="scroll" direction=""> News TIcker Moves here from right to left</marquee>
          <marquee behavior="scroll" direction=""> News TIcker Moves here from right to left</marquee>
          <marquee behavior="scroll" direction=""> News TIcker Moves here from right to left</marquee>
         
        </div>
        <!-- Newsticker Ends -->

        <!-- Advertisement Section -->
        <div class="col-md-6">
          <img src="img/order.gif" alt="" width="100%" height="150px">
        </div>
        <!-- Advertisement Section Ends -->

      </div>
    </div>
  
  </div>

    <div class="container-fluid pt-3">

    
      <div class="row">
        
        <!-- for all posts beginning -->

        <?php include 'inc/all-posts.php'; ?>

        <!-- for all posts end -->

        <!-- for categories beginning -->

        <?php include 'inc/categories.php'; ?>

        <!-- for categories end -->

      </div>   <!-- End of row --> 

      <hr>

      <div class="row">
        <!-- for popular posts beginning -->

        <?php include 'inc/popular-posts.php'; ?>

        <!-- for popular posts end -->

        <!-- for popular news beginning -->

        <?php include 'inc/popular-news.php'; ?>

        <!-- for popular news end -->
    
      </div>   <!-- End of row --> 
    
      <hr>

        <div class="row">
          
          <?php include 'inc/carousel.php' ?>

          <?php include 'inc/tags.php' ?>

        </div> <!-- End of row -->

        <hr>

        <!-- Row for advertisement Begins-->
        <div class="row pt-2">
          <div class="col-sm-12 col-md-12">
            <img src="img/shop-1.gif"width="100%" height="150px" alt="">
          </div>
        </div>
        <!-- Row for advertisement Ends-->

        <hr>

        <!-- Row For Any Extra Content Begins-->
        <div class="row pt-2">
          <div class="col-sm-12 col-md-12 d-flex">
            <div class="embed-responsive embed-responsive-16by9 mr-2">
              <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/cJG-zNOjkp4?rel=0" allowfullscreen></iframe>
            </div>
            <div class="embed-responsive embed-responsive-16by9 mr-2">
              <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/prjRN2wlGlM?rel=0" allowfullscreen></iframe>
            </div>
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/5_KPaddGcgs?rel=0" allowfullscreen></iframe>
            </div>
          </div>
        </div>
        <!-- Row For Any Extra Content Ends -->

  </div>  <!-- End of container -->

  <hr>

  <div class="container-fluid pt-3">
    <?php include 'inc/pre-footer.php' ?>
  </div>
    
<?php include 'inc/footer.php'; ?>
   