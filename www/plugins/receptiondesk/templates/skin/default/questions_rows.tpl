{if count($aQuestionList)>0}

	{foreach from=$aQuestionList item=oQuestion}

		<article class="topic">
			<header class="topic-header">
				<div class="col-md-9">
					<h2 class="topic-title word-wrap">
						<a href="{$oQuestion->getCategory()->getUrlFull()}">{$oQuestion->getCategory()->getTitle()}</a>
					</h2>
				</div>
				<div class="col-md-3">
					<p class="date">
						{date_format date=$oQuestion->getDateAdd() hours_back="12" minutes_back="60" now="60" day="day H:i" format="j F Y, H:i"}
					</p>
				</div>
				<div class="col-md-12">
					<div class="topic-info">
						{$aLang.plugin.receptiondesk.receptiondesk_admin_receptiondesk_list_name}: {if $oQuestion->getAuthorName() && !$oQuestion->getAuthorNameHide()}{$oQuestion->getAuthorName()} {else}{$aLang.plugin.receptiondesk.receptiondesk_admin_receptiondesk_list_guest} {/if}
						<span>&raquo;</span>
						{if $oQuestion->getAuthorMail() && !$oQuestion->getAuthorMailHide()}{$aLang.plugin.receptiondesk.receptiondesk_admin_receptiondesk_list_mail}: {$oQuestion->getAuthorMail()} <span>&raquo;</span>{/if}
					</div>
				</div>
			</header>
			<div class="col-md-12">
				<div class="topic-content text">{$oQuestion->getText()}</div>
			</div>
			{if $oQuestion->getAnswerText()}
				<div class="col-md-12">
					<div class="stream-comment-preview">{$oQuestion->getAnswerText()}</div>
				</div>
				<div class="col-md-12">
					<header class="topic-header">
						<div class="topic-date">{$aLang.plugin.receptiondesk.receptiondesk_question_answer_date} {date_format date=$oQuestion->getAnswerDateAdd() format="j F Y, H:i"}</div>
					</header>
				</div>
			{/if}
		</article><!-- .topic -->

	{/foreach}

	{include file='paging.tpl' aPaging=$aPaging}
{else}
	{$aLang.plugin.receptiondesk.receptiondesk_questions_list_empty}
{/if}