<?php
$page = "Notification";
include "Header.php";

if(isset($_POST['tab'])) { $tab = $_POST['tab']; } elseif(isset($_GET['tab'])) { $tab = $_GET['tab']; } else { $tab = ""; }

// get notification deatils
	$notication_like= array();
	$notication_comment= array();
	$notication_follow= array();
	
	$notication_count_query =  "SELECT notification_id, u.user_username,action_perform,n.board_id,n.image_id,n.action_id,image_name,board_name from notification n";
	$notication_count_query .= " JOIN action_category a ON a.action_id = n.action_id";
	$notication_count_query .= " LEFT JOIN pin_images p on p.image_id = n.image_id";
	$notication_count_query .= " LEFT JOIN boards b on b.board_id = n.board_id"; 
	$notication_count_query .= " JOIN phps_users u ON u.user_id = n.from_user_id Where from_user_id <> '".$user->user_info[user_id]."'";
	$notication_count_query .= " AND n.board_id IN (select board_id from boards where user_id ='".$user->user_info[user_id]."'";
	$notication_count_query .= " Union Select board_id from follow_stream where user_id ='".$user->user_info[user_id]."') order by n.date_time desc";
	
	$notication_count_query_excecute = $database->database_query($notication_count_query); 
	
	while($notification_info = $database->database_fetch_assoc($notication_count_query_excecute)) {
			
		if ($notification_info[action_id] == '1'){	
		$notication_like[] = '<a href="myboard.php?_picbid='.$notification_info[board_id].'&_picimgid='.$notification_info[image_id].'&_nid='.
							  $notification_info[notification_id].'">'.$notification_info[user_username].' '. $notification_info[action_perform].'<b> '.
							  $notification_info[image_name].'</b></a>';
		}
		elseif($notification_info[action_id] == 2){
		$notication_comment[] = '<a href="myboard.php?_picbid='.$notification_info[board_id].'&_picimgid='.$notification_info[image_id].'&_nid='.
							  $notification_info[notification_id].'">'.$notification_info[user_username].' '. $notification_info[action_perform].'<b> '.
							  $notification_info[image_name].'</b></a>';
		}
		else{
		$notication_follow[] = '<a href="myboard.php?_picbid='.$notification_info[board_id].'&_picimgid='.$notification_info[image_id].'&_nid='.
							  $notification_info[notification_id].'">'.$notification_info[user_username].' '. $notification_info[action_perform].'<b> '.
							  $notification_info[board_name].'</b></a>';		
		}
	}


$smarty->assign('notication_like', $notication_like);
$smarty->assign('notication_comment', $notication_comment);
$smarty->assign('notication_follow', $notication_follow);
$smarty->assign('tab', $tab);
include "Footer.php";
?>