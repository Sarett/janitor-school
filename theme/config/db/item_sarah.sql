CREATE TABLE `SITE_DB`.`item_sarah` (
  `id` int(11) NOT NULL auto_increment,
  `item_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,

  `full_name` varchar(100) NOT NULL DEFAULT '',
  `email` text NOT NULL DEFAULT '',


  PRIMARY KEY  (`id`),
  KEY `item_id` (`item_id`),
  CONSTRAINT `item_sarah_ibfk_1` FOREIGN KEY (`item_id`) REFERENCES `SITE_DB`.`items` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;
