-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2023 at 06:03 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`accountID`, `name`, `user`, `studentID`, `course`, `pass`, `image`, `birthday`, `gender`, `mobilenumber`, `datecreated`, `region`, `addresshead`, `status`, `lat`, `longi`) VALUES
(2, 'Vincent R. Perez', 'sample', NULL, '1', 'sample', '1662903987.png', '2021-03-04', 'Female', '09299607356', '03/28/2022 09:36:30 pm', '', ', Estanza, LINGAYEN (Capital), PANGASINAN, Philippines', 'active', '16.004565782746422', '120.32363891601562'),
(3, 'Danilo M. Dulce', 'Danilo', NULL, '1', 'Danilo', 'null.png', '2021-03-13', 'Female', '09155882430', '03/28/2022 09:36:30 pm', NULL, 'Nagulayan, Binmaley, Pangasinan', 'active', NULL, NULL),
(4, 'Rodel C. Fernandez', 'Rodel', NULL, '1', 'Rodel', 'null.png', '2021-03-10', 'Female', '09155882430', '03/28/2021 09:59:11 pm', NULL, 'Sabagan, Lingayen, Pangasinan', 'active', NULL, NULL),
(7, 'Nicasio S. De Leon', 'nic', NULL, '1', 'nic', 'null.png', '2021-03-04', 'Female', '09299607356', '04/05/2021 10:47:56 pm', NULL, 'Malempuec, Lingayen, Pangasinan', 'active', NULL, NULL),
(8, 'Randy F. Gil', 'ran', NULL, '1', 'ran', 'null.png', '2021-04-03', 'Male', '09299607356', '04/09/2021 11:32:17 pm', NULL, 'Casulming, Lingayen, Pangasinan', 'active', NULL, NULL),
(9, 'Jovelyn Joaquin', 'jovs', NULL, '1', 'jovs', 'null.png', '2021-03-04', 'Male', '09299607356', '03/28/2022 09:36:30 pm', NULL, 'Nagulayan, Binmaley, Pangasinan', 'blocked', NULL, NULL),
(11, 'Clara Agustine', 'clara01', NULL, '1', 'clara01', '.png', '', '', '09000000001', '', NULL, '', NULL, NULL, NULL),
(12, 'Romeo Cruz', 'romeo01', NULL, '1', 'romeo01', 'null.png', '', '', '09000000002', '', NULL, '', NULL, NULL, NULL),
(13, 'Recardo Mamaril', 'recardo1', NULL, '1', 'recardo1', '1665434860.jpg', '', '', '09000000003', '', NULL, '', NULL, NULL, NULL),
(14, 'Shen Cruz', 'shen01', NULL, '1', 'shen01', '1665545553.ico', '', '', '09000000005', '', NULL, '001, San Jose, LIBJO (ALBOR), DINAGAT ISLANDS, Philippines', NULL, '14.597793782185706', '120.97161049685477');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activitylog`
--

INSERT INTO `activitylog` (`activitylogID`, `activitylogUSERID`, `activitylogUSERTYPE`, `activitylogDESCRIPTION`, `activitylogDATE`) VALUES
(135, '2', 'buyer', 'Business Ethics Ethical Decision Making and Cases is added to your my booked list.', 'January 25, 2023 08:37:18pm'),
(136, '2', 'buyer', 'Borrowed ID No.RPD-LRC012520230837 is successfully place book.!', '012520230837'),
(137, '<br /><b>Warning</b>:  Undefined property: stdClass::$orderSELLER in <b>D:xammphtdocsagrimarketv4Sel', 'seller', 'You Have Successfully Accepted the Transaction with ID#: RPD-LRC012520230833-2', 'January 25, 2023 11:58:40pm'),
(138, '2', 'buyer', 'You Have Successfully Updated Your Profile Info!', 'January 26, 2023 12:02:16am'),
(139, '2', 'buyer', 'You Have Successfully Updated Your Profile Info!', 'January 26, 2023 12:37:42am'),
(140, '1', 'seller', 'You Have Successfully change status from Accepted to Delivery the Order with ID#: RPD-LRC012520230833-2-2-1', 'January 26, 2023 12:43:49am'),
(141, '1', 'seller', 'You Have Successfully change status from Borrowed to Returned the Transaction with ID#: RPD-LRC012520230833-2-2-1', 'January 26, 2023 01:51:08am'),
(142, '2', 'buyer', 'Intermediate Accounting is added to your my booked list.', 'January 26, 2023 11:19:59pm'),
(143, '2', 'buyer', 'Intermediate Accounting is added to your my booked list.', 'January 26, 2023 11:21:00pm'),
(144, '2', 'buyer', 'Sales, Agency and Credit Transaction is added to your my booked list.', 'January 26, 2023 11:24:03pm'),
(145, '2', 'buyer', 'Business Ethics Ethical Decision Making and Cases is added to your my booked list.', 'January 26, 2023 11:24:09pm'),
(146, '2', 'buyer', 'Borrowed ID No.RPD-LRC012620231124 is successfully place book.!', 'January 26, 2023 11:24:15pm'),
(147, '<br /><b>Warning</b>:  Undefined property: stdClass::$orderSELLER in <b>D:xammphtdocsagrimarketv4Sel', 'seller', 'You Have Successfully Accepted the Transaction with ID#: RPD-LRC012620231124-2', 'January 26, 2023 11:25:04pm'),
(148, '1', 'seller', 'You Have Successfully change status from Borrowed to Missing the Transaction with ID#: RPD-LRC012520230833-2-2-1', 'January 26, 2023 11:42:47pm'),
(149, '1', 'seller', 'You Have Successfully change status from Accepted to Borrowed the Transaction with ID#: RPD-LRC012620231124-2-2-1', 'January 26, 2023 11:44:29pm'),
(150, '1', 'seller', 'You Have Successfully change status from Borrowed to Missing the Transaction with ID#: RPD-LRC012620231124-2-2-1', 'January 26, 2023 11:44:38pm'),
(151, '1', 'seller', 'You Have Successfully change status from Borrowed to Missing the Transaction with ID#: RPD-LRC012520230837-2-1', 'January 26, 2023 11:47:49pm'),
(152, '1', 'seller', 'You Have Successfully change status from Borrowed to Missing the Transaction with ID#: RPD-LRC012620231124-2-2-1', 'January 26, 2023 11:50:59pm');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminID`, `adminNAME`, `adminUSERNAME`, `adminPASSWORD`, `adminSTATUS`, `adminimage`) VALUES
(1, 'Sample Admin', 'sample', 'sample', 'admin', '1660420407.png');

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
  `useruploaded` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`book_id`, `book_title`, `book_author`, `book_publisher`, `book_abstract`, `book_callnumber`, `category_id`, `department_id`, `book_image1`, `book_image2`, `book_image3`, `book_fines`, `date`, `status`, `book_available`, `totalborrow`, `useruploaded`) VALUES
(1, 'Sales, Agency and Credit Transaction', 'Fidelito R. Soriano', '2017, C.M. Recto Avenue Manila Philippines', 'This third edition of sales, agency & Credit Transaction (law & application) is modified version of the lost edition.', 'FIL KF 5625.51.53.567 2019', 8, 4, '319768444_906206980757745_1781445771547399522_n.jpg', '319768451_860524401735304_8050956525316093297_n.jpg', '319779034_1665884060554192_7828738886908706741_n.jpg', '300', '2023-01-26 15:24:04', 'true', 3, 0, 0),
(2, 'Business Ethics Ethical Decision Making and Cases', 'Fraedrich Ferrell', '2017, 2015 Cengage Learning', 'This is the Eleventh Edition  of Business Ethics: Ethical Decision making & cases', 'CIR HF 5387 F45 2017', 8, 4, '319883628_1516733308824754_9060556108139918184_n.jpg', '319696326_546547100393163_7753793032197009173_n.jpg', '320220104_547520407239612_346659303187647627_n.jpg', '500', '2023-01-26 15:24:09', 'true', 5, 0, 0),
(3, 'Intermediate Accounting', 'Conrado T. Valix', '2017 C.M. Recto Avenue, Sampaloc Manila Philippines', 'This volume is written to conform with the new undergraduate course syllabus for intermediate accounting three as promulgated by the commission on the', 'FIL HF 5635.1.35 2020 v:3', 8, 4, '319943881_716574379668265_7547214790128543209_n.jpg', '320235117_889465515740515_8876069789843797557_n.jpg', '319821575_1188137295118811_207936239731759728_n.jpg', '200', '2023-01-26 15:20:00', 'true', 0, 0, 0),
(4, 'Financial Accounting Vol.3', 'Valix Conrado T.', '2017 C.M. Recto Manila Phillippines', 'This volume is written to conform the undergraduate course syllabus for financial accounting part-III as promulgated by the commission on higher educa', 'FIL HF 5635.135 2017', 8, 4, '319981331_1207240866557732_1657226140226127733_n.jpg', '319593667_1398390000972510_6607524916284618072_n.jpg', '319750870_1778100109243930_2505120424201799521_n.jpg', '250', '2023-01-25 13:11:29', 'true', 0, 0, 0),
(5, 'Applied Auditing', 'Ma. Elenita Balatbat Cabrera', '2017 C.M. Recto Avenue, Manila Phillippines', 'Text is designed for use by undergraduate auditing as well as by BSBA graduates who would like to review for the CPA licensure board examination who h', 'FIL HF 5667.C22 2014', 8, 4, '319877126_1177226942889932_8834518318547381609_n.jpg', '319799650_1553747648432635_3104142854955762812_n.jpg', '319812099_2153795088140060_5035007306601395100_n.jpg', '400', '2023-01-25 13:11:34', 'true', 10, 0, 0),
(6, 'Mathematics For Elementary teachers', 'Albert B. Bennett Jr.', 'JP Lenny', 'It was at the of michigan that Albert Bennett and L.Ted nelson and their families first met. Bennett and Nelson had been invited to participate in a N', 'CIR QA 39.2 B47 2001', 10, 3, '319907816_1291775431665956_275533501577274716_n.jpg', '319865223_2387495001419642_790666958850974734_n.jpg', '319871274_739623040362525_4710401637735858925_n.jpg', '400', '2023-01-25 13:11:37', 'true', 6, 0, 0),
(7, 'Introduction to computing system', 'Yale N. Patt / Janjay J. Patel', 'Mc-Graw-hill, on imprint of the Mcgrow-hill Company, Inc 1221 avenue of the ameracas, Newyork, NY, 10020', 'This textbook has volved from EECS 100, the first computing course for computer science engineering, and electrical engineering Major at the universit', 'CIR QA 76 P36 2001', 10, 3, '319848047_1476001886221813_6985251986574243259_n.jpg', '318951836_538180691542786_802491079286895751_n.jpg', '319401908_719805792816650_1628974001575355106_n.jpg', '200', '2023-01-25 13:11:41', 'true', 0, 0, 0),
(9, 'Introduction to Special Education', 'Adelaida G. Gines', '856 Micanor Reyes, Sr. St.', 'The continuum of learness indicates that in any given, majority of the children have average intellectual ability, while a smaller number either belon', 'FIL LC 3965. 158 2007', 7, 6, '318657941_3281604685436246_3810025648978677241_n.jpg', '319982652_687025366208628_1698001112233080470_n.jpg', '319877685_930245507958558_6846715704172119155_n.jpg', '300', '2023-01-25 13:11:44', 'true', 5, 0, 0),
(11, 'Java 2', 'Glass, Griscti, Isayeva, Kallambella, Siera', '2002 Brandon Nordin NYC.', 'Information has been obtained by Osborne Mc Graw-hill from source believe to be reliable.', 'CIR QA 76.3 J38 2001', 10, 3, '319924950_884948426209614_1698873799116967302_n.jpg', '319868150_1384708215397011_4614689463511860777_n.jpg', '319737072_3391488507773671_6625088565201732228_n.jpg', '370', '2023-01-25 13:11:46', 'true', 8, 0, 0),
(12, 'Facilitating Learning: A Metacognitive Process', 'Lucas, Maria Rita D.', 'LORIMAR Publishing Inc.', 'This 4th edition of facilitating learning is a response to the need for outcomes based instructional material for (anoTL)', 'FIL LB 1060. L83 2014 C.1', 7, 6, '318597906_1790713471285957_7060916368731214767_n.jpg', '319322805_862444724908296_7533705846722444660_n.jpg', '319040411_549631510349873_4249434668641753757_n.jpg', '280', '2023-01-25 13:11:49', 'true', 1, 0, 0),
(13, 'Educational Technology', 'Brenda B. Corpuz Ph. D.', 'LOLIMAR Publishing, INC. 776 Aurora Blnd,. Cor. Boston Street, Cubao Quezon', 'Setting new benchmarks for teacher education is no mean task this is so in the instance of project write (Writing resources for inovatice teacher Educ', 'FIL LB 1028.3 2012', 10, 6, '319683663_823549892268865_6130768194933281382_n.jpg', '318588563_559718842232000_8376314411909091440_n.jpg', '318624885_473638761373846_9140780433743533920_n.jpg', '370', '2023-01-25 13:11:54', 'true', 7, 0, 0),
(14, 'Social Dimension of Education', 'Aniceta Manuela Ortiner', 'C and E Publishing, Inc. 2011', 'Reference textbook on the social dimensions of education is not only along-left need in but also an imperative partner of the teacher.', 'FIL LB 14.7 M35 2011', 7, 6, '318952483_1344462806365640_3791204647716293449_n.jpg', '319425062_1516761485456972_967792236236148614_n.jpg', '320498333_1601150836989764_104834432153095131_n.jpg', '470', '2023-01-25 13:11:52', 'true', 0, 0, 0),
(15, 'Principle of Teaching', 'Corpuz L. Salandanan', 'Lorimar Publishing, Inc. Manila 2011', 'This book is meant for the course in principle of teaching 1, the first course (of two courses) in principle of teaching in the new teacher education ', 'FIL LB 1085.4 M.2 2011', 7, 5, '320227744_629395132275317_4461079612338110216_n.jpg', '318897681_1743389696034999_3650689112437926067_n.jpg', '319393057_683165640196533_3211541373672308109_n.jpg', '370', '2023-01-25 13:11:57', 'true', 0, 0, 0),
(16, 'sample', 'sample', 'sample', '<p>sasas</p>', '1131-JADG-923131', 1, 1, '1674749479.png', '', '', '311', '2023-01-27 03:08:09', NULL, 3, 0, 1);

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
  `cartRECIEVED` varchar(10000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cartID`, `accountID`, `itemID`, `cartCOUNT`, `orderID`, `cartDATE`, `cartSTATUS`, `cartPENDING`, `cartACCEPTED`, `cartDELIVERY`, `cartRECIEVED`) VALUES
(43, 2, 2, '1', 'RPD-LRC012520230803', 'January 25, 2023 08:02:39pm', '6', 'January 25, 2023 08:02:39pm', NULL, NULL, 'January 25, 2023 08:31:39pm'),
(44, 2, 2, '1', 'RPD-LRC012520230833-2', 'January 25, 2023 08:33:42pm', '5', 'January 25, 2023 08:33:42pm', 'January 25, 2023 11:58:40pm', 'January 26, 2023 12:43:49am', 'January 26, 2023 11:42:47pm'),
(45, 2, 2, '1', 'RPD-LRC012520230837', 'January 25, 2023 08:37:18pm', '7', 'January 25, 2023 08:37:18pm', NULL, NULL, 'January 26, 2023 11:47:49pm'),
(48, 2, 1, '2', 'RPD-LRC012620231124-2', 'January 26, 2023 11:24:03pm', '7', 'January 26, 2023 11:24:03pm', 'January 26, 2023 11:25:04pm', 'January 26, 2023 11:44:29pm', 'January 26, 2023 11:50:59pm'),
(49, 2, 2, '1', 'RPD-LRC012620231124', 'January 26, 2023 11:24:09pm', '2', 'January 26, 2023 11:24:09pm', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `categoryID` int(100) NOT NULL,
  `categoryNAME` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`categoryID`, `categoryNAME`) VALUES
(1, 'PERIODICAL SECTIONS'),
(2, 'REFERENCE SECTION'),
(3, 'CIRCULATION SECTION'),
(4, 'NATURAL AND HEALTH SCIENCES'),
(5, 'FILIPINIANA SECTION'),
(6, 'ENGINEERING AND ARCHITECTURE'),
(7, 'LIBERAL ARTS AND EDUCATION'),
(8, 'BUSINESS ADMINISTRATION AND ACCOUNTANCY'),
(10, 'INFORMATION TECHNOLOGY');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`chatID`, `accountID`, `adminID`, `chatPOS`, `chatDATE`, `chatDES`) VALUES
(1, 2, 0, 'right', '2023-02-09 03:58:50', 'Hello, librarian!'),
(2, 2, 0, 'left', '2023-02-09 04:01:35', 'Hello'),
(3, 2, 0, 'right', '2023-02-09 04:03:28', 'When is your open day?'),
(4, 3, 0, 'right', '2023-02-09 04:14:13', 'Hi'),
(5, 2, 0, 'left', '2023-02-09 04:53:45', 'Mon - Fri'),
(6, 2, 0, 'left', '2023-02-09 04:55:07', '8am to 5pm');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `courseID` int(100) NOT NULL,
  `courseNAME` varchar(1000) DEFAULT NULL,
  `courseRECOMMENDATION` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`courseID`, `courseNAME`, `courseRECOMMENDATION`) VALUES
(1, 'Bachelor of Science Information and Technology', 'CITE, INFORMATION TECHNOLOGY, none,');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `department_id` int(11) NOT NULL,
  `department_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`department_id`, `department_name`) VALUES
(1, 'CAS'),
(2, 'CEA'),
(3, 'CITE'),
(4, 'CMA'),
(5, 'SCCJ'),
(6, 'COED'),
(7, 'NUR'),
(8, 'CRI');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `missing`
--

INSERT INTO `missing` (`missingID`, `missingCART`, `missingAMOUNT`, `missingACCOUNT`, `missingDATE`) VALUES
(3, 'RPD-LRC012520230837', '500', 2, 'January 26, 2023 11:47:49pm'),
(4, 'RPD-LRC012620231124-2', '600', 2, 'January 26, 2023 11:50:59pm');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`notificationID`, `notificationCLIENTID`, `notificationMESSAGE`, `notificationDATE`, `notificationCLIENTTYPE`) VALUES
(28, '2', 'Your Transaction IDRPD-LRC012520230837is change the status by you to Book Cancelled!', 'January 25, 2023 08:59:04pm', 'customer'),
(29, '2', 'Your Book nameBusiness Ethics Ethical Decision Making and Casesis Accepted by the!', 'January 25, 2023 11:58:40pm', 'customer'),
(30, '2', 'Your order IDRPD-LRC012520230833-2is change the status by seller from accepted to Delivery!', 'January 26, 2023 12:43:49am', 'customer'),
(31, '2', 'Your Transaction IDRPD-LRC012520230833-2is change the status by Librarian from Borrowed to Returned!', 'January 26, 2023 01:51:08am', 'customer'),
(32, '2', 'Your Book nameSales, Agency and Credit Transactionis Accepted by the!', 'January 26, 2023 11:25:04pm', 'customer'),
(33, '2', 'Your Transaction IDRPD-LRC012520230833-2is change the status by Librarian from Borrowed to Missing!', 'January 26, 2023 11:42:47pm', 'customer'),
(34, '2', 'Your Transaction IDRPD-LRC012620231124-2is change the status bySample Bookeeper from accepted to Delivery!', 'January 26, 2023 11:44:29pm', 'customer'),
(35, '2', 'Your Transaction IDRPD-LRC012620231124-2is change the status by Librarian from Borrowed to Missing!', 'January 26, 2023 11:44:38pm', 'customer'),
(36, '2', 'Your Transaction IDRPD-LRC012520230837is change the status by Librarian from Borrowed to Missing!', 'January 26, 2023 11:47:49pm', 'customer'),
(37, '2', 'Your Transaction IDRPD-LRC012620231124-2is change the status by Librarian from Borrowed to Missing!', 'January 26, 2023 11:50:59pm', 'customer');

-- --------------------------------------------------------

--
-- Table structure for table `orderstatus`
--

CREATE TABLE `orderstatus` (
  `orderstatusID` int(100) NOT NULL,
  `orderstatusDES` varchar(100) NOT NULL,
  `orderCODE` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`sellerID`, `sellername`, `selleruser`, `sellerpass`, `sellerimage`, `sellerlatitude`, `sellerlongitude`, `sellermobilenumber`, `sellerdatecreated`, `selleremail`, `sellerSTATUS`, `selleraddress`) VALUES
(1, 'Sample Bookeeper', 'sample', 'sample', 'null.png', '14.441205135764736', '120.95681726932526', '+6399276868791', 'August 1, 2022', 'issiehyodo110@gmail.com', 'active', NULL);

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
  MODIFY `accountID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `activitylog`
--
ALTER TABLE `activitylog`
  MODIFY `activitylogID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=153;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cartID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `categoryID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `chatID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `courseID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `department_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `itemID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `missing`
--
ALTER TABLE `missing`
  MODIFY `missingID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `notificationID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

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
  MODIFY `sellerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
