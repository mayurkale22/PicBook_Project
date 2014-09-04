<?php
$con1 =  mysql_connect("localhost","root","root","picbook");
  if (!$con1)
  {
  die('Could not connect: ');
  }
  
  mysql_select_db("picbook") or die(mysql_error());

$result = mysql_query("SELECT board_name FROM boards");

while ($row = mysql_fetch_assoc($result)) {
   		$colors[]=$row['board_name'];
		
}
mysql_free_result($result);
mysql_close($con1);

// check the parameter
if(isset($_GET['part']) and $_GET['part'] != '')
{
	// initialize the results array
	$results = array();

	// search colors
	foreach($colors as $color)
	{
		// if it starts with 'part' add to results
		if( strpos(strtolower($color), strtolower($_GET['part'])) === 0 ){
			$results[] = $color;
		}
	}

	// return the array as json with PHP 5.2
	echo json_encode($results);
}