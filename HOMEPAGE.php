<?php

  session_start();
   $_SESSION['email'];
   $email=$_SESSION['email'] ;
  require 's_header.php';
  require 'b_db_key.php';
  $sql="SELECT * FROM buyer where email='$email'";
  $conn = connect_db();
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();
  $name = $row["name"];


?>

<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="HOMEPAGE.css">

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
     
     <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

	


 
  <style>
    
     body
{
  background-color: white;
}



.container
{
  width:60%;
  height: 50%;
  align-items: center;
}

h2
{
  text-align: center;
}



.asd
{
  border: 1px solid ;
}


  .footer
    {
      background-color: #181818;
      width:100%;
      padding:30px;
      color: white;
    }

    table {
            border-collapse: collapse;
            width: 100%;
            color: #588c7e;
            font-family: monospace;
            font-size: 15px;
            text-align: center;
            }
        th {
        background-color: #588c7e;
        color: white;
        }
        tr:nth-child(odd) {background-color: #f2f2f2}

    .zoom {
  padding: 50px;
  background-color: transparent;
  transition: transform .2s; /* Animation */
  width: 200px;
  height: 200px;
  margin: 0 auto;
}

.zoom:hover {
  transform: scale(1.5); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}



  </style>

</head>
	
<body>


<nav class="navbar navbar-expand-lg navbar">
  <div class="container-fluid">
    <div class="navbar-header">
       <li><a class="btn btn-outline-info" href="HOMEPAGE.php"><i class="fas fa-store" style="color:black;">&nbsp;<h4>APNA BAZAAR</h4></i></a></li>  
    </div>
    <ul class="nav navbar-nav">
      <li ><a href="HOMEPAGE.php" class="btn-inline-info"><i class="fas fa-home" style="color:black;"><h4>HOME</h4></i></a></li>
      <li class="dropdown">
          <a href="javascript:void(0)"  class="dropbtn"><i class="fas fa-th-list mt-2" style="color:black;"><h4>CATEGORY</h4></i></a>
          <div class="dropdown-content">
            <form action='b_retrive.php' method='POST'>
              <button class = 'btn btn-outline-info' class="fas fa-food" type = 'submit' value = 'FOODS' name= 'FOODS'><h4><i class="fas fa-apple-alt" style="color:black;">&nbsp;FOODS &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i></h4></button><br>
              
              <button class = 'btn btn-outline-info' type = 'submit' value = 'PERSONAL_CARE' name= 'PERSONAL_CARE'><h4><i class="fas fa-spa" style="color:black;">&nbsp;PERSONAL CARE</i></h4></button><br>
              
              <button class = 'btn btn-outline-info' type = 'submit' value = 'FASHION' name= 'FASHION'><h4><i class="fas fa-tshirt" style="color:black;">&nbsp;FASHION</i></h4></button><br>
              
             
             
           </form>
          </div>
      </li>
       <li ><a href="show_cart.php" class="btn-inline-info"><i class="fas fa-shopping-cart" style="color:black;"><h4>MY CART</h4></i></a></li>
        <li ><a href="my_orders.php" class="btn-inline-info"><i class="fas fa-check" style="color:black;"><h4>PLACED ORDERS</h4></i></a></li>
        <li>

            <form class="navbar-form pull-left" role="search" action=<?php      
               $search_url='p_search.php'; echo $search_url; ?> method="post">
            <div class="input-group">
               <input type="text" class="form-control" placeholder="Search for products" name="q">
            <div class="input-group-btn">
                  <button type="submit" class="btn btn-default" name="submit"> .
                    <span class="glyphicon glyphicon-search"></span>
                  </button>
               </div>
            </div>
          </form>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li ><a href="sign_in_as.php" class="btn-inline-info"><i class="fa fa-sign-out"style="color:black;"><h4>LOGOUT</h4></i></a></li>
      <li><a><i><h4><?php  echo $name ?></h4></i></a></li>
    </ul>
  </div>
</nav>

<br>
<br>
<br>
<br>
<br>


<div class="container"> 
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="banner1.jpg" alt="food baner" align="center" width="1040px" height="1040px" >
      </div>

      <div class="item">
       <img src="banner2.png" alt="personal care baner" align="center" width="100%" height="50%" >
      </div>
    
      <div class="item">
       <img src="banner3.png" alt="fashion baner" align="center" width="100%" height="50%" >
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<div class="container-fluid">
<hr><p><h2>RECOMMENDED PRODUCTS</h2></p><hr>
 
<?php 

$conn = connect_db();

$sql = "SELECT * FROM products where pid in(6,7,8,11,15)";
$result = $conn->query($sql);
$sql = $result->fetch_assoc();
if($sql)
{
  echo "<table>";
            echo "<tr>";
                echo "<th></th>";
                echo "<th> &nbsp&nbsp PRODUCT ID  &nbsp&nbsp</th>";
                echo "<th> &nbsp&nbsp PRODUCT NAME  &nbsp&nbsp</th>";
                echo "<th> &nbsp&nbsp CATEGORY &nbsp&nbsp</th>";
                echo "<th> &nbsp&nbsp SELLER ID  &nbsp&nbsp</th>";
                echo "<th> &nbsp&nbsp PRICE  &nbsp&nbsp</th>";
                echo "<th> &nbsp&nbsp STOCK  &nbsp&nbsp</th>";
                 echo "<th> &nbsp&nbsp ADD TO CART  &nbsp&nbsp</th>";
            echo "</tr>";


            echo "<tr>";
                echo "<td> &nbsp &nbsp <div class='zoom'>" . "<img src='".$sql['image']."'alt='IMAGE' width=100 height=100>" . "<?div> </td>";
                echo "<td> &nbsp &nbsp" . $sql['pid'] . "</td>";
                echo "<td> &nbsp &nbsp" . $sql['p_name'] . "</td>";
                echo "<td> &nbsp &nbsp" . $sql['category'] . "</td>";
                echo "<td> &nbsp &nbsp" . $sql['sid'] . "</td>";
                echo "<td> &nbsp &nbsp" . $sql['price'] . "</td>";
                echo "<td> &nbsp &nbsp" . $sql['stock'] . "</td>";

                echo "<td><form action='cart_add.php' method='POST'><button class = 'btn btn-success' type = 'submit' value='".$sql['pid']."' name= 'SUBMIT' ><i class='fas fa-shopping-cart'>" . '&nbspADD TO CART' . "</i></button></form></td>";

            echo "</tr> <br>";


while($row = $result->fetch_assoc()){
            echo "<tr>";
                echo "<td> &nbsp &nbsp <div class='zoom'>" . "<img src='".$row['image']."'alt='IMAGE' width=100 height=100>" . "<?div> </td>";
                echo "<td> &nbsp &nbsp" . $row['pid'] . "</td>";
                echo "<td> &nbsp &nbsp" . $row['p_name'] . "</td>";
                echo "<td> &nbsp &nbsp" . $row['category'] . "</td>";
                echo "<td> &nbsp &nbsp" . $row['sid'] . "</td>";
                echo "<td> &nbsp &nbsp" . $row['price'] . "</td>";
                echo "<td> &nbsp &nbsp" . $row['stock'] . "</td>";

                echo "<td><form action='cart_add.php' method='POST'><button class = 'btn btn-success' type = 'submit' value='".$sql['pid']."' name= 'SUBMIT' ><i class='fas fa-shopping-cart'>" . '&nbspADD TO CART' . "</i></button></form></td>";
            echo "</tr><br>";
        }
        echo "</table>";

}

else{
        echo "You have no products registered!!!!";
}
?>

<!-- <div class="col-sm-6 col-md-4 col-lg-3 mb-2">
                 <div class="card-deck">
                    <div class="card p-2 border-secondary mb-2">
                      <img src="chakli-recipe.jpg" class="card-img-top" height="250">
                        <div class="card-body p-1">
                            <h4 class="card-title text-center text-info">Chakali</h4>
                            <h5 class="card-text text-center text-danger"><i class="fas fa-rupee-sign"></i>&nbsp;100/-</h5>
                          </div>
                        <div class="card-footer p-1">
                             <center><h5>BUY NOW....!!!</h5></center>
                             <form action='cart_add.php' method='POST'><button class = 'btn btn-outline-info' type = 'submit' value='' name= 'SUBMIT' >" . 'add to cart' . "</button></form>
                        </div>
                    </div>
                </div>

                      

               </div>    

               <div class="col-sm-6 col-md-4 col-lg-3 mb-2">
                 <div class="card-deck">
                    <div class="card p-2 border-secondary mb-2">
                      <img src="chakli-recipe.jpg" class="card-img-top" height="250">
                        <div class="card-body p-1">
                            <h4 class="card-title text-center text-info">Chakali</h4>
                            <h5 class="card-text text-center text-danger"><i class="fas fa-rupee-sign"></i>&nbsp;100/-</h5>
                          </div>
                        <div class="card-footer p-1">
                             <center><h5>BUY NOW....!!!</h5></center>
                        </div>
                    </div>
                </div>                      
                                     
               </div>   

               <div class="col-sm-6 col-md-4 col-lg-3 mb-2">
                 <div class="card-deck">
                    <div class="card p-2 border-secondary mb-2">
                      <img src="chakli-recipe.jpg" class="card-img-top" height="250">
                        <div class="card-body p-1">
                            <h4 class="card-title text-center text-info">Chakali</h4>
                            <h5 class="card-text text-center text-danger"><i class="fas fa-rupee-sign"></i>&nbsp;100/-</h5>
                          </div>
                        <div class="card-footer p-1">
                             <center><h5><span style="text-decoration:blink;">BUY NOW....!!!</span></h5></center>
                        </div>
                    </div>
                </div>                      
                                     
               </div>       
                  
                 <div class="col-sm-6 col-md-4 col-lg-3 mb-2">
                 <div class="card-deck">
                    <div class="card p-2 border-secondary mb-2">
                      <img src="chakli-recipe.jpg" class="card-img-top" height="250">
                        <div class="card-body p-1">
                            <h4 class="card-title text-center text-info">Chakali</h4>
                            <h5 class="card-text text-center text-danger"><i class="fas fa-rupee-sign"></i>&nbsp;100/-</h5>
                          </div>
                        <div class="card-footer p-1" style="text-decoration: blink; ">
                            <center><h5>BUY NOW....!!!</style></h5></center>
                        </div>
                    </div>
                </div>                      
                                     
               </div>    
-->
</div>
<div class="footer" align="center">

       <a href="#"><i class="fa fa-facebook-official"></i></a>
       <a href="https://in.pinterest.com/"><i class="fa fa-pinterest-p"></i></a>
       <a href="#"><i class="fa fa-twitter"></i></a>
       <a href="https://www.instagram.com"><i class="fa fa-instagram"></i></a>
       <a href="https://www.youtube.com/"><i class="fa fa-youtube"></i></a>
        <p align="center">COPYRIGHT 2020 by MCOE</p> 
</div>
</body>
</html>