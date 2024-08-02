/*
 Navicat Premium Data Transfer

 Source Server         : xampp
 Source Server Type    : MySQL
 Source Server Version : 100427 (10.4.27-MariaDB)
 Source Host           : localhost:3306
 Source Schema         : db_bisiku

 Target Server Type    : MySQL
 Target Server Version : 100427 (10.4.27-MariaDB)
 File Encoding         : 65001

 Date: 26/06/2024 18:45:28
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for tb_ekspresi
-- ----------------------------
DROP TABLE IF EXISTS `tb_ekspresi`;
CREATE TABLE `tb_ekspresi`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama_ekspresi` varchar(255) CHARACTER SET armscii8 COLLATE armscii8_bin NULL DEFAULT NULL,
  `link_video` text CHARACTER SET armscii8 COLLATE armscii8_bin NULL,
  `id_user` int NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `user_id`(`id_user` ASC) USING BTREE,
  CONSTRAINT `FK_tb_ekspresi_tb_user` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = armscii8 COLLATE = armscii8_bin ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of tb_ekspresi
-- ----------------------------
INSERT INTO `tb_ekspresi` VALUES (9, 'Senang sekali', '8adbe3488ce65fc09999fd5f86ac72e8.mp4', NULL);

-- ----------------------------
-- Table structure for tb_kuis
-- ----------------------------
DROP TABLE IF EXISTS `tb_kuis`;
CREATE TABLE `tb_kuis`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `pertanyaan` varchar(255) CHARACTER SET armscii8 COLLATE armscii8_bin NULL DEFAULT NULL,
  `link_video` text CHARACTER SET armscii8 COLLATE armscii8_bin NULL,
  `benar` varchar(255) CHARACTER SET armscii8 COLLATE armscii8_bin NULL DEFAULT NULL,
  `salah` varchar(255) CHARACTER SET armscii8 COLLATE armscii8_bin NULL DEFAULT NULL,
  `id_user` int NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `id_user`(`id_user` ASC) USING BTREE,
  CONSTRAINT `FK_tb_kuis_tb_user` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = armscii8 COLLATE = armscii8_bin ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of tb_kuis
-- ----------------------------
INSERT INTO `tb_kuis` VALUES (2, 'soal 1', '4bfa73843ebde9275ed7995a416c0c6a.mp4', 'alis', 'mulut', NULL);

-- ----------------------------
-- Table structure for tb_organ_tubuh
-- ----------------------------
DROP TABLE IF EXISTS `tb_organ_tubuh`;
CREATE TABLE `tb_organ_tubuh`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama_organ` varchar(255) CHARACTER SET armscii8 COLLATE armscii8_bin NULL DEFAULT NULL,
  `link_video` text CHARACTER SET armscii8 COLLATE armscii8_bin NULL,
  `id_user` int NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `id_user`(`id_user` ASC) USING BTREE,
  CONSTRAINT `FK_tb_organ_tubuh_tb_user` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = armscii8 COLLATE = armscii8_bin ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of tb_organ_tubuh
-- ----------------------------
INSERT INTO `tb_organ_tubuh` VALUES (5, 'gigi', '210a3b202e2e1cc652d3c2556e596833.mp4', NULL);

-- ----------------------------
-- Table structure for tb_user
-- ----------------------------
DROP TABLE IF EXISTS `tb_user`;
CREATE TABLE `tb_user`  (
  `id_user` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `username_user` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `password_user` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `status` enum('USER','ADMIN') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT 'USER',
  `foto` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  PRIMARY KEY (`id_user`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of tb_user
-- ----------------------------
INSERT INTO `tb_user` VALUES (1, 'admin 1', 'admin', 'admin', 'ADMIN', 'c5a8519548f8753a959246b8c5fb9e85.jpg');

SET FOREIGN_KEY_CHECKS = 1;
