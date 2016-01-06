<?php
//===============================================
class PluginSubscription_ModuleSubscription_EntitySubscription extends Entity{
//===============================================
	public function Init(){
		parent::Init();
		$this->aValidateRules[]=array('subscription_mail','email','allowEmpty'=>false,'label'=>$this->Lang_Get('plugin.subscription.subscription_block_subscription_input'),'on'=>array('subscription_mail'));
	}
//===============================================
	public function getId(){
		return $this->_getDataOne('subscription_id');
	}
	public function setId($data){
		$this->_aData['subscription_id']=$data;
	}
	public function getMail(){
		return $this->_getDataOne('subscription_mail');
	}
	public function setMail($data){
		$this->_aData['subscription_mail']=$data;
	}
	public function getSubscribeHash(){
		return $this->_getDataOne('subscription_subscribe_hash');
	}
	public function setSubscribeHash($data){
		$this->_aData['subscription_subscribe_hash']=$data;
	}
	public function getSubscribeDate(){
		return $this->_getDataOne('subscription_subscribe_date');
	}
	public function setSubscribeDate($data){
		$this->_aData['subscription_subscribe_date']=$data;
	}
	public function getUnsubscribeHash(){
		return $this->_getDataOne('subscription_unsubscribe_hash');
	}
	public function setUnsubscribeHash($data){
		$this->_aData['subscription_unsubscribe_hash']=$data;
	}
	public function getUnsubscribeDate(){
		return $this->_getDataOne('subscription_unsubscribe_date');
	}
	public function setUnsubscribeDate($data){
		$this->_aData['subscription_unsubscribe_date']=$data;
	}
//===============================================
}
?>