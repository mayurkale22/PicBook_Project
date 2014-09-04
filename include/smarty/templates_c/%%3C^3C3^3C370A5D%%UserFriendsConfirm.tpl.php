<?php /* Smarty version 2.6.14, created on 2013-11-09 02:19:41
         compiled from UserFriendsConfirm.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'Header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="content">
<?php $this->assign('redirect_page', $this->_tpl_vars['url']->url_create('profile',$this->_tpl_vars['owner']->user_info['user_username']));  echo '
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
    .text{
        border:1px solid #CBD0D2 !important;
    }

</style>
'; ?>


<div class="grey-head">
    <h2><?php echo $this->_tpl_vars['Application558']; ?>
</h2>
</div>
<div class="row-blue">
    <span><?php echo $this->_tpl_vars['Application520']; ?>
 <b><a href='<?php echo $this->_tpl_vars['url']->url_create('profile',$this->_tpl_vars['owner']->user_info['user_username']); ?>
'><?php echo $this->_tpl_vars['owner']->user_info['user_username']; ?>
</a></b> <?php echo $this->_tpl_vars['Application521']; ?>
</span>
</div>

<div class="layers">

<div id="primary" class="info-cnt tuneddivs">

<p style="padding-left:25px;"><?php echo $this->_tpl_vars['Application523']; ?>
</p>

<?php echo '
<script language=\'JavaScript\'>
    <!--
    function show_other() {
        if(document.confirmform.friend_type.options[document.confirmform.friend_type.selectedIndex].value == \'other_friendtype\') {
            document.getElementById(\'other\').style.display=\'block\';
            document.getElementById(\'friend_type_other\').focus();
        } else {
            document.getElementById(\'other\').style.display=\'none\';
            document.getElementById(\'friend_type_other\').value = \'\';
        }
    }
    // -->
</script>
'; ?>


<form action='UserFriendsAdd.php' method='POST' name='addform' class="settings">
<?php if ($this->_tpl_vars['friend_types'] != ""): ?>
<p>
    <label style="width:126px;"><?php echo $this->_tpl_vars['Application524']; ?>
</label>
    <select style="width:100px !important;" name='friend_type' onChange='javascript: show_other();'>
        <option></option>
        <?php unset($this->_sections['type_loop']);
$this->_sections['type_loop']['name'] = 'type_loop';
$this->_sections['type_loop']['loop'] = is_array($_loop=$this->_tpl_vars['friend_types']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['type_loop']['show'] = true;
$this->_sections['type_loop']['max'] = $this->_sections['type_loop']['loop'];
$this->_sections['type_loop']['step'] = 1;
$this->_sections['type_loop']['start'] = $this->_sections['type_loop']['step'] > 0 ? 0 : $this->_sections['type_loop']['loop']-1;
if ($this->_sections['type_loop']['show']) {
    $this->_sections['type_loop']['total'] = $this->_sections['type_loop']['loop'];
    if ($this->_sections['type_loop']['total'] == 0)
        $this->_sections['type_loop']['show'] = false;
} else
    $this->_sections['type_loop']['total'] = 0;
if ($this->_sections['type_loop']['show']):

            for ($this->_sections['type_loop']['index'] = $this->_sections['type_loop']['start'], $this->_sections['type_loop']['iteration'] = 1;
                 $this->_sections['type_loop']['iteration'] <= $this->_sections['type_loop']['total'];
                 $this->_sections['type_loop']['index'] += $this->_sections['type_loop']['step'], $this->_sections['type_loop']['iteration']++):
$this->_sections['type_loop']['rownum'] = $this->_sections['type_loop']['iteration'];
$this->_sections['type_loop']['index_prev'] = $this->_sections['type_loop']['index'] - $this->_sections['type_loop']['step'];
$this->_sections['type_loop']['index_next'] = $this->_sections['type_loop']['index'] + $this->_sections['type_loop']['step'];
$this->_sections['type_loop']['first']      = ($this->_sections['type_loop']['iteration'] == 1);
$this->_sections['type_loop']['last']       = ($this->_sections['type_loop']['iteration'] == $this->_sections['type_loop']['total']);
?>
        <option value='<?php echo $this->_tpl_vars['friend_types'][$this->_sections['type_loop']['index']]; ?>
'><?php echo $this->_tpl_vars['friend_types'][$this->_sections['type_loop']['index']]; ?>
</option>
        <?php endfor; endif; ?>
        <?php if ($this->_tpl_vars['setting']['setting_connection_other'] != 0): ?><option value='other_friendtype'<?php if ($this->_tpl_vars['friend_type_other'] != ""): ?> SELECTED<?php endif; ?>><?php echo $this->_tpl_vars['Application561']; ?>
</option><?php endif; ?>
    </select>
</p>
<?php if ($this->_tpl_vars['setting']['setting_connection_other'] != 0): ?>
<div style='display: <?php if ($this->_tpl_vars['friend_type_other'] != ""): ?>block<?php else: ?>none<?php endif; ?>;' id='other'>
<p>
    <label style="width:126px;"><?php echo $this->_tpl_vars['Application562']; ?>
</label>
    <input type='text' class='text' name='friend_type_other' id='friend_type_other' value='<?php echo $this->_tpl_vars['friend_type_other']; ?>
' maxlength='50'/>
</p>
</div>
<?php else: ?>
<input type='hidden' name='friend_type_other' value=''>
<?php endif;  else:  if ($this->_tpl_vars['setting']['setting_connection_other'] != 0): ?>
<p>
    <label style="width:126px;"><?php echo $this->_tpl_vars['Application563']; ?>
</label>
    <input type='text' name='friend_type_other' value='<?php echo $this->_tpl_vars['friend_type_other']; ?>
' maxlength='50'/>
</p>
<?php else: ?>
<input type='hidden' name='friend_type_other' value=''>
<?php endif; ?>
<input type='hidden' name='friend_type' value=''>
<?php endif;  if ($this->_tpl_vars['setting']['setting_connection_explain'] != 0): ?>
<p>
<label style="width:126px;"><?php echo $this->_tpl_vars['Application564']; ?>
 <a href='<?php echo $this->_tpl_vars['url']->url_create('profile',$this->_tpl_vars['owner']->user_info['user_username']); ?>
'><?php echo $this->_tpl_vars['owner']->user_info['user_username']; ?>
</a><?php echo $this->_tpl_vars['Application565']; ?>
</b></label>
<textarea class="text" name='friend_explain' rows='5' cols='60' style='margin-top: 3px;'><?php echo $this->_tpl_vars['friend_explain']; ?>
</textarea>
</p>
<?php else: ?>
<input type='hidden' name='friend_explain' value=''/>
<?php endif; ?>
<p class="line">&nbsp;</p>
                <div class="f-left">
                    <a class="button" href="javascript:void(0);" onclick="document.addform.submit();">
                        <span><?php echo $this->_tpl_vars['Application566']; ?>
</span>
                    </a>

                    <a class="button" href="<?php echo $this->_tpl_vars['redirect_page']; ?>
">
                        <span><?php echo $this->_tpl_vars['Application529']; ?>
</span>
                    </a>
                </div>

<input type='hidden' name='task' value='editdo'/>
<input type='hidden' name='user' value='<?php echo $this->_tpl_vars['owner']->user_info['user_username']; ?>
'/>
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