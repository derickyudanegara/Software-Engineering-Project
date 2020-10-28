<?php
  $posted = false;
  if( $_POST ) {
    $posted = true;

    // Database stuff here...
    // $result = mysql_query( ... )
    $result = $_POST['name'] == "danny"; // Dummy result
  }
?>

<html>
  <head></head>
  <body>

  <?php
    if( $posted ) {
      if( $result ) 
        echo "<script type='text/javascript'>alert('submitted successfully!')</script>";
      else
        echo "<script type='text/javascript'>alert('failed!')</script>";
    }
  ?>
    <form action="" method="post">
      Name:<input type="text" id="name" name="name"/>
      <input type="submit" value="submit" name="submit"/>
    </form>
  </body>
</html>