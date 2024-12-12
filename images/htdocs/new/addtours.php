<!--wickramaarachchi V.M
    It23230460 -->
<?php
    if (isset($_POST['upload'])) {
        $tourname = $_POST['tourname'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $location = $_POST['location'];  
        $type = $_POST['type'];
        $filename = $_FILES["image"]["name"];
        $tempname = $_FILES["image"]["tmp_name"];
        $folder = "./images/tourimages/" . $filename;
     
        $db =  new mysqli("localhost","root","","tranqilsafari");
     
        $sql = "INSERT INTO tours(title, description, location, price, image, tour_type) 
        VALUES ('$tourname','$description','$location','$price','$filename', '$type')";
     
        mysqli_query($db, $sql);
     
        if (move_uploaded_file($tempname, $folder)) {
            echo "<h3>  Image uploaded successfully!</h3>";
        } else {
            echo "<h3>  Failed to upload image!</h3>";
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>addtours</title>
        <link rel="stylesheet" href="./stylesheets/addtours.css"
        
    </head>
    <body>
        <?php require 'header.php'; ?>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data">
            <h2>Add Tours/ Camps</h2>
            <label>Tour Name</label>
            <input type="text" class="tourname" id="tourname" name="tourname"><br>
            <label>Description</label>
            <textarea rows="15" cols="65" class="description" id="description" name="description" required></textarea><br>
            <label>Price</label>
            <input type="text" class="price" id="price" name="price" required><br>
            <label>Location</label>
            <input type="text" class="location" id="location" name="location" required><br>
            <label>Type</label>
            <select name="type" id="type" required>
                <option value="">Select...</option>
                <option value="Camp">Camp</option>
                <option value="Safari">Safari</option>
            </select><br>
            <label>Upload Image</label>
            <input type="file" id="image" name="image"><br>
            <input type="submit" value="Submit" name="upload">
        </form>

        <?php require 'footer.php' ?>
    </body>
</html>
