<?php
//===============================================================
class PluginSubscription_ActionAjax extends PluginSubscription_Inherit_ActionAjax{
//===============================================================
	protected function RegisterEvent(){
		parent::RegisterEvent();
		$this->AddEventPreg('/^subscription$/i','/^ajax-set-subscription$/','EventSubscriptionAjaxSetSubscription');
	}
//===============================================================
	protected function EventSubscriptionAjaxSetSubscription(){
		$this->Viewer_SetResponseAjax('json');
		require_once Config::Get('path.root.engine').'/lib/external/XXTEA/encrypt.php';
		if(!$sSubscriptionMail=getRequestStr('subscription_mail')){
			$this->Message_AddErrorSingle($this->Lang_Get('plugin.subscription.subscription_mail_error_empty'),$this->Lang_Get('error'));return;
		}
		$oSubscription=Engine::GetEntity('PluginSubscription_ModuleSubscription_EntitySubscription');
		$oSubscription->_setValidateScenario('subscription_mail');
		$oSubscription->setMail($sSubscriptionMail);
		$oSubscription->_Validate();
		if($oSubscription->_hasValidateErrors()){
			$this->Message_AddErrorSingle($oSubscription->_getValidateError());return false;
		}
		if($oSubscription=$this->PluginSubscription_Subscription_GetSubscriptionByMail($sSubscriptionMail)){
			if($oSubscription->getUnsubscribeHash()){
					$sUnsubscribeCode=$oSubscription->getUnsubscribeHash();
					$sUnsubscribeCode.=base64_encode(xxtea_encrypt($oSubscription->getMail(),$oSubscription->getUnsubscribeHash()));
					$sUnsubscribeCode=str_replace(array('/','+'),array('{','}'),$sUnsubscribeCode);
					$this->Notify_Send($oSubscription->getMail(),'notify.subscription_unsubscription.tpl',$this->Lang_Get('plugin.subscription.subscription_mail_message_subject'),array('sUnsubscribeCode'=>$sUnsubscribeCode,),'subscription');
					$this->Viewer_AssignAjax('sText',$this->Lang_Get('plugin.subscription.subscription_block_subscription_submit_unsubscrib_ok'));
			}else{
				if($oSubscription->getSubscribeDate()){
					$this->Viewer_AssignAjax('sText',$this->Lang_Get('plugin.subscription.subscription_mail_error_used'));
				}else{
					$sSubscribeCode=$oSubscription->getSubscribeHash();
					$sSubscribeCode.=base64_encode(xxtea_encrypt($oSubscription->getMail(),$oSubscription->getSubscribeHash()));
					$sSubscribeCode=str_replace(array('/','+'),array('{','}'),$sSubscribeCode);
					$this->Notify_Send($oSubscription->getMail(),'notify.subscription_subscription.tpl',$this->Lang_Get('plugin.subscription.subscription_mail_message_subject'),array('sSubscribeCode'=>$sSubscribeCode,),'subscription');
					$this->Viewer_AssignAjax('sText',$this->Lang_Get('plugin.subscription.subscription_block_subscription_submit_repeatedly_ok'));
				}
			}
		}else{
			$oSubscription=Engine::GetEntity('PluginSubscription_ModuleSubscription_EntitySubscription');
			$oSubscription->setMail($sSubscriptionMail);
			$oSubscription->setSubscribeHash(func_generator());
			if($this->PluginSubscription_Subscription_AddSubscription($oSubscription)){
				$sSubscribeCode=$oSubscription->getSubscribeHash();
				$sSubscribeCode.=base64_encode(xxtea_encrypt($oSubscription->getMail(),$oSubscription->getSubscribeHash()));
				$sSubscribeCode=str_replace(array('/','+'),array('{','}'),$sSubscribeCode);
				$this->Notify_Send($oSubscription->getMail(),'notify.subscription_subscription.tpl',$this->Lang_Get('plugin.subscription.subscription_mail_message_subject'),array('sSubscribeCode'=>$sSubscribeCode,),'subscription');
				$this->Viewer_AssignAjax('sText',$this->Lang_Get('plugin.subscription.subscription_block_subscription_submit_ok'));
			}else{
				$this->Viewer_AssignAjax('sText',$this->Lang_Get('system_error'));
			}
		}
		return true;
	}
//===============================================================
}
?>