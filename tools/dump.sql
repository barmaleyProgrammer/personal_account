SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `login` char(32) NOT NULL,
  `pass` char(32) NOT NULL,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `ux_login` (`login`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

BEGIN;
INSERT INTO `users` (`id`, `login`, `pass`, `name`) VALUES
(141, 'rrrrr', 'd27a36344cb4f91ed5bc520f92368081', 'rrrrr'),
(142, 'eeeee', '14cd7464a380030dfa031b8ef798889b', 'eeeee'),
(144, 'qqqqq', '1ef3d829e106427d55f4c26f3948ffa2', 'qqqqq'),
(145, 'ttttt', '31a566063e5487d1c224cb67fbdf8434', 'ttttt');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
