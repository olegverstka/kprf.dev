<?php /* Smarty version Smarty-3.1.8, created on 2015-08-25 09:34:34
         compiled from "/home/vxeeuesn/public_html/_sokol/templates/skin/synio/actions/ActionTag/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:176168062955dc0c7a70c430-69861120%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2cf9a447d7cfb11fd4b265d40b65a5b3e835ccd7' => 
    array (
      0 => '/home/vxeeuesn/public_html/_sokol/templates/skin/synio/actions/ActionTag/index.tpl',
      1 => 1424273455,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '176168062955dc0c7a70c430-69861120',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aLang' => 0,
    'sTag' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55dc0c7ab133a2_36117443',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55dc0c7ab133a2_36117443')) {function content_55dc0c7ab133a2_36117443($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



<form action="" method="GET" class="js-tag-search-form search-tags">
	<input type="text" name="tag" placeholder="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['block_tags_search'];?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sTag']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="input-text input-width-full autocomplete-tags js-tag-search" />
</form>


<?php echo $_smarty_tpl->getSubTemplate ('topic_list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>