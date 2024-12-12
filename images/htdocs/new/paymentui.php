<?php
    session_start();
?>
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