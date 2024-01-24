<?php include_once("clkheader.php"); ?>
    <!-- END header -->

    <section class="site-hero site-hero-innerpage overlay" data-stellar-background-ratio="0.5" style="background-image: url(my/notice.jpg);min-height: 300px !important;">
      <div class="container">
        <div class="row align-items-center site-hero-inner justify-content-center"style="min-height: 300px !important;">
          <div class="col-md-8 text-center">

            <div class="mb-5 element-animate">
              <h1>Send request Reply</h1>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->


    <section class="site-section bg-light">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-5 box">
            <form action="addrpy.php" method="post" enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="name">Request Id </label>
                      <input type="text" id="name" class="form-control" name="t1" required="required" value="<?php echo $_REQUEST['a'] ?>" disabled="disabled">
                      <input type="hidden" id="name" class="form-control" name="t1" required="required" value="<?php echo $_REQUEST['a'] ?>">
                    </div>
                  </div>

                  <div class="row mb-5">
                    <div class="col-md-12 form-group">
                      <label for="name">Reply Box</label>
                      <textarea name="t2" required="required"  class="form-control"></textarea>
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <input type="submit" value="Add Reply" class="btn btn-primary">
                    </div>
                  </div>
                </form>
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->


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