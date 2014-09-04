<?php
$page = "myBoard";
include "Header.php";
	
// like-unlike query
if(isset($_POST['image_id'])){
	extract($_POST);
		if ($option == 1){
			$boards_query = $database->database_query("INSERT into likes values ('".$_POST['image_id']."','".$_POST['user_id']."',now())"); 
			$boards_info = $database->database_fetch_assoc($boards_query);
		}else{
			$boards_query = $database->database_query("Delete FROM likes WHERE user_id = '".$_POST['user_id']."' and image_id='".$_POST['image_id']."'"); 
			$boards_info = $database->database_fetch_assoc($boards_query);
		}
	}
	
if(isset($_POST['comment_id'])){	
			$comment_query = $database->database_query("Delete FROM comments WHERE comment_id = '".$_POST['comment_id']."'"); 
			$boards_info = $database->database_fetch_assoc($comment_query);
}
	
	$board_idarray = Array();
	$boards_query = $database->database_query("SELECT board_id FROM boards WHERE user_id ='".$user->user_info[user_id]."'"); 
	
	while($boards_info = $database->database_fetch_assoc($boards_query)) {
	$board_idarray[]=$boards_info[board_id];
	}
	$pin_cnt = 0;
	
	$b_cnt = $database->database_query("SELECT board_id FROM boards WHERE user_id ='".$user->user_info[user_id]."'"); 
	$board_cnt = $database->database_num_rows($b_cnt);
	
	$p_cnt = $database->database_query("SELECT p.image_id FROM pin_images p JOIN boards b
										ON p.board_id = b.board_id AND b.user_id ='".$user->user_info[user_id]."'"); 
	$pin_cnt = $database->database_num_rows($p_cnt);
	
$smarty->assign('page', $page);
$smarty->assign('board_id', $board_idarray);
$smarty->assign('board_count', $board_cnt);
$smarty->assign('pin_count', $pin_cnt);
include "Footer.php";
?>
