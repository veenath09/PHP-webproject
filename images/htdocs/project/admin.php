<!--Ekanayake J.K.B
    It23199262 -->

<?php 
    require 'config.php';
    ini_set('session.gc_maxlifetime', 5000);
    session_start();

    $username = $_SESSION['C_user_ID'];
    $sec      =  $_SESSION['type'];

    $userInfo = "SELECT * FROM useraccounts WHERE user_ID='$username'";
    $result = mysqli_query($conn, $userInfo);
    $row = mysqli_fetch_assoc($result);

    if($sec != 'admin'){
      header('Location: home.php');
      exit();
    }






  ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Page</title>
  <link rel="stylesheet" href="./stylesheets/admin.css">
</head>
<body>
  <main>
    <?php require 'header.php'; ?>
  
    <center>
    <div class="wrapper">
      <div class="wrap1">
        <div class="adminlogincontainer">
          <img src="logo.png" alt="Logo" class="logo">
          <h1>Admin Details</h1>
          <form action="#">
            <div class="form-group">
              <label for="username">adminstrator name </label>
              <p><span id="username"><?php echo $row['first_name']; ?> <?php echo $row['last_name']; ?></span></p>
            </div>
            <div class="form-group">
              <label for="email">Email </label>
              <p><span id="email"><?php echo $row['email']; ?></span></p>
            </div>
            <div class="form-group">
            <button type="submit" formaction="logout.php">Log Out</button>
            </div>
          </form>
        </div>
      </div>
      <div class="wrap2"> 
        
        <br><br>
        <div class="acountactivationcontainer">
          <section class="account-activation">
            <h2>Staff Account Management</h2>
            <div class="actions">
              <div class="usracc">
              <a href="addstaffacc.php"><button  type='submit'>Add  Staff Accounts</button></a>
              
              </div>
              
              <h2>Tour  Management</h2>
            <div class="actions">
              <a href="addtours.php"><button  type="submit">Create Tours  </button></a>
              <a href="deletetour.php"><button  type="submit">Delete Tours</button></a>
            </div>
          </section>
        </div>
      </div>  
      
    </div>
    
  <div class="wrapper">
    <div class="reservationcontainer">
      <section class="reservation-requests">
        <h2>Reservation</h2>
        
          <table>
            <thead>
              <tr>
                <th>Username</th>
                <th>Amount</th>
              </tr>
            </thead>
            <tbody>
            <?php

              require 'config.php';
              $sql = "SELECT * FROM reservations";
              $result = $conn->query($sql);

              if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                  echo "<tr>";
                    echo "<td>" . $row['first_name'] . "</td>";
                    echo "<td>$ " . $row['amount'] . "</td>";
                  echo "</tr>";
                }
              } else {
                echo "<tr><td colspan='2'>No reservations found.</td></tr>";
              }

              $conn->close();

                ?>
            </tbody>
          </table>
        
      </section>
      </div>
    </div>
    </div>
  </center>
 
  </main>
</body>
</html>
