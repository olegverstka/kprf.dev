<?php
//===============================================================
if(!class_exists('Plugin')) die('That in the garbage?!');
//===============================================================
class PluginReceptiondesk extends Plugin{
//===============================================================
	public function Activate(){
		return true;
	}
//===============================================================
	public function Deactivate(){
		return true;
	}
//===============================================================
	public function Init(){
		$this->Viewer_AppendScript(Plugin::GetTemplatePath(__CLASS__).'js/scripts.js');
		$this->Viewer_AppendStyle(Plugin::GetTemplatePath(__CLASS__).'css/style.css');
	}
//===============================================================
	protected $aInherits=array(
		'action'=>array('ActionAjax','ActionAdmin',),
	);
//===============================================================
}
?>