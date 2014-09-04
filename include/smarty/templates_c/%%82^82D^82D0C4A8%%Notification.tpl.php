<?php /* Smarty version 2.6.14, created on 2013-11-30 02:11:51
         compiled from Notification.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'Header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="content">
        <div class="grey-head"><h2><?php echo $this->_tpl_vars['Application620']; ?>
</h2></div>

    <br/><ul class="list01">

        <li <?php if ($this->_tpl_vars['tab'] != 'likes' && $this->_tpl_vars['tab'] != 'follows'): ?>class="ui-state-active ui-tabs-selected"<?php endif; ?>>
            <a href='Notification.php'>Comments</a>
        </li>

        <li <?php if ($this->_tpl_vars['tab'] == 'likes'): ?>class="ui-state-active ui-tabs-selected"<?php endif; ?>>
            <a href='Notification.php?tab=likes'>likes</a>
        </li>

        <li <?php if ($this->_tpl_vars['tab'] == 'follows'): ?>class="ui-state-active ui-tabs-selected"<?php endif; ?>>
            <a href='Notification.php?tab=follows'>Follow</a>
        </li>
    </ul>

        <?php if ($this->_tpl_vars['tab'] != 'likes' && $this->_tpl_vars['tab'] != 'follows'): ?>
			    <?php unset($this->_sections['header_loop']);
$this->_sections['header_loop']['name'] = 'header_loop';
$this->_sections['header_loop']['loop'] = is_array($_loop=$this->_tpl_vars['notication_comment']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['header_loop']['show'] = true;
$this->_sections['header_loop']['max'] = $this->_sections['header_loop']['loop'];
$this->_sections['header_loop']['step'] = 1;
$this->_sections['header_loop']['start'] = $this->_sections['header_loop']['step'] > 0 ? 0 : $this->_sections['header_loop']['loop']-1;
if ($this->_sections['header_loop']['show']) {
    $this->_sections['header_loop']['total'] = $this->_sections['header_loop']['loop'];
    if ($this->_sections['header_loop']['total'] == 0)
        $this->_sections['header_loop']['show'] = false;
} else
    $this->_sections['header_loop']['total'] = 0;
if ($this->_sections['header_loop']['show']):

            for ($this->_sections['header_loop']['index'] = $this->_sections['header_loop']['start'], $this->_sections['header_loop']['iteration'] = 1;
                 $this->_sections['header_loop']['iteration'] <= $this->_sections['header_loop']['total'];
                 $this->_sections['header_loop']['index'] += $this->_sections['header_loop']['step'], $this->_sections['header_loop']['iteration']++):
$this->_sections['header_loop']['rownum'] = $this->_sections['header_loop']['iteration'];
$this->_sections['header_loop']['index_prev'] = $this->_sections['header_loop']['index'] - $this->_sections['header_loop']['step'];
$this->_sections['header_loop']['index_next'] = $this->_sections['header_loop']['index'] + $this->_sections['header_loop']['step'];
$this->_sections['header_loop']['first']      = ($this->_sections['header_loop']['iteration'] == 1);
$this->_sections['header_loop']['last']       = ($this->_sections['header_loop']['iteration'] == $this->_sections['header_loop']['total']);
?>
						<div class="notification_ui">
										<?php echo $this->_tpl_vars['notication_comment'][$this->_sections['header_loop']['index']]; ?>

						</div>
	   		<?php endfor; endif; ?>
    <?php endif; ?>
	
    <?php if ($this->_tpl_vars['tab'] == 'likes'): ?>
			    <?php unset($this->_sections['header_loop']);
$this->_sections['header_loop']['name'] = 'header_loop';
$this->_sections['header_loop']['loop'] = is_array($_loop=$this->_tpl_vars['notication_like']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['header_loop']['show'] = true;
$this->_sections['header_loop']['max'] = $this->_sections['header_loop']['loop'];
$this->_sections['header_loop']['step'] = 1;
$this->_sections['header_loop']['start'] = $this->_sections['header_loop']['step'] > 0 ? 0 : $this->_sections['header_loop']['loop']-1;
if ($this->_sections['header_loop']['show']) {
    $this->_sections['header_loop']['total'] = $this->_sections['header_loop']['loop'];
    if ($this->_sections['header_loop']['total'] == 0)
        $this->_sections['header_loop']['show'] = false;
} else
    $this->_sections['header_loop']['total'] = 0;
if ($this->_sections['header_loop']['show']):

            for ($this->_sections['header_loop']['index'] = $this->_sections['header_loop']['start'], $this->_sections['header_loop']['iteration'] = 1;
                 $this->_sections['header_loop']['iteration'] <= $this->_sections['header_loop']['total'];
                 $this->_sections['header_loop']['index'] += $this->_sections['header_loop']['step'], $this->_sections['header_loop']['iteration']++):
$this->_sections['header_loop']['rownum'] = $this->_sections['header_loop']['iteration'];
$this->_sections['header_loop']['index_prev'] = $this->_sections['header_loop']['index'] - $this->_sections['header_loop']['step'];
$this->_sections['header_loop']['index_next'] = $this->_sections['header_loop']['index'] + $this->_sections['header_loop']['step'];
$this->_sections['header_loop']['first']      = ($this->_sections['header_loop']['iteration'] == 1);
$this->_sections['header_loop']['last']       = ($this->_sections['header_loop']['iteration'] == $this->_sections['header_loop']['total']);
?>
						<div class="notification_ui">									
										<?php echo $this->_tpl_vars['notication_like'][$this->_sections['header_loop']['index']]; ?>

						</div>
	   		<?php endfor; endif; ?>
    <?php endif; ?>

	
    <?php if ($this->_tpl_vars['tab'] == 'follows'): ?>
			    <?php unset($this->_sections['header_loop']);
$this->_sections['header_loop']['name'] = 'header_loop';
$this->_sections['header_loop']['loop'] = is_array($_loop=$this->_tpl_vars['notication_follow']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['header_loop']['show'] = true;
$this->_sections['header_loop']['max'] = $this->_sections['header_loop']['loop'];
$this->_sections['header_loop']['step'] = 1;
$this->_sections['header_loop']['start'] = $this->_sections['header_loop']['step'] > 0 ? 0 : $this->_sections['header_loop']['loop']-1;
if ($this->_sections['header_loop']['show']) {
    $this->_sections['header_loop']['total'] = $this->_sections['header_loop']['loop'];
    if ($this->_sections['header_loop']['total'] == 0)
        $this->_sections['header_loop']['show'] = false;
} else
    $this->_sections['header_loop']['total'] = 0;
if ($this->_sections['header_loop']['show']):

            for ($this->_sections['header_loop']['index'] = $this->_sections['header_loop']['start'], $this->_sections['header_loop']['iteration'] = 1;
                 $this->_sections['header_loop']['iteration'] <= $this->_sections['header_loop']['total'];
                 $this->_sections['header_loop']['index'] += $this->_sections['header_loop']['step'], $this->_sections['header_loop']['iteration']++):
$this->_sections['header_loop']['rownum'] = $this->_sections['header_loop']['iteration'];
$this->_sections['header_loop']['index_prev'] = $this->_sections['header_loop']['index'] - $this->_sections['header_loop']['step'];
$this->_sections['header_loop']['index_next'] = $this->_sections['header_loop']['index'] + $this->_sections['header_loop']['step'];
$this->_sections['header_loop']['first']      = ($this->_sections['header_loop']['iteration'] == 1);
$this->_sections['header_loop']['last']       = ($this->_sections['header_loop']['iteration'] == $this->_sections['header_loop']['total']);
?>
						<div class="notification_ui">
										<?php echo $this->_tpl_vars['notication_follow'][$this->_sections['header_loop']['index']]; ?>

						</div>
	   		<?php endfor; endif; ?>
    <?php endif; ?>

    <div class="block-bot"><span>&nbsp;</span></div>
</div>
<div id="sidebar">
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'MenuSidebar.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</div>


<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'Footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>