<?php /* Smarty version 2.6.14, created on 2013-11-11 12:39:13
         compiled from Login.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="content">
    <?php echo '
<script type="text/javascript">
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
        if(document.login.email.value == "") {
            document.login.email.focus();
        } else {
            document.login.password.focus();
        }
    }
    // -->
</script>
'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
      <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
      <title>Login</title>
      <link rel="STYLESHEET" type="text/css" href="style/loginsite.css" />
</head>
<body bgcolor="#f5f5f5">
<br />

        <form action='Login.php' method='post' name='login' class="settings">

<table width="200" border="0" align="center">
  <tr>
    <td><img src="./images/burmaindia-collage1.jpg" height="500"></img></td>
	<td></td>
	<td></td>
	<td><IMG SRC="./images/inve.gif" ALIGN="RIGHT" HEIGHT="510" WIDTH="2"></td>
    <td></td>
	<td></td>
	<td>
	
	<IMG SRC="./images/logo.png" HEIGHT="90"/>
	
	<!-- Form Code Start -->
    <div id='loginsite'>
        <form id='login' action='' method='post' accept-charset='UTF-8'>
            <fieldset>
                <legend><?php echo $this->_tpl_vars['Application749']; ?></legend>

                <div style="font-family : Arial, sans-serif;font-size: 0.6em;color:#333;"><?php echo $this->_tpl_vars['Application750']; ?></div>
                <div class='container'>
                    <div><b><?php echo $this->_tpl_vars['Application173']; ?></b></div>
                    <div class='form_desc'></div>
            		<input style="width:235px !important;height:25px"  type='text' class='text' name='email' value='<?php echo $this->_tpl_vars['email']; ?>'/>
            		
					<?php if (strpos($this->_tpl_vars['error_message'],'Username') !== false): ?><font color=red><?php echo $this->_tpl_vars['error_message']; ?></font>
					<?php else: echo '<br/><br/>'; endif; ?>                  
                </div>
                <div class='container'>
					<div><b><?php echo $this->_tpl_vars['Application174']; ?></b></div>
					<div class='form_desc'></div>
					<input style="width:235px !important; height:25px" type='password' class='text' name='password' size='30' maxlength='50'/>
				<?php if (strpos($this->_tpl_vars['error_message'],'Password') !== false): ?><font color=red><?php echo $this->_tpl_vars['error_message'].'<br/><br/>'; ?></font>
					<?php elseif (strpos($this->_tpl_vars['error_message'],'invalid') !== false): ?><font color=red><?php echo $this->_tpl_vars['error_message']; ?></font>
					<?php else: echo '<br/><br/><br/>'; endif; ?>
                </div>
					<?php if (strpos($this->_tpl_vars['error_message'],'invalid') !== true): ?>
					<?php else: echo '<br/>'; endif; ?>	
                <div class='container'>
            <div class="submits" style="margin-left:0px !important;">
            <label><input style="width:92px !important; width:100px !important;" type="submit" value="<?php echo $this->_tpl_vars['Application10']; ?>"/></label>
             
			<NOSCRIPT><input type='hidden' name='javascript_disabled' value='1'/></NOSCRIPT>
            <input type='hidden' name='task' value='dologin'/>
            <input type='hidden' name='return_url' value='<?php echo $this->_tpl_vars['return_url']; ?>'/>
					</div>	<br/>
				<div style="font-family : Arial, sans-serif;font-size: 0.6em;color:#333;"><?php echo $this->_tpl_vars['Application751']; ?></div>
              
				<p><a href=""><?php echo $this->_tpl_vars['Application752']; ?></a></p>
				<p><?php echo $this->_tpl_vars['Application753']; ?><br/><a href="signup.php"><?php echo $this->_tpl_vars['Application754']; ?></a></p>
            </fieldset>
        </form>
    </div>	</td>
  </tr>
  <tr>
    <td colspan="7">
    <hr>
    &copy;2013 PicBook. All rights reserved.</td>
  </tr>
</table>




</body>
</html>
<?php 
//$_smarty_tpl_vars = $this->_tpl_vars;
//$this->_smarty_include(array('smarty_include_tpl_file' => 'Footer.tpl', 'smarty_include_vars' => array()));
//$this->_tpl_vars = $_smarty_tpl_vars;
//unset($_smarty_tpl_vars);
 ?>