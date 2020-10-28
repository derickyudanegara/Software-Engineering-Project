<?php
    
    
    
    
    
    $conn = mysqli_connect("localhost", "root", "") or die("Unable to conect");
    mysqli_select_db($conn, 'kelilingcom',);
    
    // $conn = mysqli_connect("localhost", "root", "root", "kelilingcom")

    // function registerCK($data){
    //     global $conn;

    //     $username = strtolower(stripslashes($data["username"]));
    //     $password = mysqli_real_escape_string($conn, $data["password"]);
    //     $password2 = mysqli_real_escape_string($conn, $data["password2"]);
    
    //     if( $password !== $password2 ){
    //         echo "<script> alert('Wrong Confirmation Password!); </script>";
    //         return false;
    //     }
    // }

?>