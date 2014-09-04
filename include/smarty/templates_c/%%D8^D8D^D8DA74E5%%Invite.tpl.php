<?php /* Smarty version 2.6.14, created on 2013-11-09 02:16:48
         compiled from Invite.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'Header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="content">

        <?php if ($this->_tpl_vars['setting']['setting_signup_invite'] == 2 & $this->_tpl_vars['user']->user_info['user_invitesleft'] == 0): ?>

    <div class="grey-head"><h2><?php echo $this->_tpl_vars['Application154']; ?>
</h2></div>
    <div class="row-blue">
        <p class="blue"><?php echo $this->_tpl_vars['Application155']; ?>
</p>
    </div>


        <?php if ($this->_tpl_vars['user']->user_exists == 0): ?>
    <br/>
    <p align="center" style="color:red;"> You must be logged in to invite other people.</p>
    <br/>
    <?php else: ?>
    <br/>
    <p align="center"><?php echo $this->_tpl_vars['Application156']; ?>
 <?php echo $this->_tpl_vars['user']->user_info['user_invitesleft']; ?>
 <?php echo $this->_tpl_vars['Application157']; ?>
</p>
    <br/>
    <?php endif; ?>

        <?php else: ?>

    <div class="grey-head"><h2><?php echo $this->_tpl_vars['Application154']; ?>
</h2></div>
    <div class="row-blue">
        <p class="blue"><?php echo $this->_tpl_vars['Application155']; ?>
 <?php echo $this->_tpl_vars['Application158']; ?>
</p>
    </div>

    
        
    <?php if ($this->_tpl_vars['setting']['setting_signup_invite'] == 2): ?><p style="padding-left:25px;"><?php echo $this->_tpl_vars['Application158']; ?>
</p><?php endif; ?>

        <?php if ($this->_tpl_vars['setting']['setting_signup_invite'] != 0): ?>
    <p style="padding-left:25px;"> <?php echo $this->_tpl_vars['Application156']; ?>
 <?php echo $this->_tpl_vars['user']->user_info['user_invitesleft']; ?>
 <?php echo $this->_tpl_vars['Application157']; ?>
</p>
    <?php endif; ?>

        <?php if ($this->_tpl_vars['result'] != ""): ?>
    <br/>
    <p align="center" style="color:green;"><?php echo $this->_tpl_vars['result']; ?>
</p>
    <br/>
    <?php endif; ?>

        <?php if ($this->_tpl_vars['error_message'] != ""): ?>
    <br/>
    <p align="center" style="color:red;"><?php echo $this->_tpl_vars['error_message']; ?>
</p>
    <br/>
    <?php endif; ?>

    <div id="primary" class="info-cnt tuneddivs">
        <form action='Invite.php' method='POST' class="settings" style="color:#666666;">
            <div><b><?php echo $this->_tpl_vars['Application159']; ?>
</b></div>
            <div class='form_desc'><?php echo $this->_tpl_vars['Application160']; ?>
</div>
            <textarea style="border:1px solid #CBD0D2; width:600px;"  name='invite_emails' rows='2' cols='60'></textarea>
            <br/><br/>

            <div><b><?php echo $this->_tpl_vars['Application161']; ?>
</b></div>
            <div class='form_desc'><?php echo $this->_tpl_vars['Application162']; ?>
</div>
            <textarea style="border:1px solid #CBD0D2; width:600px;"  name='invite_message' rows='5' cols='60'></textarea>
            <br/><br/>

            <?php if ($this->_tpl_vars['setting']['setting_invite_code'] == 1): ?>
            <table cellpadding='0' cellspacing='0'>
                <tr>
                    <td><input type='text' name='invite_secure' class='text' size='6' maxlength='10' style="width:100px;">&nbsp;</td>
                    <td><img src='./images/secure.php' border='0' height='20' width='67' class='signup_code'>&nbsp;&nbsp;</td>
                    <td><img src='./images/icons/tip.gif' border='0' class='icon' onMouseover="tip('<?php echo $this->_tpl_vars['Application167']; ?>
')"; onMouseout="hidetip()"></td>
                </tr>
            </table>
            <?php endif; ?>

            <p class="line">&nbsp;</p>
            <?php $this->assign('redirect_page', $this->_tpl_vars['url']->url_create('profile',$this->_tpl_vars['user']->user_info['user_username'])); ?>

            <div class="submits">
                <label><input type="submit" value="<?php echo $this->_tpl_vars['Application163']; ?>
"/></label>
                <label><input type="button" onclick="location.href='<?php echo $this->_tpl_vars['redirect_page']; ?>
'" value="Cancel"/></label>
            </div>

            <input type='hidden' name='task' value='doinvite'>
        </form>

    </div>
    <?php endif; ?>
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