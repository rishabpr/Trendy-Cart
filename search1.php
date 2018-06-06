<?php
require  'connection.php'; 
$output="";
if(isset($_POST['search']))
{
	$searchq=$_POST['search'];
	$searchq=preg_replace("#[^0-9a-z]#i","",$searchq);
//	echo $searchq;

	$query=mysqli_query($conn,"SELECT * FROM men,women,kids WHERE name LIKE '%$searchq%'");
	$count=mysqli_num_rows($query);

	if($count==0)
	{
		$output="NO RESULTS";
	}
	else
	{
		while($row=mysqli_fetch_array($query))
		{
			$res=$row['name'];
			$output.='<div>'.$count.'</div>';
		}
			
	}
	echo $output;
	
}


?>
