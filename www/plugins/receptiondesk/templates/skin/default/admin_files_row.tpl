<dl class="form-item" id="receptiondesk_question_file_{$oFile->getId()}">
	<dd>{$oFile->getName()|truncate:25:'...'}</dd>
	<dt>{$oFile->getFullSize()}</dt>
	<a href="#" onclick="ls.receptiondesk.removeFile({$oFile->getId()});return false;">
		<i class="icon-remove" title="{$aLang.plugin.receptiondesk.receptiondesk_admin_question_create_author_files_remove}"></i>
	</a>
</dl>