<?php 
include('navbar.php');
?>

<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$(document).ready(function()
{
$('#rate').mouseenter(function()
{
	document.getElementById('rate-1').innerHTML='Skirt Rs.1500' ;
});
$('#rate').mouseleave(function()
{
	document.getElementById('rate-1').innerHTML='' ;
});


$('#rate2').mouseenter(function()
{
	document.getElementById('rate-2').innerHTML='Coat Rs.1500' ;
});
$('#rate2').mouseleave(function()
{
	document.getElementById('rate-2').innerHTML='' ;
});
$('#rate3').mouseenter(function()
{
	document.getElementById('rate-3').innerHTML='Dress Rs.1500' ;
});

$('#rate3').mouseleave(function()
{
	document.getElementById('rate-3').innerHTML='' ;
});


});
</script>
<link rel="stylesheet" href="home_page.css">


<title>
Home Page
</title>
</head>

<body>

<div id="main">
<div id="header1">
<img src="images\women_model.jpg">
</div>
<div id="header1_text">

<p id="women_text"><b>BEAUTY & ELEGANCE</b></p>
<p id="women_text1">HOT WINTER LOOKS</p>
<hr id="line">
<a id="shop_w" href="women_home.php">Shop Women</a>

<div id="header2">
<img src="images\Man_model.jpg">
</div>
<div id="header2_text">

<p id="men_text"><b>ELEGANT & SLICK

</b></p>
<p id="men_text1">GET READY FOR SUMMER</p>
<hr id="line">
<a id="shop_m" href="men_home.php">Shop Men</a>

</div>
<p id="new_text"><b>NEW ARRIVALS

</b></p>
</b></p>
<div id="new"><img src="images\na_1.jpg">
<div id="rate">
<p id="rate-1"><p>
</div>

</div>
<div id="new1"><img src="images\na_3.jpg">
<div id="rate2">
<p id="rate-2"><p>


</div>

</div>
<div id="new2"><img src="images\na_2.jpg">
<div id="rate3">
<p id="rate-3"><p>

</div>



</div>
</div>
<div id="foot">
<? include('footer.php')?> ;
</div>
</body>
</html>
