<?php
//===============================================================

	Config::Set('router.page.subscription','PluginSubscription_ActionSubscription');

	Config::Set('db.table.subscription_mail','___db.table.prefix___subscription_mail');

	Config::Set('block.rule_subscription',array(
		'action'=>array(
			'index',
		),
		'blocks'=>array(
			'footer'=>array(
				'subscription'=>array('params'=>array('plugin'=>'subscription'),'priority'=>100),
			),
		),
		'clear'=>false,
	));

	Config::Set('plugin.subscription.subscription_blog_id',2);

//===============================================================
?>