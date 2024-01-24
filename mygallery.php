<?php include_once("userheader.php"); ?>
    <!-- END header -->

    <section class="site-hero site-hero-innerpage overlay" style="background-image: url('my/gal.jpg'); min-height: 300px !important;">
      <div class="container">
        <div class="row align-items-center site-hero-inner justify-content-center" style="min-height: 300px !important;">
          <div class="col-md-8 text-center">
            <h1>SHOW Gallery</h1>
            
          </div>
        </div>
      </div>
    </section>

    <style type="text/css">
      img:hover{
        box-shadow: 2px 2px 10px black;
      }
    </style>
    <section class="site-section bg-light">
      <div class="container">
       <div class="row blog-entries">
          
           <?php 
    $data=mysqli_query($con,"select * from gallery")
    or die(mysqli_error($con));
    if(mysqli_num_rows($data)>0){ 
     while($single=mysqli_fetch_assoc($data)){ ?>
          <div class="col-md-4 col-sm-6 col-12">
            <a href="<?php echo $single['img']; ?>" class="blog-entry">
              <img src="<?php echo $single['img']; ?>" alt="Image placeholder" style="min-height:350px;min-width:350px;">
              <h2 style="text-transform: capitalize;"><?php echo $single['title']; ?>(<?php echo $single['date']; ?>)</h2>
            </a>
          </div>
        <?php }  } ?>
        </div>


       
      </div>
    </section>
    <!-- END section -->

    

    


   <?php include_once("footer.php") ?>
    <!-- END footer -->
    
    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>

    
    <script src="js/main.js"></script>
  </body>
</html>