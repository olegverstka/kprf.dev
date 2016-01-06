<?php /* Smarty version Smarty-3.1.8, created on 2015-06-10 11:38:25
         compiled from "/home/vxeeuesn/public_html/_sokol/templates/skin/synio/toolbar_admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2347732995577f7815e9030-68468281%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c9f01b2d8f08ff6e08a73395254d9e0a7a472a8c' => 
    array (
      0 => '/home/vxeeuesn/public_html/_sokol/templates/skin/synio/toolbar_admin.tpl',
      1 => 1424273455,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2347732995577f7815e9030-68468281',
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
  'unifunc' => 'content_5577f7815ef2a8_49923963',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5577f7815ef2a8_49923963')) {function content_5577f7815ef2a8_49923963($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include '/home/vxeeuesn/public_html/_sokol/engine/modules/viewer/plugs/function.router.php';
?><?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value&&$_smarty_tpl->tpl_vars['oUserCurrent']->value->isAdministrator()){?>
<section class="toolbar-admin">
	<a href="<?php echo smarty_function_router(array('page'=>'admin'),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['admin_title'];?>
">
		<i></i>
	</a>
</section>
<?php }?><?php }} ?>