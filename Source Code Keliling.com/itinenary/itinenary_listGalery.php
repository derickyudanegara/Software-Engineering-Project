
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Region Java</title>
    
    <link rel="stylesheet" href="css/itinenaryCSS.css">
    <link rel="icon" href="../Assets/Logo-Kelilingcom.png">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="searchbox.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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


<div class = "content">
<div class="title-island">
    <span>The Islands of JAVA</span>
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
                  $url = "../create-post/post-jawa.php?username=" . $username;
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
            
              $url = "../forum-page/BandungRev.php?username=" . $username;
              echo "<a href='$url' class='img-link'>";
              echo  "<img src='https://c8.alamy.com/comp/PF7TKY/sudirman-street-a-culinary-streetarea-in-bandung-PF7TKY.jpg' style='width:300px;height:200px'>";
              echo  "<div class='middle'>";
                echo "<div class='text'>@siPetualang</div>"  ;
              echo "</div>";
              echo "<div class='desc'>Bandung</div>";
              echo "</a>";
              echo "</div>";
        ?>
        <?php
              echo "<div class='border'>";
            
              $url = "../forum-page/Malang.php?username=" . $username;
              echo "<a href='$url' class='img-link'>";
              echo  "<img src='https://upload.wikimedia.org/wikipedia/commons/9/96/Tugu_Malang.jpg' style='width:300px;height:200px'>";
              echo  "<div class='middle'>";
              echo "<div class='text'>@halo</div>"  ;
              echo "</div>";
              echo "<div class='desc'>Malang</div>";
              echo "</a>";
              echo "</div>";
        ?>
        

        <?php
              echo "<div class='border'>";
            
              $url = "../forum-page/Semarang.php?username=" . $username;
              echo "<a href='$url' class='img-link'>";
              echo  "<img src='https://cdn.pixabay.com/photo/2019/10/22/18/00/beach-4569394_960_720.jpg' style='width:300px;height:200px'>";
              echo  "<div class='middle'>";
              echo "<div class='text'>@mawang</div>"  ;
              echo "</div>";
              echo "<div class='desc'>Semarang</div>";
              echo "</a>";
              echo "</div>";
        ?>


      </div>  


      <div class="column">



        <?php
              echo "<div class='border'>";
            
              $url = "../forum-page/Puncak.php?username=" . $username;
              echo "<a href='$url' class='img-link'>";
              echo  "<img src='https://upload.wikimedia.org/wikipedia/commons/0/0b/Feeding_the_Animal_at_Taman_Safari.JPG' style='width:300px;height:200px'>";
              echo  "<div class='middle'>";
              echo "<div class='text'>@ryan123</div>"  ;
              echo "</div>";
              echo "<div class='desc'>Puncak</div>";
              echo "</a>";
              echo "</div>";
        ?>

        



        <?php
              echo "<div class='border'>";
            
              $url = "../forum-page/Bogor.php?username=" . $username;
              echo "<a href='$url' class='img-link'>";
              echo  "<img src='https://upload.wikimedia.org/wikipedia/commons/6/63/Kebun_Raya_Bogor_17.jpg' style='width:300px;height:200px'>";
              echo  "<div class='middle'>";
              echo "<div class='text'>@kevin_154</div>"  ;
              echo "</div>";
              echo "<div class='desc'>Bogor</div>";
              echo "</a>";
              echo "</div>";
        ?>
        
        <?php
              echo "<div class='border'>";
            
              $url = "../forum-page/Semarang2.php?username=" . $username;
              echo "<a href='$url' class='img-link'>";
              echo  "<img src='https://cdn0-production-images-kly.akamaized.net/rXYi-scr0ErZ3ue37QqYqO0UKzU=/673x379/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/thumbnails/1816990/original/052662800_1514701908-keindahan-taman-bunga-celosia-semarang-bak-di-eropa-liputan6-siang-95d648.jpg' style='width:300px;height:200px'>";
              echo  "<div class='middle'>";
              echo "<div class='text'>@wisata_kuyy</div>"  ;
              echo "</div>";
              echo "<div class='desc'>Semarang</div>";
              echo "</a>";
              echo "</div>";
        ?>
        </div>

      <div class="column">

      <?php
              echo "<div class='border'>";
            
              $url = "../forum-page/Bondowoso.php?username=" . $username;
              echo "<a href='$url' class='img-link'>";
              echo  "<img src='https://upload.wikimedia.org/wikipedia/commons/4/46/Monumen-gerbong-maut-bondowoso-31f73.jpg' style='width:300px;height:200px'>";
              echo  "<div class='middle'>";
              echo "<div class='text'>@bayufer1</div>"  ;
              echo "</div>";
              echo "<div class='desc'>Bondowoso</div>";
              echo "</a>";
              echo "</div>";
        ?>

        <?php
              echo "<div class='border'>";
            
              $url = "../forum-page/Bandung2.php?username=" . $username;
              echo "<a href='$url' class='img-link'>";
              echo  "<img src='https://upload.wikimedia.org/wikipedia/commons/f/ff/Taman_Balai_Kota_Bandung.jpg' style='width:300px;height:200px'>";
              echo  "<div class='middle'>";
              echo "<div class='text'>@aditravel30</div>"  ;
              echo "</div>";
              echo "<div class='desc'>Bandung</div>";
              echo "</a>";
              echo "</div>";
        ?>


        <?php
              echo "<div class='border'>";
            
              $url = "../forum-page/Lembang.php?username=" . $username;
              echo "<a href='$url' class='img-link'>";
              echo  "<img src='https://tempatwisatadibandung.info/wp-content/uploads/2017/10/Orchid-Forest-Lembang-Bandung-5-500x300.jpg' style='width:300px;height:200px'>";
              echo  "<div class='middle'>";
              echo "<div class='text'>@adt_sur</div>"  ;
              echo "</div>";
              echo "<div class='desc'>Lembang</div>";
              echo "</a>";
              echo "</div>";
        ?>

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