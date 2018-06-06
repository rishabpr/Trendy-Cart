<?php
require  'connection.php';
	$id=$_GET['del'];
	
$sql =" DELETE from admins WHERE username='$id' ";
if ($conn->query($sql) === TRUE)
	{
		     echo "<script> ";
            echo " window.alert(\"Entry Removed\"); document.location.href = \"view_admin.php\";";
            echo "</script>";
   
	}
else
{
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>