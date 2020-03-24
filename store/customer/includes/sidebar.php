<div class="panel panel-default sidebar-menu"><!--panelpaneldefaultsidebarmenu-->
    
    <div class="panel-heading"><!--panelheading-->
        
       <center><!--center-->
          
          <img src="customer_images/cipi.jpg" alt="logo">
           
       </center><!--center-->
        
        <br/>
         <h3 align="center" class="panel-title"><!--panel-title-->
             
             Name: Mr.Cipi
              
         </h3><!--panel-title-->     
         
    </div><!--panelheading-->
    
    
    
    
    <div class="panel-body"><!--panelheading-->
       
       <ul class="nav-pills nav-stacked-nav"><!--nav-pills nav-stacked-nav-->
           
           
          <li class="<?php if(isset($_GET['my_orders'])){echo"active";}  ?>">
              <a href="my_account.php?my_orders">
                  <i class="fa fa-list"></i> My Orders
              </a>
          </li>
          
          <br/>
               
           
          <li class="<?php if(isset($_GET['pay_offline'])){echo"active";}  ?>">
              <a href="my_account.php?pay_offline">
                  <i class="fa fa-bolt"></i> Pay Offline
              </a>
          </li>
           
             <br/>
           
           
           
             <li class="<?php if(isset($_GET['edit_account'])){echo"active";}  ?>">
              <a href="my_account.php?edit_account">
                  <i class="fa fa-pencil"></i> Edit Account
              </a>
          </li>
          
          <br/>
               
           
          <li class="<?php if(isset($_GET['change_password'])){echo"active";}  ?>">
              <a href="my_account.php?change_pass">
                  <i class="fa fa-user"></i> Change Password
              </a>
          </li>
           
           
             <br/>
           
             <li class="<?php if(isset($_GET['delete_account'])){echo"active";}  ?>">
              <a href="my_account.php?delete_account">
                  <i class="fa fa-trash-o"></i> Delete Account
              </a>
          </li>
          
          <br/>
               
           
          <li>
              <a href="logout.php">
                  <i class="fa fa-sign-out"></i> Log Out
              </a>
          </li>
           
           
           
           
           
           
       </ul><!--nav-pills nav-stacked-nav-->
        
    </div><!--panelheading-->
    
    
</div><!--panelpaneldefaultsidebarmenu-->