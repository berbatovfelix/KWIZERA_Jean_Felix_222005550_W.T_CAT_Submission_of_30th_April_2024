-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2024 at 01:37 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kwizera_jean_felix_fdamp`
--

-- --------------------------------------------------------

--
-- Table structure for table `banks`
--

CREATE TABLE `banks` (
  `banks_id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `address` varchar(40) NOT NULL,
  `phone_number` varchar(10) DEFAULT NULL,
  `account_number` varchar(10) NOT NULL,
  `bankname` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `banks`
--

INSERT INTO `banks` (`banks_id`, `name`, `address`, `phone_number`, `account_number`, `bankname`) VALUES
(4, 'xx', 'ss', 'sssxs', 'sss', 'EQUITY BANK'),
(5, 'inka', 'dfgh', '345767', '23456', 'SACCO'),
(8, 'dfg', 'tyh', '1234567', '1324567', 'BNR'),
(9, 'tov', 'wow', 'wow', '456', 'BNR'),
(10, 'liza', 'rwanda', '0788888', '898989', 'BNR'),
(11, 'inka yange', 'rusizi', '078888', '233345', '> zigama</option>\r\n '),
(12, 'joe felix', 'huye', '078888', '233345', '> zigama</option>\r\n '),
(13, 'liza', 'rwanda', '0788888', '898989', '> zigama</option>\r\n '),
(14, 'kwizera', 'burundi', '0799999999', '1000000', 'equity'),
(21, 'john', 'huye', '0790000000', 'bk11111', 'equity'),
(22, 'inka', 'nyagatare', '0785707681', '1000000', NULL),
(23, 'inka', 'nyagatare', '0785707681', '1000000', NULL),
(24, 'inka', 'nyagatare', '0785707681', '1000000', NULL),
(25, 'inka', 'nyagatare', '0785707681', '1000000', NULL),
(26, 'g', 'kgl', '0785707681', '001', NULL),
(27, 'u', 'burundi', NULL, '8989', 'tigo'),
(28, 'u', 'burundi', NULL, '8989', 'tigo'),
(29, 'u', 'burundi', NULL, '8989', 'tigo'),
(30, 'u', 'burundi', NULL, '8989', 'tigo'),
(31, 'u', 'burundi', NULL, '8989', 'tigo'),
(32, 'u', 'burundi', NULL, '8989', 'mtn'),
(33, 'mugabo', 'burundi', '0785707681', '8989', 'mtn'),
(34, 'rara', 'kgl', '0785707681', '001', NULL),
(35, 'rara', 'kgl', '0785707681', '001', NULL),
(36, 'rara', 'kgl', '0785707681', '001', NULL),
(37, 'rara', 'kgl', '0785707681', '001', NULL),
(38, 'rara', 'kgl', '0785707681', '001', NULL),
(39, 'rara', 'kgl', '0785707681', '001', NULL),
(40, 'rara', 'kgl', '0785707681', '001', NULL),
(41, 'rara', 'kgl', '0785707681', '001', NULL),
(42, 'rara', 'kgl', '0785707681', '001', NULL),
(43, 'rara', 'kgl', '0785707681', '001', NULL),
(44, 'rara', 'kgl', '0785707681', '001', 'BNR'),
(45, 'koko', 'burundi', '0785707681', '23456', NULL),
(46, 'koko', 'burundi', '0785707681', '23456', NULL),
(47, 'koko', 'burundi', '0785707681', '23456', NULL),
(48, 'koko', 'burundi', '0785707681', '23456', NULL),
(49, 'koko tov', 'burundi', '0785707681', '23456', NULL),
(50, 'koko tov', 'burundi', '0785707681', '34567', NULL),
(51, 'william tov', 'nyagatare', '0785707681', '898989', NULL),
(52, 'william tov', 'nyagatare', '0785707681', '898989', NULL),
(53, 'william tov', 'nyagatare', '0785707681', '898989', NULL),
(54, 'william tov', 'nyagatare', '0785707681', '898989', NULL),
(55, 'koko tov', 'burundi', '0785707681', '353', NULL),
(56, 'koko tov', 'burundi', '0785707681', '353', NULL),
(57, 'koko', 'burundi', '0785707681', '23', 'BNR'),
(58, 'dan', 'burundi', '0785707681', '353', NULL),
(59, 'koko', 'burundi', '0785707681', '20', 'BNR'),
(60, 'dede ', 'hehe', '78101010', '2000', NULL),
(61, 'dede ', 'hehe', '78101010', '2000', NULL),
(62, 'dede ', 'hehe', '78101010', '2000', NULL),
(63, 'dede ', 'hehe', '78101010', '2000', NULL),
(64, 'dede ', 'hehe', '78101010', '2000', NULL),
(65, 'dede ', 'hehe', '78101010', '2000', NULL),
(66, 'dede ', 'hehe', '78101010', '2000', NULL),
(67, 'koko tov', 'burundi', '0785707681', '21', 'BNR'),
(68, 'koko tov', 'burundi', '0785707681', '8989', 'equity');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `payment_method` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `last_name`, `first_name`, `email`, `phone`, `address`, `payment_method`) VALUES
(2, 'Smith', 'Jane', 'jane.smith@gmail.com', '0786543210', '123 Main St', 'momo pay'),
(3, 'emm', 'dedu', 'felixkwizera100@gmail.com', '78101010', 'kwizera', 'mtn'),
(4, 'uwimana', 'anje', 'anje@gmail.com', '000000', 'kigali', 'mtn'),
(5, 'bugingo', 'emmy', 'emm@6gmail.com', '0785707681', 'kgl', 'tigo'),
(6, 'ba', 'rusaro', 'anti90@gmail.com', '000007', 'muhanga', 'mtn'),
(7, 'izabe', 'ishimwe', 'iza100@gmail.com', '0789000000', 'kicukiro', 'tigo'),
(8, 'izabe', 'ishimwe', 'iza100@gmail.com', '0789000000', 'kicukiro', 'mtn'),
(9, 'jackson', 'pepe', 'felixkwizera67@gmail.com', '0789999998', 'kirehe', 'mtn'),
(10, 'kwizera', ' jean felix', 'felixkwizera90@gmail.com', '0785707681', 'nyagatare', 'mtn'),
(11, 'rugemana', 'chris', 'felixkwizera100@gmail.com', '78101010', 'kgl', 'mtn'),
(12, 'rujugiro', 'p', 'felixkwizera90@gmail.com', '0789999999', 'kayonza', 'mtn'),
(13, 'kwizezera', 'tov', 'felixkwizera100@gmail.com', '0785707681', 'burundi', 'tigo'),
(14, 'mukaka', 'ezii', 'felixkwizera1@gmail.com', '0785707681', 'kgl', 'mtn'),
(15, 'tov', 'koko', 'emm@6gmail.com', '0785707681', 'burundi', 'mtn'),
(16, 'tov', 'koko', 'emm@6gmail.com', '0785707681', 'burundi', 'mtn'),
(17, 'izabe', 'ishimwe', 'iza100@gmail.com', '0789000000', 'kicukiro', 'mtn'),
(18, 'tov', 'koko', 'emm@6gmail.com', '0785707681', 'burundi', 'mtn'),
(19, 'tov', 'koko', 'emm@6gmail.com', '0785707681', 'burundi', 'mtn');

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `driver_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(40) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `licence_number` varchar(20) NOT NULL,
  `vehicle_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`driver_id`, `first_name`, `last_name`, `phone`, `licence_number`, `vehicle_id`) VALUES
(2, 'eliza', 'claire', '0785707689', 'rt4', 10),
(3, 'peter', 'emm', '456', '345', 3),
(7, 'felix', 'joe', '07888888', '4444', 4),
(9, '', '', '', '', 4),
(10, 'manzi', 'bob', '0789000000', 'rb4', 10),
(11, 'ruda', 'JOHN', '0785707681', '', 8),
(12, 'rere', 'wuwu', '0783333333', '', 12),
(13, 'dog', 'cow', '0783434343', 're4', 11),
(14, 'rere', 'dede', '0783333333', '', 12),
(15, 'wacu', 'dadi', '078343490', 'rb45', 9),
(16, 'toto', 'jean felix', '0785707681', 'RRA', 5),
(17, 'toto', 'j', '0799999999', '', 11),
(18, '4', 'ruri', 'sa', '4545', 4),
(20, 'rubangura', 'john', '0785707681', '11178997', 7),
(21, 'willy', 'tov', '0785707681', 'rb100', 4),
(22, 'jean', 'toto', '0785707681', 'RRA', 4),
(23, 'toujour', 'toto', '0785707681', 'RRA', 3),
(24, 'berbatov', 'muhire', '0000000', 'RB32', 3),
(25, 'berbatov', 'pepe', '0788888', 'RB1', 1),
(26, 'shuti', 'fabrice', '0785707682', 'RB1212', 5),
(27, 'william', 'tov', '0785707681', 'rb100', 4),
(28, 'willia', 'tov', '0785707681', 'rb100', 4),
(29, 'jean felix', 'kwizera', '0785707680', '454545', 100),
(30, 'mutoni', 'emmy', '78101010', 'RRA', 20);

--
-- Triggers `driver`
--
DELIMITER $$
CREATE TRIGGER `AfterDriverUpdate` AFTER UPDATE ON `driver` FOR EACH ROW BEGIN
    INSERT INTO driver_log (driver_id, action, action_date)
    VALUES (NEW.driver_id, 'UPDATE', NOW());
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `driver_log`
--

CREATE TABLE `driver_log` (
  `id` int(11) NOT NULL,
  `driver_id` int(11) DEFAULT NULL,
  `action` varchar(50) DEFAULT NULL,
  `action_date` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `driver_log`
--

INSERT INTO `driver_log` (`id`, `driver_id`, `action`, `action_date`) VALUES
(1, 1, 'UPDATE', '2024-02-17 09:13:29'),
(2, 1, 'UPDATE', '2024-02-17 09:13:48'),
(3, 4, 'UPDATE', '2024-02-17 11:04:20'),
(4, 4, 'UPDATE', '2024-02-17 11:04:31'),
(5, 3, 'UPDATE', '2024-02-17 11:05:19'),
(0, 2, 'UPDATE', '2024-04-21 11:54:01'),
(0, 10, 'UPDATE', '2024-04-29 08:49:23'),
(0, 10, 'UPDATE', '2024-04-29 08:49:28');

-- --------------------------------------------------------

--
-- Table structure for table `fuel_admin`
--

CREATE TABLE `fuel_admin` (
  `adm_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `phone_number` varchar(10) NOT NULL,
  `permissions` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fuel_admin`
--

INSERT INTO `fuel_admin` (`adm_id`, `username`, `email`, `Password`, `first_name`, `last_name`, `phone_number`, `permissions`) VALUES
(1, '', 'felix@gmail.com', '222005550', 'felix', 'kwizera', '0786543210', 'ALL'),
(2, '', 'luka@gmail.com', '222000745', 'kiza', 'alex', '0726543210', 'ALL'),
(3, '', 'admin@gmail.com', '33333000', 'odeta', 'akaliza', '0796543210', 'ALL'),
(4, '', 'felixkwizera90@gmail.com', '', 'jean ', 'kwizera', '0785707681', 'yes'),
(8, '', 'felixkwizera90@gmail.com', '', 'fe', 'kwizera', '0785707681', 'yes'),
(9, '', 'felixkwizera90@gmail.com', '', 'felixx', 'john', '0785707681', 'yes'),
(10, '', 'felixkwizera90@gmail.com', '', 'felixx', 'john', '0785707681', 'yes'),
(11, '', 'felixkwizera90@gmail.com', '', 'felixx', 'john', '0785707681', 'yes'),
(12, '', 'felixkwizera0@gmail.com', '', 'peter', 'ruda', '0799999999', 'true'),
(13, '', 'felixkwizera90@gmail.com', '', 'cris', 'ruge', '0799999999', 'true'),
(14, '', 'jilberty0@gmail.com', '', 'enock', 'muhire', '0799999999', 'true'),
(15, '', 'felix@gmail.com', '', 'john', 'smith', '07890', 'ALL'),
(16, '', 'tovkwizera900@gmail.com', '', 'jean', 'muhire', '07844444', 'ALL'),
(17, '', 'felixkwizera1313@gmail.com', '', 'rura', 'pio', '0785707681', 'ALL'),
(18, '', 'emm@6gmail.com', '5656', 'koko', 'tov', '0785707681', 'ok'),
(19, '', 'felixkwizera90@gmail.com', '00000', 'koko', 'tov', '0785707681', 'ok'),
(20, '', 'felixkwizera0000@gmail.com', '0000000', 'koko', 'tov', '0785707681', 'ok'),
(21, '', 'felixkwizera90@gmail.com', '44444', 'edddy', 'rukundoo', '0783333333', 'ALL'),
(22, 'john', 'felixkwizera90@gmail.com', '444445', 'rulinda', 'emmy', '0783333333', 'ALL'),
(23, 'john', 'felixkwizera90@gmail.com', '1234', 'rulinda', 'emmy', '0783333333', 'ALL'),
(24, 'Felix1', 'felixkwizera90@gmail.com', '1234', 'p', 'coco', '0789999999', 'ALL'),
(25, 'Pierre', 'felixkwizera90@gmail.com', '1234', 'pierre', 'Nshuti', '0789999999', 'ALL'),
(26, 'Jean', 'emm@6gmail.com', '44444', 'koko', 'tov', '0785707681', 'ALL'),
(27, 'luka', 'felixkwizera90@gmail.com', '10000', 'jean felix', 'jean', '07890', 'ALL'),
(28, 'Jean', 'emm@6gmail.com', '44444', 'koko', 'tov', '0785707681', 'ALL'),
(29, 'Felix', 'felixkwizera90@gmail.com', '100000', 'jean felix', 'kwizera', '0785707681', 'ok'),
(30, 'Felix', 'felixkwizera90@gmail.com', '222005550', 'jean felix', 'kwizera', '0785707681', 'ALL');

-- --------------------------------------------------------

--
-- Table structure for table `fuel_station`
--

CREATE TABLE `fuel_station` (
  `fuelsta_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(30) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `fuel_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fuel_station`
--

INSERT INTO `fuel_station` (`fuelsta_id`, `name`, `address`, `phone`, `fuel_type`) VALUES
(1, 'kwizera', 'rwamagana', '078101010', 'oil'),
(2, 'toto', 'huye', '0785707681', 'gaz'),
(3, 'kwizera ', 'rusizi', '', 'gasoline'),
(4, 'koko tov', 'burundi', '', 'gaz'),
(6, 'popo ji', 'kabare', '0789999999', 'gasoline'),
(7, 'popo ji', 'kabare', '0789999999', 'gasoline'),
(8, 'emm', 'kwizera', '078101010', 'oil'),
(9, 'emm', 'kwizera', '078101010', 'oil'),
(10, 'jeanpierre', 'dan', '0788787878', 'gasoline'),
(11, 'rulinda', 'rwanda', '0789999999', 'oil'),
(12, 'mukamana', 'kg', '0788887', 'gaz'),
(14, 'kiza', 'huye', '0781010101', ''),
(15, 'tov', 'berba', '0785707681', 'petroleum'),
(16, 'tov', 'berbatov', '0785707681', 'oil'),
(17, 'emmy', 'nyagatare', '0781010101', 'oil'),
(18, 'koko tov', 'burundi', '0785707681', 'oil');

-- --------------------------------------------------------

--
-- Table structure for table `fuel_suppler`
--

CREATE TABLE `fuel_suppler` (
  `fuelsup_id` int(11) NOT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `address` varchar(40) DEFAULT NULL,
  `phone_number` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fuel_suppler`
--

INSERT INTO `fuel_suppler` (`fuelsup_id`, `last_name`, `first_name`, `email`, `address`, `phone_number`) VALUES
(1, 'pepe', 'jean', 'felixkwizera90@gmail.com', 'huye', '0785707681'),
(2, 'niyonsaba', 'jean', 'felixkwizera80@gmail.com', 'nyagatare', '0785707681'),
(3, 'muhire', 'enock', 'felixkwizera110@gmail.com', 'rulindo', '0799999999'),
(4, 'muhire', 'enock', 'felixkwizera110@gmail.com', 'rulindo', '0799999999'),
(5, 'coco', 'p', 'felixkwizera90@gmail.com', 'kayonza', '0789999999'),
(6, 'vivi', 'yana', 'felixkwizera100@gmail.com', 'rwamagana', '0786767676'),
(7, 'vivi', 'yana', 'felixkwizera100@gmail.com', 'rwamagana', '0786767676'),
(8, 'vivi', 'yana', 'felixkwizera100@gmail.com', 'rwamagana', '0786767676'),
(10, 'era', 'mimi', '', 'gisenyi11', '0789999999'),
(11, 'emm', 'dede', 'felixkwizera100@gmail.com', 'kwizera', '78101010'),
(12, 'rukundo', 'selman', 'emm@6gmail.com', 'nyanza', '0785707681'),
(13, 'jean', 'berbatov', 'felixkwizera80@gmail.com', 'kg', '07890'),
(14, 'izabe', 'ishimwe', 'iza100@gmail.com', 'kicukiro', '0789000000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banks`
--
ALTER TABLE `banks`
  ADD PRIMARY KEY (`banks_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`driver_id`);

--
-- Indexes for table `fuel_admin`
--
ALTER TABLE `fuel_admin`
  ADD PRIMARY KEY (`adm_id`);

--
-- Indexes for table `fuel_station`
--
ALTER TABLE `fuel_station`
  ADD PRIMARY KEY (`fuelsta_id`);

--
-- Indexes for table `fuel_suppler`
--
ALTER TABLE `fuel_suppler`
  ADD PRIMARY KEY (`fuelsup_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banks`
--
ALTER TABLE `banks`
  MODIFY `banks_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `driver`
--
ALTER TABLE `driver`
  MODIFY `driver_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `fuel_admin`
--
ALTER TABLE `fuel_admin`
  MODIFY `adm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `fuel_station`
--
ALTER TABLE `fuel_station`
  MODIFY `fuelsta_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `fuel_suppler`
--
ALTER TABLE `fuel_suppler`
  MODIFY `fuelsup_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
