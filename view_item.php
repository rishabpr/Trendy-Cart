<?php

include('admin_header.php');
?>
<html>
<head>

<link rel="stylesheet" href="view_item.css">
</head>
<body>

<?php
require 'connection.php';
	
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
if($id1=="" && $id2=="men")
	{
		$table="men";
	}if($id1=="" && $id2=="women")
	{
		$table="women";
	}if($id1=="" && $id2=="kids")
	{
		$table="kids";
	}
?>
<div id="select_menu">
<form method="get">
<!--all-->
<a href="view_item.php?msg=& edit1=&edit2=men" ><input id="men1" type="button" value="Men"></input></a> 
<a href="view_item.php?msg=& edit1=&edit2=women" ><input id="men2" type="button" value="Women"></input></a> 
<a href="view_item.php?msg=& edit1=&edit2=kids" ><input id="men3" type="button" value="Kids"></input></a> 
<!--upper wear-->
<a href="view_item.php?msg=&edit1=upper_wear&edit2=men" ><input id="men4" type="button" value="TopWear Men"></input></a> 
<a href="view_item.php?msg=&edit1=bottom_wear&edit2=men" ><input id="men5" type="button" value="Bottom Wear Men"></input></a> 
<a href="view_item.php?msg=&edit1=upper_wear&edit2=women" ><input id="men6" type="button" value="TopWear Women"></input></a>
<!--botom wear-->
 <a href="view_item.php?msg=&edit1=bottom_wear&edit2=women" ><input id="men7" type="button" value="Bottom Wear Women"></input></a> 
<a href="view_item.php?msg=&edit1=upper_wear&edit2=kids" ><input id="men8" type="button" value="TopWear Kids"></input></a> 
<a href="view_item.php?msg=&edit1=bottom_wear&edit2=kids" ><input id="men9" type="button" value="Bottom Wear Kids"></input></a> 
<!--foot wear-->
<a href="view_item.php?msg=&edit1=foot_wear&edit2=kids" ><input id="men10" type="button" value="Footwear Kids"></input></a> 
<a href="view_item.php?msg=&edit1=foot_wear&edit2=men" ><input id="men11" type="button" value="Footwear Men"></input></a> 
<a href="view_item.php?msg=&edit1=foot_wear&edit2=women" ><input id="men12" type="button" value="Footwear Women"></input></a> 
<!--suits-->
<a href="view_item.php?msg=&edit1=suits&edit2=men" ><input id="men13" type="button" value="Suits men"></input></a> 
<a href="view_item.php?msg=&edit1=suits&edit2=women" ><input  id="men14" type="button" value="Suits Women"></input></a> 
<a href="view_item.php?msg=&edit1=suits&edit2=kids" ><input id="men15" type="button" value="Suits Kids"></input></a> 
</form>
</div>
<center>
<table id="items" cellspacing="25px"  >
<tr>
<th>Item No.</th>
<th>Name</th>
<th>Type</th>
<th>Category</th>
<th>Description</th>
<th>Price</th>
<th>Image</th>
</tr>
<?php
//echo $GET["tab"];
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 
$sql="SELECT * FROM ".$table;

$result=mysqli_query($conn,$sql);
 
  
while($row=mysqli_fetch_array($result))
    {
	echo "<center>";	
	echo "<tr>";	
echo "<td>$row[0]</td>
      <td>$row[1]</td> 
	  <td>$row[2]</td>
      <td>$row[3]</td>
	  <td>$row[4]</td>
      <td>$row[5]</td>
	  <td><img src=images\\$row[6] height=\"50px\" width=\"50px\"></td>
	  <td><a href='Edit_item.php?edit=$row[0]&edit1=$row[2]&edit2=$row[3]'>Edit</a></td><br>
      <td><a href='delete.php?&del=$row[0]&edit1=$row[2]&edit2=$row[3]'>Delete</a></td><br>";
	  echo "</center>";
 echo "</tr>";
  }
  ?>
</table>
</center>
</body>
</html>
