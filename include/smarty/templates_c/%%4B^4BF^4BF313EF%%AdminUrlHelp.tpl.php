<?php /* Smarty version 2.6.14, created on 2013-11-09 15:49:04
         compiled from AdminUrlHelp.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'AdminHeader.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<h2><?php echo $this->_tpl_vars['Admin885']; ?>
</h2>
<p><?php echo $this->_tpl_vars['Admin886']; ?>
</p>
<?php echo '
<style type="text/css">
    .input-border{
        border-color:#CBD0D2;
        border-style:solid;
        border-width:1px;
    }
</style>
'; ?>


<form action='AdminUrl.php' method='POST'>
<textarea class="input-border" wrap='off' rows='25' cols='60' style='font-family: "Courier New", verdana, arial; width: 100%;'><?php echo $this->_tpl_vars['htaccess']; ?>
</textarea>

<br>

</form>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'AdminFooter.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>