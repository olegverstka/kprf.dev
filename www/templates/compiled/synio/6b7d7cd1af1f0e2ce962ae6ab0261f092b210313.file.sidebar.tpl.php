<?php /* Smarty version Smarty-3.1.8, created on 2015-06-10 17:40:32
         compiled from "/home/vxeeuesn/public_html/_sokol/templates/skin/synio/sidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20275270055784c60cc9ec6-53655544%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b7d7cd1af1f0e2ce962ae6ab0261f092b210313' => 
    array (
      0 => '/home/vxeeuesn/public_html/_sokol/templates/skin/synio/sidebar.tpl',
      1 => 1424273455,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20275270055784c60cc9ec6-53655544',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sidebarPosition' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55784c60cd0164_50531266',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55784c60cd0164_50531266')) {function content_55784c60cd0164_50531266($_smarty_tpl) {?><aside id="sidebar" <?php if ($_smarty_tpl->tpl_vars['sidebarPosition']->value=='left'){?>class="sidebar-profile"<?php }?>>
	<?php echo $_smarty_tpl->getSubTemplate ('blocks.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('group'=>'right'), 0);?>

</aside><?php }} ?>