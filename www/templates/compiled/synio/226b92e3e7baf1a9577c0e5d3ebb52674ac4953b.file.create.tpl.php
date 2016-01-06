<?php /* Smarty version Smarty-3.1.8, created on 2015-06-10 17:42:54
         compiled from "/home/vxeeuesn/public_html/_sokol/plugins/receptiondesk/templates/skin/default/actions/ActionReceptiondesk/create.tpl" */ ?>
<?php /*%%SmartyHeaderCode:62102351255784ceeedb426-56476551%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '226b92e3e7baf1a9577c0e5d3ebb52674ac4953b' => 
    array (
      0 => '/home/vxeeuesn/public_html/_sokol/plugins/receptiondesk/templates/skin/default/actions/ActionReceptiondesk/create.tpl',
      1 => 1424273456,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '62102351255784ceeedb426-56476551',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aLang' => 0,
    'aCategories' => 0,
    'oCategory' => 0,
    'oConfig' => 0,
    'LIVESTREET_SECURITY_KEY' => 0,
    '_aRequest' => 0,
    'aQuestionFiles' => 0,
    'sReceptiondeskTemplatePath' => 0,
    '_sPhpSessionName' => 0,
    '_sPhpSessionId' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55784cef03d709_20559941',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55784cef03d709_20559941')) {function content_55784cef03d709_20559941($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cfg')) include '/home/vxeeuesn/public_html/_sokol/engine/modules/viewer/plugs/function.cfg.php';
?><?php $_smarty_tpl->tpl_vars["noSidebar"] = new Smarty_variable(true, null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('menu'=>'receptiondesk'), 0);?>


<script type="text/javascript">
	jQuery(document).ready(function($){
		$('#form_receptiondesk_question').bind('submit',function(){
			ls.receptiondesk.setQuestion();
			return false;
		});
		if(jQuery.browser.flash && 1!=1){
			ls.receptiondesk.initSwfUpload({
				post_params: { }
			});
		}
	});
</script>

<form method="POST" enctype="multipart/form-data" id="receptiondesk-file-upload-form" onsubmit="return false;" class="modal modal-receptiondesk-category">

	<header class="modal-header">
		<h3><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['receptiondesk']['receptiondesk_admin_question_create_author_files_upload_title'];?>
</h3>
		<a href="#" class="close jqmClose"></a>
	</header>

	<div id="topic-photo-upload-input" class="topic-photo-upload-input modal-content">

		<label for="receptiondesk-upload-file"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['receptiondesk']['receptiondesk_admin_question_create_author_files_choose_file'];?>
:</label>
		<input type="file" id="receptiondesk-upload-file" name="Filedata" /><br><br>
		<input type="hidden" name="is_iframe" value="true" />
		<button type="submit" class="button button-primary" onclick="ls.receptiondesk.uploadFile();"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['receptiondesk']['receptiondesk_admin_question_create_author_files_choose'];?>
</button>
		<button type="submit" class="button" onclick="ls.receptiondesk.closeUploadForm();"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['receptiondesk']['receptiondesk_admin_question_create_author_files_close'];?>
</button>

	</div>

</form>

<h2 class="page-header"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['receptiondesk']['receptiondesk_receptiondesk'];?>
</h2>

<div class="wrapper-content">
	<div class="blog">
		<h3><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['receptiondesk']['receptiondesk_receptiondesk_title'];?>
</h3>
		<p>
			<ul class="system-message-notice receptiondesk-question-notice">
				<li>
					<strong><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['receptiondesk']['receptiondesk_admin_question_create_ok_title'];?>
</strong>
					<?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['receptiondesk']['receptiondesk_admin_question_create_ok_notice'];?>

				</li>
			</ul>
		</p>
		<p><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['receptiondesk']['receptiondesk_receptiondesk_text'];?>
</p>
		<p>
			<?php  $_smarty_tpl->tpl_vars['oCategory'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oCategory']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aCategories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oCategory']->key => $_smarty_tpl->tpl_vars['oCategory']->value){
$_smarty_tpl->tpl_vars['oCategory']->_loop = true;
?>
			 - <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oCategory']->value->getTitle(), ENT_QUOTES, 'UTF-8', true);?>
<br />
			<?php } ?>
		</p>
	</div>
</div>

<br />
<h2 class="page-header"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['receptiondesk']['receptiondesk_admin_question_create_title'];?>
</h2>

<?php if ($_smarty_tpl->tpl_vars['oConfig']->value->GetValue('plugin.receptiondesk.receptiondesk_create_editor')&&!$_smarty_tpl->tpl_vars['oConfig']->value->GetValue('view.tinymce')){?>
	<?php echo $_smarty_tpl->getSubTemplate ('editor.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('sImgToLoad'=>'question_text','sSettingsMarkitup'=>'ls.settings.getMarkitupReceptiondesk()','sSettingsTinymce'=>'ls.settings.getMarkitupReceptiondesk()'), 0);?>

<?php }?>

<form method="POST" enctype="multipart/form-data" id="form_receptiondesk_question" class="wrapper-content" onsubmit="return false;">

	<input type="hidden" name="security_ls_key" value="<?php echo $_smarty_tpl->tpl_vars['LIVESTREET_SECURITY_KEY']->value;?>
" />

	<p>
		<small class="note"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['receptiondesk']['receptiondesk_admin_question_create_author_title'];?>
</small>
	</p>

	<p>
		<label for="question_category_id"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['receptiondesk']['receptiondesk_admin_question_create_category_title'];?>
</label>
		<select name="question_category_id" id="question_category_id" class="input-width-full js-ajax-validate">
			<option value="0"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['receptiondesk']['receptiondesk_admin_question_create_category_select'];?>
</option>
		<?php  $_smarty_tpl->tpl_vars['oCategory'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oCategory']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aCategories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oCategory']->key => $_smarty_tpl->tpl_vars['oCategory']->value){
$_smarty_tpl->tpl_vars['oCategory']->_loop = true;
?>
			<option value="<?php echo $_smarty_tpl->tpl_vars['oCategory']->value->getId();?>
" <?php if ($_smarty_tpl->tpl_vars['_aRequest']->value['question_category_id']==$_smarty_tpl->tpl_vars['oCategory']->value->getId()){?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oCategory']->value->getTitle(), ENT_QUOTES, 'UTF-8', true);?>
</option>
		<?php } ?>
		</select>
		<small class="note"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['receptiondesk']['receptiondesk_admin_question_create_category_notice'];?>
</small>
		<small class="validate-error-hide validate-error-field-question_category_id"></small>
	</p>

	<p>
		<label for="question_text"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['receptiondesk']['receptiondesk_admin_question_create_text_title'];?>
</label>
		<textarea name="question_text" id="receptiondesk_question_text" class="<?php if ($_smarty_tpl->tpl_vars['oConfig']->value->GetValue('plugin.receptiondesk.receptiondesk_create_editor')&&!$_smarty_tpl->tpl_vars['oConfig']->value->GetValue('view.tinymce')){?>mce-editor markitup-editor question-text<?php }?> input-text input-width-full js-ajax-validate" rows="10"><?php echo $_smarty_tpl->tpl_vars['_aRequest']->value['question_text'];?>
</textarea>
		<small class="note input-width-500 fl-r"><input type="checkbox" id="receptiondesk_question_text_hide" name="question_text_hide" class="input-checkbox" value="1" /><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['receptiondesk']['receptiondesk_admin_question_create_text_hide_title'];?>
</small>
		<small class="note"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['receptiondesk']['receptiondesk_admin_question_create_text_notice'];?>
</small>
		<small class="validate-error-hide validate-error-field-question_text"></small>
		<small class="validate-error-hide validate-error-field-question_text_hash"></small>
	</p>

	<p>
		<label for="receptiondesk_file_upload"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['receptiondesk']['receptiondesk_admin_question_create_author_files_title'];?>
</label>
		<a href="#" id="receptiondesk_file_upload" class="button button-primary fl-r"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['receptiondesk']['receptiondesk_admin_question_create_author_files_choose'];?>
</a>
		<div id="receptiondesk_file_list">
		<?php  $_smarty_tpl->tpl_vars['oFile'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oFile']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aQuestionFiles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oFile']->key => $_smarty_tpl->tpl_vars['oFile']->value){
$_smarty_tpl->tpl_vars['oFile']->_loop = true;
?>
			<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['sReceptiondeskTemplatePath']->value)."admin_files_row.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<?php } ?>
		</div>
		<small class="note"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['receptiondesk']['receptiondesk_admin_question_create_author_files_notice'];?>
</small>
	</p>

	<p>
		<input type="text" name="question_author_mail" id="receptiondesk_question_author_mail" class="input-text input-width-500 fl-r js-ajax-validate">
		<label for="question_author_mail"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['receptiondesk']['receptiondesk_admin_question_create_author_mail_title'];?>
</label>
		<small class="note input-width-500 fl-r"><input type="checkbox" id="receptiondesk_question_author_mail_hide" name="question_author_mail_hide" class="input-checkbox" value="1" /><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['receptiondesk']['receptiondesk_admin_question_create_author_mail_hide_title'];?>
</small>
		<small class="note"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['receptiondesk']['receptiondesk_admin_question_create_author_mail_notice'];?>
</small>
		<small class="validate-error-hide validate-error-field-question_author_mail"></small>
	</p>

	<p>
		<small class="note"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['receptiondesk']['receptiondesk_admin_question_create_author_notice'];?>
</small>
	</p>

	<p>
		<input type="text" name="question_author_name" id="receptiondesk_question_author_name" class="input-text input-width-500 fl-r">
		<label for="question_author_name"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['receptiondesk']['receptiondesk_admin_question_create_author_name_title'];?>
</label>
		<small class="note input-width-500 fl-r"><input type="checkbox" id="receptiondesk_question_author_name_hide" name="question_author_name_hide" class="input-checkbox" value="1" /><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['receptiondesk']['receptiondesk_admin_question_create_author_name_hide_title'];?>
</small>
		<small class="note"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['receptiondesk']['receptiondesk_admin_question_create_author_name_notice'];?>
</small>
		<small class="validate-error-hide validate-error-field-question_author_name"></small>
	</p>

	<p>
		<input type="text" name="question_author_address" id="receptiondesk_question_author_address" class="input-text input-width-500 fl-r">
		<label for="question_author_address"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['receptiondesk']['receptiondesk_admin_question_create_author_address_title'];?>
</label>
		<small class="note input-width-500 fl-r"><input type="checkbox" id="receptiondesk_question_author_address_hide" name="question_author_address_hide" class="input-checkbox" value="1" /><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['receptiondesk']['receptiondesk_admin_question_create_author_address_hide_title'];?>
</small>
		<small class="note"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['receptiondesk']['receptiondesk_admin_question_create_author_address_notice'];?>
</small>
		<small class="validate-error-hide validate-error-field-question_author_address"></small>
	</p>

	<p>
		<input type="text" name="question_author_phone" id="receptiondesk_question_author_phone" class="input-text input-width-500 fl-r">
		<label for="question_author_phone"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['receptiondesk']['receptiondesk_admin_question_create_author_phone_title'];?>
</label>
		<small class="note input-width-500 fl-r"><input type="checkbox" id="receptiondesk_question_author_phone_hide" name="question_author_phone_hide" class="input-checkbox" value="1" /><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['receptiondesk']['receptiondesk_admin_question_create_author_phone_hide_title'];?>
</small>
		<small class="note"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['receptiondesk']['receptiondesk_admin_question_create_author_phone_notice'];?>
</small>
		<small class="validate-error-hide validate-error-field-question_author_phone"></small>
	</p>

	<p><label for="question_captcha"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['receptiondesk']['receptiondesk_admin_question_create_author_captcha_title'];?>
</label>
	<img src="<?php echo smarty_function_cfg(array('name'=>'path.root.engine_lib'),$_smarty_tpl);?>
/external/kcaptcha/index.php?<?php echo $_smarty_tpl->tpl_vars['_sPhpSessionName']->value;?>
=<?php echo $_smarty_tpl->tpl_vars['_sPhpSessionId']->value;?>
" onclick="this.src='<?php echo smarty_function_cfg(array('name'=>'path.root.engine_lib'),$_smarty_tpl);?>
/external/kcaptcha/index.php?<?php echo $_smarty_tpl->tpl_vars['_sPhpSessionName']->value;?>
=<?php echo $_smarty_tpl->tpl_vars['_sPhpSessionId']->value;?>
&n='+Math.random();" class="captcha-image" />
	<button type="submit" class="button button-primary fl-r" id="submit_category" onclick="ls.receptiondesk.setQuestion();"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['receptiondesk']['receptiondesk_admin_question_create_submit'];?>
</button>
	<input type="text" name="question_captcha" id="question_captcha" value="" maxlength="3" class="input-text input-width-300 js-ajax-validate" />
	<small class="note"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['receptiondesk']['receptiondesk_admin_question_create_author_captcha_notice'];?>
</small>
	<small class="validate-error-hide validate-error-field-question_captcha"></small></p>

</form>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>