-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2016 at 10:42 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bidcups`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(20) NOT NULL,
  `admin_username` varchar(100) NOT NULL,
  `admin_password` varchar(100) NOT NULL,
  `admin_confpass` varchar(100) NOT NULL,
  `admin_fname` varchar(100) NOT NULL,
  `admin_lname` varchar(100) NOT NULL,
  `admin_pic` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_username`, `admin_password`, `admin_confpass`, `admin_fname`, `admin_lname`, `admin_pic`) VALUES
(1, 'admin', 'admin', 'admin', 'Wason', 'Thamasak', 'admin.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `auction_list`
--

CREATE TABLE `auction_list` (
  `auclist_id` int(100) NOT NULL,
  `auclist_buyauc` varchar(100) NOT NULL,
  `auclist_auto` varchar(100) NOT NULL,
  `auclist_status` varchar(100) NOT NULL,
  `auclist_stock` varchar(100) NOT NULL,
  `auclist_cost` varchar(100) NOT NULL,
  `auclist_cate` varchar(100) NOT NULL,
  `auclist_title` varchar(100) NOT NULL,
  `auclist_perbid` varchar(100) NOT NULL,
  `auclist_start` varchar(100) NOT NULL,
  `auclist_retail` varchar(100) NOT NULL,
  `auclist_shipping` varchar(100) NOT NULL,
  `auclist_startdate` date NOT NULL,
  `auclist_enddate` date NOT NULL,
  `auclist_starttime_h` varchar(10) NOT NULL,
  `auclist_starttime_m` varchar(10) NOT NULL,
  `auclist_starttime_s` varchar(10) NOT NULL,
  `auclist_endtime_h` varchar(10) NOT NULL,
  `auclist_endtime_m` varchar(10) NOT NULL,
  `auclist_endtime_s` varchar(10) NOT NULL,
  `auclist_extends` varchar(100) NOT NULL,
  `auclist_delivery` varchar(100) NOT NULL,
  `auclist_des` varchar(200) NOT NULL,
  `auclist_img1` varchar(200) NOT NULL,
  `auclist_img2` varchar(200) NOT NULL,
  `auclist_img3` varchar(200) NOT NULL,
  `auclist_img4` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auction_list`
--

INSERT INTO `auction_list` (`auclist_id`, `auclist_buyauc`, `auclist_auto`, `auclist_status`, `auclist_stock`, `auclist_cost`, `auclist_cate`, `auclist_title`, `auclist_perbid`, `auclist_start`, `auclist_retail`, `auclist_shipping`, `auclist_startdate`, `auclist_enddate`, `auclist_starttime_h`, `auclist_starttime_m`, `auclist_starttime_s`, `auclist_endtime_h`, `auclist_endtime_m`, `auclist_endtime_s`, `auclist_extends`, `auclist_delivery`, `auclist_des`, `auclist_img1`, `auclist_img2`, `auclist_img3`, `auclist_img4`) VALUES
(50, '1', 'on', 'on', '10', '10', '1', 'test', 'test', 'test', 'test', 'test', '2016-10-14', '2016-10-08', '3', '3', '4', '16', '16', '14', '10', 'test', '', 'Hydrangeas.jpg', 'Jellyfish.jpg', 'Tulips.jpg', 'Desert.jpg'),
(51, '0', 'on', 'on', '', '', 'Choose option', '', '', '', '', '', '0000-00-00', '0000-00-00', '0', '0', '0', '0', '0', '0', '', '', '', '', '', '', ''),
(52, '0', 'on', 'on', '', '', 'Choose option', '', '', '', '', '', '0000-00-00', '0000-00-00', '0', '0', '0', '0', '0', '0', '', '', '', 'Penguins.jpg', 'Jellyfish.jpg', 'Tulips.jpg', 'Chrysanthemum.jpg'),
(53, '1', 'on', 'on', '10', '10', '1', 'test', 'test', 'test', 'test', 'test', '2016-10-13', '2016-10-22', '16', '14', '11', '30', '12', '14', '10', 'test', '', 'Desert.jpg', 'Jellyfish.jpg', 'Tulips.jpg', 'Koala.jpg'),
(54, '1', 'on', 'on', '10', '10', '1', 'test', 'test', 'test', 'test', 'test', '2016-10-13', '2016-10-21', '5', '5', '4', '12', '15', '12', '10', 'test', '', 'Jellyfish.jpg', 'Penguins.jpg', 'Tulips.jpg', 'Desert.jpg'),
(55, '1', 'on', 'on', '10', '10', '1', 'test', 'test', 'test', 'test', 'test', '2016-10-06', '2016-10-22', '4', '4', '3', '3', '5', '6', '10', 'test', '', '', '', '', ''),
(56, '1', 'on', 'on', '10', '10', '2', 'test', 'test', 'test', 'test', 'test', '2016-10-13', '2016-10-14', '14', '14', '14', '16', '15', '17', '10', 'test', '', 'Koala.jpg', 'Hydrangeas.jpg', 'Jellyfish.jpg', 'Penguins.jpg'),
(57, '1', 'on', 'on', '10', '10', '1', 'test', 'test', 'test', 'test', 'test', '2016-10-13', '2016-10-15', '0', '0', '0', '0', '0', '0', '10', 'test', '', 'Koala.jpg', 'Tulips.jpg', 'Jellyfish.jpg', 'Hydrangeas.jpg'),
(58, '1', 'on', 'on', '10', '10', '1', 'test', 'test', 'test', 'test', 'test', '2016-10-13', '2016-10-21', '7', '5', '4', '16', '26', '9', '10', 'test', '', 'Penguins.jpg', 'Jellyfish.jpg', 'Tulips.jpg', 'Desert.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `bidpackage`
--

CREATE TABLE `bidpackage` (
  `package_id` int(100) NOT NULL,
  `package_bid` varchar(100) NOT NULL,
  `package_cost` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bidpackage`
--

INSERT INTO `bidpackage` (`package_id`, `package_bid`, `package_cost`) VALUES
(1, 'Package A', '300฿'),
(3, 'Package B', '400฿');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cate_id` int(20) NOT NULL,
  `cate_name` varchar(100) NOT NULL,
  `cate_title` varchar(100) NOT NULL,
  `cate_meta_des` varchar(100) NOT NULL,
  `cate_meta_key` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cate_id`, `cate_name`, `cate_title`, `cate_meta_des`, `cate_meta_key`) VALUES
(1, 'test1', 'test1', '                              test\r\n                                                        ', '                             test\r\n                                                      '),
(2, 'test2', 'test2', '                              test1\r\n                                                        ', '                             test1\r\n                                                      ');

-- --------------------------------------------------------

--
-- Table structure for table `general_set`
--

CREATE TABLE `general_set` (
  `general_id` int(100) NOT NULL,
  `general_siteurl` varchar(100) NOT NULL,
  `general_site_title` varchar(100) NOT NULL,
  `general_meta_des` varchar(100) NOT NULL,
  `general_meta_key` varchar(100) NOT NULL,
  `general_footer` varchar(100) NOT NULL,
  `general_address` varchar(100) NOT NULL,
  `general_email` varchar(100) NOT NULL,
  `general_line` varchar(100) NOT NULL,
  `general_tel` varchar(20) NOT NULL,
  `general_facebook` varchar(100) NOT NULL,
  `general_youtube` varchar(100) NOT NULL,
  `general_twitter` varchar(100) NOT NULL,
  `general_google` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `general_set`
--

INSERT INTO `general_set` (`general_id`, `general_siteurl`, `general_site_title`, `general_meta_des`, `general_meta_key`, `general_footer`, `general_address`, `general_email`, `general_line`, `general_tel`, `general_facebook`, `general_youtube`, `general_twitter`, `general_google`) VALUES
(1, 'www.bidcups.com', 'bidcups บิทคลับ - ประมูล เริ่มต้นแค่ 1 บาท ประหยัดถึง 99', 'ที่ Bidcups ซื้อของออนไลน์ สินค้าสุด Cool ที่ตอบโจทย์ Lifestyle ลดถึง 50% หรือ ประมูล เริ่มต้น 1 บาท', 'บิท,บิทคลับ,bidcups,ซื้อของออนไลน์', '© 2016 BidCups Online Co., Ltd. All rights reserved', '2086 ถนนรามคำแหง แขวงหัวหมาก เขตบางกะปิ กรุงเทพมหานคร 10240', 'bidcups_88@gmail.com', '@bidcups', '02-12345678', 'www.facebook.com', 'www.youtube.com', 'www.twitter.com', 'www.plus.google.com');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User');

-- --------------------------------------------------------

--
-- Table structure for table `img_slider`
--

CREATE TABLE `img_slider` (
  `img_id` int(100) NOT NULL,
  `img_name` varchar(100) NOT NULL,
  `img_path` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `img_slider`
--

INSERT INTO `img_slider` (`img_id`, `img_name`, `img_path`) VALUES
(4, 'Koala.jpg', 'C:/xampp/htdocs/pa/uploads/Koala.jpg'),
(5, 'park_shin_hye_s_beauty.jpg', 'C:/xampp/htdocs/pa/uploads/park_shin_hye_s_beauty.jpg'),
(6, 'E12789826-74.jpg', 'C:/xampp/htdocs/pa/uploads/E12789826-74.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(15) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `menu_id` int(20) NOT NULL,
  `menu_name` varchar(100) NOT NULL,
  `menu_title` varchar(100) NOT NULL,
  `menu_meta_des` varchar(100) NOT NULL,
  `menu_meta_key` varchar(100) NOT NULL,
  `menu_description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menu_id`, `menu_name`, `menu_title`, `menu_meta_des`, `menu_meta_key`, `menu_description`) VALUES
(8, 'test2', 'test', ' test3\r\n                                                             ', 'test3\r\n                                                               ', ''),
(9, 'test', 'test', '                              test                                                        ', '                             test                                                      ', '                                                                                 test                       ');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) UNSIGNED NOT NULL,
  `last_login` int(11) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`, `img`) VALUES
(1, '127.0.0.1', 'administrator', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'admin@admin.com', '', NULL, NULL, NULL, 1268889823, 1477467001, 1, 'Wason', 'Thamasak', 'ADMIN', '0', 'admin.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(2, 1, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `auction_list`
--
ALTER TABLE `auction_list`
  ADD PRIMARY KEY (`auclist_id`);

--
-- Indexes for table `bidpackage`
--
ALTER TABLE `bidpackage`
  ADD PRIMARY KEY (`package_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cate_id`);

--
-- Indexes for table `general_set`
--
ALTER TABLE `general_set`
  ADD PRIMARY KEY (`general_id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `img_slider`
--
ALTER TABLE `img_slider`
  ADD PRIMARY KEY (`img_id`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  ADD KEY `fk_users_groups_users1_idx` (`user_id`),
  ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `auction_list`
--
ALTER TABLE `auction_list`
  MODIFY `auclist_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
--
-- AUTO_INCREMENT for table `bidpackage`
--
ALTER TABLE `bidpackage`
  MODIFY `package_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cate_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `general_set`
--
ALTER TABLE `general_set`
  MODIFY `general_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `img_slider`
--
ALTER TABLE `img_slider`
  MODIFY `img_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `menu_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
