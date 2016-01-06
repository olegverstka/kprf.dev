<?php /* Smarty version Smarty-3.1.8, created on 2015-06-10 17:43:58
         compiled from "/home/vxeeuesn/public_html/_sokol/templates/skin/synio/blocks/block.blogInfo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:131466165755784d2ebfd707-30184102%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3e06d5e215b1f6ee3ee4926fd8a59ceb374ad638' => 
    array (
      0 => '/home/vxeeuesn/public_html/_sokol/templates/skin/synio/blocks/block.blogInfo.tpl',
      1 => 1424273455,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '131466165755784d2ebfd707-30184102',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55784d2ec04886_63142339',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55784d2ec04886_63142339')) {function content_55784d2ec04886_63142339($_smarty_tpl) {?><section class="block">
	<header class="block-header">
		<h3><?php echo $_smarty_tpl->tpl_vars['aLang']->value['block_blog_info'];?>
</h3>
	</header>
	
	<div class="block-content">
		<p id="block_blog_info"></p>
	</div>	
</section>


<section class="block">
	<header class="block-header">
		<h3><?php echo $_smarty_tpl->tpl_vars['aLang']->value['block_blog_info_note'];?>
</h3>
	</header>
	
	<div class="block-content">	
		<p><?php echo $_smarty_tpl->tpl_vars['aLang']->value['block_blog_info_note_text'];?>
</p>
	</div>	
</section><?php }} ?>