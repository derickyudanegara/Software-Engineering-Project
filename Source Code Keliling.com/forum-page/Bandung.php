<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KELILING.COM</title>
    
    <link rel = "icon" href =  "../image/skuy_travel.png"  type = "image/x-icon"> 
    <link rel="stylesheet" href="1-forumCSS.css">
    <link rel="icon" href="../Assets/Logo-Kelilingcom.png">
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
            <img src="./image/skuy_travel.png" alt="not found" height="50px" width="50px">
            <span class="navbar-text"><b>KELILING.COM</b></span>
        </div>
        <!-- Navbar Right -->
        <div class="navbar-right-outer">
          <div>
                <?php
                    $url = "../homepage/view/home.php?username=" . $username;
                    echo "<a class = 'home' href='$url'>Home</a>"
                ?>
              </div>
                
              <div>
                <?php
                    $url = "../about-us/main/AboutUs.php?username=" . $username;
                    echo "<a class = 'about' href='$url'>About Us</a>"
                ?>
              </div>
                
              <div>
                <?php
                    $url = "../ContactUs/contact.php?username=" . $username;
                    echo "<a class = 'contact' href='$url'>Contact</a>"
                ?>
          </div>
            
    </div>
        <div class="user">
                <?php
                  $url = "../profile/profile.php?username=" . $username;
                    echo "<a href='$url'>";
                    echo "<span>$username's Profile</span>";
                    echo "</a>";
                ?>
            </div>
      </div>

    
    
        <?php
            $url = "../itinenary/itinenary_listGalery.php?username=" . $username;
            echo "<div class='backbtn'>";
            echo "<a href='$url'>";
            echo "<span>Back</span>";
            echo "</a>";
            echo "</div>";
        ?>

        <div class="user-post">
        <span>By : </span>
        <span >siPetualang</span><br>
        <span id="demo"></span>
        </div>
    
    


    <div id="body-outer">
        <div id="body-upper">
    
            <div id="body-upper-container">
                <img id=bandung src="./image/bandung1.jpg" alt="">
                
            </div>

            <div class="text-block">
                <div class="text">
                    <h4>3 DAYS <br>
                        TRIP <br>
                        IN<br>BANDUNG</h4>
                  </div>
            </div>
            <!--  -->
        <div id="body-mid">
            <div id="mid-upper">
                <h1 class="text-mid">DAY</h1>
                <div id="number">
                <button class="num-mid">1</button>
                <button class="num-mid">2</button>
                <button class="num-mid">3</button> 
                </div>
                
            </div>
            <div id= mid-mid>
                <div id="mid-content">
                    <div class="list">
                    <img class=img-mid src="https://static.tiket.photos/image/upload/v1574701042/tix-hotel/images-web/2019/11/25/a435afd0-c196-48e7-be05-ff2670ddc3e6-1574701040762-d41d8cd98f00b204e9800998ecf8427e.jpg" alt="">
                    <h3>Hotel Regia (Dago)</h3> 
                </div>
                <div class="list">
                    <img class=img-mid src="https://4.bp.blogspot.com/-CwICcKNxlVo/WjX5v8H6AGI/AAAAAAAAFJw/rQAw3i9qkNU-vsCf-GphINJnJb1pTBMXACLcBGAs/w640-h360-p-k-no-nu/Museum%2BGedung%2BSate%2BBandung.jpg" alt="">
                    <h3>Museum Gedung Sate</h3> 
                </div>
                <div class="list">
                    <img class=img-mid src="https://assets.pikiran-rakyat.com/crop/0x0:0x0/x/photo/2020/02/20/4154246102.jpg" alt="">
                    <h3>Museum Konferensi Asia Afrika</h3> 
                </div>

                </div>
                
            </div>

        </div>
        <div id="body-bottom">
            <img class=img-bottom src="https://cdn.pergidulu.com/wp-content/uploads/2016/01/Sudirman-Street.jpg" alt="">
            <img class=img-bottom src="https://travelspromo.com/wp-content/uploads/2019/05/Pemandangan-tebing-keraton-lembang-Lukman-Hakim.jpg" alt="">
            <img class=img-bottom src="https://i2.wp.com/penginapan.net/wp-content/uploads/Pemandian-air-panas-Ciater.jpg?resize=460%2C300&ssl=1" alt="">
        </div>
    </div>

    <div class="comment-container">
        <h1>Comments</h1>
        <?php
        echo "<h4>Post a Comment!</h4>";
        $url = "../itinenary/itinenary_listPHP.php?username=" . $username;

        ?>
         
        <?php
            date_default_timezone_set('Asia/Jakarta');
            include 'comment.inc.php';
            include 'connect.php';
        ?>
        
        <?php

            echo "<form method='POST' action='".set_comment($conn, $kota='Bandung')."'>
            <input type='hidden' name='username_forum' value='$username'>
            <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
            <textarea name='message' required></textarea><br>
            <button type='submit' name='comment_submit'>Comment</button>
            </form>";
        
        
            view_comment($conn, $kota = "bandung");
        
        ?>
    </div>

</body>


<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }

    var d = new Date(2019, 10, 24, 10, 33, 30, 0);
    document.getElementById("demo").innerHTML = d;
</script>

<script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar-container");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>



</html>