<!-- ads -->
{include file='_ads.tpl' _ads=$ads_master['footer'] _master=true}
<!-- ads -->

</div>
<!-- main wrapper -->
<!-- footer -->
<div class="push"></div>
<div class="container">
	<div class="row msfooter" style="margin-right:0;margin-left:0;">
		<div class="col-lg-3 col-md-3 col-sm-3" style="color:white;text-align:left;">
			&copy; {'Y'|date} {$system['system_title']} · <span class="text-link" data-toggle="modal" data-url="#translator" style="color:white;">{$system['language']['title']}</span>
	</div>
	<div class="col-lg-9 col-md-9 col-sm-9 col-lg-pull-2" style="color:white;text-align:center;">
		
			{if count($static_pages) > 0}
				{foreach $static_pages as $static_page}
					<a href="{$system['system_url']}/static/{$static_page['page_url']}" style="color:white;">
						{__($static_page['page_title'])}
					</a>{if !$static_page@last} · {/if}
				{/foreach}
			{/if}
			{if $system['contact_enabled']}
				 · 
				<a href="{$system['system_url']}/contacts" style="color:white;">
					{__("Contacts")}
				</a>
			{/if}
			{if $system['directory_enabled']}
				 · 
				<a href="{$system['system_url']}/directory" style="color:white;">
					{__("Directory")}
				</a>
			{/if}
			{if $system['market_enabled']}
                 · 
                <a href="{$system['system_url']}/market"style="color:white;">
                    {__("Market")}
                </a>
            {/if}
            {if $system['forums_enabled']}
                 · 
                <a href="{$system['system_url']}/forums" style="color:white;">
                    {__("Forums")}
                </a>
            {/if}
		</div>
	</div>
</div>
<!-- footer -->



<!-- Dependencies CSS [Font-Awesome|Twemoji-Awesome] -->
{if !$user->_logged_in}
	<link rel="stylesheet" href="{$system['system_url']}/includes/assets/css/font-awesome/css/all.min.css">
{/if}
<link rel="stylesheet" href="{$system['system_url']}/includes/assets/css/twemoji-awesome/twemoji-awesome.min.css">
<!-- Dependencies CSS [Font-Awesome|Twemoji-Awesome] -->

<!-- JS Files -->
{include file='_js_files.tpl'}
<!-- JS Files -->

<!-- JS Templates -->
{include file='_js_templates.tpl'}
<!-- JS Templates -->

<!-- Footer Custom JavaScript -->
{if $system['custome_js_footer']}
	<script type="text/javascript">
		{html_entity_decode($system['custome_js_footer'], ENT_QUOTES)}
	</script>
{/if}
<!-- Footer Custom JavaScript -->

<!-- Analytics Code -->
{if $system['analytics_code']}{html_entity_decode($system['analytics_code'], ENT_QUOTES)}{/if}
<!-- Analytics Code -->

{if $user->_logged_in}
	<!-- Notification -->
	<audio id="notification-sound" preload="auto">
		<source src="{$system['system_url']}/includes/assets/sounds/notification.mp3" type="audio/mpeg">
	</audio>
	<!-- Notification -->
	<!-- Chat -->
	<audio id="chat-sound" preload="auto">
		<source src="{$system['system_url']}/includes/assets/sounds/chat.mp3" type="audio/mpeg">
	</audio>
	<!-- Chat -->
	<!-- Call -->
	<audio id="voice-calling-sound" preload="auto" loop="true">
		<source src="{$system['system_url']}/includes/assets/sounds/call.mp3" type="audio/mpeg">
	</audio>
	<!-- Call -->
	<!-- Video -->
	<audio id="video_calling-sound" preload="auto" loop="true">
		<source src="{$system['system_url']}/includes/assets/sounds/video.mp3" type="audio/mpeg">
	</audio>
	<!-- Video -->
{/if}




</body>
</html>