<?php /* Smarty version Smarty-3.1.8, created on 2015-06-11 15:11:34
         compiled from "/home/vxeeuesn/public_html/_sokol/plugins/aceadminpanel/templates/skin/default/hook.profile_sidebar_end.tpl" */ ?>
<?php /*%%SmartyHeaderCode:160756279055797af671bdb1-94710356%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af09116ba62eabfbc80fdcb649bbf79b8654dd8d' => 
    array (
      0 => '/home/vxeeuesn/public_html/_sokol/plugins/aceadminpanel/templates/skin/default/hook.profile_sidebar_end.tpl',
      1 => 1424273456,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '160756279055797af671bdb1-94710356',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oUserCurrent' => 0,
    'oUserProfile' => 0,
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55797af67804c6_31366386',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55797af67804c6_31366386')) {function content_55797af67804c6_31366386($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include '/home/vxeeuesn/public_html/_sokol/engine/modules/viewer/plugs/function.router.php';
?><?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value&&$_smarty_tpl->tpl_vars['oUserCurrent']->value->isAdministrator()){?>
<section class="block block-type-profile-nav">
    <ul class="nav nav-profile">
        <li><a href="<?php echo smarty_function_router(array('page'=>"admin"),$_smarty_tpl);?>
users/profile/<?php echo $_smarty_tpl->tpl_vars['oUserProfile']->value->getLogin();?>
"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['aceadminpanel']['adm_user_profile_link'];?>
</a></li>
    </ul>
</section>
<?php }?><?php }} ?>