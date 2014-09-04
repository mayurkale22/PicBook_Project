<?php /* Smarty version 2.6.14, created on 2013-11-09 15:48:08
         compiled from AdminAnnouncements.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'AdminAnnouncements.tpl', 34, false),array('modifier', 'truncate', 'AdminAnnouncements.tpl', 37, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'AdminHeader.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '
<style type="text/css">
    .input-border{
        border-color:#CBD0D2;
        border-style:solid;
        border-width:1px;
    }
</style>
'; ?>


<?php if ($this->_tpl_vars['task'] == 'main'): ?>
<h2><?php echo $this->_tpl_vars['Admin246']; ?>
</h2>
<p><?php echo $this->_tpl_vars['Admin247']; ?>
</p>

<b><a href='AdminAnnouncements.php?task=post&type=email'><?php echo $this->_tpl_vars['Admin248']; ?>
</a></b>
<p><?php echo $this->_tpl_vars['Admin249']; ?>
</p>

<b><a href='AdminAnnouncements.php?task=post&type=news'><?php echo $this->_tpl_vars['Admin250']; ?>
</a></b>
<p><?php echo $this->_tpl_vars['Admin251']; ?>
</p>



<?php if ($this->_tpl_vars['news_total'] > 0): ?>
<table cellpadding="0" cellspacing="0" class="view-users">
    <tr>
        <th align="left" valign="top" class="col-f" style="width:40px;"><?php echo $this->_tpl_vars['Admin252']; ?>
</th>
        <th align="left" valign="top" style="width:540px; "><?php echo $this->_tpl_vars['Admin253']; ?>
</th>
        <th align="center" valign="top" class="col-l" style="background:transparent url(../images/th-l_ann.gif) no-repeat scroll right center;"><?php echo $this->_tpl_vars['Admin254']; ?>
</th>
    </tr>
    <?php unset($this->_sections['news_loop']);
$this->_sections['news_loop']['name'] = 'news_loop';
$this->_sections['news_loop']['loop'] = is_array($_loop=$this->_tpl_vars['news']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['news_loop']['show'] = true;
$this->_sections['news_loop']['max'] = $this->_sections['news_loop']['loop'];
$this->_sections['news_loop']['step'] = 1;
$this->_sections['news_loop']['start'] = $this->_sections['news_loop']['step'] > 0 ? 0 : $this->_sections['news_loop']['loop']-1;
if ($this->_sections['news_loop']['show']) {
    $this->_sections['news_loop']['total'] = $this->_sections['news_loop']['loop'];
    if ($this->_sections['news_loop']['total'] == 0)
        $this->_sections['news_loop']['show'] = false;
} else
    $this->_sections['news_loop']['total'] = 0;
if ($this->_sections['news_loop']['show']):

            for ($this->_sections['news_loop']['index'] = $this->_sections['news_loop']['start'], $this->_sections['news_loop']['iteration'] = 1;
                 $this->_sections['news_loop']['iteration'] <= $this->_sections['news_loop']['total'];
                 $this->_sections['news_loop']['index'] += $this->_sections['news_loop']['step'], $this->_sections['news_loop']['iteration']++):
$this->_sections['news_loop']['rownum'] = $this->_sections['news_loop']['iteration'];
$this->_sections['news_loop']['index_prev'] = $this->_sections['news_loop']['index'] - $this->_sections['news_loop']['step'];
$this->_sections['news_loop']['index_next'] = $this->_sections['news_loop']['index'] + $this->_sections['news_loop']['step'];
$this->_sections['news_loop']['first']      = ($this->_sections['news_loop']['iteration'] == 1);
$this->_sections['news_loop']['last']       = ($this->_sections['news_loop']['iteration'] == $this->_sections['news_loop']['total']);
?>
    <tr class='<?php echo smarty_function_cycle(array('values' => "1, event"), $this);?>
'>
        <td align="left" class="col-f"><?php echo $this->_tpl_vars['news'][$this->_sections['news_loop']['index']]['item_id']; ?>
</td>
        <td align="left">
            <div><b><?php if ($this->_tpl_vars['news'][$this->_sections['news_loop']['index']]['item_subject'] != ""):  echo ((is_array($_tmp=$this->_tpl_vars['news'][$this->_sections['news_loop']['index']]['item_subject'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 50, "...", true) : smarty_modifier_truncate($_tmp, 50, "...", true));  else: ?><i><?php echo $this->_tpl_vars['Admin10']; ?>
</i><?php endif; ?> </b><?php if ($this->_tpl_vars['news'][$this->_sections['news_loop']['index']]['item_date'] != ""):  echo $this->_tpl_vars['news'][$this->_sections['news_loop']['index']]['item_date'];  else: ?><i><?php echo $this->_tpl_vars['Admin11']; ?>
</i><?php endif; ?></div>
           
            <div><?php echo ((is_array($_tmp=$this->_tpl_vars['news'][$this->_sections['news_loop']['index']]['item_body'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 300, "...", true) : smarty_modifier_truncate($_tmp, 300, "...", true)); ?>
</div>
        </td>
        <td align="center" class="col-l">
            <a href='AdminAnnouncements.php?task=post&type=news&announcement_id=<?php echo $this->_tpl_vars['news'][$this->_sections['news_loop']['index']]['item_id']; ?>
'><?php echo $this->_tpl_vars['Admin257']; ?>
</a> |
            <?php if ($this->_sections['news_loop']['last'] != true): ?><a href='AdminAnnouncements.php?task=moveup&type=news&announcement_id=<?php echo $this->_tpl_vars['news'][$this->_sections['news_loop']['index']]['item_id']; ?>
'><?php echo $this->_tpl_vars['Admin258']; ?>
</a> |<?php endif; ?>
            <a href='AdminAnnouncements.php?task=dodelete&type=news&announcement_id=<?php echo $this->_tpl_vars['news'][$this->_sections['news_loop']['index']]['item_id']; ?>
'><?php echo $this->_tpl_vars['Admin259']; ?>
</a>
       </td>
    </tr>
    <?php endfor; endif; ?>
</table>
<br/>

<?php endif;  endif; ?>




<?php if ($this->_tpl_vars['task'] == 'post' && $this->_tpl_vars['type'] == 'news'): ?>
<h2><?php echo $this->_tpl_vars['Admin260']; ?>
</h2>
<p><?php echo $this->_tpl_vars['Admin261']; ?>
</p>

<form action='AdminAnnouncements.php' method='post' style="color:#666666;">
    <b><?php echo $this->_tpl_vars['Admin262']; ?>
</b>
    <br><input type='text' name='date' size='50' class="input-border" maxlength='200' value='<?php echo $this->_tpl_vars['item_date']; ?>
'>
    <br><?php echo $this->_tpl_vars['Admin263']; ?>

    <br><br>
    <b><?php echo $this->_tpl_vars['Admin264']; ?>
</b>
    <br><input type='text' name='subject' size='50' class="input-border" maxlength='200' value='<?php echo $this->_tpl_vars['item_subject']; ?>
'>
    <br><br>
    <b><?php echo $this->_tpl_vars['Admin253']; ?>
</b> <?php echo $this->_tpl_vars['Admin265']; ?>

    <br><textarea name='body' class="input-border" rows='7' cols='80'><?php echo $this->_tpl_vars['item_body']; ?>
</textarea>
    <br><br>
    <table cellpadding='0' cellspacing='0' style="color:#666666;">
    <tr>
    <td>
    <label class="button"><input type='submit' value='<?php echo $this->_tpl_vars['Admin266']; ?>
'/></label>&nbsp;
    <input type='hidden' name='task' value='dopost'>
    <input type='hidden' name='type' value='news'>
    <input type='hidden' name='announcement_id' value='<?php echo $this->_tpl_vars['announcement_id']; ?>
'>
</form>
</td>
<td>
    <form action='AdminAnnouncements.php' method='post'>
        <label class="button"><input type='submit' value='<?php echo $this->_tpl_vars['Admin267']; ?>
'/></label>
    </form>
</td>
</tr>
</table>
<?php endif; ?>




<?php if ($this->_tpl_vars['task'] == 'post' && $this->_tpl_vars['type'] == 'email'): ?>
<h2><?php echo $this->_tpl_vars['Admin248']; ?>
</h2>
<p><?php echo $this->_tpl_vars['Admin268']; ?>
</p>


<?php if ($this->_tpl_vars['is_error'] == 1): ?>
<p style="color:red;"><?php echo $this->_tpl_vars['error_msg']; ?>
</p>
<?php endif; ?>

<table cellpadding='5' cellspacing='4' style="color:#666666;">
    <form action='AdminAnnouncements.php' method='POST'>
        <tr>
            <td align='right'><b><?php echo $this->_tpl_vars['Admin269']; ?>
:</b></td>
            <td><input type='text' class="input-border" name='from' size='40' value='<?php echo $this->_tpl_vars['em_from']; ?>
'></td>
        </tr>
        <tr>
            <td align='right'><b><?php echo $this->_tpl_vars['Admin264']; ?>
:</b></td>
            <td><input type='text' class="input-border" name='subject' size='40' value='<?php echo $this->_tpl_vars['em_sub']; ?>
'></td>
        </tr>
        <tr>
            <td align='right' valign='top'><b><?php echo $this->_tpl_vars['Admin253']; ?>
:</b></td>
            <td><textarea name='message' class="input-border" rows='8' cols='80'><?php echo $this->_tpl_vars['em_mess']; ?>
</textarea></td>
        </tr>
        <tr>
            <td align='right' nowrap='nowrap'><b><?php echo $this->_tpl_vars['Admin270']; ?>
:</b></td>
            <td nowrap='nowrap'>
                <select class="input-border" name='emails_at_a_time'>
                    <option value='1'<?php if ($this->_tpl_vars['emails_at_a_time'] == 1): ?> selected='selected'<?php endif; ?>>1 <?php echo $this->_tpl_vars['Admin280']; ?>
</option>
                    <option value='2'<?php if ($this->_tpl_vars['emails_at_a_time'] == 2): ?> selected='selected'<?php endif; ?>>2 <?php echo $this->_tpl_vars['Admin271']; ?>
</option>
                    <option value='3'<?php if ($this->_tpl_vars['emails_at_a_time'] == 3): ?> selected='selected'<?php endif; ?>>3 <?php echo $this->_tpl_vars['Admin271']; ?>
</option>
                    <option value='4'<?php if ($this->_tpl_vars['emails_at_a_time'] == 4): ?> selected='selected'<?php endif; ?>>4 <?php echo $this->_tpl_vars['Admin271']; ?>
</option>
                    <option value='5'<?php if ($this->_tpl_vars['emails_at_a_time'] == 5): ?> selected='selected'<?php endif; ?>>5 <?php echo $this->_tpl_vars['Admin271']; ?>
</option>
                </select>
                <div>
            </td>
        </tr>

                <?php $this->assign('subnets_total', $this->_tpl_vars['subnets_total']+1); ?>
        <?php if ($this->_tpl_vars['levels_total'] > 10 || $this->_tpl_vars['subnets_total'] > 10): ?>
        <?php $this->assign('options_to_show', '10'); ?>
        <?php elseif ($this->_tpl_vars['levels_total'] > $this->_tpl_vars['subnets_total']): ?>
        <?php $this->assign('options_to_show', $this->_tpl_vars['levels_total']); ?>
        <?php elseif ($this->_tpl_vars['levels_total'] < $this->_tpl_vars['subnets_total']): ?>
        <?php $this->assign('options_to_show', $this->_tpl_vars['subnets_total']); ?>
        <?php elseif ($this->_tpl_vars['levels_total'] == $this->_tpl_vars['subnets_total']): ?>
        <?php $this->assign('options_to_show', $this->_tpl_vars['levels_total']); ?>
        <?php endif; ?>

        <tr>
            <td align='right' valign='top'><b><?php echo $this->_tpl_vars['Admin283']; ?>
:</b></td>
            <td valign='top'>
                <?php echo $this->_tpl_vars['Admin284']; ?>

                <br><br>
                <table cellpadding='0' cellspacing='0' style="color:#666666;">
                    <tr>
                        <td><?php echo $this->_tpl_vars['Admin285']; ?>
:</td>
                        <td style='padding-left: 10px;'><?php echo $this->_tpl_vars['Admin286']; ?>
:</td>
                    </tr>
                    <tr>
                        <td>
                            <select size='<?php echo $this->_tpl_vars['options_to_show']; ?>
' class="input-border" name='levels[]' multiple='multiple' style='width: 300px;'>
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
'<?php if ($this->_tpl_vars['levels'][$this->_sections['level_loop']['index']]['level_selected'] == 1): ?> selected='selected'<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['levels'][$this->_sections['level_loop']['index']]['level_name'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 75, "...", true) : smarty_modifier_truncate($_tmp, 75, "...", true));  if ($this->_tpl_vars['levels'][$this->_sections['level_loop']['index']]['level_default'] == 1): ?> <?php echo $this->_tpl_vars['Admin287'];  endif; ?></option>
                                <?php endfor; endif; ?>
                            </select>
                        </td>
                        <td style='padding-left: 10px;'>
                            <select size='<?php echo $this->_tpl_vars['options_to_show']; ?>
' class="input-border" name='subnets[]' multiple='multiple' style='width: 300px;'>
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
'<?php if ($this->_tpl_vars['subnets'][$this->_sections['subnet_loop']['index']]['subnet_selected'] == 1): ?> selected='selected'<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['subnets'][$this->_sections['subnet_loop']['index']]['subnet_name'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 75, "...", true) : smarty_modifier_truncate($_tmp, 75, "...", true)); ?>
</option>
                                <?php endfor; endif; ?>
                            </select>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
        <td>&nbsp;</td>
        <td>
        <table cellpadding='0' cellspacing='0' style="color:#666666;">
        <tr>
        <td>
        <label class="button"><input type='submit' value='<?php echo $this->_tpl_vars['Admin272']; ?>
'/></label>
        <input type='hidden' name='task' value='dosend'>
        <input type='hidden' name='type' value='email'>
    </form>
    </td>
    <td>
        <form action='AdminAnnouncements.php' method='post'>
            <label class="button"><input type='submit' value='<?php echo $this->_tpl_vars['Admin267']; ?>
'/></label>
        </form>
    </td>
    </tr>
</table>
</td>
</tr>
</table>
<?php endif; ?>




<?php if ($this->_tpl_vars['task'] == 'dosend' && $this->_tpl_vars['type'] == 'email'):  if ($this->_tpl_vars['totalinset'] < $this->_tpl_vars['emails_at_a_time']): ?>

<h2><?php echo $this->_tpl_vars['Admin276']; ?>
</h2>
<p><?php echo $this->_tpl_vars['Admin277']; ?>
</p>
<p><?php echo $this->_tpl_vars['Admin278']; ?>
</p>

<form action='AdminAnnouncements.php' method='post'>
    <label class="button"><input type='submit' value='<?php echo $this->_tpl_vars['Admin279']; ?>
'/></label>
</form>

<?php else: ?>

<?php $this->assign('startnum', $this->_tpl_vars['start1']-1);  $this->assign('finishnum', $this->_tpl_vars['finish1']-1); ?>

<h2><?php echo $this->_tpl_vars['Admin279']; ?>
</h2>
<p><?php echo $this->_tpl_vars['Admin280']; ?>
 <b>#<?php echo $this->_tpl_vars['startnum']; ?>
 - #<?php echo $this->_tpl_vars['finishnum']; ?>
 <?php echo $this->_tpl_vars['Admin288']; ?>
 <?php echo $this->_tpl_vars['total']; ?>
</b></p>
<p><?php echo $this->_tpl_vars['Admin281']; ?>
</p>
<br>
<form action='AdminAnnouncements.php' name='nextset' method='POST'>
    <label class="button"><input type='submit' value='<?php echo $this->_tpl_vars['Admin279']; ?>
'/></label>
    <input type='hidden' name='start' value='<?php echo $this->_tpl_vars['finish']; ?>
'>
    <input type='hidden' name='from' value='<?php echo $this->_tpl_vars['em_from']; ?>
'>
    <input type='hidden' name='subject' value='<?php echo $this->_tpl_vars['em_sub']; ?>
'>
    <input type='hidden' name='message' value='<?php echo $this->_tpl_vars['em_mess']; ?>
'>
    <input type='hidden' name='levels' value='<?php echo $this->_tpl_vars['levels']; ?>
'>
    <input type='hidden' name='subnets' value='<?php echo $this->_tpl_vars['subnets']; ?>
'>
    <input type='hidden' name='emails_at_a_time' value='<?php echo $this->_tpl_vars['emails_at_a_time']; ?>
'>
    <input type='hidden' name='task' value='dosend'>
    <input type='hidden' name='type' value='email'>
    <input type='hidden' name='total' value='<?php echo $this->_tpl_vars['total']; ?>
'>
</form>

<script language="JavaScript">
    <?php echo '
    <!--
    function SymError() { return true; }
    window.onerror = SymError;
    var SymRealWinOpen = window.open;
    function SymWinOpen(url, name, attributes) { return (new Object()); }
    window.open = SymWinOpen;
    appendEvent = function(el, evname, func) {
        if (el.attachEvent) { // IE
            el.attachEvent(\'on\' + evname, func);
        } else if (el.addEventListener) { // Gecko / W3C
            el.addEventListener(evname, func, true);
        } else {
            el[\'on\' + evname] = func;
        }
    };
    appendEvent(window, \'load\', windowonload);
    function windowonload() {
        setTimeout("document.nextset.submit()", 3000);
    }
    '; ?>

    // -->
</script>

<?php endif; ?>

<?php endif; ?>



<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'AdminFooter.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>