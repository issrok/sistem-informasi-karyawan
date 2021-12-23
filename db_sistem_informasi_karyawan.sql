/*
 Navicat Premium Data Transfer

 Source Server         : LOCALHOST
 Source Server Type    : MySQL
 Source Server Version : 50733
 Source Host           : localhost:3306
 Source Schema         : db_sistem_informasi_karyawan

 Target Server Type    : MySQL
 Target Server Version : 50733
 File Encoding         : 65001

 Date: 23/12/2021 15:49:28
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for tb_gaji
-- ----------------------------
DROP TABLE IF EXISTS `tb_gaji`;
CREATE TABLE `tb_gaji`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `grade` enum('A','B','C','D') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `gaji` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_gaji
-- ----------------------------
INSERT INTO `tb_gaji` VALUES (1, 'A', '1000000');
INSERT INTO `tb_gaji` VALUES (2, 'B', '2000000');
INSERT INTO `tb_gaji` VALUES (3, 'C', '3000000');
INSERT INTO `tb_gaji` VALUES (4, 'D', '4000000');

-- ----------------------------
-- Table structure for tb_karyawan
-- ----------------------------
DROP TABLE IF EXISTS `tb_karyawan`;
CREATE TABLE `tb_karyawan`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nip` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nama` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `gender` enum('M','F') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tgl_lahir` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tgl_masuk` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `grade` enum('A','B','C','D') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `gaji` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_karyawan
-- ----------------------------
INSERT INTO `tb_karyawan` VALUES (1, '123455', 'wisnu', 'M', '22-12-2021', '22-12-2021', 'B', '2000000');
INSERT INTO `tb_karyawan` VALUES (2, '12345', 'sanita', 'F', '01-12-2021', '23-12-2021', 'A', '1000000');

SET FOREIGN_KEY_CHECKS = 1;
