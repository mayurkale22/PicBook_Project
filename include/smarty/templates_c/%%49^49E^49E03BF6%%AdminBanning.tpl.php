<?php /* Smarty version 2.6.14, created on 2013-11-09 02:46:25
         compiled from AdminBanning.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'AdminHeader.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<h2><?php echo $this->_tpl_vars['Admin290']; ?>
</h2>
<p><?php echo $this->_tpl_vars['Admin291']; ?>
</p>

<?php if ($this->_tpl_vars['result'] != 0): ?>
<p style="color:green;"><?php echo $this->_tpl_vars['Admin305']; ?>
</p>
<?php endif; ?>

<form action='AdminBanning.php' method='POST'>
<div class="row">
    <div class="block">
        <div class="block-head"><h3><?php echo $this->_tpl_vars['Admin292']; ?>
</h3></div>
        <div class="block-in">
            <p><label><textarea name='banned_ips'><?php echo $this->_tpl_vars['setting_banned_ips']; ?>
</textarea></label></p>
        </div>
        <div class="block-b">&nbsp;</div>
    </div>
    <p><?php echo $this->_tpl_vars['Admin293']; ?>
</p>
</div>

<div class="row">
    <div class="block">
        <div class="block-head"><h3><?php echo $this->_tpl_vars['Admin294']; ?>
</h3></div>
        <div class="block-in">
            <p><label><textarea name='banned_emails'><?php echo $this->_tpl_vars['setting_banned_emails']; ?>
</textarea></label></p>
        </div>
        <div class="block-b">&nbsp;</div>
    </div>
    <p><?php echo $this->_tpl_vars['Admin295']; ?>
</p>
</div>

<div class="row">
    <div class="block">
        <div class="block-head"><h3><?php echo $this->_tpl_vars['Admin296']; ?>
</h3></div>
        <div class="block-in">
            <p><label><textarea name='banned_usernames'><?php echo $this->_tpl_vars['setting_banned_usernames']; ?>
</textarea></label></p>
        </div>
        <div class="block-b">&nbsp;</div>
    </div>
    <p><?php echo $this->_tpl_vars['Admin297']; ?>
</p>
</div>

<div class="row">
    <div class="block">
        <div class="block-head"><h3><?php echo $this->_tpl_vars['Admin298']; ?>
</h3></div>
        <div class="block-in">
            <p><label><textarea name='banned_words'><?php echo $this->_tpl_vars['setting_banned_words']; ?>
</textarea></label></p>
        </div>
        <div class="block-b">&nbsp;</div>
    </div>
    <p><?php echo $this->_tpl_vars['Admin299']; ?>
</p>
</div>

<div class="row">
    <div class="block">
        <div class="block-head"><h3><?php echo $this->_tpl_vars['Admin300']; ?>
</h3></div>
        <div class="block-in">
            <p><input type='radio' name='comment_code' id='comment_code_1' value='1'<?php if ($this->_tpl_vars['setting_comment_code'] == 1): ?> CHECKED<?php endif; ?>/><label for='comment_code_1'> <?php echo $this->_tpl_vars['Admin302']; ?>
</label></p>
            <p><input type='radio' name='comment_code' id='comment_code_0' value='0'<?php if ($this->_tpl_vars['setting_comment_code'] == 0): ?> CHECKED<?php endif; ?>/><label for='comment_code_0'> <?php echo $this->_tpl_vars['Admin303']; ?>
</label></p>
        </div>
        <div class="block-b">&nbsp;</div>
    </div>
    <p><?php echo $this->_tpl_vars['Admin301']; ?>
</p>
</div>

<div class="row" style="border:none; margin-bottom:0px;">
    <div class="block">
        <div class="block-head"><h3><?php echo $this->_tpl_vars['Admin306']; ?>
</h3></div>
        <div class="block-in">
            <p><input type='radio' name='invite_code' id='invite_code_1' value='1'<?php if ($this->_tpl_vars['setting_invite_code'] == 1): ?> CHECKED<?php endif; ?>/><label for='invite_code_1'><?php echo $this->_tpl_vars['Admin308']; ?>
</label></p>
            <p><input type='radio' name='invite_code' id='invite_code_0' value='0'<?php if ($this->_tpl_vars['setting_invite_code'] == 0): ?> CHECKED<?php endif; ?>/><label for='invite_code_0'><?php echo $this->_tpl_vars['Admin309']; ?>
</label></p>
            <br/>
        </div>
        <div class="block-b">&nbsp;</div>
    </div>
    <p><?php echo $this->_tpl_vars['Admin307']; ?>
</p>
</div>

<div style="padding-left:20px;"><label class="button"><input type='submit' value='<?php echo $this->_tpl_vars['Admin304']; ?>
'/></label></div>
<input type='hidden' name='task' value='dosave'>

</form>



<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'AdminFooter.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>