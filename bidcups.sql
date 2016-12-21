-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2016 at 06:08 PM
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
  `admin_email` varchar(255) NOT NULL,
  `admin_password` varchar(100) NOT NULL,
  `admin_fname` varchar(100) NOT NULL,
  `admin_lname` varchar(100) NOT NULL,
  `admin_newpic` varchar(255) NOT NULL,
  `admin_pic` varchar(100) NOT NULL,
  `admin_picpath` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_email`, `admin_password`, `admin_fname`, `admin_lname`, `admin_newpic`, `admin_pic`, `admin_picpath`) VALUES
(2, 'admin1@admin.com', 'e10adc3949ba59abbe56e057f20f883e', 'test1', 'test1', '1480490869minions.jpg', 'minions.jpg', 'C:/xampp/htdocs/auction/uploads/1480490869minions.jpg'),
(3, 'admin@admin.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'Wason', 'Thamasak', '1480402279admin.jpg', 'admin.jpg', 'C:/xampp/htdocs/auction/uploads/1480402279admin.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `auction`
--

CREATE TABLE `auction` (
  `auc_id` int(10) NOT NULL,
  `auc_cate_id` int(10) NOT NULL,
  `auc_item_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auc_item_des` text COLLATE utf8_unicode_ci NOT NULL,
  `auc_price` double NOT NULL,
  `auc_newpic` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auc_pic` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auc_path` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auc_start` double NOT NULL,
  `auc_bids_inc` double NOT NULL,
  `auc_start_date` datetime NOT NULL,
  `auc_end_date` datetime NOT NULL,
  `auc_status` int(2) NOT NULL,
  `auc_user` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mem_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `auction`
--

INSERT INTO `auction` (`auc_id`, `auc_cate_id`, `auc_item_title`, `auc_item_des`, `auc_price`, `auc_newpic`, `auc_pic`, `auc_path`, `auc_start`, `auc_bids_inc`, `auc_start_date`, `auc_end_date`, `auc_status`, `auc_user`, `mem_id`) VALUES
(37, 1, 'Iphone 7', '<p><strong>iPhone 7 128GB (Rose Gold)</strong></p>\r\n\r\n<h2>Product details of Apple iPhone7 128GB (Rose Gold)&nbsp;</h2>\r\n\r\n<p>Apple iPhone7 128GB (Rose Gold) - Aยกระดับประสบการณ์การใช้งาน iPhone ในส่วนที่สำคัญที่สุด ให้ดียิ่งขึ้นกว่าเดิม ไม่ว่าจะเป็นระบบกล้องสุดล้ำแบบใหม่ ประสิทธิภาพการทำงาน ที่ดีที่สุดและแบตเตอรี่ที่ใช้งานได้นานที่สุดเท่าที่เคยมีมาใน iPhone ลำโพงสเตอริโอ ที่ให้เสียงเต็มอิ่มสมจริง จอภาพ iPhone ที่สว่างและมีสีสันสดใสที่สุด อีกทั้งยัง ทนน้ำและน้ำที่กระเด็นใส่1 และมีรูปลักษณ์ภายนอกที่ดูทรงพลังไม่แพ้ภายใน<br />\r\n<br />\r\nคุณสมบัติเด่น<br />\r\n<br />\r\niPhone 7 ได้ก้าวสู่อีกระดับของคำว่านวัตกรรมและความแม่นยำ<br />\r\nเริ่มตั้งแต่ สีดำเจ็ทแบล็คที่แตกต่างโดยสิ้นเชิงจากทุกสิ่งที่เราเคยสร้างมา ตัวเครื่องที่ สามารถทนน้ำและน้ำที่กระเด็นใส่1 ไปจนถึงปุ่มโฮมที่ถูกสร้างขึ้น ใหม่หมด ในทุกรายละเอียดและดีไซน์ Unibody แบบใหม่ที่เรียบเนียนไร้รอยต่อ   ไม่น่าแปลกใจเลยที่ iPhone 7 จะรู้สึกยอดเยี่ยมเมื่อถืออยู่ในมือ ไม่แพ้รูปลักษณ์ภายนอกที่เห็น<br />\r\n<br />\r\n<img alt="image" src="http://th-live.slatic.net/cms/Content%20Retail%202016/October/app1.png" /><br />\r\n<br />\r\niPhone คือกล้องที่ได้รับความนิยมสูงสุดในโลก<br />\r\nและในวันนี้เราได้ รังสรรค์กล้องที่ทุกคนชื่นชอบขึ้นใหม่ด้วยการเพิ่มระบบป้องกันภาพสั่นไหว แบบออปติคอล รูรับแสงขนาด &fnof;/1.8 และชุดเลนส์ 6 ชิ้น เพื่อให้คุณถ่ายรูปและวิดีโอ ในสภาวะแสงน้อยได้สวยงามยิ่งขึ้น นอกจากนี้ยังมีคุณสมบัติสุดล้ำใหม่ๆ อย่างเช่น การบันทึกภาพด้วยขอบเขตสีกว้างที่จะทำให้รูปถ่ายและ Live Photos ของคุณดูสวยงามสดใสยิ่งขึ้น<br />\r\n<br />\r\n<img alt="image" src="http://th-live.slatic.net/cms/Content%20Retail%202016/October/app2.png" /><br />\r\n<br />\r\nกล้องหน้า 7MP ใหม่ จะตกหลุมรักเซลฟี่ก็คราวนี้<br />\r\nกล้อง FaceTime HD ไม่ได้มีแค่ความละเอียดที่สูงขึ้น แต่ยังสามารถ บันทึกภาพด้วยขอบเขตสีกว้างได้อีกด้วย คราวนี้คุณก็ถ่ายเซลฟี่ได้ คมชัดและสวยงามสดใสยิ่งกว่าเดิม แต่ถ้าห่วงว่าแสงจะไม่สวย Retina Flash จะช่วยจัดแสงให้พอดีกับสภาพแสงโดยรอบ เพื่อสีผิว ที่ดูสวยเป็นธรรมชาติ<br />\r\n<br />\r\n<img alt="image" src="http://th-live.slatic.net/cms/Content%20Retail%202016/October/app3.png" /><br />\r\n<br />\r\nเบื้องหลังการทำงานที่เร็วสุดแรงของ iPhone 7 คือชิพที่ทรงพลังที่สุดเท่าที่เคยมีมา<br />\r\nในสมาร์ทโฟน และก็ไม่ใช่แค่เร็วกว่า iPhone ทุกรุ่นก่อนหน้านี้ แต่ยังประหยัดพลังงาน มากขึ้นด้วย นั่นเป็นเพราะชิพ A10 Fusion ใช้สถาปัตยกรรมแบบใหม่หมดที่ช่วยให้การประมวลผลรวดเร็วยิ่งขึ้นในเวลาที่คุณต้องการ และใช้พลังงานน้อยลงกว่าเดิมในยามที่ คุณไม่ได้ใช้ ยิ่งกว่านั้นยังมีแบตเตอรี่ที่ใช้งานได้นานที่สุดเท่าที่ iPhone เคยมีมาอีกด้วย คุณจึงสามารถทำอะไรๆ ได้เร็วกว่า iPhone 6 ถึง 2 เท่า และในขณะเดียวกันก็ยังใช้งาน ได้นานขึ้นต่อการชาร์จหนึ่งครั้ง<br />\r\n<br />\r\n<img alt="image" src="http://th-live.slatic.net/cms/Content%20Retail%202016/October/app4.png" /><br />\r\n<br />\r\nข้อมูลจำเพาะ<br />\r\n<br />\r\nจอภาพ<br />\r\n- จอภาพ Retina HD<br />\r\n- จอภาพไวด์สกรีน แบ็คไลท์แบบ LED<br />\r\n- ขนาด 4.7 นิ้ว (แนวทแยง)<br />\r\n- จอภาพ Multi-Touch พร้อมเทคโนโลยี IPS<br />\r\n- ความละเอียด 1334 x 750 พิกเซลที่ 326 ppi<br />\r\n- อัตราส่วนคอนทราสต์ 1400:1 (ทั่วไป)<br />\r\n- จอภาพขอบเขตสีกว้าง (P3)<br />\r\n- ความสว่างสูงสุด 625 cd/m2 (ทั่วไป)<br />\r\n- พิกเซลแบบโดเมนคู่เพื่อการมองในมุมกว้าง<br />\r\n- เคลือบสารกันรอยนิ้วมือ<br />\r\n- รองรับการแสดงผลหลายภาษาและตัวอักษรหลายแบบพร้อมกัน<br />\r\n- คุณสมบัติ &quot;การซูมหน้าจอ&quot;<br />\r\n- คุณสมบัติ &quot;การดึงจอลงเพื่อแตะ&quot;<br />\r\n<br />\r\nการทนน้ำ น้ำที่กระเด็นใส่ และฝุ่น4<br />\r\n- ที่ระดับ IP67 ตามมาตรฐาน IEC 60529<br />\r\n<br />\r\nชิพ<br />\r\n- ชิพ A10 Fusion พร้อมสถาปัตยกรรม 64 บิต<br />\r\n- โปรเซสเซอร์ร่วม M10 สำหรับประมวลผลการเคลื่อนไหวในตัว<br />\r\n<br />\r\nกล้อง<br />\r\n- กล้องความละเอียด 12MP<br />\r\n- รูรับแสงขนาด &fnof;/1.8<br />\r\n- ซูมดิจิตอลได้สูงสุด 5 เท่า<br />\r\n- ระบบป้องกันภาพสั่นไหวแบบออปติคอล<br />\r\n- ชุดเลนส์ 6 ชิ้น<br />\r\n- แฟลช True Tone แบบ LED สี่ดวง<br />\r\n- พาโนรามา (สูงสุด 63 เมกะพิกเซล)<br />\r\n- ผลึกแซฟไฟร์ป้องกันหน้าเลนส์<br />\r\n- เซ็นเซอร์รับแสงด้วยส่วนหลัง<br />\r\n- ฟิลเตอร์ Hybrid IR<br />\r\n- ออโต้โฟกัสพร้อม Focus Pixels<br />\r\n- ระบบการแตะเพื่อโฟกัสพร้อม Focus Pixels<br />\r\n- คุณสมบัติ Live Photos พร้อมระบบป้องกันภาพสั่นไหว<br />\r\n- บันทึกภาพถ่ายและ Live Photos ด้วยขอบเขตสีกว้าง<br />\r\n- การแมปโทนที่ได้รับการปรับปรุง<br />\r\n- ระบบตรวจจับใบหน้าและร่างกาย<br />\r\n- การควบคุมค่าแสง<br />\r\n- การลดนอยซ์<br />\r\n- HDR อัตโนมัติสำหรับภาพถ่าย<br />\r\n- ระบบป้องกันภาพสั่นไหวอัตโนมัติ<br />\r\n- โหมดภาพถ่ายต่อเนื่อง<br />\r\n- โหมดตั้งเวลาถ่ายภาพ<br />\r\n- แนบข้อมูลพิกัดตำแหน่งในภาพถ่าย<br />\r\n<br />\r\nการบันทึกวิดีโอ<br />\r\n- บันทึกวิดีโอระดับ 4K ที่ 30 fps<br />\r\n- บันทึกวิดีโอระดับ HD 1080p ที่ 30 fps หรือ 60 fps<br />\r\n- บันทึกวิดีโอระดับ HD 720p ที่ 30 fps<br />\r\n- ระบบป้องกันภาพสั่นไหวแบบออปติคอลสำหรับวิดีโอ<br />\r\n- ซูมออปติคอล 2 เท่า และซูมดิจิตอล 6 เท่า (เฉพาะ iPhone 7 Plus)<br />\r\n- แฟลช True Tone แบบ LED สี่ดวง<br />\r\n- รองรับวิดีโอสโลว์โมชั่น ความละเอียด 1080p ที่ 120 fps และ 720p ที่ 240 fps<br />\r\n- วิดีโอไทม์แลปส์ พร้อมระบบป้องกันภาพสั่นไหว<br />\r\n- ระบบป้องกันภาพวิดีโอสั่นไหวในคุณภาพระดับภาพยนตร์ (1080p และ 720p)<br />\r\n- วิดีโอออโต้โฟกัสแบบต่อเนื่อง<br />\r\n- ระบบตรวจจับใบหน้าและร่างกาย<br />\r\n- การลดนอยซ์<br />\r\n- ถ่ายภาพนิ่งความละเอียด 8 เมกะพิกเซล ขณะบันทึกวิดีโอ 4K<br />\r\n- ซูมขณะเล่น<br />\r\n- แนบข้อมูลพิกัดตำแหน่งในวิดีโอ<br />\r\n<br />\r\nกล้อง FaceTime HD<br />\r\n- รูปถ่าย 7 เมกะพิกเซล<br />\r\n- บันทึกวิดีโอระดับ HD 1080p<br />\r\n- Retina Flash<br />\r\n- รูรับแสงขนาด &fnof;/2.2<br />\r\n- บันทึกภาพถ่ายและ Live Photos ด้วยขอบเขตสีกว้าง<br />\r\n- HDR อัตโนมัติ<br />\r\n- เซ็นเซอร์รับแสงด้วยส่วนหลัง<br />\r\n- ระบบตรวจจับใบหน้าและร่างกาย<br />\r\n- ระบบป้องกันภาพสั่นไหวอัตโนมัติ<br />\r\n- โหมดภาพถ่ายต่อเนื่อง<br />\r\n- การควบคุมค่าแสง<br />\r\n- โหมดตั้งเวลาถ่ายภาพ<br />\r\n<br />\r\n<img alt="image" src="http://th-live.slatic.net/cms/Content%20Retail%202016/October/app5.png" /><br />\r\n<br />\r\n<img alt="" src="http://th-live.slatic.net/cms/Content%20Retail%202016/October/inbox.jpg" /></p>\r\n\r\n<p>ข้อมูลจำเพาะของ Apple&nbsp;<strong>iPhone 7 128GB (Rose Gold)</strong></p>\r\n\r\n<p>รายการสินค้าในกล่อง</p>\r\n\r\n<ul>\r\n	<li>Apple iPhone 7 128GB x 1 pcs USB Cabler&nbsp;x 1 pcs Adapter&nbsp;x 1 pcs EarPods&nbsp;x 1 pcs</li>\r\n</ul>\r\n\r\n<p>คุณสมบัติทั่วไป</p>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>SKU</td>\r\n			<td>AP067ELAA4UD92ANTH-10372293</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Camera Back</td>\r\n			<td>11-15MP</td>\r\n		</tr>\r\n		<tr>\r\n			<td>กล้องหน้า (เมกะพิกเซล)</td>\r\n			<td>7 MP ขึ้นไป</td>\r\n		</tr>\r\n		<tr>\r\n			<td>สภาพ</td>\r\n			<td>ใหม่</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Screen Size (inches)</td>\r\n			<td>4.7</td>\r\n		</tr>\r\n		<tr>\r\n			<td>โมเดล</td>\r\n			<td>iphone 7</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Network Connections</td>\r\n			<td>4G - LTE</td>\r\n		</tr>\r\n		<tr>\r\n			<td>ระบบปฏิบัติการ</td>\r\n			<td>iOS 10​</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Phone Features</td>\r\n			<td>Touchscreen</td>\r\n		</tr>\r\n		<tr>\r\n			<td>PPI</td>\r\n			<td>300-400 PPI</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Processor Type</td>\r\n			<td>Quad-core</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Size (cm)</td>\r\n			<td>13.8 x 6.8 x 0.8</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Weight (kg)</td>\r\n			<td>0.138</td>\r\n		</tr>\r\n		<tr>\r\n			<td>RAM memory</td>\r\n			<td>2GB</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Screen Type</td>\r\n			<td>IPS LCD</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Slim Slots</td>\r\n			<td>1</td>\r\n		</tr>\r\n		<tr>\r\n			<td>ความจุของหน่วยความจำ</td>\r\n			<td>128GB</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Type of Battery</td>\r\n			<td>Built-in Rechargeable Battery</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Video Resolution</td>\r\n			<td>2160p</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Warranty type</td>\r\n			<td>ไม่มีการรับประกัน</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', 22000, '1480999742iphone.jpg', 'iphone.jpg', 'C:/xampp/htdocs/auction/uploads/1480999742iphone.jpg', 18.5, 0.5, '2016-12-06 11:49:02', '2016-12-22 23:31:51', 0, 'paly1234', 3),
(38, 1, 'Iphone 7', '<p><strong>iPhone 7 128GB (Rose Gold)</strong></p>\r\n\r\n<h2>Product details of Apple iPhone7 128GB (Rose Gold)&nbsp;</h2>\r\n\r\n<p>Apple iPhone7 128GB (Rose Gold) - Aยกระดับประสบการณ์การใช้งาน iPhone ในส่วนที่สำคัญที่สุด ให้ดียิ่งขึ้นกว่าเดิม ไม่ว่าจะเป็นระบบกล้องสุดล้ำแบบใหม่ ประสิทธิภาพการทำงาน ที่ดีที่สุดและแบตเตอรี่ที่ใช้งานได้นานที่สุดเท่าที่เคยมีมาใน iPhone ลำโพงสเตอริโอ ที่ให้เสียงเต็มอิ่มสมจริง จอภาพ iPhone ที่สว่างและมีสีสันสดใสที่สุด อีกทั้งยัง ทนน้ำและน้ำที่กระเด็นใส่1 และมีรูปลักษณ์ภายนอกที่ดูทรงพลังไม่แพ้ภายใน<br />\r\n<br />\r\nคุณสมบัติเด่น<br />\r\n<br />\r\niPhone 7 ได้ก้าวสู่อีกระดับของคำว่านวัตกรรมและความแม่นยำ<br />\r\nเริ่มตั้งแต่ สีดำเจ็ทแบล็คที่แตกต่างโดยสิ้นเชิงจากทุกสิ่งที่เราเคยสร้างมา ตัวเครื่องที่ สามารถทนน้ำและน้ำที่กระเด็นใส่1 ไปจนถึงปุ่มโฮมที่ถูกสร้างขึ้น ใหม่หมด ในทุกรายละเอียดและดีไซน์ Unibody แบบใหม่ที่เรียบเนียนไร้รอยต่อ   ไม่น่าแปลกใจเลยที่ iPhone 7 จะรู้สึกยอดเยี่ยมเมื่อถืออยู่ในมือ ไม่แพ้รูปลักษณ์ภายนอกที่เห็น<br />\r\n<br />\r\n<img alt="image" src="http://th-live.slatic.net/cms/Content%20Retail%202016/October/app1.png" /><br />\r\n<br />\r\niPhone คือกล้องที่ได้รับความนิยมสูงสุดในโลก<br />\r\nและในวันนี้เราได้ รังสรรค์กล้องที่ทุกคนชื่นชอบขึ้นใหม่ด้วยการเพิ่มระบบป้องกันภาพสั่นไหว แบบออปติคอล รูรับแสงขนาด &fnof;/1.8 และชุดเลนส์ 6 ชิ้น เพื่อให้คุณถ่ายรูปและวิดีโอ ในสภาวะแสงน้อยได้สวยงามยิ่งขึ้น นอกจากนี้ยังมีคุณสมบัติสุดล้ำใหม่ๆ อย่างเช่น การบันทึกภาพด้วยขอบเขตสีกว้างที่จะทำให้รูปถ่ายและ Live Photos ของคุณดูสวยงามสดใสยิ่งขึ้น<br />\r\n<br />\r\n<img alt="image" src="http://th-live.slatic.net/cms/Content%20Retail%202016/October/app2.png" /><br />\r\n<br />\r\nกล้องหน้า 7MP ใหม่ จะตกหลุมรักเซลฟี่ก็คราวนี้<br />\r\nกล้อง FaceTime HD ไม่ได้มีแค่ความละเอียดที่สูงขึ้น แต่ยังสามารถ บันทึกภาพด้วยขอบเขตสีกว้างได้อีกด้วย คราวนี้คุณก็ถ่ายเซลฟี่ได้ คมชัดและสวยงามสดใสยิ่งกว่าเดิม แต่ถ้าห่วงว่าแสงจะไม่สวย Retina Flash จะช่วยจัดแสงให้พอดีกับสภาพแสงโดยรอบ เพื่อสีผิว ที่ดูสวยเป็นธรรมชาติ<br />\r\n<br />\r\n<img alt="image" src="http://th-live.slatic.net/cms/Content%20Retail%202016/October/app3.png" /><br />\r\n<br />\r\nเบื้องหลังการทำงานที่เร็วสุดแรงของ iPhone 7 คือชิพที่ทรงพลังที่สุดเท่าที่เคยมีมา<br />\r\nในสมาร์ทโฟน และก็ไม่ใช่แค่เร็วกว่า iPhone ทุกรุ่นก่อนหน้านี้ แต่ยังประหยัดพลังงาน มากขึ้นด้วย นั่นเป็นเพราะชิพ A10 Fusion ใช้สถาปัตยกรรมแบบใหม่หมดที่ช่วยให้การประมวลผลรวดเร็วยิ่งขึ้นในเวลาที่คุณต้องการ และใช้พลังงานน้อยลงกว่าเดิมในยามที่ คุณไม่ได้ใช้ ยิ่งกว่านั้นยังมีแบตเตอรี่ที่ใช้งานได้นานที่สุดเท่าที่ iPhone เคยมีมาอีกด้วย คุณจึงสามารถทำอะไรๆ ได้เร็วกว่า iPhone 6 ถึง 2 เท่า และในขณะเดียวกันก็ยังใช้งาน ได้นานขึ้นต่อการชาร์จหนึ่งครั้ง<br />\r\n<br />\r\n<img alt="image" src="http://th-live.slatic.net/cms/Content%20Retail%202016/October/app4.png" /><br />\r\n<br />\r\nข้อมูลจำเพาะ<br />\r\n<br />\r\nจอภาพ<br />\r\n- จอภาพ Retina HD<br />\r\n- จอภาพไวด์สกรีน แบ็คไลท์แบบ LED<br />\r\n- ขนาด 4.7 นิ้ว (แนวทแยง)<br />\r\n- จอภาพ Multi-Touch พร้อมเทคโนโลยี IPS<br />\r\n- ความละเอียด 1334 x 750 พิกเซลที่ 326 ppi<br />\r\n- อัตราส่วนคอนทราสต์ 1400:1 (ทั่วไป)<br />\r\n- จอภาพขอบเขตสีกว้าง (P3)<br />\r\n- ความสว่างสูงสุด 625 cd/m2 (ทั่วไป)<br />\r\n- พิกเซลแบบโดเมนคู่เพื่อการมองในมุมกว้าง<br />\r\n- เคลือบสารกันรอยนิ้วมือ<br />\r\n- รองรับการแสดงผลหลายภาษาและตัวอักษรหลายแบบพร้อมกัน<br />\r\n- คุณสมบัติ &quot;การซูมหน้าจอ&quot;<br />\r\n- คุณสมบัติ &quot;การดึงจอลงเพื่อแตะ&quot;<br />\r\n<br />\r\nการทนน้ำ น้ำที่กระเด็นใส่ และฝุ่น4<br />\r\n- ที่ระดับ IP67 ตามมาตรฐาน IEC 60529<br />\r\n<br />\r\nชิพ<br />\r\n- ชิพ A10 Fusion พร้อมสถาปัตยกรรม 64 บิต<br />\r\n- โปรเซสเซอร์ร่วม M10 สำหรับประมวลผลการเคลื่อนไหวในตัว<br />\r\n<br />\r\nกล้อง<br />\r\n- กล้องความละเอียด 12MP<br />\r\n- รูรับแสงขนาด &fnof;/1.8<br />\r\n- ซูมดิจิตอลได้สูงสุด 5 เท่า<br />\r\n- ระบบป้องกันภาพสั่นไหวแบบออปติคอล<br />\r\n- ชุดเลนส์ 6 ชิ้น<br />\r\n- แฟลช True Tone แบบ LED สี่ดวง<br />\r\n- พาโนรามา (สูงสุด 63 เมกะพิกเซล)<br />\r\n- ผลึกแซฟไฟร์ป้องกันหน้าเลนส์<br />\r\n- เซ็นเซอร์รับแสงด้วยส่วนหลัง<br />\r\n- ฟิลเตอร์ Hybrid IR<br />\r\n- ออโต้โฟกัสพร้อม Focus Pixels<br />\r\n- ระบบการแตะเพื่อโฟกัสพร้อม Focus Pixels<br />\r\n- คุณสมบัติ Live Photos พร้อมระบบป้องกันภาพสั่นไหว<br />\r\n- บันทึกภาพถ่ายและ Live Photos ด้วยขอบเขตสีกว้าง<br />\r\n- การแมปโทนที่ได้รับการปรับปรุง<br />\r\n- ระบบตรวจจับใบหน้าและร่างกาย<br />\r\n- การควบคุมค่าแสง<br />\r\n- การลดนอยซ์<br />\r\n- HDR อัตโนมัติสำหรับภาพถ่าย<br />\r\n- ระบบป้องกันภาพสั่นไหวอัตโนมัติ<br />\r\n- โหมดภาพถ่ายต่อเนื่อง<br />\r\n- โหมดตั้งเวลาถ่ายภาพ<br />\r\n- แนบข้อมูลพิกัดตำแหน่งในภาพถ่าย<br />\r\n<br />\r\nการบันทึกวิดีโอ<br />\r\n- บันทึกวิดีโอระดับ 4K ที่ 30 fps<br />\r\n- บันทึกวิดีโอระดับ HD 1080p ที่ 30 fps หรือ 60 fps<br />\r\n- บันทึกวิดีโอระดับ HD 720p ที่ 30 fps<br />\r\n- ระบบป้องกันภาพสั่นไหวแบบออปติคอลสำหรับวิดีโอ<br />\r\n- ซูมออปติคอล 2 เท่า และซูมดิจิตอล 6 เท่า (เฉพาะ iPhone 7 Plus)<br />\r\n- แฟลช True Tone แบบ LED สี่ดวง<br />\r\n- รองรับวิดีโอสโลว์โมชั่น ความละเอียด 1080p ที่ 120 fps และ 720p ที่ 240 fps<br />\r\n- วิดีโอไทม์แลปส์ พร้อมระบบป้องกันภาพสั่นไหว<br />\r\n- ระบบป้องกันภาพวิดีโอสั่นไหวในคุณภาพระดับภาพยนตร์ (1080p และ 720p)<br />\r\n- วิดีโอออโต้โฟกัสแบบต่อเนื่อง<br />\r\n- ระบบตรวจจับใบหน้าและร่างกาย<br />\r\n- การลดนอยซ์<br />\r\n- ถ่ายภาพนิ่งความละเอียด 8 เมกะพิกเซล ขณะบันทึกวิดีโอ 4K<br />\r\n- ซูมขณะเล่น<br />\r\n- แนบข้อมูลพิกัดตำแหน่งในวิดีโอ<br />\r\n<br />\r\nกล้อง FaceTime HD<br />\r\n- รูปถ่าย 7 เมกะพิกเซล<br />\r\n- บันทึกวิดีโอระดับ HD 1080p<br />\r\n- Retina Flash<br />\r\n- รูรับแสงขนาด &fnof;/2.2<br />\r\n- บันทึกภาพถ่ายและ Live Photos ด้วยขอบเขตสีกว้าง<br />\r\n- HDR อัตโนมัติ<br />\r\n- เซ็นเซอร์รับแสงด้วยส่วนหลัง<br />\r\n- ระบบตรวจจับใบหน้าและร่างกาย<br />\r\n- ระบบป้องกันภาพสั่นไหวอัตโนมัติ<br />\r\n- โหมดภาพถ่ายต่อเนื่อง<br />\r\n- การควบคุมค่าแสง<br />\r\n- โหมดตั้งเวลาถ่ายภาพ<br />\r\n<br />\r\n<img alt="image" src="http://th-live.slatic.net/cms/Content%20Retail%202016/October/app5.png" /><br />\r\n<br />\r\n<img alt="" src="http://th-live.slatic.net/cms/Content%20Retail%202016/October/inbox.jpg" /></p>\r\n\r\n<p>ข้อมูลจำเพาะของ Apple&nbsp;<strong>iPhone 7 128GB (Rose Gold)</strong></p>\r\n\r\n<p>รายการสินค้าในกล่อง</p>\r\n\r\n<ul>\r\n	<li>Apple iPhone 7 128GB x 1 pcs USB Cabler&nbsp;x 1 pcs Adapter&nbsp;x 1 pcs EarPods&nbsp;x 1 pcs</li>\r\n</ul>\r\n\r\n<p>คุณสมบัติทั่วไป</p>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>SKU</td>\r\n			<td>AP067ELAA4UD92ANTH-10372293</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Camera Back</td>\r\n			<td>11-15MP</td>\r\n		</tr>\r\n		<tr>\r\n			<td>กล้องหน้า (เมกะพิกเซล)</td>\r\n			<td>7 MP ขึ้นไป</td>\r\n		</tr>\r\n		<tr>\r\n			<td>สภาพ</td>\r\n			<td>ใหม่</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Screen Size (inches)</td>\r\n			<td>4.7</td>\r\n		</tr>\r\n		<tr>\r\n			<td>โมเดล</td>\r\n			<td>iphone 7</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Network Connections</td>\r\n			<td>4G - LTE</td>\r\n		</tr>\r\n		<tr>\r\n			<td>ระบบปฏิบัติการ</td>\r\n			<td>iOS 10​</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Phone Features</td>\r\n			<td>Touchscreen</td>\r\n		</tr>\r\n		<tr>\r\n			<td>PPI</td>\r\n			<td>300-400 PPI</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Processor Type</td>\r\n			<td>Quad-core</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Size (cm)</td>\r\n			<td>13.8 x 6.8 x 0.8</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Weight (kg)</td>\r\n			<td>0.138</td>\r\n		</tr>\r\n		<tr>\r\n			<td>RAM memory</td>\r\n			<td>2GB</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Screen Type</td>\r\n			<td>IPS LCD</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Slim Slots</td>\r\n			<td>1</td>\r\n		</tr>\r\n		<tr>\r\n			<td>ความจุของหน่วยความจำ</td>\r\n			<td>128GB</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Type of Battery</td>\r\n			<td>Built-in Rechargeable Battery</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Video Resolution</td>\r\n			<td>2160p</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Warranty type</td>\r\n			<td>ไม่มีการรับประกัน</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', 6500, '1481000263iphone.jpg', 'iphone.jpg', 'C:/xampp/htdocs/auction/uploads/1481000263iphone.jpg', 39, 0.5, '2016-12-06 11:57:21', '2016-12-20 22:56:09', 1, 'paly123456', 4),
(39, 1, 'oppo n1', '<p>oppo n1</p>\r\n', 6500, '14822073071480999742iphone.jpg', '1480999742iphone.jpg', 'C:/xampp/htdocs/auction/uploads/14822073071480999742iphone.jpg', 0, 0.5, '2016-12-20 11:15:07', '2016-12-21 11:15:03', 1, '---', 0);

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `bank_id` int(100) NOT NULL,
  `bank_name` varchar(255) NOT NULL,
  `bank_num` int(100) NOT NULL,
  `bank_members` varchar(255) NOT NULL,
  `bank_branch` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`bank_id`, `bank_name`, `bank_num`, `bank_members`, `bank_branch`) VALUES
(1, 'ธนาคารกรุงไทย', 1234567890, 'toh', 'พระราม 8');

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
(5, 'BidPack 100', '500'),
(6, 'BidPack 200', '1000'),
(7, 'BidPack 500', '2500'),
(8, 'BidPack 1000', '5000');

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
(1, 'logo.png', 'Bidcups - ประมูล เริ่มต้นแค่ 1 บาท ประหยัดถึง 99%!', 'ที่ Bidcups ซื้อของออนไลน์ สินค้าสุด Cool ที่ตอบโจทย์ Lifestyle ลดถึง 50% หรือ ประมูล เริ่มต้น 1 บาท ลุ้นประหยัดถึง 99%! ประหยัดได้จริง มากกว่า 500 คนที่ได้สินค้ากลับบ้านอย่างมีความสุข ไม่ว่าจะเป็นโทรศัพท์มือถือ แท็บเล็ต Power Bank', 'บิท,บิทคลับ,bidcups,ซื้อของออนไลน์', '© 2016 BidCups Online Co., Ltd. All rights reserved.', '2086 ถนนรามคำแหง แขวงหัวหมาก เขตบางกะปิ กรุงเทพมหานคร 10240', 'bidcups_88@gmail.com', '@bidcups', '02-12345678', 'www.facebook.com', 'www.youtube.com', 'www.twitter.com', 'www.plus.google.com');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `his_id` int(100) NOT NULL,
  `mem_id` int(100) NOT NULL,
  `auc_id` int(100) NOT NULL,
  `mem_name` varchar(255) NOT NULL,
  `auc_title` varchar(255) NOT NULL,
  `his_date` datetime NOT NULL,
  `his_price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`his_id`, `mem_id`, `auc_id`, `mem_name`, `auc_title`, `his_date`, `his_price`) VALUES
(41, 4, 37, 'paly123456', 'Iphone 6', '2016-12-07 04:31:45', 3.5),
(42, 4, 38, 'paly123456', 'oppo n1', '2016-12-07 10:32:31', 2.5),
(43, 3, 38, 'paly1234', 'oppo n1', '2016-12-07 10:33:01', 3),
(44, 3, 37, 'paly1234', 'Iphone 6', '2016-12-07 10:40:46', 4),
(45, 4, 37, 'paly123456', 'Iphone 6', '2016-12-07 11:19:31', 4.5),
(46, 4, 38, 'paly123456', 'oppo n1', '2016-12-07 11:22:39', 3.5),
(47, 3, 38, 'paly1234', 'oppo n1', '2016-12-07 11:24:26', 4),
(48, 3, 37, 'paly1234', 'Iphone 6', '2016-12-07 11:27:52', 5),
(49, 4, 37, 'paly123456', 'Iphone 6', '2016-12-07 11:28:18', 5.5),
(50, 4, 38, 'paly123456', 'oppo n1', '2016-12-07 11:28:28', 4.5),
(51, 3, 37, 'paly1234', 'Iphone 6', '2016-12-07 11:43:27', 6),
(52, 3, 38, 'paly1234', 'oppo n1', '2016-12-07 17:23:34', 5),
(53, 4, 37, 'paly123456', 'Iphone 6', '2016-12-07 17:28:48', 6.5),
(54, 4, 38, 'paly123456', 'Iphone 7', '2016-12-07 17:39:01', 5.5),
(55, 3, 37, 'paly1234', 'Iphone 7', '2016-12-08 02:13:33', 7),
(56, 3, 38, 'paly1234', 'Iphone 7', '2016-12-08 02:13:56', 6),
(57, 4, 37, 'paly123456', 'Iphone 7', '2016-12-08 02:17:56', 7.5),
(58, 3, 37, 'paly1234', 'Iphone 7', '2016-12-08 02:25:21', 8),
(59, 4, 38, 'paly123456', 'Iphone 7', '2016-12-08 02:32:04', 6.5),
(60, 4, 37, 'paly123456', 'Iphone 7', '2016-12-08 02:32:11', 8.5),
(61, 3, 38, 'paly1234', 'Iphone 7', '2016-12-08 02:32:42', 7),
(62, 3, 37, 'paly1234', 'Iphone 7', '2016-12-08 02:32:45', 9),
(63, 4, 38, 'paly123456', 'Iphone 7', '2016-12-08 02:33:12', 7.5),
(64, 3, 38, 'paly1234', 'Iphone 7', '2016-12-14 22:52:42', 8),
(65, 4, 38, 'paly123456', 'Iphone 7', '2016-12-14 22:55:31', 8.5),
(66, 4, 37, 'paly123456', 'Iphone 7', '2016-12-14 22:59:18', 9.5),
(67, 3, 37, 'paly1234', 'Iphone 7', '2016-12-14 23:02:31', 10),
(68, 3, 38, 'paly1234', 'Iphone 7', '2016-12-14 23:13:58', 9),
(69, 4, 37, 'paly123456', 'Iphone 7', '2016-12-14 23:20:06', 10.5),
(70, 4, 38, 'paly123456', 'Iphone 7', '2016-12-14 23:20:18', 9.5),
(71, 3, 37, 'paly1234', 'Iphone 7', '2016-12-14 23:21:49', 11),
(72, 3, 38, 'paly1234', 'Iphone 7', '2016-12-14 23:28:56', 10),
(73, 4, 37, 'paly123456', 'Iphone 7', '2016-12-14 23:29:14', 11.5),
(74, 3, 37, 'paly1234', 'Iphone 7', '2016-12-15 00:14:48', 12),
(75, 4, 37, 'paly123456', 'Iphone 7', '2016-12-15 00:17:40', 12.5),
(76, 4, 38, 'paly123456', 'Iphone 7', '2016-12-15 00:17:48', 10.5),
(77, 3, 37, 'paly1234', 'Iphone 7', '2016-12-15 00:18:17', 13),
(78, 3, 38, 'paly1234', 'Iphone 7', '2016-12-15 00:23:28', 11),
(79, 4, 37, 'paly123456', 'Iphone 7', '2016-12-15 00:24:43', 13.5),
(80, 4, 38, 'paly123456', 'Iphone 7', '2016-12-15 00:24:56', 11.5),
(81, 3, 37, 'paly1234', 'Iphone 7', '2016-12-15 00:25:10', 14),
(82, 3, 38, 'paly1234', 'Iphone 7', '2016-12-15 00:25:15', 12),
(83, 4, 37, 'paly123456', 'Iphone 7', '2016-12-15 00:29:48', 14.5),
(84, 4, 38, 'paly123456', 'Iphone 7', '2016-12-15 01:15:37', 12.5),
(85, 3, 38, 'paly1234', 'Iphone 7', '2016-12-15 02:04:43', 13),
(86, 3, 37, 'paly1234', 'Iphone 7', '2016-12-15 02:10:10', 15),
(87, 4, 38, 'paly123456', 'Iphone 7', '2016-12-15 02:17:02', 13.5),
(88, 4, 37, 'paly123456', 'Iphone 7', '2016-12-15 02:17:06', 15.5),
(89, 6, 38, 'paly12345', 'Iphone 7', '2016-12-15 17:34:55', 14),
(90, 6, 37, 'paly12345', 'Iphone 7', '2016-12-15 17:35:33', 16),
(91, 3, 38, 'paly1234', 'Iphone 7', '2016-12-15 17:36:33', 14.5),
(92, 3, 37, 'paly1234', 'Iphone 7', '2016-12-15 17:36:33', 16.5),
(93, 6, 38, 'paly12345', 'Iphone 7', '2016-12-15 17:41:49', 15),
(94, 3, 38, 'paly1234', 'Iphone 7', '2016-12-15 18:08:53', 15.5),
(95, 4, 38, 'paly123456', 'Iphone 7', '2016-12-15 22:55:09', 16),
(96, 4, 37, 'paly123456', 'Iphone 7', '2016-12-15 23:20:36', 17),
(97, 4, 37, 'paly123456', 'Iphone 7', '2016-12-15 23:20:36', 17),
(98, 3, 38, 'paly1234', 'Iphone 7', '2016-12-15 23:32:55', 16.5),
(99, 3, 37, 'paly1234', 'Iphone 7', '2016-12-15 23:50:34', 17.5),
(100, 4, 38, 'paly123456', 'Iphone 7', '2016-12-16 13:11:49', 17),
(101, 3, 38, 'paly1234', 'Iphone 7', '2016-12-16 13:12:21', 17.5),
(102, 4, 38, 'paly123456', 'Iphone 7', '2016-12-16 13:12:49', 18),
(103, 3, 38, 'paly1234', 'Iphone 7', '2016-12-16 13:17:22', 18.5),
(104, 4, 38, 'paly123456', 'Iphone 7', '2016-12-16 13:17:46', 19),
(105, 3, 38, 'paly1234', 'Iphone 7', '2016-12-16 13:18:46', 19.5),
(106, 4, 38, 'paly123456', 'Iphone 7', '2016-12-16 13:24:25', 20),
(107, 3, 38, 'paly1234', 'Iphone 7', '2016-12-16 13:24:59', 20.5),
(108, 4, 38, 'paly123456', 'Iphone 7', '2016-12-19 08:58:21', 21),
(109, 3, 38, 'paly1234', 'Iphone 7', '2016-12-19 09:08:21', 21.5),
(110, 4, 38, 'paly123456', 'Iphone 7', '2016-12-19 09:08:48', 22),
(111, 3, 38, 'paly1234', 'Iphone 7', '2016-12-19 09:10:12', 22.5),
(112, 4, 38, 'paly123456', 'Iphone 7', '2016-12-19 09:20:13', 23),
(113, 3, 38, 'paly1234', 'Iphone 7', '2016-12-19 09:31:10', 23.5),
(114, 3, 38, 'paly1234', 'Iphone 7', '2016-12-19 09:31:11', 23.5),
(115, 4, 38, 'paly123456', 'Iphone 7', '2016-12-19 09:32:20', 24),
(116, 3, 38, 'paly1234', 'Iphone 7', '2016-12-19 09:33:20', 24.5),
(117, 4, 38, 'paly123456', 'Iphone 7', '2016-12-19 09:35:21', 25),
(118, 3, 38, 'paly1234', 'Iphone 7', '2016-12-19 09:38:21', 25.5),
(119, 4, 38, 'paly123456', 'Iphone 7', '2016-12-19 09:45:32', 26),
(120, 3, 38, 'paly1234', 'Iphone 7', '2016-12-19 10:08:41', 26.5),
(121, 4, 38, 'paly123456', 'Iphone 7', '2016-12-19 10:11:51', 27),
(122, 3, 38, 'paly1234', 'Iphone 7', '2016-12-19 10:13:01', 27.5),
(123, 4, 38, 'paly123456', 'Iphone 7', '2016-12-19 10:14:17', 28),
(124, 3, 38, 'paly1234', 'Iphone 7', '2016-12-19 10:15:27', 28.5),
(125, 4, 38, 'paly123456', 'Iphone 7', '2016-12-19 10:21:34', 29),
(126, 3, 38, 'paly1234', 'Iphone 7', '2016-12-19 10:21:55', 29.5),
(127, 4, 38, 'paly123456', 'Iphone 7', '2016-12-19 10:23:06', 30),
(128, 3, 38, 'paly1234', 'Iphone 7', '2016-12-19 14:16:57', 30.5),
(129, 4, 38, 'paly123456', 'Iphone 7', '2016-12-19 14:18:01', 31),
(130, 3, 38, 'paly1234', 'Iphone 7', '2016-12-19 14:21:01', 31.5),
(131, 4, 38, 'paly123456', 'Iphone 7', '2016-12-19 14:26:02', 32),
(132, 3, 38, 'paly1234', 'Iphone 7', '2016-12-19 14:29:06', 32.5),
(133, 4, 38, 'paly123456', 'Iphone 7', '2016-12-19 14:30:05', 33),
(134, 3, 38, 'paly1234', 'Iphone 7', '2016-12-19 14:31:01', 33.5),
(135, 4, 38, 'paly123456', 'Iphone 7', '2016-12-19 14:33:11', 34),
(136, 3, 38, 'paly1234', 'Iphone 7', '2016-12-19 14:35:22', 34.5),
(137, 4, 38, 'paly123456', 'Iphone 7', '2016-12-19 14:50:21', 35),
(138, 3, 38, 'paly1234', 'Iphone 7', '2016-12-19 14:51:07', 35.5),
(139, 4, 38, 'paly123456', 'Iphone 7', '2016-12-19 14:51:34', 36),
(140, 3, 38, 'paly1234', 'Iphone 7', '2016-12-19 14:52:31', 36.5),
(141, 4, 38, 'paly123456', 'Iphone 7', '2016-12-19 15:08:05', 37),
(142, 3, 38, 'paly1234', 'Iphone 7', '2016-12-19 15:08:21', 37.5),
(143, 4, 38, 'paly123456', 'Iphone 7', '2016-12-19 15:09:41', 38),
(144, 3, 38, 'paly1234', 'Iphone 7', '2016-12-19 22:45:50', 38.5),
(145, 4, 38, 'paly123456', 'Iphone 7', '2016-12-19 22:46:55', 39),
(146, 4, 37, 'paly123456', 'Iphone 7', '2016-12-20 11:32:37', 18),
(147, 3, 37, 'paly1234', 'Iphone 7', '2016-12-21 00:09:29', 18.5);

-- --------------------------------------------------------

--
-- Table structure for table `img_slider`
--

CREATE TABLE `img_slider` (
  `img_id` int(100) NOT NULL,
  `img_newname` varchar(255) NOT NULL,
  `img_name` varchar(100) NOT NULL,
  `img_path` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `img_slider`
--

INSERT INTO `img_slider` (`img_id`, `img_newname`, `img_name`, `img_path`) VALUES
(23, '148061366811.jpg', '11.jpg', 'C:/xampp/htdocs/auction/uploads/148061366811.jpg'),
(24, '148061367212.jpg', '12.jpg', 'C:/xampp/htdocs/auction/uploads/148061367212.jpg'),
(25, '148061367613.jpg', '13.jpg', 'C:/xampp/htdocs/auction/uploads/148061367613.jpg');

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
  `mem_gender` varchar(100) NOT NULL,
  `mem_tel` varchar(255) NOT NULL,
  `mem_address` varchar(255) NOT NULL,
  `mem_province` varchar(255) NOT NULL,
  `mem_postcode` varchar(10) NOT NULL,
  `mem_username` varchar(255) NOT NULL,
  `mem_pass` varchar(32) NOT NULL,
  `mem_email` varchar(255) NOT NULL,
  `mem_date` datetime NOT NULL,
  `mem_bid` int(100) NOT NULL,
  `mem_verify` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`mem_id`, `mem_fname`, `mem_lname`, `mem_birth_day`, `mem_birth_month`, `mem_birth_year`, `mem_gender`, `mem_tel`, `mem_address`, `mem_province`, `mem_postcode`, `mem_username`, `mem_pass`, `mem_email`, `mem_date`, `mem_bid`, `mem_verify`) VALUES
(4, 'Jirachot1112', 'Aphirangsimun1112', '12', '08', '1999', 'Male', '0875696451', '302/39 ม.1 ต.ฟากห้วย อ.อรัญประเทศ', 'สระแก้ว', '27120', 'paly123456', 'e10adc3949ba59abbe56e057f20f883e', 'jirachot234@gmail.com', '0000-00-00 00:00:00', 0, 1),
(5, 'pongsi', 'custom', '26', '11', '2000', 'Male', '0801234567', '302/39 ม.1 ต.ฟากห้วย อ.อรัญประเทศ', 'นครราชสีมา', '30120', 'pongsi', 'e10adc3949ba59abbe56e057f20f883e', 'pongsi@gmail.com', '0000-00-00 00:00:00', 10, 0),
(6, 'test', 'test', '23', '02', '1993', 'Male', '0875696451', '124 ต.ฟากห้วย อ.อรัญประเทศ', 'สระแก้ว', '27120', 'paly12345', 'e10adc3949ba59abbe56e057f20f883e', 'jirachot2345@gmail.com', '0000-00-00 00:00:00', 0, 0),
(27, 'Jirachot', 'Aphirangsimun', '14', '03', '1990', 'Male', '0875696451', '302/39', 'ตาก', '27120', 'paly1234', 'e10adc3949ba59abbe56e057f20f883e', 'jirachot23@gmail.com', '2016-12-21 23:11:40', 0, 1);

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
  `menu_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menu_id`, `menu_name`, `menu_title`, `menu_meta_des`, `menu_meta_key`, `menu_description`) VALUES
(13, 'เกี่ยวกับเรา', 'about_me', 'about_me', 'about_me', '<p>Dinoza ทุกคนคือผู้ชนะและทุก bid คือการลดราคา</p>\r\n\r\n<p>สวัสดีและยินดีต้อนรับเพื่อนๆสู่ Dinoza! เว็บไซต์ประมูลความเร็วสูง กระเป๋าหนักแต่ราคาเบา ตื่นเต้น เฮฮา ฉับไว ทันใจ ซื่อตรงในการมอบความสุขให้ผู้ประมูลทุกคน! พูดจริงไม่มีโม้! ที่ Dinoza เราไม่ปล่อยให้ใครกลับบ้านมือเปล่า!</p>\r\n\r\n<p>ทุกสิ่งที่ ฮอท ฮิท ติดปีก อยู่ในตอนนี้ โทรศัพท์มือถือ อุปกรณ์อิเล็กทรอนิกค์ สินค้าแบรนด์ดัง เรามีทุกอย่าง! และบอกได้เลยว่ามันสามารถราคาถูกจนไม่น่าเชื่อ แต่ก็ต้องเชื่อครับเมื่อเพื่อนลองเข้าไปเดินเล่นในเว็บเพื่อนก็จะรู้ว่ามันจะราคาถูกได้จนน่าซื้อยกเข่งขนาดไหน! พบเจออะไรกระแทกเข้าตามาก็อย่าให้ใจมาหยุดยั้งครับ ซื้อ bid ราคาย่อมเยาของเราแล้วเริ่มประมูลเอาของได้เลยทันที!</p>\r\n\r\n<p>เมื่อเพื่อนลง bid ไปแล้วเราจะให้โอกาสเพื่อนๆคนอื่นอย่างมากก็ 20 วินาทีในการลง bid บ้าง ถ้าไม่มีคนลง bid ตามจนเวลาหมดลงก็ 3&hellip; 2&hellip; 1&hellip; ขาย! ให้กับผู้โชคดีท่านนั้นที่เพิ่งใช้เศษเงินในกระเป๋าซื้อของราคาแพงที่ปกติต้องเก็บเงินซื้อเป็นเดือนๆ! &nbsp;</p>\r\n\r\n<p>แล้วถ้าไม่ชนะล่ะ? ก็บอกแล้วว่าที่ Dinoza เราไม่มีผู้แพ้ ถ้าหากเพื่อนประมูลสินค้าที่ต้องการไม่สำเร็จ เพื่อนสามารถซื้อสินค้าในราคาที่ลดลงมาด้วยการเลือก Buy Now แล้วสินค้าชิ้นนั้นจะกลายเป็นของเพื่อนในราคาที่ไม่สูงกว่าราคาปกติของสินค้า</p>\r\n\r\n<p>ที่ Dinoza ทุก bid ไม่สูญเปล่า bid ไม่ชนะก็เอาติดมาลดราคา!</p>\r\n\r\n<h3>ความเป็นมาของ Dinoza</h3>\r\n\r\n<p>ประเทศไทยปี พ.ศ. 2557 Dinoza ได้กำเนิดขึ้นมา โดยมีจุดมุ่งหมายที่จะสร้างรูปแบบการประมูลออนไลน์ที่ สนุกสนาน ปลอดภัย และที่สำคัญที่สุดคือน่าเชื่อถือและโปร่งใส</p>\r\n\r\n<p>เป้าหมายหนึ่งเดียวของเราคือ การเป็นเว็บไซต์ประมูลออนไลน์ ที่สามารถให้ข้อเสนอทางด้านสินค้าและราคาแก่ผู้ประมูลได้ดีกว่าเว็บไซต์อื่นๆเท่าที่มีอยู่และจะมีขึ้นมาแข่งกับเราในอนาคต เพื่อเพื่อนๆทุกท่าน ภารกิจของเราคือการเป็นที่หนึ่ง นำหน้าเหนือเว็บไซต์ประมูลอื่นในทุกย่างก้าว</p>\r\n\r\n<p>สมาชิกแต่ละคนในทีม Dinoza มีประสบการณ์หลายสิบปีในสายงานที่จะเสริมให้ Dinoza เติมโตขึ้นอย่างแข็งแกร่งไม่แพ้ใคร ไม่ว่าจะเป็น การทำการตลาดทางอินเตอร์เน็ต เศรษฐศาสตร์ การเงิน และวิทยาศาสตร์คอมพิวเตอร์&nbsp;</p>\r\n\r\n<p>เรามีความมั่นใจอย่างเต็มเปี่ยมว่าเราจะยิ่งใหญ่ตามที่สัญญาเอาไว้ เราจะทำทุกวิถีทางที่จะทำให้สินค้าของเรามีราคาต่ำที่สุด เพื่อมอบข้อเสนอที่ดีที่สุดให้กับเพื่อนๆ</p>\r\n'),
(15, 'นโยบาย', 'mission', 'mission', 'mission', '<p>mission</p>\r\n'),
(16, 'Bid ยังไงให้ชนะ', 'winbid', 'winbid', 'winbid', '<p>Bid ยังไงให้ชนะ<br />\r\nเพื่อนๆเคยสงสัยมั้ยครับว่าทำไมคนบางคนถึงได้ประมูลสินค้า BidCups ชนะตลอดเวลา ชนะกันเป็นว่าเล่น ชนะจนเป็นธรรมชาติ รู้สึกยกย่องปนอิจฉาทุกครั้งที่ภาพของผู้ชนะท่านนั้นเด้งขึ้นมาจนต้องอุทานด้วยความเสียดายรางวัลใหญ่นั้นว่า &ldquo;โอ้ยยย โชคดีจังเลย!&rdquo;</p>\r\n\r\n<p>ในฐานะที่พวกเราทีมงาน BidCups ไม่สามารถจะร่วมประมูลได้ เรารู้สึกเสียดายโอกาสดีๆกับสินค้าเยี่ยมๆพวกนี้เหมือนกันครับ แต่เราบอกได้เลยว่าการชนะประมูลใน BidCups ไม่ได้เกี่ยวอะไรกับโชคเลย ทำบุญมา 9 วัดก็ไม่ได้ช่วย</p>\r\n\r\n<p>ด้วยความที่เราติดต่อ พูดคุย รับความเห็นจากเพื่อนๆที่เข้ามาร่วมประมูลโดยตลอด ไม่ว่าจะเป็นทางโทรศัพท์จากแผนกลูกค้าสัมพันธ์ของเรา หรือว่าจะหน้าเฟสบุ๊คกับทวิตเตอร์ เราได้สังเกตเห็นเคล็ดลับๆน่าศึกษาของเพื่อนๆที่ชนะบ่อยๆ</p>\r\n\r\n<p>เอาล่ะ ตอนนี้เราก็จะมาเผยให้เคล็ดลับกลายเป็นเคล็ดไม่ลับกันนะครับ กระจายชัยชนะกันซะหน่อย จะได้สนุกกันท้วนหน้า!</p>\r\n\r\n<p>1. ใจเย็นๆ<br />\r\nจะประสบความสำเร็จได้ในการประมูลของ BidCups เพื่อนๆต้องใจเย็นๆและค่อยๆดูสินค้าที่อยากเข้าไปร่วมประมูล ลองคุยกับตัวเองตามคำถามพวกนี้ดูครับ</p>\r\n\r\n<p>ราคา Buy Now ของสินค้าชิ้นนั้นอยู่ที่เท่าไหร่ และเพื่อนๆอยากจะใช้ตัวเลือกนั้นขนาดไหน<br />\r\nเพื่อนๆจะใช้กี่ bids สำหรับการประมูลครั้งนี้<br />\r\nมีอีกกี่สินค้าที่เพื่อนๆสามารถประมูลได้ภายใน 24 ชั่วโมงข้างหน้า และที่เวลากี่โมง<br />\r\nเวลาเผด็จศึกสินค้าที่เพื่อนๆอยากได้คือเวลาที่เราตอบคำถามข้างบนทั้งหมดแล้วคำตอบฟังดูดีสำหรับเรา แต่ก็แน่นอน กว่าจังหวะนั้นจะมาถึงเราได้ก็ต้องมีความใจเย็นกันหน่อยนะครับ</p>\r\n\r\n<p>2. ฉลาดแล้วต้องเฉลียว<br />\r\nการมียุทธศาสตร์ในการประมูลอาจทำให้ชนะไปแล้วครึ่งนึง อันนี้ถึงเราจะมีความใจเย็นแล้วแต่ก็ขาดยุทธศาสตร์ไม่ได้ เพราะนี่คือตัวแปรที่เราจะใช้กำจัดคู่แข่ง ไม่ว่าจะเป็นเรื่องของเวลา หรือความสนใจของผู้ประมูลท่านอื่นในสินค้านั้น</p>\r\n\r\n<p>3. ปฏิบัติ<br />\r\nนี่แหละครับอีกครึ่งนึงของการคว้าชัย ยุทธศาสตร์จะดีขนาดไหนแต่ถ้าการปฎิบัติไม่หนักแน่นก็ตายตั้งแต่ในมุ้ง ถึงความกล้าตัดสินใจจะไม่ใช่สิ่งที่จะทำให้เราชนะเสมอไป แต่เชื่อเราเถอะว่ามันดีกว่าการอ้อยอิ่งรอโน่นรอนี่ จะ Bid ดีหรือไม่ดี โอ้ย! เมื่อยแทน! การประมูลของ BidCups เคลื่อนตัวอย่างรวดเร็วครับ ถ้าคิดว่าอยากได้สินค้าชินนี้ มันต้องเป็นของเราให้ได้ ก็จัดมา! จัดมาให้ตัวเองให้ได้! อย่ามัวแต่นั่งกลัวในขณะที่คนอื่นเค้าลุยกันไปถึงไหนแล้ว</p>\r\n\r\n<p>4. มีสมาธิ<br />\r\nสินค้าถูกๆ ละลานตาใน BidCups อย่างนี้ ก็เข้าใจนะครับว่าจะลืมเป้าหมายที่เล็งไว้เอาง่ายๆ จงมีสมาธิกับสินค้าที่เพื่อนๆอยากได้ เขียนแปะไว้ใกล้ๆคอมก็ได้ครับ เอามันไว้ตรงหน้าและเอามาให้ได้</p>\r\n\r\n<p>5. มีหัวในการบริหาร<br />\r\nด้วยความที่ทีมงานทำงานกันหนักมาก BidCups จึงเป็นเว็บประมูลที่ใหญ่ และมีอะไรเกิดขึ้นตลอดเวลา วิธีต่างๆที่จะได้ Bid เพิ่มโดยไม่ต้องเสียเงิน และก็อย่าลืมว่าได้ปรับการตั้งค่าของบัญชีว่าเป็นยังไงบ้าง ที่ว่ามา 2 อย่างนี้เป็นแค่ส่วนนึงที่ควรทำให้เป็นนิสัยทุกวัน สร้างนิสัยเพื่อความสำเร็จครับ</p>\r\n\r\n<p>แต่ทุกคนก็ได้เปรียบครับ ด้วย My BidCups ที่จะช่วยควบคุมงานบริหารจัดการสิ่งเหล่านี้ แต่ยังไงเพื่อนๆก็ควรจะอัพเดทตัวเองและขยันอ่านเกร็ดความรู้ต่างๆนะครับ โดยเฉพา BidCups blog ที่อ่านกันอยู่ตอนนี้ เรารวบรวมทุกสิ่งมาให้ท่านศึกษาเพื่อชัยชนะครับ</p>\r\n\r\n<p>6. คงเส้นคงวา<br />\r\nเอ้อ ไหนๆก็พูดถึง BidCups blog กันหน่อยนะครับ เราอัพเดทกันทุกอาทิตย์ เลยอยากแนะนำให้เพื่อนๆเข้ามาอัพเดทความรู้ตัวเองกันในนี้ให้บ่อยพอๆกันนะครับ ความรู้ใหม่ทุกอันจะช่วยให้โอกาสสำเร็จมีมากขึ้น หรือจะทบทวนความรู้ที่เคยอ่านมาแล้วให้แตกฉานยิ่งขึ้น feature ใหม่ๆก็มีให้ศึกษาตลอดเวลา รวมไปถึงโปรเด็ดๆไม่มีเสียตังค์เราก็นำเสนอในรายละเอียดในนี้ครับ อ่าน BidCups blog บ่อยๆ เป็นคนวงในแล้วรู้อะไรมากกว่าคนอื่นเยอะครับ</p>\r\n\r\n<p>7. จัดเต็มเมื่อโอกาสมา<br />\r\nบางทีก็ต้องลุยกันให้รู้ดีรู้ชั่วไปเลยครับ ผู้ประมูล BidCups ที่ประสพความสำเร็จส่วนมาก อ้อ ความสำเร็จในที่นี้หมายถึงชนะการประมูลมากที่สุดนะครับ คือเรียกว่าใช้เศษตังค์ในกระเป๋ามาโยนเล่นแล้วได้ของหนักกลับไปเลยทีเดียว กลุ่มนี้มีลักษณะไม่ยอมคนครับ ถ้าเพื่อนๆใช้เวลาเป็นเดือนๆเก็บหอมรอมริบ Bid มาจนมี Bid เป็นพันๆไว้ในมือเผื่อวันนึงจะได้ HDTV มาครอบครอง ก็ถึงเวลาแล้วครับ เทให้หมดหน้าตักแล้วเอาทีวีกลับบ้านมาให้ได้</p>\r\n\r\n<p>ข้อควรจำเพื่อชัยชนะ&nbsp;<br />\r\nอยากจะรวยล้นฟ้าจาก Dinaza ใช่มั้ยครับ เอาขนาดทุกห้องในบ้านมี HDTV ติด ทุกห้องน้ำมี laptop ประจำห้อง มีมือถือเป็นกองๆเอาไว้แจกเพื่อนเล่น ดีมั้ยครับ</p>\r\n\r\n<p>ก็ฟังดูเว่อไปนิดนึง แต่ยอมรับเถอะว่าความคาดหวังต่อการประมูลในตอนแรกมันเป็นอะไรประมาณนี้จริงๆ ทางทีมงานก็ไม่อยากปลุกให้เพื่อนๆตื่นจากฝันหรอกนะครับ แต่มันเป็นไปไม่ด้ายยย เรื่องจิ้นทั้งนั้น มันไม่จริงครับบอกได้เลย มันไม่มีวิธีไหนบนโลกที่จะทำให้เพื่อนๆได้สินค้าแพงๆมาเชยชมที่บ้านฟรีๆทุกวี่ทุกวันหรอก<br />\r\nแต่เพื่อเป็นแนวทางในการดำรงการประมูลให้เป็นไปอย่างผาสุก เรามีบทบัญญัติไม่กี่ข้อให้เพื่อนๆลองทำตามดูเวลาร่วมประมูล เรียกว่าเป็นศีล 5 แหง BidCups ละกันนะครับ ลองปฏิบัติตามดู</p>\r\n\r\n<p>รู้จักตัวเอง<br />\r\nอันนี้ไม่เกี่ยวอะไรกับการเดินทางหาตัวตนทางจิตวิญญาณ หรือปลุกขุมพลังภายในอะไรนะครับ แต่มันเกี่ยวกับการที่เราต้องตระหนักว่าการจะประมูลได้สินค้าที่มีคุณค่าสูง เราต้องมีทั้งความสามารถ ความใจเย็น และจำนวน Bid ยิ่งพวกสินค้าที่ต้องประมูลกันยาวๆนี่ต้องยิ่งมีความใจเย็นมากขึ้นไปอีก</p>\r\n\r\n<p>ลองคิดอย่างนี้ดูนะครับ น่าจะพอช่วยให้เห็นภาพทุกอย่างง่ายขึ้นและชนะบ่อยขึ้น การประมูลยาวๆก็คล้ายๆกับการแข่งขันวิ่งระยะไกล ถ้าเพื่อนๆไม่เคยได้ซ้อมระยะนี้มาก่อนก็เหมือนกับว่าเสียเปรียบตั้งแต่จะเริ่มวิ่งแล้ว เพราะคนอื่นๆเค้าซ้อมมาจนมีทั้งกำลังและกลยุทธ</p>\r\n\r\n<p>การรู้ว่ารายการประมูลระดับไหนที่ตัวเพื่อนๆเองน่าจะมีโอกาสชนะได้มากที่สุดเป็นความรู้ที่สำคัญมาก</p>\r\n\r\n<p>รู้ขอบเขตของตัวเอง&nbsp;<br />\r\nไม่มีใครอยากอดออมหรอกครับ ถ้าไม่จำเป็น แต่ทุกคนก็ต้องเก็บเงินกันใช่มั้ยครับ ทุกบาททุกสตางค์ของเพื่อนๆมีค่าครับ อย่าลืมนะครับว่าเพื่อนๆต้องพินิจพิเคราะห์เองด้วย และต้องตัดสินใจให้เป็นเมื่อถึงเวลาที่จะกดปุ่ม Buy Now เวลาที่ Bid เริ่มกองสูงขึ้นมาเรื่อยๆ เราต้องรู้จักขอบเขตของตัวเองนะครับ</p>\r\n\r\n<p>รู้จักระดับผู้แข่งขันในการประมูล&nbsp;<br />\r\nเรื่องนี้น่าจะเคยได้ยินมาแล้วนะครับ จากคนอื่นหรือไม่ก็ตามกระทู้ต่างๆ เป็นเรื่องจริงที่น่ากลัวครับ Bidder บางคนเค้าไม่อ่อนข้อจริงๆ ไม่ยอมแพ้แม้จะต้องเสียเงินเป็น 2 เท่าของราคาสินค้า</p>\r\n\r\n<p>สำหรับคนกลุ่มนั้น เราเห็นก็เสียดาย Bid และเงินแทนนะครับ ก็อยากจะให้เพื่อนๆดูกันให้ออกว่าคนเหล่านี้อยู่ในประมูลด้วยหรือเปล่า แล้วพยายามหลีกเลี่ยงให้ได้ อ้อ อันนี้ก็ความรู้ทั่วไปอีกอย่างนะครับว่าการประมูลไหนมีคนร่วมเยอะๆก็อย่าไปสร้างแข่งขันให้เค้าเพิ่มดีกว่า มีแต่เสียครับ</p>\r\n\r\n<p>รู้ว่าต้องลุย!<br />\r\nทุกคนอยากใช้เงินไม่กี่บาทเพื่อที่จะประมูลของมูลค่าสูงๆครับ แต่ก็ต้องเตือนตัวเองว่าบางทีเราก็ต้องตัดใจทิ้งการประมูลบางอันในขณะที่เราลง Bid ไปเป็นมูลค่า 1/3 ของราคาสินค้าไปแล้ว เรารู้มาว่าเพื่อนๆที่พร้อมลง Bid ไปในจำนวนที่ว่านี้มีสถิติที่จะชนะประมูลมากกว่าคนอื่น เราจะต้องยอมเสีย Bid เล็กน้อยเพื่อที่จะชนะรางวัลใหญ่ครับ</p>\r\n\r\n<p>รู้จักฉวยโอกาส<br />\r\nการฉวยโอกาสในที่นี้คือฉวยโอกาสเอา Bid ฟรีๆครับ อย่าลืมว่าด้วยเพื่อนทุกคนที่เพื่อนๆแนะนำ BidCups ไป เพื่อนจะได้รับ Bid ฟรีๆจำนวน 25 Bid อย่างนี้ก็ต้องเริ่มคุยแล้วครับ ยิ่งแนะนำเยอะเพื่อนๆยิ่งได้เยอะ แต่ขอความกรุณาชี้แนะเพื่อนที่เราจะแนะนำให้สมัครสมาชิก BidCups ว่าเว็บไซต์ประมูลสินค้าความเร็วสูงเป็นอะไร และให้เค้าได้อ่านรายละเอียดในหมวด BidCups 101 และ Terms &amp; Conditions ของเราก่อนที่จะเริ่มเล่นนะครับ</p>\r\n\r\n<p>เราอยากจะให้เพื่อนและครอบครัวของทุกคนได้มาสนุกสนานกันใน BidCups แต่เราก็อยากให้ทุกท่านที่เข้าร่วมมีความคุ้นเคยกับ BidCups ก่อน จะได้ไม่ซ้ำรอย &ldquo;3 ความผิดพลาดที่ผู้เริ่มเล่นใหม่ทำ&rdquo;</p>\r\n\r\n<p>บอกได้เลยว่าน่าจะประมูลไม่สำเร็จแน่ๆถ้าผู้เล่นใหม่ไม่ทำความเข้าใจ BidCups ก่อนเริ่มนะครับ ทีนี้ก็จะไม่สนุกแล้ว เราเสียใจแทนครับ เพราะฉะนั้นกรุณาติวกันให้ดีก่อนชวนมาเริ่มเล่นครับ!</p>\r\n\r\n<p>ถ้าเบสิคกล้าแข็งกันแล้วก็&hellip; แนะนำกันมาเล่นกี่คนก็ได้ครับ!</p>\r\n\r\n<p>สรุปนะครับ &ndash; วิเคราะห์ให้ดีๆ รู้ว่าตัวเรามีกำลังการประมูลเท่าไหร่ และพร้อมจะใช้งบขนาดไหน ตั้งเป้าหมายให้ตัวเองเมื่อเริ่มเล่น แล้วพยายามอย่าวอกแวกจากเป้าหมายนั้น รู้จักว่าควรหยุดประมูลเมื่อไหร่ และอย่าลืมว่าปุ่ม Buy Now อยู่ใกล้แค่เพียงคลิ๊กเดียว รู้จักระดับการแข่งขันจากผู้ร่วมประมูลอื่น รวมทั้งจำนวนของผู้ร่วมประมูล พอได้รายละเอียดที่ว่ามาทั้งหมด ก็ใช้ความรู้และประสบการณ์ที่มีตัดสินใจเลยครับ ว่าจะลุยหรือจะถอย</p>\r\n\r\n<p>สุดท้ายครับ แนะนำเพื่อนๆให้มาเล่นกันเยอะๆนะครับ เพราะเรามีสินค้ามากมายมาให้ทุกคนมีโอกาสจับจอง คนยิ่งเยอะยิ่งเฮฮาแน่นอนครับ!</p>\r\n'),
(17, 'กฏทางเว็บไซต์', 'rule', 'rule', 'rule', '<p>กฎทางเว็บไซต์<br />\r\nอนุญาตให้มี User เพียง 1 บัญชี ต่อ 1 คน ต่อ 1 บ้านเท่านั้น<br />\r\nหาก 1 user มีมากกว่า 1 บัญชี หรือมีการใช้งานร่วมกัน รวมถึงการชำระเงินให้กัน ถือว่าเป็นการทุจริตในการประมูลซึ่งเป็นกฎข้อห้าม หากพบเห็นจะส่งผลให้บัญชีของท่านถูกปิดการใช้งานทันที<br />\r\nหากมีการความจำเป็นต้องสมัครสมาชิกมากกว่า 1 บัญชี (ครอบครัวเดียวกัน แต่คนละบ้าน) ต้องติดต่อกับทีมงาน BidCups ก่อน ไม่เช่นนั้น เราจะทำการระงับปิดบัญชีของท่านทันที<br />\r\nBidCups ขอสงวนสิทธิ์ในการเปลี่ยนแปลง &quot;ชื่อผู้ใช้งาน&quot; หรือ &quot;Username&quot; ที่ไม่สามารถใช้งานได้บนเว็บไซต์ BidCups.com โดยจะรวมถึงชื่อที่สร้างขึ้นเพื่อการดูหมิ่น หยาบคาย หรือทำให้ผู้เข้าร่วมประมูลเข้าใจผิด จนไปถึงการตั้งชื่อที่ส่อเจตนาตบตาผู้เข้าร่วมประมูล และหรือสร้างขึ้นจนทำให้ผู้เข้าร่วมประมูลท่านอื่นๆรู้สึกเหมือนถูกเอาเปรียบ<br />\r\n1 username สามารถชนะได้เพียง 4 ครั้ง ต่อ 30 วัน และสำหรับสินค้าที่มีราคาเกิน 10,000 บาท สามารถชนะได้ 1 ครั้ง ต่อ 30 วัน<br />\r\nห้ามมีการใช้บอททุกชนิด ในการใช้งานบนเว็บไซต์<br />\r\nพนักงานและสมาชิกในครอบครัวของ BidCups (หมายถึงบิดามารดาคู่สมรสพี่น้องและเด็ก) และบุคคลที่อาศัยอยู่ในบ้านเดียวกันไม่สามารถร่วมประมูลได้<br />\r\nผู้ใช้ต้องใช้ชื่อจริงในการสมัครเท่านั้น (รวมทั้งเบอร์โทรศัพท์ที่สามารถติดต่อได้ เพื่อยืนยันตัวตนก่อนการจัดส่งสินค้า)<br />\r\nสินค้าจะถูกจัดส่งถึงที่อยู่ที่ลูกค้าได้ทำการลงทะเบียนไว้กับเว็บไซต์เท่านั้น<br />\r\nBidCups ขอสงวนสิทธิ์ในการยกเลิกการประมูล หากพบว่าการประมูลถูกปิดลงเนื่องมาจากปัญหาด้านเทคนิค และมีผู้ร้องเรียนเข้ามา โดยทุกๆ Bid จะคืนให้กับผู้ประมูลทุกคน และการประมูลนั้นจะเริ่มขึ้นใหม่อีกครั้งหลังจากยกเลิกการประมูลไปแล้ว<br />\r\nหมายเหตุ: การทำผิดกฎที่กล่าวมา (เช่น การสร้างบัญชีหลายบัญชีหรือใช้บอทหรือฮั้วประมูล) เป็นการละเมิดข้อกำหนดและเงื่อนไขของ BidCups และจะส่งผลให้คุณถูกระงับการใช้งาน สินค้ารายการใดที่มีผู้ชนะ แต่มีการละเมิดข้อตกลงและเงื่อนไขจะถือเป็นโมฆะ นอกจากนี้ การคืนจำนวน Bid จะได้รับการคืนเฉพาะยอดที่จ่ายทำรายการปิดประมูลและซื้อสินค้าผ่านเว็บไซต์เท่านั้น และจะไม่มีการคืนเงินสำหรับการซื้อ Bid &nbsp;รวถึงไม่มีการคืน Bid และ D-Point ที่เหลืออยู่ในบัญชี. &nbsp;สำหรับผู้ที่ละเมิดข้อกำหนดและเงื่อนไขของ BidCups. BidCups ขอสงวนสิทธิ์การ &quot;ตัดสิทธิ์การใช้งาน&quot; (แบน) โดยไม่ต้องแจ้งให้ทราบล่วงหน้า</p>\r\n'),
(18, 'ข้อตกลงและเงื่อนไข', 'agree', 'agree', 'agree', '<p>ข้อตกลงและเงื่อนไข BidCups<br />\r\n(ปรับปรุงล่าสุด 12/01/2558)</p>\r\n\r\n<p>ภาพรวม</p>\r\n\r\n<p>ข้อตกลงและเงื่อนไขดังต่อไปนี้มีการบังคับใช้ระหว่าง บริษัท บิทคลับ ออนไลน์ จำกัด และ www.BidCups.com (BidCups) และผู้ใช้งาน (คุณหรือของคุณ) โดยคุณจะต้องยอมรับข้อตกลงและเงื่อนไขเหล่านี้เช่นเดียวกันกับที่ BidCupsดำเนินการ ข้อตกลงและเงื่อนไขเหล่านี้เป็นข้อตกลงทั้งหมด ระหว่าง BidCupsและคุณ หรือตัวแทนในรูปแบบต่างๆ ไม่ว่าจะเป็นลายลักษณ์อักษรหรือทางวาจา ระหว่าง คุณและ BidCupsต้องเคารพซึ่งกันและกัน</p>\r\n\r\n<p>ข้อมูลที่ BidCupsอย่างในหมวดของ &ldquo;ช่วยเหลือ&rdquo; หรือ &ldquo;เกี่ยวกับเรา&rdquo; &nbsp;เป็นเพียงคำแนะนำ ไม่ได้เป็นกฎหรือแนวทางให้ปฏิบัติแต่อย่างใด BidCupsจะไม่รับผิดชอบเกี่ยวกับการกระทำของผู้ใช้งานหรือบุคคลอื่นใด ที่ได้อ่านหรือได้รับแจ้งข้อมูลหรือสิ่งใดๆที่ได้เขียนไว้เป็นลายลักษณ์อักษร</p>\r\n\r\n<p><br />\r\nหากมีคำถาม, ข้อสงสัย หรือคำแนะนำ เกี่ยวกับ ข้อตกลงและเงื่อนไข กรุณาติดต่อเราที่ support@BidCups.com</p>\r\n\r\n<p>การยอมรับข้อตกลงและเงื่อนไข</p>\r\n\r\n<p>หากคุณไม่ยอมรับข้อตกลงและเงื่อนไข ห้ามใช้ BidCupsหากคุณเข้าถึง ใช้ หรือ ดาวน์โหลด ในทางใดทางหนึ่งในการบริการของ BidCupsแสดงว่าคุณได้ตอบตกลงโดยใช้ข้อตกลงและเงื่อนไข และทราบดีว่า &nbsp;(ก) คุณเข้าใจการใช้งานของ BidCupsเช่น &quot;ใช้งานยังไง&quot; เป็นอย่างดี, (ข) คุณเลือกที่จะทำอย่างใดอย่าหนึ่งระหว่างทบทวน หรือเลือกที่จะไม่ทำเลย, (ค) คุณมีโอกาสที่จะถามคำถามเกี่ยวกับการใช้งานจาก BidCupsโดยโทรศัพท์ หรืออีเมล และเราจะมีการตอบคำถามเหล่านั้นทันที</p>\r\n\r\n<p>การเปลี่ยนแปลงข้อกำหนดและเงื่อนไข</p>\r\n\r\n<p>BidCupsอาจมีการเปลี่ยนแปลง (เพิ่ม, ลบ หรือแก้ไข) ข้อตกลงและเงื่อนไข ซึ่งอาจจะเป็นครั้งคราว และ มีหรือไม่มีก็ได้ สิ่งที่จะเกิดขึ้นคุณต้องยอมรับว่า BidCupsอาจจะให้คุณสังเกตข้อมูลที่เปลี่ยนแปลงในวิธีดังต่อไปนี้ : ผ่านอีเมลจาก BidCupsและ/หรือ โดยการแจ้งเตือนผ่านเว็บไซต์ในระยะเวลาที่เรากำหนดขึ้น เหล่านี้คือสิ่งที่ผู้ใช้งานต้องสังเกตและคอยดูเสมอ คุณควรตรวจสอบสม่ำเสมอ หากไม่สามารถปฏิบัติตามได้ นั่นแสดงว่าคุณต้องหยุดใช้งานบริการที่ BidCupsทันที</p>\r\n\r\n<p>คุณสมบัติของผู้เข้าใช้งานภายในเว็บไซต์</p>\r\n\r\n<p>การยอมรับข้อตกลงและเงื่อนไข และ/หรือ ลงทะเบียนผ่านเว็บไซต์ BidCupsคุณต้องยืนยันว่ามีอายุมากกว่า 18 ปีขึ้นไป และไม่ผิดระเบียบ กฎหมาย หรือ ข้อบังคับ ของประเทศ จังหวัด เมือง หรือ อำนาจศาลนั้นๆ ที่คุณอาศัยอยู่ (คุณต้องอาศัยอยู่ในประเทศไทยเท่านั้น)</p>\r\n\r\n<p>พนักงานและครอบครัว BidCups (พ่อ แม่ พี่น้อง ญาติ หรือ คู่สมรส) ในบ้านหลังเดียวกัน ที่เป็นพนักงานไม่สามารถทำการประมูลสินค้าได้ ไม่ว่าจะกรณีใดๆ</p>\r\n\r\n<p>สินค้าและบริการที่ BidCupsสามารถนำไปใช้เป็นของส่วนตัวเท่านั้น ห้ามนำไปค้าขายเชิงพาณิชย์</p>\r\n\r\n<p>BidCupsขอสงวนสิทธิ์ในการจำกัดบุคคลที่เข้าร่วมประมูล ซึ่งอาจจะเป็นคนๆเดียวกัน BidCupsจำกัดให้ผู้เข้าร่วมประมูล 1 คน / 1 บัญชีเท่านั้น ดังนั้น บัตรเครดิต, บัญชี PayPal หรือ Paysbuyจะไม่สามารถเชื่อมต่อได้หลายบัญชีต่อ 1 บุคคล BidCupsจึงขอจำกัด 1 คน ต่อ 1 username (หากมีข้อสงสัยติดต่อ support@BidCups.com) 1 ผู้เล่นสามารถเป็นผู้ชนะการประมูลได้ 4 ครั้ง ต่อ 30 วัน โดยทั่วไปผู้ใช้งานอาจจะมีการชนะเพียง 1 ครั้ง ซึ่งมีราคาเท่ากับหรือมากกว่า 10,000 บาท ภายในระยะเวลา 30 วัน อย่างไรก็ตาม BidCupsขอสงวนสิทธิ์ในการเปลี่ยนแปลงข้อจำกัดดังกล่าว หากมีช่วงเวลาพิเศษเฉพาะ</p>\r\n\r\n<p>หากมีการฮั้วประมูลโดยบุคคลอื่นที่คุณรู้จัก (สมรู้ร่วมคิด หรือ 1 ท่าน มีมากกว่า 1 &nbsp;User หรือ มีการโอน/จ่ายเงินผ่าน บัญชี บัตรเครดิต บัญชี PayPal หรือ Paysbuy เดียวกัน ) BidCups ขอสงวนสิทธิ์การ &quot;ตัดสิทธิ์การใช้งาน&quot;แบน) โดยไม่ต้องแจ้งให้ทราบล่วงหน้า หากจับได้ว่ามีการฮั้วประมูลกันเกิดขึ้น BidCups จะไม่มีการคืนเงินสำหรับการซื้อ Bid รวถึงไม่มีการคืน Bid และ D-Point ที่เหลืออยู่ในบัญชี การคืนจำนวนเงิน จะได้รับการคืนเฉพาะยอดที่จ่ายทำรายการปิดประมูลและซื้อสินค้าผ่านเว็บไซต์เท่านั้น</p>\r\n\r\n<p>การลงทะเบียนสมัครสมาชิก</p>\r\n\r\n<p>คุณสามารถลงทะเบียนได้เพียงครั้งเดียว และต้องระบุที่อยู่ที่แท้จริง (เพื่อจัดส่งสินค้าในกรณีที่ชนะการประมูลหรือสั่งซื้อสินค้า) &nbsp;และต้องไม่มีมากกว่า 1 บัญชี คุณต้องไม่ลงข้อมูลผิดๆในการลงทะเบียน และต้องไม่มีการฮั้วหรือแลกเปลี่ยนข้อมูลกับผู้เล่นคนอื่นๆ และห้ามมีการทำธุรกรรมการเงินแทนบุคคลหรือ User อื่นๆ ชื่อผู้ใช้งานของคุณต้องไม่เป็นที่น่ารังเกียจ, หยาบคาย, เสียหาย หรือมีเจตนาที่ไม่ดี หลอกลวงผู้อื่น ชื่อผู้ใช้งานของคุณต้องไม่มีการตั้งเพื่อโฆษณาเว็บไซต์หรือบริการหรือละเมิดลิขสิทธิ์ทางปัญญาจากบุคคลที่ 3</p>\r\n\r\n<p>หาก BidCupsได้รับข้อมูลว่าชื่อผู้ใช้งานผิดกฎข้อบังคับหรือละเมิดข้อตกลง ชื่อผู้ใช้งานของคุณจะถูกตัดทิ้งไปจนกว่าจะมีการเปลี่ยนแปลงชื่อใหม่ BidCupsอาจจะมีการปิดบัญชีของคุณแบบถาวรหากมีการละเมิดข้อตกลงดังกล่าว</p>\r\n\r\n<p>คุณต้องเก็บรหัสผ่านของคุณไว้เป็นความลับ BidCupsจะไม่ถามรหัสผ่านของคุณ ยกเว้นระว่างพิมพ์เข้าใช้งานในเว็บไซต์เท่านั้น คุณไม่ควรให้รหัสผ่านกับผู้อื่น, หรือบอกให้พนักงาน BidCupsทราบเด็ดขาด บัญชีผู้ใช้งานไม่สามารถโอนให้แก่กันได้ และคุณต้องรับผิดชอบต่อชื่อบัญชีของคุณทางกฎหมายหากมีการตรวจสอบพบการทุจริต</p>\r\n\r\n<p>ลิงก์อ้างอิงในการสมัคร</p>\r\n\r\n<p>คุณสามารถเชิญเพื่อนคุณมาสมัครโดยใช้ลิงก์อ้างอิงจาก BidCupsได้ และ BidCupsยินดีให้ข้อเสนอ แจก Bid ให้คุณ เมื่อเพื่อนคุณทำการซื้อ Bid Pack กับ BidCupsเราต้องขอตรวจสอบการใช้สิทธิ์นี้ด้วย เพื่อเป็นการป้องกันการฮั้วหรือสมัครคนเดียวหลายบัญชีหรือการทุจริตในรูปแบบต่างๆ ห้ามให้คนในครอบครัวหรือบุคคลที่อยู่ในบ้านหลังเดียวกันสมัครโดยที่ใช้ลิงก์อ้างอิงของคุณเพื่อทำการรับข้อเสนอ การละเมิดกฎที่ระบุไว้อาจส่งผลต่อผลการประมูล ซึ่งอาจจะต้องมีการยกเลิกในภายหลังหากมีการตรวจสอบว่ามีการทุกจริตเกิดขึ้น ทั้งนี้ ขึ้นอยู่กับดุลยพินิจของ BidCups</p>\r\n\r\n<p>การระงับใช้งานบัญชี</p>\r\n\r\n<p>BidCupsขอสงวนสิทธิ์การระงับใช้งานบัญชีของคุณ หากตรวจสอบพบว่ามีการละเมิดข้อตกลงและเงื่อนไข, กฎข้อบังคับ หรือละเมิดสิทธิ์ต่อผู้ใช้งานคนอื่นๆ หรือ บุคคลที่ 3 ตัวอย่างการไม่ได้รับอนุญาติใช้งาน เช่น บุคคลที่ 3 การใช้เครื่องมือ Software ช่วยในการประมูล รวมถึงการสร้างหลายบัญชีโดยบุคคลเดียว เพื่อทำการปั่นการประมูล คุณยอมรับว่าถ้า BidCupsได้ลงความเห็นว่าคุณละเมิดข้อตกลงและเงื่อนไข เราจะต้องทำการะงับ ยกเลิก หรือ อาจจะทำการคืนจำนวน Bid</p>\r\n\r\n<p>การจ่ายค่า Bid / การกดหรือคลิก Bid / Bidsaurus(การตั้งค่าการ Bid อัตโนมัติ)</p>\r\n\r\n<p>Bid คือ การชำระเงินล่วงหน้าในรูปแบบของ &quot;Bid Pack&quot; BidCupsขอสงวนสิทธิ์ในการเสนอ Bid Pack ในช่วงเวลาต่างๆ อาจจะไม่เหมือนกันทุกครั้ง ขึ้นอยู่กับการจัดโปรโมชั่น หากคุณยังไม่ชำระเงิน คุณจะถูกเรียกเก็บเงินค่าธรรมเนียม BidCupsจึงขอสงวนสิทธิ์ในการเข้าถึงบัญชีผู้ใช้งานจนกว่าจะมีการชำระเงินเต็มจำนวนตามใบแจ้งหนี้ รวมถึงค่าธรรมเนียมต่างๆ และจะระงับการจัดส่งใดๆจนกว่าจะมีการชำระเงินเต็มจำนวนเข้ามา</p>\r\n\r\n<p>เมื่อเวลาผ่านไป ฟรี Bid ที่ได้รับจะใช้ได้ถึงวันที่กำหนด ซึ่งระบุไว้ในโปรโมชั่นแล้ว เมื่อมีการลง Bid ในการประมูล Bid จะถูกหักออกจากบัญชีของผู้ใช้งาน และไม่สามารถขอคืนเป็นเงินสดได้ ไม่ว่าคุณจะเป็นผู้ชนะหรือไม่ชนะการประมูลก็ตาม</p>\r\n\r\n<p>คุณสามารถลง Bid ได้ 2 แบบ คือ (1) ทำการคลิก Bid เอง โดยกดที่ปุ่ม &quot;Bid&quot; ส่วนของการประมูลนั้นๆ และ/หรือ (2) โดยใช้รูปแบบการใช้งาน Bidsaurusคือการใช้งานการตั้งค่าแบบกดอัตโนมัติ โดยจะมีการปล่อยให้คุณไม่ต้องสนใจการ Bid โดยจะให้คุณตั้งค่าล่วงหน้าไว้ได้ สามารถอ่านรายละเอียดเพิ่มเติมได้ที่ หมวด &quot;การช่วยเหลือ&quot;</p>\r\n\r\n<p>ทุกๆการกด Bid 1 ครั้ง เวลาจะกลับมารีเซ็ตใหม่ที่ 10 วินาที การประมูลจะสิ้นสุดลงเมื่อเวลาจับได้ที่ 0 วินาที หรือ ปิดการประมูล ตามเวลาของ BidCupsผู้ชนะในการประมูลคือผู้ที่ลง Bid เป็นคนสุดท้าย ซึ่งระบบของ BidCupsจะทำการบันทึกก่อนที่เวลาตาม BidCupsจะสิ่งเข้าสู่วินาทีที่ 0</p>\r\n\r\n<p>หากคุณไม่เชื่อว่าบัญชีที่ใช้งานอยู่ของคุณไม่มีความถูกต้อง คุณสามารถแจ้งเตือนมาที่ BidCupsภายใน 6 เดือน นับตั้งแต่วันที่ได้มีการเริ่มเสนอราคามาที่เรา</p>\r\n\r\n<p>หากคุณไม่ชนะการประมูล คุณก็สามารถยังจ่ายค่าสินค้าเพื่อเป็นการซื้อของชิ้นนั้นๆ คุณมีเวลา 24 ชั่วโมง หลังจากที่การประมูลสิ้นสุดลง การลง Bid ทุกๆครั้ง ระบบจะแปลงเป็นส่วนลดให้ทันที คุณจะได้รับส่วนลดนี้เพื่อนำไปใช้ซื้อสินค้าที่คุณกำลังประมูล เพียงแค่จ่ายส่วนต่างเท่านั้น (การลง Bid ราคาจำหน่ายจะถูกหักออกทุกๆครั้ง)</p>\r\n\r\n<p>BidCupsมีการจำกัดการประมูลของผู้ใช้งาน เพื่อเพิ่มประสบการณ์การใช้งาน และเป็นการรักษารูปแบบธุรกิจให้มีศักยภาพยิ่งขึ้นไป ดังนั้น BidCupsจึงขอจำกัดผู้เล่นตามสมควร, ผู้เล่นที่เคยชนะ, จำนวนู้เล่นในแต่ละการประมูล, ผู้เล่นที่ทำการ Bid ก่อนการประมูลเริ่ม หรือ มีการซื้อ Bid Pack และ ปัจจัยด้านอื่นๆ โดยเฉพาะเราจะมีการจำกัดการประมูลบางอย่าง ที่ผู้เล่นบางคนยังไม่เคยชนะการประมูล BidCupsเห็นว่าจะเป็นการเพิ่มประสิทธิภาพการใช้งานโดยรวม</p>\r\n\r\n<p>BidCupsขอสงวนสิทธิ์ ในการเปลี่ยนแปลงราคาBid โดยไม่ต้องแจ้งให้ทราบล่วงหน้า</p>\r\n\r\n<p>BidCupsมีรูปแบบที่เรียกว่า &quot;Locked Auctions&quot; สำหรับบางการประมูล ทั้งนี้ ขึ้นอยู่กับดุลพินิจของเราเมื่อเห็นสมควรว่าควรหรือไม่ และผู้ที่ไม่ลง Bid ในการประมูล จะไม่สามารถเข้าถึงการประมูลนั้นๆได้ ด้วยเหตุนี้เอง สำหรับผู้ที่ไม่ได้ลง Bid ไว้ในการประมูล หรือ มีการวาง Bid ไว้เป็นจำนวนน้อยกว่าที่ทาง BidCupsได้กำหนด เราจะมีการป้องกันการลง Bid เมื่อถึงเวลาที่เรากำหนด เราจะมีส่วนที่ขึ้นว่า &quot;locked out&quot; และจะนำคุณไปสู่ส่วนของการซื้อสินค้าทันที</p>\r\n\r\n<p>การซื้อสินค้า Buy Now</p>\r\n\r\n<p>Buy Now คือ สิทธิพิเศษเหนือระดับที่ BidCups เต็มใจมามอบให้แก่ลูกค้าเพื่อใช้ซื้อสินค้าภายหลังจากที่ไม่ชนะการประมูล ลูกค้าสามารถใช้ Bid ที่ระบบแปลงเป็นส่วนลด และใช้สิทธิ์นี้เพื่อทำการซื้อสินค้าที่คุณได้เลือกประมูลไว้</p>\r\n\r\n<p>สิทธิพิเศษนี้เรายินดีมอบให้กับลูกค้าทุกๆคน แต่หากมีการละเมิดกฎและเงื่อนไขของ BidCups ลูกค้าจะเสียสิทธิ์ในการใช้ส่วนลด</p>\r\n\r\n<p>หากมีการขอคืนเงินทาง BidCups จะคืนเงินให้เฉพาะยอดชำระค่าสินค้าเท่านั้น</p>\r\n\r\n<p>ร้านค้า BidCups</p>\r\n\r\n<p>BidCupsขอสงวนสิทธิ์ในการจำกัดจำนวนการซื้อสินค้า ทั้งนี้ ขึ้นอยู่กับการตัดสินใจของทาง BidCupsอีกครั้งว่าเป็นสินค้าประเภทใด</p>\r\n\r\n<p>จำนวน Bid จะมีการคืนให้กับลูกค้าที่ชำระเงินซื้อสินค้ากับ BidCupsจำนวน Bid ที่เติมเข้ามาเพื่อซื้อสินค้าอาจจะแตกต่างออกไป ขึ้นอยู่กับว่าใช้ซื้อของราคาเท่าไหร่ หากสินค้าที่ซื้อไปถูกส่งไปแล้วจำนวน Bid จะถูกหักออกจากบัญชี แต่หากมีเงินในบัญชีต่ำกว่าราคาของสินค้า &nbsp;Bid ที่อยู่ในบัญชีจะถูกหักออกหมด และ BidCupsจะทำการคำนวนราคา โดยคูณ 5 บาท และจะแจ้งราคาที่ต้องจ่ายเป็น Bid ให้ทราบอีกครั้ง</p>\r\n\r\n<p>ความเป็นต่อในการชนะการประมูล</p>\r\n\r\n<p>ทุกการประมูลที่ BidCups &nbsp; &nbsp; &nbsp;มักจะไม่ซ้ำแบบกัน และผลการประมูลทุกๆครั้งขึ้นอยู่กับจำนวนผู้เข้าร่วมการประมูล หลายต่อหลายครั้งอาจจำเป็นต้องใช้ทักษะและความใจเย็นการประมูลสินค้าเด่นๆ ที่มีผู้เล่นเป็นจำนวนมาก ดังนั้น ผู้เล่นจึงต้องใช้ความละเอียดในการสังเกตของสินค้านั้นๆถึงจะเป็นต่อการประมูล</p>\r\n\r\n<p>การตอบรับเป็นผู้ชนะ / การชำระเงิน</p>\r\n\r\n<p>หลังจากเสร็จสิ้นการประมูล ผู้ชนะประมูลต้องชำระเงินภายใน 3 วัน นับจากวันที่เสร็จสิ้นการประมูล ผู้ชนะจะได้รับ Email ยืนยัน BidCupsจะไม่มีการจัดส่งสินค้าหากผู้ชนะยังไม่จ่ายเงินตามจำนวนที่กำหนดในใบแจ้งหนี้ หากไม่มีการชำระเงินภายในวันที่กำหนด BidCupsจะทำการยกเลิกการประมูลและจะไม่คืนเงิน</p>\r\n\r\n<p>สำหรับสินค้าที่ BidCupsไม่สามารถระบุราคาปิดประมูลจนกว่าจะมีการปิดประมูล หากราคปิดประมูลสูงกว่าราคาที่ขึ้นไว้ในหน้าเว็บไซต์ BidCupsเราจะทำการติดต่อคุณให้คำแนะนำก่อนที่จะสั่ง หรือ ยกเลิก</p>\r\n\r\n<p>โปรโมชั่นพิเศษ</p>\r\n\r\n<p>สำหรับโปรโมชั่นต่างๆที่ BidCupsได้จัดขึ้นจะมีการแจ้งทางหน้าเว็บไซต์ BidCupsและ อีเมลของผู้ใช้งานเท่านั้น โปรโมชั่นบางตัวจะมีระยะเวลาสิ้นสุดที่แน่นอนและจะระบุไว้ให้เห็นได้ชัดเจน</p>\r\n\r\n<p>ทำเนียบผู้ชนะ</p>\r\n\r\n<p>คุณสามารถโพสต์ข้อความหรือรูปภาพหรือวิดีโอลงภายในเว็บไซต์ได้ แต่ต้องไม่ผิดกฎหมาย ไม่ลามกอนาจาร ดูหมิน คุกคามความเป็นส่วนตัวของผู้อื่น หรือ ละเมิดทรัพย์สินทางปัญญา ทำให้ผู้อื่นเกิดความเสียหาย ต้องไม่มีการชักชวน เชิญชวนในลักษณะจดหมายลูกโซ่จำนวนมากๆ หรือ &quot;สแปม&quot; &nbsp; BidCupsขอสงวนลิขสิทธิ์ลบหรือแก้ไขเนื้อหาดังกล่าว หากมีการตรวจสอบแล้วพบว่าไม่เหมาะสม</p>\r\n\r\n<p>หากคุณจงใจส้รางเนื้อหาที่ส่อถึงการกระทำที่ BidCupsได้กล่าวไว้ข้างต้น และทำการแชร์ออกไปยังตามสื่อต่างๆ BidCupsจะไม่รับผิดชอบใดๆเกี่ยวกับข้อมูลทั้งหมดของคุณ</p>\r\n\r\n<p>ส่งคืนสินค้า / ทำการยกเลิก</p>\r\n\r\n<p>ลูกค้ามีสิทธิ์ที่จะยกเลิกหรือส่งคืนสินค้าได้ ตามนโยบายของ BidCupsซึ่งอาจจะมีการเปลี่ยนแปลงได้ ทั้งนี้ ขึ้นอยู่กับการพิจารณา หากมีการยกเลิกการสั่งซื้อ คุณจะได้รับคืนเงินจำนวนตามที่ได้ทำการสั่ง (รวมถึงค่าจัดส่ง) ถึงแม้ว่าสินค้าไม่มีความบกพร่องก็ตาม ยกเว้น จำนวน Bid ที่ได้ลงไว้ในการประมูลจะไม่ได้รับเงินคืน (จะคืนเป็น Bid ขึ้นอยู่กับการพิจารณาจาก BidCups)</p>\r\n\r\n<p>ยกเว้นบางกรณี ที่มีการใช้ Bid ฟรี หรีอ โปรโมชั่นบัตรกำนัลต่างๆ หรือ มีการพฤติกรรมหลอกลวง ซึ่งเป็นการละเมิดข้อตกลงและเงื่อนไข BidCupsจะไม่มีการคืนเงิน</p>\r\n\r\n<p>หากมีความต้องการส่งคืน หรือ ยกเลิกการสั่งซื้อสินค้า กรุณาติดต่อเราที่ support@BidCups.com</p>\r\n\r\n<p>เพื่อให้การส่งคืนเสร็จสิ้นอย่างเรียบร้อย ควรส่งคืนมาในสภาพเดิมหรือสภาพใหม่ เพราะ BidCupsจำหน่ายผลิตภัณฑ์ใหม่ และมีการจัดส่งอย่างไม่มีความเสียหาย เว้นแต่ เกิดความเสียหายระหว่างการส่งจากบริษัทขนส่งเท่านั้น</p>\r\n\r\n<p>ค่าจัดส่งเป็นสิ่งที่ผู้ซื้อสินค้าจะต้องชำระ ทั้งนี้ ขึ้นอยู่กับเงื่อนไขที่อาจจะมีการเปลี่ยนแปลงโดยไม่ต้องแจ้งให้ทราบล่วงหน้า หากมีความเสียหายอันอาจจะเกิดขึ้นจากผู้สั่งซื้อ BidCupsขอสงวนสิทธิ์ในการเก็บค่าเสียหายหรือค่าธรรมเนียม 10% ทั้งนี้ขึ้นอยู่กับการพิจารณาจาก BidCups</p>\r\n\r\n<p>ค่าส่งสินค้าคืนจะถูกส่งกลับไปเป็นจำนวนเงินตามที่คุณได้ส่งสินค้ากลับมา</p>\r\n\r\n<p>การจัดส่ง</p>\r\n\r\n<p>การจัดส่งจะมีเฉพาะภายในประเทศไทยเท่านั้น ยกเว้น การส่งโดยตรงจากโรงงานไปยังที่อยู่ของคุณโดยตรง การจัดส่งอาจมีการเปลี่ยนแปลง ดังนั้น วันเวลาที่ระบุเป็นเพียงการประมาณเท่านั้น BidCupsจึงอาจมีการเปลี่ยนแปลงวันและเวลาของสินค้าที่จะส่งถึงมือ โดยไม่ต้องแจ้งให้ทราบล่วงหน้า หากมีความเสียหายอันเนื่องมาจากการขนส่งกรุณาติดต่อมาที่ BidCupsทันที เมื่อได้รับสินค้า</p>\r\n\r\n<p>BidCupsมีสิทธิ์ที่จะพิจารณาไม่จัดส่งสินค้า ในกรณีที่สินค้าต้องถูกส่งออกไปยังสถานที่ไกลๆ เช่น เกาะต่างๆ หากคุณพักหรืออาศัยอยู่ในเขตดังกล่าว การชำระเงินของคุณจะไม่สามารถทำได้ BidCupsจะทำการคืนเงินเต็มจำนวนให้ทันที</p>\r\n\r\n<p>การระงับการจัดส่งสินค้า</p>\r\n\r\n<p>คุณต้องยอมรับว่า หากคุณยังไม่ชำระเงินตามใบแจ้งยอด เราจะยังคงไม่จัดส่งสินค้า</p>\r\n\r\n<p>บทบาทและความรับผิดชอบการใช้งานภายใน BidCups</p>\r\n\r\n<p>การใช้งานภายในเว็บไซต์ BidCupsการรับข้อมูลหรือใช้เนื้อหาภายในเว็บไซต์นั้นขึ้นอยู่กับคุณที่จะเลือกข้อมูลแต่เพียงผู้เดียวเท่านั้นไม่เกี่ยวกับ BidCupsและไม่เพียงแต่เว็บไซต์ BidCupsทั้งนี้ รวมถึง พนักงาน เจ้าหน้าที่ ตัวแทน ร้านค้า ผู้สนับสนุน ผู้ออกใบอนุญาต ผู้ผลิต (ทั้ง hardware และ Software) หรือ บุคคลที่ 3 ที่ทำการผลิตหรือบริการจัดจำหน่าย หรือกระจายสินค้าจาก BidCupsหรืออื่นใดก็ตามที่มีรูปแบบเดียวกัน การประกันโดยเว็บไซต์ในเครือ BidCupsทั้งหมด โดยจะต้องการปราศจากข้อผิดพลาดจาก ไวรัสชนิดต่างๆ ไม่ว่าจะเป็น worms, trojan horses, keyboard loggers, spyware, adware, malware, harmful หรือ malicious code, หรือ ข้อบกพร่องอื่น ๆ ข้อมูลการผลิตและการบริการที่มีอยู่ใน BidCupsอาจจะมีความไม่ถูกต้องหรือมีข้อผิดพลาดจากการพิมพ์ BidCupsไม่สามารถรับประกันได้ว่าข้อมูลที่ได้รับจากการค้นหาข้อมูลใน BidCupsจะมีความถูกต้องทั้งหมด หรือ เนื้อหาที่อาจจะไม่เป็นปัจจุบัน ดังนั้น BidCupsจะไม่รับผิดชอบต่อข้อมูล โพสต์ ยอดวิว ความคิดเห็น ที่โพสต์อยู่ในส่วนที่เกี่ยวข้องกับ BidCups (รวมไปถึงการเว็บไซต์สาธารณะภายนอก) โดยใครก็ตามที่กล่าวถึง BidCupsคนป่าวประกาศโฆษณาให้ร้าย การให้เนื้อหา ผู้ใช้งาน ผู้เข้ามาเยือนเว็บไซต์ นักเขียนอิสระ และ ผู้เชี่ยวชาญที่ไม่ได้มีส่วนเกี่ยวข้องในช่วงเวลาที่ไม่สมควรแก่การแสดงความเห็น</p>\r\n\r\n<p>หากคุณไม่พอใจหรือมีข้อติดขัดใดๆไม่ว่าจะเป็นส่วนไหนก็ตาม &nbsp;BidCupsแนะนำให้คุณยุติหรือหยุดการใช้งานภายในเว็บไซต์BidCupsทันที</p>\r\n\r\n<p>บทบาทและความรับผิดชอบการการชำระเงินจากBidCups</p>\r\n\r\n<p>ด้วยเหตุที่กล่าวไปในหัวข้อที่ผ่านมา BidCupsจึงขอปฏิเสธความรับผิดชอบจากการเรียกร้องที่เกิดขึ้น จากข้อเสนอแพ็คเกจการท่องเที่ยวบนเว็บไซต์ BidCupsและจะไม่รับผิดชอบไม่ว่ากรณีใดๆอันเกิดจากความเสียหายหรือการได้รับบาดเจ็บ จากทางร่างกายหรืออารมณ์ ที่เกิดขึ้นหรือเพิ่งได้รับผลกระทบโดยเกิดในระหว่างการชำระเงิน และจะไม่รับผิดชอบจากการเลื่อนเที่ยวบิน กระเป๋าเดินทางหาย หรือ อื่นใดที่อาจเกิดการสูญหายระหว่างการทำรายการท่องเที่ยวกับ BidCups</p>\r\n\r\n<p>สินค้าใหม่ทั้งหมดที่ได้รับการรับประกันจากโรงงานโดยตรง &nbsp;BidCupsเป็นผู้จัดจำหน่ายให้คุณ ภายใต้เงื่อนไขที่ระบุไว้ในคุณลักษณะพิเศษของสินค้านั้นในหน้ารายละเอียด ระยะเวลาการรับประกันและการบริการจะต่างออกไปจากโรงงานผู้ผลิต เนื้อหาทั้งหมดของการรับประกัน ขึ้นอยู่กับการร้องขออย่างเป็นลายลักษณ์อักษรเท่านั้น การรับประกันจะสิ้นสุดลงเมื่อสินค้าได้ถูกใช้งานแล้ว</p>\r\n\r\n<p>ยกเว้นการรับประกันที่ได้กล่าวมาข้างต้น BidCupsมีการรับประกันที่นอกเหนือจากที่กล่าวมา จะโดยตรงหรือโดยอ้อม ในส่วนที่เกี่ยวข้องกับสินค้าหรือการบริการหรือตัวแทนหรือผู้รับช่วงต่อในการสั่งซื้อ รวมไปถึง ข้อจำกัดต่างๆ ในการรับประกันเชิงพาณิชย์ หรือ มีจุดประสงค์เฉพาะ</p>\r\n\r\n<p>คุณต้องยอมรับว่าBidCupsจะไม่รับผิดชอบ ต่อความเสียหายของทรัพย์สินที่เกิดขึ้น จากการใช้งานที่ไม่ถูกต้อง จากการดัดแปลง หรือ จากการใช้งานแบบผิดๆ &nbsp;ไม่ว่าจะกรณีใดๆก็ตาม</p>\r\n\r\n<p>การป้องกัน</p>\r\n\r\n<p>คุณต้องยอมรับในทันทีว่าการป้องกัน ให้สมาชิก ผู้จัดการ หุ้นส่วน คนกำกับดูแล พนักงาน บริษัทในเครือ ตัวแทน ผู้ออกใบอนุญาต และ หุ้นส่วนคนอื่นๆ (รวมไปถึงบุคคลที่ให้ความคุ้มครอง) จะไม่มีผลร้ายจากการสูญเสียผลกำไร ราคา ค่าใช้จ่าย ความรับผิดชอบ ข้อเรียกร้องหรือความต้องการ รวมไปถึง ค่าทนาย การได้รับความเดือดร้อนจากบุคคลใดก็ตามที่ต้องจ่ายค่าชดเชยที่เกิดขึ้น หรือ การติดต่อจาก (1)ใช้งาน BidCupsหรือ การบริการ ที่ได้รับข้อเสนอจาก BidCups(2)การละเมิดข้อตกลงและเงื่อนไข โดยคุณ หรือ บุคคลใดก็ตามที่เกี่ยวข้องกับคุณ (3) การละเมิดต่อกฎหมายหรือคำสั่งศาล (4) ความประมาท หรือ การจงใจทำผิดจากคุณ</p>\r\n\r\n<p>ระบบหยุดการทำงาน / การประมูลหยุดชั่วคราว</p>\r\n\r\n<p>ในระหว่างมีการเสนอราคา แต่มีการหยุดการทำงานของระบบ ในระหว่างการประมูล กรณีนี้การประมูลจะหยุดชั่วคราวและจะจำเวลาการประมูล ณ ปัจจุบัน รวมถึงราคาการเสนอล่าสุด และชื่อผู้ที่ให้ราคาสูงสุดไว้ ภายหลังจากมีการแก้ปัญหาเสร็จสิ้น การประมูลจะเริ่มต้นต่อจากเดิมทันที BidCupsจะทำการยกเลิกการประมูลทันทีหากการประมูลจบโดยสาเหตุอันเกิดจากความขัดข้องจากระบบ มีการใช้ Bot (บอท) มีพนักงานเข้าร่วมการประมูล ปัญหาทางเทคนิค หรือเหตุผลอื่นๆ</p>\r\n\r\n<p>โดยทุกวันนี้ ระบบยังไม่สามารถพัฒนาควบคุมปัญหาเหล่านี้ได้ดีเท่าที่ควร หรืออาจเกิดจากปัญหาบางอย่างที่ไม่สามารถตอบได้จากเครือข่ายอินเตอร์เนต BidCupsจึงไม่สามารถรับประกันได้เลยว่า มีความพร้อมในการใช้งานได้อย่างต่อเนื่อง BidCupsจะไม่รับผิดชอบผลเสียที่เกิดขึ้นจากการใช้งานการประมูลจากผู้ใช้งาน หรือ บุคคลที่ 3 &nbsp;ที่แอบอ้างใช้การบริการจาก BidCupsโดยเฉพาะอย่างยิ่งผลเสียที่เกิดขึ้นระหว่างการเสนอราคา ที่ไม่ยินยอมจาก BidCupsไม่ได้รับทันท่วงที เหล่านี้ ถือว่าเป็นผลจากเหตุขัดข้องทางเทคนิค</p>\r\n\r\n<p>เครื่องหมายการค้า</p>\r\n\r\n<p>โลโก้ของ BidCupsคือ เครื่องหมายการค้าของ BidCupsที่ได้รับการจดทะเบียนถูกต้อง มีลิขสิทธิ์ตามกฎหมาย และเป็นทรัพย์สินของ BidCupsแต่เพียงผู้เดียวเท่านั้น</p>\r\n\r\n<p>การบริการหลังการขาย</p>\r\n\r\n<p>การบริการหลังการขายสินค้า ที่จำหน่ายผ่าน BidCupsจะมีการส่งถึงผู้ผลิต ซึ่งเป็นไปตามข้อกำหนดและเงื่อนไขของโรงงานผู้ผลิต</p>\r\n\r\n<p>ตัวบทกฎหมายต่างๆ</p>\r\n\r\n<p>ข้อตกลงและเงื่อนไขนี้ ได้รับการยอมรับจากกฎหมายในราชอาณาจักรไทย โดยไม่มีข้อพิพาท ใดๆจากข้อความที่กล่าวมาทั้งหมด รวมถึงคำสั่งศาลด้วย ข้อบังคับและเงื่อนไข อาจนำไปใช้เป็นข้ออ้างอิงในชั้นศาล กรุงเทพฯ ประเทศไทย โดยคุณต้องตอบตกลงที่จะยอมรับอำนาจของศาลดังกล่าว</p>\r\n\r\n<p>BidCupsจะปฏิบัติตามกฎหมายที่บังคับใช้ในประเทศนี้ เพื่อจำหน่าย Bid Package และ สินค้า</p>\r\n\r\n<p>ไม่จำหน่ายสิ่งต้องห้ามด้วยกฎหมายในราชอาณาจักรไทย หากคุณมีชื่อบัญชี หรือ มีส่วนเกี่ยวข้อง ที่ขัดต่อคำสั่งศาล ซึ่งเป็นการละเมิดข้อตกลงที่ว่าด้วย เงื่อนไขและข้อบังคับ BidCupsจะปิดชื่อเป็นการถาวร คุณต้องยอมรับว่า BidCupsไม่สามารถรับผิดชอบต่อการกระทำอันเนื่องมาจากการทำผิดกฎหมายได้</p>\r\n\r\n<p>การประชุมสหประชาชาติที่ว่าด้วยการขายสินค้าระหว่างประเทศเราจะไม่ใช้ข้อตกลงดังกล่าว</p>\r\n\r\n<p>หากบทบัญญัติใด ๆที่ว่าด้วยเงื่อนไขและข้อบังคับ ที่จัดขึ้นโดยศาลที่มีเขตอำนาจไม่ถูกต้องจะไม่มีผลบังคับใช้ จะมีการยกเลิกเป็นโมฆะ จำไว้ว่า เงื่อนไขและข้อบังคับจะมีผลทันทีตามกฎหมายตามความเป็นไปได้</p>\r\n\r\n<p>การป้องกันข้อมูล การเก็บรักษา การประมวลผล และการเข้าถึงข้อมูลลูกค้า</p>\r\n\r\n<p>การป้องกันข้อมูลของลูกค้าเป็นเรื่องที่สำคัญมากสำหรับเรา ในส่วนของรายละเอียดการรักษาข้อมูลลูกค้า คุณสามารถเข้าไปอ่านได้ใน นโยบายความเป็นส่วนตัว</p>\r\n\r\n<p>ลิงก์ภายนอก</p>\r\n\r\n<p>เว็บไซต์ของเราอาจจะมีการใส่ลิงก์จากเว็บอื่นๆ โดยบุคคลที่ 3 ลิงก์ต่างๆ เหล่านี้คุณควจตรวจทานก่อนคลิกเข้าไปอย่างถี่ถ้วน เพราะเราจะไม่รับผิดชอบ เนื้อหาบนเว็บไซต์ภายนอกของเราเป็นความรับผิดชอบของพวกเขาเท่านั้น เราไม่สามารถจัดการปัญหาและรับผิดชอบเนื้อหาต่างๆ การป้องกัน หรือ นโยบายในเว็บเหล่านั้นได้</p>\r\n\r\n<p>การสละสิทธิ์</p>\r\n\r\n<p>การสละสิทธิ์ใดๆเป็นไปตามข้อกำหนดและเงื่อนไข หรือ นโยบายความเป็นส่วนตัว ของ BidCupsจะมีผลเมื่อมีการลงชื่อเป็นลายลักษณ์อักษรเท่านั้น</p>\r\n\r\n<p>การทำผิดกฎทางเว็บไซต์ โดย</p>\r\n\r\n<p>หากทีมงานตรวจสอบพบว่าผู้เข้าร่วมประมูลกระทำผิดกฎทางเว็บไซต์ของ BidCups ในรูปแบบ</p>\r\n\r\n<p>1. การฮั้วประมูล (สมรู้ร่วมคิด)<br />\r\n2. การสร้างบัญชีการใช่้งานซ้ำกัน 2 username ขึ้นไป (สร้างจากคนๆเดียวกัน หรือคนๆเดียวกัน Login เข้าใช้งานหลายๆ username)<br />\r\n3. การโอนเงินจากบัญชีธนาคาร / บัตรเครดิต / บัตรเดบิต / บัญชี PayPal / บัญชี Paysbuy ของคนเดียวกัน ไปยัง username หลายๆบัญชี<br />\r\n4. ตรวจสอบพบว่ามีการใช้งานมากกว่า 1 บัญชี จากสถานที่เดียวกัน หรือ คอมฯเครื่องเดียวกัน<br />\r\nทีมงานขอสงวนสิทธิ์การคืน Bid ที่อยู่ในบัญชี(จากการซื้อหรือยกเลิกการประมูล)จะได้รับการคืนเฉพาะยอดที่จ่ายทำรายการปิดประมูลเท่านั้น และจะไม่มีการคืนเงินสำหรับการซื้อ Bid ซื้อสินค้าผ่านเว็บไซต์<br />\r\nทีมงานขอสงวนสิทธิ์การงดจัดส่งสินค้า พร้อมยกเลิกการใช้ส่วนลด (Rebate) เพื่อแลกซื้อสินค้า และสงวนสิทธิ์ในการคืน Bid และหรือจำนวนเงิน โดยไม่ต้องแจ้งให้ทราบล่วงหน้า<br />\r\nReward (D-Point) ไม่สามารถแลกเป็นเงินสดได้ ทั้งนี้ หากมีการฝ่าฝืนกระทำผิดกฎทางเว็บไซต์ ทีมงานขอสงวนสิทธิ์งดให้ Reward โดยไม่ต้องแจ้งให้ทราบล่วงหน้า<br />\r\nทีมงานขอสงวนสิทธิ์ในการปิดบัญชีทันที โดยไม่ต้องแจ้งให้ทราบล่วงหน้<br />\r\nการตัดสินของทีมงานถือเป็นที่สิ้นสุด</p>\r\n\r\n<p>หมายเหตุ</p>\r\n\r\n<p>ลง Bid ออนไลน์ &nbsp;ได้ที่ www.BidCups.comการเสนอราคาถี่ๆย้ำๆกับสินค้าจะทำให้สินค้ามีราคาสูงขึ้น ผู้ใช้งานควรจับจ้องรายการสินค้า และหมั่นตรวจสอบ Bid อย่างสม่ำเสมอเพื่อจะไม่พลาดสินค้าที่เล็งเอาไว้</p>\r\n\r\n<p>คำชี้แจง</p>\r\n\r\n<p>หากจะยกเว้นนอกเหนือที่ระบุไว้ใน เงื่อนไขและข้อบังคับ ต้องการเพิ่มเติมคำชี้แจง คำร้องขอ คำแนะนำ และการติดต่อใดๆให้คุณเขียนเป็นลายลักษณ์อักษร พร้อมลงชื่อ-ที่อยู่ จ่าหน้าซองของคุณ ส่งมาถึงพวกเราได้ที่ บริษัท บิทคลับ ออนไลน์ จำกัด 4/11-12 ซ.สุขใจ คลองเตย พระโขนง กทม. 10110, หรือ อีเมลมาที่ support@BidCups.com.</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `review_id` int(100) NOT NULL,
  `review_title` varchar(255) NOT NULL,
  `review_newimg` varchar(255) NOT NULL,
  `review_img` varchar(255) NOT NULL,
  `review_imgpath` varchar(255) NOT NULL,
  `review_name` varchar(255) NOT NULL,
  `review_pbid` varchar(255) NOT NULL,
  `review_description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`review_id`, `review_title`, `review_newimg`, `review_img`, `review_imgpath`, `review_name`, `review_pbid`, `review_description`) VALUES
(6, 'test', '1479960453E12789826-74.jpg', 'E12789826-74.jpg', 'C:/xampp/htdocs/auction/uploads/review/1479960453E12789826-74.jpg', 'test', 'test', 'test'),
(7, 'test1', '1479960582minions.jpg', 'minions.jpg', 'C:/xampp/htdocs/auction/uploads/review/1479960582minions.jpg', 'test1', 'test1', 'test1');

-- --------------------------------------------------------

--
-- Table structure for table `transfer_bid`
--

CREATE TABLE `transfer_bid` (
  `tb_id` int(100) NOT NULL,
  `tb_bank` varchar(255) NOT NULL,
  `tb_amount` int(100) NOT NULL,
  `tb_date` datetime NOT NULL,
  `tb_username` varchar(255) NOT NULL,
  `tb_other` text NOT NULL,
  `package_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `transfer_bid`
--

INSERT INTO `transfer_bid` (`tb_id`, `tb_bank`, `tb_amount`, `tb_date`, `tb_username`, `tb_other`, `package_id`) VALUES
(6, 'ธนาคารกรุงไทย', 5000, '2016-12-08 01:51:08', 'paly1234', 'test', 8);

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
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`bank_id`);

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
-- Indexes for table `transfer_bid`
--
ALTER TABLE `transfer_bid`
  ADD PRIMARY KEY (`tb_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `auction`
--
ALTER TABLE `auction`
  MODIFY `auc_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `bank`
--
ALTER TABLE `bank`
  MODIFY `bank_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
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
-- AUTO_INCREMENT for table `general_set`
--
ALTER TABLE `general_set`
  MODIFY `general_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `his_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=148;
--
-- AUTO_INCREMENT for table `img_slider`
--
ALTER TABLE `img_slider`
  MODIFY `img_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `mem_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `menu_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `review_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `transfer_bid`
--
ALTER TABLE `transfer_bid`
  MODIFY `tb_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
