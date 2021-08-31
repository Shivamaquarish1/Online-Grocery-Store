-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 28, 2020 at 02:22 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `grocery_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `cat_id` int(4) NOT NULL AUTO_INCREMENT,
  `cat_nm` varchar(30) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_nm`) VALUES
(1, 'FRUITS'),
(2, 'VEGETABLES'),
(3, 'CEREALS'),
(4, 'MILKPRODUCTS'),
(5, 'NONVEG'),
(6, 'DRY-FRUITS'),
(7, 'SPICES');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `con_id` int(4) NOT NULL AUTO_INCREMENT,
  `con_nm` varchar(25) NOT NULL,
  `con_email` varchar(35) NOT NULL,
  `con_query` longtext NOT NULL,
  PRIMARY KEY (`con_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`con_id`, `con_nm`, `con_email`, `con_query`) VALUES
(1, 'AMAN KHANNA', 'aman8941839942@gmail.com', 'I would be pleased if you could provide me leftover groceries.'),
(2, 'shivam pandey', 'shivam@gmail.com', 'can you provide me uncut chicken?'),
(3, 'Nirali', 'n999@gmail.com', 'i am diabetic which food should i intake'),
(4, 'manish', 'manish321@gmail.com', 'i am allegic to nonveg food but i need to get protien which food should i take'),
(5, 'nikhil', 'nikhil213@gmail.com', 'i need food for bodybuilding at low buget what should i intake');

-- --------------------------------------------------------

--
-- Table structure for table `grocery`
--

CREATE TABLE IF NOT EXISTS `grocery` (
  `b_id` int(4) NOT NULL AUTO_INCREMENT,
  `b_nm` varchar(60) NOT NULL,
  `b_subcat` varchar(25) NOT NULL,
  `b_desc` longtext NOT NULL,
  `b_supplier` varchar(40) NOT NULL,
  `s_unm` varchar(20) NOT NULL,
  `b_toe` varchar(20) NOT NULL,
  `b_isbn` varchar(10) NOT NULL,
  `b_price` int(5) NOT NULL,
  `b_img` longtext NOT NULL,
  PRIMARY KEY (`b_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=51 ;

--
-- Dumping data for table `grocery`
--

INSERT INTO `grocery` (`b_id`, `b_nm`, `b_subcat`, `b_desc`, `b_supplier`, `s_unm`, `b_toe`, `b_isbn`, `b_price`, `b_img`) VALUES
(1, 'ORANGES', '1', 'GOOD FOR HEALTH', 'BIDROHI FRIUTS & LTD', 'BID99', '1 WEEK', 'ORBO52', 60, 'upload_image/orange.jpeg'),
(2, 'APPLE', '1', 'APPLE A DAY KEEPS DOCTOR AWAY.', 'BIDROHI FRIUTS & LTD', 'BID99', '10 DAYS', 'AP101', 160, 'upload_image/arc8.jpg'),
(3, 'GUARD', '2', 'GOOD FOR SKIN AND IS GODD VEGETABLE WITH PROPER NUTRIENTS. \r\n', 'FAIZAL VEGETABLES & LTD', '', '1 WEEK', 'GD9909', 20, 'upload_image/guard.jpeg'),
(4, 'STRAWBERRY', '1', 'GOOD FOR EYESIGHTS', 'BIDROHI FRIUTS & LTD', 'BID99', '3 DAYS', 'STR99', 80, 'upload_image/STRAW.jfif'),
(5, 'CHICKEN', '5', 'CHICKEN IS THE MOST COMMON TYPE OF POULTRY IN THE WORLD.\r\nPROTEIN : 24.68/G\r\nFAT : 12.56/G\r\nENERGY : 916KJ(219KCAL) ', 'SULTAN COMPANY & LTD', '', '3 DAYS', 'CHC219', 220, 'upload_image/ck.jpg'),
(10, 'CHOCOS FILL', '3', 'MORNING AND EVENING SNACKS..', 'MANJI CEREALS & LTD', '', '3 MONTH', 'CHC192', 40, 'upload_image/CHOC.jpg'),
(11, 'OATS', '3', 'HEALTHY SNACK FOR MORNING AND EVENING TIME', 'MANJI CEREALS & LTD', '', '3 MONTH', 'OT991', 80, 'upload_image/OAT.jpg'),
(12, 'RED CHILLI POWDER', '7', 'MADE FROM ORGANIC RED CHILLI NO FLAVOURS AND COLUR ADDED\r\nPURE RED CHILLI POWDER FOR GOOD TASTE AND COLOR', 'TRIVEDI SPICES & LTD', 'TRI25', '6 MONTH', 'RC99', 40, 'upload_image/RED.jpg'),
(13, 'TUMERIC', '7', 'ORGANIC TURMERIC FOR GOOD TASTE AND COLOR\r\nPROVRIDE GOOD HEALING FEATURES\r\n', 'TRIVEDI SPICES & LTD', 'TRI25', '6 MONTH', 'TRM875', 36, 'upload_image/TURMERIC.jpg'),
(14, 'CUMIN POWDER', '7', 'ORGANIC CUMIN GRINDED FOR POWDER.', 'TRIVEDI SPICES & LTD', 'TRI25', '6 MONTH', 'CMN462', 45, 'upload_image/CUMIN.jpg'),
(6, 'CURD', '4', 'better for health', 'BUNTY MILK & LTD', 'BUNTY1980', '3 DAYS', 'CRD991', 60, 'upload_image/curd.jpeg'),
(7, 'PANEER', '4', 'uses to add taste to food', 'BUNTY MILK & LTD', 'BUNTY1980', '5 DAYS', 'PN522', 280, 'upload_image/paneer.jpg'),
(8, 'ONION', '2', 'MOSTLY CULTIVATED VEGETABLE.\r\nSPECIES OF GENUS ALLIUM.', 'FAIZAL VEGETABLES & LTD', '', '2 WEEK', 'ONI992', 18, 'upload_image/onion.jpg'),
(9, 'OKRA', '2', 'OKRA IS ALSO KNOWN AS LADIESFINGER.\r\nIT IS A FLOWERING PLANT IN THE MALLOW FAMILY.', 'FAIZAL VEGETABLES & LTD', '', '4 DAYS', 'OKR762', 30, 'upload_image/ladyf.jpg'),
(15, 'ALMONDS', '6', 'GOOD FOR EYES AND BRAIN.\r\nHANDPICKED ALMONDS FROM VALLEY OF KASHMIR.', 'RAFTR DFRIUTS & LTD', '', '10 MONTHS', 'ALD65', 600, 'upload_image/ALMOND.jpg'),
(16, 'WALNUTS', '6', 'FRESH AND GOOD QUALITY WALNUTS..\r\nGOOD FOR EYESIGHT.', 'RAFTR DFRIUTS & LTD', '', '10 MONTHS', 'WAL632', 650, 'upload_image/WALNUT.jpg'),
(17, 'GRAPES', '1', 'A GRAPE IS FRUIT, BOTANICALLY A BERRY, OF THE DECIDIOUS WOODY VINES OF THE FLOWERING PLANT GENUS VITIS. GRAPES CAN BE EATEN FRESH AS TABLE GRAPES OR THEY CAN BE USED FOR MAKING WINE, JAM, JELLY, RAISINS AND JUICE.', 'BIROHI FRUITS & LTD', 'BID99', '1 WEEK', 'GP764', 100, 'upload_image/grapes.jfif'),
(18, 'MANGO', '1', 'MANGOES ARE JUICY STONE FRUITS FROM NUMEROUS SPECIES OF TROPICAL TREES BELONGING TO THE FLOWERING PLANT GENUS MANGIFERA, CULTIVATED MOSTLY FOR THEIR EDIBLE FRUITS.', 'BIDROHI FRUITS & LTD', 'BID99', '5 DAYS', 'MNG587', 80, 'upload_image/mango.jfif'),
(19, 'WATERMELON', '1', 'CITRULLUS LANATUS IS APLANT SPECIES IN THE FAMILY CUCURBITACEAE, A VINE LIKE FLOWERING PLANT ORIGINATING IN WEST AFRICA. IT IS CULTIVATED FOR ITS FRUITS.', 'BIROHI FRUITS & LTD', 'BID99', '2-3 WEEK', 'WMLN892', 30, 'upload_image/watermelon.jfif'),
(20, 'EGGPLANT', '2', 'EGGPLANT, AUBERGINE, OR BRINJAL IS A PLANT SPECIES IN THE NIGHTSHADE FAMILY SOLANACEAE, SOLANUM MELONGENA, GROWN FOR ITS OFTEN PURPLE EDIBLE FRUITS.', 'FAIZAL VEGETABLES & LTD', '', '1 WEEK', 'BRJ994', 40, 'upload_image/eggplant.jfif'),
(21, 'POTATO', '2', 'THE POTATO IS A STARCHY, TUBEROUS CROP FROM THE PERENNIAL NIGHTSHADE SOLANUM TUBEROSUM. IN MANY CONTEXTS, POTATO REFERS TO EDIBLE TUBER, BUT IT CAN REFER TO PLANT ITSELF.', 'FAIZAL VEGETABLES & LTD', '', '1 WEEK', 'PT574', 20, 'upload_image/potato.jfif'),
(22, 'TOMATO', '2', 'THE TOMATO IS THE EDIBLE, OFTEN RED, BERRY OF THE PLANT SOLANUM LYCOPERSICUM, COMMNLY KNOWN AS  A TOMATO PLANT. THE SPECIES ORIGINATED IN SOUTH WESTERN AMERICA.', 'FAIZAL VEGETABLES & LTD', '', '1 WEEK', 'TMT254', 22, 'upload_image/tomato.jfif'),
(23, 'CORNFLAKES', '3', ' CORN FLAKES ARE A BREAKFAST CEREAL MADE BY TOASTING FLAKES OF CORN. THE CEREAL WAS CREATED BY JOHN HARVEY KELLOG IN 1894 AS A FOOD THAT HE THOUGHT WOULD BE HEALTHY FOR THE PAITENTS OF THE BATTLE CREEK', 'MANJI CEREALS & LYD', '', '3-4 MONTHS', 'CRN429', 280, 'upload_image/cornflakes.jfif'),
(24, 'DHALIYA', '3', 'WHEAT DHALIYA IS FIBRE RICH. REGULAR USE OF DHALIYA IS GOOD FOR RELIEVING MANY ALIMENTS LIKE CONSTIPATION, DIABETES, BLOOD PRESSURE, AND HEART DISEASES.', 'MANJI CEREALS & LTD', '', '2-3 MONTHS', 'DLH235', 120, 'upload_image/dhaliya.jfif'),
(25, 'CHEESE', '4', 'CHEESE IS A DAIRY PRODUCTS DERIVED FROM MILK THAT IS PRODUCED IN A WIDE RANGE OF FLAVORS, TEXTURES, AND FORMS BY COAGULATION OF MILK PROTIEN CASEIN.', 'BUNTY MILK & LTD', 'BUNTY1980', '1-2 WEEK', 'CHS735', 80, 'upload_image/cheese.jfif'),
(26, 'LASSI', '4', 'LASSI IA POPULAR TRADITIONAL DAHI-BASED DRINK THAT ORIGINATED IN THE INDIAN SUBCONTINENT. LASSI IS A BLEND OF YOGURT, WATER, SPICES AND SOMETIMES FRUITS.', 'BUNTY MILK & LTD', 'BUNTY1980', '1-2 DAYS', 'LSS152', 15, 'upload_image/lassi.jfif'),
(27, 'EGG', '5', 'EGG HAS THE SEVEN HIGHEST CHOLESTROL CONTENTS(373MG PER 100 GRAMS) AMONG ALL FOODS. AND IT DOESNOT CONTAIN CARBS OR SUGAR.\r\nCALORIES : 155', 'SULTAN COMPANY & LTD', '', '1-2 WEEK', 'EGG4323', 4, 'upload_image/egg.jfif'),
(28, 'RAISIN', '6', 'A RAISIN IS A DRY GRAPE. RAISINS ARE PRODUCED IN MANY REGIONS IOF THE WORLD AND MAY BE EATEN RAW OR USED IN COOKING, BAKING AND BREWING OF FOOD.', 'RFTR DFRUITS & LTD', '', '5-6 MONTHS', 'RSN332', 700, 'upload_image/raisin.jfif'),
(29, 'PEANUT', '6', 'THE PEANUT IS ALSO KNOWN AS GROUNDNUT, GOOBER OR MONKEY NUT AND CLASSIFIED AS ARACHIS HYPOGAEA, IS A LEGUME CROP GROWN MAINLY FOR ITS EDIBLE SEEDS. IT IS WIDELY GROWN IN TROPIC AND SUB-TROPIC AREAS.', 'RFTR DFRUITS & LTD', '', '5-6 MONTHS', 'PNT321', 150, 'upload_image/peanut.jfif'),
(30, 'CORAINDER POWDER', '7', 'CORAINDER, ALSO KNOWN AS CHINESE PARSLEY, THE STEM AND THE LEAVES OF WHICH ARE CALEED CILANTARO IN NORTH AMERICA, IS AN ANNUAL HERB IN THE FAMILY APIACEAE. ALL THE PARTS ARE EDIBLE BUT LEAVES AND DRIED SEEDS ARE MOST USED TRADITIONALY PART USED IN COOKING. IT BIS MADE FROM 100% ORGANIC CORAINDER SEEDS.\r\nENERGY : 22.71 CALORIES(PER 100 GM)', 'TRIVEDI SPICES & LTD', 'TRI25', '3-4 MONTHS', 'CRP295', 40, 'upload_image/corainder.jfif');

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE IF NOT EXISTS `seller` (
  `s_id` int(11) NOT NULL AUTO_INCREMENT,
  `s_fnm` varchar(20) NOT NULL,
  `s_unm` varchar(20) NOT NULL,
  `s_pwd` varchar(20) NOT NULL,
  `s_gender` varchar(20) NOT NULL,
  `s_email` varchar(20) NOT NULL,
  `s_contact` varchar(20) NOT NULL,
  `s_city` varchar(20) NOT NULL,
  `s_type` varchar(1) NOT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`s_id`, `s_fnm`, `s_unm`, `s_pwd`, `s_gender`, `s_email`, `s_contact`, `s_city`, `s_type`) VALUES
(1, 'Balwinder singh', 'BUNTY1980', '000000', 'Male', 'buntymc@gmail.com', '1001001001', 'SURAT', 's'),
(2, 'TRIVEDI RAJ', 'TRI25', '000000', 'MALE', 'tri26@gmailcom', '1001001001', 'maninagar', 's'),
(3, 'DEV BIDROHI', 'BID99', '000000', 'MALE', 'bid99@gmail.com', '10010001001', 'varacha', 's');

-- --------------------------------------------------------

--
-- Table structure for table `shipping_details`
--

CREATE TABLE IF NOT EXISTS `shipping_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` char(50) NOT NULL,
  `address` text NOT NULL,
  `postal_code` bigint(20) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `f_id` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `shipping_details`
--

INSERT INTO `shipping_details` (`id`, `name`, `address`, `postal_code`, `city`, `state`, `phone`, `f_id`) VALUES
(1, 'aman khanna', 'vesu,surat', 394518, 'surat', 'surat', 9426255499, 'aman khanna'),
(2, 'shivam pandey', ' pandesara, surat', 394618, 'surat', 'surat', 1001001001, 'shivam'),
(3, 'aman', ' surat', 0, 'surat', 'surat', 1000000000, '9125343325'),
(4, 'cgfgf', ' sgdg', 0, 'surat', 'surat', 10101011, '9125343325'),
(5, 'aman', ' DGDG', 121202, 'SYRAT', 'SURAT', 10101010, '9426255499'),
(6, 'AMAN KHANNA', ' B-18/42 ongc colony phase 2 magdalla, surat', 394518, 'surat', 'gujarat', 9426255499, '9426255499'),
(7, 'shivam pandey', ' pandesara', 20201, 'surat', 'surat', 9125343325, '9125343325'),
(8, 'aman', ' b-18/42 ongc colony', 394518, 'surat', 'gujarat', 9426255499, 'admin123'),
(9, 'shivang', ' akhaipur ambedkar nagar', 3694032, 'ambedkar nagar', 'utter predesh', 8601202815, '7572806426'),
(10, 'shivam pandey', ' akhaipur', 151515, 'ambedkarnagar', 'utter predesh', 7572806426, '7572806426'),
(11, 'priyanshu', ' abc nagar Faridabad,haryana', 222142415, 'delhi,faridabad', 'haryana', 7575757575, '7572806426'),
(12, 'vina', ' ahmedab', 201320, 'ah,edabad', 'gujarat', 9, '9125343325'),
(13, 'AMAN KHANNA', ' BBB  SHHSJSJ', 380008, 'MANINGAR', 'GUJARAT', 91253243325, '9426255499');

-- --------------------------------------------------------

--
-- Table structure for table `subcat`
--

CREATE TABLE IF NOT EXISTS `subcat` (
  `subcat_id` int(4) NOT NULL AUTO_INCREMENT,
  `parent_id` int(4) NOT NULL,
  `subcat_nm` varchar(35) NOT NULL,
  PRIMARY KEY (`subcat_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `subcat`
--

INSERT INTO `subcat` (`subcat_id`, `parent_id`, `subcat_nm`) VALUES
(1, 1, 'FRUITS'),
(2, 2, 'VEGETABLES'),
(3, 3, 'CEREALS'),
(4, 4, 'MILKPRODUCTS'),
(5, 5, 'NONVEG'),
(7, 7, 'SPICES'),
(6, 6, 'DRY-FRUITS');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `u_id` int(4) NOT NULL AUTO_INCREMENT,
  `u_fnm` varchar(35) NOT NULL,
  `u_unm` varchar(25) NOT NULL,
  `u_pwd` varchar(20) NOT NULL,
  `u_gender` varchar(7) NOT NULL,
  `u_email` varchar(35) NOT NULL,
  `u_contact` varchar(12) NOT NULL,
  `u_city` varchar(20) NOT NULL,
  `u_type` varchar(1) NOT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `u_fnm`, `u_unm`, `u_pwd`, `u_gender`, `u_email`, `u_contact`, `u_city`, `u_type`) VALUES
(1, 'AMAN KHANNA', 'TMC', '9426255499', 'Male', 'aman8941839942@gmail.com', '9426255499', 'surat', 'c'),
(2, 'shivam pandey', 'funty', '9125343325', 'Male', 'shivam@gmail.com', '9125343325', 'surat', 'c'),
(3, 'admin', 'admin', 'admin123', 'Male', 'admin@gmail.com', '1000000001', 'surat', 'a'),
(4, 'shivam sanjay', 'shivam', '7572806426', 'Male', 's@gmail.com', '75721000000', 'surat', 'c'),
(5, 'manish', 'mewada', 'mewada', 'Male', 'manish@gmail.com', '1001001001', 'pandesara', 'c'),
(6, 'nikhil', 'nik', 'nikhil', 'Male', 'n@gmail.com', '1001001001', 'SURAT', 'c'),
(7, 'am', 'bb', '000000', 'Male', 'amma@gmail.com', '9426255499', 'SURAT', 'c');
