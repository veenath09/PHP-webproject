<?php
require 'config.php';

$message = []; // Initialize an empty array for messages

if (isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password =  md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);

    if ($password != $cpassword) {
        $message[] = 'Confirm password not matched!';
    } else {
        $hashedPassword = md5($password); // You should use a stronger hashing method

        // Check if user already exists
        $select = mysqli_query($conn, "SELECT * FROM useraccounts WHERE email = '$email'") or die('Query failed');
        
        if (mysqli_num_rows($select) > 0) {
            $message[] = 'User already exists';
        }
        else {
            // Insert user data into the database
            $sql = "INSERT INTO useraccounts ( first_name, last_name, email,password) VALUES ('$fname', '$lname','$email','$password')";
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

?>


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tranquil Safari - Sign Up</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="signup.css" type="text/css" rel="stylesheet">
</head>
<body>
    <section class="signup">
        <div class="content">
            <h2>Welcome to Tranquil Safari</h2>
            <span>Embark on an unforgettable adventure with Tranquil Safari.</span>
            <p>Explore the untamed beauty of nature, encounter majestic creatures, and create lifelong memories. Join us as we journey into the heart of the wild!</p>
        </div>
        <div class="signup_form">
            <fieldset>
                <div class="topic"><h2>Sign Up</h2></div>
                <div class="input_box">
                    <form method="post" action="signin.php" enctype="multipart/form-data" class="register">
                        <input type="text" name="fname" placeholder="Enter first name" required>
                        <input type="text" name="lname" placeholder="Enter last name" required>
                        <input type="email" name="email" placeholder="Enter email" required>
                        <input type="password" name="password" placeholder="Enter password" required>
                        <input type="password" name="cpassword" placeholder="Re-enter password" required>
                        <input type="checkbox" id="checkbox" class="box">
                        <label for="checkbox">I agree to <a href="#">Terms & conditions</a></label>
                        <input type="submit" name="submit" value="Sign up" class="btn">
                        
                    </form>
                    <p>Already have an account?<a href="#"> Login</a></p>
                </div>
            </fieldset>
        </div>
    </section>
</body>
</html>
