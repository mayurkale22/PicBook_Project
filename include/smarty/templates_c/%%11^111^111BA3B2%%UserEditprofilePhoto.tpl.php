<?php /* Smarty version 2.6.14, created on 2013-11-20 16:55:25
         compiled from UserEditprofilePhoto.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'Header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="content">
    <div class="grey-head"><h2><?php echo $this->_tpl_vars['Application446']; ?>
</h2></div>

   <div class="layers">
        <ul class="list01">
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
			
            <li <?php if ($this->_tpl_vars['uri_page'] == $this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['tab_id']): ?>class="ui-state-active ui-tabs-selected"<?php endif; ?>>
                <a href='UserEditprofile.php?tab_id=<?php echo $this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['tab_id']; ?>
'><?php echo $this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['tab_name']; ?>
</a>
            </li>
            <?php if ($this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['tab_id'] == $this->_tpl_vars['tab_id']):  $this->assign('pagename', $this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['tab_name']);  endif; ?>
            <?php endfor; endif; ?>
 <li <?php if ($this->_tpl_vars['uri_page'] == 'UserEditprofileStatus.php'): ?>class="ui-state-active ui-tabs-selected"<?php endif; ?>><a href='UserEditprofileStatus.php'><?php echo $this->_tpl_vars['Application419']; ?>
</a></li>

 <li <?php if ($this->_tpl_vars['uri_page'] == 'picbookUserEditprofilePhoto.php'): ?>class="ui-state-active ui-tabs-selected"<?php endif; ?>><a href='UserEditprofilePhoto.php'><?php echo $this->_tpl_vars['Application420']; ?>
</a></li>
            
        </ul>

        <div id="primary" class="info-cnt tuneddivs">


            <p style="padding-left:25px;"><?php echo $this->_tpl_vars['Application447']; ?>
</p>

                        <?php if ($this->_tpl_vars['is_error'] != 0): ?>
            <p style="color:red; padding-left:25px;"><?php echo $this->_tpl_vars['error_message']; ?>
</p>
            <?php endif; ?>

            <form action='UserEditprofilePhoto.php' class="settings" method='POST' enctype='multipart/form-data'>
                <div class="row" style="border:none;">

                    <a href="<?php echo $this->_tpl_vars['url']->url_create('profile',$this->_tpl_vars['user']->user_info['user_username']); ?>
" class="f-left"><img class="img" alt="" width="92px" src='<?php echo $this->_tpl_vars['user']->user_photo("./images/nophoto.gif"); ?>
'/></a>
                    <dl>
                        <dt><b><?php echo $this->_tpl_vars['Application452']; ?>
</b></dt>
                        <dd><input type='file' style="height:25px !important; border:1px solid #CBD0D2; height:20px; margin:0 10px 0 0;" name='photo' size='35'/></dd>
                        <br/>
                        <p style="color:#666666; padding-top:10px;"><?php echo $this->_tpl_vars['Application450']; ?>
 <?php echo $this->_tpl_vars['user']->level_info['level_photo_exts']; ?>
</p>
                   </dl>
                    
                </div>

                <p class="line">&nbsp;</p>

                <?php $this->assign('redirect_page', $this->_tpl_vars['url']->url_create('profile',$this->_tpl_vars['user']->user_info['user_username'])); ?>

                <div class="submits">
                    <label><input type="submit" value="<?php echo $this->_tpl_vars['Application449']; ?>
"/></label>
                    <label><input type="button" onclick="location.href='<?php echo $this->_tpl_vars['redirect_page']; ?>
'" value="Cancel"/></label>
                </div>

                <input type='hidden' name='task' value='upload'>
                <input type='hidden' name='MAX_FILE_SIZE' value='5000000'>
                <input type='hidden' name='return_url' value='<?php echo $this->_tpl_vars['return_url']; ?>
'>
            </form>
        </div>
    </div>
    <div class="block-bot"><span></span></div>
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