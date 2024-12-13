
    
<?php session_start(); 
    require 'config.php';
    $book = $_GET['id'];
    $tname = $GET['name'];
    $sql = "SELECT * FROM tours WHERE tour_ID = '$book'";
    $all_product = $conn->query($sql);
    $row = mysqli_fetch_assoc($all_product);
?>
<!DOCTYPE html>
<html>
<head>
  <title>Selected Reservation Page</title>
  <link rel="stylesheet" href="./stylesheets/Reservationtest1.css">
</head>
<body>



  <main>
  <?php

include 'header.php';  

?>
<br><br>
  <form action="process_reservation.php?id=<?php echo $row['tour_ID']; ?>&name=<?php echo $row['title']; ?>" method="post" id="reservation_form">
    <center><h2>Details of the Requested Reservation</h2>
  
    <div class="wrapper">
      <div class="container">
        <h3>Your Details</h3>
        <div class="user-details">
          <p>First Name:</p> 
          <input type="text" name="fname" id="first_name" placeholder="Enter First Name">
          <p>Last Name:</p>
          <input type="text" name="lname" id="last_name" placeholder="Enter Last Name">
          <p>Email Address:</p> 
          <input type="email" name="email" id="email" placeholder="Enter Email Address">
          <p>Phone(optional):</p> 
          <input type="tel" name="phone" id="phone" placeholder="Enter Phone Number (Optional)">
        </div>
      </div>
      
      <div class="container">
        <h3>Reservation details</h3>
        <div class="reservation-details">
          <p>No of people: </p>
          <input type="number" name="num_people" id="num_people" min="1" placeholder="Enter Number of People">
          <p>From: </p>
          <input  name= "from_date" type="date" id="from_date">
          <p>To: </p>
          <input name="to_date" type="date" id="to_date">
          <p>Price per person:<span id="price_per_person"><?php echo $row['price']; ?></span></p>
          <p name="amount">Total Price:<span id="total_price" name="total_price"><?php echo $row['price']; ?></span></p>

          
        </div>
      </div>
    
    
    <p>
      <input type="checkbox" id="agree_terms">  I agree with the General terms by using this service
    </p>
       <a href="paymentui.php"> <button type="submit">Send Booking Request</button></a>
  </center>
    </div>
</form>
  </main>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $("#num_people").on('input', function() {
            var numPeople = $(this).val();
            var pricePerPerson = $("#price_per_person").text();
            var totalPrice = numPeople * pricePerPerson;
            $("#total_price").text(totalPrice);
        });

        $("#submit_button").click(function() {
            $("#reservation_form").submit();
        });
    });
</script>


<?php

include 'footer.php';  

?>

</body>
</html>
