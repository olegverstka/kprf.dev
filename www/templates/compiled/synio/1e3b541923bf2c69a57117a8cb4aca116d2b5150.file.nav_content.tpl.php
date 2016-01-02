<?php /* Smarty version Smarty-3.1.8, created on 2016-01-02 10:27:15
         compiled from "D:\OpenServer\domains\kprf.dev\www/templates/skin/synio\nav_content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3130156877bd3c2fcb9-28264259%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1e3b541923bf2c69a57117a8cb4aca116d2b5150' => 
    array (
      0 => 'D:\\OpenServer\\domains\\kprf.dev\\www/templates/skin/synio\\nav_content.tpl',
      1 => 1363889768,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3130156877bd3c2fcb9-28264259',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'menu_content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_56877bd3c379b5_47075768',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56877bd3c379b5_47075768')) {function content_56877bd3c379b5_47075768($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['menu_content']->value){?>
	<?php echo $_smarty_tpl->getSubTemplate ("menu.".($_smarty_tpl->tpl_vars['menu_content']->value).".content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }?><?php }} ?>