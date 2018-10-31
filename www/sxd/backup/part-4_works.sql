#SXD20|20011|50638|50632|2018.10.31 02:00:59|part-4|utf8|1|7|
#TA works`7`16384
#EOH

#	TC`works`utf8mb4_unicode_520_ci	;
CREATE TABLE `works` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `text` text COLLATE utf8mb4_unicode_520_ci,
  `author_id` int(11) unsigned DEFAULT NULL,
  `date_time` datetime DEFAULT NULL,
  `work_img` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `work_img_small` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `result` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `technologies` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `github` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `database` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `index_foreignkey_works_author` (`author_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci	;
#	TD`works`utf8mb4_unicode_520_ci	;
INSERT INTO `works` VALUES 
(1,'Магазин мотоциклов','Верстка лендинга для компании Indian Motorcycles.     ',1,'2018-07-28 14:54:47','920--170022205.jpg','320--170022205.jpg','Сайт запущен, работает и уже радует покупками посетителей и владельцев бизнеса.','<ul>\r\n	<li>HTML5, CSS3.</li>\r\n	<li>JavaScript, jQuery.</li>\r\n	<li>Less, Pug, Gulp, npm, bower.</li>\r\n</ul>\r\n','','',\N),
(2,'Верстка и frontend интернет магазина','Верстка лендинга хостинг компании. Мобильная адаптивность. ',1,'2018-07-28 14:57:37','-422164476.jpg','320--422164476.jpg','Проект сделан в срок. Заказчик доволен. Сайт запущен, работает и уже радует покупками посетителей и владельцев бизнеса.\r\n','','','',\N),
(3,'Промо сайт автомобиля','Сделана верстка      ',1,'2018-07-29 00:32:31','920-527875817.jpg','320-527875817.jpg','Проект сделан в срок. Заказчик доволен. Сайт запущен, работает и уже радует покупками посетителей и владельцев бизнеса.','<ul>\r\n	<li>HTML5, CSS3.</li>\r\n	<li>JavaScript, jQuery.</li>\r\n	<li>Less, Pug, Gulp, npm, bower.</li>\r\n</ul>\r\n','','',\N),
(4,'Магазин аудиотехники','Верстка страниц для магазина винтажной аудиотехники.  ',1,'2018-08-01 17:52:04','920-57392097.jpg','320-57392097.jpg','Сайт запущен, работает и уже радует покупками посетителей и владельцев бизнеса.\r\n\r\n\r\n','<p>HTML5, CSS3.<br />\r\nJavaScript, jQuery.<br />\r\nLess, Pug, Gulp, npm, bower.</p>\r\n','','',''),
(5,'Личный сайт портфолио','Верстка личного сайта портфолио на котором вы сейчас находитесь.\r\n    ',1,'2018-10-31 00:34:35','920--417716999.jpg','320--417716999.jpg','Проект сделан в срок.  Сайт запущен, работает и уже радует покупками посетителей и владельцев бизнеса.','<ul>\r\n	<li>HTML5, CSS3.</li>\r\n	<li>123.</li>\r\n	<li>123.</li>\r\n</ul>\r\n','','','&lt;p&gt;Кратко о проекте&lt;/p&gt;\r\n'),
(6,'Учебный макет Organica','&lt;p&gt;Верстка одностраничного сайта по PSD макету.&lt;/p&gt;\r\n',1,'2018-10-31 01:12:27','-506251433.jpg','320--506251433.jpg','Сайт запущен, работает и уже радует покупками посетителей и владельцев бизнеса.','<ul>\r\n	<li>HTML5</li>\r\n	<li>CSS3</li>\r\n</ul>\r\n','','',''),
(7,'Учебный макет Аполло','<p>Верстка лендинга хостинг компании. Мобильная адаптивность.</p>\r\n  ',1,'2018-10-31 01:14:29','920-38831295.jpg','320-38831295.jpg','Сайт запущен, работает и уже радует покупками посетителей и владельцев бизнеса.','<ul>\r\n	<li>HTML5, CSS3.</li>\r\n	<li>JavaScript, jQuery.</li>\r\n	<li>Less.</li>\r\n</ul>\r\n','','','')	;
