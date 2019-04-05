<?php

echo shell_exec('/opt/local/bin/python3 /var/www/htdocs/MYHOTEL4/WIS/js/mysql.py');



$con = mysqli_connect("localhost", "root", "ZySxsusu0111", "myhotel");

mysqli_query($con, "set names 'gdk'");

$sql = "SELECT * FROM hotel_up";

$result = mysqli_query($con, $sql);
$num = mysqli_num_rows($result);
echo mysqli_error($con);
mysqli_close($con);


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
<th>Hotel ID</th>
<th>Hotel Name</th>
</tr>";

while ($row = mysqli_fetch_array($result)) {
    echo "<tr id='hotel_table'>
			<td name='hotel_ID'>". $row[0] . "</td>
			<td name='hotel_name'>" . $row[1] . "</td>
			
		</tr>
		
		";
    }
   



echo "</table>";

?>