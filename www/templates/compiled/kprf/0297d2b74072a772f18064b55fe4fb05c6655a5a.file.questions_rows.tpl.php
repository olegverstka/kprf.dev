<?php /* Smarty version Smarty-3.1.8, created on 2016-01-07 16:38:40
         compiled from "D:\OpenServer\domains\kprf.dev\www\plugins\receptiondesk\templates\skin\default\questions_rows.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12717568a931242d672-60931228%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0297d2b74072a772f18064b55fe4fb05c6655a5a' => 
    array (
      0 => 'D:\\OpenServer\\domains\\kprf.dev\\www\\plugins\\receptiondesk\\templates\\skin\\default\\questions_rows.tpl',
      1 => 1452173917,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12717568a931242d672-60931228',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_568a93124c9a99_39380554',
  'variables' => 
  array (
    'aQuestionList' => 0,
    'oQuestion' => 0,
    'aLang' => 0,
    'aPaging' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_568a93124c9a99_39380554')) {function content_568a93124c9a99_39380554($_smarty_tpl) {?><?php if (!is_callable('smarty_function_date_format')) include 'D:\\OpenServer\\domains\\kprf.dev\\www/engine/modules/viewer/plugs\\function.date_format.php';
?><?php if (count($_smarty_tpl->tpl_vars['aQuestionList']->value)>0){?>

	<?php  $_smarty_tpl->tpl_vars['oQuestion'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oQuestion']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aQuestionList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oQuestion']->key => $_smarty_tpl->tpl_vars['oQuestion']->value){
$_smarty_tpl->tpl_vars['oQuestion']->_loop = true;
?>

		<article class="topic">
			<header class="topic-header">
				<div class="col-md-9">
					<h2 class="topic-title word-wrap">
						<a href="<?php echo $_smarty_tpl->tpl_vars['oQuestion']->value->getCategory()->getUrlFull();?>
"><?php echo $_smarty_tpl->tpl_vars['oQuestion']->value->getCategory()->getTitle();?>
</a>
					</h2>
				</div>
				<div class="col-md-3">
					<p class="date">
						<?php echo smarty_function_date_format(array('date'=>$_smarty_tpl->tpl_vars['oQuestion']->value->getDateAdd(),'hours_back'=>"12",'minutes_back'=>"60",'now'=>"60",'day'=>"day H:i",'format'=>"j F Y, H:i"),$_smarty_tpl);?>

					</p>
				</div>
				<div class="col-md-12">
					<div class="topic-info">
						<?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['receptiondesk']['receptiondesk_admin_receptiondesk_list_name'];?>
: <?php if ($_smarty_tpl->tpl_vars['oQuestion']->value->getAuthorName()&&!$_smarty_tpl->tpl_vars['oQuestion']->value->getAuthorNameHide()){?><?php echo $_smarty_tpl->tpl_vars['oQuestion']->value->getAuthorName();?>
 <?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['receptiondesk']['receptiondesk_admin_receptiondesk_list_guest'];?>
 <?php }?>
						<span>&raquo;</span>
						<?php if ($_smarty_tpl->tpl_vars['oQuestion']->value->getAuthorMail()&&!$_smarty_tpl->tpl_vars['oQuestion']->value->getAuthorMailHide()){?><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['receptiondesk']['receptiondesk_admin_receptiondesk_list_mail'];?>
: <?php echo $_smarty_tpl->tpl_vars['oQuestion']->value->getAuthorMail();?>
 <span>&raquo;</span><?php }?>
					</div>
				</div>
			</header>
			<div class="col-md-12">
				<div class="topic-content text"><?php echo $_smarty_tpl->tpl_vars['oQuestion']->value->getText();?>
</div>
			</div>
			<?php if ($_smarty_tpl->tpl_vars['oQuestion']->value->getAnswerText()){?>
				<div class="col-md-12">
					<div class="stream-comment-preview"><?php echo $_smarty_tpl->tpl_vars['oQuestion']->value->getAnswerText();?>
</div>
				</div>
				<div class="col-md-12">
					<header class="topic-header">
						<div class="topic-date"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['receptiondesk']['receptiondesk_question_answer_date'];?>
 <?php echo smarty_function_date_format(array('date'=>$_smarty_tpl->tpl_vars['oQuestion']->value->getAnswerDateAdd(),'format'=>"j F Y, H:i"),$_smarty_tpl);?>
</div>
					</header>
				</div>
			<?php }?>
		</article><!-- .topic -->

	<?php } ?>

	<?php echo $_smarty_tpl->getSubTemplate ('paging.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('aPaging'=>$_smarty_tpl->tpl_vars['aPaging']->value), 0);?>

<?php }else{ ?>
	<?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['receptiondesk']['receptiondesk_questions_list_empty'];?>

<?php }?><?php }} ?>