<!--Wanasinghe N.K
    It23221000 -->
    
<?php 
    require 'config.php';
    ini_set('session.gc_maxlifetime', 5000);
    session_start();

    $username = $_SESSION['C_user_ID'];
    $sec      =  $_SESSION['type'];

    $userInfo = "SELECT * FROM useraccounts WHERE user_ID='$username'";
    $result = mysqli_query($conn, $userInfo);
    $row = mysqli_fetch_assoc($result);

    $tourinfo = "SELECT * FROM reservations WHERE user_ID='$username'";
    $tourdata = mysqli_query($conn, $tourinfo);

    if($sec != 'user'){
        header('Location: home.php');
        exit();
      }

    


    
?>

<!DOCTYPE html> 
<html lang="en">
     <head> 
        <meta charset="UTF-8"> 
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
        <link rel="stylesheet" href="./stylesheets/user.css"> 
        <title>user</title> 
        <script src="./js/user.js"></script>
    </head> 
    <body> 

    <?php require 'header.php' ?>
        <div class="container">
            <div class="left-box">
                <nav>
                    <a href="logout.php" >Logout</a>
                    <a href="#" onclick="return false;"><img src="./images/icon.jpg" width="100%" height=""></a>
                    <a href="#" onclick="tabs(0); return false;" class="tab active">User details</a>
                    <a href="#" onclick="tabs(1); return false;" class="tab">User bookings</a>
                    <a href="#" onclick="tabs(2); return false;" class="tab">Reset password</a>
                </nav>
                
            </div>
            <div class="right-box">
                <div class="profile tabshow">
                <form action="changeinfo.php" class="update-user" method="post">
                    <h1>User Details</h1>
                    <h2>First Name</h2>
                    <input type="text" class="input"  name='fname' value="<?php echo $row['first_name'] ?>">
                    <h2>Last Name</h2>
                    <input type="text" class="input"  name='lname'value="<?php echo $row['last_name'] ?>">
                    <h2>Email</h2>
                    <input type="email" class="input" name='email' value="<?php echo $row['email'] ?>">
                    <h2>Mobile Number</h2>
                    <input type="tel" class="input" name='contact' value="<?php echo $row['contact'] ?>">
                    <h2>Location</h2>
                    <textarea type="text" class="input" value="23/1, wertyugh,wrtyvbc"></textarea><br><br>
                    <input  type="submit" value="update" class="btn1">
                    </form>
                </div>
                <div class="bookings tabshow">
                    <h1>My bookings</h1>
                    <div class="box">
                    <?php while($row =mysqli_fetch_assoc($tourdata) ){ 
                    ?>
                    <h3>TOur Name : <?php echo $row['tour_name']    ?></h3>
                    <p>
                        <pre>    
                        &#x2022; Name on the tour <?php echo $row['first_name']?> <?php  echo $row['last_name'];  ?><br>
                        &#x2022;     Tour Starts <?php echo $row['start_date']?> <br>
                        &#x2022;     Tour Ends<?php  echo $row['end_date'];  ?><br>
                        &#x2022;     Tour Duration <?php echo $row['duration']    ?><br>
                        &#x2022;     No of people booked <?php echo $row['no_of_people']    ?><br>
                        &#x2022;     tour charge <?php echo $row['amount']    ?>
                        </pre>
                    </p>
                    <?php 
                    }
                    ?>
                    </div>
                    
                </div>
                <div class="password tabshow">
                    <form method="post"  action="changepassword.php">
                    <h1>Reset password</h1>
                    <h2>Old password</h2>
                    <input type="password" class="input" name="oldpw" >
                    <h2>New password</h2>
                    <input type="password" class="input" name="newpw"  id="newPassword">
                    <h2>Confirm password</h2>
                    <input type="password" class="input" name="cnfrmpw"  id="confirmPassword"><br><br>
                    <button class="btn" name="setpw">Update</button>
                </form>
                </div>
            </div>
        </div>
        
        

    </body>
</html>
