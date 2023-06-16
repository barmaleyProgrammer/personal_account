SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for cards
-- ----------------------------
DROP TABLE IF EXISTS `cards`;
CREATE TABLE `cards` (
    `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
    `user_id` int(10) unsigned NOT NULL,
    `card` varchar(100) NOT NULL,
    PRIMARY KEY (`id`),
    KEY `fk_card_user` (`user_id`),
    CONSTRAINT `fk_card_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cards
-- ----------------------------
BEGIN;
INSERT INTO `cards` (`id`, `user_id`, `card`) VALUES
(4, 141, '33333'),
(5, 142, '44444'),
(6, 144, '1111111111'),
(25, 144, '7777777'),
(32, 144, '1234567'),
(33, 144, '1234567'),
(37, 144, '12345678'),
(46, 144, '2121213'),
(47, 144, '654321'),
(50, 142, '3232324'),
(55, 142, '9878656534'),
(56, 142, '123456765'),
(60, 142, '5432234'),
(61, 142, 'оропорр'),
(62, 142, '8675546'),
(63, 142, 'rere456'),
(64, 142, 'iyguygj'),
(65, 144, 'ererr44'),
(67, 145, 'uytuyyy'),
(68, 145, 'тьиьтиьь');
COMMIT;


-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `login` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `ux_login` (`login`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
BEGIN;
INSERT INTO `users` (`id`, `login`, `pass`, `name`) VALUES
(141, 'rrrrr', 'd27a36344cb4f91ed5bc520f92368081', 'rrrrr'),
(142, 'eeeee', '14cd7464a380030dfa031b8ef798889b', 'eeeee'),
(144, 'qqqqq', '1ef3d829e106427d55f4c26f3948ffa2', 'qqqqq'),
(145, 'ttttt', '31a566063e5487d1c224cb67fbdf8434', 'ttttt');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
