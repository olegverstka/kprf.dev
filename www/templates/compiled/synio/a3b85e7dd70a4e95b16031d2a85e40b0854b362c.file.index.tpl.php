<?php /* Smarty version Smarty-3.1.8, created on 2015-06-10 11:44:22
         compiled from "/home/vxeeuesn/public_html/_sokol/plugins/receptiondesk/templates/skin/default/actions/ActionReceptiondesk/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21395573375577f8e6263c95-19486730%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a3b85e7dd70a4e95b16031d2a85e40b0854b362c' => 
    array (
      0 => '/home/vxeeuesn/public_html/_sokol/plugins/receptiondesk/templates/skin/default/actions/ActionReceptiondesk/index.tpl',
      1 => 1424273456,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21395573375577f8e6263c95-19486730',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aLang' => 0,
    'bPopup' => 0,
    'aCategories' => 0,
    'oCategory' => 0,
    '_sPhpSessionName' => 0,
    '_sPhpSessionId' => 0,
    'oCurrentCategory' => 0,
    'sReceptiondeskTemplatePath' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5577f8e62d6fc8_28888384',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5577f8e62d6fc8_28888384')) {function content_5577f8e62d6fc8_28888384($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cfg')) include '/home/vxeeuesn/public_html/_sokol/engine/modules/viewer/plugs/function.cfg.php';
if (!is_callable('smarty_function_router')) include '/home/vxeeuesn/public_html/_sokol/engine/modules/viewer/plugs/function.router.php';
if (!is_callable('smarty_modifier_ls_lang')) include '/home/vxeeuesn/public_html/_sokol/engine/modules/viewer/plugs/modifier.ls_lang.php';
?><?php $_smarty_tpl->tpl_vars["noSidebar"] = new Smarty_variable(true, null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('menu'=>'receptiondesk'), 0);?>


<h2 class="page-header"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['receptiondesk']['receptiondesk_receptiondesk'];?>
</h2>

<div class="modal modal-receptiondesk-category" id="window_receptiondesk_question">

	<header class="modal-header">
		<h3><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['receptiondesk']['receptiondesk_admin_question_create_title'];?>
</h3>
		<a href="#" class="close jqmClose"></a>
	</header>

	<div class="modal-content">
		<form method="POST" enctype="multipart/form-data" id="form_receptiondesk_question" onsubmit="return false;" >

		<?php if ($_smarty_tpl->tpl_vars['bPopup']->value){?>
			<input type="hidden" name="question_popup" id="question_popup" value="popup" />
		<?php }?>

			<p><small class="note"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['receptiondesk']['receptiondesk_admin_question_create_author_title'];?>
</small></p>

			<p><select name="question_category_id" id="receptiondesk_question_category_id" class="input-width-full js-ajax-validate">
				<option value="0"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['receptiondesk']['receptiondesk_admin_question_create_category_select'];?>
</option>
			<?php  $_smarty_tpl->tpl_vars['oCategory'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oCategory']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aCategories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oCategory']->key => $_smarty_tpl->tpl_vars['oCategory']->value){
$_smarty_tpl->tpl_vars['oCategory']->_loop = true;
?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['oCategory']->value->getId();?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oCategory']->value->getTitle(), ENT_QUOTES, 'UTF-8', true);?>
</option>
			<?php } ?>
			</select>
			<small class="note"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['receptiondesk']['receptiondesk_admin_question_create_category_notice'];?>
</small>
			<small class="validate-error-hide validate-error-field-question_category_id"></small></p>

			<p><textarea name="question_text" id="receptiondesk_question_text" placeholder="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['receptiondesk']['receptiondesk_admin_question_create_text_title'];?>
" class="input-text input-width-full js-ajax-validate" rows="10"></textarea>
			<small class="note fl-r"><input type="checkbox" id="receptiondesk_question_text_hide" name="question_text_hide" class="input-checkbox" value="1" /><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['receptiondesk']['receptiondesk_admin_question_create_text_hide_title'];?>
</small>
			<small class="note"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['receptiondesk']['receptiondesk_admin_question_create_text_notice'];?>
</small>
			<small class="validate-error-hide validate-error-field-question_text"></small></p>

			<p><input type="text" name="question_author_mail" id="receptiondesk_question_author_mail" placeholder="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['receptiondesk']['receptiondesk_admin_question_create_author_mail_title'];?>
" class="input-text input-width-full js-ajax-validate">
			<small class="note fl-r"><input type="checkbox" id="receptiondesk_question_author_mail_hide" name="question_author_mail_hide" class="input-checkbox" value="1" /><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['receptiondesk']['receptiondesk_admin_question_create_author_mail_hide_title'];?>
</small>
			<small class="note"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['receptiondesk']['receptiondesk_admin_question_create_author_mail_notice'];?>
</small>
			<small class="validate-error-hide validate-error-field-question_author_mail"></small></p>

			<p><small class="note"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['receptiondesk']['receptiondesk_admin_question_create_author_notice'];?>
</small></p>

			<p><input type="text" name="question_author_name" id="receptiondesk_question_author_name" placeholder="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['receptiondesk']['receptiondesk_admin_question_create_author_name_title'];?>
" class="input-text input-width-full">
			<small class="note fl-r"><input type="checkbox" id="receptiondesk_question_author_name_hide" name="question_author_name_hide" class="input-checkbox" value="1" /><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['receptiondesk']['receptiondesk_admin_question_create_author_name_hide_title'];?>
</small>
			<small class="note"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['receptiondesk']['receptiondesk_admin_question_create_author_name_notice'];?>
</small>
			<small class="validate-error-hide validate-error-field-question_author_name"></small></p>

			<p><input type="text" name="question_author_address" id="receptiondesk_question_author_address" placeholder="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['receptiondesk']['receptiondesk_admin_question_create_author_address_title'];?>
" class="input-text input-width-full">
			<small class="note fl-r"><input type="checkbox" id="receptiondesk_question_author_address_hide" name="question_author_address_hide" class="input-checkbox" value="1" /><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['receptiondesk']['receptiondesk_admin_question_create_author_address_hide_title'];?>
</small>
			<small class="note"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['receptiondesk']['receptiondesk_admin_question_create_author_address_notice'];?>
</small>
			<small class="validate-error-hide validate-error-field-question_author_address"></small></p>

			<p><input type="text" name="question_author_phone" id="receptiondesk_question_author_phone" placeholder="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['receptiondesk']['receptiondesk_admin_question_create_author_phone_title'];?>
" class="input-text input-width-full">
			<small class="note fl-r"><input type="checkbox" id="receptiondesk_question_author_phone_hide" name="question_author_phone_hide" class="input-checkbox" value="1" /><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['receptiondesk']['receptiondesk_admin_question_create_author_phone_hide_title'];?>
</small>
			<small class="note"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['receptiondesk']['receptiondesk_admin_question_create_author_phone_notice'];?>
</small>
			<small class="validate-error-hide validate-error-field-question_author_phone"></small></p>

			<p><label for="question_captcha"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['receptiondesk']['receptiondesk_admin_question_create_author_captcha_title'];?>
</label>
			<img src="<?php echo smarty_function_cfg(array('name'=>'path.root.engine_lib'),$_smarty_tpl);?>
/external/kcaptcha/index.php?<?php echo $_smarty_tpl->tpl_vars['_sPhpSessionName']->value;?>
=<?php echo $_smarty_tpl->tpl_vars['_sPhpSessionId']->value;?>
" onclick="this.src='<?php echo smarty_function_cfg(array('name'=>'path.root.engine_lib'),$_smarty_tpl);?>
/external/kcaptcha/index.php?<?php echo $_smarty_tpl->tpl_vars['_sPhpSessionName']->value;?>
=<?php echo $_smarty_tpl->tpl_vars['_sPhpSessionId']->value;?>
&n='+Math.random();" class="captcha-image" />
			<input type="text" name="question_captcha" id="question_captcha" value="" maxlength="3" class="input-text input-width-100 js-ajax-validate" />
			<small class="note"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['receptiondesk']['receptiondesk_admin_question_create_author_captcha_notice'];?>
</small>
			<small class="validate-error-hide validate-error-field-question_captcha"></small></p>

			<p><a href="<?php echo smarty_function_router(array('page'=>'receptiondesk'),$_smarty_tpl);?>
create/" class="button button-primary fl-r"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['receptiondesk']['receptiondesk_admin_question_create_fullform'];?>
</a>
			<button type="submit" class="button button-primary" id="submit_category" onclick="ls.receptiondesk.setQuestion();"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['receptiondesk']['receptiondesk_admin_question_create_submit'];?>
</button>
			<button type="submit" class="button jqmClose"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['receptiondesk']['receptiondesk_admin_question_create_cancel'];?>
</button></p>

		</form>
	</div>
</div>

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
<h2 class="page-header"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['receptiondesk']['receptiondesk_answers_list'];?>
<?php if ($_smarty_tpl->tpl_vars['oCurrentCategory']->value){?> <?php echo smarty_modifier_ls_lang($_smarty_tpl->tpl_vars['aLang']->value['plugin']['receptiondesk']['receptiondesk_answers_list_category'],"CATEGORY%%".($_smarty_tpl->tpl_vars['oCurrentCategory']->value->getTitle()));?>
<?php }?></h2>

<div class="wrapper-content">
	<p><select name="category_id" id="category_id" class="input-width-full" onChange="ls.receptiondesk.redirectCategory(jQuery(this).val());">
		<option value="0"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['receptiondesk']['receptiondesk_answers_list_category_all'];?>
</option>
	<?php  $_smarty_tpl->tpl_vars['oCategory'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oCategory']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aCategories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oCategory']->key => $_smarty_tpl->tpl_vars['oCategory']->value){
$_smarty_tpl->tpl_vars['oCategory']->_loop = true;
?>
		<option value="<?php echo $_smarty_tpl->tpl_vars['oCategory']->value->getId();?>
" <?php if ($_smarty_tpl->tpl_vars['oCurrentCategory']->value&&$_smarty_tpl->tpl_vars['oCurrentCategory']->value->getId()==$_smarty_tpl->tpl_vars['oCategory']->value->getId()){?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oCategory']->value->getTitle(), ENT_QUOTES, 'UTF-8', true);?>
</option>
	<?php } ?>
	</select></p>
</div>

<div class="wrapper-content">
	<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['sReceptiondeskTemplatePath']->value)."questions_rows.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>