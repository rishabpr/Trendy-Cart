<?php
include('navbar.php')
?>
<html>
<head>
<link rel="stylesheet" href="shoedetail.css" />

<title>
Home Page
</title>
</head>

<body>

<?php
require  'connection.php';
$id=$_GET['id'];
$table=$_GET['table'];
$sql="SELECT * FROM  ".$table;
$sql.="  where item_no = ".$id;

$result = mysqli_query($conn,$sql);


 while ($row=mysqli_fetch_row($result))
 {
	 echo "<div style=\"position:absolute;top:400px;\">";
	echo "<b>$row[0]<b>"; 
	echo "<div>";
 }
 ?>



</body>
</html>