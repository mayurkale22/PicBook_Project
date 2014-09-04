<?php /* Smarty version 2.6.14, created on 2013-11-09 02:15:22
         compiled from UserFriends.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'math', 'UserFriends.tpl', 11, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'Header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="content">

    <div class="grey-head">
        <h2><?php echo $this->_tpl_vars['Application485']; ?>
</h2>
    </div>

        <?php if ($this->_tpl_vars['maxpage'] > 1): ?>
    <div class="wp-pagenavi blue">
        <?php if ($this->_tpl_vars['p'] != 1): ?><a href='UserFriends.php?s=<?php echo $this->_tpl_vars['s']; ?>
&amp;search=<?php echo $this->_tpl_vars['search']; ?>
&amp;p=<?php echo smarty_function_math(array('equation' => 'p-1','p' => $this->_tpl_vars['p']), $this);?>
'>&#171; <?php echo $this->_tpl_vars['Application495']; ?>
</a><?php else: ?><font class='disabled'>&#171; <?php echo $this->_tpl_vars['Application496']; ?>
</font><?php endif; ?>
        <?php if ($this->_tpl_vars['p_start'] == $this->_tpl_vars['p_end']): ?>
        &nbsp;|&nbsp; <?php echo $this->_tpl_vars['Application496']; ?>
 <?php echo $this->_tpl_vars['p_start']; ?>
 <?php echo $this->_tpl_vars['Application498']; ?>
 <?php echo $this->_tpl_vars['total_friends']; ?>
 &nbsp;|&nbsp;
        <?php else: ?>
        &nbsp;|&nbsp; <?php echo $this->_tpl_vars['Application497']; ?>
 <?php echo $this->_tpl_vars['p_start']; ?>
-<?php echo $this->_tpl_vars['p_end']; ?>
 <?php echo $this->_tpl_vars['Application498']; ?>
 <?php echo $this->_tpl_vars['total_friends']; ?>
 &nbsp;|&nbsp;
        <?php endif; ?>
        <?php if ($this->_tpl_vars['p'] != $this->_tpl_vars['maxpage']): ?><a href='UserFriends.php?s=<?php echo $this->_tpl_vars['s']; ?>
&amp;search=<?php echo $this->_tpl_vars['search']; ?>
&amp;p=<?php echo smarty_function_math(array('equation' => 'p+1','p' => $this->_tpl_vars['p']), $this);?>
'><?php echo $this->_tpl_vars['Application499']; ?>
 &#187;</a><?php else: ?><font class='disabled'><?php echo $this->_tpl_vars['Application499']; ?>
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
        <p style="padding-left:25px;"><?php echo $this->_tpl_vars['Application486']; ?>
</p>
                <?php if ($this->_tpl_vars['total_friends'] == 0 && $this->_tpl_vars['search'] == ""): ?>
        <br/><br/>
        <p align="center" style="color:red;"><?php echo $this->_tpl_vars['Application487']; ?>
</p>
        <br/><br/><br/>
        <?php endif; ?>

                <?php if ($this->_tpl_vars['total_friends'] == 0): ?>

                <?php if ($this->_tpl_vars['search'] != ""): ?>
        <br/>
        <p align="center" style="color:red;"><?php echo $this->_tpl_vars['Application494']; ?>
</p>
        <br/><br/><br/>
        <?php endif; ?>

                <?php else: ?>
        <div class="info-cnt tuneddivs">
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
                    <?php if ($this->_tpl_vars['show_details'] != 0): ?><a href='UserFriendsConfirm.php?user=<?php echo $this->_tpl_vars['friends'][$this->_sections['friend_loop']['index']]->user_info['user_username']; ?>
&amp;task=edit'><?php echo $this->_tpl_vars['Application505']; ?>
</a><br/><?php endif; ?>
                    <a href='UserFriendsConfirm.php?user=<?php echo $this->_tpl_vars['friends'][$this->_sections['friend_loop']['index']]->user_info['user_username']; ?>
&amp;task=remove'><?php echo $this->_tpl_vars['Application506']; ?>
</a><br/>
                    <a href='ProfileFriends.php?user=<?php echo $this->_tpl_vars['friends'][$this->_sections['friend_loop']['index']]->user_info['user_username']; ?>
'><?php echo $this->_tpl_vars['Application508']; ?>
</a><br/>
                </div>

                <a class="f-left" href="<?php echo $this->_tpl_vars['url']->url_create('profile',$this->_tpl_vars['friends'][$this->_sections['friend_loop']['index']]->user_info['user_username']); ?>
"><img src="<?php echo $this->_tpl_vars['friends'][$this->_sections['friend_loop']['index']]->user_photo('./images/nophoto.gif'); ?>
" class='img' width="92" alt="<?php echo $this->_tpl_vars['friends'][$this->_sections['friend_loop']['index']]->user_info['user_username'];  echo $this->_tpl_vars['Application500']; ?>
"/></a>
                <dl>
                    <dt>Name:</dt>
                    <dd><a href="<?php echo $this->_tpl_vars['url']->url_create('profile',$this->_tpl_vars['friends'][$this->_sections['friend_loop']['index']]->user_info['user_username']); ?>
"><?php echo $this->_tpl_vars['friends'][$this->_sections['friend_loop']['index']]->user_info['user_username']; ?>
</a></dd>


                    <?php if ($this->_tpl_vars['show_details'] != 0): ?>
                        <?php if ($this->_tpl_vars['friends'][$this->_sections['friend_loop']['index']]->friend_type != ""): ?>
                            <dt><?php echo $this->_tpl_vars['Application503']; ?>
</dt>
                            <dd><?php echo $this->_tpl_vars['friends'][$this->_sections['friend_loop']['index']]->friend_type; ?>
</dd>
                        <?php endif; ?>

                        <?php if ($this->_tpl_vars['friends'][$this->_sections['friend_loop']['index']]->friend_explain != ""): ?>
                            <dt><?php echo $this->_tpl_vars['Application504']; ?>
</dt>
                            <dd><?php echo $this->_tpl_vars['friends'][$this->_sections['friend_loop']['index']]->friend_explain; ?>
</dd>
                        <?php endif; ?>
                     <?php endif; ?>
                </dl>
            </div>
           <?php endfor; endif; ?>
        </div>
        <?php endif; ?>
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
    <form action='UserFriends.php' method='post' name='searchform' style="padding:0 0;">
        <div class="block">
            <ul class="accordion">
                <li class="form-top active"><a href="#" class="opener active"><?php echo $this->_tpl_vars['Application488']; ?>
</a>
                    <div class="slide">
                        <div class="side-form">
                            <label>
                                <input type='text' maxlength='100' size='26' style="border:1px solid #CBD0D2;" id='search' name='search' value='<?php echo $this->_tpl_vars['search']; ?>
' onkeyup="suggest('search', 'suggest', '<?php unset($this->_sections['friend_loop']);
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
 echo $this->_tpl_vars['friends'][$this->_sections['friend_loop']['index']]->user_info['user_username'];  if ($this->_sections['friend_loop']['last'] != true): ?>,<?php endif;  endfor; endif; ?>');"/>
                            </label>
                            <input type='hidden' name='s' value='<?php echo $this->_tpl_vars['s']; ?>
'/>
                            <input type='hidden' name='p' value='<?php echo $this->_tpl_vars['p']; ?>
'/>
                        </div>
                        <div class="block-bot"><span>&nbsp;</span></div>
                    </div>
                </li>
            </ul>
        </div>

        <div class="block">
            <ul class="accordion">
                <li class="form-top active"><a href="#" class="opener active"><?php echo $this->_tpl_vars['Application490']; ?>
</a>
                    <div class="slide">
                        <div class="side-form">
                            <label>
                                <select name='s'>
                                    <option value='<?php echo $this->_tpl_vars['u']; ?>
'<?php if ($this->_tpl_vars['s'] == 'ud'): ?> SELECTED<?php endif; ?>><?php echo $this->_tpl_vars['Application491']; ?>
</option>
                                    <option value='<?php echo $this->_tpl_vars['l']; ?>
'<?php if ($this->_tpl_vars['s'] == 'ld'): ?> SELECTED<?php endif; ?>><?php echo $this->_tpl_vars['Application492']; ?>
</option>
                                    <option value='<?php echo $this->_tpl_vars['t']; ?>
'<?php if ($this->_tpl_vars['s'] == 't'): ?> SELECTED<?php endif; ?>><?php echo $this->_tpl_vars['Application493']; ?>
</option>
                                </select>
                            </label>
                        </div>
                        <div class="block-bot"><span>&nbsp;</span></div>
                    </div>
                </li>
            </ul>
        </div>
        <a href="javascript:void(0);" onclick="document.searchform.submit()" class="submit_button_uf"><?php echo $this->_tpl_vars['Application489']; ?>
</a>
    </form>
</div>



<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'Footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>