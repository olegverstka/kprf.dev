<?php /* Smarty version Smarty-3.1.8, created on 2015-08-18 17:22:26
         compiled from "/home/vxeeuesn/public_html/_sokol/plugins/simplesearch/templates/skin/default/actions/ActionSearch/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:177353170655d33fa21f1981-40681163%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4292c3aa722b9513bd5f0f82a1c3f9412a19d15f' => 
    array (
      0 => '/home/vxeeuesn/public_html/_sokol/plugins/simplesearch/templates/skin/default/actions/ActionSearch/index.tpl',
      1 => 1424273455,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '177353170655d33fa21f1981-40681163',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d33fa2222402_37030499',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d33fa2222402_37030499')) {function content_55d33fa2222402_37030499($_smarty_tpl) {?><?php if (!is_callable('smarty_function_hook')) include '/home/vxeeuesn/public_html/_sokol/engine/modules/viewer/plugs/function.hook.php';
if (!is_callable('smarty_function_router')) include '/home/vxeeuesn/public_html/_sokol/engine/modules/viewer/plugs/function.router.php';
?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


  <h2 class="page-header"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['search'];?>
</h2>

  <?php echo smarty_function_hook(array('run'=>'search_begin'),$_smarty_tpl);?>


  <form action="<?php echo smarty_function_router(array('page'=>'search'),$_smarty_tpl);?>
topics/" class="search" method="GET">
    <?php echo smarty_function_hook(array('run'=>'search_form_begin'),$_smarty_tpl);?>

    
    <input type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['search'];?>
" maxlength="255" name="q" class="input-text" id="SS_SearchField">
    <input type="submit" value="" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['search_submit'];?>
" class="input-submit icon icon-search">
    
    <?php echo smarty_function_hook(array('run'=>'search_form_end'),$_smarty_tpl);?>

  </form>

  <?php echo smarty_function_hook(array('run'=>'search_end'),$_smarty_tpl);?>


<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>