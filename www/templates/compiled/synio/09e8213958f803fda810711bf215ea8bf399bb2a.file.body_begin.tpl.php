<?php /* Smarty version Smarty-3.1.8, created on 2015-06-10 11:38:25
         compiled from "/home/vxeeuesn/public_html/_sokol/plugins/simplesearch/templates/skin/default/body_begin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1341627445577f7814d94c9-49088233%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '09e8213958f803fda810711bf215ea8bf399bb2a' => 
    array (
      0 => '/home/vxeeuesn/public_html/_sokol/plugins/simplesearch/templates/skin/default/body_begin.tpl',
      1 => 1424273455,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1341627445577f7814d94c9-49088233',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5577f7814da357_80573903',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5577f7814da357_80573903')) {function content_5577f7814da357_80573903($_smarty_tpl) {?>
  <!-- Simplesearch plugin -->
  <script>
    jQuery (document).ready (function ($) {
      ls.autocomplete.add (
        $ ('#search-header-form input.input-text, #SS_SearchField, form.search > input.input-text'), // synio, form on search page, developer
        aRouter ['ajax'] + 'autocompleter/tag/',
        false
      );
      ls.autocomplete.add ($ ('div.block.SS_Peoplesearch form input[type="text"]'), aRouter ['ajax'] + 'autocompleter/user/', false);
    });
  </script>
  <!-- /Simplesearch plugin -->
<?php }} ?>