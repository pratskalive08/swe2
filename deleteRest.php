<?php 
session_start();

$id= $_GET["id"];
$servername = "localhost";
$username = "root";
$password = "";
$dbname ="food_delivery";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
 
    $sql1 = "UPDATE restaurant SET Active=1 WHERE Rest_Id=$id";
    
    if (mysqli_query($conn,$sql1)) {
        echo "Record UPDATED successfully";
      } else {
        echo "Error deleting record: " . mysqli_error($conn);
      }
      header('Location: adminRest.php'); 
?>