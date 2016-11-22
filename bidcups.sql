-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2016 at 06:03 AM
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
-- Table structure for table `auction`
--

CREATE TABLE `auction` (
  `auc_id` int(10) NOT NULL,
  `auc_cate_id` int(10) NOT NULL,
  `auc_item_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auc_item_des` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auc_price` double NOT NULL,
  `auc_pic` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auc_path` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auc_start` double NOT NULL,
  `auc_bids_inc` double NOT NULL,
  `auc_start_date` datetime NOT NULL,
  `auc_end_date` datetime NOT NULL,
  `auc_status` int(2) NOT NULL,
  `mem_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `auction`
--

INSERT INTO `auction` (`auc_id`, `auc_cate_id`, `auc_item_title`, `auc_item_des`, `auc_price`, `auc_pic`, `auc_path`, `auc_start`, `auc_bids_inc`, `auc_start_date`, `auc_end_date`, `auc_status`, `mem_id`) VALUES
(25, 1, 'oppo n1', '<p>oppo n1</p>\r\n', 6500, 'photo_2016-11-10_23-44-20.jpg', '', 15.5, 0.5, '2016-11-21 18:35:45', '2016-11-22 18:35:46', 1, 4),
(26, 1, 'oppo n1', '<p>oppo n1</p>\r\n', 6500, 'photo_2016-11-10_23-44-20.jpg', '', 2, 0.5, '2016-11-21 18:35:45', '2016-11-22 18:35:46', 1, 3);

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
(5, '100', '500'),
(6, '200', '1000'),
(7, '500', '2500'),
(8, '1000', '5000');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cate_id` int(20) NOT NULL,
  `cate_name` varchar(100) NOT NULL,
  `cate_title` varchar(100) NOT NULL,
  `cate_meta_des` varchar(100) NOT NULL,
  `cate_meta_key` varchar(100) NOT NULL,
  `cate_description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cate_id`, `cate_name`, `cate_title`, `cate_meta_des`, `cate_meta_key`, `cate_description`) VALUES
(1, 'Electronics', 'Electronics', 'Electronics', 'Electronics', '<p>Electronics</p>\r\n'),
(2, 'test2', 'test2', 'test1                                       ', 'test1                        ', '<p>grhtn</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `final`
--

CREATE TABLE `final` (
  `final_id` int(100) NOT NULL,
  `auc_id` int(100) NOT NULL,
  `final_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `final`
--

INSERT INTO `final` (`final_id`, `auc_id`, `final_time`) VALUES
(9, 17, '2016-11-13 22:45:18'),
(10, 22, '2016-11-13 22:44:58'),
(11, 23, '2016-11-13 00:19:53'),
(12, 24, '2016-11-14 11:45:37'),
(13, 25, '2016-11-14 11:46:03');

-- --------------------------------------------------------

--
-- Table structure for table `general_set`
--

CREATE TABLE `general_set` (
  `general_id` int(100) NOT NULL,
  `general_logo` varchar(255) NOT NULL,
  `general_site_title` varchar(255) NOT NULL,
  `general_meta_des` varchar(255) NOT NULL,
  `general_meta_key` varchar(255) NOT NULL,
  `general_footer` varchar(255) NOT NULL,
  `general_address` varchar(255) NOT NULL,
  `general_email` varchar(205) NOT NULL,
  `general_line` varchar(255) NOT NULL,
  `general_tel` varchar(20) NOT NULL,
  `general_facebook` varchar(255) NOT NULL,
  `general_youtube` varchar(255) NOT NULL,
  `general_twitter` varchar(255) NOT NULL,
  `general_google` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `general_set`
--

INSERT INTO `general_set` (`general_id`, `general_logo`, `general_site_title`, `general_meta_des`, `general_meta_key`, `general_footer`, `general_address`, `general_email`, `general_line`, `general_tel`, `general_facebook`, `general_youtube`, `general_twitter`, `general_google`) VALUES
(1, 'minions.jpg', 'Bidcups - ประมูล เริ่มต้นแค่ 1 บาท ประหยัดถึง 99%!', 'ที่ Bidcups ซื้อของออนไลน์ สินค้าสุด Cool ที่ตอบโจทย์ Lifestyle ลดถึง 50% หรือ ประมูล เริ่มต้น 1 บาท ลุ้นประหยัดถึง 99%! ประหยัดได้จริง มากกว่า 500 คนที่ได้สินค้ากลับบ้านอย่างมีความสุข ไม่ว่าจะเป็นโทรศัพท์มือถือ แท็บเล็ต Power Bank', 'บิท,บิทคลับ,bidcups,ซื้อของออนไลน์', '© 2016 BidCups Online Co., Ltd. All rights reserved.', '2086 ถนนรามคำแหง แขวงหัวหมาก เขตบางกะปิ กรุงเทพมหานคร 10240', 'bidcups_88@gmail.com', '@bidcups', '02-12345678', 'www.facebook.com', 'www.youtube.com', 'www.twitter.com', 'www.plus.google.com');

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
(4, 'members', 'member');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `his_id` int(100) NOT NULL,
  `mem_id` int(100) NOT NULL,
  `auc_id` int(100) NOT NULL,
  `his_date` datetime NOT NULL,
  `his_price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`his_id`, `mem_id`, `auc_id`, `his_date`, `his_price`) VALUES
(8, 3, 25, '2016-11-21 12:50:52', 4),
(9, 3, 25, '2016-11-21 12:50:55', 4.5),
(10, 3, 25, '2016-11-21 12:51:48', 5),
(11, 3, 25, '2016-11-21 12:57:14', 5.5),
(12, 3, 25, '2016-11-21 13:02:06', 6),
(13, 3, 25, '2016-11-21 19:05:29', 6.5),
(14, 0, 25, '2016-11-21 21:56:29', 7),
(15, 3, 25, '2016-11-21 21:57:36', 7.5),
(16, 3, 26, '2016-11-21 21:58:37', 0.5),
(17, 4, 26, '2016-11-21 22:12:11', 1),
(18, 3, 25, '2016-11-21 23:01:36', 8),
(19, 3, 25, '2016-11-21 23:01:39', 8.5),
(20, 0, 25, '2016-11-21 23:04:56', 9),
(21, 0, 25, '2016-11-21 23:04:59', 9.5),
(22, 0, 25, '2016-11-21 23:05:02', 10),
(23, 0, 26, '2016-11-21 23:05:45', 1.5),
(24, 0, 25, '2016-11-21 23:05:53', 10.5),
(25, 0, 25, '2016-11-21 23:21:48', 11),
(26, 0, 25, '2016-11-21 23:21:51', 11.5),
(27, 0, 25, '2016-11-21 23:22:20', 12),
(28, 0, 25, '2016-11-21 23:29:04', 12.5),
(29, 0, 25, '2016-11-22 08:28:23', 13),
(30, 0, 25, '2016-11-22 08:28:39', 13.5),
(31, 0, 25, '2016-11-22 08:31:13', 14),
(32, 3, 25, '2016-11-22 08:42:28', 14.5),
(33, 3, 26, '2016-11-22 08:42:30', 2),
(34, 3, 25, '2016-11-22 08:42:32', 15),
(35, 4, 25, '2016-11-22 12:01:32', 15.5);

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
(16, 'newbanner-marshall-major-ll.jpg', 'C:/xampp/htdocs/auction/uploads/newbanner-marshall-major-ll.jpg'),
(17, 'newbanner-marshall-major-ll1.jpg', 'C:/xampp/htdocs/auction/uploads/newbanner-marshall-major-ll1.jpg'),
(18, 'newbanner-marshall-major-ll2.jpg', 'C:/xampp/htdocs/auction/uploads/newbanner-marshall-major-ll2.jpg');

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
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `mem_id` int(100) NOT NULL,
  `mem_fname` varchar(255) NOT NULL,
  `mem_lname` varchar(255) NOT NULL,
  `mem_birth_day` varchar(255) NOT NULL,
  `mem_birth_month` varchar(255) NOT NULL,
  `mem_birth_year` varchar(255) NOT NULL,
  `mem_tel` varchar(255) NOT NULL,
  `mem_username` varchar(255) NOT NULL,
  `mem_pass` varchar(32) NOT NULL,
  `mem_email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`mem_id`, `mem_fname`, `mem_lname`, `mem_birth_day`, `mem_birth_month`, `mem_birth_year`, `mem_tel`, `mem_username`, `mem_pass`, `mem_email`) VALUES
(3, 'Jirachot', 'Aphirangsimun', '23', '02', '1993', '0875696451', 'paly1234', 'e10adc3949ba59abbe56e057f20f883e', 'jirachot23@gmail.com'),
(4, 'Jirachot111', 'Aphirangsimun111', '12', '08', '1999', '0875696451', 'paly123456', 'e10adc3949ba59abbe56e057f20f883e', 'jirachot234@gmail.com');

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
  `menu_description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menu_id`, `menu_name`, `menu_title`, `menu_meta_des`, `menu_meta_key`, `menu_description`) VALUES
(13, 'ครั้งแรกที่ bidCups', 'ครั้งแรกที่ bidCups', 'ครั้งแรกที่ bidCups', 'ครั้งแรกที่ bidCups', '<p>ครั้งแรกที่ bidCups</p>\r\n'),
(14, 'bidCups คืออะไร', 'bidCups คืออะไร', 'bidCups คืออะไร', 'bidCups คืออะไร', '<p>bidCups คืออะไร</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `review_id` int(100) NOT NULL,
  `review_title` varchar(255) NOT NULL,
  `review_img` varchar(255) NOT NULL,
  `review_imgpath` varchar(255) NOT NULL,
  `review_name` varchar(255) NOT NULL,
  `review_pbid` varchar(255) NOT NULL,
  `review_description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`review_id`, `review_title`, `review_img`, `review_imgpath`, `review_name`, `review_pbid`, `review_description`) VALUES
(5, 'test1', 'E12789826-74.jpg', 'C:/xampp/htdocs/auction/uploads/review/E12789826-74.jpg', 'test', 'test1', 'test');

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
  `img` varchar(200) NOT NULL,
  `img_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`, `img`, `img_path`) VALUES
(1, '127.0.0.1', 'administrator', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'admin@admin.com', '', NULL, NULL, NULL, 1268889823, 1479728108, 1, 'Wason', 'Thamasak', 'ADMIN', '0', 'admin.jpg', ''),
(3, '::1', 'jirachot23@gmail.com', '$2y$08$wIeFjFzu6BVvHJjK/iaIyudvx9UNs04eXoA9X3WijHxsrZo4W2CG2', NULL, 'jirachot23@gmail.com', NULL, NULL, NULL, NULL, 1477889924, 1477997760, 1, 'test1', 'test1', 'test1', '0875696451', 'Tulips.jpg', ''),
(22, '::1', 'jirachot233@gmail.com', '$2y$08$lUgcbXjUUkSpUehTrkiigu2xxs0mqP3P36j9/fhgYRvN0qcDbyRIa', NULL, 'jirachot233@gmail.com', NULL, NULL, NULL, NULL, 1478104561, NULL, 1, 'test1', 'test1', NULL, NULL, 'minions.jpg', 'C:/xampp/htdocs/auction/uploads/minions.jpg');

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
(24, 1, 1),
(25, 3, 1),
(30, 22, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `auction`
--
ALTER TABLE `auction`
  ADD PRIMARY KEY (`auc_id`);

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
-- Indexes for table `final`
--
ALTER TABLE `final`
  ADD PRIMARY KEY (`final_id`);

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
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`his_id`);

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
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`mem_id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`review_id`);

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
-- AUTO_INCREMENT for table `auction`
--
ALTER TABLE `auction`
  MODIFY `auc_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `bidpackage`
--
ALTER TABLE `bidpackage`
  MODIFY `package_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cate_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `final`
--
ALTER TABLE `final`
  MODIFY `final_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `general_set`
--
ALTER TABLE `general_set`
  MODIFY `general_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `his_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `img_slider`
--
ALTER TABLE `img_slider`
  MODIFY `img_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `mem_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `menu_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `review_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
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
