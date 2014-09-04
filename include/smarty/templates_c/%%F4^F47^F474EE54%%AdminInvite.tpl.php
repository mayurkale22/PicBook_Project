<?php /* Smarty version 2.6.14, created on 2013-11-09 01:58:11
         compiled from AdminInvite.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'AdminHeader.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<h2><?php echo $this->_tpl_vars['Admin439']; ?>
</h2>
<p><?php echo $this->_tpl_vars['Admin440']; ?>
</p>

<?php if ($this->_tpl_vars['result'] != 0): ?>
<p style="color:green;"><?php echo $this->_tpl_vars['Admin444']; ?>
</p>
<?php endif; ?>
<p class="line">&nbsp;</p>
<form action='AdminInvite.php' method='POST'>

    <div class="row" style="border-bottom:none; margin-bottom:0px;">
        <div class="block">
            <div class="block-head"><h3><?php echo $this->_tpl_vars['Admin441']; ?>
</h3></div>
            <div class="block-in">
                <p><label><textarea name='invite_emails'></textarea></label></p>
            </div>
            <div class="block-b">&nbsp;</div>
        </div>
        <p><?php echo $this->_tpl_vars['Admin442']; ?>
</p>
    </div>
    
    <div style="padding-left:20px;"><label class="button"><input type='submit' value='<?php echo $this->_tpl_vars['Admin443']; ?>
'/></label></div>
    <input type='hidden' name='task' value='doinvite'>

</form>



<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'AdminFooter.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>