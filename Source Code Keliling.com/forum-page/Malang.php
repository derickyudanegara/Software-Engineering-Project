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
        <span >halo</span><br>
        <span id="demo"></span>
        </div>

    
    <div id="body-outer">
        <div id="body-upper">
    
            <div id="body-upper-container">
                <img id=jogja src="https://upload.wikimedia.org/wikipedia/commons/9/96/Tugu_Malang.jpg" alt="" style="width:100%;height:1000px">
                
            </div>

            <div class="text-block">
                <div class="text">
                    <h4 >3 DAYS <br>
                        TRIP <br>
                        IN<br>MALANG</h4>
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
                    <button class="num-mid" onclick="showPanel(2,'#CACFD2')">3</button>
                </div>

                <div class="mid-content-view">
                    <div class= mid-mid>
                        <div class="mid-content">
                            <div class="list">
                            <h3 class= mid>Stasiun Malang</h3> 
                            </div>
                            <div class="list">  
                            <h3 class= mid>Alun-Alun Tugu Malang</h3>
                            </div>
                            <div class="list">
                            <h3 class= mid>Dandee's Resto</h3> 
                            </div>
                            <div class="list">
                            <h3 class= mid>Bluebells Expresso Hotel Syariah</h3> 
                            </div>
                        </div>
                    </div>
        
                    <div class= mid-mid>
                        <div class="mid-content">
                            <div class="list">
                            <h3 class= mid>Taman Kota</h3> 
                            </div>
                            <div class="list">  
                            <h3 class= mid>Taman Kunang-Kunang</h3>
                            </div>
                            <div class="list">
                            <h3 class= mid>IKU Cafe and Resto Malang</h3> 
                            </div>
                        </div>
                    </div>
        
                    <div class= mid-mid>
                        <div class="mid-content">
                            <div class="list">
                            <h3 class= mid>Kampung warna – warni Jodipan</h3> 
                            </div>
                            <div class="list">  
                            <h3 class= mid>Wisata Petik Apel Mandiri</h3>
                            </div>
                            <div class="list">
                            <h3 class= mid>Taman Labirin</h3> 
                            </div>
                        </div>
                    </div>

                </div>
                
                </div>
                
        </div>

        <div class = "description">
        <h3>My Experience</h3>
        <p>
            Malang merupakan kota yang indah, dimana saya dan teman-teman sekolah di SMA, bermain dan berlibur ke kota malang. 
            Kami bepergian menggunakan kereta api, oleh karena itu kami tiba di stasiun malang. 
            Setelah itu, kami berlanjut menuju ke alun-alun tugu. Seperti yang kalian ketahui, alun-alun 
            tugu kota malang sangatlah khas dan aestethic untuk tempat berfoto. Yaa cukup indah untuk berekreasi juga!
             Setelah itu kami makan di Dandee's Resto, harganya cukup terjangkau dan makanannya pun enak. Dan kami pun 
             menginap di Bluebells Expresso Hotel Syariah. Hari kedua, kami memulai perjalanan di Taman Kota Malang,
              cukup indah karena taman tersebut dipenuhi tanaman yang rindang. Selain itu ada taman Kunang-kunang dan IKU cafe resto.
               Di hari ketiga, kami pergi ke Kampung warna-warni Jodipan, sesuai namanya ya pastinya warna-warni.
                 Tidak lupa kami mengunjungi Wisata Petik Apel Mandiri yang apelnya segar sekali dan enak.
                  Wisata terakhir yaitu Taman Labirin. Overall saya sangat menikmati perjalanan saya ke kota malang,
                   bersama teman-teman saya menggunakan kereta dan perjalanan di sekitar malang menggunakan transportasi umum.
                    Ini adalah liburan bersama teman-teman yang saya sangat rindukan.
        </p>
        </div>
            

        <div id="body-bottom">
                <div class="container">
                <div class="mySlides">
                    <div class="numbertext">1 / 6</div>
                    <img class="img-bottom" src="https://upload.wikimedia.org/wikipedia/commons/9/96/Tugu_Malang.jpg" style="width:100%; height:1000px">
                </div>

                <div class="mySlides">
                    <div class="numbertext">2 / 6</div>
                    <img class="img-bottom" src="" style="width:100%; height:1000px">
                </div>

                <div class="mySlides">
                    <div class="numbertext">3 / 6</div>
                    <img class="img-bottom"src="https://upload.wikimedia.org/wikipedia/commons/8/84/Musium_KAA.jpg"style="width:100%; height:1000px">
                </div>
                    
                <div class="mySlides">
                    <div class="numbertext">4 / 6</div>
                    <img class="img-bottom" src="https://live.staticflickr.com/8776/28096788162_a2b5e3763a_b.jpg" style="width:100%; height:1000px">
                </div>

                <div class="mySlides">
                    <div class="numbertext">5 / 6</div>
                    <img class="img-bottom"src="https://live.staticflickr.com/5725/23579794495_ae3446195d_b.jpg" style="width:100%; height:1000px">
                </div>
                    
                <div class="mySlides">
                    <div class="numbertext">6 / 6</div>
                    <img class="img-bottom"src="https://live.staticflickr.com/644/22619623051_05c170766c_b.jpg" style="width:100%; height:1000px">
                </div>
                    
                <a class="prev" onclick="plusSlides(-1)">❮</a>
                <a class="next" onclick="plusSlides(1)">❯</a>

                <div class="caption-container">
                    <p id="caption"></p>
                </div>

                <div class="row">
                    <div class="column">
                    <img class="demo cursor img-bottom" src="https://upload.wikimedia.org/wikipedia/commons/9/96/Tugu_Malang.jpg" style="width:100%; height:200px" onclick="currentSlide(1)" alt="Tugu Malang">
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

            echo "<form method='POST' action='".set_comment($conn, $kota='Malang')."'>
            <input type='hidden' name='username_forum' value='$username'>
            <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
            <textarea name='message' required></textarea><br>
            <button type='submit' name='comment_submit'>Comment</button>
            </form>";
        
        
            view_comment($conn, $kota = "malang");
        
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