<?php /* Smarty version 2.6.14, created on 2013-11-09 15:04:36
         compiled from HelpContact.tpl */ ?>
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
    </style>
    '; ?>


    <div class="grey-head"><h2><?php echo $this->_tpl_vars['Application109']; ?>
</h2></div>
    <div class="row-blue">
        <p class="blue"><?php echo $this->_tpl_vars['Application110']; ?>
</p>
    </div>

    <div class="layers">
        <ul class="list01">

            <li <?php if ($this->_tpl_vars['page'] == 'Help'): ?>class="ui-state-active ui-tabs-selected"<?php endif; ?>>
                <a href='Help.php'><?php echo $this->_tpl_vars['Application119']; ?>
</a>
            </li>

            <li <?php if ($this->_tpl_vars['page'] == 'HelpTos'): ?>class="ui-state-active ui-tabs-selected"<?php endif; ?>>
                <a href='HelpTos.php'><?php echo $this->_tpl_vars['Application120']; ?>
</a>
            </li>

            <li <?php if ($this->_tpl_vars['page'] == 'HelpContact'): ?>class="ui-state-active ui-tabs-selected"<?php endif; ?>>
                <a href='HelpContact.php'><?php echo $this->_tpl_vars['Application121']; ?>
</a>
            </li>
        </ul>

                <?php if ($this->_tpl_vars['result'] != ""): ?>
        <br/>
        <p align="center" style="color:green;"><?php echo $this->_tpl_vars['result']; ?>
</p>
        <br/>
        <?php endif; ?>

                <?php if ($this->_tpl_vars['is_error'] == 1): ?>
        <br/>
        <p align="center" style="color:red;"><?php echo $this->_tpl_vars['error_message']; ?>
</p>
        <br/>
        <?php endif; ?>


        <div id="primary" class="info-cnt tuneddivs">
                        <?php if ($this->_tpl_vars['success'] == 0): ?>
            <form action='HelpContact.php' method='POST' class="settings">
                <table cellpadding='0' cellspacing='0' class='form'>
                    <p>
                        <label><?php echo $this->_tpl_vars['Application111']; ?>
</label>
                        <input type='text' class='text' name='contact_name' maxlength='50' size='30' value='<?php echo $this->_tpl_vars['contact_name']; ?>
'/>
                    </p>
                    <p>
                        <label><?php echo $this->_tpl_vars['Application112']; ?>
</label>
                        <input type='text' class='text' name='contact_email' maxlength='70' size='30' value='<?php echo $this->_tpl_vars['contact_email']; ?>
'/>
                    </p>
                    <p>
                        <label><?php echo $this->_tpl_vars['Application113']; ?>
</label>
                        <input type='text' class='text' name='contact_subject' maxlength='50' size='30' value='<?php echo $this->_tpl_vars['contact_subject']; ?>
'/>
                    </p>
                    <p>
                        <label><?php echo $this->_tpl_vars['Application114']; ?>
</label>
                        <textarea style="border:1px solid #CBD0D2;" name='contact_message' rows='7' cols='60'><?php echo $this->_tpl_vars['contact_message']; ?>
</textarea>
                    </p>


                    <p class="line">&nbsp;</p>
                    <?php $this->assign('redirect_page', $this->_tpl_vars['url']->url_create('profile',$this->_tpl_vars['user']->user_info['user_username'])); ?>

                    <div class="submits">
                        <label><input type="submit" value="<?php echo $this->_tpl_vars['Application115']; ?>
"/></label>
                        <label><input type="button" onclick="location.href='<?php echo $this->_tpl_vars['redirect_page']; ?>
'" value="Cancel"/></label>
                    </div>
                    
                </table>
                <input type='hidden' name='task' value='dosend'/>
            </form>
            <?php endif; ?>
            
        </div>
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