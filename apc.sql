-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2023 at 05:02 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apc`
--

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `dept_id` int(11) NOT NULL,
  `department_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dept_id`, `department_name`) VALUES
(1, 'farm admin'),
(2, 'feedmill admin'),
(3, 'accounting & finance'),
(4, 'supply chain & management'),
(5, 'Health and Safety Security'),
(6, 'Feedmill Production'),
(7, 'Poultry Production'),
(8, 'corporate services'),
(9, 'feedmill administrative'),
(10, 'feedmill - production'),
(11, 'central engineering '),
(12, 'layer farm - scm'),
(13, 'layer farm - production'),
(14, 'tamago - production'),
(15, 'layer farm - administrative'),
(16, 'feedmill - qa');

-- --------------------------------------------------------

--
-- Table structure for table `employee_list`
--

CREATE TABLE `employee_list` (
  `id` int(11) NOT NULL,
  `employee_id` char(10) NOT NULL,
  `dept_id` int(11) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `middle_name` varchar(30) NOT NULL,
  `name_ext` varchar(10) DEFAULT NULL,
  `gender` varchar(6) NOT NULL,
  `position` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee_list`
--

INSERT INTO `employee_list` (`id`, `employee_id`, `dept_id`, `first_name`, `last_name`, `middle_name`, `name_ext`, `gender`, `position`) VALUES
(1, 'B22-0168-T', 6, 'manuel', 'ac-ac', 'bonsol', NULL, 'male', 'warehouse and logistics supervisor'),
(2, 'B19-0057-T', 8, 'john reginald', 'austria', 'lansangan', NULL, 'male', 'it specialist'),
(3, 'B22-0169-T', 8, 'rolly', 'castillo', 'agustin', NULL, 'male', 'it specialist'),
(4, 'B20-0044-T', 6, 'joseph albert', 'dador', 'bucad', NULL, 'male', 'feed mill operator'),
(5, 'B21-0017-T', 13, 'jomar', 'dancel', 'roque', NULL, 'male', 'flockman - growing house'),
(6, 'B21-0022-T', 3, 'jovanie', 'dayao', 'rigos', NULL, 'male', 'finance analyst'),
(7, 'B19-0049-T', 1, 'maria teresa', 'delos santos', 'camara', NULL, 'female', 'administrative specialist'),
(8, 'B20-0002-T', 16, 'ronald joseph', 'gabuni', 'bonifacio', NULL, 'male', 'qa - lab technician'),
(9, 'B22-0073-T', 13, 'joe mart', 'garcia', 'sevilla', NULL, 'male', 'electrical maintenance supervisor'),
(10, 'B19-0001-T', 8, 'kevin', 'herrera', 'pena', NULL, 'male', 'it specialist'),
(11, 'B22-0074-T', 13, 'james', 'isla', 'alcantara', NULL, 'male', 'warehouse staff'),
(12, 'B22-0095-T', 11, 'orly', 'laroco', 'ngaseo', NULL, 'male', 'project engineer'),
(13, 'B22-0164-T', 1, 'alvin', 'lianza', 'laza', 'ii', 'male', 'liason officer'),
(14, 'B20-0064-T', 5, 'marvin', 'llabres', 'balmores', NULL, 'male', 'safety officer'),
(15, 'B20-0098-T', 4, 'janelle kristine', 'lumanlan', 'pineda', NULL, 'female', 'customer service specialist'),
(16, 'B21-0023-T', 13, 'vener', 'macapagal', 'gracia', NULL, 'male', 'delivery driver'),
(17, 'B20-0065-T', 5, 'cristituto', 'madjos', 'sol', NULL, 'male', 'safety officer'),
(18, 'B19-0085-T', 13, 'jayson', 'mendoza', 'sarmiento', NULL, 'male', 'egg farm manager'),
(19, 'B22-0103-T', 3, 'shaira mae', 'olonan', 'sapad', NULL, 'female', 'accounting specialist'),
(20, 'B22-0077-T', 11, 'patrick', 'pascua', 'santos', NULL, 'male', ''),
(21, 'B21-0056-T', 3, 'anna karenina', 'perez', 'mata', NULL, 'female', 'accounting officer'),
(22, 'B22-0141-T', 8, 'charmaine', 'plantilla', 'calma', NULL, 'female', 'l&od officer'),
(23, 'B22-0166-T', 1, 'jo ann', 'porlucas', 'gabriel', NULL, 'female', 'admin & er specialist'),
(24, 'B21-0045-T', 2, 'angelyn', 'ramiterre', 'ordona', NULL, 'female', 'admin assistant'),
(25, 'B22-0078-T', 6, 'kimberly ann', 'renia', 'nunez', NULL, 'female', 'warehouse encoder'),
(26, 'B19-0091-T', 8, 'ramon', 'sagala', 'mendoza', NULL, 'male', 'company driver'),
(27, 'B20-0017-T', 13, 'christian', 'salcedo', 'lucero', NULL, 'male', 'flockman - laying house'),
(28, 'B22-0050-T', 11, 'jason allen', 'serrano', 'pabon', NULL, 'male', 'facilities management supervisor'),
(29, 'B20-0018-T', 8, 'jeffrey', 'sudio', 'arquero', NULL, 'male', 'delivery helper'),
(30, 'B19-0102-T', 8, 'manuel', 'tiglao', 'hernandez', 'jr.', 'male', 'production supervisor'),
(31, 'B21-0073-T', 14, 'janice', 'urriquia', 'rivera', NULL, 'female', 'qa supervisor'),
(32, 'B21-0015-T', 3, 'eunica jean', 'vallez', 'san gabriel', NULL, 'female', 'financial analyst');

-- --------------------------------------------------------

--
-- Table structure for table `movement_type`
--

CREATE TABLE `movement_type` (
  `movement_id` int(11) NOT NULL,
  `movement_type` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movement_type`
--

INSERT INTO `movement_type` (`movement_id`, `movement_type`) VALUES
(1, 'inbound'),
(2, 'outbound');

-- --------------------------------------------------------

--
-- Table structure for table `printer`
--

CREATE TABLE `printer` (
  `printer_id` int(11) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `model` varchar(50) NOT NULL,
  `printer_type` enum('colored','black&white') NOT NULL,
  `serial_number` varchar(50) NOT NULL,
  `cartridge_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `printer`
--

INSERT INTO `printer` (`printer_id`, `brand`, `model`, `printer_type`, `serial_number`, `cartridge_type`) VALUES
(1, 'hp', 'mfp m2280nw', 'colored', '131536454', 'cf500a series'),
(2, 'canon', 'mf244', 'black&white', '135648543', '337'),
(3, 'hp', 'mfp m274n', 'colored', '5466877858', 'cf400a series'),
(4, 'hp', ' f517a', 'black&white', '6454876546', 'ce285a'),
(5, 'hp', 'mfp 130fn', 'black&white', '68276540687', 'cf217a');

-- --------------------------------------------------------

--
-- Table structure for table `toner_color`
--

CREATE TABLE `toner_color` (
  `toner_id` int(11) NOT NULL,
  `color` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `toner_color`
--

INSERT INTO `toner_color` (`toner_id`, `color`) VALUES
(1, 'cyan'),
(2, 'magenta'),
(3, 'yellow'),
(4, 'black');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `transaction_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `printer_id` int(11) NOT NULL,
  `black` int(11) NOT NULL,
  `cyan` int(11) NOT NULL,
  `magenta` int(11) NOT NULL,
  `yellow` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `movement_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`transaction_id`, `date`, `printer_id`, `black`, `cyan`, `magenta`, `yellow`, `employee_id`, `movement_id`) VALUES
(1, '2023-01-27', 3, 5, 3, 3, 3, 3, 1),
(2, '2023-01-27', 3, -1, -1, -1, -1, 25, 2),
(3, '2023-01-27', 1, 5, 3, 3, 3, 3, 1),
(4, '2023-01-27', 1, -1, -1, -1, -1, 7, 2),
(5, '2023-01-27', 5, 5, 0, 0, 0, 3, 1),
(6, '2023-01-27', 5, -1, 0, 0, 0, 18, 2),
(7, '2023-01-27', 3, 3, 2, 2, 2, 3, 1),
(8, '2023-01-27', 1, 3, 2, 2, 2, 3, 1),
(9, '2023-01-27', 2, 7, 0, 0, 0, 3, 1),
(10, '2023-01-27', 2, -1, 0, 0, 0, 19, 2),
(11, '2023-01-27', 3, -1, -1, 0, -1, 25, 2),
(12, '2023-01-27', 2, -1, 0, 0, 0, 19, 2),
(13, '2023-01-27', 1, -1, 0, -1, -1, 13, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`dept_id`);

--
-- Indexes for table `employee_list`
--
ALTER TABLE `employee_list`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dept_id` (`dept_id`),
  ADD KEY `employee_id` (`employee_id`);

--
-- Indexes for table `movement_type`
--
ALTER TABLE `movement_type`
  ADD PRIMARY KEY (`movement_id`);

--
-- Indexes for table `printer`
--
ALTER TABLE `printer`
  ADD PRIMARY KEY (`printer_id`);

--
-- Indexes for table `toner_color`
--
ALTER TABLE `toner_color`
  ADD PRIMARY KEY (`toner_id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`transaction_id`),
  ADD KEY `employee_id` (`employee_id`),
  ADD KEY `printer_id` (`printer_id`),
  ADD KEY `movement_id` (`movement_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `dept_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `employee_list`
--
ALTER TABLE `employee_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `movement_type`
--
ALTER TABLE `movement_type`
  MODIFY `movement_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `printer`
--
ALTER TABLE `printer`
  MODIFY `printer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `toner_color`
--
ALTER TABLE `toner_color`
  MODIFY `toner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employee_list`
--
ALTER TABLE `employee_list`
  ADD CONSTRAINT `employee_list_ibfk_1` FOREIGN KEY (`dept_id`) REFERENCES `department` (`dept_id`);

--
-- Constraints for table `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `transaction_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employee_list` (`id`),
  ADD CONSTRAINT `transaction_ibfk_2` FOREIGN KEY (`printer_id`) REFERENCES `printer` (`printer_id`),
  ADD CONSTRAINT `transaction_ibfk_3` FOREIGN KEY (`movement_id`) REFERENCES `movement_type` (`movement_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
