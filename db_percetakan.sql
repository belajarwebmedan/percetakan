/*
 Navicat Premium Data Transfer

 Source Server         : Lokal
 Source Server Type    : MySQL
 Source Server Version : 100432 (10.4.32-MariaDB)
 Source Host           : localhost:3306
 Source Schema         : db_percetakan

 Target Server Type    : MySQL
 Target Server Version : 100432 (10.4.32-MariaDB)
 File Encoding         : 65001

 Date: 17/11/2025 09:31:55
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for tblbarang
-- ----------------------------
DROP TABLE IF EXISTS `tblbarang`;
CREATE TABLE `tblbarang`  (
  `idBarang` int NOT NULL AUTO_INCREMENT,
  `namaBrg` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `satuan` enum('PCS','BOTOL','KOTAK') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `harga` decimal(10, 2) NULL DEFAULT NULL,
  PRIMARY KEY (`idBarang`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tblbarang
-- ----------------------------
INSERT INTO `tblbarang` VALUES (2, 'pencil', 'PCS', 5000.00);
INSERT INTO `tblbarang` VALUES (4, 'pencil', 'PCS', 5000.00);

SET FOREIGN_KEY_CHECKS = 1;
