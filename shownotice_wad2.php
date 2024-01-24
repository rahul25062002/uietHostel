<?php include_once("wadheader.php"); ?>
    <!-- END header -->

    <section class="site-hero site-hero-innerpage overlay" style="background-image: url('my/notice.jpg'); min-height: 300px !important;">
      <div class="container">
        <div class="row align-items-center site-hero-inner justify-content-center" style="min-height: 300px !important;">
          <div class="col-md-8 text-center">
            <h1>SHOW Notice Board</h1>
            
          </div>
        </div>
      </div>
    </section>
    <section class="site-section bg-light" style="padding: 0px !important;">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-12 box">
            
    <?php 
    $data=mysqli_query($con,"select * from  addnotice where user!='Wardan'")
    or die(mysqli_error($con));
    if(mysqli_num_rows($data)>0){ ?>
        <table width="100%" class="table table-striped table-bordered" style="text-transform: uppercase;">
        <tr>
      <th>Title</th>
      <th>Class</th>
      <th>Notice</th>
    </tr>
    <?php while($single=mysqli_fetch_assoc($data)){ ?>
    <tr>
      <th><?php echo $single['title'] ?><br/>(<?php echo $single['date'] ?>)</th>
      <th><?php echo $single['cls'] ?></th>
      <th><?php echo $single['notice'] ?></th>
      </tr>     
    <?php } } ?>
    </table>
          </div>
        </div>
      </div>
    </section>
  
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