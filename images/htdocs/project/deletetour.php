<!-- It23230460   It23221000  It23199262   It23213258  It23223844 -->
<?php
            require 'config.php';
            session_start();


        if (isset($_POST["tour_name"]) ) {
            $tourname = $_POST['tour_name'];
            echo "tourname $tourname";
            $sql = "DELETE FROM Tours WHERE title='$tourname' ";
            if ($conn->query($sql)) {
                echo " deleted successfully";
              } else {
                echo "Error deleting record: " . $conn->error;
              }
          
              $conn->close();
            }
            ?>


<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet"  href="./stylesheets/deletetour.css">
</head>

<body>

<h2>Delete Tour</h2>

<form action="" method="post">
  Tour Name:<br>
  <input type="text" name="tour_name">
  <br>
  Tour ID:<br>
  <input type="text" name="tour_id">
  <br><br>
  <input type="submit" value="Delete">
</form> 

</body>
</html>
