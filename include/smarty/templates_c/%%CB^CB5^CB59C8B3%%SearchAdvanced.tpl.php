<?php /* Smarty version 2.6.14, created on 2013-11-09 12:57:28
         compiled from SearchAdvanced.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'truncate', 'SearchAdvanced.tpl', 52, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'Header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '
<style type="text/css">
    .submit_button{
        background:transparent url(../images/link-btn.gif) no-repeat scroll 0 0;
        color:#FFFFFF;
        display:block;
        font-weight:bold;
        height:23px;
        line-height:23px;
        margin-top:10px;
        text-align:center;
        width:129px; 
        text-decoration:none;
        margin-left:25px;
    }
</style>
'; ?>

<div id="content">
        <?php if ($this->_tpl_vars['showfields'] == 1): ?>
    <div class="grey-head"><h2><?php echo $this->_tpl_vars['Application295']; ?>
</h2></div>
    <div class="row-blue">
        <p class="blue"><?php echo $this->_tpl_vars['Application296']; ?>
</p>
    </div>
    <?php elseif ($this->_tpl_vars['showfields'] == 0): ?>
    <div class="grey-head"><h2><?php echo $this->_tpl_vars['Application310']; ?>
 "<?php echo $this->_tpl_vars['linkedfield_title']; ?>
: <?php echo $this->_tpl_vars['linkedfield_value']; ?>
"</h2></div>
    <div class="row-blue">
        <p class="blue"><?php echo $this->_tpl_vars['Application311']; ?>
 <?php echo $this->_tpl_vars['total_users']; ?>
 <?php echo $this->_tpl_vars['Application312']; ?>
 "<?php echo $this->_tpl_vars['linkedfield_title']; ?>
: <?php echo $this->_tpl_vars['linkedfield_value']; ?>
"</p>
    </div>
    <?php endif; ?>

        <?php if ($this->_tpl_vars['task'] == 'browse' || $this->_tpl_vars['task'] == 'dosearch' || $this->_tpl_vars['task'] == 'main'): ?>

        <?php if ($this->_tpl_vars['total_users'] == 0): ?>
    <br/>
    <p align="center"> <?php echo $this->_tpl_vars['Application302']; ?>
</p>
    <br/>
    <?php else: ?>

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
    <div class="row"  <?php if ($this->_sections['user_loop']['last'] == true): ?>style="border:none;"<?php endif; ?>>
        <a href='<?php echo $this->_tpl_vars['url']->url_create('profile',$this->_tpl_vars['users'][$this->_sections['user_loop']['index']]->user_info['user_username']); ?>
' class="f-left"><img src='<?php echo $this->_tpl_vars['users'][$this->_sections['user_loop']['index']]->user_photo('./images/nophoto.gif'); ?>
' width='92' class="img" alt="<?php echo $this->_tpl_vars['users'][$this->_sections['user_loop']['index']]->user_info['user_username'];  echo $this->_tpl_vars['Application310']; ?>
"></a>
        <dl>
            <dt>Name</dt>
            <dd><a href='<?php echo $this->_tpl_vars['url']->url_create('profile',$this->_tpl_vars['users'][$this->_sections['user_loop']['index']]->user_info['user_username']); ?>
'><?php echo ((is_array($_tmp=$this->_tpl_vars['users'][$this->_sections['user_loop']['index']]->user_info['user_username'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 20, "...", true) : smarty_modifier_truncate($_tmp, 20, "...", true)); ?>
</a></dd>
            <?php if ($this->_tpl_vars['users'][$this->_sections['user_loop']['index']]->user_info['user_online'] == 1): ?>
            <dt>Is online?</dt>
            <dd><?php echo $this->_tpl_vars['Application303']; ?>
</dd>
            <?php endif; ?>
        </dl>
    </div>
    <?php endfor; endif; ?>

    <?php endif; ?>
    <?php endif; ?>
    <div class="block-bot"><span></span></div>
</div>
<div id="sidebar">
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'MenuSidebar.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>


        <form name="searching" action='SearchAdvanced.php' method='POST' style="padding:0 0;">
        <?php if ($this->_tpl_vars['showfields'] == 1): ?>


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

                <?php unset($this->_sections['field_loop']);
$this->_sections['field_loop']['name'] = 'field_loop';
$this->_sections['field_loop']['loop'] = is_array($_loop=$this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['fields']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
        <div class="block">
            <ul class="accordion">
                <li class="form-top active">
                    <a href="#" class="opener active"><h2><?php echo $this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_title']; ?>
</h2></a>
                    <div class="slide">
                        <div class="side-form">
                            <?php if ($this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_type'] == 1 | $this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_type'] == 2): ?>
                                                        <input style="border:1px solid #CBD0D2;" size="26" type='text' name='field_<?php echo $this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_id']; ?>
' value='<?php echo $this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_value']; ?>
'/>

                            <?php elseif ($this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_type'] == 3 | $this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_type'] == 4): ?>
                                                        <select name='field_<?php echo $this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_id']; ?>
'><option value='-1'></option>
                                                                <?php unset($this->_sections['option_loop']);
$this->_sections['option_loop']['name'] = 'option_loop';
$this->_sections['option_loop']['loop'] = is_array($_loop=$this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_options']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['option_loop']['show'] = true;
$this->_sections['option_loop']['max'] = $this->_sections['option_loop']['loop'];
$this->_sections['option_loop']['step'] = 1;
$this->_sections['option_loop']['start'] = $this->_sections['option_loop']['step'] > 0 ? 0 : $this->_sections['option_loop']['loop']-1;
if ($this->_sections['option_loop']['show']) {
    $this->_sections['option_loop']['total'] = $this->_sections['option_loop']['loop'];
    if ($this->_sections['option_loop']['total'] == 0)
        $this->_sections['option_loop']['show'] = false;
} else
    $this->_sections['option_loop']['total'] = 0;
if ($this->_sections['option_loop']['show']):

            for ($this->_sections['option_loop']['index'] = $this->_sections['option_loop']['start'], $this->_sections['option_loop']['iteration'] = 1;
                 $this->_sections['option_loop']['iteration'] <= $this->_sections['option_loop']['total'];
                 $this->_sections['option_loop']['index'] += $this->_sections['option_loop']['step'], $this->_sections['option_loop']['iteration']++):
$this->_sections['option_loop']['rownum'] = $this->_sections['option_loop']['iteration'];
$this->_sections['option_loop']['index_prev'] = $this->_sections['option_loop']['index'] - $this->_sections['option_loop']['step'];
$this->_sections['option_loop']['index_next'] = $this->_sections['option_loop']['index'] + $this->_sections['option_loop']['step'];
$this->_sections['option_loop']['first']      = ($this->_sections['option_loop']['iteration'] == 1);
$this->_sections['option_loop']['last']       = ($this->_sections['option_loop']['iteration'] == $this->_sections['option_loop']['total']);
?>
                                <option value='<?php echo $this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_options'][$this->_sections['option_loop']['index']]['option_id']; ?>
'<?php if ($this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_options'][$this->_sections['option_loop']['index']]['option_id'] == $this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_value']): ?> SELECTED<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_options'][$this->_sections['option_loop']['index']]['option_label'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 30, "...", true) : smarty_modifier_truncate($_tmp, 30, "...", true)); ?>
</option>
                                <?php endfor; endif; ?>
                            </select>

                            <?php elseif ($this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_type'] == 5): ?>
                            
                            <select name='field_<?php echo $this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_id']; ?>
_1'>
                                <?php unset($this->_sections['date1']);
$this->_sections['date1']['name'] = 'date1';
$this->_sections['date1']['loop'] = is_array($_loop=$this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['date_array1']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['date1']['show'] = true;
$this->_sections['date1']['max'] = $this->_sections['date1']['loop'];
$this->_sections['date1']['step'] = 1;
$this->_sections['date1']['start'] = $this->_sections['date1']['step'] > 0 ? 0 : $this->_sections['date1']['loop']-1;
if ($this->_sections['date1']['show']) {
    $this->_sections['date1']['total'] = $this->_sections['date1']['loop'];
    if ($this->_sections['date1']['total'] == 0)
        $this->_sections['date1']['show'] = false;
} else
    $this->_sections['date1']['total'] = 0;
if ($this->_sections['date1']['show']):

            for ($this->_sections['date1']['index'] = $this->_sections['date1']['start'], $this->_sections['date1']['iteration'] = 1;
                 $this->_sections['date1']['iteration'] <= $this->_sections['date1']['total'];
                 $this->_sections['date1']['index'] += $this->_sections['date1']['step'], $this->_sections['date1']['iteration']++):
$this->_sections['date1']['rownum'] = $this->_sections['date1']['iteration'];
$this->_sections['date1']['index_prev'] = $this->_sections['date1']['index'] - $this->_sections['date1']['step'];
$this->_sections['date1']['index_next'] = $this->_sections['date1']['index'] + $this->_sections['date1']['step'];
$this->_sections['date1']['first']      = ($this->_sections['date1']['iteration'] == 1);
$this->_sections['date1']['last']       = ($this->_sections['date1']['iteration'] == $this->_sections['date1']['total']);
?>
                                <option value='<?php echo $this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['date_array1'][$this->_sections['date1']['index']]['value']; ?>
'<?php echo $this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['date_array1'][$this->_sections['date1']['index']]['selected']; ?>
><?php echo $this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['date_array1'][$this->_sections['date1']['index']]['name']; ?>
</option>
                                <?php endfor; endif; ?>
                            </select>

                            <select name='field_<?php echo $this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_id']; ?>
_2'>
                                <?php unset($this->_sections['date2']);
$this->_sections['date2']['name'] = 'date2';
$this->_sections['date2']['loop'] = is_array($_loop=$this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['date_array2']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['date2']['show'] = true;
$this->_sections['date2']['max'] = $this->_sections['date2']['loop'];
$this->_sections['date2']['step'] = 1;
$this->_sections['date2']['start'] = $this->_sections['date2']['step'] > 0 ? 0 : $this->_sections['date2']['loop']-1;
if ($this->_sections['date2']['show']) {
    $this->_sections['date2']['total'] = $this->_sections['date2']['loop'];
    if ($this->_sections['date2']['total'] == 0)
        $this->_sections['date2']['show'] = false;
} else
    $this->_sections['date2']['total'] = 0;
if ($this->_sections['date2']['show']):

            for ($this->_sections['date2']['index'] = $this->_sections['date2']['start'], $this->_sections['date2']['iteration'] = 1;
                 $this->_sections['date2']['iteration'] <= $this->_sections['date2']['total'];
                 $this->_sections['date2']['index'] += $this->_sections['date2']['step'], $this->_sections['date2']['iteration']++):
$this->_sections['date2']['rownum'] = $this->_sections['date2']['iteration'];
$this->_sections['date2']['index_prev'] = $this->_sections['date2']['index'] - $this->_sections['date2']['step'];
$this->_sections['date2']['index_next'] = $this->_sections['date2']['index'] + $this->_sections['date2']['step'];
$this->_sections['date2']['first']      = ($this->_sections['date2']['iteration'] == 1);
$this->_sections['date2']['last']       = ($this->_sections['date2']['iteration'] == $this->_sections['date2']['total']);
?>
                                <option value='<?php echo $this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['date_array2'][$this->_sections['date2']['index']]['value']; ?>
'<?php echo $this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['date_array2'][$this->_sections['date2']['index']]['selected']; ?>
><?php echo $this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['date_array2'][$this->_sections['date2']['index']]['name']; ?>
</option>
                                <?php endfor; endif; ?>
                            </select>

                            <select name='field_<?php echo $this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['field_id']; ?>
_3'>
                                <?php unset($this->_sections['date3']);
$this->_sections['date3']['name'] = 'date3';
$this->_sections['date3']['loop'] = is_array($_loop=$this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['date_array3']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['date3']['show'] = true;
$this->_sections['date3']['max'] = $this->_sections['date3']['loop'];
$this->_sections['date3']['step'] = 1;
$this->_sections['date3']['start'] = $this->_sections['date3']['step'] > 0 ? 0 : $this->_sections['date3']['loop']-1;
if ($this->_sections['date3']['show']) {
    $this->_sections['date3']['total'] = $this->_sections['date3']['loop'];
    if ($this->_sections['date3']['total'] == 0)
        $this->_sections['date3']['show'] = false;
} else
    $this->_sections['date3']['total'] = 0;
if ($this->_sections['date3']['show']):

            for ($this->_sections['date3']['index'] = $this->_sections['date3']['start'], $this->_sections['date3']['iteration'] = 1;
                 $this->_sections['date3']['iteration'] <= $this->_sections['date3']['total'];
                 $this->_sections['date3']['index'] += $this->_sections['date3']['step'], $this->_sections['date3']['iteration']++):
$this->_sections['date3']['rownum'] = $this->_sections['date3']['iteration'];
$this->_sections['date3']['index_prev'] = $this->_sections['date3']['index'] - $this->_sections['date3']['step'];
$this->_sections['date3']['index_next'] = $this->_sections['date3']['index'] + $this->_sections['date3']['step'];
$this->_sections['date3']['first']      = ($this->_sections['date3']['iteration'] == 1);
$this->_sections['date3']['last']       = ($this->_sections['date3']['iteration'] == $this->_sections['date3']['total']);
?>
                                <option value='<?php echo $this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['date_array3'][$this->_sections['date3']['index']]['value']; ?>
'<?php echo $this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['date_array3'][$this->_sections['date3']['index']]['selected']; ?>
><?php echo $this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['fields'][$this->_sections['field_loop']['index']]['date_array3'][$this->_sections['date3']['index']]['name']; ?>
</option>
                                <?php endfor; endif; ?>
                            </select>
                            <?php endif; ?>
                        </div>
                        <div class="block-bot"><span></span></div>
                    </div>
                </li>
            </ul>
        </div>
        <?php endfor; endif; ?>
        <?php endfor; endif; ?>

        <div class="block">
            <ul class="accordion">
                <li class="form-top active"><a href="#" class="opener active"><h2><?php echo $this->_tpl_vars['Application316']; ?>
</h2></a>
                    <div class="slide">

                                                <div class='side-form'>
                            <select name='sort' class='small'>
                                <option value='user_dateupdated DESC'<?php if ($this->_tpl_vars['sort'] == 'user_dateupdated DESC'): ?> SELECTED<?php endif; ?>><?php echo $this->_tpl_vars['Application317']; ?>
</option>
                                <option value='user_dateupdated ASC'<?php if ($this->_tpl_vars['sort'] == 'user_dateupdated ASC'): ?> SELECTED<?php endif; ?>><?php echo $this->_tpl_vars['Application299']; ?>
</option>
                                <option value='user_lastlogindate DESC'<?php if ($this->_tpl_vars['sort'] == 'user_lastlogindate DESC'): ?> SELECTED<?php endif; ?>><?php echo $this->_tpl_vars['Application318']; ?>
</option>
                                <option value='user_lastlogindate ASC'<?php if ($this->_tpl_vars['sort'] == 'user_lastlogindate ASC'): ?> SELECTED<?php endif; ?>><?php echo $this->_tpl_vars['Application300']; ?>
</option>
                                <option value='user_signupdate DESC'<?php if ($this->_tpl_vars['sort'] == 'user_signupdate DESC'): ?> SELECTED<?php endif; ?>><?php echo $this->_tpl_vars['Application319']; ?>
</option>
                                <option value='user_signupdate ASC'<?php if ($this->_tpl_vars['sort'] == 'user_signupdate ASC'): ?> SELECTED<?php endif; ?>><?php echo $this->_tpl_vars['Application301']; ?>
</option>
                            </select>


                        </div>

                        <div class="block-bot"><span></span></div>
                    </div>
                </li>

            </ul>
        </div>
        <input type='hidden' name='task' value='dosearch'/>
        <a href="javascript:void(0);" onclick="document.searching.submit()" class="submit_button"><?php echo $this->_tpl_vars['Application298']; ?>
</a>
    </form>
    <?php endif; ?>

</div>







<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'Footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>