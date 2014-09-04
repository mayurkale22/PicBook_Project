<?php /* Smarty version 2.6.14, created on 2013-11-21 14:47:09
         compiled from Search.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'math', 'Search.tpl', 92, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'Header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php echo '
<link rel="stylesheet" href="fancybox/autocomplete.css" type="text/css" media="screen">
<script src="fancybox/jquery.js" type="text/javascript"></script>
<script src="fancybox/dimensions.js" type="text/javascript"></script>
<script src="fancybox/autocomplete.js" type="text/javascript"></script>

<script type="text/javascript">
	$(function(){

	    setAutoComplete("search_text", "results", "autocomplete.php?part=");
	});
</script>
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
    function windowonload() { document.search_form.search_text.focus(); }
    // -->
    '; ?>

</script>

<div id="content">
        <div class="grey-head"><h2><?php echo $this->_tpl_vars['Application275']; ?>
</h2></div>
    <div class="row-blue">
        <p class="blue"><?php echo $this->_tpl_vars['Application276']; ?>
</p>
    </div>


    <div id="primary" class="info-cnt tuneddivs">
        <form action='Search.php' name='search_form' method='post' class="settings">

            <p id="auto">
                <label style="width:60px; clear:none; float:left;"><?php echo $this->_tpl_vars['Application277']; ?>
</label>
                <input style="float:left; margin-left:15px !important; margin-right:15px !important;" type='text'  name='search_text' id="search_text" autocomplete="off"/>
				 <div class="submits" style="margin-left:20px !important;">
                <label><input type="submit" value="<?php echo $this->_tpl_vars['Application275']; ?>
"/></label>
                <label><input type="button" class="submit_button" value="Cancel" onclick="location.href='UserFriends.php'"/></label>
            </div>
            </p>

            <p class="line">&nbsp;</p>
 

            <input type='hidden' name='task' value='dosearch'/>
            <input type='hidden' name='t' value='0'/>
        </form>

    </div>
 <?php if ($this->_tpl_vars['search_text'] != ""): ?>
    <br/>
    <p style="padding-left:25px;"><b>Search results</b></p>
    <div id="primary" class="info-cnt tuneddivs" style="color:#666666;">
        <form action="" method="post" class="settings" style="margin-top:0px !important;">
            <p class="line">&nbsp;</p>
           

            <?php if ($this->_tpl_vars['is_results'] == 0): ?>
            <br/>
            <p align="center" style="color:red;">
                <?php echo $this->_tpl_vars['Application280']; ?>
 "<b><?php echo $this->_tpl_vars['search_text']; ?>
</b>" <?php echo $this->_tpl_vars['Application281']; ?>

            </p>
            <br/>
            <?php else: ?>

            
            

                        <div align="center">
            <?php if ($this->_tpl_vars['p'] != 1): ?><p><a href='Search.php?task=dosearch&search_text=<?php echo $this->_tpl_vars['url_search']; ?>
&t=<?php echo $this->_tpl_vars['t']; ?>
&p=<?php echo smarty_function_math(array('equation' => 'p-1','p' => $this->_tpl_vars['p']), $this);?>
'>&#171; <?php echo $this->_tpl_vars['Application286']; ?>
</a> &nbsp;|&nbsp;&nbsp;</p><?php endif; ?>
            <?php if ($this->_tpl_vars['p_start'] == $this->_tpl_vars['p_end']): ?>
            <p>
                <b><?php echo $this->_tpl_vars['Application287']; ?>
 <?php echo $this->_tpl_vars['p_start']; ?>
 <?php echo $this->_tpl_vars['Application288']; ?>
 <?php echo $this->_tpl_vars['total_results']; ?>
 <?php echo $this->_tpl_vars['Application289']; ?>
</b> (<?php echo $this->_tpl_vars['search_time']; ?>
 <?php echo $this->_tpl_vars['Application290']; ?>
)
            </p>
            <?php else: ?>
            <p>
                <b><?php echo $this->_tpl_vars['Application287']; ?>
 <?php echo $this->_tpl_vars['p_start']; ?>
 - <?php echo $this->_tpl_vars['p_end']; ?>
 <?php echo $this->_tpl_vars['Application288']; ?>
 <?php echo $this->_tpl_vars['total_results']; ?>
 <?php echo $this->_tpl_vars['Application289']; ?>
</b> (<?php echo $this->_tpl_vars['search_time']; ?>
 <?php echo $this->_tpl_vars['Application290']; ?>
)
            </p>
            <?php endif; ?>
            <?php if ($this->_tpl_vars['p'] != $this->_tpl_vars['maxpage']): ?><p>&nbsp;&nbsp;|&nbsp; <a href='Search.php?task=dosearch&search_text=<?php echo $this->_tpl_vars['url_search']; ?>
&t=<?php echo $this->_tpl_vars['t']; ?>
&p=<?php echo smarty_function_math(array('equation' => 'p+1','p' => $this->_tpl_vars['p']), $this);?>
'><?php echo $this->_tpl_vars['Application291']; ?>
 &#187;</a></p><?php endif; ?>
            </div>


                        <?php unset($this->_sections['result_loop']);
$this->_sections['result_loop']['name'] = 'result_loop';
$this->_sections['result_loop']['loop'] = is_array($_loop=$this->_tpl_vars['results']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['result_loop']['show'] = true;
$this->_sections['result_loop']['max'] = $this->_sections['result_loop']['loop'];
$this->_sections['result_loop']['step'] = 1;
$this->_sections['result_loop']['start'] = $this->_sections['result_loop']['step'] > 0 ? 0 : $this->_sections['result_loop']['loop']-1;
if ($this->_sections['result_loop']['show']) {
    $this->_sections['result_loop']['total'] = $this->_sections['result_loop']['loop'];
    if ($this->_sections['result_loop']['total'] == 0)
        $this->_sections['result_loop']['show'] = false;
} else
    $this->_sections['result_loop']['total'] = 0;
if ($this->_sections['result_loop']['show']):

            for ($this->_sections['result_loop']['index'] = $this->_sections['result_loop']['start'], $this->_sections['result_loop']['iteration'] = 1;
                 $this->_sections['result_loop']['iteration'] <= $this->_sections['result_loop']['total'];
                 $this->_sections['result_loop']['index'] += $this->_sections['result_loop']['step'], $this->_sections['result_loop']['iteration']++):
$this->_sections['result_loop']['rownum'] = $this->_sections['result_loop']['iteration'];
$this->_sections['result_loop']['index_prev'] = $this->_sections['result_loop']['index'] - $this->_sections['result_loop']['step'];
$this->_sections['result_loop']['index_next'] = $this->_sections['result_loop']['index'] + $this->_sections['result_loop']['step'];
$this->_sections['result_loop']['first']      = ($this->_sections['result_loop']['iteration'] == 1);
$this->_sections['result_loop']['last']       = ($this->_sections['result_loop']['iteration'] == $this->_sections['result_loop']['total']);
?>
            <div class="row" <?php if ($this->_sections['result_loop']['last']): ?>style="border:none;"<?php endif; ?>>
                <div class="f-right">

                </div>

                                <?php if ($this->_tpl_vars['results'][$this->_sections['result_loop']['index']]['result_icon'] != ''): ?>
                <?php $this->assign('result_icon', $this->_tpl_vars['results'][$this->_sections['result_loop']['index']]['result_icon']); ?>
                <?php elseif ($this->_tpl_vars['results'][$this->_sections['result_loop']['index']]['result_user'] != ''): ?>
                <?php $this->assign('result_icon', $this->_tpl_vars['results'][$this->_sections['result_loop']['index']]['result_user']->user_photo('./images/nophoto.gif')); ?>
                <?php else: ?>
                <?php $this->assign('result_icon', './images/icons/search_profile22.gif'); ?>
                <?php endif; ?>


                <a class="f-left" href="<?php echo $this->_tpl_vars['results'][$this->_sections['result_loop']['index']]['result_url']; ?>
"><img src="<?php echo $this->_tpl_vars['result_icon']; ?>
" class='img' width="92px" alt="<?php echo $this->_tpl_vars['Application500']; ?>
"/></a>
                <dl style="width:380px! important;">
                    <dt style="width:50px !important;">Result:</dt>
                    <dd><a href="<?php echo $this->_tpl_vars['results'][$this->_sections['result_loop']['index']]['result_url']; ?>
"><b><?php echo $this->_tpl_vars['results'][$this->_sections['result_loop']['index']]['result_name']; ?>
</b></a></dd>

                    <?php if ($this->_tpl_vars['results'][$this->_sections['result_loop']['index']]['result_desc']): ?>
                    <dt>Description:</dt>
                    <dd><?php echo $this->_tpl_vars['results'][$this->_sections['result_loop']['index']]['result_desc']; ?>
</dd>
                    <?php endif; ?>

                    <?php if ($this->_tpl_vars['results'][$this->_sections['result_loop']['index']]['result_online'] == 1): ?>
                    <dt style="width:50px !important;">Online:</dt>
                    <dd><?php echo $this->_tpl_vars['Application285']; ?>
</dd>
                    <?php endif; ?>

                </dl>
            </div>
            <?php endfor; endif; ?>
            <?php endif; ?>
          
        </form>
    </div>
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
<div id="sidebar_right"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'MenuSidebarRight.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'Footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>