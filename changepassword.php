
<?php 
    require 'config.php';
    ini_set('session.gc_maxlifetime', 5000);
    session_start();

    $username = $_SESSION['C_user_ID'];

    $userInfo = "SELECT * FROM useraccounts WHERE user_ID='$username'";
    $result = mysqli_query($conn, $userInfo);
    $row = mysqli_fetch_assoc($result);


if(isset($_POST['setpw'])){
        $id = $_SESSION['C_user_ID'];
        $oldpassword = md5($_POST['oldpw']);
        $password =  md5($_POST['newpw']);
        $cpassword = md5($_POST['cnfrmpw']);

        if($oldpassword == $row['password'] && $password == $cpassword){
            $sql = "UPDATE useraccounts SET password='$password' WHERE user_ID = '$id'";
            if(mysqli_query($conn, $sql)){
                header("location: TestLogin1.php");
                echo "Password updated successfully ";
                session_destroy();
            } else {
                echo "Error updating password: " . mysqli_error($conn);
            }
        } else {
            echo "Old password is incorrect or new passwords do not match";
        }
    }