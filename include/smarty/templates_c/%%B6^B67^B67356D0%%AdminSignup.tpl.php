<?php /* Smarty version 2.6.14, created on 2013-11-09 02:06:14
         compiled from AdminSignup.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'AdminHeader.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<h2><?php echo $this->_tpl_vars['Admin706']; ?>
</h2>
<p><?php echo $this->_tpl_vars['Admin707']; ?>
</p>


<?php if ($this->_tpl_vars['result'] != 0): ?>
<br>
<p style="color:green;"><?php echo $this->_tpl_vars['Admin740']; ?>
</p>
<?php endif; ?>
<form action='AdminSignup.php' method='POST'>
    
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

    <?php if ($this->_sections['tab_loop']['first']): ?><div class="row" <?php if (! $this->_sections['tab_loop']['last']): ?>style="border:none;"<?php endif; ?>><?php endif; ?>
         <?php if ($this->_sections['tab_loop']['first']): ?>
            <h2><?php echo $this->_tpl_vars['Admin708']; ?>
</h2>
            <p><?php echo $this->_tpl_vars['Admin709']; ?>
</p>
            <br/>
         <?php endif; ?>
         <div class="block">
            <div class="block-head"><h3><?php echo $this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['tab_name']; ?>
</h3></div>
            <div class="block-in">
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
                <p>
                    <input type='checkbox' name='field_signup_<?php echo $this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['tab_fields'][$this->_sections['field_loop']['index']]['field_id']; ?>
' id='field_signup_<?php echo $this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['tab_fields'][$this->_sections['field_loop']['index']]['field_id']; ?>
' value='1'<?php if ($this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['tab_fields'][$this->_sections['field_loop']['index']]['field_signup'] == 1): ?> CHECKED<?php endif; ?>/> <label></label>
                    <label for='field_signup_<?php echo $this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['tab_fields'][$this->_sections['field_loop']['index']]['field_id']; ?>
'><?php echo $this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['tab_fields'][$this->_sections['field_loop']['index']]['field_title']; ?>
</label>
                </p>
                <?php endfor; endif; ?>
                <br/>
            </div>
            <div class="block-b">&nbsp;</div>
        </div>
       
    <?php if ($this->_sections['tab_loop']['iteration']%2 == 0 || $this->_sections['tab_loop']['last']): ?></div><?php endif; ?>
    <?php if ($this->_sections['tab_loop']['iteration']%2 == 0 && ! $this->_sections['tab_loop']['last']): ?><div class="row" <?php if (! $this->_sections['tab_loop']['last']): ?>style="border:none;"<?php endif; ?>><?php endif; ?>
    <?php if ($this->_sections['tab_loop']['last']): ?><p class="line">&nbsp;</p><?php endif; ?>
    <?php endfor; endif; ?>

    <div class="row">
        <h2><?php echo $this->_tpl_vars['Admin1032']; ?>
</h2>
        <div class="block">
            <div class="block-head"><h3><?php echo $this->_tpl_vars['Admin1032']; ?>
</h3></div>
            <div class="block-in">
                <p><input type='radio' name='phone' id='phone_1' value='1'<?php if ($this->_tpl_vars['phone'] == 1): ?> CHECKED<?php endif; ?>/><label for='phone_1'> <?php echo $this->_tpl_vars['Admin1029']; ?>
</label></p>
                <p><input type='radio' name='phone' id='phone_0' value='0'<?php if ($this->_tpl_vars['phone'] == 0): ?> CHECKED<?php endif; ?>/><label for='phone_0'> <?php echo $this->_tpl_vars['Admin1030']; ?>
</label></p>
            </div>
            <div class="block-b">&nbsp;</div>
        </div>
        <p><?php echo $this->_tpl_vars['Admin1031']; ?>
</p>
    </div>

    <div class="row">
        <h2><?php echo $this->_tpl_vars['Admin713']; ?>
</h2>
        <div class="block">
            <div class="block-head"><h3><?php echo $this->_tpl_vars['Admin713']; ?>
</h3></div>
            <div class="block-in">
                <p><input type='radio' name='photo' id='photo_1' value='1'<?php if ($this->_tpl_vars['photo'] == 1): ?> CHECKED<?php endif; ?>/><label for='photo_1'> <?php echo $this->_tpl_vars['Admin742']; ?>
</label></p>
                <p><input type='radio' name='photo' id='photo_0' value='0'<?php if ($this->_tpl_vars['photo'] == 0): ?> CHECKED<?php endif; ?>/><label for='photo_0'> <?php echo $this->_tpl_vars['Admin743']; ?>
</label></p>
            </div>
            <div class="block-b">&nbsp;</div>
        </div>
        <p><?php echo $this->_tpl_vars['Admin741']; ?>
</p>
    </div>

    <div class="row">
        <h2><?php echo $this->_tpl_vars['Admin748']; ?>
</h2>
        <div class="block">
            <div class="block-head"><h3><?php echo $this->_tpl_vars['Admin748']; ?>
</h3></div>
            <div class="block-in">
                <p><input type='radio' name='enable' id='enable_1' value='1'<?php if ($this->_tpl_vars['enable'] == 1): ?> CHECKED<?php endif; ?>/><label for='enable_1'> <?php echo $this->_tpl_vars['Admin750']; ?>
</label></p>
                <p><input type='radio' name='enable' id='enable_0' value='0'<?php if ($this->_tpl_vars['enable'] == 0): ?> CHECKED<?php endif; ?>/><label for='enable_0'> <?php echo $this->_tpl_vars['Admin751']; ?>
</label></p>
            </div>
            <div class="block-b">&nbsp;</div>
        </div>
        <p><?php echo $this->_tpl_vars['Admin749']; ?>
</p>
    </div>

    <div class="row">
        <h2><?php echo $this->_tpl_vars['Admin744']; ?>
</h2>
        <div class="block">
            <div class="block-head"><h3><?php echo $this->_tpl_vars['Admin744']; ?>
</h3></div>
            <div class="block-in">
                <p><input type='radio' name='welcome' id='welcome_1' value='1'<?php if ($this->_tpl_vars['welcome'] == 1): ?> CHECKED<?php endif; ?>/><label for='welcome_1'> <?php echo $this->_tpl_vars['Admin746']; ?>
</label></p>
                <p><input type='radio' name='welcome' id='welcome_0' value='0'<?php if ($this->_tpl_vars['welcome'] == 0): ?> CHECKED<?php endif; ?>/><label for='welcome_0'> <?php echo $this->_tpl_vars['Admin747']; ?>
</label></p>
            </div>
            <div class="block-b">&nbsp;</div>
        </div>
        <p><?php echo $this->_tpl_vars['Admin745']; ?>
</p>
    </div>

    <div class="row" style="border-bottom:none;">
        <h2><?php echo $this->_tpl_vars['Admin714']; ?>
</h2>
        <div class="block">
            <div class="block-head"><h3><?php echo $this->_tpl_vars['Admin1033']; ?>
</h3></div>
            <div class="block-in">
                <p><input type='radio' name='invite' id='invite_2' value='2'<?php if ($this->_tpl_vars['invite'] == 2): ?> CHECKED<?php endif; ?>/><label for='invite_2'> <?php echo $this->_tpl_vars['Admin716']; ?>
</label></p>
                <p><input type='radio' name='invite' id='invite_1' value='1'<?php if ($this->_tpl_vars['invite'] == 1): ?> CHECKED<?php endif; ?>/><label for='invite_1'> <?php echo $this->_tpl_vars['Admin717']; ?>
</label></p>
                <p><input type='radio' name='invite' id='invite_0' value='0'<?php if ($this->_tpl_vars['invite'] == 0): ?> CHECKED<?php endif; ?>/><label for='invite_0'> <?php echo $this->_tpl_vars['Admin718']; ?>
</label></p>
            </div>
            <div class="block-b">&nbsp;</div>
        </div>
        <p><?php echo $this->_tpl_vars['Admin715']; ?>
</p>
    </div>

    <div class="row" style="border-bottom:none;">
        <div class="block">
            <div class="block-head"><h3><?php echo $this->_tpl_vars['Admin1034']; ?>
</h3></div>
            <div class="block-in">
                <p><input type='radio' name='invite_checkemail' id='invite_checkemail_1' value='1'<?php if ($this->_tpl_vars['invite_checkemail'] == 1): ?> CHECKED<?php endif; ?>/><label for='invite_checkemail_1'> <?php echo $this->_tpl_vars['Admin753']; ?>
</label></p>
                <p><input type='radio' name='invite_checkemail' id='invite_checkemail_0' value='0'<?php if ($this->_tpl_vars['invite_checkemail'] == 0): ?> CHECKED<?php endif; ?>/><label for='invite_checkemail_0'> <?php echo $this->_tpl_vars['Admin754']; ?>
</label></p>
            </div>
            <div class="block-b">&nbsp;</div>
        </div>
        <p><?php echo $this->_tpl_vars['Admin752']; ?>
</p>
    </div>

    <div class="row">
        <div class="block">
            <div class="block-head"><h3>How many invites do users get when they signup?</h3></div>
            <div class="block-in">
                <p><input type='text' name='invite_numgiven' size='2' maxlength='3' class='text' value='<?php echo $this->_tpl_vars['invite_numgiven']; ?>
'/><label>&nbsp;<?php echo $this->_tpl_vars['Admin712']; ?>
</label></p>
            </div>
            <div class="block-b">&nbsp;</div>
        </div>
        <p><?php echo $this->_tpl_vars['Admin711']; ?>
</p>
    </div>

    <div class="row">
        <h2><?php echo $this->_tpl_vars['Admin719']; ?>
</h2>
        <div class="block">
            <div class="block-head"><h3><?php echo $this->_tpl_vars['Admin719']; ?>
</h3></div>
            <div class="block-in">
                <p><input type='radio' name='invitepage' id='invitepage_1' value='1'<?php if ($this->_tpl_vars['invitepage'] == 1): ?> CHECKED<?php endif; ?>/><label for='invitepage_1'> <?php echo $this->_tpl_vars['Admin721']; ?>
</label></p>
                <p><input type='radio' name='invitepage' id='invitepage_0' value='0'<?php if ($this->_tpl_vars['invitepage'] == 0): ?> CHECKED<?php endif; ?>/><label for='invitepage_0'> <?php echo $this->_tpl_vars['Admin722']; ?>
</label></p>
            </div>
            <div class="block-b">&nbsp;</div>
        </div>
        <p><?php echo $this->_tpl_vars['Admin720']; ?>
</p>
    </div>

    <div class="row">
        <h2><?php echo $this->_tpl_vars['Admin723']; ?>
</h2>
        <div class="block">
            <div class="block-head"><h3><?php echo $this->_tpl_vars['Admin723']; ?>
</h3></div>
            <div class="block-in">
                <p><input type='radio' name='verify' id='verify_1' value='1'<?php if ($this->_tpl_vars['verify'] == 1): ?> CHECKED<?php endif; ?>/><label for='verify_1'> <?php echo $this->_tpl_vars['Admin725']; ?>
</label></p>
                <p><input type='radio' name='verify' id='verify_0' value='0'<?php if ($this->_tpl_vars['verify'] == 0): ?> CHECKED<?php endif; ?>/><label for='verify_0'> <?php echo $this->_tpl_vars['Admin726']; ?>
</label></p>
            </div>
            <div class="block-b">&nbsp;</div>
        </div>
        <p><?php echo $this->_tpl_vars['Admin724']; ?>
</p>
    </div>


    <div class="row">
        <h2><?php echo $this->_tpl_vars['Admin727']; ?>
</h2>
        <div class="block">
            <div class="block-head"><h3><?php echo $this->_tpl_vars['Admin727']; ?>
</h3></div>
            <div class="block-in">
                <p><input type='radio' name='code' id='code_1' value='1'<?php if ($this->_tpl_vars['code'] == 1): ?> CHECKED<?php endif; ?>/><label for='code_1'><?php echo $this->_tpl_vars['Admin729']; ?>
</label></p>
                <p><input type='radio' name='code' id='code_0' value='0'<?php if ($this->_tpl_vars['code'] == 0): ?> CHECKED<?php endif; ?>/><label for='code_0'><?php echo $this->_tpl_vars['Admin730']; ?>
</label></p>
            </div>
            <div class="block-b">&nbsp;</div>
        </div>
        <p><?php echo $this->_tpl_vars['Admin728']; ?>
</p>
    </div>

    <div class="row">
        <h2><?php echo $this->_tpl_vars['Admin731']; ?>
</h2>
        <div class="block">
            <div class="block-head"><h3><?php echo $this->_tpl_vars['Admin731']; ?>
</h3></div>
            <div class="block-in">
                <p><input type='radio' name='randpass' id='randpass_1' value='1'<?php if ($this->_tpl_vars['randpass'] == 1): ?> CHECKED<?php endif; ?>/><label for='randpass_1'> <?php echo $this->_tpl_vars['Admin733']; ?>
</label></p>
                <p><input type='radio' name='randpass' id='randpass_0' value='0'<?php if ($this->_tpl_vars['randpass'] == 0): ?> CHECKED<?php endif; ?>/><label for='randpass_0'> <?php echo $this->_tpl_vars['Admin734']; ?>
</label></p>
            </div>
            <div class="block-b">&nbsp;</div>
        </div>
        <p><?php echo $this->_tpl_vars['Admin732']; ?>
</p>
    </div>

    <div class="row" style="border-bottom:none; margin-bottom:0px;">
        <h2><?php echo $this->_tpl_vars['Admin735']; ?>
</h2>
        <div class="block">
            <div class="block-head"><h3><?php echo $this->_tpl_vars['Admin735']; ?>
</h3></div>
            <div class="block-in">
                <p><input type='radio' name='tos' id='tos_1' value='1'<?php if ($this->_tpl_vars['tos'] == 1): ?> CHECKED<?php endif; ?>/><label for='tos_1'> <?php echo $this->_tpl_vars['Admin737']; ?>
</label></p>
                <p><input type='radio' name='tos' id='tos_0' value='0'<?php if ($this->_tpl_vars['tos'] == 0): ?> CHECKED<?php endif; ?>/><label for='tos_0'> <?php echo $this->_tpl_vars['Admin738']; ?>
</label></p>
                <p><label><textarea name='tostext'><?php echo $this->_tpl_vars['tostext']; ?>
</textarea></label></p>
            </div>
            <div class="block-b">&nbsp;</div>
        </div>
        <p><?php echo $this->_tpl_vars['Admin736']; ?>
</p>
    </div>
   
    <div style="padding-left:20px;"><label class="button"><input type='submit' value='<?php echo $this->_tpl_vars['Admin739']; ?>
'/></label></div>
    <input type='hidden' name='task' value='dosave'>
</form>


<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'AdminFooter.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>