<?php /* Smarty version Smarty-3.1.8, created on 2015-06-10 17:40:33
         compiled from "/home/vxeeuesn/public_html/_sokol/templates/skin/synio/toolbar_topic.tpl" */ ?>
<?php /*%%SmartyHeaderCode:81291511555784c61354385-54305528%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e22fe858f2f7d73758ecc150b43e7d8b3c72786' => 
    array (
      0 => '/home/vxeeuesn/public_html/_sokol/templates/skin/synio/toolbar_topic.tpl',
      1 => 1424273455,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '81291511555784c61354385-54305528',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'params' => 0,
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55784c6135d0f5_97139330',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55784c6135d0f5_97139330')) {function content_55784c6135d0f5_97139330($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['params']->value['iCountTopic']){?>
	<section class="toolbar-topic" id="" style="">
		<a href="#" onclick="return ls.toolbar.topic.goPrev();" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['toolbar_topic_prev'];?>
" class="toolbar-topic-prev"><i></i></a>
		<a href="#" onclick="return ls.toolbar.topic.goNext();" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['toolbar_topic_next'];?>
" class="toolbar-topic-next"><i></i></a>
	</section>
<?php }?>

	
<?php }} ?>