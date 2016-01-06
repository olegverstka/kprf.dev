<?php
//===============================================================
class PluginReceptiondesk_ModuleQuestion_EntityQuestion extends Entity{
//===============================================================
	protected $aExtra=null;
//===============================================================
	public function Init(){
		parent::Init();
		$this->aValidateRules[]=array('question_category_id','question_category_id','on'=>array('receptiondesk_question','receptiondesk_question_edit'));
		$this->aValidateRules[]=array('question_text','string','max'=>Config::Get('plugin.receptiondesk.receptiondesk_question_text_max_length'),'min'=>2,'allowEmpty'=>false,'label'=>$this->Lang_Get('plugin.receptiondesk.receptiondesk_admin_question_create_text_title'),'on'=>array('receptiondesk_question','receptiondesk_question_edit'));
		$this->aValidateRules[]=array('question_text_hash','question_text_hash','on'=>array('receptiondesk_question'));
		$this->aValidateRules[]=array('question_author_mail','email','allowEmpty'=>Config::Get('plugin.receptiondesk.receptiondesk_create_mail_empty'),'label'=>$this->Lang_Get('plugin.receptiondesk.receptiondesk_admin_question_create_author_mail_title'),'on'=>array('receptiondesk_question'));
		$this->aValidateRules[]=array('question_captcha','captcha','label'=>$this->Lang_Get('plugin.receptiondesk.receptiondesk_admin_question_create_author_captcha_title'),'on'=>array('receptiondesk_question'));
		$this->aValidateRules[]=array('answer_text','string','min'=>2,'allowEmpty'=>true,'label'=>$this->Lang_Get('plugin.receptiondesk.receptiondesk_admin_answer_create_text_title'),'on'=>array('receptiondesk_question'));
	}
//===============================================================
	public function ValidateQuestionCategoryId($sValue,$aParams){
		if($oCategory=$this->PluginReceptiondesk_Category_GetCategoryById($sValue)) return true;
		return $this->Lang_Get('plugin.receptiondesk.receptiondesk_admin_question_create_category_error_exist');
	}
//===============================================================
	public function ValidateQuestionTextHash($sValue,$aParams){
		if($this->PluginReceptiondesk_Question_GetQuestionUnique($sValue,$this->getUserIp())) return $this->Lang_Get('plugin.receptiondesk.receptiondesk_admin_question_create_error_unique');
		return true;
	}
//===============================================================
	public function getId(){
		return $this->_getDataOne('question_id');
	}
	public function setId($data){
		$this->_aData['question_id']=$data;
	}
	public function getCategoryId(){
		return $this->_getDataOne('question_category_id');
	}
	public function setCategoryId($data){
		$this->_aData['question_category_id']=$data;
	}
	public function getCategory(){
		if(!$this->_getDataOne('question_category')) $this->_aData['question_category']=$this->PluginReceptiondesk_Category_GetCategoryById($this->getUserId());
		return $this->_getDataOne('question_category');
	}
	public function setCategory($data){
		$this->_aData['question_category']=$data;
	}
	public function getDateAdd(){
		return $this->_getDataOne('question_date_add');
	}
	public function setDateAdd($data){
		$this->_aData['question_date_add']=$data;
	}
	public function getDateEdit(){
		return $this->_getDataOne('question_date_edit');
	}
	public function setDateEdit($data){
		$this->_aData['question_date_edit']=$data;
	}
	public function getAnswerDateAdd(){
		return $this->_getDataOne('answer_date_add');
	}
	public function setAnswerDateAdd($data){
		$this->_aData['answer_date_add']=$data;
	}
	public function getUserIp(){
		return $this->_getDataOne('question_user_ip');
	}
	public function setUserIp($data){
		$this->_aData['question_user_ip']=$data;
	}
	public function getPublish(){
		return $this->_getDataOne('question_publish');
	}
	public function setPublish($data){
		$this->_aData['question_publish']=$data;
	}
	public function getText(){
		return $this->_getDataOne('question_text');
	}
	public function setText($data){
		$this->_aData['question_text']=$data;
	}
	public function getTextSource(){
		return $this->_getDataOne('question_text_source');
	}
	public function setTextSource($data){
		$this->_aData['question_text_source']=$data;
	}
	public function getAnswerText(){
		return $this->_getDataOne('answer_text');
	}
	public function setAnswerText($data){
		$this->_aData['answer_text']=$data;
	}
	public function getAnswerTextSource(){
		return $this->_getDataOne('answer_text_source');
	}
	public function setAnswerTextSource($data){
		$this->_aData['answer_text_source']=$data;
	}
	public function getTextHash(){
		return $this->_getDataOne('question_text_hash');
	}
	public function setTextHash($data){
		$this->_aData['question_text_hash']=$data;
	}
	public function getCaptcha(){
		return $this->_getDataOne('question_captcha');
	}
	public function setCaptcha($data){
		$this->_aData['question_captcha']=$data;
	}
	public function getExtra(){
		return $this->_getDataOne('question_extra') ? $this->_getDataOne('question_extra') : serialize('');
	}
	public function getFiles(){
		return $this->PluginReceptiondesk_Tools_GetFiles($this->getId());
	}
	public function setExtra($data){
		$this->_aData['question_extra']=serialize($data);
	}
	protected function extractExtra(){
		if(is_null($this->aExtra)) $this->aExtra=@unserialize($this->getExtra());
	}
	protected function setExtraValue($sName,$data){
		$this->extractExtra();
		$this->aExtra[$sName]=$data;
		$this->setExtra($this->aExtra);
	}
	protected function getExtraValue($sName){
		$this->extractExtra();
		if(isset($this->aExtra[$sName])) return $this->aExtra[$sName];
		return null;
	}
	public function getTextHide(){
		return $this->getExtraValue('question_text_hide');
	}
	public function setTextHide($data){
		$this->setExtraValue('question_text_hide',$data);
	}
	public function getAuthorValidMail(){
		return $this->_getDataOne('question_author_mail');
	}
	public function setAuthorValidMail($data){
		$this->_aData['question_author_mail']=$data;
	}
	public function getAuthorMail(){
		return $this->getExtraValue('question_author_mail');
	}
	public function setAuthorMail($data){
		$this->setExtraValue('question_author_mail',$data);
	}
	public function getAuthorMailHide(){
		return $this->getExtraValue('question_author_mail_hide');
	}
	public function setAuthorMailHide($data){
		$this->setExtraValue('question_author_mail_hide',$data);
	}
	public function getAuthorAddress(){
		return $this->getExtraValue('question_author_address');
	}
	public function setAuthorAddress($data){
		$this->setExtraValue('question_author_address',$data);
	}
	public function getAuthorAddressHide(){
		return $this->getExtraValue('question_author_address_hide');
	}
	public function setAuthorAddressHide($data){
		$this->setExtraValue('question_author_address_hide',$data);
	}
	public function getAuthorName(){
		return $this->getExtraValue('question_author_name');
	}
	public function setAuthorName($data){
		$this->setExtraValue('question_author_name',$data);
	}
	public function getAuthorNameHide(){
		return $this->getExtraValue('question_author_name_hide');
	}
	public function setAuthorNameHide($data){
		$this->setExtraValue('question_author_name_hide',$data);
	}
	public function getAuthorPhone(){
		return $this->getExtraValue('question_author_phone');
	}
	public function setAuthorPhone($data){
		$this->setExtraValue('question_author_phone',$data);
	}
	public function getAuthorPhoneHide(){
		return $this->getExtraValue('question_author_phone_hide');
	}
	public function setAuthorPhoneHide($data){
		$this->setExtraValue('question_author_phone_hide',$data);
	}
//===============================================================
}
?>