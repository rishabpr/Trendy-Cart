
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
<link rel="stylesheet"  href="add_admin.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
</script>
<script>
jQuery(function(){
    var counter = 1;
    jQuery('button.add-row').click(function(event){
        event.preventDefault();

        var newRow = jQuery('<tr><td><input type="text" name="username' 
		+ counter + '" required/></td><td><input type="password" name="password'
		+counter + '"required/></td><td><input type="number" name="contact' +counter + '"required/></td></tr>');
            counter++;
        jQuery('table.authors-list').append(newRow);

    });
});
 jQuery(function(){
    var counter = 1;
    jQuery('button.remove-row').click(function(event){
        event.preventDefault();
     
		 var x = document.getElementById("authors-list1").rows.length;
		 if(x>2)
		 document.getElementById('authors-list1').deleteRow(x-1);

    });
});
</script>
</head>

<body background='images\admin_bg.jpg'>
<form  id="myform"   action="add_admin1.php?num=" method="post">
<center>
<table  id="authors-list1" class="authors-list" cellpadding="10px">
<th><p id="p1">Username</p></th>
<th><p id="p1">Password</p></th>
<th><p id="p1">Contact Number</p></th>
<tr>
<td><input  id="username" type="text" name="username0" min=1  required></td>
<td><input  id="password" type="password" name="password0" required></td>
<td><input id="c" type="number" name="contact0"  required  ></td>
</tr>
</table>


<table  cellspacing="25px">
<tr colspan="2">
<td>
<center>
<input  type="submit"   value="Submit"></input>
</center>
</td>
<td>
<center>
<button   class="add-row" type="button"   >Add Row</button>
<button   class="remove-row" type="button"   >Remove Row</button>
</center>
</td>
</tr>
<table>
</center>
</form>


<div id="demo1"></div>
</body>


</html>