<?php
session_start();
require_once "stripe_config.php";

\Stripe\Stripe::setVerifySslCerts(false);

// Token is created using Checkout or Elements!
// Get the payment token ID submitted by the form:
ini_set('date.timezone','Australia/Brisbane');
$record_ID = uniqid();
$hotel_ID = $_GET['hotel_ID'];
$payment = $_GET["payment"];
$today = date("Y-m-d");
$user=$_SESSION["email_address"];
$payment_show = $_GET["payment"]/100;

if (!isset($_POST['stripeToken'])) {
    header("Location: Booking.php");
    exit();
}

$token = $_POST['stripeToken'];
$email = $_POST["stripeEmail"];

// Charge the user's card:
$charge = \Stripe\Charge::create(array(
    "amount" => $payment,
    "currency" => "aud",
    "description" => "Hotel payment",
    "source" => $token,
));

//store information to the database and generate the confirm page.
$con = mysqli_connect("localhost", "root", "ZySxsusu0111", "myhotel");
mysqli_query($con, "set names 'gdk'");

$sql = "SELECT * FROM hotel_info WHERE H_ID = ".$hotel_ID.";";
$result = mysqli_query($con,$sql);
echo mysqli_error($con);
$row = mysqli_fetch_array($result);
$hotel_name = $row[1];
$hotel_location = $row[2];

$sql = "INSERT INTO `b_record` (`Record ID`, `Email Address`, `Hotel ID`, `Hotel Name`, `Location`, `Date`, `Price`) VALUES ('$record_ID', '$user', '$hotel_ID', '$hotel_name', '$hotel_location', '$today', '$payment_show');";
mysqli_query($con, $sql);
mysqli_close($con);

//send an email
$email_body = '<p>Dear client,</p>
				   <p>Thank you for using MyHotel.</p>
				   <p>You have been charged $' . $payment_show . '.</p>
				   <p>Your payment reference is:' . $record_ID . '.</p>
				   <p>If you did not authorise this charge, please call xx-xxxx-xxxx immediately.</p>
				   <p>Do not reply this email. </p>';
$email_alert = "<script type='text/javascript'>alert('Oops...Sorry, there seems to be some technical issues so we did not send the payment notification email.');</script>";
require_once 'sendEmail.php';

echo "<!DOCTYPE html>
			<html>
			<head>
				<title>Payment Completed</title>
				<link href='css/style.css' rel='stylesheet' type='text/css' media='all' />	
			</head>
			
			<body>
				<div class='online_reservation' style='text-align: center;'>
					<div class='b_room'>
						<div class='reservation' style='text-align: center;'>
							<div class='book_date'>
								<h1>Success!</h1>
								<br />
								<p>You have been charged $" . $payment_show . ".</p>
								<p>Thank you for using MyHotel.</p>
								<p>Your payment reference is:" . $record_ID . ".</p>
								<br />
								<img src='images/payment_success.png' />
								<br />
								<form action='user.php' method='post'>
								<input class='date_btn' type='submit' value='Check booking records'></input>
								</form>
								<form action='index.php' method='post'>
								<input class='date_btn' type='submit' value='Back to homepage'></input>
								</form>
							</div>
						</div>
					</div>
				</div>
			</body>";
?>