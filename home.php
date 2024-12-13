
<?php 
    ini_set('session.gc_maxlifetime', 5000);
    session_start();
    require 'config.php';
    $sql = "SELECT * FROM tours";
    $all_product = $conn->query($sql);
    

    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    
    
    <link rel="stylesheet" href="./stylesheets/home1.css"> 
    
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
            <a href="tourpage.php"><button >Get Started</button></a>
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
      <div class="tourbox">
    <div class="tourdisplay">
    <?php
          $count=0;
          while($row = mysqli_fetch_assoc($all_product)){
            if($count==3){
              break;
            }
       ?>
      <div class="tour-wrapper">
      <div class="tour-ad">
        <h2><?php echo $row["title"];?></h2>
        <img src="./images/tourimages/<?php echo $row['image']; ?>" alt="Wildlife Tour">
        <p> <?php echo $row["description"];?></p>
        <div class="price">$ <?php echo $row["price"];?>(per person)</div>
        <a href="displaytours.php?id=<?php echo $row['tour_ID'] ?>" class="cta-button">Book Now</a>
      </div>
      </div>
     

      <?php 
      $count++;
          }
          ?>
       </div>
       </div>
  </main>  

  

      
        
      

  <?php
    require 'footer.php' ;
    ?>

 



</body>

</html>
