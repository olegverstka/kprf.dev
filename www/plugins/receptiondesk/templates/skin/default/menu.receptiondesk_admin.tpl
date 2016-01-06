<ul class="nav nav-menu">
	<li {if $sMenuItemSelect=='receptiondesk'}class="active"{/if}>
		<a href="{router page='admin'}receptiondesk/">{$aLang.plugin.receptiondesk.receptiondesk_admin_title}</a>
	</li>
	<li {if $sMenuItemSelect=='receptiondesk_categories'}class="active"{/if}>
		<a href="{router page='admin'}receptiondesk/categories/">{$aLang.plugin.receptiondesk.receptiondesk_admin_categories_title}</a>
	</li>
</ul>