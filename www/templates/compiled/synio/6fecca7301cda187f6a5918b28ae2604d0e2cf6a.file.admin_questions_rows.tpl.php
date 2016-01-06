<?php /* Smarty version Smarty-3.1.8, created on 2015-06-10 17:02:25
         compiled from "/home/vxeeuesn/public_html/_sokol/plugins/receptiondesk/templates/skin/default/admin_questions_rows.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17606173595578437183c6d6-11970839%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6fecca7301cda187f6a5918b28ae2604d0e2cf6a' => 
    array (
      0 => '/home/vxeeuesn/public_html/_sokol/plugins/receptiondesk/templates/skin/default/admin_questions_rows.tpl',
      1 => 1424273456,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17606173595578437183c6d6-11970839',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aQuestionList' => 0,
    'oQuestion' => 0,
    'aLang' => 0,
    'oFile' => 0,
    'aPaging' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_557843718c5505_69682106',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557843718c5505_69682106')) {function content_557843718c5505_69682106($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include '/home/vxeeuesn/public_html/_sokol/engine/modules/viewer/plugs/function.router.php';
if (!is_callable('smarty_function_date_format')) include '/home/vxeeuesn/public_html/_sokol/engine/modules/viewer/plugs/function.date_format.php';
?><?php if (count($_smarty_tpl->tpl_vars['aQuestionList']->value)>0){?>

	<?php  $_smarty_tpl->tpl_vars['oQuestion'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oQuestion']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aQuestionList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oQuestion']->key => $_smarty_tpl->tpl_vars['oQuestion']->value){
$_smarty_tpl->tpl_vars['oQuestion']->_loop = true;
?>

		<article class="topic topic-type-photoset js-topic">
		<header class="topic-header">
			<a href="<?php echo smarty_function_router(array('page'=>'admin'),$_smarty_tpl);?>
receptiondesk/question/<?php echo $_smarty_tpl->tpl_vars['oQuestion']->value->getId();?>
.html" class="button button-primary fl-r"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['receptiondesk']['receptiondesk_admin_receptiondesk_list_answer'];?>
</a>
			<h2 class="topic-title word-wrap"> 
				#<?php echo $_smarty_tpl->tpl_vars['oQuestion']->value->getId();?>
 <span>&raquo;</span> 
				<a href="<?php echo smarty_function_router(array('page'=>'admin'),$_smarty_tpl);?>
receptiondesk/category/<?php echo $_smarty_tpl->tpl_vars['oQuestion']->value->getCategory()->getUrl();?>
/"><?php echo $_smarty_tpl->tpl_vars['oQuestion']->value->getCategory()->getTitle();?>
</a> <span>&raquo;</span> 
				<?php echo smarty_function_date_format(array('date'=>$_smarty_tpl->tpl_vars['oQuestion']->value->getDateAdd(),'hours_back'=>"12",'minutes_back'=>"60",'now'=>"60",'day'=>"day H:i",'format'=>"j F Y, H:i"),$_smarty_tpl);?>

			<?php if ($_smarty_tpl->tpl_vars['oQuestion']->value->getTextHide()){?>
				<i class="icon-synio-topic-draft js-tip-help" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['receptiondesk']['receptiondesk_admin_answer_create_text_hide_notice'];?>
"></i>
			<?php }?>
			</h2>
			<div class="topic-info">
				<?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['receptiondesk']['receptiondesk_admin_receptiondesk_list_name'];?>
: <?php if ($_smarty_tpl->tpl_vars['oQuestion']->value->getAuthorName()){?><?php echo $_smarty_tpl->tpl_vars['oQuestion']->value->getAuthorName();?>
 <?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['receptiondesk']['receptiondesk_admin_receptiondesk_list_guest'];?>
 <?php }?>
				<span>&raquo;</span>
				<?php if ($_smarty_tpl->tpl_vars['oQuestion']->value->getAuthorMail()){?><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['receptiondesk']['receptiondesk_admin_receptiondesk_list_mail'];?>
: <?php echo $_smarty_tpl->tpl_vars['oQuestion']->value->getAuthorMail();?>
<?php if ($_smarty_tpl->tpl_vars['oQuestion']->value->getAuthorMailHide()){?> <span>(<?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['receptiondesk']['receptiondesk_admin_receptiondesk_list_hide'];?>
)</span><?php }?> <span>&raquo;</span><?php }?>
				<?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['receptiondesk']['receptiondesk_admin_receptiondesk_list_ip'];?>
: <?php echo $_smarty_tpl->tpl_vars['oQuestion']->value->getUserIp();?>

				<span>&raquo;</span>
				<a href="<?php echo smarty_function_router(array('page'=>'admin'),$_smarty_tpl);?>
receptiondesk/question/edit/<?php echo $_smarty_tpl->tpl_vars['oQuestion']->value->getId();?>
.html"><i class="icon-edit" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['receptiondesk']['receptiondesk_admin_question_edit_title'];?>
"></i></a>
				<a href="#" onclick="ls.receptiondesk.removeQuestion(<?php echo $_smarty_tpl->tpl_vars['oQuestion']->value->getId();?>
);return false;"><i class="icon-remove" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['receptiondesk']['receptiondesk_admin_question_remove_title'];?>
"></i></a>
			</div>
		</header>

		<div class="topic-content text">
			<?php echo $_smarty_tpl->tpl_vars['oQuestion']->value->getText();?>

		</div>

	<?php if ($_smarty_tpl->tpl_vars['oQuestion']->value->getAnswerText()){?>
		<header class="topic-header">
			<div class="topic-info">
				<?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['receptiondesk']['receptiondesk_admin_answer_create_date'];?>
 <?php echo smarty_function_date_format(array('date'=>$_smarty_tpl->tpl_vars['oQuestion']->value->getAnswerDateAdd(),'format'=>"j F Y, H:i"),$_smarty_tpl);?>

			</div>
		</header>
		<div class="stream-comment-preview">
			<?php echo $_smarty_tpl->tpl_vars['oQuestion']->value->getAnswerText();?>

		</div>
		<hr>
	<?php }?>

		<div class="topic-photo-images">
			<ul id="topic-photo-images">
			<?php  $_smarty_tpl->tpl_vars['oFile'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oFile']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['oQuestion']->value->getFiles(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oFile']->key => $_smarty_tpl->tpl_vars['oFile']->value){
$_smarty_tpl->tpl_vars['oFile']->_loop = true;
?>
				<li><a class="receptiondesk_file_image" href="<?php echo $_smarty_tpl->tpl_vars['oFile']->value->getWebPath(1000);?>
" rel="[photoset]"  title="<?php echo $_smarty_tpl->tpl_vars['oFile']->value->getName();?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['oFile']->value->getWebPath('100crop');?>
" alt="<?php echo $_smarty_tpl->tpl_vars['oFile']->value->getName();?>
" /></a></li>                                    
			<?php } ?>
			</ul>
		</div>

		<footer class="topic-footer">
			<ul class="topic-tags">
				<li><?php if ($_smarty_tpl->tpl_vars['oQuestion']->value->getAuthorName()){?><span>&raquo;</span> <?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['receptiondesk']['receptiondesk_admin_receptiondesk_list_name'];?>
: <?php echo $_smarty_tpl->tpl_vars['oQuestion']->value->getAuthorName();?>
<?php if ($_smarty_tpl->tpl_vars['oQuestion']->value->getAuthorNameHide()){?> <span>(<?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['receptiondesk']['receptiondesk_admin_receptiondesk_list_hide'];?>
)</span><?php }?></br ><?php }?></li>
				<li><?php if ($_smarty_tpl->tpl_vars['oQuestion']->value->getAuthorAddress()){?><span>&raquo;</span> <?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['receptiondesk']['receptiondesk_admin_receptiondesk_list_address'];?>
: <?php echo $_smarty_tpl->tpl_vars['oQuestion']->value->getAuthorAddress();?>
<?php if ($_smarty_tpl->tpl_vars['oQuestion']->value->getAuthorAddressHide()){?> <span>(<?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['receptiondesk']['receptiondesk_admin_receptiondesk_list_hide'];?>
)</span><?php }?></br ><?php }?></li>
				<li><?php if ($_smarty_tpl->tpl_vars['oQuestion']->value->getAuthorPhone()){?><span>&raquo;</span> <?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['receptiondesk']['receptiondesk_admin_receptiondesk_list_phone'];?>
: <?php echo $_smarty_tpl->tpl_vars['oQuestion']->value->getAuthorPhone();?>
<?php if ($_smarty_tpl->tpl_vars['oQuestion']->value->getAuthorPhoneHide()){?> <span>(<?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['receptiondesk']['receptiondesk_admin_receptiondesk_list_hide'];?>
)</span><?php }?></br ><?php }?></li>
			</ul>
		</footer>
		</article>

	<?php } ?>

	<?php echo $_smarty_tpl->getSubTemplate ('paging.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('aPaging'=>$_smarty_tpl->tpl_vars['aPaging']->value), 0);?>

<?php }else{ ?>
	<?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['receptiondesk']['receptiondesk_questions_list_empty'];?>

<?php }?><?php }} ?>