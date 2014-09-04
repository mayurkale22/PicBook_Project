<?php
$page = "stats";
include "Header.php";

$board_namearray = Array();
$image_countarray = Array();

$boards_query = $database->database_query("SELECT board_name,count(p.image_id) as total FROM boards b JOIN pin_images p ON b.board_id = p.board_id WHERE user_id ='".$user->user_info[user_id]."' Group by b.board_id"); 


while($boards_info = $database->database_fetch_assoc($boards_query)) {

$board_namearray[]=$boards_info[board_name];
$image_countarray[]=$boards_info[total];

}

$smarty->assign('page', $page);
$smarty->assign('boards', $board_namearray);
$smarty->assign('boardsdata', $image_countarray);
include "Footer.php";
?>
