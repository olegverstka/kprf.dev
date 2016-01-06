<?php /* Smarty version Smarty-3.1.8, created on 2015-06-10 17:40:33
         compiled from "/home/vxeeuesn/public_html/_sokol/plugins/subscription/templates/skin/default/blocks/block.subscription.tpl" */ ?>
<?php /*%%SmartyHeaderCode:120168174055784c611d6065-84644248%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ee8570c1ef9d7a05bed86f3252370599c089a638' => 
    array (
      0 => '/home/vxeeuesn/public_html/_sokol/plugins/subscription/templates/skin/default/blocks/block.subscription.tpl',
      1 => 1424273455,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '120168174055784c611d6065-84644248',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aLang' => 0,
    '_aRequest' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55784c611eeab1_78252202',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55784c611eeab1_78252202')) {function content_55784c611eeab1_78252202($_smarty_tpl) {?><section class="block block-auto">

	<header class="block-header sep">
		<h3><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['subscription']['subscription_block_subscription_title'];?>
</h3>
	</header>

	<script type="text/javascript">
		jQuery(document).ready(function($){
			$('#subscription-form').bind('submit',function(){
				ls.subscription.setSubscription('subscription-form');
				return false;
			});
			$('#subscription-form-submit').attr('disabled',false);
		});
	</script>

	<div class="block-content">
		<form method="post" id="subscription-form">

			<input type="text" name="subscription_mail" placeholder="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['subscription']['subscription_block_subscription_input'];?>
" id="subscription_mail" value="<?php echo $_smarty_tpl->tpl_vars['_aRequest']->value['subscription_mail'];?>
" class="input-text input-width-200" />
			<small class="validate-error-hide validate-error-field-subscription_mail"></small>

			<button type="submit"name="submit_register" class="button button-primary input-width-200" id="subscription-form-submit" disabled="disabled"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['subscription']['subscription_block_subscription_submit'];?>
</button>

		</form>
	</div>

</section>
<?php }} ?>