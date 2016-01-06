<?php
//===============================================================
class PluginSubscription_ModuleSubscription_MapperSubscription extends Mapper{
//===============================================================
	public function AddSubscription(PluginSubscription_ModuleSubscription_EntitySubscription $oSubscription){
		$sql="INSERT INTO ".Config::Get('db.table.subscription_mail')." (subscription_mail,subscription_subscribe_hash,subscription_subscribe_date,subscription_unsubscribe_hash,subscription_unsubscribe_date) VALUES(?,?,?,?,?);";
		if($iSubscriptionId=$this->oDb->query($sql,$oSubscription->getMail(),$oSubscription->getSubscribeHash(),$oSubscription->getSubscribeDate(),$oSubscription->getUnsubscribeHash(),$oSubscription->getUnsubscribeDate())) return $iSubscriptionId;
		return false;
	}
//===============================================================
	public function UpdateSubscription(PluginSubscription_ModuleSubscription_EntitySubscription $oSubscription){
		$sql="UPDATE ".Config::Get('db.table.subscription_mail')." SET subscription_subscribe_date=?,subscription_unsubscribe_hash=?,subscription_unsubscribe_date=? WHERE subscription_mail=?;";
		if($this->oDb->query($sql,$oSubscription->getSubscribeDate(),$oSubscription->getUnsubscribeHash(),$oSubscription->getUnsubscribeDate(),$oSubscription->getMail())!==false) return true;
		return false;
	}
//==============================================================================
	public function GetSubscriptionByMail($sMail,$sSubscriptionHash,$sUnsubscriptionHash){
		$sql="SELECT * FROM ".Config::Get('db.table.subscription_mail')." WHERE subscription_mail=? { AND subscription_subscribe_hash=? } { AND subscription_unsubscribe_hash=? } AND subscription_unsubscribe_date IS NULL LIMIT 0,1;";
		if($aRow=$this->oDb->selectRow($sql,$sMail,!is_null($sSubscriptionHash)?$sSubscriptionHash:DBSIMPLE_SKIP,!is_null($sUnsubscriptionHash)?$sUnsubscriptionHash:DBSIMPLE_SKIP)) return Engine::GetEntity('PluginSubscription_ModuleSubscription_EntitySubscription',$aRow);
		return false;     
	}
//==============================================================================
	public function GetSubscriptionMails(){
		$sql="SELECT subscription_mail FROM ".Config::Get('db.table.subscription_mail')." WHERE subscription_unsubscribe_date IS NULL;";
		$aMails=array();
		if($aRows=$this->oDb->select($sql)) foreach($aRows as $aRow) $aMails[]=$aRow['subscription_mail'];
		return $aMails;     
	}
//===============================================================
}
?>