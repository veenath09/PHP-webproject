<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Page</title>
  <link rel="stylesheet" href="testadmincss.css">
</head>
<body>
  <main>
  
    <center>
    <div class="wrapper">
      <div class="wrap1">
        <div class="adminlogincontainer">
          <img src="logo.png" alt="Logo" class="logo">
          <h1>Admin Details</h1>
          <form action="#">
            <div class="form-group">
              <label for="username">Username </label>
              <p><span id="username"><?php echo $username; ?></span></p>
            </div>
            <div class="form-group">
              <label for="email">Email </label>
              <p><span id="email"><?php echo $email; ?></span></p>
            </div>
            <div class="form-group">
              <button type="submit">Log Out</button>
            </div>
          </form>
        </div>
      </div>
      <div class="wrap2"> 
        
        <br><br>
        <div class="acountactivationcontainer">
          <section class="account-activation">
            <h2>Staff Account Management</h2>
            <div class="actions">
              <button type="submit">Activate</button>
              <br><br>
              <input type="text" id="enterUsername" name="enterUsername" placeholder="Enter Username">
              <br><br>
              <button type="submit">Deactivate</button>
            </div>
          </section>
        </div>
      </div>  
      
    </div>
    
    
    <div class="reservationcontainer">
      <section class="reservation-requests">
        <h2>Reservation</h2>
        
          <table>
            <thead>
              <tr>
                <th>Username</th>
                <th>Request</th>
              </tr>
            </thead>
            <tbody>
            <?php

// Database connection details (replace with your actual credentials)
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database_name";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// SQL query to fetch reservations
$sql = "SELECT username, request FROM reservations";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // Output data of each row
  while ($row = $result->fetch_assoc()) {
    echo "<tr>";
      echo "<td>" . $row["username"] . "</td>";
      echo "<td>" . $row["request"] . "</td>";
    echo "</tr>";
  }
} else {
  echo "<tr><td colspan='2'>No reservations found.</td></tr>";
}

$conn->close();

?>
            </tbody>
          </table>
        
      </section>
    
    </div>
  </center>
 
  </main>
</body>
</html>
