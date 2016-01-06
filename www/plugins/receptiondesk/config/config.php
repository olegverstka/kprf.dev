<?php
//===============================================================
	Config::Set('db.table.receptiondesk_questions','___db.table.prefix___receptiondesk_questions');
	Config::Set('db.table.receptiondesk_categories','___db.table.prefix___receptiondesk_categories');
	Config::Set('db.table.receptiondesk_files','___db.table.prefix___receptiondesk_files');

	Config::Set('router.page.receptiondesk','PluginReceptiondesk_ActionReceptiondesk');

	Config::Set('plugin.receptiondesk.receptiondesk_category_description_max_length',200);

	Config::Set('plugin.receptiondesk.receptiondesk_create_send_admin',true);
	Config::Set('plugin.receptiondesk.receptiondesk_create_send_admin_mail','test@test.ru');

	Config::Set('plugin.receptiondesk.receptiondesk_create_popup',false);
	Config::Set('plugin.receptiondesk.receptiondesk_create_editor',false);
	Config::Set('plugin.receptiondesk.receptiondesk_create_mail_empty',true);

	Config::Set('plugin.receptiondesk.receptiondesk_create_file_count_files_max',30);
	Config::Set('plugin.receptiondesk.receptiondesk_create_file_max_size',1024*50);
	Config::Set('plugin.receptiondesk.receptiondesk_create_file_path_uploads',Config::Get('path.uploads.images').'/receptiondesk/');
	Config::Set('plugin.receptiondesk.receptiondesk_create_file_extension','jpg,jpeg,png');
	Config::Set('plugin.receptiondesk.receptiondesk_create_file_max_width',Config::Get('view.img_max_width'));
	Config::Set('plugin.receptiondesk.receptiondesk_create_file_max_height',Config::Get('view.img_max_height'));
	Config::Set('plugin.receptiondesk.receptiondesk_create_file_array_size',array(
		array('w'=>1000,'h'=>null,'crop'=>false,),
		array('w'=>500,'h'=>null,'crop'=>false,),
		array('w'=>100,'h'=>65,'crop'=>true,),
		array('w'=>50,'h'=>50,'crop'=>true,),
	));

	Config::Set('plugin.receptiondesk.receptiondesk_question_text_max_length',2000);
	Config::Set('plugin.receptiondesk.receptiondesk_question_per_page',5);
	Config::Set('plugin.receptiondesk.receptiondesk_question_new_time',2*24*60*60);

	Config::Set('plugin.receptiondesk.receptiondesk_create_answer_empty',true);
	Config::Set('plugin.receptiondesk.receptiondesk_create_answer_editor',true);
//===============================================================
?>