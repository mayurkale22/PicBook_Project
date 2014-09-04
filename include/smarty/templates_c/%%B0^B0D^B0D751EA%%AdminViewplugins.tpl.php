<?php /* Smarty version 2.6.14, created on 2013-11-09 02:02:56
         compiled from AdminViewplugins.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', 'AdminViewplugins.tpl', 7, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'AdminHeader.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<h2><?php echo $this->_tpl_vars['Admin924']; ?>
</h2>
<p><?php echo $this->_tpl_vars['Admin925']; ?>
</p>


<?php if (count($this->_tpl_vars['plugins_ready']) == 0 & count($this->_tpl_vars['plugins_installed']) == 0): ?>
<p>
    <img src='../images/icons/bulb16.gif' border='0' class='icon'>
    <b><?php echo $this->_tpl_vars['Admin926']; ?>
</b>
</p>

<?php endif; ?>

<?php unset($this->_sections['ready_loop']);
$this->_sections['ready_loop']['name'] = 'ready_loop';
$this->_sections['ready_loop']['loop'] = is_array($_loop=$this->_tpl_vars['plugins_ready']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['ready_loop']['show'] = true;
$this->_sections['ready_loop']['max'] = $this->_sections['ready_loop']['loop'];
$this->_sections['ready_loop']['step'] = 1;
$this->_sections['ready_loop']['start'] = $this->_sections['ready_loop']['step'] > 0 ? 0 : $this->_sections['ready_loop']['loop']-1;
if ($this->_sections['ready_loop']['show']) {
    $this->_sections['ready_loop']['total'] = $this->_sections['ready_loop']['loop'];
    if ($this->_sections['ready_loop']['total'] == 0)
        $this->_sections['ready_loop']['show'] = false;
} else
    $this->_sections['ready_loop']['total'] = 0;
if ($this->_sections['ready_loop']['show']):

            for ($this->_sections['ready_loop']['index'] = $this->_sections['ready_loop']['start'], $this->_sections['ready_loop']['iteration'] = 1;
                 $this->_sections['ready_loop']['iteration'] <= $this->_sections['ready_loop']['total'];
                 $this->_sections['ready_loop']['index'] += $this->_sections['ready_loop']['step'], $this->_sections['ready_loop']['iteration']++):
$this->_sections['ready_loop']['rownum'] = $this->_sections['ready_loop']['iteration'];
$this->_sections['ready_loop']['index_prev'] = $this->_sections['ready_loop']['index'] - $this->_sections['ready_loop']['step'];
$this->_sections['ready_loop']['index_next'] = $this->_sections['ready_loop']['index'] + $this->_sections['ready_loop']['step'];
$this->_sections['ready_loop']['first']      = ($this->_sections['ready_loop']['iteration'] == 1);
$this->_sections['ready_loop']['last']       = ($this->_sections['ready_loop']['iteration'] == $this->_sections['ready_loop']['total']);
?>
<div class="row-blue" style="height:auto !important;">
    <table width='100%' cellpadding='0' cellspacing='0' class='stats' style='margin-bottom: 10px; color:#666666;'>
        <tr>
            <td class='plugin'>
                <table cellpadding='2' cellspacing='0' width="390px">
                    <tr>
                        <td width="1px"></td>
                        <td class='plugin_name' width="280px"><b><?php echo $this->_tpl_vars['plugins_ready'][$this->_sections['ready_loop']['index']]['plugin_name']; ?>
 v<?php echo $this->_tpl_vars['plugins_ready'][$this->_sections['ready_loop']['index']]['plugin_version']; ?>
</b></td>
                    </tr>
                </table>
                <div style='margin-top: 5px;'><?php echo $this->_tpl_vars['plugins_ready'][$this->_sections['ready_loop']['index']]['plugin_desc']; ?>
</div>
                <div style='margin-top: 7px;'>
                    <a href='AdminViewplugins.php?install=<?php echo $this->_tpl_vars['plugins_ready'][$this->_sections['ready_loop']['index']]['plugin_type']; ?>
'><?php echo $this->_tpl_vars['Admin927']; ?>
</a>
                </div>
            </td>
        </tr>
    </table>
</div>
<?php endfor; endif; ?>

<?php unset($this->_sections['installed_loop']);
$this->_sections['installed_loop']['name'] = 'installed_loop';
$this->_sections['installed_loop']['loop'] = is_array($_loop=$this->_tpl_vars['plugins_installed']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['installed_loop']['show'] = true;
$this->_sections['installed_loop']['max'] = $this->_sections['installed_loop']['loop'];
$this->_sections['installed_loop']['step'] = 1;
$this->_sections['installed_loop']['start'] = $this->_sections['installed_loop']['step'] > 0 ? 0 : $this->_sections['installed_loop']['loop']-1;
if ($this->_sections['installed_loop']['show']) {
    $this->_sections['installed_loop']['total'] = $this->_sections['installed_loop']['loop'];
    if ($this->_sections['installed_loop']['total'] == 0)
        $this->_sections['installed_loop']['show'] = false;
} else
    $this->_sections['installed_loop']['total'] = 0;
if ($this->_sections['installed_loop']['show']):

            for ($this->_sections['installed_loop']['index'] = $this->_sections['installed_loop']['start'], $this->_sections['installed_loop']['iteration'] = 1;
                 $this->_sections['installed_loop']['iteration'] <= $this->_sections['installed_loop']['total'];
                 $this->_sections['installed_loop']['index'] += $this->_sections['installed_loop']['step'], $this->_sections['installed_loop']['iteration']++):
$this->_sections['installed_loop']['rownum'] = $this->_sections['installed_loop']['iteration'];
$this->_sections['installed_loop']['index_prev'] = $this->_sections['installed_loop']['index'] - $this->_sections['installed_loop']['step'];
$this->_sections['installed_loop']['index_next'] = $this->_sections['installed_loop']['index'] + $this->_sections['installed_loop']['step'];
$this->_sections['installed_loop']['first']      = ($this->_sections['installed_loop']['iteration'] == 1);
$this->_sections['installed_loop']['last']       = ($this->_sections['installed_loop']['iteration'] == $this->_sections['installed_loop']['total']);
?>
<div class="row-blue" style="height:auto !important;">
    <table width='100%' cellpadding='0' cellspacing='0' class='stats' style='margin-bottom: 10px; color:#666666;'>
        <tr>
            <td class='plugin'>
                <table cellpadding='2' cellspacing='0' width="390px">
                    <tr>
                        <td width="1px"></td>
                        <td class='plugin_name' width="280px"><b><?php echo $this->_tpl_vars['plugins_installed'][$this->_sections['installed_loop']['index']]['plugin_name']; ?>
 v<?php echo $this->_tpl_vars['plugins_installed'][$this->_sections['installed_loop']['index']]['plugin_version']; ?>
</b></td>
                    </tr>
                </table>
                <div style='margin-top: 5px;'><?php echo $this->_tpl_vars['plugins_installed'][$this->_sections['installed_loop']['index']]['plugin_desc']; ?>
</div>
                <?php if ($this->_tpl_vars['plugins_installed'][$this->_sections['installed_loop']['index']]['plugin_version_ready'] != "" & $this->_tpl_vars['plugins_installed'][$this->_sections['installed_loop']['index']]['plugin_version_ready'] <= $this->_tpl_vars['plugins_installed'][$this->_sections['installed_loop']['index']]['plugin_version']): ?>
                <table width='100%' cellpadding='0' cellspacing='0' style='margin-top: 10px; margin-bottom: 3px;'>
                    <tr valign="top">
                        <td class='error' valign="top" style="color:red;">
                            
                            <?php echo $this->_tpl_vars['Admin928'];  echo $this->_tpl_vars['plugins_installed'][$this->_sections['installed_loop']['index']]['plugin_type'];  echo $this->_tpl_vars['Admin931']; ?>

                        </td>
                    </tr>
                </table>
                <br>
                <?php endif; ?>
                <div style='margin-top: 7px;'>
                    <?php if ($this->_tpl_vars['plugins_installed'][$this->_sections['installed_loop']['index']]['plugin_version_ready'] > $this->_tpl_vars['plugins_installed'][$this->_sections['installed_loop']['index']]['plugin_version']): ?>
                    <a href='AdminViewplugins.php?install=<?php echo $this->_tpl_vars['plugins_installed'][$this->_sections['installed_loop']['index']]['plugin_type']; ?>
'><?php echo $this->_tpl_vars['Admin929']; ?>
</a> |
                    <?php elseif ($this->_tpl_vars['plugins_installed'][$this->_sections['installed_loop']['index']]['plugin_version_avail'] > $this->_tpl_vars['plugins_installed'][$this->_sections['installed_loop']['index']]['plugin_version']): ?>
                    <a href='http://www.socialengine.net/login.php' target='_blank'><?php echo $this->_tpl_vars['Admin930']; ?>
</a> |
                    <?php endif; ?>
                    <?php unset($this->_sections['page_loop']);
$this->_sections['page_loop']['name'] = 'page_loop';
$this->_sections['page_loop']['loop'] = is_array($_loop=$this->_tpl_vars['plugins_installed'][$this->_sections['installed_loop']['index']]['plugin_pages_main']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['page_loop']['show'] = true;
$this->_sections['page_loop']['max'] = $this->_sections['page_loop']['loop'];
$this->_sections['page_loop']['step'] = 1;
$this->_sections['page_loop']['start'] = $this->_sections['page_loop']['step'] > 0 ? 0 : $this->_sections['page_loop']['loop']-1;
if ($this->_sections['page_loop']['show']) {
    $this->_sections['page_loop']['total'] = $this->_sections['page_loop']['loop'];
    if ($this->_sections['page_loop']['total'] == 0)
        $this->_sections['page_loop']['show'] = false;
} else
    $this->_sections['page_loop']['total'] = 0;
if ($this->_sections['page_loop']['show']):

            for ($this->_sections['page_loop']['index'] = $this->_sections['page_loop']['start'], $this->_sections['page_loop']['iteration'] = 1;
                 $this->_sections['page_loop']['iteration'] <= $this->_sections['page_loop']['total'];
                 $this->_sections['page_loop']['index'] += $this->_sections['page_loop']['step'], $this->_sections['page_loop']['iteration']++):
$this->_sections['page_loop']['rownum'] = $this->_sections['page_loop']['iteration'];
$this->_sections['page_loop']['index_prev'] = $this->_sections['page_loop']['index'] - $this->_sections['page_loop']['step'];
$this->_sections['page_loop']['index_next'] = $this->_sections['page_loop']['index'] + $this->_sections['page_loop']['step'];
$this->_sections['page_loop']['first']      = ($this->_sections['page_loop']['iteration'] == 1);
$this->_sections['page_loop']['last']       = ($this->_sections['page_loop']['iteration'] == $this->_sections['page_loop']['total']);
?>
                    <a href='<?php echo $this->_tpl_vars['plugins_installed'][$this->_sections['installed_loop']['index']]['plugin_pages_main'][$this->_sections['page_loop']['index']]['file']; ?>
'><?php echo $this->_tpl_vars['plugins_installed'][$this->_sections['installed_loop']['index']]['plugin_pages_main'][$this->_sections['page_loop']['index']]['title']; ?>
</a><?php if ($this->_sections['page_loop']['last'] != TRUE): ?> | <?php endif; ?>
                    <?php endfor; endif; ?>
                </div>
            </td>
        </tr>
    </table>
</div>
<?php endfor; endif; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'AdminFooter.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>