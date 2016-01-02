<?php /* Smarty version Smarty-3.1.8, created on 2016-01-02 10:27:29
         compiled from "D:\OpenServer\domains\kprf.dev\www/templates/skin/synio\menu.blog.content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1132956877be15ba945-20056177%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9351a4b97c5bec28130d4d520b08e9c5cce72d9d' => 
    array (
      0 => 'D:\\OpenServer\\domains\\kprf.dev\\www/templates/skin/synio\\menu.blog.content.tpl',
      1 => 1363889768,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1132956877be15ba945-20056177',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sMenuItemSelect' => 0,
    'sMenuSubItemSelect' => 0,
    'aLang' => 0,
    'iCountTopicsNew' => 0,
    'sMenuSubBlogUrl' => 0,
    'iCountTopicsBlogNew' => 0,
    'iCountTopicsPersonalNew' => 0,
    'sPeriodSelectCurrent' => 0,
    'sPeriodSelectRoot' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_56877be16a10f1_96524023',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56877be16a10f1_96524023')) {function content_56877be16a10f1_96524023($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cfg')) include 'D:\\OpenServer\\domains\\kprf.dev\\www/engine/modules/viewer/plugs\\function.cfg.php';
if (!is_callable('smarty_function_router')) include 'D:\\OpenServer\\domains\\kprf.dev\\www/engine/modules/viewer/plugs\\function.router.php';
if (!is_callable('smarty_function_hook')) include 'D:\\OpenServer\\domains\\kprf.dev\\www/engine/modules/viewer/plugs\\function.hook.php';
?><?php if ($_smarty_tpl->tpl_vars['sMenuItemSelect']->value=='index'){?>
	<ul class="nav nav-pills mb-30">
		<li <?php if ($_smarty_tpl->tpl_vars['sMenuSubItemSelect']->value=='good'){?>class="active"<?php }?>><a href="<?php echo smarty_function_cfg(array('name'=>'path.root.web'),$_smarty_tpl);?>
/"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_menu_all_good'];?>
</a></li>
		<li <?php if ($_smarty_tpl->tpl_vars['sMenuSubItemSelect']->value=='new'){?>class="active"<?php }?>>
			<a href="<?php echo smarty_function_router(array('page'=>'index'),$_smarty_tpl);?>
newall/" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_menu_top_period_all'];?>
"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_menu_all_new'];?>
</a>
			<?php if ($_smarty_tpl->tpl_vars['iCountTopicsNew']->value>0){?><a href="<?php echo smarty_function_router(array('page'=>'index'),$_smarty_tpl);?>
new/" class="new" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_menu_top_period_24h'];?>
">+<?php echo $_smarty_tpl->tpl_vars['iCountTopicsNew']->value;?>
</a><?php }?>
		</li>
		<li <?php if ($_smarty_tpl->tpl_vars['sMenuSubItemSelect']->value=='discussed'){?>class="active"<?php }?>><a href="<?php echo smarty_function_router(array('page'=>'index'),$_smarty_tpl);?>
discussed/"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_menu_all_discussed'];?>
</a></li>
		<li <?php if ($_smarty_tpl->tpl_vars['sMenuSubItemSelect']->value=='top'){?>class="active"<?php }?>><a href="<?php echo smarty_function_router(array('page'=>'index'),$_smarty_tpl);?>
top/"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_menu_all_top'];?>
</a></li>
		<?php echo smarty_function_hook(array('run'=>'menu_blog_index_item'),$_smarty_tpl);?>

	</ul>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['sMenuItemSelect']->value=='blog'){?>
	<ul class="nav nav-pills mb-30">
		<li <?php if ($_smarty_tpl->tpl_vars['sMenuSubItemSelect']->value=='good'){?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['sMenuSubBlogUrl']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_menu_collective_good'];?>
</a></li>
		<li <?php if ($_smarty_tpl->tpl_vars['sMenuSubItemSelect']->value=='new'){?>class="active"<?php }?>>
			<a href="<?php echo $_smarty_tpl->tpl_vars['sMenuSubBlogUrl']->value;?>
newall/" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_menu_top_period_all'];?>
"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_menu_collective_new'];?>
</a>
			<?php if ($_smarty_tpl->tpl_vars['iCountTopicsBlogNew']->value>0){?> <a href="<?php echo $_smarty_tpl->tpl_vars['sMenuSubBlogUrl']->value;?>
new/" class="new" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_menu_top_period_24h'];?>
">+<?php echo $_smarty_tpl->tpl_vars['iCountTopicsBlogNew']->value;?>
</a><?php }?>
		</li>
		<li <?php if ($_smarty_tpl->tpl_vars['sMenuSubItemSelect']->value=='discussed'){?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['sMenuSubBlogUrl']->value;?>
discussed/"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_menu_collective_discussed'];?>
</a></li>
		<li <?php if ($_smarty_tpl->tpl_vars['sMenuSubItemSelect']->value=='top'){?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['sMenuSubBlogUrl']->value;?>
top/"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_menu_collective_top'];?>
</a></li>
		<?php echo smarty_function_hook(array('run'=>'menu_blog_blog_item'),$_smarty_tpl);?>

	</ul>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['sMenuItemSelect']->value=='log'){?>
	<ul class="nav nav-pills mb-30">
		<li <?php if ($_smarty_tpl->tpl_vars['sMenuSubItemSelect']->value=='good'){?>class="active"<?php }?>><a href="<?php echo smarty_function_router(array('page'=>'personal_blog'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_menu_personal_good'];?>
</a></li>
		<li <?php if ($_smarty_tpl->tpl_vars['sMenuSubItemSelect']->value=='new'){?>class="active"<?php }?>>
			<a href="<?php echo smarty_function_router(array('page'=>'personal_blog'),$_smarty_tpl);?>
newall/" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_menu_top_period_all'];?>
"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_menu_personal_new'];?>
</a>
			<?php if ($_smarty_tpl->tpl_vars['iCountTopicsPersonalNew']->value>0){?><a href="<?php echo smarty_function_router(array('page'=>'personal_blog'),$_smarty_tpl);?>
new/" class="new" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_menu_top_period_24h'];?>
">+<?php echo $_smarty_tpl->tpl_vars['iCountTopicsPersonalNew']->value;?>
</a><?php }?>
		</li>
		<li <?php if ($_smarty_tpl->tpl_vars['sMenuSubItemSelect']->value=='discussed'){?>class="active"<?php }?>><a href="<?php echo smarty_function_router(array('page'=>'personal_blog'),$_smarty_tpl);?>
discussed/"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_menu_personal_discussed'];?>
</a></li>
		<li <?php if ($_smarty_tpl->tpl_vars['sMenuSubItemSelect']->value=='top'){?>class="active"<?php }?>><a href="<?php echo smarty_function_router(array('page'=>'personal_blog'),$_smarty_tpl);?>
top/"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_menu_personal_top'];?>
</a></li>
		<?php echo smarty_function_hook(array('run'=>'menu_blog_log_item'),$_smarty_tpl);?>

	</ul>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['sPeriodSelectCurrent']->value){?>
	<ul class="nav nav-pills nav-pills-dropdown mb-30">
		<li <?php if ($_smarty_tpl->tpl_vars['sPeriodSelectCurrent']->value=='1'){?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['sPeriodSelectRoot']->value;?>
?period=1"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_menu_top_period_24h'];?>
</a></li>
		<li <?php if ($_smarty_tpl->tpl_vars['sPeriodSelectCurrent']->value=='7'){?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['sPeriodSelectRoot']->value;?>
?period=7"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_menu_top_period_7d'];?>
</a></li>
		<li <?php if ($_smarty_tpl->tpl_vars['sPeriodSelectCurrent']->value=='30'){?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['sPeriodSelectRoot']->value;?>
?period=30"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_menu_top_period_30d'];?>
</a></li>
		<li <?php if ($_smarty_tpl->tpl_vars['sPeriodSelectCurrent']->value=='all'){?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['sPeriodSelectRoot']->value;?>
?period=all"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_menu_top_period_all'];?>
</a></li>
	</ul>
<?php }?>

<?php }} ?>