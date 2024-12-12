<?php /*
require 'config.php';

if (isset($_POST['submit'])) {
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, md5($_POST['password']));
    $cpassword = mysqli_real_escape_string($conn, md5($_POST['cpassword']));

    if ($password != $cpassword) {
        $message[] = 'Confirm password not matched!';
    } else {
        $hashedPassword = md5($password); // You should use a stronger hashing method

        // Check if user already exists
        $select = mysqli_query($conn, "SELECT * FROM useraccounts WHERE email = '$email'") or die('Query failed');
        if (mysqli_num_rows($select) > 0) {
            $message[] = 'User already exists';
        } else {
            // Insert user data into the database
            $sql = "INSERT INTO useraccounts (firstname, lastname, email, password) VALUES ('$fname', '$lname', '$email', '$hashedPassword')";
            if (mysqli_query($conn, $sql)) {
                $message[] = 'Registered successfully!';
                header('Location: login.php');
                exit;
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        }
    }
}

    mysqli_close($conn);
    

    $select = mysqli_query($conn,"SELECT * FROM 'useraccounts'WHERE email = '$email' AND password = '$password' ")OR die('query failed');

    if(mysqli_num_rows($select) > 0){
        $message[] = 'user already exists';
    }
    else{
        if($password != $cpassword){
            $message[]= 'confirm password not matched!';
        }else{
            $insert = mysqli_query($conn,"INSERT INTO 'useraccounts'(firstname,lastname, email, password) VALUES ('$firstname','$lastname', '$email', '$hashedPassword')") or die('query failed');
        }
        if($insert){
            $message[]='Registered successfully!';
            header('location: login.php');
        
        }else{
            $message[]='Registeration failed!';
        }
    }
*/
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Tranquil Safari-Sign Up</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width , initial-scale=1.0">
        
        
        <link href="signup.css" type="text/css" rel="stylesheet" >
        
    </head>
    <body>
        <script src="signup.js"></script>
        <section class="signup">
            <div class="content">
                <h2>Welcome to Tranquil Safari</h2>
                <span>Embark on an unforgettable adventure with Tranquil Safari.</span>
                <p>Explore the untamed beauty of nature, encounter majestic cretures, and create lifelong memories.
                    join us as we journey into the heart of the wild!
                </p>
            </div>
            <div class="signup_form" >
                <fieldset>
                <div class="topic"><h2>Sign Up</h2></div>
                    <form method="post" action="signup.php" enctype="multipart/form-data">
                        <div class="input_box">
                            <input type="text" name="fname" placeholder="Enter fisrt name" required>
                        
                            <input type="text" name="lname" placeholder="Enter last name" required>
                        
                            <input type="email" name="email" placeholder="Enter email" required>
                        
                            <input type="password" name="password" placeholder="Enter password" required>
                        
                            <input type="password" name="cpassword" placeholder="Re-enter password" required>
                        
                        
                        <div class="account">
                            <input type="checkbox" id="checkbox" class="box">
                            <label for="checkbox">I agree to <a href="#">Terms & conditions</a></label>
                            <input type="submit" value="sign up" class="btn">
                            
                            <p>Already have an account?<a href="#"> Login</a></p>
                            
                        </div>
                        </div>
                    </form>
                </fieldset>
            </div>
        
        </section>

    </body>
</html>
            
            