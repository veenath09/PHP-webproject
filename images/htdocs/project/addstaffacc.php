<!--De silva M.M
    It23213258 -->
<?php
require 'config.php';

$message = []; // Initialize an empty array for messages

if (isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password =  md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);
    $number = $_POST['contactNo'];
    $type = 'admin';

    if ($password != $cpassword) {
        $message[] = 'Confirm password not matched!';
    } else {
        $hashedPassword = md5($password); 

        // Check if user already exists
        $select = mysqli_query($conn, "SELECT * FROM useraccounts WHERE email = '$email'") or die('Query failed');
        
        if (mysqli_num_rows($select) > 0) {
            $message[] = 'User already exists';
        }
        else {
            // Insert user data into the database
            $sql = "INSERT INTO useraccounts ( first_name, last_name, email,password,type,contact) VALUES ('$fname', '$lname','$email','$password','$type','$number')";
            if (mysqli_query($conn, $sql)) {
                $message[] = 'Registered successfully!';
                header('Location: TestLogin1.php');
                exit;
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tranquil Safari - Sign Up</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./stylesheets/addstaffacc.css" type="text/css" rel="stylesheet">
</head>
<body>
    <?php require 'header.php' ?>
    <section class="signup">
        <div class="content">
            <h2>Tranquil Safari Onboarding</h2>
            <span>Embark on an unforgettable adventure with Tranquil Safari.</span>
            <p>Explore the untamed beauty of nature, encounter majestic creatures, and create lifelong memories. Join us as we journey into the heart of the wild!</p>
        </div>
        <div class="signup_form">
            <form method="post" action="addstaffacc.php" enctype="multipart/form-data" class="register">
            <fieldset>
                <div class="topic"><h2>Sign Up</h2></div>
                
                    <form method="post" action="" enctype="multipart/form-data" class="register">
                        <input type="text" name="fname" placeholder="Enter first name" required>
                        <input type="text" name="lname" placeholder="Enter last name" required>
                        <input type="email" name="email" placeholder="Enter email" required>
                        <input type="tel" name="contactNo" placeholder="Enter Contact number" required>
                        <input type="password" name="password" placeholder="Enter password" required>
                        <input type="password" name="cpassword" placeholder="Re-enter password" required>
                        <input type="submit" name="submit" value="Create Account" class="btn">

                        

                           
                
            </fieldset>
            </form>
        </div>
    </section>
    <?php require 'footer.php' ?>
</body>
</html>