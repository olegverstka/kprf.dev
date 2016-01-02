<?php /* Smarty version Smarty-3.1.8, created on 2016-01-02 10:27:29
         compiled from "D:\OpenServer\domains\kprf.dev\www/templates/skin/synio\sidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1311656877be13bebc9-30753356%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bbb90292af7767e813944e7c141fbaaede2fdf53' => 
    array (
      0 => 'D:\\OpenServer\\domains\\kprf.dev\\www/templates/skin/synio\\sidebar.tpl',
      1 => 1363889768,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1311656877be13bebc9-30753356',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sidebarPosition' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_56877be13ca747_71761989',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56877be13ca747_71761989')) {function content_56877be13ca747_71761989($_smarty_tpl) {?><aside id="sidebar" <?php if ($_smarty_tpl->tpl_vars['sidebarPosition']->value=='left'){?>class="sidebar-profile"<?php }?>>
	<?php echo $_smarty_tpl->getSubTemplate ('blocks.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('group'=>'right'), 0);?>

</aside><?php }} ?>