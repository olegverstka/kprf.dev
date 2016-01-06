var ls=ls || {};

ls.subscription=(function($){

	this.setSubscription=function(form){
		if (typeof(form)=='string') form=$('#'+form);
		ls.subscription.formLoader(form);
		form.find('.validate-error-show').removeClass('validate-error-show').addClass('validate-error-hide');
		ls.ajaxSubmit(aRouter.ajax+'subscription/ajax-set-subscription/',form,function(data){
			ls.subscription.formLoader(form,true);
			if(data.bStateError){
				form.find('.validate-error-field-subscription_mail').removeClass('validate-error-hide').addClass('validate-error-show').html(data.sMsg);
			}else{
				if(data.sMsg) ls.msg.notice(null,data.sMsg);
				form.html(data.sText)
			}
		});
	};

	this.formLoader=function(form,bHide){
		if(typeof(form)=='string') form=$('#'+form);
		form.find('input[type="text"]').each(function(k,v){
			if(bHide){
				$(v).removeClass('loader');
			}else{
				$(v).addClass('loader');
			}
		});
	};

	return this;
}).call(ls.subscription || {},jQuery);