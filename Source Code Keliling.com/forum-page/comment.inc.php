<?php




function view_comment($conn, $kota){
    $kota = $kota . "_forum";
    $sql = "SELECT * FROM $kota ORDER BY(date) DESC";
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()){
        echo "<div class='comment-box'><p>";
            echo $row['username_forum']."<br>";
            echo $row['date']."<br><br>";
            echo nl2br($row['message']);
        echo "</p></div>";
    }
    
}

        function set_comment($conn, $kota){
        if(isset($_POST['comment_submit'])){
            $username_forum = $_POST['username_forum'];
            $date = $_POST['date'];
            $message = $_POST['message'];
            $kota = $kota . "_forum";   
            $sql = "INSERT INTO $kota(username_forum, date, message)
            VALUES ('$username_forum', '$date', '$message')";
            $result = $conn->query($sql);
            
            echo "<script type='text/javascript'>";
            echo "alert('Comment Posted!')";
            echo "</script>";
            }
        }
        
    
        

?>

