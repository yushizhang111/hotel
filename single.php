<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Single</title>
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
<!---date-piker---->
<link rel="stylesheet" href="css/bootstrap-datepicker.min.css">
<script src="js/bootstrap-datepicker.min.js"></script>
<script>
	$(function() {
	$( "#datepicker,#datepicker1" ).datepicker();
	});
</script>

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
				<li><a class="play-icon popup-with-zoom-anim" href="#small-dialog"></li>

			</ul>
			<div class="nav-icon">
				<div class="hero fa-navicon fa-2x nav_slide_button" id="hero">
						<a href="#"><i class="glyphicon glyphicon-menu-hamburger"></i> </a>
					</div>

				</div>
				</div>



		</div>
		<div class="clearfix"> </div>
		</div>
<!--</div>-->
<!--//-->
<?php
	$hotel_ID=$_GET['hotel_ID'];
	$_SESSION["hotel_ID"]=$hotel_ID;
	$con=mysqli_connect("localhost","root","ZySxsusu0111","myhotel");
	mysqli_query($con, "set names 'gdk'");

	$sql = "SELECT * FROM hotel_info, hotel_fac WHERE hotel_info.H_ID = ".$hotel_ID." AND hotel_info.H_ID = hotel_fac.`Hotel ID`";
	$result = mysqli_query($con,$sql);
	echo mysqli_error($con);
	$row = mysqli_fetch_array($result);
    $_SESSION["hotel_name"]=$row[1];
    $_SESSION["hotel_location"]=$row[2];
    $_SESSION["price"]=$row[4];

?>
<div class=" banner-buying">
	<div class=" container">
	<h3><span><?php echo " $row[1] "; ?></span></h3>
	<!---->
	<div class="clearfix"> </div>
		<!--initiate accordion-->
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
<!---->

<div class="container">

	<div class="buy-single-single">

			<div class="col-md-9 single-box">

       <div class=" buying-top">
			<div class="flexslider">
<ul class="slides">
<?php
	$sql1 = "SELECT * FROM hotel_img WHERE `Hotel ID` = ".$hotel_ID." LIMIT 0, 4";
	$result1 = mysqli_query($con, $sql1);


?>

  <?php
	while($row1 = mysqli_fetch_array($result1)){
  ?>
    <li data-thumb=<?php echo " $row1[1]"; ?>>
	 <img src=<?php echo "$row1[1]";$_SESSION["hotel_img"]=$row1[1]; ?> />
    </li>
  <?php
	}
  ?>
  </ul>
</div>
<!-- FlexSlider -->
  <script defer src="js/jquery.flexslider.js"></script>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />

<script>
// Can also be used with $(document).ready()
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });
});
</script>
</div>
<div class="buy-sin-single">
			<div class="col-sm-5 middle-side immediate">
					     <h4>Location</h4>
					     <p><span class="bath"><?php echo " $row[2] "; ;?></span></p>
				         <h4>Price</h4>
						 <p><span class="bath5"><?php echo " $row[4] "; ?></span></p>
						 <h4>Rating</h4>
						 <p><span class="bath5"><?php echo " $row[5] ";  ?></span></p>
					</div>
					 <div class="col-sm-7 buy-sin">
					 	<h4>Facilities and Service</h4>
						 <?php
							$sql2 = "SELECT * FROM hotel_fac WHERE `Hotel ID` = ".$hotel_ID;
							$result2 = mysqli_query($con, $sql2);


						?>

  						<?php
							while($row2 = mysqli_fetch_array($result2)) {
                                ?>

                                <p><?php echo " $row2[1] "; ?></p>

                                <?php
                            }
                         ?>
						</div>
					 <div class="clearfix"> </div>
					</div>
					 <div class="future">
					 	<h3>Position Info</h3>
						 <h4><div id="location">Current City </div></h4>
						 <h4><div id="weather">Current Conditions</div></h4>
						 <h4><div id="temperature">00</div></h4>
							<div style="height:20rem" class="map-buy-single1" id="map">
							</div>

						</div>
					</div>

		</div>




		<div class="col-md-3">
			<div class="single-box-right right-immediate">
		     	<h4>Featured Communities</h4>
				<div class="single-box-img ">
				<div class="box-img">

					<?php
           				$con=mysqli_connect("localhost","root","ZySxsusu0111","myhotel");
            			mysqli_query($con, "set names 'gdk'");
            			$sql1 = "SELECT * FROM hotel_info, hotel_img WHERE hotel_info.H_ID = '1' AND hotel_info.H_ID = hotel_img.`Hotel ID`";
            			$result1 = mysqli_query($con,$sql1);
           				$row1 = mysqli_fetch_array($result1);
            		?>
						<a href="single.php?hotel_ID=1"><img class="img-responsive" src="<?php echo " $row1[9]"; ?>" alt=""></a>
					</div>
					<div class="box-text">
						<p><a href="single.php?hotel_ID=1"><?php echo " $row1[1] ";?></a></p>
						<a href="single.php?hotel_ID=1" class="in-box">More Info</a>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="single-box-img">
				<div class="box-img">

					<?php
           				$con=mysqli_connect("localhost","root","ZySxsusu0111","myhotel");
            			mysqli_query($con, "set names 'gdk'");
            			$sql2 = "SELECT * FROM hotel_info, hotel_img WHERE hotel_info.H_ID = '20' AND hotel_info.H_ID = hotel_img.`Hotel ID`";
            			$result2 = mysqli_query($con,$sql2);
           				$row2 = mysqli_fetch_array($result2);
            		?>
						<a href="single.php?hotel_ID=20"><img class="img-responsive" src="<?php echo " $row2[9]"; ?>" alt=""></a>
					</div>
					<div class="box-text">
						<p><a href="single.php?hotel_ID=20"><?php echo " $row2[1] ";?></a></p>
						<a href="single.php?hotel_ID=20" class="in-box">More Info</a>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="single-box-img">
				<div class="box-img">

					<?php
           				$con=mysqli_connect("localhost","root","ZySxsusu0111","myhotel");
            			mysqli_query($con, "set names 'gdk'");
            			$sql4 = "SELECT * FROM hotel_info, hotel_img WHERE hotel_info.H_ID = '74' AND hotel_info.H_ID = hotel_img.`Hotel ID`";
            			$result4 = mysqli_query($con,$sql4);
           				$row4 = mysqli_fetch_array($result4);
            		?>
						<a href="single.php?hotel_ID=74"><img class="img-responsive" src="<?php echo " $row4[9]"; ?>" alt=""></a>
					</div>
					<div class="box-text">
						<p><a href="single.php?hotel_ID=74"><?php echo " $row4[1] ";?></a></p>
						<a href="single.php?hotel_ID=74" class="in-box">More Info</a>
					</div>
					<div class="clearfix"> </div>
				<div class="single-box-img">
				<div class="box-img">

					<?php
           				$con=mysqli_connect("localhost","root","ZySxsusu0111","myhotel");
            			mysqli_query($con, "set names 'gdk'");
            			$sql5 = "SELECT * FROM hotel_info, hotel_img WHERE hotel_info.H_ID = '55' AND hotel_info.H_ID = hotel_img.`Hotel ID`";
            			$result5 = mysqli_query($con,$sql5);
           				$row5 = mysqli_fetch_array($result5);
            		?>
						<a href="single.php?hotel_ID=55"><img class="img-responsive" src="<?php echo " $row5[9]"; ?>" alt=""></a>
					</div>
					<div class="box-text">
						<p><a href="single.php?hotel_ID=55"><?php echo " $row5[1] ";?></a></p>
						<a href="single.php?hotel_ID=55" class="in-box">More Info</a>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="single-box-img">
				<div class="box-img">

					<?php
           				$con=mysqli_connect("localhost","root","ZySxsusu0111","myhotel");
            			mysqli_query($con, "set names 'gdk'");
            			$sql3 = "SELECT * FROM hotel_info, hotel_img WHERE hotel_info.H_ID = '13' AND hotel_info.H_ID = hotel_img.`Hotel ID`";
            			$result3 = mysqli_query($con,$sql3);
           				$row3 = mysqli_fetch_array($result3);
            		?>
						<a href="single.php?hotel_ID=13"><img class="img-responsive" src="<?php echo " $row3[9]"; ?>" alt=""></a>
					</div>
					<div class="box-text">
						<p><a href="single.php?hotel_ID=13"><?php echo " $row3[1] ";?></a></p>
						<a href="single.php?hotel_ID=13" class="in-box">More Info</a>
					</div>
					<div class="clearfix"> </div>
				</div>


				</div>
				<div class="online_reservation">
					<div class="b_room">
						<div class="reservation">
							<form action="BookingCheck.php" method="POST">
								<div class="book_date">
									<h5>Check In Date:</h5>
									<input type="text" class="date" name="in_date" id="datepicker" value="MM/DD/YYYY" placeholder="MM/DD/YYYY"/>
								</div>
								<div class="book_date">
									<h5 class="marginTop">Check Out Date:</h5>
									<input type="text" class="date" name="out_date" id="datepicker1" value="MM/DD/YYYY" placeholder="MM/DD/YYYY"/>
								</div>
								<h5 class="marginTop">Adults:</h5>
								<div class="select">
									<select name="adults" id="adults">
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
									</select>
								</div>
								<h5 class="marginTop">Children:</h5>
								<div class="select">
									<select name="children" id="children">
										<option value="0">0</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
									</select>
								</div>
								<button class="date_btn" name="submit" type="submit" value="Book Now" href='Booking.php'>Book Now</button>
							</form>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
		 </div>

	  </div>
		<div class="clearfix"> </div>
		</div>
<!--	</div>-->

<!---->
<div class="container">
	<div class="future">
		<h3 >Review</h3>
		<?php
			$sql3 = "SELECT * FROM hotel_review WHERE `Hotel ID` = ".$hotel_ID;
			$result3 = mysqli_query($con, $sql3);


		?>

			<div class="content-bottom-in">
					<ul id="flexiselDemo1">
					<?php
					while($row3 = mysqli_fetch_array($result3)){
				  	?>
						<li><div class="project-fur">
						<p class="fur3"><span><?php echo " $row3[3] "; ?></span></p>
									<div class="fur">
										<div class="fur1">
		                                    <h6 class="fur-name"><?php echo " $row3[1] "; ?></h6>
											<?php
                                            if (isset($_SESSION["name"])) {
                                                if ($row3[1] == $_SESSION["name"]) {
                                                    echo
                                                        '<form action="reviewcheck.php" method="post">
												<input type="hidden" name="h_ID" value='.$row3[0].'>
												<input class="del_btn" type="submit" name="Submit" value="Delete">
												<input type="hidden" name="Rev_Content" value='.$row3[3].'>
												</form>';
                                                }
                                            }

												?>
                               			</div>
			                            <div class="fur2">
			                               	<span><?php echo " $row3[2] "; ?></span>
			                             </div>
									</div>
							</div>
							</li>
							<?php
						}
					  ?>

					</ul>
					<?php
					echo "<button class='date_btn'><a href='feedback.php?hotel_ID=".$row['H_ID']."'>Write a Review</a></button>";
					?>
            <style>
            a:link, a:visited {
                color: white;
                text-decoration: none;
            }
            </style>

					<script type="text/javascript">
						$(window).load(function() {
							$("#flexiselDemo1").flexisel({
								visibleItems: 4,
								animationSpeed: 1000,
								autoPlay: true,
								autoPlaySpeed: 3000,
								pauseOnHover: true,
								enableResponsiveBreakpoints: true,
						    	responsiveBreakpoints: {
						    		portrait: {
						    			changePoint:480,
						    			visibleItems: 1
						    		},
						    		landscape: {
						    			changePoint:640,
						    			visibleItems: 2
						    		},
						    		tablet: {
						    			changePoint:768,
						    			visibleItems: 3
						    		}
						    	}
						    });

						});
			</script>
			<script type="text/javascript" src="js/jquery.flexisel.js"></script>
		</div>
	</div>

</div>
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
<script>
var weatherConditions = new XMLHttpRequest();
var weatherForecast = new XMLHttpRequest();
var cloud;

// GET THE CONDITIONS
weatherConditions.open('GET', 'https://api.wunderground.com/api/f029e46fd0232d12/geolookup/conditions/forecast/q/Australia/Brisbane.json', true);
console.log(weatherConditions);

weatherConditions.responseType = 'text';
weatherConditions.send(null);
console.log(weatherConditions);

weatherConditions.onload = function() {
	console.log(weatherConditions);
    if (weatherConditions.status === 200){
        cloud = JSON.parse(weatherConditions.responseText);
        document.getElementById('location').innerHTML =cloud.current_observation.display_location.full;
        document.getElementById('weather').innerHTML =cloud.current_observation.weather;
        document.getElementById('temperature').innerHTML =cloud.current_observation.temp_c+"c";

        console.log(cloud);


    }
};

<?php
	$sql4 = "SELECT * FROM hotel_info WHERE `H_ID` = ".$hotel_ID;
	$result4 = mysqli_query($con, $sql4);


?>

<?php
	while($row4 = mysqli_fetch_array($result4)){
?>

	function initMap() {
		var myhotel = {lat: <?php echo " $row4[6] "; ?>, lng: <?php echo " $row4[7] "; ?>};
		var map = new google.maps.Map(document.getElementById('map'), {
		zoom: 15,
		center: myhotel
		});
		var marker = new google.maps.Marker({
			position: myhotel,
			map: map
		});
		}
<?php
	}
?>

</script>

<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBU5hXjOkDhFxlKM-psINPlpGKrrugZMBI&callback=initMap">
</script>
<!--//footer-->
</body>
</html>