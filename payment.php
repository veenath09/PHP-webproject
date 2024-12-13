
<?php
require "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $name = $_POST["name"];
    $email = $_POST["email"];
    $street = $_POST["street"];
    $city = $_POST["city"];
    $country = $_POST["country"];
    $zipCode = $_POST["zip_code"];
    $nameOnCard = $_POST["name_on_card"];
    $creditCardNumber = $_POST["card_number"];
    $expMonth = $_POST["exp_month"];
    $expYear = $_POST["exp_year"];
    $cvv = $_POST["cvv"];


    $sql = "INSERT INTO payment (full_name, email, street, city, country, zip_code, name_on_card, credit_card_number, exp_month, exp_year, cvv)
            VALUES ('$name', '$email', '$street', '$city', '$country', '$zipCode', '$nameOnCard', '$creditCardNumber', '$expMonth', '$expYear', '$cvv')";

    if ($conn->query($sql)) {
        echo "<header>alert(New record created successfully)<header>";
        header("Location: user.php");

    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>