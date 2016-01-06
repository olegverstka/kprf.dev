{assign var="noSidebar" value=true}
{include file='header.tpl' menu="receptiondesk_admin"}

<h2 class="page-header"><a href="{router page='admin'}">{$aLang.admin_header}</a> <span>&raquo;</span> <a href="{router page='admin'}receptiondesk/">{$aLang.plugin.receptiondesk.receptiondesk_admin_receptiondesk_title}</a></h2>

{if $oConfig->GetValue('plugin.receptiondesk.receptiondesk_create_editor') && !$oConfig->GetValue('view.tinymce')}
	{include file='editor.tpl' sImgToLoad='question_text' sSettingsMarkitup='ls.settings.getMarkitupReceptiondesk()' sSettingsTinymce='ls.settings.getMarkitupReceptiondesk()'}
{/if}

<form method="POST" enctype="multipart/form-data" id="form_receptiondesk_question" class="wrapper-content" onsubmit="return false;">

	<input type="hidden" name="security_ls_key" value="{$LIVESTREET_SECURITY_KEY}" />

	<input type="hidden" name="question_id" value="{$oQuestion->getId()}" />

	<p><label for="question_category_id">{$aLang.plugin.receptiondesk.receptiondesk_admin_question_edit_category_title}</label>
	<select name="question_category_id" id="question_category_id" class="input-width-full js-ajax-validate">
		<option value="0">{$aLang.plugin.receptiondesk.receptiondesk_admin_question_edit_category_select}</option>
	{foreach from=$aCategories item=oCategory}
		<option value="{$oCategory->getId()}" {if $oQuestion->getCategoryId()==$oCategory->getId()}selected{/if}>{$oCategory->getTitle()|escape:'html'}</option>
	{/foreach}
	</select>
	<small class="note">{$aLang.plugin.receptiondesk.receptiondesk_admin_question_edit_category_notice}</small>
	<small class="validate-error-hide validate-error-field-question_category_id"></small></p>

	<p><label for="question_text">{$aLang.plugin.receptiondesk.receptiondesk_admin_question_edit_text_title}</label>
	<textarea name="question_text" id="receptiondesk_question_text" class="{if $oConfig->GetValue('plugin.receptiondesk.receptiondesk_create_editor') && !$oConfig->GetValue('view.tinymce')}mce-editor markitup-editor question-text{/if} input-text input-width-full js-ajax-validate" rows="10">{$oQuestion->getTextSource()}</textarea>
	<small class="note">{$aLang.plugin.receptiondesk.receptiondesk_admin_question_edit_text_notice}</small>
	<small class="validate-error-hide validate-error-field-question_text"></small></p>

	<button type="submit" name="question_submit" id="receptiondesk_question_submit" class="button button-primary fl-r" onclick="ls.receptiondesk.editQuestion();">{$aLang.plugin.receptiondesk.receptiondesk_admin_question_edit_submit}</button>

</form>

<div class="topic topic-type-photoset js-topic wrapper-content">
	<div class="topic-photo-images">
		<ul id="topic-photo-images">

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

		{foreach from=$oQuestion->getFiles() item=oFile}
			<li id="receptiondesk_question_file_{$oFile->getId()}">
				<a class="receptiondesk_file_image" href="{$oFile->getWebPath(1000)}" rel="[photoset]"  title="{$oFile->getName()}"><img src="{$oFile->getWebPath('100crop')}" alt="{$oFile->getName()}" /></a>
				<a href="#" onclick="ls.receptiondesk.removeFile({$oFile->getId()});return false;"><i class="icon-remove" title="{$aLang.plugin.receptiondesk.receptiondesk_admin_question_create_author_files_remove}"></i></a>
			</li>                                    
		{/foreach}
		</ul>
	</div>
</div>

{include file='footer.tpl'}