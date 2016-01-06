{assign var="noSidebar" value=true}
{include file='header.tpl' menu="receptiondesk_admin"}

<h2 class="page-header"><a href="{router page='admin'}">{$aLang.admin_header}</a> <span>&raquo;</span> <a href="{router page='admin'}receptiondesk/">{$aLang.plugin.receptiondesk.receptiondesk_admin_receptiondesk_title}</a></h2>

<article class="topic topic-type-photoset js-topic">
	<header class="topic-header">
		<h2 class="topic-title word-wrap"> #{$oQuestion->getCategory()->getTitle()} <span>&raquo;</span> {date_format date=$oQuestion->getDateAdd() hours_back="12" minutes_back="60" now="60" day="day H:i" format="j F Y, H:i"}</h2>
		<div class="topic-info">
			{$aLang.plugin.receptiondesk.receptiondesk_admin_receptiondesk_list_name}: {if $oQuestion->getAuthorName()}{$oQuestion->getAuthorName()} {else}{$aLang.plugin.receptiondesk.receptiondesk_admin_receptiondesk_list_guest} {/if}
			<span>&raquo;</span>
			{if $oQuestion->getAuthorMail()}{$aLang.plugin.receptiondesk.receptiondesk_admin_receptiondesk_list_mail}: {$oQuestion->getAuthorMail()} <span>&raquo;</span>{/if}
			{$aLang.plugin.receptiondesk.receptiondesk_admin_receptiondesk_list_ip}: {$oQuestion->getUserIp()}
			<span>&raquo;</span>
			<a href="{router page='admin'}receptiondesk/question/edit/{$oQuestion->getId()}.html"><i class="icon-edit" title="{$aLang.plugin.receptiondesk.receptiondesk_admin_question_edit_title}"></i></a>
			<a href="#" onclick="ls.receptiondesk.removeQuestion({$oQuestion->getId()});return false;"><i class="icon-remove" title="{$aLang.plugin.receptiondesk.receptiondesk_admin_question_remove_title}"></i></a>
		</div>
	</header>

	<div class="topic-content text">
		{$oQuestion->getText()}
	</div>

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
			<li>
				<a class="receptiondesk_file_image" href="{$oFile->getWebPath(1000)}" rel="[photoset]"  title="{$oFile->getName()}">
					<img src="{$oFile->getWebPath('100crop')}" alt="{$oFile->getName()}" />
				</a>
			</li>                                    
		{/foreach}
		</ul>
	</div>

	<footer class="topic-footer">
		<ul class="topic-tags">
			<li>{if $oQuestion->getAuthorName()}<span>&raquo;</span> {$aLang.plugin.receptiondesk.receptiondesk_admin_receptiondesk_list_name}: {$oQuestion->getAuthorName()}{if $oQuestion->getAuthorNameHide()} <span>({$aLang.plugin.receptiondesk.receptiondesk_admin_receptiondesk_list_hide})</span>{/if}</br >{/if}</li>
			<li>{if $oQuestion->getAuthorAddress()}<span>&raquo;</span> {$aLang.plugin.receptiondesk.receptiondesk_admin_receptiondesk_list_address}: {$oQuestion->getAuthorAddress()}{if $oQuestion->getAuthorAddressHide()} <span>({$aLang.plugin.receptiondesk.receptiondesk_admin_receptiondesk_list_hide})</span>{/if}</br >{/if}</li>
			<li>{if $oQuestion->getAuthorPhone()}<span>&raquo;</span> {$aLang.plugin.receptiondesk.receptiondesk_admin_receptiondesk_list_phone}: {$oQuestion->getAuthorPhone()}{if $oQuestion->getAuthorPhoneHide()} <span>({$aLang.plugin.receptiondesk.receptiondesk_admin_receptiondesk_list_hide})</span>{/if}</br >{/if}</li>
		</ul>
	</footer>
</article>

<h2 class="page-header">{$aLang.plugin.receptiondesk.receptiondesk_admin_answer_create_title}</h2>

{if $oQuestion->getTextHide()}
<p><ul class="system-message-error">
	<li>
		<strong>{$aLang.plugin.receptiondesk.receptiondesk_admin_answer_create_text_hide_title}</strong>
		{$aLang.plugin.receptiondesk.receptiondesk_admin_answer_create_text_hide_notice}
	</li>
</ul></p>
{/if}

{if $oConfig->GetValue('plugin.receptiondesk.receptiondesk_create_answer_editor') && !$oConfig->GetValue('view.tinymce')}
	{include file='editor.tpl' sImgToLoad='question_text' sSettingsMarkitup='ls.settings.getMarkitupReceptiondeskAnswer()' sSettingsTinymce='ls.settings.getMarkitupReceptiondeskAnswer()'}
{/if}

<form method="POST" enctype="multipart/form-data" id="form_receptiondesk_answer" class="wrapper-content" onsubmit="return false;">

	<input type="hidden" name="question_id" value="{$oQuestion->getid()}" />

	<p><label for="answer_text">{$aLang.plugin.receptiondesk.receptiondesk_admin_answer_create_text_title}</label>
	<textarea name="answer_text" id="receptiondesk_answer_text" class="{if $oConfig->GetValue('plugin.receptiondesk.receptiondesk_create_answer_editor') && !$oConfig->GetValue('view.tinymce')}mce-editor markitup-editor question-text{/if} input-text input-width-full js-ajax-validate" rows="10">{$oQuestion->getAnswerTextSource()}</textarea></p>

	<p><button type="submit" class="button button-primary fl-r" id="submit_answer" onclick="ls.receptiondesk.setAnswer();">{$aLang.plugin.receptiondesk.receptiondesk_admin_answer_create_submit}</button>
		<small class="note"><input type="checkbox" id="receptiondesk_question_publish" name="question_publish" class="input-checkbox" value="1" {if $oQuestion->getPublish()}checked{/if} />{$aLang.plugin.receptiondesk.receptiondesk_admin_answer_create_publish}</small>
	{if $oQuestion->getAuthorMail()}
		<small class="note"><input type="checkbox" id="receptiondesk_answer_mail_send" name="answer_mail_send" class="input-checkbox" value="1" />{$aLang.plugin.receptiondesk.receptiondesk_admin_answer_create_send_mail} ({$oQuestion->getAuthorMail()})</small>
	{/if}</p>

</form>

{include file='footer.tpl'}