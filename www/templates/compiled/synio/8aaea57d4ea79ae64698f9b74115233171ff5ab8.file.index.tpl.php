<?php /* Smarty version Smarty-3.1.8, created on 2016-01-02 10:27:29
         compiled from "D:\OpenServer\domains\kprf.dev\www/templates/skin/synio\actions\ActionIndex\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2945456877be12a9602-58345864%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8aaea57d4ea79ae64698f9b74115233171ff5ab8' => 
    array (
      0 => 'D:\\OpenServer\\domains\\kprf.dev\\www/templates/skin/synio\\actions\\ActionIndex\\index.tpl',
      1 => 1363889768,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2945456877be12a9602-58345864',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_56877be130b0a8_51120997',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56877be130b0a8_51120997')) {function content_56877be130b0a8_51120997($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('menu'=>'blog','menu_content'=>'blog'), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('topic_list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>