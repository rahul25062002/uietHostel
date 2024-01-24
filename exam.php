<?php include_once("adminheader.php"); ?>
    <!-- END header -->

    <section class="site-hero site-hero-innerpage overlay" data-stellar-background-ratio="0.5" style="background-image: url(my/notice.jpg);min-height: 300px !important;">
      <div class="container">
        <div class="row align-items-center site-hero-inner justify-content-center"style="min-height: 300px !important;">
          <div class="col-md-8 text-center">

            <div class="mb-5 element-animate">
              <h1>add exam Fee</h1>
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
            <form action="add_exam.php" method="post" enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="name">Category </label>
                    <select class="form-control" name="t1" required="required">
                        <option>Select Category</option>
                        <option value="sc">SC</option>
                        <option value="bc">BC</option>
                        <option value="gernal">GERNAL</option>
                        <option value="other">OTHER</option>
                    </select> 
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="name">Class </label>
                      <select class="form-control" name="t2" required="required">
                        <option>Select Class</option>
                        <option value="b.tech">B.TECH</option>
                        <option value="m.tech">M.TECH</option>
                         </select> 
                     </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="name">Department </label>
                      <select class="form-control" name="t3" required="required">
                        <option>Select Department</option>
                        <option value="cse">CSE</option>
                        <option value="it">IT</option>
                        <option value="ece">ECE</option>
                        <option value="mech">MECH</option>
                        <option value="civil">CIVIL</option>
                        <option value="all">ALL</option>    
                         </select> 
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="name">Semester </label>
                      <select class="form-control" name="t4" required="required">
                        <option>Select Semester</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>    
                        <option value="7">7</option>    
                        <option value="8">8</option>    
                         </select> 
                    </div>
                  </div>

                  <div class="row mb-5">
                    <div class="col-md-12 form-group">
                      <label for="name">Fee</label>
                      <input type="text" name="t5" required="required"  class="form-control" placeholder="Enetr Fee">
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <input type="submit" value="Add" class="btn btn-primary">
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