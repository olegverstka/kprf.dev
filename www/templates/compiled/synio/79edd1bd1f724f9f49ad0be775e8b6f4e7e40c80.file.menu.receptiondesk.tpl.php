<?php /* Smarty version Smarty-3.1.8, created on 2015-06-10 11:44:22
         compiled from "/home/vxeeuesn/public_html/_sokol/plugins/receptiondesk/templates/skin/default/menu.receptiondesk.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2688052565577f8e622bb72-55530544%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '79edd1bd1f724f9f49ad0be775e8b6f4e7e40c80' => 
    array (
      0 => '/home/vxeeuesn/public_html/_sokol/plugins/receptiondesk/templates/skin/default/menu.receptiondesk.tpl',
      1 => 1424273456,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2688052565577f8e622bb72-55530544',
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
  'unifunc' => 'content_5577f8e62601d6_72822836',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5577f8e62601d6_72822836')) {function content_5577f8e62601d6_72822836($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include '/home/vxeeuesn/public_html/_sokol/engine/modules/viewer/plugs/function.router.php';
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