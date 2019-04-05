<?php session_start();
    if (!isset($_SESSION["name"])){
		echo "<script>alert('Please Login first');window.location.href='login.php';</script>";
	}

?>
<!DOCTYPE html>
<html>
<head>
<title>Feedback</title>
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
<meta name="keywords" content="Real Home Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
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
				<h1><a href="index.html">MyHotel</a></h1>
			</div>
		<!--//logo-->
		<div class="top-nav">
			<ul class="right-icons">
				<li><span ><i class="glyphicon glyphicon-phone"> </i>+1384 757 546</span></li>
				<?php	
				if (!isset($_SESSION["name"])){
				    echo "<li><a  href='login.php'><i class='glyphicon glyphicon-user'> </i>Login</a></li>";
				}else{
                    echo "<li><a  href='user.php'><i class='glyphicon glyphicon-user'> </i>".$_SESSION["name"]. "</a></li>";
				}
				
			?>
				<li><a class="play-icon popup-with-zoom-anim" href="#small-dialog"></a></li>
				<div class="nav-icon">
				<div class="hero fa-navicon fa-2x nav_slide_button" id="hero">
						<a href="#"><i class="glyphicon glyphicon-menu-hamburger"></i> </a>
					</div>	
				</div>
				</div>
					
	
		</div>
		<div class="clearfix"> </div>
		</div>	
</div>
<!--//-->	
<div class=" banner-buying">
	<div class=" container">
	<h3><span>Review</span></h3> 
	<!---->
      		
	</div>
</div>
<!--//header-->
<!--contact-->
<div class="feedback">
	<div class="container">
		<h3>Review Submition Form</h3>
		<div class="feedback-top">
		<?php
			$hotel_ID=$_GET['hotel_ID'];
			$con=mysqli_connect("localhost","root","ZySxsusu0111","myhotel");
			mysqli_query($con, "set names 'gdk'");

			$sql = "SELECT * FROM hotel_info, hotel_review WHERE hotel_info.H_ID = ".$hotel_ID." AND hotel_info.H_ID = hotel_review.`Hotel ID`";
			$result = mysqli_query($con,$sql);
			echo mysqli_error($con);
			$row = mysqli_fetch_array($result);
		?>
			<form action="reviewcheck.php" method="post">
				<label for="name" >User Name: <?php echo $_SESSION["name"]?></label>
				<br>
				<br>
				<label  for="hotel name">Hotel Name: <?php echo " $row[1] "; ?></lebel>
				<br>
				<br>
				<input type="text"  placeholder="Your City " name="user_location" required="" >
				<textarea  placeholder="Review Content" name="review_content" requried=""></textarea>
				 <label class="hvr-sweep-to-right">
	           	<input type="submit" name="Submit" value="Send Feedback">
	           </label>
			   <input type="hidden"  name="username" value="<?php echo $_SESSION["name"]?>">
			   <input type="hidden" name='h_ID' value="<?php echo " $row[0] "; ?>">
			</form>
		</div>
		<div class="clearfix"> </div>
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