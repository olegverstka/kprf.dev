{assign var="noSidebar" value=true}
{include file='header.tpl' noShowSystemMessage=true}

<div class="content-error">
	<h2 class="page-header"><span>{$aLang.plugin.subscription.subscription_page_unsubscription_title}</span></h2>
	<p>{$aLang.plugin.subscription.subscription_page_unsubscription_notice}</p>
	<br />
	<br />
	<p><a href="{cfg name='path.root.web'}">{$aLang.site_go_main}</a></p>
</div>

{include file='footer.tpl'}