<?php /* Smarty version Smarty-3.1.8, created on 2016-01-04 18:43:14
         compiled from "D:\OpenServer\domains\kprf.dev\www/templates/skin/kprf\toolbar_admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5422568a93126e8a90-32912039%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dd45ead2af434c26d389fae6421d9a11b23ec54d' => 
    array (
      0 => 'D:\\OpenServer\\domains\\kprf.dev\\www/templates/skin/kprf\\toolbar_admin.tpl',
      1 => 1424273456,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5422568a93126e8a90-32912039',
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
  'unifunc' => 'content_568a93126fc314_58979933',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_568a93126fc314_58979933')) {function content_568a93126fc314_58979933($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include 'D:\\OpenServer\\domains\\kprf.dev\\www/engine/modules/viewer/plugs\\function.router.php';
?><?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value&&$_smarty_tpl->tpl_vars['oUserCurrent']->value->isAdministrator()){?>
<section class="toolbar-admin">
	<a href="<?php echo smarty_function_router(array('page'=>'admin'),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['admin_title'];?>
">
		<i></i>
	</a>
</section>
<?php }?><?php }} ?>