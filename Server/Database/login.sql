/*
 Navicat Premium Data Transfer

 Source Server         : Muonline
 Source Server Type    : MySQL
 Source Server Version : 80026
 Source Host           : localhost:3306
 Source Schema         : login

 Target Server Type    : MySQL
 Target Server Version : 80026
 File Encoding         : 65001

 Date: 20/09/2021 11:16:21
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for accounts
-- ----------------------------
DROP TABLE IF EXISTS `accounts`;
CREATE TABLE `accounts`  (
  `guid` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `blocked` tinyint UNSIGNED NULL DEFAULT 0,
  `security_code` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT '0',
  `golden_channel` bigint NULL DEFAULT 1500434821,
  `facebook_status` tinyint UNSIGNED NULL DEFAULT 0,
  `secured` tinyint UNSIGNED NULL DEFAULT 1,
  `account` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `register` bigint NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT NULL,
  `created_at` datetime NULL DEFAULT NULL,
  `email_verified_at` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`guid`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of accounts
-- ----------------------------

-- ----------------------------
-- Table structure for accounts_allowed
-- ----------------------------
DROP TABLE IF EXISTS `accounts_allowed`;
CREATE TABLE `accounts_allowed`  (
  `account_id` int UNSIGNED NOT NULL,
  `guid` int UNSIGNED NULL DEFAULT NULL,
  `server` smallint UNSIGNED NULL DEFAULT NULL,
  PRIMARY KEY (`account_id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of accounts_allowed
-- ----------------------------

-- ----------------------------
-- Table structure for accounts_banned
-- ----------------------------
DROP TABLE IF EXISTS `accounts_banned`;
CREATE TABLE `accounts_banned`  (
  `account_id` int UNSIGNED NOT NULL,
  `guid` int UNSIGNED NULL DEFAULT NULL,
  `unban_date` bigint NULL DEFAULT NULL,
  PRIMARY KEY (`account_id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of accounts_banned
-- ----------------------------

-- ----------------------------
-- Table structure for accounts_disconnect
-- ----------------------------
DROP TABLE IF EXISTS `accounts_disconnect`;
CREATE TABLE `accounts_disconnect`  (
  `account_id` int UNSIGNED NOT NULL,
  `server` smallint UNSIGNED NULL DEFAULT NULL,
  `masive` tinyint NULL DEFAULT NULL,
  PRIMARY KEY (`account_id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of accounts_disconnect
-- ----------------------------

-- ----------------------------
-- Table structure for accounts_security
-- ----------------------------
DROP TABLE IF EXISTS `accounts_security`;
CREATE TABLE `accounts_security`  (
  `account_id` int UNSIGNED NOT NULL,
  `account` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `ip` varchar(16) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `mac` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `disk_serial` int UNSIGNED NULL DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of accounts_security
-- ----------------------------

-- ----------------------------
-- Table structure for accounts_status
-- ----------------------------
DROP TABLE IF EXISTS `accounts_status`;
CREATE TABLE `accounts_status`  (
  `account_id` int UNSIGNED NOT NULL,
  `server_group` smallint UNSIGNED NULL DEFAULT NULL,
  `current_server` smallint UNSIGNED NULL DEFAULT NULL,
  `start_server` smallint UNSIGNED NULL DEFAULT NULL,
  `dest_server` smallint NULL DEFAULT NULL,
  `dest_world` smallint NULL DEFAULT NULL,
  `dest_x` smallint NULL DEFAULT NULL,
  `dest_y` smallint NULL DEFAULT NULL,
  `warp_time` int UNSIGNED NULL DEFAULT NULL,
  `warp_auth_1` int UNSIGNED NULL DEFAULT NULL,
  `warp_auth_2` int UNSIGNED NULL DEFAULT NULL,
  `warp_auth_3` int UNSIGNED NULL DEFAULT NULL,
  `warp_auth_4` int UNSIGNED NULL DEFAULT NULL,
  `last_ip` varchar(16) CHARACTER SET latin1 COLLATE latin1_general_ci NULL DEFAULT NULL,
  `last_mac` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NULL DEFAULT NULL,
  `last_online` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci NULL DEFAULT NULL,
  `online` tinyint NULL DEFAULT NULL,
  `disk_serial` int UNSIGNED NULL DEFAULT NULL,
  `type` tinyint UNSIGNED NULL DEFAULT NULL,
  PRIMARY KEY (`account_id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of accounts_status
-- ----------------------------

-- ----------------------------
-- Table structure for accounts_validation
-- ----------------------------
DROP TABLE IF EXISTS `accounts_validation`;
CREATE TABLE `accounts_validation`  (
  `account_id` int UNSIGNED NOT NULL,
  `disk_serial` int UNSIGNED NULL DEFAULT NULL,
  PRIMARY KEY (`account_id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of accounts_validation
-- ----------------------------

-- ----------------------------
-- Table structure for accounts_warning
-- ----------------------------
DROP TABLE IF EXISTS `accounts_warning`;
CREATE TABLE `accounts_warning`  (
  `account_id` int UNSIGNED NOT NULL,
  `disk_serial` int UNSIGNED NULL DEFAULT NULL,
  `block_date` bigint NULL DEFAULT NULL,
  PRIMARY KEY (`account_id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of accounts_warning
-- ----------------------------

-- ----------------------------
-- Table structure for block_diskserial
-- ----------------------------
DROP TABLE IF EXISTS `block_diskserial`;
CREATE TABLE `block_diskserial`  (
  `disk_serial` int UNSIGNED NOT NULL,
  `comment` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`disk_serial`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of block_diskserial
-- ----------------------------

-- ----------------------------
-- Table structure for block_ip
-- ----------------------------
DROP TABLE IF EXISTS `block_ip`;
CREATE TABLE `block_ip`  (
  `ip` varchar(16) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `comment` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`ip`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of block_ip
-- ----------------------------

-- ----------------------------
-- Table structure for block_mac
-- ----------------------------
DROP TABLE IF EXISTS `block_mac`;
CREATE TABLE `block_mac`  (
  `mac` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `comment` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`mac`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of block_mac
-- ----------------------------

-- ----------------------------
-- Table structure for character_notification
-- ----------------------------
DROP TABLE IF EXISTS `character_notification`;
CREATE TABLE `character_notification`  (
  `server_group` smallint UNSIGNED NOT NULL,
  `char_name` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `facebook_id` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `notification_id` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `notification_data` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`server_group`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of character_notification
-- ----------------------------

-- ----------------------------
-- Table structure for item_serial
-- ----------------------------
DROP TABLE IF EXISTS `item_serial`;
CREATE TABLE `item_serial`  (
  `server` smallint UNSIGNED NOT NULL,
  `serial` int UNSIGNED NULL DEFAULT NULL,
  `serial_shop` int UNSIGNED NULL DEFAULT NULL,
  PRIMARY KEY (`server`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of item_serial
-- ----------------------------

-- ----------------------------
-- Table structure for master_pc
-- ----------------------------
DROP TABLE IF EXISTS `master_pc`;
CREATE TABLE `master_pc`  (
  `disk_serial` int UNSIGNED NOT NULL,
  `mac` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`disk_serial`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of master_pc
-- ----------------------------

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;



-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  INDEX `password_resets_email_index`(`email`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for personal_access_tokens
-- ----------------------------
DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `personal_access_tokens_token_unique`(`token`) USING BTREE,
  INDEX `personal_access_tokens_tokenable_type_tokenable_id_index`(`tokenable_type`, `tokenable_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of personal_access_tokens
-- ----------------------------

SET FOREIGN_KEY_CHECKS = 1;
