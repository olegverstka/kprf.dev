<?php /* Smarty version Smarty-3.1.8, created on 2015-06-10 17:48:03
         compiled from "/home/vxeeuesn/public_html/_sokol/templates/skin/synio/topic.tpl" */ ?>
<?php /*%%SmartyHeaderCode:79288946855784e231872f7-58985276%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e21e0157659e1e2af6753980f26ac87901090238' => 
    array (
      0 => '/home/vxeeuesn/public_html/_sokol/templates/skin/synio/topic.tpl',
      1 => 1424273455,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '79288946855784e231872f7-58985276',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oTopic' => 0,
    'LS' => 0,
    'sTopicTemplateName' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55784e2319abb2_96525957',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55784e2319abb2_96525957')) {function content_55784e2319abb2_96525957($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['LS']->value->Topic_IsAllowTopicType($_smarty_tpl->tpl_vars['oTopic']->value->getType())){?>
	<?php $_smarty_tpl->tpl_vars["sTopicTemplateName"] = new Smarty_variable("topic_".($_smarty_tpl->tpl_vars['oTopic']->value->getType()).".tpl", null, 0);?>
	<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['sTopicTemplateName']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }?><?php }} ?>