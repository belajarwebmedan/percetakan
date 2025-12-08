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

 Date: 08/12/2025 17:16:27
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for barang
-- ----------------------------
DROP TABLE IF EXISTS `barang`;
CREATE TABLE `barang`  (
  `id_barang` int NOT NULL AUTO_INCREMENT,
  `nama_barang` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `satuan` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `stok` int NULL DEFAULT NULL,
  `harga` decimal(10, 2) NULL DEFAULT NULL,
  PRIMARY KEY (`id_barang`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 24 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of barang
-- ----------------------------
INSERT INTO `barang` VALUES (23, 'Buku Gambar', 'pcs', 60, 15000.00);

-- ----------------------------
-- Table structure for kategori_layanan
-- ----------------------------
DROP TABLE IF EXISTS `kategori_layanan`;
CREATE TABLE `kategori_layanan`  (
  `id_kategori` int NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `deskripsi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  PRIMARY KEY (`id_kategori`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of kategori_layanan
-- ----------------------------
INSERT INTO `kategori_layanan` VALUES (1, 'Percetakan Dokumen', 'Layanan cetak berbagai dokumen');
INSERT INTO `kategori_layanan` VALUES (2, 'Percetakan Foto', 'Layanan cetak foto berbagai ukuran');
INSERT INTO `kategori_layanan` VALUES (3, 'Desain Grafis', 'Layanan pembuatan desain visual');
INSERT INTO `kategori_layanan` VALUES (4, 'Finishing', 'Layanan finishing setelah cetak');
INSERT INTO `kategori_layanan` VALUES (5, 'Merchandise', 'Produk cetak merchandise custom');

-- ----------------------------
-- Table structure for layanan
-- ----------------------------
DROP TABLE IF EXISTS `layanan`;
CREATE TABLE `layanan`  (
  `id_layanan` int NOT NULL AUTO_INCREMENT,
  `id_kategori` int NULL DEFAULT NULL,
  `nama_layanan` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `harga_dasar` decimal(10, 2) NULL DEFAULT NULL,
  `satuan` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `keterangan` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  PRIMARY KEY (`id_layanan`) USING BTREE,
  INDEX `id_kategori`(`id_kategori` ASC) USING BTREE,
  CONSTRAINT `layanan_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori_layanan` (`id_kategori`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of layanan
-- ----------------------------
INSERT INTO `layanan` VALUES (1, 1, 'Print Hitam Putih', 500.00, NULL, 'Per lembar A4');
INSERT INTO `layanan` VALUES (2, 1, 'Print Berwarna', 1500.00, NULL, 'Per lembar A4');
INSERT INTO `layanan` VALUES (3, 1, 'Fotocopy', 300.00, NULL, 'Per lembar');
INSERT INTO `layanan` VALUES (4, 2, 'Cetak Foto 3x4', 6000.00, NULL, '1 set (6 lembar)');
INSERT INTO `layanan` VALUES (5, 2, 'Cetak Foto 4x6', 8000.00, NULL, 'Per lembar');
INSERT INTO `layanan` VALUES (6, 3, 'Desain Logo', 100000.00, NULL, 'Format PNG/JPG + revisi 2x');
INSERT INTO `layanan` VALUES (7, 3, 'Desain Poster', 75000.00, NULL, 'Ukuran A3/A4');
INSERT INTO `layanan` VALUES (8, 4, 'Laminating A4', 5000.00, NULL, 'Per lembar');
INSERT INTO `layanan` VALUES (9, 4, 'Jilid Softcover', 15000.00, NULL, 'Termasuk cover warna');
INSERT INTO `layanan` VALUES (10, 5, 'Cetak Mug Custom', 45000.00, NULL, '1 sisi/full print');
INSERT INTO `layanan` VALUES (11, 5, 'Cetak Kaos Sablon', 65000.00, NULL, '1 warna');

-- ----------------------------
-- Table structure for log_aktifitas
-- ----------------------------
DROP TABLE IF EXISTS `log_aktifitas`;
CREATE TABLE `log_aktifitas`  (
  `id_log` int NOT NULL AUTO_INCREMENT,
  `id_user` int NULL DEFAULT NULL,
  `aktivitas` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `waktu` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id_log`) USING BTREE,
  INDEX `id_user`(`id_user` ASC) USING BTREE,
  CONSTRAINT `log_aktifitas_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of log_aktifitas
-- ----------------------------

-- ----------------------------
-- Table structure for pelanggan
-- ----------------------------
DROP TABLE IF EXISTS `pelanggan`;
CREATE TABLE `pelanggan`  (
  `id_pelanggan` int NOT NULL,
  `nama` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `telp` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `alamat` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  PRIMARY KEY (`id_pelanggan`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pelanggan
-- ----------------------------
INSERT INTO `pelanggan` VALUES (1, 'Andi Wijaya', '081234567890', 'Jl. Melati No.12, Medan');
INSERT INTO `pelanggan` VALUES (2, 'Siti Ramadhani', '082345678901', 'Jl. Flamboyan Raya, Medan Johor');
INSERT INTO `pelanggan` VALUES (3, 'Budi Santoso', '081298765432', 'Jl. Iskandar Muda, Medan Baru');
INSERT INTO `pelanggan` VALUES (4, 'Rina Marpaung', '085212345678', 'Jl. Karya Jaya, Medan Johor');
INSERT INTO `pelanggan` VALUES (5, 'Dewi Kartika', '087812345600', 'Jl. Ringroad Gagak Hitam, Medan');

-- ----------------------------
-- Table structure for pembayaran
-- ----------------------------
DROP TABLE IF EXISTS `pembayaran`;
CREATE TABLE `pembayaran`  (
  `id_bayar` int NULL DEFAULT NULL,
  `id_pesanan` int NULL DEFAULT NULL,
  `tanggal_bayar` datetime NULL DEFAULT NULL,
  `jumlah_bayar` decimal(10, 2) NULL DEFAULT NULL,
  `metode` enum('cash','transfer','ewallet') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  INDEX `id_pesanan`(`id_pesanan` ASC) USING BTREE,
  CONSTRAINT `pembayaran_ibfk_1` FOREIGN KEY (`id_pesanan`) REFERENCES `pesanan` (`id_pesanan`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pembayaran
-- ----------------------------
INSERT INTO `pembayaran` VALUES (1, 1, '2025-01-10 09:00:00', 45000.00, 'cash');
INSERT INTO `pembayaran` VALUES (2, 2, '2025-01-10 11:20:00', 50000.00, 'transfer');
INSERT INTO `pembayaran` VALUES (3, 2, '2025-01-10 15:00:00', 70000.00, 'ewallet');
INSERT INTO `pembayaran` VALUES (4, 3, '2025-01-11 15:00:30', 78000.00, 'cash');
INSERT INTO `pembayaran` VALUES (5, 5, '2025-01-12 12:10:00', 50000.00, 'ewallet');

-- ----------------------------
-- Table structure for pesanan
-- ----------------------------
DROP TABLE IF EXISTS `pesanan`;
CREATE TABLE `pesanan`  (
  `id_pesanan` int NOT NULL AUTO_INCREMENT,
  `kode_invoice` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `id_pelanggan` int NULL DEFAULT NULL,
  `tanggal_pesanan` datetime NULL DEFAULT NULL,
  `status` enum('pending','proses','selesai','diambil') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `total` decimal(10, 2) NULL DEFAULT NULL,
  `catatan` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  PRIMARY KEY (`id_pesanan`) USING BTREE,
  INDEX `id_pelanggan`(`id_pelanggan` ASC) USING BTREE,
  CONSTRAINT `pesanan_ibfk_1` FOREIGN KEY (`id_pelanggan`) REFERENCES `pelanggan` (`id_pelanggan`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pesanan
-- ----------------------------
INSERT INTO `pesanan` VALUES (1, 'INV-202501001', 1, '2025-01-10 08:32:12', 'pending', 45000.00, 'Proses cepat');
INSERT INTO `pesanan` VALUES (2, 'INV-202501002', 3, '2025-01-10 09:10:55', 'proses', 120000.00, '');
INSERT INTO `pesanan` VALUES (3, 'INV-202501003', 2, '2025-01-11 14:21:30', 'selesai', 78000.00, 'Cover warna biru');
INSERT INTO `pesanan` VALUES (4, 'INV-202501004', 4, '2025-01-11 16:42:10', 'diambil', 25000.00, '');
INSERT INTO `pesanan` VALUES (5, 'INV-202501005', 3, '2025-01-12 10:15:00', 'pending', 99000.00, 'Ambil sore');

-- ----------------------------
-- Table structure for pesanan_detail
-- ----------------------------
DROP TABLE IF EXISTS `pesanan_detail`;
CREATE TABLE `pesanan_detail`  (
  `id_detail` int NOT NULL AUTO_INCREMENT,
  `id_pesanan` int NULL DEFAULT NULL,
  `id_layanan` int NULL DEFAULT NULL,
  `qty` int NULL DEFAULT NULL,
  `harga_satuan` decimal(10, 2) NULL DEFAULT NULL,
  `subtotal` decimal(10, 2) NULL DEFAULT NULL,
  PRIMARY KEY (`id_detail`) USING BTREE,
  INDEX `id_pesanan`(`id_pesanan` ASC) USING BTREE,
  INDEX `id_layanan`(`id_layanan` ASC) USING BTREE,
  CONSTRAINT `pesanan_detail_ibfk_1` FOREIGN KEY (`id_pesanan`) REFERENCES `pesanan` (`id_pesanan`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `pesanan_detail_ibfk_2` FOREIGN KEY (`id_layanan`) REFERENCES `layanan` (`id_layanan`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pesanan_detail
-- ----------------------------
INSERT INTO `pesanan_detail` VALUES (1, 1, 1, 10, 3000.00, 30000.00);
INSERT INTO `pesanan_detail` VALUES (2, 1, 2, 5, 3000.00, 15000.00);
INSERT INTO `pesanan_detail` VALUES (3, 2, 4, 2, 25000.00, 50000.00);
INSERT INTO `pesanan_detail` VALUES (4, 2, 6, 1, 70000.00, 70000.00);
INSERT INTO `pesanan_detail` VALUES (5, 3, 3, 3, 15000.00, 45000.00);
INSERT INTO `pesanan_detail` VALUES (6, 3, 10, 1, 33000.00, 33000.00);
INSERT INTO `pesanan_detail` VALUES (7, 4, 1, 5, 5000.00, 25000.00);
INSERT INTO `pesanan_detail` VALUES (8, 5, 7, 1, 75000.00, 75000.00);
INSERT INTO `pesanan_detail` VALUES (9, 5, 8, 4, 6000.00, 24000.00);

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id_user` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(90) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `role` enum('admin','kasir','operator') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `status_hapus` enum('Y','T') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_user`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (5, 'Muhammad Zen', 'zen@zen.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'admin', NULL);
INSERT INTO `users` VALUES (6, 'Indah', 'indah@indah.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'kasir', NULL);
INSERT INTO `users` VALUES (7, 'Frans', 'frans@frans.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'operator', NULL);

SET FOREIGN_KEY_CHECKS = 1;
