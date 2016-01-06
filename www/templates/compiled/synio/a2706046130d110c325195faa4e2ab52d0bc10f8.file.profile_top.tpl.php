<?php /* Smarty version Smarty-3.1.8, created on 2015-06-11 15:11:34
         compiled from "/home/vxeeuesn/public_html/_sokol/templates/skin/synio/actions/ActionProfile/profile_top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6246979055797af6784b01-30346640%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a2706046130d110c325195faa4e2ab52d0bc10f8' => 
    array (
      0 => '/home/vxeeuesn/public_html/_sokol/templates/skin/synio/actions/ActionProfile/profile_top.tpl',
      1 => 1424273455,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6246979055797af6784b01-30346640',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oUserProfile' => 0,
    'oVote' => 0,
    'oUserCurrent' => 0,
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55797af68362f6_82905579',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55797af68362f6_82905579')) {function content_55797af68362f6_82905579($_smarty_tpl) {?><?php if (!is_callable('smarty_function_hook')) include '/home/vxeeuesn/public_html/_sokol/engine/modules/viewer/plugs/function.hook.php';
if (!is_callable('smarty_function_router')) include '/home/vxeeuesn/public_html/_sokol/engine/modules/viewer/plugs/function.router.php';
?><div class="profile">
	<?php echo smarty_function_hook(array('run'=>'profile_top_begin','oUserProfile'=>$_smarty_tpl->tpl_vars['oUserProfile']->value),$_smarty_tpl);?>

	
	<div class="vote-profile">
		<div id="vote_area_user_<?php echo $_smarty_tpl->tpl_vars['oUserProfile']->value->getId();?>
" class="vote-topic
																	<?php if ($_smarty_tpl->tpl_vars['oUserProfile']->value->getRating()>0){?>
																		vote-count-positive
																	<?php }elseif($_smarty_tpl->tpl_vars['oUserProfile']->value->getRating()<0){?>
																		vote-count-negative
																	<?php }elseif($_smarty_tpl->tpl_vars['oUserProfile']->value->getRating()==0){?>
																		vote-count-zero
																	<?php }?>
																	
																	<?php if ($_smarty_tpl->tpl_vars['oVote']->value){?> 
																		voted 
																		
																		<?php if ($_smarty_tpl->tpl_vars['oVote']->value->getDirection()>0){?>
																			voted-up
																		<?php }elseif($_smarty_tpl->tpl_vars['oVote']->value->getDirection()<0){?>
																			voted-down
																		<?php }?>
																	<?php }else{ ?>
																		not-voted
																	<?php }?>
																	
																	<?php if (($_smarty_tpl->tpl_vars['oUserCurrent']->value&&$_smarty_tpl->tpl_vars['oUserProfile']->value->getId()==$_smarty_tpl->tpl_vars['oUserCurrent']->value->getId())||!$_smarty_tpl->tpl_vars['oUserCurrent']->value){?>
																		vote-nobuttons
																	<?php }?>">
			<div class="vote-item vote-down" onclick="return ls.vote.vote(<?php echo $_smarty_tpl->tpl_vars['oUserProfile']->value->getId();?>
,this,-1,'user');"><span><i></i></span></div>
			<div class="vote-item vote-count" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_vote_count'];?>
: <?php echo $_smarty_tpl->tpl_vars['oUserProfile']->value->getCountVote();?>
">
				<span id="vote_total_user_<?php echo $_smarty_tpl->tpl_vars['oUserProfile']->value->getId();?>
"><?php if ($_smarty_tpl->tpl_vars['oUserProfile']->value->getRating()>0){?>+<?php }?><?php echo $_smarty_tpl->tpl_vars['oUserProfile']->value->getRating();?>
</span>
			</div>
			<div class="vote-item vote-up" onclick="return ls.vote.vote(<?php echo $_smarty_tpl->tpl_vars['oUserProfile']->value->getId();?>
,this,1,'user');"><span><i></i></span></div>
		</div>
		<div class="vote-label"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_rating'];?>
</div>
	</div>
	
	<div class="strength">
		<div class="count" id="user_skill_<?php echo $_smarty_tpl->tpl_vars['oUserProfile']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['oUserProfile']->value->getSkill();?>
</div>
		<div class="vote-label"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_skill'];?>
</div>
	</div>

	<?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value&&$_smarty_tpl->tpl_vars['oUserCurrent']->value->getId()!=$_smarty_tpl->tpl_vars['oUserProfile']->value->getId()){?>
		<a href="<?php echo smarty_function_router(array('page'=>'talk'),$_smarty_tpl);?>
add/?talk_users=<?php echo $_smarty_tpl->tpl_vars['oUserProfile']->value->getLogin();?>
"><button type="submit"  class="button button-action button-action-send-message"><i class="icon-synio-send-message"></i><span><?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_write_prvmsg'];?>
</span></button></a>
	<?php }?>

	<h2 class="page-header user-login word-wrap <?php if (!$_smarty_tpl->tpl_vars['oUserProfile']->value->getProfileName()){?>no-user-name<?php }?>" itemprop="nickname"><?php echo $_smarty_tpl->tpl_vars['oUserProfile']->value->getLogin();?>
</h2>
	
	<?php if ($_smarty_tpl->tpl_vars['oUserProfile']->value->getProfileName()){?>
		<p class="user-name" itemprop="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oUserProfile']->value->getProfileName(), ENT_QUOTES, 'UTF-8', true);?>
</p>
	<?php }?>
	
	<?php echo smarty_function_hook(array('run'=>'profile_top_end','oUserProfile'=>$_smarty_tpl->tpl_vars['oUserProfile']->value),$_smarty_tpl);?>

</div><?php }} ?>