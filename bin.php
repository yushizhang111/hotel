<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/**
 * Created by PhpStorm.
 * User: yushisusu
 * Date: 2018/5/15
 * Time: 23:33
 */

session_start();


$address = $_GET['address'];
if ($address == "") {
    $address = "Brisbane";
}

$price = $_GET["price"];
if ($price == "") {
    $price = 200;
}

if ($_GET["rate"] == "") {
    $rate = 1.0;
} else {
    $rate = floatval($_GET["rate"]);
}


$order = $_GET["order"];
if ($order == "") {
    $order = "Ascend";
}


$order_by = $_GET["order_by"];
if ($order_by == "") {
    $order_by = "H_ID";
}





$con = mysqli_connect("localhost", "root", "ZySxsusu0111", "myhotel");

mysqli_query($con, "set names 'gdk'");
if ($order == "Descend") {
    $sql = "SELECT * FROM hotel_info,  (SELECT `Hotel ID`,min(`Image Link`) as `Image Link` FROM `hotel_img` GROUP BY `Hotel ID`) as s WHERE hotel_info.H_ID = s.`Hotel ID` AND Location LIKE '%" . $address . "%' AND Price < 'AU$" . $price . "*' AND Rating > '" . $rate . "' ORDER BY " . $order_by . " DESC ";
}
if ($order == "Ascend") {
    $sql = "SELECT * FROM hotel_info,  (SELECT `Hotel ID`,min(`Image Link`) as `Image Link` FROM `hotel_img` GROUP BY `Hotel ID`) as s WHERE hotel_info.H_ID = s.`Hotel ID` AND Location LIKE '%" . $address . "%' AND Price < 'AU$" . $price . "*' AND Rating > '" . $rate . "' ORDER BY " . $order_by . " ASC ";
}
$result = mysqli_query($con, $sql);
$num = mysqli_num_rows($result);

mysqli_close($con);


$n = 1;
$bin = ceil($num / 30);
$_SESSION["bin"] = $bin;
echo $bin;




?>