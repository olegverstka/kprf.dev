<?php /* Smarty version Smarty-3.1.8, created on 2016-01-02 10:27:29
         compiled from "D:\OpenServer\domains\kprf.dev\www/templates/skin/synio\blocks\block.blogs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1821656877be158bb33-69685900%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '55688092ee854d0c2877c6f62dae6f07bd1a5ddc' => 
    array (
      0 => 'D:\\OpenServer\\domains\\kprf.dev\\www/templates/skin/synio\\blocks\\block.blogs.tpl',
      1 => 1363889768,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1821656877be158bb33-69685900',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aLang' => 0,
    'oUserCurrent' => 0,
    'sBlogsTop' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_56877be15aaf34_87394038',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56877be15aaf34_87394038')) {function content_56877be15aaf34_87394038($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include 'D:\\OpenServer\\domains\\kprf.dev\\www/engine/modules/viewer/plugs\\function.router.php';
?><div class="block block-type-blogs" id="block_blogs">
	<header class="block-header sep">
		<h3><?php echo $_smarty_tpl->tpl_vars['aLang']->value['block_blogs'];?>
</h3>
		<div class="block-update js-block-blogs-update"></div>
		
		<ul class="nav nav-pills js-block-blogs-nav">
			<li class="active js-block-blogs-item" data-type="top"><a href="#"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['block_blogs_top'];?>
</a></li>
			<?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value){?>
				<li class="js-block-blogs-item" data-type="join"><a href="#"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['block_blogs_join'];?>
</a></li>
				<li class="js-block-blogs-item" data-type="self"><a href="#"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['block_blogs_self'];?>
</a></li>
			<?php }?>
		</ul>
	</header>
	
	
	<div class="block-content">
		
		
		<div class="js-block-blogs-content">
			<?php echo $_smarty_tpl->tpl_vars['sBlogsTop']->value;?>

		</div>

		
		<footer>
			<a href="<?php echo smarty_function_router(array('page'=>'blogs'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['block_blogs_all'];?>
</a>
		</footer>
	</div>
</div>
<?php }} ?>