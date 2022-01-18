-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.5.12-MariaDB-1 - Debian 11
-- Server OS:                    debian-linux-gnu
-- HeidiSQL Version:             11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table simplestock_db.product
CREATE TABLE IF NOT EXISTS `product` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(100) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `product_cost` float DEFAULT NULL,
  `sales_rate` float DEFAULT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table simplestock_db.product: 0 rows
DELETE FROM `product`;
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` (`product_id`, `product_name`, `product_quantity`, `product_cost`, `sales_rate`) VALUES
	(1, 'Pencil', 5, 500, 550),
	(2, 'Book', 196, 200, 200),
	(3, 'Sharpner', 200, 10, 15);
/*!40000 ALTER TABLE `product` ENABLE KEYS */;

-- Dumping structure for table simplestock_db.sales
CREATE TABLE IF NOT EXISTS `sales` (
  `sales_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `sales_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `product_name` varchar(100) NOT NULL,
  `product_rate` float NOT NULL,
  `sales_quantity` int(11) NOT NULL,
  `sales_amount` float NOT NULL,
  `service_charge` varchar(50) DEFAULT NULL,
  `paid_amount` varchar(255) NOT NULL,
  `remaining_amount` varchar(50) NOT NULL DEFAULT '',
  `customer_name` varchar(100) DEFAULT NULL,
  `customer_address` varchar(100) DEFAULT NULL,
  `customer_contact` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`sales_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table simplestock_db.sales: 0 rows
DELETE FROM `sales`;
/*!40000 ALTER TABLE `sales` DISABLE KEYS */;
INSERT INTO `sales` (`sales_id`, `product_id`, `sales_date`, `product_name`, `product_rate`, `sales_quantity`, `sales_amount`, `service_charge`, `paid_amount`, `remaining_amount`, `customer_name`, `customer_address`, `customer_contact`) VALUES
	(1, 2, '2022-01-18 10:19:49', 'Book', 500, 5, 2500, '', '1000', '1500', 'MacAlistair Lamichhane', 'Kathmandu', '9803610971');
/*!40000 ALTER TABLE `sales` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
