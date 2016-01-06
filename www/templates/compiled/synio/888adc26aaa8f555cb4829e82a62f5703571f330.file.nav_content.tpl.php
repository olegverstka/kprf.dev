<?php /* Smarty version Smarty-3.1.8, created on 2015-06-10 11:38:25
         compiled from "/home/vxeeuesn/public_html/_sokol/templates/skin/synio/nav_content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5219763295577f78157ae48-26877949%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '888adc26aaa8f555cb4829e82a62f5703571f330' => 
    array (
      0 => '/home/vxeeuesn/public_html/_sokol/templates/skin/synio/nav_content.tpl',
      1 => 1424273455,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5219763295577f78157ae48-26877949',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'menu_content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5577f78157e9f0_43090913',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5577f78157e9f0_43090913')) {function content_5577f78157e9f0_43090913($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['menu_content']->value){?>
	<?php echo $_smarty_tpl->getSubTemplate ("menu.".($_smarty_tpl->tpl_vars['menu_content']->value).".content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }?><?php }} ?>