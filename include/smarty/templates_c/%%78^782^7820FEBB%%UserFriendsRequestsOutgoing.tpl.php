<?php /* Smarty version 2.6.14, created on 2013-11-09 02:18:23
         compiled from UserFriendsRequestsOutgoing.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'math', 'UserFriendsRequestsOutgoing.tpl', 16, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'Header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="content">

    <div class="grey-head"><h2><?php echo $this->_tpl_vars['Application592']; ?>
</h2></div>
     <?php if ($this->_tpl_vars['total_friends'] != 0): ?>
    <div class="row-blue">
        <span>
        <a href="#">Friend Requests (<?php echo $this->_tpl_vars['total_friends']; ?>
)</a>
        </span>
    </div>
    <?php endif; ?>

        <?php if ($this->_tpl_vars['maxpage'] > 1): ?>
    <div class="wp-pagenavi blue">
        <?php if ($this->_tpl_vars['p'] != 1): ?><a href='UserFriendsRequestsOutgoing.php?p=<?php echo smarty_function_math(array('equation' => 'p-1','p' => $this->_tpl_vars['p']), $this);?>
'>&#171; <?php echo $this->_tpl_vars['Application602']; ?>
</a><?php else: ?><font class='disabled'>&#171; <?php echo $this->_tpl_vars['Application602']; ?>
</font><?php endif; ?>
        <?php if ($this->_tpl_vars['p_start'] == $this->_tpl_vars['p_end']): ?>
        &nbsp;|&nbsp; <?php echo $this->_tpl_vars['Application603']; ?>
 <?php echo $this->_tpl_vars['p_start']; ?>
 <?php echo $this->_tpl_vars['Application605']; ?>
 <?php echo $this->_tpl_vars['total_friends']; ?>
 &nbsp;|&nbsp;
        <?php else: ?>
        &nbsp;|&nbsp; <?php echo $this->_tpl_vars['Application604']; ?>
 <?php echo $this->_tpl_vars['p_start']; ?>
-<?php echo $this->_tpl_vars['p_end']; ?>
 <?php echo $this->_tpl_vars['Application605']; ?>
 <?php echo $this->_tpl_vars['total_friends']; ?>
 &nbsp;|&nbsp;
        <?php endif; ?>
        <?php if ($this->_tpl_vars['p'] != $this->_tpl_vars['maxpage']): ?><a href='UserFriendsRequestsOutgoing.php?p=<?php echo smarty_function_math(array('equation' => 'p+1','p' => $this->_tpl_vars['p']), $this);?>
'><?php echo $this->_tpl_vars['Application606']; ?>
 &#187;</a><?php else: ?><font class='disabled'><?php echo $this->_tpl_vars['Application606']; ?>
 &#187;</font><?php endif; ?>
    </div>
    <?php endif; ?>


    <div class="layers">
        <ul class="list01">
            <li <?php if ($this->_tpl_vars['uri_page'] == 'UserFriends.php'): ?>class="ui-state-active ui-tabs-selected"<?php endif; ?>><a href='UserFriends.php'><?php echo $this->_tpl_vars['Application483']; ?>
</a></li>
            <li <?php if ($this->_tpl_vars['uri_page'] == 'UserFriendsRequests.php'): ?>class="ui-state-active ui-tabs-selected"<?php endif; ?>><a href='UserFriendsRequests.php'><?php echo $this->_tpl_vars['Application484']; ?>
</a></li>
            <li <?php if ($this->_tpl_vars['uri_page'] == 'UserFriendsRequestsOutgoing.php'): ?>class="ui-state-active ui-tabs-selected"<?php endif; ?>><a href='UserFriendsRequestsOutgoing.php'><?php echo $this->_tpl_vars['Application510']; ?>
</a></li>
        </ul>


        <p style="padding-left:25px;"><?php echo $this->_tpl_vars['Application593']; ?>
</p>
        <?php if (! $this->_tpl_vars['friends']): ?><br/><br/><br/><?php endif; ?>

                <?php if ($this->_tpl_vars['total_friends'] == 0): ?>

        <div class="row" style="border:none;">
            <p style="color:red;" align="center"><?php echo $this->_tpl_vars['Application594']; ?>
</p>
        </div>

                <?php else: ?>
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
        <div class="row" <?php if ($this->_sections['friend_loop']['last']): ?>style="border:none;"<?php endif; ?>>
             <div class="f-right">
                <?php if ($this->_tpl_vars['user']->level_info['level_message_allow'] == 2): ?><a href='UserMessagesNew.php?to=<?php echo $this->_tpl_vars['friends'][$this->_sections['friend_loop']['index']]->user_info['user_username']; ?>
'><?php echo $this->_tpl_vars['Application601']; ?>
</a><?php endif; ?>
                <a href='UserFriendsConfirm.php?user=<?php echo $this->_tpl_vars['friends'][$this->_sections['friend_loop']['index']]->user_info['user_username']; ?>
&task=cancelrequest'><?php echo $this->_tpl_vars['Application600']; ?>
</a>

            </div>
            <a class="f-left" href='<?php echo $this->_tpl_vars['url']->url_create('profile',$this->_tpl_vars['friends'][$this->_sections['friend_loop']['index']]->user_info['user_username']); ?>
'><img src='<?php echo $this->_tpl_vars['friends'][$this->_sections['friend_loop']['index']]->user_photo('./images/nophoto.gif'); ?>
' class='img' width='90'  alt="<?php echo $this->_tpl_vars['friends'][$this->_sections['friend_loop']['index']]->user_info['user_username'];  echo $this->_tpl_vars['Application576']; ?>
"></a>
            <dl style="width:280px !important;">
                <dt>Name</dt>
                <dd style="width:180px !important"><a href='<?php echo $this->_tpl_vars['url']->url_create('profile',$this->_tpl_vars['friends'][$this->_sections['friend_loop']['index']]->user_info['user_username']); ?>
'><?php echo $this->_tpl_vars['friends'][$this->_sections['friend_loop']['index']]->user_info['user_username']; ?>
</a></dd>

                <dt><?php echo $this->_tpl_vars['Application576']; ?>
</dt>
                <dd style="width:180px !important"><?php echo $this->_tpl_vars['datetime']->time_since($this->_tpl_vars['friends'][$this->_sections['friend_loop']['index']]->user_info['user_dateupdated']); ?>
</dd>

                <dt><?php echo $this->_tpl_vars['Application577']; ?>
</dt>
                <dd style="width:180px !important"><?php echo $this->_tpl_vars['datetime']->time_since($this->_tpl_vars['friends'][$this->_sections['friend_loop']['index']]->user_info['user_lastlogindate']); ?>
</dd>

                <?php if ($this->_tpl_vars['friends'][$this->_sections['friend_loop']['index']]->friend_type != ""): ?>
                <dt><?php echo $this->_tpl_vars['Application597']; ?>
</dt>
                <dd style="width:180px !important"><?php echo $this->_tpl_vars['friends'][$this->_sections['friend_loop']['index']]->friend_type; ?>
</dd>
                <?php endif; ?>

                <?php if ($this->_tpl_vars['friends'][$this->_sections['friend_loop']['index']]->friend_explain != ""): ?>
                <dt><?php echo $this->_tpl_vars['Application598']; ?>
</dt>
                <dd style="width:180px !important"><?php echo $this->_tpl_vars['friends'][$this->_sections['friend_loop']['index']]->friend_explain; ?>
</dd>
                <?php endif; ?>
            </dl>
            <div class="f-left">

            </div>
        </div>
        <?php endfor; endif; ?>
        <?php endif; ?>
    </div>
    <div class="block-bot"><span>&nbsp;</span></div>
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