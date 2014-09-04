<?php /* Smarty version 2.6.14, created on 2013-11-09 02:34:07
         compiled from AdminEmails.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'AdminHeader.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<h2><?php echo $this->_tpl_vars['Admin344']; ?>
</h2>
<p><?php echo $this->_tpl_vars['Admin345']; ?>
</p>


<?php if ($this->_tpl_vars['result'] != 0): ?>
<p style="color:green;"><?php echo $this->_tpl_vars['Admin378']; ?>
</p>
<?php endif; ?>

<form action='AdminEmails.php' method='POST'>

<div class="row">
    <div class="block">
        <div class="block-head"><h3><?php echo $this->_tpl_vars['Admin347']; ?>
</h3></div>
        <div class="block-in">
            <p style="margin:0 0 0 -10px;"><label><b><?php echo $this->_tpl_vars['Admin349']; ?>
</b><input type='text' class='text' size='40' name='setting_email_fromname' value='<?php echo $this->_tpl_vars['setting_email_fromname']; ?>
' maxlength='37'/> </label></p>
            <p style="margin:0 0 0 -10px;"><label><b><?php echo $this->_tpl_vars['Admin350']; ?>
</b><input type='text' class='text' size='40' name='setting_email_fromemail' value='<?php echo $this->_tpl_vars['setting_email_fromemail']; ?>
' maxlength='37'/> </label></p>
            <br/>
        </div>
        <div class="block-b">&nbsp;</div>
    </div>
    <p><?php echo $this->_tpl_vars['Admin348']; ?>
</p>
</div>

<div class="row">
    <div class="block">
        <div class="block-head"><h3><?php echo $this->_tpl_vars['Admin353']; ?>
</h3></div>
        <div class="block-in">
            <p style="margin:0 0 0 -10px;"><label><b><?php echo $this->_tpl_vars['Admin351']; ?>
:</b><input type='text' class='text' size='40' name='setting_email_invitecode_subject' value='<?php echo $this->_tpl_vars['setting_email_invitecode_subject']; ?>
' maxlength='200'/> </label></p>
            <p style="margin:0 0 0 -10px;"><label><b><?php echo $this->_tpl_vars['Admin352']; ?>
:</b><textarea  style="margin:0 0 0 0 !important;" rows='6' cols='80' class='text' name='setting_email_invitecode_message'><?php echo $this->_tpl_vars['setting_email_invitecode_message']; ?>
</textarea> </label></p>
            <br/>
        </div>
        <div class="block-b">&nbsp;</div>
    </div>
    <p><?php echo $this->_tpl_vars['Admin354']; ?>
 <br/><br/><?php echo $this->_tpl_vars['Admin361']; ?>
</p>
</div>

<div class="row">
    <div class="block">
        <div class="block-head"><h3><?php echo $this->_tpl_vars['Admin355']; ?>
</h3></div>
        <div class="block-in">
            <p style="margin:0 0 0 -10px;"><label><b><?php echo $this->_tpl_vars['Admin351']; ?>
:</b><input type='text' class='text' size='40' name='setting_email_invite_subject' value='<?php echo $this->_tpl_vars['setting_email_invite_subject']; ?>
' maxlength='200'/> </label></p>
            <p style="margin:0 0 0 -10px;"><label><b><?php echo $this->_tpl_vars['Admin352']; ?>
:</b><textarea  style="margin:0 0 0 0 !important;" rows='6' cols='80' class='text' name='setting_email_invite_message'><?php echo $this->_tpl_vars['setting_email_invite_message']; ?>
</textarea></label></p>
            <br/>
        </div>
        <div class="block-b">&nbsp;</div>
    </div>
    <p><?php echo $this->_tpl_vars['Admin356']; ?>
 <br/><br/><?php echo $this->_tpl_vars['Admin362']; ?>
</p>
</div>

<div class="row">
    <div class="block">
        <div class="block-head"><h3><?php echo $this->_tpl_vars['Admin355']; ?>
</h3></div>
        <div class="block-in">
            <p style="margin:0 0 0 -10px;"><label><b><?php echo $this->_tpl_vars['Admin351']; ?>
:</b><input type='text' class='text' size='40' name='setting_email_verify_subject' value='<?php echo $this->_tpl_vars['setting_email_verify_subject']; ?>
' maxlength='200'/> </label></p>
            <p style="margin:0 0 0 -10px;"><label><b><?php echo $this->_tpl_vars['Admin352']; ?>
:</b><textarea  style="margin:0 0 0 0 !important;" rows='6' cols='80' class='text' name='setting_email_verify_message'><?php echo $this->_tpl_vars['setting_email_verify_message']; ?>
</textarea></label></p>
            <br/>
        </div>
        <div class="block-b">&nbsp;</div>
    </div>
    <p><?php echo $this->_tpl_vars['Admin356']; ?>
 <br/><br/><?php echo $this->_tpl_vars['Admin363']; ?>
</p>
</div>

<div class="row">
    <div class="block">
        <div class="block-head"><h3><?php echo $this->_tpl_vars['Admin357']; ?>
</h3></div>
        <div class="block-in">
            <p style="margin:0 0 0 -10px;"><label><b><?php echo $this->_tpl_vars['Admin351']; ?>
:</b><input type='text' class='text' size='40' name='setting_email_newpass_subject' value='<?php echo $this->_tpl_vars['setting_email_newpass_subject']; ?>
' maxlength='200'/> </label></p>
            <p style="margin:0 0 0 -10px;"><label><b><?php echo $this->_tpl_vars['Admin352']; ?>
:</b><textarea  style="margin:0 0 0 0 !important;" rows='6' cols='80' class='text' name='setting_email_newpass_message'><?php echo $this->_tpl_vars['setting_email_newpass_message']; ?>
</textarea></label></p>
            <br/>
        </div>
        <div class="block-b">&nbsp;</div>
    </div>
    <p><?php echo $this->_tpl_vars['Admin358']; ?>
 <br/><br/><?php echo $this->_tpl_vars['Admin364']; ?>
</p>
</div>

<div class="row">
    <div class="block">
        <div class="block-head"><h3><?php echo $this->_tpl_vars['Admin359']; ?>
</h3></div>
        <div class="block-in">
            <p style="margin:0 0 0 -10px;"><label><b><?php echo $this->_tpl_vars['Admin351']; ?>
:</b><input type='text' class='text' size='40' name='setting_email_welcome_subject' value='<?php echo $this->_tpl_vars['setting_email_welcome_subject']; ?>
' maxlength='200'/></label></p>
            <p style="margin:0 0 0 -10px;"><label><b><?php echo $this->_tpl_vars['Admin352']; ?>
:</b><textarea  style="margin:0 0 0 0 !important;" rows='6' cols='80' class='text' name='setting_email_welcome_message'><?php echo $this->_tpl_vars['setting_email_welcome_message']; ?>
</textarea></label></p>
            <br/>
        </div>
        <div class="block-b">&nbsp;</div>
    </div>
    <p><?php echo $this->_tpl_vars['Admin360']; ?>
 <br/><br/><?php echo $this->_tpl_vars['Admin365']; ?>
</p>
</div>

<div class="row">
    <div class="block">
        <div class="block-head"><h3><?php echo $this->_tpl_vars['Admin369']; ?>
</h3></div>
        <div class="block-in">
            <p style="margin:0 0 0 -10px;"><label><b><?php echo $this->_tpl_vars['Admin351']; ?>
:</b><input type='text' class='text' size='40' name='setting_email_lostpassword_subject' value='<?php echo $this->_tpl_vars['setting_email_lostpassword_subject']; ?>
' maxlength='200'/></label></p>
            <p style="margin:0 0 0 -10px;"><label><b><?php echo $this->_tpl_vars['Admin352']; ?>
:</b><textarea  style="margin:0 0 0 0 !important;" rows='6' cols='80' class='text' name='setting_email_lostpassword_message'><?php echo $this->_tpl_vars['setting_email_lostpassword_message']; ?>
</textarea></label></p>
            <br/>
        </div>
        <div class="block-b">&nbsp;</div>
    </div>
    <p><?php echo $this->_tpl_vars['Admin370']; ?>
 <br/><br/><?php echo $this->_tpl_vars['Admin371']; ?>
</p>
</div>

<div class="row">
    <div class="block">
        <div class="block-head"><h3><?php echo $this->_tpl_vars['Admin372']; ?>
</h3></div>
        <div class="block-in">
            <p style="margin:0 0 0 -10px;"><label><b><?php echo $this->_tpl_vars['Admin351']; ?>
:</b><input type='text' class='text' size='40' name='setting_email_friendrequest_subject' value='<?php echo $this->_tpl_vars['setting_email_friendrequest_subject']; ?>
' maxlength='200'/></label></p>
            <p style="margin:0 0 0 -10px;"><label><b><?php echo $this->_tpl_vars['Admin352']; ?>
:</b><textarea  style="margin:0 0 0 0 !important;" rows='6' cols='80' class='text' name='setting_email_friendrequest_message'><?php echo $this->_tpl_vars['setting_email_friendrequest_message']; ?>
</textarea><br/><?php echo $this->_tpl_vars['Admin33']; ?>
</label></p>
            
        </div>
        <div class="block-b">&nbsp;</div>
    </div>
    <p><?php echo $this->_tpl_vars['Admin373']; ?>
<br/><br/><?php echo $this->_tpl_vars['Admin374']; ?>
</p>
</div>

<div class="row">
    <div class="block">
        <div class="block-head"><h3><?php echo $this->_tpl_vars['Admin375']; ?>
</h3></div>
        <div class="block-in">
            <p style="margin:0 0 0 -10px;"><label><b><?php echo $this->_tpl_vars['Admin351']; ?>
:</b><input type='text' class='text' size='40' name='setting_email_message_subject' value='<?php echo $this->_tpl_vars['setting_email_message_subject']; ?>
' maxlength='200'/></label></p>
            <p style="margin:0 0 0 -10px;"><label><b><?php echo $this->_tpl_vars['Admin352']; ?>
:</b><textarea  style="margin:0 0 0 0 !important;" rows='6' cols='80' class='text' name='setting_email_message_message'><?php echo $this->_tpl_vars['setting_email_message_message']; ?>
</textarea></label></p>
            <br/>
        </div>
        <div class="block-b">&nbsp;</div>
    </div>
    <p><?php echo $this->_tpl_vars['Admin377']; ?>
</p>
</div>

<div class="row" style="border-bottom:none; margin-bottom:0px;">
    <div class="block">
        <div class="block-head"><h3><?php echo $this->_tpl_vars['Admin366']; ?>
</h3></div>
        <div class="block-in">
            <p style="margin:0 0 0 -10px;"><label><b><?php echo $this->_tpl_vars['Admin351']; ?>
:</b><input type='text' class='text' size='40' name='setting_email_profilecomment_subject' value='<?php echo $this->_tpl_vars['setting_email_profilecomment_subject']; ?>
' maxlength='200'/></label></p>
            <p style="margin:0 0 0 -10px;"><label><b><?php echo $this->_tpl_vars['Admin352']; ?>
:</b><textarea  style="margin:0 0 0 0 !important;" rows='6' cols='80' class='text' name='setting_email_profilecomment_message'><?php echo $this->_tpl_vars['setting_email_profilecomment_message']; ?>
</textarea></label></p>
            <br/>
        </div>
        <div class="block-b">&nbsp;</div>
    </div>
    <p><?php echo $this->_tpl_vars['Admin367']; ?>
<br/><br/><?php echo $this->_tpl_vars['Admin368']; ?>
</p>
</div>


<div style="padding-left:20px;"><label class="button"><input type='submit' value='<?php echo $this->_tpl_vars['Admin346']; ?>
'/></label></div>
<input type='hidden' name='task' value='dosave'>
</form>


<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'AdminFooter.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>