<?php include_once("wadheader.php"); ?>
<script src="jquery.js"></script>
<script>
  jQuery(document).ready(function(){
    jQuery("#text").change(function(){
      var aa=jQuery(this).val();
      $.ajax({
        type:"GET",
        url:"getroom.php",
        data:{data:aa},
        success:function(response){
          $("#result").html(response);
        }
      });
    });
  });
</script>
    <?php 
    if(isset($_REQUEST['a'])){
      $id=$_REQUEST['a'];
      include_once("connect.php");
      $data=mysqli_query($con,"select * from newuser where id='$id'")
      or die(mysql_error($con));
      if($data2=mysqli_fetch_assoc($data)){
        $name=$data2['name'];
        $email=$data2['email'];
      }
    }
    else{
      header("location:wad_showstu2.php");
    }
    ?>

    <section class="site-hero site-hero-innerpage overlay" data-stellar-background-ratio="0.5" style="background-image: url(my/notice.jpg);min-height: 300px !important;">
      <div class="container">
        <div class="row align-items-center site-hero-inner justify-content-center"style="min-height: 300px !important;">
          <div class="col-md-8 text-center">

            <div class="mb-5 element-animate">
              <h1>Book room</h1>
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
            <form action="room_booking.php" method="post" enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="name">Hostel-no </label>
                      <select class="form-control" name="t1" required="required" id="text">
                        <option value="">Select Hostel</option>
                        <?php 
                          $data=mysqli_query($con,"select distinct(hostel_no) from room where status='FREE'")
      or die(mysql_error($con));
      while($data2=mysqli_fetch_assoc($data)){
                        ?>
                      <option value="<?php echo $data2['hostel_no']; ?>">
                        <?php echo $data2['hostel_no']; ?></option>
                      <?php } ?>
                      </select> 
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="name">Room-no </label>
                      <select class="form-control" name="t2" required="required" id="result">
                        <option value="">Select Room No</option>
                      </select>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="name">Name </label>
                      <input type="text" id="name" class="form-control" name="t3" required="required" value="<?php echo $name ?>" disabled='disabled'>
                      <input type="hidden" id="name" class="form-control" name="t3" required="required" value="<?php echo $name ?>">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="name">Email-Id </label>
                      <input type="text" id="name" class="form-control" name="t4" required="required"  value="<?php echo $email ?>"  disabled='disabled'>
                      <input type="hidden" id="name" class="form-control" name="t4" required="required"  value="<?php echo $email ?>">
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