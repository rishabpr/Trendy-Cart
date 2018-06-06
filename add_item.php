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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
</script>
<script>
jQuery(function(){
    var counter = 1;
    jQuery('button.add-row').click(function(event){
        event.preventDefault();

        var newRow = jQuery('<tr><td><input type="number" name="sr_no' 
		+ counter + '" required/></td><td><input type="text" name="name'
		+counter + '"required/></td><td><select name="type'
		+counter + '"required><option value="upper_wear">Upper Wears</option><option value="bottom_wear">Bottom Wears</option> <option value="suits">Suits</option><option value="foot_wear">Footwear</option></select>  </td><td> <select name="category' 
		+ counter + '" required> <option value="men">Men</option> <option value="women">Women</option> <option value="kids_boy">Kids(boy)</option><option value="kids_girls">Kids(girl)</option></select></td><td><input type="text" name="desc' 
		+ counter + '" required/></td><td><input type="number" name="price' 
		+ counter + '" required/></td><td><input type="file" name="pic' 
		+ counter + '" required/></td></tr>');
            counter++;
        jQuery('table.item-list').append(newRow);

    });
});



   jQuery(function(){
    var counter = 1;
    jQuery('button.remove-row').click(function(event){
        event.preventDefault();
     
		 var x = document.getElementById("item_form").rows.length;
		if(x>2)
		{
		document.getElementById('item_form').deleteRow(x-1);
		}
    });
});
</script>
<title>Add Item</title>
<link rel="stylesheet" href="add_item.css">
</head>

<body>
<form action="insert_page.php" method="post">
<center>
<table id="item_form" cellspacing="5px" class='item-list'>
<tr>
<th>Item Number</th>
<th>Name</th>
<th>Type</th>
<th>Category</th>
<th>Description</th>
<th>Price</th>
<th>Image</th>
</tr>
<tr>
<td><input type="number" name="sr_no0" min=1  required ><br></td>
<td><input type="text" name="name0" required><br></td>
<td> <select name="type0" required>
  <option value="upper_wear">Upper Wears</option>
  <option value="bottom_wear">Bottom Wears</option>
  <option value="suits">Suits</option>
  <option value="foot_wear">Footwear</option>
  
  
</select > </td>
<td> <select name="category0" required>
  <option value="men">Men</option>
  <option value="women">Women</option>
  <option value="kids_boy">Kids(boy)</option>
  <option value="kids_girl">Kids(girl)</option>
  
</select> </td>
<td><input type="text" name="desc0" required><br></td>
<td><input type="number" name="price0" required><br></td>
<td><input type="file"   id="pic0" name="pic0"  accept="image/*" onchange="index.php" required></input></td>
</tr>
</table>
<table id="submit_form">
<tr>
<td>
<input type="submit" name="submit" value="Submit"></input
</td>
<td>
<button type="button"  value="Add Row" class="add-row">Add Row</button>
<button type="button"  value="Add Row" class="remove-row">Remove Row</button>
</td>
</tr>
</table>

</center>
</form>

</body>
</html>