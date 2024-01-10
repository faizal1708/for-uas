-- ----------------------------
-- Database tokoku
-- ----------------------------
CREATE DATABASE tokoku;
USE tokoku;

-- ----------------------------
-- Table structure for kategori
-- ----------------------------
DROP TABLE IF EXISTS `kategori`;
CREATE TABLE `kategori` (
  `IDKategori` varchar(10) NOT NULL,
  `NamaKategori` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`IDKategori`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of kategori
-- ----------------------------
INSERT INTO `kategori` VALUES ('AD', 'Alat Dapur');
INSERT INTO `kategori` VALUES ('Bu', 'Buku');
INSERT INTO `kategori` VALUES ('El', 'Elektronik');
INSERT INTO `kategori` VALUES ('FA', 'Fashion Anak');
INSERT INTO `kategori` VALUES ('FP', 'Fashion Pria');
INSERT INTO `kategori` VALUES ('FW', 'Fashion Wanita');
INSERT INTO `kategori` VALUES ('Ga', 'Gadget');
INSERT INTO `kategori` VALUES ('Ho', 'Hobi');
INSERT INTO `kategori` VALUES ('Ka', 'Kamera');
INSERT INTO `kategori` VALUES ('Ko', 'Komputer');
INSERT INTO `kategori` VALUES ('Or', 'Olahraga');
INSERT INTO `kategori` VALUES ('Ot', 'Otomotif');

-- ----------------------------
-- Table structure for produk
-- ----------------------------
DROP TABLE IF EXISTS `produk`;
CREATE TABLE `produk` (
  `IDProduk` varchar(10) NOT NULL,
  `NamaProduk` varchar(50) NOT NULL,
  `Harga` int(11) NOT NULL,
  `Deskripsi` varchar(255) DEFAULT NULL,
  `FotoProduk` varchar(255) DEFAULT NULL,
  `IDKategori` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`IDProduk`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of produk
-- ----------------------------
INSERT INTO `produk` VALUES ('BR001', 'T-Shirt', '110000', null, 'https://previews.123rf.com/images/airdone/airdone1706/airdone170600058/81014895-blank-v-neck-shirt-mock-up-template-front-and-back-view-isolated-on-white-plain-t-shirt-mockup-v-nec.jpg?fj=1', 'FP');
INSERT INTO `produk` VALUES ('BR002', 'Jeans', '250000', null, 'https://previews.123rf.com/images/mitand73/mitand731908/mitand73190800025/129028588-denim-blue-jeans-on-black-background-sale-handwritten-inscription-on-a-paper-label.jpg?fj=1', 'FP');
INSERT INTO `produk` VALUES ('BR003', 'Topi', '25000', null, 'https://previews.123rf.com/images/bangchuck/bangchuck1911/bangchuck191100251/134681901-side-view-realistic-cap-mock-up-in-rocky-granite-color-ist-ein-hochaufl%C3%B6sendes-hutmodell-mit-dem-sie.jpg?fj=1', 'FP');
INSERT INTO `produk` VALUES ('BR004', 'jilbab', '25000', null, 'pashmina.jpg', 'FP');
