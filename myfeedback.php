<?php include_once("userheader.php"); ?>
    <!-- END header -->

    <section class="site-hero site-hero-innerpage overlay" data-stellar-background-ratio="0.5" style="background-image: url(my/notice.jpg);min-height: 300px !important;">
      <div class="container">
        <div class="row align-items-center site-hero-inner justify-content-center"style="min-height: 300px !important;">
          <div class="col-md-8 text-center">

            <div class="mb-5 element-animate">
              <h1>Send Feedback</h1>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->


    <form action="addfeedback.php" method="post" enctype="multipart/form-data">
    <section class="site-section bg-light">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-6 box">
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="name">Name </label>
                      <input type="text" id="name" class="form-control" name="t1" required="required"  value="<?php echo $name ?>" disabled="disabled">
                      <input type="hidden" id="name" class="form-control" name="t1" required="required"  value="<?php echo $name ?>">

                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="name">Email-id </label>
                      <input type="text" id="name" class="form-control" name="t2" required="required" value="<?php echo $email ?>"  disabled="disabled">
                      <input type="hidden" id="name" class="form-control" name="t2" required="required" value="<?php echo $email ?>">

                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="name">Class </label>
                      <input type="text" id="name" class="form-control" name="t4" required="required" value="<?php echo $cls ?>"  disabled="disabled">
                      <input type="hidden" id="name" class="form-control" name="t4" required="required" value="<?php echo $cls ?>">
                      <input type="hidden" id="name" class="form-control" name="t7" required="required" value="<?php echo $img ?>">
                    </div>
                  </div>
                  
          </div>
          <div class="col-md-6 box">
            
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="name">Detartment </label>
                       <input type="text" id="name" class="form-control" name="t5" required="required" value="<?php echo $dept ?>"  disabled="disabled"/>
                       <input type="hidden" id="name" class="form-control" name="t5" required="required" value="<?php echo $dept ?>"/>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="name">Type </label>
                      <select class="form-control" name="t3" required="required">
                        <option>Select Type</option>
                        <option value="Complaint">Complaint</option>
                        <option value="Suggestion">Suggestion</option>
                        <option value="Feedback">Feedback</option>
                      </select>
                    </div>
                  </div>

                  <div class="row mb-5">
                    <div class="col-md-12 form-group">
                      <label for="name">Message</label>
                      <textarea name="t6" required="required"  class="form-control"></textarea>
                    </div>
                  </div>
                  
<div class="row">
                    <div class="col-md-6 form-group">
                      <input type="submit" value="Add" class="btn btn-primary">
                    </div>
                  </div>

          </div>
        </div>
      </div>
    </section>

                </form>
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