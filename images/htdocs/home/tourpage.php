<!DOCTYPE html>

<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="tourpacks.css">
        <body>
  <?php
           require 'header2.php';
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
            <button id="filter-toggle" class="search-button">Toggle Filters</button> <!-- Add this line -->
        </div>
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
                <!-- Example tour package cards -->
                <div class="tour-package">
                    <img src="slide-1.jpg" alt="Tour 1">
                    <div class="packageinfo">
                        <h2>Tour Package 1 7day safari to west africe</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <p class="location">location</p>
                        <div class="price"><p>price</p></div>
                        
                    </div>
                </div>
                <div class="tour-package">
                    <img src="tour1.jpg" alt="Tour 1">
                    <div>
                        <h2>Tour Package 2</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
                <!-- Add more tour packages here -->
            </div>
        </div>
    
    <!-- Add your JavaScript code here if needed -->
    <script src="tourpaks.js"> </script>


        
    </body>
</html>