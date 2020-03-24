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
            <li class="active">
            <a href="index.php">Home</a>
            </li>
            <li >
            <a href="shop.php">Shop</a>
          </li>
              <li>
              <a href="customer/my_account.php">My Account</a>
            </li>
              <li>
              <a href="cart.php">Shopping Cart</a>
            </li>
              <li >
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
                    Register
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
                
                 <div class="box-header"><!--boxheader-->
                    
                    <center><!--center-->
                       
                       <h2>Register a new account</h2>
                        
                    </center><!--center-->
                    
                    <form action="customer_register.php" method="post"enctype="multipart/form-data" ><!--formcontact.php-->
                     
                           
                        <div class="form-group"><!--form-group-->
                           
                            <label>Name</label>
                            
                            <input type="text" class="form-control" name="c_name" required> 
                            
                        </div><!--form-group-->
                        
                        
                        
                         <div class="form-group"><!--form-group-->
                           
                            <label>Email</label>
                            
                            <input type="text" class="form-control" name="c_email" required>  
                            
                        </div><!--form-group-->
                        
                        
                        
                        
                         <div class="form-group"><!--form-group-->
                           
                            <label>Password</label>
                            
                            <input type="password" class="form-control" name="c_pass" required>
                         
                        </div><!--form-group-->
                        
                        
                        
                         <div class="form-group"><!--form-group-->
                           
                            <label>Country</label>
                            
                            <input type="text" class="form-control" name="c_country" required>
                         
                        </div><!--form-group-->
                        
                        
                        
                        
                         <div class="form-group"><!--form-group-->
                           
                            <label>City</label>
                            
                            <input type="text" class="form-control" name="c_city" required>
                         
                        </div><!--form-group-->
                    
                        
                        
                        
                        
                         <div class="form-group"><!--form-group-->
                           
                            <label>Contact</label>
                            
                            <input type="text" class="form-control" name="c_contact" required>
                         
                        </div><!--form-group-->
                        
                        
                          
                         <div class="form-group"><!--form-group-->
                           
                            <label>Address</label>
                            
                            <input type="text" class="form-control" name="c_address" required>
                         
                        </div><!--form-group-->
                        
                        
                          
                         <div class="form-group"><!--form-group-->
                           
                            <label>Profile Picture</label>
                            
                            <input type="file" class="form-control form-height-custom"  name="c_image" required>
                         
                        </div><!--form-group-->
                    
                    
                    
                       
                        
                        <div class="text-center"><!--text-center-->
                            
                            <button type="submit" name="register" class="btn btn-primary"> 
                            <i class="fa fa-user-md"></i> Register
                            </button>
                            
                        </div><!--text-center-->
                        
                        
                        
                        
                        
                        
                    </form><!--formcontact.php-->
                    
                    
                     
                 </div><!--boxheader-->
                  
              </div> <!--box--> 
                  
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
