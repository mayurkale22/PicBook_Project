<?php /* Smarty version 2.6.14, created on 2013-11-09 02:16:44
         compiled from News.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'choptext', 'News.tpl', 37, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'Header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="content">
        <div class="grey-head"><h2><?php echo $this->_tpl_vars['Application620']; ?>
</h2></div>

    <br/><ul class="list01">

        <li <?php if ($this->_tpl_vars['tab'] != 'Groups' && $this->_tpl_vars['tab'] != 'Comments'): ?>class="ui-state-active ui-tabs-selected"<?php endif; ?>>
            <a href='News.php'>Network</a>
        </li>

        <li <?php if ($this->_tpl_vars['tab'] == 'Groups'): ?>class="ui-state-active ui-tabs-selected"<?php endif; ?>>
            <a href='News.php?tab=Groups'>Groups</a>
        </li>

        <li <?php if ($this->_tpl_vars['tab'] == 'Comments'): ?>class="ui-state-active ui-tabs-selected"<?php endif; ?>>
            <a href='News.php?tab=Comments'>Comments</a>
        </li>
    </ul>

        <?php if (! $this->_tpl_vars['actions']): ?>
    <br/>
    <p align="center" style="color:red;"><?php echo $this->_tpl_vars['Application628']; ?>
</p>
    <br/>
    <?php endif; ?>

        <?php unset($this->_sections['actions_loop']);
$this->_sections['actions_loop']['name'] = 'actions_loop';
$this->_sections['actions_loop']['loop'] = is_array($_loop=$this->_tpl_vars['actions']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['actions_loop']['show'] = true;
$this->_sections['actions_loop']['max'] = $this->_sections['actions_loop']['loop'];
$this->_sections['actions_loop']['step'] = 1;
$this->_sections['actions_loop']['start'] = $this->_sections['actions_loop']['step'] > 0 ? 0 : $this->_sections['actions_loop']['loop']-1;
if ($this->_sections['actions_loop']['show']) {
    $this->_sections['actions_loop']['total'] = $this->_sections['actions_loop']['loop'];
    if ($this->_sections['actions_loop']['total'] == 0)
        $this->_sections['actions_loop']['show'] = false;
} else
    $this->_sections['actions_loop']['total'] = 0;
if ($this->_sections['actions_loop']['show']):

            for ($this->_sections['actions_loop']['index'] = $this->_sections['actions_loop']['start'], $this->_sections['actions_loop']['iteration'] = 1;
                 $this->_sections['actions_loop']['iteration'] <= $this->_sections['actions_loop']['total'];
                 $this->_sections['actions_loop']['index'] += $this->_sections['actions_loop']['step'], $this->_sections['actions_loop']['iteration']++):
$this->_sections['actions_loop']['rownum'] = $this->_sections['actions_loop']['iteration'];
$this->_sections['actions_loop']['index_prev'] = $this->_sections['actions_loop']['index'] - $this->_sections['actions_loop']['step'];
$this->_sections['actions_loop']['index_next'] = $this->_sections['actions_loop']['index'] + $this->_sections['actions_loop']['step'];
$this->_sections['actions_loop']['first']      = ($this->_sections['actions_loop']['iteration'] == 1);
$this->_sections['actions_loop']['last']       = ($this->_sections['actions_loop']['iteration'] == $this->_sections['actions_loop']['total']);
?>
    <div class="row"  <?php if ($this->_sections['actions_loop']['last'] == true): ?>style="border:none;"<?php endif; ?>>
         <div class="f-right">
            <?php echo $this->_tpl_vars['datetime']->time_since($this->_tpl_vars['actions'][$this->_sections['actions_loop']['index']]['action_date']); ?>

        </div>
       
        <dl>
            <dt></dt>
            <dd><?php echo ((is_array($_tmp=$this->_tpl_vars['actions'][$this->_sections['actions_loop']['index']]['action_text'])) ? $this->_run_mod_handler('choptext', true, $_tmp, 50, "...") : smarty_modifier_choptext($_tmp, 50, "...")); ?>
</dd>
        </dl>
    </div>
    <?php endfor; endif; ?>


    <div class="block-bot"><span>&nbsp;</span></div>
</div>
<div id="sidebar">
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'MenuSidebar.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <?php if ($this->_tpl_vars['tab'] != 'Groups' && $this->_tpl_vars['tab'] != 'Comments'): ?>
    <form method="post" name="newsfrom" action="News.php" style="padding:0 0;">
        <input type="hidden" name="filter" value="1" />
        <div class="block">
            <ul class="accordion">
                <li class="form-top active"><a href="#" class="opener active"><?php echo $this->_tpl_vars['Application742']; ?>
</a>
                    <div class="slide">
                        <div class="side-form" style="padding:10px 10px 10px 16px !important;">
                            <?php unset($this->_sections['loop']);
$this->_sections['loop']['name'] = 'loop';
$this->_sections['loop']['loop'] = is_array($_loop=$this->_tpl_vars['action_types']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['loop']['show'] = true;
$this->_sections['loop']['max'] = $this->_sections['loop']['loop'];
$this->_sections['loop']['step'] = 1;
$this->_sections['loop']['start'] = $this->_sections['loop']['step'] > 0 ? 0 : $this->_sections['loop']['loop']-1;
if ($this->_sections['loop']['show']) {
    $this->_sections['loop']['total'] = $this->_sections['loop']['loop'];
    if ($this->_sections['loop']['total'] == 0)
        $this->_sections['loop']['show'] = false;
} else
    $this->_sections['loop']['total'] = 0;
if ($this->_sections['loop']['show']):

            for ($this->_sections['loop']['index'] = $this->_sections['loop']['start'], $this->_sections['loop']['iteration'] = 1;
                 $this->_sections['loop']['iteration'] <= $this->_sections['loop']['total'];
                 $this->_sections['loop']['index'] += $this->_sections['loop']['step'], $this->_sections['loop']['iteration']++):
$this->_sections['loop']['rownum'] = $this->_sections['loop']['iteration'];
$this->_sections['loop']['index_prev'] = $this->_sections['loop']['index'] - $this->_sections['loop']['step'];
$this->_sections['loop']['index_next'] = $this->_sections['loop']['index'] + $this->_sections['loop']['step'];
$this->_sections['loop']['first']      = ($this->_sections['loop']['iteration'] == 1);
$this->_sections['loop']['last']       = ($this->_sections['loop']['iteration'] == $this->_sections['loop']['total']);
?>
                            <label style="font-size: 11px">
                                                                <input type="checkbox" onchange="document.newsfrom.submit()" style="border: none; width: auto !important; height: auto !important;" name="actiontype[<?php echo $this->_tpl_vars['action_types'][$this->_sections['loop']['index']]['actiontype_id']; ?>
]" <?php if ($this->_tpl_vars['action_types'][$this->_sections['loop']['index']]['actiontype_checked']): ?>checked<?php endif; ?> />&nbsp;<?php echo $this->_tpl_vars['action_types'][$this->_sections['loop']['index']]['actiontype_desc_other']; ?>
<br/>
                            </label>
                            <?php endfor; endif; ?>
                        </div>
                        <div class="block-bot"><span>&nbsp;</span></div>
                    </div>
                </li>
            </ul>
        </div>
    </form>
    <?php endif; ?>
</div>


<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'Footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>