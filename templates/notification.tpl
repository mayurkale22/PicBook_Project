{include file='Header.tpl'}
<div id="content">
    {* SHOW PAGE TITLE *}
    <div class="grey-head"><h2>{$Application620}</h2></div>

    <br/><ul class="list01">

        <li {if $tab!='likes' && $tab!='follows'}class="ui-state-active ui-tabs-selected"{/if}>
            <a href='Notification.php'>Comments</a>
        </li>

        <li {if $tab=='likes'}class="ui-state-active ui-tabs-selected"{/if}>
            <a href='Notification.php?tab=likes'>likes</a>
        </li>

        <li {if $tab=='follows'}class="ui-state-active ui-tabs-selected"{/if}>
            <a href='Notification.php?tab=follows'>Follow</a>
        </li>
    </ul>

    {* SHOW MESSAGE IF NO ACTIONS*}
    {if $tab!='likes' && $tab!='follows'}
			    {section name=header_loop loop=$notication_comment}
						<div class="notification_ui">
										{$notication_comment[header_loop]}
						</div>
	   		{/section}
    {/if}
	
    {if $tab=='likes'}
			    {section name=header_loop loop=$notication_like}
						<div class="notification_ui">									
										{$notication_like[header_loop]}
						</div>
	   		{/section}
    {/if}

	
    {if $tab=='follows'}
			    {section name=header_loop loop=$notication_follow}
						<div class="notification_ui">
										{$notication_follow[header_loop]}
						</div>
	   		{/section}
    {/if}

    <div class="block-bot"><span>&nbsp;</span></div>
</div>
<div id="sidebar">
    {include file='MenuSidebar.tpl'}
</div>


{include file='Footer.tpl'}