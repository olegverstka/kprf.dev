<?php /* Smarty version Smarty-3.1.8, created on 2015-06-11 15:11:34
         compiled from "/home/vxeeuesn/public_html/_sokol/templates/skin/synio/menu.profile_whois.tpl" */ ?>
<?php /*%%SmartyHeaderCode:78586588055797af6838ad7-71660219%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1a470688ad3bd4479ad68285b493422c9cad6078' => 
    array (
      0 => '/home/vxeeuesn/public_html/_sokol/templates/skin/synio/menu.profile_whois.tpl',
      1 => 1424273455,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '78586588055797af6838ad7-71660219',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sMenuSubItemSelect' => 0,
    'oUserProfile' => 0,
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55797af686b5a0_41907144',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55797af686b5a0_41907144')) {function content_55797af686b5a0_41907144($_smarty_tpl) {?><?php if (!is_callable('smarty_function_hook')) include '/home/vxeeuesn/public_html/_sokol/engine/modules/viewer/plugs/function.hook.php';
?><ul class="nav nav-pills nav-pills-profile">
	<li <?php if ($_smarty_tpl->tpl_vars['sMenuSubItemSelect']->value=='main'){?>class="active"<?php }?>>
		<a href="<?php echo $_smarty_tpl->tpl_vars['oUserProfile']->value->getUserWebPath();?>
"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_menu_profile_whois'];?>
</a>
	</li>

	<?php echo smarty_function_hook(array('run'=>'menu_profile_whois_item','oUserProfile'=>$_smarty_tpl->tpl_vars['oUserProfile']->value),$_smarty_tpl);?>

</ul>

<?php echo smarty_function_hook(array('run'=>'menu_profile_whois','oUserProfile'=>$_smarty_tpl->tpl_vars['oUserProfile']->value),$_smarty_tpl);?>

<?php }} ?>