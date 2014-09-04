<?php /* Smarty version 2.6.14, created on 2013-11-09 02:02:52
         compiled from AdminViewreports.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'AdminViewreports.tpl', 91, false),array('modifier', 'truncate', 'AdminViewreports.tpl', 94, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'AdminHeader.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<h2><?php echo $this->_tpl_vars['Admin932']; ?>
</h2>
<p><?php echo $this->_tpl_vars['Admin933']; ?>
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


<table cellpadding='0' cellspacing='0' width='400' align='center'>
    <tr>
        <td align='center'>
            <div class='box'>
                <table cellpadding='2' cellspacing='0' align='center' style="color:#666666">
                    <tr><form action='AdminViewreports.php' method='POST'>
                            <td>
                                <?php echo $this->_tpl_vars['Admin945']; ?>
<br>
                                <select name='f_reason' style="width:90px;" class="input-border">
                                    <option value=''<?php if ($this->_tpl_vars['f_reason'] == ""): ?> SELECTED<?php endif; ?>></option>
                                    <option value='1'<?php if ($this->_tpl_vars['f_reason'] == '1'): ?> SELECTED<?php endif; ?>><?php echo $this->_tpl_vars['Admin939']; ?>
</option>
                                    <option value='2'<?php if ($this->_tpl_vars['f_reason'] == '2'): ?> SELECTED<?php endif; ?>><?php echo $this->_tpl_vars['Admin940']; ?>
</option>
                                    <option value='3'<?php if ($this->_tpl_vars['f_reason'] == '3'): ?> SELECTED<?php endif; ?>><?php echo $this->_tpl_vars['Admin941']; ?>
</option>
                                    <option value='0'<?php if ($this->_tpl_vars['f_reason'] == '0'): ?> SELECTED<?php endif; ?>><?php echo $this->_tpl_vars['Admin942']; ?>
</option>
                                </select>&nbsp;
                            </td>
                            <td><?php echo $this->_tpl_vars['Admin12']; ?>
<br><input type='text' class="input-border" name='f_details' value='<?php echo $this->_tpl_vars['f_details']; ?>
' size='25' maxlength='50'>&nbsp;</td>
                            <td valign="bottom"><label class="button" style="margin:15px 15px 0 0;"><input type='submit' value='<?php echo $this->_tpl_vars['Admin946']; ?>
'></label></td>
                            <input type='hidden' name='s' value='<?php echo $this->_tpl_vars['s']; ?>
'>
                        </form>
                    </tr>
                </table>
            </div>
</td></tr></table>

<br>

<?php if ($this->_tpl_vars['total_reports'] == 0): ?>

<p><b><?php echo $this->_tpl_vars['Admin935']; ?>
</b></p>

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



<div class="result"><p><b><?php echo $this->_tpl_vars['total_reports']; ?>
</b> <?php echo $this->_tpl_vars['Admin947']; ?>
  |  <?php echo $this->_tpl_vars['Admin948']; ?>
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
</b><?php else: ?><a href='admin_viewgroups.php?s=<?php echo $this->_tpl_vars['s']; ?>
&p=<?php echo $this->_tpl_vars['pages'][$this->_sections['page_loop']['index']]['page']; ?>
&f_title=<?php echo $this->_tpl_vars['f_title']; ?>
&f_owner=<?php echo $this->_tpl_vars['f_owner']; ?>
'><?php echo $this->_tpl_vars['pages'][$this->_sections['page_loop']['index']]['page']; ?>
</a><?php endif; ?> <?php endfor; endif; ?></p></div>

<form action='AdminViewreports.php' method='post' name='items'>

<table cellpadding="0" cellspacing="0" class="view-users">
        <tr>
            <th align="left" valign="top" class="col-f"><div class="t-input"><input type='checkbox' name='select_all' onClick='javascript:doCheckAll()'/> <label> <a class='header' href='AdminViewreports.php?s=<?php echo $this->_tpl_vars['i']; ?>
&p=<?php echo $this->_tpl_vars['p']; ?>
&f_object=<?php echo $this->_tpl_vars['f_object']; ?>
&f_reason=<?php echo $this->_tpl_vars['f_reason']; ?>
&f_details=<?php echo $this->_tpl_vars['f_details']; ?>
'><?php echo $this->_tpl_vars['Admin949']; ?>
</a></label></div></th>
            <th align="left" valign="top"><a class='header' href='AdminViewreports.php?s=<?php echo $this->_tpl_vars['u']; ?>
&p=<?php echo $this->_tpl_vars['p']; ?>
&f_object=<?php echo $this->_tpl_vars['f_object']; ?>
&f_reason=<?php echo $this->_tpl_vars['f_reason']; ?>
&f_details=<?php echo $this->_tpl_vars['f_details']; ?>
'><?php echo $this->_tpl_vars['Admin950']; ?>
</a></th>
            <th align="left" valign="top"><?php echo $this->_tpl_vars['Admin943']; ?>
</th>
            <th align="left" valign="top"><?php echo $this->_tpl_vars['Admin945']; ?>
</th>
            <th align="center" valign="top"><?php echo $this->_tpl_vars['Admin951']; ?>
</th>
           
        </tr>
        <?php unset($this->_sections['report_loop']);
$this->_sections['report_loop']['name'] = 'report_loop';
$this->_sections['report_loop']['loop'] = is_array($_loop=$this->_tpl_vars['reports']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['report_loop']['show'] = true;
$this->_sections['report_loop']['max'] = $this->_sections['report_loop']['loop'];
$this->_sections['report_loop']['step'] = 1;
$this->_sections['report_loop']['start'] = $this->_sections['report_loop']['step'] > 0 ? 0 : $this->_sections['report_loop']['loop']-1;
if ($this->_sections['report_loop']['show']) {
    $this->_sections['report_loop']['total'] = $this->_sections['report_loop']['loop'];
    if ($this->_sections['report_loop']['total'] == 0)
        $this->_sections['report_loop']['show'] = false;
} else
    $this->_sections['report_loop']['total'] = 0;
if ($this->_sections['report_loop']['show']):

            for ($this->_sections['report_loop']['index'] = $this->_sections['report_loop']['start'], $this->_sections['report_loop']['iteration'] = 1;
                 $this->_sections['report_loop']['iteration'] <= $this->_sections['report_loop']['total'];
                 $this->_sections['report_loop']['index'] += $this->_sections['report_loop']['step'], $this->_sections['report_loop']['iteration']++):
$this->_sections['report_loop']['rownum'] = $this->_sections['report_loop']['iteration'];
$this->_sections['report_loop']['index_prev'] = $this->_sections['report_loop']['index'] - $this->_sections['report_loop']['step'];
$this->_sections['report_loop']['index_next'] = $this->_sections['report_loop']['index'] + $this->_sections['report_loop']['step'];
$this->_sections['report_loop']['first']      = ($this->_sections['report_loop']['iteration'] == 1);
$this->_sections['report_loop']['last']       = ($this->_sections['report_loop']['iteration'] == $this->_sections['report_loop']['total']);
?>
        <tr class='<?php echo smarty_function_cycle(array('values' => "1, event"), $this);?>
'>
            <td align="left" class="col-f"><div class="t-input"><input type='checkbox' name='item_<?php echo $this->_tpl_vars['reports'][$this->_sections['report_loop']['index']]['report_id']; ?>
' value='1'/> <?php echo $this->_tpl_vars['reports'][$this->_sections['report_loop']['index']]['report_id']; ?>
</div></td>
            <td align="left"><a href='<?php echo $this->_tpl_vars['url']->url_create('profile',$this->_tpl_vars['reports'][$this->_sections['report_loop']['index']]['report_username']); ?>
' target='_blank'><?php echo $this->_tpl_vars['reports'][$this->_sections['report_loop']['index']]['report_username']; ?>
</a></td>
            <td align="left"><?php echo ((is_array($_tmp=$this->_tpl_vars['reports'][$this->_sections['report_loop']['index']]['report_details'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 90, "...", true) : smarty_modifier_truncate($_tmp, 90, "...", true)); ?>
</td>
            <td align="left"><?php echo $this->_tpl_vars['reports'][$this->_sections['report_loop']['index']]['report_reason']; ?>
</td>
            <td align="center" class="col-l"><a href='AdminLoginasuser.php?user_id=<?php echo $this->_tpl_vars['reports'][$this->_sections['report_loop']['index']]['report_user_id']; ?>
&return_url=<?php echo $this->_tpl_vars['reports'][$this->_sections['report_loop']['index']]['report_url']; ?>
' target='_blank'><?php echo $this->_tpl_vars['Admin936']; ?>
</a> | <a href='AdminViewreportsEdit.php.php?report_id=<?php echo $this->_tpl_vars['reports'][$this->_sections['report_loop']['index']]['report_id']; ?>
'><?php echo $this->_tpl_vars['Admin934']; ?>
</a> | <a href='AdminViewreports.php?task=delete&report_id=<?php echo $this->_tpl_vars['reports'][$this->_sections['report_loop']['index']]['report_id']; ?>
'><?php echo $this->_tpl_vars['Admin937']; ?>
</a></td>
        </tr>
        <?php endfor; endif; ?>

    </table>
    <label class="button"><input type='submit' value='<?php echo $this->_tpl_vars['Admin938']; ?>
'></label>
    <input type='hidden' name='task' value='dodelete'>
</form>

    <div class="result"><p><b><?php echo $this->_tpl_vars['total_reports']; ?>
</b> <?php echo $this->_tpl_vars['Admin16']; ?>
  |  <?php echo $this->_tpl_vars['Admin948']; ?>
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
</b><?php else: ?><a href='admin_viewgroups.php?s=<?php echo $this->_tpl_vars['s']; ?>
&p=<?php echo $this->_tpl_vars['pages'][$this->_sections['page_loop']['index']]['page']; ?>
&f_title=<?php echo $this->_tpl_vars['f_title']; ?>
&f_owner=<?php echo $this->_tpl_vars['f_owner']; ?>
'><?php echo $this->_tpl_vars['pages'][$this->_sections['page_loop']['index']]['page']; ?>
</a><?php endif; ?> <?php endfor; endif; ?></div>
    <br>
<?php endif; ?>


<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'AdminFooter.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>