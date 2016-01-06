var ls=ls || {};

ls.receptiondesk=(function($){

	this.swfu;

	this.initSwfUpload=function(opt){
		opt=opt || {};
		opt.button_placeholder_id='receptiondesk_file_upload';
		opt.post_params.ls_receptiondesk_file_target_tmp=$.cookie('ls_receptiondesk_file_target_tmp')?$.cookie('ls_receptiondesk_file_target_tmp'):0;
		opt.upload_url=aRouter.ajax+'receptiondesk/ajax-upload-file/';
		$(ls.swfupload).unbind('load').bind('load',function(){
			this.swfu=ls.swfupload.init(opt);
			$(this.swfu).bind('eUploadProgress',this.swfHandlerUploadProgress);
			$(this.swfu).bind('eFileDialogComplete',this.swfHandlerFileDialogComplete);
			$(this.swfu).bind('eUploadSuccess',this.swfHandlerUploadSuccess);
			$(this.swfu).bind('eUploadComplete',this.swfHandlerUploadComplete);
		}.bind(this));
		ls.swfupload.loadSwf();
	}

	this.swfHandlerUploadProgress=function(e,file,bytesLoaded,percent){}

	this.swfHandlerFileDialogComplete=function(e,numFilesSelected,numFilesQueued){}

	this.swfHandlerUploadSuccess=function(e,file,serverData){
		ls.receptiondesk.addFile(jQuery.parseJSON(serverData));
	}

	this.swfHandlerUploadComplete=function(e,file,next){}

	this.openCreateForm=function(type){
		ls.receptiondesk.clearFormField(type);
		$('#window_receptiondesk_'+type).find('h3').text(ls.lang.get('plugin.receptiondesk.receptiondesk_admin_'+type+'_create_title'));
		$('#window_receptiondesk_'+type).find('small.validate-error-show').removeClass('validate-error-show').addClass('validate-error-hide');
		if(type=='categories') $('#receptiondesk_category_id').val('');
		$('#window_receptiondesk_'+type).jqmShow();
		return false;
	};

	this.openRemoveForm=function(idTarget){
		ls.ajax(aRouter.ajax+'receptiondesk/ajax-get-remove-category/',{idTarget:idTarget},function(result){
			if(result.bStateError){
				ls.msg.error(null,result.sMsg);
			}else{
				$('#receptiondesk_category_remove').html(result.sCategoriesList);
				$('#receptiondesk_category_remove_id').val(idTarget);
				$('#window_receptiondesk_categories_remove').jqmShow();
			}
		});
		return false;
	};

	this.closeUploadForm=function(){
		$('#receptiondesk-file-upload-form').jqmHide();
	};

	this.uploadFile=function(){
		var form=$('#receptiondesk-file-upload-form');
		ls.receptiondesk.formLoader(form);
		ls.ajaxSubmit(aRouter.ajax+'receptiondesk/ajax-upload-file/',form,function(result){
			if(result.bStateError){
				ls.receptiondesk.formLoader(form,true);
				ls.receptiondesk.closeUploadForm();
				ls.msg.error(result.sMsgTitle,result.sMsg);
			}else{
				ls.receptiondesk.addFile(result);
			}
		});
	};

	this.removeFile=function(idTarget){
		if(!confirm(ls.lang.get('plugin.receptiondesk.receptiondesk_admin_question_create_author_files_remove_confirm'))) return;
		ls.ajax(aRouter.ajax+'receptiondesk/ajax-remove-file/',{idTarget:idTarget},function(result){
			if(result.bStateError){
				ls.msg.error(null,result.sMsg);
			}else{
				$('#receptiondesk_question_file_'+idTarget).remove();
				ls.msg.notice(null,result.sMsg);
			}
		});
		return false;
	};

	this.addFile=function(result){
		var form=$('#receptiondesk-file-upload-form');
		if(!result.bStateError){
			$('#receptiondesk_file_list').append(result.sFile);
			ls.msg.notice(result.sMsgTitle,result.sMsg);
		}else{
			ls.msg.error(result.sMsgTitle,result.sMsg);
		}
		ls.receptiondesk.formLoader(form,true);
		ls.receptiondesk.closeUploadForm();
	};

	this.openEditForm=function(idTarget){
		ls.ajax(aRouter.ajax+'receptiondesk/ajax-get-edit-category/',{idTarget:idTarget},function(result){
			if(result.bStateError){
				ls.msg.error(null,result.sMsg);
			}else{
				$.each(result.aFields,function(i,aField){
					$('#form_receptiondesk_categories').find('#receptiondesk_'+aField.field).val(aField.value);
				});
				$('#window_receptiondesk_categories').find('h3').text(ls.lang.get('plugin.receptiondesk.receptiondesk_admin_categories_edit_title'));
				$('#window_receptiondesk_categories').find('small.validate-error-show').removeClass('validate-error-show').addClass('validate-error-hide');
				$('#receptiondesk_category_id').val(idTarget);
				$('#window_receptiondesk_categories').jqmShow();
			}
		});
		return false;
	};

	this.validateCategoryFields=function(aFields,sForm){
		if(typeof(sForm)=='string') sForm=$('#'+sForm);
		ls.ajax(aRouter.ajax+'receptiondesk/ajax-validate-category/',{fields:aFields},function(result){
			if(!sForm) sForm=$('body');
			$.each(aFields,function(i,aField){
				if(result.aErrors && result.aErrors[aField.field][0]){
					sForm.find('.validate-error-field-'+aField.field).removeClass('validate-error-hide').addClass('validate-error-show').text(result.aErrors[aField.field][0]);
				}else{
					sForm.find('.validate-error-field-'+aField.field).removeClass('validate-error-show').addClass('validate-error-hide');
				}
			});
		});
	};

	this.validateCategoryField=function(sField,sValue,sForm,aParams){
		var aFields=[];
		aFields.push({field:sField,value:sValue,params:aParams || {}});
		ls.receptiondesk.validateCategoryFields(aFields,sForm);
	};

	this.setCategory=function(){
		var form=$('#form_receptiondesk_categories');
		ls.receptiondesk.formLoader(form);
		$('#submit_category').attr('disabled',true);
		ls.ajaxSubmit(aRouter.ajax+'receptiondesk/ajax-set-category/',form,function(result){
			ls.receptiondesk.formLoader(form,true);
			if(result.bStateError){
				ls.msg.error(null,result.sMsg);
			}else{
				if(typeof(form)=='string') form=$('#'+form);
				form.find('.validate-error-show').removeClass('validate-error-show').addClass('validate-error-hide');
				if(result.aErrors){
					$.each(result.aErrors,function(sField,aErrors){
						if(aErrors[0]) form.find('.validate-error-field-'+sField).removeClass('validate-error-hide').addClass('validate-error-show').text(aErrors[0]);
					});
				}else{
					if(result.sMsg) ls.msg.notice(null,result.sMsg);
					$('#receptiondesk_categories').html(result.sCategoriesList);
					$('#window_receptiondesk_categories').jqmHide();
				}
			}
		}.bind(this));
		$('#submit_category').attr('disabled',false);
	};

	this.removeCategory=function(){
		if(!confirm(ls.lang.get('plugin.receptiondesk.receptiondesk_admin_categories_remove_confirm'))) return;
		ls.ajaxSubmit(aRouter.ajax+'receptiondesk/ajax-remove-category/',$('#form_receptiondesk_categories_remove'),function(result){
			if(result.bStateError){
				ls.msg.error(null,result.sMsg);
			}else{
				if(result.sMsg) ls.msg.notice(null,result.sMsg);
				$('#receptiondesk_categories').html(result.sCategoriesList);
				$('#window_receptiondesk_categories_remove').jqmHide();
				$('#receptiondesk_category_remove').html('');
			}
		});
		return false;
	};

	this.redirectCategory=function(idTarget){
		ls.ajax(aRouter.ajax+'receptiondesk/ajax-redirect-category/',{idTarget:idTarget},function(result){
			if(result.bStateError){
				ls.msg.error(null,result.sMsg);
			}else{
				if(result.sUrlRedirect) window.location=result.sUrlRedirect;
			}
		});
		return false;
	};

	this.formLoader=function(form,bHide){
		if(typeof(form)=='string') form=$('#'+form);
		form.find('input[type="text"],input[type="file"],textarea').each(function(k,v){
			if(bHide){
				$(v).removeClass('loader');
			}else{
				$(v).addClass('loader');
			}
		});
	};

	this.validateQuestionFields=function(aFields,sForm){
		if(typeof(sForm)=='string') sForm=$('#'+sForm);
		ls.ajax(aRouter.ajax+'receptiondesk/ajax-validate-question/',{fields:aFields},function(result){
			if(!sForm) sForm=$('body');
			$.each(aFields,function(i,aField){
				if(result.aErrors && result.aErrors[aField.field][0]){
					sForm.find('.validate-error-field-'+aField.field).removeClass('validate-error-hide').addClass('validate-error-show').text(result.aErrors[aField.field][0]);
				}else{
					sForm.find('.validate-error-field-'+aField.field).removeClass('validate-error-show').addClass('validate-error-hide');
				}
			});
		});
	};

	this.validateQuestionField=function(sField,sValue,sForm,aParams){
		var aFields=[];
		aFields.push({field:sField,value:sValue,params:aParams || {}});
		ls.receptiondesk.validateQuestionFields(aFields,sForm);
	};

	this.setQuestion=function(){
		var form=$('#form_receptiondesk_question');
		ls.receptiondesk.formLoader(form);
		$('#submit_question').attr('disabled',true);
		ls.ajaxSubmit(aRouter.ajax+'receptiondesk/ajax-set-question/',form,function(result){
			ls.receptiondesk.formLoader(form,true);
			if(result.bStateError){
				ls.msg.error(null,result.sMsg);
			}else{
				if(typeof(form)=='string') form=$('#'+form);
				form.find('.validate-error-show').removeClass('validate-error-show').addClass('validate-error-hide');
				if(result.aErrors){
					$.each(result.aErrors,function(sField,aErrors){
						if(aErrors[0]) form.find('.validate-error-field-'+sField).removeClass('validate-error-hide').addClass('validate-error-show').text(aErrors[0]);
					});
				}else{
					if(result.sMsg) ls.msg.notice(null,result.sMsg);
					if($('#question_popup').val()=='popup'){
						$('#window_receptiondesk_question').jqmHide();
						ls.receptiondesk.clearFormField('question');
						$('.receptiondesk-question-notice').show();
					}else{
						if(result.sUrlRedirect) window.location=result.sUrlRedirect;
					}
				}
			}
		}.bind(this));
		$('#submit_question').attr('disabled',false);
		setTimeout(function(){$('.receptiondesk-question-notice').fadeOut('fast')},10000);
	};

	this.editQuestion=function(){
		var form=$('#form_receptiondesk_question');
		ls.receptiondesk.formLoader(form);
		$('#submit_question').attr('disabled',true);
		ls.ajaxSubmit(aRouter.ajax+'receptiondesk/ajax-edit-question/',form,function(result){
			ls.receptiondesk.formLoader(form,true);
			if(result.bStateError){
				ls.msg.error(null,result.sMsg);
			}else{
				if(typeof(form)=='string') form=$('#'+form);
				form.find('.validate-error-show').removeClass('validate-error-show').addClass('validate-error-hide');
				if(result.aErrors){
					$.each(result.aErrors,function(sField,aErrors){
						if(aErrors[0]) form.find('.validate-error-field-'+sField).removeClass('validate-error-hide').addClass('validate-error-show').text(aErrors[0]);
					});
				}else{
					if(result.sMsg) ls.msg.notice(null,result.sMsg);
					if(result.sUrlRedirect) window.location=result.sUrlRedirect;
				}
			}
		}.bind(this));
		$('#submit_question').attr('disabled',false);
	};

	this.removeQuestion=function(idTarget){
		if(!confirm(ls.lang.get('plugin.receptiondesk.receptiondesk_admin_question_remove_confirm'))) return;
		ls.ajax(aRouter.ajax+'receptiondesk/ajax-remove-question/',{idTarget:idTarget},function(result){
			if(result.bStateError){
				ls.msg.error(null,result.sMsg);
			}else{
				if(result.sUrlRedirect) window.location=result.sUrlRedirect;
				ls.msg.notice(null,result.sMsg);
			}
		});
		return false;
	};

	this.removeQuestion=function(idTarget){
		if(!confirm(ls.lang.get('plugin.receptiondesk.receptiondesk_admin_question_remove_confirm'))) return;
		ls.ajax(aRouter.ajax+'receptiondesk/ajax-remove-question/',{idTarget:idTarget},function(result){
			if(result.bStateError){
				ls.msg.error(null,result.sMsg);
			}else{
				if(result.sUrlRedirect) window.location=result.sUrlRedirect;
				ls.msg.notice(null,result.sMsg);
			}
		});
		return false;
	};

	this.clearFormField=function(type){
		$('#form_receptiondesk_'+type).find('input[type="text"],textarea').each(function(k,v){
			$(v).val('');
			$(v).next('small.validate-error-show').removeClass('validate-error-show').addClass('validate-error-hide');
		});
	};

	this.setAnswer=function(){
		var form=$('#form_receptiondesk_answer');
		ls.receptiondesk.formLoader(form);
		$('#submit_answer').attr('disabled',true);
		ls.ajaxSubmit(aRouter.ajax+'receptiondesk/ajax-set-answer/',form,function(result){
			ls.receptiondesk.formLoader(form,true);
			if(result.bStateError){
				ls.msg.error(null,result.sMsg);
			}else{
				if(result.sMsg) ls.msg.notice(null,result.sMsg);
			}
		}.bind(this));
		$('#submit_answer').attr('disabled',false);
	};

	return this;
}).call(ls.receptiondesk || {},jQuery);

ls.settings.getMarkitupReceptiondesk=function(){
	return {
		onShiftEnter:{keepDefault:false,replaceWith:'<br />\n'},
		onTab:{keepDefault:false,replaceWith:'    '},
		markupSet:[
			{name:ls.lang.get('panel_b'),className:'editor-bold',key:'B',openWith:'(!(<strong>|!|<b>)!)',closeWith:'(!(</strong>|!|</b>)!)' },
			{name:ls.lang.get('panel_i'),className:'editor-italic',key:'I',openWith:'(!(<em>|!|<i>)!)',closeWith:'(!(</em>|!|</i>)!)'  },
			{name:ls.lang.get('panel_s'),className:'editor-stroke',key:'S',openWith:'<s>',closeWith:'</s>' },
			{name:ls.lang.get('panel_u'),className:'editor-underline',key:'U',openWith:'<u>',closeWith:'</u>' },
			{separator:'---------------' },
			{name:ls.lang.get('panel_quote'),className:'editor-quote',key:'Q',replaceWith:function(m) { if (m.selectionOuter) return '<blockquote>'+m.selectionOuter+'</blockquote>'; else if (m.selection) return '<blockquote>'+m.selection+'</blockquote>'; else return '<blockquote></blockquote>' } },
			{name:ls.lang.get('panel_url'),className:'editor-link',key:'L',openWith:'<a href="[!['+ls.lang.get('panel_url_promt')+':!:http://]!]"(!( title="[![Title]!]")!)>',closeWith:'</a>',placeHolder:'Your text to link...' },
			{separator:'---------------' },
			{name:ls.lang.get('panel_clear_tags'),className:'editor-clean',replaceWith:function(markitup) { return markitup.selection.replace(/<(.*?)>/g,"") } }
		]
	}
};

ls.settings.getMarkitupReceptiondeskAnswer=function(){
	return {
		onShiftEnter:{keepDefault:false,replaceWith:'<br />\n'},
		onTab:{keepDefault:false,replaceWith:'    '},
		markupSet:[
			{name:ls.lang.get('panel_b'),className:'editor-bold',key:'B',openWith:'(!(<strong>|!|<b>)!)',closeWith:'(!(</strong>|!|</b>)!)' },
			{name:ls.lang.get('panel_i'),className:'editor-italic',key:'I',openWith:'(!(<em>|!|<i>)!)',closeWith:'(!(</em>|!|</i>)!)'  },
			{name:ls.lang.get('panel_s'),className:'editor-stroke',key:'S',openWith:'<s>',closeWith:'</s>' },
			{name:ls.lang.get('panel_u'),className:'editor-underline',key:'U',openWith:'<u>',closeWith:'</u>' },
			{separator:'---------------' },
			{name: ls.lang.get('panel_image'), className:'editor-picture', key:'P', beforeInsert: function(h) { jQuery('#window_upload_img').jqmShow(); } },
			{name:ls.lang.get('panel_quote'),className:'editor-quote',key:'Q',replaceWith:function(m) { if (m.selectionOuter) return '<blockquote>'+m.selectionOuter+'</blockquote>'; else if (m.selection) return '<blockquote>'+m.selection+'</blockquote>'; else return '<blockquote></blockquote>' } },
			{name:ls.lang.get('panel_url'),className:'editor-link',key:'L',openWith:'<a href="[!['+ls.lang.get('panel_url_promt')+':!:http://]!]"(!( title="[![Title]!]")!)>',closeWith:'</a>',placeHolder:'Your text to link...' },
			{separator:'---------------' },
			{name:ls.lang.get('panel_clear_tags'),className:'editor-clean',replaceWith:function(markitup) { return markitup.selection.replace(/<(.*?)>/g,"") } }
		]
	}
};

jQuery(document).ready(function($){

	$('#window_receptiondesk_categories_remove').jqm();
	$('#window_receptiondesk_categories').jqm();
	$('#window_receptiondesk_question').jqm();
	$('#receptiondesk-file-upload-form').jqm({trigger:'#receptiondesk_file_upload'});

	$('#form_receptiondesk_categories').find('.js-ajax-validate').blur(function(e){
		if($('#receptiondesk_category_id').val()!='') ls.receptiondesk.validateCategoryField($(e.target).attr('name'),$(e.target).val(),$('#form_receptiondesk_categories'),{});
	});

	$('#form_receptiondesk_question').find('.js-ajax-validate').blur(function(e){
		ls.receptiondesk.validateQuestionField($(e.target).attr('name'),$(e.target).val(),$('#form_receptiondesk_question'),{});
	});

	$('.js-question-form-show').click(function(){
		if($('#question_popup').val()=='popup'){
			$('#window_receptiondesk_question').jqmShow();
			return false;
		}
	});

});