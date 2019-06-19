<meta charset="utf-8">
<?php
require_once("../../config/database.php");
// 使用 sql 创建数据表
$sql = "CREATE TABLE `config` (
  `site_url` text NOT NULL,
  `site_title` text NOT NULL,
  `site_meta` text NOT NULL,
  `smtp_server` text,
  `smtp_port` text,
  `smtp_encrypt` text,
  `smtp_mail` text,
  `smtp_password` text,
  PRIMARY KEY (`site_url`(10))
) ENGINE=MyISAM DEFAULT CHARSET=utf8";

$sql = "CREATE TABLE `u_todo` (
  `id` int(11) NOT NULL,
  `user` text NOT NULL,
  `content` text NOT NULL,
  `start_time` date NOT NULL,
  `end_time` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8";

$sql = "CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `mail` text,
  `password` tinytext NOT NULL,
  `job` text NOT NULL,
  `reg_time` date NOT NULL,
  `last_login` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8";
