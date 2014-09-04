<?php /* Smarty version 2.6.14, created on 2013-11-09 02:01:44
         compiled from AdminViewadminsAdd.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'AdminHeader.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<h2><?php echo $this->_tpl_vars['Admin905']; ?>
</h2>
<p><?php echo $this->_tpl_vars['Admin906']; ?>
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


<p style="color:red;"><?php echo $this->_tpl_vars['error_message']; ?>
</p>

<table cellpadding='0' cellspacing='3' style="color:#666666;">
    <form action='AdminAddViewadmins.php' method='POST'>
        <tr>
            <td class='form1'><?php echo $this->_tpl_vars['Admin907']; ?>
</td>
            <td class='form2'><input type='text' class="input-border" name='admin_username' value='<?php echo $this->_tpl_vars['admin_username']; ?>
' maxlength='50'></td>
        </tr>
        <tr>
            <td class='form1'><?php echo $this->_tpl_vars['Admin908']; ?>
</td>
            <td class='form2'><input type='password' class="input-border" name='admin_password' maxlength='50'></td>
        </tr>
        <tr>
            <td class='form1'><?php echo $this->_tpl_vars['Admin909']; ?>
</td>
            <td class='form2'><input type='password' class="input-border" name='admin_password_confirm' maxlength='50'></td>
        </tr>
        <tr>
            <td class='form1'><?php echo $this->_tpl_vars['Admin910']; ?>
</td>
            <td class='form2'><input type='text' class="input-border" name='admin_name' value='<?php echo $this->_tpl_vars['admin_name']; ?>
' maxlength='50'></td>
        </tr>
        <tr>
            <td class='form1'><?php echo $this->_tpl_vars['Admin911']; ?>
</td>
            <td class='form2'><input type='text' class="input-border" name='admin_email' value='<?php echo $this->_tpl_vars['admin_email']; ?>
' maxlength='70'></td>
        </tr>
        <tr>
        
        <td class='form2' colspan="2" align="right">
        <table cellpadding='0' cellspacing='0' style="width:auto;">
        <tr>
            <td>&nbsp;</td>
        <td><label class="button"><input type='submit' value='<?php echo $this->_tpl_vars['Admin912']; ?>
'></label>&nbsp;</td>

        <input type='hidden' name='task' value='addadmin'>
          
    </form>
    <form action='AdminAddViewadmins.php' method='POST'>
        
            <td><label class="button"><input type='submit' value='<?php echo $this->_tpl_vars['Admin913']; ?>
'></label></td>
        </tr>
        <input type='hidden' name='task' value='cancel'>
    </form>
    </table>
    </td>
    </tr>
</table>

<br />



<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'AdminFooter.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>