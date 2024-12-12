<!--De silva M.M
    It23213258 -->


<?php
require 'config.php';
?>

<?php
if (isset($_POST["submitBtn"]))
{
    $firstName = $_POST["Fname"];
    $lastName = $_POST["Lname"];
    $email = $_POST["email"];
    $mobileNum = $_POST["mobile"];
    $radio = $_POST["who"];
    $cusMessage = $_POST["message"];
    $check = $_POST["privacy"];

    $sql = $sql = "INSERT INTO contact(first_name, last_name, email, mobile, inq_type, message, privacy) VALUES ('$firstName','$lastName','$email','$mobileNum','$radio','$cusMessage','$check')";
    $result = mysqli_query($conn, $sql);
    
    if($result)
    {
        header('Location: contact.php');
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contact Us</title>
<link rel="stylesheet" href="stylesheets/contact.css">
</head>
<body>
<?php require 'header.php' ?>
<div class="container">
    <div class="contact-form">
        <h1>Contact Us</h1>
        <h4>How can we help you?</h4>
        <p>We’re passionate about travel. We see it as an everyday joy to help others plan, discover, and book unforgettable travel experiences. If you’d like to contact a BookAllSafaris organiser directly, then click on the ‘Send Inquiry’ button on their specific listing page.<br><br>
            Our team will respond to you as quickly as possible, normally within 1 business day.
        </p>

        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <label for="name">First Name:</label>
            <input type="text" id="Fname" name="Fname" placeholder="John" required>
            
            <label for="name">Last Name:</label>
            <input type="text" id="Lname" name="Lname" placeholder="Doe" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="johndoe@email.com" required>
            
            <label for="email">Mobile:</label>
            <input type="text" id="mobile" name="mobile" placeholder="+91 987 654 3210" required>

            <div class="radio-group">
                <input type="radio" name="who" value="customer" checked><label> I am a customer</label>
                <input type="radio" name="who" value="partner"><label> I am already a partner</label>
                <input type="radio" name="who" value="bePartner"><label> I would like to be a partner</label>
            </div>

            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea>
            
            <div class="checkbox">
                <input type="checkbox" id="privacy" name="privacy" required>
                <label for="privacy"> I agree to the privacy policy.</label>
            </div>

            <br>
            
            <input type="submit" name="submitBtn" value="Submit">
        </form>
    </div>
    <div class="contact-info">
        <h2>Contact Info</h2>
        <p><strong>Address:</strong> 123 Main Street, Safari City</p>
        <strong>Phone:</strong><a href="tel:+949876543210"> +94 987 654 3210</a><br>
        <br><strong>Email:</strong><a href="mailto:info@safariwebsite.com"> info@safariwebsite.com</a>
    </div>
    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d380511.45173715847!2d-88.06162061819141!3d41.83377337590671!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880e2c3cd0f4cbed%3A0xafe0a6ad09c0c000!2sChicago%2C%20IL%2C%20USA!5e0!3m2!1sen!2slk!4v1714146870465!5m2!1sen!2slk" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    
</div>
<script src="contact.js"></script>

<?php require 'footer.php'; ?>
</body>
</html>