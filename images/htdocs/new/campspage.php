<!--Nawarathne M.W.J.S.C.B
    It23223844 -->
<?php 
    session_start();
    require 'config.php';
    $sql = "SELECT * FROM tours WHERE tour_type = 'camp'";
    $all_product = $conn->query($sql);
    
    ?>
<!DOCTYPE html>

<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./stylesheets/tourpacks.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <body>
  <?php
           require 'header.php';
            ?>

    </head>

    

        <div class="tourpacks">
            <h1>Tour Packages</h1>
        </div>
           
<div class="container">
        <div class="search-bar">
            <input type="text" class="search-input" placeholder="Search for tour packages...">
            <button class="search-button">Search</button>
            <div class="filterbtn"></div>
            <button id="filter-toggle" class="search-button">Toggle Filters</button> 
        </div>
        <div class="content">
            <div class="filters" id="filters">
                <div class="filter-label">Filters:</div>
                <div class="filter-option">
                    <div>Parks:</div>
                    <label><input type="checkbox"> Park 1</label>
                    <label><input type="checkbox"> Park 2</label>
                    <label><input type="checkbox"> Park 3</label>
                </div>
                <div class="filter-option">
                    <div>Price:</div>
                    <label><input type="checkbox"> Price 1</label>
                    <label><input type="checkbox"> Price 2</label>
                    <label><input type="checkbox"> Price 3</label>
                </div>
            </div>
            <div class="tour-packages">
                <?php
                    while($row = mysqli_fetch_assoc($all_product)){
                ?>
                <div class="tour-package">
                <img src="./images/tourimages/<?php echo $row['image']; ?>" alt="Wildlife Tour">
                    <div class="packageinfo">
                        <h2><a  href="displaytours.php?id=<?php echo $row['tour_ID']; ?>"><?php echo $row['title'];?></a></h2>
                        <p><?php echo $row['description'];?></p>
                        <p class="location">Location :<?php echo $row['location'];?></p>
                        <div class="price"><p>Price   : $<?php echo $row['price']; ?> Per Person</p></div>
                        
                    </div>
                </div>
                <?php
                    }
                     ?>
                
                
            </div>
        </div>


    
    <script src="./js/tourpaks.js"> </script>

    <?php require 'footer.php' ?>
        
    </body>
</html>