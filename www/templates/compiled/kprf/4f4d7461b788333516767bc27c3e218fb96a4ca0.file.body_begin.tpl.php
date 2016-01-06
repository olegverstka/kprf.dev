<?php /* Smarty version Smarty-3.1.8, created on 2016-01-04 18:43:14
         compiled from "D:\OpenServer\domains\kprf.dev\www\plugins\simplesearch\templates\skin\default\body_begin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31000568a93122412f7-68702602%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '31000568a93122412f7-68702602',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_568a9312258a01_78970395',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_568a9312258a01_78970395')) {function content_568a9312258a01_78970395($_smarty_tpl) {?>
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