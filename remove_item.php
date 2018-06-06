<?php
include('admin_home.php');
?>
<?php
require  'connection.php';
	$id=$_GET['del'];
	
$sql =" DELETE from items WHERE item_no='$id' ";
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




