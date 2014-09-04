<?php /* Smarty version 2.6.14, created on 2013-11-09 01:58:04
         compiled from AdminTemplates.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'AdminHeader.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<h2><?php echo $this->_tpl_vars['Admin857']; ?>
</h2>
<p><?php echo $this->_tpl_vars['Admin858']; ?>
</p>


<p class="line">&nbsp;</p>
<div class="row2" style="border:none;">
    <div class="f-left">
        <?php echo $this->_tpl_vars['Admin859']; ?>

        <ul>
            <?php unset($this->_sections['file_loop']);
$this->_sections['file_loop']['name'] = 'file_loop';
$this->_sections['file_loop']['loop'] = is_array($_loop=$this->_tpl_vars['user_files']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['file_loop']['show'] = true;
$this->_sections['file_loop']['max'] = $this->_sections['file_loop']['loop'];
$this->_sections['file_loop']['step'] = 1;
$this->_sections['file_loop']['start'] = $this->_sections['file_loop']['step'] > 0 ? 0 : $this->_sections['file_loop']['loop']-1;
if ($this->_sections['file_loop']['show']) {
    $this->_sections['file_loop']['total'] = $this->_sections['file_loop']['loop'];
    if ($this->_sections['file_loop']['total'] == 0)
        $this->_sections['file_loop']['show'] = false;
} else
    $this->_sections['file_loop']['total'] = 0;
if ($this->_sections['file_loop']['show']):

            for ($this->_sections['file_loop']['index'] = $this->_sections['file_loop']['start'], $this->_sections['file_loop']['iteration'] = 1;
                 $this->_sections['file_loop']['iteration'] <= $this->_sections['file_loop']['total'];
                 $this->_sections['file_loop']['index'] += $this->_sections['file_loop']['step'], $this->_sections['file_loop']['iteration']++):
$this->_sections['file_loop']['rownum'] = $this->_sections['file_loop']['iteration'];
$this->_sections['file_loop']['index_prev'] = $this->_sections['file_loop']['index'] - $this->_sections['file_loop']['step'];
$this->_sections['file_loop']['index_next'] = $this->_sections['file_loop']['index'] + $this->_sections['file_loop']['step'];
$this->_sections['file_loop']['first']      = ($this->_sections['file_loop']['iteration'] == 1);
$this->_sections['file_loop']['last']       = ($this->_sections['file_loop']['iteration'] == $this->_sections['file_loop']['total']);
?>
            <li><a href="AdminEditTemplates.php?t=<?php echo $this->_tpl_vars['user_files'][$this->_sections['file_loop']['index']]['filename']; ?>
"><?php echo $this->_tpl_vars['user_files'][$this->_sections['file_loop']['index']]['filename']; ?>
</a></li>
            <?php endfor; endif; ?>
        </ul>
    </div>
    <div class="f-left">
        <?php echo $this->_tpl_vars['Admin860']; ?>

        <ul>
            <?php unset($this->_sections['file_loop']);
$this->_sections['file_loop']['name'] = 'file_loop';
$this->_sections['file_loop']['loop'] = is_array($_loop=$this->_tpl_vars['base_files']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['file_loop']['show'] = true;
$this->_sections['file_loop']['max'] = $this->_sections['file_loop']['loop'];
$this->_sections['file_loop']['step'] = 1;
$this->_sections['file_loop']['start'] = $this->_sections['file_loop']['step'] > 0 ? 0 : $this->_sections['file_loop']['loop']-1;
if ($this->_sections['file_loop']['show']) {
    $this->_sections['file_loop']['total'] = $this->_sections['file_loop']['loop'];
    if ($this->_sections['file_loop']['total'] == 0)
        $this->_sections['file_loop']['show'] = false;
} else
    $this->_sections['file_loop']['total'] = 0;
if ($this->_sections['file_loop']['show']):

            for ($this->_sections['file_loop']['index'] = $this->_sections['file_loop']['start'], $this->_sections['file_loop']['iteration'] = 1;
                 $this->_sections['file_loop']['iteration'] <= $this->_sections['file_loop']['total'];
                 $this->_sections['file_loop']['index'] += $this->_sections['file_loop']['step'], $this->_sections['file_loop']['iteration']++):
$this->_sections['file_loop']['rownum'] = $this->_sections['file_loop']['iteration'];
$this->_sections['file_loop']['index_prev'] = $this->_sections['file_loop']['index'] - $this->_sections['file_loop']['step'];
$this->_sections['file_loop']['index_next'] = $this->_sections['file_loop']['index'] + $this->_sections['file_loop']['step'];
$this->_sections['file_loop']['first']      = ($this->_sections['file_loop']['iteration'] == 1);
$this->_sections['file_loop']['last']       = ($this->_sections['file_loop']['iteration'] == $this->_sections['file_loop']['total']);
?>
            <li><a href="AdminEditTemplates.php?t=<?php echo $this->_tpl_vars['base_files'][$this->_sections['file_loop']['index']]['filename']; ?>
"><?php echo $this->_tpl_vars['base_files'][$this->_sections['file_loop']['index']]['filename']; ?>
</a></li>
            <?php endfor; endif; ?>
        </ul>
    </div>
    <div class="f-left">
        <?php echo $this->_tpl_vars['Admin861']; ?>

        <ul>
            <?php unset($this->_sections['file_loop']);
$this->_sections['file_loop']['name'] = 'file_loop';
$this->_sections['file_loop']['loop'] = is_array($_loop=$this->_tpl_vars['head_files']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['file_loop']['show'] = true;
$this->_sections['file_loop']['max'] = $this->_sections['file_loop']['loop'];
$this->_sections['file_loop']['step'] = 1;
$this->_sections['file_loop']['start'] = $this->_sections['file_loop']['step'] > 0 ? 0 : $this->_sections['file_loop']['loop']-1;
if ($this->_sections['file_loop']['show']) {
    $this->_sections['file_loop']['total'] = $this->_sections['file_loop']['loop'];
    if ($this->_sections['file_loop']['total'] == 0)
        $this->_sections['file_loop']['show'] = false;
} else
    $this->_sections['file_loop']['total'] = 0;
if ($this->_sections['file_loop']['show']):

            for ($this->_sections['file_loop']['index'] = $this->_sections['file_loop']['start'], $this->_sections['file_loop']['iteration'] = 1;
                 $this->_sections['file_loop']['iteration'] <= $this->_sections['file_loop']['total'];
                 $this->_sections['file_loop']['index'] += $this->_sections['file_loop']['step'], $this->_sections['file_loop']['iteration']++):
$this->_sections['file_loop']['rownum'] = $this->_sections['file_loop']['iteration'];
$this->_sections['file_loop']['index_prev'] = $this->_sections['file_loop']['index'] - $this->_sections['file_loop']['step'];
$this->_sections['file_loop']['index_next'] = $this->_sections['file_loop']['index'] + $this->_sections['file_loop']['step'];
$this->_sections['file_loop']['first']      = ($this->_sections['file_loop']['iteration'] == 1);
$this->_sections['file_loop']['last']       = ($this->_sections['file_loop']['iteration'] == $this->_sections['file_loop']['total']);
?>
            <li><a href="AdminEditTemplates.php?t=<?php echo $this->_tpl_vars['head_files'][$this->_sections['file_loop']['index']]['filename']; ?>
"><?php echo $this->_tpl_vars['head_files'][$this->_sections['file_loop']['index']]['filename']; ?>
</a></li>
            <?php endfor; endif; ?>
        </ul>
    </div>
</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'AdminFooter.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>