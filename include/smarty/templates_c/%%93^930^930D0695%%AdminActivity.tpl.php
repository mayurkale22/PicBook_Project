<?php /* Smarty version 2.6.14, created on 2013-11-09 02:08:15
         compiled from AdminActivity.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'truncate', 'AdminActivity.tpl', 115, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'AdminHeader.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<h2><?php echo $this->_tpl_vars['Admin42']; ?>
</h2>
<p><?php echo $this->_tpl_vars['Admin43']; ?>
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


<?php if ($this->_tpl_vars['result'] != 0): ?>
<p style="color:green;"><?php echo $this->_tpl_vars['Admin44']; ?>
</p>
<br/>
<?php endif; ?>

<form action='AdminActivity.php' method='post'>

<p><?php echo $this->_tpl_vars['Admin45']; ?>
</p>
<p><?php echo $this->_tpl_vars['Admin46']; ?>
<p>


<?php unset($this->_sections['actiontype_loop']);
$this->_sections['actiontype_loop']['name'] = 'actiontype_loop';
$this->_sections['actiontype_loop']['loop'] = is_array($_loop=$this->_tpl_vars['actiontypes']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['actiontype_loop']['show'] = true;
$this->_sections['actiontype_loop']['max'] = $this->_sections['actiontype_loop']['loop'];
$this->_sections['actiontype_loop']['step'] = 1;
$this->_sections['actiontype_loop']['start'] = $this->_sections['actiontype_loop']['step'] > 0 ? 0 : $this->_sections['actiontype_loop']['loop']-1;
if ($this->_sections['actiontype_loop']['show']) {
    $this->_sections['actiontype_loop']['total'] = $this->_sections['actiontype_loop']['loop'];
    if ($this->_sections['actiontype_loop']['total'] == 0)
        $this->_sections['actiontype_loop']['show'] = false;
} else
    $this->_sections['actiontype_loop']['total'] = 0;
if ($this->_sections['actiontype_loop']['show']):

            for ($this->_sections['actiontype_loop']['index'] = $this->_sections['actiontype_loop']['start'], $this->_sections['actiontype_loop']['iteration'] = 1;
                 $this->_sections['actiontype_loop']['iteration'] <= $this->_sections['actiontype_loop']['total'];
                 $this->_sections['actiontype_loop']['index'] += $this->_sections['actiontype_loop']['step'], $this->_sections['actiontype_loop']['iteration']++):
$this->_sections['actiontype_loop']['rownum'] = $this->_sections['actiontype_loop']['iteration'];
$this->_sections['actiontype_loop']['index_prev'] = $this->_sections['actiontype_loop']['index'] - $this->_sections['actiontype_loop']['step'];
$this->_sections['actiontype_loop']['index_next'] = $this->_sections['actiontype_loop']['index'] + $this->_sections['actiontype_loop']['step'];
$this->_sections['actiontype_loop']['first']      = ($this->_sections['actiontype_loop']['iteration'] == 1);
$this->_sections['actiontype_loop']['last']       = ($this->_sections['actiontype_loop']['iteration'] == $this->_sections['actiontype_loop']['total']);
 if ($this->_sections['actiontype_loop']['first']): ?><div class="row" <?php if (! $this->_sections['actiontype_loop']['last']): ?>style="border:none;"<?php endif; ?>><?php endif; ?>
    <div class="block" style="margin-right:114px;">
        <div class="block-head"><h3>Action Type: <?php echo $this->_tpl_vars['actiontypes'][$this->_sections['actiontype_loop']['index']]['actiontype_name']; ?>
&nbsp;&nbsp;&nbsp;<input align="right" name='actiontype_enabled_<?php echo $this->_tpl_vars['actiontypes'][$this->_sections['actiontype_loop']['index']]['actiontype_id']; ?>
' type='checkbox' value='1' <?php if ($this->_tpl_vars['actiontypes'][$this->_sections['actiontype_loop']['index']]['actiontype_enabled'] == 1): ?> checked='checked'<?php endif; ?>/></h3></div>
        <div class="block-in">

            <p><label><b><?php echo $this->_tpl_vars['Admin47']; ?>
</b><textarea name='actiontype_text_<?php echo $this->_tpl_vars['actiontypes'][$this->_sections['actiontype_loop']['index']]['actiontype_id']; ?>
' rows='3' style='width: 100%;' class="input-border"><?php echo $this->_tpl_vars['actiontypes'][$this->_sections['actiontype_loop']['index']]['actiontype_text']; ?>
</textarea></label></p>
            <p><label><b><?php echo $this->_tpl_vars['Admin79']; ?>
</b><input name='actiontype_desc_<?php echo $this->_tpl_vars['actiontypes'][$this->_sections['actiontype_loop']['index']]['actiontype_id']; ?>
' type='text' size='37' maxlength='200' class="input-border" value='<?php echo $this->_tpl_vars['actiontypes'][$this->_sections['actiontype_loop']['index']]['actiontype_desc']; ?>
'/></label></p>
        </div>
        <div class="block-b">&nbsp;</div>
    </div>
    
    <?php if ($this->_sections['actiontype_loop']['iteration']%2 == 0 || $this->_sections['actiontype_loop']['last']): ?></div><?php endif; ?>
    <?php if ($this->_sections['actiontype_loop']['iteration']%2 == 0 && ! $this->_sections['actiontype_loop']['last']): ?><div class="row" <?php if (! $this->_sections['actiontype_loop']['last']): ?>style="border:none;"<?php endif; ?>><?php endif; ?>
    <?php if ($this->_sections['actiontype_loop']['last']): ?><p class="line">&nbsp;</p><?php endif; ?>

<?php endfor; endif; ?>
<input type='hidden' name='actiontypes_total' value='<?php echo $this->_tpl_vars['actiontypes_total']; ?>
'/>

<div class="row">
    <div class="block">
        <div class="block-head"><h3>How many recent actions do you want to store in the database for each user? </h3></div>
        <div class="block-in">
            <p>
                <label>
                    <select class="input-border" name='actions_actionsonprofile'>
                        <option<?php if ($this->_tpl_vars['actions_actionsonprofile'] == '0'): ?> selected='selected'<?php endif; ?>>0</option>
                        <option<?php if ($this->_tpl_vars['actions_actionsonprofile'] == '1'): ?> selected='selected'<?php endif; ?>>1</option>
                        <option<?php if ($this->_tpl_vars['actions_actionsonprofile'] == '2'): ?> selected='selected'<?php endif; ?>>2</option>
                        <option<?php if ($this->_tpl_vars['actions_actionsonprofile'] == '3'): ?> selected='selected'<?php endif; ?>>3</option>
                        <option<?php if ($this->_tpl_vars['actions_actionsonprofile'] == '4'): ?> selected='selected'<?php endif; ?>>4</option>
                        <option<?php if ($this->_tpl_vars['actions_actionsonprofile'] == '5'): ?> selected='selected'<?php endif; ?>>5</option>
                        <option<?php if ($this->_tpl_vars['actions_actionsonprofile'] == '6'): ?> selected='selected'<?php endif; ?>>6</option>
                        <option<?php if ($this->_tpl_vars['actions_actionsonprofile'] == '7'): ?> selected='selected'<?php endif; ?>>7</option>
                        <option<?php if ($this->_tpl_vars['actions_actionsonprofile'] == '8'): ?> selected='selected'<?php endif; ?>>8</option>
                        <option<?php if ($this->_tpl_vars['actions_actionsonprofile'] == '9'): ?> selected='selected'<?php endif; ?>>9</option>
                        <option<?php if ($this->_tpl_vars['actions_actionsonprofile'] == '10'): ?> selected='selected'<?php endif; ?>>10</option>
                    </select>

                    <?php echo $this->_tpl_vars['Admin51']; ?>

                </label>
            </p>
        </div>
        <div class="block-b">&nbsp;</div>
    </div>
    <p><?php echo $this->_tpl_vars['Admin50']; ?>
</p>
</div>
<br/>

<div class="row">
    <div class="block">
        <div class="block-head"><h3><?php echo $this->_tpl_vars['Admin52']; ?>
</h3></div>
        <div class="block-in">
            <p>
                <label>
                    <select class="input-border" name='actions_actionsinlist'>
                        <option<?php if ($this->_tpl_vars['actions_actionsinlist'] == '0'): ?> selected='selected'<?php endif; ?>>0</option>
                        <option<?php if ($this->_tpl_vars['actions_actionsinlist'] == '1'): ?> selected='selected'<?php endif; ?>>1</option>
                        <option<?php if ($this->_tpl_vars['actions_actionsinlist'] == '2'): ?> selected='selected'<?php endif; ?>>2</option>
                        <option<?php if ($this->_tpl_vars['actions_actionsinlist'] == '3'): ?> selected='selected'<?php endif; ?>>3</option>
                        <option<?php if ($this->_tpl_vars['actions_actionsinlist'] == '4'): ?> selected='selected'<?php endif; ?>>4</option>
                        <option<?php if ($this->_tpl_vars['actions_actionsinlist'] == '5'): ?> selected='selected'<?php endif; ?>>5</option>
                        <option<?php if ($this->_tpl_vars['actions_actionsinlist'] == '6'): ?> selected='selected'<?php endif; ?>>6</option>
                        <option<?php if ($this->_tpl_vars['actions_actionsinlist'] == '7'): ?> selected='selected'<?php endif; ?>>7</option>
                        <option<?php if ($this->_tpl_vars['actions_actionsinlist'] == '8'): ?> selected='selected'<?php endif; ?>>8</option>
                        <option<?php if ($this->_tpl_vars['actions_actionsinlist'] == '9'): ?> selected='selected'<?php endif; ?>>9</option>
                        <option<?php if ($this->_tpl_vars['actions_actionsinlist'] == '10'): ?> selected='selected'<?php endif; ?>>10</option>
                        <option<?php if ($this->_tpl_vars['actions_actionsinlist'] == '15'): ?> selected='selected'<?php endif; ?>>15</option>
                        <option<?php if ($this->_tpl_vars['actions_actionsinlist'] == '20'): ?> selected='selected'<?php endif; ?>>20</option>
                        <option<?php if ($this->_tpl_vars['actions_actionsinlist'] == '25'): ?> selected='selected'<?php endif; ?>>25</option>
                        <option<?php if ($this->_tpl_vars['actions_actionsinlist'] == '30'): ?> selected='selected'<?php endif; ?>>30</option>
                        <option<?php if ($this->_tpl_vars['actions_actionsinlist'] == '35'): ?> selected='selected'<?php endif; ?>>35</option>
                        <option<?php if ($this->_tpl_vars['actions_actionsinlist'] == '40'): ?> selected='selected'<?php endif; ?>>40</option>
                        <option<?php if ($this->_tpl_vars['actions_actionsinlist'] == '45'): ?> selected='selected'<?php endif; ?>>45</option>
                        <option<?php if ($this->_tpl_vars['actions_actionsinlist'] == '50'): ?> selected='selected'<?php endif; ?>>50</option>
                    </select>

                    <?php echo $this->_tpl_vars['Admin54']; ?>

                </label>
            </p>
        </div>
        <div class="block-b">&nbsp;</div>
    </div>
    <p><?php echo $this->_tpl_vars['Admin53']; ?>
</p>
</div>

<div class="row">
    <div class="block">
        <div class="block-head"><h3><?php echo ((is_array($_tmp=$this->_tpl_vars['Admin55'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 69, "...", true) : smarty_modifier_truncate($_tmp, 69, "...", true)); ?>
</h3></div>
        <div class="block-in">
            <p>
                <label>
                    <select class="input-border" name='actions_showlength'>
                        <option value='60'<?php if ($this->_tpl_vars['actions_showlength'] == '60'): ?> selected='selected'<?php endif; ?>>1 <?php echo $this->_tpl_vars['Admin57']; ?>
</option>
                        <option value='300'<?php if ($this->_tpl_vars['actions_showlength'] == '300'): ?> selected='selected'<?php endif; ?>>5 <?php echo $this->_tpl_vars['Admin58']; ?>
</option>
                        <option value='600'<?php if ($this->_tpl_vars['actions_showlength'] == '600'): ?> selected='selected'<?php endif; ?>>10 <?php echo $this->_tpl_vars['Admin58']; ?>
</option>
                        <option value='1200'<?php if ($this->_tpl_vars['actions_showlength'] == '1200'): ?> selected='selected'<?php endif; ?>>20 <?php echo $this->_tpl_vars['Admin58']; ?>
</option>
                        <option value='1800'<?php if ($this->_tpl_vars['actions_showlength'] == '1800'): ?> selected='selected'<?php endif; ?>>30 <?php echo $this->_tpl_vars['Admin58']; ?>
</option>
                        <option value='3600'<?php if ($this->_tpl_vars['actions_showlength'] == '3600'): ?> selected='selected'<?php endif; ?>>1 <?php echo $this->_tpl_vars['Admin59']; ?>
</option>
                        <option value='10800'<?php if ($this->_tpl_vars['actions_showlength'] == '10800'): ?> selected='selected'<?php endif; ?>>3 <?php echo $this->_tpl_vars['Admin60']; ?>
</option>
                        <option value='21600'<?php if ($this->_tpl_vars['actions_showlength'] == '21600'): ?> selected='selected'<?php endif; ?>>6 <?php echo $this->_tpl_vars['Admin60']; ?>
</option>
                        <option value='43200'<?php if ($this->_tpl_vars['actions_showlength'] == '43200'): ?> selected='selected'<?php endif; ?>>12 <?php echo $this->_tpl_vars['Admin60']; ?>
</option>
                        <option value='86400'<?php if ($this->_tpl_vars['actions_showlength'] == '86400'): ?> selected='selected'<?php endif; ?>>1 <?php echo $this->_tpl_vars['Admin61']; ?>
</option>
                        <option value='172800'<?php if ($this->_tpl_vars['actions_showlength'] == '172800'): ?> selected='selected'<?php endif; ?>>2 <?php echo $this->_tpl_vars['Admin62']; ?>
</option>
                        <option value='259200'<?php if ($this->_tpl_vars['actions_showlength'] == '259200'): ?> selected='selected'<?php endif; ?>>3 <?php echo $this->_tpl_vars['Admin62']; ?>
</option>
                        <option value='604800'<?php if ($this->_tpl_vars['actions_showlength'] == '604800'): ?> selected='selected'<?php endif; ?>>1 <?php echo $this->_tpl_vars['Admin63']; ?>
</option>
                        <option value='1209600'<?php if ($this->_tpl_vars['actions_showlength'] == '1209600'): ?> selected='selected'<?php endif; ?>>2 <?php echo $this->_tpl_vars['Admin64']; ?>
</option>
                        <option value='2629743'<?php if ($this->_tpl_vars['actions_showlength'] == '2629743'): ?> selected='selected'<?php endif; ?>>1 <?php echo ((is_array($_tmp=$this->_tpl_vars['Admin65'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 45, "...", true) : smarty_modifier_truncate($_tmp, 45, "...", true)); ?>
</option>
                    </select>

                    <?php echo $this->_tpl_vars['Admin56']; ?>

                </label>
            </p>
            <br/>
            <p>
                <label>
                    <select class="input-border" name='actions_actionsperuser'>
                        <option<?php if ($this->_tpl_vars['actions_actionsperuser'] == '0'): ?> selected='selected'<?php endif; ?>>0</option>
                        <option<?php if ($this->_tpl_vars['actions_actionsperuser'] == '1'): ?> selected='selected'<?php endif; ?>>1</option>
                        <option<?php if ($this->_tpl_vars['actions_actionsperuser'] == '2'): ?> selected='selected'<?php endif; ?>>2</option>
                        <option<?php if ($this->_tpl_vars['actions_actionsperuser'] == '3'): ?> selected='selected'<?php endif; ?>>3</option>
                        <option<?php if ($this->_tpl_vars['actions_actionsperuser'] == '4'): ?> selected='selected'<?php endif; ?>>4</option>
                        <option<?php if ($this->_tpl_vars['actions_actionsperuser'] == '5'): ?> selected='selected'<?php endif; ?>>5</option>
                        <option<?php if ($this->_tpl_vars['actions_actionsperuser'] == '6'): ?> selected='selected'<?php endif; ?>>6</option>
                        <option<?php if ($this->_tpl_vars['actions_actionsperuser'] == '7'): ?> selected='selected'<?php endif; ?>>7</option>
                        <option<?php if ($this->_tpl_vars['actions_actionsperuser'] == '8'): ?> selected='selected'<?php endif; ?>>8</option>
                        <option<?php if ($this->_tpl_vars['actions_actionsperuser'] == '9'): ?> selected='selected'<?php endif; ?>>9</option>
                        <option<?php if ($this->_tpl_vars['actions_actionsperuser'] == '10'): ?> selected='selected'<?php endif; ?>>10</option>
                    </select>
                    <?php echo $this->_tpl_vars['Admin66']; ?>

                </label>
            </p>
        </div>
        <div class="block-b">&nbsp;</div>
    </div>
    <p><?php echo $this->_tpl_vars['Admin55']; ?>
</p>
</div>

<div class="row">
    <div class="block">
        <div class="block-head"><h3><?php echo $this->_tpl_vars['Admin67']; ?>
</h3></div>
        <div class="block-in">
            <p><input type='radio' name='actions_selfdelete' id='actions_selfdelete_1' value='1'<?php if ($this->_tpl_vars['actions_selfdelete'] == 1): ?> CHECKED<?php endif; ?>/> <label for='actions_selfdelete_1'><?php echo $this->_tpl_vars['Admin69']; ?>
</label></p>
            <p><input type='radio' name='actions_selfdelete' id='actions_selfdelete_0' value='0'<?php if ($this->_tpl_vars['actions_selfdelete'] == 0): ?> CHECKED<?php endif; ?>>&nbsp;<label for='actions_selfdelete_0'><?php echo $this->_tpl_vars['Admin70']; ?>
</label></p>
        </div>
        <div class="block-b">&nbsp;</div>
    </div>
    <p><?php echo $this->_tpl_vars['Admin68']; ?>
</p>
</div>

<div class="row">
    <div class="block">
        <div class="block-head"><h3><?php echo $this->_tpl_vars['Admin70']; ?>
</h3></div>
        <div class="block-in">
            <?php unset($this->_sections['visibility_loop']);
$this->_sections['visibility_loop']['name'] = 'visibility_loop';
$this->_sections['visibility_loop']['loop'] = is_array($_loop=$this->_tpl_vars['actions_visibility']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['visibility_loop']['show'] = true;
$this->_sections['visibility_loop']['max'] = $this->_sections['visibility_loop']['loop'];
$this->_sections['visibility_loop']['step'] = 1;
$this->_sections['visibility_loop']['start'] = $this->_sections['visibility_loop']['step'] > 0 ? 0 : $this->_sections['visibility_loop']['loop']-1;
if ($this->_sections['visibility_loop']['show']) {
    $this->_sections['visibility_loop']['total'] = $this->_sections['visibility_loop']['loop'];
    if ($this->_sections['visibility_loop']['total'] == 0)
        $this->_sections['visibility_loop']['show'] = false;
} else
    $this->_sections['visibility_loop']['total'] = 0;
if ($this->_sections['visibility_loop']['show']):

            for ($this->_sections['visibility_loop']['index'] = $this->_sections['visibility_loop']['start'], $this->_sections['visibility_loop']['iteration'] = 1;
                 $this->_sections['visibility_loop']['iteration'] <= $this->_sections['visibility_loop']['total'];
                 $this->_sections['visibility_loop']['index'] += $this->_sections['visibility_loop']['step'], $this->_sections['visibility_loop']['iteration']++):
$this->_sections['visibility_loop']['rownum'] = $this->_sections['visibility_loop']['iteration'];
$this->_sections['visibility_loop']['index_prev'] = $this->_sections['visibility_loop']['index'] - $this->_sections['visibility_loop']['step'];
$this->_sections['visibility_loop']['index_next'] = $this->_sections['visibility_loop']['index'] + $this->_sections['visibility_loop']['step'];
$this->_sections['visibility_loop']['first']      = ($this->_sections['visibility_loop']['iteration'] == 1);
$this->_sections['visibility_loop']['last']       = ($this->_sections['visibility_loop']['iteration'] == $this->_sections['visibility_loop']['total']);
?>
            <?php if ($this->_tpl_vars['actions_visibility'][$this->_sections['visibility_loop']['index']]['privacy_value'] != 0 && $this->_tpl_vars['actions_visibility'][$this->_sections['visibility_loop']['index']]['privacy_value'] != 3 && $this->_tpl_vars['actions_visibility'][$this->_sections['visibility_loop']['index']]['privacy_value'] != 5): ?>
            <p><input type='radio' name='actions_visibility' id='actions_visibility<?php echo $this->_tpl_vars['actions_visibility'][$this->_sections['visibility_loop']['index']]['privacy_value']; ?>
' value='<?php echo $this->_tpl_vars['actions_visibility'][$this->_sections['visibility_loop']['index']]['privacy_value']; ?>
'<?php if ($this->_tpl_vars['actions_visibility'][$this->_sections['visibility_loop']['index']]['privacy_selected'] == 1): ?> checked='checked'<?php endif; ?>>&nbsp;<label for='actions_visibility<?php echo $this->_tpl_vars['actions_visibility'][$this->_sections['visibility_loop']['index']]['privacy_value']; ?>
'><?php echo $this->_tpl_vars['actions_visibility'][$this->_sections['visibility_loop']['index']]['privacy_option']; ?>
</label></p>
            <?php endif; ?>
            <?php endfor; endif; ?>
        </div>
        <div class="block-b">&nbsp;</div>
    </div>
    <p><?php echo $this->_tpl_vars['Admin72']; ?>
</p>
</div>

<div class="row" style="border-bottom:none; margin-bottom:0px;">
    <div class="block">
        <div class="block-head"><h3><?php echo $this->_tpl_vars['Admin74']; ?>
</h3></div>
        <div class="block-in">
            <p><input type='radio' name='actions_privacy' id='actions_privacy_1' value='1'<?php if ($this->_tpl_vars['actions_privacy'] == 1): ?> CHECKED<?php endif; ?>>&nbsp;<label for='actions_privacy_1'><?php echo $this->_tpl_vars['Admin77']; ?>
</label></p>
            <br/>
            <p><input type='radio' name='actions_privacy' id='actions_privacy_0' value='0'<?php if ($this->_tpl_vars['actions_privacy'] == 0): ?> CHECKED<?php endif; ?>>&nbsp;<label for='actions_privacy_0'><?php echo $this->_tpl_vars['Admin78']; ?>
</label></p>
        </div>
        <div class="block-b">&nbsp;</div>
    </div>
    <p><?php echo $this->_tpl_vars['Admin75']; ?>
</p>
</div>

<input type='hidden' name='task' value='dosave'>
<div style="padding-left:20px;"><label class="button"><input type='submit' value='<?php echo $this->_tpl_vars['Admin76']; ?>
'/></label></div>
</form>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'AdminFooter.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>