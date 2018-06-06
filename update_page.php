<?php
include('admin_header.php');
require  'connection.php';
	$table="";
	$table1="";

		if($_POST["type"]=='upper_wear')
		{
			if ($_POST["category"]=='men')
				{
					$table="men";
					$table1="upper_men";
				
				}
		
			if ($_POST["category"]=='women')
			{
					$table="women";
					$table1="upper_women";
			}
		
		if ($_POST["category"]=='kids')
			{
					$table="kids";
					$table1="upper_kids";
				
			}
	}
	
	
	
	if($_POST["type"]=='bottom_wear')
		{
		if ($_POST["category"]=='men')
			{
					$table="men";
					$table1="bottom_men";
			}
		
			if ($_POST["category"]=='women')
				{
						$table="women";
					$table1="bottom_women";
				
		
			}
		
			if ($_POST["category"]=='kids')
				{
				$table="kids";
					$table1="bottom_kids";
						
			}
		}
	if($_POST["type"]=='suits')
			{
				if ($_POST["category"]=='men')
				{
						$table="men";
					$table1="suits_men";
				
			}
		
		if ($_POST["category"]=='women')
			{
					$table="women";
					$table1="suits_women";
				
		}
		
		if ($_POST["category"]=='kids')
			{
					$table="kids";
					$table1="suits_kids";
				
			}
	}
	if($_POST["type"]=='foot_wear')
			{
				if ($_POST["category"]=='men')
				{
						$table="men";
					$table1="men_shoes";
				
			
			}
		
		if ($_POST["category"]=='women')
			{
					$table="women";
					$table1="women_shoes";
			
			}
		
		if ($_POST["category"]=='kids')
			{
					$table="kids";
					$table1="kids_shoes";
				
			}
		}

		$sql =" DELETE FROM  ".$table;
		$sql.=" WHERE item_no=".$_POST["sr_no"]; 
		$result1=mysqli_query($conn,$sql);    
		$sql =" DELETE FROM ".$table1;
		$sql.=" WHERE item_no=".$_POST["sr_no"];
		$result2=mysqli_query($conn,$sql);

		$sql = "INSERT INTO " .$table."  VALUES('".$_POST["sr_no"]."','".$_POST["name"]."','".$_POST["type"]."','".$_POST["category"]."','".$_POST["desc"]."','".$_POST["price"]."','".$_POST["pic"]."')";
					$result=$conn->query($sql);
		$sql = "INSERT INTO ".$table1."  VALUES('".$_POST["sr_no" ]."','".$_POST["name" ]."','".$_POST["type" ]."','".$_POST["category" ]."','".$_POST["desc" ]."','".$_POST["price" ]."','".$_POST["pic" ]."')";
		$result4=mysqli_query($conn,$sql);
		
		if ($result === TRUE) 
				{
					echo "<script> ";
					echo " window.alert(\"Entry Updated\"); document.location.href = \"view_item.php?edit1='.$_POST[\"type\"].'&edit2='.$_POST[\"category\"]\";";
					echo "</script>";
		
				}
					else
						{
					
					header('Location:add_item.php?tab='.$_POST["sr_no"].'tab1='.$result4);
					}

$conn->close();

?>