# Host: localhost  (Version: 5.5.53)
# Date: 2019-06-19 15:20:03
# Generator: MySQL-Front 5.3  (Build 4.234)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "config"
#

DROP TABLE IF EXISTS `config`;
CREATE TABLE `config` (
  `site_url` text NOT NULL,
  `site_title` text NOT NULL,
  `site_meta` text NOT NULL,
  `smtp_server` text,
  `smtp_port` text,
  `smtp_encrypt` text,
  `smtp_mail` text,
  `smtp_password` text,
  PRIMARY KEY (`site_url`(10))
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

#
# Data for table "config"
#

/*!40000 ALTER TABLE `config` DISABLE KEYS */;
/*!40000 ALTER TABLE `config` ENABLE KEYS */;

#
# Structure for table "u_todo"
#

DROP TABLE IF EXISTS `u_todo`;
CREATE TABLE `u_todo` (
  `id` int(11) NOT NULL,
  `user` text NOT NULL,
  `content` text NOT NULL,
  `start_time` date NOT NULL,
  `end_time` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

#
# Data for table "u_todo"
#

/*!40000 ALTER TABLE `u_todo` DISABLE KEYS */;
/*!40000 ALTER TABLE `u_todo` ENABLE KEYS */;

#
# Structure for table "users"
#

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `mail` text,
  `password` tinytext NOT NULL,
  `job` text NOT NULL,
  `reg_time` date NOT NULL,
  `last_login` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

#
# Data for table "users"
#

/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
