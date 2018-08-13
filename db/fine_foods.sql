-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2018 at 12:03 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fine_foods`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_album`
--

CREATE TABLE `tbl_album` (
  `id` varchar(10) NOT NULL COMMENT 'PK',
  `category` varchar(255) NOT NULL,
  `album_name` varchar(255) NOT NULL,
  `album_cover` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_anualreport`
--

CREATE TABLE `tbl_anualreport` (
  `id` int(11) NOT NULL,
  `tittle` varchar(255) NOT NULL,
  `file_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_anualreport`
--

INSERT INTO `tbl_anualreport` (`id`, `tittle`, `file_name`) VALUES
(3, '2013-2014', ''),
(4, '2014-2015', '1526718384.pdf'),
(5, '2015-2016', '1526718396.pdf'),
(6, '2016-2017', '1526718410.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_article`
--

CREATE TABLE `tbl_article` (
  `id` int(10) NOT NULL COMMENT 'PK',
  `slug` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_article`
--

INSERT INTO `tbl_article` (`id`, `slug`, `title`, `details`) VALUES
(3, 'welcome-to-fine-foods-limited', 'Fine Foods Limited.', '<p><span style=\"color: rgb(34, 34, 34); font-family: Lato, sans-serif; font-size: 14px; text-align: justify;\">Fine Foods Limited started as a Public Limited Company (Agro based) in 2002 aiming to contribute to the local development through meeting the nutrition demand. It started its business activity by a Fish project in the village Mondolvog of Manikkhali UP Chandpur under PS Katiadi, District: Kishoregonj. Alongside its abundant production of common water fish and fingerling in the said project it gradually bloomed through production and marketing of fish feed, greens, cow, milk and trees of different species. Fine Foods Limited now has launched another fish project by purchasing lands in village Machera of Chandpur Union under PS Tarakanda, District: Mymensing.</span><br></p>');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_banners`
--

CREATE TABLE `tbl_banners` (
  `id` int(10) NOT NULL COMMENT 'PK',
  `title` varchar(255) NOT NULL,
  `file_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_banners`
--

INSERT INTO `tbl_banners` (`id`, `title`, `file_name`) VALUES
(9, 'as', '1525926688.jpg'),
(10, 'dfg', '1525926694.jpg'),
(11, 'gh', '1525926704.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id` int(11) NOT NULL,
  `tittle` varchar(255) NOT NULL,
  `file_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `tittle`, `file_name`) VALUES
(3, 'cow & others', '1525944454.jpg'),
(4, 'Fingerling', '1525944493.jpg'),
(5, 'Greens', '1525944512.jpg'),
(6, 'Fish & Fish Feed', '1525944596.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `id` tinyint(1) NOT NULL COMMENT 'PK',
  `company_name` varchar(255) NOT NULL,
  `mobile_no` varchar(255) NOT NULL,
  `phone_no` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `village` varchar(255) NOT NULL,
  `union` varchar(100) NOT NULL,
  `post_office` varchar(255) NOT NULL,
  `post` varchar(100) NOT NULL,
  `distict` varchar(100) NOT NULL,
  `r_mobile` varchar(255) NOT NULL,
  `m_address` varchar(255) NOT NULL,
  `f_address` varchar(255) NOT NULL,
  `hotline` varchar(255) NOT NULL,
  `tell` varchar(255) NOT NULL,
  `fax` varchar(100) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `googleplus` varchar(255) NOT NULL,
  `google_map` text NOT NULL,
  `logo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`id`, `company_name`, `mobile_no`, `phone_no`, `email`, `village`, `union`, `post_office`, `post`, `distict`, `r_mobile`, `m_address`, `f_address`, `hotline`, `tell`, `fax`, `facebook`, `twitter`, `googleplus`, `google_map`, `logo`) VALUES
(1, 'Fine Foods Limited', '01926-766469', '', 'info@finefoodsltd.com', 'Mondolvog', '4  No Chandpur', ' Manikkhali', 'Katiadi', 'Kishorgonj', '01672-475148', 'New market City Complex (Level -6)', '44/1 ,Rahim Square, New Market, Dhaka -1205', '+88-02-58614298', ' 9671320, 9667868 (ext.-199)', '88-02-9660354', 'http://www.facebook.com', 'http://www.twitter.com', 'http://www.google.com', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d465317.7936115975!2d90.6358760796997!3d24.336205403079287!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3756bd7d2a542a15%3A0x7c4e42ad0fc94226!2sKishoreganj+District!5e0!3m2!1sen!2sbd!4v1525932968885', 'logo1.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_corporateprofile`
--

CREATE TABLE `tbl_corporateprofile` (
  `id` int(11) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_corporateprofile`
--

INSERT INTO `tbl_corporateprofile` (`id`, `slug`, `category`, `name`, `designation`) VALUES
(1, '2', '2', 'fdrfg h', 'dfg n'),
(2, '2', '2', 'fdrfg', 'dfg'),
(3, '1', '1', 'fgg', 'fdgt'),
(7, 'board-of-directors', 'Board-of-Directors', 'MR. MIZANUR RAHMAN', 'CHAIRMAN'),
(8, 'board-of-directors', 'Board-of-Directors', 'MR. NAZRUL ISLAM', 'MANAGING DIRECTOR & CEO'),
(9, 'board-of-directors', 'Board-of-Directors', 'MR. MD. ALIMUL HASSAN', 'INDEPENDENT DIRECTOR'),
(10, 'board-of-directors', 'Board-of-Directors', 'MR. MD. SHAJAHAN SAJU', 'INDEPENDENT DIRECTOR'),
(11, 'board-of-directors', 'Board-of-Directors', 'MR. MD. HABIBUR RAHMAN', 'INDEPENDENT DIRECTOR'),
(12, '2', '2', 'MR. MD. SHAJAHAN SAJU', 'Chairman'),
(13, 'audit-commitee', 'Audit-Commitee', 'MR. NAZRUL ISLAM', 'Member'),
(14, 'audit-commitee', 'Audit-Commitee', 'MR. MD. HABIBUR RAHMAN', 'Member'),
(15, 'audit-commitee', 'Audit-Commitee', 'MR. MD. SOHEL HOSSAIN', 'Member'),
(16, 'audit-commitee', 'Audit-Commitee', 'MR. MD. SHAJAHAN SAJU', 'Chairman'),
(18, 'audit-cheif-financial-officer', 'Audit-cheif-Financial-officer', 'MD. ABDUL LATIF', 'officer'),
(19, 'company-secratery', 'Company-secratery', 'MD. SOHEL HOSSAIN', 'officer'),
(21, 'head-of-inter-audit', 'head-of-inter-audit', 'MD. SHAHINUR RAHMAN', 'autid'),
(22, 'head-of-inter-audit', 'head-of-inter-audit', 'MD. SHAHINUR RAHMAN', 'autid'),
(23, 'company-secratery', 'company-secratery', 'xcv', 'vcbg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_firstquater`
--

CREATE TABLE `tbl_firstquater` (
  `id` int(11) NOT NULL,
  `tittle` varchar(255) NOT NULL,
  `file_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_firstquater`
--

INSERT INTO `tbl_firstquater` (`id`, `tittle`, `file_name`) VALUES
(6, '2013-2014', '1526540096.jpg'),
(7, '2014-2015', '1526540105.jpg'),
(8, '2015-2016', '1526540114.jpg'),
(9, '2016-2017', '1526540126.jpg'),
(10, '2017-2018', '1526540139.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallery`
--

CREATE TABLE `tbl_gallery` (
  `id` varchar(10) NOT NULL COMMENT 'PK',
  `album_id` varchar(10) NOT NULL COMMENT 'FK',
  `title` varchar(255) NOT NULL,
  `file_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_halfyearly`
--

CREATE TABLE `tbl_halfyearly` (
  `id` int(11) NOT NULL,
  `tittle` varchar(255) NOT NULL,
  `file_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_halfyearly`
--

INSERT INTO `tbl_halfyearly` (`id`, `tittle`, `file_name`) VALUES
(2, '2013-2014', '1526547390.jpg'),
(3, '2013-2014', '1526547452.jpg'),
(4, '2013-2014', '1526547462.jpg'),
(5, '2013-2014', '1526547474.jpg'),
(6, '2014-2015', '1526547549.jpg'),
(7, '2014-2015', '1526547561.jpg'),
(8, '2014-2015', '1526547572.jpg'),
(9, '2014-2015', '1526547586.jpg'),
(10, '2015-2016', '1526547637.jpg'),
(11, '2015-2016', '1526547657.jpg'),
(12, '2015-2016', '1526547670.jpg'),
(13, '2015-2016', '1526547683.jpg'),
(14, '2015-2016', '1526547696.jpg'),
(15, '2016-2017', '1526547720.jpg'),
(16, '2016-2017', '1526547738.jpg'),
(17, '2016-2017', '1526547753.jpg'),
(18, '2017-2018', '1526547766.jpg'),
(19, '2017-2018', '1526547784.jpg'),
(20, '2017-2018', '1526547794.jpg'),
(21, '2017-2018', '1526547805.jpg'),
(22, '2017-2018', '1526547820.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_investorralation`
--

CREATE TABLE `tbl_investorralation` (
  `id` int(11) NOT NULL,
  `year` varchar(255) NOT NULL,
  `authorizedcapital` varchar(255) NOT NULL,
  `paidupcapital` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_investorralation`
--

INSERT INTO `tbl_investorralation` (`id`, `year`, `authorizedcapital`, `paidupcapital`) VALUES
(2, '2018', '2000000000000', '3652110000000'),
(3, '2014', '2000', '365211');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_massage`
--

CREATE TABLE `tbl_massage` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `file_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_massage`
--

INSERT INTO `tbl_massage` (`id`, `title`, `description`, `file_name`) VALUES
(4, 'Chairman Message', '<p><i style=\"margin: 0px; padding: 0px; outline: none; color: rgb(77, 77, 77); font-family: Lato, sans-serif; font-size: 14px; text-align: justify;\">Dear Fellow Shareholders,</i><br style=\"margin: 0px; padding: 0px; outline: none; color: rgb(77, 77, 77); font-family: Lato, sans-serif; font-size: 14px; text-align: justify;\"><br style=\"margin: 0px; padding: 0px; outline: none; color: rgb(77, 77, 77); font-family: Lato, sans-serif; font-size: 14px; text-align: justify;\"><span style=\"color: rgb(77, 77, 77); font-family: Lato, sans-serif; font-size: 14px; text-align: justify;\">We continued to work hard in to achieve solid results for you. Fine foods limited increased its focus on customers, leadership and talent, and being better organized to serve customers while reducing structural costs.</span><br style=\"margin: 0px; padding: 0px; outline: none; color: rgb(77, 77, 77); font-family: Lato, sans-serif; font-size: 14px; text-align: justify;\"><br style=\"margin: 0px; padding: 0px; outline: none; color: rgb(77, 77, 77); font-family: Lato, sans-serif; font-size: 14px; text-align: justify;\"><span style=\"color: rgb(77, 77, 77); font-family: Lato, sans-serif; font-size: 14px; text-align: justify;\">I would like to thank our Managing Director &amp; CEO Mr. Nazrul Islam, his leadership team and the thousands of stakeholders. I am truly privileged to work with this team, which brings commitment and enthusiasm to work each day – and carries it forward to enrich their communities.&nbsp;</span><br style=\"margin: 0px; padding: 0px; outline: none; color: rgb(77, 77, 77); font-family: Lato, sans-serif; font-size: 14px; text-align: justify;\"><br style=\"margin: 0px; padding: 0px; outline: none; color: rgb(77, 77, 77); font-family: Lato, sans-serif; font-size: 14px; text-align: justify;\"><span style=\"color: rgb(77, 77, 77); font-family: Lato, sans-serif; font-size: 14px; text-align: justify;\">And finally, thank you, shareholders, for your confidence in us, which helps fuel the momentum towards an ever brighter future for Fine Foods Limited.</span><br></p>', '1526443815.jpg'),
(6, 'MD Message', '<p><span style=\"color: rgb(77, 77, 77); font-family: Lato, sans-serif; font-size: 14px; text-align: justify;\">Heartiest congratulation and welcome to all shareholders and institutions including BSEC, DSE, CSE and our well-wishers on behalf of Fine Foods Limited.</span><br style=\"margin: 0px; padding: 0px; outline: none; color: rgb(77, 77, 77); font-family: Lato, sans-serif; font-size: 14px; text-align: justify;\"><br style=\"margin: 0px; padding: 0px; outline: none; color: rgb(77, 77, 77); font-family: Lato, sans-serif; font-size: 14px; text-align: justify;\"><span style=\"color: rgb(77, 77, 77); font-family: Lato, sans-serif; font-size: 14px; text-align: justify;\">Fine Foods Limited is now at a viable position after crossing a lot of hurdles from beginning its operation. In its struggle with environment adversity, this agro-company has continued its effort to leap ahead with success.</span><br style=\"margin: 0px; padding: 0px; outline: none; color: rgb(77, 77, 77); font-family: Lato, sans-serif; font-size: 14px; text-align: justify;\"><br style=\"margin: 0px; padding: 0px; outline: none; color: rgb(77, 77, 77); font-family: Lato, sans-serif; font-size: 14px; text-align: justify;\"><span style=\"color: rgb(77, 77, 77); font-family: Lato, sans-serif; font-size: 14px; text-align: justify;\">In its year of establishment as Public Limited Company in 2002, the company declared 20%, each Dividend. Then in 2005 cash 5% in 2008 cash and stock 5%, in 2009 stock 15%, in 2010 stock 25, in 2011 stock 10%, In 2012 stock 10%, in 2013 stock 2%, in 2016 stock 2% and in 2017 stock 2% Dividend was declared. But after long time this year 2014 and 2015 was declared no Dividend being the political instability and few important internal maintenance and repairing works at projects. You know, its business was commenced with one project and it has already started a new project. I strongly hope in the next years we must be succeeded.</span><br style=\"margin: 0px; padding: 0px; outline: none; color: rgb(77, 77, 77); font-family: Lato, sans-serif; font-size: 14px; text-align: justify;\"><br style=\"margin: 0px; padding: 0px; outline: none; color: rgb(77, 77, 77); font-family: Lato, sans-serif; font-size: 14px; text-align: justify;\"><span style=\"color: rgb(77, 77, 77); font-family: Lato, sans-serif; font-size: 14px; text-align: justify;\">I firmly believe that once Fine Foods Limited shall be established as a complete successful company of the country.</span><br></p>', '1526446517.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_news`
--

CREATE TABLE `tbl_news` (
  `id` int(10) NOT NULL COMMENT 'PK',
  `published_date` date NOT NULL,
  `slug` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `file_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tbl_news`
--

INSERT INTO `tbl_news` (`id`, `published_date`, `slug`, `title`, `details`, `file_name`) VALUES
(1, '2018-01-17', 'what-is-lorem-ipsum', 'What is Lorem Ipsum?', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '1516203248.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_notice`
--

CREATE TABLE `tbl_notice` (
  `id` int(11) NOT NULL,
  `published_date` date NOT NULL,
  `title` varchar(255) NOT NULL,
  `file_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_notice`
--

INSERT INTO `tbl_notice` (`id`, `published_date`, `title`, `file_name`) VALUES
(3, '2018-05-16', 'PSI Q3', '1526454596.pdf'),
(4, '2018-05-16', 'BOARD MEETING Q3', '1526454621.pdf'),
(5, '2018-05-16', 'PRICE SENSITIVE Q2', '1526454641.pdf'),
(6, '2018-05-16', 'BOARD MEETING Q2', '1526454674.pdf'),
(7, '2018-05-16', 'PRICE SENSITIVE Q2', '1526454695.pdf'),
(8, '2018-05-16', 'BOARD METTING Q1', '1526454717.pdf'),
(9, '2018-05-02', 'fgfgb', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_picture`
--

CREATE TABLE `tbl_picture` (
  `id` int(11) NOT NULL,
  `tittle` varchar(255) NOT NULL,
  `file_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_picture`
--

INSERT INTO `tbl_picture` (`id`, `tittle`, `file_name`) VALUES
(2, 'fg', '1526467273.jpg'),
(3, 'vfdv', '1526467277.jpg'),
(4, 'frsg', '1526467282.jpg'),
(5, 'dgrfg', '1526467287.jpg'),
(6, 'ff', '1526467292.jpg'),
(7, 'nbn', '1526467297.jpg'),
(8, 'fghh', '1526467302.jpg'),
(9, 'ghh', '1526467306.jpg'),
(10, 'fghth', '1526467312.jpg'),
(11, 'hgh', '1526467319.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products`
--

CREATE TABLE `tbl_products` (
  `id` int(11) NOT NULL,
  `categoryid` varchar(255) NOT NULL,
  `file_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_products`
--

INSERT INTO `tbl_products` (`id`, `categoryid`, `file_name`) VALUES
(2, '6', '1526461403.jpg'),
(3, '6', '1526461412.jpg'),
(4, '6', '1526461419.jpg'),
(5, '6', '1526461425.jpg'),
(6, '4', '1526461531.jpg'),
(7, '4', '1526461537.jpg'),
(8, '4', '1526461551.jpg'),
(10, '4', '1526461562.jpg'),
(11, '3', '1526461638.jpg'),
(12, '3', '1526461643.jpg'),
(13, '3', '1526461648.jpg'),
(15, '3', '1526461665.jpg'),
(16, '8', '1526461805.jpg'),
(17, '8', '1526461815.jpg'),
(18, '8', '1526461821.jpg'),
(19, '8', '1526461827.jpg'),
(20, '5', '1526463372.jpg'),
(21, '5', '1526463377.jpg'),
(22, '5', '1526463381.jpg'),
(23, '5', '1526463386.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_thirdquater`
--

CREATE TABLE `tbl_thirdquater` (
  `id` int(11) NOT NULL,
  `year` varchar(255) NOT NULL,
  `file_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_thirdquater`
--

INSERT INTO `tbl_thirdquater` (`id`, `year`, `file_name`) VALUES
(2, '2013-2014', '1526706452.jpg'),
(3, '2013-2014', '1526706463.jpg'),
(4, '2013-2014', '1526706478.jpg'),
(5, '2013-2014', '1526706489.jpg'),
(6, '2014-2015', '1526706502.jpg'),
(7, '2014-2015', '1526706512.jpg'),
(8, '2014-2015', '1526706532.jpg'),
(9, '2015-2016', '1526706548.jpg'),
(10, '2015-2016', '1526706561.jpg'),
(11, '2015-2016', '1526706576.jpg'),
(12, '2015-2016', '1526706587.jpg'),
(13, '2016-2017', '1526706604.jpg'),
(14, '2016-2017', '1526706619.jpg'),
(15, '2016-2017', '1526706639.jpg'),
(16, '2016-2017', '1526706656.jpg'),
(17, '2017-2018', '1526706672.jpg'),
(18, '2017-2018', '1526706684.jpg'),
(19, '2017-2018', '1526706696.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(5) NOT NULL COMMENT 'PK',
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL COMMENT 'Unique',
  `roles` varchar(10) NOT NULL COMMENT 'SuperAdmin, Admin, Editor',
  `username` varchar(25) NOT NULL COMMENT 'Unique',
  `encode_password` varchar(100) NOT NULL COMMENT 'My Custom Hash Password',
  `status` tinyint(1) NOT NULL COMMENT '1 for Active, 0 for Inactive',
  `last_login` datetime NOT NULL COMMENT 'Last login time',
  `last_logout` datetime NOT NULL COMMENT 'Last logout time',
  `created_at` datetime NOT NULL COMMENT 'Created time',
  `modified_at` datetime NOT NULL COMMENT 'Modified time'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `name`, `email`, `roles`, `username`, `encode_password`, `status`, `last_login`, `last_logout`, `created_at`, `modified_at`) VALUES
(1, 'Mohammad Halim', 'halim@wanitbd.com', 'SuperAdmin', 'Halim', '$2y$10$u0XC9.uJlR8z3G0AxfEmeetHDJki4n2ZUTzVR8NPrMV0x1Frxpuly', 1, '2018-05-19 13:15:13', '2018-05-10 09:14:02', '2018-01-17 11:45:20', '2018-04-11 11:21:33'),
(2, 'Admin', 'admin@gmail.com', 'Admin', 'Admin', '$2y$10$H3N82we5U3D6mHLVsk8H1ujdnOyFY8ER07BVMwhwuwz5ETjrhJx2m', 1, '2018-05-10 09:14:24', '2018-05-10 09:14:42', '2018-01-17 11:59:19', '2018-01-17 15:24:36'),
(3, 'Editor', 'editor@gmail.com', 'Editor', 'Editor', '$2y$10$0Ua7SfQACDE2DYUY.pngJ.COjB.kDemKO5fcvDxKp4luGrm8dVm0q', 1, '2018-01-18 10:12:09', '2018-01-18 10:13:30', '2018-01-18 10:04:39', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_album`
--
ALTER TABLE `tbl_album`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_anualreport`
--
ALTER TABLE `tbl_anualreport`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_article`
--
ALTER TABLE `tbl_article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_banners`
--
ALTER TABLE `tbl_banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_corporateprofile`
--
ALTER TABLE `tbl_corporateprofile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_firstquater`
--
ALTER TABLE `tbl_firstquater`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_halfyearly`
--
ALTER TABLE `tbl_halfyearly`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_investorralation`
--
ALTER TABLE `tbl_investorralation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_massage`
--
ALTER TABLE `tbl_massage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_news`
--
ALTER TABLE `tbl_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_notice`
--
ALTER TABLE `tbl_notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_picture`
--
ALTER TABLE `tbl_picture`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_products`
--
ALTER TABLE `tbl_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_thirdquater`
--
ALTER TABLE `tbl_thirdquater`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_anualreport`
--
ALTER TABLE `tbl_anualreport`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_article`
--
ALTER TABLE `tbl_article`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'PK', AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_banners`
--
ALTER TABLE `tbl_banners`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'PK', AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `id` tinyint(1) NOT NULL AUTO_INCREMENT COMMENT 'PK', AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_corporateprofile`
--
ALTER TABLE `tbl_corporateprofile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tbl_firstquater`
--
ALTER TABLE `tbl_firstquater`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_halfyearly`
--
ALTER TABLE `tbl_halfyearly`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tbl_investorralation`
--
ALTER TABLE `tbl_investorralation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_massage`
--
ALTER TABLE `tbl_massage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_news`
--
ALTER TABLE `tbl_news`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'PK', AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_notice`
--
ALTER TABLE `tbl_notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_picture`
--
ALTER TABLE `tbl_picture`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_products`
--
ALTER TABLE `tbl_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tbl_thirdquater`
--
ALTER TABLE `tbl_thirdquater`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT COMMENT 'PK', AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
