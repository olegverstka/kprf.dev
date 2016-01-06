{if $aCategories}
	{foreach from=$aCategories item=oCategory}
	<tr>
		<td class="cell-name">
			<p>
				<a href="{$oCategory->getUrlFull()}" class="blog-name">{$oCategory->getTitle()|escape:'html'}</a>
			</p>
		</td>
		<td class="cell-action">
			<a href="#" onclick="ls.receptiondesk.openEditForm({$oCategory->getId()});">
				<i class="icon-edit" title="{$aLang.plugin.receptiondesk.receptiondesk_admin_categories_edit_title}"></i>
			</a>
		</td>
		<td class="cell-action">
			<a href="#" onclick="ls.receptiondesk.openRemoveForm({$oCategory->getId()});">
				<i class="icon-remove" title="{$aLang.plugin.receptiondesk.receptiondesk_admin_categories_remove_title}"></i>
			</a>
		</td>
	</tr>
	{/foreach}
{else}
	<tr>
		<td class="cell-name" colspan="3">
			<p>{$aLang.plugin.receptiondesk.receptiondesk_admin_categories_empty_title}</p>
		</td>
	</tr>
{/if}