<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>MyHotel</title>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Custom Theme files -->
    <!--menu-->
    <script src="js/scripts.js"></script>
    <link href="css/styles.css" rel="stylesheet">
    <!--//menu-->
    <!--theme-style-->
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <!--//theme-style-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="Real Home Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design"/>
    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
    <!-- slide -->
    <script src="js/responsiveslides.min.js"></script>
    <script>
        $(function () {
            $("#slider").responsiveSlides({
                auto: true,
                speed: 500,
                namespace: "callbacks",
                pager: true,
            });
        });
    </script>
</head>
<body>
<!--header-->
<div class="navigation">
    <div class="container-fluid">
        <nav class="pull">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#mid-content">About Us</a></li>
                <li><a  href="search.php?pass_address=Brisbane&Submit=Search+Hotel">About Brisbane</a></li>

            </ul>
        </nav>
    </div>
</div>

<div class="header">
    <div class="container">
        <!--logo-->
        <div id="logo" class="logo">
            <h1><a href="index.php">MyHotel</a></h1>
        </div>
        <!--//logo-->
        <div class="top-nav">
            <ul class="right-icons">
                <?php
                if (!isset($_SESSION["name"])) {
                    echo "<li><a  href='login.php'><i class='glyphicon glyphicon-user'> </i>Login</a></li>";
                } else {
                    echo "<li><a  href='user.php'><i class='glyphicon glyphicon-user'> </i>" . $_SESSION["name"] . "</a></li>";
                }

                ?>
                <li><a class="play-icon popup-with-zoom-anim" href="#small-dialog">

            </ul>
            <div class="nav-icon">
                <div class="hero fa-navicon fa-2x nav_slide_button" id="hero">
                    <a href="#"><i class="glyphicon glyphicon-menu-hamburger"></i> </a>
                </div>
            </div>
            <div class="clearfix"></div>
            <!---pop-up-box---->

            <link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
            <script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
            <!---//pop-up-box---->
            <div id="small-dialog" class="mfp-hide">
                <!----- tabs-box ---->
                <div class="sap_tabs">
                    <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
                        <ul class="resp-tabs-list">
                            <li class="resp-tab-item " aria-controls="tab_item-0" role="tab"><span>Hotels</span></li>
                            <div class="clearfix"></div>
                        </ul>
                        <div class="resp-tabs-container">
                            <h2 class="resp-accordion resp-tab-active" role="tab" aria-controls="tab_item-0"><span
                                        class="resp-arrow"></span>All Homes</h2>
                            <div class="tab-1 resp-tab-content resp-tab-content-active" aria-labelledby="tab_item-0"
                                 style="display:block">
                                <div class="facts">
                                    <div class="login">
                                        <input type="text" value="Search Address, Neighborhood, City or Zip"
                                               onFocus="this.value = '';"
                                               onBlur="if (this.value == '') {this.value = 'Search Address, Neighborhood, City or Zip';}">
                                        <input type="submit" value="">
                                    </div>
                                </div>
                            </div>
                        </div>
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
            <script>
                $(document).ready(function () {
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
        <div class="clearfix"></div>
    </div>
</div>
<!--//-->
<div class="copyrights">copyrights for UQ.</div>
<div class=" header-right">
    <div class=" banner">
        <div class="slider">
            <div class="callbacks_container">
                <ul class="rslides" id="slider">
                    <li>
                        <div class="banner1">
                            <div class="caption">
                                <h3><span>Greatviews</span></h3>
                                <p>To meet all your demands.</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="banner2">
                            <div class="caption">
                                <h3><span>Greatprice</span></h3>
                                <p>To meet all your demands.</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="banner3">
                            <div class="caption">
                                <h3><span>Greatservice</span></h3>
                                <p>To meet all your demands.</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!--header-bottom-->
<div class="banner-bottom-top">
    <div class="container">
        <div class="bottom-header">
            <div class="header-bottom">
                <div class=" bottom-head">
                    <a>
                        <div class="buy-media">
                            <?php
                            
                            echo
                            '<form action="search.php" method="get">
								<h6>Search Your Destination Here</h6>
								<input type="text" class="form-control" id="address" style="margin:0; width: 85%; height:60px;float:left;" name="pass_address" value="Brisbane" onkeyup="showHint(this.value)" autocomplete="off"/>
								<button class="search_btn" id="s_btn" name="Submit" style="float:right; margin:0;" value="Search Hotel" >Search</button>
								</form>';
                            ?>
                            <span id="textSuggest" onclick="pasteSuggest()"></span>
                            <style>
                                #address, .search_btn {
                                    opacity: 0;
                                }
                                #s_btn {
                                    width: 14% !important;
                                }
                            </style>
                        </div>
                    </a>
                </div>
                <script>
                    $(".bottom-head a").mouseenter(function () {
                        $("#address").fadeTo(500, 1);
                        $(".search_btn").fadeTo(50, 1);
                    });

                    $(".bottom-head a").mouseleave(function () {
                        $("#address").fadeTo(300, 0);
                        $(".search_btn").fadeTo(50, 0);
                    });

                    function showHint(str) {
                        if (str.length == 0) {
                            document.getElementById("textSuggest").innerHTML = "";
                            return;
                        }
                        if (window.XMLHttpRequest) {
                            xmlhttp = new XMLHttpRequest();
                        }
                        else {
                            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                        }
                        xmlhttp.onreadystatechange = function () {
                            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                                document.getElementById("textSuggest").innerHTML = xmlhttp.responseText;
                            }
                        }
                        xmlhttp.open("GET", "addrsuggest.php?q=" + str, true);
                        xmlhttp.send();
                    }

                    function pasteSuggest() {
                        $('#address').val(document.getElementById("textSuggest").innerHTML);
                    }
                </script>
            </div>
        </div>
    </div>
</div>
<!--//-->

<!--//header-bottom-->


<!--//header-->
<!--content-->
<div class="content">
    <div class="content-grid">
        <div class="container">
            <h3>Most Popular</h3>


            <div class="col-md-4 box_2">
            <?php
            $con=mysqli_connect("localhost","root","ZySxsusu0111","myhotel");
            mysqli_query($con, "set names 'gdk'");
            $sql1 = "SELECT * FROM hotel_info, hotel_img WHERE hotel_info.H_ID = '17' AND hotel_info.H_ID = hotel_img.`Hotel ID`";
            $result1 = mysqli_query($con,$sql1);
            $row1 = mysqli_fetch_array($result1);
            ?>
            
            <a href="single.php?hotel_ID=1" class="mask">
                    <img class="img-responsive zoom-img" src="<?php echo " $row1[9]"; ?>" alt="">
                    <span class="four"><?php echo " $row1[4] "; ?></span>
                </a>
                <div class="most-1">
                    <h5><a href="single.php?hotel_ID=1"><?php echo " $row1[1] ";?></a></h5>
                    <p><?php echo " $row1[2] "; ?></p>
                </div>
            </div>
            <div class="col-md-4 box_2">
            <?php
            $con=mysqli_connect("localhost","root","ZySxsusu0111","myhotel");
            mysqli_query($con, "set names 'gdk'");
            $sql2 = "SELECT * FROM hotel_info, hotel_img WHERE hotel_info.H_ID = '5' AND hotel_info.H_ID = hotel_img.`Hotel ID`";
            $result2 = mysqli_query($con,$sql2);
            $row2 = mysqli_fetch_array($result2);
            ?>
            
            <a href="single.php?hotel_ID=1" class="mask">
                    <img class="img-responsive zoom-img" src="<?php echo " $row2[9]"; ?>" alt="">
                    <span class="four"><?php echo " $row2[4] "; ?></span>
                </a>
                <div class="most-1">
                    <h5><a href="single.php?hotel_ID=1"><?php echo " $row2[1] ";?></a></h5>
                    <p><?php echo " $row2[2] "; ?></p>
                </div>

            </div>
            <div class="col-md-4 box_2">
            <?php
            $con=mysqli_connect("localhost","root","ZySxsusu0111","myhotel");
            mysqli_query($con, "set names 'gdk'");
            $sql3 = "SELECT * FROM hotel_info, hotel_img WHERE hotel_info.H_ID = '13' AND hotel_info.H_ID = hotel_img.`Hotel ID`";
            $result3 = mysqli_query($con,$sql3);
            $row3 = mysqli_fetch_array($result3);
            ?>
            
            <a href="single.php?hotel_ID=1" class="mask">
                    <img class="img-responsive zoom-img" src="<?php echo " $row3[9]"; ?>" alt="">
                    <span class="four"><?php echo " $row3[4] "; ?></span>
                </a>
                <div class="most-1">
                    <h5><a href="single.php?hotel_ID=1"><?php echo " $row3[1] ";?></a></h5>
                    <p><?php echo " $row3[2] "; ?></p>
                </div>

            </div>

            <div class="clearfix"></div>
        </div>
    </div>
    
    <!---->
    <div class="top-grid">
    <br>
        <h3>Top City</h3>
        <div class="grid-at">
            <div class="col-md-3 grid-city">
                <div class="grid-lo">
                    <a onclick="search_city('London')">
                        <figure class="effect-layla">
                            <img class=" img-responsive" src="images/ce.jpg" alt="img06">
                            <figcaption>
                                <h4>London</h4>

                            </figcaption>
                        </figure>
                    </a>
                </div>
            </div>
            <div class="col-md-3 grid-city">
                <div class="grid-lo">
                    <a onclick="search_city('Sydney')">
                        <figure class="effect-layla">
                            <img class=" img-responsive" src="images/ce1.jpg" alt="img06">
                            <figcaption>
                                <h4>Sydney</h4>

                            </figcaption>
                        </figure>
                    </a>
                </div>
            </div>
            <div class="col-md-6 grid-city grid-city1">
                <div class="grid-me">
                    <div class="col-md-8 grid-lo1">
                        <div class=" grid-lo">
                            <a onclick="search_city('New York')">
                                <figure class="effect-layla">
                                    <img class=" img-responsive" src="images/ce2.jpg" alt="img06">
                                    <figcaption>
                                        <h4 class="effect1">New York</h4>

                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 grid-lo2">
                        <div class=" grid-lo">
                            <a onclick="search_city('Brisbane')">
                                <figure class="effect-layla">
                                    <img class=" img-responsive" src="images/bs.jpg" alt="img06">
                                    <figcaption>
                                        <h4 class="effect2">Brisbane</h4>

                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="grid-me">
                    <div class="col-md-6 grid-lo3">
                        <div class=" grid-lo">
                            <a onclick="search_city('Singapore')">
                                <figure class="effect-layla">
                                    <img class="img-responsive" src="images/ce4.jpg" alt="img06">
                                    <figcaption>
                                        <h4 class="effect3">Singapore</h4>

                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 grid-lo4">
                        <div class=" grid-lo">
                            <a onclick="search_city('Paris')">
                                <figure class="effect-layla">
                                    <img class="img-responsive" src="images/ce5.jpg" alt="img06">
                                    <figcaption>
                                        <h4 class="effect3">Paris</h4>

                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <script>
        function search_city(str) {
            $("#address").val(str);
            $(".search_btn").trigger("click")
        }
    </script>
</div>
<!---->
<!--service-->
<div id="services" class="services">
    <div class="container">
        <div class="service-top">
            <h3>Services</h3>
            <p>we empower people to experience the world</p>
        </div>
        <div class="services-grid">
            <div class="col-md-6 service-top1">
                <div class=" ser-grid">
                    <a href="index.php" class="hi-icon hi-icon-archive glyphicon glyphicon-user"> </a>
                </div>
                <div class="ser-top">
                    <h4>Hotel Searching</h4>
                    <p>Whatever accommodations you’re looking for, we've got them...</p>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="col-md-6 service-top1">
                <div class=" ser-grid">
                    <a href="single.php?hotel_ID=1" class="hi-icon hi-icon-archive glyphicon glyphicon-leaf"> </a>
                </div>
                <div class="ser-top">
                    <h4>Hotel Booking</h4>
                    <p>We also provide the related additional services other than searching</p>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!--//services-->
<!--about us-->
<div class="content-middle">
    <div class="container">
        <div id="mid-content" class="mid-content">
            <h3>about us</h3>
            <p>With a mission to empower people to experience the world, Booking.com invests in digital technology that helps take the friction out of travel. We connect travelers with the world’s largest selection of incredible places to stay.</p>
            <a class="hvr-sweep-to-right more-in" href="#logo">Read More</a>
        </div>
    </div>
</div>
<!--//about us-->
</div>
<!--footer-->
<div class="footer">
    <div class="container">
        <div class="footer-top-at">
            <div class="col-md-3 amet-sed">
            <h4>Our Company</h4>
				<ul class="nav-bottom">
					<li><a href="#mid-content">About Us</a></li>
					<li><a href="index.php">Homepage</a></li>
					<li><a href="#services">Services</a></li>

					
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
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!--//footer-->
</body>
</html>