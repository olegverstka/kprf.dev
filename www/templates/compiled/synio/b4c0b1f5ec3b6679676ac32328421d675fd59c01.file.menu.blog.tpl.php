<?php /* Smarty version Smarty-3.1.8, created on 2015-06-10 17:48:20
         compiled from "/home/vxeeuesn/public_html/_sokol/templates/skin/synio/menu.blog.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5758908755784e34d8f4a1-50698786%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b4c0b1f5ec3b6679676ac32328421d675fd59c01' => 
    array (
      0 => '/home/vxeeuesn/public_html/_sokol/templates/skin/synio/menu.blog.tpl',
      1 => 1424273455,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5758908755784e34d8f4a1-50698786',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sMenuItemSelect' => 0,
    'aLang' => 0,
    'oUserCurrent' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55784e34da9e31_62911773',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55784e34da9e31_62911773')) {function content_55784e34da9e31_62911773($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cfg')) include '/home/vxeeuesn/public_html/_sokol/engine/modules/viewer/plugs/function.cfg.php';
if (!is_callable('smarty_function_router')) include '/home/vxeeuesn/public_html/_sokol/engine/modules/viewer/plugs/function.router.php';
if (!is_callable('smarty_function_hook')) include '/home/vxeeuesn/public_html/_sokol/engine/modules/viewer/plugs/function.hook.php';
?><ul class="nav nav-menu">
	<li <?php if ($_smarty_tpl->tpl_vars['sMenuItemSelect']->value=='index'){?>class="active"<?php }?>>
		<a href="<?php echo smarty_function_cfg(array('name'=>'path.root.web'),$_smarty_tpl);?>
/"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_menu_all'];?>
</a>
	</li>

	<li <?php if ($_smarty_tpl->tpl_vars['sMenuItemSelect']->value=='blog'){?>class="active"<?php }?>>
		<a href="<?php echo smarty_function_router(array('page'=>'blog'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_menu_collective'];?>
</a>
	</li>

	<li <?php if ($_smarty_tpl->tpl_vars['sMenuItemSelect']->value=='log'){?>class="active"<?php }?>>
		<a href="<?php echo smarty_function_router(array('page'=>'personal_blog'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_menu_personal'];?>
</a>
	</li>
	
	<?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value){?>
		<li <?php if ($_smarty_tpl->tpl_vars['sMenuItemSelect']->value=='feed'){?>class="active"<?php }?>>
			<a href="<?php echo smarty_function_router(array('page'=>'feed'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['userfeed_title'];?>
</a>
		</li>
	<?php }?>

	<?php echo smarty_function_hook(array('run'=>'menu_blog'),$_smarty_tpl);?>

</ul><?php }} ?>