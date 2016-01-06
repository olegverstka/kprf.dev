<?php /* Smarty version Smarty-3.1.8, created on 2015-06-10 17:02:25
         compiled from "/home/vxeeuesn/public_html/_sokol/plugins/receptiondesk/templates/skin/default/actions/ActionAdmin/receptiondesk_admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:89772433557843717758a9-37918250%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b4545814c991f688bc9167cbe0a2503d20de57a4' => 
    array (
      0 => '/home/vxeeuesn/public_html/_sokol/plugins/receptiondesk/templates/skin/default/actions/ActionAdmin/receptiondesk_admin.tpl',
      1 => 1424273456,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '89772433557843717758a9-37918250',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aLang' => 0,
    'oCurrentCategory' => 0,
    'sMenuSubItemSelect' => 0,
    'iCountQuestionNew' => 0,
    'sType' => 0,
    'sFullUrl' => 0,
    'aCategories' => 0,
    'oCategory' => 0,
    'sReceptiondeskTemplatePath' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55784371826887_30218402',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55784371826887_30218402')) {function content_55784371826887_30218402($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include '/home/vxeeuesn/public_html/_sokol/engine/modules/viewer/plugs/function.router.php';
if (!is_callable('smarty_function_cfg')) include '/home/vxeeuesn/public_html/_sokol/engine/modules/viewer/plugs/function.cfg.php';
?><?php $_smarty_tpl->tpl_vars["noSidebar"] = new Smarty_variable(true, null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('menu'=>"receptiondesk_admin"), 0);?>


<h2 class="page-header"><a href="<?php echo smarty_function_router(array('page'=>'admin'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['admin_header'];?>
</a> <span>&raquo;</span> <?php if ($_smarty_tpl->tpl_vars['oCurrentCategory']->value){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oCurrentCategory']->value->getTitle(), ENT_QUOTES, 'UTF-8', true);?>
 <span>&raquo;</span> <?php }?><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['receptiondesk']['receptiondesk_admin_receptiondesk_title'];?>
</h2>

<ul class="nav nav-pills mb-30">
	<li <?php if ($_smarty_tpl->tpl_vars['sMenuSubItemSelect']->value=='receptiondesk_new'){?>class="active"<?php }?>>
		<a href="<?php echo smarty_function_router(array('page'=>'admin'),$_smarty_tpl);?>
receptiondesk/"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['receptiondesk']['receptiondesk_admin_receptiondesk_list_new'];?>
 <?php if ($_smarty_tpl->tpl_vars['iCountQuestionNew']->value>0){?>+ <?php echo $_smarty_tpl->tpl_vars['iCountQuestionNew']->value;?>
<?php }?></a>
	</li>
	<li <?php if ($_smarty_tpl->tpl_vars['sMenuSubItemSelect']->value=='receptiondesk_history'){?>class="active"<?php }?>>
		<a href="<?php echo smarty_function_router(array('page'=>'admin'),$_smarty_tpl);?>
receptiondesk/history/"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['receptiondesk']['receptiondesk_admin_receptiondesk_list_history'];?>
</a>
	</li>
	<li <?php if ($_smarty_tpl->tpl_vars['sMenuSubItemSelect']->value=='receptiondesk_answered'){?>class="active"<?php }?>>
		<a href="<?php echo smarty_function_router(array('page'=>'admin'),$_smarty_tpl);?>
receptiondesk/answered/"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['receptiondesk']['receptiondesk_admin_receptiondesk_list_answered'];?>
</a>
	</li>
</ul>

<?php if ($_smarty_tpl->tpl_vars['sType']->value){?>
	<?php $_smarty_tpl->tpl_vars["sFullUrl"] = new Smarty_variable("receptiondesk/".($_smarty_tpl->tpl_vars['sType']->value)."/", null, 0);?>
<?php }else{ ?>
	<?php $_smarty_tpl->tpl_vars["sFullUrl"] = new Smarty_variable("receptiondesk/", null, 0);?>
<?php }?>

<ul class="nav nav-pills mb-30">
	<li <?php if (!$_smarty_tpl->tpl_vars['oCurrentCategory']->value){?>class="active"<?php }?>>
		<a href="<?php echo smarty_function_router(array('page'=>'admin'),$_smarty_tpl);?>
<?php echo $_smarty_tpl->tpl_vars['sFullUrl']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['receptiondesk']['receptiondesk_answers_list_category_all'];?>
</a>
	</li>
<?php  $_smarty_tpl->tpl_vars['oCategory'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oCategory']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aCategories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oCategory']->key => $_smarty_tpl->tpl_vars['oCategory']->value){
$_smarty_tpl->tpl_vars['oCategory']->_loop = true;
?>
	<li <?php if ($_smarty_tpl->tpl_vars['oCurrentCategory']->value&&$_smarty_tpl->tpl_vars['oCurrentCategory']->value->getId()==$_smarty_tpl->tpl_vars['oCategory']->value->getId()){?>class="active"<?php }?>>
		<a href="<?php echo smarty_function_router(array('page'=>'admin'),$_smarty_tpl);?>
<?php echo $_smarty_tpl->tpl_vars['sFullUrl']->value;?>
category/<?php echo $_smarty_tpl->tpl_vars['oCategory']->value->getUrl();?>
/"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oCategory']->value->getTitle(), ENT_QUOTES, 'UTF-8', true);?>
</a>
	</li>
<?php } ?>
</ul>

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

<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['sReceptiondeskTemplatePath']->value)."admin_questions_rows.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>