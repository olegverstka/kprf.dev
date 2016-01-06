<?php /* Smarty version Smarty-3.1.8, created on 2016-01-04 19:53:59
         compiled from "D:\OpenServer\domains\kprf.dev\www/templates/skin/kprf\nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12630568a931235e5c4-24649973%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9992ffb12fdd27ee05ad3c6a8046c79d079f3999' => 
    array (
      0 => 'D:\\OpenServer\\domains\\kprf.dev\\www/templates/skin/kprf\\nav.tpl',
      1 => 1451926429,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12630568a931235e5c4-24649973',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_568a931238d3c4_27116298',
  'variables' => 
  array (
    'menu' => 0,
    'aMenuContainers' => 0,
    'aMenuFetch' => 0,
    'oUserCurrent' => 0,
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_568a931238d3c4_27116298')) {function content_568a931238d3c4_27116298($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cfg')) include 'D:\\OpenServer\\domains\\kprf.dev\\www/engine/modules/viewer/plugs\\function.cfg.php';
if (!is_callable('smarty_function_router')) include 'D:\\OpenServer\\domains\\kprf.dev\\www/engine/modules/viewer/plugs\\function.router.php';
?><div class="col-md-2">
	<a href="/" class="logo">
		<img src="<?php echo smarty_function_cfg(array('name'=>'path.static.skin'),$_smarty_tpl);?>
images/logo.png" alt="Логотип сайта">
	</a>
</div><!-- .logo -->
<div class="col-md-7">
	<nav class="main-menu">
	<?php if ($_smarty_tpl->tpl_vars['menu']->value){?>
		<?php if (in_array($_smarty_tpl->tpl_vars['menu']->value,$_smarty_tpl->tpl_vars['aMenuContainers']->value)){?><?php echo $_smarty_tpl->tpl_vars['aMenuFetch']->value[$_smarty_tpl->tpl_vars['menu']->value];?>
<?php }else{ ?><?php echo $_smarty_tpl->getSubTemplate ("menu.".($_smarty_tpl->tpl_vars['menu']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }?>
	<?php }?>
	
	<?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value){?>
		<a href="<?php echo smarty_function_router(array('page'=>'topic'),$_smarty_tpl);?>
add/" class="button button-write js-write-window-show" id="modal_write_show"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['block_create'];?>
</a>
	<?php }?>
	</nav>
</div><!-- .main-menu -->
<div class="col-md-3">
	<div class="search">
		<div class="search-header-show" id="search-header-show"><i class="icon-synio-search"></i> <a href="#" class="link-dotted"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['search_submit'];?>
</a></div>
		
		<form class="search-header-form" id="search-header-form" action="<?php echo smarty_function_router(array('page'=>'search'),$_smarty_tpl);?>
topics/" style="display: none">
			<input type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['search'];?>
" maxlength="255" name="q" class="input-text">
			<input type="submit" value="" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['search_submit'];?>
" class="input-submit">
		</form>
	</div>
</div><?php }} ?>