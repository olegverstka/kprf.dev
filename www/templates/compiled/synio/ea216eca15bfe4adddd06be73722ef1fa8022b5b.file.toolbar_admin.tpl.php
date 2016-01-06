<?php /* Smarty version Smarty-3.1.8, created on 2016-01-04 18:10:14
         compiled from "D:\OpenServer\domains\kprf.dev\www/templates/skin/synio\toolbar_admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8270568a8b56a6e152-33453673%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ea216eca15bfe4adddd06be73722ef1fa8022b5b' => 
    array (
      0 => 'D:\\OpenServer\\domains\\kprf.dev\\www/templates/skin/synio\\toolbar_admin.tpl',
      1 => 1424273456,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8270568a8b56a6e152-33453673',
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
  'unifunc' => 'content_568a8b56a79cd0_02826733',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_568a8b56a79cd0_02826733')) {function content_568a8b56a79cd0_02826733($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include 'D:\\OpenServer\\domains\\kprf.dev\\www/engine/modules/viewer/plugs\\function.router.php';
?><?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value&&$_smarty_tpl->tpl_vars['oUserCurrent']->value->isAdministrator()){?>
<section class="toolbar-admin">
	<a href="<?php echo smarty_function_router(array('page'=>'admin'),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['admin_title'];?>
">
		<i></i>
	</a>
</section>
<?php }?><?php }} ?>