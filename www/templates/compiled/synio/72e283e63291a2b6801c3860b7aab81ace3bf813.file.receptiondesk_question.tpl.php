<?php /* Smarty version Smarty-3.1.8, created on 2015-06-10 17:02:35
         compiled from "/home/vxeeuesn/public_html/_sokol/plugins/receptiondesk/templates/skin/default/actions/ActionAdmin/receptiondesk_question.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20645589435577f7813d4a34-54679552%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '72e283e63291a2b6801c3860b7aab81ace3bf813' => 
    array (
      0 => '/home/vxeeuesn/public_html/_sokol/plugins/receptiondesk/templates/skin/default/actions/ActionAdmin/receptiondesk_question.tpl',
      1 => 1433925733,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20645589435577f7813d4a34-54679552',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5577f781456668_67656656',
  'variables' => 
  array (
    'aLang' => 0,
    'oQuestion' => 0,
    'oFile' => 0,
    'oConfig' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5577f781456668_67656656')) {function content_5577f781456668_67656656($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include '/home/vxeeuesn/public_html/_sokol/engine/modules/viewer/plugs/function.router.php';
if (!is_callable('smarty_function_date_format')) include '/home/vxeeuesn/public_html/_sokol/engine/modules/viewer/plugs/function.date_format.php';
if (!is_callable('smarty_function_cfg')) include '/home/vxeeuesn/public_html/_sokol/engine/modules/viewer/plugs/function.cfg.php';
?><?php $_smarty_tpl->tpl_vars["noSidebar"] = new Smarty_variable(true, null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('menu'=>"receptiondesk_admin"), 0);?>


<h2 class="page-header"><a href="<?php echo smarty_function_router(array('page'=>'admin'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['admin_header'];?>
</a> <span>&raquo;</span> <a href="<?php echo smarty_function_router(array('page'=>'admin'),$_smarty_tpl);?>
receptiondesk/"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['receptiondesk']['receptiondesk_admin_receptiondesk_title'];?>
</a></h2>

<article class="topic topic-type-photoset js-topic">
	<header class="topic-header">
		<h2 class="topic-title word-wrap"> #<?php echo $_smarty_tpl->tpl_vars['oQuestion']->value->getCategory()->getTitle();?>
 <span>&raquo;</span> <?php echo smarty_function_date_format(array('date'=>$_smarty_tpl->tpl_vars['oQuestion']->value->getDateAdd(),'hours_back'=>"12",'minutes_back'=>"60",'now'=>"60",'day'=>"day H:i",'format'=>"j F Y, H:i"),$_smarty_tpl);?>
</h2>
		<div class="topic-info">
			<?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['receptiondesk']['receptiondesk_admin_receptiondesk_list_name'];?>
: <?php if ($_smarty_tpl->tpl_vars['oQuestion']->value->getAuthorName()){?><?php echo $_smarty_tpl->tpl_vars['oQuestion']->value->getAuthorName();?>
 <?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['receptiondesk']['receptiondesk_admin_receptiondesk_list_guest'];?>
 <?php }?>
			<span>&raquo;</span>
			<?php if ($_smarty_tpl->tpl_vars['oQuestion']->value->getAuthorMail()){?><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['receptiondesk']['receptiondesk_admin_receptiondesk_list_mail'];?>
: <?php echo $_smarty_tpl->tpl_vars['oQuestion']->value->getAuthorMail();?>
 <span>&raquo;</span><?php }?>
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

	<div class="topic-photo-images">
		<ul id="topic-photo-images">

		<script type="text/javascript" src="<?php echo smarty_function_cfg(array('name'=>'path.root.engine_lib'),$_smarty_tpl);?>
/external/prettyPhoto/js/prettyPhoto.js"></script>	
		<link rel='stylesheet' type='text/css' href="<?php echo smarty_function_cfg(array('name'=>'path.root.engine_lib'),$_smarty_tpl);?>
/external/prettyPhoto/css/prettyPhoto.css" />
		<script type="text/javascript">
			jQuery(document).ready(function($) {	
				$('.receptiondesk_file_image').prettyPhoto({
					social_tools:'',
					show_title: false,
					slideshow:false,
					deeplinking: false
				});
			});
		</script>

		<?php  $_smarty_tpl->tpl_vars['oFile'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oFile']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['oQuestion']->value->getFiles(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oFile']->key => $_smarty_tpl->tpl_vars['oFile']->value){
$_smarty_tpl->tpl_vars['oFile']->_loop = true;
?>
			<li>
				<a class="receptiondesk_file_image" href="<?php echo $_smarty_tpl->tpl_vars['oFile']->value->getWebPath(1000);?>
" rel="[photoset]"  title="<?php echo $_smarty_tpl->tpl_vars['oFile']->value->getName();?>
">
					<img src="<?php echo $_smarty_tpl->tpl_vars['oFile']->value->getWebPath('100crop');?>
" alt="<?php echo $_smarty_tpl->tpl_vars['oFile']->value->getName();?>
" />
				</a>
			</li>                                    
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

<h2 class="page-header"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['receptiondesk']['receptiondesk_admin_answer_create_title'];?>
</h2>

<?php if ($_smarty_tpl->tpl_vars['oQuestion']->value->getTextHide()){?>
<p><ul class="system-message-error">
	<li>
		<strong><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['receptiondesk']['receptiondesk_admin_answer_create_text_hide_title'];?>
</strong>
		<?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['receptiondesk']['receptiondesk_admin_answer_create_text_hide_notice'];?>

	</li>
</ul></p>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['oConfig']->value->GetValue('plugin.receptiondesk.receptiondesk_create_answer_editor')&&!$_smarty_tpl->tpl_vars['oConfig']->value->GetValue('view.tinymce')){?>
	<?php echo $_smarty_tpl->getSubTemplate ('editor.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('sImgToLoad'=>'question_text','sSettingsMarkitup'=>'ls.settings.getMarkitupReceptiondeskAnswer()','sSettingsTinymce'=>'ls.settings.getMarkitupReceptiondeskAnswer()'), 0);?>

<?php }?>

<form method="POST" enctype="multipart/form-data" id="form_receptiondesk_answer" class="wrapper-content" onsubmit="return false;">

	<input type="hidden" name="question_id" value="<?php echo $_smarty_tpl->tpl_vars['oQuestion']->value->getid();?>
" />

	<p><label for="answer_text"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['receptiondesk']['receptiondesk_admin_answer_create_text_title'];?>
</label>
	<textarea name="answer_text" id="receptiondesk_answer_text" class="<?php if ($_smarty_tpl->tpl_vars['oConfig']->value->GetValue('plugin.receptiondesk.receptiondesk_create_answer_editor')&&!$_smarty_tpl->tpl_vars['oConfig']->value->GetValue('view.tinymce')){?>mce-editor markitup-editor question-text<?php }?> input-text input-width-full js-ajax-validate" rows="10"><?php echo $_smarty_tpl->tpl_vars['oQuestion']->value->getAnswerTextSource();?>
</textarea></p>

	<p><button type="submit" class="button button-primary fl-r" id="submit_answer" onclick="ls.receptiondesk.setAnswer();"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['receptiondesk']['receptiondesk_admin_answer_create_submit'];?>
</button>
		<small class="note"><input type="checkbox" id="receptiondesk_question_publish" name="question_publish" class="input-checkbox" value="1" <?php if ($_smarty_tpl->tpl_vars['oQuestion']->value->getPublish()){?>checked<?php }?> /><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['receptiondesk']['receptiondesk_admin_answer_create_publish'];?>
</small>
	<?php if ($_smarty_tpl->tpl_vars['oQuestion']->value->getAuthorMail()){?>
		<small class="note"><input type="checkbox" id="receptiondesk_answer_mail_send" name="answer_mail_send" class="input-checkbox" value="1" /><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['receptiondesk']['receptiondesk_admin_answer_create_send_mail'];?>
 (<?php echo $_smarty_tpl->tpl_vars['oQuestion']->value->getAuthorMail();?>
)</small>
	<?php }?></p>

</form>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>