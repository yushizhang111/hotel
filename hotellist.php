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


$page = $_GET["page"];
$page = intval($page);


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
    border-radius: 3px;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	-o-border-radius: 3px;
}
</style>
<table>
<tr>
<th>Image</th>
<th>Hotel Name</th>
<th>Location</th>

<th>Price</th>
<th>Rating</th>
<th>Booking</tr>";

while ($row = mysqli_fetch_array($result)) {


    if ($n > (($page - 1) * 30) and $n <= ($page * 30)) {

        echo "<tr id='hotel_table'>
			<td name='hotel_img'><img src='" . $row['Image Link'] . "' style='width:150px;height:150px;'/></td>
			<td name='hotel_name'>" . $row['Hotel Name'] . "</td>
			<td name='hotel_location'>" . $row['Location'] . "</td>
			<td name='hotel_price'>" . $row['Price'] . "</td>
			<td name='hotel_rating'>" . $row['Rating'] . "</td>
            <td>
            <button class='more_btn'><a href='single.php?hotel_ID=" . $row['H_ID'] . "'>View More</a></button>
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
    $n = $n + 1;

}

echo "</table>";


?>