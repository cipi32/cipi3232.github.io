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
            <li >
            <a href="shop.php">Shop</a>
          </li>
              <li>
              <a href="customer/my_account.php">My Account</a>
            </li>
              <li class="active">
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
                       Cart
                   </li>
               </ul><!--breadcrumb-->
               
           </div><!--colmd12-->
           
           <div id="cart" class="col-md-9"><!--cart colmd9-->
              
              <div class="box"><!--box-->
                  
                  <form action="cart.php" method="post" enctype="multipart/form-data"><!--formcart.php-->
                      
                      <h1>Shopping Cart</h1>
                      <p class="text-muted">You currently have 3 item(s) in your cart</p>
                      <div class="table-responsive"><!--tableresponsive-->
                          
                          <table class="table"><!--table-->
                              
                              <thread><!--thread-->
                                  
                                  <tr><!--tr--> 
                                     <th colspan="2">Product</th>
                                     <th>Quantity</th>
                                     <th>Unit Price</th>
                                     <th>Size</th>
                                     <th colspan="1">Delete</th>
                                     <th colspan="2">Sub Total</th>
                                     
                                  </tr><!--tr-->
                                  
                              </thread><!--thread-->
                              
                              <tbody><!--tbody-->
                                  
                                  <tr><!--tr-->
                                      
                                      
                                      <td>
                                          
                                        <img class="img-responsive" src="admin_area/product_images/msuits.jpg" alt="msuits">
                                          
                                      </td>
                                      
                                      
                                      <td>
                                          
                                          <a href="#"> Men's suit</a>
                                          
                                      </td>
                                      
                                      <td>
                                         
                                          2
                                          
                                      </td>
                                      
                                      <td>
                                         
                                          $50
                                          
                                      </td>
                                      
                                      <td>
                                          Large
                                          
                                      </td>
                                      
                                      <td>
                                          
                                          <input type="checkbox" name="remove[]">
                                      </td>
                                      
                                      <td>
                                          
                                          $100
                                      </td>
                                      
                                  </tr><!--tr-->
                                  
                                  
                              </tbody><!--tbody-->
                              
                              
                              
                               
                              <tbody><!--tbody-->
                                  
                                  <tr><!--tr-->
                                      
                                      
                                      <td>
                                          
                                        <img class="img-responsive" src="admin_area/product_images/jordan.jpg" alt="msuits">
                                          
                                      </td>
                                      
                                      
                                      <td>
                                          
                                          <a href="#"> Jordans </a>
                                      </td>
                                      
                                      <td>
                                          2
                                      </td>
                                      
                                      <td>
                                          $50
                                      </td>
                                      
                                      <td>
                                          Large
                                          
                                      </td>
                                      
                                      <td>
                                          
                                          <input type="checkbox" name="remove[]">
                                      </td>
                                      
                                      <td>
                                          
                                          $100
                                      </td>
                                      
                                  </tr><!--tr-->
                                  
                                  
                              </tbody><!--tbody-->
                              
                              
                              
                              
                              
                              
                               
                              <tbody><!--tbody-->
                                  
                                  <tr><!--tr-->
                                      
                                      
                                      <td>
                                          
                                        <img class="img-responsive" src="admin_area/product_images/handbag.jpg" alt="msuits">
                                          
                                      </td>
                                      
                                      
                                      <td>
                                          
                                          <a href="#"> Handbag </a>
                                      </td>
                                      
                                      <td>
                                          2
                                      </td>
                                      
                                      <td>
                                          $50
                                      </td>
                                      
                                      <td>
                                          Large
                                          
                                      </td>
                                      
                                      <td>
                                          
                                          <input type="checkbox" name="remove[]">
                                      </td>
                                      
                                      <td>
                                          
                                          $100
                                      </td>
                                      
                                  </tr><!--tr-->
                                  
                                  
                              </tbody><!--tbody-->
                              
                              
                              <tfoot><!--tfoot-->
                                  
                                  <tr><!--tr-->
                                      
                                      <th colspan="5">Total</th>
                                      <th colspan="2">$100</th>
                                      
                                  </tr><!--tr-->
                                  
                              </tfoot><!--tfoot-->
                              
                              
                              
                          </table><!--table-->
                          
                      </div><!--tableresponsive-->
                      
                      
                      
                      <div class="box-footer"><!--box-footer-->
                         
                         <div class="pull-left"><!--pull-left-->
                             <a href="index.php" class="btn btn-default"><!--btn btn-default-->
                                <i class="fa fa-chevron-left"></i>Continue Shopping
                                 
                             </a><!--btn btn-default-->

                         </div><!--pull-left-->
                          <div class="pull-right"><!--pull-right-->
                             <button type="submit" name="update" value="Update Cart" class="btn btn-default"><!--btn btn-default-->
                                <i class=" fa fa-refresh"></i>Update Cart
                                 
                             </button><!--btn btn-default-->
                             
                             <a href="checkout.php" class="btn btn-primary">
                                 Proceed Checkout  <i class="fa fa-chevron-right"> </i>
                                  
                             </a>

                         </div><!--pull-right-->
                          
                      </div><!--box-footer-->
                      
                  </form><!--formcart.php-->
                  
              </div><!--box-->
              
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
    
               
        </div><!--cart colmd9-->
         
         
          
          <div class="col-md-3"><!--col-md-3-->
              
              <div id="order-summary" class="box"><!--box-->
                  <div class="box-header"><!--box-header-->
                    
                     <h3>Order Summary</h3>
                      
                  </div><!--box-headder-->
                  
                  <p class="text-muted"><!--text-muted-->
                      
                      Shipping and additional cost are calculated based on value you have entered
                      
                  </p><!--text-muted-->
                  
                  <div class="table-responsive"><!--table-responsive-->
                     <table class="table"><!--table-->
                         
                         <tbody><!--tbody-->
                             
                             <tr><!--tr-->
                               <td>Order Sub-Total</td>
                               <th>$200</th> 
                                
                             </tr><!--tr-->
                             <tr><!--tr-->
                                <td>Shipping and handling</td> 
                                <th>$0</th>
                             </tr><!--tr-->
                             
                             
                             
                              <tr><!--tr-->
                                <td>Tax</td> 
                                <th>$0</th>
                             </tr><!--tr-->
                             
                             
                             
                              <tr class="total"><!--tr-->
                                <td>Total</td> 
                                <th>$200</th>
                             </tr><!--tr-->
                             
                             
                             
                         </tbody><!--tbody-->
                         
                     </table><!--table-->
                      
                  </div><!--table-responsive-->
                  
                  
              </div><!--box-->
          </div><!--col-md-3-->
          
          
          
          
           
       </div><!--container-->
   </div><!--content-->
  
 
<?php
include("includes/footer.php");      
?>

<script src="js/jquery-331.min.js"="text/javascript"></script>
<script src="js/bootstrap-377.min.js"="text/javascript"></script>



  </body>
</html>

           