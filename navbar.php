<html>
<head>
<link rel="stylesheet" href="navbar.css">
<title>
Home Page
</title>
<script>
function search(string){
	var xmlhttp;
	if(window.XMLHttpRequest){
		xmlhttp = new XMLHttpRequest();
	}else{
		xmlhttp = new ActiveXObject("XMLHTTP");
	}
	xmlhttp.onreadystatechange = function(){
		if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
			document.getElementById("search").innerHTML = xmlhttp.responseText;
	if(xmlhttp.responseText!="")
	{	
		document.getElementById('head1').style.width="1205px";
	}
	else{
		document.getElementById('head1').style.width="1380px";
		}
	}
	}
	
	xmlhttp.open("GET", "search.php?s="+string, true);
	xmlhttp.send(null);
}
</script>

</head>

<body>
<div id="upbar"></div>

<div id="navbar">
<a id="title" href="home_page.php"  target="_self" ><h3>TRENDY CART</h3></a>


<b><a id="home" href="home_page.php">HOME</a></b>
<div class="dropdown">
  <button id="collection" class="dropbtn"><b>COLLECTIONS</b></button>
  <div class="dropdown-content">
  <center>
    <a href="women_home.php">WOMEN</a>
    <a href="men_home.php">MEN</a>
    <a href="boys_home.php">Boys</a>
	  <a href="girls_home.php">Girls</a>
	

	</center>
  </div>
</div> 

<b><a id="lookbook" href="lookbook.php">LOOKBOOK</a></b>
<b><a id="care" href="write_us.php?msg=">CUSTOMER CARE</a></b>
<b><a  id="write" href="visit_us.php" >VISIT US</a></b>



<div style="text-align: center; width: 500px; margin: 0 auto;">
	<input type="text" placeholder="Type to search.." onkeyup="search(this.value)" id="text" >
		<div id="search">
	</div>

</div>
 </div>



 <div id="logo">
 </div>