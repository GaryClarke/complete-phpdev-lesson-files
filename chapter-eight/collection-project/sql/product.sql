DROP TABLE IF EXISTS `product`;
CREATE TABLE `product` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL DEFAULT 0,
  `description` text DEFAULT NULL,
  `image_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

INSERT INTO `product` (`id`, `name`, `price`, `description`, `image_name`) VALUES
(1, '3D Printer', 40000, 'Acme 3D Printer, Auto level DIY Printer Kit with Silent Mainboard, Touchscreen, Meanwell Power Supply, Tempered Glass Plate and Dual Z-axis Print Size 235 x235 x 250mm', '3d-printer.jpeg');