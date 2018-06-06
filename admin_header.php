

<?php
require 'connection.php';
?>
<html>
<head>
<link rel="stylesheet" href="admin_home.css">
<title>Admin</title>
</head>

<body>
 <div id="upper" background='images\pink.jpg'><a href="admin_home.php"><button id="logo">Trendy Cart</button></a></div>
<a href="add_admin.php"><button  id="menu1"  >Add Admin</button></a>
<a href="add_item.php"><button  id="menu2"  >Add Item</button></a>
<a href="view_admin.php"><button  id="menu3" >Edit Admin</button></a>
<a href="logout.php"><button  id="exit" >Logout</button></a>
<a href="view_item.php?edit1=&edit2=men"><button  id="menu4" >Edit Item</button></a>

<a href="message.php"><img  id="message1" src="images\message.png" width="30px" height="30px"></img></a>
<?php

$c=0;
$sql = "SELECT * FROM query WHERE status='1' ";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($result))
{
	$c+=1;
}
echo "<h5 id=\"msg_count\">$c</h5>";
$conn->close();
?>
<div id="demo"></div>
</body>
</html>