<!DOCTYPE html>

<?php
	require_once 'core/init.php';
	
	$sql = "SELECT * FROM products WHERE featured = 1";
	$featured = $db->query($sql);
?>
<html lang="en">
<head>  
<meta charset="utf-8">  
<meta http-equiv="X-UA-Compatible" content="IE=edge">  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<meta name="description" content="">
<meta name="author" content="">
    <title>Medi-Store</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<!-- Custom CSS -->  
  <link rel="stylesheet" type="text/css" href="style.css">  

</head>

<body>
	<!-----------------------navbar start------------------------------------------->

<?php 
$sql = "SELECT * FROM categories WHERE parent = 0";
$pquery = $db->query($sql);
?>
	
	<!-- Navigation -->  
  <nav class="navbar-inverse" role="navigation">    
       
  
  <!-- Brand and toggle get grouped for better mobile display -->      
  <div class="navbar-header">        
  <button type="button" class="navbar-toggle collapsed" datatoggle="collapse" data-target="#bs-example-navbar-collapse-1">          
  <span class="sr-only">Toggle navigation</span>          
  <span class="icon-bar"></span>          
  <span class="icon-bar"></span>          
  <span class="icon-bar"></span>        
  </button>        
  <a class="navbar-brand" href="ecommerce.php">Medi-Store</a>  
		<form id="globalSearch" class="search-box" action="/search/Search.action" method="get">
			<input type="text" name="search" placeholder="Search..."
			maxlength="30" id="search">
			<input type="submit" value="Search" id="submit">
	</form>	
	
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->      
  <div class="collapse navbar-collapse" id="bs-example-navbarcollapse-1"> 
	
	<div class="collapse navbar-collapse" id="bs-example-navbarcollapse-1"> 
	<ul class="nav navbar-nav"> 

	<?php while($parent = mysqli_fetch_assoc($pquery)) :  ?>
	<?php 
		$parent_id = $parent['id'];
		$sql2 = "SELECT * FROM categories WHERE parent = '$parent_id'";
		$cquery = $db->query($sql2);
	?>
	
	
	<!---Applying php for fetching dropdown tags and their list.------------->
	
	<li class="dropdown">            
	<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $parent['category']; ?><span class="caret"></span></a>		

		<ul class="dropdown-menu" role="menu">
			<?php while($child = mysqli_fetch_assoc($cquery)) : ?>
			<li><a href="category.html"><?php echo $child['category']; ?></a></li>
			
			<?php endwhile; ?>
		</ul>      
	</li>      
<?php endwhile; ?>    
	<li><a href="#">Doctor Appointment</a></li>          
	<li><a href="#">Hospital Bed Booking</a></li>   
	
	</ul>
	
	<ul class="nav navbar-nav navbar-right">          
	<li><a href="#"><span class="badge pull-right"> </span><i class="glyphicon glyphicon-shopping-cart"></i></a></li>          
	<li><a href="account.html"><i class="glyphicon glyphiconuser"></i></a></li>          
	<li><button type="button" class="btn btn-success" data-toggle="modal" datatarget="#myModal">Sign in</button></li>        
	</ul> 
	
  </div><!-- /.navbar-collapse -->    
  </div><!-- /.container-fluid -->  
  </nav>  <!-- jQuery Version 1.11.0 --> 


<!-- Modal -->  
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog">    
  <div class="modal-dialog">      
  <div class="modal-content">        
  <div class="modal-header">          
  <button type="button" class="close" datadismiss="modal">&times;</button>          
  <h2 class="modal-title">Sign in</h2>        
  </div>        
  <div class="modal-body">          
  <form class="form-signin" role="form">            
  <h3 class="form-signin-heading">Sign in with your email address</h3>             
  <input type="email" class="form-control" placeholder="Email address" required autofocus>            
  </div>            
  <div class="form-group">              
  <input type="password" class="form-control" placeholder="Password" required>            
  </div>            
  <div class="checkbox">              
  <label>                
  <input type="checkbox" value="remember-me"> Remember me              
  </label>            
  </div>            
  <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>          
  </form>        
  </div>
  
  
  <div class="row">          
  <div class="col-xs-3">            
  <a href="#" class="btn btn-facebook btn-large btn-caps btn-block">Facebook <span class="icon-facebook"></span></a>          
  </div>          
  <div class="col-xs-3">            
  <a href="" class="btn btn-twitter btn-large btn-caps btnblock">Twitter <span class="icon-twitter"></span></a> 
  </div>          
  <div class="col-xs-3">  
  <a href="" class="btn btn-lg btn-caps btn-block"><span class="icon-dribbble"></span></a>          
  </div>        
  </div>
  
  <div class="modal-footer"> 
 
  </div>      
  </div>    
  </div>  
 
  <!---Modal End------> 
  
  <!---------------- MODAL REGISTRATION STARTS ----------------------->
<div class="modal fade" id="popupRegister">
<div class="modal-dialog">
<div class="modal-content">
<div class ="modal-header">
<h3>REGISTRATION 
<button type="button" class="close" data-dismiss="modal">&times;</button> </h3>
</div>
<div class="modal-body">
     <form id="registrationForm" name="registrationForm" action="signup.php" method="post" role="form" class="form-horizontal">
	 <div class="form-group">
	 <label class="col-md-3 control-label">NAME </label>
	 <div class="col-md-8">
	 <input type="text" name="member_name" placeholder="Enter Name" class="form-control" id="registerUser"/><br>
	 </div>
	 </div>
	 <div class="form-group">
	 <label class="col-md-3 control-label">ADDRESS </label>
	 <div class="col-md-8">
	 <input type="text" name="member_address" placeholder="Enter Address" class="form-control" id="registerAddress"/><br>
	 </div>
	 </div>
	 <div class="form-group">
	 <label class="col-md-3 control-label">PINCODE </label>
	 <div class="col-md-8">
	 <input type="text" name="member_pin" placeholder="Enter pin" class="form-control" id="registerPincode" /><br>
	 </div>
	 </div>
     <div class="form-group">
	 <label class="col-md-3 control-label">AADHAR NUMBER </label>
	 <div class="col-md-8">
	 <input type="text" name="member_aadhar"  placeholder="Enter Adhar card number"class="form-control" id="registerAadhar" /><br>
	 </div>
	 </div>
      <div class="form-group">
	 <label class="col-md-3 control-label">SELECT PASSWORD</label>
	 <div class="col-md-8">
     <input type="password" name="member_password" placeholder="Enter password" class="form-control" id="registerPassword"/><br>
	 </div>
	 </div>
     <div class="form-group">
	 <label class="col-md-3 control-label">CONFIRM PASSWORD</label>
	 <div class="col-md-8">
	 <input type="password" name="member_repeat_password" placeholder="Enter password again" class="form-control" id="registerConfirmPassword" /><br>
	 </div>
	 </div>
	 <center><BUTTON type="submit" id="registrationButton" class="btn btn-success">REGISTER </button></center>
	 </form>
	 </div>
 </div>
 </div>
 </div>
 <!-----------------Modal Registration Ends------------------->
  
   <!-- Page Content -->
   <div id="content" class="container">
    <div class="row carousel-holder">
      <div class="col-md-12">        
	  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
	  <ol class="carousel-indicators">            
		<li data-target="#carousel-example-generic" data-slideto="0" class="active"></li>            
		<li data-target="#carousel-example-generic" data-slideto="1"></li>            
		<li data-target="#carousel-example-generic" data-slideto="2"></li>   
		<li data-target="#carousel-example-generic" data-slideto="2"></li>
	  </ol>          
	  <div class="carousel-inner" role="listbox"> 
	  <div class="item active">              
	  <img class="slide-image" src="image/slide1.jpg" alt="" />            
	  </div>
	  <div class="item">              
	  <img class="slide-image" src="image/slide2.jpg" alt="" />            
	  </div>            
	  <div class="item">              
	  <img class="slide-image" src="image/slide3.jpg" alt="" />            
	  </div>            
	  <div class="item">              
	  <img class="slide-image" src="image/slide4.jpg" alt="" />            
	  </div>          
	  </div>
          <a class="left carousel-control" href="#carousel-examplegeneric" data-slide="prev">            
		  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>          
		  <span class="sr-only">Previous</span>
		  </a>          
		  <a class="right carousel-control" href="#carousel-examplegeneric" role="button" data-slide="next">            
		  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>          
		  <span class="sr-only">Next</span>
		  </a>        
		  </div>      
		  </div>
    </div> 
	</div><!-- /.container class with content as the id--><br><br><br>

	
	
<ul class="row">      
	<li>
	<div style="text-align: center; position: relative; padding-bottom: 4px; margin-bottom: 24px;">
	<h1 style="padding: 12px 42px; letter-spacing: -0.2px; color: rgb(4, 36, 48); display: inline-block; border-bottom: 1px solid rgb(15, 158, 165); position: relative; font-size: 1.8rem; margin-bottom: 0px; box-sizing: border-box;">Featured Products</h1>
	<div style="position: absolute; padding: 0px 8px; bottom: 0px; left: 50%; background-color: rgb(255, 255, 255); box-sizing: border-box; margin-left: -12px;">
	<div style="width: 6px; height: 6px; border: 1px solid rgb(15, 158, 165); border-radius: 4px; box-sizing: border-box;"></div>
	</div>
	</div>
	
	<!----------------------Adding Product list---------------------------->
	
	

	<!-----Product-1---->
	<!--------Applying while loop so that every item which is saved in the database named 'products' will be fetched and it will be added in the product list.------>
<div class="col-md-12" id="block">	
	<?php while($products = mysqli_fetch_assoc($featured)) : ?>		
	<div class="col-md-3 text-center">
	<h4><a href="Product1.html"><?= $products['name']; ?></a></h4>
	<img src="<?= $products['image']; ?>" alt="<?= $products['name']; ?>" class="img-thumb" />
	<p class="price">PRICE: Rs. <?= $products['price']; ?></p>
	<button type="button" class="btn btn-sm btn-success" data toggle="modal" data-target="#details">Details</button>
	</div>
	
<?php endwhile; ?>
</div>	

	<!----------------------End Product list---------------------------->
				
<!-----------Adding Pagination------->
 <div class="col-sm-12 center">          
 <ul class="pagination">            
 <li class="disabled"><a href="#">&laquo;</a></li>            
 <li class="active"><a href="#">1</a></li>            
 <li><a href="ecommerce.php">2</a></li>            
 <li><a href="ecommerce.php">3</a></li>            
 <li><a href="ecommerce.php">4</a></li>            
 <li><a href="ecommerce.php">5</a></li>            
 <li><a href="#">&raquo;</a></li>          
 </ul>        
 </div>
 <!-----------Pagination End------->	
</li>
</ul> 

<!-------------------------------------------------Footer Starts-------------------------------------------------------------------->
<footer class="page-footer" id="footer" style="background-color: rgb(4, 36, 48); color: white; margin-top: 26px; padding: 12px 8px 8px; margin-bottom: 0px; font-size: 14px; text-align: center;">
	<div class="container">
	<div style="margin-bottom: 24px;">
	<a href="aboutus.html" style="margin: 8px 1rem 0px; font-size: 1rem; display: inline-block;">About Us</a>
	<a href="contactus.html" style="margin: 8px 1rem 0px; font-size: 1rem; display: inline-block;">Contact Us</a>
	<a href="/faqs" style="margin: 8px 1rem 0px; font-size: 1rem; display: inline-block;">FAQ's</a>
	<a href="/tnc" style="margin: 8px 1rem 0px; font-size: 1rem; display: inline-block;">Terms &amp; Conditions</a>
	<a href="/privacyPolicy" style="margin: 8px 1rem 0px; font-size: 1rem; display: inline-block;">Privacy Policy</a>
	<a href="/cancellationRefunds" style="margin: 8px 1rem 0px; font-size: 1rem; display: inline-block;">Cancellation &amp; Refunds</a>
	
	</div>
	<div style="margin-bottom: 24px;">
	<a href="#" target="_blank" title="Like us on Facebook" style="margin: 0px 10px; font-size: 16px; display: inline-block; height: 48px;"><img alt="Like us on Facebook" src="/assets/images/facebook.svg" style="height: 100%;"></a>
	<a href="#" target="_blank" title="Follow us on Twitter" style="margin: 0px 10px; font-size: 16px; display: inline-block; height: 48px;"><img alt="Follow us on Twitter" src="/assets/images/twitter.svg" style="height: 100%;"></a>
	<a href="#" target="_blank" title="Follow us on Google+" style="margin: 0px 10px; font-size: 16px; display: inline-block; height: 48px;"><img alt="Folow us on Google+" src="/assets/images/google-plus.svg" style="height: 100%;"></a>
	<div class="footer-copyright" style="height: initial; line-height: initial;">
	<div class="container">
	<div style="margin-bottom: 12px;">© 2017 </div>
	<div style="width: 100%; height: 56px; text-align: center; vertical-align: middle; padding: 12px;">
	<span style="vertical-align: middle; height: 100%; display: inline-block;"></span><img alt="MEDI-STORE" src="/assets/images/footer-logo.svg" style="max-width: 100%; max-height: 100%; vertical-align: middle; display: initial;">
	</div>
	</div>
	</div>
</footer>


<!-------------------------------------------------Footer Starts-------------------------------------------------------------------->	
	
 
  <!-----------------------navbar end-------------------------------------------------------------------------------------->

<script>
	jQuery(window).scroll(function(){
		var vscroll = jQuery(this).scrollTop();
		console.log(vscroll);
	});
</script>	

 </body> 
  </html>