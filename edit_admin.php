<?php

include('admin_header.php');
	
?>
<html>
<head>
<title>Add Item</title>
<link rel="stylesheet"  href="add_admin.css">
</head>

<body background='images\admin_bg.jpg'>
<form id="myform" action="update_page1.php" method="post">
<?php
require  'connection.php'; 
	$id=$_GET['edit'];
	
$sql ="SELECT * FROM admins WHERE username='$id' ";
$result=mysqli_query($conn,$sql);
	echo "<center>";
   echo "<table cellspacing=\"10px\">";
   echo "<tr>";
   echo "<th>";
   echo "Username";
   echo "</th>";
   echo "<th>";
   echo "Password";
   echo "</th>";
   echo "<th>";
   echo "Contact";
   echo "</th>";
   echo "</tr>";
   
while($row=mysqli_fetch_array($result))
    {
	echo "<tr>";
	echo "<td>";
	echo "<input type='text' value=$row[0] name='username' required></input><br/>";
	echo "</td>";
	echo "<td>";
	echo "<input type='text' value=$row[1] name='password' required></input><br/>";
	echo "</td>";
	echo "<td>";
	echo "<input type='text' value=$row[2] name='contact' required></input><br/>";
	echo "</td>";
	echo "</tr>";
	} 
	echo "</table>";
	echo "</center>";
$conn->close();

?>
<center>
<table>
<tr>
<td><input type="submit"  value="Submit"></td>
<td><a href="admin_home.php"><input type="button"  value="Cancel"></a></td>
</tr>
</table>
</center>


</form>

</body>


</html>