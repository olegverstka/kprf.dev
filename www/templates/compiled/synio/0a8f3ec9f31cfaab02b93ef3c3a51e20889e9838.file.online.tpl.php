<?php /* Smarty version Smarty-3.1.8, created on 2015-08-19 02:25:25
         compiled from "/home/vxeeuesn/public_html/_sokol/templates/skin/synio/actions/ActionPeople/online.tpl" */ ?>
<?php /*%%SmartyHeaderCode:61026296955d3bee5cfb4c9-34212041%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a8f3ec9f31cfaab02b93ef3c3a51e20889e9838' => 
    array (
      0 => '/home/vxeeuesn/public_html/_sokol/templates/skin/synio/actions/ActionPeople/online.tpl',
      1 => 1424273455,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '61026296955d3bee5cfb4c9-34212041',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aLang' => 0,
    'aUsersLast' => 0,
    'oUserList' => 0,
    'oUserCurrent' => 0,
    'oUserNote' => 0,
    'oSession' => 0,
    'aPaging' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d3bee662e0b9_28203463',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d3bee662e0b9_28203463')) {function content_55d3bee662e0b9_28203463($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include '/home/vxeeuesn/public_html/_sokol/engine/modules/viewer/plugs/function.router.php';
if (!is_callable('smarty_function_date_format')) include '/home/vxeeuesn/public_html/_sokol/engine/modules/viewer/plugs/function.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('menu'=>'people'), 0);?>


<table class="table table-users">
	<thead>
	<tr>
		<th class="cell-name cell-tab"><div class="cell-tab-inner"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['user'];?>
</div></th>
		<th>&nbsp;</th>
		<th class="cell-date cell-tab"><div class="cell-tab-inner active"><span><?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_date_last'];?>
</span></div></th>
		<th class="cell-rating cell-tab"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_rating'];?>
</th>
	</tr>
	</thead>

	<tbody>
	<?php if ($_smarty_tpl->tpl_vars['aUsersLast']->value){?>
		<?php  $_smarty_tpl->tpl_vars['oUserList'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oUserList']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aUsersLast']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oUserList']->key => $_smarty_tpl->tpl_vars['oUserList']->value){
$_smarty_tpl->tpl_vars['oUserList']->_loop = true;
?>
			<?php $_smarty_tpl->tpl_vars["oSession"] = new Smarty_variable($_smarty_tpl->tpl_vars['oUserList']->value->getSession(), null, 0);?>
			<?php $_smarty_tpl->tpl_vars["oUserNote"] = new Smarty_variable($_smarty_tpl->tpl_vars['oUserList']->value->getUserNote(), null, 0);?>
			<tr>
				<td class="cell-name">
					<a href="<?php echo $_smarty_tpl->tpl_vars['oUserList']->value->getUserWebPath();?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['oUserList']->value->getProfileAvatarPath(48);?>
" alt="avatar" class="avatar" /></a>
					<div class="name <?php if (!$_smarty_tpl->tpl_vars['oUserList']->value->getProfileName()){?>no-realname<?php }?>">
						<p class="username word-wrap"><a href="<?php echo $_smarty_tpl->tpl_vars['oUserList']->value->getUserWebPath();?>
"><?php echo $_smarty_tpl->tpl_vars['oUserList']->value->getLogin();?>
</a></p>
						<?php if ($_smarty_tpl->tpl_vars['oUserList']->value->getProfileName()){?><p class="realname"><?php echo $_smarty_tpl->tpl_vars['oUserList']->value->getProfileName();?>
</p><?php }?>
					</div>
				</td>
				<td>
					<?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value){?>
						<?php if ($_smarty_tpl->tpl_vars['oUserNote']->value){?>
							<button type="button" class="button button-action button-action-note js-infobox" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oUserNote']->value->getText(), ENT_QUOTES, 'UTF-8', true);?>
"><i class="icon-synio-comments-green"></i></button>
						<?php }?>
						<a href="<?php echo smarty_function_router(array('page'=>'talk'),$_smarty_tpl);?>
add/?talk_users=<?php echo $_smarty_tpl->tpl_vars['oUserList']->value->getLogin();?>
"><button type="submit"  class="button button-action button-action-send-message"><i class="icon-synio-send-message"></i><span><?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_write_prvmsg'];?>
</span></button></a>
					<?php }?>
				</td>
				<td>
					<?php if ($_smarty_tpl->tpl_vars['oSession']->value){?>
						<?php echo smarty_function_date_format(array('date'=>$_smarty_tpl->tpl_vars['oSession']->value->getDateLast(),'hours_back'=>"12",'minutes_back'=>"60",'now'=>"60",'day'=>"day H:i",'format'=>"j F, H:i"),$_smarty_tpl);?>

					<?php }?>
				</td>
				<td class="cell-rating <?php if ($_smarty_tpl->tpl_vars['oUserList']->value->getRating()<0){?>negative<?php }?>"><strong><?php echo $_smarty_tpl->tpl_vars['oUserList']->value->getRating();?>
</strong></td>
			</tr>
		<?php } ?>
	<?php }else{ ?>
	<tr>
		<td colspan="4">
			<?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_empty'];?>

		</td>
	</tr>
	<?php }?>
	</tbody>
</table>


<?php echo $_smarty_tpl->getSubTemplate ('paging.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('aPaging'=>$_smarty_tpl->tpl_vars['aPaging']->value), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>