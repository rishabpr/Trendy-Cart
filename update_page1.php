<?php
include('admin_header.php');
require  'connection.php';
$ip=$_POST["username"];
if(strlen($_POST["contact"])==10)
	{
		$sql = "DELETE from admins WHERE username='$ip'";
        $conn->query($sql);
	   $sql = "INSERT INTO admins  VALUES('".$_POST["username".$i]."','".$_POST["password".$i]."','".$_POST["contact".$i]."')";
	   $result=$conn->query($sql);
	if ($result === TRUE)
		{

	   }
	   else
		   {
			   echo "<script> ";
            echo " window.alert(\"Check Credentils\"); document.location.href = \"edit_admin.php\";";
            echo "</script>";
		
 	}
}

else{
	echo "<script> ";
            echo " window.alert(\"Contact no must be equal to 10 digits\"); document.location.href = \"edit_admin.php\";";
            echo "</script>";

      }


if ($result === TRUE) {
 header('Location:view_admin.php?msg=Entry Updated');
}

$conn->close();

?>