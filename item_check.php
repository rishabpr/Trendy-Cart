<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "trend";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "gee"; 
//$sql="SELECT * FROM upper_men";
//$result=mysqli_query($conn,$sql);
conn->close();
  ?>