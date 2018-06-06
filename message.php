
<html>
<head>
<link rel="stylesheet" href="message.css">

</head>
</html>
<?php

require  'connection.php';

$c=0;
$sql1 = "SELECT * FROM query  ";
$result1=mysqli_query($conn,$sql1);

$sql = "update query set  status='0' ";
$result=mysqli_query($conn,$sql);
include("admin_header.php");
echo "<table cellspacing=\"30px\">";
while($row=mysqli_fetch_array($result1))
{
echo "<tr>";

if ($row[5]==1)
{
	echo "<td >$row[0]*</td>";
}
else
{
echo "<td >$row[0]</td>";
	
}

echo "<td>";
echo "$row[1]";
echo "</td>";

echo "<td>";
echo "$row[2]";
echo "</td>";
echo "<td>";
echo "$row[3]";
echo "</td>";

if ($row[5]==1)
{
	echo "<td ><a  id=\"stat\" href=\"view_message.php?id=$row[0]\">Read</a></td>";
}
else
{
echo "<td ><a id=\"stat1\" href=\"view_message.php?id=$row[0]\">Read</a></td>";
	
}

	echo "</tr>";
}
	echo "</table>";
//$conn->close();


?>
	