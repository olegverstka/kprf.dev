<?php /* Smarty version Smarty-3.1.8, created on 2015-08-20 00:43:32
         compiled from "/home/vxeeuesn/public_html/_sokol/templates/skin/synio/actions/ActionPeople/new.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5512283055d4f8842b56a4-49534712%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3437df33948634ed228b347d2b65666d264e1092' => 
    array (
      0 => '/home/vxeeuesn/public_html/_sokol/templates/skin/synio/actions/ActionPeople/new.tpl',
      1 => 1424273455,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5512283055d4f8842b56a4-49534712',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aUsersRegister' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d4f8847b7938_46584544',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d4f8847b7938_46584544')) {function content_55d4f8847b7938_46584544($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('menu'=>'people'), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ('user_list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('aUsersList'=>$_smarty_tpl->tpl_vars['aUsersRegister']->value), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>