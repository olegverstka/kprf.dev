<?php /* Smarty version Smarty-3.1.8, created on 2016-01-02 10:27:15
         compiled from "D:\OpenServer\domains\kprf.dev\www/templates/skin/synio\toolbar_admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:855056877bd3d70206-82282359%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ea216eca15bfe4adddd06be73722ef1fa8022b5b' => 
    array (
      0 => 'D:\\OpenServer\\domains\\kprf.dev\\www/templates/skin/synio\\toolbar_admin.tpl',
      1 => 1363889768,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '855056877bd3d70206-82282359',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oUserCurrent' => 0,
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_56877bd3d7fc05_22069555',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56877bd3d7fc05_22069555')) {function content_56877bd3d7fc05_22069555($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include 'D:\\OpenServer\\domains\\kprf.dev\\www/engine/modules/viewer/plugs\\function.router.php';
?><?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value&&$_smarty_tpl->tpl_vars['oUserCurrent']->value->isAdministrator()){?>
<section class="toolbar-admin">
	<a href="<?php echo smarty_function_router(array('page'=>'admin'),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['admin_title'];?>
">
		<i></i>
	</a>
</section>
<?php }?><?php }} ?>