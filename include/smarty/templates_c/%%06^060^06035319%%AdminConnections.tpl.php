<?php /* Smarty version 2.6.14, created on 2013-11-09 02:09:14
         compiled from AdminConnections.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'AdminHeader.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<h2><?php echo $this->_tpl_vars['Admin310']; ?>
</h2>
<p><?php echo $this->_tpl_vars['Admin311']; ?>
</p>

<?php if ($this->_tpl_vars['result'] != 0): ?>
<p style="color:green;"><?php echo $this->_tpl_vars['Admin333']; ?>
</p>
<?php endif; ?>

<?php echo '
<script type="text/javascript">
    '; ?>

    <!-- Begin
    var friendtype_id = <?php echo $this->_tpl_vars['num_friendtypes']; ?>
;
    <?php echo '
    function addInput(fieldname) {
        var ni = document.getElementById(fieldname);
        var newdiv = document.createElement(\'div\');
        var divIdName = \'my\'+friendtype_id+\'Div\';
        newdiv.setAttribute(\'id\',divIdName);
        newdiv.innerHTML = "<input type=\'text\' name=\'friendtype_label" + friendtype_id +"\' class=\'text\' size=\'30\' maxlength=\'50\'>&nbsp;<br>";
        ni.appendChild(newdiv);
        friendtype_id++;
        window.document.info.num_friendtypes.value=friendtype_id;
    }
    // End -->
</script>
'; ?>



<form action='AdminConnections.php' method='POST' name='info'>
    <div class="row">
        <h2><?php echo $this->_tpl_vars['Admin312']; ?>
</h2>
        <div class="block">
            <div class="block-head"><h3><?php echo $this->_tpl_vars['Admin312']; ?>
</h3></div>
            <div class="block-in">
                <p><input type='radio' name='setting_connection_allow' id='invitation_0' value='0'<?php if ($this->_tpl_vars['invitation'] == 0): ?> CHECKED<?php endif; ?>/><label for='invitation_0'> <b><?php echo $this->_tpl_vars['Admin317']; ?>
</b><br/><?php echo $this->_tpl_vars['Admin313']; ?>
</label></p><br/>
                <p><input type='radio' name='setting_connection_allow' id='invitation_3' value='3'<?php if ($this->_tpl_vars['invitation'] == 3): ?> CHECKED<?php endif; ?>/><label for='invitation_3'> <b><?php echo $this->_tpl_vars['Admin318']; ?>
</b><br/><?php echo $this->_tpl_vars['Admin314']; ?>
</label></p><br/>
                <p><input type='radio' name='setting_connection_allow' id='invitation_2' value='2'<?php if ($this->_tpl_vars['invitation'] == 2): ?> CHECKED<?php endif; ?>/><label for='invitation_2'> <b><?php echo $this->_tpl_vars['Admin319']; ?>
</b><br/><?php echo $this->_tpl_vars['Admin315']; ?>
</label></p><br/>
                <p><input type='radio' name='setting_connection_allow' id='invitation_1' value='1'<?php if ($this->_tpl_vars['invitation'] == 1): ?> CHECKED<?php endif; ?>/><label for='invitation_1'> <b><?php echo $this->_tpl_vars['Admin320']; ?>
</b><br/><?php echo $this->_tpl_vars['Admin316']; ?>
</label></p><br/>
                <br/>
            </div>
            <div class="block-b">&nbsp;</div>
        </div>
        <p><?php echo $this->_tpl_vars['Admin313']; ?>
</p>
    </div>

    <div class="row">
        <h2><?php echo $this->_tpl_vars['Admin321']; ?>
</h2>
        <div class="block">
            <div class="block-head"><h3><?php echo $this->_tpl_vars['Admin321']; ?>
</h3></div>
            <div class="block-in">
                <p>
                    <input type='radio' name='setting_connection_framework' id='framework_0' value='0'<?php if ($this->_tpl_vars['framework'] == 0): ?> CHECKED<?php endif; ?>/>
                           <label for='framework_0'><b><?php echo $this->_tpl_vars['Admin323']; ?>
</b><br/><?php echo $this->_tpl_vars['Admin324']; ?>
</label>
                </p>
                    <br/>
                <p>
                    <input type='radio' name='setting_connection_framework' id='framework_1' value='1'<?php if ($this->_tpl_vars['framework'] == 1): ?> CHECKED<?php endif; ?>/>
                           <label for='framework_1'><b><?php echo $this->_tpl_vars['Admin325']; ?>
</b><br><?php echo $this->_tpl_vars['Admin328']; ?>
</label>
                </p>
                    <br/>
                <p>
                    <input type='radio' name='setting_connection_framework' id='framework_2' value='2'<?php if ($this->_tpl_vars['framework'] == 2): ?> CHECKED<?php endif; ?>/>
                           <label for='framework_2'><b><?php echo $this->_tpl_vars['Admin326']; ?>
</b><br><?php echo $this->_tpl_vars['Admin329']; ?>
</label>
                </p>
                    <br/>
                <p>
                    <input type='radio' name='setting_connection_framework' id='framework_3' value='3'<?php if ($this->_tpl_vars['framework'] == 3): ?> CHECKED<?php endif; ?>/>
                           <label for='framework_3'><b><?php echo $this->_tpl_vars['Admin327']; ?>
</b><br><?php echo $this->_tpl_vars['Admin330']; ?>
</label>
                </p>
                <br/>
            </div>
            <div class="block-b">&nbsp;</div>
        </div>
        <p><?php echo $this->_tpl_vars['Admin322']; ?>
</p>
    </div>

    <div class="row" style="border:none;">
        <h2><?php echo $this->_tpl_vars['Admin334']; ?>
</h2>
        <p><?php echo $this->_tpl_vars['Admin335']; ?>
</p>
        <br/>
        <div class="block">
            <div class="block-head"><h3><?php echo $this->_tpl_vars['Admin336']; ?>
</h3></div>
            <div class="block-in">
                <?php unset($this->_sections['type_loop']);
$this->_sections['type_loop']['name'] = 'type_loop';
$this->_sections['type_loop']['loop'] = is_array($_loop=$this->_tpl_vars['types']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['type_loop']['show'] = true;
$this->_sections['type_loop']['max'] = $this->_sections['type_loop']['loop'];
$this->_sections['type_loop']['step'] = 1;
$this->_sections['type_loop']['start'] = $this->_sections['type_loop']['step'] > 0 ? 0 : $this->_sections['type_loop']['loop']-1;
if ($this->_sections['type_loop']['show']) {
    $this->_sections['type_loop']['total'] = $this->_sections['type_loop']['loop'];
    if ($this->_sections['type_loop']['total'] == 0)
        $this->_sections['type_loop']['show'] = false;
} else
    $this->_sections['type_loop']['total'] = 0;
if ($this->_sections['type_loop']['show']):

            for ($this->_sections['type_loop']['index'] = $this->_sections['type_loop']['start'], $this->_sections['type_loop']['iteration'] = 1;
                 $this->_sections['type_loop']['iteration'] <= $this->_sections['type_loop']['total'];
                 $this->_sections['type_loop']['index'] += $this->_sections['type_loop']['step'], $this->_sections['type_loop']['iteration']++):
$this->_sections['type_loop']['rownum'] = $this->_sections['type_loop']['iteration'];
$this->_sections['type_loop']['index_prev'] = $this->_sections['type_loop']['index'] - $this->_sections['type_loop']['step'];
$this->_sections['type_loop']['index_next'] = $this->_sections['type_loop']['index'] + $this->_sections['type_loop']['step'];
$this->_sections['type_loop']['first']      = ($this->_sections['type_loop']['iteration'] == 1);
$this->_sections['type_loop']['last']       = ($this->_sections['type_loop']['iteration'] == $this->_sections['type_loop']['total']);
?>
                <p>
                    <input type='text' class='text' name='friendtype_label<?php echo $this->_tpl_vars['types'][$this->_sections['type_loop']['index']]['friendtype_id']; ?>
' value='<?php echo $this->_tpl_vars['types'][$this->_sections['type_loop']['index']]['friendtype_label']; ?>
' size='30' maxlength='50'/>
                </p>
                <?php endfor; endif; ?>
                <input type='hidden' name='num_friendtypes' value='<?php echo $this->_tpl_vars['num_friendtypes']; ?>
'>
                <p id='newtype'></p>
                <p><a href="javascript:addInput('newtype')" style="color:white;"><?php echo $this->_tpl_vars['Admin337']; ?>
</a></p>
                <p></p>

            </div>
            <div class="block-b">&nbsp;</div>
        </div>

        <div class="block">
            <div class="block-head"><h3><?php echo $this->_tpl_vars['Admin338']; ?>
</h3></div>
            <div class="block-in">
                <p>
                    <input type='radio' name='setting_connection_other' id='other_1' value='1'<?php if ($this->_tpl_vars['other'] == 1): ?> CHECKED<?php endif; ?>/>
                           <label for='other_1'><?php echo $this->_tpl_vars['Admin339']; ?>
</label>
                </p>
                <p>
                    <input type='radio' name='setting_connection_other' id='other_0' value='0'<?php if ($this->_tpl_vars['other'] == 0): ?> CHECKED<?php endif; ?>/>
                           <label for='other_0'><?php echo $this->_tpl_vars['Admin340']; ?>
</label>
                </p>
            </div>
            <div class="block-b">&nbsp;</div>
        </div>
    </div>

    <div class="row" style="border:none; margin-bottom:0px;">
        <div class="block">
            <div class="block-head"><h3><?php echo $this->_tpl_vars['Admin341']; ?>
</h3></div>
            <div class="block-in">
                <p>
                    <input type='radio' name='setting_connection_explain' id='explain_1' value='1'<?php if ($this->_tpl_vars['explain'] == 1): ?> CHECKED<?php endif; ?>/>
                           <label for='explain_1'><?php echo $this->_tpl_vars['Admin342']; ?>
</label>
                </p>
                <p>
                    <input type='radio' name='setting_connection_explain' id='explain_0' value='0'<?php if ($this->_tpl_vars['explain'] == 0): ?> CHECKED<?php endif; ?>/>
                           <label for='explain_0'><?php echo $this->_tpl_vars['Admin343']; ?>
</label>
                </p>
            </div>
            <div class="block-b">&nbsp;</div>
        </div>
    </div>
    
    <div style="padding-left:20px;"><label class="button"><input type='submit' value='<?php echo $this->_tpl_vars['Admin332']; ?>
'/></label></div>
    <input type='hidden' name='task' value='dosave'>
</form>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'AdminFooter.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>