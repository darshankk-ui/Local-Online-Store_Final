<?php
  echo "<!DOCTYPE html>
  <html>
  <head>
  	<title></title>
  	 <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="HOMEPAGE.css">
     
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>
  <body>
          <nav class="navbar navbar">
  <div class="container-fluid">
    <div class="navbar-header">
      <p class="navbar-brand"><i>SHOP</i></p> 
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="">Home</a></li>
      <li><a href="">FAQ</a></li>
      <li><a href="">Contact us</a></li>
      <li class="dropdown">
          <a href="javascript:void(0)" class="dropbtn">Category</a>
          <div class="dropdown-content">
            <form action='b_retrive.php' method='POST'>
              <button class = 'btn btn-outline-info' type = 'submit' value = 'FOODS' name= 'FOODS'>FOODS</button><br>
              <button class = 'btn btn-outline-info' type = 'submit' value = 'PERSONAL_CARE' name= 'PERSONAL_CARE'>PERSONAL CARE</button><br>
              <button class = 'btn btn-outline-info' type = 'submit' value = 'FASHION' name= 'FASHION'>FASHION</button><br>
              <button class = 'btn btn-outline-info' type = 'submit' value = 'KIDS' name= 'KIDS'>KIDS</button>
             
           </form>
          </div>
      </li>
       <li><a href="show_cart.php"><i class="fas fa-shopping-cart"></i>Cart</i></a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><input type="text" name="search" class="glyphicon glyphicon-search" placeholder="Search..."></li>
      <li><a href="sign_in_as.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="sign_in_as.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>

  </body>
  </html>";
?>