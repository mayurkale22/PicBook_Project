<?php /* Smarty version 2.6.14, created on 2013-11-09 02:31:58
         compiled from AdminTemplatesEdit.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'AdminHeader.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<h2><?php echo $this->_tpl_vars['Admin864']; ?>
</h2>
<p><?php echo $this->_tpl_vars['Admin865']; ?>
</p>


<?php if ($this->_tpl_vars['error_message'] == ""): ?>
<!-- SHOW EDIT TEMPLATE FORM -->
  <form action='AdminEditTemplates.php' method='POST'>
  <textarea name='template_code' rows='40' style="width:800px" class='template'><?php echo $this->_tpl_vars['template_code']; ?>
</textarea>
  <br>
  <table cellpadding='0' cellspacing='0'>
  <tr>
  <td><label class="button"><input type='submit' value='<?php echo $this->_tpl_vars['Admin866']; ?>
'/></label>&nbsp;
  <input type='hidden' name='task' value='save'>
  <input type='hidden' name='t' value='<?php echo $this->_tpl_vars['filename']; ?>
'>
  </form>
  </td>
  <td><form action='AdminTemplates.php' method='POST'><label class="button"><input style="width: 120px" type='submit' value='<?php echo $this->_tpl_vars['Admin867']; ?>
'/></label>&nbsp;</form></td>
  </tr>
  </table>
<?php else: ?>
<!-- SHOW ERROR -->
  <p style="color:red;"><?php echo $this->_tpl_vars['error_message']; ?>
</p>
  <table cellpadding='0' cellspacing='0'>
  
  <tr>
  <td><form action='AdminTemplates.php' method='POST'><label class="button"><input style="width: 120px" type='submit' value='<?php echo $this->_tpl_vars['Admin873']; ?>
'/></label>&nbsp;</form></td>
  </tr>
  
  </table>
<?php endif; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'AdminFooter.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>