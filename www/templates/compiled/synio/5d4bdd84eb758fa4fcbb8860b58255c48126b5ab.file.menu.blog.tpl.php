<?php /* Smarty version Smarty-3.1.8, created on 2016-01-02 10:27:29
         compiled from "D:\OpenServer\domains\kprf.dev\www/templates/skin/synio\menu.blog.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2897556877be135d137-50853796%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d4bdd84eb758fa4fcbb8860b58255c48126b5ab' => 
    array (
      0 => 'D:\\OpenServer\\domains\\kprf.dev\\www/templates/skin/synio\\menu.blog.tpl',
      1 => 1363889768,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2897556877be135d137-50853796',
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
  'unifunc' => 'content_56877be139f7c5_25226876',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56877be139f7c5_25226876')) {function content_56877be139f7c5_25226876($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cfg')) include 'D:\\OpenServer\\domains\\kprf.dev\\www/engine/modules/viewer/plugs\\function.cfg.php';
if (!is_callable('smarty_function_router')) include 'D:\\OpenServer\\domains\\kprf.dev\\www/engine/modules/viewer/plugs\\function.router.php';
if (!is_callable('smarty_function_hook')) include 'D:\\OpenServer\\domains\\kprf.dev\\www/engine/modules/viewer/plugs\\function.hook.php';
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