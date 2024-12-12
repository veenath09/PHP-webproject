<!--Nawarathne M.W.J.S.C.B
    It23223844 -->

<?php
require 'config.php';

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $date = new  DateTime($_POST['date']);
    $fdate = $date->format('Y-m-d');
    $username = $_POST['text'];
    $comment = $_POST['comment'];

    $sql = "INSERT INTO feedback (date, name, comment) VALUES ('$fdate', '$username', '$comment')";
    if(mysqli_query($conn, $sql)) {
        echo "Feedback submitted successfully!";
        header("location:home.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    echo "Feedback Date: $fdate <br>";
    echo "User Name: $username <br>";
    echo "Comment: $comment";
} else {
    echo "Form submission failed!";
}
?>
