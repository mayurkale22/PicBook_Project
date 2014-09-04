<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Strict//EN" "http://www.w3.org/TR/html4/DTD/strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>{$global_page_title}</title>
    <base href='{$baseurl}' />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<LINK REL="SHORTCUT ICON" HREF="images/sa.gif">
    <link href="templates/reset_client.css" rel="stylesheet" type="text/css" />
    <link href="templates/main_client.css" rel="stylesheet" type="text/css" />
	<link href="style/notification.css" rel="stylesheet" type="text/css" />
		
    <script type="text/javascript" src="include/js/jquery-1.3.2.min.js"></script>
	<script type="text/javascript" src="include/js/jquery-ui-1.7.2.custom.min.js"></script>
	<script src="include/js/jquery.easing.1.3.js" type="text/javascript"></script>
	<script src="include/js/jquery.kwicks-1.5.1.pack.js" type="text/javascript"></script>
    <script type="text/javascript" src="include/js/jquery.accordion.js"></script>
    <script type="text/javascript" src="include/js/main.js"></script>

	<!--[if lt IE 7]><script type="text/javascript" src="include/js/unitpngfix.js"></script><![endif]-->

    <!--[if gte IE 5.5]>
        <![if lte IE 6]>
        <iframe id="shim" src="" style="position:absolute;display:none;filter:progid:DXImageTransform.Microsoft.Chroma(Color='#ffffff');" scrolling="no" frameborder="0"></iframe>
        <iframe id="shim2" src="" style="position:absolute;display:none;filter:progid:DXImageTransform.Microsoft.Chroma(Color='#ffffff');" scrolling="no" frameborder="0"></iframe>
        <![endif]>
    <![endif]-->

    {* CODE FOR VARIOUS JAVASCRIPT-BASED FEATURES, DO NOT REMOVE *}
    <script type="text/javascript" src="include/js/tips.js"></script>
    <script type="text/javascript" src="include/js/showhide.js"></script>
    <script type="text/javascript" src="include/js/suggest.js"></script>
    <script type="text/javascript" src="include/js/status.js"></script>

    {* ASSIGN PLUGIN MENU ITEMS AND INCLUDE NECESSARY STYLE/JAVASCRIPT FILES *}
    {section name=header_loop loop=$global_plugins}
        {capture assign='pltpl1'}../plugins/{$global_plugins[header_loop]}/templates/Header{$global_plugins[header_loop]}.tpl{/capture}
        {capture assign='pltpl2'}../../{$global_plugins[header_loop]}/templates/Header{$global_plugins[header_loop]}.tpl{/capture}
        {if $location == "plugins" || $location == "pluginsfront"}
            {include file=$pltpl2}
        {else}
            {include file=$pltpl1}
        {/if}
    {/section}
    {array var="global_plugin_menu" value=''}
    
	
</head>
<body>
<div id="container">
<div id="header">

 

    <a href="Home.php" id="logo"></a>
	
	
    <ul id="nav">

	
                {* IF USER IS LOGGED IN, SHOW APPROPRIATE TOP MENU ITEMS *}
        {if $user->user_exists != 0}
         <li class="cat_item"><span> &nbsp;&nbsp;&nbsp;&nbsp;|</span><a href="UserLogout.php">{$Application8}</a></li>

        {* IF USER IS NOT LOGGED IN, SHOW APPROPRIATE TOP MENU ITEMS *}
        {else}
        <li class="cat_item"><a href="Login.php">{$Application10}</a></li>
        <li class="cat_item"><a href="Signup.php">{$Application9}</a><span>|</span></li>
        {/if}
				
			<li class="cat_item">
			<div id="menu">
			<ul>
				<li>
					<a href="#" style="padding:10px 0;">
					<img src="images/notification_images.png" style="width: 21px;" />
					{if $notication_count != 0}
					<span id="mes">{$notication_count}</span>
					{/if}
					</a>
				<ul class="sub-menu">
					<li class="egg">
					<div class="toppointer"><img src="images/notification_top.png"/></div>
						<div id="view_comments"></div>
			{if $notication_count == 0}			
						<div class="comment_ui">
							<div class="comment_text">
								<div  class="comment_actual_text" >							
										<font color="#0000FF">There has not been any recent update.</font>
								</div>
							</div>
						</div>
			{/if}									
		    {section name=header_loop loop=$notication_data}
						<div class="comment_ui">
							<div class="comment_text">
								<div  class="comment_actual_text">
									
										{$notication_data[header_loop]}
									
								</div>
							</div>
						</div>
	   		{/section}
		
					</li>
				</ul>
				</li>
			</ul>
		</div>
	</li>		
        <li class="cat_item"><a href="Notification.php">{$Application760}</a>
		</li>
		
        <li class="cat_item"><a href="Search.php">Find Friends</a><span>|</span></li>
		<li class="cat_item"><a href="profile.php?user={$username}">{$Application759} ({$username})</a><span>|</span></li>
        <li class="cat_item"><a href="Home.php">{$Application3}</a><span>|</span></li>
    </ul>
</div>

