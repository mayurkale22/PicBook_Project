<?php /* Smarty version 2.6.14, created on 2013-11-09 01:56:07
         compiled from AdminViewadmins.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'AdminViewadmins.tpl', 16, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'AdminHeader.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<h2><?php echo $this->_tpl_vars['Admin888']; ?>
</h2>
<p><?php echo $this->_tpl_vars['Admin889']; ?>
</p>

    <table cellpadding="0" cellspacing="0" class="view-users">
        <tr>
            <th align="left" valign="top" class="col-f"><div class="t-input"><label><?php echo $this->_tpl_vars['Admin890']; ?>
</label></div></th>
            <th align="left" valign="top"><?php echo $this->_tpl_vars['Admin891']; ?>
</th>
            <th align="left" valign="top"><?php echo $this->_tpl_vars['Admin892']; ?>
</th>
            <th align="left" valign="top"><?php echo $this->_tpl_vars['Admin893']; ?>
</th>
            <th align="left" valign="top"><?php echo $this->_tpl_vars['Admin894']; ?>
</th>
            <th align="center" valign="top"><?php echo $this->_tpl_vars['Admin895']; ?>
</th>
        </tr>
        <?php unset($this->_sections['admin_loop']);
$this->_sections['admin_loop']['name'] = 'admin_loop';
$this->_sections['admin_loop']['loop'] = is_array($_loop=$this->_tpl_vars['admins']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['admin_loop']['show'] = true;
$this->_sections['admin_loop']['max'] = $this->_sections['admin_loop']['loop'];
$this->_sections['admin_loop']['step'] = 1;
$this->_sections['admin_loop']['start'] = $this->_sections['admin_loop']['step'] > 0 ? 0 : $this->_sections['admin_loop']['loop']-1;
if ($this->_sections['admin_loop']['show']) {
    $this->_sections['admin_loop']['total'] = $this->_sections['admin_loop']['loop'];
    if ($this->_sections['admin_loop']['total'] == 0)
        $this->_sections['admin_loop']['show'] = false;
} else
    $this->_sections['admin_loop']['total'] = 0;
if ($this->_sections['admin_loop']['show']):

            for ($this->_sections['admin_loop']['index'] = $this->_sections['admin_loop']['start'], $this->_sections['admin_loop']['iteration'] = 1;
                 $this->_sections['admin_loop']['iteration'] <= $this->_sections['admin_loop']['total'];
                 $this->_sections['admin_loop']['index'] += $this->_sections['admin_loop']['step'], $this->_sections['admin_loop']['iteration']++):
$this->_sections['admin_loop']['rownum'] = $this->_sections['admin_loop']['iteration'];
$this->_sections['admin_loop']['index_prev'] = $this->_sections['admin_loop']['index'] - $this->_sections['admin_loop']['step'];
$this->_sections['admin_loop']['index_next'] = $this->_sections['admin_loop']['index'] + $this->_sections['admin_loop']['step'];
$this->_sections['admin_loop']['first']      = ($this->_sections['admin_loop']['iteration'] == 1);
$this->_sections['admin_loop']['last']       = ($this->_sections['admin_loop']['iteration'] == $this->_sections['admin_loop']['total']);
?>
        <tr class='<?php echo smarty_function_cycle(array('values' => "1, event"), $this);?>
'>
            <td align="left" class="col-f"><div class="t-input"><?php echo $this->_tpl_vars['admins'][$this->_sections['admin_loop']['index']]['admin_id']; ?>
</div></td>
            <td align="left"><?php echo $this->_tpl_vars['admins'][$this->_sections['admin_loop']['index']]['admin_username']; ?>
</td>
            <td align="left"><?php echo $this->_tpl_vars['admins'][$this->_sections['admin_loop']['index']]['admin_name']; ?>
</td>
            <td align="left"><a href='mailto:<?php echo $this->_tpl_vars['admins'][$this->_sections['admin_loop']['index']]['admin_email']; ?>
'><?php echo $this->_tpl_vars['admins'][$this->_sections['admin_loop']['index']]['admin_email']; ?>
</a></td>
            <td align="left"><?php if ($this->_tpl_vars['admins'][$this->_sections['admin_loop']['index']]['admin_status'] == '0'):  echo $this->_tpl_vars['Admin9'];  else:  echo $this->_tpl_vars['Admin10'];  endif; ?></td>
            <td align="center" class="col-l"><a href='AdminEditViewadmins.php?admin_id=<?php echo $this->_tpl_vars['admins'][$this->_sections['admin_loop']['index']]['admin_id']; ?>
'><?php echo $this->_tpl_vars['Admin898']; ?>
</a><?php if ($this->_tpl_vars['admins'][$this->_sections['admin_loop']['index']]['admin_status'] != '0'): ?> | <a href='AdminViewadmins.php?task=confirmdeleteadmin&admin_id=<?php echo $this->_tpl_vars['admins'][$this->_sections['admin_loop']['index']]['admin_id']; ?>
'><?php echo $this->_tpl_vars['Admin899']; ?>
</a><?php endif; ?></td>
        </tr>
        <?php endfor; endif; ?>
    </table>

<form action='AdminAddViewadmins.php' method='POST'>
<label class="button"><input type='submit' value='<?php echo $this->_tpl_vars['Admin900']; ?>
'></label>
<input type='hidden' name='task' value='main'>
</form>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'AdminFooter.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>