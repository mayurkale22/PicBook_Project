<?php /* Smarty version 2.6.14, created on 2013-11-09 02:03:02
         compiled from AdminLevelsAdd.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'AdminHeader.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<h2><?php echo $this->_tpl_vars['Admin462']; ?>
</h2>
<p><?php echo $this->_tpl_vars['Admin463']; ?>
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


<?php if ($this->_tpl_vars['is_error'] != 0): ?>
<p style="color:red;"><?php echo $this->_tpl_vars['error_message']; ?>
</p>
<?php endif; ?>

<table cellpadding='0' cellspacing='6' style="color:#666666;">
<form action='AdminAddLevels.php' method='POST'>
<tr>
<td class='form1' align="left"><?php echo $this->_tpl_vars['Admin464']; ?>
:</td>
<td class='form2' align="left"><input class="input-border" type='text' class='text' name='level_name' value='<?php echo $this->_tpl_vars['level_name']; ?>
' size='41' maxlength='50'/></td>
</tr>
<tr>
<td class='form1' valign="top"><?php echo $this->_tpl_vars['Admin465']; ?>
:</td>
<td class='form2'><textarea class="input-border" name='level_desc' rows='4' cols='40' class='text' style="overflow:auto;"><?php echo $this->_tpl_vars['level_desc']; ?>
</textarea></td>
</tr>
<tr>

<td class='form2' colspan="2" align="right">
  <table cellpadding='0' cellspacing='0' width="100%">
  <tr>
     
  <td align="right"><label class="button" style="float:right;"><input type='submit' value='<?php echo $this->_tpl_vars['Admin466']; ?>
'/></label>&nbsp;</td>
  <input type='hidden' name='task' value='createlevel'>
  </form>
  <form action='AdminLevels.php' method='POST'>
  <td><label class="button"><input type='submit' value='<?php echo $this->_tpl_vars['Admin467']; ?>
'/></label></td>
  </tr>
  </form>
  </table>
</td>
</tr>
</table>




<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'AdminFooter.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>