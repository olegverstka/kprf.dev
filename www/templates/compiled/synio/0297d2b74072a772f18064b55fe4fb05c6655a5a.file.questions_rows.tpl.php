<?php /* Smarty version Smarty-3.1.8, created on 2016-01-04 18:10:14
         compiled from "D:\OpenServer\domains\kprf.dev\www\plugins\receptiondesk\templates\skin\default\questions_rows.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31565568a8b56787da0-86315852%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0297d2b74072a772f18064b55fe4fb05c6655a5a' => 
    array (
      0 => 'D:\\OpenServer\\domains\\kprf.dev\\www\\plugins\\receptiondesk\\templates\\skin\\default\\questions_rows.tpl',
      1 => 1424273456,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31565568a8b56787da0-86315852',
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
  'unifunc' => 'content_568a8b568435c1_95306842',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_568a8b568435c1_95306842')) {function content_568a8b568435c1_95306842($_smarty_tpl) {?><?php if (!is_callable('smarty_function_date_format')) include 'D:\\OpenServer\\domains\\kprf.dev\\www/engine/modules/viewer/plugs\\function.date_format.php';
?><?php if (count($_smarty_tpl->tpl_vars['aQuestionList']->value)>0){?>

	<?php  $_smarty_tpl->tpl_vars['oQuestion'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oQuestion']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aQuestionList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oQuestion']->key => $_smarty_tpl->tpl_vars['oQuestion']->value){
$_smarty_tpl->tpl_vars['oQuestion']->_loop = true;
?>

		<article class="topic topic-type-photoset js-topic">
		<header class="topic-header">
			<h2 class="topic-title word-wrap"><a href="<?php echo $_smarty_tpl->tpl_vars['oQuestion']->value->getCategory()->getUrlFull();?>
"><?php echo $_smarty_tpl->tpl_vars['oQuestion']->value->getCategory()->getTitle();?>
</a> <span>&raquo;</span> <?php echo smarty_function_date_format(array('date'=>$_smarty_tpl->tpl_vars['oQuestion']->value->getDateAdd(),'hours_back'=>"12",'minutes_back'=>"60",'now'=>"60",'day'=>"day H:i",'format'=>"j F Y, H:i"),$_smarty_tpl);?>
</h2>
			<div class="topic-info">
				<?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['receptiondesk']['receptiondesk_admin_receptiondesk_list_name'];?>
: <?php if ($_smarty_tpl->tpl_vars['oQuestion']->value->getAuthorName()&&!$_smarty_tpl->tpl_vars['oQuestion']->value->getAuthorNameHide()){?><?php echo $_smarty_tpl->tpl_vars['oQuestion']->value->getAuthorName();?>
 <?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['receptiondesk']['receptiondesk_admin_receptiondesk_list_guest'];?>
 <?php }?>
				<span>&raquo;</span>
				<?php if ($_smarty_tpl->tpl_vars['oQuestion']->value->getAuthorMail()&&!$_smarty_tpl->tpl_vars['oQuestion']->value->getAuthorMailHide()){?><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['receptiondesk']['receptiondesk_admin_receptiondesk_list_mail'];?>
: <?php echo $_smarty_tpl->tpl_vars['oQuestion']->value->getAuthorMail();?>
 <span>&raquo;</span><?php }?><br /> 
			</div>
		</header>
		<div class="topic-content text">
			<?php echo $_smarty_tpl->tpl_vars['oQuestion']->value->getText();?>

		</div>
	<?php if ($_smarty_tpl->tpl_vars['oQuestion']->value->getAnswerText()){?>
		<header class="topic-header">
			<div class="topic-info">
				<?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['receptiondesk']['receptiondesk_question_answer_date'];?>
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
			<?php if ($_smarty_tpl->tpl_vars['oQuestion']->value->getAuthorName()&&!$_smarty_tpl->tpl_vars['oQuestion']->value->getAuthorNameHide()){?>
				<li><span>&raquo;</span> <?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['receptiondesk']['receptiondesk_admin_receptiondesk_list_name'];?>
: <?php echo $_smarty_tpl->tpl_vars['oQuestion']->value->getAuthorName();?>
</br ></li>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['oQuestion']->value->getAuthorAddress()&&!$_smarty_tpl->tpl_vars['oQuestion']->value->getAuthorAddressHide()){?>
				<li><span>&raquo;</span> <?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['receptiondesk']['receptiondesk_admin_receptiondesk_list_address'];?>
: <?php echo $_smarty_tpl->tpl_vars['oQuestion']->value->getAuthorAddress();?>
</br ></li>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['oQuestion']->value->getAuthorPhone()&&!$_smarty_tpl->tpl_vars['oQuestion']->value->getAuthorPhoneHide()){?>
				<li><span>&raquo;</span> <?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['receptiondesk']['receptiondesk_admin_receptiondesk_list_phone'];?>
: <?php echo $_smarty_tpl->tpl_vars['oQuestion']->value->getAuthorPhone();?>
</br ></li>
			<?php }?>
			</ul>
		</footer>
		</article>

	<?php } ?>

	<?php echo $_smarty_tpl->getSubTemplate ('paging.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('aPaging'=>$_smarty_tpl->tpl_vars['aPaging']->value), 0);?>

<?php }else{ ?>
	<?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['receptiondesk']['receptiondesk_questions_list_empty'];?>

<?php }?><?php }} ?>