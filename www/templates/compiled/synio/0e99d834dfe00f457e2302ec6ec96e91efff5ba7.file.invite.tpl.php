<?php /* Smarty version Smarty-3.1.8, created on 2015-06-10 17:48:21
         compiled from "/home/vxeeuesn/public_html/_sokol/templates/skin/synio/actions/ActionRegistration/invite.tpl" */ ?>
<?php /*%%SmartyHeaderCode:88304829955784e35847605-25158364%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e99d834dfe00f457e2302ec6ec96e91efff5ba7' => 
    array (
      0 => '/home/vxeeuesn/public_html/_sokol/templates/skin/synio/actions/ActionRegistration/invite.tpl',
      1 => 1424273455,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '88304829955784e35847605-25158364',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55784e358789d4_35394563',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55784e358789d4_35394563')) {function content_55784e358789d4_35394563($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include '/home/vxeeuesn/public_html/_sokol/engine/modules/viewer/plugs/function.router.php';
?><?php $_smarty_tpl->tpl_vars["noSidebar"] = new Smarty_variable(true, null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>




<h2 class="page-header"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['registration_invite'];?>
</h2>


<form action="<?php echo smarty_function_router(array('page'=>'registration'),$_smarty_tpl);?>
invite/" method="POST">
	<p><label><?php echo $_smarty_tpl->tpl_vars['aLang']->value['registration_invite_code'];?>
:</label>
	<input type="text" name="invite_code" class="input-text input-width-300" /></p>

	<input type="submit" name="submit_invite" value="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['registration_invite_check'];?>
" class="button" />
</form>



<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>