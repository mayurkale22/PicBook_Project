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

    <div class="grey-head"><h2>{$Application757}</h2></div>
    <div class="row-blue">
        <p class="blue">{$Application758}</p>
    </div>

  	    <div class="block-bot"><span></span></div>
</div>
<div id="sidebar">
    {include file='MenuSidebar.tpl'}
</div>



{include file='Footer.tpl'}