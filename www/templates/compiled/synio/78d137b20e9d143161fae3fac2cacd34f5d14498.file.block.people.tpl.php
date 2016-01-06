<?php /* Smarty version Smarty-3.1.8, created on 2015-07-08 05:13:15
         compiled from "/home/vxeeuesn/public_html/_sokol/plugins/simplesearch/templates/skin/default/block.people.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1862520128559c873b55a343-67223870%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '78d137b20e9d143161fae3fac2cacd34f5d14498' => 
    array (
      0 => '/home/vxeeuesn/public_html/_sokol/plugins/simplesearch/templates/skin/default/block.people.tpl',
      1 => 1424273455,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1862520128559c873b55a343-67223870',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_559c873b570c50_61879475',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_559c873b570c50_61879475')) {function content_559c873b570c50_61879475($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include '/home/vxeeuesn/public_html/_sokol/engine/modules/viewer/plugs/function.router.php';
?>
  <!-- Simplesearch plugin -->
  <div class="block SS_Peoplesearch">
    <header class="block-header sep">
      <h3><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['simplesearch']['People_Search'];?>
</h3>
    </header>
    <div class="block-content">
      <form action="<?php echo smarty_function_router(array('page'=>'search'),$_smarty_tpl);?>
people/" method="GET" class="search">
        <input type="text" value="" name="q" placeholder="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['simplesearch']['Search_Field_Tip'];?>
" class="input-text" />
        <input type="submit" value="" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['search_submit'];?>
" class="input-submit icon icon-search" />
        <label><input type="checkbox" value="1" checked="checked" name="strict" /><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['simplesearch']['People_Search_Strict_Search'];?>
</label>
      </form>
      
      <small>
        <?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['simplesearch']['People_Search_Tip'];?>

      </small>
    </div>
  </div>
  <!-- /Simplesearch plugin -->
<?php }} ?>