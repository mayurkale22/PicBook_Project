<?php /* Smarty version 2.6.14, created on 2013-11-09 02:09:48
         compiled from LoginPortal.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'Header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="content">
    <div class="block-top"><span>&nbsp;</span></div>
    <div class="main-post main-post2">
                <?php if ($this->_tpl_vars['error_message'] != ""): ?>
        <p style="color:red;"><?php echo $this->_tpl_vars['error_message']; ?>
</p>
        <?php endif; ?>
        <p><?php echo $this->_tpl_vars['Application177']; ?>
</p
        <?php if ($this->_tpl_vars['setting']['setting_signup_verify'] == 1): ?><p><?php echo $this->_tpl_vars['Application170']; ?>
</p><?php endif; ?>>
    </div>
    <div class="block-bot"><span>&nbsp;</span></div>
</div>
<div id="sidebar">
    <form class="login" action='Login.php' method='post' name='login'>
        <label><?php echo $this->_tpl_vars['Application173']; ?>
</label><input type="text" name='email' value='<?php echo $this->_tpl_vars['email']; ?>
'/>
        <label><?php echo $this->_tpl_vars['Application174']; ?>
</label><input type='password'  name='password'/>
        <label style=""><?php echo $this->_tpl_vars['Application171']; ?>
</label><input style="height:14px !important; width:14px !important; margin:0 10px 0 5px !important;" type='checkbox'  name='persistent' id='persistent' value='1'/>
        <br />
        <label class="registr"><input style="margin:10px 10px 10px 0;" type="submit" value="Login"/></label>
        <a class="registr" href="Signup.php" style="margin:10px 10px 10px 0;"><span>Register</span></a>

        <NOSCRIPT><input type='hidden' name='javascript_disabled' value='1' /></NOSCRIPT>
        <input type='hidden' name='task' value='dologin' />
        <input type='hidden' name='return_url' value='<?php echo $this->_tpl_vars['return_url']; ?>
' />
    </form>
</div>


<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'Footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>