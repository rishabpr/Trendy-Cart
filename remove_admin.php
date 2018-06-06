<?php
require  'connection.php'; 
	$id=$_GET['del'];
	
$sql =" DELETE from admins WHERE username='$id' ";
if ($conn->query($sql) === TRUE)
	{
    echo "Record Removed successfully";
	}
	else
		{
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>