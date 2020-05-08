
<html>
    <head>
        <title>Register</title>
         <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
     
             <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800|Playfair+Display:,300, 400, 700" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css">

    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">


    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" type="text/css" href="register.css">





    </head>
    <body>

        <!--Selection of customer type-->
      <header role="banner">
      <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
          <a class="navbar-brand" href="#index.html"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarsExample05">
            <ul class="navbar-nav ml-auto pl-lg-5 pl-0">
              <li class="nav-item">
                <a class="nav-link active" href="index.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="service.html">Services</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle active" href="event.html" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Event</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                  <a class="dropdown-item" href="event.html">Birthday</a>
                  <a class="dropdown-item" href="event.html">Marriage</a>
                  <a class="dropdown-item" href="event.html">Corporate</a>
				  <a class="dropdown-item" href="event.html">Party</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.html">Contact</a>
              </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle active" href="event.html" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Login</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                  <a class="dropdown-item" href="http://localhost/final/index1.html">Admin Login</a>
                  <a class="dropdown-item" href="http://localhost/final/index.php">Customer Login</a>
                </div>
              </li>
            </ul>
            
          </div>
        </div>
      </nav>
    </header>



<div class="row">
 
  <div class="column">
    <img src="cus1.jpg" alt="Forest" style="width:35%">
    <div class="container">
                        <button>
                        <a href="#popup1" style="text-decoration:none;"><b>New Customer</b></a>
                    </button>
                 
    </div>
      
  </div>
     <div class="column">
    <img src="customer.jpg" alt="Snow" style="width:65%">
    <div class="container"> 
     <button>
                        <a href="#popup2" style="text-decoration:none;"><b>Existings Customer</b></a>
                    </button>
    </div>
  </div>
</div>
        <!--popup-->
        <div class="container">
            <div class="row">
                <div id="popup1" class="overlay">
                    <div class="popup1">
                        <center><h2></h2></center>
		                <a class="close" href="#">&times;</a>
		                      <div class="content">
                                <!-- multistep form -->
                                    <div class="col-lg-12">

                                            <form class="form-group" method="POST" action="newcustomer.php">
                                            <div class="row">
                                                                <div class="col-lg-6 col-md-6">
                                                              <label>ID: </label>
                                                              <input type="text" name="customer_id" class="form-control" placeholder="Enter ID" required>
                                                                </div>

                                                                <div class="col-lg-6 col-md-6">
                                                              <label>Name: </label>
                                                              <input type="text" name="customer_name" class="form-control"  placeholder="Name">
                                                               </div>
                                             </div>
                                                             
                                             <div class="row">
                                                                <div class="col-lg-6 col-md-6">
                                                              <label>Email</label>
                                                              <input type="text" name="customer_email" class="form-control" placeholder="Enter email" >
                                                                </div>

                                                                <div class="col-lg-6 col-md-6">
                                                              <label>Date of birth</label>
                                                              <input type="date" name="customer_dob" class="form-control" placeholder="Enter Date of birth">
                                                                </div>
                                                                   <div class="col-lg-6 col-md-6">
                                                              <label>Password</label>
                                                              <input type="password" name="customer_password" class="form-control" placeholder="Enter password">
                                                                </div>

                                                              </div>
                                                              <br>
                                                              <input type="submit" name="submit" value="Register Now" class="btn btn-warning btn-block btn-lg" style="box-shadow: 2px 2px 2px gray;"onclick="warn();">
                                                        
                                                        </form>


                                 </div>
                            </div>
	                   </div>
                    </div>
                 </div>
            </div>
        <!--existing customer-->
            <div class="container">
            <div class="row">
                <div id="popup2" class="overlay">
                    <div class="popup2">
                        <center><h2></h2></center>
		                <a class="close" href="#">&times;</a>
		                      <div class="content">
                                <!-- multistep form -->
                                    <div class="col-lg-12">

                                            <form class="form-group" method="POST" action="existingcustomer.php">
                                            <div class="row">
                                                                <div class="col-lg-6 col-md-6">
                                                              <label>ID: </label>
                                                              <input type="text" name="customer_id" class="form-control" placeholder="Enter ID">
                                                                </div>


                                             </div>


                                             <div class="row">

                                                                   <div class="col-lg-6 col-md-6">
                                                              <label>Password</label>
                                                              <input type="password" name="customer_password" class="form-control" placeholder="Enter password">
                                                                </div>

                                              </div>
                                                              <br>
                                                              <input type="submit" name="submit" value="Log In" class="btn btn-warning btn-block btn-lg" style="box-shadow: 2px 2px 2px gray;"onclick="warn();">

                                                        </form>

                                 </div>
                            </div>
	                   </div>
                    </div>
                 </div>
            </div>


    
            </ul>
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

        <!--end of popup-->
        <!--passing customer id in shpping cart-->


</body>



</html>
