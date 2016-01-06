<?php /* Smarty version Smarty-3.1.8, created on 2016-01-04 18:10:14
         compiled from "D:\OpenServer\domains\kprf.dev\www/templates/skin/synio\nav_content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28279568a8b56735d07-80472834%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1e3b541923bf2c69a57117a8cb4aca116d2b5150' => 
    array (
      0 => 'D:\\OpenServer\\domains\\kprf.dev\\www/templates/skin/synio\\nav_content.tpl',
      1 => 1424273456,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28279568a8b56735d07-80472834',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'menu_content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_568a8b56739b99_69299432',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_568a8b56739b99_69299432')) {function content_568a8b56739b99_69299432($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['menu_content']->value){?>
	<?php echo $_smarty_tpl->getSubTemplate ("menu.".($_smarty_tpl->tpl_vars['menu_content']->value).".content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }?><?php }} ?>