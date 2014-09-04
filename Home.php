<?php
$page = "Home";
include "Header.php";

// display error page if user not logged in and admin settings is: required registration
if($user->user_exists == 0) {
	header('Location: Login.php');
}

	$board_idarray = Array();
	$Friend_query = "SELECT friend_user_id2 from friends Where friend_user_id1 = '".$user->user_info[user_id]."' ANd friend_status =1";
	
	$query  = "SELECT distinct(b.board_id) from boards b JOIN pin_images p ON b.board_id = p.board_id ";
	$query .= "WHERE b.Is_visible = '1' OR b.user_id = '".$user->user_info[user_id]."' OR b.user_id IN (".$Friend_query.")";
	$query .= " group by board_id  Order by count(image_id) desc";
	
	$boards_query = $database->database_query($query); 
	
	while($boards_info = $database->database_fetch_assoc($boards_query)) {
	$board_idarray[]=$boards_info[board_id];
	}

if(isset($_POST['follow_user_id'])){
	extract($_POST);
			
			$followcheck = "SELECT board_id FROM follow_stream where user_id='".$_POST['follow_user_id']."' AND board_id ='".$_POST['follow_board_id']."'";
			$followcnt = $database->database_num_rows($database->database_query($followcheck));			
			
			if ($followcnt >=1){
				$removeQuery = "DELETE FROM follow_stream WHERE user_id='".$_POST['follow_user_id']."' AND board_id ='".$_POST['follow_board_id']."'";
				$follow_removequery = $database->database_query($removeQuery); 
				$follow_info = $database->database_fetch_assoc($follow_removequery);
			}else{
				$follow_addquery = $database->database_query("INSERT into follow_stream values ('".$_POST['follow_user_id']."','".$_POST['follow_board_id']."',now())"); 
				$follow_info = $database->database_fetch_assoc($follow_addquery);
			}
	}




$smarty->assign('page', $page);
$smarty->assign('board_id', $board_idarray);
include "Footer.php";
?>