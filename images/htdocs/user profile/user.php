<?php 



?>

<!DOCTYPE html> 
<html lang="en">
     <head> 
        <meta charset="UTF-8"> 
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
        <link rel="stylesheet" href="user.css"> 
        <title>user</title> 
        <script src="user.js"></script>
    </head> 
    <body> 
        <div class="container">
            <div class="left-box">
                <nav>
                    <a href="#" onclick="return false;">Username</a>
                    <a href="#" onclick="return false;"><img src="icon.jpg" width="100%" height=""></a>
                    <a href="#" onclick="tabs(0); return false;" class="tab active">User details</a>
                    <a href="#" onclick="tabs(1); return false;" class="tab">User bookings</a>
                    <a href="#" onclick="tabs(2); return false;" class="tab">Reset password</a>
                </nav>
                
            </div>
            <div class="right-box">
                <div class="profile tabshow">
                <form action="" class="update-user">
                    <h1>User Details</h1>
                    <h2>First Name</h2>
                    <input type="text" class="input" value="Nelushi">
                    <h2>Last Name</h2>
                    <input type="text" class="input" value="wanasinghe">
                    <h2>Email</h2>
                    <input type="email" class="input" value="abc@gmail.com">
                    <h2>Mobile Number</h2>
                    <input type="tel" class="input" value="0712345678">
                    <h2>Location</h2>
                    <textarea type="text" class="input" value="23/1, wertyugh,wrtyvbc"></textarea><br><br>
                    <input  type="button" value="update" class="btn1">
                    </form>
                </div>
                <div class="bookings tabshow">
                    <h1>My bookings</h1>
                    <h3>Booking 01 - Tour Details</h3>
                    <p>
                        <pre>    
                            rtyuighjvbnghrtyufghvbniwertyuiosdfgh
                            jkxcvbndfghjwertyertyusdfghjxcvbndfghje
                            rtyudfghjvbnfghjrtyufghjvbnplmkjuyg
                        </pre>
                    </p>
                    <h3>Booking 02 - Tour Details</h3>
                    <p>
                        <pre>    
                            rtyuighjvbnghrtyufghvbniwertyuiosdfgh
                            jkxcvbndfghjwertyertyusdfghjxcvbndfghje
                            rtyudfghjvbnfghjrtyufghjvbnplmkjuyg
                        </pre>
                    </p>
                </div>
                <div class="password tabshow">
                    <h1>Reset password</h1>
                    <h2>Old password</h2>
                    <input type="password" class="input" value="123">
                    <h2>New password</h2>
                    <input type="password" class="input" value="987" id="newPassword">
                    <h2>Confirm password</h2>
                    <input type="password" class="input" value="987" id="confirmPassword"><br><br>
                    <button class="btn">Update</button>
                </div>
            </div>
        </div>
        
        

    </body>
</html>
