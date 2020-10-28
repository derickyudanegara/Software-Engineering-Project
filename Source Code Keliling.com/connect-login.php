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
        exit();
    }
    else{
        echo '<script type="text/javascript">alert("Invalid Username or Password!")</script>';
        exit();
    }

}

?>