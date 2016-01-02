<?php /* Smarty version Smarty-3.1.8, created on 2016-01-02 10:27:29
         compiled from "D:\OpenServer\domains\kprf.dev\www/templates/skin/synio\blocks\block.blogs_top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2900356877be1545623-83541264%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4c849641206c40ecf6c22e0c744a1cd24476014b' => 
    array (
      0 => 'D:\\OpenServer\\domains\\kprf.dev\\www/templates/skin/synio\\blocks\\block.blogs_top.tpl',
      1 => 1363889768,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2900356877be1545623-83541264',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aBlogs' => 0,
    'oBlog' => 0,
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_56877be1564a23_37637646',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56877be1564a23_37637646')) {function content_56877be1564a23_37637646($_smarty_tpl) {?><ul class="block-blog-list">
	<?php  $_smarty_tpl->tpl_vars['oBlog'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oBlog']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aBlogs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oBlog']->key => $_smarty_tpl->tpl_vars['oBlog']->value){
$_smarty_tpl->tpl_vars['oBlog']->_loop = true;
?>
		<li>
			<a href="<?php echo $_smarty_tpl->tpl_vars['oBlog']->value->getUrlFull();?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oBlog']->value->getTitle(), ENT_QUOTES, 'UTF-8', true);?>
</a><?php if ($_smarty_tpl->tpl_vars['oBlog']->value->getType()=='close'){?><i title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_closed'];?>
" class="icon-synio-topic-private"></i><?php }?>
			
			<strong><?php echo $_smarty_tpl->tpl_vars['oBlog']->value->getRating();?>
</strong>
		</li>
	<?php } ?>
</ul>				<?php }} ?>