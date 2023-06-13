/*
 Navicat Premium Data Transfer

 Source Server         : local
 Source Server Type    : MariaDB
 Source Server Version : 100335
 Source Host           : 127.0.0.1:3306
 Source Schema         : barmaley

 Target Server Type    : MariaDB
 Target Server Version : 100335
 File Encoding         : 65001

 Date: 13/06/2023 14:00:00
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for cards
-- ----------------------------
DROP TABLE IF EXISTS `cards`;
CREATE TABLE `cards` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `card` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cards
-- ----------------------------
BEGIN;
INSERT INTO `cards` (`id`, `name`, `card`) VALUES (1, 'qqqqq', '11111');
COMMIT;

-- ----------------------------
-- Table structure for categories
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of categories
-- ----------------------------
BEGIN;
INSERT INTO `categories` (`id`, `title`, `created_at`, `updated_at`, `deleted_at`) VALUES (1, 'cats', NULL, NULL, NULL);
INSERT INTO `categories` (`id`, `title`, `created_at`, `updated_at`, `deleted_at`) VALUES (2, 'dogs', NULL, NULL, NULL);
INSERT INTO `categories` (`id`, `title`, `created_at`, `updated_at`, `deleted_at`) VALUES (3, 'fish', NULL, NULL, NULL);
COMMIT;

-- ----------------------------
-- Table structure for currency
-- ----------------------------
DROP TABLE IF EXISTS `currency`;
CREATE TABLE `currency` (
  `id` int(11) NOT NULL,
  `ccy` varchar(255) DEFAULT NULL,
  `Base ccy` varchar(255) DEFAULT NULL,
  `Buy` varchar(255) DEFAULT NULL,
  `Sale` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of currency
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of failed_jobs
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
BEGIN;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (2, '2014_10_12_100000_create_password_reset_tokens_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (3, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (4, '2019_08_19_000000_create_failed_jobs_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (5, '2019_12_14_000001_create_personal_access_tokens_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (6, '2023_05_02_113103_create_posts_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (7, '2023_05_02_113553_create_categories_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (8, '2023_05_02_113743_create_tags_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (9, '2023_05_02_113959_create_post_tag_table', 1);
COMMIT;

-- ----------------------------
-- Table structure for pages
-- ----------------------------
DROP TABLE IF EXISTS `pages`;
CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pages
-- ----------------------------
BEGIN;
INSERT INTO `pages` (`id`, `Name`) VALUES (1, 'привет!');
INSERT INTO `pages` (`id`, `Name`) VALUES (2, 'ерунда');
INSERT INTO `pages` (`id`, `Name`) VALUES (3, 'tryutrytr');
COMMIT;

-- ----------------------------
-- Table structure for password_reset_tokens
-- ----------------------------
DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of password_reset_tokens
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of password_resets
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for personal_access_tokens
-- ----------------------------
DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of personal_access_tokens
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for post_tag
-- ----------------------------
DROP TABLE IF EXISTS `post_tag`;
CREATE TABLE `post_tag` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `post_id` bigint(20) unsigned NOT NULL,
  `tag_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of post_tag
-- ----------------------------
BEGIN;
INSERT INTO `post_tag` (`id`, `post_id`, `tag_id`, `created_at`, `updated_at`) VALUES (1, 1, 2, NULL, NULL);
INSERT INTO `post_tag` (`id`, `post_id`, `tag_id`, `created_at`, `updated_at`) VALUES (2, 1, 3, NULL, NULL);
INSERT INTO `post_tag` (`id`, `post_id`, `tag_id`, `created_at`, `updated_at`) VALUES (3, 2, 2, NULL, NULL);
INSERT INTO `post_tag` (`id`, `post_id`, `tag_id`, `created_at`, `updated_at`) VALUES (4, 2, 3, NULL, NULL);
INSERT INTO `post_tag` (`id`, `post_id`, `tag_id`, `created_at`, `updated_at`) VALUES (5, 3, 1, NULL, NULL);
INSERT INTO `post_tag` (`id`, `post_id`, `tag_id`, `created_at`, `updated_at`) VALUES (6, 3, 2, NULL, NULL);
INSERT INTO `post_tag` (`id`, `post_id`, `tag_id`, `created_at`, `updated_at`) VALUES (7, 3, 3, NULL, NULL);
INSERT INTO `post_tag` (`id`, `post_id`, `tag_id`, `created_at`, `updated_at`) VALUES (10, 4, 2, NULL, NULL);
INSERT INTO `post_tag` (`id`, `post_id`, `tag_id`, `created_at`, `updated_at`) VALUES (11, 5, 2, NULL, NULL);
INSERT INTO `post_tag` (`id`, `post_id`, `tag_id`, `created_at`, `updated_at`) VALUES (12, 6, 1, NULL, NULL);
COMMIT;

-- ----------------------------
-- Table structure for posts
-- ----------------------------
DROP TABLE IF EXISTS `posts`;
CREATE TABLE `posts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `likes` bigint(20) unsigned DEFAULT NULL,
  `is_published` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `category_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of posts
-- ----------------------------
BEGIN;
INSERT INTO `posts` (`id`, `title`, `content`, `image`, `likes`, `is_published`, `created_at`, `updated_at`, `deleted_at`, `category_id`) VALUES (1, '111', '111', '111', 11, 1, NULL, NULL, NULL, 1);
INSERT INTO `posts` (`id`, `title`, `content`, `image`, `likes`, `is_published`, `created_at`, `updated_at`, `deleted_at`, `category_id`) VALUES (3, '222', '222', '222', 22, 1, NULL, NULL, NULL, 2);
INSERT INTO `posts` (`id`, `title`, `content`, `image`, `likes`, `is_published`, `created_at`, `updated_at`, `deleted_at`, `category_id`) VALUES (4, '444', '444', '444', 442, 1, NULL, '2023-05-05 06:08:20', NULL, 1);
INSERT INTO `posts` (`id`, `title`, `content`, `image`, `likes`, `is_published`, `created_at`, `updated_at`, `deleted_at`, `category_id`) VALUES (5, 'rrr2', 'rrr', 'rrr', 222, 1, '2023-05-02 18:52:24', '2023-05-05 06:35:33', NULL, 1);
INSERT INTO `posts` (`id`, `title`, `content`, `image`, `likes`, `is_published`, `created_at`, `updated_at`, `deleted_at`, `category_id`) VALUES (6, 'post with request', 'request class in work', 'some image.jpeg', 11, 1, '2023-05-05 08:44:55', '2023-05-05 08:44:55', NULL, 1);
COMMIT;

-- ----------------------------
-- Table structure for tags
-- ----------------------------
DROP TABLE IF EXISTS `tags`;
CREATE TABLE `tags` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of tags
-- ----------------------------
BEGIN;
INSERT INTO `tags` (`id`, `title`, `created_at`, `updated_at`) VALUES (1, 'holidays', NULL, NULL);
INSERT INTO `tags` (`id`, `title`, `created_at`, `updated_at`) VALUES (2, 'travel', NULL, NULL);
INSERT INTO `tags` (`id`, `title`, `created_at`, `updated_at`) VALUES (3, 'food', NULL, NULL);
COMMIT;

-- ----------------------------
-- Table structure for tasks
-- ----------------------------
DROP TABLE IF EXISTS `tasks`;
CREATE TABLE `tasks` (
  `Id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `Task` varchar(100) CHARACTER SET utf8 COLLATE utf8_croatian_ci DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=90 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tasks
-- ----------------------------
BEGIN;
INSERT INTO `tasks` (`Id`, `Task`) VALUES (76, 'nn');
INSERT INTO `tasks` (`Id`, `Task`) VALUES (78, 'nnnn');
INSERT INTO `tasks` (`Id`, `Task`) VALUES (79, 'jjjjj');
INSERT INTO `tasks` (`Id`, `Task`) VALUES (80, 'iiii');
INSERT INTO `tasks` (`Id`, `Task`) VALUES (82, 'тит м');
COMMIT;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `login` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=139 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
BEGIN;
INSERT INTO `users` (`id`, `login`, `pass`, `name`) VALUES (2, 'wwwwww', '', '');
INSERT INTO `users` (`id`, `login`, `pass`, `name`) VALUES (3, '111111', '', '');
INSERT INTO `users` (`id`, `login`, `pass`, `name`) VALUES (4, 'ffffff', '', '');
INSERT INTO `users` (`id`, `login`, `pass`, `name`) VALUES (5, 'vvvvv', '12121', 'vvvvv');
INSERT INTO `users` (`id`, `login`, `pass`, `name`) VALUES (6, 'natatata', '44', 'gereer');
INSERT INTO `users` (`id`, `login`, `pass`, `name`) VALUES (7, 'login', '', 'name');
INSERT INTO `users` (`id`, `login`, `pass`, `name`) VALUES (8, 'login', '', 'nasme');
INSERT INTO `users` (`id`, `login`, `pass`, `name`) VALUES (9, 'login', '', 'nam');
INSERT INTO `users` (`id`, `login`, `pass`, `name`) VALUES (100, 'dddddd', 'dddd', 'ddddd');
INSERT INTO `users` (`id`, `login`, `pass`, `name`) VALUES (101, 'mnbmnb', '7b2dde523d39309b050c0d2a9febee2a', 'mhkhbkh');
INSERT INTO `users` (`id`, `login`, `pass`, `name`) VALUES (102, 'mnbmnb', '7b2dde523d39309b050c0d2a9febee2a', 'mhkhbkh');
INSERT INTO `users` (`id`, `login`, `pass`, `name`) VALUES (103, 'mnbmnb', '7b2dde523d39309b050c0d2a9febee2a', 'mhkhbkh');
INSERT INTO `users` (`id`, `login`, `pass`, `name`) VALUES (104, 'mnbmnb', '7b2dde523d39309b050c0d2a9febee2a', 'mhkhbkh');
INSERT INTO `users` (`id`, `login`, `pass`, `name`) VALUES (105, 'bbbbb', 'fc7ad4adb7dd9c6def6f9b00a81398bc', 'bbbbb');
INSERT INTO `users` (`id`, `login`, `pass`, `name`) VALUES (108, 'rrrrr', 'd27a36344cb4f91ed5bc520f92368081', 'rrrrr');
INSERT INTO `users` (`id`, `login`, `pass`, `name`) VALUES (109, 'rrrrr', 'd27a36344cb4f91ed5bc520f92368081', 'rrrrr');
INSERT INTO `users` (`id`, `login`, `pass`, `name`) VALUES (110, 'levlev', '875978b004641cd39f471d6a1a555083', 'levlev');
INSERT INTO `users` (`id`, `login`, `pass`, `name`) VALUES (111, 'huuuu', '56625d5d4c36470a2148d1aa02a42aa9', 'levlev');
INSERT INTO `users` (`id`, `login`, `pass`, `name`) VALUES (112, 'huuuu', '56625d5d4c36470a2148d1aa02a42aa9', 'levlev');
INSERT INTO `users` (`id`, `login`, `pass`, `name`) VALUES (113, 'huuuu', '07b865c83e66d980d582c6f6584238b7', 'levlev');
INSERT INTO `users` (`id`, `login`, `pass`, `name`) VALUES (114, 'barmaley', 'df4a13fac2118fe2dcb5d67e90926911', 'barmaley');
INSERT INTO `users` (`id`, `login`, `pass`, `name`) VALUES (115, 'barmaley', 'df4a13fac2118fe2dcb5d67e90926911', 'barmaley');
INSERT INTO `users` (`id`, `login`, `pass`, `name`) VALUES (116, 'ppppp', '3daf0abd44b83fbcc3342e6d207dcea7', 'ppppp');
INSERT INTO `users` (`id`, `login`, `pass`, `name`) VALUES (117, 'ppppp', '3daf0abd44b83fbcc3342e6d207dcea7', 'ppppp');
INSERT INTO `users` (`id`, `login`, `pass`, `name`) VALUES (118, 'ppppp', '3daf0abd44b83fbcc3342e6d207dcea7', 'ppppp');
INSERT INTO `users` (`id`, `login`, `pass`, `name`) VALUES (119, 'ppppp', '3daf0abd44b83fbcc3342e6d207dcea7', 'ppppp');
INSERT INTO `users` (`id`, `login`, `pass`, `name`) VALUES (120, 'iiiii', '27ba9fa0d53c59f2ec817aa001a54e68', 'iiiii');
INSERT INTO `users` (`id`, `login`, `pass`, `name`) VALUES (121, 'iiiii', '27ba9fa0d53c59f2ec817aa001a54e68', 'iiiii');
INSERT INTO `users` (`id`, `login`, `pass`, `name`) VALUES (122, 'iiiii', '27ba9fa0d53c59f2ec817aa001a54e68', 'iiiii');
INSERT INTO `users` (`id`, `login`, `pass`, `name`) VALUES (123, 'iiiii', '27ba9fa0d53c59f2ec817aa001a54e68', 'iiiii');
INSERT INTO `users` (`id`, `login`, `pass`, `name`) VALUES (124, 'qqqqq', '1ef3d829e106427d55f4c26f3948ffa2', 'qqqqq');
INSERT INTO `users` (`id`, `login`, `pass`, `name`) VALUES (125, 'qqqqq', '1ef3d829e106427d55f4c26f3948ffa2', 'qqqqq');
INSERT INTO `users` (`id`, `login`, `pass`, `name`) VALUES (126, 'wwwww', 'acc16df21cdb94f68aa71360eeb137c6', 'wwwww');
INSERT INTO `users` (`id`, `login`, `pass`, `name`) VALUES (127, 'wwwww', 'acc16df21cdb94f68aa71360eeb137c6', 'wwwww');
INSERT INTO `users` (`id`, `login`, `pass`, `name`) VALUES (128, 'wwwww', 'acc16df21cdb94f68aa71360eeb137c6', 'wwwww');
INSERT INTO `users` (`id`, `login`, `pass`, `name`) VALUES (129, 'wwwww', 'acc16df21cdb94f68aa71360eeb137c6', 'wwwww');
INSERT INTO `users` (`id`, `login`, `pass`, `name`) VALUES (132, 'ttttt', '31a566063e5487d1c224cb67fbdf8434', 'ttttt');
INSERT INTO `users` (`id`, `login`, `pass`, `name`) VALUES (133, 'wwwww', 'acc16df21cdb94f68aa71360eeb137c6', 'wwwww');
INSERT INTO `users` (`id`, `login`, `pass`, `name`) VALUES (134, 'xxxxx', '716b3a5c2ba215a50ba695cba36e5c93', 'xxxxx');
INSERT INTO `users` (`id`, `login`, `pass`, `name`) VALUES (135, 'ccccc', '1be18bd914187a1afd5f531e058def28', 'ccccc');
INSERT INTO `users` (`id`, `login`, `pass`, `name`) VALUES (136, 'qqqqq', 'c938847109fe8b382385cef0f4425dd5', 'qqqqq');
INSERT INTO `users` (`id`, `login`, `pass`, `name`) VALUES (137, 'qqqqq', 'c938847109fe8b382385cef0f4425dd5', 'qqqqq');
INSERT INTO `users` (`id`, `login`, `pass`, `name`) VALUES (138, 'qqqqq', 'c938847109fe8b382385cef0f4425dd5', 'qqqqq');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
