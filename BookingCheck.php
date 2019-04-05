<?php
    session_start();
    if(isset($_SESSION["name"])) {
        if (isset($_POST["submit"]) && $_POST["submit"] == "Book Now") {
            $in_date = $_POST["in_date"];
            $out_date = $_POST["out_date"];
            $adults = $_POST["adults"];
			$children = $_POST["children"];
            $pattern = '/(.*).(.*).(.*)/i';
            $today = date("m/d/Y");
            $day_today = strtotime($today);
            $day_start = strtotime($in_date);
            $day_end = strtotime($out_date);

            preg_match($pattern, $in_date, $in_matches);
            preg_match($pattern, $out_date, $out_matches);

            if ($in_date == "MM/DD/YYYY" || $out_date == "MM/DD/YYYY") {
                echo "<script>alert('Please enter the check in or check out date!'); history.go(-1);</script>";
            } elseif ($day_today > $day_start) {
                echo "<script>alert('Please do not enter a check in date before today.'); history.go(-1);</script>";
            } elseif ($day_today > $day_end) {
                echo "<script>alert('Please do not enter a check out date before today.'); history.go(-1);</script>";
            } elseif ($in_matches[1] > $out_matches[1]) {
                echo "<script>alert('The check out date should not be earlier than the check in date!'); history.go(-1);</script>";
            } elseif ($in_matches[1] <= $out_matches[1] && $in_matches[2] > $out_matches[2]) {
                echo "<script>alert('The check out date should not be earlier than the check in date!'); history.go(-1);</script>";
            } elseif ($in_matches[1] == $out_matches[1] && $in_matches[2] == $out_matches[2]) {
                echo "<script>alert('The check in and check out date should not be the same!'); history.go(-1);</script>";
            } else {
                $_SESSION["in_date"] = $in_date;
                $_SESSION["out_date"] = $out_date;
                $_SESSION["adults"] = $adults;
				$_SESSION["children"] = $children;
                $_SESSION["days"] = ($day_end - $day_start) / 86400;
                echo "<script>window.location.href='Booking.php';</script>";
            }
        } else {
            echo "<script>alert('Submit Unsuccessful'); history.go(-1);</script>";
        }
    }else{
        echo "<script>alert('Please Login first!'); history.go(-1);</script>";
    }
?>