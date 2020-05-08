<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index1.html');
	exit;
}
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Event Management</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800|Playfair+Display:,300, 400, 700" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css">

    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">


    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    
    <header role="banner">
      <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
          <a class="navbar-brand" href="index.html">Admin Panel</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarsExample05">
            <ul class="navbar-nav ml-auto pl-lg-5 pl-0">
              <li class="nav-item">
                <a class="nav-link" href="index.html">Home</a>
              </li>
                 <li class="nav-item">
                <a class="nav-link" href="Add%20product.html">Add</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="update%20product.html">Update</a>
              </li>
                <li class="nav-item">
                <a class="nav-link" href="#deleteproduct">Delete</a>
              </li>

                 <li class="nav-item">
                <a class="nav-link" href="logout.php">logout</a>
              </li>
            </ul>
            
          </div>
        </div>
      </nav>
    </header>
    <!-- END header -->
    
    <section class="home-slider owl-carousel">
      
      <div class="slider-item" style="background-image: url('img/birthday.jpg');">
        <div class="container">
          <div class="row slider-text align-items-center justify-content-center">
            <div class="col-md-8 text-center col-sm-12 element-animate">
              
            </div>
          </div>
        </div>
      </div>


    </section>
      
    <!-- END slider -->
       <section id="" style="height: 600px">
        <div class="container">
            <div class="row">
                <div id="addproduct" class="overlay">
                    <div class="popup" style="width:40%; height:60%;" >
		              <center><h2>Add product</h2></center>
		                  <a class="close" href="#employee">&times;</a>
		                  <div class="content">
                                <!-- multistep form -->
                            <div class="col-lg-3"></div>
                                <div class="col-lg-6">
                                    <form action="update.php" method="post" enctype="multipart/form-data" class="form-group">

                                      <label for="pid">Product ID</label>
                                      <input type="text" name="product_id" id="pid">
                                      <br>
                                        <label for="pname">Product Name</label>
                                        <input type="text" name="product_name" id="pname">
                                        <br>
                                        <label for="pprice">Product Price</label>
                                        <input type="text" name="product_price" id="pprice">
                                        <br>
                                        <br>
                                        <input type="file" name="file">
                                        <br>
                                        <button type="submit" name="upload" style="color:black;">Upload</button>

                                    </form>


                         </div>
	               </div>
                </div>
            </div>
        </div>
    </div>
</section>
        <!-- update product-->
         <section id="" style="height: 600px">
        <div class="container">
            <div class="row">
                <div id="updateproduct" class="overlay">
                    <div class="popup" style="width:40%; height:60%;">
		              <center><h2>Update Product</h2></center>
		                  <a class="close" href="#employee">&times;</a>
		                  <div class="content">
                                <!-- multistep form -->
                            <div class="col-lg-3"></div>
                                <div class="col-lg-6">
                                    <form action="update.php" method="post" enctype="multipart/form-data" class="form-group">

                                        <label for="p_id">Product ID</label>
                                        <input type="text" name="product_id" id="p_id" required>
                                        <br>
                                        <label for="p_price">New Price</label>
                                        <input type="text" name="product_price" id="p_price" required>
                                        <br>
                                        <button type="submit" name="update_product" style="color:black;"> Update</button>

                                    </form>
                                </div>
                            <div class="col-lg-3"></div>
                         </div>
	               </div>
                </div>
            </div>
        </div>
</section>


        <!--Delete product-->


  <section id="" style="height: 600px">
        <div class="container">
            <div class="row">
                <div id="deleteproduct" class="overlay">
                    <div class="popup" style="width:40%; height:60%;">
		              <center><h2>Delete Product</h2></center>
		                  <a class="close" href="#employee">&times;</a>
		                  <div class="content">
                                <!-- multistep form -->
                            <div class="col-lg-3"></div>
                                <div class="col-lg-6">
                                    <form action="update.php" method="post" enctype="multipart/form-data" class="form-group">

                                        <label for="search_p_id">Product ID</label>
                                        <input type="text" name="product_id" id="search_p_id">


                                        <button type="submit" name="search" style="color:black;">Search</button>

                                    </form>
                                </div>
                            <div class="col-lg-3"></div>
                         </div>
	               </div>
                </div>
            </div>
        </div>
</section>

  <section id="" style="height: 600px">

    <div class="container">
        <div class="row">
            <div id="addemployee" class="overlay">
                <div class="popup1">
                    <center><h2></h2></center>
                <a class="close" href="#employee">&times;</a>
                      <div class="content">
                            <!-- multistep form -->
                                <div class="col-lg-12">

                                        <form class="form-group" method="POST" action="update.php">
                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6">
                                                          <label>ID: </label>
                                                          <input type="text" name="eid" class="form-control" placeholder="Enter ID" required>
                                                            </div>

                                                            <div class="col-lg-6 col-md-6">
                                                          <label>Name: </label>
                                                          <input type="text" name="ename" class="form-control"  placeholder="Name">
                                                           </div>
                                                           <div class="col-lg-6 col-md-6">
                                                         <label>Password: </label>
                                                         <input type="password" name="password" class="form-control"  placeholder="Enter a password">
                                                          </div>
                                        </div>
                                         </div>
                                                         <br>
                                                          <label>Contact</label>
                                                          <input type="text" name="econtact" class="form-control" placeholder="Conatct">
                                                            <br>
                                                         <label>Address</label>
                                                          <input type="text" name="eaddress" class="form-control" placeholder="Enter address">
                                                            <br>
                                                            <label>Join Date</label>
                                                             <input type="date" name="ejdate" class="form-control" placeholder="Enter Join date">
                                                               <br>
                                                               <label> Designation </label>
                                                                <input type="text" name="designation" class="form-control" placeholder="Enter Designation">
                                                                  <br>
                                         <div class="row">
                                                            <div class="col-lg-6 col-md-6">
                                                          <label>Email</label>
                                                          <input type="text" name="e_email" class="form-control" placeholder="Enter email" >
                                                            </div>

                                                            <div class="col-lg-6 col-md-6">
                                                          <label>Date of birth</label>
                                                          <input type="date" name="edob" class="form-control" placeholder="Enter Date of birth">
                                                            </div>

                                                            <div class="col-lg-6 col-md-6">
                                                          <label> Blood Group</label>
                                                          <input type="text" name="ebloodgroup" class="form-control" placeholder="Enter Blood Group">
                                                            </div>
                                                            <div class="col-lg-6 col-md-6">
                                                          <label> Salary</label>
                                                          <input type="text" name="Salary" class="form-control" placeholder="Enter Employee's Salary">
                                                            </div>


                                          </div>
                                                          <br>
                                                          <input type="submit" name="add" value="Add Employee" class="btn btn-warning btn-block btn-lg" style="box-shadow: 2px 2px 2px gray;"onclick="warn();">

                                                    </form>


                             </div>
                        </div>
                 </div>
                </div>
             </div>
        </div>
  </section>

  <section id="" style="height: 600px">
        <div class="container">
            <div class="row">
                <div id="delete_employee" class="overlay">
                    <div class="popup" style="width:40%; height:60%;">
                  <center><h2>Delete Employee</h2></center>
                      <a class="close" href="#employee">&times;</a>
                      <div class="content">
                                <!-- multistep form -->
                            <div class="col-lg-3"></div>
                                <div class="col-lg-6">
                                    <form action="update.php" method="post" enctype="multipart/form-data" class="form-group">

                                        <label for="search_e_id">Employee ID</label>
                                        <input type="text" name="e_id" id="search_e_id">
                                        <button type="submit" name="fire" style="color:black;">Search</button>

                                    </form>
                                </div>
                            <div class="col-lg-3"></div>
                         </div>
                 </div>
                </div>
            </div>
        </div>
</section>



    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelement-and-player.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/main.js"></script>

    <script>
      document.addEventListener('DOMContentLoaded', function() {
                var mediaElements = document.querySelectorAll('video, audio'), total = mediaElements.length;

                for (var i = 0; i < total; i++) {
                    new MediaElementPlayer(mediaElements[i], {
                        pluginPath: 'https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/',
                        shimScriptAccess: 'always',
                        success: function () {
                            var target = document.body.querySelectorAll('.player'), targetTotal = target.length;
                            for (var j = 0; j < targetTotal; j++) {
                                target[j].style.visibility = 'visible';
                            }
                  }
                });
                }
            });
    </script>
  </body>
</html>