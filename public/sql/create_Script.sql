use heroku_d1c14e40a6a44de;

CREATE TABLE `shouts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(50) DEFAULT NULL,
  `message` text,
  `time` time,
  PRIMARY KEY (`id`)
);