
<?php
require  'connection.php'; 
$s=0;

$s=count($_POST);

for($i=0;$i<$s;$i++)
	{
		if($_POST["type".+$i]=='upper_wear')
		{
			if ($_POST["category".+$i]=='men')
				{
					$sql = "INSERT INTO men  VALUES('".$_POST["sr_no".+$i]."','".$_POST["name".+$i]."','".$_POST["type".+$i]."','".$_POST["category".+$i]."','".$_POST["desc".+$i]."','".$_POST["price".+$i]."','".$_POST["pic".+$i]."')";
				$result=$conn->query($sql);
			  
			
				$sql = "INSERT INTO upper_men  VALUES('".$_POST["sr_no".+$i]."','".$_POST["name".+$i]."','".$_POST["type".+$i]."','".$_POST["category".+$i]."','".$_POST["desc".+$i]."','".$_POST["price".+$i]."','".$_POST["pic".+$i]."')";
				$result1=$conn->query($sql);
				if ($result == TRUE &&$result2 == TRUE && $result1==True) 
					{
					}
				else
				{
						echo "<script> ";
						echo " window.alert(\"ID Already Exist\"); document.location.href = \"add_item.php\";";
						echo "</script>";
		
					
				}
				}
		
			if ($_POST["category".+$i]=='women')
			{
					$sql = "INSERT INTO women  VALUES('".$_POST["sr_no".+$i]."','".$_POST["name".+$i]."','".$_POST["type".+$i]."','".$_POST["category".+$i]."','".$_POST["desc".+$i]."','".$_POST["price".+$i]."','".$_POST["pic".+$i]."')";
				$result=$conn->query($sql);
	
				$sql = "INSERT INTO upper_women VALUES('".$_POST["sr_no".+$i]."','".$_POST["name".+$i]."','".$_POST["type".+$i]."','".$_POST["category".+$i]."','".$_POST["desc".+$i]."','".$_POST["price".+$i]."','".$_POST["pic".+$i]."')";
				$result1=$conn->query($sql);
				
				if ($result === TRUE && $result1==True ) 
					{
					}
				else
				{
							
					echo "<script> ";
						echo " window.alert(\"ID Already Exist\"); document.location.href = \"add_item.php\";";
						echo "</script>";
		
				}
			}
		
		if ($_POST["category".+$i]=='kids_girl')
			{
					$sql = "INSERT INTO kids  VALUES('".$_POST["sr_no".+$i]."','".$_POST["name".+$i]."','".$_POST["type".+$i]."','".$_POST["category".+$i]."','".$_POST["desc".+$i]."','".$_POST["price".+$i]."','".$_POST["pic".+$i]."','girls')";
				$result=$conn->query($sql);
	
				$sql = "INSERT INTO upper_kids  VALUES('".$_POST["sr_no".+$i]."','".$_POST["name".+$i]."','".$_POST["type".+$i]."','".$_POST["category".+$i]."','".$_POST["desc".+$i]."','".$_POST["price".+$i]."','".$_POST["pic".+$i]."','girls')";
				$result1=$conn->query($sql);
				$sql = "INSERT INTO items  VALUES('".$_POST["sr_no".+$i]."','".$_POST["name".+$i]."','".$_POST["type".+$i]."','".$_POST["category".+$i]."','".$_POST["desc".+$i]."','".$_POST["price".+$i]."','".$_POST["pic".+$i]."','girls')";
				$result2=$conn->query($sql);
						
			if ($result === TRUE && $result1==True ) 
					{
					}
				else
				{
							
		echo "<script> ";
						echo " window.alert(\"ID Already Exist\"); document.location.href = \"add_item.php\";";
						echo "</script>";
		
				}
			}
			
			if ($_POST["category".+$i]=='kids_boy')
			{
					$sql = "INSERT INTO kids  VALUES('".$_POST["sr_no".+$i]."','".$_POST["name".+$i]."','".$_POST["type".+$i]."','".$_POST["category".+$i]."','".$_POST["desc".+$i]."','".$_POST["price".+$i]."','".$_POST["pic".+$i]."','boys')";
				$result=$conn->query($sql);
	
				$sql = "INSERT INTO upper_kids  VALUES('".$_POST["sr_no".+$i]."','".$_POST["name".+$i]."','".$_POST["type".+$i]."','".$_POST["category".+$i]."','".$_POST["desc".+$i]."','".$_POST["price".+$i]."','".$_POST["pic".+$i]."','boys')";
				$result1=$conn->query($sql);
$sql = "INSERT INTO items  VALUES('".$_POST["sr_no".+$i]."','".$_POST["name".+$i]."','".$_POST["type".+$i]."','".$_POST["category".+$i]."','".$_POST["desc".+$i]."','".$_POST["price".+$i]."','".$_POST["pic".+$i]."','boys')";
				$result2=$conn->query($sql);
						
			if ($result === TRUE && $result1==True ) 
					{
					}
				else
				{
							
						echo "<script> ";
						echo " window.alert(\"ID Already Exist\"); document.location.href = \"add_item.php\";";
						echo "</script>";
		
				}
			}
	}
	
	
	
	
	if($_POST["type".+$i]=='bottom_wear')
		{
		if ($_POST["category".+$i]=='men')
			{
		$sql = "INSERT INTO men  VALUES('".$_POST["sr_no".+$i]."','".$_POST["name".+$i]."','".$_POST["type".+$i]."','".$_POST["category".+$i]."','".$_POST["desc".+$i]."','".$_POST["price".+$i]."','".$_POST["pic".+$i]."')";
				$result=$conn->query($sql);
	
				$sql = "INSERT INTO bottom_men  VALUES('".$_POST["sr_no".+$i]."','".$_POST["name".+$i]."','".$_POST["type".+$i]."','".$_POST["category".+$i]."','".$_POST["desc".+$i]."','".$_POST["price".+$i]."','".$_POST["pic".+$i]."')";
				$result1=$conn->query($sql);
			
			if ($result === TRUE && $result1==True ) 
					{
					}
				else
				{
							
					echo "<script> ";
						echo " window.alert(\"ID Already Exist\"); document.location.href = \"add_item.php\";";
						echo "</script>";
		
				}
			}
		
			if ($_POST["category".+$i]=='women')
				{
			$sql = "INSERT INTO women  VALUES('".$_POST["sr_no".+$i]."','".$_POST["name".+$i]."','".$_POST["type".+$i]."','".$_POST["category".+$i]."','".$_POST["desc".+$i]."','".$_POST["price".+$i]."','".$_POST["pic".+$i]."')";
				$result=$conn->query($sql);
	
				$sql = "INSERT INTO bottom_women VALUES('".$_POST["sr_no".+$i]."','".$_POST["name".+$i]."','".$_POST["type".+$i]."','".$_POST["category".+$i]."','".$_POST["desc".+$i]."','".$_POST["price".+$i]."','".$_POST["pic".+$i]."')";
				$result1=$conn->query($sql);
				
			if ($result === TRUE && $result1==True ) 
					{
					}
				else
				{
							
						echo "<script> ";
						echo " window.alert(\"ID Already Exist\"); document.location.href = \"add_item.php\";";
						echo "</script>";
		
				}
			}
		
			if ($_POST["category".+$i]=='kids_girl')
				{
						$sql = "INSERT INTO kids  VALUES('".$_POST["sr_no".+$i]."','".$_POST["name".+$i]."','".$_POST["type".+$i]."','".$_POST["category".+$i]."','".$_POST["desc".+$i]."','".$_POST["price".+$i]."','".$_POST["pic".+$i]."','girls')";
				$result=$conn->query($sql);
	
				$sql = "INSERT INTO bottom_kids  VALUES('".$_POST["sr_no".+$i]."','".$_POST["name".+$i]."','".$_POST["type".+$i]."','".$_POST["category".+$i]."','".$_POST["desc".+$i]."','".$_POST["price".+$i]."','".$_POST["pic".+$i]."','girls')";
				$result1=$conn->query($sql);
	$sql = "INSERT INTO items  VALUES('".$_POST["sr_no".+$i]."','".$_POST["name".+$i]."','".$_POST["type".+$i]."','".$_POST["category".+$i]."','".$_POST["desc".+$i]."','".$_POST["price".+$i]."','".$_POST["pic".+$i]."','girls')";
				$result2=$conn->query($sql);
						
			if ($result === TRUE && $result1==True ) 
					{
					}
				else
				{
							
						echo "<script> ";
						echo " window.alert(\"ID Already Exist\"); document.location.href = \"add_item.php\";";
						echo "</script>";
		
				}
			}
			if ($_POST["category".+$i]=='kids_boy')
				{
						$sql = "INSERT INTO kids  VALUES('".$_POST["sr_no".+$i]."','".$_POST["name".+$i]."','".$_POST["type".+$i]."','".$_POST["category".+$i]."','".$_POST["desc".+$i]."','".$_POST["price".+$i]."','".$_POST["pic".+$i]."','boys')";
				$result=$conn->query($sql);
	
				$sql = "INSERT INTO bottom_kids  VALUES('".$_POST["sr_no".+$i]."','".$_POST["name".+$i]."','".$_POST["type".+$i]."','".$_POST["category".+$i]."','".$_POST["desc".+$i]."','".$_POST["price".+$i]."','".$_POST["pic".+$i]."','boys')";
				$result1=$conn->query($sql);
	$sql = "INSERT INTO items  VALUES('".$_POST["sr_no".+$i]."','".$_POST["name".+$i]."','".$_POST["type".+$i]."','".$_POST["category".+$i]."','".$_POST["desc".+$i]."','".$_POST["price".+$i]."','".$_POST["pic".+$i]."','boys')";
				$result2=$conn->query($sql);
						
			if ($result === TRUE && $result1==True ) 
					{
					}
				else
				{
							
						echo "<script> ";
						echo " window.alert(\"ID Already Exist\"); document.location.href = \"add_item.php\";";
						echo "</script>";
		
				}
			}
		}
	if($_POST["type".+$i]=='suits')
			{
				if ($_POST["category".+$i]=='men')
				{
									$sql = "INSERT INTO men  VALUES('".$_POST["sr_no".+$i]."','".$_POST["name".+$i]."','".$_POST["type".+$i]."','".$_POST["category".+$i]."','".$_POST["desc".+$i]."','".$_POST["price".+$i]."','".$_POST["pic".+$i]."')";
				$result=$conn->query($sql);
	
				$sql = "INSERT INTO suits_men  VALUES('".$_POST["sr_no".+$i]."','".$_POST["name".+$i]."','".$_POST["type".+$i]."','".$_POST["category".+$i]."','".$_POST["desc".+$i]."','".$_POST["price".+$i]."','".$_POST["pic".+$i]."')";
				$result1=$conn->query($sql);
			
			if ($result === TRUE && $result1==True ) 
					{
					}
				else
				{
							
					echo "<script> ";
						echo " window.alert(\"ID Already Exist\"); document.location.href = \"add_item.php\";";
						echo "</script>";
		
				}
				}
		
		if ($_POST["category".+$i]=='women')
			{
								$sql = "INSERT INTO women  VALUES('".$_POST["sr_no".+$i]."','".$_POST["name".+$i]."','".$_POST["type".+$i]."','".$_POST["category".+$i]."','".$_POST["desc".+$i]."','".$_POST["price".+$i]."','".$_POST["pic".+$i]."')";
				$result=$conn->query($sql);
	
				$sql = "INSERT INTO suits_women VALUES('".$_POST["sr_no".+$i]."','".$_POST["name".+$i]."','".$_POST["type".+$i]."','".$_POST["category".+$i]."','".$_POST["desc".+$i]."','".$_POST["price".+$i]."','".$_POST["pic".+$i]."')";
				$result1=$conn->query($sql);
				
			if ($result === TRUE && $result1==True ) 
					{
					}
				else
				{
							
						echo "<script> ";
						echo " window.alert(\"ID Already Exist\"); document.location.href = \"add_item.php\";";
						echo "</script>";
		
				}
		}
		
		if ($_POST["category".+$i]=='kids_girl')
			{
								$sql = "INSERT INTO kids  VALUES('".$_POST["sr_no".+$i]."','".$_POST["name".+$i]."','".$_POST["type".+$i]."','".$_POST["category".+$i]."','".$_POST["desc".+$i]."','".$_POST["price".+$i]."','".$_POST["pic".+$i]."','girls')";
				$result=$conn->query($sql);
	
				$sql = "INSERT INTO suits_kids  VALUES('".$_POST["sr_no".+$i]."','".$_POST["name".+$i]."','".$_POST["type".+$i]."','".$_POST["category".+$i]."','".$_POST["desc".+$i]."','".$_POST["price".+$i]."','".$_POST["pic".+$i]."','girls')";
				$result1=$conn->query($sql);
	$sql = "INSERT INTO items  VALUES('".$_POST["sr_no".+$i]."','".$_POST["name".+$i]."','".$_POST["type".+$i]."','".$_POST["category".+$i]."','".$_POST["desc".+$i]."','".$_POST["price".+$i]."','".$_POST["pic".+$i]."','girls')";
				$result2=$conn->query($sql);
						
			if ($result === TRUE && $result1==True ) 
					{
					}
				else
				{
							
					echo "<script> ";
						echo " window.alert(\"ID Already Exist\"); document.location.href = \"add_item.php\";";
						echo "</script>";
		
				}
			}
			if ($_POST["category".+$i]=='kids_boy')
			{
								$sql = "INSERT INTO kids  VALUES('".$_POST["sr_no".+$i]."','".$_POST["name".+$i]."','".$_POST["type".+$i]."','".$_POST["category".+$i]."','".$_POST["desc".+$i]."','".$_POST["price".+$i]."','".$_POST["pic".+$i]."','boys')";
				$result=$conn->query($sql);
	
				$sql = "INSERT INTO suits_kids  VALUES('".$_POST["sr_no".+$i]."','".$_POST["name".+$i]."','".$_POST["type".+$i]."','".$_POST["category".+$i]."','".$_POST["desc".+$i]."','".$_POST["price".+$i]."','".$_POST["pic".+$i]."','boys')";
				$result1=$conn->query($sql);
	$sql = "INSERT INTO items  VALUES('".$_POST["sr_no".+$i]."','".$_POST["name".+$i]."','".$_POST["type".+$i]."','".$_POST["category".+$i]."','".$_POST["desc".+$i]."','".$_POST["price".+$i]."','".$_POST["pic".+$i]."','boys')";
				$result2=$conn->query($sql);
						
			if ($result === TRUE && $result1==True ) 
					{
					}
				else
				{
							
						echo "<script> ";
						echo " window.alert(\"ID Already Exist\"); document.location.href = \"add_item.php\";";
						echo "</script>";
		
				}
			}
	}
	if($_POST["type".+$i]=='foot_wear')
			{
				if ($_POST["category".+$i]=='men')
				{
									$sql = "INSERT INTO men  VALUES('".$_POST["sr_no".+$i]."','".$_POST["name".+$i]."','".$_POST["type".+$i]."','".$_POST["category".+$i]."','".$_POST["desc".+$i]."','".$_POST["price".+$i]."','".$_POST["pic".+$i]."')";
				$result=$conn->query($sql);
	
				$sql = "INSERT INTO men_shoes  VALUES('".$_POST["sr_no".+$i]."','".$_POST["name".+$i]."','".$_POST["type".+$i]."','".$_POST["category".+$i]."','".$_POST["desc".+$i]."','".$_POST["price".+$i]."','".$_POST["pic".+$i]."')";
				$result1=$conn->query($sql);
				
			if ($result === TRUE && $result1==True ) 
					{
					}
				else
				{
							
					echo "<script> ";
						echo " window.alert(\"ID Already Exist\"); document.location.href = \"add_item.php\";";
						echo "</script>";
		
				}
			}
		
		if ($_POST["category".+$i]=='women')
			{
								$sql = "INSERT INTO women  VALUES('".$_POST["sr_no".+$i]."','".$_POST["name".+$i]."','".$_POST["type".+$i]."','".$_POST["category".+$i]."','".$_POST["desc".+$i]."','".$_POST["price".+$i]."','".$_POST["pic".+$i]."')";
				$result=$conn->query($sql);
	
				$sql = "INSERT INTO women_shoes VALUES('".$_POST["sr_no".+$i]."','".$_POST["name".+$i]."','".$_POST["type".+$i]."','".$_POST["category".+$i]."','".$_POST["desc".+$i]."','".$_POST["price".+$i]."','".$_POST["pic".+$i]."')";
				$result1=$conn->query($sql);
			
			if ($result === TRUE && $result1==True ) 
					{
					}
				else
				{
							
					echo "<script> ";
						echo " window.alert(\"ID Already Exist\"); document.location.href = \"add_item.php\";";
						echo "</script>";
		
				}}
		
		if ($_POST["category".+$i]=='kids_girl')
			{
				$sql = "INSERT INTO kids  VALUES('".$_POST["sr_no".+$i]."','".$_POST["name".+$i]."','".$_POST["type".+$i]."','".$_POST["category".+$i]."','".$_POST["desc".+$i]."','".$_POST["price".+$i]."','".$_POST["pic".+$i]."','girls')";
				$result=$conn->query($sql);
	
				$sql = "INSERT INTO kids_shoes  VALUES('".$_POST["sr_no".+$i]."','".$_POST["name".+$i]."','".$_POST["type".+$i]."','".$_POST["category".+$i]."','".$_POST["desc".+$i]."','".$_POST["price".+$i]."','".$_POST["pic".+$i]."','girls')";
				$result1=$conn->query($sql);
	$sql = "INSERT INTO items  VALUES('".$_POST["sr_no".+$i]."','".$_POST["name".+$i]."','".$_POST["type".+$i]."','".$_POST["category".+$i]."','".$_POST["desc".+$i]."','".$_POST["price".+$i]."','".$_POST["pic".+$i]."','girls')";
				$result2=$conn->query($sql);
						
			if ($result === TRUE && $result1==True ) 
					{
					}
				else
				{
							
					echo "<script> ";
						echo " window.alert(\"ID Already Exist\"); document.location.href = \"add_item.php\";";
						echo "</script>";
		
				}
			}
			if ($_POST["category".+$i]=='kids_boy')
			{
				$sql = "INSERT INTO kids  VALUES('".$_POST["sr_no".+$i]."','".$_POST["name".+$i]."','".$_POST["type".+$i]."','".$_POST["category".+$i]."','".$_POST["desc".+$i]."','".$_POST["price".+$i]."','".$_POST["pic".+$i]."','boys')";
				$result=$conn->query($sql);
	
				$sql = "INSERT INTO kids_shoes  VALUES('".$_POST["sr_no".+$i]."','".$_POST["name".+$i]."','".$_POST["type".+$i]."','".$_POST["category".+$i]."','".$_POST["desc".+$i]."','".$_POST["price".+$i]."','".$_POST["pic".+$i]."','boys')";
				$result1=$conn->query($sql);
	$sql = "INSERT INTO items  VALUES('".$_POST["sr_no".+$i]."','".$_POST["name".+$i]."','".$_POST["type".+$i]."','".$_POST["category".+$i]."','".$_POST["desc".+$i]."','".$_POST["price".+$i]."','".$_POST["pic".+$i]."','boys')";
				$result2=$conn->query($sql);
						
			if ($result === TRUE && $result1==True ) 
					{
					}
				else
				{
							
					echo "<script> ";
						echo " window.alert(\"ID Already Exist\"); document.location.href = \"add_item.php\";";
						echo "</script>";
		
				}
			}
		}
	}
if ($result=== TRUE && $result1==TRUE)
	{
						echo "<script> ";
						echo " window.alert(\"Entry Added\"); document.location.href = \"add_item.php\";";
						echo "</script>";
		
}
$conn->close();

?>