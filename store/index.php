<?php 

include("includes/db.php");
include("functions/functions.php");

?>



<!doctype>
<html lang="en">
<head>
  <title>ICARUS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width" initial-scale=1>
  <link rel="stylesheet" href="styles/bootstrap-377.min.css">
  <link rel="stylesheet" href="font-awesome/css/font-awesome.css">
  <link rel="stylesheet" href="styles/style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  </head>
  <body>
    <div id="top"><!--top begin-->
      <div class="container"><!--container-->
        <div class="col-md-6 offer"><!--offer-->
      <a href="#" class="btn btn-success btn-sm">Welcome</a>
      <a href="checkout.php">4 Items In Your Cart Shopping Cart | Total Price is 300$</a>
        </div><!--offer-->
        <div class="col-md-6"><!--md6 begin-->
          <ul class="menu"><!--menu-->
          <li>
            <a href="customer_register.php">Register</a>
          </li>
          <li>
            <a href="checkout.php">My Account</a>
          </li>
          <li>
            <a href="cart.php">To Cart</a>
          </li>
          <li>
            <a href="checkout.php">Login</a>
          </li>
          </ul><!--menu-->
        </div><!--md6finish-->
      </div><!--container-->
    </div><!--top finish-->
    
    <div id="navbar" class="navbar navbar-default" ><!--navbar-->
      <div class="container"><!--navcontainer-->
        <div class="navbar-header"><!--navbarheader-->
          <a href="index.php" class="navbar-brand home"><!--navbarbrandhome-->
         <img src="images/ecom-store-logo.png" alt="M-dev-Store Logo" class="hidden-xs" />
         <img src="images/ecom-store-mobile.png" alt="M-dev-Store Logo Mobile" class="visible-xs" />
          </a><!--navbarbrandhome-->
          <button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
           <span class="sr-only">Toggle Navigation</span>
           <i class="fa fa-align-justify"> </i>
          </button>
          <button class="navbar-toggle" data-toggle="collapse" data-target="#search">
           <span class="sr-only">Toggle Search</span>
           <i class="fa fa-align-search"> </i>
          </button>
        </div><!--navbarheader-->
        <div class="navbar-collapse collapse" id="navigation"><!--navbarcollapse-->
          <div class="padding-nav"><!--paddingnav-->
            <ul class="nav navbar-nav left"><!--leftnavbar-->
            <li class="active">
            <a href="index.php">HOME</a>
            </li>
            <li>
            <a href="shop.php">SHOP</a>
          </li>
              <li>
              <a href="customer/my_account.php">MY ACCOUNT</a>
            </li>
              <li>
              <a href="cart.php">SHOPPING CART</a>
            </li>
              <li>
              <a href="contact.php"> CONTACT US</a>
            </li>
            </ul><!--leftnavbar-->
          </div><!--paddingnav-->
          <a href="cart.php" class="btn navbar-btn btn-primary right"><!--btn navbar btn primary-->
          <i class="fa fa-shopping-cart"></i>
          <span>4 Items In Your Shopping Cart</span>
          </a><!--btn navbar btn-primary-->
          <div class="navbar-collapse collapse-right"><!--navbar collapse-->
           <button class="btn btn-primary navbar-btn" type="button" data-toggle="collapse" data-target="#search"><!--navbar-btn-->
           <span class="sr-only">Toggle Search</span>
           <i class="fa fa-search"></i>
      </button><!--navbar-btn-->
          </div><!--navbar collapse-->
          <div class="collapse clearfix" id="search"> <!--collapse claerfix-->
          </div><!--collapse claerfix-->
          <form method="get" action="results.php" class="navbar-form"><!--navbarform-->
          <div class="input-group" ><!--input group-->
            <input type="text" class="form-control" placeholder="search"name="user_query" required/>
            <span class="input-group-btn"><!--input-group btn-->
            <button type="submit" name="search" value="search" class="btn btn-primary"><!--btn-primary-->
            <i class="fa fa-search"></i>
            </button><!--btn-primary-->
          </span><!--input-group btn-->
          </div><!--input group-->
        </form><!--navbarform-->
        </div><!--navbarcollapse-->
      </div><!--navcontainer-->
    </div><!--navbar-->
    
<div class="container" id="slider"><!--container-->
  <div class="col-md-12"><!--col-md-12-->
    <div class="carousel slide" id="myCarousel" data-ride="carousel"><!--carouselslide-->
      <ol class="carousel-indicators"><!--carousel-indicators-->
        <li class="active" data-target="#myCarousel" data-slide-to="0"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
      </ol><!--carousel-indicators-->

     <div class="carousel-inner"><!--carousel-inner-->
     
         <?php 
         
         $get_slides="select * from slider LIMIT 0,1 ";
         $run_slides=mysqli_query($con,$get_slides);
         
         while($row_slides=mysqli_fetch_array($run_slides)){
             $slide_name = $row_slides['slide_name'];
             $slide_image = $row_slides['slide_image'];
             
             echo"
             
             <div class='item active'>
             
             <img src='admin_area/slides_images/$slide_image'>
             
             </div>
             
             ";
             
         }
         
          
         
         $get_slides="select * from slider LIMIT 1,3 ";
         $run_slides=mysqli_query($con,$get_slides);
         
         while($row_slides=mysqli_fetch_array($run_slides)){
             $slide_name = $row_slides['slide_name'];
             $slide_image = $row_slides['slide_image'];
             
             echo"
             
             <div class='item'>
             
             <img src='admin_area/slides_images/$slide_image'>
             
             </div>
             
             ";
             
         }
         
         ?>

    
     </div><!--carousel-inner-->
     
     
     
    <a href="#myCarousel" class="left carousel-control" data-slide="prev"><!--left carousel-control-->
         <span class="glyphicon glyphicon-cevron-left"></span>
         <span class="sr-only">Previous</span>
     </a><!--left carousel-control-->
     <a href="#myCarousel" class="right carousel-control" data-slide="next"><!--right carousel-control-->
          <span class="glyphicon glyphicon-cevron-right"></span>
          <span class="sr-only">Next</span>

      </a><!--right carousel-control-->

    </div><!--carouselslide-->
  </div><!--col-md-12-->
</div><!--container-->

<div id="advantages"><!--advantages-->
  <div class="container"><!--container1-->
    <div class="same-height-row"><!--sameheightrow-->
      <div class="col-sm-4"><!--colsm4-->
        <div class="box same-height"><!--boxsameheight-->
          <div class="icon"><!--icon-->
            <i class="fa fa-heart"></i>
          </div><!--icon-->
          <h3><a href="#">Best ofers</a></h3>
          <p>
            We know to provide the best possible service ever.
          </p>

        </div><!--boxsameheight-->
      </div><!--colsm4-->
      <div class="col-sm-4"><!--colsm4-->
        <div class="box same-height"><!--boxsameheight-->
          <div class="icon"><!--icon-->
            <i class="fa fa-tag"></i>
          </div><!--icon-->
          <h3><a href="#">Best Prices 最好的价格</a></h3>
          <p>
          Compare us with other stores.
          </p>

        </div><!--boxsameheight-->
      </div><!--colsm4-->
      <div class="col-sm-4"><!--colsm4-->
        <div class="box same-height"><!--boxsameheight-->
          <div class="icon"><!--icon-->
            <i class="fa fa-thumbs-up"></i>
          </div><!--icon-->
          <h3><a href="#">100% original products</a></h3>
          <p>
          Just offering you the best products.
          </p>

        </div><!--boxsameheight-->
      </div><!--colsm4-->
    </div><!--sameheightrow-->
  </div><!--container1-->

</div><!--advantages-->

<div id="hot"><!--hot-->
  <div class="box"><!--box-->
    <div class="container"><!--container-->
      <div class="col-md-12"><!--colmd12-->
        <h2>
        Our Latest Products
        </h2>
      </div><!--colmd12-->
    </div><!--container-->
  </div><!--box-->
</div><!--hot-->

<div id="content" class="container"><!--container-->

<div class="row"><!--row-->
 
 
 <?php
    
   
    getPro();
    
 ?>
 
 
</div><!--row-->

</div><!--container-->

<?php
include("includes/footer.php");      
?>

<script src="js/jquery-331.min.js"></script>
<script src="js/bootstrap-377.min.js"></script>



  </body>
</html>
