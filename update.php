<!--for addin product into database-->
<?php


                     //connection
       $connection=mysqli_connect('localhost','root','','restaurants');


       // for uploading image file to add products
    if(isset($_POST['upload'])){
        $file = $_FILES['file'];
        $filename=$_FILES['file']['name'];
        $filetmpname=$_FILES['file']['tmp_name'];
        $filesize=$_FILES['file']['size'];
        $fileerror=$_FILES['file']['error'];
        $filetype=$_FILES['file']['type'];


        $fileext=explode('.',$filename);
        $fileactualextension=strtolower(end($fileext));

        $allowed=array('jpg','jpeg','png','pdf');

        if(in_array($fileactualextension,$allowed)){
            if($fileerror==0){
                if($filesize<10000000000){
                    $filenamenew=$_POST['product_name']."."."$fileactualextension";
                    $_SESSEION['filenamenew']=$filenamenew;
                    $filedestination=$filenamenew;
                    move_uploaded_file($filetmpname,$filedestination);






    /*Catching data for  add product*/
    $product_id=mysqli_real_escape_string($connection,$_POST['product_id']);
    $product_name=mysqli_real_escape_string($connection,$_POST['product_name']);
    $product_price=mysqli_real_escape_string($connection,$_POST['product_price']);


    /*insert query */
    $insert= "insert into products values('$product_id','$product_name','$filenamenew','$product_price')";
    if(mysqli_query($connection, $insert)){
                echo "Product Inserted Succesfully";

        }
    else{
            echo "ERROR: Could not able to execute $insert. " . mysqli_error($connection);
                }
     /* end insert query */







                }
                else{
                    echo "big size";
                }
            }
            else{
                "not uploaded because error";
            }

        }
        else{
            echo "you can not upload file of this type";
        }

    }



//Updating a products

if(isset($_POST['update_product'])){

/*Catching data for  update product*/
$product_id=mysqli_real_escape_string($connection,$_POST['product_id']);
$product_price=mysqli_real_escape_string($connection,$_POST['product_price']);


/*insert query */
$query= "update products set id='$product_id', price='$product_price' where id=$product_id";
if(mysqli_query($connection, $query))
{
            echo "Information of the Product has been updated Succesfully";

    }
    else
    {
        echo "Product Update Failed!! Reload or Log in again as admin";
    }

}








//searching a product

    if(isset($_POST['search']))
    {
    $product_id=$_POST['product_id'];



        $query="delete from products where id='$product_id'";
        $result=mysqli_query($connection,$query);
            if($result){

              {
		                          echo "the product has been deleted successfully.<br>";
                            }
                          }
                        }


//Deleting Employee....
          
 ?>

<html lang="en">
  <head>
    <title>Advent Church Website Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800|Playfair+Display:,300, 400, 700" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css">

    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
         <link rel="stylesheet" href="css/templatemo-style.css">



    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
     <link rel="stylesheet" href="css/templatemo-style.css">
      <link rel="stylesheet" href="update.css">
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
                <a class="nav-link" href="#addproduct">Add</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#updateproduct">Update</a>
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
    

    <!-- END slider -->

    
    <!-- END section -->
    
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