<!doctype html>
<html lang="en">
  <head>
    <title>Fee Management SysTem</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,900" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    
    <header role="banner">
     
      <nav class="navbar navbar-expand-md navbar-dark bg-light">
        <div class="container">
          <a class="navbar-brand absolute" href="home1.php">College</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <?php include_once("topmenu.php") ?>
        </div>
      </nav>
    </header>
    <!-- END header -->

    <section class="site-hero site-hero-innerpage overlay" data-stellar-background-ratio="0.5" style="background-image: url(my/reg.jpg);min-height: 300px !important;">
      <div class="container">
        <div class="row align-items-center site-hero-inner justify-content-center"style="min-height: 300px !important;">
          <div class="col-md-8 text-center">

            <div class="mb-5 element-animate">
              <h1>Register</h1>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->


   <section class="site-section bg-light">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-12 box">
            <h2 class="mb-5">Register new account</h2>
            <form action="regcode.php" method="post" enctype="multipart/form-data">
              
            <div class="row">
              <div class="col-md-6">    
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="name">Name</label>
                      <input type="text" id="name" class="form-control" name="t1" required="required">
                    </div>
                  </div><div class="row">
                    <div class="col-md-12 form-group">
                      <label for="name">Father Name</label>
                      <input type="text" id="name" class="form-control "  name="t2" required="required">
                    </div>
                  </div><div class="row">
                    <div class="col-md-12 form-group">
                      <label for="name">Mother Name</label>
                      <input type="text" id="name" class="form-control "  name="t3" required="required">
                    </div>
                  </div><div class="row">
                    
                  </div><div class="row">
                    <div class="col-md-12 form-group">
                      <label for="name">Mobile-No</label>
                      <input type="text" id="name" class="form-control "  name="t4" required="required">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="name">Image</label>
                      <input type="file" id="name" class="form-control "  name="t5" required="required">
                    </div>
                  </div>
<div class="row">
                    <div class="col-md-12 form-group">
                      <label for="name">Email Address</label>
                      <input type="email" id="name" class="form-control " name="t6" required="required">
                    </div>
                  </div>
                  
            </div>
              <div class="col-md-6">    
                  
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="name">Password</label>
                      <input type="password" id="name" class="form-control " name="t7" required="required">
                    </div>
                  </div><div class="row">
                    <div class="col-md-12 form-group">
                      <label for="name">D.O.B</label>
                      <input type="date" id="name" class="form-control " name="t8" required="required">
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="name">Class </label>
                      <select class="form-control" name="t9" required="required">
                        <option>Select Class</option>
                        <option value="b.tech">B.TECH</option>
                        <option value="m.tech">M.TECH</option>
                         </select> 
                     </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="name">Department </label>
                      <select class="form-control" name="t10" required="required">
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
                      <label for="name">Category </label>
                    <select class="form-control" name="t11" required="required">
                        <option>Select Category</option>
                        <option value="sc">SC</option>
                        <option value="bc">BC</option>
                        <option value="gernal">GERNAL</option>
                        <option value="other">OTHER</option>
                    </select> 
                    </div>
                  </div>
                  <div class="col-md-12 form-group">
                    <br/>
                      Male
                      <input type="radio" id="name" name="t12" value="male">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      FeMale
                      <input type="radio" id="name"  name="t12" value="female">

                    </div>
                  <div class="row">
                    <div class="col-md-6 form-group"><br/>
                      <input type="submit" value="Register" class="btn btn-primary">
                    </div>
                  </div>
            </div>
          </div>
            </form>
          </div>
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