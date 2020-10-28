<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KELILING.COM</title>
    
    <link rel = "icon" href =  "../image/skuy_travel.png"  type = "image/x-icon"> 
    <link rel="stylesheet" href="1-forumCSS.css">
    <link rel="icon" href="../Assets/Logo-Kelilingcom.png">
</head>
<body>
  
    <!-- Navbar Header -->
    <div id="navbar-container">

        <!-- Mavbar Logo -->
        <a href="../itinenary/itinenary_listPHP.php" class="text-link">
            <div id="navbar-left-container">
                <img src="./image/skuy_travel.png" alt="not found" height="50px" width="50px">
                <span class="navbar-text"><b>KELILING.COM</b></span>  
            </div>
        </a>

        <!-- Navbar Right -->
        <div id="navbar-right-container">
            <span class="navbar-text">Collection</span>
            <?php
            session_start();

            if(!isset($_SESSION['username'])){
                header("location:connect-login.php");
                exit();
            }


            $username = $_SESSION['username'];


            echo "<div class='navbar-button'>";
            echo "Hello"."<br>";
            echo "<span class='username'>$username</span>";
            echo "</div>";

            echo "<a href='../logout.php' class='navbar-button-p'>";
            echo "Logout";
            echo "</a>"

            ?>



        </div>
    </div>

    <h4 class="penulis">By: pakde</h4>
    <div id="body-outer">
        <div id="body-upper">
    
            <div id="body-upper-container">
                <img id=karimun src="./image/karimun.jpg" alt="">
                
            </div>

            <div class="text-block">
                <div class="text">
                    <h4 >3 DAYS <br>
                        TRIP <br>
                        IN<br>KARIMUN JAWA</h4>
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
                    <img class=img-mid src="https://i.ytimg.com/vi/dhlqN6eE2f0/maxresdefault.jpg" alt="">
                    <h3>Hotel D'Season</h3> 
                </div>
                <div class="list">
                    <img class=img-mid src="https://upload.wikimedia.org/wikipedia/commons/c/c5/Ujung_Gelam_Beach_Karimun_Jawa_2.JPG" alt="">
                    <h3>Pantai Ujung Gelam</h3> 
                </div>
                <div class="list">
                    <img class=img-mid src="https://cdn2.tstatic.net/jateng/foto/bank/images/mangrove-pulau-kemujan_20151118_083421.jpg" alt="">
                    <h3>Hutan Bakau di Pulau Kemujan</h3> 
                </div>
                </div>
                
            </div>

        </div>
        <div id="body-bottom">
            <img class=img-bottom src="https://lh3.googleusercontent.com/proxy/KVSFDIdS1AM_Jh_F__WB3P7E7DddAHwKJ0IPdvP8PbjeHz_fUy8c1B_5cFl9r2mLsHsxsP1vdrMMFOiPsg712AROr2kYu08zSiG6J5MR1pXXlIPGL9fudbbsMRDwLA" alt="">
            <img class=img-bottom src="https://sanjayatour.com/wp-content/uploads/2019/08/Agen-Tour-Karimunjawa-696x398.jpg" alt="">
            <img class=img-bottom src="https://media.travelingyuk.com/wp-content/uploads/2018/02/Foto-aerial-Pulau-Cemara-Kecil-via-instagram-1024x812.jpg" alt="">
        </div>
    </div>

    <div class="comment-container">
        <h1>Comments</h1>
        <?php
        if(!isset($_SESSION['username'])){
            header("location:connect-login.php");
            exit();
        }
        $username = $_SESSION['username'];
        echo "Post a Comment! ";
        $url = "../itinenary/itinenary_listPHP.php?username=" . $username;
        echo "<a href='$url'> ~Back to Homepage~ </a>";

        ?>

        <?php
            date_default_timezone_set('Asia/Jakarta');
            include 'comment.inc.php';
            include 'connect.php';
        ?>

        <?php
        echo "<form method='POST' action='".set_comment($conn, $kota='KarimunJawa')."'>
            <input type='hidden' name='username_forum' value='$username'>
            <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
            <textarea name='message' required></textarea><br>
            <button type='submit' name='comment_submit'>Comment</button>
        </form>";

        view_comment($conn, $kota='karimunjawa');
        ?>
    </div>

    <?php
        function set_comment($conn, $kota){
        if(isset($_POST['comment_submit'])){
            $username_forum = $_POST['username_forum'];
            $date = $_POST['date'];
            $message = $_POST['message'];   

            $sql = "INSERT INTO karimunjawa_forum(username_forum, date, message)
            VALUES ('$username_forum', '$date', '$message')";
            $result = $conn->query($sql);
            echo '<script type="text/javascript">alert("Comment Posted!")</script>';
            }   
        }
    ?>

</body>
</html>