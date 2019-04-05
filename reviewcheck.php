<?php
session_start();

    if(isset($_POST["Submit"]) && $_POST["Submit"] == "Send Feedback")  
    {   $hotel_ID=$_POST['h_ID'];
        $username = $_POST["username"];
        $ulocation = $_POST["user_location"];  
        $review_content = $_POST["review_content"];  
        if($review_content == "")  
        {  
            echo "<script>alert('Please enter a review!'); history.go(-1);</script>";  
        }  
        else  
        {  
            $servername = "localhost";
            $username1 = "root";
            $password = "ZySxsusu0111";
            $dbname = "myhotel";
            $conn=new mysqli($servername,$username1,$password,$dbname);
            if ($conn->connect_error){
                die("Connection failed:". $conn->connect_error);
            }
            
            $stmt = $conn->prepare("insert into hotel_review(`Hotel ID`,Username,`User Location`,`Review Content`) values(?,?,?,?)");
            $stmt->bind_param("isss",$hotel_ID,$username,$ulocation,$review_content);
            $stmt->execute();
            $conn->close();
           

            echo "<script>alert('Review Submit'); window.location.href='single.php?hotel_ID=$hotel_ID';</script>";
        }  
               
    }
    elseif (isset($_POST["Submit"]) && $_POST["Submit"] == "Delete") {
        $con=mysqli_connect("localhost","root","ZySxsusu0111","myhotel");
        $hotel_ID=$_POST['h_ID'];
        $review_content = $_POST["Rev_Content"];
        $sql5 = "DELETE FROM hotel_review WHERE `Review Content` = '$review_content'";
        mysqli_query($con, $sql5);
        echo mysqli_error($con);
        echo "<script>alert('Your Comment Delete Successfully!'); window.location.href='single.php?hotel_ID=$hotel_ID';</script>";
        }  
    else  
    {  
        echo "<script>alert('The Review Submit unsuccessful'); history.go(-1);</script>";  
    }  
?> 


