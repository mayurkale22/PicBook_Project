<?php

error_reporting(E_ALL ^ E_WARNING ^ E_NOTICE);

// init smarty
if ($folder != "pluginsfront") $folder = "base";
include dirname(__FILE__) . "/include/smarty/smarty.config.php";

// check page variable
if(!isset($page)) { $page = ""; }

// define SE_PAGE constant
define('SE_PAGE', true);


include dirname(__FILE__) . "/include/Config.php";


include dirname(__FILE__) . "/include/Database.class.php";
include dirname(__FILE__) . "/include/Datetime.class.php";
include dirname(__FILE__) . "/include/ID3.class.php";
include dirname(__FILE__) . "/include/Comment.class.php";
include dirname(__FILE__) . "/include/Upload.class.php";
include dirname(__FILE__) . "/include/User.class.php";
include dirname(__FILE__) . "/include/Url.class.php";
include dirname(__FILE__) . "/include/Misc.class.php";
include dirname(__FILE__) . "/include/Actions.class.php";
include dirname(__FILE__) . "/include/General.functions.php";
include dirname(__FILE__) . "/include/Email.functions.php";
include dirname(__FILE__) . "/include/Stats.functions.php";

$database = new PHPS_Database($databaseHost, $databaseUsername, $databasePassword, $databaseName);

$setting = $database->database_fetch_assoc($database->database_query("SELECT * FROM phps_settings LIMIT 1"));


// include language file

$global_lang = 'english';

//$license = new License();
//$license->setLicFilePath(dirname(__FILE__) . '/include/');


// if GD is not enabled - turn off image verification
if(!is_callable('gd_info')) {
  $setting[setting_comment_code] = 0;
  $setting[setting_signup_code] = 0;
  $setting[setting_invite_code] = 0;
  $setting[setting_group_discussion_code] = 0;
}



$_POST = security($_POST);
$_GET = security($_GET);
$_COOKIE = security($_COOKIE);


update_stats("views");

$url = new PHPS_Url();

$datetime = new PHPS_Datetime();

$misc = new PHPS_Misc();

$actions = new PHPS_Actions();

$global_css = "";

// check for page owner
if(isset($_POST['user'])) { $user_username = $_POST['user']; } elseif(isset($_GET['user'])) { $user_username = $_GET['user']; } else { $user_username = ""; }
if(isset($_POST['user_id'])) { $user_id = $_POST['user_id']; } elseif(isset($_GET['user_id'])) { $user_id = $_GET['user_id']; } else { $user_id = ""; }
$owner = new PHPS_User(array($user_id, $user_username));

$smarty->assign('baseurl', $baseurl);

// create user object and try to login
$user = new PHPS_User();
$user->user_checkCookies();



// user is not logged in
if($user->user_exists != 0) {

  $username = $user->user_info[user_username];

// if user is not logged
} else { 
 	
  if(substr($page, 0, 4) == "User") { header("Location: Login.php?return_url=".$url->url_current()); exit(); }
  
  $global_timezone = $setting[setting_timezone]; 
}


if ($user->user_exists) $smarty->assign('total_friends_requests', $user->user_friend_total(1, 0));

include dirname(__FILE__) . "/lang/lang.english.php";



// check if current user is not in owner's blocklist
if($user->user_exists == 1) {
  if($owner->user_blocked($user->user_info[user_id])) {
    // display error pages
    $page = "Error";
    $smarty->assign('error_header', $Application[18]);
    $smarty->assign('error_message', $Application[19]);
    $smarty->assign('error_submit', $Application[20]);
    include "Footer.php";
    exit();
  }
}

//reset notification view_status
	if (isset($_GET['_nid']) && !empty($_GET['_nid'])){
	
			$notification_update = "Update notification SET view_status ='1' Where notification_id ='".$_GET['_nid']."'";
			$database->database_fetch_assoc($database->database_query($notification_update)); 
			
		}


// get notification deatils
	$notication_count = 0;
	$notication_data = array();
	
	$notication_count_query =  "SELECT notification_id, u.user_username,action_perform,n.board_id,n.image_id from notification n";
	$notication_count_query .= " JOIN action_category a ON a.action_id = n.action_id JOIN phps_users u ON u.user_id = n.from_user_id";
	$notication_count_query .= " Where from_user_id <> '".$user->user_info[user_id]."' and view_status = '0'";
	$notication_count_query .= " AND n.board_id IN (select board_id from boards where user_id ='".$user->user_info[user_id]."' Union Select board_id from follow_stream where user_id ='".$user->user_info[user_id]."')";
	
	$notication_count_query_excecute = $database->database_query($notication_count_query); 
	
	while($notification_info = $database->database_fetch_assoc($notication_count_query_excecute)) {
		$notication_data[] = '<b><a href="myboard.php?_picbid='.$notification_info[board_id].'&_picimgid='.$notification_info[image_id].'&_nid='.$notification_info[notification_id].'">'.$notification_info[user_username].' '. $notification_info[action_perform].'</a></b>';
		
		$notication_count = $notication_count + 1;
	}


$smarty->assign('path2Phps', $path2Phps);
$smarty->assign('baseurl', $baseurl);
$smarty->assign('notication_data', $notication_data);
$smarty->assign('notication_count', $notication_count);
$smarty->assign('username', $username);

?>
