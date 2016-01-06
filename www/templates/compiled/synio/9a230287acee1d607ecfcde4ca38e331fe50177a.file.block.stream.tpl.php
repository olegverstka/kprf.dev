<?php /* Smarty version Smarty-3.1.8, created on 2015-06-10 17:40:33
         compiled from "/home/vxeeuesn/public_html/_sokol/templates/skin/synio/blocks/block.stream.tpl" */ ?>
<?php /*%%SmartyHeaderCode:74072286455784c610d6283-62931047%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a230287acee1d607ecfcde4ca38e331fe50177a' => 
    array (
      0 => '/home/vxeeuesn/public_html/_sokol/templates/skin/synio/blocks/block.stream.tpl',
      1 => 1424273455,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '74072286455784c610d6283-62931047',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aLang' => 0,
    'sItemsHook' => 0,
    'sStreamComments' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55784c610f8175_37699214',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55784c610f8175_37699214')) {function content_55784c610f8175_37699214($_smarty_tpl) {?><?php if (!is_callable('smarty_function_hook')) include '/home/vxeeuesn/public_html/_sokol/engine/modules/viewer/plugs/function.hook.php';
if (!is_callable('smarty_function_router')) include '/home/vxeeuesn/public_html/_sokol/engine/modules/viewer/plugs/function.router.php';
?><section class="block block-type-stream">
	<?php echo smarty_function_hook(array('run'=>'block_stream_nav_item','assign'=>"sItemsHook"),$_smarty_tpl);?>


	<header class="block-header sep">
		<h3><a href="<?php echo smarty_function_router(array('page'=>'comments'),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['block_stream_comments_all'];?>
"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['block_stream'];?>
</a></h3>
		<div class="block-update js-block-stream-update"></div>
		
		<ul class="nav nav-pills js-block-stream-nav" <?php if ($_smarty_tpl->tpl_vars['sItemsHook']->value){?>style="display: none;"<?php }?>>
			<li class="active js-block-stream-item" data-type="comment"><a href="#"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['block_stream_comments'];?>
</a></li>
			<li class="js-block-stream-item" data-type="topic"><a href="#"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['block_stream_topics'];?>
</a></li>
			<?php echo $_smarty_tpl->tpl_vars['sItemsHook']->value;?>

		</ul>
		
		<ul class="nav nav-pills js-block-stream-dropdown" <?php if (!$_smarty_tpl->tpl_vars['sItemsHook']->value){?>style="display: none;"<?php }?>>
			<li class="dropdown active js-block-stream-dropdown-trigger"><a href="#"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['block_stream_comments'];?>
</a> <i class="icon-synio-arrows"></i>
				<ul class="dropdown-menu js-block-stream-dropdown-items">
					<li class="active js-block-stream-item" data-type="comment"><a href="#"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['block_stream_comments'];?>
</a></li>
					<li class="js-block-stream-item" data-type="topic"><a href="#"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['block_stream_topics'];?>
</a></li>
					<?php echo $_smarty_tpl->tpl_vars['sItemsHook']->value;?>

				</ul>
			</li>
		</ul>
	</header>
	
	<div class="block-content">
		<div class="js-block-stream-content">
			<?php echo $_smarty_tpl->tpl_vars['sStreamComments']->value;?>

		</div>
	</div>
</section>

<?php }} ?>