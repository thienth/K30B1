/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 50718
 Source Host           : 127.0.0.1
 Source Database       : k30dl

 Target Server Type    : MySQL
 Target Server Version : 50718
 File Encoding         : utf-8

 Date: 08/25/2017 15:47:55 PM
*/

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `categories`
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `in_nav` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `categories`
-- ----------------------------
BEGIN;
INSERT INTO `categories` VALUES ('1', 'Điện máy', '1'), ('2', 'Điện Lạnh', '1'), ('3', 'Điện thoại', '1'), ('4', 'Đồ gia dụng', '1'), ('5', 'Xe máy', '1');
COMMIT;

-- ----------------------------
--  Table structure for `products`
-- ----------------------------
DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `cate_id` int(11) DEFAULT NULL,
  `list_price` int(11) DEFAULT NULL,
  `sell_price` int(11) DEFAULT NULL,
  `product_detail` text,
  `views` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `products`
-- ----------------------------
BEGIN;
INSERT INTO `products` VALUES ('1', 'Nồi cơm điện nắp gài Philips HD3130 1.8L (Trắng)', 'https://vn-live-01.slatic.net/p/10/noi-com-dien-nap-gai-philips-hd3130-18l-trang-tang-bo-hop-combang-su-dong-hwa-tri-gia-550000vnd-1496739603-4394726-06f4b12524e55e7d1957e4f9035e966e-webp-product.jpg', '4', '1500000', '1050000', '<div class=\"product-description__block\">\n    <h2 class=\"product-description__title\">Thông tin sản phẩm Nồi cơm điện nắp gài Philips HD3130 1.8L (Trắng) + Tặng bộ hộp cơm\nbằng sứ Dong Hwa trị giá 550.000VND</h2>\n        <div class=\"product-description__inbox toclear\">\n        <span class=\"product-subheader__element\">Bộ sản phẩm bao gồm:</span>\n        <div class=\"inbox__wrap\">\n            <ul class=\"ui-listBulleted\"><li class=\"inbox__item\"><span>1x sản phẩm</span></li><li class=\"inbox__item\"><span>1x phiếu bảo hành</span></li><li class=\"inbox__item\"><span>1 x hộp đựng đồ ăn trưa</span></li></ul>        </div>\n    </div>\n        <div class=\"product-subheader__element\">Đặc điểm chính:</div>\n    <table class=\"specification-table\">\n        <tbody><tr>\n            <td class=\"specification-table__property\">SKU</td>\n            <td id=\"pdtsku\" class=\"specification-table__value\">PH846HAAA3QHRQVNAMZ-6653588</td>\n        </tr>\n                                                                                                        <tr>\n                        <td class=\"bold\">Capacity</td>\n                        <td>2</td>\n                    </tr>\n                                                                                                    <tr>\n                        <td class=\"bold\">Mẫu mã</td>\n                        <td>GIFT HD3130</td>\n                    </tr>\n                                                                                                                                                <tr>\n                        <td class=\"bold\">Kích thước sản phẩm (D x R x C cm)</td>\n                        <td>40x20x10</td>\n                    </tr>\n                                                                                                                                                <tr>\n                        <td class=\"bold\">Trọng lượng (KG)</td>\n                        <td>0.3</td>\n                    </tr>\n                                                                                                    <tr>\n                        <td class=\"bold\">Sản xuất tại</td>\n                        <td>Trung Quốc</td>\n                    </tr>\n                                                                                                                                                <tr>\n                        <td class=\"bold\">Thời gian bảo hành</td>\n                        <td>2 năm</td>\n                    </tr>\n                                                                                                                                                <tr>\n                        <td class=\"bold\">Loại hình bảo hành</td>\n                        <td>Bằng Phiếu bảo hành và Hóa đơn</td>\n                    </tr>\n                                                                                    </tbody></table>\n</div>', '0'), ('2', 'Sony Xperia XA F3116 16GB (Đen)', 'https://vn-live-03.slatic.net/p/2/sony-xperia-xa-f3116-16gb-den-tang-kem-tui-deo-vai-sony-de-sac-sony-microusb-dk52-hang-phan-phoi-chinh-thuc-1503288765-4173408-03df2c942a837824f8cd21c0a3349310-webp-product.jpg', '3', '3500000', '3390000', '<div class=\"product-description__block\">\n    <h2 class=\"product-description__title\">Thông tin sản phẩm Sony Xperia XA F3116 16GB (Đen) + Tặng kèm tui đeo vai Sony + Đế sạc Sony microUSB DK52 - Hãng phân phối chính thức</h2>\n        <div class=\"product-description__inbox toclear\">\n        <span class=\"product-subheader__element\">Bộ sản phẩm bao gồm:</span>\n        <div class=\"inbox__wrap\">\n            <ul class=\"ui-listBulleted\"><li class=\"inbox__item\"><span>1 x sản phẩm, 1 x túi đeo chéo, 1 x Đế sạc</span></li></ul>        </div>\n    </div>\n        <div class=\"product-subheader__element\">Đặc điểm chính:</div>\n    <table class=\"specification-table\">\n        <tbody><tr>\n            <td class=\"specification-table__property\">SKU</td>\n            <td id=\"pdtsku\" class=\"specification-table__value\">SO993ELAA4SEKIVNAMZ-8821184</td>\n        </tr>\n                                                                                                        <tr>\n                        <td class=\"bold\"></td>\n                        <td>Li-Po 2300 mAh</td>\n                    </tr>\n                                                                                                    <tr>\n                        <td class=\"bold\">Màu</td>\n                        <td>Đen</td>\n                    </tr>\n                                                                                                    <tr>\n                        <td class=\"bold\">Cổng kết nối</td>\n                        <td>MicroUSB, 3.5mm</td>\n                    </tr>\n                                                                                                    <tr>\n                        <td class=\"bold\">Độ phân giải màn hình (pixels)</td>\n                        <td>720 x 1280</td>\n                    </tr>\n                                                                                                    <tr>\n                        <td class=\"bold\">Kích thước màn hình</td>\n                        <td>5.0</td>\n                    </tr>\n                                                                                                    <tr>\n                        <td class=\"bold\">Loại màn hình</td>\n                        <td>IPS LCD</td>\n                    </tr>\n                                                                                                    <tr>\n                        <td class=\"bold\">Độ phân giải camera (MP)</td>\n                        <td>13.0</td>\n                    </tr>\n                                                                                                    <tr>\n                        <td class=\"bold\">Mẫu mã</td>\n                        <td>SA937ELF3116</td>\n                    </tr>\n                                                                                                    <tr>\n                        <td class=\"bold\">Số lượng nhân</td>\n                        <td>8</td>\n                    </tr>\n                                                                                                    <tr>\n                        <td class=\"bold\">Hệ điều hành</td>\n                        <td>Android</td>\n                    </tr>\n                                                                                                                                                <tr>\n                        <td class=\"bold\">Trọng lượng (KG)</td>\n                        <td>0.15</td>\n                    </tr>\n                                                                                                    <tr>\n                        <td class=\"bold\">RAM memory</td>\n                        <td>2GB</td>\n                    </tr>\n                                                                                                                                                <tr>\n                        <td class=\"bold\">Bộ nhớ trong (GB)</td>\n                        <td>16</td>\n                    </tr>\n                                                                                                    <tr>\n                        <td class=\"bold\">Thời gian bảo hành</td>\n                        <td>12 tháng</td>\n                    </tr>\n                                                                                                                                                <tr>\n                        <td class=\"bold\">Loại hình bảo hành</td>\n                        <td>Bảo hành điện tử</td>\n                    </tr>\n                                        </tbody></table>\n</div>', '0'), ('3', 'Màn Hình Viewsonic 27\"Vx2776smhd Led Ips (Bạc)', 'https://vn-live-01.slatic.net/p/2/man-hinh-viewsonic-27vx2776smhd-led-ips-bac-1494407358-9535275-4fcd10533e1cba38c79ae7713a48c1b0-webp-product.jpg', '1', '4500000', '4200000', '<div class=\"product-description__block\">\n    <h2 class=\"product-description__title\">Thông tin sản phẩm Màn Hình Viewsonic 27\"Vx2776smhd Led Ips (Bạc)</h2>\n        <div class=\"product-description__inbox toclear\">\n        <span class=\"product-subheader__element\">Bộ sản phẩm bao gồm:</span>\n        <div class=\"inbox__wrap\">\n            <ul class=\"ui-listBulleted\"><li class=\"inbox__item\"><span>1x sản phẩm</span></li></ul>        </div>\n    </div>\n        <div class=\"product-subheader__element\">Đặc điểm chính:</div>\n    <table class=\"specification-table\">\n        <tbody><tr>\n            <td class=\"specification-table__property\">SKU</td>\n            <td id=\"pdtsku\" class=\"specification-table__value\">VI122ELAA2XFV0VNAMZ-5063176</td>\n        </tr>\n                                                                                                        <tr>\n                        <td class=\"bold\">Các tính năng hiển thị</td>\n                        <td>Full HD</td>\n                    </tr>\n                                                                                                    <tr>\n                        <td class=\"bold\">Kích thước màn hình</td>\n                        <td>27.0</td>\n                    </tr>\n                                                                                                    <tr>\n                        <td class=\"bold\">Mẫu mã</td>\n                        <td>VX2776SMHD</td>\n                    </tr>\n                                                                                                    <tr>\n                        <td class=\"bold\">Mounting Type</td>\n                        <td>Desk Mount</td>\n                    </tr>\n                                                                                                                                                                                            <tr>\n                        <td class=\"bold\">Thời gian bảo hành</td>\n                        <td>3 năm</td>\n                    </tr>\n                                                                                                                                                <tr>\n                        <td class=\"bold\">Loại hình bảo hành</td>\n                        <td>Bằng hộp sản phẩm hoặc Số seri</td>\n                    </tr>\n                                        </tbody></table>\n</div>', '0'), ('4', 'Máy hút bụi cầm tay siêu lốc xoáy DEERMA (Xanh dương)', 'https://vn-live-01.slatic.net/p/10/may-hut-bui-cam-tay-sieu-loc-xoay-deerma-xanh-duong-1479469692-2990881-5e7a91c2be71e83683a8d52b32e692f2-webp-product.jpg', '4', '450000', '439000', '<div class=\"product-description__block\">\n    <h2 class=\"product-description__title\">Thông tin sản phẩm Máy hút bụi cầm tay siêu lốc xoáy DEERMA (Xanh dương)</h2>\n        <div class=\"product-description__inbox toclear\">\n        <span class=\"product-subheader__element\">Bộ sản phẩm bao gồm:</span>\n        <div class=\"inbox__wrap\">\n            <ul class=\"ui-listBulleted\"><li class=\"inbox__item\"><span>1 x máy hút bụi&nbsp;</span></li></ul>        </div>\n    </div>\n        <div class=\"product-subheader__element\">Đặc điểm chính:</div>\n    <table class=\"specification-table\">\n        <tbody><tr>\n            <td class=\"specification-table__property\">SKU</td>\n            <td id=\"pdtsku\" class=\"specification-table__value\">DE358HAAA14BDSVNAMZ-1623412</td>\n        </tr>\n                                                                                                        <tr>\n                        <td class=\"bold\">Mẫu mã</td>\n                        <td>Đồ gia dụng thông minh-DR001</td>\n                    </tr>\n                                                                                                                                                <tr>\n                        <td class=\"bold\">Kích thước sản phẩm (D x R x C cm)</td>\n                        <td>63x13x10</td>\n                    </tr>\n                                                                                                                                                <tr>\n                        <td class=\"bold\">Trọng lượng (KG)</td>\n                        <td>1</td>\n                    </tr>\n                                                                                                    <tr>\n                        <td class=\"bold\">Sản xuất tại</td>\n                        <td>Hong Kong</td>\n                    </tr>\n                                                                                                                                                <tr style=\"display: none;\">\n                        <td class=\"bold\">&nbsp;</td>\n                        <td>Cầm tay</td>\n                    </tr>\n                                                                                                    <tr>\n                        <td class=\"bold\">Thời gian bảo hành</td>\n                        <td>12 tháng</td>\n                    </tr>\n                                                                                                                                                <tr>\n                        <td class=\"bold\">Loại hình bảo hành</td>\n                        <td>Bằng Hóa đơn mua hàng</td>\n                    </tr>\n                                                                                                    <tr>\n                        <td class=\"bold\">Wattage</td>\n                        <td>600W</td>\n                    </tr>\n                                        </tbody></table>\n</div>', '0');
COMMIT;

-- ----------------------------
--  Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `expire_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `users`
-- ----------------------------
BEGIN;
INSERT INTO `users` VALUES ('11', 'nguyenvanluong@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', null, 'Nguyễn Văn Lương dep trai', 'uploads/599ab4858612f-cay-ca-phe-che-1.jpeg', 'Lao cai', null, null), ('12', 'quanhiv@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', null, 'Nguyen Van Quan', 'uploads/599ab4a16e901-doan-chi-binh.jpg', 'ha noi', null, null);
COMMIT;

-- ----------------------------
--  Table structure for `web_configs`
-- ----------------------------
DROP TABLE IF EXISTS `web_configs`;
CREATE TABLE `web_configs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `config_name` varchar(255) DEFAULT NULL,
  `logo_url` varchar(255) DEFAULT NULL,
  `address1` varchar(255) DEFAULT NULL,
  `address2` varchar(255) DEFAULT NULL,
  `address3` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `active` int(11) DEFAULT NULL,
  `map` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `web_configs`
-- ----------------------------
BEGIN;
INSERT INTO `web_configs` VALUES ('1', 'Home1', 'uploads/logo.png', 'A23/8, Quốc lộ 50 (Đối diện Đường số 10, đoạn giữa Bến xe quận 8 & nhà thờ Bình Hưng), H. Bình Chánh', '37-39 Võ Văn Ngân, P. Linh Chiểu, Q. Thủ Đức', '125 Lê Văn Việt, P. Hiệp Phú, Q. 9', null, '1', null);
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
