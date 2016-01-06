<?php /* Smarty version Smarty-3.1.8, created on 2015-06-10 11:38:25
         compiled from "/home/vxeeuesn/public_html/_sokol/plugins/receptiondesk/templates/skin/default/menu.receptiondesk_admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2807591805577f7813ac7b9-29766629%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '94be0de6adc3f993ac11810e87aefa0824283717' => 
    array (
      0 => '/home/vxeeuesn/public_html/_sokol/plugins/receptiondesk/templates/skin/default/menu.receptiondesk_admin.tpl',
      1 => 1424273456,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2807591805577f7813ac7b9-29766629',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sMenuItemSelect' => 0,
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5577f7813d1522_75268816',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5577f7813d1522_75268816')) {function content_5577f7813d1522_75268816($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include '/home/vxeeuesn/public_html/_sokol/engine/modules/viewer/plugs/function.router.php';
?><ul class="nav nav-menu">
	<li <?php if ($_smarty_tpl->tpl_vars['sMenuItemSelect']->value=='receptiondesk'){?>class="active"<?php }?>>
		<a href="<?php echo smarty_function_router(array('page'=>'admin'),$_smarty_tpl);?>
receptiondesk/"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['receptiondesk']['receptiondesk_admin_title'];?>
</a>
	</li>
	<li <?php if ($_smarty_tpl->tpl_vars['sMenuItemSelect']->value=='receptiondesk_categories'){?>class="active"<?php }?>>
		<a href="<?php echo smarty_function_router(array('page'=>'admin'),$_smarty_tpl);?>
receptiondesk/categories/"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['receptiondesk']['receptiondesk_admin_categories_title'];?>
</a>
	</li>
</ul><?php }} ?>