

<?php

    session_start();
require 'config.php';
$errors = array();

if (isset($_POST['signin'])) {
    $email = $_POST['email'];
    $password = md5(trim($_POST['password']));
    $hash_pw = $password;

    $quary = "SELECT * FROM useraccounts WHERE email ='{$email}' AND password = '{$hash_pw}' LIMIT 1 ";
    $result = mysqli_query($conn, $quary);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_array($result);
        
        $_SESSION['C_user_ID'] = $row['user_ID'];
        $_SESSION['C_email'] = $row['email'];
        $_SESSION['type'] = $row['type'];

        if ($row['type'] == 'user') {
            header('Location: home.php');
        } 
        elseif ($row['type'] == 'admin') {
            header('Location: admin.php');
        } 
        elseif ($row['type'] == 'tourg') {
            header('Location: tourGuide.php');
        } 
        elseif ($row['type'] == 'manager') {    
            header('Location: manager.php');
        }
    } 
    
    else {
        $errors[] = "<h1 class = \"error\">Username or Password is $hash_pw invalid</h1>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>login Page</title>
  <link rel="stylesheet" href="./stylesheets/TestLogin1.css">
</head>
<body>
    <center>
  <main>
 
        <div class="adminlogincontainer">
            <div class="imgcntr">
            <img src="./images/Tranquil.png" alt="Logo" class="logo">
            </div>
            <h1>Login</h1>

            <form action="#" method="post">
              <div class="form-group">
                <label for="username">Email</label>
                <input type="text" id="username" name="email" required>
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
              </div>
              <div class="form-group">
                <button type="submit" name="signin">Login</button>
              </div>
              </form>
              
              <div class="form-group">
                <a href="signinnew.php"><button type="submit" name="signup">Register</button></a>

                <a href="home.php">Back to home Page</a>
              </div>
            
          </div>
       
  </main>
</center>
</body>
</html>

