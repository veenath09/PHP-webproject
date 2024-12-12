<!--Wanasinghe N.K
    It23221000 -->
<?php 
    require 'config.php';
    ini_set('session.gc_maxlifetime', 5000);
    session_start();

    

    

    if ($_SERVER["REQUEST_METHOD"]== "POST"){
        $id = $_SESSION['C_user_ID'];
        $firstName = $_POST['fname'];
        $lastname = $_POST['lname'];
        $email = $_POST['email'];
        $number = $_POST['contact'];

        $sql = "UPDATE useraccounts SET first_name='$firstName',last_name='$lastname', email='$email', contact='$number' WHERE user_ID = '$id'";

        if (mysqli_query($conn, $sql)) {
            $message[] = 'Registered successfully!';
            header('Location: TestLogin1.php');
            session_destroy();
            exit;
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
    ?>