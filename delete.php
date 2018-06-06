<?php
require  'connection.php'; 
	$id=$_GET['del'];
	$id1=$_GET['edit1'];
	$id2=$_GET['edit2'];
$table="";
    if($id1=="upper_wear" && $id2=="men")
	{
		$table="upper_men";
	}
if($id1=="upper_wear" && $id2=="women")
	{
		$table="upper_women";
	}
if($id1=="upper_wear" && $id2=="kids")
	{
		$table="upper_kids";
	}
if($id1=="bottom_wear" && $id2=="men")
	{
		$table="bottom_men";
	}if($id1=="bottom_wear" && $id2=="women")
	{
		$table="bottom_women";
	}if($id1=="bottom_wear" && $id2=="kids")
	{
		$table="bottom_kids";
	}if($id1=="foot_wear" && $id2=="men")
	{
		$table="men_shoes";
	}if($id1=="foot_wear" && $id2=="women")
	{
		$table="women_shoes";
	}if($id1=="foot_wear" && $id2=="kids")
	{
		$table="kids_shoes";
	}	
if($id1=="suits" && $id2=="men")
	{
		$table="suits_men";
	}if($id1=="suits" && $id2=="women")
	{
		$table="suits_women";
	}if($id1=="suits" && $id2=="kids")
	{
		$table="suits_kids";
	}
	$sql =" DELETE FROM  ".$id2;
	$sql.=" WHERE item_no=".$id;
$result=mysqli_query($conn,$sql);    
	$sql =" DELETE FROM ".$table;
	$sql.=" WHERE item_no=".$id;
    	$result=mysqli_query($conn,$sql);

if ($conn->query($sql) === TRUE)
	{
   header('Location:view_item.php?msg=Entry Removed&edit1='.$id1.'&edit2='.$id2);
	}
	else
		{
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
 
?>
<html>
<head>

</head>
<body>

</body>
</html>
