<?php
//===============================================================
class PluginReceptiondesk_HookReceptiondesk extends Hook{
//===============================================================
	public function RegisterHook(){
		$this->AddHook('template_main_menu_item','inj_main_menu_item',__CLASS__);
		$this->AddHook('template_admin_action','inj_admin_action',__CLASS__);
	}
//===============================================================
	public function inj_main_menu_item(){
		return $this->Viewer_Fetch(Plugin::GetTemplatePath(__CLASS__).'inj_main_menu_item.tpl');
	}
//===============================================================
	public function inj_admin_action(){
		return $this->Viewer_Fetch(Plugin::GetTemplatePath(__CLASS__).'inj_admin_action.tpl');
	}
//===============================================================
}
?>