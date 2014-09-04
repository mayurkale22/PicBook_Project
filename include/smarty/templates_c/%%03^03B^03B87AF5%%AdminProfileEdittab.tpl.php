<?php /* Smarty version 2.6.14, created on 2013-11-09 01:59:30
         compiled from AdminProfileEdittab.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'AdminHeader.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<h2><?php echo $this->_tpl_vars['Admin701']; ?>
</h2>
<p><?php echo $this->_tpl_vars['Admin702']; ?>
</p>

<?php if ($this->_tpl_vars['is_error'] != 0): ?>
    <p style="color:red;"><?php echo $this->_tpl_vars['Admin693']; ?>
</p>
<?php endif; ?>

<?php echo '
<style type="text/css">
    .input-border{
        border-color:#CBD0D2;
        border-style:solid;
        border-width:1px;
    }
</style>
'; ?>


<table cellpadding='0' cellspacing='4' style="color:#666666;">
<form action='AdminProfileEdittab.php' method='POST'>
<tr>
<td class='form1'><?php echo $this->_tpl_vars['Admin695']; ?>
</td>
<td class='form2'><input type='text' class='input-border' size='30' name='tab_name' value='<?php echo $this->_tpl_vars['tab_name']; ?>
' maxlength='50'></td>
</tr>
<tr>
<td class='form1'>&nbsp;</td>
<td class='form2'>

  <table cellpadding='0' cellspacing='0'>
  <tr>
  <td><label class="button"><input type='submit' value='<?php echo $this->_tpl_vars['Admin696']; ?>
'/></label></td>
  <input type='hidden' name='task' value='edittab'>
  <input type='hidden' name='o' value='<?php echo $this->_tpl_vars['o']; ?>
'>
  <input type='hidden' name='tab_id' value='<?php echo $this->_tpl_vars['tab_id']; ?>
'>
  </form>
  <form action='AdminProfileEdittab.php' method='POST'>
  <td><label class="button"><input type='submit' value='<?php echo $this->_tpl_vars['Admin698']; ?>
'/></label></td>
  <input type='hidden' name='task' value='confirmdeletetab'>
  <input type='hidden' name='o' value='<?php echo $this->_tpl_vars['o']; ?>
'>
  <input type='hidden' name='tab_id' value='<?php echo $this->_tpl_vars['tab_id']; ?>
'>
  </form>
  <form action='AdminProfileEdittab.php' method='POST'>
  <td><label class="button"><input type='submit' value='<?php echo $this->_tpl_vars['Admin697']; ?>
'/></label></td>
  <input type='hidden' name='task' value='cancel'>
  <input type='hidden' name='o' value='<?php echo $this->_tpl_vars['o']; ?>
'>
  </form>
  </tr>
  </table>

</td>
</tr>
</table>

<br>

<table cellpadding='0' cellspacing='0'>
<?php unset($this->_sections['field_loop']);
$this->_sections['field_loop']['name'] = 'field_loop';
$this->_sections['field_loop']['loop'] = is_array($_loop=$this->_tpl_vars['fields']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['field_loop']['show'] = true;
$this->_sections['field_loop']['max'] = $this->_sections['field_loop']['loop'];
$this->_sections['field_loop']['step'] = 1;
$this->_sections['field_loop']['start'] = $this->_sections['field_loop']['step'] > 0 ? 0 : $this->_sections['field_loop']['loop']-1;
if ($this->_sections['field_loop']['show']) {
    $this->_sections['field_loop']['total'] = $this->_sections['field_loop']['loop'];
    if ($this->_sections['field_loop']['total'] == 0)
        $this->_sections['field_loop']['show'] = false;
} else
    $this->_sections['field_loop']['total'] = 0;
if ($this->_sections['field_loop']['show']):

            for ($this->_sections['field_loop']['index'] = $this->_sections['field_loop']['start'], $this->_sections['field_loop']['iteration'] = 1;
                 $this->_sections['field_loop']['iteration'] <= $this->_sections['field_loop']['total'];
                 $this->_sections['field_loop']['index'] += $this->_sections['field_loop']['step'], $this->_sections['field_loop']['iteration']++):
$this->_sections['field_loop']['rownum'] = $this->_sections['field_loop']['iteration'];
$this->_sections['field_loop']['index_prev'] = $this->_sections['field_loop']['index'] - $this->_sections['field_loop']['step'];
$this->_sections['field_loop']['index_next'] = $this->_sections['field_loop']['index'] + $this->_sections['field_loop']['step'];
$this->_sections['field_loop']['first']      = ($this->_sections['field_loop']['iteration'] == 1);
$this->_sections['field_loop']['last']       = ($this->_sections['field_loop']['iteration'] == $this->_sections['field_loop']['total']);
?>
<tr>
  <?php if ($this->_tpl_vars['fields'][$this->_sections['field_loop']['index']]['field_order'] != 'first'): ?>
    <td>&nbsp;&nbsp; <a href='AdminProfileEdittab.php?task=reorder&tab_id=<?php echo $this->_tpl_vars['tab_id']; ?>
&field_id=<?php echo $this->_tpl_vars['fields'][$this->_sections['field_loop']['index']]['field_prev']; ?>
&o=<?php echo $this->_tpl_vars['o']; ?>
'><img src='../images/arrow_up.gif' border='0'></a></td>
  <?php else: ?>
    <td>&nbsp;&nbsp;</td>
  <?php endif; ?>

  <?php if ($this->_tpl_vars['fields'][$this->_sections['field_loop']['index']]['field_order'] != 'last'): ?>
    <td>&nbsp;&nbsp; <a href='AdminProfileEdittab.php?task=reorder&tab_id=<?php echo $this->_tpl_vars['tab_id']; ?>
&field_id=<?php echo $this->_tpl_vars['fields'][$this->_sections['field_loop']['index']]['field_id']; ?>
&o=<?php echo $this->_tpl_vars['o']; ?>
'><img src='../images/arrow_down.gif' border='0'></a></td>
  <?php else: ?>
    <td>&nbsp;&nbsp;</td>
  <?php endif; ?>

  <td>&nbsp;&nbsp; <?php echo $this->_tpl_vars['fields'][$this->_sections['field_loop']['index']]['field_title']; ?>
</td>
</tr>
<?php endfor; endif; ?>
</table>

<br>

<form action='AdminProfileEdittab.php' method='POST'>
<label class="button"><input type='submit' value='<?php echo $this->_tpl_vars['Admin700']; ?>
'/></label>
<input type='hidden' name='task' value='cancel'>
<input type='hidden' name='o' value='<?php echo $this->_tpl_vars['o']; ?>
'>
</form>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'AdminFooter.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>