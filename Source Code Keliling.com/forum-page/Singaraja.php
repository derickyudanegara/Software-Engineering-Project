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
            $url = "../itinenary/bali.php?username=" . $username;
            echo "<div class='backbtn'>";
            echo "<a href='$url'>";
            echo "<span>Back</span>";
            echo "</a>";
            echo "</div>";
        ?>

        <div class="user-post">
        <span>By : </span>
        <span >anonym51</span><br>
        <span id="demo"></span>
        </div>

    
    <div id="body-outer">
        <div id="body-upper">
    
            <div id="body-upper-container">
                <img id=jogja src="https://i.ytimg.com/vi/bIv5k3RPFgg/maxresdefault.jpg" alt="" style="width:100%; height:1000px">
                
            </div>

            <div class="text-block">
                <div class="text">
                    <h4 >2 DAYS <br>
                        TRIP <br>
                        IN<br>SINGARAJA</h4>
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
                            <h3 class= mid>Puncak Wanagiri</h3> 
                            </div>
                            <div class="list">  
                            <h3 class= mid>Danau Tamblingan</h3>
                            </div>
                            <div class="list">
                            <h3 class= mid>Air Panas Banjar</h3> 
                            </div>
                        </div>
                    </div>
        
                    <div class= mid-mid>
                        <div class="mid-content">
                            <div class="list">
                            <h3 class= mid>Pantai Lovina</h3> 
                            </div>
                            <div class="list">  
                            <h3 class= mid>Krisna Funtastic Land</h3>
                            </div>
                            <div class="list">
                            <h3 class= mid>Pura Ponjok Batu</h3> 
                            </div>
                        </div>
                    </div>

            
                </div>
                
                </div>
                
        </div>


        <div class = "description">
        <h3>My Experience</h3>
        <p>
        Yoo guys jadi gw mau sharing tentang pengalaman di Bali, lebih tepatnya di Singaraja. Ini adalah perjalanan 2 hari. 
            Di hari pertama gw bareng temen-temen pergi ke Puncak Wanagiri. Asik banget disana pemandangannya bagus dan cocok buat foto-foto. 
            Lalu kami pergi ke Danau Tamblingan. Ternyata danau-nya indah banget dan jadi pengen berenang haha. Lalu kami tutup hari 
            dengan pergi ke Air Panas Banjar. Pada hari kedua, kami ingin main di pantai, jadinya kami pergi ke Pantai Lovina, 
            Indah banget pemandangan pantainya. Lalu kami ke Krisna Funtastic Land yaa nostalgia aja jaman kecil dulu dengan wahana permainan yang seru disana. 
            Terakhir kami pergi ke Pura Ponjok Batu. Ya walau cuma 2 hari, tetap dapetlah memori dan pengalamannya, apalagi bareng temen-temen.
        </p>
        </div> 

        <div id="body-bottom">
                <div class="container">
                <div class="mySlides">
                    <div class="numbertext">1 / 3</div>
                    <img class="img-bottom" src="https://i.ytimg.com/vi/bIv5k3RPFgg/maxresdefault.jpg" style="width:100%; height:1000px">
                </div>

                <div class="mySlides">
                    <div class="numbertext">2 / 3</div>
                    <img class="img-bottom" src="https://upload.wikimedia.org/wikipedia/commons/f/fe/Termes_d%27Air_Panas_%28Banjar%29_-_panoramio.jpg" style="width:100%; height:1000px">
                </div>

                <div class="mySlides">
                    <div class="numbertext">3 / 3</div>
                    <img class="img-bottom"src="https://c8.alamy.com/comp/G9X2R1/ponjok-batu-temple-hindu-bali-indonesia-G9X2R1.jpg"style="width:100%; height:1000px">
                </div>
                    

                    
                <a class="prev" onclick="plusSlides(-1)">❮</a>
                <a class="next" onclick="plusSlides(1)">❯</a>

                <div class="caption-container">
                    <p id="caption"></p>
                </div>

                <div class="row">
                    <div class="column">
                    <img class="demo cursor img-bottom" src="https://i.ytimg.com/vi/bIv5k3RPFgg/maxresdefault.jpg" style="width:100%; height:200px" onclick="currentSlide(1)" alt="Puncak Wanagiri">
                    </div>
                    <div class="column">
                    <img class="demo cursor img-bottom" src="https://upload.wikimedia.org/wikipedia/commons/f/fe/Termes_d%27Air_Panas_%28Banjar%29_-_panoramio.jpg" style="width:100%; height:200px" onclick="currentSlide(2)" alt="Air Panas Banjar">
                    </div>
                    <div class="column">
                    <img class="demo cursor img-bottom" src="https://c8.alamy.com/comp/G9X2R1/ponjok-batu-temple-hindu-bali-indonesia-G9X2R1.jpg" style="width:100%; height:200px" onclick="currentSlide(3)" alt="Pura Ponjok Batu">
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

            echo "<form method='POST' action='".set_comment($conn, $kota='Singaraja')."'>
            <input type='hidden' name='username_forum' value='$username'>
            <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
            <textarea name='message' required></textarea><br>
            <button type='submit' name='comment_submit'>Comment</button>
            </form>";
        
        
            view_comment($conn, $kota = "singaraja");
        
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

    var d = new Date(2020, 4, 6, 9, 35, 10, 0);
    document.getElementById("demo").innerHTML = d;


</script>

</body>
</html>