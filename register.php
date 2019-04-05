<!DOCTYPE html>
<html>
<head>
<title>Register</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--menu-->
<script src="js/scripts.js"></script>
<link href="css/styles.css" rel="stylesheet">
<!--//menu-->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Real Home  Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
</head>
<body>
<!--header-->
	<div class="navigation">
			<div class="container-fluid">
				<nav class="pull">
					<ul>
					<li><a  href="index.php">Home</a></li>
					<li><a  href="index.php">About Us</a></li>
					<li><a  href="search.php?pass_address=Brisbane&Submit=Search+Hotel">About Brisbane</a></li>
					</ul>
				</nav>			
			</div>
		</div>

<div class="header">
	<div class="container">
		<!--logo-->
			<div class="logo">
				<h1><a href="index.php">MyHotel</a></h1>
			</div>
		<!--//logo-->
		<div class="top-nav">
			<ul class="right-icons">
				<li><span ><i class="glyphicon glyphicon-phone"> </i>+1384 757 546</span></li>
				<li><a  href="login.php"><i class="glyphicon glyphicon-user"> </i>Login</a></li>
				<li><a class="play-icon popup-with-zoom-anim" href="#small-dialog"></a></li>
				
			</ul>
			<div class="nav-icon">
				<div class="hero fa-navicon fa-2x nav_slide_button" id="hero">
						<a href="#"><i class="glyphicon glyphicon-menu-hamburger"></i> </a>
					</div>	

			<!---pop-up-box---->
			   
				<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
				<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
			<!---//pop-up-box---->
				<div id="small-dialog" class="mfp-hide">
					    <!----- tabs-box ---->

					 <script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
				    	<script type="text/javascript">
						    $(document).ready(function () {
						        $('#horizontalTab').easyResponsiveTabs({
						            type: 'default', //Types: default, vertical, accordion           
						            width: 'auto', //auto or any width like 600px
						            fit: true   // 100% fit in a container
						        });
						    });
			  			 </script>	
				</div>
				</div>

	
		</div>
		<div class="clearfix"> </div>
		</div>	
</div>
<!--//-->	
<div class=" banner-buying">
	<div class=" container">
	<h3><span>Register</span></h3> 


      		
	</div>
</div>
<!--//header-->
<!--contact-->
<div class="login-right">
	<div class="container">
		<h3>Register</h3>
		<div class="login-top">
				<ul class="login-icons">
					<li><a href="#" ><i class="facebook"> </i><span>Facebook</span></a></li>
					<li><a href="#" class="twit"><i class="twitter"></i><span>Twitter</span></a></li>
					<li><a href="#" class="go"><i class="google"></i><span>Google +</span></a></li>
					<li><a href="#" class="in"><i class="linkedin"></i><span>Linkedin</span></a></li>
					<div class="clearfix"> </div>
				</ul>
				<div class="form-info">
					<form action="regcheck.php" method="post">
						<input type="text"   placeholder="Name" name="name" required="" >
						<input type="text"   placeholder="Email Address" name="email_address" required="" >
						<input type="password"  placeholder="Password " name="password" required="">
						<input type="password"  placeholder="Password Confirm " name="confirm" required=""> 
						 <label class="hvr-sweep-to-right">
				           	<input type="submit" name="Submit" value="Sign Up">
				           </label>
					</form>
					<p>Already have a Real Home account? <a href="login.php">Login</a></p>
				</div>
			
	</div>
</div>
</div>
<!--//contact-->
<!--footer-->
<div class="footer">
	<div class="container">
		<div class="footer-top-at">
			<div class="col-md-3 amet-sed">
            <h4>Our Company</h4>
				<ul class="nav-bottom">
					<li><a href="index.php?">About Us</a></li>
					<li><a href="index.php">Homepage</a></li>
					<li><a href="index.php">Services</a></li>

					
				</ul>	
			</div>
			<div class="col-md-3 amet-sed ">
				<h4>Discover Brisbane</h4>
					<ul class="nav-bottom">
						<li><a href="search.php?pass_address=Brisbane&Submit=Search+Hotel">Hotel in Brisbane</a></li>
						<li><a href="single.php?hotel_ID=2">Outstanding Hotel</a></li>
	
					</ul>	
			</div>
			<div class="col-md-3 amet-sed">
				<h4>Customer Support</h4>
				<p>Mon-Fri, 7AM-7PM </p>
				<p>Sat-Sun, 8AM-5PM </p>
				<p>177-869-6559</p>
	
			</div>
			<div class="col-md-3 amet-sed ">
				<h4>Your Account</h4>
				   <ul class="nav-bottom">
						<li><a href="login.php">Members</a></li>
						<li><a href="register.php">New Vistors</a></li>	
					</ul>	
			</div>
		<div class="clearfix"> </div>
		</div>
	</div>
	<div class="footer-bottom">
		<div class="container">
			<div class="col-md-4 footer-logo">
				<h2><a href="index.php">MyHotel</a></h2>
			</div>
		<div class="clearfix"> </div>
	 	</div>
	</div>
</div>
<!--//footer-->
</body>
</html>