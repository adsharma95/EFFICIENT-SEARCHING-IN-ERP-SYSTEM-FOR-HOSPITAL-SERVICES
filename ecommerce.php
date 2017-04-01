<?php session_start(); ?>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
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
	<div class="image"></div>
	
	<!-----------------------navbar start------------------------------------------->

<?php 
$sql = "SELECT * FROM categories WHERE parent = 0";
$pquery = $db->query($sql);
?>
	
<!----------------------------------------navbar start----------------------------------------------------------------->

<?php 
$sql = "SELECT * FROM categories WHERE parent = 0";
$pquery = $db->query($sql);
?>
	
	<!-- Navigation -->  
<div id="content">
	<div class="navbar navbar-inverse navbar-fixed-top" > 
		<div class="container">
			<a href="ecommerce.php" class="navbar-brand">Medi-Store</a>
			<button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</button>
		<div class="collapse navbar-collapse navHeaderCollapse">
			<ul class="nav navbar-nav">
				<?php while($parent = mysqli_fetch_assoc($pquery)) :  ?>
				<?php 
					$parent_id = $parent['id'];
					$sql2 = "SELECT * FROM categories WHERE parent = '$parent_id'";
					$cquery = $db->query($sql2);
				?>
	
	
	<!---Applying php for fetching dropdown tags and their list.------------->
	


			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Categories<span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
					<li><a href="ayurvedic.php">Ayurveda</a></li>
					<li><a href="homeopathic.php">Homeopathic</a></li>
					</ul>
			</li>			
	
			<?php endwhile; ?>
			<li><a href="..\Doctor2\index.php">Doctor Appointment</a></li>          
			<li><a href="..\main\hospital_bed_booking.php">Hospital Bed Booking</a></li>  
			</ul>	
			<ul class="nav navbar-nav navbar-right">          
				<li><button type="button" class="glyphicon glyphicon-shopping-cart" data-toggle="modal" data-target="#cart"> My Cart</button></li>          
				<li><a href="#">
				<span class="glyphicon glyphicon-log-in" datatarget="#myModal"></span></a>
				</li>	
			</ul> 
</div>
</div>
</div>
</div>


<!----------------------------------------navbar start-----------------------------------------------------------------> 

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
  
  
<!------------------------------------------------- Sliding Image Starts ------------------------------------------------->
   
<div class="fadein">
	<img src="image/slide1.jpg" />
    <img src="image/slide2.jpg" />
	<img src="image/slide3.jpg" />
	<img src="image/slide4.jpg" />
</div>
<br><br><br>

<!------------------------------------------------- Sliding Image Ends ------------------------------------------------->
  
  
<!------------------------------------------------- Page Content -------------------------------------------------------->
	
	
<ul class="row">      
	<li>
	<div style="text-align: center;
	position: relative;
	top: 60px;
	padding-bottom: 4px;
	margin-bottom: 24px;">
	<h1 style="padding: 12px 42px;
	letter-spacing: -0.2px;
	color: #000000;
	display: inline-block;
	border-bottom: 2px solid #000000;
	position: relative;
	font-size: 1.8rem;
	margin-bottom: 0px;
	box-sizing: border-box;">
	<b><font size="6">FEATURED MEDICINES</font></b></h1>
	<div style="position: absolute;
	padding: 0px 8px;
	bottom: 0px;
	left: 50%;
	background-color: rgb(255, 255, 255);
	box-sizing: border-box;
	margin-left: -12px;">
	<div style="width: 6px;
	height: 6px;
	border: 3px solid rgb(15, 158, 165);
	border-radius: 4px;
	box-sizing: border-box;">
	</div>
	</div>
	</div>
	
	<!----------------------Adding Product list---------------------------->
	
	

	<!-----Adding Product ist via PHP(All products will be fetched from my own database)----->
	<!--------Applying while loop so that every item which is saved in the database named 'products' will be fetched and it will be added in the product list.------>
<div class="col-md-12" id="block">	
	<?php
	while($products=mysqli_fetch_array($featured))
	{
		?>
		<div class="col-md-3 text-center" id="blocks">
		<tr>
		<img src="<?= $products['image']; ?>" alt="<?= $products['Name']; ?>" class="img-thumb" />
		</tr>
		<tr>
		<h4><?= $products['Name']; ?></h4
		</tr>
		<tr>
		<p class="price">PRICE: Rs. <?= $products['Price']; ?></p>
		</tr>
		<tr>
		<input type="button" name="details" id="<?php echo $products['id']; ?>" class="details_data" value="Details" />
		</tr>
		</div>
		
		<?php
	}
     ?>	

</div>	

	<!----------------------End Product list---------------------------->

<?php
	include 'includes/detailsmodal.php';
?>

</li>
</ul> 

<!-------------------------------------------------Footer Starts-------------------------------------------------------------------->
<footer class="page-footer" id="footer" style="background-color: rgb(4, 36, 48); color: white; margin-top: 26px; padding: 12px 8px 8px; margin-bottom: 0px; font-size: 14px; text-align: center;">
	<div class="container">
	<div style="margin-bottom: 24px;">
	<a href="aboutus.html" style="margin: 8px 1rem 0px; font-size: 1rem; display: inline-block;">About Us</a>
	<a href="contactus.php" style="margin: 8px 1rem 0px; font-size: 1rem; display: inline-block;">Contact Us</a>
	
	</div>
	<div style="margin-bottom: 24px;">
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

<div id="dataModal" class="modal fade">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" >&times;</button>
<h4 class="modal-title">DETAILS</h4>
</div>
<div class="modal-body" id="product_details">
	<span id="modal_errors" class="bg-danger">
		
</div>
</div>
</div>
</div>

<div id="cart" class="modal fade">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" >&times;</button>
<h4 class="modal-title">DETAILS</h4>
</div>
<div class="modal-body" >
<div class="table-responsive">
	<table class="table table-bodered">
	<th>Item</th><th>Quantity</th><th>Price</th><th>Total</th><th>Action</th>
	<tbody id="cart_details"></tbody></table>
</div>		
</div>
<div class="modal-footer">
<center><button type="button" class="btn btn-success" id="checkout" >CHECKOUT</button></center>
<script>
$("#checkout").click(function(){
var table = $("table tbody");
	var total=0;
	table.find('tr').each(function (i) {
		var $tds = $(this).find('td');
		total= Number(total)+Number($tds.eq(3).text());
		
	});
$(this).html("Pay:Rs "+total);
$("button#checkout").attr("id","payment");
$("button#payment").click(function(){
	$("#paymentModal").modal("show");
});
}
);
</script>
</div>

</div>
</div>
</div>

<div id="paymentModal" class="modal fade">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" >&times;</button>
<h4 class="modal-title"><B>PAYMENT DETAILS</B></h4>
</div>
<div class="modal-body" id="payment_details">
	<form action="?" method="post" role="form" id="searchForm" class="form-horizontal">
	
	<div class="form-group">
	 <label class="col-md-3 control-label">User Name:</label>
	 <div class="col-md-8">
<input type="text" name="username" value="<?php  echo $_SESSION['username'] ?>" class="form-control" id="username" readonly/>
</div>
</div>
    <div class="form-group">
	 <label class="col-md-3 control-label">Email Id:</label>
	 <div class="col-md-8">
<input type="text" name="email" class="form-control" id="email" />
</div>
</div>
<div class="form-group">
	 <label class="col-md-3 control-label">Phone Number:</label>
	 <div class="col-md-8">
<input type="text" name="phonenumber"  class="form-control" id="phonenumber" />
</div>
</div>
<div class="form-group">
	 <label class="col-md-3 control-label">Address:</label>
	 <div class="col-md-8">
<textarea name="address"  class="form-control" id="address" ></textarea>
</div>
</div>
<div class="form-group">
	 
	 <div class="col-md-8">
<center><a href="success_payment.php" class="btn btn-success">MAKE PAYMENT</a></center>
</div>
</div>
	</form>
		
</div>
</div>
</div>
</div>





<script>
<!-------------Fetch the details of product and display it on the details modal of each product-------->
$(document).ready(function(){
	$('.details_data').click(function()
	{
		var product_id = $(this).attr("id");
		$.ajax(
		{
			url:"includes/detailsmodal.php",
			method:"post",
			data:{product_id:product_id},
			success:function(data)
			{
				$('#product_details').html(data);
				$('#dataModal').modal("show");
			}
		}
		);
		
	});
});

$(function(){
    $('.fadein img:gt(0)').hide();
    setInterval(function(){
      $('.fadein :first-child').fadeOut()
         .next('img').fadeIn()
         .end().appendTo('.fadein');}, 
      3000);
});

</script>


 </body> 
  </html>