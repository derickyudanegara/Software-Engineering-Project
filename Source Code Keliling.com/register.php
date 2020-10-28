<?php
    require 'functions.php';
?>

<?php

if( isset($_POST["register"]) ){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];

    if($password==$password2){
        $query = "select * from user WHERE username='$username'";
        $query_run = mysqli_query($conn, $query);

        if(mysqli_num_rows($query_run)>0){
            echo '<script type="text/javascript">alert("Username already exist!")</script>';
        }
        else
        {
            $query = "insert into user values('', '$username', '$password')";
            $query_run = mysqli_query($conn, $query);

            if($query_run){
                echo '<script type="text/javascript">alert("User Registered!")</script>';
            }
            else{
                echo '<script type="text/javascript">alert("Error!")</script>';
            }
        }
    }
    else{
        echo '<script type="text/javascript">alert("Password and Confirm Password not Match! ")</script>';
    }



}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Register</title>
    <link rel="stylesheet" href="LoginCSS.css">
    <link rel="icon" href="Assets/Logo-Kelilingcom.png">
</head>
<body>

    <div class="Login-Container">
        <div id="block"></div>
        <div>
            <img class="logo" src="Assets/Logo-Kelilingcom.png" alt="">
            <h3 style="font-family: monospace;">Keliling.com</h5>
            <div class="form-data">
                <h1><b>Register</h1>
                <form action="register.php" method="POST" autocomplete="off">
                    <p>Username</p>
                    <input type="text" name="username" placeholder="Input Username" style="color: white;" required>
                    <p>Password</p>
                    <input type="password" name="password" placeholder="Input Password" required>
                    <p>Confirm Password</p>
                    <input type="password" name="password2" placeholder="Input Password" required>
                    <a href=""><input type="submit" name="register" value="Register"></a><br>
                    <a class="pass-regis" href="login.php">Already Have an Account?</a><br>
                </form>
        </div>

        </div>
        
    </div>

    
</body>
</html>


