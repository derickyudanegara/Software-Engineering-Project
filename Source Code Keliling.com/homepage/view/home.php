<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KELILING</title>
    <link rel= "stylesheet" href="../style/homeCSS.css">
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
                    $url = "home.php?username=" . $username;
                    echo "<a class = 'active' href='$url'>Home</a>"
                ?>
              </div>
                
              <div>
                <?php
                    $url = "../../about-us/main/AboutUs.php?username=" . $username;
                    echo "<a class = '' href='$url'>About Us</a>"
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






  <div class="title-island">
    <?php
        echo "<span>Welcome $username!</span>";
    ?>
  </div>

    <!-- content -->
    <div class="content">
        <div class="upper-content">
            <div class="image"></div>
     
        </div>
        <div class="middle-content">
            <div class="photo1 photo"><img width='250px' height='170px' src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d4/Tanjung_Gelam_-_Karimunjawa.jpg/640px-Tanjung_Gelam_-_Karimunjawa.jpg" alt="">
                <p>
                    Karimun java, java Island
                </p>
                <?php
                        $url = "../../itinenary/itinenary_listGalery.php?username=" . $username;
                        echo "<a class='Show' href='$url'>";
                        echo "<span>Show page</span>";
                        echo "</a>";
                ?>
            </div>
            
            <div class="photo2 photo"><img width='250px' height='170px' src="https://upload.wikimedia.org/wikipedia/commons/0/00/JAM_GADANG%2C_BUKIT_TINGGI%2C_SUMATERA_BARAT.jpg" alt="">
                <p>
                Ampera, West Sumatera
                </p>
                <?php
                        $url = "../../itinenary/sumatera.php?username=" . $username;
                        echo "<a class='Show' href='$url'>";
                        echo "<span>Show page</span>";
                        echo "</a>";
                ?>
            </div>
            
            <div class="photo3 photo"><img width='250px' height='170px' src="https://cdn.pixabay.com/photo/2018/12/30/12/09/bali-3903100_960_720.jpg" alt="">
                <p>
                Bali, Bali Island
                </p>
                <?php
                        $url = "../../itinenary/bali.php?username=" . $username;
                        echo "<a class='Show' href='$url'>";
                        echo "<span>Show page</span>";
                        echo "</a>";
                ?>
            </div>
        </div>


</body>

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