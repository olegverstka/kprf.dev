<?php /* Smarty version Smarty-3.1.8, created on 2015-06-10 17:50:43
         compiled from "/home/vxeeuesn/public_html/_sokol/plugins/receptiondesk/templates/skin/default/notify/russian/notify.answer_mail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1992184755784ec3870661-95621673%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '698618d33bf1f8fb8a5204cb9a9b614c2d41f0ee' => 
    array (
      0 => '/home/vxeeuesn/public_html/_sokol/plugins/receptiondesk/templates/skin/default/notify/russian/notify.answer_mail.tpl',
      1 => 1424273456,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1992184755784ec3870661-95621673',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sName' => 0,
    'oQuestion' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55784ec38b8b35_19912099',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55784ec38b8b35_19912099')) {function content_55784ec38b8b35_19912099($_smarty_tpl) {?>Здравствуйте <?php echo $_smarty_tpl->tpl_vars['sName']->value;?>
!

Вы оставляли сообщение с текстом <br />

<?php echo $_smarty_tpl->tpl_vars['oQuestion']->value->getText();?>


и Мы решили Вам ответить

<?php echo $_smarty_tpl->tpl_vars['oQuestion']->value->getAnswerText();?>
<?php }} ?>