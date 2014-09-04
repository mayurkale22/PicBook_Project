<?php /* Smarty version 2.6.14, created on 2013-11-09 14:30:30
         compiled from UserAccountPass.tpl */ ?>
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
        .form_check input{
            border:none !important;
        }
    </style>
    '; ?>



    <div class="grey-head"><h2><?php echo $this->_tpl_vars['Application411']; ?>
</h2></div>
    <div class="row-blue">
        <p class="blue"><?php echo $this->_tpl_vars['Application412']; ?>
</p>
    </div>

    <div class="layers">
        <ul class="list01">

            <li <?php if ($this->_tpl_vars['page'] == 'UserAccount'): ?>class="ui-state-active ui-tabs-selected"<?php endif; ?>>
                <a href='UserAccountPass.php'><?php echo $this->_tpl_vars['Application386']; ?>
</a>
            </li>


            <li <?php if ($this->_tpl_vars['page'] == 'UserAccountDelete'): ?>class="ui-state-active ui-tabs-selected"<?php endif; ?>>
                <a href='UserAccountDelete.php'><?php echo $this->_tpl_vars['Application387']; ?>
</a>
            </li>
        </ul>


                <?php if ($this->_tpl_vars['result'] != 0): ?>
        <br/>
        <p align="center" style="color:green;"><?php echo $this->_tpl_vars['Application407']; ?>
</p>
        <br/>

                <?php elseif ($this->_tpl_vars['is_error'] != 0): ?>
        <br/>
        <p align="center" style="color:red;"><?php echo $this->_tpl_vars['error_message']; ?>
</p>
        <br/>
        <?php endif; ?>

        <div id="primary" class="info-cnt tuneddivs">
            <form action='UserAccountPass.php' method="POST" class="settings">
                <p>
                    <label><?php echo $this->_tpl_vars['Application413']; ?>
</label>
                    <input type='password' name='password_old' class='text' size='30' maxlength='50'/>
                </p>
                <p>
                    <label><?php echo $this->_tpl_vars['Application414']; ?>
</label>
                    <input type='password' name='password_new' class='text' size='30' maxlength='50'/>
                </p>
                <p>
                    <label><?php echo $this->_tpl_vars['Application415']; ?>
</label>
                    <input type='password' name='password_new2' class='text' size='30' maxlength='50'/>
                </p>
               
                <p class="line">&nbsp;</p>
                <?php $this->assign('redirect_page', $this->_tpl_vars['url']->url_create('profile',$this->_tpl_vars['user']->user_info['user_username'])); ?>

                <div class="submits">
                    <label><input type="submit" value="<?php echo $this->_tpl_vars['Application416']; ?>
"/></label>
                    <label><input type="button" onclick="location.href='<?php echo $this->_tpl_vars['redirect_page']; ?>
'" value="Cancel"/></label>
                </div>

                <input type='hidden' name='task' value='dosave'/>
            </form>
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