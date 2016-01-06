		<option value="-1">{$aLang.plugin.receptiondesk.receptiondesk_admin_categories_remove_questions_all}</option>
{if $aCategories}
	<optgroup label="{$aLang.plugin.receptiondesk.receptiondesk_admin_categories_remove_questions_categories}">
	{foreach from=$aCategories item=oCategory}
		<option value="{$oCategory->getId()}">{$oCategory->getTitle()|escape:'html'}</option>
	{/foreach}
	</optgroup>
{/if}