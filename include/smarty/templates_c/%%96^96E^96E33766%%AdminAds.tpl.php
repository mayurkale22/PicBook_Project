<?php /* Smarty version 2.6.14, created on 2013-11-09 15:51:03
         compiled from AdminAds.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'AdminAds.tpl', 43, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'AdminHeader.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<h2><?php echo $this->_tpl_vars['Admin80']; ?>
</h2>
<p><?php echo $this->_tpl_vars['Admin81']; ?>
</p>

<?php echo '
<style type="text/css">
    .input-border{
        border-color:#CBD0D2;
        border-style:solid;
        border-width:1px;
    }
</style>
'; ?>

<br>

<table cellpadding="0" cellspacing="0" class="view-users">
<tr>
<th align="left" valign="top" class="col-f"><a class='header' href='AdminAds.php?s=<?php echo $this->_tpl_vars['i']; ?>
'><?php echo $this->_tpl_vars['Admin84']; ?>
</a></th>
<th align="left" valign="top"><a class='header' href='AdminAds.php?s=<?php echo $this->_tpl_vars['n']; ?>
'><?php echo $this->_tpl_vars['Admin85']; ?>
</a></th>
<th align="left" valign="top"><?php echo $this->_tpl_vars['Admin86']; ?>
</th>
<th align="left" valign="top"><a class='header' href='AdminAds.php?s=<?php echo $this->_tpl_vars['v']; ?>
'><?php echo $this->_tpl_vars['Admin87']; ?>
</a></th>
<th align="left" valign="top"><a class='header' href='AdminAds.php?s=<?php echo $this->_tpl_vars['c']; ?>
'><?php echo $this->_tpl_vars['Admin88']; ?>
</a></th>
<th align="left" valign="top" style="width:auto !important;"><?php echo $this->_tpl_vars['Admin89']; ?>
</th>
<th align="center" valign="top" class="col-l"><?php echo $this->_tpl_vars['Admin90']; ?>
</th>
</tr>
  <?php unset($this->_sections['ad_loop']);
$this->_sections['ad_loop']['name'] = 'ad_loop';
$this->_sections['ad_loop']['loop'] = is_array($_loop=$this->_tpl_vars['ads']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['ad_loop']['show'] = true;
$this->_sections['ad_loop']['max'] = $this->_sections['ad_loop']['loop'];
$this->_sections['ad_loop']['step'] = 1;
$this->_sections['ad_loop']['start'] = $this->_sections['ad_loop']['step'] > 0 ? 0 : $this->_sections['ad_loop']['loop']-1;
if ($this->_sections['ad_loop']['show']) {
    $this->_sections['ad_loop']['total'] = $this->_sections['ad_loop']['loop'];
    if ($this->_sections['ad_loop']['total'] == 0)
        $this->_sections['ad_loop']['show'] = false;
} else
    $this->_sections['ad_loop']['total'] = 0;
if ($this->_sections['ad_loop']['show']):

            for ($this->_sections['ad_loop']['index'] = $this->_sections['ad_loop']['start'], $this->_sections['ad_loop']['iteration'] = 1;
                 $this->_sections['ad_loop']['iteration'] <= $this->_sections['ad_loop']['total'];
                 $this->_sections['ad_loop']['index'] += $this->_sections['ad_loop']['step'], $this->_sections['ad_loop']['iteration']++):
$this->_sections['ad_loop']['rownum'] = $this->_sections['ad_loop']['iteration'];
$this->_sections['ad_loop']['index_prev'] = $this->_sections['ad_loop']['index'] - $this->_sections['ad_loop']['step'];
$this->_sections['ad_loop']['index_next'] = $this->_sections['ad_loop']['index'] + $this->_sections['ad_loop']['step'];
$this->_sections['ad_loop']['first']      = ($this->_sections['ad_loop']['iteration'] == 1);
$this->_sections['ad_loop']['last']       = ($this->_sections['ad_loop']['iteration'] == $this->_sections['ad_loop']['total']);
?>
    <?php if ($this->_tpl_vars['ads'][$this->_sections['ad_loop']['index']]['ad_total_views'] == "" || $this->_tpl_vars['ads'][$this->_sections['ad_loop']['index']]['ad_total_views'] == 0): ?>
      <?php $this->assign('ad_views', "<font style='color: #AAAAAA;'>---</font>"); ?>
    <?php else: ?>
      <?php $this->assign('ad_views', $this->_tpl_vars['ads'][$this->_sections['ad_loop']['index']]['ad_total_views']); ?>
    <?php endif; ?>
    <?php if ($this->_tpl_vars['ads'][$this->_sections['ad_loop']['index']]['ad_total_clicks'] == "" || $this->_tpl_vars['ads'][$this->_sections['ad_loop']['index']]['ad_total_clicks'] == 0): ?>
      <?php $this->assign('ad_clicks', "<font style='color: #AAAAAA;'>---</font>"); ?>
    <?php else: ?>
      <?php $this->assign('ad_clicks', $this->_tpl_vars['ads'][$this->_sections['ad_loop']['index']]['ad_total_clicks']); ?>
    <?php endif; ?>
    <?php if ($this->_tpl_vars['ads'][$this->_sections['ad_loop']['index']]['ad_name'] == ""): ?>
      <?php $this->assign('ad_name', "<i>".($this->_tpl_vars['admin_ads12'])."</i>"); ?>
    <?php else: ?>
      <?php $this->assign('ad_name', $this->_tpl_vars['ads'][$this->_sections['ad_loop']['index']]['ad_name']); ?>
    <?php endif; ?>
    <tr class='<?php echo smarty_function_cycle(array('values' => "1, event"), $this);?>
'>
    <td align="left" class="col-f"><?php echo $this->_tpl_vars['ads'][$this->_sections['ad_loop']['index']]['ad_id']; ?>
</td>
    <td align="left"><?php echo $this->_tpl_vars['ad_name']; ?>
</td>
    <td align="left"><?php echo $this->_tpl_vars['ads'][$this->_sections['ad_loop']['index']]['ad_status']; ?>
</td>
    <td align="left" style="width:120px !important;"><?php echo $this->_tpl_vars['ad_views']; ?>
</td>
    <td align="left" style="width:120px !important;"><?php echo $this->_tpl_vars['ad_clicks']; ?>
</td>
    <td align="left" style="width:120px !important;"><?php echo $this->_tpl_vars['ads'][$this->_sections['ad_loop']['index']]['ad_ctr']; ?>
</td>
    <td align="center" class="col-l">
      <a href='AdminAdsEdit.php?ad_id=<?php echo $this->_tpl_vars['ads'][$this->_sections['ad_loop']['index']]['ad_id']; ?>
'><?php echo $this->_tpl_vars['Admin101']; ?>
</a> |
      <?php if ($this->_tpl_vars['ads'][$this->_sections['ad_loop']['index']]['ad_paused'] == 0): ?>
         <a href='AdminAds.php?task=pause&ad_id=<?php echo $this->_tpl_vars['ads'][$this->_sections['ad_loop']['index']]['ad_id']; ?>
'><?php echo $this->_tpl_vars['Admin102']; ?>
</a> |
      <?php elseif ($this->_tpl_vars['ads'][$this->_sections['ad_loop']['index']]['ad_paused'] == 1): ?>
        [ <a href='AdminAds.php?task=unpause&ad_id=<?php echo $this->_tpl_vars['ads'][$this->_sections['ad_loop']['index']]['ad_id']; ?>
'><?php echo $this->_tpl_vars['Admin103']; ?>
</a> |
      <?php endif; ?>
       <a href='AdminAds.php?task=confirm&ad_id=<?php echo $this->_tpl_vars['ads'][$this->_sections['ad_loop']['index']]['ad_id']; ?>
'><?php echo $this->_tpl_vars['Admin104']; ?>
</a> 
    </td>
  <?php endfor; endif; ?>
  <?php if ($this->_tpl_vars['ads_total'] == 0): ?>
    <tr>
    <td colspan='6' class='stat2' align='center'>
      <?php echo $this->_tpl_vars['Admin105']; ?>

    </td>
    </tr>
  <?php endif; ?>
</table>

<table cellpadding='0' cellspacing='0' width='40%'>
<tr>
<td>
  <form action='AdminAdsAdd.php' method='post'>
  <label class="button"><input type='submit' value='<?php echo $this->_tpl_vars['Admin82']; ?>
'/></label>&nbsp;
  </form>
</td>
<?php if ($this->_tpl_vars['ads_total'] > 0): ?>
  <td align='right'>
    <form action='AdminAds.php' method='post'>
    <label class="button"><input type='submit' value='<?php echo $this->_tpl_vars['Admin83']; ?>
'/></label>
    </form>
  </td>
<?php endif; ?>
</tr>
</table>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'AdminFooter.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>