<?php 
    require 'config.php';
    $sql = "SELECT * FROM product_list1";
    $all_product = $conn->query($sql);
    
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    
    
    <link rel="stylesheet" href="test1.css"> <!-- Link to your CSS file -->
    
</head>

<body>
          <?php 
            require 'header.php';
            ?>

    <div class="home">
        <div class="content">
            <h1>Tranquil Safari</h1>
            <p>Welcome to Tranquil Safaris!<br>
               Your one-stop safari trip planner designed to craft an unforgettable adventure that reconnects you with nature's wonders.</p>
            <button>Get Started</button>
        </div>
    </div>



    <div class=" aboutUs">
      <div class=" box1">
        <h1 >About Us</h1>
      <p >
        Tranquil Safaris is your gateway to an unforgettable African adventure. We are a passionate team of safari enthusiasts dedicated to crafting
              exceptional travel experiences for discerning individuals and groups.  Our user-friendly trip management system allows you to effortlessly 
              plan your dream safari, curating every detail to ensure a seamless and tranquil journey.  We believe that a safari should be more than just
              a sightseeing expedition; it should be a transformative experience that fosters a deep appreciation for the natural world and the incredible
              wildlife that roams it.  Join Tranquil Safaris and embark on an adventure that will leave you breathless.
              </p>
      </div>

    </div>

    <main>
    <div class="tourdisplay">
    <?php
          while($row = mysqli_fetch_assoc($all_product)){
       ?>
      <div class="tour-wrapper">
      <div class="tour-ad">
        <h2>Explore Wildlife in Sri Lanka</h2>
        <img src="slide-1.jpg" alt="Wildlife Tour">
        <p>Join us for an unforgettable 2-day wildlife tour in Sri Lanka. Experience the natural beauty and discover the diverse wildlife of our beautiful country.</p>
        <div class="price">$ <?php echo $row["price"];?></div>
        <a href="#" class="cta-button">Book Now</a>
      </div>
      </div>
     

      <?php 
          }
          ?>
       </div>
  </main>  

      
        
      

  <?php
    require "footer.php" ;
    ?>

 



</body>

</html>
