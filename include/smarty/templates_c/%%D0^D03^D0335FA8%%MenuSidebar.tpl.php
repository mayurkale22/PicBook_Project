<?php /* Smarty version 2.6.14, created on 2013-11-09 02:09:48
         compiled from MenuSidebar.tpl */ 
		 
include dirname(__FILE__) . "/include/Database.class.php";
include dirname(__FILE__) . "/include/Url.class.php";
include dirname(__FILE__) . "/include/User.class.php";
$database = new PHPS_Database('localhost', 'root', 'root', 'picbook');	 
$url = new PHPS_Url();		 		 
$user = new PHPS_User();
$user->user_checkCookies();
?>

<?php if ($this->_tpl_vars['user']->user_exists != 0): ?>
<div class="block">
    <div class="block-top"><span>&nbsp;</span></div>
    <ul>
        <li><a href="Profile.php?user=<?php echo $this->_tpl_vars['user']->user_info['user_username']; ?>
"><img src="images\icons\menu_home.gif"><?php echo $this->_tpl_vars['Application11']; ?>
</a></li>
        <li>
			<a href="myboard.php"><img src="images\icons\myboard.png"><?php echo ' '.$this->_tpl_vars['Application15']; ?></a>
		</li>
        		
        <?php if ($this->_tpl_vars['setting']['setting_connection_allow'] != 0): ?>
        <li><a href="UserFriends<?php if ($this->_tpl_vars['total_friends_requests'] > 0): ?>Requests<?php endif; ?>.php"><img src="images\icons\menu_friends.gif" style="margin-top:2px" /><?php echo $this->_tpl_vars['Application14'];  if ($this->_tpl_vars['total_friends_requests'] > 0): ?> (<?php echo $this->_tpl_vars['total_friends_requests']; ?>
)<?php endif; ?></a></li>
        <?php endif; ?>
		
		 <?php if ($this->_tpl_vars['user']->level_info['level_message_allow'] != 0): ?>
        <li><a href='UserMessages.php'><?php echo $this->_tpl_vars['Application15'];  if ($this->_tpl_vars['user_unread_pms'] != 0): ?> (<?php echo $this->_tpl_vars['user_unread_pms']; ?>
)<?php endif; ?></a></li>
        <?php endif; ?>
		
		
<li><a href='UserEditprofile.php'><img src="images\icons\menu_profile.gif" style="margin-top:2px" /> Edit Profile</a></li>
                <?php unset($this->_sections['menu_loop']);
$this->_sections['menu_loop']['name'] = 'menu_loop';
$this->_sections['menu_loop']['loop'] = is_array($_loop=$this->_tpl_vars['global_plugins']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['menu_loop']['show'] = true;
$this->_sections['menu_loop']['max'] = $this->_sections['menu_loop']['loop'];
$this->_sections['menu_loop']['step'] = 1;
$this->_sections['menu_loop']['start'] = $this->_sections['menu_loop']['step'] > 0 ? 0 : $this->_sections['menu_loop']['loop']-1;
if ($this->_sections['menu_loop']['show']) {
    $this->_sections['menu_loop']['total'] = $this->_sections['menu_loop']['loop'];
    if ($this->_sections['menu_loop']['total'] == 0)
        $this->_sections['menu_loop']['show'] = false;
} else
    $this->_sections['menu_loop']['total'] = 0;
if ($this->_sections['menu_loop']['show']):

            for ($this->_sections['menu_loop']['index'] = $this->_sections['menu_loop']['start'], $this->_sections['menu_loop']['iteration'] = 1;
                 $this->_sections['menu_loop']['iteration'] <= $this->_sections['menu_loop']['total'];
                 $this->_sections['menu_loop']['index'] += $this->_sections['menu_loop']['step'], $this->_sections['menu_loop']['iteration']++):
$this->_sections['menu_loop']['rownum'] = $this->_sections['menu_loop']['iteration'];
$this->_sections['menu_loop']['index_prev'] = $this->_sections['menu_loop']['index'] - $this->_sections['menu_loop']['step'];
$this->_sections['menu_loop']['index_next'] = $this->_sections['menu_loop']['index'] + $this->_sections['menu_loop']['step'];
$this->_sections['menu_loop']['first']      = ($this->_sections['menu_loop']['iteration'] == 1);
$this->_sections['menu_loop']['last']       = ($this->_sections['menu_loop']['iteration'] == $this->_sections['menu_loop']['total']);
?>
        <?php if ($this->_tpl_vars['global_plugins'][$this->_sections['menu_loop']['index']] != '' && $this->_tpl_vars['global_plugins'][$this->_sections['menu_loop']['index']] != 'Phototagger'): ?> 
        	<?php if ($this->_tpl_vars['global_plugins'][$this->_sections['menu_loop']['index']] == 'Chat'): ?>
        		<li><a href='<?php echo $this->_tpl_vars['global_plugins'][$this->_sections['menu_loop']['index']]; ?>
.php'><?php echo $this->_tpl_vars['global_plugins'][$this->_sections['menu_loop']['index']]; ?>
</a></li>
        	<?php elseif ($this->_tpl_vars['global_plugins'][$this->_sections['menu_loop']['index']] == 'Music'): ?>
        		<li><a href='UserMusicEdit.php'><?php echo $this->_tpl_vars['global_plugins'][$this->_sections['menu_loop']['index']]; ?>
</a></li>
        	<?php elseif ($this->_tpl_vars['global_plugins'][$this->_sections['menu_loop']['index']] == 'Vidfeeder'): ?>
        		<li><a href='Vidfeeder.php'><?php echo $this->_tpl_vars['global_plugins'][$this->_sections['menu_loop']['index']]; ?>
</a></li>
        	<?php else: ?>
        		<li><a href='User<?php echo $this->_tpl_vars['global_plugins'][$this->_sections['menu_loop']['index']]; ?>
.php'><?php echo $this->_tpl_vars['global_plugins'][$this->_sections['menu_loop']['index']]; ?>
s</a></li>
        	<?php endif; ?>
        <?php endif; ?>
        <?php endfor; endif; ?>
<li><a href='UserAccount.php'><img src="images\icons\Setting_Icon_16.png" style="margin-top:2px" /> Setting</a></li>
<li><a href='stats.php'><img src="images\icons\poll16.gif" style="margin-top:2px"/> Statistics</a></li>
<li><a href='help.php'><img src="images\icons\help16.gif" style="margin-top:2px"/> Help Center</a></li>
<li><a href='UserLogout.php'><img src="images\icons\logout.png " width="16" height="16" style="margin-top:2px"/> Logout</a></li>

        <?php if ($this->_tpl_vars['setting']['setting_signup_phone'] == 1): ?><li class="last-li"><a href='Phonebook.php'><?php echo $this->_tpl_vars['Application740']; ?>
</a></li><?php endif; ?>

    </ul>

	<div class="block-bot"><span>&nbsp;</span></div>
	
	
</div>
<?php endif; ?>


<?php echo '
<style type="text/css">
	.ad_left div{
		text-align: center;
		padding:5px;
	}
</style>
'; ?>
<div><b style="font-size:14px;margin-left:50px;">Tag Cloud</b></div>
<div class="block">
 <div class="block-top"><span>&nbsp;</span></div>
<?php

$tag_query = "SELECT tag_name,count(tag_name) as cnt FROM `tags` group by tag_name";
$tag_fetch = $database->database_query($tag_query); 
while ($tag_info = $database->database_fetch_assoc($tag_fetch)) {
	$size = $tag_info['cnt'] + 10;
	$name .= "<a href='".$this->_tpl_vars['baseurl']."/home.php?tag=".$tag_info['tag_name']."' style='font-size: ".$size."pt;'>".$tag_info['tag_name']."</a>"; 
}
?>

<embed type="application/x-shockwave-flash" src="plugins/tagcloud.swf?r=9908067" width="180" height="200" id="tagcloudflash" name="tagcloudflash" bgcolor="#ffffff" quality="high" allowscriptaccess="always" 
flashvars="tcolor=0x333333&amp;tcolor2=0x333333&amp;hicolor=0x000000&amp;tspeed=100&amp;distr=true&amp;mode=tags&amp;tagcloud=%3Ctags%3E
<?php echo $name;?>%3C%2Ftags%3E"></embed>
<div class="block-bot"><span>&nbsp;</span></div></div>


<div><b style="font-size:14px;margin-left:15px;">Our Recommendation</b></div>
<div class="block">
 <div class="block-top"><span>&nbsp;</span></div>
<?php
				$display_img_query  = "SELECT b.board_name,b.board_id, image_id,image_type,b.user_id FROM pin_images p JOIN boards b ";
				$display_img_query .= "ON p.board_id = b.board_id ";
				$display_img_query .= "AND b.board_id NOT IN (select board_id from boards where user_id ='".$user->user_info[user_id]."') ";
				$display_img_query .= "AND b.board_id NOT IN (select board_id from follow_stream where user_id ='".$user->user_info[user_id]."') ";
				$display_img_query .= "ORDER BY RAND() LIMIT 1";
								
				$image_query = $database->database_query($display_img_query); 
				
				$image_info = $database->database_fetch_assoc($image_query);

				if ($image_info[image_id] ==''){
					$image_path = "images/noimage.jpg";
				}else{
					$dest = $url->url_userTRdir($image_info['user_id']);
					$image_path = $dest.$image_info[image_id].'.'.$image_info[image_type];
				}
?>
		   <div class="gallery" >
				<div class="thumb-album shadow" style="height:120px;margin-left:10px">
					<div>
						<a href="myboard.php?_picbid=<?php echo $image_info[board_id];?>">
							 <img src="<?php echo $image_path;?>" width="150" HEIGHT="100" alt="" />
	 				    </a>	
					</div>
										
						<a href="myboard.php?_picbid=<?php echo $image_info[board_id];?>">
							<span class="caption"><b><?php echo $image_info[board_name];?></b></span>
						</a><br><br>
									
				</div>
			</div>



<div class="block-bot"><span>&nbsp;</span></div></div>

