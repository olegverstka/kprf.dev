CREATE TABLE IF NOT EXISTS `prefix_receptiondesk_categories` (
		`category_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
		`category_title` varchar(200) NOT NULL,
		`category_url` varchar(200) NOT NULL,
		`category_description` text NOT NULL,
		`category_count_question` int(10) unsigned NOT NULL DEFAULT '0',
	PRIMARY KEY (`category_id`),
	KEY `category_title` (`category_title`),
	KEY `category_url` (`category_url`),
	KEY `category_count_question` (`category_count_question`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;

CREATE TABLE IF NOT EXISTS `prefix_receptiondesk_questions` (
		`question_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
		`question_category_id` int(11) unsigned NOT NULL,
		`question_date_add` datetime NOT NULL,
		`question_date_edit` datetime DEFAULT NULL,
		`question_user_ip` varchar(20) NOT NULL,
		`question_publish` tinyint(1) NOT NULL DEFAULT '0',
		`question_text` longtext NOT NULL,
		`question_text_source` longtext NOT NULL,
		`question_text_hash` varchar(32) NOT NULL,
		`question_extra` text NOT NULL,
		`answer_text` longtext NOT NULL,
		`answer_text_source` longtext NOT NULL,
		`answer_date_add` datetime NOT NULL,
	PRIMARY KEY (`question_id`),
	KEY `question_category_id` (`question_category_id`),
	KEY `question_date_add` (`question_date_add`),
	KEY `question_publish` (`question_publish`),
	KEY `question_text_hash` (`question_text_hash`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;

ALTER TABLE `prefix_receptiondesk_questions` 
	ADD CONSTRAINT `prefix_receptiondesk_questions_fk` FOREIGN KEY (`question_category_id`) REFERENCES `prefix_receptiondesk_categories` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE;

CREATE TABLE IF NOT EXISTS `prefix_receptiondesk_files` (
		`file_id` int(11) NOT NULL AUTO_INCREMENT,
		`question_id` int(11) unsigned DEFAULT NULL,
		`file_name` varchar(200) NOT NULL,
		`file_size` int(11) DEFAULT '0',
		`file_path` varchar(255) NOT NULL,
		`file_target_tmp` varchar(40) DEFAULT NULL,
	PRIMARY KEY (`file_id`),
	KEY `question_id` (`question_id`),
	KEY `file_target_tmp` (`file_target_tmp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;