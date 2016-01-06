<?php
//===============================================================
class PluginSubscription_ModuleSubscription extends Module{
//===============================================================
	protected $oMapper;
//===============================================================
	public function Init(){
		$this->oMapper=Engine::GetMapper(__CLASS__);
	}
//===============================================================
	public function AddSubscription(PluginSubscription_ModuleSubscription_EntitySubscription $oSubscription){
		if($sSubscriptionId=$this->oMapper->AddSubscription($oSubscription)){
			$oSubscription->setId($sSubscriptionId);
			return $oSubscription;
		}
		return false;
	}
//===============================================================
	public function UpdateSubscription(PluginSubscription_ModuleSubscription_EntitySubscription $oSubscription){
		return $this->oMapper->UpdateSubscription($oSubscription);
	}
//===============================================================
	public function GetSubscriptionByMail($sMail,$sSubscriptionHash=null,$sUnsubscriptionHash=null){
		return $this->oMapper->GetSubscriptionByMail($sMail,$sSubscriptionHash,$sUnsubscriptionHash);
	}
//===============================================================
	public function GetSubscriptionMails(){
		return $this->oMapper->GetSubscriptionMails();
	}
//===============================================================
	public function SendSubscriptionNotify(ModuleTopic_EntityTopic $oTopic){
		$oTopic=$this->Topic_GetTopicById($oTopic->getId());
		$aSubscriptionMails=$this->GetSubscriptionMails();
		foreach($aSubscriptionMails as $sMail) 
			$this->Notify_Send(
				$sMail,
				'notify.news_new_topic.tpl',
				$this->Lang_Get('plugin.subscription.subscription_news_message_subject'),
				array('oTopic'=>$oTopic,),
				'subscription'
			);
	}
//===============================================================
}
?>