<?php /* Smarty version Smarty-3.1.8, created on 2015-06-11 15:11:34
         compiled from "/home/vxeeuesn/public_html/_sokol/templates/skin/synio/menu.people.tpl" */ ?>
<?php /*%%SmartyHeaderCode:194608337455797af6583d33-03496758%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f9f4d244a760f3238a29745f10996483d9fab7ea' => 
    array (
      0 => '/home/vxeeuesn/public_html/_sokol/templates/skin/synio/menu.people.tpl',
      1 => 1424273455,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '194608337455797af6583d33-03496758',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sMenuItemSelect' => 0,
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55797af6597b13_48897372',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55797af6597b13_48897372')) {function content_55797af6597b13_48897372($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include '/home/vxeeuesn/public_html/_sokol/engine/modules/viewer/plugs/function.router.php';
if (!is_callable('smarty_function_hook')) include '/home/vxeeuesn/public_html/_sokol/engine/modules/viewer/plugs/function.hook.php';
?><ul class="nav nav-menu">
	<li <?php if ($_smarty_tpl->tpl_vars['sMenuItemSelect']->value=='all'){?>class="active"<?php }?>><a href="<?php echo smarty_function_router(array('page'=>'people'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['people_menu_users_all'];?>
</a></li>
	<li <?php if ($_smarty_tpl->tpl_vars['sMenuItemSelect']->value=='online'){?>class="active"<?php }?>><a href="<?php echo smarty_function_router(array('page'=>'people'),$_smarty_tpl);?>
online/"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['people_menu_users_online'];?>
</a></li>
	<li <?php if ($_smarty_tpl->tpl_vars['sMenuItemSelect']->value=='new'){?>class="active"<?php }?>><a href="<?php echo smarty_function_router(array('page'=>'people'),$_smarty_tpl);?>
new/"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['people_menu_users_new'];?>
</a></li>
	
	<?php echo smarty_function_hook(array('run'=>'menu_people_people_item'),$_smarty_tpl);?>

</ul>

<?php echo smarty_function_hook(array('run'=>'menu_people'),$_smarty_tpl);?>

<?php }} ?>