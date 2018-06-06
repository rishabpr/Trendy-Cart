
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
<link rel="stylesheet" href="admin.css">
</head>


<body background='images\admin_bg.jpg' style="color:white">
</body>
</html>