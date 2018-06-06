<?php
session_start();
if(isset($_SESSION['user']))
{
	include('admin_header.php');
}
else
{
	header('location:admin_login.php');
}

?>
<html>
<head>
<title>Add Item</title>
<link rel="stylesheet"  href="add_admin.css"
</head>

<body background='images\admin_bg.jpg'>
<form action="update_page.php" method="post">
<?php
require  'connection.php'; 
	$id=$_GET['edit'];
	$id1=$_GET['edit1'];
	$id2=$_GET['edit2'];
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

	if($id1=="suits" && $id2=="kids")
	{
		$table="suits_kids";
	}
	if($id1=="suits" && $id2=="women")
	{
		$table="suits_women";
	}
	if($id1=="suits" && $id2=="men")
	{
		$table="suits_men";
	}
	
	$sql =" SELECT  * FROM ".$table;
	$sql.=" WHERE item_no=".$id;

$result = mysqli_query($conn,$sql);
   echo "<center>";
   echo "<table cellspacing=\"10px\">";
   echo "<tr>";
   echo "<th>";
   echo "Item No.";
   echo "</th>";
   echo "<th>";
   echo "Name";
   echo "</th>";
   echo "<th>";
   echo "Type";
   echo "</th>";
   echo "<th>";
   echo "Category";
   echo "</th>";
   echo "<th>";
   echo "Description";
   echo "</th>";
   echo "<th>";
   echo "Price";
   echo "</th>";
   echo "<th>";
   echo "Image";
   echo "</th>";
   echo "</tr>";
while($row=mysqli_fetch_array($result))
    {
	echo "<tr>";
	echo "<td>";
	echo "<input type='number' value=$row[0] name='sr_no' readonly></input><br/>";
	echo "</td>";
	echo "<td>";
	echo "<input type='text' value=$row[1] name='name' required></input><br/>";
	echo "</td>";
	echo "<td>";
    echo "<input type='text' value=$row[2] name='type' readonly></input><br/>";
	echo "</td>";
	echo "<td>";
	echo "<input type='text' value=$row[3] name='category' readonly></input><br/>";
	echo "</td>";
	echo "<td>";
	echo "<input type='text' value=$row[4] name='desc' required></input><br/>";	
	echo "</td>";
	echo "<td>";
	echo "<input type='price' value=$row[5] name='price' required></input><br/>";
	echo "</td>";
	echo "<td>";
	echo "<input type='file' value=$row[6] name='pic' required></input><br/>";
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
<td><a href="view_item.php?edit1=&edit2=men"><input type="button"  value="Cancel"></a></td>
</tr>
</table>
</center>



</form>

</body>


</html>