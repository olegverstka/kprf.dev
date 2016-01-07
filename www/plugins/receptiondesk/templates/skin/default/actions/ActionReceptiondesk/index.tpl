{assign var="noSidebar" value=true}
{include file='header.tpl' menu='receptiondesk'}

<div class="col-md-12">
	<h1 class="page-header">{$aLang.plugin.receptiondesk.receptiondesk_receptiondesk}</h1>
</div>

<div class="modal modal-receptiondesk-category" id="window_receptiondesk_question">

	<header class="modal-header">
		<h3>{$aLang.plugin.receptiondesk.receptiondesk_admin_question_create_title}</h3>
		<a href="#" class="close jqmClose"></a>
	</header>

	<div class="modal-content">
		<form method="POST" enctype="multipart/form-data" id="form_receptiondesk_question" onsubmit="return false;" >

		{if $bPopup}
			<input type="hidden" name="question_popup" id="question_popup" value="popup" />
		{/if}

			<p><small class="note">{$aLang.plugin.receptiondesk.receptiondesk_admin_question_create_author_title}</small></p>

			<p><select name="question_category_id" id="receptiondesk_question_category_id" class="input-width-full js-ajax-validate">
				<option value="0">{$aLang.plugin.receptiondesk.receptiondesk_admin_question_create_category_select}</option>
			{foreach from=$aCategories item=oCategory}
				<option value="{$oCategory->getId()}">{$oCategory->getTitle()|escape:'html'}</option>
			{/foreach}
			</select>
			<small class="note">{$aLang.plugin.receptiondesk.receptiondesk_admin_question_create_category_notice}</small>
			<small class="validate-error-hide validate-error-field-question_category_id"></small></p>

			<p><textarea name="question_text" id="receptiondesk_question_text" placeholder="{$aLang.plugin.receptiondesk.receptiondesk_admin_question_create_text_title}" class="input-text input-width-full js-ajax-validate" rows="10"></textarea>
			<small class="note fl-r"><input type="checkbox" id="receptiondesk_question_text_hide" name="question_text_hide" class="input-checkbox" value="1" />{$aLang.plugin.receptiondesk.receptiondesk_admin_question_create_text_hide_title}</small>
			<small class="note">{$aLang.plugin.receptiondesk.receptiondesk_admin_question_create_text_notice}</small>
			<small class="validate-error-hide validate-error-field-question_text"></small></p>

			<p><input type="text" name="question_author_mail" id="receptiondesk_question_author_mail" placeholder="{$aLang.plugin.receptiondesk.receptiondesk_admin_question_create_author_mail_title}" class="input-text input-width-full js-ajax-validate">
			<small class="note fl-r"><input type="checkbox" id="receptiondesk_question_author_mail_hide" name="question_author_mail_hide" class="input-checkbox" value="1" />{$aLang.plugin.receptiondesk.receptiondesk_admin_question_create_author_mail_hide_title}</small>
			<small class="note">{$aLang.plugin.receptiondesk.receptiondesk_admin_question_create_author_mail_notice}</small>
			<small class="validate-error-hide validate-error-field-question_author_mail"></small></p>

			<p><small class="note">{$aLang.plugin.receptiondesk.receptiondesk_admin_question_create_author_notice}</small></p>

			<p><input type="text" name="question_author_name" id="receptiondesk_question_author_name" placeholder="{$aLang.plugin.receptiondesk.receptiondesk_admin_question_create_author_name_title}" class="input-text input-width-full">
			<small class="note fl-r"><input type="checkbox" id="receptiondesk_question_author_name_hide" name="question_author_name_hide" class="input-checkbox" value="1" />{$aLang.plugin.receptiondesk.receptiondesk_admin_question_create_author_name_hide_title}</small>
			<small class="note">{$aLang.plugin.receptiondesk.receptiondesk_admin_question_create_author_name_notice}</small>
			<small class="validate-error-hide validate-error-field-question_author_name"></small></p>

			<p><input type="text" name="question_author_address" id="receptiondesk_question_author_address" placeholder="{$aLang.plugin.receptiondesk.receptiondesk_admin_question_create_author_address_title}" class="input-text input-width-full">
			<small class="note fl-r"><input type="checkbox" id="receptiondesk_question_author_address_hide" name="question_author_address_hide" class="input-checkbox" value="1" />{$aLang.plugin.receptiondesk.receptiondesk_admin_question_create_author_address_hide_title}</small>
			<small class="note">{$aLang.plugin.receptiondesk.receptiondesk_admin_question_create_author_address_notice}</small>
			<small class="validate-error-hide validate-error-field-question_author_address"></small></p>

			<p><input type="text" name="question_author_phone" id="receptiondesk_question_author_phone" placeholder="{$aLang.plugin.receptiondesk.receptiondesk_admin_question_create_author_phone_title}" class="input-text input-width-full">
			<small class="note fl-r"><input type="checkbox" id="receptiondesk_question_author_phone_hide" name="question_author_phone_hide" class="input-checkbox" value="1" />{$aLang.plugin.receptiondesk.receptiondesk_admin_question_create_author_phone_hide_title}</small>
			<small class="note">{$aLang.plugin.receptiondesk.receptiondesk_admin_question_create_author_phone_notice}</small>
			<small class="validate-error-hide validate-error-field-question_author_phone"></small></p>

			<p><label for="question_captcha">{$aLang.plugin.receptiondesk.receptiondesk_admin_question_create_author_captcha_title}</label>
			<img src="{cfg name='path.root.engine_lib'}/external/kcaptcha/index.php?{$_sPhpSessionName}={$_sPhpSessionId}" onclick="this.src='{cfg name='path.root.engine_lib'}/external/kcaptcha/index.php?{$_sPhpSessionName}={$_sPhpSessionId}&n='+Math.random();" class="captcha-image" />
			<input type="text" name="question_captcha" id="question_captcha" value="" maxlength="3" class="input-text input-width-100 js-ajax-validate" />
			<small class="note">{$aLang.plugin.receptiondesk.receptiondesk_admin_question_create_author_captcha_notice}</small>
			<small class="validate-error-hide validate-error-field-question_captcha"></small></p>

			<p><a href="{router page='receptiondesk'}create/" class="button button-primary fl-r">{$aLang.plugin.receptiondesk.receptiondesk_admin_question_create_fullform}</a>
			<button type="submit" class="button button-primary" id="submit_category" onclick="ls.receptiondesk.setQuestion();">{$aLang.plugin.receptiondesk.receptiondesk_admin_question_create_submit}</button>
			<button type="submit" class="button jqmClose">{$aLang.plugin.receptiondesk.receptiondesk_admin_question_create_cancel}</button></p>

		</form>
	</div>
</div>

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

<div class="col-md-12">
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
</div>
<div class="col-md-12">
	<h2 class="page-header">{$aLang.plugin.receptiondesk.receptiondesk_answers_list}{if $oCurrentCategory} {$aLang.plugin.receptiondesk.receptiondesk_answers_list_category|ls_lang:"CATEGORY%%`$oCurrentCategory->getTitle()`"}{/if}</h2>	
</div>
		</main>
	</div>
</div>
<div class="wrap-messege">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<select class="select" name="category_id" id="category_id" class="input-width-full" onChange="ls.receptiondesk.redirectCategory(jQuery(this).val());">
					<option value="0">{$aLang.plugin.receptiondesk.receptiondesk_answers_list_category_all}</option>
					{foreach from=$aCategories item=oCategory}
					<option value="{$oCategory->getId()}" {if $oCurrentCategory && $oCurrentCategory->getId()==$oCategory->getId()}selected{/if}>{$oCategory->getTitle()|escape:'html'}</option>
					{/foreach}
				</select>
			</div>
		</div>
	</div>
</div><!-- .wrap-messege -->
<div class="container">
	<div class="row">
		<main class="content clearfix">
			<div class="wrapper-content">
				{include file="{$sReceptiondeskTemplatePath}questions_rows.tpl"}
			</div>

{include file='footer.tpl'}