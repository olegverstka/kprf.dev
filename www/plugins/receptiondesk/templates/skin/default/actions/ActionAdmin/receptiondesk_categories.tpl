{assign var="noSidebar" value=true}
{include file='header.tpl' menu="receptiondesk_admin"}

<h2 class="page-header"><a href="{router page='admin'}">{$aLang.admin_header}</a> <span>&raquo;</span> {$aLang.plugin.receptiondesk.receptiondesk_admin_categories_title}</h2>

<a href="#" id="open_form_receptiondesk_categories" class="button button-primary fl-r" onclick="ls.receptiondesk.openCreateForm('categories');">{$aLang.plugin.receptiondesk.receptiondesk_admin_categories_create_title}</a>

<div class="modal modal-receptiondesk-category" id="window_receptiondesk_categories_remove">

	<header class="modal-header">
		<h3>{$aLang.plugin.receptiondesk.receptiondesk_admin_categories_remove_title}</h3>
		<a href="#" class="close jqmClose"></a>
	</header>

	<form method="POST" enctype="multipart/form-data" id="form_receptiondesk_categories_remove" onsubmit="return false;" class="modal-content">

		<input type="hidden" name="category_id" id="receptiondesk_category_remove_id" value="" />

		<p><label for="receptiondesk_category_remove">{$aLang.plugin.receptiondesk.receptiondesk_admin_categories_remove_questions}:</label>
		<select name="category_remove" id="receptiondesk_category_remove" class="input-width-full"></select></p>

		<button type="submit" class="button button-primary" id="submit_categories_remove" onclick="ls.receptiondesk.removeCategory();">{$aLang.plugin.receptiondesk.receptiondesk_admin_categories_remove_submit}</button>

	</form>

</div>

<div class="modal modal-receptiondesk-category" id="window_receptiondesk_categories">

	<header class="modal-header">
		<h3>{$aLang.plugin.receptiondesk.receptiondesk_admin_categories_create_title}</h3>
		<a href="#" class="close jqmClose"></a>
	</header>

	<div class="modal-content">
		<form method="POST" enctype="multipart/form-data" id="form_receptiondesk_categories" onsubmit="return false;" >

			<input type="hidden" name="category_id" id="receptiondesk_category_id" value="" />

			<p><input type="text" name="category_title" id="receptiondesk_category_title" placeholder="{$aLang.plugin.receptiondesk.receptiondesk_admin_categories_create_title_title}" class="input-text input-width-full js-ajax-validate">
			<small class="note">{$aLang.plugin.receptiondesk.receptiondesk_admin_categories_create_title_notice}</small>
			<small class="validate-error-hide validate-error-field-category_title"></small></p>

			<p><input type="text" name="category_url" id="receptiondesk_category_url" placeholder="{$aLang.plugin.receptiondesk.receptiondesk_admin_categories_create_url_title}" class="input-text input-width-full js-ajax-validate">
			<small class="note">{$aLang.plugin.receptiondesk.receptiondesk_admin_categories_create_url_notice}</small>
			<small class="validate-error-hide validate-error-field-category_url"></small></p>

			<p><label for="category_description">{$aLang.plugin.receptiondesk.receptiondesk_admin_categories_create_description_title}</label>
			<textarea name="category_description" id="receptiondesk_category_description" class="input-text input-width-full js-ajax-validate" rows="5"></textarea>
			<small class="note">{$aLang.plugin.receptiondesk.receptiondesk_admin_categories_create_description_notice|ls_lang:"MAX%%`$oConfig->get('plugin.receptiondesk.receptiondesk_category_description_max_length')`"}</small>
			<small class="validate-error-hide validate-error-field-category_description"></small></p>

			<button type="submit" class="button button-primary" id="submit_category" onclick="ls.receptiondesk.setCategory();">{$aLang.plugin.receptiondesk.receptiondesk_admin_categories_create_submit}</button>
			<button type="submit" class="button jqmClose">{$aLang.plugin.receptiondesk.receptiondesk_admin_categories_create_cancel}</button>

		</form>
	</div>
</div>


<div id="blogs-list-original">
	<table class="table table-blogs" cellspacing="0">
		<thead>
			<tr>
				<th class="cell-name cell-tab"><div class="cell-tab-inner"><span>{$aLang.blogs_title}</span></div></th>
				<th class="cell-action cell-tab"></th>
				<th class="cell-action cell-tab"></th>
			</tr>
		</thead>
		<tbody id="receptiondesk_categories">
			{include file="{$sReceptiondeskTemplatePath}admin_categories_rows.tpl"}
		</tbody>
	</table>
</div>
{include file='footer.tpl'}