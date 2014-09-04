{include file='Header.tpl'}
<div id="content">
    {literal}
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
    {/literal}
    {literal}
    <script language="javascript">
        <!--
        function showhide(id1) {
            if(document.getElementById(id1).style.display=='none') {
                document.getElementById(id1).style.display='block';
            } else {
                document.getElementById(id1).style.display='none';
            }
        }
        // -->
    </script>
    {/literal}
    {literal}

	<!-- Add jQuery library -->
	<script type="text/javascript" src="fancybox/jquery-1.10.1.min.js"></script>

	<!-- Add fancyBox main JS and CSS files -->
	<script type="text/javascript" src="fancybox/jquery.fancybox.js?v=2.1.5"></script>
	<link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox.css?v=2.1.5" media="screen" />

	<script type="text/javascript">
		$(document).ready(function() {
			$('.fancybox').fancybox();});
	</script>
    {/literal}
	


    <div class="grey-head"><h2>{$Application15}</h2></div>
    <div class="row-blue">
        <p class="blue">
			<a class="fancybox fancybox.iframe" href="addboard.php">Create a Board</a>  |   
			<a class="fancybox fancybox.iframe" href="addimage.php">Add a Pin</a>
		</p>
    </div>

    <div class="layers">
       

        <div id="primary" class="info-cnt tuneddivs" style="padding-left:25px; color:#666666;">
            
           {$board_name}
            
        </div>
    </div>
    <div class="block-bot"><span></span></div>
</div>
<div id="sidebar">
    {include file='MenuSidebar.tpl'}
</div>



{include file='Footer.tpl'}