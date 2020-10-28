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
        <span >kevin_154</span><br>
        <span id="demo"></span>
        </div>

    
    <div id="body-outer">
        <div id="body-upper">
    
            <div id="body-upper-container">
                <img id=jogja src="https://upload.wikimedia.org/wikipedia/commons/6/63/Kebun_Raya_Bogor_17.jpg" alt=""  style="width:100%;height:1000px">
                
            </div>

            <div class="text-block">
                <div class="text">
                    <h4 >3 DAYS <br>
                        TRIP <br>
                        IN<br>BOGOR</h4>
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
                            <h3 class= mid>Kebun Raya Bogor</h3> 
                            </div>
                            <div class="list">  
                            <h3 class= mid>Grand Garden Resto & Cafe</h3>
                            </div>
                            <div class="list">
                            <h3 class= mid>Zest Hotel Bogor</h3> 
                            </div>
                        </div>
                    </div>
        
                    <div class= mid-mid>
                        <div class="mid-content">
                            <div class="list">
                            <h3 class= mid>Taman Kencana</h3> 
                            </div>
                            <div class="list">  
                            <h3 class= mid>Kedai Kita</h3>
                            </div>
                            <div class="list">
                            <h3 class= mid>Taman Kaulinan Bogor</h3> 
                            </div>
                        </div>
                    </div>
        
                    <div class= mid-mid>
                        <div class="mid-content">
                            <div class="list">
                            <h3 class= mid>Museum Kepresidenan Balai Kirti</h3> 
                            </div>
                            <div class="list">  
                            <h3 class= mid>Guranti Cafe & Resto</h3>
                            </div>
                            <div class="list">
                            <h3 class= mid>Hotel Royal Bogor</h3> 
                            </div>
                        </div>
                    </div>

                
                </div>
                
                </div>
                
        </div>

        <div class = "description">
        <h3>My Experience</h3>
        <p>
            Salam kenal, namaku Kevin. Bogor adalah salah satu kota yang saya minati untuk berwisata. 
            Kali ini aku berwisata dengan keluarga, terdiri dari orang tua, adik dan kakak. Oke untuk hari pertama sendiri pastinya cukup diketahui kalau tempat wisata yang paling terkenal di Bogor itu ya Kebun Raya Bogor. Kalau kalian tahu, Kebun raya bogor memang indah dengan tamannya. Ini bisa buat tempat berfoto. Lanjut kami ke Grand Garden Resto & Cafe untuk beristirahat dan makan gitu. Singkat aja kami langsung beristirahat 
            di Zest Hotel Bogor. Pada hari kedua, kami pergi ke taman kencana. Taman ini mungkin pemandangannya beda sama Kebun Raya bogor, tapi gak kalah unik. Lalu kami pergi ke Kedai kita dan bersantay. Sorenya kami ke Taman Kaulinan Bogor. Taman sederhana untuk bermain anak-anak, khusunya adik ku. 
            Di hari ketiga, kami berpikir untuk pergi ke museum, secara kami anak-anak masih pelajar jadi harus ada sesuatu yang dipelajari. Kami pun 
            pergi ke Museum Kepresidenan Balai Kirti. Lalu ke cafe guranti dan terakhir kami kembali ke hotel. Besoknya kami pulang deh ke kota kami.
             Pengalaman yang berharga dengan keluarga dan recommended banget!


        </p>
        </div>
            

        <div id="body-bottom">
                <div class="container">
                <div class="mySlides">
                    <div class="numbertext">1 / 3</div>
                    <img class="img-bottom" src="https://upload.wikimedia.org/wikipedia/commons/6/63/Kebun_Raya_Bogor_17.jpg" style="width:100%; height:1000px">
                </div>

                <div class="mySlides">
                    <div class="numbertext">2 / 3</div>
                    <img class="img-bottom" src="https://akcdn.detik.net.id/customthumb/2016/06/15/1025/img_20160615105304_5760d120e256b.jpg?w=600&q=90" style="width:100%; height:1000px">
                </div>

                <div class="mySlides">
                    <div class="numbertext">3 / 3</div>
                    <img class="img-bottom"src="https://lh3.googleusercontent.com/proxy/Tn6nL7Jbl4t-yZluTd6iCOykA89TssbUq61P1rdzUqyHokVvxHdepXzxS_KewjAg1xgpIjlT39sSbGGcuJRdgg6J3vdwu52Oe3WxF2ixdV87h7wIgPrPoDdu1JzDOGVbnA"style="width:100%; height:1000px">
                </div>

                    
                <a class="prev" onclick="plusSlides(-1)">❮</a>
                <a class="next" onclick="plusSlides(1)">❯</a>

                <div class="caption-container">
                    <p id="caption"></p>
                </div>

                <div class="row">
                    <div class="column">
                    <img class="demo cursor img-bottom" src="https://upload.wikimedia.org/wikipedia/commons/6/63/Kebun_Raya_Bogor_17.jpg" style="width:100%; height:200px" onclick="currentSlide(1)" alt="Kebun Raya Bogor">
                    </div>
                    <div class="column">
                    <img class="demo cursor img-bottom" src="https://akcdn.detik.net.id/customthumb/2016/06/15/1025/img_20160615105304_5760d120e256b.jpg?w=600&q=90" style="width:100%; height:200px" onclick="currentSlide(2)" alt="Taman Kencana">
                    </div>
                    <div class="column">
                    <img class="demo cursor img-bottom" src="https://lh3.googleusercontent.com/proxy/Tn6nL7Jbl4t-yZluTd6iCOykA89TssbUq61P1rdzUqyHokVvxHdepXzxS_KewjAg1xgpIjlT39sSbGGcuJRdgg6J3vdwu52Oe3WxF2ixdV87h7wIgPrPoDdu1JzDOGVbnA" style="width:100%; height:200px" onclick="currentSlide(3)" alt="Kedai Kita">
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

            echo "<form method='POST' action='".set_comment($conn, $kota='Bogor')."'>
            <input type='hidden' name='username_forum' value='$username'>
            <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
            <textarea name='message' required></textarea><br>
            <button type='submit' name='comment_submit'>Comment</button>
            </form>";
        
        
            view_comment($conn, $kota = "bogor");
        
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

    var d = new Date(2020, 4, 7, 15, 23, 10, 0);
    document.getElementById("demo").innerHTML = d;


</script>

</body>
</html>