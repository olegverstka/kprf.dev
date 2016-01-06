<?php
//===============================================================
class PluginSubscription_ActionSubscription extends ActionPlugin{
//===============================================================
	protected $sMenuHeadItemSelect='subscription';
	protected $sMenuItemSelect='subscription';
	protected $sMenuSubItemSelect='subscription';
	protected $oUserCurrent=null;
//===============================================================
	public function Init(){
		if($this->oUserCurrent=$this->User_GetUserCurrent()) return parent::EventNotFound();
	}
//===============================================================
	protected function RegisterEvent(){
		$this->AddEventPreg('/^news$/i','/^subscribe$/i','/^.+$/i','EventSubscriptionNewsSubscribe');
		$this->AddEventPreg('/^news$/i','/^unsubscribe$/i','/^.+$/i','EventSubscriptionNewsUnsubscribe');
	}
//===============================================================
	protected function EventSubscriptionNewsSubscribe(){
		if(!$sString=$this->GetParamEventMatch(1,0)) return parent::EventNotFound();
		$sString=str_replace(array('{','}'),array('/','+'),$sString);
		$sHash=substr($sString,0,10);
		require_once Config::Get('path.root.engine').'/lib/external/XXTEA/encrypt.php';
		$sMail=xxtea_decrypt(base64_decode(substr($sString,10)),$sHash);
		if(!$oSubscription=$this->PluginSubscription_Subscription_GetSubscriptionByMail($sMail,$sHash)) return parent::EventNotFound();
		$oSubscription->setUnsubscribeHash(func_generator());
		$oSubscription->setSubscribeDate(date("Y-m-d H:i:s"));
		if(!$this->PluginSubscription_Subscription_UpdateSubscription($oSubscription)) return parent::EventNotFound();
		$this->SetTemplateAction('news_subscribe');
	}
//===============================================================
	protected function EventSubscriptionNewsUnsubscribe(){
		if(!$sString=$this->GetParamEventMatch(1,0)) return parent::EventNotFound();
		$sString=str_replace(array('{','}'),array('/','+'),$sString);
		$sHash=substr($sString,0,10);
		require_once Config::Get('path.root.engine').'/lib/external/XXTEA/encrypt.php';
		$sMail=xxtea_decrypt(base64_decode(substr($sString,10)),$sHash);
		if(!$oSubscription=$this->PluginSubscription_Subscription_GetSubscriptionByMail($sMail,null,$sHash)) return parent::EventNotFound();
		$oSubscription->setUnsubscribeDate(date("Y-m-d H:i:s"));
		if(!$this->PluginSubscription_Subscription_UpdateSubscription($oSubscription)) return parent::EventNotFound();
		$this->SetTemplateAction('news_unsubscribe');
	}
//===============================================================
	public function EventShutdown(){
		$this->Viewer_Assign('sMenuHeadItemSelect',$this->sMenuHeadItemSelect);
		$this->Viewer_Assign('sMenuItemSelect',$this->sMenuItemSelect);
		$this->Viewer_Assign('sMenuSubItemSelect',$this->sMenuSubItemSelect);
	}
//===============================================================
}
?>