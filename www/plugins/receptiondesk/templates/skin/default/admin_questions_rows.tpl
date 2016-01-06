{if count($aQuestionList)>0}

	{foreach from=$aQuestionList item=oQuestion}

		<article class="topic topic-type-photoset js-topic">
		<header class="topic-header">
			<a href="{router page='admin'}receptiondesk/question/{$oQuestion->getId()}.html" class="button button-primary fl-r">{$aLang.plugin.receptiondesk.receptiondesk_admin_receptiondesk_list_answer}</a>
			<h2 class="topic-title word-wrap"> 
				#{$oQuestion->getId()} <span>&raquo;</span> 
				<a href="{router page='admin'}receptiondesk/category/{$oQuestion->getCategory()->getUrl()}/">{$oQuestion->getCategory()->getTitle()}</a> <span>&raquo;</span> 
				{date_format date=$oQuestion->getDateAdd() hours_back="12" minutes_back="60" now="60" day="day H:i" format="j F Y, H:i"}
			{if $oQuestion->getTextHide()}
				<i class="icon-synio-topic-draft js-tip-help" title="{$aLang.plugin.receptiondesk.receptiondesk_admin_answer_create_text_hide_notice}"></i>
			{/if}
			</h2>
			<div class="topic-info">
				{$aLang.plugin.receptiondesk.receptiondesk_admin_receptiondesk_list_name}: {if $oQuestion->getAuthorName()}{$oQuestion->getAuthorName()} {else}{$aLang.plugin.receptiondesk.receptiondesk_admin_receptiondesk_list_guest} {/if}
				<span>&raquo;</span>
				{if $oQuestion->getAuthorMail()}{$aLang.plugin.receptiondesk.receptiondesk_admin_receptiondesk_list_mail}: {$oQuestion->getAuthorMail()}{if $oQuestion->getAuthorMailHide()} <span>({$aLang.plugin.receptiondesk.receptiondesk_admin_receptiondesk_list_hide})</span>{/if} <span>&raquo;</span>{/if}
				{$aLang.plugin.receptiondesk.receptiondesk_admin_receptiondesk_list_ip}: {$oQuestion->getUserIp()}
				<span>&raquo;</span>
				<a href="{router page='admin'}receptiondesk/question/edit/{$oQuestion->getId()}.html"><i class="icon-edit" title="{$aLang.plugin.receptiondesk.receptiondesk_admin_question_edit_title}"></i></a>
				<a href="#" onclick="ls.receptiondesk.removeQuestion({$oQuestion->getId()});return false;"><i class="icon-remove" title="{$aLang.plugin.receptiondesk.receptiondesk_admin_question_remove_title}"></i></a>
			</div>
		</header>

		<div class="topic-content text">
			{$oQuestion->getText()}
		</div>

	{if $oQuestion->getAnswerText()}
		<header class="topic-header">
			<div class="topic-info">
				{$aLang.plugin.receptiondesk.receptiondesk_admin_answer_create_date} {date_format date=$oQuestion->getAnswerDateAdd() format="j F Y, H:i"}
			</div>
		</header>
		<div class="stream-comment-preview">
			{$oQuestion->getAnswerText()}
		</div>
		<hr>
	{/if}

		<div class="topic-photo-images">
			<ul id="topic-photo-images">
			{foreach from=$oQuestion->getFiles() item=oFile}
				<li><a class="receptiondesk_file_image" href="{$oFile->getWebPath(1000)}" rel="[photoset]"  title="{$oFile->getName()}"><img src="{$oFile->getWebPath('100crop')}" alt="{$oFile->getName()}" /></a></li>                                    
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

	{/foreach}

	{include file='paging.tpl' aPaging=$aPaging}
{else}
	{$aLang.plugin.receptiondesk.receptiondesk_questions_list_empty}
{/if}