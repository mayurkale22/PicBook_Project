<?php /* Smarty version 2.6.14, created on 2013-11-09 01:59:16
         compiled from AdminProfile.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'AdminHeader.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<h2><?php echo $this->_tpl_vars['Admin570']; ?>
</h2>
<p><?php echo $this->_tpl_vars['Admin571']; ?>
</p>
<?php unset($this->_sections['tab_loop']);
$this->_sections['tab_loop']['name'] = 'tab_loop';
$this->_sections['tab_loop']['loop'] = is_array($_loop=$this->_tpl_vars['tabs']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['tab_loop']['show'] = true;
$this->_sections['tab_loop']['max'] = $this->_sections['tab_loop']['loop'];
$this->_sections['tab_loop']['step'] = 1;
$this->_sections['tab_loop']['start'] = $this->_sections['tab_loop']['step'] > 0 ? 0 : $this->_sections['tab_loop']['loop']-1;
if ($this->_sections['tab_loop']['show']) {
    $this->_sections['tab_loop']['total'] = $this->_sections['tab_loop']['loop'];
    if ($this->_sections['tab_loop']['total'] == 0)
        $this->_sections['tab_loop']['show'] = false;
} else
    $this->_sections['tab_loop']['total'] = 0;
if ($this->_sections['tab_loop']['show']):

            for ($this->_sections['tab_loop']['index'] = $this->_sections['tab_loop']['start'], $this->_sections['tab_loop']['iteration'] = 1;
                 $this->_sections['tab_loop']['iteration'] <= $this->_sections['tab_loop']['total'];
                 $this->_sections['tab_loop']['index'] += $this->_sections['tab_loop']['step'], $this->_sections['tab_loop']['iteration']++):
$this->_sections['tab_loop']['rownum'] = $this->_sections['tab_loop']['iteration'];
$this->_sections['tab_loop']['index_prev'] = $this->_sections['tab_loop']['index'] - $this->_sections['tab_loop']['step'];
$this->_sections['tab_loop']['index_next'] = $this->_sections['tab_loop']['index'] + $this->_sections['tab_loop']['step'];
$this->_sections['tab_loop']['first']      = ($this->_sections['tab_loop']['iteration'] == 1);
$this->_sections['tab_loop']['last']       = ($this->_sections['tab_loop']['iteration'] == $this->_sections['tab_loop']['total']);
?>
            <?php if ($this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['tab_fields']): ?>
                    <?php $this->assign('field_flag', $this->_sections['tab_loop']['iteration']); ?>
            <?php endif; ?>
 <?php endfor; endif;  echo '
<script language=javascript type="text/javascript">
    function show_hide() {
        '; ?>

        if (document.getElementById('field_tree_<?php echo $this->_tpl_vars['field_flag']; ?>
').style.display=='none')
        <?php echo '        { '; ?>

            
            <?php unset($this->_sections['tab_loop']);
$this->_sections['tab_loop']['name'] = 'tab_loop';
$this->_sections['tab_loop']['loop'] = is_array($_loop=$this->_tpl_vars['tabs']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['tab_loop']['show'] = true;
$this->_sections['tab_loop']['max'] = $this->_sections['tab_loop']['loop'];
$this->_sections['tab_loop']['step'] = 1;
$this->_sections['tab_loop']['start'] = $this->_sections['tab_loop']['step'] > 0 ? 0 : $this->_sections['tab_loop']['loop']-1;
if ($this->_sections['tab_loop']['show']) {
    $this->_sections['tab_loop']['total'] = $this->_sections['tab_loop']['loop'];
    if ($this->_sections['tab_loop']['total'] == 0)
        $this->_sections['tab_loop']['show'] = false;
} else
    $this->_sections['tab_loop']['total'] = 0;
if ($this->_sections['tab_loop']['show']):

            for ($this->_sections['tab_loop']['index'] = $this->_sections['tab_loop']['start'], $this->_sections['tab_loop']['iteration'] = 1;
                 $this->_sections['tab_loop']['iteration'] <= $this->_sections['tab_loop']['total'];
                 $this->_sections['tab_loop']['index'] += $this->_sections['tab_loop']['step'], $this->_sections['tab_loop']['iteration']++):
$this->_sections['tab_loop']['rownum'] = $this->_sections['tab_loop']['iteration'];
$this->_sections['tab_loop']['index_prev'] = $this->_sections['tab_loop']['index'] - $this->_sections['tab_loop']['step'];
$this->_sections['tab_loop']['index_next'] = $this->_sections['tab_loop']['index'] + $this->_sections['tab_loop']['step'];
$this->_sections['tab_loop']['first']      = ($this->_sections['tab_loop']['iteration'] == 1);
$this->_sections['tab_loop']['last']       = ($this->_sections['tab_loop']['iteration'] == $this->_sections['tab_loop']['total']);
?>
            <?php if ($this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['tab_fields']): ?>
                document.getElementById('field_tree_<?php echo $this->_sections['tab_loop']['iteration']; ?>
').style.display='block';
            <?php endif; ?>
            <?php endfor; endif; ?>
            <?php echo '
        }
        else{
            '; ?>

            <?php unset($this->_sections['tab_loop']);
$this->_sections['tab_loop']['name'] = 'tab_loop';
$this->_sections['tab_loop']['loop'] = is_array($_loop=$this->_tpl_vars['tabs']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['tab_loop']['show'] = true;
$this->_sections['tab_loop']['max'] = $this->_sections['tab_loop']['loop'];
$this->_sections['tab_loop']['step'] = 1;
$this->_sections['tab_loop']['start'] = $this->_sections['tab_loop']['step'] > 0 ? 0 : $this->_sections['tab_loop']['loop']-1;
if ($this->_sections['tab_loop']['show']) {
    $this->_sections['tab_loop']['total'] = $this->_sections['tab_loop']['loop'];
    if ($this->_sections['tab_loop']['total'] == 0)
        $this->_sections['tab_loop']['show'] = false;
} else
    $this->_sections['tab_loop']['total'] = 0;
if ($this->_sections['tab_loop']['show']):

            for ($this->_sections['tab_loop']['index'] = $this->_sections['tab_loop']['start'], $this->_sections['tab_loop']['iteration'] = 1;
                 $this->_sections['tab_loop']['iteration'] <= $this->_sections['tab_loop']['total'];
                 $this->_sections['tab_loop']['index'] += $this->_sections['tab_loop']['step'], $this->_sections['tab_loop']['iteration']++):
$this->_sections['tab_loop']['rownum'] = $this->_sections['tab_loop']['iteration'];
$this->_sections['tab_loop']['index_prev'] = $this->_sections['tab_loop']['index'] - $this->_sections['tab_loop']['step'];
$this->_sections['tab_loop']['index_next'] = $this->_sections['tab_loop']['index'] + $this->_sections['tab_loop']['step'];
$this->_sections['tab_loop']['first']      = ($this->_sections['tab_loop']['iteration'] == 1);
$this->_sections['tab_loop']['last']       = ($this->_sections['tab_loop']['iteration'] == $this->_sections['tab_loop']['total']);
?>
            <?php if ($this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['tab_fields']): ?>
                document.getElementById('field_tree_<?php echo $this->_sections['tab_loop']['iteration']; ?>
').style.display='none';
            <?php endif; ?>
            <?php endfor; endif; ?>
            <?php echo '
        }
    }
</script>
'; ?>



<div class="row row2" style="border:none;">
    <p>Profile Categories - <a href="AdminProfileAddtab.php">Add Category</a></p><br/>
    <?php if ($this->_tpl_vars['num_tabs'] != '0'): ?>
    <table cellpadding='0' cellspacing='0'>
        <tr>
            <td><img src="images/papka-first-laver.jpg" border='0'></td>
            <td style='padding-left: 3px;'><a href="AdminProfileAddtab.php?o=<?php echo $this->_tpl_vars['o_url']; ?>
">[<?php echo $this->_tpl_vars['Admin572']; ?>
]</a> - <a href="AdminProfileAddfield.php?o=<?php echo $this->_tpl_vars['o_url']; ?>
">[<?php echo $this->_tpl_vars['Admin573']; ?>
]</a>
                - <a href='javascript:void(0);' onclick="show_hide();">[Collapse/Expand All]</a>
        </td></tr>
    </table>
    <?php else: ?>
    <p><?php echo $this->_tpl_vars['Admin576']; ?>
</p>
    <?php endif; ?>
    <?php if ($this->_tpl_vars['tabs']): ?>
    <ul class="sortable-cats">
                <?php unset($this->_sections['tab_loop']);
$this->_sections['tab_loop']['name'] = 'tab_loop';
$this->_sections['tab_loop']['loop'] = is_array($_loop=$this->_tpl_vars['tabs']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['tab_loop']['show'] = true;
$this->_sections['tab_loop']['max'] = $this->_sections['tab_loop']['loop'];
$this->_sections['tab_loop']['step'] = 1;
$this->_sections['tab_loop']['start'] = $this->_sections['tab_loop']['step'] > 0 ? 0 : $this->_sections['tab_loop']['loop']-1;
if ($this->_sections['tab_loop']['show']) {
    $this->_sections['tab_loop']['total'] = $this->_sections['tab_loop']['loop'];
    if ($this->_sections['tab_loop']['total'] == 0)
        $this->_sections['tab_loop']['show'] = false;
} else
    $this->_sections['tab_loop']['total'] = 0;
if ($this->_sections['tab_loop']['show']):

            for ($this->_sections['tab_loop']['index'] = $this->_sections['tab_loop']['start'], $this->_sections['tab_loop']['iteration'] = 1;
                 $this->_sections['tab_loop']['iteration'] <= $this->_sections['tab_loop']['total'];
                 $this->_sections['tab_loop']['index'] += $this->_sections['tab_loop']['step'], $this->_sections['tab_loop']['iteration']++):
$this->_sections['tab_loop']['rownum'] = $this->_sections['tab_loop']['iteration'];
$this->_sections['tab_loop']['index_prev'] = $this->_sections['tab_loop']['index'] - $this->_sections['tab_loop']['step'];
$this->_sections['tab_loop']['index_next'] = $this->_sections['tab_loop']['index'] + $this->_sections['tab_loop']['step'];
$this->_sections['tab_loop']['first']      = ($this->_sections['tab_loop']['iteration'] == 1);
$this->_sections['tab_loop']['last']       = ($this->_sections['tab_loop']['iteration'] == $this->_sections['tab_loop']['total']);
?>
        <li <?php if ($this->_sections['tab_loop']['last']): ?>class="last"<?php endif; ?>>
            <span><a href='AdminProfileEdittab.php?tab_id=<?php echo $this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['tab_id']; ?>
&o=<?php echo $this->_tpl_vars['o_url']; ?>
'><?php echo $this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['tab_name']; ?>
</a></span>
            <?php if ($this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['tab_fields']): ?>
            <ul id="field_tree_<?php echo $this->_sections['tab_loop']['iteration']; ?>
" style="display:none;">
                                <?php unset($this->_sections['field_loop']);
$this->_sections['field_loop']['name'] = 'field_loop';
$this->_sections['field_loop']['loop'] = is_array($_loop=$this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['tab_fields']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                <li>
                    <span><a href='AdminProfileEditfield.php?field_id=<?php echo $this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['tab_fields'][$this->_sections['field_loop']['index']]['field_id']; ?>
'><?php echo $this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['tab_fields'][$this->_sections['field_loop']['index']]['field_title']; ?>
</a><?php if ($this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['tab_fields'][$this->_sections['field_loop']['index']]['field_birthday'] == 1): ?> <?php echo $this->_tpl_vars['Admin579'];  endif; ?> <a onclick="if (!confirm('Are you sure?')) return false;" href="AdminProfileEditfield.php?task=deletefield&field_id=<?php echo $this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['tab_fields'][$this->_sections['field_loop']['index']]['field_id']; ?>
" style="color:#e00000">&times;</a></span>
                                        <?php if ($this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['tab_fields'][$this->_sections['field_loop']['index']]['dep_fields']): ?>
                    <ul style="padding: 10px 0 0 30px">
                        <?php unset($this->_sections['dep_field_loop']);
$this->_sections['dep_field_loop']['name'] = 'dep_field_loop';
$this->_sections['dep_field_loop']['loop'] = is_array($_loop=$this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['tab_fields'][$this->_sections['field_loop']['index']]['dep_fields']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['dep_field_loop']['show'] = true;
$this->_sections['dep_field_loop']['max'] = $this->_sections['dep_field_loop']['loop'];
$this->_sections['dep_field_loop']['step'] = 1;
$this->_sections['dep_field_loop']['start'] = $this->_sections['dep_field_loop']['step'] > 0 ? 0 : $this->_sections['dep_field_loop']['loop']-1;
if ($this->_sections['dep_field_loop']['show']) {
    $this->_sections['dep_field_loop']['total'] = $this->_sections['dep_field_loop']['loop'];
    if ($this->_sections['dep_field_loop']['total'] == 0)
        $this->_sections['dep_field_loop']['show'] = false;
} else
    $this->_sections['dep_field_loop']['total'] = 0;
if ($this->_sections['dep_field_loop']['show']):

            for ($this->_sections['dep_field_loop']['index'] = $this->_sections['dep_field_loop']['start'], $this->_sections['dep_field_loop']['iteration'] = 1;
                 $this->_sections['dep_field_loop']['iteration'] <= $this->_sections['dep_field_loop']['total'];
                 $this->_sections['dep_field_loop']['index'] += $this->_sections['dep_field_loop']['step'], $this->_sections['dep_field_loop']['iteration']++):
$this->_sections['dep_field_loop']['rownum'] = $this->_sections['dep_field_loop']['iteration'];
$this->_sections['dep_field_loop']['index_prev'] = $this->_sections['dep_field_loop']['index'] - $this->_sections['dep_field_loop']['step'];
$this->_sections['dep_field_loop']['index_next'] = $this->_sections['dep_field_loop']['index'] + $this->_sections['dep_field_loop']['step'];
$this->_sections['dep_field_loop']['first']      = ($this->_sections['dep_field_loop']['iteration'] == 1);
$this->_sections['dep_field_loop']['last']       = ($this->_sections['dep_field_loop']['iteration'] == $this->_sections['dep_field_loop']['total']);
?>
                        <li style="padding-left: 7px">
                            <a href='AdminProfileEditdepfield.php?field_id=<?php echo $this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['tab_fields'][$this->_sections['field_loop']['index']]['dep_fields'][$this->_sections['dep_field_loop']['index']]['dep_field_id']; ?>
'><?php if ($this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['tab_fields'][$this->_sections['field_loop']['index']]['dep_fields'][$this->_sections['dep_field_loop']['index']]['dep_field_title'] != ""):  echo $this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['tab_fields'][$this->_sections['field_loop']['index']]['dep_fields'][$this->_sections['dep_field_loop']['index']]['dep_field_title'];  else:  echo $this->_tpl_vars['Admin578'];  endif; ?></a>
                        </li>
                        <?php endfor; endif; ?>
                    </ul>
                    <?php endif; ?>
                </li>
                <?php endfor; endif; ?>
            </ul>
            <?php endif; ?>
        </li>
        <?php endfor; endif; ?>
    </ul>
    <?php endif; ?>

</div>


<br/>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'AdminFooter.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>