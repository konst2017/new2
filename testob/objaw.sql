/*
MySQL Data Transfer
Source Host: localhost
Source Database: objaw
Target Host: localhost
Target Database: objaw
Date: 04.03.2019 0:55:10
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for forgot
-- ----------------------------
CREATE TABLE `forgot` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `hash` varchar(32) NOT NULL,
  `expire` int(10) unsigned NOT NULL,
  `email` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for migration
-- ----------------------------
CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for options
-- ----------------------------
CREATE TABLE `options` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(128) NOT NULL,
  `name` varchar(128) NOT NULL,
  `value` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for pages
-- ----------------------------
CREATE TABLE `pages` (
  `page_id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(128) NOT NULL,
  `alias` varchar(128) NOT NULL,
  `description` varchar(128) NOT NULL,
  `keywords` varchar(128) NOT NULL,
  `text` text NOT NULL,
  `position` tinyint(3) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`page_id`),
  UNIQUE KEY `alias` (`alias`)
) ENGINE=MyISAM AUTO_INCREMENT=79 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for posts
-- ----------------------------
CREATE TABLE `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) DEFAULT NULL,
  `text` text NOT NULL,
  `oth` varchar(128) DEFAULT NULL,
  `tem` varchar(128) DEFAULT NULL,
  `sohpol` varchar(128) DEFAULT NULL,
  `polotw` varchar(128) DEFAULT '' COMMENT 'на выбор',
  `stran` varchar(128) DEFAULT NULL,
  `index` int(11) DEFAULT NULL,
  `raion` varchar(128) DEFAULT NULL,
  `naspunct` varchar(128) DEFAULT NULL,
  `tipnas` varchar(128) DEFAULT NULL,
  `naimul` varchar(128) DEFAULT NULL,
  `tipul` varchar(128) DEFAULT NULL,
  `dom` int(11) DEFAULT NULL,
  `kor` int(11) DEFAULT NULL,
  `kwar` int(11) DEFAULT NULL,
  `region` varchar(128) DEFAULT NULL,
  `fam` varchar(128) DEFAULT NULL,
  `imageFile` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=49 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for profile
-- ----------------------------
CREATE TABLE `profile` (
  `user_id` int(11) NOT NULL,
  `name` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  `public_email` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gravatar_email` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gravatar_id` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `location` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  `website` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bio` text COLLATE utf8_unicode_ci,
  `timezone` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Table structure for social_account
-- ----------------------------
CREATE TABLE `social_account` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `provider` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `client_id` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `data` text COLLATE utf8_unicode_ci,
  `code` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `email` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  `username` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `account_unique` (`provider`,`client_id`),
  UNIQUE KEY `account_unique_code` (`code`),
  KEY `fk_user_account` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Table structure for token
-- ----------------------------
CREATE TABLE `token` (
  `user_id` int(11) NOT NULL,
  `code` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) NOT NULL,
  `type` smallint(6) NOT NULL,
  UNIQUE KEY `token_unique` (`user_id`,`code`,`type`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Table structure for user
-- ----------------------------
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `confirmed_at` int(11) DEFAULT NULL,
  `unconfirmed_email` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  `blocked_at` int(11) DEFAULT NULL,
  `registration_ip` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `flags` int(11) NOT NULL DEFAULT '0',
  `last_login_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_unique_username` (`username`),
  UNIQUE KEY `user_unique_email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records 
-- ----------------------------
INSERT INTO `migration` VALUES ('m000000_000000_base', '1524224397');
INSERT INTO `migration` VALUES ('m140209_132017_init', '1549358753');
INSERT INTO `migration` VALUES ('m140403_174025_create_account_table', '1549358754');
INSERT INTO `migration` VALUES ('m140504_113157_update_tables', '1549358755');
INSERT INTO `migration` VALUES ('m140504_130429_create_token_table', '1549358756');
INSERT INTO `migration` VALUES ('m140622_111540_create_image_table', '1524224402');
INSERT INTO `migration` VALUES ('m140622_111545_add_name_to_image_table', '1524224403');
INSERT INTO `migration` VALUES ('m140830_171933_fix_ip_field', '1549358756');
INSERT INTO `migration` VALUES ('m140830_172703_change_account_table_name', '1549358756');
INSERT INTO `migration` VALUES ('m141222_110026_update_ip_field', '1549358756');
INSERT INTO `migration` VALUES ('m141222_135246_alter_username_length', '1549358756');
INSERT INTO `migration` VALUES ('m150614_103145_update_social_account_table', '1549358757');
INSERT INTO `migration` VALUES ('m150623_212711_fix_username_notnull', '1549358757');
INSERT INTO `migration` VALUES ('m151218_234654_add_timezone_to_profile', '1549358757');
INSERT INTO `migration` VALUES ('m160929_103127_add_last_login_at_to_user_table', '1549358758');
INSERT INTO `migration` VALUES ('m190125_140113_create_user_table', '1548425136');
INSERT INTO `options` VALUES ('1', 'course', 'Курс', '23');
INSERT INTO `options` VALUES ('2', 'email', 'Контактный email', 'admin@catalog.loc');
INSERT INTO `options` VALUES ('3', 'pagination', 'Кол-во товаров на страницу', '6');
INSERT INTO `options` VALUES ('4', 'site_title', 'Название сайта', 'Webformyself Каталог яблочной продукции');
INSERT INTO `pages` VALUES ('76', 'Главная', 'index', 'Описание главной', 'ключевики главной', 'Текст главной страницы', '1');
INSERT INTO `pages` VALUES ('77', 'О компании', 'about', 'Описание о компании', 'ключевики о компании', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni, laudantium cum eos quia amet voluptates odit rem molestiae corporis architecto labore iure sed id? Officiis, esse, iure, consectetur tenetur labore magni quibusdam repudiandae beatae illum quidem optio repellendus deleniti adipisci mollitia nostrum ea earum voluptas ullam ex odio deserunt fugit dolore facilis qui sit! Fugit, ex, a, atque, deleniti repudiandae voluptatibus magni perspiciatis maxime dignissimos omnis iusto est doloribus doloremque repellat corporis expedita explicabo? Delectus, tempore, molestias ad officia quaerat velit vel veniam natus voluptatum autem quod veritatis harum ut consectetur tempora rem eveniet cum assumenda dolor ullam blanditiis dicta.</p>\r\n<p>Quia, dolores, culpa, incidunt nostrum nemo itaque error facere quod labore accusantium vel eos. Sint, odio, eligendi magni ut ullam aliquam qui iusto voluptatum a consequatur assumenda ea repudiandae maiores amet dignissimos nesciunt eveniet culpa cumque debitis in incidunt ipsum excepturi labore consectetur explicabo quis expedita perspiciatis fugit officiis distinctio? Numquam, blanditiis, ut, earum explicabo placeat repellat architecto provident a ex voluptas odit labore itaque ad! Voluptatibus, molestiae, eaque, sapiente, libero aspernatur non voluptate dolor cupiditate beatae ratione fugit eligendi magnam nesciunt quos reprehenderit nobis necessitatibus soluta ullam repellat possimus dicta consectetur porro quas maxime facere optio consequatur iusto placeat?</p>\r\n<p>Sint, magni, odit repudiandae ducimus velit inventore nihil veniam accusantium natus dolore non dolor totam quidem perspiciatis facere labore cupiditate vitae. Nisi, tempore, corporis, voluptatibus, delectus non architecto atque vel blanditiis sunt illum possimus eveniet veritatis dolorum dignissimos hic! Vero, dolorem eveniet quis blanditiis odit in numquam maxime unde voluptates non asperiores natus quasi. Fugiat, nobis quibusdam rem ullam reiciendis odio sint voluptate placeat impedit non quam odit est cupiditate omnis tempore reprehenderit cum inventore veniam commodi voluptates minima illum dolorum ex saepe quo deleniti quae a sunt ratione tenetur aliquid itaque corporis laborum facilis architecto voluptatem iusto. Officia, vero!</p>', '2');
INSERT INTO `pages` VALUES ('78', 'Контакты', 'contacts', 'Описание Контакты', 'ключевики контакты', 'Текст страницы Контакты', '3');
INSERT INTO `posts` VALUES ('47', 'konst', 'konstanti.spirin@mail.ru', 'Проигрыватель CD Technics SL-PD867 производство Япония, отлично читает диски. \r\n\r\n\r\nТелефон:\r\n +75298143567\r\n,\r\n\r\n\r\n', null, null, null, '', null, null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `posts` VALUES ('48', 'aleksei', 'spirin.costia@yandex.ru', 'Световой прибор, свет для проведения мероприятий и дискотек, состояние новое, ACME Сканер MH-275S-ELS PANTHER | ACME\r\nУправляемый прибор, (5 каналов DMX 512, 1, 0), минисканер с плоским зеркалом, 20 лучей 15 гобо, совмещенных со светофильтрами, встроенный микрофон, режим Master-Slave, лампа ELC 24V 250W (300 часов) с рефлектором, есть другие варианты, обмен возможен, подробности по телефону.\r\nТел +375298175749', null, null, null, '', null, null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `profile` VALUES ('1', null, null, null, null, null, null, null, null);
INSERT INTO `user` VALUES ('1', 'konst', 'konstanti.spirin@mail.ru', '$2y$12$w4LuCvet7.sb6Nf0IGo7QO7xBJ0DHFVL6naitnsLY1K45CEEBAziq', '-r19Ld-B3tVFx3bkJHcHlJIN76n12GVh', '1549972144', null, null, '86.57.181.195', '1549972113', '1549972113', '0', '1551649471');
INSERT INTO `user` VALUES ('2', 'aleksei', 'spirin.costia@yandex.ru', '$2y$12$w4LuCvet7.sb6Nf0IGo7QO7xBJ0DHFVL6naitnsLY1K45CEEBAziq', '-r19Ld-B3tVFx3bkJHcHlJIN76n12GVh', '1551648037', null, null, '164.177.198.202', '1551647975', '1551647975', '0', '1551649578');
