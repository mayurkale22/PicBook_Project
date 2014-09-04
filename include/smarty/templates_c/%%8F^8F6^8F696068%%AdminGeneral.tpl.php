<?php /* Smarty version 2.6.14, created on 2013-11-09 01:58:00
         compiled from AdminGeneral.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'lower', 'AdminGeneral.tpl', 66, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'AdminHeader.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<h2><?php echo $this->_tpl_vars['Admin379']; ?>
</h2>
<p><?php echo $this->_tpl_vars['Admin380']; ?>
</p>

<?php if ($this->_tpl_vars['result'] != 0): ?>
<p style="color:green;"><?php echo $this->_tpl_vars['Admin386']; ?>
</p>
<?php endif; ?>

<form action='AdminGeneral.php' method='POST'>
    <div class="row"></div>

    <div class="row">
        <h2><?php echo $this->_tpl_vars['Admin387']; ?>
</h2>
        <div class="block">
            <div class="block-head"><h3><?php echo $this->_tpl_vars['Admin289']; ?>
</h3></div>
            <div class="block-in">
                <p><input type='radio' name='setting_permission_profile' id='permission_profile_1' value='1'<?php if ($this->_tpl_vars['permission_profile'] == 1): ?> CHECKED<?php endif; ?>><label for='permission_profile_1'><?php echo $this->_tpl_vars['Admin390']; ?>
</label></p>
                <p><input type='radio' name='setting_permission_profile' id='permission_profile_0' value='0'<?php if ($this->_tpl_vars['permission_profile'] == 0): ?> CHECKED<?php endif; ?>><label for='permission_profile_0'><?php echo $this->_tpl_vars['Admin391']; ?>
</label></p>
            </div>
            <div class="block-b">&nbsp;</div>
        </div>

        <div class="block">
            <div class="block-head"><h3><?php echo $this->_tpl_vars['Admin392']; ?>
</h3></div>
            <div class="block-in">
                <p><input type='radio' name='setting_permission_invite' id='permission_invite_1' value='1'<?php if ($this->_tpl_vars['permission_invite'] == 1): ?> CHECKED<?php endif; ?>><label for='permission_invite_1'><?php echo $this->_tpl_vars['Admin393']; ?>
</label></p>
                <p><input type='radio' name='setting_permission_invite' id='permission_invite_0' value='0'<?php if ($this->_tpl_vars['permission_invite'] == 0): ?> CHECKED<?php endif; ?>><label for='permission_invite_0'><?php echo $this->_tpl_vars['Admin394']; ?>
</label></p>
                <br/>
            </div>
            <div class="block-b">&nbsp;</div>
        </div>

        <div class="block" style="margin-top:20px !important;">
            <div class="block-head"><h3><?php echo $this->_tpl_vars['Admin395']; ?>
</h3></div>
            <div class="block-in">
                <p><input type='radio' name='setting_permission_search' id='permission_search_1' value='1'<?php if ($this->_tpl_vars['permission_search'] == 1): ?> CHECKED<?php endif; ?>><label for='permission_search_1'><?php echo $this->_tpl_vars['Admin396']; ?>
</label></p>
                <p><input type='radio' name='setting_permission_search' id='permission_search_0' value='0'<?php if ($this->_tpl_vars['permission_search'] == 0): ?> CHECKED<?php endif; ?>><label for='permission_search_0'><?php echo $this->_tpl_vars['Admin397']; ?>
</label></p>
            </div>
            <div class="block-b">&nbsp;</div>
        </div>

        <div class="block" style="margin-top:20px !important;">
            <div class="block-head"><h3><?php echo $this->_tpl_vars['Admin398']; ?>
</h3></div>
            <div class="block-in">
                <p><input type='radio' name='setting_permission_portal' id='permission_portal_1' value='1'<?php if ($this->_tpl_vars['permission_portal'] == 1): ?> CHECKED<?php endif; ?>><label for='permission_portal_1'><?php echo $this->_tpl_vars['Admin399']; ?>
</label></p>
                <p><input type='radio' name='setting_permission_portal' id='permission_portal_0' value='0'<?php if ($this->_tpl_vars['permission_portal'] == 0): ?> CHECKED<?php endif; ?>><label for='permission_portal_0'><?php echo $this->_tpl_vars['Admin400']; ?>
</label></p>
            </div>
            <div class="block-b">&nbsp;</div>
        </div>

        <p><?php echo $this->_tpl_vars['Admin388']; ?>
</p>
    </div>

    <br>

    <div class="row">
        <h2>Default Language</h2>
        <div class="block">
            <div class="block-head"><h3>Default Language</h3></div>
            <div class="block-in">
                <p>
                    <label>
                        <select name='setting_lang_default' class='text'>
                            <?php unset($this->_sections['lang_loop']);
$this->_sections['lang_loop']['name'] = 'lang_loop';
$this->_sections['lang_loop']['loop'] = is_array($_loop=$this->_tpl_vars['lang_options']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['lang_loop']['show'] = true;
$this->_sections['lang_loop']['max'] = $this->_sections['lang_loop']['loop'];
$this->_sections['lang_loop']['step'] = 1;
$this->_sections['lang_loop']['start'] = $this->_sections['lang_loop']['step'] > 0 ? 0 : $this->_sections['lang_loop']['loop']-1;
if ($this->_sections['lang_loop']['show']) {
    $this->_sections['lang_loop']['total'] = $this->_sections['lang_loop']['loop'];
    if ($this->_sections['lang_loop']['total'] == 0)
        $this->_sections['lang_loop']['show'] = false;
} else
    $this->_sections['lang_loop']['total'] = 0;
if ($this->_sections['lang_loop']['show']):

            for ($this->_sections['lang_loop']['index'] = $this->_sections['lang_loop']['start'], $this->_sections['lang_loop']['iteration'] = 1;
                 $this->_sections['lang_loop']['iteration'] <= $this->_sections['lang_loop']['total'];
                 $this->_sections['lang_loop']['index'] += $this->_sections['lang_loop']['step'], $this->_sections['lang_loop']['iteration']++):
$this->_sections['lang_loop']['rownum'] = $this->_sections['lang_loop']['iteration'];
$this->_sections['lang_loop']['index_prev'] = $this->_sections['lang_loop']['index'] - $this->_sections['lang_loop']['step'];
$this->_sections['lang_loop']['index_next'] = $this->_sections['lang_loop']['index'] + $this->_sections['lang_loop']['step'];
$this->_sections['lang_loop']['first']      = ($this->_sections['lang_loop']['iteration'] == 1);
$this->_sections['lang_loop']['last']       = ($this->_sections['lang_loop']['iteration'] == $this->_sections['lang_loop']['total']);
?>
                            <option value='<?php echo $this->_tpl_vars['lang_options'][$this->_sections['lang_loop']['index']]; ?>
'<?php if ($this->_tpl_vars['lang_value'] == ((is_array($_tmp=$this->_tpl_vars['lang_options'][$this->_sections['lang_loop']['index']])) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp))): ?> SELECTED<?php endif; ?>><?php echo $this->_tpl_vars['lang_options'][$this->_sections['lang_loop']['index']]; ?>
</option>
                            <?php endfor; endif; ?>
                        </select>
                    </label>
                </p>
                <br/>
                <p><input type='radio' name='setting_lang_allow' id='lang_allow_1' value='1'<?php if ($this->_tpl_vars['lang_allow'] == 1): ?> checked='checked'<?php endif; ?>><label for='lang_allow_1'><?php echo $this->_tpl_vars['Admin404']; ?>
</label></p>
                <p><input type='radio' name='setting_lang_allow' id='lang_allow_0' value='0'<?php if ($this->_tpl_vars['lang_allow'] == 0): ?> checked='checked'<?php endif; ?>><label for='lang_allow_0'><?php echo $this->_tpl_vars['Admin405']; ?>
</label></p>

            </div>
            <div class="block-b">&nbsp;</div>
        </div>
        <p><?php echo $this->_tpl_vars['Admin402']; ?>
</p>
        <p><?php echo $this->_tpl_vars['Admin403']; ?>
</p>
    </div>

    <div class="row">
        <h2>Timezone</h2>
        <div class="block">
            <div class="block-head"><h3>Timezone</h3></div>
            <div class="block-in">
                <p>
                    <label>
                        <select name='setting_timezone' class='text' style="width:226px !important;">
                            <option value='-8'<?php if ($this->_tpl_vars['timezone_value'] == "-8"): ?> SELECTED<?php endif; ?>>Pacific Time (US & Canada)</option>
                            <option value='-7'<?php if ($this->_tpl_vars['timezone_value'] == "-7"): ?> SELECTED<?php endif; ?>>Mountain Time (US & Canada)</option>
                            <option value='-6'<?php if ($this->_tpl_vars['timezone_value'] == "-6"): ?> SELECTED<?php endif; ?>>Central Time (US & Canada)</option>
                            <option value='-5'<?php if ($this->_tpl_vars['timezone_value'] == "-5"): ?> SELECTED<?php endif; ?>>Eastern Time (US & Canada)</option>
                            <option value='-4'<?php if ($this->_tpl_vars['timezone_value'] == "-4"): ?> SELECTED<?php endif; ?>>Atlantic Time (Canada)</option>
                            <option value='-9'<?php if ($this->_tpl_vars['timezone_value'] == "-9"): ?> SELECTED<?php endif; ?>>Alaska (US & Canada)</option>
                            <option value='-10'<?php if ($this->_tpl_vars['timezone_value'] == "-10"): ?> SELECTED<?php endif; ?>>Hawaii (US)</option>
                            <option value='-11'<?php if ($this->_tpl_vars['timezone_value'] == "-11"): ?> SELECTED<?php endif; ?>>Midway Island, Samoa</option>
                            <option value='-12'<?php if ($this->_tpl_vars['timezone_value'] == "-12"): ?> SELECTED<?php endif; ?>>Eniwetok, Kwajalein</option>
                            <option value='-3.3'<?php if ($this->_tpl_vars['timezone_value'] == "-3.3"): ?> SELECTED<?php endif; ?>>Newfoundland</option>
                            <option value='-3'<?php if ($this->_tpl_vars['timezone_value'] == "-3"): ?> SELECTED<?php endif; ?>>Brasilia, Buenos Aires, Georgetown</option>
                            <option value='-2'<?php if ($this->_tpl_vars['timezone_value'] == "-2"): ?> SELECTED<?php endif; ?>>Mid-Atlantic</option>
                            <option value='-1'<?php if ($this->_tpl_vars['timezone_value'] == "-1"): ?> SELECTED<?php endif; ?>>Azores, Cape Verde Is.</option>
                            <option value='0'<?php if ($this->_tpl_vars['timezone_value'] == '0'): ?> SELECTED<?php endif; ?>>Greenwich Mean Time (Lisbon, London)</option>
                            <option value='1'<?php if ($this->_tpl_vars['timezone_value'] == '1'): ?> SELECTED<?php endif; ?>>Amsterdam, Berlin, Paris, Rome, Madrid</option>
                            <option value='2'<?php if ($this->_tpl_vars['timezone_value'] == '2'): ?> SELECTED<?php endif; ?>>Athens, Helsinki, Istanbul, Cairo, E. Europe</option>
                            <option value='3'<?php if ($this->_tpl_vars['timezone_value'] == '3'): ?> SELECTED<?php endif; ?>>Baghdad, Kuwait, Nairobi, Moscow</option>
                            <option value='3.3'<?php if ($this->_tpl_vars['timezone_value'] == "3.3"): ?> SELECTED<?php endif; ?>>Tehran</option>
                            <option value='4'<?php if ($this->_tpl_vars['timezone_value'] == '4'): ?> SELECTED<?php endif; ?>>Abu Dhabi, Kazan, Muscat</option>
                            <option value='4.3'<?php if ($this->_tpl_vars['timezone_value'] == "4.3"): ?> SELECTED<?php endif; ?>>Kabul</option>
                            <option value='5'<?php if ($this->_tpl_vars['timezone_value'] == '5'): ?> SELECTED<?php endif; ?>>Islamabad, Karachi, Tashkent</option>
                            <option value='5.5'<?php if ($this->_tpl_vars['timezone_value'] == "5.5"): ?> SELECTED<?php endif; ?>>Bombay, Calcutta, New Delhi</option>
                            <option value='6'<?php if ($this->_tpl_vars['timezone_value'] == '6'): ?> SELECTED<?php endif; ?>>Almaty, Dhaka</option>
                            <option value='7'<?php if ($this->_tpl_vars['timezone_value'] == '7'): ?> SELECTED<?php endif; ?>>Bangkok, Jakarta, Hanoi</option>
                            <option value='8'<?php if ($this->_tpl_vars['timezone_value'] == '8'): ?> SELECTED<?php endif; ?>>Beijing, Hong Kong, Singapore, Taipei</option>
                            <option value='9'<?php if ($this->_tpl_vars['timezone_value'] == '9'): ?> SELECTED<?php endif; ?>>Tokyo, Osaka, Sapporto, Seoul, Yakutsk</option>
                            <option value='9.3'<?php if ($this->_tpl_vars['timezone_value'] == "9.3"): ?> SELECTED<?php endif; ?>>Adelaide, Darwin</option>
                            <option value='10'<?php if ($this->_tpl_vars['timezone_value'] == '10'): ?> SELECTED<?php endif; ?>>Brisbane, Melbourne, Sydney, Guam</option>
                            <option value='11'<?php if ($this->_tpl_vars['timezone_value'] == '11'): ?> SELECTED<?php endif; ?>>Magadan, Soloman Is., New Caledonia</option>
                            <option value='12'<?php if ($this->_tpl_vars['timezone_value'] == '12'): ?> SELECTED<?php endif; ?>>Fiji, Kamchatka, Marshall Is., Wellington</option>
                        </select>
                    </label>
                </p>
            </div>
            <div class="block-b">&nbsp;</div>
        </div>
        <p><?php echo $this->_tpl_vars['Admin382']; ?>
</p>
    </div>

    <div class="row">
        <h2>Date Format</h2>
        <div class="block">
            <div class="block-head"><h3>Date Format</h3></div>
            <div class="block-in">
                <p>
                    <label>
                        <select name='setting_dateformat' class='text'>
                            <option value='n/j/Y'<?php if ($this->_tpl_vars['dateformat_value'] == "n/j/Y"): ?> SELECTED<?php endif; ?>>7/17/2006</option>
                            <option value='n.j.Y'<?php if ($this->_tpl_vars['dateformat_value'] == "n.j.Y"): ?> SELECTED<?php endif; ?>>7.17.2006</option>
                            <option value='n-j-Y'<?php if ($this->_tpl_vars['dateformat_value'] == "n-j-Y"): ?> SELECTED<?php endif; ?>>7-17-2006</option>
                            <option value='Y/n/j'<?php if ($this->_tpl_vars['dateformat_value'] == "Y/n/j"): ?> SELECTED<?php endif; ?>>2006/7/17</option>
                            <option value='Y-n-j'<?php if ($this->_tpl_vars['dateformat_value'] == "Y-n-j"): ?> SELECTED<?php endif; ?>>2006-7-17</option>
                            <option value='Y-m-d'<?php if ($this->_tpl_vars['dateformat_value'] == "Y-m-d"): ?> SELECTED<?php endif; ?>>2006-07-17</option>
                            <option value='Ynj'<?php if ($this->_tpl_vars['dateformat_value'] == 'Ynj'): ?> SELECTED<?php endif; ?>>2006717</option>
                            <option value='j/n/Y'<?php if ($this->_tpl_vars['dateformat_value'] == "j/n/Y"): ?> SELECTED<?php endif; ?>>17/7/2006</option>
                            <option value='j.n.Y'<?php if ($this->_tpl_vars['dateformat_value'] == "j.n.Y"): ?> SELECTED<?php endif; ?>>17.7.2006</option>
                            <option value='M. j, Y'<?php if ($this->_tpl_vars['dateformat_value'] == "M. j, Y"): ?> SELECTED<?php endif; ?>>Jul. 17, 2006</option>
                            <option value='F j, Y'<?php if ($this->_tpl_vars['dateformat_value'] == "F j, Y"): ?> SELECTED<?php endif; ?>>July 17, 2006</option>
                            <option value='j F Y'<?php if ($this->_tpl_vars['dateformat_value'] == 'j F Y'): ?> SELECTED<?php endif; ?>>17 July 2006</option>
                            <option value='l, F j, Y'<?php if ($this->_tpl_vars['dateformat_value'] == "l, F j, Y"): ?> SELECTED<?php endif; ?>>Monday, July 17, 2006</option>
                            <option value='D-j-M-Y'<?php if ($this->_tpl_vars['dateformat_value'] == "D-j-M-Y"): ?> SELECTED<?php endif; ?>>Mon-17-Jul-2006</option>
                            <option value='D j M Y'<?php if ($this->_tpl_vars['dateformat_value'] == 'D j M Y'): ?> SELECTED<?php endif; ?>>Mon 17 Jul 2006</option>
                            <option value='D j F Y'<?php if ($this->_tpl_vars['dateformat_value'] == 'D j F Y'): ?> SELECTED<?php endif; ?>>Mon 17 July 2006</option>
                            <option value='l j F Y'<?php if ($this->_tpl_vars['dateformat_value'] == 'l j F Y'): ?> SELECTED<?php endif; ?>>Monday 17 July 2006</option>
                            <option value='Y-M-j'<?php if ($this->_tpl_vars['dateformat_value'] == "Y-M-j"): ?> SELECTED<?php endif; ?>>2006-Jul-17</option>
                            <option value='j-M-Y'<?php if ($this->_tpl_vars['dateformat_value'] == "j-M-Y"): ?> SELECTED<?php endif; ?>>17-Jul-2006</option>
                        </select>
                    </label>
                    <label>
                        <select name='setting_timeformat' class='text'>
                            <option value='g:i A'<?php if ($this->_tpl_vars['timeformat_value'] == "g:i A"): ?> SELECTED<?php endif; ?>>9:30 PM</option>
                            <option value='h:i A'<?php if ($this->_tpl_vars['timeformat_value'] == "h:i A"): ?> SELECTED<?php endif; ?>>09:30 PM</option>
                            <option value='g:i'<?php if ($this->_tpl_vars['timeformat_value'] == "g:i"): ?> SELECTED<?php endif; ?>>9:30</option>
                            <option value='h:i'<?php if ($this->_tpl_vars['timeformat_value'] == "h:i"): ?> SELECTED<?php endif; ?>>09:30</option>
                            <option value='H:i'<?php if ($this->_tpl_vars['timeformat_value'] == "H:i"): ?> SELECTED<?php endif; ?>>21:30</option>
                            <option value='H\hi'<?php if ($this->_tpl_vars['timeformat_value'] == "H\hi"): ?> SELECTED<?php endif; ?>>21h30</option>
                        </select>
                    </label>
                </p>
            </div>
            <div class="block-b">&nbsp;</div>
        </div>
        <p><?php echo $this->_tpl_vars['Admin384']; ?>
</p>
    </div>

    <div class="row">
        <h2><?php echo $this->_tpl_vars['Admin1027']; ?>
</h2>
        <div class="block">
            <div class="block-head"><h3><?php echo $this->_tpl_vars['Admin1027']; ?>
</h3></div>
            <div class="block-in">
                <!-- p><input type="checkbox" value="Member Login" name="homepageBlocks[]" <?php if (( in_array ( 'Member Login' , $this->_tpl_vars['homepageBlocks'] ) )): ?>checked="checked"<?php endif; ?>/><label> Member Login</label></p -->
                <p><input type="checkbox" value="Network statistic" name="homepageBlocks[]" <?php if (in_array ( 'Network statistic' , $this->_tpl_vars['homepageBlocks'] )): ?>checked="checked"<?php endif; ?>/><label> Network statistic</label></p>
                <p><input type="checkbox" value="Newest members" name="homepageBlocks[]" <?php if (in_array ( 'Newest members' , $this->_tpl_vars['homepageBlocks'] )): ?>checked="checked"<?php endif; ?>/><label> Newest members</label></p>
                <p><input type="checkbox" value="Most popular members" name="homepageBlocks[]" <?php if (in_array ( 'Most popular members' , $this->_tpl_vars['homepageBlocks'] )): ?>checked="checked"<?php endif; ?>/><label> Most popular members</label></p>
                <p><input type="checkbox" value="Members last logged in" name="homepageBlocks[]" <?php if (in_array ( 'Members last logged in' , $this->_tpl_vars['homepageBlocks'] )): ?>checked="checked"<?php endif; ?>/><label> Members last logged in</label></p>
                <p><input type="checkbox" value="Members online" name="homepageBlocks[]" <?php if (in_array ( 'Members online' , $this->_tpl_vars['homepageBlocks'] )): ?>checked="checked"<?php endif; ?>/><label> Members online</label></p>
                <p><input type="checkbox" value="Recent news" name="homepageBlocks[]" <?php if (in_array ( 'Recent news' , $this->_tpl_vars['homepageBlocks'] )): ?>checked="checked"<?php endif; ?>/><label> Recent news</label></p>
                <p><input type="checkbox" value="Hello message" name="homepageBlocks[]" <?php if (in_array ( 'Hello message' , $this->_tpl_vars['homepageBlocks'] )): ?>checked="checked"<?php endif; ?>/><label> Hello message</label></p>
            </div>
            <div class="block-b">&nbsp;</div>
        </div>
        <p><?php echo $this->_tpl_vars['Admin1028']; ?>
</p>
    </div>


    <div class="row" style="border-bottom:none; margin-bottom:0px;">
        <h2>News Page</h2>
        <div class="block">
            <div class="block-head"><h3>News Page</h3></div>
            <div class="block-in">
                <p><input type="checkbox" value="1" name="newsPage"<?php if ($this->_tpl_vars['newsPage']): ?> checked="checked"<?php endif; ?>/><label> News page is visible to unregistered users</label></p>
            </div>
            <div class="block-b">&nbsp;</div>
        </div>
    </div>


    <div style="padding-left:20px;"><label class="button"><input type='submit' value='<?php echo $this->_tpl_vars['Admin385']; ?>
'/></label></div>
    <input type='hidden' name='task' value='dosave'>
</form>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'AdminFooter.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>