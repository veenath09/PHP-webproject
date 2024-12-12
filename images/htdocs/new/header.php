<!--wickramaarachchi V.M
    It23230460 -->
<!DOCTYPE html>

<html lang="en">
    <head>
    <meta charset="utf-8">
        <title>Tranquil Safari</title>
        <link rel="icon" href="/images/Tranquil.png" type="image/x-icon">
        
        <meta name="viewport" content="width=device-width , initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://kit.fontawesome.com/6f9617b567.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="./stylesheets/header.css">
        <script src="./js/header.js"></script>
        </head>
        <body>
        <header>
            <div class="logo-container">
                <img src="./images/Tranquil.png" alt="lion logo">
            </div>
            
            <nav class="navbar">
                <button class="toggle-button" id="toggle-button">
                    <i class="fa fa-bars"></i>
                </button>
                <ul id="nav-list">
                   <li class="active"><a href="home.php">Home</a></li>
                   <li class="active"><a href="tourpage.php">Tour Pacakges</a></li>
                   <li class="active"><a href="campspage.php">Safari Camps</a></li>
                   <li class="active"><a href="experiences.php">Experience</a></li>
                   <li class="active"><a href="Gallery.php">Gallery</a></li>
                </ul>
            </nav>
        
            <div class="user-profile" id="user-profile">
            <?php
    
               if(isset($_SESSION['C_user_ID']) && $_SESSION['type']=='user') {

                echo '<a href="user.php"><i class="fa-solid fa-user"></i><br>  User profile</a>';
                 } 
                elseif(isset($_SESSION['C_user_ID']) && $_SESSION['type']=='admin') {

                    echo '<a href="admin.php"><i class="fa-solid fa-user"></i><br>  User profile</a>';
                     } 
                else {
                echo '<a href="TestLogin1.php"><i class="fa-solid fa-user"></i><br>Sign in/Login </a>';
          }
              ?>
            </div>
         </header>
        </body>



</html>