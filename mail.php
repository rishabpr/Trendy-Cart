<?php
require  'connection.php';

$name=$_POST["name1"];
$mail=$_POST["email"];
$subject=$_POST["subject"];
$msg=$_POST["message"];
$stauts="1";

if($name==""||$mail==""||$subject==""||$msg=="")
{
			echo "<script> ";
            echo " window.alert(\"Incomplete Information\"); document.location.href = \"write_us.php\";";
            echo "</script>";
	

}

else
{	
$sql="INSERT INTO query( name,email, subject, description, status) values ('".$name."','".$mail."','".$subject."','".$msg."','".$stauts."')";
$result = mysqli_query($conn,$sql);
	if($result)
	{ 
			echo "<script> ";
            echo " window.alert(\"Message Sent\"); document.location.href = \"write_us.php\";";
            echo "</script>";
				
	}
}	
$conn->close();

?>