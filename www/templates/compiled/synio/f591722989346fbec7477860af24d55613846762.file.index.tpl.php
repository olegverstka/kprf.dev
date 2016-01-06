<?php /* Smarty version Smarty-3.1.8, created on 2015-08-12 06:18:25
         compiled from "/home/vxeeuesn/public_html/_sokol/templates/skin/synio/actions/ActionComments/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:121927576855cabb0127e0c7-19800958%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f591722989346fbec7477860af24d55613846762' => 
    array (
      0 => '/home/vxeeuesn/public_html/_sokol/templates/skin/synio/actions/ActionComments/index.tpl',
      1 => 1424273455,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '121927576855cabb0127e0c7-19800958',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55cabb015f4665_02613218',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55cabb015f4665_02613218')) {function content_55cabb015f4665_02613218($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<h2 class="page-header"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['comments_all'];?>
</h2>

<?php echo $_smarty_tpl->getSubTemplate ('comment_list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php }} ?>