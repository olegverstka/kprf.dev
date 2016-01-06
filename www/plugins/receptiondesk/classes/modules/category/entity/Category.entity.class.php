<?php
//===============================================================
class PluginReceptiondesk_ModuleCategory_EntityCategory extends Entity{
//===============================================================
	public function Init() {
		parent::Init();
		$this->aValidateRules[]=array('category_title','string','max'=>200,'min'=>2,'allowEmpty'=>false,'label'=>$this->Lang_Get('plugin.receptiondesk.receptiondesk_admin_categories_create_title_title'),'on'=>array('receptiondesk_category'));
		$this->aValidateRules[]=array('category_description','string','max'=>200,'min'=>2,'allowEmpty'=>false,'label'=>$this->Lang_Get('plugin.receptiondesk.receptiondesk_admin_categories_create_description_title'),'on'=>array('receptiondesk_category'));
		$this->aValidateRules[]=array('category_title','category_title_exists','on'=>array('receptiondesk_category'));
		$this->aValidateRules[]=array('category_url','category_url_exists','on'=>array('receptiondesk_category'));
	}
//===============================================================
	public function ValidateCategoryTitleExists($sValue,$aParams){
		if($oCategory=$this->PluginReceptiondesk_Category_GetCategoryByTitle($sValue)){
			if($this->getId() && $oCategory->getId()==$this->getId()) return true;
			return $this->Lang_Get('plugin.receptiondesk.receptiondesk_admin_categories_create_title_error_exist');
		}
		return true;
	}
//===============================================================
	public function ValidateCategoryUrlExists($sValue,$aParams){
		if($oCategory=$this->PluginReceptiondesk_Category_GetCategoryByUrl($sValue)){
			if($this->getId() && $oCategory->getId()==$this->getId()) return true;
			return $this->Lang_Get('plugin.receptiondesk.receptiondesk_admin_categories_create_url_error_exist');
		}
		return true;
	}
//===============================================================
	public function getId(){
		return $this->_getDataOne('category_id');
	}
	public function setId($data){
		$this->_aData['category_id']=$data;
	}
	public function getTitle(){
		return $this->_getDataOne('category_title');
	}
	public function setTitle($data){
		$this->_aData['category_title']=$data;
	}
	public function getUrl(){
		return $this->_getDataOne('category_url');
	}
	public function getUrlFull(){
		return Router::GetPath('receptiondesk').'category/'.$this->getUrl().'/';
	}
	public function setUrl($data){
		$this->_aData['category_url']=$data;
	}
	public function getDescription(){
		return $this->_getDataOne('category_description');
	}
	public function setDescription($data){
		$this->_aData['category_description']=$data;
	}
	public function getCountQuestion(){
		return $this->_getDataOne('category_count_question');
	}
	public function setCountQuestion($data){
		$this->_aData['category_count_question']=$data;
	}
//===============================================================
}
?>