<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KELILING.COM</title>
    
    <link rel = "icon" href =  "../image/skuy_travel.png"  type = "image/x-icon"> 
    <link rel="stylesheet" href="CSSforum.css">
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
        <span >mawang</span><br>
        <span id="demo"></span>
        </div>

    
    <div id="body-outer">
        <div id="body-upper">
    
            <div id="body-upper-container">
                <img id=jogja src="https://cdn.pixabay.com/photo/2019/10/22/18/00/beach-4569394_960_720.jpg" alt="" style="width:100%;height:1000px">
                
            </div>

            <div class="text-block">
                <div class="text">
                    <h4 >2 DAYS <br>
                        TRIP <br>
                        IN<br>SEMARANG</h4>
                  </div>
            </div>
        </div>
            <!--  -->
        <div id="body-mid">
            <div class="mid-upper">
                <h1 class="text-mid">DAY</h1>
                <div class="number">
                    <button class="num-mid" onclick="showPanel(0,'#CACFD2')">1</button>
                    <button class="num-mid" onclick="showPanel(1,'#CACFD2')">2</button>
                </div>

                <div class="mid-content-view">
                    <div class= mid-mid>
                        <div class="mid-content">
                            <div class="list">
                            <h5 class= mid>Jerakah Railway Station</h5> 
                            </div>
                            <div class="list">  
                            <h5 class= mid>Pantai Marina</h5>
                            </div>
                            <div class="list">
                            <h5 class= mid>Restoran Kampung Laut</h5> 
                            </div>
                            <div class="list">
                            <h5 class= mid>Balemong Resort semarang</h5> 
                            </div>
                        </div>
                    </div>
        
                    <div class= mid-mid>
                        <div class="mid-content">
                            <div class="list">
                            <h5 class= mid>Kampung Pecinaan Chinatown Semarang</h5> 
                            </div>
                            <div class="list">  
                            <h5 class= mid>Pagoda Avalokitesvara Buddhagaya Watugong</h5>
                            </div>
                            <div class="list">
                            <h5 class= mid>Lawang Sewu Dusun semilir Eco Park</h5> 
                            </div>
                        </div>
                    </div>
        

                   
                </div>
                
                </div>
                
        </div>


        <div class = "description">
        <h3>My Experience</h3>
        <p>
            Nama username ku mawang dan aku mau ngasih pengalaman traveling ku selama berwisata di Semarang nih wkwk. Jadi aku tuh 
            pergi bersama keluarga, kami bertiga ada ayah dan ibu. Kami naik kereta dan tibanya di stasiu Jerakah. Wisata pertama yang 
            kami tuju adalah Pantai Marina. Secara udah lama banget gak kepantai kan. Pantai Marina kalau kalian tau, bagus banget pemandangannya, 
            terlebih lagi airnya cukup jernih dan seru tentunya main di pantai. Lalu di sekitar situ ada Resto Kampung laut, dimana 
            kami nyicipin makanan khas laut di Pantai. Enak banget makanannya. Nah karena hari pertama kami main di pantai, 
            akhirnya kami lelah dan istirahat di penginapan namanya Balemong Resort semarang. 
            Next day pada hari kedua, kami pergi ke Kampung Pecinaan Chinatown Semarang. Daerahnya cukup unik,
             kami sambil berfoto foto disana. Siang harinya, kami menuju ke Pagoda Avalokitesvara Buddhagaya Watugong
              dimana kami melihat beberapa budaya yang sangat menambah pengetahuan saya tentunya.
            Dan terakhir adalah kami pergi ke Lawang Sewu Dusun semilir Eco Park. Indah banget disana banyak tanaman, jembatan bervariasi, 
            pokoknya nggak rugi. Mungkin perjalanan kami cuma 2 hari, tapi kami dapat banyak banget keseruannya. Sekian!
        </p>
        </div>

        <div id="body-bottom">
                <div class="container">
                <div class="mySlides">
                    <div class="numbertext">1 / 3</div>
                    <img class="img-bottom" src="https://cdn.pixabay.com/photo/2019/10/22/18/00/beach-4569394_960_720.jpg" style="width:100%; height:1000px">
                </div>

                <div class="mySlides">
                    <div class="numbertext">2 / 3</div>
                    <img class="img-bottom" src="https://cdn0-production-images-kly.akamaized.net/rj_mvJGhmHed5dPY5u7zIETnVJE=/640x360/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/1497090/original/001195200_1486188532-pecinan_1.jpg" style="width:100%; height:1000px">
                </div>

                <div class="mySlides">
                    <div class="numbertext">3 / 3</div>
                    <img class="img-bottom" src="https://www.inibaru.id/media/1334/large/normal/ec15a9bb-f0fa-42c9-ab51-a4ff10140d21__large.jpg" style="width:100%; height:1000px">
                </div>

                
                    
                <a class="prev" onclick="plusSlides(-1)">❮</a>
                <a class="next" onclick="plusSlides(1)">❯</a>

                <div class="caption-container">
                    <p id="caption"></p>
                </div>

                <div class="row">
                    <div class="column">
                    <img class="demo cursor img-bottom" src="https://cdn.pixabay.com/photo/2019/10/22/18/00/beach-4569394_960_720.jpg" style="width:100%; height:200px" onclick="currentSlide(1)" alt="Tugu Malang">
                    </div>
                    <div class="column">
                    <img class="demo cursor img-bottom" src="https://cdn0-production-images-kly.akamaized.net/rj_mvJGhmHed5dPY5u7zIETnVJE=/640x360/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/1497090/original/001195200_1486188532-pecinan_1.jpg" style="width:100%; height:200px" onclick="currentSlide(2)" alt="Kampung Pecinan">
                    </div>
                    <div class="column">
                    <img class="demo cursor img-bottom" src="https://www.inibaru.id/media/1334/large/normal/ec15a9bb-f0fa-42c9-ab51-a4ff10140d21__large.jpg" style="width:100%; height:200px" onclick="currentSlide(3)" alt="Dusun Semilir">
                    </div>
                </div>
            </div>
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

            echo "<form method='POST' action='".set_comment($conn, $kota='Semarang')."'>
            <input type='hidden' name='username_forum' value='$username'>
            <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
            <textarea name='message' required></textarea><br>
            <button type='submit' name='comment_submit'>Comment</button>
            </form>";
        
        
            view_comment($conn, $kota = "semarang");
        
        ?>
    </div>





    <script>


        // day

    //    var dayIndex=1;
    //    showDays(dayIndex);

    //    function

        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
        showSlides(slideIndex += n);
        }

        function currentSlide(n) {
        showSlides(slideIndex = n);
        }

        function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("demo");
        var captionText = document.getElementById("caption");
        if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
        captionText.innerHTML = dots[slideIndex-1].alt;
        }
        </script>
      
      <script>
        var tabButtons=document.querySelectorAll(".mid-upper .number button");
        var tabPanels=document.querySelectorAll(".mid-upper  .mid-mid");
    
        function showPanel(panelIndex,colorCode) {
            tabButtons.forEach(function(node){
                node.style.backgroundColor="";
                node.style.color="";
            });
            tabButtons[panelIndex].style.backgroundColor=colorCode;
            tabPanels.forEach(function(node){
                node.style.display="none";
            });
            tabPanels[panelIndex].style.display="block";
        }
        showPanel(0,'#CACFD2');
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

if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }

    var d = new Date(2020   , 4, 8, 7, 33, 30, 0);
    document.getElementById("demo").innerHTML = d;


</script>

</body>
</html>