<?php /* Smarty version Smarty-3.1.8, created on 2016-01-04 18:10:14
         compiled from "D:\OpenServer\domains\kprf.dev\www\plugins\receptiondesk\templates\skin\default\menu.receptiondesk.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11852568a8b5632e819-05185431%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d6c4d5c56de71ff1717305ad4623a3b6ecaaf3c' => 
    array (
      0 => 'D:\\OpenServer\\domains\\kprf.dev\\www\\plugins\\receptiondesk\\templates\\skin\\default\\menu.receptiondesk.tpl',
      1 => 1424273456,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11852568a8b5632e819-05185431',
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
  'unifunc' => 'content_568a8b563af6b1_46063780',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_568a8b563af6b1_46063780')) {function content_568a8b563af6b1_46063780($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include 'D:\\OpenServer\\domains\\kprf.dev\\www/engine/modules/viewer/plugs\\function.router.php';
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