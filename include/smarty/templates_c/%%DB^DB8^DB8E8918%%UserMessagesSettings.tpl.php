<?php /* Smarty version 2.6.14, created on 2013-11-09 15:08:02
         compiled from UserMessagesSettings.tpl */ ?>
<?php if (! $this->_tpl_vars['ajax_call']): ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'Header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="content">
    <?php echo '
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
        #content .row dd {
            width:210px !important;
        }
        #content .row dl {
            float:left;
            padding:0;
            width:320px;
        }
    </style>
    '; ?>


    <div class="grey-head"><h2><?php echo $this->_tpl_vars['Application702']; ?>
</h2></div>
    <div class="row-blue">
        <p class="blue"><?php echo $this->_tpl_vars['Application703']; ?>
</p>

    </div>
    <div class="layers">
        <ul class="list01">

            <li id="li1" <?php if ($this->_tpl_vars['page'] == 'UserMessages'): ?>class="ui-state-active ui-tabs-selected"<?php endif; ?>>
                <a href='javascript:void(0)' onclick="getData('#ajaxContainer','UserMessages.php'); setActiveLi(1);"><?php echo $this->_tpl_vars['Application641']; ?>
</a>
            </li>

            <li id="li2" <?php if ($this->_tpl_vars['page'] == 'UserMessagesOutbox'): ?>class="ui-state-active ui-tabs-selected"<?php endif; ?>>
                <a href='javascript:void(0)' onclick="getData('#ajaxContainer','UserMessagesOutbox.php'); setActiveLi(2);"><?php echo $this->_tpl_vars['Application642']; ?>
</a>
            </li>

            <li id="li3" <?php if ($this->_tpl_vars['page'] == 'UserMessagesSettings'): ?>class="ui-state-active ui-tabs-selected"<?php endif; ?>>
                <a href='javascript:void(0)' onclick="getData('#ajaxContainer','UserMessagesSettings.php'); setActiveLi(3);"><?php echo $this->_tpl_vars['Application662']; ?>
</a>
            </li>
        </ul>

<?php endif; ?>

        <div id="ajaxContainer">

<?php if ($this->_tpl_vars['result'] != 0): ?>
  <p style="padding-left:25px; color:green;"> <?php echo $this->_tpl_vars['Application704']; ?>
</p>
<?php endif; ?>
        
         <div id="primary" class="info-cnt tuneddivs">
            <form action="UserMessagesSettings.php" method="post" name="messageform" class="settings">
                <p style="padding-left:8px;"><b><?php echo $this->_tpl_vars['Application705']; ?>
</b></p>
                <p>
                   <input style="float:left; width:15px; height:15px; margin-left:15px !important; margin-right:15px !important;" type='checkbox' value='1' id='message' name='usersetting_notify_message'<?php if ($this->_tpl_vars['user']->usersetting_info['usersetting_notify_message'] == 1): ?> CHECKED<?php endif; ?>/>
                   <label style="width:447px; clear:none;"><?php echo $this->_tpl_vars['Application706']; ?>
</label>
                </p>

                <p class="line">&nbsp;</p>
                <?php $this->assign('redirect_page', $this->_tpl_vars['url']->url_create('profile',$this->_tpl_vars['user']->user_info['user_username'])); ?>
                <div class="f-left">

                    <a class="button" href="javascript:void(0)" onclick="document.messageform.submit();"><span><?php echo $this->_tpl_vars['Application708']; ?>
</span></a>
                    <a class="button" href="<?php echo $this->_tpl_vars['redirect']; ?>
"><span>Cancel</span></a>
                    <input type='hidden' name='task' value='dosave'/>

                </div>
            </form>
        </div>

        </div>

<?php if (! $this->_tpl_vars['ajax_call']): ?>
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
  endif; ?>