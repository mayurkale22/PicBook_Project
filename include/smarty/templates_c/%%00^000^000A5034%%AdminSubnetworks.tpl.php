<?php /* Smarty version 2.6.14, created on 2013-11-09 02:03:08
         compiled from AdminSubnetworks.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'AdminSubnetworks.tpl', 82, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'AdminHeader.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<h2><?php echo $this->_tpl_vars['Admin797']; ?>
</h2>
<p><?php echo $this->_tpl_vars['Admin798']; ?>
</p>


<?php echo '
<script language=\'JavaScript\'>
    <!--
    function showdiv(id1, id2) {
        document.getElementById(id1).style.display=\'block\';
        document.getElementById(id2).style.display=\'none\';
    }
    //-->
</script>
'; ?>


<div id='button1' style='display: block;'>
    [ <a href="javascript:showdiv('help', 'button1')"><?php echo $this->_tpl_vars['Admin820']; ?>
</a> ]
    <br><br>
</div>

<div id='help' style='display: none;'>
    <p><?php echo $this->_tpl_vars['Admin818']; ?>
</p>
    
</div>


<?php if ($this->_tpl_vars['result'] != ""): ?>
<p style="color:green;"><?php echo $this->_tpl_vars['result']; ?>
</p>
<?php endif; ?>



<div class="row-blue">
    <form>
        <div class="f-left"><label style="padding-left:0;"><?php echo $this->_tpl_vars['Admin799']; ?>
</label><br/>
            <select class='text' name='field2_id' style="padding-left:0; width:144px;">
                <option></option>
                <option value='0'<?php if ($this->_tpl_vars['secondary_field_id'] == '0'): ?> SELECTED<?php endif; ?>><?php echo $this->_tpl_vars['Admin812']; ?>
</option>
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
                <option value='<?php echo $this->_tpl_vars['fields'][$this->_sections['field_loop']['index']]['field_id']; ?>
'<?php if ($this->_tpl_vars['secondary_field_id'] == $this->_tpl_vars['fields'][$this->_sections['field_loop']['index']]['field_id']): ?> SELECTED<?php endif; ?>><?php echo $this->_tpl_vars['fields'][$this->_sections['field_loop']['index']]['field_title']; ?>
</option>
                <?php endfor; endif; ?>
            </select>
        </div>
        <div class="f-left">
            <label style="padding-left:0;"><?php echo $this->_tpl_vars['Admin800']; ?>
</label><br/>
            <select class='text' name='field2_id' style="padding-left:0; width:161px;">
                <option></option>
                <option value='0'<?php if ($this->_tpl_vars['secondary_field_id'] == '0'): ?> SELECTED<?php endif; ?>><?php echo $this->_tpl_vars['Admin812']; ?>
</option>
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
                <option value='<?php echo $this->_tpl_vars['fields'][$this->_sections['field_loop']['index']]['field_id']; ?>
'<?php if ($this->_tpl_vars['secondary_field_id'] == $this->_tpl_vars['fields'][$this->_sections['field_loop']['index']]['field_id']): ?> SELECTED<?php endif; ?>><?php echo $this->_tpl_vars['fields'][$this->_sections['field_loop']['index']]['field_title']; ?>
</option>
                <?php endfor; endif; ?>
            </select>
        </div>
        <div class="f-left" style="margin:0;"><label class="button"><input type="submit" value="<?php echo $this->_tpl_vars['Admin801']; ?>
"/></label></div>

        <input type='hidden' name='task' value='doupdate'><input type='hidden' name='s' value='<?php echo $this->_tpl_vars['s']; ?>
'>
    </form>
</div>

<br/>



<table cellpadding="0" cellspacing="0" class="view-users">
    <tr>
        <th align="left" valign="top" class="col-f"><a class='header' href='AdminSubnetworks.php?s=<?php echo $this->_tpl_vars['i']; ?>
'><?php echo $this->_tpl_vars['Admin803']; ?>
</a></th>
        <th align="left" valign="top"><a class='header' href='AdminSubnetworks.php?s=<?php echo $this->_tpl_vars['n']; ?>
'><?php echo $this->_tpl_vars['Admin804']; ?>
</a></th>
        <th align="left" valign="top" width="200px"><a class='header' href='AdminSubnetworks.php?s=<?php echo $this->_tpl_vars['u']; ?>
'><?php echo $this->_tpl_vars['Admin805']; ?>
</a></th>
        <th align="left" valign="top"><?php echo $this->_tpl_vars['Admin806']; ?>
</th>
        <th align="center" valign="top" class="col-l"><?php echo $this->_tpl_vars['Admin807']; ?>
</th>
    </tr>
    <tr class='event'>
        <td align="left" class="col-f">0</td>
        <td align="left"><?php echo $this->_tpl_vars['Admin810']; ?>
</td>
        <td align="left"><a href='AdminViewusers.php?f_subnet=0'><?php echo $this->_tpl_vars['default_users']; ?>
</a></td>
        <td align="left"><?php echo $this->_tpl_vars['Admin811']; ?>
</td>
        <td align="center" class="col-l">&nbsp;</td>
    </tr>
   <?php unset($this->_sections['subnet_loop']);
$this->_sections['subnet_loop']['name'] = 'subnet_loop';
$this->_sections['subnet_loop']['loop'] = is_array($_loop=$this->_tpl_vars['subnets']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['subnet_loop']['show'] = true;
$this->_sections['subnet_loop']['max'] = $this->_sections['subnet_loop']['loop'];
$this->_sections['subnet_loop']['step'] = 1;
$this->_sections['subnet_loop']['start'] = $this->_sections['subnet_loop']['step'] > 0 ? 0 : $this->_sections['subnet_loop']['loop']-1;
if ($this->_sections['subnet_loop']['show']) {
    $this->_sections['subnet_loop']['total'] = $this->_sections['subnet_loop']['loop'];
    if ($this->_sections['subnet_loop']['total'] == 0)
        $this->_sections['subnet_loop']['show'] = false;
} else
    $this->_sections['subnet_loop']['total'] = 0;
if ($this->_sections['subnet_loop']['show']):

            for ($this->_sections['subnet_loop']['index'] = $this->_sections['subnet_loop']['start'], $this->_sections['subnet_loop']['iteration'] = 1;
                 $this->_sections['subnet_loop']['iteration'] <= $this->_sections['subnet_loop']['total'];
                 $this->_sections['subnet_loop']['index'] += $this->_sections['subnet_loop']['step'], $this->_sections['subnet_loop']['iteration']++):
$this->_sections['subnet_loop']['rownum'] = $this->_sections['subnet_loop']['iteration'];
$this->_sections['subnet_loop']['index_prev'] = $this->_sections['subnet_loop']['index'] - $this->_sections['subnet_loop']['step'];
$this->_sections['subnet_loop']['index_next'] = $this->_sections['subnet_loop']['index'] + $this->_sections['subnet_loop']['step'];
$this->_sections['subnet_loop']['first']      = ($this->_sections['subnet_loop']['iteration'] == 1);
$this->_sections['subnet_loop']['last']       = ($this->_sections['subnet_loop']['iteration'] == $this->_sections['subnet_loop']['total']);
?>
    <tr class='<?php echo smarty_function_cycle(array('values' => "1, event"), $this);?>
'>
        <td align="left" class="col-f"><?php echo $this->_tpl_vars['subnets'][$this->_sections['subnet_loop']['index']]['subnet_id']; ?>
</td>
        <td align="left"><?php echo $this->_tpl_vars['subnets'][$this->_sections['subnet_loop']['index']]['subnet_name']; ?>
</td>
        <td align="left"><a href='AdminViewusers.php?f_subnet=<?php echo $this->_tpl_vars['subnets'][$this->_sections['subnet_loop']['index']]['subnet_id']; ?>
'><?php echo $this->_tpl_vars['subnets'][$this->_sections['subnet_loop']['index']]['subnet_users']; ?>
</a></td>
        <td align="left"><?php echo $this->_tpl_vars['primary_field_title']; ?>
 <?php echo $this->_tpl_vars['subnets'][$this->_sections['subnet_loop']['index']]['subnet_field1_qual']; ?>
 <?php echo $this->_tpl_vars['subnets'][$this->_sections['subnet_loop']['index']]['subnet_field1_value']; ?>
<br><?php echo $this->_tpl_vars['subnets'][$this->_sections['subnet_loop']['index']]['subnet_field2_title']; ?>
 <?php echo $this->_tpl_vars['subnets'][$this->_sections['subnet_loop']['index']]['subnet_field2_qual']; ?>
 <?php echo $this->_tpl_vars['subnets'][$this->_sections['subnet_loop']['index']]['subnet_field2_value']; ?>
</td>
        <td align="center" class="col-l"><a href='AdminSubnetworksEdit.php?s=<?php echo $this->_tpl_vars['s']; ?>
&subnet_id=<?php echo $this->_tpl_vars['subnets'][$this->_sections['subnet_loop']['index']]['subnet_id']; ?>
'><?php echo $this->_tpl_vars['Admin808']; ?>
</a> | <a href='AdminSubnetworks.php?s=<?php echo $this->_tpl_vars['s']; ?>
&task=confirm&subnet_id=<?php echo $this->_tpl_vars['subnets'][$this->_sections['subnet_loop']['index']]['subnet_id']; ?>
'><?php echo $this->_tpl_vars['Admin809']; ?>
</a></td>
    </tr>
    <?php endfor; endif; ?>

</table>


<form action='AdminAddSubnetworks.php' method='GET'>
    <label class="button"><input type='submit' value='<?php echo $this->_tpl_vars['Admin802']; ?>
'/></label>
    <input type='hidden' name='s' value='<?php echo $this->_tpl_vars['s']; ?>
'>
</form>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'AdminFooter.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>