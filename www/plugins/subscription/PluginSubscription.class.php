<?php
//===============================================================
if(!class_exists('Plugin')) die('That in the garbage?!');
//===============================================================
class PluginSubscription extends Plugin{
//===============================================================
	public function Activate(){
		$prefix=Config::Get('db.table.prefix');
		if(!$this->isTableExists($prefix.'subscription_mail')){
			$this->ExportSQLQuery("CREATE TABLE IF NOT EXISTS `{$prefix}subscription_mail` (
					`subscription_id` int(11) NOT NULL AUTO_INCREMENT,
					`subscription_mail` varchar(50) DEFAULT NULL,
					`subscription_subscribe_hash` varchar(32) NOT NULL,
					`subscription_subscribe_date` datetime DEFAULT NULL,
					`subscription_unsubscribe_hash` varchar(32) DEFAULT NULL,
					`subscription_unsubscribe_date` datetime DEFAULT NULL,
				PRIMARY KEY (`subscription_id`),
				KEY `subscription_subscribe_hash` (`subscription_subscribe_hash`),
				KEY `subscription_subscribe_date` (`subscription_subscribe_date`),
				KEY `subscription_unsubscribe_hash` (`subscription_unsubscribe_hash`),
				KEY `subscription_unsubscribe_date` (`subscription_unsubscribe_date`)
				) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;");
		}
		$this->Cache_Clean();
		return true;
	}
//===============================================================
	public function Deactivate(){
		$this->Cache_Clean();
		return true;
	}
//===============================================================
	public function Init(){
		$this->Viewer_AppendScript(Plugin::GetTemplatePath(__CLASS__)."js/scripts.js");
	}
//===============================================================
	public $aInherits=array(
		'action'=>array('ActionAjax',),
	);
//===============================================================
}
?>