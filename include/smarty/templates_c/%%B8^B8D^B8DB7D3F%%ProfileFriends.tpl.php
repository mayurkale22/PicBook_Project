<?php /* Smarty version 2.6.14, created on 2013-11-09 02:28:56
         compiled from ProfileFriends.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'math', 'ProfileFriends.tpl', 43, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'Header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '
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
</style>
'; ?>



<div id="content">
        <div class="grey-head"><h2><a href='<?php echo $this->_tpl_vars['url']->url_create('profile',$this->_tpl_vars['owner']->user_info['user_username']); ?>
'><?php echo $this->_tpl_vars['owner']->user_info['user_username']; ?>
</a><?php echo $this->_tpl_vars['Application257']; ?>
</h2></div>
    <div class="row-blue">
        <p class="blue"><?php echo $this->_tpl_vars['Application258']; ?>
<a href='<?php echo $this->_tpl_vars['url']->url_create('profile',$this->_tpl_vars['owner']->user_info['user_username']); ?>
'><?php echo $this->_tpl_vars['owner']->user_info['user_username']; ?>
</a><?php echo $this->_tpl_vars['Application259']; ?>
</p>
    </div>

        <?php if ($this->_tpl_vars['total_friends'] == 0): ?>
    <br/>
    <p align="center" style="color:red;">
        <b><a href='<?php echo $this->_tpl_vars['url']->url_create('profile',$this->_tpl_vars['owner']->user_info['user_username']); ?>
'><?php echo $this->_tpl_vars['owner']->user_info['user_username']; ?>
</a></b><?php echo $this->_tpl_vars['Application260']; ?>

    </p>
    <br/>
    <?php endif; ?>

    <div id="primary" class="info-cnt tuneddivs" style="color:#666666;">

        <form action="" method="post" class="settings" style="margin-top:0px !important;">
                        <?php if ($this->_tpl_vars['maxpage'] > 1): ?>
            <p>
                <?php if ($this->_tpl_vars['p'] != 1): ?><a href='ProfileFriends.php?user=<?php echo $this->_tpl_vars['owner']->user_info['user_username']; ?>
&s=<?php echo $this->_tpl_vars['s']; ?>
&p=<?php echo smarty_function_math(array('equation' => 'p-1','p' => $this->_tpl_vars['p']), $this);?>
'>&#171; <?php echo $this->_tpl_vars['Application5']; ?>
</a><?php else: ?><font class='disabled'>&#171; <?php echo $this->_tpl_vars['Application261']; ?>
</font><?php endif; ?>
                <?php if ($this->_tpl_vars['p_start'] == $this->_tpl_vars['p_end']): ?>
                &nbsp;|&nbsp; <?php echo $this->_tpl_vars['Application262']; ?>
 <?php echo $this->_tpl_vars['p_start']; ?>
 <?php echo $this->_tpl_vars['Application263']; ?>
 <?php echo $this->_tpl_vars['total_friends']; ?>
 &nbsp;|&nbsp;
                <?php else: ?>
                &nbsp;|&nbsp; <?php echo $this->_tpl_vars['Application262']; ?>
 <?php echo $this->_tpl_vars['p_start']; ?>
-<?php echo $this->_tpl_vars['p_end']; ?>
 <?php echo $this->_tpl_vars['Application263']; ?>
 <?php echo $this->_tpl_vars['total_friends']; ?>
 &nbsp;|&nbsp;
                <?php endif; ?>
                <?php if ($this->_tpl_vars['p'] != $this->_tpl_vars['maxpage']): ?><a href='ProfileFriends.php?user=<?php echo $this->_tpl_vars['owner']->user_info['user_username']; ?>
&s=<?php echo $this->_tpl_vars['s']; ?>
&p=<?php echo smarty_function_math(array('equation' => 'p+1','p' => $this->_tpl_vars['p']), $this);?>
'><?php echo $this->_tpl_vars['Application264']; ?>
 &#187;</a><?php else: ?><font class='disabled'><?php echo $this->_tpl_vars['Application264']; ?>
 &#187;</font><?php endif; ?>
            </p>
            <?php endif; ?>

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


                <a class="f-left" href="<?php echo $this->_tpl_vars['url']->url_create('profile',$this->_tpl_vars['friends'][$this->_sections['friend_loop']['index']]->user_info['user_username']); ?>
"><img src="<?php echo $this->_tpl_vars['friends'][$this->_sections['friend_loop']['index']]->user_photo('./images/nophoto.gif'); ?>
" class='img' width="92px" alt="<?php echo $this->_tpl_vars['friends'][$this->_sections['friend_loop']['index']]->user_info['user_username']; ?>
"/></a>
                <dl style="width:350px! important;">

                    <dt style="width:75px !important;"><?php echo $this->_tpl_vars['Application270']; ?>
</dt>
                    <dd><a href="<?php echo $this->_tpl_vars['url']->url_create('profile',$this->_tpl_vars['friends'][$this->_sections['friend_loop']['index']]->user_info['user_username']); ?>
"><b><?php echo $this->_tpl_vars['friends'][$this->_sections['friend_loop']['index']]->user_info['user_username']; ?>
</b></a></dd>
                </dl>
            </div>
            <?php endfor; endif; ?>

        </form>
    </div>


    <div class="block-bot"><span></span></div>
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