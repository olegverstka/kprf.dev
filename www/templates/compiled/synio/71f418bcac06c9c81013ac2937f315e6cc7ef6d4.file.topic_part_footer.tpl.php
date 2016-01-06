<?php /* Smarty version Smarty-3.1.8, created on 2015-06-10 17:40:33
         compiled from "/home/vxeeuesn/public_html/_sokol/templates/skin/synio/topic_part_footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:117156234555784c612bde47-99419097%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '71f418bcac06c9c81013ac2937f315e6cc7ef6d4' => 
    array (
      0 => '/home/vxeeuesn/public_html/_sokol/templates/skin/synio/topic_part_footer.tpl',
      1 => 1424273455,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '117156234555784c612bde47-99419097',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oTopic' => 0,
    'bTopicList' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55784c6133b7a3_75047694',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55784c6133b7a3_75047694')) {function content_55784c6133b7a3_75047694($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hookb')) include '/home/vxeeuesn/public_html/_sokol/engine/modules/viewer/plugs/block.hookb.php';
if (!is_callable('smarty_function_date_format')) include '/home/vxeeuesn/public_html/_sokol/engine/modules/viewer/plugs/function.date_format.php';
if (!is_callable('smarty_function_hook')) include '/home/vxeeuesn/public_html/_sokol/engine/modules/viewer/plugs/function.hook.php';
?>	<?php $_smarty_tpl->tpl_vars["oBlog"] = new Smarty_variable($_smarty_tpl->tpl_vars['oTopic']->value->getBlog(), null, 0);?>
	<?php $_smarty_tpl->tpl_vars["oUser"] = new Smarty_variable($_smarty_tpl->tpl_vars['oTopic']->value->getUser(), null, 0);?>
	<?php $_smarty_tpl->tpl_vars["oVote"] = new Smarty_variable($_smarty_tpl->tpl_vars['oTopic']->value->getVote(), null, 0);?>
	<?php $_smarty_tpl->tpl_vars["oFavourite"] = new Smarty_variable($_smarty_tpl->tpl_vars['oTopic']->value->getFavourite(), null, 0);?>


	<footer class="topic-footer">

		<ul class="topic-info">
			<li class="fl-r">
				<div class="topic-share" id="topic_share_<?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getId();?>
">
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('hookb', array('run'=>"topic_share",'topic'=>$_smarty_tpl->tpl_vars['oTopic']->value,'bTopicList'=>$_smarty_tpl->tpl_vars['bTopicList']->value)); $_block_repeat=true; echo smarty_block_hookb(array('run'=>"topic_share",'topic'=>$_smarty_tpl->tpl_vars['oTopic']->value,'bTopicList'=>$_smarty_tpl->tpl_vars['bTopicList']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

						<div class="yashare-auto-init" data-yashareTitle="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oTopic']->value->getTitle(), ENT_QUOTES, 'UTF-8', true);?>
" data-yashareLink="<?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getUrl();?>
" data-yashareL10n="ru" data-yashareType="button" data-yashareQuickServices="yaru,vkontakte,facebook,twitter,odnoklassniki,moimir,lj,gplus"></div>
					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hookb(array('run'=>"topic_share",'topic'=>$_smarty_tpl->tpl_vars['oTopic']->value,'bTopicList'=>$_smarty_tpl->tpl_vars['bTopicList']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				</div>
			</li>
			<li class="topic-info-date">
				<time datetime="<?php echo smarty_function_date_format(array('date'=>$_smarty_tpl->tpl_vars['oTopic']->value->getDateAdd(),'format'=>'c'),$_smarty_tpl);?>
" title="<?php echo smarty_function_date_format(array('date'=>$_smarty_tpl->tpl_vars['oTopic']->value->getDateAdd(),'format'=>'j F Y, H:i'),$_smarty_tpl);?>
">
					<?php echo smarty_function_date_format(array('date'=>$_smarty_tpl->tpl_vars['oTopic']->value->getDateAdd(),'hours_back'=>"12",'minutes_back'=>"60",'now'=>"60",'day'=>"day H:i",'format'=>"j F Y, H:i"),$_smarty_tpl);?>

				</time>
			</li>
			<?php echo smarty_function_hook(array('run'=>'topic_show_info','topic'=>$_smarty_tpl->tpl_vars['oTopic']->value),$_smarty_tpl);?>

		</ul>

		
		<?php if (!$_smarty_tpl->tpl_vars['bTopicList']->value){?>
			<?php echo smarty_function_hook(array('run'=>'topic_show_end','topic'=>$_smarty_tpl->tpl_vars['oTopic']->value),$_smarty_tpl);?>

		<?php }?>
	</footer>
</article> <!-- /.topic --><?php }} ?>