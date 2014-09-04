<?php /* Smarty version 2.6.14, created on 2013-11-20 17:45:57
         compiled from myBoard.tpl */ ?>
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


 ?>
<div id="content">
    <?php echo '
    <style type="text/css">
        .submit_button{
            background:transparent url(../images/link-btn.gif) no-repeat scroll 0 0;
            color:#FFFFFF;
            display:block;
            font-weight:bold;
            height:23px;
            line-height:23px;
            margin-top:10px;
            text-align:center;
            width:129px;
            text-decoration:none;
            margin-left:25px;
        }
		#button-container-like{
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
		margin-top:-8px;
	}
	#button-container-unlike{
		background: -moz-linear-gradient(bottom, #dadada, #fff);
		background: -webkit-gradient(linear, center bottom, center top, from(#dadada), to(#fff)); 		
		border: 1px solid #CCCCCC;
		border-left: none;
		border-radius: 0px 3px 3px 0px;
		color: #000000;
		cursor: pointer;
		width : 60px;
		font-family: verdana;
		font-size: 12px;
		line-height: 2em;
		float:left;
		margin-top:-8px;
	}	
	.thumbs-up{
		background : url("images/icons.png") no-repeat scroll 2px -255px transparent;
		position: relative;
		height: 20px;
		display:block;
		width: 20px;
		clear: right;
		float: left;
	}
	.thumbs-down{
		background : url("images/icons.png") no-repeat scroll -63px -50px transparent;
		position: relative;
		height: 20px;
		display:block;
		width: 20px;
		clear: right;
		float: left;
	}
	.tup-hover{
		background : url("images/icons.png") no-repeat scroll -37px -138px transparent;
	}	
	.tdown-hover{
		background : url("images/icons.png") no-repeat scroll -36px -255px transparent;
	}		
	Div.tooltip {display:inline;}
	.tooltip span {display:none; padding:2px 3px; margin-left:8px; width:100px;}
	.tooltip:hover span{display:inline; position:absolute; border:1px solid #cccccc; background:#ffffff; color:#6c6c6c;}	
		
    </style>
    '; ?>


    <?php echo '
    <script language="javascript">
        <!--
        function showhide(id1) {
            if(document.getElementById(id1).style.display==\'none\') {
                document.getElementById(id1).style.display=\'block\';
            } else {
                document.getElementById(id1).style.display=\'none\';
            }
        }

		
        // -->
    </script>
    '; ?>
<?php echo '
<script type=\'text/javascript\'>
<!--
var comment_changed = 0;

function removeText(commentBody) {
  if(comment_changed == 0) {
    commentBody.value=\'\';
    commentBody.style.color=\'#000000\';
    comment_changed = 1;
  }
}
function addText(commentBody) {
  if(commentBody.value == \'\') {
    commentBody.value = \'';  echo $this->_tpl_vars['Application230'];  echo '\';
    commentBody.style.color = \'#888888\';
    comment_changed = 0;
  }
}

function deleteComment(id) {
  $.ajax({
    type: "POST",
    url: "myboard.php?",
    data: "comment_id="+id,
    success: function(json) {
			location.reload();
      },
  });  
}

        // -->
    </script>
    '; ?>
	
	

    <?php echo '

	<link rel="stylesheet" type="text/css" href="style/folio-gallery.css" />

	<!-- Add jQuery library -->
	<script type="text/javascript" src="fancybox/jquery-1.10.1.min.js"></script>

	<!-- Add fancyBox main JS and CSS files -->
	<script type="text/javascript" src="fancybox/jquery.fancybox.js?v=2.1.5"></script>
	<link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox.css?v=2.1.5" media="screen" />

	
<script type="text/javascript">

		$(document).ready(function() {
			$(".fancybox").fancybox();
			
			$(".fancybox").fancybox({
    			afterClose : function() {
				location.reload();
				return;
    		}});
			
			
			});
				
	</script>
	
<script type="text/javascript">	
	$(function(){

	$("button").hover(
		function(){
			if($(this).val() == "1")   
				$(this).find(".thumbs-up").addClass("tup-hover");
			else
				$(this).find(".thumbs-down").addClass("tdown-hover");
		},
		function(){
			if($(this).val() == "1") {
				$(this).find(".thumbs-up").removeClass("tup-hover");
				$(this).find(".thumbs-up").addClass("thumbs-up");
			}else{
				$(this).find(".thumbs-down").removeClass("tdown-hover");
				$(this).find(".thumbs-down").addClass("thumbs-down");
			}	
		}
	);


	$(".option").click(function(){
		 var image_id = '.$_GET['_picimgid'].';
		 var user_id  = '.$user->user_info[user_id].';
		 var option = $(this).val();
		 
		 $.ajax({
		   type: "POST",
		   url: "myboard.php",
		   data: "image_id="+image_id+"&user_id="+user_id+"&option="+option,
		   success: function(json) {
			location.reload();
      },
		   
		   
		 });  
	});
	});
	
	</script>	

	
    '; ?>

	<?php if (isset($_GET['_picbid']) && !empty($_GET['_picbid']))
		   {
		   		
		   		$_picbn_query  = "SELECT b.board_name, count(p.image_id) as cnt,user_username FROM boards b JOIN phps_users u ON u.user_id = b.user_id LEFT JOIN pin_images p";
				$_picbn_query .= " ON b.board_id = p.board_id WHERE b.board_id='".$_GET['_picbid']."' group by b.board_id";
				
		   		$_picbn = $database->database_query($_picbn_query); 
				$bn_info = $database->database_fetch_assoc($_picbn);
				$bname = $bn_info['board_name'];
				$icnt = $bn_info['cnt'];
				$username = $bn_info['user_username'];
				
				if ($username <> ''){
				$username = '<a href="profile.php?user='.$bn_info['user_username'].'">'.ucfirst($bn_info['user_username']).'</a>&rsquo;s Boards';
				}else{ 
				$username = 'Ooops !! The board you are looking for might have been removed. ';
				}
				// follower details 
					$follower_cnt = 0;
					$follower_query = "Select user_username from follow_stream,phps_users where follow_stream.user_id = phps_users.user_id AND board_id='".$_GET['_picbid']."' ";
					$follower_query .= "AND board_id IN (SELECT board_id from boards) ";
					
					$follower_query_fetch = $database->database_query($follower_query); 
					while ($follower_info = $database->database_fetch_assoc($follower_query_fetch)){
					
						$follower_user = $follower_user.' '.$follower_info['user_username'].'<br />';
						$follower_cnt = $follower_cnt + 1;
					}
			
				
			echo '<div class="grey-head"><h2>'.$username.'</h2></div>
				  <div class="row-blue">
					<p class="blue">
					<div style="text-align:center">
					<a href="myboard.php?_picbid='.$_GET['_picbid'].'">
						<h2>'.$bname.'</h2>	
					</a></div>
					<div style="text-align:right">'.$icnt.' Pins';
					if ($follower_cnt > 0){
					echo' <div class="tooltip"> | '.$follower_cnt.' Follower<span>'.$follower_user.'</span></div>';}
					
					echo '</div></p>
				  </div>';			   
		   }
		   else
		   {
		   
		   $follow_query = "SELECT board_id FROM follow_stream where user_id='".$user->user_info[user_id]."' AND board_id IN (SELECT board_id from boards)";
		   $follow_cnt = $database->database_num_rows($database->database_query($follow_query)); 

		   	echo '<div class="grey-head"><h2>'.$this->_tpl_vars['Application15'].'</h2></div>';
			echo '<div class="row-blue">
					<p class="blue">
						'.$this->_tpl_vars['board_count'].' Boards  | '.$this->_tpl_vars['pin_count'].' Pins';
						if ($follow_cnt >0) { echo ' | <a href="myboard.php?_nfollows=f10152395517004517">'.$follow_cnt.' Following</a>';}
				echo'
					</p>
				  </div>';		   
		   }
	?>	   


    <div class="layers">
       

        <div id="primary" class="info-cnt tuneddivs" style="padding-left:25px; color:#666666;">
            
           <?php 
		   $flag = 0;
		   if (isset($_GET['_picbid']) && !empty($_GET['_picbid']))
		   {
   				// single image display business logic
   				if (isset($_GET['_picimgid']) && !empty($_GET['_picimgid']))
		   		{  
					$bid = $_GET['_picbid'];
					$repin_bquery = "Select board_id from pin_images where image_id = '".$_GET['_picimgid']."'";
					$repin_binfo = $database->database_fetch_assoc($database->database_query($repin_bquery));
					$bid = $repin_binfo['board_id'];
				
					$query_new = "SELECT image_id,image_type,image_name,image_description,u.user_id FROM pin_images p JOIN boards b ON p.board_id = b.board_id";
					$query_new .= " JOIN phps_users u ON u.user_id = b.user_id";
					$query_new .= " WHERE p.board_id='".$bid."' AND p.image_id='".$_GET['_picimgid']."'";
									
					$query = "SELECT image_id,image_type,image_name FROM pin_images WHERE board_id='".$_GET['_picbid']."' AND image_id='".$_GET['_picimgid']."'";
					$image_query = $database->database_query($query_new); 
					$image_info = $database->database_fetch_assoc($image_query);
					
					$dest = $url->url_userTRdir($image_info['user_id']);
					$image_path = $dest.$this->user_info[user_id].$image_info[image_id].'.'.$image_info[image_type];


					// like image count
					$flag = 0;$like_count = 0;
					$like_query = "Select image_id,user_username from likes,phps_users where likes.user_id = phps_users.user_id AND image_id = '".$_GET['_picimgid']."' ";
					$like_query_fetch = $database->database_query($like_query); 
					while ($like_info = $database->database_fetch_assoc($like_query_fetch)){
					
						$like_user = $like_user.' '.$like_info['user_username'].'<br />';
						$like_count = $like_count + 1;
					}
					
					// image tags
					$Tag_flag = 0;
					$tag_query = "Select tag_name from pin_images,tags where pin_images.image_id = tags.image_id AND tags.image_id = '".$_GET['_picimgid']."' ";
					$tag_query_fetch = $database->database_query($tag_query); 
					while ($tag_info = $database->database_fetch_assoc($tag_query_fetch)){
						$tag_name = $tag_info['tag_name'].', '.$tag_name;
						$Tag_flag = 1;
					}
					
					
					$like_check = "Select image_id from likes where image_id = '".$_GET['_picimgid']."' and user_id ='".$user->user_info[user_id]."'";
					$like_check_fetch = $database->database_query($like_check); 
					$flag = $database->database_num_rows($like_check_fetch);
					
					echo '
					<div>
						<div style="float:left;"><h2>'.$image_info[image_name].'</h2>
							<div style="display:inline;"></div>
						</div>
						<div style="float:right;margin-right:25px">

							<div class="container">
								<a class="fancybox fancybox.iframe" href="repin_image.php?_bid='.$_GET['_picbid'].'&_imgid='.$_GET['_picimgid'].'">
									<button id="button-container-like">
									Pin It	
									</button>
								</a>';
											
								if ($flag == 0){
								echo '<button id="button-container-like" class="option" value="1"><a class="thumbs-up"></a>Like</button>&nbsp;&nbsp;';
								}else{
								echo '<button id="button-container-unlike" class="option" value="0"><a class="thumbs-down"></a>Unlike</button>&nbsp;&nbsp;';
								}
								if ($like_count== 0){
								echo 'Like Count: '.$like_count;
								}else{
								echo 'Like Count: <div class="tooltip">'.$like_count.'<span>'.$like_user.'</span></div>';
								}
							echo '</div>
						</div> 

					</div>';

					
								
					echo '<br/><img src="'.$image_path.'" width="590" HEIGHT="450" alt="" /><br/>';
					echo $image_info[image_description].'<br/>';
					if ($Tag_flag == 1){
					echo 'Tags : '.substr($tag_name, 0, -2);
					}
				?>
				<?php
				   if (isset($_POST['submit'])){
				   		if ((!empty($_POST['comment_body']))){
						$comment_query = "INSERT INTO comments (image_id,from_user_id,board_id,comment_discription,flag,create_date) Values";
						$comment_query .= "('".$_GET['_picimgid']."','".$user->user_info[user_id]."','".$_GET['_picbid']."','".$_POST['comment_body']."',
											'".$_GET['_picorgimgid']."',now())";
							
							$c_query = $database->database_query($comment_query); 
							
						}
						else{
								echo "<font color='red'>Please enter a comment</font>";
						}
					}
					?>                     
                   <form action='' id="comment_form" method='post'>
  

                                <div class="leave-msg-box" style="display:block;padding-top: 20px;">
                                    <div class="s1">
                                        <div id='comment_error' style='color: #FF0000; display: none;'></div>

                                          <textarea name='comment_body' id='comment_body' rows='2' cols='65' style="width:590px" 
										  onfocus='removeText(this)' onblur='addText(this)' class='comment_area'><?php echo $this->_tpl_vars['Application230']; ?>
										</textarea>
                                          
                                          <table cellpadding='0' cellspacing='0' width='97%'>
                                          <tr>
                                          <td align='right' valign="top" style='padding-top: 5px; padding-left:10px;padding-bottom: 10px;'>
                                          <input type='submit' name='submit'  value='<?php echo $this->_tpl_vars['Application234']; ?>'>

                                          </form>
                                          </td>
                                          </tr>
                                          </table>
                                    </div>
                                </div>
                                
                      </form>
					  
				<?php 
				$comment_query= "SELECT comment_id, from_user_id,comment_discription,create_date,user_username,user_photo FROM comments c JOIN phps_users u ";
				$comment_query.= "ON c.from_user_id = u.user_id AND c.board_id='".$_GET['_picbid']."' AND 
								  c.image_id='".$_GET['_picimgid']."' AND c.flag='".$_GET['_picorgimgid']."'";
					$comment_exec = $database->database_query($comment_query); 
					while ($comment_info = $database->database_fetch_assoc($comment_exec)){
					
					if ($comment_info['user_photo'] == ''){$image_path= "images/nophoto.gif";}
					else{
					$dest = $url->url_userTRdir($comment_info['from_user_id']);
					$image_path = $dest.$comment_info['user_photo'];
					}				  
				 ?>    <div class="row post" style="margin-bottom:10px">
                                    <div class="w120 fleft">
                                       <a href='Profile.php?user=<?php echo $comment_info['user_username'] ;?>'>
									   <img src='<?php echo $image_path; ?>' class='photo' border='0' width='60' height='70'></a>
                                    </div>
									
                                    <div class="fleft w490">
                                    	<div class="grey w490 mb10"> <?php echo $comment_info['user_username'];?>
											<div class="f-right">
												<a href='javascript:deleteComment(<?php echo $comment_info['comment_id'];?>)'>
													<?php echo $this->_tpl_vars['Application660']; ?></a>
												<?php echo date("F j, Y, g:i a",strtotime($comment_info['create_date']));?>
											</div>
										</div>
                                    	<div class="wall-img w490">
                                       <?php echo $comment_info['comment_discription'];?>
                                    	</div>
										
									</div>
									
									
						</div>				
								     
				<?php		
					}
				}
				// Display all images from selected boards
				else { 
				
					
					$image_query_new = "SELECT image_id,image_type,image_name,u.user_id,0 flag FROM pin_images p JOIN boards b ON p.board_id = b.board_id";
					$image_query_new .= " JOIN phps_users u ON u.user_id = b.user_id";
					$image_query_new .= " WHERE p.board_id='".$_GET['_picbid']."' ";
					
					$image_query_new .= "Union SELECT p.image_id,p.image_type,p.image_name,u.user_id,repin_id as flag FROM repin_images r JOIN pin_images p ON r.original_image_id = p.image_id";
					$image_query_new .= " JOIN boards b ON p.board_id = b.board_id";
					$image_query_new .= " JOIN phps_users u ON u.user_id = b.user_id";
					$image_query_new .= " WHERE r.board_id='".$_GET['_picbid']."'";
					
				
					$image_query = $database->database_query($image_query_new); 
						while ($image_info = $database->database_fetch_assoc($image_query)) {
							$flag = 1;
							$dest = $url->url_userTRdir($image_info['user_id']);
							$user2 = $image_info['user_id'];
							$image_path = $dest.$this->user_info[user_id].$image_info[image_id].'.'.$image_info[image_type];
							
							$repin_user_query = "Select user_username from phps_users where user_id = '".$image_info['user_id']."'";
							$repin_user_info = $database->database_fetch_assoc($database->database_query($repin_user_query));
							$user_name = substr($repin_user_info['user_username'],0,7).'..';

							if ($image_info['flag'] <> 0){							
									$pin_info = 'Pinned from '.$user_name;}
							else{
									$pin_info = 'Uploaded by '.$user_name;}		
								
							echo '<div class="gallery"><div class="thumb shadow" style="height:150px">
									<div>
									<a href="myboard.php?_picbid='.$_GET['_picbid'].'&_picimgid='.$image_info[image_id].'&_picorgimgid='.$image_info['flag'].'" 
										class="albumpix" rel="albumpix">
									  <img src="'.$image_path.'" width="150" HEIGHT="110" alt="" />
									</a>
									</div>  										
								<a href="myboard.php?_picbid='.$_GET['_picbid'].'&_picimgid='.$image_info[image_id].'&_picorgimgid='.$image_info['flag'].'">
									<span class="caption">'.$image_info[image_name].'</span>
								</a>
									<div style="color:#F0F0F0;margin-top:3px"><span class="caption" >'.$pin_info.'</span></div>
								  </div></div>';
						} 	

						$add_pin = "SELECT board_id FROM boards WHERE board_id='".$_GET['_picbid']."' AND user_id = '".$user->user_info[user_id]."'";					
						$board_check = $database->database_num_rows($database->database_query($add_pin));
						
						if ($board_check == 1){
						// Add a image box
							echo '<div class="gallery"><div class="thumb shadow" style="height:150px">
									<div>
									<a class="fancybox fancybox.iframe" href="addimage.php?_bid='.$_GET['_picbid'].'" class="albumpix" rel="albumpix">
									  <img src="images/addapin.jpg" width="150" HEIGHT="150" alt="" />
									</a>
									</div>  										
								  </div></div>';
				}	   }
	
		   }
		   // Follow stream display
		   elseif(isset($_GET['_nfollows']) && !empty($_GET['_nfollows'])){
		   
		   				$follow_query  =  "SELECT f.board_id, b.board_name from follow_stream f ";		   				
						$follow_query .=  " JOIN boards b ON f.board_id = b.board_id AND f.user_id = '".$user->user_info[user_id]."'";
		   
						$follow_query_excute = $database->database_query($follow_query); 
						while($follow_info = $database->database_fetch_assoc($follow_query_excute)){
						
						$image_query = $database->database_query("SELECT image_id,image_type,user_id FROM pin_images p JOIN boards b ON p.board_id = b.board_id WHERE p.board_id='".$follow_info[board_id]."' ORDER BY RAND() LIMIT 1"); 
						
						$image_info = $database->database_fetch_assoc($image_query);
		
						if ($image_info[image_id] ==''){
							$image_path = "images/noimage.jpg";
						}else{
							$dest = $url->url_userTRdir($image_info[user_id]);
							$image_path = $dest.$this->user_info[user_id].$image_info[image_id].'.'.$image_info[image_type];
						}
				   echo '
				   <div class="gallery" >
						<div class="thumb-album shadow" style="height:150px;">
							<div>
								<a href="myboard.php?_picbid='.$follow_info[board_id].'">
									 <img src="'.$image_path.'" width="150" HEIGHT="110" alt="" />
								</a>	
							</div>
												
								<a href="myboard.php?_picbid='.$follow_info[board_id].'">
									<span class="caption"><b>'.$follow_info[board_name].'</b></span>
								</a><br><br>
									
											
						</div>
					</div>  <!--gallery end -->						
						';
						}//while end
		   
					
					}	
			// Default boards display		
		   else{
		   
		   foreach( $this->_tpl_vars['board_id'] as $id){
				$boardname_query = $database->database_query("SELECT board_name FROM boards WHERE board_id='".$id."'"); 
				$boardname_info = $database->database_fetch_assoc($boardname_query);
				
				$display_img_query  = "SELECT image_id,image_type,b.user_id FROM pin_images p JOIN boards b ";
				$display_img_query .= "ON p.board_id = b.board_id and p.board_id='".$id."' ";
				
				$display_img_query .=  "Union SELECT r.original_image_id, p.image_type, b.user_id FROM repin_images r JOIN pin_images p ON r.original_image_id = p.image_id ";
				$display_img_query .=  "JOIN boards b ON p.board_id = b.board_id and r.board_id='".$id."' ORDER BY RAND() LIMIT 1";
				
				$image_query = $database->database_query($display_img_query); 
				
				$image_info = $database->database_fetch_assoc($image_query);

				if ($image_info[image_id] ==''){
					$image_path = "images/noimage.jpg";
				}else{
					$dest = $url->url_userTRdir($image_info['user_id']);
					$image_path = $dest.$image_info[image_id].'.'.$image_info[image_type];
				}
		   echo '
		   <div class="gallery" >
				<div class="thumb-album shadow" style="height:170px;">
					<div>
						<a href="myboard.php?_picbid='.$id.'">
							 <img src="'.$image_path.'" width="150" HEIGHT="110" alt="" />
	 				    </a>	
					</div>
										
						<a href="myboard.php?_picbid='.$id.'">
							<span class="caption"><b>'.$boardname_info[board_name].'</b></span>
						</a><br><br>
						
						<a class="fancybox fancybox.iframe" href="alter.php?editboard_id='.$id.'&board_name='.$boardname_info[board_name].'&path='.$dest.'" style="text-decoration:none;">
						<div style="border:2px solid #a1a1a1;padding:5px 40px; background:#dddddd;width:65px;">	  
						Edit Board</div>
						</a>

									
				</div>
			</div>  <!--gallery end -->
			';
            
			}
			// Add a board box
					echo '<div class="gallery"><div class="thumb shadow" style="height:170px;">
							<div>
							<a class="fancybox fancybox.iframe" href="addboard.php" class="albumpix" rel="albumpix">
							  <img src="images/addaboard.jpg" width="150" HEIGHT="170" alt="" />
							</a>
							</div>  										
						  </div></div>';
					  
			
			}
		   ?>
        </div>

    </div>
	

 

	
</div>
<div id="sidebar">
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'MenuSidebar.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</div>



<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'Footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
 
