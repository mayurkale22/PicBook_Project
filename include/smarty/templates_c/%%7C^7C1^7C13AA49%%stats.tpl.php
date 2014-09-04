<?php /* Smarty version 2.6.14, created on 2013-11-16 17:41:29
         compiled from stats.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'Header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
 
 <?php echo '
		<script type="text/javascript" src="pie/jquery.min.js"></script>
		<script src="pie/highcharts.js"></script>
		<script src="pie/exporting.js"></script>';?>
<div id="content">
    <?php echo '
    <style type="text/css">
        .submit_button{
            background:transparent url(../images/link-btn.gif) no-repeat scroll 0 0;
            color:#FFFFFF;
            display:block;
            font-weight:bold;
            height:23px;
            line-height:23px;
            margin-top:10px;
            text-align:center;
            width:129px;
            text-decoration:none;
            margin-left:25px;
        }
    </style>
    '; ?>

    <?php echo '
    <script language="javascript">
        <!--
        function showhide(id1) {
            if(document.getElementById(id1).style.display==\'none\') {
                document.getElementById(id1).style.display=\'block\';
            } else {
                document.getElementById(id1).style.display=\'none\';
            }
        }
        // -->
    </script>
    '; ?>


    <div class="grey-head"><h2><?php echo $this->_tpl_vars['Application757']; ?>
</h2></div>
    <div class="row-blue">
        <p class="blue"><?php echo $this->_tpl_vars['Application758']; ?>
</p>
    </div>

<script type="text/javascript">
						$(function () {
								
								// Radialize the colors
								Highcharts.getOptions().colors = Highcharts.map(Highcharts.getOptions().colors, function(color) {
									return {
										radialGradient: { cx: 0.5, cy: 0.3, r: 0.7 },
										stops: [
											[0, color],
											[1, Highcharts.Color(color).brighten(-0.3).get('rgb')] // darken
										]
									};
								});
								
								// Build the chart
								$('#container12').highcharts({
									chart: {
										plotBackgroundColor: null,
										plotBorderWidth: null,
										plotShadow: false
									},
									title: {
										text: ''
									},
									tooltip: {
										pointFormat: '{series.name}: <b>{point.percentage:0.1f}%</b>'
									},
									plotOptions: {
										pie: {
											allowPointSelect: true,
											cursor: 'pointer',
											dataLabels: {
												enabled: true,
												color: '#000000',
												connectorColor: '#000000',
												formatter: function() {
													return '<b>'+ this.point.name +'</b>: '+ this.percentage.toFixed(2) +' %';
												}
											}
										}
									},
									series: [{
										type: 'pie',
										name: 'Image',
										data: [
										<?php for($i = 0; $i < count($this->_tpl_vars['boards']); ++$i) {
											echo "['".$this->_tpl_vars['boards'][$i]."',".$this->_tpl_vars['boardsdata'][$i]."],";}
 										?>
										]
									}]
								});
							});
							
						
								</script>
						<div id="container12" style="min-width: 200px; height: 350px; margin: 0 auto"></div>
						<center>
						<div class="CSSTableGenerator" >
						<table >
						  <tr>
							<td><b>Board Name</b></td>
							<td><b>Image Count</b></td>
						  </tr>
						<?php for($i = 0; $i < count($this->_tpl_vars['boards']); ++$i) {?>
							<tr>
							<td><?php echo $this->_tpl_vars['boards'][$i];?></td>
							<td><?php echo $this->_tpl_vars['boardsdata'][$i];?></td>
						    </tr>
						<?php }?>
						
						</table></div>	</center>

   
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