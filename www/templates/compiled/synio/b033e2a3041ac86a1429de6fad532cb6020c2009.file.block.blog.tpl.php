<?php /* Smarty version Smarty-3.1.8, created on 2015-06-10 17:48:03
         compiled from "/home/vxeeuesn/public_html/_sokol/templates/skin/synio/blocks/block.blog.tpl" */ ?>
<?php /*%%SmartyHeaderCode:123537308755784e2309c5e7-94948360%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b033e2a3041ac86a1429de6fad532cb6020c2009' => 
    array (
      0 => '/home/vxeeuesn/public_html/_sokol/templates/skin/synio/blocks/block.blog.tpl',
      1 => 1424273455,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '123537308755784e2309c5e7-94948360',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oTopic' => 0,
    'oBlog' => 0,
    'aLang' => 0,
    'oUserCurrent' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55784e230e7848_11573150',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55784e230e7848_11573150')) {function content_55784e230e7848_11573150($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_declension')) include '/home/vxeeuesn/public_html/_sokol/engine/modules/viewer/plugs/modifier.declension.php';
if (!is_callable('smarty_function_router')) include '/home/vxeeuesn/public_html/_sokol/engine/modules/viewer/plugs/function.router.php';
?><?php if ($_smarty_tpl->tpl_vars['oTopic']->value){?>
	<?php $_smarty_tpl->tpl_vars["oBlog"] = new Smarty_variable($_smarty_tpl->tpl_vars['oTopic']->value->getBlog(), null, 0);?>
	<?php if ($_smarty_tpl->tpl_vars['oBlog']->value->getType()!='personal'){?>
	<section class="block block-type-blog">
		<header class="block-header">
			<h3><a href="<?php echo $_smarty_tpl->tpl_vars['oBlog']->value->getUrlFull();?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oBlog']->value->getTitle(), ENT_QUOTES, 'UTF-8', true);?>
</a></h3>
		</header>

		<div class="block-content">
			<span id="blog_user_count_<?php echo $_smarty_tpl->tpl_vars['oBlog']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['oBlog']->value->getCountUser();?>
</span> <?php echo smarty_modifier_declension($_smarty_tpl->tpl_vars['oBlog']->value->getCountUser(),$_smarty_tpl->tpl_vars['aLang']->value['reader_declension'],'russian');?>
<br />
			<?php echo $_smarty_tpl->tpl_vars['oBlog']->value->getCountTopic();?>
 <?php echo smarty_modifier_declension($_smarty_tpl->tpl_vars['oBlog']->value->getCountTopic(),$_smarty_tpl->tpl_vars['aLang']->value['topic_declension'],'russian');?>

		</div>

		<footer>
			<?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value&&$_smarty_tpl->tpl_vars['oUserCurrent']->value->getId()!=$_smarty_tpl->tpl_vars['oBlog']->value->getOwnerId()){?>
				<button type="submit"  class="button button-small" id="blog-join" data-only-text="1" onclick="ls.blog.toggleJoin(this,<?php echo $_smarty_tpl->tpl_vars['oBlog']->value->getId();?>
); return false;"><?php if ($_smarty_tpl->tpl_vars['oBlog']->value->getUserIsJoin()){?><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_leave'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_join'];?>
<?php }?></button>
			<?php }?>
			<a href="<?php echo smarty_function_router(array('page'=>'rss'),$_smarty_tpl);?>
blog/<?php echo $_smarty_tpl->tpl_vars['oBlog']->value->getUrl();?>
/" class="rss">RSS</a>
		</footer>
	</section>
	<?php }?>
<?php }?><?php }} ?>