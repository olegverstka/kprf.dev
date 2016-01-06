<ul class="nav nav-menu">
	<li {if $sMenuItemSelect=='receptiondesk'}class="active"{/if}>
		<a href="{router page='receptiondesk'}">{$aLang.plugin.receptiondesk.receptiondesk_questions_list}</a>
	</li>
	<li {if $sMenuItemSelect=='receptiondesk_create'}class="active"{/if}>
		<a href="{router page='receptiondesk'}create/" class="js-question-form-show sign-in">{$aLang.plugin.receptiondesk.receptiondesk_admin_question_create_menu_title}</a>
	</li>
	<li {if $sMenuItemSelect=='index'}class="active"{/if}>
		<a href="{router page='index'}" class="js-question-form-show sign-in">{$aLang.topic_title}</a>
	</li>
{if $oUserCurrent && $oUserCurrent->isAdministrator()}
	<li>
		<a href="{router page='admin'}receptiondesk/">{$aLang.plugin.receptiondesk.receptiondesk_admin_receptiondesk_list_new} {if $iCountQuestionNew>0}+ {$iCountQuestionNew}{/if}</a>
	</li>
{/if}
</ul>