<?php /* Smarty version 2.6.14, created on 2013-11-09 19:58:59
         compiled from Profile.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'truncate', 'Profile.tpl', 129, false),array('modifier', 'choptext', 'Profile.tpl', 171, false),array('modifier', 'count', 'Profile.tpl', 242, false),)), $this); ?>
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

<?php echo '

	<link rel="stylesheet" type="text/css" href="style/folio-gallery.css" />
<script type=\'text/javascript\'>
<!--
var comment_changed = 0;
var first_comment = 1;
var last_comment = ';  if ($this->_tpl_vars['comments'][0]['comment_id']):  echo $this->_tpl_vars['comments'][0]['comment_id'];  else: ?>0<?php endif;  echo ';
var next_comment = last_comment+1;
var total_comments = ';  echo $this->_tpl_vars['total_comments'];  echo ';

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

function checkText() {
  if(comment_changed == 0) { 
    var commentBody = document.getElementById(\'comment_body\');
    commentBody.value=\'\'; 
  }
  var commentSubmit = document.getElementById(\'comment_submit\');
  commentSubmit.value = \'';  echo $this->_tpl_vars['Application231'];  echo '\';
  commentSubmit.disabled = true;
  
}

function deleteComment(id) {
  document.getElementById("comment_" + id).style.display = "none";
  $.ajax({
    type: "GET",
    url: "UserEditprofileComments.php?comment_id=" + id,
    dataType: "script"
  });  
}

function addComment(is_error, comment_body, comment_date, comment_id) {
  if(is_error == 1) {
    var commentError = document.getElementById(\'comment_error\');
    commentError.style.display = \'block\';
    if(comment_body == \'\') {
      commentError.innerHTML = \'';  echo $this->_tpl_vars['Application232'];  echo '\';
    } else {
      commentError.innerHTML = \'';  echo $this->_tpl_vars['Application233'];  echo '\';
    }
    var commentSubmit = document.getElementById(\'comment_submit\');
    commentSubmit.value = \'';  echo $this->_tpl_vars['Application234'];  echo '\';
    commentSubmit.disabled = false;
  } else {
    var commentError = document.getElementById(\'comment_error\');
    commentError.style.display = \'none\';
    commentError.innerHTML = \'\';

    var commentBody = document.getElementById(\'comment_body\');
    commentBody.value = \'\';
    addText(commentBody);

    var commentSubmit = document.getElementById(\'comment_submit\');
    commentSubmit.value = \'';  echo $this->_tpl_vars['Application234'];  echo '\';
    commentSubmit.disabled = false;

    if(document.getElementById(\'comment_secure\')) {
      var commentSecure = document.getElementById(\'comment_secure\');
      commentSecure.value=\'\'
      var secureImage = document.getElementById(\'secure_image\');
      secureImage.src = secureImage.src + \'?\' + (new Date()).getTime();
    }

    total_comments++;
    var totalComments = document.getElementById(\'total_comments\');
    totalComments.innerHTML = total_comments;

    if(total_comments > 10) {
      var oldComment = document.getElementById(\'comment_\'+first_comment);
      if(oldComment) { oldComment.style.display = \'none\'; first_comment++; }
    }

    var newComment = document.createElement(\'div\');
    var divIdName = \'comment_\'+comment_id;
    newComment.setAttribute(\'id\',divIdName);

    var newTable = "<div class=\'row post\'><div class=\'w80 fleft\'>";
    '; ?>

      <?php if ($this->_tpl_vars['user']->user_info['user_id'] != 0): ?>
        newTable += "<a href='<?php echo $this->_tpl_vars['url']->url_create('profile',$this->_tpl_vars['user']->user_info['user_username']); ?>
'><img src='<?php echo $this->_tpl_vars['user']->user_photo('./images/nophoto.gif'); ?>
' class='photo' border='0' width='<?php echo $this->_tpl_vars['misc']->photo_size($this->_tpl_vars['user']->user_photo('./images/nophoto.gif'),'75','75','w'); ?>
'></a>";
      <?php else: ?>
        newTable += "<img src='./images/nophoto.gif' class='photo' border='0' width='75'>";
      <?php endif; ?>
      newTable += "</div><div class='fright w490'><div class='grey w490 mb10'><div class='f-right'>2 <?php echo $this->_tpl_vars['Application22']; ?>
</div><a href='<?php echo $this->_tpl_vars['url']->url_create('profile',$this->_tpl_vars['user']->user_info['user_username']); ?>
'><?php echo $this->_tpl_vars['user']->user_info['user_username']; ?>
</a><?php if ($this->_tpl_vars['user']->user_info['user_id'] == $this->_tpl_vars['owner']->user_info['user_id']): ?>&nbsp;<a style='margin-left: 250px' href='javascript:deleteComment(" + comment_id + ")'><?php echo $this->_tpl_vars['Application660']; ?>
</a><?php endif;  echo '</div><div class=\'wall-img w490\'>" + comment_body + "</div></div></div>";
    newComment.innerHTML = newTable;
    var profileComments = document.getElementById(\'profile_comments\');
    var prevComment = document.getElementById(\'comment_\'+last_comment);
    profileComments.insertBefore(newComment, prevComment);
    last_comment = comment_id;
    document.getElementById(\'comment_form\').reset();
  }
}


//-->
</script>
'; ?>



            <div id="content">
		<div class="block-top"><span></span></div>
				
				
                <div class="pfl">				
                    <?php if ($this->_tpl_vars['owner']->user_info['user_username'] != $this->_tpl_vars['user']->user_info['user_username']): ?>
                    <br/><img width="174px" src='<?php echo $this->_tpl_vars['owner']->user_photo("./images/nophoto.gif"); ?>
' class="img"/>
                    <?php if (( $this->_tpl_vars['total_friends'] != 0 ) || ( $this->_tpl_vars['friendship_allowed'] != 0 && $this->_tpl_vars['user']->user_exists != 0 ) || ( $this->_tpl_vars['user']->level_info['level_message_allow'] == 2 || ( ( $this->_tpl_vars['user']->level_info['level_message_allow'] == 1 && $this->_tpl_vars['is_friend'] ) ) && ( $this->_tpl_vars['owner']->level_info['level_message_allow'] == 2 || ( $this->_tpl_vars['owner']->level_info['level_message_allow'] == 1 && $this->_tpl_vars['is_friend'] ) ) ) || ( $this->_tpl_vars['user']->level_info['level_profile_block'] != 0 )): ?>
                    <br/><br/>
                    <div class="block">
                        <div class="block-top"><span></span></div>
                        <ul>
                            <?php if ($this->_tpl_vars['total_friends'] != 0): ?><li<?php if (( ! ( ( $this->_tpl_vars['user']->level_info['level_message_allow'] == 2 || ( $this->_tpl_vars['user']->level_info['level_message_allow'] == 1 && $this->_tpl_vars['is_friend'] ) ) && ( $this->_tpl_vars['owner']->level_info['level_message_allow'] == 2 || ( $this->_tpl_vars['owner']->level_info['level_message_allow'] == 1 && $this->_tpl_vars['is_friend'] ) ) ) && $this->_tpl_vars['user']->level_info['level_profile_block'] == 0 && ( ! ( $this->_tpl_vars['friendship_allowed'] != 0 && $this->_tpl_vars['user']->user_exists != 0 ) ) )): ?> class="last-li"<?php endif; ?>><a href='ProfileFriends.php?user=<?php echo $this->_tpl_vars['owner']->user_info['user_username']; ?>
'><?php echo $this->_tpl_vars['Application199']; ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['owner']->user_info['user_username'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 10, "...", true) : smarty_modifier_truncate($_tmp, 10, "...", true));  echo $this->_tpl_vars['Application200']; ?>
</a></li><?php endif; ?>
                            <?php if ($this->_tpl_vars['friendship_allowed'] != 0 && $this->_tpl_vars['user']->user_exists != 0): ?>
                              <?php if ($this->_tpl_vars['is_friend'] == TRUE): ?>
                                <li<?php if (( ! ( ( $this->_tpl_vars['user']->level_info['level_message_allow'] == 2 || ( $this->_tpl_vars['user']->level_info['level_message_allow'] == 1 && $this->_tpl_vars['is_friend'] ) ) && ( $this->_tpl_vars['owner']->level_info['level_message_allow'] == 2 || ( $this->_tpl_vars['owner']->level_info['level_message_allow'] == 1 && $this->_tpl_vars['is_friend'] ) ) ) && $this->_tpl_vars['user']->level_info['level_profile_block'] == 0 )): ?> class="last-li"<?php endif; ?>><a href='UserFriendsConfirm.php?task=remove&user=<?php echo $this->_tpl_vars['owner']->user_info['user_username']; ?>
&return_url=<?php echo $this->_tpl_vars['url']->url_create('profile',$this->_tpl_vars['owner']->user_info['user_username']); ?>
'><?php echo $this->_tpl_vars['Application227']; ?>
</a></li>
                              <?php else: ?>
                                <li<?php if (( ! ( ( $this->_tpl_vars['user']->level_info['level_message_allow'] == 2 || ( $this->_tpl_vars['user']->level_info['level_message_allow'] == 1 && $this->_tpl_vars['is_friend'] ) ) && ( $this->_tpl_vars['owner']->level_info['level_message_allow'] == 2 || ( $this->_tpl_vars['owner']->level_info['level_message_allow'] == 1 && $this->_tpl_vars['is_friend'] ) ) ) && $this->_tpl_vars['user']->level_info['level_profile_block'] == 0 )): ?> class="last-li"<?php endif; ?>><a href='UserFriendsAdd.php?user=<?php echo $this->_tpl_vars['owner']->user_info['user_username']; ?>
'><?php echo $this->_tpl_vars['Application201']; ?>
</a></li>
                              <?php endif; ?>
                            <?php endif; ?>
                            <?php if (( $this->_tpl_vars['user']->level_info['level_message_allow'] == 2 || ( $this->_tpl_vars['user']->level_info['level_message_allow'] == 1 && $this->_tpl_vars['is_friend'] ) ) && ( $this->_tpl_vars['owner']->level_info['level_message_allow'] == 2 || ( $this->_tpl_vars['owner']->level_info['level_message_allow'] == 1 && $this->_tpl_vars['is_friend'] ) )): ?>
                              
                            <?php endif; ?>
                            <?php if ($this->_tpl_vars['user']->level_info['level_profile_block'] != 0): ?>
                              <?php if ($this->_tpl_vars['user']->user_blocked($this->_tpl_vars['owner']->user_info['user_id']) == TRUE): ?>
                                <li class="last-li"><a href='UserFriendsBlock.php?task=unblock&user=<?php echo $this->_tpl_vars['owner']->user_info['user_username']; ?>
'><?php echo $this->_tpl_vars['Application228']; ?>
</a></li>
                              <?php else: ?>
                                <li class="last-li"><a href='UserFriendsBlock.php?task=block&user=<?php echo $this->_tpl_vars['owner']->user_info['user_username']; ?>
'><?php echo $this->_tpl_vars['Application204']; ?>
</a></li>
                              <?php endif; ?>
                            <?php endif; ?>
                        </ul>  
                        <div class="block-bot"><span></span></div>
                    </div>
                    <?php endif; ?>
                    <?php else: ?>
                    <br/>
                    <div style="position: relative; overflow: visible">
                        <img width="174px" src='<?php echo $this->_tpl_vars['user']->user_photo("./images/nophoto.gif"); ?>
' class="img"/>
                        <?php if ($this->_tpl_vars['user']->user_photo("") == ""): ?>
                        <a style="position: absolute; top: 120px; left: 65px;" href="./UserEditprofilePhoto.php">Set Avatar</a>
                        <?php endif; ?>
                    </div>
                    <br/><br/>
                    <?php endif; ?>
                </div>
				
				<h3 class="stat w385">
				    <?php if ($this->_tpl_vars['user']->user_info['user_id'] == $this->_tpl_vars['owner']->user_info['user_id']): ?><?php endif; ?>
				    <b><?php echo $this->_tpl_vars['owner']->user_info['user_username']; ?>

				    </b>&nbsp;
				    

                    <span class="status-text">
                      <?php if ( $this->_tpl_vars['owner']->user_info['user_status'] != "" && $this->_tpl_vars['owner']->user_info['user_id'] == $this->_tpl_vars['user']->user_info['user_id']): ?>
                        <?php echo ((is_array($_tmp=$this->_tpl_vars['owner']->user_info['user_status'])) ? $this->_run_mod_handler('choptext', true, $_tmp, 12, "<br>") : smarty_modifier_choptext($_tmp, 12, "<br>")); ?>

                      <?php endif; ?>
                    </span> 
				    <?php if ($this->_tpl_vars['owner']->level_info['level_profile_status'] != 0 && $this->_tpl_vars['owner']->user_info['user_status'] != "" && $this->_tpl_vars['owner']->user_info['user_id'] != $this->_tpl_vars['user']->user_info['user_id']): ?>
                    <span class="status-text2"><?php echo ((is_array($_tmp=$this->_tpl_vars['owner']->user_info['user_status'])) ? $this->_run_mod_handler('choptext', true, $_tmp, 12, "<br>") : smarty_modifier_choptext($_tmp, 12, "<br>")); ?>
</span>
                    <?php endif; ?>
				    <span class="status"><input type="text" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['owner']->user_info['user_status'])) ? $this->_run_mod_handler('choptext', true, $_tmp, 12, "<br>") : smarty_modifier_choptext($_tmp, 12, "<br>")); ?>
"/></span>
				    <input type="hidden" style="display:none" id="status_username" value="<?php echo $this->_tpl_vars['owner']->user_info['user_username']; ?>
" />
			    </h3>
			    <?php if ($this->_tpl_vars['is_private_profile']): ?>
			          <h2><?php echo $this->_tpl_vars['Application195']; ?>
</h2>
                      <?php echo $this->_tpl_vars['Application196']; ?>

                <?php else: ?>

                	<dl class="w385">
					
					<?php unset($this->_sections['tab_loop']);
$this->_sections['tab_loop']['name'] = 'tab_loop';
$this->_sections['tab_loop']['loop'] = is_array($_loop=$this->_tpl_vars['tabs']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['tab_loop']['show'] = true;
$this->_sections['tab_loop']['max'] = $this->_sections['tab_loop']['loop'];
$this->_sections['tab_loop']['step'] = 1;
$this->_sections['tab_loop']['start'] = $this->_sections['tab_loop']['step'] > 0 ? 0 : $this->_sections['tab_loop']['loop']-1;
if ($this->_sections['tab_loop']['show']) {
    $this->_sections['tab_loop']['total'] = $this->_sections['tab_loop']['loop'];
    if ($this->_sections['tab_loop']['total'] == 0)
        $this->_sections['tab_loop']['show'] = false;
} else
    $this->_sections['tab_loop']['total'] = 0;
if ($this->_sections['tab_loop']['show']):

            for ($this->_sections['tab_loop']['index'] = $this->_sections['tab_loop']['start'], $this->_sections['tab_loop']['iteration'] = 1;
                 $this->_sections['tab_loop']['iteration'] <= $this->_sections['tab_loop']['total'];
                 $this->_sections['tab_loop']['index'] += $this->_sections['tab_loop']['step'], $this->_sections['tab_loop']['iteration']++):
$this->_sections['tab_loop']['rownum'] = $this->_sections['tab_loop']['iteration'];
$this->_sections['tab_loop']['index_prev'] = $this->_sections['tab_loop']['index'] - $this->_sections['tab_loop']['step'];
$this->_sections['tab_loop']['index_next'] = $this->_sections['tab_loop']['index'] + $this->_sections['tab_loop']['step'];
$this->_sections['tab_loop']['first']      = ($this->_sections['tab_loop']['iteration'] == 1);
$this->_sections['tab_loop']['last']       = ($this->_sections['tab_loop']['iteration'] == $this->_sections['tab_loop']['total']);
?>
                                
                                                                        <?php unset($this->_sections['field_loop']);
$this->_sections['field_loop']['name'] = 'field_loop';
$this->_sections['field_loop']['loop'] = is_array($_loop=$this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['fields']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['field_loop']['show'] = true;
$this->_sections['field_loop']['max'] = $this->_sections['field_loop']['loop'];
$this->_sections['field_loop']['step'] = 1;
$this->_sections['field_loop']['start'] = $this->_sections['field_loop']['step'] > 0 ? 0 : $this->_sections['field_loop']['loop']-1;
if ($this->_sections['field_loop']['show']) {
    $this->_sections['field_loop']['total'] = $this->_sections['field_loop']['loop'];
    if ($this->_sections['field_loop']['total'] == 0)
        $this->_sections['field_loop']['show'] = false;
} else
    $this->_sections['field_loop']['total'] = 0;
if ($this->_sections['field_loop']['show']):

            for ($this->_sections['field_loop']['index'] = $this->_sections['field_loop']['start'], $this->_sections['field_loop']['iteration'] = 1;
                 $this->_sections['field_loop']['iteration'] <= $this->_sections['field_loop']['total'];
                 $this->_sections['field_loop']['index'] += $this->_sections['field_loop']['step'], $this->_sections['field_loop']['iteration']++):
$this->_sections['field_loop']['rownum'] = $this->_sections['field_loop']['iteration'];
$this->_sections['field_loop']['index_prev'] = $this->_sections['field_loop']['index'] - $this->_sections['field_loop']['step'];
$this->_sections['field_loop']['index_next'] = $this->_sections['field_loop']['index'] + $this->_sections['field_loop']['step'];
$this->_sections['field_loop']['first']      = ($this->_sections['field_loop']['iteration'] == 1);
$this->_sections['field_loop']['last']       = ($this->_sections['field_loop']['iteration'] == $this->_sections['field_loop']['total']);
?>
                <? // Field Name ?>
		<dt><?php echo $this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_title']; ?>:</dt>
                                    <dd style="width: 250px !important">
                                        <div class="field-case">
                                                                                        <?php if ($this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_type'] == 1): ?>
                                            <input type='text' class='text' name='field_<?php echo $this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_id']; ?>
' value='<?php echo $this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_value']; ?>
' style='<?php echo $this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_style']; ?>
' maxlength='<?php echo $this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_maxlength']; ?>
'/>
                        
                                                                                        <?php elseif ($this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_type'] == 2): ?>
                                            <textarea rows='6' cols='50' name='field_<?php echo $this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_id']; ?>
' style='<?php echo $this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_style']; ?>
'><?php echo $this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_value']; ?>
</textarea>
                                            <div class='form_desc'><?php echo $this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_desc']; ?>
</div>
                        
                                                                                        <?php elseif ($this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_type'] == 3): ?>
                                            <select name='field_<?php echo $this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_id']; ?>
' id='field_<?php echo $this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_id']; ?>
' onchange="ShowHideSelectDeps(<?php echo $this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_id']; ?>
)" style='<?php echo $this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_style']; ?>
'>
                                                <option value='-1'></option>
                                                                                                <?php unset($this->_sections['option_loop']);
$this->_sections['option_loop']['name'] = 'option_loop';
$this->_sections['option_loop']['loop'] = is_array($_loop=$this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_options']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['option_loop']['show'] = true;
$this->_sections['option_loop']['max'] = $this->_sections['option_loop']['loop'];
$this->_sections['option_loop']['step'] = 1;
$this->_sections['option_loop']['start'] = $this->_sections['option_loop']['step'] > 0 ? 0 : $this->_sections['option_loop']['loop']-1;
if ($this->_sections['option_loop']['show']) {
    $this->_sections['option_loop']['total'] = $this->_sections['option_loop']['loop'];
    if ($this->_sections['option_loop']['total'] == 0)
        $this->_sections['option_loop']['show'] = false;
} else
    $this->_sections['option_loop']['total'] = 0;
if ($this->_sections['option_loop']['show']):

            for ($this->_sections['option_loop']['index'] = $this->_sections['option_loop']['start'], $this->_sections['option_loop']['iteration'] = 1;
                 $this->_sections['option_loop']['iteration'] <= $this->_sections['option_loop']['total'];
                 $this->_sections['option_loop']['index'] += $this->_sections['option_loop']['step'], $this->_sections['option_loop']['iteration']++):
$this->_sections['option_loop']['rownum'] = $this->_sections['option_loop']['iteration'];
$this->_sections['option_loop']['index_prev'] = $this->_sections['option_loop']['index'] - $this->_sections['option_loop']['step'];
$this->_sections['option_loop']['index_next'] = $this->_sections['option_loop']['index'] + $this->_sections['option_loop']['step'];
$this->_sections['option_loop']['first']      = ($this->_sections['option_loop']['iteration'] == 1);
$this->_sections['option_loop']['last']       = ($this->_sections['option_loop']['iteration'] == $this->_sections['option_loop']['total']);
?>
                                                <option id='op' value='<?php echo $this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_options'][$this->_sections['option_loop']['index']]['option_id']; ?>
'<?php if ($this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_options'][$this->_sections['option_loop']['index']]['option_id'] == $this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_value']): ?> SELECTED<?php endif; ?>><?php echo $this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_options'][$this->_sections['option_loop']['index']]['option_label']; ?>
</option>
                                                <?php endfor; endif; ?>
                                            </select>
                        
                                                                    
                                                                                        <?php elseif ($this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_type'] == 4): ?>
                        
                                                                                        <?php unset($this->_sections['option_loop']);
$this->_sections['option_loop']['name'] = 'option_loop';
$this->_sections['option_loop']['loop'] = is_array($_loop=$this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_options']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['option_loop']['show'] = true;
$this->_sections['option_loop']['max'] = $this->_sections['option_loop']['loop'];
$this->_sections['option_loop']['step'] = 1;
$this->_sections['option_loop']['start'] = $this->_sections['option_loop']['step'] > 0 ? 0 : $this->_sections['option_loop']['loop']-1;
if ($this->_sections['option_loop']['show']) {
    $this->_sections['option_loop']['total'] = $this->_sections['option_loop']['loop'];
    if ($this->_sections['option_loop']['total'] == 0)
        $this->_sections['option_loop']['show'] = false;
} else
    $this->_sections['option_loop']['total'] = 0;
if ($this->_sections['option_loop']['show']):

            for ($this->_sections['option_loop']['index'] = $this->_sections['option_loop']['start'], $this->_sections['option_loop']['iteration'] = 1;
                 $this->_sections['option_loop']['iteration'] <= $this->_sections['option_loop']['total'];
                 $this->_sections['option_loop']['index'] += $this->_sections['option_loop']['step'], $this->_sections['option_loop']['iteration']++):
$this->_sections['option_loop']['rownum'] = $this->_sections['option_loop']['iteration'];
$this->_sections['option_loop']['index_prev'] = $this->_sections['option_loop']['index'] - $this->_sections['option_loop']['step'];
$this->_sections['option_loop']['index_next'] = $this->_sections['option_loop']['index'] + $this->_sections['option_loop']['step'];
$this->_sections['option_loop']['first']      = ($this->_sections['option_loop']['iteration'] == 1);
$this->_sections['option_loop']['last']       = ($this->_sections['option_loop']['iteration'] == $this->_sections['option_loop']['total']);
?>
                        
                                            <div >
                                                <input type='radio' class='radio' onclick="ShowHideRadioDeps(<?php echo $this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_id']; ?>
, <?php echo $this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_options'][$this->_sections['option_loop']['index']]['option_id']; ?>
, 'field_<?php echo $this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_options'][$this->_sections['option_loop']['index']]['dep_field_id']; ?>
', <?php echo count($this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_options']); ?>
)" style='<?php echo $this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_style']; ?>
' name='field_<?php echo $this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_id']; ?>
' id='label_<?php echo $this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_id']; ?>
_<?php echo $this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_options'][$this->_sections['option_loop']['index']]['option_id']; ?>
' value='<?php echo $this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_options'][$this->_sections['option_loop']['index']]['option_id']; ?>
'<?php if ($this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_options'][$this->_sections['option_loop']['index']]['option_id'] == $this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_value']): ?> CHECKED<?php endif; ?>>
                                                       <label id="field_<?php echo $this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_id']; ?>
_label_<?php echo $this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_options'][$this->_sections['option_loop']['index']]['option_id']; ?>
" for='label_<?php echo $this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_id']; ?>
_<?php echo $this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_options'][$this->_sections['option_loop']['index']]['option_id']; ?>
'><?php echo $this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_options'][$this->_sections['option_loop']['index']]['option_label']; ?>
</label>
                        
                                                                        
                                            </div>
                                            <?php endfor; endif; ?>
                        
                        
                                                                                        <?php elseif ($this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_type'] == 5): ?>
                                            <input type='text' class='text' name='field_<?php echo $this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_id']; ?>
' value='<?php echo $this->_tpl_vars['datetime']->cdate(($this->_tpl_vars['setting']['setting_dateformat']),$this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_value']); ?>
' style='<?php echo $this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_style']; ?>
' maxlength='<?php echo $this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_maxlength']; ?>
'/>

                                            <?php endif; ?>    
                                                                                    
                                            <!-- input type="text" name="profilevalue_<?php echo $this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_id']; ?>
" value="<?php echo $this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_value']; ?>
" -->
                                        </div>
                                        <div id="<?php echo $this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_id']; ?>
" class="field-val"><?php echo $this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_value_profile']; ?>

                                        <?php if ($this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_birthday'] == 1): ?> 
										(<?php echo $this->_tpl_vars['datetime']->age($this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_value']); ?>  <?php echo $this->_tpl_vars['Application224'].''; ?>)<?php endif; ?></div>
                                    </dd>
                                    <?php endfor; endif; ?>
                               
                                <?php endfor; endif; ?>
					
					
                        <?php if ($this->_tpl_vars['setting']['setting_connection_allow'] != 0): ?><dt><?php echo $this->_tpl_vars['Application210']; ?>
</dt><dd style="width: 250px !important"><?php echo $this->_tpl_vars['total_friends']; ?>
 <?php echo $this->_tpl_vars['Application211']; ?>
</dd><?php endif; ?>
                        <?php if ($this->_tpl_vars['owner']->user_info['user_dateupdated'] != ""): ?><dt><?php echo $this->_tpl_vars['Application214']; ?>
</dt><dd style="width: 250px !important"><?php echo $this->_tpl_vars['datetime']->time_since($this->_tpl_vars['owner']->user_info['user_dateupdated']); ?>
</dd><?php endif; ?>
                        <?php if ($this->_tpl_vars['owner']->user_info['user_signupdate'] != ""): ?><dt><?php echo $this->_tpl_vars['Application215']; ?>
</dt><dd style="width: 250px !important"><?php echo $this->_tpl_vars['datetime']->cdate(($this->_tpl_vars['setting']['setting_dateformat']),$this->_tpl_vars['datetime']->timezone(($this->_tpl_vars['owner']->user_info['user_signupdate']),$this->_tpl_vars['global_timezone'])); ?>
</dd><?php endif; ?>
                    </dl>
                    
                    <ul class="accordion">
					
                         <li class="active">
												
							<a href="#" class="opener active"><h2> <?php echo $this->_tpl_vars['Application225']; ?>
 							(<span id='total_comments'><?php echo $this->_tpl_vars['board_count']; ?></span>)</h2>
							</a>
							
                            <div class="slide" style="padding:15px; width: 640px">
                                
							<?php
								   foreach( $this->_tpl_vars['board_id'] as $id){
										$boardname_query = $database->database_query("SELECT board_name FROM boards WHERE board_id='".$id."'"); 
										$boardname_info = $database->database_fetch_assoc($boardname_query);
										
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
								   <div class="gallery">
										<div class="thumb-album shadow">
											<div>
												<a href="myboard.php?_picbid='.$id.'">
													 <img src="'.$image_path.'" width="150" HEIGHT="105" alt="" />
												</a>	
											</div>
																
												<a href="myboard.php?_picbid='.$id.'">
													<span class="caption">'.$boardname_info[board_name].'</span>
												</a>
															
										</div>
									</div>  <!--gallery end -->
									';
									
									}										  

                               ?>

                         <?php endif; ?>
                        </div>
                    </li>
                	
				
				</ul>
				
			<div class="block-bot"><span></span></div>
            </div>
            
            <div id="sidebar">
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'MenuSidebar.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

                                <?php if ($this->_tpl_vars['total_friends'] != 0): ?>
                <div class="block">
                        <ul class="accordion">
                            <li class="form-top active"><a href="#" class="opener active"><?php echo $this->_tpl_vars['Application222']; ?>
 (<?php echo $this->_tpl_vars['total_friends']; ?>
)</a>
                            	<div class="slide">
                                	<div class="row-blue blue"><a href="ProfileFriends.php?user=<?php echo $this->_tpl_vars['owner']->user_info['user_username']; ?>
" class="f-right"><?php echo $this->_tpl_vars['Application217']; ?>
 <?php echo $this->_tpl_vars['Application211']; ?>
</a></div>
                                    <?php unset($this->_sections['friend_loop']);
$this->_sections['friend_loop']['name'] = 'friend_loop';
$this->_sections['friend_loop']['loop'] = is_array($_loop=$this->_tpl_vars['friends']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['friend_loop']['show'] = true;
$this->_sections['friend_loop']['max'] = $this->_sections['friend_loop']['loop'];
$this->_sections['friend_loop']['step'] = 1;
$this->_sections['friend_loop']['start'] = $this->_sections['friend_loop']['step'] > 0 ? 0 : $this->_sections['friend_loop']['loop']-1;
if ($this->_sections['friend_loop']['show']) {
    $this->_sections['friend_loop']['total'] = $this->_sections['friend_loop']['loop'];
    if ($this->_sections['friend_loop']['total'] == 0)
        $this->_sections['friend_loop']['show'] = false;
} else
    $this->_sections['friend_loop']['total'] = 0;
if ($this->_sections['friend_loop']['show']):

            for ($this->_sections['friend_loop']['index'] = $this->_sections['friend_loop']['start'], $this->_sections['friend_loop']['iteration'] = 1;
                 $this->_sections['friend_loop']['iteration'] <= $this->_sections['friend_loop']['total'];
                 $this->_sections['friend_loop']['index'] += $this->_sections['friend_loop']['step'], $this->_sections['friend_loop']['iteration']++):
$this->_sections['friend_loop']['rownum'] = $this->_sections['friend_loop']['iteration'];
$this->_sections['friend_loop']['index_prev'] = $this->_sections['friend_loop']['index'] - $this->_sections['friend_loop']['step'];
$this->_sections['friend_loop']['index_next'] = $this->_sections['friend_loop']['index'] + $this->_sections['friend_loop']['step'];
$this->_sections['friend_loop']['first']      = ($this->_sections['friend_loop']['iteration'] == 1);
$this->_sections['friend_loop']['last']       = ($this->_sections['friend_loop']['iteration'] == $this->_sections['friend_loop']['total']);
?>
                                	<div class="user"><a href='<?php echo $this->_tpl_vars['url']->url_create('profile',$this->_tpl_vars['friends'][$this->_sections['friend_loop']['index']]->user_info['user_username']); ?>
'><img src='<?php echo $this->_tpl_vars['friends'][$this->_sections['friend_loop']['index']]->user_photo('./images/nophoto.gif'); ?>
' class='photo' border='0' width='<?php echo $this->_tpl_vars['misc']->photo_size($this->_tpl_vars['friends'][$this->_sections['friend_loop']['index']]->user_photo('./images/nophoto.gif'),'75','75','w'); ?>
'><br><?php echo $this->_tpl_vars['friends'][$this->_sections['friend_loop']['index']]->user_info['user_username']; ?>
</a></div>
                                    <?php endfor; endif; ?>
                                <div class="block-bot"><span></span></div>
                                </div>
                            </li>
                        </ul>
				</div>
                <?php endif; ?>
                
                                <?php unset($this->_sections['profile_loop']);
$this->_sections['profile_loop']['name'] = 'profile_loop';
$this->_sections['profile_loop']['loop'] = is_array($_loop=$this->_tpl_vars['global_plugins']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['profile_loop']['show'] = true;
$this->_sections['profile_loop']['max'] = $this->_sections['profile_loop']['loop'];
$this->_sections['profile_loop']['step'] = 1;
$this->_sections['profile_loop']['start'] = $this->_sections['profile_loop']['step'] > 0 ? 0 : $this->_sections['profile_loop']['loop']-1;
if ($this->_sections['profile_loop']['show']) {
    $this->_sections['profile_loop']['total'] = $this->_sections['profile_loop']['loop'];
    if ($this->_sections['profile_loop']['total'] == 0)
        $this->_sections['profile_loop']['show'] = false;
} else
    $this->_sections['profile_loop']['total'] = 0;
if ($this->_sections['profile_loop']['show']):

            for ($this->_sections['profile_loop']['index'] = $this->_sections['profile_loop']['start'], $this->_sections['profile_loop']['iteration'] = 1;
                 $this->_sections['profile_loop']['iteration'] <= $this->_sections['profile_loop']['total'];
                 $this->_sections['profile_loop']['index'] += $this->_sections['profile_loop']['step'], $this->_sections['profile_loop']['iteration']++):
$this->_sections['profile_loop']['rownum'] = $this->_sections['profile_loop']['iteration'];
$this->_sections['profile_loop']['index_prev'] = $this->_sections['profile_loop']['index'] - $this->_sections['profile_loop']['step'];
$this->_sections['profile_loop']['index_next'] = $this->_sections['profile_loop']['index'] + $this->_sections['profile_loop']['step'];
$this->_sections['profile_loop']['first']      = ($this->_sections['profile_loop']['iteration'] == 1);
$this->_sections['profile_loop']['last']       = ($this->_sections['profile_loop']['iteration'] == $this->_sections['profile_loop']['total']);
 $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../plugins/".($this->_tpl_vars['global_plugins'][$this->_sections['profile_loop']['index']])."/templates/Profile".($this->_tpl_vars['global_plugins'][$this->_sections['profile_loop']['index']]).".tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  endfor; endif; ?>

			</div>
<?php 
$_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'Footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>