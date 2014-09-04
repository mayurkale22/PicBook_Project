<?php /* Smarty version 2.6.14, created on 2013-11-24 21:25:11
         compiled from Home.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', 'Home.tpl', 32, false),array('modifier', 'truncate', 'Home.tpl', 50, false),array('function', 'cycle', 'Home.tpl', 49, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'Header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
include dirname(__FILE__) . "/include/Database.class.php";
include dirname(__FILE__) . "/include/Url.class.php";
include dirname(__FILE__) . "/include/User.class.php";

$database = new PHPS_Database('localhost', 'root', 'root', 'picbook');
$url = new PHPS_Url();
$user = new PHPS_User();
$user->user_checkCookies();

echo '<link rel="stylesheet" type="text/css" href="style/folio-gallery.css" />';

echo '
<link rel="stylesheet" href="fancybox/autocomplete.css" type="text/css" media="screen">
<script src="fancybox/jquery.js" type="text/javascript"></script>
<script src="fancybox/dimensions.js" type="text/javascript"></script>
<script src="fancybox/autocomplete.js" type="text/javascript"></script>

<script type="text/javascript">
	$(function(){

	    setAutoComplete("search_text", "results", "autocomplete.php?part=");
	});
</script>

<script type=\'text/javascript\'>
<!--
var search_changed = 0;

function removeText(commentBody) {
  if(search_changed == 0) {
    commentBody.value=\'\';
    commentBody.style.color=\'#000000\';
    search_changed = 1;
  }
}
function addText(commentBody) {
  if(commentBody.value == \'\') {
    commentBody.value = \'';  echo "Search";  echo '\';
    commentBody.style.color = \'#888888\';
    search_changed = 0;
  }
}


        // -->
    </script>
<style type="text/css">
	#button-container-follow{
		background: -moz-linear-gradient(bottom, #dadada, #fff);
		background: -webkit-gradient(linear, center bottom, center top, from(#dadada), to(#fff)); 		
		border: 1px solid #CCCCCC;
		border-radius: 3px 0px 0px 3px;
		color: #000000;
		cursor: pointer;
		width : 60px;
		font-family: verdana;
		font-size: 12px;
		line-height: 2em;
		float:left;
		margin-right:1px;
		margin-top:10px;
	}
	
</style>

<script type="text/javascript">	
	$(function(){

	$(".option").click(function(){
		 var user_id  = '.$user->user_info[user_id].';
		 var option = $(this).val();
		 
		 $.ajax({
		   type: "POST",
		   url: "home.php",
		   data: "&follow_user_id="+user_id+"&follow_board_id="+option,
		   success: function(json) {
			location.reload();
      },
		   
		   
		 });  
	});
	});
	
	</script>	
	
	
    '; 


 ?>
 
 
            <div id="content" style="width:829px;">
				  <h3 class="stat"><b><?php echo $this->_tpl_vars['Application123']; ?></b></h3>          
				  
				      <div id="primary" class="info-cnt tuneddivs" style="margin-left:494px">
							<form action='home.php' name='search_form' method='post' class="settings">
			
									<p id="auto">
										<input style="float:left; margin-left:15px !important; margin-right:15px !important;color:#888888;width: 150px;" 
												type='text'  name='search_text' id="search_text" 
												onfocus="removeText(this)" onblur="addText(this)"
												value = "Search" autocomplete="off"/>
										<div class="submits" style="margin-left:20px !important;">
											<label><input type="submit" value="<?php echo $this->_tpl_vars['Application275']; ?>"/></label>
										</div>
									</p>
							</form>

    				</div>
				   
                <?php

					if ((isset($_POST['search_text']) && $_POST['search_text'] <> 'Search') || (isset($_GET['tag'])) ){
							$search_text = $_POST['search_text'];
								if ($search_text == ''){$search_text = $_GET['tag'];}		 
						
									 
							$Search_image_query = "SELECT image_id,image_type,image_name,u.user_id,p.board_id FROM pin_images p JOIN boards b ON p.board_id = b.board_id";
							$Search_image_query .= " JOIN phps_users u ON u.user_id = b.user_id";
							$Search_image_query .= " WHERE p.image_name like '".$search_text."%'";
											
							$Search_image_query .= "UNION SELECT t.image_id,image_type,image_name,u.user_id,p.board_id FROM pin_images p JOIN tags t ON t.image_id = p.image_id";
							$Search_image_query .= " JOIN boards b ON p.board_id = b.board_id JOIN phps_users u ON u.user_id = b.user_id";
							$Search_image_query .= " WHERE t.tag_name like '".$search_text."%'";
							
							$flag = 0;	
							$search_image = $database->database_query($Search_image_query); 
								while ($image_info = $database->database_fetch_assoc($search_image)) {
									$flag = 1;
									$dest = $url->url_userTRdir($image_info['user_id']);
									$user2 = $image_info['user_id'];
									$image_path = $dest.$this->user_info[user_id].$image_info[image_id].'.'.$image_info[image_type];
									
									echo '<div class="gallery" style="margin-left:20px;"><div class="thumb shadow" style="margin-right:30px;">
											<div>
											<a href="myboard.php?_picbid='.$image_info[board_id].'&_picimgid='.$image_info[image_id].'" class="albumpix" rel="albumpix">
											  <img src="'.$image_path.'" width="150" HEIGHT="110" alt="" />
											</a>
											</div>  										
										<a href="myboard.php?_picbid='.$_GET['_picbid'].'&_picimgid='.$image_info[image_id].'">
											<span class="caption">'.$image_info[image_name].'</span>
										</a>
				
										  </div></div>';
								} 
								if ( $flag == 0){
								        echo '<br/>
											  <p align="center" style="color:red;">'.$this->_tpl_vars['Application280'].' <b>'
											  .$search_text.' </b>'
										      .$this->_tpl_vars['Application281'].
											  '</p><br/>';
								}
								
					}else{

						foreach( $this->_tpl_vars['board_id'] as $id){
						
						$boardname_query  = "SELECT b.board_name, count(p.image_id) as cnt,user_username,u.user_id FROM boards b JOIN phps_users u";
						$boardname_query .= " ON u.user_id = b.user_id LEFT JOIN pin_images p ON b.board_id = p.board_id WHERE b.board_id='".$id."' group by b.board_id";				
		
						$boardname_query = $database->database_query($boardname_query); 
						$boardname_info = $database->database_fetch_assoc($boardname_query);
						
						$u_name = $boardname_info[user_username];
						if ($boardname_info[user_id] <> $user->user_info[user_id]){
							$u_name = substr($boardname_info[user_username],0,7).'..';
						}
						
						$display_img_query  = "SELECT image_id,image_type,b.user_id FROM pin_images p JOIN boards b ";
						$display_img_query .= "ON p.board_id = b.board_id and p.board_id='".$id."' ";
						$display_img_query .= "Union SELECT r.original_image_id, p.image_type, b.user_id FROM repin_images r ";
						$display_img_query .= "JOIN pin_images p ON r.original_image_id = p.image_id ";
						$display_img_query .= "JOIN boards b ON p.board_id = b.board_id and r.board_id='".$id."' ORDER BY RAND() LIMIT 1";
						
						$image_query = $database->database_query($display_img_query); 
						$image_info = $database->database_fetch_assoc($image_query);
		
						if ($image_info[image_id] ==''){
							$image_path = "images/noimage.jpg";
						}else{
							$dest = $url->url_userTRdir($image_info['user_id']);
							$image_path = $dest.$image_info[image_id].'.'.$image_info[image_type];
						}
				   echo '
				   <div class="gallery" style="margin-left:20px;" >
						<div class="thumb-album shadow" style="height:170px;width:160px;margin-right:30px;">
								<a href="myboard.php?_picbid='.$id.'"><div style="margin-bottom:5px;">
									<span class="caption"><b>'.$boardname_info[board_name].'</b></span></div>
								</a>
		
							<div>
								<a href="myboard.php?_picbid='.$id.'">
									 <img src="'.$image_path.'" width="160" HEIGHT="110" alt="" />
								</a>	
							</div>	
								<div>
									<div style="float:left;">
										<span class="caption">'.$boardname_info[cnt].' Pins</span>
										<div style="float:left;margin-top:5px;">
											<span class="caption"><a href="profile.php?user='.$boardname_info[user_username].'">'.$u_name.'</a></span>
										</div>
									</div>
									
									<div style="float:right;">';
									if ($boardname_info[user_id] <> $user->user_info[user_id]){
										
										$follow_check = "SELECT board_id FROM follow_stream where user_id='".$user->user_info[user_id]."' AND board_id ='".$id."'";
										$follow_cnt = $database->database_num_rows($database->database_query($follow_check));
										if ($follow_cnt >=1){
												echo '<button id="button-container-follow" class="option" value='.$id.'>Unfollow</button>';
										}else{
												echo '<button id="button-container-follow" class="option" value='.$id.'>Follow</button>';
										}
										
										
									}
							echo '</div></div>
							
										
						</div>
					</div>  <!--gallery end -->
					';
					
					}
				}	
				
			?>	
				
				
                <div class="block-bot"><span>&nbsp;</span></div>
            </div> 
    

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'Footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>