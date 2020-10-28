<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Post</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="postCSS.css">

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
            <img src="../itinenary/image/skuy_travel.png" alt="not found" height="50px" width="50px">
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
                  $url = "../create-post/create.php?username=" . $username;
                    echo "<a href='$url'>";
                    echo "<span>$username's Profile</span>";
                    echo "</a>";
                ?>
            </div>
      </div>


      <div class = "create-container">
        <div>
            <span>Create Your Post!</span>
        </div>
    </div>


    <div class="list-kota">
    <label for="cars">Region BALI :&nbsp;</label>
    <select id="cars">
    <option value="volvo">Singaraja</option>
    <option value="saab">Kuta</option>
    <option value="opel">Denpasar</option>
    <option value="volvo">Amlapura</option>
    <option value="saab">Semarapura</option>
    <option value="opel">Jembrana</option>
    <option value="volvo">Tabanan</option>
    <option value="saab">Badung</option>
    <option value="opel">Gianyar</option>
    <option value="volvo">Klungkung</option>
    <option value="saab">Bangli</option>
    <option value="opel">Karangasem</option>
    <option value="volvo">Buleleng</option>
    </select>

    </div>
    

    <div class="create-desc">
        <div class="day-container">
            <span class="visited">Visited Places</span><br><br>
            <span>Day 1</span>
            <form action="/action_page.php">
            <br>
                <input type="text" id="fname" name="fname" value="" placeholder="Place 1"><br>
                <input type="text" id="fname" name="fname" value="" placeholder="Place 2"><br>
                <input type="text" id="fname" name="fname" value="" placeholder="Place 3"><br>
                <input type="text" id="fname" name="fname" value="" placeholder="Place 4"><br>
            </form> 
            <div id="add-day">
                <button onclick ="appendRow()" value="Add Day">Add Day</button>
            </div>
        </div>
        
    </div>
    <div class="text-box">
    <h3>Travel Description :</h3>
    <form action="">
        <textarea class="tst"></textarea>
    </form>
    </div>
    
    
    
    <div class="add-image">
    <input type="file" id="real-file" hidden="hidden" />
    <button type="button" id="custom-button">Add Image!</button>
    <span id="custom-text">No file chosen, yet.</span>
    </div>


    <div class="post-btn">
        <form action="">
            <input type="submit" class="form-control submit" onclick="SuccesSend()" value="Post">   
        </form>
    </div>
</body>

<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.9.0.min.js"></script>
<script type="text/javascript">
    var x=2;
    function appendRow()
    {
    var d = document.getElementById('add-day');
        d.innerHTML += "<div class='day-container'><br>Day " + x + "<br><br><input type='text' placeholder='Place 1'><br><input type='text' placeholder='Place 2'><br><input type='text' placeholder='Place 3'><br><input type='text' placeholder='Place 4'></div>";
        x = x+1;

    }
    function SuccesSend(){
        alert("Posted Success!!")
    }

    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }

</script>

<script>
const realFileBtn = document.getElementById("real-file");
const customBtn = document.getElementById("custom-button");
const customTxt = document.getElementById("custom-text");

customBtn.addEventListener("click", function() {
  realFileBtn.click();
});

realFileBtn.addEventListener("change", function() {
  if (realFileBtn.value) {
    customTxt.innerHTML = realFileBtn.value.match(
      /[\/\\]([\w\d\s\.\-\(\)]+)$/
    )[1];
  } else {
    customTxt.innerHTML = "No file chosen, yet.";
  }
});


</script>

</html>