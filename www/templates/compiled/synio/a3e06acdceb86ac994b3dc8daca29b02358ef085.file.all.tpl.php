<?php /* Smarty version Smarty-3.1.8, created on 2015-08-18 16:50:06
         compiled from "/home/vxeeuesn/public_html/_sokol/templates/skin/synio/actions/ActionStream/all.tpl" */ ?>
<?php /*%%SmartyHeaderCode:32249607355d3380e6b8440-07362124%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a3e06acdceb86ac994b3dc8daca29b02358ef085' => 
    array (
      0 => '/home/vxeeuesn/public_html/_sokol/templates/skin/synio/actions/ActionStream/all.tpl',
      1 => 1424273455,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32249607355d3380e6b8440-07362124',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aLang' => 0,
    'aStreamEvents' => 0,
    'bDisableGetMoreButton' => 0,
    'iStreamLastId' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55d3380ea5b1c2_68971584',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d3380ea5b1c2_68971584')) {function content_55d3380ea5b1c2_68971584($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars["noSidebar"] = new Smarty_variable(true, null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('menu'=>"stream"), 0);?>


<h2 class="page-header"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['stream_menu'];?>
</h2>

<?php if (count($_smarty_tpl->tpl_vars['aStreamEvents']->value)){?>
	<ul class="stream-list" id="stream-list">
		<?php echo $_smarty_tpl->getSubTemplate ('actions/ActionStream/events.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</ul>

    <?php if (!$_smarty_tpl->tpl_vars['bDisableGetMoreButton']->value){?>
        <input type="hidden" id="stream_last_id" value="<?php echo $_smarty_tpl->tpl_vars['iStreamLastId']->value;?>
" />
        <a class="stream-get-more" id="stream_get_more" href="javascript:ls.stream.getMoreAll()"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['stream_get_more'];?>
 &darr;</a>
    <?php }?>
<?php }else{ ?>
    <?php echo $_smarty_tpl->tpl_vars['aLang']->value['stream_no_events'];?>

<?php }?>


<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>