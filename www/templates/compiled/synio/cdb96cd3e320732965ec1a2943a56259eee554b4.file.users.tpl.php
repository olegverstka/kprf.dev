<?php /* Smarty version Smarty-3.1.8, created on 2015-10-23 04:05:00
         compiled from "/home/vxeeuesn/public_html/_sokol/templates/skin/synio/actions/ActionBlog/users.tpl" */ ?>
<?php /*%%SmartyHeaderCode:684498467562979ac655a64-63457170%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cdb96cd3e320732965ec1a2943a56259eee554b4' => 
    array (
      0 => '/home/vxeeuesn/public_html/_sokol/templates/skin/synio/actions/ActionBlog/users.tpl',
      1 => 1424273455,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '684498467562979ac655a64-63457170',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aLang' => 0,
    'iCountBlogUsers' => 0,
    'oBlog' => 0,
    'aBlogUsers' => 0,
    'oBlogUser' => 0,
    'aUsersList' => 0,
    'sUsersRootPage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_562979acdc80b6_57178523',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_562979acdc80b6_57178523')) {function content_562979acdc80b6_57178523($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>




<h2 class="page-header"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_user_readers_all'];?>
 (<?php echo $_smarty_tpl->tpl_vars['iCountBlogUsers']->value;?>
): <a href="<?php echo $_smarty_tpl->tpl_vars['oBlog']->value->getUrlFull();?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oBlog']->value->getTitle(), ENT_QUOTES, 'UTF-8', true);?>
</a></h2>
	

<?php if ($_smarty_tpl->tpl_vars['aBlogUsers']->value){?>
	<?php $_smarty_tpl->tpl_vars["aUsersList"] = new Smarty_variable(array(), null, 0);?>
	<?php  $_smarty_tpl->tpl_vars['oBlogUser'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oBlogUser']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aBlogUsers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oBlogUser']->key => $_smarty_tpl->tpl_vars['oBlogUser']->value){
$_smarty_tpl->tpl_vars['oBlogUser']->_loop = true;
?>
		<?php $_smarty_tpl->createLocalArrayVariable('aUsersList', null, 0);
$_smarty_tpl->tpl_vars['aUsersList']->value[] = $_smarty_tpl->tpl_vars['oBlogUser']->value->getUser();?>
	<?php } ?>
	<?php echo $_smarty_tpl->getSubTemplate ('user_list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('aUsersList'=>$_smarty_tpl->tpl_vars['aUsersList']->value,'sUsersRootPage'=>$_smarty_tpl->tpl_vars['sUsersRootPage']->value), 0);?>

<?php }else{ ?>
	<?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_user_readers_empty'];?>

<?php }?>



<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>