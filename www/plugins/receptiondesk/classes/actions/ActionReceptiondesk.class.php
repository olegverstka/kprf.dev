<?php
//===============================================================
class PluginReceptiondesk_ActionReceptiondesk extends Action{
//===============================================================
	protected $sMenuHeadItemSelect='receptiondesk';
	protected $sMenuItemSelect='receptiondesk';
	protected $sMenuSubItemSelect='receptiondesk';
	protected $oUserCurrent=null;
//===============================================================
	public function Init(){
		$this->oUserCurrent=$this->User_GetUserCurrent();
		$this->Viewer_AddMenu('receptiondesk',Plugin::GetTemplatePath(__CLASS__).'menu.receptiondesk.tpl');
		$this->Viewer_Assign('sReceptiondeskTemplatePath',Plugin::GetTemplatePath(__CLASS__));
		$this->Viewer_AddHtmlTitle($this->Lang_Get('plugin.receptiondesk.receptiondesk_receptiondesk'));
	}
//===============================================================
	protected function RegisterEvent(){
		$this->AddEventPreg('/^category$/i','/^[\w\-\_]+$/i','/^(page([1-9]\d{0,5}))?$/i','EventReceptiondeskCategoryIndex');
		$this->AddEventPreg('/^(page([1-9]\d{0,5}))?$/i','EventReceptiondeskIndex');
		$this->AddEvent('create','EventReceptiondeskAdd');
	}
//===============================================================
	protected function EventReceptiondeskCategoryIndex(){
		if(!$oCategory=$this->PluginReceptiondesk_Category_GetCategoryByUrl($this->GetParamEventMatch(0,0))) return parent::EventNotFound();
		$iPage=$this->GetParamEventMatch(1,2) ? $this->GetParamEventMatch(1,2) : 1;
		if($iPage==1) $this->Viewer_SetHtmlCanonical(Router::GetPath('receptiondesk'));
		$aResult=$this->PluginReceptiondesk_Question_GetQuestionList($iPage,Config::Get('plugin.receptiondesk.receptiondesk_question_per_page'),1,$oCategory->getId());
		$aPaging=$this->Viewer_MakePaging($aResult['count'],$iPage,Config::Get('plugin.receptiondesk.receptiondesk_question_per_page'),Config::Get('pagination.pages.count'),Router::GetPath('receptiondesk').$oCategory->getUrl().'/');
		$this->Viewer_Assign('oCurrentCategory',$oCategory);
		$this->Viewer_Assign('aQuestionList',$aResult['collection']);
		$this->Viewer_Assign('aPaging',$aPaging);
		if(Config::Get('plugin.receptiondesk.receptiondesk_create_popup')) $this->Viewer_Assign('bPopup',true);
		$this->SetTemplateAction('index');
	}
//===============================================================
	protected function EventReceptiondeskIndex(){
		$iPage=$this->GetEventMatch(2) ? $this->GetEventMatch(2) : 1;
		if($iPage==1) $this->Viewer_SetHtmlCanonical(Router::GetPath('receptiondesk'));
		$aResult=$this->PluginReceptiondesk_Question_GetQuestionList($iPage,Config::Get('plugin.receptiondesk.receptiondesk_question_per_page'),1);
		$aPaging=$this->Viewer_MakePaging($aResult['count'],$iPage,Config::Get('plugin.receptiondesk.receptiondesk_question_per_page'),Config::Get('pagination.pages.count'),Router::GetPath('receptiondesk'));
		$this->Viewer_Assign('aQuestionList',$aResult['collection']);
		$this->Viewer_Assign('aPaging',$aPaging);
		if(Config::Get('plugin.receptiondesk.receptiondesk_create_popup')) $this->Viewer_Assign('bPopup',true);
		$this->SetTemplateAction('index');
	}
//===============================================================
	protected function EventReceptiondeskAdd(){
		$this->Lang_AddLangJs(array('topic_photoset_photo_delete','topic_photoset_mark_as_preview','topic_photoset_photo_delete_confirm','topic_photoset_is_preview','topic_photoset_upload_choose','plugin.receptiondesk.receptiondesk_admin_question_create_author_files_remove','plugin.receptiondesk.receptiondesk_admin_question_create_author_files_remove_confirm',));
		$this->Viewer_AddHtmlTitle($this->Lang_Get('plugin.receptiondesk.receptiondesk_admin_question_create_title'));
		$this->sMenuItemSelect='receptiondesk_create';
		if(empty($_COOKIE['ls_receptiondesk_file_target_tmp'])){
			setcookie('ls_receptiondesk_file_target_tmp',func_generator(),time()+24*3600,Config::Get('sys.cookie.path'),Config::Get('sys.cookie.host'));
		}else{
			setcookie('ls_receptiondesk_file_target_tmp',$_COOKIE['ls_receptiondesk_file_target_tmp'],time()+24*3600,Config::Get('sys.cookie.path'),Config::Get('sys.cookie.host'));
			$this->Viewer_Assign('aQuestionFiles',$this->PluginReceptiondesk_Tools_getFilesByTargetTmp($_COOKIE['ls_receptiondesk_file_target_tmp']));
		}
		$this->SetTemplateAction('create');
	}
//===============================================================
	public function EventShutdown(){
		$this->Viewer_Assign('sMenuHeadItemSelect',$this->sMenuHeadItemSelect);
		$this->Viewer_Assign('sMenuItemSelect',$this->sMenuItemSelect);
		$this->Viewer_Assign('sMenuSubItemSelect',$this->sMenuSubItemSelect);
		$this->Viewer_Assign('iCountQuestionNew',$this->PluginReceptiondesk_Question_GetCountNewQuestionList(0));
		$this->Viewer_Assign('aCategories',$this->PluginReceptiondesk_Category_GetCategories());
	}
//===============================================================
}
?>