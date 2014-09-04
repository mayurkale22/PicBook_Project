<?php /* Smarty version 2.6.14, created on 2013-11-09 02:02:57
         compiled from AdminLevels.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'AdminLevels.tpl', 25, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'AdminHeader.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<h2><?php echo $this->_tpl_vars['Admin445']; ?>
</h2>
<p><?php echo $this->_tpl_vars['Admin446']; ?>
</p>


<?php if ($this->_tpl_vars['is_error'] != 0): ?>
<p style="color:red;"> <?php echo $this->_tpl_vars['Admin459']; ?>
</p>
<?php endif; ?>

<?php if ($this->_tpl_vars['result'] == 2): ?>
  <p style="color:green;"><?php echo $this->_tpl_vars['Admin460']; ?>
</p>
<?php endif; ?>

<table cellpadding="0" cellspacing="0" class="view-users">
    <tr>
        <th align="left" valign="top" class="col-f"><a class='header' href='AdminLevels.php?s=<?php echo $this->_tpl_vars['i']; ?>
'><?php echo $this->_tpl_vars['Admin448']; ?>
</a></th>
        <th align="left" valign="top" style="width:auto !important;"><a href='AdminLevels.php?s=<?php echo $this->_tpl_vars['n']; ?>
'><?php echo $this->_tpl_vars['Admin449']; ?>
</a></th>
        <th align="left" valign="top"><a href='AdminLevels.php?s=<?php echo $this->_tpl_vars['u']; ?>
'><?php echo $this->_tpl_vars['Admin450']; ?>
</a></th>

        <th align="center" valign="top" style="width:auto !important;"><?php echo $this->_tpl_vars['Admin458']; ?>
</th>
        <th align="center" valign="top" class="col-l" colspan="2" style="width:auto;"><?php echo $this->_tpl_vars['Admin451']; ?>
</th>
    </tr>
    <?php unset($this->_sections['level_loop']);
$this->_sections['level_loop']['name'] = 'level_loop';
$this->_sections['level_loop']['loop'] = is_array($_loop=$this->_tpl_vars['levels']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['level_loop']['show'] = true;
$this->_sections['level_loop']['max'] = $this->_sections['level_loop']['loop'];
$this->_sections['level_loop']['step'] = 1;
$this->_sections['level_loop']['start'] = $this->_sections['level_loop']['step'] > 0 ? 0 : $this->_sections['level_loop']['loop']-1;
if ($this->_sections['level_loop']['show']) {
    $this->_sections['level_loop']['total'] = $this->_sections['level_loop']['loop'];
    if ($this->_sections['level_loop']['total'] == 0)
        $this->_sections['level_loop']['show'] = false;
} else
    $this->_sections['level_loop']['total'] = 0;
if ($this->_sections['level_loop']['show']):

            for ($this->_sections['level_loop']['index'] = $this->_sections['level_loop']['start'], $this->_sections['level_loop']['iteration'] = 1;
                 $this->_sections['level_loop']['iteration'] <= $this->_sections['level_loop']['total'];
                 $this->_sections['level_loop']['index'] += $this->_sections['level_loop']['step'], $this->_sections['level_loop']['iteration']++):
$this->_sections['level_loop']['rownum'] = $this->_sections['level_loop']['iteration'];
$this->_sections['level_loop']['index_prev'] = $this->_sections['level_loop']['index'] - $this->_sections['level_loop']['step'];
$this->_sections['level_loop']['index_next'] = $this->_sections['level_loop']['index'] + $this->_sections['level_loop']['step'];
$this->_sections['level_loop']['first']      = ($this->_sections['level_loop']['iteration'] == 1);
$this->_sections['level_loop']['last']       = ($this->_sections['level_loop']['iteration'] == $this->_sections['level_loop']['total']);
?>
    <tr class='<?php echo smarty_function_cycle(array('values' => "1, event"), $this);?>
'>
        <td align="left" class="col-f"><?php echo $this->_tpl_vars['levels'][$this->_sections['level_loop']['index']]['level_id']; ?>
</td>
        <td align="left" style="width:190px !important;"><?php echo $this->_tpl_vars['levels'][$this->_sections['level_loop']['index']]['level_name']; ?>
</td>
        <td align="left"><a href='AdminViewusers.php?f_level=<?php echo $this->_tpl_vars['levels'][$this->_sections['level_loop']['index']]['level_id']; ?>
'><?php echo $this->_tpl_vars['levels'][$this->_sections['level_loop']['index']]['level_users']; ?>
 <?php echo $this->_tpl_vars['Admin461']; ?>
</a></td>

        <td align="center" style="width:240px !important;"><a href='AdminLevels.php?task=savechanges&default=<?php echo $this->_tpl_vars['levels'][$this->_sections['level_loop']['index']]['level_id']; ?>
'><img src='../images/icons/<?php if ($this->_tpl_vars['levels'][$this->_sections['level_loop']['index']]['level_default'] == 1): ?>admin_checkbox2.gif<?php else: ?>admin_checkbox1.gif<?php endif; ?>' border='0' class='icon'></a></td>
        <td align="center" class="col-l" colspan="2" style="width:auto !important;" ><a href='AdminEditLevels.php?level_id=<?php echo $this->_tpl_vars['levels'][$this->_sections['level_loop']['index']]['level_id']; ?>
'><?php echo $this->_tpl_vars['Admin452']; ?>
</a> | <a href='AdminLevels.php?task=confirm&level_id=<?php echo $this->_tpl_vars['levels'][$this->_sections['level_loop']['index']]['level_id']; ?>
'><?php echo $this->_tpl_vars['Admin453']; ?>
</a></td>
    </tr>
    <?php endfor; endif; ?>
</table>
<form action='AdminAddLevels.php' method='GET'>
<label class="button"><input type='submit' value='<?php echo $this->_tpl_vars['Admin447']; ?>
'/></label>
</form>

<br>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'AdminFooter.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>