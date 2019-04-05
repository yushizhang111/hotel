<?php  
    if(isset($_POST["Submit"]) && $_POST["Submit"] == "Sign Up")  
    {   $name=$_POST["name"];
        $user = $_POST["email_address"];  
        $psw = $_POST["password"];  
        $psw_confirm = $_POST["confirm"];  
        if($name=="" || $user == "" || $psw == "" || $psw_confirm == "")  
        {  
            echo "<script>alert('Please confirm the information is completed!'); history.go(-1);</script>";  
        }  
        else  
        {  
            if($psw == $psw_confirm)  
            {  
                $con=mysqli_connect("localhost","root","ZySxsusu0111");   //连接数据库  
                mysqli_select_db($con,"myhotel");  //选择数据库  
                mysqli_query($con, "set names 'gdk'"); //设定字符集  
                $sql = "select email_address from user where email_address = '$_POST[email_address]'"; //SQL语句  
                $result = mysqli_query($con,$sql);    //执行SQL语句  
                $num = mysqli_num_rows($result); //统计执行结果影响的行数  
                if($num)    //如果已经存在该用户  
                {  
                    echo "<script>alert('The email address has been registered'); history.go(-1);</script>";  
                }  
                else    //不存在当前注册用户名称  
                {  
                    $sql_insert = "insert into user(name,email_address,password) values('$name','$user','$psw')";  
                    $res_insert = mysqli_query($con, $sql_insert);  
                    //$num_insert = mysql_num_rows($res_insert);  
                    mysqli_close($con);
                    if($res_insert)  
                    {  
                        echo "<script>alert('Registration successful！'); window.location.href='login.php';</script>";  
                    }  
                    else  
                    {  
                        echo "<script>alert('The system is busy!');history.go(-1);</script>";  
                    }  
                }  
            }  
            else  
            {  
                echo "<script>alert('The passwords is not the same！'); history.go(-1);</script>";  
            }  
        }  
    }  
    else  
    {  
        echo "<script>alert('The Registration unsuccessful'); history.go(-1);</script>";  
    }  
?> 