
<?php
include('admin_header.php');
?>
<html>
<head>
<link rel="stylesheet" href="view_message.css">
<style>

</style>
<title>
Contact Us
</title>
</head>

<body>
<h1 id="one">MESSAGES</h1>

<?php
require  'connection.php';

$c=$_GET["id"];
$sql = "SELECT * FROM query WHERE complaint_no=$c ";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($result))
{

echo "<center>";
echo "<input name=\"name1\" id=\"name1\" type=\"text\" value=\"$row[1]\" readonly></input>";
echo "<input  name=\"email\" id=\"email\" type=\"text\" value=\"$row[2]\" readonly></input>";
echo "<input name=\"subject\"  id=\"subject\" type=\"text\" value=\"$row[3]\" readonly></input>";
echo "<textarea name=\"message\" id=\"message\" rows=\"7\" cols=\"70\"   readonly>$row[4]</textarea>";
echo "</center>";	
}
$conn->close();


?>



</body>
</html>