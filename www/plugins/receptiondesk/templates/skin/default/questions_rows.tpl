{if count($aQuestionList)>0}

	{foreach from=$aQuestionList item=oQuestion}

		<article class="topic topic-type-photoset js-topic">
		<header class="topic-header">
			<h2 class="topic-title word-wrap"><a href="{$oQuestion->getCategory()->getUrlFull()}">{$oQuestion->getCategory()->getTitle()}</a> <span>&raquo;</span> {date_format date=$oQuestion->getDateAdd() hours_back="12" minutes_back="60" now="60" day="day H:i" format="j F Y, H:i"}</h2>
			<div class="topic-info">
				{$aLang.plugin.receptiondesk.receptiondesk_admin_receptiondesk_list_name}: {if $oQuestion->getAuthorName() && !$oQuestion->getAuthorNameHide()}{$oQuestion->getAuthorName()} {else}{$aLang.plugin.receptiondesk.receptiondesk_admin_receptiondesk_list_guest} {/if}
				<span>&raquo;</span>
				{if $oQuestion->getAuthorMail() && !$oQuestion->getAuthorMailHide()}{$aLang.plugin.receptiondesk.receptiondesk_admin_receptiondesk_list_mail}: {$oQuestion->getAuthorMail()} <span>&raquo;</span>{/if}<br /> 
			</div>
		</header>
		<div class="topic-content text">
			{$oQuestion->getText()}
		</div>
	{if $oQuestion->getAnswerText()}
		<header class="topic-header">
			<div class="topic-info">
				{$aLang.plugin.receptiondesk.receptiondesk_question_answer_date} {date_format date=$oQuestion->getAnswerDateAdd() format="j F Y, H:i"}
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
			{if $oQuestion->getAuthorName() && !$oQuestion->getAuthorNameHide()}
				<li><span>&raquo;</span> {$aLang.plugin.receptiondesk.receptiondesk_admin_receptiondesk_list_name}: {$oQuestion->getAuthorName()}</br ></li>
			{/if}
			{if $oQuestion->getAuthorAddress() && !$oQuestion->getAuthorAddressHide()}
				<li><span>&raquo;</span> {$aLang.plugin.receptiondesk.receptiondesk_admin_receptiondesk_list_address}: {$oQuestion->getAuthorAddress()}</br ></li>
			{/if}
			{if $oQuestion->getAuthorPhone() && !$oQuestion->getAuthorPhoneHide()}
				<li><span>&raquo;</span> {$aLang.plugin.receptiondesk.receptiondesk_admin_receptiondesk_list_phone}: {$oQuestion->getAuthorPhone()}</br ></li>
			{/if}
			</ul>
		</footer>
		</article>

	{/foreach}

	{include file='paging.tpl' aPaging=$aPaging}
{else}
	{$aLang.plugin.receptiondesk.receptiondesk_questions_list_empty}
{/if}