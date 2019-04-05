<?php
    session_start();
    
    if(isset($_POST["submit"]) && $_POST["submit"]=="Change")
    {
        $name=$_POST["name"];
        $psw=$_POST["password"];
        if($name == ""||$psw == "")
        {
            echo"<script>alert('Please enter the username or password!'); history.go(-1);</script>";
            
        }
        else
        {
            $con=mysqli_connect("localhost","root","ZySxsusu0111");
            mysqli_select_db($con,"myhotel");
            mysqli_query($con, "set names 'gdk'");
            echo $_SESSION["email_address"];
            $sql = "UPDATE user SET `name` = '$name', `password` = '$psw' WHERE `email_address` = '".$_SESSION["email_address"]."'";
            $result = mysqli_query($con, $sql);
           
            $sql1 = "select name,email_address,password from user where email_address = '".$_SESSION["email_address"]."' ";
            $result1 = mysqli_query($con, $sql1);
            $num = mysqli_num_rows($result1);
            if($num)
            {
                $row = mysqli_fetch_array($result1);
                
                $_SESSION["name"] = $row[0];
                $_SESSION["email_address"] = $row[1];
                $_SESSION["password"] = $row[2];
                echo "<script>alert('change successful');window.location.href='user.php';</script>";
            }
            else 
            {
                echo "<script>alert('incorrect email address');history.go(-1); </script>";
            }
        }
    }
    else{
        echo "<script>alert('Change Unsuccessful'); history.go(-1);</script>";
    }
?>