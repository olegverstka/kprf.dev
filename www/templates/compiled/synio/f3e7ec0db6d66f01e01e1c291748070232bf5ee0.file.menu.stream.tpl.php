<?php /* Smarty version Smarty-3.1.8, created on 2015-08-18 16:50:06
         compiled from "/home/vxeeuesn/public_html/_sokol/templates/skin/synio/menu.stream.tpl" */ ?>
<?php /*%%SmartyHeaderCode:110894500455d3380ed974e6-67283874%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f3e7ec0db6d66f01e01e1c291748070232bf5ee0' => 
    array (
      0 => '/home/vxeeuesn/public_html/_sokol/templates/skin/synio/menu.stream.tpl',
      1 => 1424273455,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '110894500455d3380ed974e6-67283874',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oUserCurrent' => 0,
    'sMenuItemSelect' => 0,
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d3380ee03570_87660797',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d3380ee03570_87660797')) {function content_55d3380ee03570_87660797($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include '/home/vxeeuesn/public_html/_sokol/engine/modules/viewer/plugs/function.router.php';
if (!is_callable('smarty_function_hook')) include '/home/vxeeuesn/public_html/_sokol/engine/modules/viewer/plugs/function.hook.php';
?><ul class="nav nav-menu">
	<?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value){?>
		<li <?php if ($_smarty_tpl->tpl_vars['sMenuItemSelect']->value=='user'){?>class="active"<?php }?>><a href="<?php echo smarty_function_router(array('page'=>'stream'),$_smarty_tpl);?>
user/"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['stream_menu_user'];?>
</a></li>
	<?php }?>
	<li <?php if ($_smarty_tpl->tpl_vars['sMenuItemSelect']->value=='all'){?>class="active"<?php }?>><a href="<?php echo smarty_function_router(array('page'=>'stream'),$_smarty_tpl);?>
all/"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['stream_menu_all'];?>
</a></li>

	<?php echo smarty_function_hook(array('run'=>'menu_stream_item'),$_smarty_tpl);?>

</ul>
<?php echo smarty_function_hook(array('run'=>'menu_stream'),$_smarty_tpl);?>

<?php }} ?>