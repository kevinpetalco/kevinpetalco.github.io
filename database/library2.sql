-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2023 at 11:56 AM
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
-- Database: `library2`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `accountID` int(11) NOT NULL,
  `name` varchar(110) NOT NULL,
  `user` varchar(110) NOT NULL,
  `studentID` varchar(100) DEFAULT NULL,
  `course` varchar(100) DEFAULT NULL,
  `pass` varchar(110) NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  `birthday` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `mobilenumber` varchar(100) NOT NULL,
  `datecreated` varchar(100) NOT NULL,
  `region` varchar(100) DEFAULT NULL,
  `addresshead` varchar(100) NOT NULL,
  `status` varchar(10) DEFAULT NULL,
  `lat` varchar(1000) DEFAULT NULL,
  `longi` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`accountID`, `name`, `user`, `studentID`, `course`, `pass`, `image`, `birthday`, `gender`, `mobilenumber`, `datecreated`, `region`, `addresshead`, `status`, `lat`, `longi`) VALUES
(1, 'Dave Astrid Dono', 'Dave', '02-1617-06160', '2', '123456', '1679412245.jpg', '', '', '09951138073', '', NULL, 'House#156, Carmen, CAGAYAN DE ORO CITY (Capital), MISAMIS ORIENTAL, Philippines', NULL, '14.543068553465336', '121.0164794921875'),
(2, 'Yeben Dosol', 'yeben', '02-1718-01758', '2', '1234', '1679413531.jpg', '', '', '09067978631', '', NULL, 'House#03, Canito-an, CAGAYAN DE ORO CITY (Capital), MISAMIS ORIENTAL, Philippines', NULL, '14.543068553465336', '121.0164794921875'),
(4, 'Sir RJ', 'Riel', '02-1617-09067', '2', '1111', '1679477795.jpg', '', '', '09067978631', '', NULL, 'House#987, A. Bonifacio, , , Philippines', NULL, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `activitylog`
--

CREATE TABLE `activitylog` (
  `activitylogID` int(100) NOT NULL,
  `activitylogUSERID` varchar(100) DEFAULT NULL,
  `activitylogUSERTYPE` varchar(100) DEFAULT NULL,
  `activitylogDESCRIPTION` varchar(1000) DEFAULT NULL,
  `activitylogDATE` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `activitylog`
--

INSERT INTO `activitylog` (`activitylogID`, `activitylogUSERID`, `activitylogUSERTYPE`, `activitylogDESCRIPTION`, `activitylogDATE`) VALUES
(1, '2', 'buyer', 'A MURDER OF CROWS is added to your my booked list.', 'March 22, 2023 01:44:29pm'),
(2, '2', 'buyer', 'A MURDER OF CROWS is added to your my booked list.', 'March 22, 2023 01:49:12pm'),
(3, '2', 'buyer', 'Borrowed ID No.RPD-LRC032220230152 is successfully place book.!', 'March 22, 2023 01:52:32pm'),
(4, '<br /><b>Warning</b>:  Undefined property: stdClass::$orderSELLER in <b>C:xampphtdocslibraryadminpen', 'seller', 'You Have Successfully Accepted the Transaction with ID#: RPD-LRC032220230152-2', 'March 22, 2023 01:55:04pm'),
(5, '2', 'buyer', 'STRATEGIC MANAGEMENT is added to your my booked list.', 'March 22, 2023 01:57:19pm'),
(6, '2', 'buyer', 'Borrowed ID No.RPD-LRC032220230157 is successfully place book.!', 'March 22, 2023 01:57:30pm'),
(7, '<br /><b>Warning</b>:  Undefined property: stdClass::$orderSELLER in <b>C:xampphtdocslibraryadminpen', 'seller', 'You Have Successfully Accepted the Transaction with ID#: ', 'March 22, 2023 01:57:41pm'),
(8, '2', 'buyer', 'STRATEGIC MANAGEMENT is added to your my booked list.', 'March 22, 2023 01:58:35pm'),
(9, '2', 'buyer', 'Borrowed ID No.RPD-LRC032220230158 is successfully place book.!', 'March 22, 2023 01:58:44pm'),
(10, '<br /><b>Warning</b>:  Undefined property: stdClass::$orderSELLER in <b>C:xampphtdocslibraryadminpen', 'seller', '', 'March 22, 2023 01:59:05pm'),
(11, '1', 'seller', 'You Have Successfully change status from Accepted to Borrowed the Transaction with ID#: RPD-LRC032220230152-2-2-1', 'March 22, 2023 02:09:58pm'),
(12, '1', 'seller', 'You Have Successfully change status from Borrowed to Returned the Transaction with ID#: RPD-LRC032220230152-2-2-1', 'March 30, 2023 02:20:35pm'),
(13, '1', 'buyer', 'SALES, AGENCY AND CREDIT TRANSACTION is added to your my booked list.', 'March 22, 2023 02:44:38pm'),
(14, '1', 'buyer', 'Borrowed ID No.RPD-LRC032220230244 is successfully place book.!', 'March 22, 2023 02:44:48pm'),
(15, '<br /><b>Warning</b>:  Undefined property: stdClass::$orderSELLER in <b>C:xampphtdocslibraryadminpen', 'seller', 'You Have Successfully Accepted the Transaction with ID#: RPD-LRC032220230244-1', 'March 22, 2023 02:45:04pm'),
(16, '1', 'seller', 'You Have Successfully change status from Accepted to Borrowed the Transaction with ID#: RPD-LRC032220230244-1-1-1', 'March 22, 2023 02:45:37pm'),
(17, '1', 'seller', 'You Have Successfully change status from Borrowed to Returned the Transaction with ID#: RPD-LRC032220230244-1-1-1', 'March 30, 2023 02:46:37pm'),
(18, '1', 'buyer', 'A MURDER OF CROWS is added to your my booked list.', 'March 22, 2023 05:06:38pm'),
(19, '3', 'buyer', ' EVERY TRACE is added to your my booked list.', 'March 22, 2023 05:13:08pm'),
(20, '3', 'buyer', 'A MURDER OF CROWS is added to your my booked list.', 'March 22, 2023 05:17:17pm'),
(21, '2', 'buyer', 'ECONOMICS COLANDER is added to your my booked list.', 'March 22, 2023 05:21:53pm'),
(22, '3', 'buyer', 'ECONOMICS COLANDER is added to your my booked list.', 'March 22, 2023 05:23:36pm'),
(23, '4', 'buyer', 'STRATEGIC MANAGEMENT is added to your my booked list.', 'March 22, 2023 05:38:16pm'),
(24, '4', 'buyer', 'You Have Successfully Updated Your Profile Info!', 'March 22, 2023 05:41:08pm'),
(25, '4', 'buyer', 'Updating your address failed, Some info is missing!', 'March 22, 2023 05:41:27pm'),
(26, '4', 'buyer', ' EVERY TRACE is added to your my booked list.', 'March 22, 2023 05:43:44pm');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminID` int(100) NOT NULL,
  `adminNAME` varchar(100) DEFAULT NULL,
  `adminUSERNAME` varchar(100) DEFAULT NULL,
  `adminPASSWORD` varchar(100) DEFAULT NULL,
  `adminSTATUS` varchar(100) DEFAULT NULL,
  `adminimage` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `book_id` int(11) NOT NULL,
  `book_title` varchar(150) NOT NULL,
  `book_author` varchar(150) NOT NULL,
  `book_publisher` varchar(150) NOT NULL,
  `book_abstract` varchar(150) NOT NULL,
  `book_callnumber` varchar(150) NOT NULL,
  `category_id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `book_image1` varchar(255) NOT NULL,
  `book_image2` varchar(255) NOT NULL,
  `book_image3` varchar(255) NOT NULL,
  `book_fines` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(100) DEFAULT NULL,
  `book_available` int(100) DEFAULT NULL,
  `totalborrow` int(100) DEFAULT NULL,
  `useruploaded` int(100) DEFAULT NULL,
  `book_accession` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`book_id`, `book_title`, `book_author`, `book_publisher`, `book_abstract`, `book_callnumber`, `category_id`, `department_id`, `book_image1`, `book_image2`, `book_image3`, `book_fines`, `date`, `status`, `book_available`, `totalborrow`, `useruploaded`, `book_accession`) VALUES
(1, 'MARKETING MANAGEMENT  KNOWLEDGE AND SKILLS', 'J. Paul peter/ James H. Donnelly, Jr', 'McGraw-hill Education NY 1021', 'Something new', 'CIR HF 5415 .P38 2013', 5, 1, '1679414254.jpg', '', '', '300', '2023-03-21 16:03:06', NULL, 0, 0, 1, '00777'),
(2, 'MARKETING MANAGEMENT  KNOWLEDGE AND SKILLS', 'J. Paul peter/ James H. Donnelly, Jr', 'McGraw-hill Education NY 1021', '<p><font color=\"#bdc1c6\" face=\"arial, sans-serif\"><span style=\"background-color: rgb(32, 33, 36);\">Helps you enhance students knowledge of marketing m', 'CIR HF 5415 .P38 2013', 5, 1, '1679414254.jpg', '', '', '300', '2023-03-21 15:57:34', NULL, 2, 0, 1, '778'),
(3, 'ECONOMICS COLANDER', ' DAVID COLANDER', 'Gary Burke', '<p>The economics profession has fallen into the habit of telling a limited \"economics of control\" policy story in their teaching of economics.<br></p>', 'CIR HF 5255 .P38 2014', 5, 1, '1679414931.jpg', '', '', '250', '2023-03-22 09:23:36', NULL, 1, 0, 1, '530'),
(4, 'STRATEGIC MANAGEMENT', 'Fred R. David', 'Pearson Education, Inc.', '<p><span lang=\"EN-US\" style=\"font-size:11.0pt;line-height:\r\n107%;font-family:&quot;Calibri&quot;,sans-serif;mso-ascii-theme-font:minor-latin;\r\nmso-far', 'CIR HD 30.28 D378 2003', 5, 1, '1679455862.jpg', '', '', '340', '2023-03-22 09:38:16', NULL, 2, 0, 1, '580'),
(5, 'STRATEGIC MANAGEMENT', 'Fred R. David', 'Pearson Education, Inc.', '<p><span lang=\"EN-US\" style=\"font-size:11.0pt;line-height:\r\n107%;font-family:&quot;Calibri&quot;,sans-serif;mso-ascii-theme-font:minor-latin;\r\nmso-far', 'CIR HD 30.28 D378 2003', 5, 1, '1679455862.jpg', '', '', '340', '2023-03-22 05:58:35', NULL, 2, 0, 1, '581'),
(6, 'OBLIGATIONS AND CONTRACTS', 'FIDELITO R. SORIANO', 'GIC ENTERPRISES & CO., INC.', '<p><span lang=\"EN-US\" style=\"font-size:11.0pt;line-height:\r\n107%;font-family:&quot;Calibri&quot;,sans-serif;mso-ascii-theme-font:minor-latin;\r\nmso-far', 'FIL KF 5625.2 .S67 2016', 4, 1, '1679456390.jpg', '', '', '280', '2023-03-22 03:39:50', NULL, 1, 0, 1, '973'),
(7, 'SALES, AGENCY AND CREDIT TRANSACTION', 'FIDELITO R. SORIANO', 'GIC ENTERPRISES & CO., INC.', '<p><span lang=\"EN-US\" style=\"font-size:11.0pt;line-height:\r\n107%;font-family:&quot;Calibri&quot;,sans-serif;mso-ascii-theme-font:minor-latin;\r\nmso-far', 'FIL KF 5625.51 .S67 2014', 2, 1, '1679457062.jpg', '', '', '230', '2023-03-22 06:44:38', NULL, 3, 0, 1, '337'),
(8, 'SALES, AGENCY AND CREDIT TRANSACTION', 'FIDELITO R. SORIANO', 'GIC ENTERPRISES & CO., INC.', '<p><span lang=\"EN-US\" style=\"font-size:11.0pt;line-height:\r\n107%;font-family:&quot;Calibri&quot;,sans-serif;mso-ascii-theme-font:minor-latin;\r\nmso-far', 'FIL KF 5625.51 .S67 2014', 2, 1, '1679457062.jpg', '', '', '230', '2023-03-22 03:51:02', NULL, 3, 0, 1, '338'),
(9, 'SALES, AGENCY AND CREDIT TRANSACTION', 'FIDELITO R. SORIANO', 'GIC ENTERPRISES & CO., INC.', '<p><span lang=\"EN-US\" style=\"font-size:11.0pt;line-height:\r\n107%;font-family:&quot;Calibri&quot;,sans-serif;mso-ascii-theme-font:minor-latin;\r\nmso-far', 'FIL KF 5625.51 .S67 2014', 2, 1, '1679457062.jpg', '', '', '230', '2023-03-22 03:51:02', NULL, 3, 0, 1, '339'),
(10, 'A MURDER OF CROWS', 'STEVE SHEPARD', 'PRESIDIO PRESS', '<p><span lang=\"EN-US\" style=\"font-size:11.0pt;line-height:\r\n107%;font-family:&quot;Calibri&quot;,sans-serif;mso-ascii-theme-font:minor-latin;\r\nmso-far', 'FIC PS 3569. H45587 1996', 3, 1, '1679457350.jpg', '', '', '340', '2023-03-22 09:17:17', NULL, 1, 0, 1, '2507'),
(11, ' EVERY TRACE', 'GREGG MAIN', 'Inc, 10 east 53rd street NY', '<p class=\"MsoNormal\" style=\"text-indent:36.0pt\"><span lang=\"EN-US\">The adrenaline\r\ncharge debut novel of a husband, a wife, and two killers locked in ', 'FIC PS 3563.A38 E9 1999', 3, 1, '1679457461.jpg', '', '', '210', '2023-03-22 09:43:44', NULL, 1, 0, 1, '911'),
(12, 'RIDES OF THE MIDWAY', 'Lee Durkee', 'W.W. Norton & Company, Inc.', '<p><span lang=\"EN-US\" style=\"font-size:11.0pt;line-height:\r\n107%;font-family:&quot;Calibri&quot;,sans-serif;mso-ascii-theme-font:minor-latin;\r\nmso-far', 'FIC PS 3554.U6865 R53 2001', 3, 1, '1679457597.jpg', '', '', '220', '2023-03-22 03:59:57', NULL, 1, 0, 1, '889'),
(13, 'NATIONAL SERVICE TRAINING PROGRAM', 'Lee Sergio & Tiu-Lee Serge Albert', 'C & E PUBLISHING, Inc.', '<p class=\"MsoNormal\"><span lang=\"EN-US\">Familiarize themselves with the provisions\r\nand policies of Republic Act No. 9163-the NSTP Act of 2001&nbsp;</', 'FIL U 660.P6.L44 2019', 5, 1, '1679458050.jpg', '', '', '250', '2023-03-22 04:07:30', NULL, 1, 0, 1, '1816');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cartID` int(100) NOT NULL,
  `accountID` int(100) NOT NULL,
  `itemID` int(100) NOT NULL,
  `cartCOUNT` varchar(100) NOT NULL,
  `orderID` varchar(255) DEFAULT NULL,
  `cartDATE` varchar(100) NOT NULL,
  `cartSTATUS` varchar(100) DEFAULT NULL,
  `cartPENDING` varchar(100) DEFAULT NULL,
  `cartACCEPTED` varchar(100) DEFAULT NULL,
  `cartDELIVERY` varchar(100) DEFAULT NULL,
  `cartRECIEVED` varchar(10000) DEFAULT NULL,
  `amount_due` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cartID`, `accountID`, `itemID`, `cartCOUNT`, `orderID`, `cartDATE`, `cartSTATUS`, `cartPENDING`, `cartACCEPTED`, `cartDELIVERY`, `cartRECIEVED`, `amount_due`) VALUES
(1, 2, 10, '1', 'RPD-LRC032220230152-2', 'March 22, 2023 01:44:29pm', '5', 'March 22, 2023 01:44:29pm', 'March 22, 2023 01:55:04pm', 'March 22, 2023 02:09:58pm', 'March 30, 2023 02:20:35pm', 0),
(3, 2, 4, '1', 'RPD-LRC032220230157-2', 'March 22, 2023 01:57:19pm', '3', 'March 22, 2023 01:57:19pm', 'March 22, 2023 01:57:41pm', NULL, NULL, 0),
(4, 2, 5, '1', 'RPD-LRC032220230158-2', 'March 22, 2023 01:58:35pm', '3', 'March 22, 2023 01:58:35pm', 'March 22, 2023 01:59:05pm', NULL, NULL, 0),
(5, 1, 7, '1', 'RPD-LRC032220230244-1', 'March 22, 2023 02:44:38pm', '5', 'March 22, 2023 02:44:38pm', 'March 22, 2023 02:45:04pm', 'March 22, 2023 02:45:37pm', 'March 30, 2023 02:46:37pm', 0),
(6, 1, 10, '1', '1', 'March 22, 2023 05:06:38pm', '2', 'March 22, 2023 05:06:38pm', NULL, NULL, NULL, 0),
(9, 2, 3, '1', '1', 'March 22, 2023 05:21:53pm', '2', 'March 22, 2023 05:21:53pm', NULL, NULL, NULL, 0),
(10, 3, 3, '1', '1', 'March 22, 2023 05:23:36pm', '2', 'March 22, 2023 05:23:36pm', NULL, NULL, NULL, 0),
(12, 4, 11, '1', '1', 'March 22, 2023 05:43:44pm', '2', 'March 22, 2023 05:43:44pm', NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `categoryID` int(100) NOT NULL,
  `categoryNAME` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`categoryID`, `categoryNAME`) VALUES
(1, 'NONE'),
(2, 'NEWLEY REQUIRED BOOKS'),
(3, 'FICTION'),
(4, 'FILIPINIANA'),
(5, 'CIRCULATION');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `chatID` int(100) NOT NULL,
  `accountID` int(100) NOT NULL,
  `adminID` int(100) NOT NULL,
  `chatPOS` varchar(100) NOT NULL,
  `chatDATE` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `chatDES` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `courseID` int(100) NOT NULL,
  `courseNAME` varchar(1000) DEFAULT NULL,
  `courseRECOMMENDATION` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`courseID`, `courseNAME`, `courseRECOMMENDATION`) VALUES
(1, 'Bachelor of Science in Criminology', 'none,'),
(2, 'Bachelor of Science in Information Technology', 'none,'),
(3, 'Bachelor of Science in Hotel & Restaurant Management', 'none,'),
(4, 'Bachelor of Science in Tourism Management', 'none,'),
(5, 'Bachelor of Science in Accountancy', 'none,'),
(6, 'Bachelor of Science in Business Administration with Majors in Financial Management', 'none,'),
(7, 'Bachelor of Science in Business Administration with Majors in Marketing Management', 'none,'),
(8, 'Bachelor of Elementary Education', 'none,'),
(9, 'Bachelor of Secondary Education with Majors in English', 'none,'),
(10, 'Bachelor of Secondary Education with Majors in Math', 'none,'),
(11, 'Bachelor of Science in Civil Engineering', 'none,'),
(12, 'Bachelor of Science in Mechanical Engineering', 'none,'),
(13, 'Bachelor of Science in Electrical Engineering', 'none,'),
(14, 'Bachelor of Science in Nursing', 'none,');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `department_id` int(11) NOT NULL,
  `department_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`department_id`, `department_name`) VALUES
(1, 'NONE'),
(2, 'CRIM'),
(3, 'CEA'),
(4, 'CITE'),
(5, 'CAHS'),
(6, 'EDUC'),
(7, 'SHS'),
(8, 'CMA');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `itemID` int(100) NOT NULL,
  `itemNAME` varchar(1000) DEFAULT NULL,
  `itemQUANTITY` varchar(100) DEFAULT NULL,
  `itemPRICE` varchar(100) DEFAULT NULL,
  `itemTOTALSELL` varchar(100) DEFAULT NULL,
  `itemLONGITUTE` varchar(1000) DEFAULT NULL,
  `itemLATITUDE` varchar(1000) DEFAULT NULL,
  `itemCATEGORY` varchar(100) DEFAULT NULL,
  `itemDESCRIPTION` varchar(10000) DEFAULT NULL,
  `itemSELLER` varchar(100) DEFAULT NULL,
  `itemIMG` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `missing`
--

CREATE TABLE `missing` (
  `missingID` int(100) NOT NULL,
  `missingCART` varchar(100) NOT NULL,
  `missingAMOUNT` varchar(100) NOT NULL,
  `missingACCOUNT` int(100) NOT NULL,
  `missingDATE` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `notificationID` int(100) NOT NULL,
  `notificationCLIENTID` varchar(100) DEFAULT NULL,
  `notificationMESSAGE` varchar(1000) DEFAULT NULL,
  `notificationDATE` varchar(100) DEFAULT NULL,
  `notificationCLIENTTYPE` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`notificationID`, `notificationCLIENTID`, `notificationMESSAGE`, `notificationDATE`, `notificationCLIENTTYPE`) VALUES
(1, '2', 'Your Book nameA MURDER OF CROWS', 'March 22, 2023 01:55:04pm', 'customer'),
(2, '2', 'Your Book nameSTRATEGIC MANAGEMENT', 'March 22, 2023 01:57:41pm', 'customer'),
(3, '2', 'Your Book nameSTRATEGIC MANAGEMENT', 'March 22, 2023 01:59:05pm', 'customer'),
(4, '2', 'Your Transaction IDRPD-LRC032220230152-2is change the status byThala M. Baron from accepted to Delivery!', 'March 22, 2023 02:09:58pm', 'customer'),
(5, '2', 'Your Transaction IDRPD-LRC032220230152-2is change the status by Librarian from Borrowed to Returned!', 'March 30, 2023 02:20:35pm', 'customer'),
(6, '1', 'Your Book nameSALES, AGENCY AND CREDIT TRANSACTION', 'March 22, 2023 02:45:04pm', 'customer'),
(7, '1', 'Your Transaction IDRPD-LRC032220230244-1is change the status byThala M. Baron from accepted to Delivery!', 'March 22, 2023 02:45:37pm', 'customer'),
(8, '1', 'Your Transaction IDRPD-LRC032220230244-1is change the status by Librarian from Borrowed to Returned!', 'March 30, 2023 02:46:37pm', 'customer');

-- --------------------------------------------------------

--
-- Table structure for table `orderstatus`
--

CREATE TABLE `orderstatus` (
  `orderstatusID` int(100) NOT NULL,
  `orderstatusDES` varchar(100) NOT NULL,
  `orderCODE` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orderstatus`
--

INSERT INTO `orderstatus` (`orderstatusID`, `orderstatusDES`, `orderCODE`) VALUES
(1, 'Pending', '<div class=\"steps\" style=\"width: 1000px;\">                             <ul class=\"list-unstyled multi-steps\">                                 <li style=\"color: black;\" class=\"is-active \">Ordered<br><span>January 30, 2022</span></li>                                 <li style=\"color: black; \">Pending<br><span>January 30, 2022</span></li>                                 <li style=\"color: black; \">Accepted<br><span>February 3, 2022</span></li>                                 <li style=\"color: black;\" >Delivery</li>                                 <li style=\"color: black;\"  >Received</li>                             </ul>                         </div> '),
(2, 'Pending', ''),
(3, 'Accepted', ''),
(4, 'Borrowed', ''),
(5, 'Returned', ''),
(6, 'Cancelled', ''),
(8, 'Missing', '');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `paymentID` int(100) NOT NULL,
  `paymentTYPE` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`paymentID`, `paymentTYPE`) VALUES
(1, 'COD'),
(2, 'Pick-Up');

-- --------------------------------------------------------

--
-- Table structure for table `paymenttype`
--

CREATE TABLE `paymenttype` (
  `paymenttypeID` int(100) NOT NULL,
  `paymenttypeNAME` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `paymenttype`
--

INSERT INTO `paymenttype` (`paymenttypeID`, `paymenttypeNAME`) VALUES
(1, 'COD'),
(2, 'PICK-UP');

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `sellerID` int(11) NOT NULL,
  `sellername` varchar(110) NOT NULL,
  `selleruser` varchar(110) NOT NULL,
  `sellerpass` varchar(110) NOT NULL,
  `sellerimage` varchar(100) DEFAULT NULL,
  `sellerlatitude` varchar(100) NOT NULL,
  `sellerlongitude` varchar(100) NOT NULL,
  `sellermobilenumber` varchar(100) NOT NULL,
  `sellerdatecreated` varchar(100) DEFAULT NULL,
  `selleremail` varchar(100) DEFAULT NULL,
  `sellerSTATUS` varchar(100) DEFAULT NULL,
  `selleraddress` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`sellerID`, `sellername`, `selleruser`, `sellerpass`, `sellerimage`, `sellerlatitude`, `sellerlongitude`, `sellermobilenumber`, `sellerdatecreated`, `selleremail`, `sellerSTATUS`, `selleraddress`) VALUES
(1, 'Thala M. Baron', 'Thala', '123456789', '1679410054.jpg', '14.543068553465336', '121.0164794921875', '09068937462', 'March 21, 2023 10:47:34pm', 'ThalaBaron@gmail.com', 'active', 'House#05, Puerto, CAGAYAN DE ORO CITY (Capital), MISAMIS ORIENTAL, Philippines');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`accountID`);

--
-- Indexes for table `activitylog`
--
ALTER TABLE `activitylog`
  ADD PRIMARY KEY (`activitylogID`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminID`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cartID`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`categoryID`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`chatID`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`courseID`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`itemID`);

--
-- Indexes for table `missing`
--
ALTER TABLE `missing`
  ADD PRIMARY KEY (`missingID`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`notificationID`);

--
-- Indexes for table `orderstatus`
--
ALTER TABLE `orderstatus`
  ADD PRIMARY KEY (`orderstatusID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`paymentID`);

--
-- Indexes for table `paymenttype`
--
ALTER TABLE `paymenttype`
  ADD PRIMARY KEY (`paymenttypeID`);

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`sellerID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `accountID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `activitylog`
--
ALTER TABLE `activitylog`
  MODIFY `activitylogID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminID` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cartID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `categoryID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `chatID` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `courseID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `department_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `itemID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `missing`
--
ALTER TABLE `missing`
  MODIFY `missingID` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `notificationID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `orderstatus`
--
ALTER TABLE `orderstatus`
  MODIFY `orderstatusID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `paymentID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `paymenttype`
--
ALTER TABLE `paymenttype`
  MODIFY `paymenttypeID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `seller`
--
ALTER TABLE `seller`
  MODIFY `sellerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
