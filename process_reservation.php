

<?php
  session_start();
  require 'config.php';
  $book = $_GET['id'];
  $tname = $_GET['name'];
  $numPeople = $_POST['num_people'];

      $sql = "SELECT * FROM tours WHERE tour_ID= '$book'";
      $result = mysqli_query($conn, $sql);

      if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $price = $row['price']; 
      } else {
       
        $price = 0; 
      }

    
      $totalPrice = $price * $numPeople;
     

    if($_SERVER["REQUEST_METHOD"]== "POST") {
        $userid = $_SESSION['C_user_ID'];
        $firstName = $_POST['fname'];
        $lastName = $_POST['lname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $numPeople = $_POST['num_people'];
        $fromDate = new DateTime($_POST['from_date']);
        $toDate = new DateTime($_POST['to_date']);
        $interval = $fromDate->diff($toDate);
        $daterange = $interval->y;
        $fromDatenew = $fromDate->format('Y-m-d');
        $toDatenew = $toDate->format('Y-m-d');
    
        $sql = "INSERT INTO reservations(user_ID, tour_ID, tour_name, first_name, last_name,start_date, end_date, duration, no_of_people, amount, email, phone)
        VALUES ('$userid', '$book', '$tname' , '$firstName', '$lastName','$fromDatenew','$toDatenew' ,'$daterange', '$numPeople', '$totalPrice', '$email', '$phone')";
        if(mysqli_query($conn,$sql)){
          
        };


    }  
        

mysqli_close($conn);



?>
<!--Wanasinghe N.K
    It23221000 -->


<!DOCTYPE html> 
<html lang="en">
     <head> 
        <meta charset="UTF-8"> 
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
        <link rel="stylesheet" href="./stylesheets/payment.css"> 
        <title>payment portal</title> 
        <script src="payment.js"></script>
    </head> 
    <body>
        <div class="container">
            <form action="payment.php" method="post" >
                <div class="row">
                    <div class="column">
                        <h3 class="title">Billing Address</h3>
                        <div class="input-box">
                            <span>Full Name: </span>
                            <input type="text" name="name" placeholder="MS.Nelushi wanasinghe">
                        </div>
                        <div class="input-box">
                            <span>Email: </span>
                            <input type="email" name="email" placeholder="abc@gmail.com">
                        </div>
                        <div class="input-box">
                            <span>Address: </span>
                            <input type="text" name="street" placeholder="street - locality">
                        </div>
                        <div class="input-box">
                            <span>City: </span>
                            <input type="text" name = "city" placeholder="Kandy">
                        </div>
                        <div class="flex">
                            <div class="input-box">
                                <span>State: </span>
                                <input type="text" name= "country" placeholder="Sri Lanka">
                            </div>
                            <div class="input-box">
                                <span>Zip Code: </span>
                                <input type="number" name="zip_code" placeholder="123 456">
                            </div>
                            
                        </div>
                    </div>
                    <div class="column">
                        <h3 class="title">Payment</h3>
                        <div class="input-box">
                            <span>Cards Accepted: </span>
                            <img src="./images/images.png" alt="payment cards" width="80%" height="10%">
                        </div>
                        <div class="input-box">
                            <span>Name On Card: </span>
                            <input type="text" name="name_on_card" placeholder="MS.Nelushi wanasinghe">
                        </div>
                        <div class="input-box">
                            <span>Credit Card Number: </span>
                            <input type="number" name="card_number" placeholder="1111 2222 3333 4444">
                        </div>
                        <div class="input-box">
                            <span>Exp. Month: </span>
                            <input type="text" name="exp_month" placeholder="August">
                        </div>
                        <div class="flex">
                            <div class="input-box">
                                <span>Exp. Year: </span>
                                <input type="number" name="exp_year" placeholder="2027">
                            </div>
                            <div class="input-box">
                                <span>CVV: </span>
                                <input type="number" name="cvv" placeholder="123">
                            </div>
                            
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn">Submit</button>
            </form>
        </div>
        
    
            
    


    </body>
</html>