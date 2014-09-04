<?php /* Smarty version 2.6.14, created on 2013-11-09 01:56:11
         compiled from AdminViewadminsEdit.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'AdminHeader.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<h2><?php echo $this->_tpl_vars['Admin914']; ?>
</h2>
<p><?php echo $this->_tpl_vars['Admin915']; ?>
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

<?php if ($this->_tpl_vars['error_message']): ?><p style="color:red;"><?php echo $this->_tpl_vars['error_message']; ?>
</p><?php endif; ?>

<table cellpadding='0' cellspacing='4' style="color:#666666;">
<form action='AdminEditViewadmins.php' method='POST'>
<tr>
<td class='form1'><?php echo $this->_tpl_vars['Admin916']; ?>
</td>
<td class='form2'><input type='text' class="input-border" name='admin_username' value='<?php echo $this->_tpl_vars['admin_username']; ?>
' maxlength='50'></td>
</tr>
<tr>
<td class='form1'><?php echo $this->_tpl_vars['Admin919']; ?>
</td>
<td class='form2'><input type='text' class="input-border" name='admin_name' value='<?php echo $this->_tpl_vars['admin_name']; ?>
' maxlength='50'></td>
</tr>
<tr>
<td class='form1'><?php echo $this->_tpl_vars['Admin920']; ?>
</td>
<td class='form2'><input type='text' class="input-border" name='admin_email' value='<?php echo $this->_tpl_vars['admin_email']; ?>
' maxlength='70'></td>
</tr>
<tr>
<td class='form1'><?php echo $this->_tpl_vars['Admin923']; ?>
</td>
<td class='form2'><input type='password' class="input-border" name='admin_old_password' maxlength='50'></td>
</tr>
<tr>
<td class='form1'><?php echo $this->_tpl_vars['Admin917']; ?>
</td>
<td class='form2'><input type='password' class="input-border" name='admin_password' maxlength='50'></td>
</tr>
<tr>
<td class='form1'><?php echo $this->_tpl_vars['Admin918']; ?>
</td>
<td class='form2'><input type='password' class="input-border" name='admin_password_confirm' maxlength='50'></td>
</tr>
<tr>

<td class='form2' colspan="2" align="right">
  <table cellpadding='0' cellspacing='0'>
  <tr>
  <td><label class="button"><input type='submit' value='<?php echo $this->_tpl_vars['Admin921']; ?>
'></label>&nbsp;</td>
  <input type='hidden' name='task' value='editadmin'>
  <input type='hidden' name='admin_id' value='<?php echo $this->_tpl_vars['admin_id']; ?>
'>
  </form>
  <form action='AdminEditViewadmins.php' method='POST'>
  <td><label class="button"><input type='submit' value='<?php echo $this->_tpl_vars['Admin922']; ?>
'></label></td>
  <input type='hidden' name='task' value='cancel'>
  </form>
  </tr>
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