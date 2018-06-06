<?php

require  'connection.php';

if(isset($_GET['s']) && $_GET['s'] != ''){
	$s = $_GET['s'];
	$sql = "SELECT * FROM men WHERE name LIKE '%$s%'";
   $sql1=	"Select * from women  WHERE name LIKE '%$s%'";
$sql2="   SELECT * FROM kids WHERE name LIKE '%$s%'";
	$result = mysqli_query($conn,$sql);
	while($row = mysqli_fetch_array($result)){
$url=$row[0];	
	$title = $row[1];
	$table=$row[3];
		echo  "<a style='font-family: verdana; text-decoration: none; color: black;' href='detail.php?table=$table&id=$url'>" ."<div style='background-color:powderblue' id='searchtitle'>" .$title . "</div>". "</a>";
	}
	
	$result1 = mysqli_query($conn,$sql1);
	while($row = mysqli_fetch_array($result1)){
$url=$row[0];	
	$table=$row[3];
	$title = $row[1];
		echo  "<a style='font-family: verdana; text-decoration: none; color: black;' href='detail.php?table=$table&id=$url'>" ."<div style='background-color:powderblue' id='searchtitle'>" .$title . "</div>". "</a>";
	}
	
	$result2 = mysqli_query($conn,$sql2);
	while($row = mysqli_fetch_array($result2)){
$url=$row[0];	
$table=$row[3];
	$title = $row[1];
		echo  "<a style='font-family: verdana; text-decoration: none; color: black;' href='detail.php?table=$table&id=$url'>" ."<div style='background-color:powderblue' id='searchtitle'>" .$title . "</div>". "</a>";
	}
	
	
}

?>