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










// $username = filter_input(INPUT_POST, 'username');
// $password = filter_input(INPUT_POST, 'password');
// if (!empty($username)){
// if (!empty($password)){
// $host = "localhost";
// $dbusername = "root";
// $dbpassword = "";
// $dbname = "kelilingcom";
// // Create connection
// $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);


// if (mysqli_connect_error()){
// die('Connect Error ('. mysqli_connect_errno() .') '
// . mysqli_connect_error());
// }
// else{
// $sql = "INSERT INTO user (username, password)
// values ('$username','$password')";
// if ($conn->query($sql)){
// echo "<script>
//                 alert('Register Success!');
//             </script>";
// }
// else{
// echo "Error: ". $sql ."
// ". $conn->error;
// }
// $conn->close();
// }
// }
// else{
//     echo "<script>
//     alert('Password Shouldnt be Empty!');
// </script>";
// die();
// }
// }
// else{
//     echo "<script>
//     alert('Username Shouldn't be Empty!');
// </script>";
// die();
// }
?>