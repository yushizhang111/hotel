<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<title>Search Hotel</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--menu-->
<script src="js/scripts.js"></script>
<link href="css/styles.css" rel="stylesheet">
<!--//menu-->
<!-- Date Picker -->
<link rel="stylesheet" href="css/bootstrap-datepicker.min.css">
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
				    

			<!---//pop-up-box---->
				<div id="small-dialog" class="mfp-hide">
					    <!----- tabs-box ---->

				</div>
				</div>

					
	
		</div>
		<div class="clearfix"> </div>
		</div>	
</div>
<!--//-->	
<div class=" banner-buying">
	<div class=" container">
	<h3><span>Search Result</span></h3> 
	<!---->
	<div class="menu-right">

	</div>
	<div class="clearfix"> </div>

      		
	</div>
</div>
<!--//header-->
<?php
	$addr=$_GET['pass_address'];
?>
<div class="container" >
	<div id="container_parent">
	<!--price-->
	<div class="price">
		<div class="price-grid" >
			<div class="col-sm-4 price-top">								
				<h4>Address</h4>				
				<input type="text" class="form-control" id="address" name="address" placeholder="Brisbane" value='<?php echo "$addr"; ?>' />
				<script>
				$(function(){
					$("#search_btn").trigger("click");
					
				})
				</script>
			</div>
		</div>

        <div class="col-sm-4 price-top1">
            <h4>Order: </h4>
                <ul>
                    <li>
                        <select class="in-drop" name="order" id="order">
                            <option></option>
                            <option>Ascend</option>
                            <option>Descend</option>

                        </select>
                    </li>

                </ul>
        </div>

        <div class="col-sm-4 price-top1">
            <h4>Order by: </h4>
                <ul>
                    <li>
                        <select class="in-drop" name="order_by" id="order_by">
                            <option></option>
                            <option>Price</option>
                            <option>Rating</option>

                        </select>
                    </li>

                </ul>
        </div>
        <div class="clearfix"> </div>
        <br>

    	<div class="col-sm-4 price-top">
            <h4>Max Price:</h4>
            <input type="text" class="form-control" id="price" name="price" placeholder="100"/>
        </div>

        <div class="col-sm-4 price-top1">
            <h4>Minimum Rate: </h4>
                <ul>
                    <li>
                        <select class="in-drop" name="rate" id="rate">
                            <option></option>
                            <option>1</option>
                            <option>1.5 </option>
                            <option>2</option>
                            <option>2.5</option>
                            <option>3</option>
                            <option>3.5 </option>
                            <option>4</option>
                            <option>4.5</option>
                            <option>5</option>
                        </select>
                    </li>

                </ul>
        </div>

		<div class="clearfix"> </div>

		<div class="book_date">
            <button type="button" class="date_btn" id="search_btn" name="Submit" value="Search Hotel" onclick="listHotel(0);" >Search Hotel</button>
		</div>

	</div>
</div>
<br>
<div id="txtHint"><b>Hotel info wll be listed here ...</b></div>
<br>
</div>

	<style>
		#page{

			color: #333;
			text-align: center;
		}

		</Style>

		<style>
		#bin{

			color: #333;
			text-align: center;
		}

		.marker{
			margin-left:50%;
		}

		</Style>

	<div class= "marker">
	<table>
	<tr>
	<th><div id="page">1</div></th>
	<th><p>&frasl;</p></th>
	<th><div id='bin'>1</div></th>
	</tr>
	</table>
<style>
	</style>
	</div>  
    
    <script>

	    
	    
        function listHotel(str) {

            var str = str;
    
            var bin = document.getElementById("bin").textContent;
            bin=parseInt(bin);
            console.log(bin);
            // noinspection JSAnnotator
            var address = document.getElementById("address").value;
            console.log(address);
            var price = document.getElementById("price").value;
            console.log(price);

            var rate = document.getElementById("rate").value;
            console.log(rate);

            var order = document.getElementById("order").value;
            console.log(order);

            var order_by = document.getElementById("order_by").value;
            console.log(order_by);

            var p = document.getElementById("page").textContent;
            var page = parseInt(p);


            var xmlhttp;
			var xmlhttp_bin;

            if (window.XMLHttpRequest) {
                xmlhttp = new XMLHttpRequest();
				xmlhttp_bin = new XMLHttpRequest();

            } else {
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
				xmlhttp_bin = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("txtHint").innerHTML = this.responseText;
					

                }
            };
			xmlhttp_bin.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("bin").innerHTML = this.responseText;
					

                }
            }

            if (str == 0) {

                xmlhttp.open("GET", "hotellist.php?address=" + address + "&price=" + price + "&rate=" + rate + "&order=" + order + "&order_by=" + order_by + "&page=" + 1, true);
            /*"&price=" + price + "&rate="+rate+"&order"+order +"&order_by"+order_by*/
			    xmlhttp_bin.open("GET", "bin.php?address=" + address + "&price=" + price + "&rate=" + rate + "&order=" + order + "&order_by=" + order_by, true);
			    xmlhttp.send();
				xmlhttp_bin.send();

				
            }
            if (str==-1 && page>1) {

                xmlhttp.open("GET", "hotellist.php?address=" + address + "&price=" + price + "&rate=" + rate + "&order=" + order + "&order_by=" + order_by + "&page=" + (page - 1), true);
                xmlhttp.send();
            }else if(page==1 ){
                xmlhttp.open("GET", "hotellist.php?address=" + address + "&price=" + price + "&rate=" + rate + "&order=" + order + "&order_by=" + order_by + "&page=" + 1, true);
                xmlhttp.send();
			}

            if(str==1 && page<bin){
                xmlhttp.open("GET", "hotellist.php?address=" + address + "&price=" + price + "&rate=" + rate + "&order=" + order + "&order_by=" + order_by + "&page=" + (page+1), true);
                xmlhttp.send();
			}else if( page==bin){
                xmlhttp.open("GET", "hotellist.php?address=" + address + "&price=" + price + "&rate=" + rate + "&order=" + order + "&order_by=" + order_by + "&page=" + 1, true);
                xmlhttp.send();
			
			}

            
        }

    </script>

    <div class="page_control">
        <button type="button" class="before_btn" name="previous" value="Previous" onclick="pagePrevious();listHotel(-1)">Previous</button>
    </div>
    <script>
        function pagePrevious(){
            var p = document.getElementById("page").textContent;
            var page=parseInt(p);


            var xmlhttp;
            if(page>1) {
                if (window.XMLHttpRequest) {
                    xmlhttp = new XMLHttpRequest();

                } else {
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("page").innerHTML = this.responseText;

                    }
                };
                xmlhttp.open("GET", "pagePrevious.php?page=" + page, true);

                xmlhttp.send();
            }

        }

    </script>
    <script>
        function pageNext() {
            var p = document.getElementById("page").textContent;
            var page = parseInt(p);
            var bin = document.getElementById("bin").textContent;
            bin = parseInt(bin);

            var xmlhttp;

            if (window.XMLHttpRequest) {
                xmlhttp = new XMLHttpRequest();

            } else {
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("page").innerHTML = this.responseText;

                }
            };
            if (page < bin) {

                xmlhttp.open("GET", "pageNext.php?page=" + page, true);
            }else if(page==bin){
                xmlhttp.open("GET", "pageNext.php?page=" + 0, true);
            }
            xmlhttp.send();


        }

    </script>
    <div >
        <button type="button" class="next_btn" name="next" value="Next" onclick="pageNext();listHotel(1)">Next</button>
	</div>
<br>


	<!---->

<!--premium-project-->
<div class="premium">
	<div class="pre-top">
		<h5><a href="single.php?hotel_ID=1">Lorem Hotel at Brisbane</a></h5>
		<p><a href="single.php?hotel_ID=1">$137 per night if book today</a></p>
	</div>
</div>
<!--//premium-project-->
<!---->
<div class="container">
	<div class="future">
		<h3 >Recommended Visitpoints</h3>
			<div class="content-bottom-in">
					<ul id="flexiselDemo1">			
						<li><div class="project-fur">
								<a href="https://www.brisbane.qld.gov.au/facilities-recreation/parks-venues/brisbane-city-hall" ><img class="img-responsive" src="images/bch.jpg" alt="" />	</a>
									<div class="fur">
										<div class="fur1">
											<h6 class="fur-name"><a href="single.php">Brisbane City Hall</a></h6>
											<span id="cbd">Ann & Adelaide Sts, King George Square</span>
											<style>
												#cbd{
													text-align: center;
												}
											</style>
                               			</div>
			                            <div class="fur2">
			                               	<span>Brsibane CBD</span>
			                             </div>
									</div>					
							</div></li>
							<li><div class="project-fur">
									<a href="https://www.visitbrisbane.com.au/south-bank?sc_lang=en-au" ><img class="img-responsive" src="images/fw.png" alt="" />	</a>
										<div class="fur">
											<div class="fur1">
			                                   <h6 class="fur-name">South Bank Parkland</h6>
												   <span id="sb">Stanley Street, South Brisbane QLD 4101</span>
												   <style>
												#sb{
													text-align: center;
												}
											</style>
	                               			</div>
				                            <div class="fur2">
				                               	<span>South Brisbane</span>
				                             </div>
										</div>					
								</div></li>
								<li><div class="project-fur">
								<a href="https://www.tripadvisor.com.au/Attraction_Products-g255068-d256511-Lone_Pine_Koala_Sanctuary-Brisbane_Brisbane_Region_Queensland.html&suppm=&gclid=CjwKCAjw_47YBRBxEiwAYuKdw6Ezes2cdZ_VHq9Xz0MOeagK6W-hm4qOfiHzU6zUKRcUs4lovRm2hBoCS7gQAvD_BwE&supsc=s&supap=1t2&supti=dsa-402918435271&supfi=%7Bfeeditem%7D&supdv=c&supai=244963893067&supag=46401649090&supnt=g" ><img class="img-responsive" src="images/lps.jpg" alt="" />	</a>
									<div class="fur">
										<div class="fur1">
										   <h6 class="fur-name">Lone Pine Sanctuary</h6>
										   <span id="lps">708 Jesmond Rd Fig Tree Pocket QLD 4069 </span>
										   <style>
												#lps{
													text-align: center;
												}
											</style>

                               			</div>
			                            <div class="fur2">
			                               	<span>Fig Tree Pocket</span>
			                             </div>
									</div>					
							</div></li>
							<li><div class="project-fur">
								<a href="https://www.stjohnscathedral.com.au/" ><img class="img-responsive" src="images/sjc1.jpg" alt="" />	</a>
									<div class="fur">
										<div class="fur1">
											<h6 class="sjc">St John’s Cathedral</h6>
											<span class="fur-money">373 Ann St Brisbane</span>
											<style>
												#sjc{
													text-align: center;
												}
											</style>
                               			</div>
			                            <div class="fur2">
			                               	<span>Brisbane</span>
			                             </div>
									</div>					
							</div></li>
					</ul>
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
		<div class="clearfix"> </div>
	 	</div>
	</div>
</div>
<!--//footer-->
	<!-- jQuery -->



	<!-- Date Picker -->
	<script src="js/bootstrap-datepicker.min.js"></script>
	<!-- CS Select -->
	<script src="js/classie.js"></script>
	<script src="js/selectFx.js"></script>
	
	<!-- Main JS -->
	<script src="js/main.js"></script>
</body>
</html>