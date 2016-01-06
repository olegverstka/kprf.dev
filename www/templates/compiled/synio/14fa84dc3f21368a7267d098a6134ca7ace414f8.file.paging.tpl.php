<?php /* Smarty version Smarty-3.1.8, created on 2015-06-10 11:44:22
         compiled from "/home/vxeeuesn/public_html/_sokol/templates/skin/synio/paging.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3005014865577f8e6388e57-51646492%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '14fa84dc3f21368a7267d098a6134ca7ace414f8' => 
    array (
      0 => '/home/vxeeuesn/public_html/_sokol/templates/skin/synio/paging.tpl',
      1 => 1424273455,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3005014865577f8e6388e57-51646492',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aPaging' => 0,
    'aLang' => 0,
    'iPage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5577f8e63c1cd8_59587542',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5577f8e63c1cd8_59587542')) {function content_5577f8e63c1cd8_59587542($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['aPaging']->value&&$_smarty_tpl->tpl_vars['aPaging']->value['iCountPage']>1){?> 
	<div class="pagination">
		<ul>
			<?php if ($_smarty_tpl->tpl_vars['aPaging']->value['iPrevPage']){?>
				<li class="prev"><a href="<?php echo $_smarty_tpl->tpl_vars['aPaging']->value['sBaseUrl'];?>
/page<?php echo $_smarty_tpl->tpl_vars['aPaging']->value['iPrevPage'];?>
/<?php echo $_smarty_tpl->tpl_vars['aPaging']->value['sGetParams'];?>
" class="js-paging-prev-page" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['paging_previos'];?>
">&larr; <?php echo $_smarty_tpl->tpl_vars['aLang']->value['paging_previos'];?>
</a></li>
			<?php }else{ ?>
				<li class="prev"><span>&larr; <?php echo $_smarty_tpl->tpl_vars['aLang']->value['paging_previos'];?>
</span></li>
			<?php }?>
			
			
			<?php if ($_smarty_tpl->tpl_vars['aPaging']->value['iNextPage']){?>
				<li class="next"><a href="<?php echo $_smarty_tpl->tpl_vars['aPaging']->value['sBaseUrl'];?>
/page<?php echo $_smarty_tpl->tpl_vars['aPaging']->value['iNextPage'];?>
/<?php echo $_smarty_tpl->tpl_vars['aPaging']->value['sGetParams'];?>
" class="js-paging-next-page" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['paging_next'];?>
"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['paging_next'];?>
 &rarr;</a></li>
			<?php }else{ ?>
				<li class="next"><span><?php echo $_smarty_tpl->tpl_vars['aLang']->value['paging_next'];?>
 &rarr;</span></li>
			<?php }?>
		</ul>
		<ul>
			<?php if ($_smarty_tpl->tpl_vars['aPaging']->value['iCurrentPage']>1){?><li><a href="<?php echo $_smarty_tpl->tpl_vars['aPaging']->value['sBaseUrl'];?>
/<?php echo $_smarty_tpl->tpl_vars['aPaging']->value['sGetParams'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['paging_first'];?>
"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['paging_first'];?>
</a></li><?php }?>
			
			<?php  $_smarty_tpl->tpl_vars['iPage'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['iPage']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aPaging']->value['aPagesLeft']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['iPage']->key => $_smarty_tpl->tpl_vars['iPage']->value){
$_smarty_tpl->tpl_vars['iPage']->_loop = true;
?>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['aPaging']->value['sBaseUrl'];?>
/page<?php echo $_smarty_tpl->tpl_vars['iPage']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['aPaging']->value['sGetParams'];?>
"><?php echo $_smarty_tpl->tpl_vars['iPage']->value;?>
</a></li>
			<?php } ?>
			
			<li class="active"><span><?php echo $_smarty_tpl->tpl_vars['aPaging']->value['iCurrentPage'];?>
</span></li>
			
			<?php  $_smarty_tpl->tpl_vars['iPage'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['iPage']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aPaging']->value['aPagesRight']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['iPage']->key => $_smarty_tpl->tpl_vars['iPage']->value){
$_smarty_tpl->tpl_vars['iPage']->_loop = true;
?>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['aPaging']->value['sBaseUrl'];?>
/page<?php echo $_smarty_tpl->tpl_vars['iPage']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['aPaging']->value['sGetParams'];?>
"><?php echo $_smarty_tpl->tpl_vars['iPage']->value;?>
</a></li>
			<?php } ?>
			
			
			<?php if ($_smarty_tpl->tpl_vars['aPaging']->value['iCurrentPage']<$_smarty_tpl->tpl_vars['aPaging']->value['iCountPage']){?><li><a href="<?php echo $_smarty_tpl->tpl_vars['aPaging']->value['sBaseUrl'];?>
/page<?php echo $_smarty_tpl->tpl_vars['aPaging']->value['iCountPage'];?>
/<?php echo $_smarty_tpl->tpl_vars['aPaging']->value['sGetParams'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['paging_last'];?>
"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['paging_last'];?>
</a></li><?php }?>					
		</ul>
	</div>
<?php }?><?php }} ?>