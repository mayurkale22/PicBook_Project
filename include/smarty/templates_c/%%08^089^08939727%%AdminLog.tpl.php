<?php /* Smarty version 2.6.14, created on 2013-11-09 15:48:10
         compiled from AdminLog.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'AdminLog.tpl', 15, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'AdminHeader.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<h2><?php echo $this->_tpl_vars['Admin533']; ?>
</h2>
<p><?php echo $this->_tpl_vars['Admin534']; ?>
</p>

<table cellpadding="0" cellspacing="0" class="view-users">
    <tr>
        <th align="left" valign="top" class="col-f"><?php echo $this->_tpl_vars['Admin535']; ?>
</th>
        <th align="left" valign="top" style="width:auto !important;"><?php echo $this->_tpl_vars['Admin537']; ?>
</th>
        <th align="left" valign="top"><?php echo $this->_tpl_vars['Admin536']; ?>
</th>
        <th align="center" valign="top" style="width:auto !important;"><?php echo $this->_tpl_vars['Admin538']; ?>
</th>
        <th align="center" valign="top" class="col-l" colspan="2" style="width:auto;"><?php echo $this->_tpl_vars['Admin539']; ?>
 (<?php echo $this->_tpl_vars['Admin540']; ?>
)</th>
    </tr>
    <?php unset($this->_sections['login_loop']);
$this->_sections['login_loop']['name'] = 'login_loop';
$this->_sections['login_loop']['loop'] = is_array($_loop=$this->_tpl_vars['logins']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['login_loop']['show'] = true;
$this->_sections['login_loop']['max'] = $this->_sections['login_loop']['loop'];
$this->_sections['login_loop']['step'] = 1;
$this->_sections['login_loop']['start'] = $this->_sections['login_loop']['step'] > 0 ? 0 : $this->_sections['login_loop']['loop']-1;
if ($this->_sections['login_loop']['show']) {
    $this->_sections['login_loop']['total'] = $this->_sections['login_loop']['loop'];
    if ($this->_sections['login_loop']['total'] == 0)
        $this->_sections['login_loop']['show'] = false;
} else
    $this->_sections['login_loop']['total'] = 0;
if ($this->_sections['login_loop']['show']):

            for ($this->_sections['login_loop']['index'] = $this->_sections['login_loop']['start'], $this->_sections['login_loop']['iteration'] = 1;
                 $this->_sections['login_loop']['iteration'] <= $this->_sections['login_loop']['total'];
                 $this->_sections['login_loop']['index'] += $this->_sections['login_loop']['step'], $this->_sections['login_loop']['iteration']++):
$this->_sections['login_loop']['rownum'] = $this->_sections['login_loop']['iteration'];
$this->_sections['login_loop']['index_prev'] = $this->_sections['login_loop']['index'] - $this->_sections['login_loop']['step'];
$this->_sections['login_loop']['index_next'] = $this->_sections['login_loop']['index'] + $this->_sections['login_loop']['step'];
$this->_sections['login_loop']['first']      = ($this->_sections['login_loop']['iteration'] == 1);
$this->_sections['login_loop']['last']       = ($this->_sections['login_loop']['iteration'] == $this->_sections['login_loop']['total']);
?>
    <tr class='<?php echo smarty_function_cycle(array('values' => "1, event"), $this);?>
'>
        <td align="left" class="col-f"><?php echo $this->_tpl_vars['logins'][$this->_sections['login_loop']['index']]['login_id']; ?>
</td>
        <td align="left" style="width:190px !important;"><?php echo $this->_tpl_vars['datetime']->cdate("g:i:s a, M. j",$this->_tpl_vars['datetime']->timezone($this->_tpl_vars['logins'][$this->_sections['login_loop']['index']]['login_date'],$this->_tpl_vars['setting']['setting_timezone'])); ?>
</td>
        <td align="left"><a href='mailto:<?php echo $this->_tpl_vars['logins'][$this->_sections['login_loop']['index']]['login_email']; ?>
'><?php echo $this->_tpl_vars['logins'][$this->_sections['login_loop']['index']]['login_email']; ?>
</a></td>
        <td align="center" style="width:240px !important;">
            <?php if ($this->_tpl_vars['logins'][$this->_sections['login_loop']['index']]['login_result'] == 0): ?>
            <font color='#FF0000'><?php echo $this->_tpl_vars['Admin542']; ?>
</font>
            <?php else: ?>
            <?php echo $this->_tpl_vars['Admin541']; ?>

        <?php endif; ?></td>
        <td align="center" class="col-l" colspan="2" style="width:auto !important;" ><?php echo $this->_tpl_vars['logins'][$this->_sections['login_loop']['index']]['login_ip']; ?>
 <?php echo $this->_tpl_vars['logins'][$this->_sections['login_loop']['index']]['login_hostname']; ?>
</td>
    </tr>
    <?php endfor; endif; ?>
</table>

<br/>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'AdminFooter.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>