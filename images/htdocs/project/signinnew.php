<!--Wanasinghe N.K
    It23221000 -->
    <?php
require 'config.php';

$message = []; 
if (isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password =  md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);
    $number = $_POST['contactNo'];
    $type = 'user';

    if ($password != $cpassword) {
        $message[] = 'Confirm password not matched!';
    } else {
        $hashedPassword = md5($password); 

        $select = mysqli_query($conn, "SELECT * FROM useraccounts WHERE email = '$email'") or die('Query failed');
        
        if (mysqli_num_rows($select) > 0) {
            $message[] = 'User already exists';
        }
        else {
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
    <link href="./stylesheets/signin.css" type="text/css" rel="stylesheet">
    <script src="./js/signin.js"></script>
</head>
<body>
   
    <section class="signup">
        <div class="content">
            <h2>Welcome to Tranquil Safari</h2>
            <span>Embark on an unforgettable adventure with Tranquil Safari.</span>
            <p>Explore the untamed beauty of nature, encounter majestic creatures, and create lifelong memories. Join us as we journey into the heart of the wild!</p>
        </div>
        <div class="signup_form">
            <form method="post" action="signinnew.php" enctype="multipart/form-data" class="register">
            <fieldset>
                <div class="topic"><h2>Sign Up</h2></div>
                <div class="input_box">
                    <form method="post" action="" enctype="multipart/form-data" class="register">
                        <input type="text" name="fname" placeholder="Enter first name" required>
                        <input type="text" name="lname" placeholder="Enter last name" required>
                        <input type="email" name="email" placeholder="Enter email" required>
                        <input type="tel" name="contactNo" placeholder="Enter Contact number" required>
                        <input type="password" name="password" placeholder="Enter password" required>
                        <input type="password" name="cpassword" placeholder="Re-enter password" required>

                    <div class="account">
                        <input type="checkbox" id="checkbox" class="box">
                        <label for="checkbox">I agree to <a href="Terms.php">Terms & conditions</a></label>
                        <input type="submit" name="submit" value="Sign up" class="btn">

                        <p>Already have an account?<a href="TestLogin1.php"> Login</a></p>

                    </div>       
                </div>
            </fieldset>
            </form>
        </div>
    </section>
</body>


</html>