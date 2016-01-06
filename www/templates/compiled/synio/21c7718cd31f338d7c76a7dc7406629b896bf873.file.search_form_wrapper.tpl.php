<?php /* Smarty version Smarty-3.1.8, created on 2015-08-25 09:35:21
         compiled from "/home/vxeeuesn/public_html/_sokol/plugins/simplesearch/templates/skin/default/search_form_wrapper.tpl" */ ?>
<?php /*%%SmartyHeaderCode:134147726255dc0ca96894b1-83685747%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '21c7718cd31f338d7c76a7dc7406629b896bf873' => 
    array (
      0 => '/home/vxeeuesn/public_html/_sokol/plugins/simplesearch/templates/skin/default/search_form_wrapper.tpl',
      1 => 1424273455,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '134147726255dc0ca96894b1-83685747',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aLang' => 0,
    'aTemplatePathPlugin' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55dc0ca969b115_87747349',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55dc0ca969b115_87747349')) {function content_55dc0ca969b115_87747349($_smarty_tpl) {?>
    <!-- Simplesearch plugin -->
    <div class="SearchContainer BlogFormWrapper">
      <h2 class="page-header"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['simplesearch']['Search_Field_Tip'];?>
</h2>
      <?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['aTemplatePathPlugin']->value['simplesearch'])."search_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    </div>
    <!-- /Simplesearch plugin -->
<?php }} ?>