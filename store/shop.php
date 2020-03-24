<!doctype>
<html lang="en">
<head>
  <title>ICARUS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width", initial-scale=1>
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
            <a href="customer/my_account.php">My Account</a>
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
            <li >
            <a href="index.php">Home</a>
            </li>
            <li class="active">
            <a href="shop.php">Shop</a>
          </li>
              <li>
              <a href="customer/my_account.php">My Account</a>
            </li>
              <li>
              <a href="cart.php">Shopping Cart</a>
            </li>
              <li>
              <a href="contact.php"> Contact Us</a>
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
    
   
   
   <div id="content"><!--content-->
       <div class="container"><!--container-->
           <div class="col-md-12"><!--colmd12-->
               
               <ul class="breadcrumb"><!--breadcrumb-->
                   <li>
                       <a href="index.php">Home</a>
                   </li>
                   <li>
                       Shop
                   </li>
               </ul><!--breadcrumb-->
               
           </div><!--colmd12-->
           
           
           
           <div class="col-md-3"><!--colmd3-->
              
               
<?php
include("includes/sidebar.php");      
?>
               
           </div><!--colmd3-->
           
           <div class="col-md-9"><!--colmd9-->
               <div class="box"><!--box-->
                   <h1>Shop</h1>
                   <p>
                       its high time we change things around here
                   </p>
               </div><!--box-->
               
               <div class="row"><!--row-->
               
               
<!--insert products in shop here-->            
               
               <div class="col-md-4 col-sm-6 center-reponsive"><!--colmd4colsm6-->
                    
                      <div class="product"><!--product-->
      <a href="details.php">
<img class="img-responsive" src="admin_area/product_images/jordan.jpg" alt="jordans">
      </a>
      <div class="text"><!--text-->
        <h3>
          <a href="datafile.php">
        Jordans
          </a>
        </h3>
        <p class="price">$30</p>
        <p class="button">
          <a href="details.php" class="btn btn-default"> View Details</a>
          <a href="details.php" class="btn btn-primary">
            <i class="fa fa-shopping-cart">
              Add To Cart
            </i>
          </a>
        </p>
      </div><!--text-->
    </div><!--product-->
                      
                       
                   </div><!--colmd4comsm6-->

                   
                   
                <div class="col-md-4 col-sm-6 center-reponsive"><!--colmd4colsm6-->
                    
                      <div class="product"><!--product-->
      <a href="details.php">
<img class="img-responsive" src="admin_area/product_images/schoolbag.jpg" alt="schoolbag">
      </a>
      <div class="text"><!--text-->
        <h3>
          <a href="datafile.php">
        School bag
          </a>
        </h3>
        <p class="price">$30</p>
        <p class="button">
          <a href="details.php" class="btn btn-default"> View Details</a>
          <a href="details.php" class="btn btn-primary">
            <i class="fa fa-shopping-cart">
              Add To Cart
            </i>
          </a>
        </p>
      </div><!--text-->
    </div><!--product-->
                      
                       
                   </div><!--colmd4comsm6-->
                                  
                   
                   
                <div class="col-md-4 col-sm-6 center-reponsive"><!--colmd4colsm6-->
                    
                      <div class="product"><!--product-->
      <a href="details.php">
<img class="img-responsive" src="admin_area/product_images/ps4.jpg" alt="ps4">
      </a>
      <div class="text"><!--text-->
        <h3>
          <a href="datafile.php">
      PS4
          </a>
        </h3>
        <p class="price">$30</p>
        <p class="button">
          <a href="details.php" class="btn btn-default"> View Details</a>
          <a href="details.php" class="btn btn-primary">
            <i class="fa fa-shopping-cart">
              Add To Cart
            </i>
          </a>
        </p>
      </div><!--text-->
    </div><!--product-->
                      
                       
                   </div><!--colmd4comsm6-->
                                   
                   
                   
                <div class="col-md-4 col-sm-6 center-reponsive"><!--colmd4colsm6-->
                    
                      <div class="product"><!--product-->
      <a href="details.php">
<img class="img-responsive" src="admin_area/product_images/msuits.jpg" alt="msuits">
      </a>
      <div class="text"><!--text-->
        <h3>
          <a href="datafile.php">
        Mens' Suit
          </a>
        </h3>
        <p class="price">$30</p>
        <p class="button">
          <a href="details.php" class="btn btn-default"> View Details</a>
          <a href="details.php" class="btn btn-primary">
            <i class="fa fa-shopping-cart">
              Add To Cart
            </i>
          </a>
        </p>
      </div><!--text-->
    </div><!--product-->
                      
                       
                   </div><!--colmd4comsm6-->
                   
                      
                   
                 <div class="col-md-4 col-sm-6 center-reponsive"><!--colmd4colsm6-->
                    
                      <div class="product"><!--product-->
      <a href="details.php">
<img class="img-responsive" src="admin_area/product_images/watch.jpg" alt="handbag">
      </a>
      <div class="text"><!--text-->
        <h3>
          <a href="datafile.php">
        Men's watch
          </a>
        </h3>
        <p class="price">$30</p>
        <p class="button">
          <a href="details.php" class="btn btn-default"> View Details</a>
          <a href="details.php" class="btn btn-primary">
            <i class="fa fa-shopping-cart">
              Add To Cart
            </i>
          </a>
        </p>
      </div><!--text-->
    </div><!--product-->
                      
                       
                   </div><!--colmd4comsm6-->
                   
                   
                   
                   
                    <div class="col-md-4 col-sm-6 center-reponsive"><!--colmd4colsm6-->
                    
                      <div class="product"><!--product-->
      <a href="details.php">
<img class="img-responsive" src="admin_area/product_images/handbag.jpg" alt="handbag">
      </a>
      <div class="text"><!--text-->
        <h3>
          <a href="datafile.php">
        Handbag
          </a>
        </h3>
        <p class="price">$30</p>
        <p class="button">
          <a href="details.php" class="btn btn-default"> View Details</a>
          <a href="details.php" class="btn btn-primary">
            <i class="fa fa-shopping-cart">
              Add To Cart
            </i>
          </a>
        </p>
      </div><!--text-->
    </div><!--product-->
                      
                       
                   </div><!--colmd4comsm6-->
                                 
<!--insert products in shop here-->                   
                   
                   
               </div><!--row-->
               
               <center>
                   <ul class="pagination">
                       <li><a href="#">First Page</a></li>
                       <li><a href="#">1</a></li>
                       <li><a href="#">2</a></li>
                       <li><a href="#">3</a></li>
                       <li><a href="#">4</a></li>
                       <li><a href="#">5</a></li>
                       <li><a href="#">Last Page</a></li>
                   </ul>
               </center>
               
           </div><!--colmd9-->
           
       </div><!--container-->
   </div><!--content-->
  
 
<?php
include("includes/footer.php");      
?>

<script src="js/jquery-331.min.js"="text/javascript"></script>
<script src="js/bootstrap-377.min.js"="text/javascript"></script>



  </body>
</html>
