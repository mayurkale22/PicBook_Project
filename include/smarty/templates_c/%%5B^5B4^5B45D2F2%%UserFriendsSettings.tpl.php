<?php /* Smarty version 2.6.14, created on 2013-11-09 02:18:24
         compiled from UserFriendsSettings.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'Header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="content">
    <div class="grey-head">
        <h2><?php echo $this->_tpl_vars['Application611']; ?>
</h2>
    </div>
    <div class="layers">
        <ul class="list01">
            <li <?php if ($this->_tpl_vars['uri_page'] == 'UserFriends.php'): ?>class="ui-state-active ui-tabs-selected"<?php endif; ?>><a href='UserFriends.php'><?php echo $this->_tpl_vars['Application483']; ?>
</a></li>
            <li <?php if ($this->_tpl_vars['uri_page'] == 'UserFriendsRequests.php'): ?>class="ui-state-active ui-tabs-selected"<?php endif; ?>><a href='UserFriendsRequests.php'><?php echo $this->_tpl_vars['Application484']; ?>
</a></li>
            <li <?php if ($this->_tpl_vars['uri_page'] == 'UserFriendsRequestsOutgoing.php'): ?>class="ui-state-active ui-tabs-selected"<?php endif; ?>><a href='UserFriendsRequestsOutgoing.php'><?php echo $this->_tpl_vars['Application510']; ?>
</a></li>
            <li <?php if ($this->_tpl_vars['uri_page'] == 'UserFriendsSettings.php'): ?>class="ui-state-active ui-tabs-selected"<?php endif; ?>><a href='UserFriendsSettings.php'><?php echo $this->_tpl_vars['Application509']; ?>
</a></li>
        </ul>
        <p style="padding-left:25px;"><?php echo $this->_tpl_vars['Application615']; ?>
</p>



                <?php if ($this->_tpl_vars['result'] != 0): ?>
        <br/>
        <p style="padding-left:25px; color:green;"><?php echo $this->_tpl_vars['Application613']; ?>
</p>
        <?php endif; ?>

        <div id="primary" class="info-cnt tuneddivs">
            <form action='UserFriendsSettings.php' method='post' name="set_form" class="settings">
                <p>
                   <input style="float:left; width:15px; height:15px; margin-left:15px !important; margin-right:15px !important;" type='checkbox' value='1' id='friendrequest' name='usersetting_notify_friendrequest'<?php if ($this->_tpl_vars['user']->usersetting_info['usersetting_notify_friendrequest'] == 1): ?> CHECKED<?php endif; ?> />
                   <label style="width:447px; clear:none;"><?php echo $this->_tpl_vars['Application616']; ?>
</label>
                </p>
                
                <p class="line">&nbsp;</p>
                <div class="submits">
                    <label><input type="submit" value="Save"/></label>
                    <label><input type="button" class="submit_button_uf" value="Cancel" onclick="location.href='UserFriends.php'"/></label>
                </div>
                 <input type='hidden' name='task' value='dosave'/>
            </form>
        </div>
</div>
<div class="block-bot">
    <span>&nbsp;</span>
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