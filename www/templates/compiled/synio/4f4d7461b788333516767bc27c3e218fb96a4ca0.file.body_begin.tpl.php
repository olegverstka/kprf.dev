<?php /* Smarty version Smarty-3.1.8, created on 2016-01-04 18:10:14
         compiled from "D:\OpenServer\domains\kprf.dev\www\plugins\simplesearch\templates\skin\default\body_begin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25400568a8b5663bcd8-77811279%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f4d7461b788333516767bc27c3e218fb96a4ca0' => 
    array (
      0 => 'D:\\OpenServer\\domains\\kprf.dev\\www\\plugins\\simplesearch\\templates\\skin\\default\\body_begin.tpl',
      1 => 1424273456,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25400568a8b5663bcd8-77811279',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_568a8b5664b6d0_52235711',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_568a8b5664b6d0_52235711')) {function content_568a8b5664b6d0_52235711($_smarty_tpl) {?>
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