-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2016 at 07:18 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `neub_news`
--

-- --------------------------------------------------------

--
-- Table structure for table `all_news`
--

CREATE TABLE IF NOT EXISTS `all_news` (
`id` int(11) NOT NULL,
  `news_title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `cat_id` int(11) NOT NULL,
  `images` varchar(255) NOT NULL,
  `type_id` int(11) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `all_news`
--

INSERT INTO `all_news` (`id`, `news_title`, `description`, `cat_id`, `images`, `type_id`, `date`) VALUES
(1, 'what really is part of HTML 5? If', '<p>So, what really is part of HTML 5? If you read the specification carefully, you might not find all of the features we describe in this book. For example, you will not find Geolocation and Web Workers in there. So are we just making this stuff up? Is it all hype? No, not at all! Many pieces of the HTML5 effort were originally part of the HTML5 specification and were then moved to separate standards documents to keep the specification focused. It was considered smarter to discuss and edit some of these features on a separate track before making them into official specifications.</p>', 1, '17952.jpg', 4, '2016-01-04 00:00:00'),
(2, 'Headline ', '<p>So, what really is part of HTML 5? If you read the specification carefully, you might not find all of the features we describe in this book. For example, you will not find Geolocation and Web Workers in there. So are we just making this stuff up? Is it all hype? No, not at all! Many pieces of the HTML5 effort were originally part of the HTML5 specification and were then moved to separate standards documents to keep the specification focused. It was considered smarter to discuss and edit some of these features on a separate track before making them into official specifications.</p>', 4, '17952.jpg', 4, '2016-01-04 00:00:00'),
(3, 'HEADLINE', '<p>So, what really is part of HTML 5? If you read the specification carefully, you might not find all of the features we describe in this book. For example, you will not find Geolocation and Web Workers in there. So are we just making this stuff up? Is it all hype? No, not at all! Many pieces of the HTML5 effort were originally part of the HTML5 specification and were then moved to separate standards documents to keep the specification focused. It was considered smarter to discuss and edit some of these features on a separate track before making them into official specifications.</p>', 2, '17952.jpg', 3, '2016-01-04 00:00:00'),
(4, 'H22', '<p>So, what really is part of HTML 4? If you read the specification carefully, you might not find all of the features we describe in this book. For example, you will not find Geolocation and Web Workers in there. So are we just making this stuff up? Is it all hype? No, not at all! Many pieces of the HTML5 effort were originally part of the HTML5 So, whatSo, what really is part of HTML 5? If you read the specification carefully, you might not find all of the features we describe in this book. For example, you will not find Geolocation and Web Workers in there. So are we just making this stuff up? Is it all hype? No, not at all! Many pieces of the HTML5 effort were originally part of the HTML5 sp really is part of HTML 5? If you read the specification carefully, you might not find all of the features we describe in this book. For example, you will not find Geolocation and Web Workers in there. So are we just making this stuff up? Is it all hype? No, not at all! Many pieces of the HTML5 effort were originally part of the HTML5 spspecification and were then moved to separate standards documents to keep the specification focused. It was considered smarter to discuss and edit some of these features on a separate track before making them into official specifications.</p>', 3, '1792.jpg', 1, '2016-01-04 00:00:00'),
(5, 'date time', '<p>So, what really is part of HTML 3? If you read the specification carefully, you might not find all of the features we describe in this book. For example, you will not find Geolocation and Web Workers in there. So are we just making this stuff up? Is it all hype? No, not at all! Many pieces of the HTML5 effort were originally part of the HTML5 So, whatSo, what really is part of HTML 5? If you read the specification carefully, you might not find all of the features we describe in this book. For example, you will not find Geolocation and Web Workers in there. So are we just making this stuff up? Is it all hype? No, not at all! Many pieces of the HTML5 effort were originally part of the HTML5 sp really is part of HTML 5? If you read the specification carefully, you might not find all of the features we describe in this book. For example, you will not find Geolocation and Web Workers in there. So are we just making this stuff up? Is it all hype? No, not at all! Many pieces of the HTML5 effort were originally part of the HTML5 spspecification and were then moved to separate standards documents to keep the specification focused. It was considered smarter to discuss and edit some of these features on a separate track before making them into official specifications.</p>', 1, '2812.jpg', 4, '2016-01-08 00:00:00'),
(9, 'HEADLINE', '<p>So, what really is part of HTML 2? If you read the specification carefully, you might not find all of the features we describe in this book. For example, you will not find Geolocation and Web Workers in there. So are we just making this stuff up? Is it all hype? No, not at all! Many pieces of the HTML5 effort were originally part of the HTML5 So, whatSo, what really is part of HTML 5? If you read the specification carefully, you might not find all of the features we describe in this book. For example, you will not find Geolocation and Web Workers in there. So are we just making this stuff up? Is it all hype? No, not at all! Many pieces of the HTML5 effort were originally part of the HTML5 sp really is part of HTML 5? If you read the specification carefully, you might not find all of the features we describe in this book. For example, you will not find Geolocation and Web Workers in there. So are we just making this stuff up? Is it all hype? No, not at all! Many pieces of the HTML5 effort were originally part of the HTML5 spspecification and were then moved to separate standards documents to keep the specification focused. It was considered smarter to discuss and edit some of these features on a separate track before making them into official specifications.</p>', 2, '9605.jpg', 4, '2016-01-08 13:59:47'),
(11, 'So, what really is part of H', '<p>So, what really is part of HTML 1? If you read the specification carefully, you might not find all of the features we describe in this book. For example, you will not find Geolocation and Web Workers in there. So are we just making this stuff up? Is it all hype? No, not at all! Many pieces of the HTML5 effort were originally part of the HTML5 So, whatSo, what really is part of HTML 5? If you read the specification carefully, you might not find all of the features we describe in this book. For example, you will not find Geolocation and Web Workers in there. So are we just making this stuff up? Is it all hype? No, not at all! Many pieces of the HTML5 effort were originally part of the HTML5 sp really is part of HTML 5? If you read the specification carefully, you might not find all of the features we describe in this book. For example, you will not find Geolocation and Web Workers in there. So are we just making this stuff up? Is it all hype? No, not at all! Many pieces of the HTML5 effort were originally part of the HTML5 spspecification and were then moved to separate standards documents to keep the specification focused. It was considered smarter to discuss and edit some of these features on a separate track before making them into official specifications.</p>', 4, '19256.jpg', 4, '2016-01-08 14:06:27'),
(12, 'So, what really is part of HTML 4? If you read the specification carefully, you might not find all of the featu', '<p>So, what really is part of HTML 1? If you read the specification carefully, you might not find all of the features we describe in this book. For example, you will not find Geolocation and Web Workers in there. So are we just making this stuff up? Is it all hype? No, not at all! Many pieces of the HTML5 effort were originally part of the HTML5 So, whatSo, what really is part of HTML 5? If you read the specification carefully, you might not find all of the features we describe in this book. For example, you will not find Geolocation and Web Workers in there. So are we just making this stuff up? Is it all hype? No, not at all! Many pieces of the HTML5 effort were originally part of the HTML5 sp really is part of HTML 5? If you read the specification carefully, you might not find all of the features we describe in this book. For example, you will not find Geolocation and Web Workers in there. So are we just making this stuff up? Is it all hype? No, not at all! Many pieces of the HTML5 effort were originally part of the HTML5 spspecification and were then moved to separate standards documents to keep the specification focused. It was considered smarter to discuss and edit some of these features on a separate track before making them into official specifications.</p>', 1, '17952.jpg', 4, '2016-01-08 20:22:12'),
(22, 'ICT', '<p>kfldkflds dlfkdslkf dfhdskjhf</p>\r\n', 3, '22943.jpg', 2, '2016-01-11 06:55:18'),
(43, 'hokokk', '<p>fsdfkjsdfjksd</p>\n', 3, '31208.jpg', 0, '2016-08-23 12:48:00'),
(44, 'image', '<p>dfdjhdgfjhd</p>\n', 2, '18433.jpg', 0, '2016-08-23 12:51:30'),
(45, 'image ', '<p>cksdkjhsdkjksdbcsdbv</p>\n', 3, '19867.jpg', 0, '2016-08-23 12:55:13'),
(46, 'bdbc', '<p>cdnmnc</p>\n', 2, '24101.jpg', 0, '2016-08-23 12:57:22'),
(47, 'fkjdhdh', '<p>dfnksdjnfkjdsnfksdnfksnd</p>\n', 1, '19910.jpg', 0, '2016-08-23 13:06:51'),
(48, 'ok ', '<p>go</p>\n', 3, '8028.jpg', 0, '2016-08-23 13:11:21'),
(49, 'guouit', '<p>uoytuyuy</p>\n', 1, '6939.jpg', 0, '2016-08-24 08:04:25');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
`cat_id` int(11) NOT NULL,
  `cat_name` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`) VALUES
(1, 'CULTURAL'),
(2, 'SPORTS'),
(3, 'ICT'),
(4, 'FACULTY');

-- --------------------------------------------------------

--
-- Table structure for table `news_type`
--

CREATE TABLE IF NOT EXISTS `news_type` (
`type_id` int(11) NOT NULL,
  `type_name` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news_type`
--

INSERT INTO `news_type` (`type_id`, `type_name`) VALUES
(0, 'All News'),
(1, 'Headline'),
(4, 'Breaking');

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE IF NOT EXISTS `notices` (
`id` int(11) NOT NULL,
  `note` text NOT NULL,
  `notices_time` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`id`, `note`, `notices_time`) VALUES
(24, 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '2016-08-22 10:17:27'),
(27, 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it hasIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has', '2016-08-22 10:15:30'),
(28, 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem IpIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it hassum is that it has', '2016-08-22 10:15:38'),
(30, 'It is a long established fact that a reader will be distracted by the 								', '2016-08-22 12:19:07'),
(31, 'hello', '2016-08-23 11:43:45'),
(32, 'It is a long established fact that a reader will be distracted by the 	', '2016-08-23 12:20:42'),
(33, 'testingmmmmmm', '2016-08-24 08:01:11');

-- --------------------------------------------------------

--
-- Table structure for table `n_admin`
--

CREATE TABLE IF NOT EXISTS `n_admin` (
`ad_id` int(11) NOT NULL,
  `ad_name` varchar(255) NOT NULL,
  `ad_pass` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `n_admin`
--

INSERT INTO `n_admin` (`ad_id`, `ad_name`, `ad_pass`) VALUES
(1, 'admin@mail.com', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `all_news`
--
ALTER TABLE `all_news`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
 ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `news_type`
--
ALTER TABLE `news_type`
 ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `n_admin`
--
ALTER TABLE `n_admin`
 ADD PRIMARY KEY (`ad_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `all_news`
--
ALTER TABLE `all_news`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `news_type`
--
ALTER TABLE `news_type`
MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `n_admin`
--
ALTER TABLE `n_admin`
MODIFY `ad_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
