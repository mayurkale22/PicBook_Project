<?php /* Smarty version 2.6.14, created on 2013-11-09 14:48:39
         compiled from Lostpass.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'Header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="content">

    <div class="grey-head"><h2><?php echo $this->_tpl_vars['Application178']; ?>
</h2></div>
    <div class="row-blue">
        <p class="blue"><?php echo $this->_tpl_vars['Application179']; ?>
</p>
    </div>





<br>

<?php if ($this->_tpl_vars['submitted'] == 1 && $this->_tpl_vars['is_error'] == 0): ?>
    <br/>
    <p style="color:#009900; padding-left:25px;"><?php echo $this->_tpl_vars['Application180']; ?>
</p>
    <br/>  
<?php else: ?>

  <?php if ($this->_tpl_vars['is_error'] == 1): ?>
  
    <br/>
    <p style="color:red; padding-left:25px;"><?php echo $this->_tpl_vars['Application181']; ?>
</p>
    <br/>
  
  <?php endif; ?>
 
  <form action='Lostpass.php' method='post' class="settings">
            <div><b><?php echo $this->_tpl_vars['Application182']; ?>
</b></div>
            <div class='form_desc'></div>
            <input style="width:235px; border:1px solid #CBD0D2;" type='text' class='text' name='user_email' size='30' maxlength='50'/>
            <br/><br/>
  
              <p class="line">&nbsp;</p>
            <div class="submits" style="margin-left:0px !important;">
                <label><input style="width:100px !important;" type="submit" value="<?php echo $this->_tpl_vars['Application183']; ?>
"/></label>
                <label><input style="width:100px !important;" type="button" onclick="window.location.href='login.php'" value="<?php echo $this->_tpl_vars['Application184']; ?>
"/></label>
                <input type='hidden' name='task' value='send_email'>
            </div>

  </form>
  </table>
  
  
    <div class="block-bot"><span>&nbsp;</span></div>
</div>

<?php endif; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'Footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>