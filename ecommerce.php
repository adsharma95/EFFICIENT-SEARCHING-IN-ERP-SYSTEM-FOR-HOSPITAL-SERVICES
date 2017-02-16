<!DOCTYPE html> 
<html lang="en">
<head>  
<meta charset="utf-8">  
<meta http-equiv="X-UA-Compatible" content="IE=edge">  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<meta name="description" content="">
<meta name="author" content="">
    <title>Medi-Store</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.1/jquery.validate.min.js" type="text/javascript"></script>

<!-- Custom CSS -->  
  <link rel="stylesheet" type="text/css" href="style.css">  

</head>

<body>
	
	<!-- jQuery Version 1.11.0 -->  
	<script src="js/jquery-1.11.1.js"></script>

	<!-- Bootstrap Core JavaScript -->  
	<script src="js/bootstrap.js"></script> 
  
	<!-----------------------navbar start------------------------------------------->

	<!-- Navigation -->  
  <nav class="navbar-inverse" role="navigation">    
  <div class="container-fluid">      
  
  <!-- Brand and toggle get grouped for better mobile display -->      
  <div class="navbar-header">        
  <button type="button" class="navbar-toggle collapsed" datatoggle="collapse" data-target="#bs-example-navbar-collapse-1">          
  <span class="sr-only">Toggle navigation</span>          
  <span class="icon-bar"></span>          
  <span class="icon-bar"></span>          
  <span class="icon-bar"></span>        
  </button>        
  <a class="navbar-brand" href="ecommerce.html">Medi-Store</a>      
  </div>
  
  <!-- Collect the nav links, forms, and other content for toggling -->      
  <div class="collapse navbar-collapse" id="bs-example-navbarcollapse-1"> 
	
	<div class="collapse navbar-collapse" id="bs-example-navbarcollapse-1"> 
	<ul class="nav navbar-nav">          
	<li class="dropdown">            
	<a href="#" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Categories<span class="caret"></span></a>
		<ul class="dropdown-menu" role="menu">
			<li><a href="#">Medical Accessories</a></li>
			<li><a href="#">Baby Products</a></li>
			<li><a href="#">Beauty Products</a></li>
			<li><a href="#">Skin Product</a></li>
			<li><a href="#">Rare &amp; Exclusive</a></li>
			<li><a href="#">Fever</a></li>

			<li class="divider"></li>              
			<li><a href="ecommerce.html">All Categories</a></li>
		</ul>      
	</li>          
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
	  </ol>          
	  <div class="carousel-inner" role="listbox">            
	  <div class="item active">              
	  <img class="slide-image" src="http://www.medsurgeindia.com/images/slides/hospitals/megamind_07.jpg" alt="" />            
	  </div>            
	  <div class="item">              
	  <img class="slide-image" src="http://www.apollohospdelhi.com/sites/default/files/desk/apollo-overview.jpg" alt="" />            
	  </div>            
	  <div class="item">              
	  <img class="slide-image" src="http://www.healthandhopes.com/wp-content/uploads/2016/09/Saket-Facade-1.jpg" alt="" />            
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
	</div><!-- /.container class with content as the id-->


	
<ul class="row">      
	<li>
	<div class="col-sm-4 col-md-3">        
	<p style="font-size: 150%;">Categories</p>       
	<div class="list-group">          
	<a href="category.html" class="list-group-item">Medical Accessories</a>          
	<a href="category.html" class="list-group-item">Baby Products</a>          
	<a href="category.html" class="list-group-item">Beauty Products</a>          
	<a href="category.html" class="list-group-item">Skin Product</a>          
	<a href="category.html" class="list-group-item">Rare &amp; Exclusive</ a>          
	<a href="category.html" class="list-group-item">Fever</a>          
	<a href="category.html" class="list-group-item">Anti-Biotics</a>          
	<a href="category.html" class="list-group-item">Hair Care</a>          
	<a href="category.html" class="list-group-item"></a>          
	<a href="category.html" class="list-group-item"></a>        
	</div>      
	</div>    
	</div>  
	</div><!-- /.container class with content as the id--> 
	
	
	
	

	<!----------------------Adding Product list---------------------------->
	
	<div class="col-sm-8 col-md-9">        
	<div class="row">            
	</div> 
	</div>

	<!-----Product-1---->
	
	<li>	
	<div class="col-sm-6 col-md-4">            
	<div class="thumbnail">              
	<img src="https://res.cloudinary.com/du8msdgbj/image/upload/w_380,h_380,c_fit,a_ignore,q_60/v1477031111/jozh0uvrf2hi9xo6lyfz.jpg" alt="">             
	<div class="add-to-cart">                
	<a href="Product1.html" class="glyphicon glyphicon-plus-sign" data-toggle="tooltip" data-placement="top" title="Add to cart"></a>              
	</div>              
	<div class="caption">                
	<h4 class="pull-right">Rs. 135</h4>                
	<h4><a href="Product1.html">HIMALAYA ASHVAGANDHA TABLET</a>                
	</h4>                
	<p>60 tablet in packet</p>                
	<div class="ratings">                  
	<p class="pull-right"><a href="Product. html#comments"></a></p>                  
	<p>                    
	<span class="glyphicon glyphicon-star"></span>                    
	<span class="glyphicon glyphicon-star"></span>                    
	<span class="glyphicon glyphicon-star"></span>                    
	<span class="glyphicon glyphicon-star"></span>                    
	<span class="glyphicon glyphicon-star"></span>                  
	</p>                   
	</div>              
	</div>            
	</div>          
	</div>	
	</li>
	
	<!-----Product-2---->
	
	<li>
	<div class="col-sm-6 col-md-4">            
	<div class="thumbnail">              
	<img src="https://res.cloudinary.com/du8msdgbj/image/upload/w_380,h_380,c_fit,a_ignore,q_60/v1454329967/ojhvb0k6agb3eqjigwyu.jpg" alt="">              
	<div class="add-to-cart">                
	<a href="Product.html" class="glyphicon glyphicon-plus-sign" data-toggle="tooltip" data-placement="top" title="Add to cart"></a>              
	</div>              
	<div class="caption">                
	<h4 class="pull-right">Rs. 180</h4>                
	<h4><a href="Product.html">ZANDU VIGOREX CAPSULE</a>                
	</h4>                
	<p>10 capsule in strip</p>                
	<div class="ratings">                  
	<p class="pull-right"><a href="Product. html#comments"></a></p>                  
	<p>                    
	<span class="glyphicon glyphicon-star"></span>                    
	<span class="glyphicon glyphicon-star"></span>                    
	<span class="glyphicon glyphicon-star"></span>                    
	<span class="glyphicon glyphicon-star"></span>                    
	<span class="glyphicon glyphicon-star"></span>                  
	</p>                  
	</div>              
	</div>            
	</div>          
	</div>	
	</li>
	
	<!-----Product-3---->
	
	<li>
	

	<div class="col-sm-6 col-md-4">            
	<div class="thumbnail">              
	<img src="https://res.cloudinary.com/du8msdgbj/image/upload/w_380,h_380,c_fit,a_ignore,q_60/v1457508931/wxk7loi3ar6juhcep01a.jpg" alt="">              
	<div class="add-to-cart">                
	<a href="Product.html" class="glyphicon glyphicon-plus-sign" data-toggle="tooltip" data-placement="top" title="Add to cart"></a>              
	</div>              
	<div class="caption">                
	<h4 class="pull-right">Rs. 230</h4>                
	<h4><a href="Product.html">R89 HAIR CARE DROP</a>                
	</h4>                
	<p>30 ML drop in bottle</p>                
	<div class="ratings">                  
	<p class="pull-right"><a href="Product. html#comments"></a></p>                  
	<p>                    
	<span class="glyphicon glyphicon-star"></span>                    
	<span class="glyphicon glyphicon-star"></span>                    
	<span class="glyphicon glyphicon-star"></span>                    
	<span class="glyphicon glyphicon-star"></span>                    
	<span class="glyphicon glyphicon-star"></span>                  
	</p>                  
	</div>              
	</div>            
	</div>          
	</div>	
	</li>
	
	<!-----Product-4---->
	
	<li>
	

	<div class="col-sm-6 col-md-4">            
	<div class="thumbnail">              
	<img src="https://3.imimg.com/data3/NQ/JU/MY-2939444/cineraria-maritima-schwabe-eye-drops-250x250.jpg" alt="">              
	<div class="add-to-cart">                
	<a href="Product.html" class="glyphicon glyphicon-plus-sign" data-toggle="tooltip" data-placement="top" title="Add to cart"></a>              
	</div>              
	<div class="caption">                
	<h4 class="pull-right">Rs. 190</h4>                
	<h4><a href="Product.html">CINERARIA MARITIMA EYE DROP</a>                
	</h4>                
	<p>10 ML eye drop in bottle</p>                
	<div class="ratings">                  
	<p class="pull-right"><a href="Product. html#comments"></a></p>                  
	<p>                    
	<span class="glyphicon glyphicon-star"></span>                    
	<span class="glyphicon glyphicon-star"></span>                    
	<span class="glyphicon glyphicon-star"></span>                    
	<span class="glyphicon glyphicon-star"></span>                    
	<span class="glyphicon glyphicon-star"></span>                  
	</p>                   
	</div>              
	</div>            
	</div>          
	</div>	
	</li>
	
	<!-----Product-5---->
	
	<li>
	
	<div class="col-sm-6 col-md-4">            
	<div class="thumbnail">              
	<img src="https://res.cloudinary.com/du8msdgbj/image/upload/w_380,h_380,c_fit,a_ignore,q_60/v1470216050/oklseuuz2fncsknfxnpj.jpg" alt="">              
	<div class="add-to-cart">                
	<a href="Product.html" class="glyphicon glyphicon-plus-sign" data-toggle="tooltip" data-placement="top" title="Add to cart"></a>              
	</div>              
	<div class="caption">                
	<h4 class="pull-right">Rs. 135</h4>                
	<h4><a href="Product.html">CALCAREA PHOS 6X TABLET</a>                
	</h4>                
	<p>20 GM tablet in bottle</p>                
	<div class="ratings">                  
	<p class="pull-right"><a href="Product. html#comments">15 reviews</a></p>                  
	<p>                    
	<span class="glyphicon glyphicon-star"></span>                    
	<span class="glyphicon glyphicon-star"></span>                    
	<span class="glyphicon glyphicon-star"></span>                    
	<span class="glyphicon glyphicon-star"></span>                    
	<span class="glyphicon glyphicon-star"></span>                  
	</p>                   
	</div>              
	</div>            
	</div>          
	</div>	
	</li>
	
	<!-----Product-6---->
	
	<li>
	

	<div class="col-sm-6 col-md-4">            
	<div class="thumbnail">              
	<img src="http://www.naturetherapy.com/homeopathy/diaboherb-oral-liquid.jpg" alt="">              
	<div class="add-to-cart">                
	<a href="Product.html" class="glyphicon glyphicon-plus-sign" data-toggle="tooltip" data-placement="top" title="Add to cart"></a>              
	</div>              
	<div class="caption">                
	<h4 class="pull-right">Rs. 85</h4>                
	<h4><a href="Product.html">DIABOHERB ORAL LIQUID</a>                
	</h4>                
	<p>180 ML oral liquid in bottle</p>                
	<div class="ratings">                  
	<p class="pull-right"><a href="Product. html#comments"></a></p>                  
	<p>                    
	<span class="glyphicon glyphicon-star"></span>                    
	<span class="glyphicon glyphicon-star"></span>                    
	<span class="glyphicon glyphicon-star"></span>                    
	<span class="glyphicon glyphicon-star"></span>                    
	<span class="glyphicon glyphicon-star"></span>                  
	</p>                 
	</div>              
	</div>            
	</div>          
	</div>	
	</li>
	
	<!-----Product-7---->
	
	<li>
	

	<div class="col-sm-6 col-md-4">            
	<div class="thumbnail">              
	<img src="https://res.cloudinary.com/du8msdgbj/image/upload/w_380,h_380,c_fit,a_ignore,q_60/v1470295427/qkgnrauw5zcrgzfr3zo3.jpg" alt="">              
	<div class="add-to-cart">                
	<a href="Product.html" class="glyphicon glyphicon-plus-sign" data-toggle="tooltip" data-placement="top" title="Add to cart"></a>              
	</div>              
	<div class="caption">                
	<h4 class="pull-right">Rs. 135</h4>                
	<h4><a href="Product.html">ALFALFA TONIC SUGAR FREE</a>                
	</h4>                
	<p>180 ML tonic in bottle</p>                
	<div class="ratings">                  
	<p class="pull-right"><a href="Product. html#comments"></a></p>                  
	<p>                    
	<span class="glyphicon glyphicon-star"></span>                    
	<span class="glyphicon glyphicon-star"></span>                    
	<span class="glyphicon glyphicon-star"></span>                    
	<span class="glyphicon glyphicon-star"></span>                    
	<span class="glyphicon glyphicon-star"></span>                  
	</p>               
	</div>              
	</div>            
	</div>          
	</div>	
	</li>
	
	<!-----Product-8---->
	
	<li>
	

	<div class="col-sm-6 col-md-4">            
	<div class="thumbnail">              
	<img src="https://res.cloudinary.com/du8msdgbj/image/upload/w_380,h_380,c_fit,a_ignore,q_60/v1470305542/z30vne7n7jc3sot40mzt.jpg" alt="">              
	<div class="add-to-cart">                
	<a href="Product.html" class="glyphicon glyphicon-plus-sign" data-toggle="tooltip" data-placement="top" title="Add to cart"></a>              
	</div>              
	<div class="caption">                
	<h4 class="pull-right">Rs. 90</h4>                
	<h4><a href="Product.html">SILK N STAY MOISTURISING BODY LOTION</a>                
	</h4>                
	<p>100 ML lotion in bottle</p>                
	<div class="ratings">                  
	<p class="pull-right"><a href="Product. html#comments">15 reviews</a></p>                  
	<p>                    
	<span class="glyphicon glyphicon-star"></span>                    
	<span class="glyphicon glyphicon-star"></span>                    
	<span class="glyphicon glyphicon-star"></span>                    
	<span class="glyphicon glyphicon-star"></span>                    
	<span class="glyphicon glyphicon-star"></span>                  
	</p>                
	</div>              
	</div>            
	</div>          
	</div>	
	</li>
	
	

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

<div class="container">    
	<hr />    
	<!-- Footer -->    
	<footer>      
	<div class="row">        
	<div class="col-lg-12">          
	<p> &copy; <a href="ecommerce.html"> </a> </p>        
	</div>      
	</div>    
	</footer>  
	</div>
	
	
  <script src="js/jquery-1.11.1.js"></script>
  
  <!-- Bootstrap Core JavaScript -->  
  <script src="js/bootstrap.js"></script> 
  <!-----------------------navbar end-------------------------------------------------------------------------------------->
  </body> 
  </html>