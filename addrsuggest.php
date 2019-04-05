<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


session_start();

$q=$_GET["q"];

$con=mysqli_connect("localhost","root","ZySxsusu0111","myhotel");
mysqli_query($con, "set names 'gdk'");
$sql = "SELECT `Location` FROM `hotel_info` WHERE `Location` LIKE '$q%'";
$a = mysqli_query($con,$sql);
mysqli_close($con);
$a = mysqli_fetch_array($a);

if ($a == "")
{
    $response="no suggestion";
}
else
{
    $response=$a[0];
}

echo $response;

?>