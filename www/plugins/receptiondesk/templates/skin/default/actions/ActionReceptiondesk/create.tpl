{assign var="noSidebar" value=true}
{include file='header.tpl' menu='receptiondesk'}

<script type="text/javascript">
	jQuery(document).ready(function($){
		$('#form_receptiondesk_question').bind('submit',function(){
			ls.receptiondesk.setQuestion();
			return false;
		});
		if(jQuery.browser.flash && 1!=1){
			ls.receptiondesk.initSwfUpload({
				post_params: { }
			});
		}
	});
</script>

<form method="POST" enctype="multipart/form-data" id="receptiondesk-file-upload-form" onsubmit="return false;" class="modal modal-receptiondesk-category">

	<header class="modal-header">
		<h3>{$aLang.plugin.receptiondesk.receptiondesk_admin_question_create_author_files_upload_title}</h3>
		<a href="#" class="close jqmClose"></a>
	</header>

	<div id="topic-photo-upload-input" class="topic-photo-upload-input modal-content">

		<label for="receptiondesk-upload-file">{$aLang.plugin.receptiondesk.receptiondesk_admin_question_create_author_files_choose_file}:</label>
		<input type="file" id="receptiondesk-upload-file" name="Filedata" /><br><br>
		<input type="hidden" name="is_iframe" value="true" />
		<button type="submit" class="button button-primary" onclick="ls.receptiondesk.uploadFile();">{$aLang.plugin.receptiondesk.receptiondesk_admin_question_create_author_files_choose}</button>
		<button type="submit" class="button" onclick="ls.receptiondesk.closeUploadForm();">{$aLang.plugin.receptiondesk.receptiondesk_admin_question_create_author_files_close}</button>

	</div>

</form>

<h1 class="page-header">{$aLang.plugin.receptiondesk.receptiondesk_receptiondesk}</h1>

<div class="wrapper-content">
	<div class="blog">
		<h3>{$aLang.plugin.receptiondesk.receptiondesk_receptiondesk_title}</h3>
		<p>
			<ul class="system-message-notice receptiondesk-question-notice">
				<li>
					<strong>{$aLang.plugin.receptiondesk.receptiondesk_admin_question_create_ok_title}</strong>
					{$aLang.plugin.receptiondesk.receptiondesk_admin_question_create_ok_notice}
				</li>
			</ul>
		</p>
		<p>{$aLang.plugin.receptiondesk.receptiondesk_receptiondesk_text}</p>
		<p>
			{foreach from=$aCategories item=oCategory}
			 - {$oCategory->getTitle()|escape:'html'}<br />
			{/foreach}
		</p>
	</div>
</div>

<br />
<h1 class="page-header">{$aLang.plugin.receptiondesk.receptiondesk_admin_question_create_title}</h1>

{if $oConfig->GetValue('plugin.receptiondesk.receptiondesk_create_editor') && !$oConfig->GetValue('view.tinymce')}
	{include file='editor.tpl' sImgToLoad='question_text' sSettingsMarkitup='ls.settings.getMarkitupReceptiondesk()' sSettingsTinymce='ls.settings.getMarkitupReceptiondesk()'}
{/if}

<form method="POST" enctype="multipart/form-data" id="form_receptiondesk_question" class="wrapper-content" onsubmit="return false;">

	<input type="hidden" name="security_ls_key" value="{$LIVESTREET_SECURITY_KEY}" />

	<p>
		<small class="note">{$aLang.plugin.receptiondesk.receptiondesk_admin_question_create_author_title}</small>
	</p>

	<p>
		<label for="question_category_id">{$aLang.plugin.receptiondesk.receptiondesk_admin_question_create_category_title}</label>
		<select name="question_category_id" id="question_category_id" class="input-width-full js-ajax-validate">
			<option value="0">{$aLang.plugin.receptiondesk.receptiondesk_admin_question_create_category_select}</option>
		{foreach from=$aCategories item=oCategory}
			<option value="{$oCategory->getId()}" {if $_aRequest.question_category_id==$oCategory->getId()}selected{/if}>{$oCategory->getTitle()|escape:'html'}</option>
		{/foreach}
		</select>
		<small class="note">{$aLang.plugin.receptiondesk.receptiondesk_admin_question_create_category_notice}</small>
		<small class="validate-error-hide validate-error-field-question_category_id"></small>
	</p>

	<p>
		<label for="question_text">{$aLang.plugin.receptiondesk.receptiondesk_admin_question_create_text_title}</label>
		<textarea name="question_text" id="receptiondesk_question_text" class="{if $oConfig->GetValue('plugin.receptiondesk.receptiondesk_create_editor') && !$oConfig->GetValue('view.tinymce')}mce-editor markitup-editor question-text{/if} input-text input-width-full js-ajax-validate" rows="10">{$_aRequest.question_text}</textarea>
		<small class="note input-width-500 fl-r"><input type="checkbox" id="receptiondesk_question_text_hide" name="question_text_hide" class="input-checkbox" value="1" />{$aLang.plugin.receptiondesk.receptiondesk_admin_question_create_text_hide_title}</small>
		<small class="note">{$aLang.plugin.receptiondesk.receptiondesk_admin_question_create_text_notice}</small>
		<small class="validate-error-hide validate-error-field-question_text"></small>
		<small class="validate-error-hide validate-error-field-question_text_hash"></small>
	</p>

	<p>
		<label for="receptiondesk_file_upload">{$aLang.plugin.receptiondesk.receptiondesk_admin_question_create_author_files_title}</label>
		<a href="#" id="receptiondesk_file_upload" class="button button-primary fl-r">{$aLang.plugin.receptiondesk.receptiondesk_admin_question_create_author_files_choose}</a>
		<div id="receptiondesk_file_list">
		{foreach from=$aQuestionFiles item=oFile}
			{include file="{$sReceptiondeskTemplatePath}admin_files_row.tpl"}
		{/foreach}
		</div>
		<small class="note">{$aLang.plugin.receptiondesk.receptiondesk_admin_question_create_author_files_notice}</small>
	</p>

	<p>
		<input type="text" name="question_author_mail" id="receptiondesk_question_author_mail" class="input-text input-width-500 fl-r js-ajax-validate">
		<label for="question_author_mail">{$aLang.plugin.receptiondesk.receptiondesk_admin_question_create_author_mail_title}</label>
		<small class="note input-width-500 fl-r"><input type="checkbox" id="receptiondesk_question_author_mail_hide" name="question_author_mail_hide" class="input-checkbox" value="1" />{$aLang.plugin.receptiondesk.receptiondesk_admin_question_create_author_mail_hide_title}</small>
		<small class="note">{$aLang.plugin.receptiondesk.receptiondesk_admin_question_create_author_mail_notice}</small>
		<small class="validate-error-hide validate-error-field-question_author_mail"></small>
	</p>

	<p>
		<small class="note">{$aLang.plugin.receptiondesk.receptiondesk_admin_question_create_author_notice}</small>
	</p>

	<p>
		<input type="text" name="question_author_name" id="receptiondesk_question_author_name" class="input-text input-width-500 fl-r">
		<label for="question_author_name">{$aLang.plugin.receptiondesk.receptiondesk_admin_question_create_author_name_title}</label>
		<small class="note input-width-500 fl-r"><input type="checkbox" id="receptiondesk_question_author_name_hide" name="question_author_name_hide" class="input-checkbox" value="1" />{$aLang.plugin.receptiondesk.receptiondesk_admin_question_create_author_name_hide_title}</small>
		<small class="note">{$aLang.plugin.receptiondesk.receptiondesk_admin_question_create_author_name_notice}</small>
		<small class="validate-error-hide validate-error-field-question_author_name"></small>
	</p>

	<p>
		<input type="text" name="question_author_address" id="receptiondesk_question_author_address" class="input-text input-width-500 fl-r">
		<label for="question_author_address">{$aLang.plugin.receptiondesk.receptiondesk_admin_question_create_author_address_title}</label>
		<small class="note input-width-500 fl-r"><input type="checkbox" id="receptiondesk_question_author_address_hide" name="question_author_address_hide" class="input-checkbox" value="1" />{$aLang.plugin.receptiondesk.receptiondesk_admin_question_create_author_address_hide_title}</small>
		<small class="note">{$aLang.plugin.receptiondesk.receptiondesk_admin_question_create_author_address_notice}</small>
		<small class="validate-error-hide validate-error-field-question_author_address"></small>
	</p>

	<p>
		<input type="text" name="question_author_phone" id="receptiondesk_question_author_phone" class="input-text input-width-500 fl-r">
		<label for="question_author_phone">{$aLang.plugin.receptiondesk.receptiondesk_admin_question_create_author_phone_title}</label>
		<small class="note input-width-500 fl-r"><input type="checkbox" id="receptiondesk_question_author_phone_hide" name="question_author_phone_hide" class="input-checkbox" value="1" />{$aLang.plugin.receptiondesk.receptiondesk_admin_question_create_author_phone_hide_title}</small>
		<small class="note">{$aLang.plugin.receptiondesk.receptiondesk_admin_question_create_author_phone_notice}</small>
		<small class="validate-error-hide validate-error-field-question_author_phone"></small>
	</p>

	<p><label for="question_captcha">{$aLang.plugin.receptiondesk.receptiondesk_admin_question_create_author_captcha_title}</label>
	<img src="{cfg name='path.root.engine_lib'}/external/kcaptcha/index.php?{$_sPhpSessionName}={$_sPhpSessionId}" onclick="this.src='{cfg name='path.root.engine_lib'}/external/kcaptcha/index.php?{$_sPhpSessionName}={$_sPhpSessionId}&n='+Math.random();" class="captcha-image" />
	<button type="submit" class="button button-primary fl-r" id="submit_category" onclick="ls.receptiondesk.setQuestion();">{$aLang.plugin.receptiondesk.receptiondesk_admin_question_create_submit}</button>
	<input type="text" name="question_captcha" id="question_captcha" value="" maxlength="3" class="input-text input-width-300 js-ajax-validate" />
	<small class="note">{$aLang.plugin.receptiondesk.receptiondesk_admin_question_create_author_captcha_notice}</small>
	<small class="validate-error-hide validate-error-field-question_captcha"></small></p>

</form>

{include file='footer.tpl'}