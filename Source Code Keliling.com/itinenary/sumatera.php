
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rregion Sumatera</title>
    
    <link rel="stylesheet" href="css/itinenaryCSS.css">
    <link rel="icon" href="../Assets/Logo-Kelilingcom.png">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="searchbox.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
    
    body{
        background-image: linear-gradient( rgb(255, 189, 46), rgb(255, 255, 255)) ;

    }

    .desc{

        display: flex;
        flex-direction: column;
        background-color: red;
        text-align: center;
        font-size: 20px;
        font-family: 'Montserrat', sans-serif;
        color: white;
        text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;
    }

</style>

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


<div class = "content">
<div class="title-island">
    <span>Ampera, West Sumatera</span>
  </div>
  
  <div class = "title-container">
  <div class="search-container">
          <form action="#">
         <input type="text" placeholder="Search.." name="search">
          <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
          </form>
        </div>
    <div class="create-post-container">
      <div class="share-title">
        <span>Share Your Travel Experience!</span>
      </div>
      <div class="create-post-div">
                <?php
                  $url = "../create-post/post-sumatera.php?username=" . $username;
                    echo "<a href='$url' class='create-post'>";
                    echo "<span>+Create Post!</span>";
                    echo "</a>";
                ?>
      </div>
    </div>
  </div>
  
  <div class="recent-post">
    <span>Recent Post</span>
  </div>

  

  <div class= "gallery-container">
    <div class="row"> 
      <div class="column">
        <?php
              echo "<div class='border'>";
            
              $url = "../forum-page/Bukittinggi.php?username=" . $username;
              echo "<a href='$url' class='img-link'>";
              echo  "<img src='https://upload.wikimedia.org/wikipedia/commons/0/00/JAM_GADANG%2C_BUKIT_TINGGI%2C_SUMATERA_BARAT.jpg' style='width:300px;height:200px'>";
              echo  "<div class='middle'>";
                echo "<div class='text'>@martin_filep</div>"  ;
              echo "</div>";
              echo "<div class='desc'>Bukit Tinggi</div>";
              echo "</a>";
              echo "</div>";
        ?>

      </div>  


      <div class="column">



      </div>  



    </div>
  
  </div>
    






    <!-- Galery -->

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