<?php
//===============================================================
class PluginSubscription_HookSubscription extends Hook{
//===============================================================
	public function RegisterHook(){
		$this->AddHook('topic_add_after','SubscriptionTopicAddAfter',__CLASS__);
	}
//===============================================================
	public function SubscriptionTopicAddAfter($aVars){
		if($aVars['oBlog']->getId()==1){
			$this->PluginSubscription_Subscription_SendSubscriptionNotify($aVars['oTopic']);
		}
	}
//===============================================================
}
?>
