<?php /* Smarty version Smarty-3.1.8, created on 2015-06-10 11:38:25
         compiled from "/home/vxeeuesn/public_html/_sokol/plugins/receptiondesk/templates/skin/default/inj_main_menu_item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9276388595577f78155e522-60479913%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4d9a775de3883516293cce7b8f155868721bcfe5' => 
    array (
      0 => '/home/vxeeuesn/public_html/_sokol/plugins/receptiondesk/templates/skin/default/inj_main_menu_item.tpl',
      1 => 1424273456,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9276388595577f78155e522-60479913',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sMenuHeadItemSelect' => 0,
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5577f781564633_32131467',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5577f781564633_32131467')) {function content_5577f781564633_32131467($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include '/home/vxeeuesn/public_html/_sokol/engine/modules/viewer/plugs/function.router.php';
?><li <?php if ($_smarty_tpl->tpl_vars['sMenuHeadItemSelect']->value=='receptiondesk'){?>class="active"<?php }?>><a href="<?php echo smarty_function_router(array('page'=>'receptiondesk'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['receptiondesk']['receptiondesk_main_menu_item'];?>
</a><i></i></li><?php }} ?>