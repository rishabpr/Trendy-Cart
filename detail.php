<?php
include('navbar.php')
?>
<html>
<head>
<link rel="stylesheet" href="detail.css" />

<title>
Home Page
</title>
</head>

<body>

<?php
require  'connection.php'; 
$id=$_GET['id'];
$table=$_GET['table'];
if($table=='')
{
	$sql="SELECT * FROM  items";
$sql.="  where item_no = ".$id;

}
else{
$sql="SELECT * FROM  ".$table;
$sql.="  where item_no = ".$id;
}
$result = mysqli_query($conn,$sql);

$type="";

 while ($row=mysqli_fetch_row($result))
 {
	$type=$row[2];
	if ($type=='footwear')
	{
	 echo "<div id=\"main\" class=\"zoom_img\">";
	 echo "src=images\\$row[6] height=\"400px\" width=\"400\">";
	 echo "</div>";
	 echo "<div id=\"detail\">";
	 echo "<p><b>";
	 echo $row[1];
	 echo "</b></p>";
 	 echo "<p><b>Price</b> : Rs. $row[5]</p>";
	 echo "<p><b>Product code:</b>$row[0]</p>";
	 echo "<b>Tax: </b>Applicable tax on the basis of exact location.<br>";
	 echo "<b><br>Available Size</b><br><br>";
	 echo "<div id=\"sizebtn\">";
	 echo "<button id=\"size6\"><b>6</b></button>";
	 echo "<button id=\"size7\"><b>7</b></button>";
	 echo "<button id=\"size8\"><b>8</b></button>";
	 echo "<button id=\"size9\"><b>9</b></button>";
	 echo "<button id=\"size10\"><b>10</b></button>";
     echo "</div>";
	 echo "</div>";
	 echo "<div id=\"textde\">";
	 echo "<b>Product Details: </b>";
	 echo "<p id=\"det\">";
	 echo $row[4];
	 echo "</p><br>";
echo "<b>Warranty:</b> 6 months against manufacturing defects<br><br>";
	echo "<b>Material & Care :</b>";
	echo "Canvas and synthetic
                            Wipe with a clean, Dry cloth to remove dust
";
echo "</div>";
 }
	
	else
	{
		$type=$row[2];
	
	 echo "<div id=\"main\" class=\"zoom_img\">";
	 echo "<img src=images\\$row[6] height=\"400px\" width=\"400\">";
	 echo "</div>";
	 echo "<div id=\"detail\">";
	 echo "<p><b>";
	 echo $row[1];
	 echo "</b></p>";
 	 echo "<p><b>Price</b> : Rs. $row[5]</p>";
	 echo "<p><b>Product code:</b>$row[0]</p>";
	 echo "<b>Tax: </b>Applicable tax on the basis of exact location.<br>";
	 echo "<b><br>Available Size</b><br><br>";
	 echo "<div id=\"sizebtn\">";
	 echo "<button id=\"size6\"><b>S</b></button>";
	 echo "<button id=\"size7\"><b>M</b></button>";
	 echo "<button id=\"size8\"><b>XL</b></button>";
	 echo "<button id=\"size9\"><b>XXL</b></button>";
	 echo "<button id=\"size10\"><b>XS</b></button>";
     echo "</div>";
	 echo "</div>";
	 echo "<div id=\"textde\">";
	 echo "<b>Product Details: </b>";
	 echo "<p id=\"det\">";
	 echo $row[4];
	 echo "</p><br>";
echo "<b>Warranty:</b> 6 months against manufacturing defects<br><br>";
	echo "<b>Material & Care :</b>";
	echo "Canvas and synthetic
                            Wipe with a clean, Dry cloth to remove dust
";
echo "</div>";
 
	}
	
 }

 ?>


</body>
</html>