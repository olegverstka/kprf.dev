<?php /* Smarty version Smarty-3.1.8, created on 2015-06-10 17:47:54
         compiled from "/home/vxeeuesn/public_html/_sokol/plugins/subscription/templates/skin/default/notify/russian/notify.news_new_topic.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5927498555784e1a661c64-09495480%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '67d794ae747f67f7f1770b0995f800b32f1df15c' => 
    array (
      0 => '/home/vxeeuesn/public_html/_sokol/plugins/subscription/templates/skin/default/notify/russian/notify.news_new_topic.tpl',
      1 => 1424273455,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5927498555784e1a661c64-09495480',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oTopic' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55784e1a6ae1e7_52479975',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55784e1a6ae1e7_52479975')) {function content_55784e1a6ae1e7_52479975($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cfg')) include '/home/vxeeuesn/public_html/_sokol/engine/modules/viewer/plugs/function.cfg.php';
?>Здравствуйте
<br />
На сайте <a href="<?php echo smarty_function_cfg(array('name'=>'path.root.web'),$_smarty_tpl);?>
"><?php echo smarty_function_cfg(array('name'=>'view.name'),$_smarty_tpl);?>
</a> появилась новая новость -  <a href="<?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getUrl();?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oTopic']->value->getTitle(), ENT_QUOTES, 'UTF-8', true);?>
</a>
<br />
<br />
С уважением, администрация сайта <a href="<?php echo smarty_function_cfg(array('name'=>'path.root.web'),$_smarty_tpl);?>
"><?php echo smarty_function_cfg(array('name'=>'view.name'),$_smarty_tpl);?>
</a><?php }} ?>