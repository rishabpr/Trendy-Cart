<?php
require  'connection.php';
$user = $_GET["u"];
$pass= $_GET['p'];

$c=0;
$sql = "SELECT * FROM admins WHERE username='".$user."' and password='".$pass."'";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($result))
{
	$c+=1;
}
		if($c>=1)
		{
			session_start();
			$_SESSION['user']=$user;
			echo "<script> ";
			echo " window.alert(\"Login Successful\"); document.location.href = \"admin_home.php\";";
			echo "</script>";
	
	
		}
		else
		{
			echo "<script> ";
			echo " window.alert(\"Invalid Credentials or No Such User Exist\"); document.location.href = \"admin_login.php\";";
			echo "</script>";
		
		
		}	
		$conn->close();


?>