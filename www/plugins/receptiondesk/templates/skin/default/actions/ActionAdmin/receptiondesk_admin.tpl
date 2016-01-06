{assign var="noSidebar" value=true}
{include file='header.tpl' menu="receptiondesk_admin"}

<h2 class="page-header"><a href="{router page='admin'}">{$aLang.admin_header}</a> <span>&raquo;</span> {if $oCurrentCategory}{$oCurrentCategory->getTitle()|escape:'html'} <span>&raquo;</span> {/if}{$aLang.plugin.receptiondesk.receptiondesk_admin_receptiondesk_title}</h2>

<ul class="nav nav-pills mb-30">
	<li {if $sMenuSubItemSelect=='receptiondesk_new'}class="active"{/if}>
		<a href="{router page='admin'}receptiondesk/">{$aLang.plugin.receptiondesk.receptiondesk_admin_receptiondesk_list_new} {if $iCountQuestionNew>0}+ {$iCountQuestionNew}{/if}</a>
	</li>
	<li {if $sMenuSubItemSelect=='receptiondesk_history'}class="active"{/if}>
		<a href="{router page='admin'}receptiondesk/history/">{$aLang.plugin.receptiondesk.receptiondesk_admin_receptiondesk_list_history}</a>
	</li>
	<li {if $sMenuSubItemSelect=='receptiondesk_answered'}class="active"{/if}>
		<a href="{router page='admin'}receptiondesk/answered/">{$aLang.plugin.receptiondesk.receptiondesk_admin_receptiondesk_list_answered}</a>
	</li>
</ul>

{if $sType}
	{assign var="sFullUrl" value="receptiondesk/{$sType}/"}
{else}
	{assign var="sFullUrl" value="receptiondesk/"}
{/if}

<ul class="nav nav-pills mb-30">
	<li {if !$oCurrentCategory}class="active"{/if}>
		<a href="{router page='admin'}{$sFullUrl}">{$aLang.plugin.receptiondesk.receptiondesk_answers_list_category_all}</a>
	</li>
{foreach from=$aCategories item=oCategory}
	<li {if $oCurrentCategory && $oCurrentCategory->getId()==$oCategory->getId()}class="active"{/if}>
		<a href="{router page='admin'}{$sFullUrl}category/{$oCategory->getUrl()}/">{$oCategory->getTitle()|escape:'html'}</a>
	</li>
{/foreach}
</ul>

<script type="text/javascript" src="{cfg name='path.root.engine_lib'}/external/prettyPhoto/js/prettyPhoto.js"></script>	
<link rel='stylesheet' type='text/css' href="{cfg name='path.root.engine_lib'}/external/prettyPhoto/css/prettyPhoto.css" />
<script type="text/javascript">
	jQuery(document).ready(function($) {	
		$('.receptiondesk_file_image').prettyPhoto({
			social_tools:'',
			show_title: false,
			slideshow:false,
			deeplinking: false
		});
	});
</script>

{include file="{$sReceptiondeskTemplatePath}admin_questions_rows.tpl"}

{include file='footer.tpl'}