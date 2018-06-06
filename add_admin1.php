
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
require  'connection.php'; 
$n=count($_POST);
if($n>6)
{
	$count=($n/3)+1;
}
else{
	$count=$n/3;
}

for($i=0;$i<$count;$i++)
{
	if(strlen($_POST["contact".$i])==10)
	{
	$sql = "INSERT INTO admins  VALUES('".$_POST["username".$i]."','".$_POST["password".$i]."','".$_POST["contact".$i]."')";
	$result=$conn->query($sql);
	if ($result === TRUE)
		{

	   }
	   else
		   {
			    echo "<script> ";
				echo " window.alert(\"Entry Already Exist\"); document.location.href = \"add_admin.php\";";
				echo "</script>";
		
		}
	}

			else{
					echo "<script> ";
					echo " window.alert(\"Contact no must be equal to 10 digits\"); document.location.href = \"add_admin.php\";";
					echo "</script>";
		
				}
			}

		if ($result === TRUE) {
							echo "<script> ";
							echo " window.alert(\"Entry Added\"); document.location.href = \"add_admin.php\";";
							echo "</script>";
	}
	

	$conn->close();

?>