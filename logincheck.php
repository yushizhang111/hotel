<?php
    session_start();
    
    if(isset($_POST["submit"]) && $_POST["submit"]=="Submit")
    {
        $user=$_POST["email_address"];
        $psw=$_POST["password"];
        if($user == ""||$psw == "")
        {
            echo"<script>alert('Please enter the email address or password!'); history.go(-1);</script>";
            
        }else if($user=="yushi.zhang@uqconnect.edu.au" && $psw=="123"){
            echo"<script>window.location.href='admin.php';</script>";
        }
        else
        {
            $con=mysqli_connect("localhost","root","ZySxsusu0111");
            mysqli_select_db($con,"myhotel");
            mysqli_query($con, "set names 'gdk'");
            $sql = "select name,email_address,password from user where email_address = '$user' and password = '$psw'";
            $result = mysqli_query($con, $sql);
            $num = mysqli_num_rows($result);
            if($num)
            {
                $row = mysqli_fetch_array($result);
                
                $_SESSION["name"] = $row[0];
                $_SESSION["email_address"] = $row[1];
                $_SESSION["password"] = $row[2];
                echo "<script>alert('Login successful'); window.location.href='user.php';</script>";
            }
            else 
            {
                echo "<script>alert('incorrect email address or password!'); history.go(-1);</script>";
            }
        }
    }
    else{
        echo "<script>alert('Submit Unsuccessful'); history.go(-1);</script>";
    }
?>