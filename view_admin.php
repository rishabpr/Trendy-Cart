<?php

include('admin_header.php');

	
?>

<html>
<head>
<link rel="stylesheet" href="view_admin.css">
</head>

<body id="bg">
<p id="a"></p>
<?php
require  'connection.php';
?>
<center>
<table id="items" cellspacing="25px" >
<tr>
<th>Username</th>
<th>Password</th>
<th>Contact</th>
</tr>

<?php

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql="SELECT * FROM admins";
$result=mysqli_query($conn,$sql);

  
while($row=mysqli_fetch_array($result))
    {
		echo "<tr>";
echo "<td>$row[0]</td>
      <td>$row[1]</td> 
		<td>$row[2]</td>
      <td><a href='edit_admin.php?msg=&edit=$row[0]'>Edit</a></td><br />
      <td><a href='delete_admin.php?del=$row[0]'>Delete</a></td><br />";
     
  echo "</tr>";
  }
  ?>
</table>
</center>
</body>
</html>
