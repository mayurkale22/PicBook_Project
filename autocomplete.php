<?php
$con1 =  mysql_connect("localhost","root","root","picbook");
  if (!$con1)
  {
  die('Could not connect: ');
  }
  
  mysql_select_db("picbook") or die(mysql_error());

	// initialize the results array
	$results = array();
	$seach_query  = "SELECT image_name FROM pin_images ";
	$seach_query .= "Union ";
	$seach_query .= "SELECT tag_name FROM pin_images p JOIN tags t ON t.image_id = p.image_id";
	
	$result = mysql_query($seach_query);
	
	while ($row = mysql_fetch_assoc($result)) {
			$names[]=$row['image_name'];
			
	}
	mysql_free_result($result);
	mysql_close($con1);



// check the parameter
if(isset($_GET['part']) and $_GET['part'] != '')
{


	foreach($names as $name)
	{
		// if it starts with 'part' add to results
		if( strpos(strtolower($name), strtolower($_GET['part'])) === 0 ){
			$results[] = $name;
		}
	}

	// return the array as json with PHP 5.2
	echo json_encode($results);
}