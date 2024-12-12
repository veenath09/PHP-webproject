<!--Nawarathne M.W.J.S.C.B
    It23223844 -->
<?php 
  session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Image Gallery</title>
  <link rel="stylesheet" href="stylesheets/Gallery.css">
  
</head>

<body>
  <?php require 'header.php' ?>
<div id="content" class="content">

  <h2 class="topic">Image Gallery</h2>
  <div class="gallery">

    <div class="image">
      <img src="images/image1.jpg" alt="Image 1">
    </div>
    <div class="image">
      <img src="images/image2.jpg" alt="Image 2">
    </div>
    <div class="image">
      <img src="images/image3.jpg" alt="Image 3">
    </div>
 
  </div>

  <div class="gallery">

    <div class="image">
      <img src="images/image18.jpg" alt="Image 18">
    </div>
    <div class="image">
      <img src="images/image1.webp" alt="Image 1*">
    </div>
    <div class="image">
      <img src="images/image19.jpg" alt="Image 19">
    </div>

  </div>

  <div class="gallery">
    <div class="image">
      <img src="images/image4.jpg" alt="Image 4">
    </div>
    <div class="image">
      <img src="images/image5.jpg" alt="Image 5">
    </div>
    <div class="image">
      <img src="images/image6.jpg" alt="Image 6">
    </div>
  
  </div>

  <div class="gallery">
    <div class="image">
      <img src="images/image8.jpg" alt="Image 8">
    </div>
    <div class="image">
      <img src="images/image7.jpg" alt="Image 7">
    </div>
    <div class="image">
      <img src="images/image9.jpg" alt="Image 9">
    </div>
   
  </div>
  </div>

  <div class="popup-image">
    <span>&times;</span>
    <img src="" alt="">
  </div>

  <script src="js/Gallery.js"></script>
  <?php require 'footer.php' ?>
</body>

</html>