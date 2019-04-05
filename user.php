<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title>Account Information</title>
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
<script>
    function showEmail
</script>
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
				<li><a  href="user.php"><i class="glyphicon glyphicon-user"> </i><?php echo $_SESSION["name"]?></a></li>
				<li><a class="play-icon popup-with-zoom-anim" href="#small-dialog"> </a></li>
				
			</ul>
			<div class="nav-icon">
				<div class="hero fa-navicon fa-2x nav_slide_button" id="hero">
						<a href="#"><i class="glyphicon glyphicon-menu-hamburger"></i> </a>
					</div>	

				<div id="small-dialog" class="mfp-hide">
					    <!----- tabs-box ---->


				</div>
				</div>
				 <script>
						$(document).ready(function() {
						$('.popup-with-zoom-anim').magnificPopup({
							type: 'inline',
							fixedContentPos: false,
							fixedBgPos: true,
							overflowY: 'auto',
							closeBtnInside: true,
							preloader: false,
							midClick: true,
							removalDelay: 300,
							mainClass: 'my-mfp-zoom-in'
						});
																						
						});
				</script>
					
	
		</div>
		<div class="clearfix"> </div>
		</div>	
</div>
<!--//-->	
<div class=" banner-buying">
	<div class=" container">
	<h3><span>Profile</span></h3> 
	<!---->

	<div class="clearfix"> </div>


      		
	</div>
</div>
<!--//header-->
<!--contact-->
<div class="login-right">
	<div class="container">
		<h3>Profile</h3>
		<div class="login-top">
				
				<div class="form-info">
					<form action="logout.php" method="post" >
						<label for="name" > <?php echo "User Name: ".$_SESSION["name"]?></label>
                        <br>
                        <br>
						<label for="email_address" ><?php echo "Email address: ".$_SESSION["email_address"] ?></label>
                        
                        <br>
                        <br>
                        <label class="hvr-sweep-to-right" >
				           	<input type="submit" name="submit" value="Logout">
				        </label>
					</form>
                    <br>
					<form action="editUser.php" method="post">
						<input type="text"   placeholder="Name" name="name"  >
						
						<input type="password"  placeholder="Password " name="password" >
						<input type="password"  placeholder="Password Confirm " name="confirm" > 
						 <label class="hvr-sweep-to-right">
				           	<input type="submit" name="submit" value="Change">
				           </label>
					</form>
					<br>
					<button class="explore_btn"><a href='index.php'>Explore</a></button>
					<br>
					<button class="pdf_btn"><a href='pdf.php'>Show Registration PDF</a></button>
					<br>
				</div>
					
				</div>

	</div>
	<br>
	<h3>My Booking History</h3>
	<?php
				$username = $_SESSION["name"];
				$email_address=$_SESSION["email_address"];
				$con=mysqli_connect("localhost","root","ZySxsusu0111","myhotel");
				mysqli_query($con, "set names 'gdk'");
				$sql = "SELECT * FROM b_record WHERE b_record.`Email Address` = '$email_address'";
				$result = mysqli_query($con, $sql);
				echo "
				<style>
				th{
				   text-align:center;
				}
				td{
				   text-align:center;
				   padding: 20px 10px 20px 10px;
				   
				}
				tr{
					border: 1px solid lightgray;
				}
				table{
					margin-left: 15%;
				}
				</style>
				<table class='review_content'>
				<tr>
				<th>Record ID</th>
				<th>Hotel name</th>
				<th>Location</th>
				<th>Booking Date</th>
				<th>Price</th>
				

";
				
				while($row = mysqli_fetch_array($result)) {
					echo "<tr id='review_content'>
					<td name='Record ID'>" . $row['Record ID'] . "</td>
					<td name='Hotel name'>" . $row['Hotel Name'] . "</td>
					<td name='Location'>" . $row['Location'] . "</td>
					<td name='Date'>" . $row['Date'] . "</td>
					<td name='Price'>" . $row['Price'] . "</td>
					
					<style>
					td{
						width: 300px;
					}
					</style>
					
				</tr>
	
				
				";

				}
				echo "</table>";
				?>
	<br>
	<br>
	<br>
	<h3>My Review History</h3>
	<?php
				$username = $_SESSION["name"];
				$con=mysqli_connect("localhost","root","ZySxsusu0111","myhotel");
				mysqli_query($con, "set names 'gdk'");
				$sql = "SELECT * FROM hotel_review, hotel_info WHERE hotel_review.Username = '$username' AND hotel_review.`Hotel ID` = hotel_info.H_ID";
				$result = mysqli_query($con, $sql);
				echo "
				<style>
				th{
				   text-align:center;
				}
				td{
				   text-align:center;
				   padding: 20px 10px 20px 10px;
				   
				}
				tr{
					border: 1px solid lightgray;
				}
				table{
					margin-left: 15%;
				}
				</style>
				<table class='review_content'>
				<tr>
				<th>Hotel Name</th>
				<th>Review Content</th>
				<th>Hotel Information</th>

";
				
				while($row = mysqli_fetch_array($result)) {
					echo "<tr id='review_content'>
					<td name='hotel_name'>" . $row['Hotel Name'] . "</td>
					<td name='Review COntent'>" . $row['Review Content'] . "</td>
					<style>
					td{
						width: 300px;
					}
					</style>
					<td>
					<button class='more_btn'><a href='single.php?hotel_ID=" . $row['H_ID'] . "'>Hotel Info</a></button>
					<style>
					a:link, a:visited {
						color: white;
						text-decoration: none;
					}
					</style>           
					</td>
				</tr>
	
				
				";

				}
				echo "</table>";
				?>
				
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