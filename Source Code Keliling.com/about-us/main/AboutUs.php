<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AboutUS</title>
    <link rel="stylesheet" href="AboutUsStyle.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">

</head>
<body>

<?php
    session_start();

    if(!isset($_SESSION['username'])){
        header("location:connect-login.php");
        exit();
    }

    
    $username = $_SESSION['username'];
    
    ?>


<!-- Navbar Header -->
<div id="navbar-container">
        <!-- Mavbar Logo -->
        <div class="navbar-left-container">
            <img src="../../itinenary/image/skuy_travel.png" alt="not found" height="50px" width="50px">
            <span class="navbar-text"><b>KELILING.COM</b></span>
        </div>
        <!-- Navbar Right -->
        <div class="navbar-right-outer">
          <div>
                <?php
                    $url = "../../homepage/view/home.php?username=" . $username;
                    echo "<a class = 'acive' href='$url'>Home</a>"
                ?>
              </div>
                
              <div>
                <?php
                    $url = "AboutUs.php?username=" . $username;
                    echo "<a class = 'active' href='$url'>About Us</a>"
                ?>
              </div>
                
              <div>
                <?php
                    $url = "../../ContactUs/contact.php?username=" . $username;
                    echo "<a class = '' href='$url'>Contact</a>"
                ?>
          </div>
            
    </div>
        <div class="user">
                <?php
                  $url = "../../profile/profile.php?username=" . $username;
                    echo "<a href='$url'>";
                    echo "<span>$username's Profile</span>";
                    echo "</a>";
                ?>
            </div>
      </div>


   <div class="content_container">
        <div class="banner">
            <h1 class="About">ABOUT US</h1>
            <p class="text">
                Keliling.com adalah website berisikan rekomendasi perjalanan/traveling secara detail oleh user, untuk membantu user lain dalam pencarian tempat traveling diseputar wilayah Indonesia
            </p>
        </div>

   </div>

    <div class="footer-container">
        <div class="oursosmed">
            <span>Our Social Media :</span>
        </div>

        <div class = "sosmed">
            <a href="https://www.facebook.com/Kelilingcom-100755714976932/">
                <img src="https://image.flaticon.com/icons/svg/174/174848.svg" alt="">
                <span>bit.ly/kelilingcomFB</span>
            </a>
            <a href="https://www.instagram.com/keliling.com.id/">
                <img src="https://image.flaticon.com/icons/svg/174/174855.svg" alt="">
                <span>bit.ly/kelilingcomIG</span>
            </a>
            <a href="https://twitter.com/Kelilingcom_twt">
                <img src="https://image.flaticon.com/icons/svg/174/174876.svg" alt="">
                <span>bit.ly/kelilingcomTW</span>
            </a>
        </div>
        
    </div>

</body>
</html>