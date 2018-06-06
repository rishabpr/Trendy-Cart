
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="admin_login.css">
<script>
function forgot()
{
	alert('Contact Developers');
}
</script>
</head>
<body background="images\admin_background.jpg">

<center>
<b><h1 id="logo">LOGIN</h1></b>
<form id="login" action="login.php" method="get">
<input  id ="text1" type="text" name="u" placeholder="Username"  ></input>
<input  id="text2" type="password" name="p" placeholder="Password"></input>
<button  id="button1" >Login</button>
<a style="text-decoration:none"href="main_home.php"><input type="button" id="button2" value="Cancel"></input></a>

</form>
<button  id="button3" onclick="forgot()" >Forgot Password</button>

</body>
</html>
