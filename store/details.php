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
    <div id="productsMain" class="row"><!--row-->
        <div class="col-sm-6"><!--col-sm-6-->
            <div id="mainImage"><!--mainImage-->
                <div id="myCarousel" class="carousel slide" data-ride="carousel"><!--carousel slide-->
                    <ol class="carousel-indicators"><!--carousel-indicators-->
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1" ></li>
                        <li data-target="#myCarousel" data-slide-to="2" ></li>
                    </ol><!--carousel-indicators-->
                    
                    <div class="carousel-inner"><!--carouselinner-->
                        <div class="item active" >
                            <center><img class="img-responsive" src="admin_area/product_images/handbag.jpg" alt="handbag"></center>
                        </div>
                        <div class="item">
                            <center><img class="img-responsive" src="admin_area/product_images/iphone7.jpg" alt="kphone7"></center>
                        </div>
                        <div class="item">
                            <center><img class="img-responsive" src="admin_area/product_images/iphonex.jpg" alt="iphonex"></center>
                        </div>
                    </div><!--carouselinner-->
                    
                    
                    <a href="#myCarousel" class="left carousel-control" data-slide="prev"><!--leftcarousel-->
                        <span class="glyphicon glphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                    </a><!--leftcarousel-->
                    
                    <a href=#myCarousel"" class="right carousel-control" data-slide="next"><!--rightcarousel-->
                        <span class="glyphicon glphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                    </a><!--rightcarousel-->
                    
                </div><!--carousel slide-->
            </div><!--mainImage-->
        </div><!--col-sm-6-->
        
        
        
        
        <div class="col-sm-6"><!--col-sm-6-->
            <div class="box"><!--box-->
                <h1 class="text-center">Women's handbag</h1>
                
                <form action="" class="form-horizontal" method="post" ><!--form-horizontal-->
                    <div class="form-group"><!--form-group-->
                    <label for="" class="col-md-5 control-label">Products Quantity</label>
                    
                    <div class="col-md-7"><!--colmd7-->
                           
                        <select name="product_qty" id="" class="form-control"><!--formcontrol-->
                            <option >1</option>
                            <option >2</option>
                            <option >3</option>
                            <option >4</option>
                            <option>5</option>
                        </select><!--formcontrol-->
                    </div><!--colmd7-->         
                
                    </div><!--form-group-->
                    
                    
                    
                    <div class="form-group"><!--form-group-->
                        <label class="col-md-5 control-label"> Product Size</label><!--col-md-5 control-label-->
                        
                        
                          
                    <div class="col-md-7"><!--colmd7-->
                           
                        <select name="product_size"  class="form-control"><!--formcontrol-->
                            <option >Selects size</option>
                            <option >S</option>
                            <option >M</option>
                            <option >L</option>
                            <option>XL</option>
                        </select><!--formcontrol-->
                    </div><!--colmd7-->     
                        
                        <p class="price">$50</p>
                        <p class="text-center buttons"><button class="btn btn-primary i fa fa-shopping-cart"> Add to cart</button></p>
                        
                     
                    </div><!--form-group-->
                    
                </form><!--form-horizontal-->
                
            </div><!--box-->
            
            <div class="row" id="thumbs"><!--row-->
                
               <div class="col-xs-4"><!--row-->
               <a data-target="#myCarousel" data-slide-to="0"  href="#" class="thumb">
                <img src="admin_area/product_images/msuits.jpg" alt="msuits" class="img-responsive"><!--thumb-->
               </a><!--thumb-->
               </div><!--col-xs-4-->
               
               
                  
               <div class="col-xs-4"><!--col-xs-4-->
               <a data-target="#myCarousel" data-slide-to="1"  href="#" class="thumb">
                <img src="admin_area/product_images/kidswear.jpg" alt="kidswear" class="img-responsive"><!--thumb-->
               </a><!--thumb-->
               </div><!--col-xs-4-->
               
               
               
                  
               <div class="col-xs-4"><!--row-->
               <a data-target="#myCarousel" data-slide-to="2"  href="#" class="thumb">
                <img src="admin_area/product_images/wsuits.jpg" alt="wsuits" class="img-responsive"><!--thumb-->
               </a><!--thumb-->
               </div><!--col-xs-4-->
               
               
               
                
            </div><!--row-->  
        </div><!--col-sm-6-->
        
        
        
        
        
        
    </div><!--row-->
    
    <div class="box" id="details"><!--boxdetails-->
  
    <h4>Product Details</h4> 
     
      <p>
          
       hgfghfhfhvnbhhjnkdhkcldkljdklfjdklsjklsjklsjcklsdjfoiudsfiodfposdfoudopdl;c./zxm;lfksl;mc/s,mdlaksorjelmvdklfjoisjldmlkjsdotjsoijlksdltjsoijtoesjkoejtojeojeotjoiewjtioejioewjtoiwotiewojeoitujweio
             
      </p>
       
        <h4>Size</h4>
        <ul>
            <li>Small</li>
            <li>Medium</li>
            <li>Large</li>
        </ul>
        
        <br>
       
    </div><!--boxdetails-->
    
    
    <div id="row same-height-row"><!--row same-height-row-->
        <div class="col-md-3 col-sm-6"><!--col-md-3 col-sm-6-->
            <div class="box same-height headline"><!--box same-height headline-->
                <h3 class="text-center">Products You May Like</h3>
            </div><!--box same-height headline-->
        </div><!--col-md-3 col-sm-6-->
        
        
        
        
        <div class="col-md-3 col-sm-6 center-responsive"><!--colmd3colsm6centerresponsive-->
            <div class=" products same-height"><!-- products same-height-->
            <a href="details.php">
            <img class="img-responsive" src="admin_area/product_images/vneeck.jpg" alt="gentshoes">
            </a>
        <div class="text"><!--text-->
                <h3><a href="details.php">V-neck T-Shirts</a></h3>
                
                <p class="price">$40</p>
            </div><!--text-->
            
            
            </div><!-- products same-height-->
        </div><!--colmd3colsm6centerresponsive-->
        
        
        
        
        
                <div class="col-md-3 col-sm-6 center-responsive"><!--colmd3colsm6centerresponsive-->
            <div class=" products same-height"><!-- products same-height-->
            <a href="details.php">
            <img class="img-responsive" src="admin_area/product_images/toptank.jpg" alt="kidswear">
            </a>
        <div class="text"><!--text-->
                <h3><a href="details.php">Top tank</a></h3>
                
                <p class="price">$40</p>
            </div><!--text-->
            </div><!-- products same-height-->
        </div><!--colmd3colsm6centerresponsive-->
        
        
        
        
                <div class="col-md-3 col-sm-6 center-responsive"><!--colmd3colsm6centerresponsive-->
            <div class=" products same-height"><!-- products same-height-->
            <a href="details.php">
            <img class="img-responsive" src="admin_area/product_images/vans.jpg" alt="kidswear">
            </a>
        <div class="text"><!--text-->
                <h3><a href="details.php">Vans Sneakers</a></h3>
                
                <p class="price">$40</p>
            </div><!--text-->    
            </div><!-- products same-height-->
        </div><!--colmd3colsm6centerresponsive-->
        
        
        
    </div><!--row same-height-row-->
    
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
