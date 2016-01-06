<?php /* Smarty version Smarty-3.1.8, created on 2015-06-10 11:38:25
         compiled from "/home/vxeeuesn/public_html/_sokol/templates/skin/synio/window_write.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9161654435577f7814db598-68977527%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '40cfeff7b60f36d3688755d244501bbb199a6782' => 
    array (
      0 => '/home/vxeeuesn/public_html/_sokol/templates/skin/synio/window_write.tpl',
      1 => 1424273455,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9161654435577f7814db598-68977527',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'iUserCurrentCountTopicDraft' => 0,
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5577f7814f34e6_65079724',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5577f7814f34e6_65079724')) {function content_5577f7814f34e6_65079724($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include '/home/vxeeuesn/public_html/_sokol/engine/modules/viewer/plugs/function.router.php';
if (!is_callable('smarty_modifier_declension')) include '/home/vxeeuesn/public_html/_sokol/engine/modules/viewer/plugs/modifier.declension.php';
if (!is_callable('smarty_function_hook')) include '/home/vxeeuesn/public_html/_sokol/engine/modules/viewer/plugs/function.hook.php';
?><div class="modal modal-write" id="modal_write">
	<header class="modal-header">
		<a href="#" class="close jqmClose"></a>
	</header>
	
	<div class="modal-content"><ul class="write-list"><?php if ($_smarty_tpl->tpl_vars['iUserCurrentCountTopicDraft']->value){?><li class="write-item-type-draft"><a href="<?php echo smarty_function_router(array('page'=>'topic'),$_smarty_tpl);?>
saved/" class="write-item-image"></a><a href="<?php echo smarty_function_router(array('page'=>'topic'),$_smarty_tpl);?>
saved/" class="write-item-link"><?php echo $_smarty_tpl->tpl_vars['iUserCurrentCountTopicDraft']->value;?>
 <?php echo smarty_modifier_declension($_smarty_tpl->tpl_vars['iUserCurrentCountTopicDraft']->value,$_smarty_tpl->tpl_vars['aLang']->value['draft_declension'],'russian');?>
</a></li><?php }?><li class="write-item-type-topic"><a href="<?php echo smarty_function_router(array('page'=>'topic'),$_smarty_tpl);?>
add" class="write-item-image"></a><a href="<?php echo smarty_function_router(array('page'=>'topic'),$_smarty_tpl);?>
add" class="write-item-link"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['block_create_topic_topic'];?>
</a></li><li class="write-item-type-blog"><a href="<?php echo smarty_function_router(array('page'=>'blog'),$_smarty_tpl);?>
add" class="write-item-image"></a><a href="<?php echo smarty_function_router(array('page'=>'blog'),$_smarty_tpl);?>
add" class="write-item-link"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['block_create_blog'];?>
</a></li><li class="write-item-type-message"><a href="<?php echo smarty_function_router(array('page'=>'talk'),$_smarty_tpl);?>
add" class="write-item-image"></a><a href="<?php echo smarty_function_router(array('page'=>'talk'),$_smarty_tpl);?>
add" class="write-item-link"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['block_create_talk'];?>
</a></li><?php echo smarty_function_hook(array('run'=>'write_item','isPopup'=>true),$_smarty_tpl);?>
</ul></div>
</div>
	<?php }} ?>