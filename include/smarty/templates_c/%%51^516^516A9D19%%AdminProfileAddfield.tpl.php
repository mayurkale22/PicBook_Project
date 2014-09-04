<?php /* Smarty version 2.6.14, created on 2013-11-09 02:38:51
         compiled from AdminProfileAddfield.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'AdminHeader.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<h2><?php echo $this->_tpl_vars['Admin580']; ?>
</h2>
<p><?php echo $this->_tpl_vars['Admin581']; ?>
</p>



<?php if ($this->_tpl_vars['is_error'] != 0): ?>
<p style="color:red;"><?php echo $this->_tpl_vars['error_message']; ?>
</p>
<?php endif;  echo '
<style type="text/css">
    .input-border{
        border-color:#CBD0D2;
        border-style:solid;
        border-width:1px;
    }
</style>
'; ?>


<?php echo '
<script language=\'JavaScript\'>
<!--
function showmaxlength() {

  if(document.getElementById(\'field_type\').value==\'\') {
    document.getElementById(\'box1\').style.display = "none";
    document.getElementById(\'box3\').style.display = "none";
    document.getElementById(\'box4\').style.display = "none";
    document.getElementById(\'box5\').style.display = "none";
    document.getElementById(\'box6\').style.display = "none";
  }

  if(document.getElementById(\'field_type\').value==\'1\') {
    document.getElementById(\'box1\').style.display = "block";
    document.getElementById(\'box3\').style.display = "none";
    document.getElementById(\'box4\').style.display = "none";
    document.getElementById(\'box5\').style.display = "none";
    document.getElementById(\'box6\').style.display = "block";
  }

  if(document.getElementById(\'field_type\').value==\'2\') {
    document.getElementById(\'box1\').style.display = "none";
    document.getElementById(\'box3\').style.display = "none";
    document.getElementById(\'box4\').style.display = "none";
    document.getElementById(\'box5\').style.display = "none";
    document.getElementById(\'box6\').style.display = "block";
  }

  if(document.getElementById(\'field_type\').value==\'3\') {
    document.getElementById(\'box1\').style.display = "none";
    document.getElementById(\'box3\').style.display = "block";
    document.getElementById(\'box4\').style.display = "none";
    document.getElementById(\'box5\').style.display = "none";
    document.getElementById(\'box6\').style.display = "none";
  }

  if(document.getElementById(\'field_type\').value==\'4\') {
    document.getElementById(\'box1\').style.display = "none";
    document.getElementById(\'box3\').style.display = "none";
    document.getElementById(\'box4\').style.display = "block";
    document.getElementById(\'box5\').style.display = "none";
    document.getElementById(\'box6\').style.display = "none";
  }

  if(document.getElementById(\'field_type\').value==\'5\') {
    document.getElementById(\'box1\').style.display = "none";
    document.getElementById(\'box3\').style.display = "none";
    document.getElementById(\'box4\').style.display = "none";
    document.getElementById(\'box5\').style.display = "block";
    document.getElementById(\'box6\').style.display = "none";
  }

}

// -->
</script>

<script type="text/javascript">
<!-- Begin
'; ?>

var select_id = <?php echo $this->_tpl_vars['num_select_options']; ?>
;
var radio_id = <?php echo $this->_tpl_vars['num_radio_options']; ?>
;
<?php echo '

function addInput(fieldname) {
  if(fieldname == \'newfields3\') {
    var ni = document.getElementById(fieldname);
    var newdiv = document.createElement(\'div\');
    var divIdName = \'my\'+select_id+\'Div\';
    newdiv.setAttribute(\'id\',divIdName);
    newdiv.innerHTML = "<input type=\'text\' name=\'select_label" + select_id +"\' class=\'input-border\' size=\'30\' maxlength=\'50\' value=\'\'><select name=\'select_dependency" + select_id +"\' class=\'input-border\'><option value=\'0\'>';  echo $this->_tpl_vars['Admin582'];  echo '</option><option value=\'1\'>';  echo $this->_tpl_vars['Admin583'];  echo '</option></select><input type=\'text\' class=\'input-border\' name=\'select_dependent_label" + select_id +"\' size=\'30\' maxlength=\'100\' value=\'\'><br>";
    ni.appendChild(newdiv);
    select_id++;
    window.document.info.num_select_options.value=select_id;
  } else if(fieldname == \'newfields4\') {
    var ni = document.getElementById(fieldname);
    var newdiv = document.createElement(\'div\');
    var divIdName = \'my\'+radio_id+\'Div\';
    newdiv.setAttribute(\'id\',divIdName);
    newdiv.innerHTML = "<input type=\'text\' name=\'radio_label" + radio_id +"\' class=\'input-border\' size=\'30\' maxlength=\'50\'><select name=\'radio_dependency" + radio_id +"\' class=\'input-border\'><option value=\'0\'>';  echo $this->_tpl_vars['Admin582'];  echo '</option><option value=\'1\'>';  echo $this->_tpl_vars['Admin583'];  echo '</option></select><input type=\'text\' class=\'input-border\' name=\'radio_dependent_label" + radio_id +"\' size=\'30\' maxlength=\'100\'><br>";
    ni.appendChild(newdiv);
    radio_id++;
    window.document.info.num_radio_options.value=radio_id;
  }
}


// End -->
</script>
'; ?>


<form action='AdminProfileAddfield.php' name='info' method='POST'>
<table cellpadding='0' cellspacing='4' style="color:#666666;">
<tr>
<td class='form1' width='150'><?php echo $this->_tpl_vars['Admin584']; ?>
</td>
<td class='form2'><input type='text' class='input-border' name='field_title' value='<?php echo $this->_tpl_vars['field_title']; ?>
' size='30' maxlength='100'></td>
</tr>
<tr>
<td class='form1'><?php echo $this->_tpl_vars['Admin585']; ?>
</td>
<td class='form2'>
<select name='field_tab_id' class='input-border'>
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
  <option value='<?php echo $this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['tab_id']; ?>
'<?php if ($this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['field_tab_id'] == 1): ?> SELECTED<?php endif; ?>><?php echo $this->_tpl_vars['tabs'][$this->_sections['tab_loop']['index']]['tab_name']; ?>
</option>
<?php endfor; endif; ?>
</select>
</td>
</tr>
<tr>
<td class='form1'><?php echo $this->_tpl_vars['Admin586']; ?>
</td>
<td class='form2'>
<select name='field_type' id='field_type' class='input-border' onChange='showmaxlength();'>
<option value=''></option>
<option value='1'<?php if ($this->_tpl_vars['field_type'] == 1): ?> SELECTED<?php endif; ?>><?php echo $this->_tpl_vars['Admin654']; ?>
</option>
<option value='2'<?php if ($this->_tpl_vars['field_type'] == 2): ?> SELECTED<?php endif; ?>><?php echo $this->_tpl_vars['Admin655']; ?>
</option>
<option value='3'<?php if ($this->_tpl_vars['field_type'] == 3): ?> SELECTED<?php endif; ?>><?php echo $this->_tpl_vars['Admin656']; ?>
</option>
<option value='4'<?php if ($this->_tpl_vars['field_type'] == 4): ?> SELECTED<?php endif; ?>><?php echo $this->_tpl_vars['Admin657']; ?>
</option>
<option value='5'<?php if ($this->_tpl_vars['field_type'] == 5): ?> SELECTED<?php endif; ?>><?php echo $this->_tpl_vars['Admin616']; ?>
</option>
</select>
</td>
</tr>
<tr>
<td class='form1' valign="top"><?php echo $this->_tpl_vars['Admin561']; ?>
</td>
<td class='form2'>
<input type='text' class='input-border' name='field_style' value='<?php echo $this->_tpl_vars['field_style']; ?>
' size='30' maxlength='200'>
</td>
</tr>
<tr>
<td class='form1' valign="top"><?php echo $this->_tpl_vars['Admin608']; ?>
</td>
<td class='form2'>
<textarea name='field_desc' rows='4' cols='40' class='input-border'><?php echo $this->_tpl_vars['field_desc']; ?>
</textarea>
</td>
</tr>
<tr>
<td class='form1'><?php echo $this->_tpl_vars['Admin595']; ?>
</td>
<td class='form2'>
<input type='text' class='input-border' name='field_error' value='<?php echo $this->_tpl_vars['field_error']; ?>
' size='30' maxlength='250'>
</td>
</tr>
<tr>
<td class='form1'><?php echo $this->_tpl_vars['Admin613']; ?>
</td>
<td class='form2'>
<select name='field_required' class='input-border'>
<option value='0'<?php if ($this->_tpl_vars['field_required'] == 0): ?> SELECTED<?php endif; ?>><?php echo $this->_tpl_vars['Admin615']; ?>
</option>
<option value='1'<?php if ($this->_tpl_vars['field_required'] == 1): ?> SELECTED<?php endif; ?>><?php echo $this->_tpl_vars['Admin614']; ?>
</option>
</select>
</td>
</tr>
<tr>
<td class='form1'><?php echo $this->_tpl_vars['Admin609']; ?>
</td>
<td class='form2'>
<select name='field_browsable' class='input-border'>
<option value='2'<?php if ($this->_tpl_vars['field_browsable'] == 2): ?> SELECTED<?php endif; ?>><?php echo $this->_tpl_vars['Admin610']; ?>
</option>
<option value='1'<?php if ($this->_tpl_vars['field_browsable'] == 1): ?> SELECTED<?php endif; ?>><?php echo $this->_tpl_vars['Admin611']; ?>
</option>
<option value='0'<?php if ($this->_tpl_vars['field_browsable'] == 0): ?> SELECTED<?php endif; ?>><?php echo $this->_tpl_vars['Admin612']; ?>
</option>
<option value='-1'<?php if ($this->_tpl_vars['field_browsable'] == -1): ?> SELECTED<?php endif; ?>><?php echo $this->_tpl_vars['Admin620']; ?>
</option>
</select>
</td>
</tr>
</table>

<div id='box6' style='display: <?php echo $this->_tpl_vars['box6_display']; ?>
'>
<table cellpadding='0' cellspacing='4' style="color:#666666;">
<tr>
<td class='form1' width='150' nowrap='nowrap'><?php echo $this->_tpl_vars['Admin621']; ?>
</td>
<td class='form2'>
<input type='text' name='field_html' maxlength='200' size='30' class='input-border'>
<br><?php echo $this->_tpl_vars['Admin622']; ?>

</td>
</tr>
</table>
</div>

<div id='box1' name='box1' style='display: <?php echo $this->_tpl_vars['box1_display']; ?>
;'>
<table cellpadding='0' cellspacing='4' style="color:#666666;">
<tr>
<td class='form1' width='150'><?php echo $this->_tpl_vars['Admin592']; ?>
</td>
<td class='form2'>
<select name='field_maxlength' class='input-border'>
<option<?php if ($this->_tpl_vars['field_maxlength'] == 50): ?> SELECTED<?php endif; ?>>50</option>
<option<?php if ($this->_tpl_vars['field_maxlength'] == 100): ?> SELECTED<?php endif; ?>>100</option>
<option<?php if ($this->_tpl_vars['field_maxlength'] == 150): ?> SELECTED<?php endif; ?>>150</option>
<option<?php if ($this->_tpl_vars['field_maxlength'] == 200): ?> SELECTED<?php endif; ?>>200</option>
<option<?php if ($this->_tpl_vars['field_maxlength'] == 250): ?> SELECTED<?php endif; ?>>250</option>
</select>
</td>
</tr>
<tr>
<td class='form1'><?php echo $this->_tpl_vars['Admin618']; ?>
</td>
<td class='form2'>
<input type='text' class='input-border' name='field_link' value='<?php echo $this->_tpl_vars['field_link']; ?>
' size='30' maxlength='250'>
<br><?php echo $this->_tpl_vars['Admin619']; ?>

</td>
</tr>
<tr>
<td class='form1' width='150'><?php echo $this->_tpl_vars['Admin593']; ?>
</td>
<td class='form2'>
<input type='text' class='input-border' name='field_regex' value='<?php echo $this->_tpl_vars['field_regex']; ?>
' size='30' maxlength='250'>
<br><?php echo $this->_tpl_vars['Admin594']; ?>

</td>
</tr>
</table>
</div>

<div id='box3' name='box3' style='display: <?php echo $this->_tpl_vars['box3_display']; ?>
;'>
<table cellpadding='0' cellspacing='4' style="color:#666666;">
<tr>
<td class='form1' width='150' NOWRAP style='vertical-align: top;'><?php echo $this->_tpl_vars['Admin596']; ?>
</td>
<td class='form2'>
  <table cellpadding='0' cellspacing='4' style="color:#666666;">
  <tr>
  <td><?php echo $this->_tpl_vars['Admin598']; ?>
</td>
  <td><?php echo $this->_tpl_vars['Admin599']; ?>
</td>
  <td><?php echo $this->_tpl_vars['Admin600']; ?>
</td>
  </tr>

<?php unset($this->_sections['select_loop']);
$this->_sections['select_loop']['name'] = 'select_loop';
$this->_sections['select_loop']['loop'] = is_array($_loop=$this->_tpl_vars['select_options']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['select_loop']['show'] = true;
$this->_sections['select_loop']['max'] = $this->_sections['select_loop']['loop'];
$this->_sections['select_loop']['step'] = 1;
$this->_sections['select_loop']['start'] = $this->_sections['select_loop']['step'] > 0 ? 0 : $this->_sections['select_loop']['loop']-1;
if ($this->_sections['select_loop']['show']) {
    $this->_sections['select_loop']['total'] = $this->_sections['select_loop']['loop'];
    if ($this->_sections['select_loop']['total'] == 0)
        $this->_sections['select_loop']['show'] = false;
} else
    $this->_sections['select_loop']['total'] = 0;
if ($this->_sections['select_loop']['show']):

            for ($this->_sections['select_loop']['index'] = $this->_sections['select_loop']['start'], $this->_sections['select_loop']['iteration'] = 1;
                 $this->_sections['select_loop']['iteration'] <= $this->_sections['select_loop']['total'];
                 $this->_sections['select_loop']['index'] += $this->_sections['select_loop']['step'], $this->_sections['select_loop']['iteration']++):
$this->_sections['select_loop']['rownum'] = $this->_sections['select_loop']['iteration'];
$this->_sections['select_loop']['index_prev'] = $this->_sections['select_loop']['index'] - $this->_sections['select_loop']['step'];
$this->_sections['select_loop']['index_next'] = $this->_sections['select_loop']['index'] + $this->_sections['select_loop']['step'];
$this->_sections['select_loop']['first']      = ($this->_sections['select_loop']['iteration'] == 1);
$this->_sections['select_loop']['last']       = ($this->_sections['select_loop']['iteration'] == $this->_sections['select_loop']['total']);
?>
  <tr>
  <td><input type='text' class='input-border' name='select_label<?php echo $this->_tpl_vars['select_options'][$this->_sections['select_loop']['index']]['select_id']; ?>
' value='<?php echo $this->_tpl_vars['select_options'][$this->_sections['select_loop']['index']]['select_label']; ?>
' size='30' maxlength='50'></td>
  <td><select name='select_dependency<?php echo $this->_tpl_vars['select_options'][$this->_sections['select_loop']['index']]['select_id']; ?>
' class='input-border'><option value='0'<?php if ($this->_tpl_vars['select_options'][$this->_sections['select_loop']['index']]['select_dependency'] == 0): ?> SELECTED<?php endif; ?>><?php echo $this->_tpl_vars['Admin582']; ?>
</option><option value='1'<?php if ($this->_tpl_vars['select_options'][$this->_sections['select_loop']['index']]['select_dependency'] == 1): ?> SELECTED<?php endif; ?>><?php echo $this->_tpl_vars['Admin583']; ?>
</option></select></td>
  <td><input type='text' class='input-border' name='select_dependent_label<?php echo $this->_tpl_vars['select_options'][$this->_sections['select_loop']['index']]['select_id']; ?>
' value='<?php echo $this->_tpl_vars['select_options'][$this->_sections['select_loop']['index']]['select_dependent_label']; ?>
' size='30' maxlength='100'></td>
  </tr>
<?php endfor; endif; ?>

  <tr>
  <td colspan='4'><p id='newfields3'></p></td>
  </tr>
  <tr>
  <td colspan='4'><a href="javascript:addInput('newfields3')"><?php echo $this->_tpl_vars['Admin601']; ?>
</a></td>
  </tr>
  </table>
&nbsp;
</td>
<input type='hidden' name='num_select_options' value='1'>
</tr>
</table>
</div>

<div id='box4' name='box4' style='display: <?php echo $this->_tpl_vars['box4_display']; ?>
;'>
<table cellpadding='0' cellspacing='4' style="color:#666666;">
<tr>
<td class='form1' width='150' style='vertical-align: top;'><?php echo $this->_tpl_vars['Admin596']; ?>
</td>
<td class='form2' style='vertical-align: top;'>
  <table cellpadding='0' cellspacing='4' style="color:#666666;">
  <tr>
  <td><?php echo $this->_tpl_vars['Admin598']; ?>
</td>
  <td><?php echo $this->_tpl_vars['Admin599']; ?>
</td>
  <td><?php echo $this->_tpl_vars['Admin600']; ?>
</td>
  </tr>

<?php unset($this->_sections['radio_loop']);
$this->_sections['radio_loop']['name'] = 'radio_loop';
$this->_sections['radio_loop']['loop'] = is_array($_loop=$this->_tpl_vars['radio_options']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['radio_loop']['show'] = true;
$this->_sections['radio_loop']['max'] = $this->_sections['radio_loop']['loop'];
$this->_sections['radio_loop']['step'] = 1;
$this->_sections['radio_loop']['start'] = $this->_sections['radio_loop']['step'] > 0 ? 0 : $this->_sections['radio_loop']['loop']-1;
if ($this->_sections['radio_loop']['show']) {
    $this->_sections['radio_loop']['total'] = $this->_sections['radio_loop']['loop'];
    if ($this->_sections['radio_loop']['total'] == 0)
        $this->_sections['radio_loop']['show'] = false;
} else
    $this->_sections['radio_loop']['total'] = 0;
if ($this->_sections['radio_loop']['show']):

            for ($this->_sections['radio_loop']['index'] = $this->_sections['radio_loop']['start'], $this->_sections['radio_loop']['iteration'] = 1;
                 $this->_sections['radio_loop']['iteration'] <= $this->_sections['radio_loop']['total'];
                 $this->_sections['radio_loop']['index'] += $this->_sections['radio_loop']['step'], $this->_sections['radio_loop']['iteration']++):
$this->_sections['radio_loop']['rownum'] = $this->_sections['radio_loop']['iteration'];
$this->_sections['radio_loop']['index_prev'] = $this->_sections['radio_loop']['index'] - $this->_sections['radio_loop']['step'];
$this->_sections['radio_loop']['index_next'] = $this->_sections['radio_loop']['index'] + $this->_sections['radio_loop']['step'];
$this->_sections['radio_loop']['first']      = ($this->_sections['radio_loop']['iteration'] == 1);
$this->_sections['radio_loop']['last']       = ($this->_sections['radio_loop']['iteration'] == $this->_sections['radio_loop']['total']);
?>
  <tr>
  <td><input type='text' class='input-border' name='radio_label<?php echo $this->_tpl_vars['radio_options'][$this->_sections['radio_loop']['index']]['radio_id']; ?>
' value='<?php echo $this->_tpl_vars['radio_options'][$this->_sections['radio_loop']['index']]['radio_label']; ?>
' size='30' maxlength='50'></td>
  <td><select name='radio_dependency<?php echo $this->_tpl_vars['radio_options'][$this->_sections['radio_loop']['index']]['radio_id']; ?>
' class='input-border'><option value='0'<?php if ($this->_tpl_vars['radio_options'][$this->_sections['radio_loop']['index']]['radio_dependency'] == 0): ?> SELECTED<?php endif; ?>><?php echo $this->_tpl_vars['Admin582']; ?>
</option><option value='1'<?php if ($this->_tpl_vars['radio_options'][$this->_sections['radio_loop']['index']]['radio_dependency'] == 1): ?> SELECTED<?php endif; ?>><?php echo $this->_tpl_vars['Admin583']; ?>
</option></select></td>
  <td><input type='text' class='input-border' name='radio_dependent_label<?php echo $this->_tpl_vars['radio_options'][$this->_sections['radio_loop']['index']]['radio_id']; ?>
' value='<?php echo $this->_tpl_vars['radio_options'][$this->_sections['radio_loop']['index']]['radio_dependent_label']; ?>
' size='30' maxlength='100'></td>
  </tr>
<?php endfor; endif; ?>

  <tr>
  <td colspan='3'><p id='newfields4'></p></td>
  </tr>
  <tr>
  <td colspan='3'><a href="javascript:addInput('newfields4')"><?php echo $this->_tpl_vars['Admin601']; ?>
</a></td>
  </tr>
  </table>
&nbsp;
</td>
<input type='hidden' name='num_radio_options' value='1'>
</tr>
</table>
</div>

<div id='box5' name='box5' style='display: <?php echo $this->_tpl_vars['box5_display']; ?>
;'>
<table cellpadding='0' cellspacing='4' style="color:#666666;">
<td class='form1' width='150'><?php echo $this->_tpl_vars['Admin604']; ?>
</td>
<td class='form2'>
<input type='checkbox' name='field_birthday' id='field_birthday' value='1'<?php if ($this->_tpl_vars['field_birthday'] == 1): ?> CHECKED<?php endif; ?>>
<label for='field_birthday'><?php echo $this->_tpl_vars['Admin617']; ?>
</label>
</td>
</tr>
</table>
</div>

<br>

<table cellpadding='0' cellspacing='4' style="color:#666666;">
<tr>
<td class='form1' width='150'>&nbsp;</td>
<td><label class="button"><input type='submit' value='<?php echo $this->_tpl_vars['Admin602']; ?>
'/></lable></td>
<input type='hidden' name='task' value='addfield'>
<input type='hidden' name='o' value='<?php echo $this->_tpl_vars['o']; ?>
'>
</form>
<form action='AdminProfileAddfield.php' method='POST'>
<td><label class="button"><input type='submit' value='<?php echo $this->_tpl_vars['Admin603']; ?>
'/></label></td>
<input type='hidden' name='task' value='cancel'/>
<input type='hidden' name='o' value='<?php echo $this->_tpl_vars['o']; ?>
'>
</tr>
</table>
</form>





<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'AdminFooter.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>