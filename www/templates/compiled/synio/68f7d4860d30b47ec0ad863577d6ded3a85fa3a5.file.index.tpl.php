<?php /* Smarty version Smarty-3.1.8, created on 2015-06-10 17:04:39
         compiled from "/home/vxeeuesn/public_html/_sokol/templates/skin/synio/actions/ActionError/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1923118316557843f768f610-75903748%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '68f7d4860d30b47ec0ad863577d6ded3a85fa3a5' => 
    array (
      0 => '/home/vxeeuesn/public_html/_sokol/templates/skin/synio/actions/ActionError/index.tpl',
      1 => 1424273455,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1923118316557843f768f610-75903748',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aMsgError' => 0,
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_557843f76e0505_85343302',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557843f76e0505_85343302')) {function content_557843f76e0505_85343302($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cfg')) include '/home/vxeeuesn/public_html/_sokol/engine/modules/viewer/plugs/function.cfg.php';
?><?php $_smarty_tpl->tpl_vars["noSidebar"] = new Smarty_variable(true, null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('noShowSystemMessage'=>true), 0);?>



<div class="content-error">
	<?php if ($_smarty_tpl->tpl_vars['aMsgError']->value[0]['title']){?>
		<h2 class="page-header"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['error'];?>
: <span><?php echo $_smarty_tpl->tpl_vars['aMsgError']->value[0]['title'];?>
</span></h2>
	<?php }?>

	<p><?php echo $_smarty_tpl->tpl_vars['aMsgError']->value[0]['msg'];?>
</p>
	<br />
	<br />
	<p><a href="javascript:history.go(-1);"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['site_history_back'];?>
</a><br />
	<a href="<?php echo smarty_function_cfg(array('name'=>'path.root.web'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['site_go_main'];?>
</a></p>
</div>


<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>