<?php /* Smarty version Smarty-3.1.8, created on 2015-08-15 14:00:38
         compiled from "/home/vxeeuesn/public_html/_sokol/templates/skin/synio/actions/ActionLogin/reminder.tpl" */ ?>
<?php /*%%SmartyHeaderCode:88410815155cf1bd64c2455-28308966%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '98dbe6f36b5eb3bbee4b19891b26deffa897b0f8' => 
    array (
      0 => '/home/vxeeuesn/public_html/_sokol/templates/skin/synio/actions/ActionLogin/reminder.tpl',
      1 => 1424273455,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '88410815155cf1bd64c2455-28308966',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55cf1bd68793a3_27593757',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55cf1bd68793a3_27593757')) {function content_55cf1bd68793a3_27593757($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include '/home/vxeeuesn/public_html/_sokol/engine/modules/viewer/plugs/function.router.php';
?><?php $_smarty_tpl->tpl_vars["noSidebar"] = new Smarty_variable(true, null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<script type="text/javascript">
	jQuery(document).ready(function($){
		$('#reminder-form').bind('submit',function(){
			ls.user.reminder('reminder-form');
			return false;
		});
		$('#reminder-form-submit').attr('disabled',false);
	});
</script>

<h2 class="page-header"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['password_reminder'];?>
</h2>

<form action="<?php echo smarty_function_router(array('page'=>'login'),$_smarty_tpl);?>
reminder/" method="POST" id="reminder-form">
	<p><label for="reminder-mail"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['password_reminder_email'];?>
</label>
	<input type="text" name="mail" id="reminder-mail" class="input-text input-width-200" />
	<small class="validate-error-hide validate-error-reminder"></small></p>

	<button type="submit"  name="submit_reminder" class="button button-primary" id="reminder-form-submit" disabled="disabled"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['password_reminder_submit'];?>
</button>
</form>



<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>