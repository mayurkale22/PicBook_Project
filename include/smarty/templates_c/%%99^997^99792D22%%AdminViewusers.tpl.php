<?php /* Smarty version 2.6.14, created on 2013-11-09 02:02:28
         compiled from AdminViewusers.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'AdminViewusers.tpl', 90, false),array('modifier', 'truncate', 'AdminViewusers.tpl', 92, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'AdminHeader.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<h2><?php echo $this->_tpl_vars['Admin967']; ?>
</h2>
<p><?php echo $this->_tpl_vars['Admin968']; ?>
</p>
<div class="row-blue">
    <form action='AdminViewusers.php' method='POST'>
        <div class="f-left"><label><?php echo $this->_tpl_vars['Admin969']; ?>
</label><br/><input type='text' name='f_user' value='<?php echo $this->_tpl_vars['f_user']; ?>
'/></div>
        <div class="f-left"><label><?php echo $this->_tpl_vars['Admin971']; ?>
</label><br/><input type="text" name='f_email' value='<?php echo $this->_tpl_vars['f_email']; ?>
'/></div>
        <div class="f-left">
            <label><?php echo $this->_tpl_vars['Admin990']; ?>
</label><br/>
            <select style="width:115px;" name='f_level'>
                <option></option>
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
                <option value='<?php echo $this->_tpl_vars['levels'][$this->_sections['level_loop']['index']]['level_id']; ?>
'<?php if ($this->_tpl_vars['f_level'] == $this->_tpl_vars['levels'][$this->_sections['level_loop']['index']]['level_id']): ?> SELECTED<?php endif; ?>><?php echo $this->_tpl_vars['levels'][$this->_sections['level_loop']['index']]['level_name']; ?>
</option>
                <?php endfor; endif; ?>
            </select>

        </div>
        <div class="f-left"><label><?php echo $this->_tpl_vars['Admin991']; ?>
</label><br/>
            <select style="width:90px;" name='f_subnet'>
                <option></option>
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
                <option value='<?php echo $this->_tpl_vars['subnets'][$this->_sections['subnet_loop']['index']]['subnet_id']; ?>
'<?php if ($this->_tpl_vars['f_subnet'] == $this->_tpl_vars['subnets'][$this->_sections['subnet_loop']['index']]['subnet_id']): ?> SELECTED<?php endif; ?>><?php echo $this->_tpl_vars['subnets'][$this->_sections['subnet_loop']['index']]['subnet_name']; ?>
</option>
                <?php endfor; endif; ?>
            </select>
        </div>

        <div class="f-left"><label><?php echo $this->_tpl_vars['Admin972']; ?>
</label><br/>
            <select style="width:60px;" name='f_enabled'>
                <option></option>
                <option value='1'<?php if ($this->_tpl_vars['f_enabled'] == '1'): ?> SELECTED<?php endif; ?>><?php echo $this->_tpl_vars['Admin975']; ?>
</option>
                <option value='0'<?php if ($this->_tpl_vars['f_enabled'] == '0'): ?> SELECTED<?php endif; ?>><?php echo $this->_tpl_vars['Admin976']; ?>
</option>
            </select>

        </div>
        <div class="f-left" style="margin:0;"><label class="img-button" style="margin-top:12px !important;"><input type="submit" value="<?php echo $this->_tpl_vars['Admin980']; ?>
"/></label></div>
        <input type='hidden' name='s' value='<?php echo $this->_tpl_vars['s']; ?>
'>
    </form>
</div>

<?php if ($this->_tpl_vars['total_users'] == 0): ?>

<div class="result"><p><b><?php echo $this->_tpl_vars['Admin987']; ?>
</b></p></div>


<?php else: ?>

<?php echo '
<script language=\'JavaScript\'>
    <!---
    var checkboxcount = 1;
    function doCheckAll() {
        if(checkboxcount == 0) {
            with (document.items) {
                for (var i=0; i < elements.length; i++) {
                    if (elements[i].type == \'checkbox\') {
                        elements[i].checked = false;
                    }}
                checkboxcount = checkboxcount + 1;
            }
        } else
            with (document.items) {
                for (var i=0; i < elements.length; i++) {
                    if (elements[i].type == \'checkbox\') {
                        elements[i].checked = true;
                    }}
            checkboxcount = checkboxcount - 1;
        }
    }
    // -->
</script>
'; ?>


<div class="result"><p><b><?php echo $this->_tpl_vars['total_users']; ?>
</b> <?php echo $this->_tpl_vars['Admin982']; ?>
  |  <?php echo $this->_tpl_vars['Admin983']; ?>
 <?php unset($this->_sections['page_loop']);
$this->_sections['page_loop']['name'] = 'page_loop';
$this->_sections['page_loop']['loop'] = is_array($_loop=$this->_tpl_vars['pages']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
 if ($this->_tpl_vars['pages'][$this->_sections['page_loop']['index']]['link'] == '1'): ?><b><?php echo $this->_tpl_vars['pages'][$this->_sections['page_loop']['index']]['page']; ?>
</b><?php else: ?><a href='AdminViewusers.php?s=<?php echo $this->_tpl_vars['s']; ?>
&p=<?php echo $this->_tpl_vars['pages'][$this->_sections['page_loop']['index']]['page']; ?>
&f_user=<?php echo $this->_tpl_vars['f_user']; ?>
&f_email=<?php echo $this->_tpl_vars['f_email']; ?>
&f_level=<?php echo $this->_tpl_vars['f_level']; ?>
&f_enabled=<?php echo $this->_tpl_vars['f_enabled']; ?>
'><?php echo $this->_tpl_vars['pages'][$this->_sections['page_loop']['index']]['page']; ?>
</a><?php endif; ?> <?php endfor; endif; ?></p></div>

<form action='AdminViewusers.php' method='post' name='items'>
    <table cellpadding="0" cellspacing="0" class="view-users">
        <tr>
            <th align="left" valign="top" class="col-f"><div class="t-input"><input type='checkbox' name='select_all' onClick='javascript:doCheckAll()'/> <label> <a href='AdminViewusers.php?s=<?php echo $this->_tpl_vars['i']; ?>
&p=<?php echo $this->_tpl_vars['p']; ?>
&f_user=<?php echo $this->_tpl_vars['f_user']; ?>
&f_email=<?php echo $this->_tpl_vars['f_email']; ?>
&f_level=<?php echo $this->_tpl_vars['f_level']; ?>
&f_subnet=<?php echo $this->_tpl_vars['f_subnet']; ?>
&f_enabled=<?php echo $this->_tpl_vars['f_enabled']; ?>
'> <?php echo $this->_tpl_vars['Admin981']; ?>
</a></label></div></th>
            <th align="left" valign="top"><a href='AdminViewusers.php?s=<?php echo $this->_tpl_vars['u']; ?>
&p=<?php echo $this->_tpl_vars['p']; ?>
&f_user=<?php echo $this->_tpl_vars['f_user']; ?>
&f_email=<?php echo $this->_tpl_vars['f_email']; ?>
&f_level=<?php echo $this->_tpl_vars['f_level']; ?>
&f_subnet=<?php echo $this->_tpl_vars['f_subnet']; ?>
&f_enabled=<?php echo $this->_tpl_vars['f_enabled']; ?>
'><?php echo $this->_tpl_vars['Admin969']; ?>
</a></th>
            <th align="left" valign="top"><a href='AdminViewusers.php?s=<?php echo $this->_tpl_vars['em']; ?>
&p=<?php echo $this->_tpl_vars['p']; ?>
&f_user=<?php echo $this->_tpl_vars['f_user']; ?>
&f_email=<?php echo $this->_tpl_vars['f_email']; ?>
&f_level=<?php echo $this->_tpl_vars['f_level']; ?>
&f_subnet=<?php echo $this->_tpl_vars['f_subnet']; ?>
&f_enabled=<?php echo $this->_tpl_vars['f_enabled']; ?>
'><?php echo $this->_tpl_vars['Admin971']; ?>
</a><?php if ($this->_tpl_vars['user_verification'] != 0): ?> (<a href='AdminViewusers.php?s=<?php echo $this->_tpl_vars['v']; ?>
&p=<?php echo $this->_tpl_vars['p']; ?>
&f_user=<?php echo $this->_tpl_vars['f_user']; ?>
&f_email=<?php echo $this->_tpl_vars['f_email']; ?>
&f_level=<?php echo $this->_tpl_vars['f_level']; ?>
&f_enabled=<?php echo $this->_tpl_vars['f_enabled']; ?>
'><?php echo $this->_tpl_vars['Admin988']; ?>
</a>)<?php endif; ?></th>
            <th align="left" valign="top"><?php echo $this->_tpl_vars['Admin990']; ?>
</th>
            <th align="left" valign="top"><?php echo $this->_tpl_vars['Admin991']; ?>
</th>
            <th align="center" valign="top"><?php echo $this->_tpl_vars['Admin972']; ?>
</th>
            <th align="center" valign="top"><a href='AdminViewusers.php?s=<?php echo $this->_tpl_vars['sd']; ?>
&p=<?php echo $this->_tpl_vars['p']; ?>
&f_user=<?php echo $this->_tpl_vars['f_user']; ?>
&f_email=<?php echo $this->_tpl_vars['f_email']; ?>
&f_level=<?php echo $this->_tpl_vars['f_level']; ?>
&f_subnet=<?php echo $this->_tpl_vars['f_subnet']; ?>
&f_enabled=<?php echo $this->_tpl_vars['f_enabled']; ?>
'><?php echo $this->_tpl_vars['Admin973']; ?>
</a></th>
            <th align="center" valign="top" class="col-l"><?php echo $this->_tpl_vars['Admin974']; ?>
</th>
        </tr>
        <?php unset($this->_sections['user_loop']);
$this->_sections['user_loop']['name'] = 'user_loop';
$this->_sections['user_loop']['loop'] = is_array($_loop=$this->_tpl_vars['users']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['user_loop']['show'] = true;
$this->_sections['user_loop']['max'] = $this->_sections['user_loop']['loop'];
$this->_sections['user_loop']['step'] = 1;
$this->_sections['user_loop']['start'] = $this->_sections['user_loop']['step'] > 0 ? 0 : $this->_sections['user_loop']['loop']-1;
if ($this->_sections['user_loop']['show']) {
    $this->_sections['user_loop']['total'] = $this->_sections['user_loop']['loop'];
    if ($this->_sections['user_loop']['total'] == 0)
        $this->_sections['user_loop']['show'] = false;
} else
    $this->_sections['user_loop']['total'] = 0;
if ($this->_sections['user_loop']['show']):

            for ($this->_sections['user_loop']['index'] = $this->_sections['user_loop']['start'], $this->_sections['user_loop']['iteration'] = 1;
                 $this->_sections['user_loop']['iteration'] <= $this->_sections['user_loop']['total'];
                 $this->_sections['user_loop']['index'] += $this->_sections['user_loop']['step'], $this->_sections['user_loop']['iteration']++):
$this->_sections['user_loop']['rownum'] = $this->_sections['user_loop']['iteration'];
$this->_sections['user_loop']['index_prev'] = $this->_sections['user_loop']['index'] - $this->_sections['user_loop']['step'];
$this->_sections['user_loop']['index_next'] = $this->_sections['user_loop']['index'] + $this->_sections['user_loop']['step'];
$this->_sections['user_loop']['first']      = ($this->_sections['user_loop']['iteration'] == 1);
$this->_sections['user_loop']['last']       = ($this->_sections['user_loop']['iteration'] == $this->_sections['user_loop']['total']);
?>
        <tr class='<?php echo smarty_function_cycle(array('values' => "1, event"), $this);?>
'>
            <td align="left" class="col-f"><div class="t-input"><input type='checkbox' name='item_<?php echo $this->_tpl_vars['users'][$this->_sections['user_loop']['index']]['user_id']; ?>
' value='1'/> <?php echo $this->_tpl_vars['users'][$this->_sections['user_loop']['index']]['user_id']; ?>
</div></td>
            <td align="left"><a href='<?php echo $this->_tpl_vars['url']->url_create('profile',$this->_tpl_vars['users'][$this->_sections['user_loop']['index']]['user_username']); ?>
'><?php echo ((is_array($_tmp=$this->_tpl_vars['users'][$this->_sections['user_loop']['index']]['user_username'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 25, "...", true) : smarty_modifier_truncate($_tmp, 25, "...", true)); ?>
</a></td>
            <td align="left"><a href='mailto:<?php echo $this->_tpl_vars['users'][$this->_sections['user_loop']['index']]['user_email']; ?>
'><?php echo ((is_array($_tmp=$this->_tpl_vars['users'][$this->_sections['user_loop']['index']]['user_email'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 25, "...", true) : smarty_modifier_truncate($_tmp, 25, "...", true)); ?>
</a><?php if ($this->_tpl_vars['user_verification'] != 0 & $this->_tpl_vars['users'][$this->_sections['user_loop']['index']]['user_verified'] == 0): ?> (<?php echo $this->_tpl_vars['Admin970']; ?>
)<?php endif; ?></td>
            <td align="left"><a href='AdminEditLevels.php?level_id=<?php echo $this->_tpl_vars['users'][$this->_sections['user_loop']['index']]['user_level_id']; ?>
'><?php echo $this->_tpl_vars['users'][$this->_sections['user_loop']['index']]['user_level']; ?>
</a></td>
            <td align="left"><a href='AdminSubnetworksEdit.php?subnet_id=<?php echo $this->_tpl_vars['users'][$this->_sections['user_loop']['index']]['user_subnet_id']; ?>
'><?php echo $this->_tpl_vars['users'][$this->_sections['user_loop']['index']]['user_subnet']; ?>
</a></td>
            <td align="center"><?php echo $this->_tpl_vars['users'][$this->_sections['user_loop']['index']]['user_enabled']; ?>
</td>
            <td align="center"><?php echo $this->_tpl_vars['datetime']->cdate($this->_tpl_vars['setting']['setting_dateformat'],$this->_tpl_vars['datetime']->timezone($this->_tpl_vars['users'][$this->_sections['user_loop']['index']]['user_signupdate'],$this->_tpl_vars['setting']['setting_timezone'])); ?>
</td>
            <td align="center" class="col-l"><a href='AdminViewusersEdit.php?user_id=<?php echo $this->_tpl_vars['users'][$this->_sections['user_loop']['index']]['user_id']; ?>
&s=<?php echo $this->_tpl_vars['s']; ?>
&p=<?php echo $this->_tpl_vars['p']; ?>
&f_user=<?php echo $this->_tpl_vars['f_user']; ?>
&f_email=<?php echo $this->_tpl_vars['f_email']; ?>
&f_level=<?php echo $this->_tpl_vars['f_level']; ?>
&f_enabled=<?php echo $this->_tpl_vars['f_enabled']; ?>
'><?php echo $this->_tpl_vars['Admin977']; ?>
</a> | <a href='AdminViewusers.php?task=confirm&user_id=<?php echo $this->_tpl_vars['users'][$this->_sections['user_loop']['index']]['user_id']; ?>
&s=<?php echo $this->_tpl_vars['s']; ?>
&p=<?php echo $this->_tpl_vars['p']; ?>
&f_user=<?php echo $this->_tpl_vars['f_user']; ?>
&f_email=<?php echo $this->_tpl_vars['f_email']; ?>
&f_level=<?php echo $this->_tpl_vars['f_level']; ?>
&f_enabled=<?php echo $this->_tpl_vars['f_enabled']; ?>
'><?php echo $this->_tpl_vars['Admin978']; ?>
</a> | <a href='AdminLoginasuser.php?user_id=<?php echo $this->_tpl_vars['users'][$this->_sections['user_loop']['index']]['user_id']; ?>
' target='_blank'><?php echo $this->_tpl_vars['Admin979']; ?>
</a></td>
        </tr>
        <?php endfor; endif; ?>
       
    </table>
    
    <div class="result"><p><b><?php echo $this->_tpl_vars['total_users']; ?>
</b> <?php echo $this->_tpl_vars['Admin982']; ?>
  |  <?php echo $this->_tpl_vars['Admin983']; ?>
 <?php unset($this->_sections['page_loop']);
$this->_sections['page_loop']['name'] = 'page_loop';
$this->_sections['page_loop']['loop'] = is_array($_loop=$this->_tpl_vars['pages']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
 if ($this->_tpl_vars['pages'][$this->_sections['page_loop']['index']]['link'] == '1'): ?><b><?php echo $this->_tpl_vars['pages'][$this->_sections['page_loop']['index']]['page']; ?>
</b><?php else: ?><a href='AdminViewusers.php?s=<?php echo $this->_tpl_vars['s']; ?>
&p=<?php echo $this->_tpl_vars['pages'][$this->_sections['page_loop']['index']]['page']; ?>
&f_user=<?php echo $this->_tpl_vars['f_user']; ?>
&f_email=<?php echo $this->_tpl_vars['f_email']; ?>
&f_level=<?php echo $this->_tpl_vars['f_level']; ?>
&f_enabled=<?php echo $this->_tpl_vars['f_enabled']; ?>
'><?php echo $this->_tpl_vars['pages'][$this->_sections['page_loop']['index']]['page']; ?>
</a><?php endif; ?> <?php endfor; endif; ?></div>
    <input type='hidden' name='task' value='dodelete'>
    <label class="button"><input type="submit" value="<?php echo $this->_tpl_vars['Admin989']; ?>
"/></label>
    <br/>
</form>
<?php endif; ?>




<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'AdminFooter.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>