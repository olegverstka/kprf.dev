<section class="block block-auto">

	<header class="block-header sep">
		<h3>{$aLang.plugin.subscription.subscription_block_subscription_title}</h3>
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

			<input type="text" name="subscription_mail" placeholder="{$aLang.plugin.subscription.subscription_block_subscription_input}" id="subscription_mail" value="{$_aRequest.subscription_mail}" class="input-text input-width-200" />
			<small class="validate-error-hide validate-error-field-subscription_mail"></small>

			<button type="submit"name="submit_register" class="button button-primary input-width-200" id="subscription-form-submit" disabled="disabled">{$aLang.plugin.subscription.subscription_block_subscription_submit}</button>

		</form>
	</div>

</section>
