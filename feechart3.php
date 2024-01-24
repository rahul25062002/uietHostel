<?php include_once("userheader.php"); ?>
    <!-- END header -->

    <section class="site-hero site-hero-innerpage overlay" style="background-image: url('my/notice.jpg'); min-height: 300px !important;">
      <div class="container">
        <div class="row align-items-center site-hero-inner justify-content-center" style="min-height: 300px !important;">
          <div class="col-md-8 text-center">
            <h1>SHOW Course FEE(<?php echo $cls ?>)</h1>
            
          </div>
        </div>
      </div>
    </section>
    <section class="site-section bg-light" style="padding: 0px !important;">
      <div class="container-fluied">
        <div class="row justify-content-center">
          <div class="col-md-12 box">
            <style type="text/css">
              table{
                text-align: center;
              }
            </style>
    <?php 
    $data=mysqli_query($con,"select * from coursesfee where cls='$cls'")
    or die(mysqli_error($con));
    if(mysqli_num_rows($data)>0){ ?>
        <table width="100%" class="table table-striped table-bordered" style="text-transform: uppercase;">
        <tr>
      <th>Category</th>
      <th>Class</th>
      <th>Semester 1</th>
      <th>Semester 2</th>
      <th>Semester 3</th>
      <th>Semester 4</th>
      <th>Semester 5</th>
      <th>Semester 6</th>
      <th>Semester 7</th>
      <th>Semester 8</th>
      <th>Total Fee</th>
    </tr>
    <?php while($single=mysqli_fetch_assoc($data)){ ?>
    <tr>
      <th><?php echo $single['cat'] ?></th>
      <th style="text-align: center;"><?php echo $single['cls'] ?>
      <br/><?php echo $single['dept'] ?>(<?php echo $single['sem'] ?>)</th>
      <th><?php echo $single['s1'] ?></th>
      <th><?php echo $single['s2'] ?></th>
      <th><?php echo $single['s3'] ?></th>
      <th><?php echo $single['s4'] ?></th>
      <th><?php echo $single['s5'] ?></th>
      <th><?php echo $single['s6'] ?></th>
      <th><?php echo $single['s7'] ?></th>
      <th><?php echo $single['s8'] ?></th>
      <th><?php echo $single['total'] ?></th>
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