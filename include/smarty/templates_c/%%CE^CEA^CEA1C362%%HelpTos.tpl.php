<?php /* Smarty version 2.6.14, created on 2013-11-09 15:04:35
         compiled from HelpTos.tpl */ ?>
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


    <div class="grey-head"><h2><?php echo $this->_tpl_vars['Application122']; ?>
</h2></div>
    <div class="row-blue">
        <p class="blue"><?php echo $this->_tpl_vars['Application122']; ?>
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

 

        <div id="primary" class="info-cnt tuneddivs">

            <p style="padding-left:25px"><?php echo $this->_tpl_vars['terms_of_service']; ?>
</p>
            <br/>  <br/>  <br/>  

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