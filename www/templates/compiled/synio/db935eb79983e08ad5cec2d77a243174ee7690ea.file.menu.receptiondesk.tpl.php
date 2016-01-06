<?php /* Smarty version Smarty-3.1.8, created on 2015-06-10 17:40:32
         compiled from "/home/vxeeuesn/public_html/_sokol/templates/skin/synio/menu.receptiondesk.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13119029355784c60caab33-83895304%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db935eb79983e08ad5cec2d77a243174ee7690ea' => 
    array (
      0 => '/home/vxeeuesn/public_html/_sokol/templates/skin/synio/menu.receptiondesk.tpl',
      1 => 1424273455,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13119029355784c60caab33-83895304',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sMenuItemSelect' => 0,
    'aLang' => 0,
    'oUserCurrent' => 0,
    'iCountQuestionNew' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55784c60cc8413_34697197',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55784c60cc8413_34697197')) {function content_55784c60cc8413_34697197($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include '/home/vxeeuesn/public_html/_sokol/engine/modules/viewer/plugs/function.router.php';
?><ul class="nav nav-menu">
	<li <?php if ($_smarty_tpl->tpl_vars['sMenuItemSelect']->value=='receptiondesk'){?>class="active"<?php }?>>
		<a href="<?php echo smarty_function_router(array('page'=>'receptiondesk'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['receptiondesk']['receptiondesk_questions_list'];?>
</a>
	</li>
	<li <?php if ($_smarty_tpl->tpl_vars['sMenuItemSelect']->value=='receptiondesk_create'){?>class="active"<?php }?>>
		<a href="<?php echo smarty_function_router(array('page'=>'receptiondesk'),$_smarty_tpl);?>
create/" class="js-question-form-show sign-in"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['receptiondesk']['receptiondesk_admin_question_create_menu_title'];?>
</a>
	</li>
	<li <?php if ($_smarty_tpl->tpl_vars['sMenuItemSelect']->value=='index'){?>class="active"<?php }?>>
		<a href="<?php echo smarty_function_router(array('page'=>'index'),$_smarty_tpl);?>
" class="js-question-form-show sign-in"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['topic_title'];?>
</a>
	</li>
<?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value&&$_smarty_tpl->tpl_vars['oUserCurrent']->value->isAdministrator()){?>
	<li>
		<a href="<?php echo smarty_function_router(array('page'=>'admin'),$_smarty_tpl);?>
receptiondesk/"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['receptiondesk']['receptiondesk_admin_receptiondesk_list_new'];?>
 <?php if ($_smarty_tpl->tpl_vars['iCountQuestionNew']->value>0){?>+ <?php echo $_smarty_tpl->tpl_vars['iCountQuestionNew']->value;?>
<?php }?></a>
	</li>
<?php }?>
</ul><?php }} ?>