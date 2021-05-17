<html>
   <title>
   	  
   </title>
   <head>
   	  <!-- <meta charset="utf-8">
   	   <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>--->
		<meta charset="UTF-8">

		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

   		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
	
	  
	    
	    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' />

	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	    
	    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />
		
		<link rel="stylesheet" href="HOMEPAGE.css">

	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	 	
	 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- <link rel="stylesheet" type="text/css" href="products.css">
     -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>-->

   </head>

   <body>
   	   <nav class="navbar navbar">
		  	<div class="container-fluid">
		    	<div class="navbar-header">
		      		<p class="navbar-brand"><i>SHOP</i></p> 
		    	</div>
		    	<ul class="nav navbar-nav">
		      		<li class="active"><a href="HOMEPAGE.php">Home</a></li>
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
		      		<li><a href="sign_in_as.php">
		      		<span class="glyphicon glyphicon-log-in"></span> Login</a>
		      		</li>
		    	</ul>
		  	</div>
		</nav>

    <div class="containeer">
     	<?php
        
			session_start();

			if($_POST || isset($_SESSION['cat']))
			{
				require 'b_db_key.php';
				$conn = connect_db();
				

				if(isset($_POST['FOODS']) || (isset($_SESSION['cat']) && $_SESSION['cat']=='Food'))
				{
					echo 'FOODS PRODUCTS ARE - '.'<br>';
					$category_p='Food';
				}
				else if(isset($_POST['PERSONAL_CARE']) || (isset($_SESSION['cat']) && $_SESSION['cat']=='PERSONAL_CARE'))
				{
					echo 'PERSONAL CARE PRODUCTS ARE - '.'<br>';
					$category_p='Personal care';
				}
				else if(isset($_POST['FASHION']) || (isset($_SESSION['cat']) && $_SESSION['cat']=='Fashion'))
				{
					echo 'FASHION PRODUCTS ARE - '.'<br>';
					$category_p='Fashion';
				}
				else if(isset($_POST['KIDS']) || (isset($_SESSION['cat']) && $_SESSION['cat']==' '))
				{
					echo 'KIDS PRODUCTS ARE - '.'<br>';
					$category_p='Kids';
				}

				$sql = "SELECT * FROM products where category='$category_p'";
				$result = $conn->query($sql);
				$sql = $result->fetch_assoc();
				if($sql)
				 {
					
	    ?>
				  	<div class="col-sm-6 col-md-4 col-lg-3 mb-2">
			        	<div class="card-deck">
			          		<div class="card p-2 border-secondary mb-2">
			            	   <img src="<?= $sql['image'] ?>" class="card-img-top" height="250">
			            	   <div class="card-body p-1">
			              		  <h4 class="card-title text-center text-info"><?= $sql['p_name'] ?></h4>
			              		  <h5 class="card-text text-center text-danger"><i class="fas fa-rupee-sign"></i>&nbsp;&nbsp;<?= number_format($sql['price'],2) ?>/-</h5>

			            		</div>
			            		<div class="card-footer p-1">
			                       <form action="" class="form-submit">
			                           	 <div class="row p-2">
			                  				<div class="col-md-6 py-1 pl-4">
			                    				<b>Quantity : </b>
			                  				</div>
			                  				<div class="col-md-6">
			                    			  <input type="number" class="form-control pqty" value="<?= $row['qty'] ?>">
			                  				</div>
			                			</div>
			                			<input type="hidden" class="pid" value="<?= $sql['pid'] ?>">
			                			<input type="hidden" class="pname" value="<?= $sql['p_name'] ?>">
			                			<input type="hidden" class="pprice" value="<?= $sql['price'] ?>">
			               		 		<input type="hidden" class="pimage" value="<?= $sql['image'] ?>">
			                			<button class="btn btn-info btn-block addItemBtn"><i class="fas fa-cart-plus"></i>&nbsp;&nbsp;Add to cart</button>
			              			</form>
			            		</div>
			          		</div>
			        	</div>
	      			</div>
		<?php $i=1;  while($row = $result->fetch_assoc())
			        {
		 ?>   	
           			 <div class="col-sm-6 col-md-4 col-lg-3 mb-2">
       					 <div class="card-deck">
          					<div class="card p-2 border-secondary mb-2">
            					<img src="<?= $sql['image'] ?>" class="card-img-top" height="250">
            						<div class="card-body p-1">
              							<h4 class="card-title text-center text-info"><?= $sql['p_name'] ?></h4>
              							<h5 class="card-text text-center text-danger"><i class="fas fa-rupee-sign"></i>&nbsp;&nbsp;<?= number_format($sql['price'],2) ?>/-</h5>
   						            </div>
            						<div class="card-footer p-1">
              							<form action="" class="form-submit">
                							<div class="row p-2">
                  								<div class="col-md-6 py-1 pl-4">
                    								<b>Quantity : </b>
                  								</div>
                  								<div class="col-md-6">
                    						 		<input type="number" class="form-control pqty" value="<?= $sql['qty'] ?>">
                  								</div>
                							</div>
                							<input type="hidden" class="pid" value="<?= $sql['pid'] ?>">
                							<input type="hidden" class="pname" value="<?= $sql['p_name'] ?>">
                							<input type="hidden" class="pprice" value="<?= $sql['price'] ?>">
                							<input type="hidden" class="pimage" value="<?= $sql['image'] ?>">
                							<button class="btn btn-info btn-block addItemBtn"><i class="fas fa-cart-plus"></i>&nbsp;&nbsp;Add to cart</button>
              							</form>
            						</div>
          					</div>
        				</div>
      				 </div>        		
		<?php 
		     $i+=1; 
		            }
                  
			        
				}
				else
				{
					echo 'NO PRODUCTS';
				}
				//session_destroy();
			}
	
			else
			{
				echo "NO POST";
			}	
			
        ?>			

     </div>
 
      <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>

  <script type="text/javascript">
  $(document).ready(function() {

    // Send product details in the server
    $(".addItemBtn").click(function(e) {
      e.preventDefault();
      var $form = $(this).closest(".form-submit");
      var pid = $form.find(".pid").val();
      var pname = $form.find(".pname").val();
      var pprice = $form.find(".pprice").val();
      var pimage = $form.find(".pimage").val();
     

      var pqty = $form.find(".pqty").val();

      $.ajax({
        url: 'action.php',
        method: 'post',
        data: {
          pid: pid,
          pname: pname,
          pprice: pprice,
          pqty: pqty,
          pimage: pimage,
          pcode: pcode
        },
        success: function(response) {
          $("#message").html(response);
          window.scrollTo(0, 0);
          load_cart_item_number();
        }
      });
    });

    // Load total no.of items added in the cart and display in the navbar
    load_cart_item_number();

    function load_cart_item_number() {
      $.ajax({
        url: 'action.php',
        method: 'get',
        data: {
          cartItem: "cart_item"
        },
        success: function(response) {
          $("#cart-item").html(response);
        }
      });
    }
  });
  </script>
   
     
   </body>
</html>

