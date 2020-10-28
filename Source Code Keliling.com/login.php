<?php
    require 'functions.php';
?>

<?php
session_start();
if( isset($_POST["login"]) ){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "select * from user WHERE username='$username' AND password='$password'";
    $query_run = mysqli_query($conn, $query);

    if(mysqli_num_rows($query_run)>0){
        $row = mysqli_fetch_assoc($query_run);
        $_SESSION['username'] = $row['username'];
        header('location:homepage/view/home.php');
        
    }
    else{
        echo '<script type="text/javascript">alert("Invalid Username or Password!")</script>';
        
    }

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
                <h1><b>Login</h1>
                <form action="login.php" method="POST" autocomplete="off">
                    <p>Username</p>
                    <input type="text" name="username" placeholder="Input Username" style="color: white;" required>
                    <p>Password</p>
                    <input type="password" name="password" placeholder="Input Password" required>
                    <a href=""><input type="submit" name="login" value="Login"></a><br>
                    <a class="pass-regis" href="">Forgot Password ?</a><br>
                    <a class="pass-regis" href="register.php">Register</a><br>
                </form>
        </div>

        </div>
        
    </div>

    
</body>
</html>