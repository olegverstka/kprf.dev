<?php /* Smarty version Smarty-3.1.8, created on 2015-07-08 05:13:15
         compiled from "/home/vxeeuesn/public_html/_sokol/templates/skin/synio/blocks/block.tagsCity.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2027851467559c873bd07891-56382503%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bbb82e457914edfff1123572d03d9c34c0ab641b' => 
    array (
      0 => '/home/vxeeuesn/public_html/_sokol/templates/skin/synio/blocks/block.tagsCity.tpl',
      1 => 1424273455,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2027851467559c873bd07891-56382503',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aCityList' => 0,
    'aLang' => 0,
    'oCity' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_559c873bd1a637_87379799',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_559c873bd1a637_87379799')) {function content_559c873bd1a637_87379799($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include '/home/vxeeuesn/public_html/_sokol/engine/modules/viewer/plugs/function.router.php';
?><?php if ($_smarty_tpl->tpl_vars['aCityList']->value&&count($_smarty_tpl->tpl_vars['aCityList']->value)>0){?>
	<section class="block">
		<header class="block-header">
			<h3><?php echo $_smarty_tpl->tpl_vars['aLang']->value['block_city_tags'];?>
</h3>
		</header>
		
		
		<div class="block-content">
			<ul class="tag-cloud word-wrap">
				<?php  $_smarty_tpl->tpl_vars['oCity'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oCity']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aCityList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oCity']->key => $_smarty_tpl->tpl_vars['oCity']->value){
$_smarty_tpl->tpl_vars['oCity']->_loop = true;
?>
					<li><a class="tag-size-<?php echo $_smarty_tpl->tpl_vars['oCity']->value->getSize();?>
" href="<?php echo smarty_function_router(array('page'=>'people'),$_smarty_tpl);?>
city/<?php echo $_smarty_tpl->tpl_vars['oCity']->value->getId();?>
/"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oCity']->value->getName(), ENT_QUOTES, 'UTF-8', true);?>
</a></li>
				<?php } ?>					
			</ul>	
		</div>		
	</section>
<?php }?><?php }} ?>