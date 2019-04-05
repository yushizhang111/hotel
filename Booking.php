<?php
	session_start();
	require_once "stripe_config.php";
?>

<!DOCTYPE html>
<html>
<head>
<title>Confirmation</title>
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
				<h1><a href="index.php">MyHotel</a></h1>
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
				
			</ul>
			<div class="nav-icon">
				<div class="hero fa-navicon fa-2x nav_slide_button" id="hero">
						<a href="#"><i class="glyphicon glyphicon-menu-hamburger"></i> </a>
					</div>	

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
	<h3><span>Confirmation</h3> 

		<script type="text/javascript">
			$(function() {
			    var menu_ul = $('.menu > li > ul'),
			           menu_a  = $('.menu > li > a');
			    menu_ul.hide();
			    menu_a.click(function(e) {
			        e.preventDefault();
			        if(!$(this).hasClass('active')) {
			            menu_a.removeClass('active');
			            menu_ul.filter(':visible').slideUp('normal');
			            $(this).addClass('active').next().stop(true,true).slideDown('normal');
			        } else {
			            $(this).removeClass('active');
			            $(this).next().stop(true,true).slideUp('normal');
			        }
			    });
			
			});
		</script>
      		
	</div>
</div>
<!--//header-->
<!--contact-->
<div class="contact">
	<div class="container">
		<h3>Booking Detail</h3>
	 <div class="contact-top">
		<div class="col-md-6 contact-top1">
            <h4>Hotel Name:</h4>
		  <h4 ><?php echo $_SESSION["hotel_name"]; ?></h4>
		  <div class="contact-address">
		  	<div class="col-md-6 contact-address1">
			  	 <h4>Address:</h4>
	             <h5><b><?php echo $_SESSION["hotel_location"]; ?></b></h5>
		  	</div>
		  	<div class="clearfix"></div>
		  </div>
		  <div class="contact-address">
		  <img src="<?php echo $_SESSION["hotel_img"]; ?>" style="width:150px;height:150px"/>
		  </div>
		</div>
		<div class="col-md-6 contact-top1">
			<h4 >Check in Date</h4>
				<p><b><?php echo $_SESSION["in_date"]; ?></b></p><br>
			<h4 >Check out Date</h4>
				<p><b><?php echo $_SESSION["out_date"]; ?></b></p><br>
			<h4 >Adults</h4>
				<p><b><?php echo $_SESSION["adults"]; ?></b></p><br>
			<h4 >Children</h4>
				<p><b><?php echo $_SESSION["children"]; ?></b></p><br>
		</div>
		<div class="online_reservation">
			<div class="b_room">
				<div class="reservation">
					<form>
						<table style="width:100%; margin: 15px;">
							<tr>
								<th>ROOM TYPE</th>
								<th>SLEEPS</th>
								<th>PRICE</th>
								<th>SELECT A ROOM</th>
							</tr>
							<tr>
								<td>King Suites with Ocean View</td>
								<td>2</td>
								<td>AUD$<?php echo substr($_SESSION["price"],3,-1)*1.8; ?></td>
								<td><select name="RoomNum1">
										<option value="0">0</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
										<option value="9">9</option>
										<option value="10">10</option>
									</select>
								</td>
							</tr>
							<tr>
								<td>Single Bed</td>
								<td>1</td>
								<td>AUD$<?php echo substr($_SESSION["price"],3,-1); ?></td>
								<td>
									<select name="RoomNum2">
										<option value="0">0</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
										<option value="9">9</option>
										<option value="10">10</option>
									</select>
								</td>
								</tr>
						</table>
						<input class="date_btn" name="submit" type="submit" value="Confirm Room Selection" />
					</form>
				</div>
			</div>
		</div>
				<script>
					function window_open() {
						window.open("room.html", "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=500,left=500,width=400,height=400");
					}
				</script>
				<div class="clearfix"> </div>
				<br />
				<?php 
					$room1_price=0;
					$room2_price=0;
					$payment=0;
					
					if(isset($_GET["RoomNum1"])){
						$num_1=$_GET["RoomNum1"];
						$room1_price=$num_1*substr($_SESSION["price"],3,-1)*1.8;
					}
					if(isset($_GET["RoomNum2"])){
						$num_2=$_GET["RoomNum2"];
						$room2_price=$num_2*substr($_SESSION["price"],3,-1);
					}
					if (isset($room1_price)&&isset($room2_price)){
						$payment=$_SESSION["days"]*$_SESSION["adults"]*($room1_price + $room2_price)*100;
					}
				?>
				<div class="book_date">
					<h4><b>Please verify the room number before making payment:</b></h4>
					<br />
					<table style="width:100%; margin: 15px;">
						<tr>
							<th>King Suites with Ocean View:</th>
							<th><?php if(isset($_GET["RoomNum1"])){echo $_GET["RoomNum1"];}else{echo "0";} ?></th>
						</tr>
						<tr>
							<th>Single Bed:</th>
							<th><?php if(isset($_GET["RoomNum2"])){echo $_GET["RoomNum2"];}else{echo "0";} ?></th>
						</tr>
						<tr>
							<th>Total Payment:</th>
							<th><?php if(isset($payment)){echo $payment/100;}else{echo "0";} ?></th>
						</tr>
					</table>
				</div>
				<br />
				
				<div class="stripe_icon">
					<img src="images/stripe-payment-icon.png" alt="" />
				</div>
                <div class="col-md-6 contact-top1">
					<form action="stripeIPN.php?&hotel_ID=<?php echo $_SESSION['hotel_ID']; ?>&payment=<?php echo $payment; ?>" method="POST">
						<script
							src="https://checkout.stripe.com/checkout.js" class="stripe-button"
							data-key=<?php echo $stripeDetails['publishableKey']; ?>
							data-amount=<?php echo $payment; ?>
							data-name="MyHotel"
							data-description="Room fees"
							data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
							data-locale="auto">
						</script>
					</form>
				</div>
            </div>
		<div class="clearfix"> </div>
	</div>
	</div>
<br>
<br>
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