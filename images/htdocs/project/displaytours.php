
<!--wickramaarachchi V.M
    It23230460 -->
<?php
    
    session_start();
    require 'config.php';
    $product_id = $_GET['id'];

    $conn = new mysqli('localhost','root','','tranqilsafari');
    $query = "SELECT * FROM tours WHERE tour_ID = $product_id";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);

    if (isset($_SESSION['C_user_ID'])) {
        $reservationUrl = 'Reservationstest1.php?id=' . $row['tour_ID'] . '&name' . $row['title'];
        $buttonHtml = '<button onclick="window.location=\'' . $reservationUrl . '\'">Book Now</button>';
      } else {
        $reservationUrl = 'TestLogin1.php';
        $buttonHtml = '<button onclick="window.location=\'' . $reservationUrl . '\'">Book Now</button>';
      }
      ?>
      
      <?php echo isset($buttonHtml) ? $buttonHtml : '';
    ?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="./stylesheets/displaytours.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



</head>
<body>
    <?php require 'header.php' ?>
    <div class="tourimage">
    <img class="img1" src="images/tourimages/<?php echo $row['image']?>" alt ="tourimage">
    </div>
   
    <div class="tourpack">
        
    <div class="tourname">
        <h1><?php echo $row['title']?></h1>
        <p><?php echo $row['description'] ?></p>
    </div>
    <div class="checkout">
        
        <h3>price per person</h3>
        <h3>max 10 people per booking</h3>
        <?php echo $buttonHtml; ?>

        

    </div>
    </div>

    <div class="geninformation">
    <div class="tourtable">
        <table>
            <tr>
                <th class="text-center" colspan="3"><i class="fa fa-clock-o" aria-hidden="true"></i>General Tour advices </th>
            </tr>
            <tr>
                <th class="text-center">High Season</th>
                <th class="text-center">Best time to vist</th>
                <th class="text-center">Best  Weather</th>
            </tr>
            <tr>
                <td><i class="fa fa-sun-o" aria-hidden="true"></i> August to October (Best at the riverfront area)</td>
                <td><i class="fa fa-thermometer-full" aria-hidden="true"></i> July to October (The park gets crowded)</td>
                <td><i class="fa fa-thermometer-empty" aria-hidden="true"></i> May to August (Less hot during the day)</td>
            </tr>
            <tr>
                <th colspan="3" class="text-center text-bold"><i class="fa fa-paw" aria-hidden="true"></i> Wildlife in Chobe NP</th>
            </tr>
            <tr>
                <th class="text-bold">Abundant</th>
                <th class="text-bold">Common</th>
                <th class="text-bold">Occasional</th>
            </tr>
            <tr>
                <td><i class="fa fa-paw" aria-hidden="true"></i> Elephant</td>
                <td><i class="fa fa-paw" aria-hidden="true"></i> Zebra</td>
                <td><i class="fa fa-paw" aria-hidden="true"></i> Hyena</td>
            </tr>
            <tr>
                <td><i class="fa fa-paw" aria-hidden="true"></i> Giraffe</td>
                <td><i class="fa fa-paw" aria-hidden="true"></i> Hippo</td>
                <td><i class="fa fa-paw" aria-hidden="true"></i> Leopard</td>
            </tr>
            <tr>
                <td><i class="fa fa-paw" aria-hidden="true"></i> Lion</td>
                <td><i class="fa fa-paw" aria-hidden="true"></i> Buffalo</td>
                <td><i class="fa fa-paw" aria-hidden="true"></i> Wildebeest</td>
            </tr>
            <tr>
                <th colspan="3" class="text-center text-bold"><i class="fa fa-bed" aria-hidden="true"></i> Accommodation</th>
            </tr>
            <tr>
                <td colspan="3"><i class="fa fa-tent" aria-hidden="true"></i> Budget camping > Inside Chobe NP</td>
            </tr>
            <tr>
                <th colspan="3" class="text-center text-bold"><i class="fa fa-cutlery" aria-hidden="true"></i> Meals & Drinks</th>
            </tr>
            <tr>
                <td colspan="3"><i class="fa fa-beer" aria-hidden="true"></i> All meals included > Non-alcoholic drinks</td>
            </tr>
        </table>
    </div>
    

<div class="features"aria-hidden="true">
    <h2>Tour Features</h2>
    <ul>
        <li><i class="fa fa-tent" aria-hidden="true"></i> Budget camping<br><small>This is a budget camping tour.</small></li>
        <li><i class="fa fa-users" aria-hidden="true"></i> Shared tour<br><small>On this shared tour, you will join a group of other travelers. Max 10 people per vehicle.</small></li>
        <li><i class="fa fa-calendar" aria-hidden="true"></i> Can start any day<br><small>If availability permits, this tour can start on any day.</small></li>
        <li><i class="fa fa-cogs" aria-hidden="true"></i> Can be customized<br><small>You can request changes to this tour.</small></li>
        <li><i class="fa fa-user" aria-hidden="true"></i> Suitable for single travelers<br><small>Single travelers can join this group tour.</small></li>
        <li><i class="fa fa-child" aria-hidden="true"></i> Minimum age of 1 year<br><small>The minimum age for this tour is 1 year.</small></li>
    </ul>

    <h3>Activities & Transportation</h3>
    <ul class='activities'>
        <li><i class="fa fa-car" aria-hidden="true"></i> Game drives: open-sided 4x4 vehicle</li>
        <p><i class="fa fa-road" aria-hidden="true"></i> Getting around: open-sided 4x4 vehicle</p>
        <p><i class="fa fa-plane" aria-hidden="true"></i> A transfer from and back to the airport is included</p>
    </ul>

</div>
</div>

<?php require 'footer.php' ?>


</body>
</html>
