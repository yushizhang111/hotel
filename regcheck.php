<?php
session_start();
    if(isset($_POST["Submit"]) && $_POST["Submit"] == "Sign Up")  
    {   $name=$_POST["name"];
        $_SESSION["name"] = $name;
        $user = $_POST["email_address"]; 
        $_SESSION["email_address"] = $user;
        $_SESSION["reg_email"] = $user; 
		$email = $_SESSION["reg_email"];
        $psw = $_POST["password"];  
        $psw_confirm = $_POST["confirm"];  
        if($name=="" || $user == "" || $psw == "" || $psw_confirm == "")  
        {  
            echo "<script>alert('Please confirm the information is completed!'); history.go(-1);</script>";  
        } else if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$user)) {
            echo "<script>alert('Please confirm the  email is correct!'); history.go(-1);</script>";
          

        } 
        else  
        {  
            if($psw == $psw_confirm)  
            {  
                $con=mysqli_connect("localhost","root","ZySxsusu0111","myhotel");

                mysqli_query($con, "set names 'gdk'");
                $sql = "select email_address from user where email_address = '$user'";
                $result = mysqli_query($con,$sql);
                $num = mysqli_num_rows($result);
                if($num)
                {  
                    echo "<script>alert('The email address has been registered'); history.go(-1);</script>";  
                }  
                else
                {  
                    $sql_insert = "insert into user(name,email_address,password) values('$name','$user','$psw')";  
                    $res_insert = mysqli_query($con, $sql_insert);  
                    mysqli_close($con);
					
                    if($res_insert)  
                    {
                        
                        
                        $email_body = '<html>
                                    <head>
                                        <title>Registration confirmation email</title>
                                    </head>
                                    <body>
                                    <h1>Registration confirmation email</h1>
                                        <p>Dear '.$name.'</p>
                                        <p>Your email address '.$user.' has been registered in MYHOTEL</p>
                                        <p>Thank you for your registration! Your information is as below.</p>
										<p>If you have any questions, please send emails to myhotelbusinesstest@gmail.com. Thank you.</p>
                                        <table>
                                            <tr>
                                            <th>name</th>
                                            <th>email address</th>
                                            </tr>
                                            <tr>
                                            <td>'.$name.'</td>
                                            <td>'.$user.'</td>
                                            </tr>
                                            </table>
                                    </body>
                                    </html>';
					 $email_alert = "<script type='text/javascript'>alert('Oops...Sorry, there seems to be some technical issues so we did not send the confirmation email.');</script>";
					 require_once 'sendEmail.php';

                     echo "<script>alert('Registration successful！'); window.location.href='user.php';</script>";
                    }  
                    else  
                    {  
                        echo "<script>alert('The system is busy!');</script>";
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
        echo "<script>alert('Registration unsuccessful.'); history.go(-1);</script>";  
    }  
?> 