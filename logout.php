<?php
    session_start();
    session_unset();
    
?>
<?php
    if(isset($_POST["submit"]) && $_POST["submit"] == "Logout"){
        echo "<script>alert('Log out successful！'); window.location.href='login.php'; </script>";
        
    }
?>