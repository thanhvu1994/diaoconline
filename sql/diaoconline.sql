-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2018 at 12:12 PM
-- Server version: 5.6.11
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `diaoconline`
--
-- CREATE DATABASE IF NOT EXISTS `diaoconline` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
-- USE `diaoconline`;

-- --------------------------------------------------------

--
-- Table structure for table `ci_banners`
--

DROP TABLE IF EXISTS `ci_banners`;
CREATE TABLE IF NOT EXISTS `ci_banners` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `button_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name_en` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `button_name_en` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'home',
  `publish` tinyint(4) NOT NULL,
  `display_order` int(11) NOT NULL,
  `location` tinyint(4) NOT NULL,
  `created_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `update_date` datetime NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT AUTO_INCREMENT=16 ;

--
-- Dumping data for table `ci_banners`
--

INSERT INTO `ci_banners` (`id`, `name`, `button_name`, `name_en`, `button_name_en`, `url`, `image`, `type`, `publish`, `display_order`, `location`, `created_date`, `update_date`) VALUES
(6, 'Slider 1', '', '', '', '', '/uploads/banners/e997a12e8b17fe749ca7a4ba55db24c3.jpg', 'home', 1, 0, 0, '2018-04-06 21:46:52', '2018-04-06 21:46:52'),
(7, 'Slider 2', '', '', '', '', '/uploads/banners/76a6d92dab0b7bef82e56974391771c4.jpg', 'home', 1, 0, 0, '2018-04-06 21:47:00', '2018-04-06 21:47:00'),
(8, 'Slider 3', '', '', '', '', '/uploads/banners/7d81ede67a57c7bc7b10ab6f8daef612.jpg', 'home', 1, 0, 0, '2018-04-06 21:47:08', '2018-04-06 21:47:08'),
(9, 'Slider 4', '', '', '', '', '/uploads/banners/0cf45a748ca65cbef65dbd1311216d14.jpg', 'home', 1, 0, 0, '2018-04-06 21:47:17', '2018-04-06 21:47:17'),
(10, 'Slider 5', '', '', '', '', '/uploads/banners/86545271f0b57a7ce75e518750516830.jpg', 'home', 1, 0, 0, '2018-04-06 21:47:30', '2018-04-06 21:47:30'),
(11, 'Slider 6', '', '', '', '', '/uploads/banners/9cf960fba6a20c100ccdf92e9bcd9407.jpg', 'home', 1, 0, 0, '2018-04-06 21:47:40', '2018-04-06 21:47:40'),
(12, 'Slider 7', '', '', '', '', '/uploads/banners/6515e1b1e52502190688577af13548fd.jpg', 'home', 1, 0, 0, '2018-04-06 21:47:49', '2018-04-06 21:47:49'),
(13, 'quang cao 1', '', '', '', '', '/uploads/advertisement/4e04054b8301b9c4ee64c2bd721a80c9.jpg', 'advertisement', 1, 0, 0, '2018-04-17 11:10:38', '2018-04-17 11:10:38'),
(14, 'quang cao 2', '', '', '', '', '/uploads/advertisement/53ad0698f21e5c0f7d3a70e13288738f.gif', 'advertisement', 1, 0, 0, '2018-04-17 11:11:17', '2018-04-17 11:11:17'),
(15, 'quang cao 3', '', '', '', '', '/uploads/advertisement/641c6b9082394645927b23bf69e0e504.gif', 'advertisement', 1, 0, 1, '2018-04-17 11:12:00', '2018-04-17 11:12:00');

-- --------------------------------------------------------

--
-- Table structure for table `ci_bds`
--

DROP TABLE IF EXISTS `ci_bds`;
CREATE TABLE IF NOT EXISTS `ci_bds` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  `real_type_id` int(11) NOT NULL,
  `front_area_id` int(11) NOT NULL,
  `province_id` int(11) NOT NULL,
  `district_id` int(11) NOT NULL,
  `ward_id` int(11) NOT NULL,
  `street_id` int(11) NOT NULL,
  `apartment_number` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `project_id` bigint(20) NOT NULL,
  `price` int(11) NOT NULL,
  `currency` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `unit` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `area` int(11) NOT NULL,
  `horizontal_yard_area` int(11) NOT NULL,
  `vertical_yard_area` int(11) NOT NULL,
  `horizontal_yard_area_after` int(11) NOT NULL,
  `horizonta_contruction_area` int(11) NOT NULL,
  `vertica_contruction_area` int(11) NOT NULL,
  `horizonta_contruction_area_after` int(11) NOT NULL,
  `phap_ly_id` int(11) NOT NULL,
  `direction_id` int(11) NOT NULL,
  `utility_id` int(11) NOT NULL,
  `number_of_floor` int(11) NOT NULL,
  `number_of_guest_room` int(11) NOT NULL,
  `number_of_bed_room` int(11) NOT NULL,
  `number_of_rest_room` int(11) NOT NULL,
  `number_of_other_room` int(11) NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `poster` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cell_phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `note` text COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `is_featured` tinyint(1) NOT NULL,
  `created_date` datetime NOT NULL,
  `update_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `ci_bds`
--

INSERT INTO `ci_bds` (`id`, `user_id`, `name`, `description`, `title`, `meta_description`, `type`, `real_type_id`, `front_area_id`, `province_id`, `district_id`, `ward_id`, `street_id`, `apartment_number`, `project_id`, `price`, `currency`, `unit`, `area`, `horizontal_yard_area`, `vertical_yard_area`, `horizontal_yard_area_after`, `horizonta_contruction_area`, `vertica_contruction_area`, `horizonta_contruction_area_after`, `phap_ly_id`, `direction_id`, `utility_id`, `number_of_floor`, `number_of_guest_room`, `number_of_bed_room`, `number_of_rest_room`, `number_of_other_room`, `slug`, `poster`, `phone`, `cell_phone`, `address`, `note`, `status`, `is_featured`, `created_date`, `update_date`) VALUES
(1, 0, 'Tôi chính chủ bán gấp 2 lô đất MT 100m2 500tr TL10 SHR', 'Gia đình cần bán gấp 2 mảnh đất mỗi miếng 100m2 giá 500tr, SHR, MT Tỉnh Lộ 10 Cần bán gấp 2 lô đất mảnh đất liền kề 5x20m giá 500 triệu \r\n- Có thương lượng cho khách thiện chí. \r\n+ Sổ hồng riêng (chính chủ). \r\n+ Xây dựng ngay. Đường 16m rải nhựa (Hệ thống vỉa hè, cây xanh, cấp thoát nước đầy đủ). \r\n+ Xậy dựng ngay, nằm trong khu dân cư đông đúc. Cách trường học và bệnh viện 2km, đi bộ ra trường tiểu học và trường trung học 5 phút. Tiện ích dịch vụ đầy đủ, có chợ, siêu thị và nhiều khu vui chơi giải trí. Gần các trung tâm điện máy lớn, shop áo quần. Xung quanh có hơn 7 khu công nghiệp đã hoạt đông với lượng công nhân đông. \r\nLH chính chủ 0938 452 454', 'Tôi chính chủ bán gấp 2 lô đất MT 100m2 500tr TL10 SHR', 'Gia đình cần bán gấp 2 mảnh đất mỗi miếng 100m2 giá 500tr, SHR, MT Tỉnh Lộ 10 Cần bán gấp 2 lô đất mảnh đất liền kề 5x20m giá 500 triệu \r\n- Có thương lượng cho khách thiện chí. \r\n+ Sổ hồng riêng (chính chủ). \r\n+ Xây dựng ngay. Đường 16m rải nhựa (Hệ thống vỉa hè, cây xanh, cấp thoát nước đầy đủ). \r\n+ Xậy dựng ngay, nằm trong khu dân cư đông đúc. Cách trường học và bệnh viện 2km, đi bộ ra trường tiểu học và trường trung học 5 phút. Tiện ích dịch vụ đầy đủ, có chợ, siêu thị và nhiều khu vui chơi giải trí. Gần các trung tâm điện máy lớn, shop áo quần. Xung quanh có hơn 7 khu công nghiệp đã hoạt đông với lượng công nhân đông. \r\nLH chính chủ 0938 452 454', 1, 11, 7, 7, 4, 1, 1, '113', 0, 500000000, '', '1', 100, 5, 20, 0, 5, 20, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'a', 'Thùy Dương', '', '0938452454', ' TP.HCM ', '', 0, 0, '2018-04-15 10:05:49', '2018-04-17 10:13:36'),
(2, 0, 'Không nhu cầu sử dụng, tôi có lô đất cần bán 380tr/330m2 ngay góc chợ hai mặt tiền.Tiện cho KD-BB', 'Với 380 triệu bạn sẽ sở hữu ngay sổ hồng của lô đất thổ cư DT 308m2(lô góc).\r\n- MT đường nhựa 16m - Gần khu CN nhẹ, trung tâm thương mại, siêu thị, trường học, phân khu tiện ích... Vị trí: Nằm ngay trung tâm hành chính quận, gần Viện kiểm sát, UBND huyện, đối diện ban chỉ huy quân sự. Tiện kinh doanh tạp hóa, cà phê, karaoke hoặc đầu tư, xây phòng trọ... Thủ tục nhanh, ngân hàng hỗ trợ lên đến 70%, hỗ trợ ngay giấy phép XD. Có đưa rước tham quan vào các ngày hằng tuần.\r\nVui lòng liên hệ: 0902 80 80 65 – 0986 694 572 Mr.Sơn.', 'Không nhu cầu sử dụng, tôi có lô đất cần bán 380tr/330m2 ngay góc chợ hai mặt tiền.Tiện cho KD-BB', 'Với 380 triệu bạn sẽ sở hữu ngay sổ hồng của lô đất thổ cư DT 308m2(lô góc).\r\n- MT đường nhựa 16m - Gần khu CN nhẹ, trung tâm thương mại, siêu thị, trường học, phân khu tiện ích... Vị trí: Nằm ngay trung tâm hành chính quận, gần Viện kiểm sát, UBND huyện, đối diện ban chỉ huy quân sự. Tiện kinh doanh tạp hóa, cà phê, karaoke hoặc đầu tư, xây phòng trọ... Thủ tục nhanh, ngân hàng hỗ trợ lên đến 70%, hỗ trợ ngay giấy phép XD. Có đưa rước tham quan vào các ngày hằng tuần.\r\nVui lòng liên hệ: 0902 80 80 65 – 0986 694 572 Mr.Sơn.', 1, 18, 7, 7, 4, 1, 1, '', 0, 380000000, '', '1', 330, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'khong-nhu-cau-su-dung-toi-co-lo-dat-can-ban-380tr330m2-ngay-goc-cho-hai-mat-tientien-cho-kd-bb-1', 'Đỗ hồng Sơn', '', '0902808065', '182, Phan Văn Trị, phường 12, quận Bình Thạnh ', '', 0, 1, '2018-04-17 10:16:38', '2018-04-17 16:38:00'),
(3, 0, '388 tr nhận đất nền xây dựng đường Trần Đại Nghĩa', 'Nhượng gấp nền đất đối diện khu công nghiệp, công nhân cực đông, đường nhựa 14m cơ sở hạ tần hoàn thiện điện nước máy vào tận nền, xây dựng kinh doanh ngay\r\nDT : 5m x 26m : 10m x 26m sổ hồng riêng , bao công chứng sang tên \r\nLiên hệ : 0908 286 594 Ngọc Yến..', '388 tr nhận đất nền xây dựng đường Trần Đại Nghĩa', 'Nhượng gấp nền đất đối diện khu công nghiệp, công nhân cực đông, đường nhựa 14m cơ sở hạ tần hoàn thiện điện nước máy vào tận nền, xây dựng kinh doanh ngay\r\nDT : 5m x 26m : 10m x 26m sổ hồng riêng , bao công chứng sang tên \r\nLiên hệ : 0908 286 594 Ngọc Yến..', 1, 18, 7, 7, 4, 1, 1, '113', 0, 388000000, '', '1', 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '388-tr-nhan-dat-nen-xay-dung-duong-tran-dai-nghia', 'Ngọc Yến', '', '0908286594', 'HCM', '', 0, 1, '2018-04-17 10:18:13', '2018-04-17 16:37:53');

-- --------------------------------------------------------

--
-- Table structure for table `ci_billing_address`
--

DROP TABLE IF EXISTS `ci_billing_address`;
CREATE TABLE IF NOT EXISTS `ci_billing_address` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `full_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `company_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `company_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tax_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `postal_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `country` int(11) NOT NULL,
  `phone` int(11) NOT NULL,
  `cell_phone` int(11) NOT NULL,
  `identity_card` int(11) NOT NULL,
  `more_info` text COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_date` datetime NOT NULL,
  `update_date` datetime NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ci_categories`
--

DROP TABLE IF EXISTS `ci_categories`;
CREATE TABLE IF NOT EXISTS `ci_categories` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `parent_id` bigint(20) NOT NULL,
  `category_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category_name_en` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title_en` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `description_en` text COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug_en` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type_level` tinyint(4) NOT NULL,
  `thumb` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_order` int(11) NOT NULL,
  `language` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_date` datetime NOT NULL,
  `update_date` datetime NOT NULL,
  `is_featured` int(10) NOT NULL,
  `show_type` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `location` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `type_id` bigint(20) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT AUTO_INCREMENT=135 ;

--
-- Dumping data for table `ci_categories`
--

INSERT INTO `ci_categories` (`id`, `parent_id`, `category_name`, `category_name_en`, `title`, `title_en`, `description`, `description_en`, `url`, `slug`, `slug_en`, `type_level`, `thumb`, `display_order`, `language`, `type`, `created_date`, `update_date`, `is_featured`, `show_type`, `location`, `type_id`) VALUES
(68, 73, 'Dell Inspiron', '', 'Dell Inspiron', '', '', '', '', 'dell-inspiron-73', '', 3, '', 0, '', 'category', '2018-04-06 22:14:36', '2018-04-06 22:28:42', 0, '', '', 0),
(69, 73, 'Dell Vostro', '', 'Dell Vostro', '', '', '', '', 'dell-vostro-73', '', 3, '', 0, '', 'category', '2018-04-06 22:14:45', '2018-04-06 22:27:40', 0, '', '', 0),
(70, 73, 'Dell XPS', '', 'Dell XPS', '', '', '', '', 'dell-xps-73', '', 3, '', 0, '', 'category', '2018-04-06 22:14:50', '2018-04-06 22:27:44', 0, '', '', 0),
(71, 73, 'Dell Latitude', '', 'Dell Latitude', '', '', '', '', 'dell-latitude-73', '', 3, '', 0, '', 'category', '2018-04-06 22:14:59', '2018-04-06 22:27:36', 0, '', '', 0),
(72, 0, 'Laptop', '', 'Laptop', '', '', '', '', 'laptop-71', '', 1, '', 0, '', 'category', '2018-04-06 22:25:30', '2018-04-06 22:25:30', 0, '', '', 0),
(73, 72, 'Dell', '', 'Dell', '', '', '', '', 'dell-72', '', 2, '', 0, '', 'category', '2018-04-06 22:27:12', '2018-04-06 22:27:12', 1, '', '', 0),
(74, 72, 'HP', '', 'HP', '', '', '', '', 'hp-73', '', 2, '', 0, '', 'category', '2018-04-06 23:51:25', '2018-04-06 23:51:25', 1, '', '', 0),
(75, 74, 'Hp Envy', '', 'Hp Envy', '', '', '', '', 'hp-envy-74', '', 3, '', 0, '', 'category', '2018-04-06 23:51:41', '2018-04-06 23:51:41', 0, '', '', 0),
(76, 72, 'Asus', '', 'Asus', '', '', '', '', 'asus-75', '', 2, '', 0, '', 'category', '2018-04-07 00:00:07', '2018-04-07 00:00:07', 1, '', '', 0),
(77, 76, 'Asus A Series', '', 'Asus A Series', '', '', '', '', 'asus-a-series-76', '', 3, '', 0, '', 'category', '2018-04-07 00:00:20', '2018-04-07 00:00:20', 0, '', '', 0),
(79, 0, 'Thông tin địa ốc', '', 'Thông tin địa ốc', '', 'Thông tin địa ốc', '', '0', 'thong-tin-dia-oc', '', 1, '', 1, '', 'menu', '2018-04-16 16:11:35', '2018-04-18 10:10:57', 0, 'new', '["0","1"]', 102),
(80, 0, 'Siêu thị địa ốc', '', 'Siêu thị địa ốc', '', 'Siêu thị địa ốc', '', '0', 'sieu-thi-dia-oc', '', 1, '', 2, '', 'menu', '2018-04-16 16:11:49', '2018-04-18 10:34:18', 0, 'bds', '["0","1"]', 0),
(81, 0, 'Dự án', '', 'Dự án', '', 'Dự án', '', '0', 'du-an', '', 1, '', 3, '', 'menu', '2018-04-16 16:11:57', '2018-04-18 10:35:28', 0, '', '["0","1"]', 0),
(82, 0, 'Doanh nghiệp', '', 'Doanh nghiệp', '', 'Doanh nghiệp', '', '0', 'doanh-nghiep', '', 1, '', 4, '', 'menu', '2018-04-16 16:12:06', '2018-04-18 10:40:39', 0, '', '["0","1"]', 0),
(83, 0, 'Khám phá', '', 'Khám phá', '', 'Khám phá', '', '0', 'kham-pha', '', 1, '', 5, '', 'menu', '2018-04-16 16:12:14', '2018-04-18 10:42:31', 0, '', '["0","1"]', 0),
(84, 0, 'Nhà đẹp', '', 'Nhà đẹp', '', 'Nhà đẹp', '', '0', 'nha-dep', '', 1, '', 6, '', 'menu', '2018-04-16 16:12:22', '2018-04-18 10:14:26', 0, '', '["0"]', 0),
(85, 79, 'Thị trường địa ốc', '', 'Thị trường địa ốc', '', 'Thị trường địa ốc', '', '0', 'thi-truong-dia-oc', '', 2, '', 1, '', 'menu', '2018-04-16 16:26:29', '2018-04-18 10:11:05', 0, '', '["0","1"]', 0),
(86, 79, 'Hoạt động doanh nghiệp', '', 'Hoạt động doanh nghiệp', '', 'Hoạt động doanh nghiệp', '', '0', 'hoat-dong-doanh-nghiep', '', 2, '', 2, '', 'menu', '2018-04-16 16:26:43', '2018-04-18 10:11:09', 0, '', '["0","1"]', 0),
(87, 79, 'Chính sách - Quy hoạch', '', 'Chính sách - Quy hoạch', '', 'Chính sách - Quy hoạch', '', '0', 'chinh-sach-quy-hoach', '', 2, '', 3, '', 'menu', '2018-04-16 16:38:15', '2018-04-18 10:11:16', 0, '', '["0","1"]', 0),
(88, 79, 'Tài chính - Chứng khoáng', '', 'Tài chính - Chứng khoáng', '', 'Tài chính - Chứng khoáng', '', '0', 'tai-chinh-chung-khoang', '', 2, '', 4, '', 'menu', '2018-04-16 16:38:41', '2018-04-18 10:11:19', 0, '', '["0","1"]', 0),
(89, 79, 'Xây dựng', '', 'Xây dựng', '', 'Xây dựng', '', '0', 'xay-dung', '', 2, '', 5, '', 'menu', '2018-04-16 16:38:54', '2018-04-18 10:11:24', 0, '', '["0","1"]', 0),
(90, 79, 'Bất động sản thế giới', '', 'Bất động sản thế giới', '', 'Bất động sản thế giới', '', '0', 'bat-dong-san-the-gioi', '', 2, '', 6, '', 'menu', '2018-04-16 16:39:13', '2018-04-18 10:11:28', 0, '', '["0","1"]', 0),
(91, 79, 'Ngoại kiều - Việt kiều', '', 'Ngoại kiều - Việt kiều', '', 'Ngoại kiều - Việt kiều', '', '0', 'ngoai-kieu-viet-kieu', '', 2, '', 7, '', 'menu', '2018-04-16 16:39:27', '2018-04-18 10:34:46', 0, '', '["0"]', 0),
(92, 102, 'Thông tin', '', 'Thông tin', '', '', '', '', 'thong-tin-2', '', 2, '', 1, '', 'news', '2018-04-16 17:13:42', '2018-04-17 09:22:34', 0, '', '', 0),
(93, 102, 'Thư viện địa ốc', '', 'Thư viện địa ốc', '', '', '', '', 'thu-vien-dia-oc-1', '', 2, '', 2, '', 'news', '2018-04-16 17:15:18', '2018-04-17 09:22:58', 0, '', '', 0),
(94, 102, 'Cafe Luật', '', 'Cafe Luật', '', '', '', '', 'cafe-luat-1', '', 2, '', 3, '', 'news', '2018-04-16 17:15:27', '2018-04-17 09:23:06', 0, '', '', 0),
(95, 92, 'Thị trường địa ốc', '', 'Thị trường địa ốc', '', '', '', '', 'thi-truong-dia-oc-1', '', 3, '', 1, '', 'news', '2018-04-16 17:16:10', '2018-04-16 17:16:10', 0, '', '', 0),
(96, 92, 'Hoạt động doanh nghiệp', '', 'Hoạt động doanh nghiệp', '', '', '', '', 'hoat-dong-doanh-nghiep-1', '', 3, '', 2, '', 'news', '2018-04-16 17:16:21', '2018-04-16 17:16:21', 0, '', '', 0),
(97, 92, 'Chính sách - Quy hoạch', '', 'Chính sách - Quy hoạch', '', '', '', '', 'chinh-sach-quy-hoach-1', '', 3, '', 3, '', 'news', '2018-04-16 17:16:33', '2018-04-16 17:16:33', 0, '', '', 0),
(98, 92, 'Chính sách - Quy hoạch', '', 'Tài chính - Chứng khoáng', '', '', '', '', 'chinh-sach-quy-hoach-2', '', 3, '', 4, '', 'news', '2018-04-16 17:16:49', '2018-04-16 17:16:49', 0, '', '', 0),
(99, 92, 'Xây dựng', '', 'Xây dựng', '', '', '', '', 'xay-dung-1', '', 3, '', 5, '', 'news', '2018-04-16 17:16:57', '2018-04-16 17:16:57', 0, '', '', 0),
(100, 92, 'Bất động sản thế giới', '', 'Bất động sản thế giới', '', '', '', '', 'bat-dong-san-the-gioi-1', '', 3, '', 5, '', 'news', '2018-04-16 17:17:08', '2018-04-16 17:17:08', 0, '', '', 0),
(101, 92, 'Ngoại kiều - Việt kiều', '', 'Ngoại kiều - Việt kiều', '', '', '', '', 'ngoai-kieu-viet-kieu-1', '', 3, '', 6, '', 'news', '2018-04-16 17:17:15', '2018-04-16 17:17:15', 0, '', '', 0),
(102, 0, 'Thông tin địa ốc', '', 'Thông tin địa ốc', '', '', '', '', 'thong-tin-dia-oc-1', '', 1, '', 1, '', 'news', '2018-04-17 09:21:39', '2018-04-17 09:21:39', 0, '', '', 0),
(103, 0, 'Khám phá', '', 'Khám phá', '', '', '', '', 'kham-pha-1', '', 1, '', 2, '', 'news', '2018-04-17 09:21:50', '2018-04-17 09:21:50', 0, '', '', 0),
(104, 80, 'Nhà phố', '', 'Nhà phố', '', 'Nhà phố', '', '0', 'nha-pho-1', '', 2, '', 1, '', 'menu', '2018-04-18 10:31:03', '2018-04-18 10:31:03', 0, 'bds', '["0","1"]', 0),
(105, 80, 'Villa - Biệt thự', '', 'Villa - Biệt thự', '', 'Villa - Biệt thự', '', '0', 'villa-biet-thu-1', '', 2, '', 2, '', 'menu', '2018-04-18 10:31:27', '2018-04-18 10:31:27', 0, 'bds', '["0","1"]', 0),
(106, 80, 'Căn hộ chung cư', '', 'Căn hộ chung cư', '', 'Căn hộ chung cư', '', '0', 'can-ho-chung-cu-1', '', 2, '', 0, '', 'menu', '2018-04-18 10:31:43', '2018-04-18 10:31:43', 0, 'bds', '["0","1"]', 0),
(107, 80, 'Đất ở - Đất thổ cư', '', 'Đất ở - Đất thổ cư', '', 'Đất ở - Đất thổ cư', '', '0', 'dat-o-dat-tho-cu-1', '', 2, '', 3, '', 'menu', '2018-04-18 10:32:14', '2018-04-18 10:32:14', 0, 'bds', '["0","1"]', 0),
(108, 80, 'Đất dự án - Quy hoạch', '', 'Đất dự án - Quy hoạch', '', 'Đất dự án - Quy hoạch', '', '0', 'dat-du-an-quy-hoach-1', '', 2, '', 4, '', 'menu', '2018-04-18 10:32:37', '2018-04-18 10:32:37', 0, 'bds', '["0","1"]', 0),
(109, 80, 'Văn phòng', '', 'Văn phòng', '', 'Văn phòng', '', '0', 'van-phong-1', '', 2, '', 6, '', 'menu', '2018-04-18 10:33:05', '2018-04-18 10:33:48', 0, 'bds', '["0","1"]', 0),
(110, 80, 'Mặt bằng - Cửa hàng', '', 'Mặt bằng - Cửa hàng', '', 'Mặt bằng - Cửa hàng', '', '0', 'mat-bang-cua-hang-1', '', 2, '', 7, '', 'menu', '2018-04-18 10:33:32', '2018-04-18 10:33:32', 0, 'bds', '["0"]', 0),
(111, 81, 'Khu du lịch - Nghỉ dưỡng', '', 'Khu du lịch - Nghỉ dưỡng', '', 'Khu du lịch - Nghỉ dưỡng', '', '0', 'khu-du-lich-nghi-duong', '', 2, '', 1, '', 'menu', '2018-04-18 10:38:01', '2018-04-18 10:38:01', 0, '', '["1"]', 0),
(112, 81, 'Công trình công cộng', '', 'Công trình công cộng', '', 'Công trình công cộng', '', '0', 'cong-trinh-cong-cong', '', 2, '', 2, '', 'menu', '2018-04-18 10:38:16', '2018-04-18 10:38:16', 0, '', '["1"]', 0),
(113, 81, 'Khu công nghiệp', '', 'Khu công nghiệp', '', 'Khu công nghiệp', '', '0', 'khu-cong-nghiep', '', 2, '', 3, '', 'menu', '2018-04-18 10:38:41', '2018-04-18 10:38:41', 0, '', '["1"]', 0),
(114, 81, 'Khu dân cư  - Đô thị mới', '', 'Khu dân cư  - Đô thị mới', '', 'Khu dân cư  - Đô thị mới', '', '0', 'khu-dan-cu-do-thi-moi', '', 2, '', 4, '', 'menu', '2018-04-18 10:39:03', '2018-04-18 10:39:03', 0, '', '["1"]', 0),
(115, 81, 'Khu phức hợp - Thương mại', '', 'Khu phức hợp - Thương mại', '', 'Khu phức hợp - Thương mại', '', '0', 'khu-phuc-hop-thuong-mai', '', 2, '', 5, '', 'menu', '2018-04-18 10:39:21', '2018-04-18 10:39:21', 0, '', '["1"]', 0),
(116, 81, 'Cao ốc văn phòng', '', 'Cao ốc văn phòng', '', 'Cao ốc văn phòng', '', '0', 'cao-oc-van-phong', '', 2, '', 6, '', 'menu', '2018-04-18 10:39:35', '2018-04-18 10:39:35', 0, '', '["1"]', 0),
(117, 82, 'Môi giới địa ốc', '', 'Môi giới địa ốc', '', 'Môi giới địa ốc', '', '0', 'moi-gioi-dia-oc', '', 2, '', 1, '', 'menu', '2018-04-18 10:41:01', '2018-04-18 10:41:01', 0, '', '["1"]', 0),
(118, 82, 'VLXD & Thi công', '', 'VLXD & Thi công', '', 'VLXD & Thi công', '', '0', 'vlxd-thi-cong', '', 2, '', 2, '', 'menu', '2018-04-18 10:41:13', '2018-04-18 10:41:13', 0, '', '["1"]', 0),
(119, 82, 'Tài chính pháp lý', '', 'Tài chính pháp lý', '', 'Tài chính pháp lý', '', '0', 'tai-chinh-phap-ly', '', 2, '', 3, '', 'menu', '2018-04-18 10:41:24', '2018-04-18 10:41:24', 0, '', '["1"]', 0),
(120, 82, 'Đầu tư - Dự án', '', 'Đầu tư - Dự án', '', 'Đầu tư - Dự án', '', '0', 'dau-tu-du-an', '', 2, '', 4, '', 'menu', '2018-04-18 10:41:36', '2018-04-18 10:41:36', 0, '', '["1"]', 0),
(121, 82, 'Thiết kế - Trang trí', '', 'Thiết kế - Trang trí', '', 'Thiết kế - Trang trí', '', '0', 'thiet-ke-trang-tri', '', 2, '', 0, '', 'menu', '2018-04-18 10:41:47', '2018-04-18 10:41:47', 0, '', '["1"]', 0),
(122, 82, 'Truyền thông - Quảng cá0', '', 'Truyền thông - Quảng cá0', '', 'Truyền thông - Quảng cá0', '', '0', 'truyen-thong-quang-ca0', '', 2, '', 6, '', 'menu', '2018-04-18 10:42:06', '2018-04-18 10:42:06', 0, '', '["1"]', 0),
(123, 83, 'Thế giới kiến trúc', '', 'Thế giới kiến trúc', '', 'Thế giới kiến trúc', '', '0', 'the-gioi-kien-truc', '', 2, '', 1, '', 'menu', '2018-04-18 10:42:38', '2018-04-18 10:42:38', 0, '', '["1"]', 0),
(124, 83, 'Mách bạn', '', 'Mách bạn', '', 'Mách bạn', '', '0', 'mach-ban', '', 2, '', 2, '', 'menu', '2018-04-18 10:42:46', '2018-04-18 10:42:46', 0, '', '["1"]', 0),
(125, 83, 'Phong thủy', '', 'Phong thủy', '', 'Phong thủy', '', '0', 'phong-thuy', '', 2, '', 3, '', 'menu', '2018-04-18 10:42:55', '2018-04-18 10:42:55', 0, '', '["1"]', 0),
(126, 83, 'Không gian sống', '', 'Không gian sống', '', 'Không gian sống', '', '0', 'khong-gian-song', '', 2, '', 4, '', 'menu', '2018-04-18 10:43:05', '2018-04-18 10:43:05', 0, '', '["1"]', 0),
(127, 83, 'Shopping cùng DOOL', '', 'Shopping cùng DOOL', '', 'Shopping cùng DOOL', '', '0', 'shopping-cung-dool', '', 2, '', 5, '', 'menu', '2018-04-18 10:43:15', '2018-04-18 10:43:15', 0, '', '["1"]', 0),
(128, 83, 'Thương hiệu', '', 'Thương hiệu', '', 'Thương hiệu', '', '0', 'thuong-hieu', '', 2, '', 6, '', 'menu', '2018-04-18 10:43:25', '2018-04-18 10:43:25', 0, '', '["1"]', 0),
(129, 0, 'Về chúng tôi', '', 'Về chúng tôi', '', 'Về chúng tôi', '', '0', 've-chung-toi', '', 1, '', 1, '', 'menu', '2018-04-18 11:16:00', '2018-04-18 11:16:00', 0, '', '["3"]', 0),
(130, 0, 'Hướng dẫn sử dụng', '', 'Hướng dẫn sử dụng', '', 'Hướng dẫn sử dụng', '', '0', 'huong-dan-su-dung', '', 1, '', 2, '', 'menu', '2018-04-18 11:16:13', '2018-04-18 11:16:13', 0, '', '["3"]', 0),
(131, 0, 'Quy chế hoạt động', '', 'Quy chế hoạt động', '', 'Quy chế hoạt động', '', '0', 'quy-che-hoat-dong', '', 1, '', 3, '', 'menu', '2018-04-18 11:16:24', '2018-04-18 11:16:24', 0, '', '["3"]', 0),
(132, 0, 'Chính sách bảo mật', '', 'Chính sách bảo mật', '', 'Chính sách bảo mật', '', '0', 'chinh-sach-bao-mat', '', 1, '', 4, '', 'menu', '2018-04-18 11:16:38', '2018-04-18 11:16:38', 0, '', '["3"]', 0),
(133, 0, 'Chính sách giải quyết khiêu nại', '', 'Chính sách giải quyết khiêu nại', '', 'Chính sách giải quyết khiêu nại', '', '0', 'chinh-sach-giai-quyet-khieu-nai', '', 1, '', 5, '', 'menu', '2018-04-18 11:16:55', '2018-04-18 11:16:55', 0, '', '["3"]', 0),
(134, 0, 'Liên hệ', '', 'Liên hệ', '', 'Liên hệ', '', '0', 'lien-he', '', 1, '', 6, '', 'menu', '2018-04-18 11:17:03', '2018-04-18 11:17:03', 0, '', '["3"]', 0);

-- --------------------------------------------------------

--
-- Table structure for table `ci_city`
--

DROP TABLE IF EXISTS `ci_city`;
CREATE TABLE IF NOT EXISTS `ci_city` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `city_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `publish` tinyint(1) NOT NULL,
  `created_date` int(11) NOT NULL,
  `update_date` datetime NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ci_contact`
--

DROP TABLE IF EXISTS `ci_contact`;
CREATE TABLE IF NOT EXISTS `ci_contact` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `company_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tax_code` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `cell_phone` int(11) NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `type` tinyint(1) NOT NULL COMMENT '1: Đặt hàng, 2: Báo giá',
  `type_payment` tinyint(1) NOT NULL COMMENT '1: tiền mặt, 2: chuyển khoản',
  `shipping_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `shipping_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `shipping_phone` int(11) NOT NULL,
  `business_man` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `comment` text COLLATE utf8_unicode_ci NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ci_contact_info_product`
--

DROP TABLE IF EXISTS `ci_contact_info_product`;
CREATE TABLE IF NOT EXISTS `ci_contact_info_product` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `product_id` bigint(20) NOT NULL,
  `color` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `thickness` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `width` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `length` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `contact_id` bigint(20) NOT NULL,
  `created_date` datetime NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ci_coupon`
--

DROP TABLE IF EXISTS `ci_coupon`;
CREATE TABLE IF NOT EXISTS `ci_coupon` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value` int(11) NOT NULL,
  `valid_from` date NOT NULL,
  `valid_to` date NOT NULL,
  `quantity` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ci_coupon_history`
--

DROP TABLE IF EXISTS `ci_coupon_history`;
CREATE TABLE IF NOT EXISTS `ci_coupon_history` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `coupon_id` bigint(20) NOT NULL,
  `order_id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `order_amount` double NOT NULL,
  `discount_amount` double NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ci_direction`
--

DROP TABLE IF EXISTS `ci_direction`;
CREATE TABLE IF NOT EXISTS `ci_direction` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_date` datetime NOT NULL,
  `update_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Dumping data for table `ci_direction`
--

INSERT INTO `ci_direction` (`id`, `name`, `created_date`, `update_date`) VALUES
(1, 'Hướng Đông', '2018-04-13 10:51:45', '2018-04-13 10:52:09'),
(2, 'Hướng Tây', '2018-04-13 10:51:51', '2018-04-13 10:52:04'),
(3, 'Hướng Nam', '2018-04-13 10:52:00', '2018-04-13 10:52:00'),
(4, 'Hướng Bắc', '2018-04-13 10:52:21', '2018-04-13 10:52:21'),
(5, 'Hướng Đông Bắc', '2018-04-13 10:52:29', '2018-04-13 10:52:29'),
(6, 'Hướng Đông Nam', '2018-04-13 10:52:43', '2018-04-13 10:52:43'),
(7, 'Hướng Tây Bắc', '2018-04-13 10:52:53', '2018-04-13 10:52:53'),
(8, 'Hướng Tây Nam', '2018-04-13 10:52:58', '2018-04-13 10:52:58'),
(9, 'Không xác định', '2018-04-13 10:53:04', '2018-04-13 10:53:04');

-- --------------------------------------------------------

--
-- Table structure for table `ci_district`
--

DROP TABLE IF EXISTS `ci_district`;
CREATE TABLE IF NOT EXISTS `ci_district` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `district_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `province_id` int(11) NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `update_date` datetime NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT AUTO_INCREMENT=5 ;

--
-- Dumping data for table `ci_district`
--

INSERT INTO `ci_district` (`id`, `district_name`, `province_id`, `slug`, `created_date`, `update_date`) VALUES
(4, 'Quận 2', 7, 'quan-1', '2018-04-12 14:04:41', '2018-04-12 09:04:41');

-- --------------------------------------------------------

--
-- Table structure for table `ci_email_templates`
--

DROP TABLE IF EXISTS `ci_email_templates`;
CREATE TABLE IF NOT EXISTS `ci_email_templates` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email_subject` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_body` text COLLATE utf8_unicode_ci NOT NULL,
  `parameter_description` text COLLATE utf8_unicode_ci NOT NULL,
  `note` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_date` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ci_front_area`
--

DROP TABLE IF EXISTS `ci_front_area`;
CREATE TABLE IF NOT EXISTS `ci_front_area` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_date` datetime NOT NULL,
  `update_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `ci_front_area`
--

INSERT INTO `ci_front_area` (`id`, `name`, `created_date`, `update_date`) VALUES
(1, '60m', '2018-04-13 11:27:48', '2018-04-13 11:27:48'),
(2, 'Hẻm xe hơi', '2018-04-13 11:27:58', '2018-04-13 11:27:58'),
(3, 'Mặt tiền đường', '2018-04-13 11:28:04', '2018-04-13 11:28:04'),
(4, 'Đường nội bộ', '2018-04-13 11:28:23', '2018-04-13 11:28:23'),
(5, 'Đường hẻm lớn', '2018-04-13 11:28:28', '2018-04-13 11:28:28'),
(6, 'Đường hẻm nhỏ', '2018-04-13 11:28:33', '2018-04-13 11:28:33'),
(7, 'Không cập nhật', '2018-04-13 11:28:44', '2018-04-13 11:28:44');

-- --------------------------------------------------------

--
-- Table structure for table `ci_gen_slug`
--

DROP TABLE IF EXISTS `ci_gen_slug`;
CREATE TABLE IF NOT EXISTS `ci_gen_slug` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=101 ;

--
-- Dumping data for table `ci_gen_slug`
--

INSERT INTO `ci_gen_slug` (`id`, `slug`, `type`) VALUES
(8, 'ho-chi-minh', 'province'),
(12, 'quan-1', 'district'),
(13, 'dat-vuon', 'real_type'),
(14, 'can-ho-dich-vu', 'real_type'),
(15, 'khach-san-nha-pho', 'real_type'),
(16, 'villa-biet-thu', 'real_type'),
(17, 'nha-pho', 'real_type'),
(18, 'nha-tam', 'real_type'),
(19, 'van-phong', 'real_type'),
(20, 'can-ho-chung-cu', 'real_type'),
(21, 'can-ho-cao-cap', 'real_type'),
(22, 'dat-du-an-quy-hoach', 'real_type'),
(23, 'dat-o-dat-tho-cu', 'real_type'),
(24, 'dat-lam-nghiep', 'real_type'),
(25, 'dat-nong-nghiep', 'real_type'),
(26, 'dat-cho-san-xuat', 'real_type'),
(27, 'nha-kho-xuong', 'real_type'),
(28, 'nha-hang-khach-san', 'real_type'),
(29, 'mat-bang-cua-hang', 'real_type'),
(30, 'phong-tro', 'real_type'),
(31, 'nha-dau-hem-quoc-lo-13-cach-duong-chi-80-m', 'bds'),
(32, 'nha-dau-hem-quoc-lo-13-cach-duong-chi-80-m-1', 'bds'),
(33, 'a', 'bds'),
(36, 'thong-tin-dia-oc', 'menu'),
(37, 'thi-truong-dia-oc', 'menu'),
(38, 'hoat-dong-doanh-nghiep', 'menu'),
(39, 'sieu-thi-dia-oc', 'menu'),
(40, 'du-an', 'menu'),
(41, 'doanh-nghiep', 'menu'),
(42, 'kham-pha', 'menu'),
(43, 'nha-dep', 'menu'),
(44, 'chinh-sach-quy-hoach', 'menu'),
(45, 'tai-chinh-chung-khoang', 'menu'),
(46, 'xay-dung', 'menu'),
(47, 'bat-dong-san-the-gioi', 'menu'),
(48, 'ngoai-kieu-viet-kieu', 'menu'),
(49, 'thong-tin', 'cat_new'),
(50, 'thong-tin-1', 'cat_new'),
(51, 'thu-vien-dia-oc', 'cat_new'),
(52, 'cafe-luat', 'cat_new'),
(53, 'thi-truong-dia-oc-1', 'cat_new'),
(54, 'hoat-dong-doanh-nghiep-1', 'cat_new'),
(55, 'chinh-sach-quy-hoach-1', 'cat_new'),
(56, 'chinh-sach-quy-hoach-2', 'cat_new'),
(57, 'xay-dung-1', 'cat_new'),
(58, 'bat-dong-san-the-gioi-1', 'cat_new'),
(59, 'ngoai-kieu-viet-kieu-1', 'cat_new'),
(60, 'ap-luat-thue-tai-san-thu-ngan-sach-tu-nha-dat-tang-toi-1700-', 'news'),
(61, 'mo-rong-ngam-hoa-cong-trinh-tru-so-ubnd-tphcm-129-nam-tuoi', 'news'),
(62, 'thong-tin-dia-oc-1', 'cat_new'),
(63, 'kham-pha-1', 'cat_new'),
(64, 'thong-tin-2', 'cat_new'),
(65, 'thu-vien-dia-oc-1', 'cat_new'),
(66, 'cafe-luat-1', 'cat_new'),
(67, 'khong-nhu-cau-su-dung-toi-co-lo-dat-can-ban-380tr330m2-ngay-goc-cho-hai-mat-tientien-cho-kd-bb', 'bds'),
(68, 'khong-nhu-cau-su-dung-toi-co-lo-dat-can-ban-380tr330m2-ngay-goc-cho-hai-mat-tientien-cho-kd-bb-1', 'bds'),
(69, '388-tr-nhan-dat-nen-xay-dung-duong-tran-dai-nghia', 'bds'),
(70, 'nha-pho-1', 'menu'),
(71, 'villa-biet-thu-1', 'menu'),
(72, 'can-ho-chung-cu-1', 'menu'),
(73, 'dat-o-dat-tho-cu-1', 'menu'),
(74, 'dat-du-an-quy-hoach-1', 'menu'),
(75, 'van-phong-1', 'menu'),
(76, 'mat-bang-cua-hang-1', 'menu'),
(77, 'khu-du-lich-nghi-duong', 'menu'),
(78, 'cong-trinh-cong-cong', 'menu'),
(79, 'khu-cong-nghiep', 'menu'),
(80, 'khu-dan-cu-do-thi-moi', 'menu'),
(81, 'khu-phuc-hop-thuong-mai', 'menu'),
(82, 'cao-oc-van-phong', 'menu'),
(83, 'moi-gioi-dia-oc', 'menu'),
(84, 'vlxd-thi-cong', 'menu'),
(85, 'tai-chinh-phap-ly', 'menu'),
(86, 'dau-tu-du-an', 'menu'),
(87, 'thiet-ke-trang-tri', 'menu'),
(88, 'truyen-thong-quang-ca0', 'menu'),
(89, 'the-gioi-kien-truc', 'menu'),
(90, 'mach-ban', 'menu'),
(91, 'phong-thuy', 'menu'),
(92, 'khong-gian-song', 'menu'),
(93, 'shopping-cung-dool', 'menu'),
(94, 'thuong-hieu', 'menu'),
(95, 've-chung-toi', 'menu'),
(96, 'huong-dan-su-dung', 'menu'),
(97, 'quy-che-hoat-dong', 'menu'),
(98, 'chinh-sach-bao-mat', 'menu'),
(99, 'chinh-sach-giai-quyet-khieu-nai', 'menu'),
(100, 'lien-he', 'menu');

-- --------------------------------------------------------

--
-- Table structure for table `ci_masterfile_product_option`
--

DROP TABLE IF EXISTS `ci_masterfile_product_option`;
CREATE TABLE IF NOT EXISTS `ci_masterfile_product_option` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `is_color` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ci_masterfile_product_option_value`
--

DROP TABLE IF EXISTS `ci_masterfile_product_option_value`;
CREATE TABLE IF NOT EXISTS `ci_masterfile_product_option_value` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_option_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ci_menus`
--

DROP TABLE IF EXISTS `ci_menus`;
CREATE TABLE IF NOT EXISTS `ci_menus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) NOT NULL,
  `menu_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `menu_link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `show_in_menu` tinyint(1) NOT NULL,
  `display_order` int(11) NOT NULL,
  `icon` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `application_id` tinyint(1) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_date` datetime NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT AUTO_INCREMENT=49 ;

--
-- Dumping data for table `ci_menus`
--

INSERT INTO `ci_menus` (`id`, `parent_id`, `menu_name`, `menu_link`, `show_in_menu`, `display_order`, `icon`, `application_id`, `created_date`, `update_date`) VALUES
(24, 0, 'Chỉnh sửa website', 'admin/system', 1, 1, 'fa fa-cog', 1, '2018-04-06 14:44:30', '2018-04-06 21:44:30'),
(25, 0, 'Quản lý trang chủ', '', 1, 2, 'fa fa-home', 1, '2018-04-06 14:45:04', '2018-04-06 21:45:04'),
(26, 25, 'Slider', 'admin/banners', 1, 1, 'fa fa-list', 1, '2018-04-06 14:46:27', '2018-04-06 21:46:27'),
(27, 25, 'Menu', 'admin/menu', 1, 2, 'fa fa-bars', 1, '2018-04-06 14:51:41', '2018-04-06 21:51:41'),
(28, 0, 'Quản lý bài viết', '', 1, 3, 'fa fa-th-list', 1, '2018-04-06 15:02:03', '2018-04-06 22:02:03'),
(29, 28, 'Bài viết', 'admin/newController', 1, 1, 'fa fa-bars', 1, '2018-04-06 15:02:33', '2018-04-06 22:02:33'),
(30, 28, 'Danh mục bài viết', 'admin/categoryNews', 1, 2, 'fa fa-list-ul', 1, '2018-04-06 15:01:18', '2018-04-06 22:01:18'),
(31, 25, 'Quảng cáo', 'admin/advertisement', 1, 3, 'fa fa-align-center', 1, '2018-04-06 15:08:41', '2018-04-06 22:08:41'),
(32, 0, 'Quản lý sản phẩm', '', 1, 4, 'glyphicon glyphicon-th-large', 1, '2018-04-06 16:50:53', '2018-04-06 23:50:53'),
(33, 32, 'Sản phẩm', 'admin/product', 0, 1, 'glyphicon glyphicon-th-list', 1, '2018-04-13 15:14:33', '2018-04-13 17:14:33'),
(34, 32, 'Danh mục sản phẩm', 'admin/category', 1, 2, 'glyphicon glyphicon-tasks', 1, '2018-04-06 15:14:19', '2018-04-06 22:14:19'),
(35, 0, 'Quản lý địa điểm', '', 1, 5, 'glyphicon glyphicon-road', 1, '2018-04-11 04:24:21', '2018-04-11 06:24:21'),
(36, 0, 'Quản lý trang tĩnh', 'admin/post', 1, 6, 'glyphicon glyphicon-book', 1, '2018-04-08 15:05:05', '2018-04-08 17:05:05'),
(37, 35, 'Tỉnh', 'admin/provincesC', 1, 1, 'glyphicon glyphicon-map-marker', 1, '2018-04-11 08:46:10', '2018-04-11 10:46:10'),
(38, 35, 'Quận / Huyện', 'admin/districtC', 1, 2, 'glyphicon glyphicon-map-marker', 1, '2018-04-11 16:29:30', '2018-04-11 18:29:30'),
(39, 35, 'Phường / xã', 'admin/wardsC', 1, 3, 'glyphicon glyphicon-map-marker', 1, '2018-04-12 07:12:14', '2018-04-12 09:12:14'),
(40, 35, 'Đường', 'admin/streetsC', 1, 4, 'glyphicon glyphicon-map-marker', 1, '2018-04-12 07:29:10', '2018-04-12 09:29:10'),
(41, 0, 'Quản lý giá tìm kiếm', 'admin/searchPriceC', 1, 7, '	glyphicon glyphicon-search', 1, '2018-04-13 07:43:29', '2018-04-13 09:43:29'),
(42, 32, 'Tiện ích', 'admin/utilitiesC', 1, 3, 'glyphicon glyphicon-thumbs-up', 1, '2018-04-13 08:31:04', '2018-04-13 10:31:04'),
(43, 32, 'Pháp lý', 'admin/phapLyC', 1, 4, 'glyphicon glyphicon-comment', 1, '2018-04-13 08:43:43', '2018-04-13 10:43:43'),
(44, 32, 'Hướng nhà', 'admin/directionC', 1, 5, 'glyphicon glyphicon-cloud', 1, '2018-04-13 08:51:12', '2018-04-13 10:51:12'),
(45, 32, 'Loại đia ốc', 'admin/realEstateTypeC', 1, 6, 'glyphicon glyphicon-flag', 1, '2018-04-13 09:00:28', '2018-04-13 11:00:28'),
(46, 32, 'Đường trước nhà', 'admin/frontAreaC', 1, 7, 'glyphicon glyphicon-tag', 1, '2018-04-13 09:27:35', '2018-04-13 11:27:35'),
(47, 32, 'Bất động sản', 'admin/bdsC', 1, 1, 'glyphicon glyphicon-home', 1, '2018-04-13 15:13:29', '2018-04-13 17:13:29'),
(48, 0, 'Quản lý dự án', 'admin/project', 1, 8, 'glyphicon glyphicon-file', 1, '2018-04-15 05:37:20', '2018-04-15 07:37:20');

-- --------------------------------------------------------

--
-- Table structure for table `ci_news`
--

DROP TABLE IF EXISTS `ci_news`;
CREATE TABLE IF NOT EXISTS `ci_news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title_en` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `short_content` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `short_content_en` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `content_en` longtext COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `featured_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `language` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `views` int(255) NOT NULL,
  `location` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `ci_news`
--

INSERT INTO `ci_news` (`id`, `title`, `title_en`, `description`, `short_content`, `short_content_en`, `content`, `content_en`, `category_id`, `featured_image`, `slug`, `language`, `views`, `location`, `created_date`, `update_date`) VALUES
(1, 'Áp luật Thuế tài sản, thu ngân sách từ nhà đất tăng tới 1.700 %?', NULL, 'Mức thu ngân sách từ đất và nhà sẽ tăng lên từ khoảng 1.200 % đến 1.700 %, nếu đề nghị thu thuế tài sản của Bộ Tài chính thành hiện thực. Đây tất nhiên cũng là số tiền chính người dân sẽ phải “móc túi” bỏ ra.', 'Mức thu ngân sách từ đất và nhà sẽ tăng lên từ khoảng 1.200 % đến 1.700 %, nếu đề nghị thu thuế tài sản của Bộ Tài chính thành hiện thực. Đây tất nhiên cũng là số tiền chính người dân sẽ phải “móc túi” bỏ ra.', '', '<p><strong>Mức thu ng&acirc;n s&aacute;ch từ đất v&agrave; nh&agrave; sẽ tăng l&ecirc;n từ khoảng 1.200 % đến 1.700 %, nếu đề nghị thu thuế t&agrave;i sản của Bộ T&agrave;i ch&iacute;nh th&agrave;nh hiện thực. Đ&acirc;y tất nhi&ecirc;n cũng l&agrave; số tiền ch&iacute;nh người d&acirc;n sẽ phải &ldquo;m&oacute;c t&uacute;i&rdquo; bỏ ra.</strong><br />\r\n&nbsp;</p>\r\n\r\n<table border="0" cellpadding="0" cellspacing="0" style="width:200px">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt="" src="http://image.diaoconline.vn/tin-tuc/2018/04/16/A3A-apluatthuets.jpg" />\r\n			<p><em>Căn hộ chung cư từ 700 triệu cũng thuộc diện chịu thuế t&agrave;i sản? ẢNH NGỌC THẮNG</em></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><br />\r\n<strong>Thuế đất tăng h&agrave;ng chục lần</strong><br />\r\n<br />\r\nT&iacute;nh to&aacute;n con số tr&ecirc;n được PV Thanh Ni&ecirc;n thực hiện dựa tr&ecirc;n c&aacute;c số liệu Bộ T&agrave;i ch&iacute;nh cung cấp.<br />\r\n<br />\r\nCụ thể, theo Vụ trưởng Vụ Ch&iacute;nh s&aacute;ch thuế Phạm Đ&igrave;nh Thi v&agrave; tại dự thảo tờ tr&igrave;nh của Bộ T&agrave;i ch&iacute;nh gửi Ch&iacute;nh phủ, thuế thu h&agrave;ng năm trong qu&aacute; tr&igrave;nh sử dụng t&agrave;i sản chỉ chiếm khoảng 0,036 % GDP v&agrave; mới chỉ điều tiết đối với đất (qua thuế sử dụng đất phi n&ocirc;ng nghiệp v&agrave; thuế sử dụng đất n&ocirc;ng nghiệp).<br />\r\n<br />\r\nNhư vậy, với GDP năm 2017 l&agrave; hơn 5 triệu tỉ đồng, &ldquo;thuế t&agrave;i sản&rdquo; m&agrave; người d&acirc;n phải nộp l&agrave; khoảng 1.800 tỉ đồng.<br />\r\n&nbsp;</p>\r\n\r\n<table align="right" cellspacing="0" style="width:200px">\r\n	<tbody>\r\n		<tr>\r\n			<td><strong>Đ&aacute;nh thuế thế th&igrave; d&acirc;n sống sao nổi?</strong><br />\r\n			<br />\r\n			&ldquo;Chuyện thu thuế t&agrave;i sản kh&ocirc;ng phải l&agrave; mới, chỉ c&oacute; mức khởi điểm l&agrave; mới. Mức khởi điểm đ&oacute; kh&ocirc;ng ph&ugrave; hợp nh&igrave;n tr&ecirc;n mặt bằng của người Việt Nam. Đ&aacute;nh thuế thế th&igrave; d&acirc;n sống sao nổi?<br />\r\n			<br />\r\n			Nếu ng&acirc;n s&aacute;ch thiếu hụt, phải tăng thu thuế th&igrave; n&ecirc;n nhằm v&agrave;o đất bỏ trống, kh&ocirc;ng x&acirc;y dựng; nh&agrave; cho thu&ecirc; v&agrave; giảm khai khống gi&aacute; trị hợp đồng, chứ kh&ocirc;ng phải đ&aacute;nh th&ecirc;m thuế mới.<br />\r\n			<br />\r\n			Kh&ocirc;ng n&ecirc;n đ&aacute;nh v&agrave;o t&agrave;i sản thứ nhất của người d&acirc;n m&agrave; n&ecirc;n nhắm v&agrave;o hiệu quả của việc thu thuế tr&ecirc;n t&agrave;i sản hiện c&oacute; b&acirc;y giờ. Ch&iacute;nh s&aacute;ch phải c&oacute; sự ủng hộ của người d&acirc;n nữa. Trong bối cảnh chi ti&ecirc;u c&ocirc;ng thế n&agrave;y, chi thường xuy&ecirc;n thế n&agrave;y, l&atilde;ng ph&iacute; thế n&agrave;y, kh&ocirc;ng ai ủng hộ tăng thuế để ch&iacute;nh quyền chi ti&ecirc;u.<br />\r\n			<br />\r\n			Chừng n&agrave;o Bộ T&agrave;i ch&iacute;nh chưa chứng minh được hiệu quả trong việc chi ng&acirc;n s&aacute;ch sẽ kh&ocirc;ng ai ủng hộ việc tăng thuế&rdquo; (&Ocirc;ng Nguyễn Quang Đồng, Viện trưởng Viện ch&iacute;nh s&aacute;ch v&agrave; ph&aacute;t triển truyền th&ocirc;ng)<br />\r\n			&nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Tuy nhi&ecirc;n, cũng theo t&iacute;nh to&aacute;n của Bộ T&agrave;i ch&iacute;nh, mức thấp nhất ng&acirc;n s&aacute;ch c&oacute; thể thu được từ thuế t&agrave;i sản nếu dự thảo luật Thuế t&agrave;i sản của Bộ được th&ocirc;ng qua l&agrave; 22.700 tỉ đồng v&agrave; mức cao nhất l&agrave; 31.000 tỉ đồng, tương đương tăng từ 1.200 % - 1.700 % so với mức 1.800 tỉ đồng hiện nay. Điều n&agrave;y tương đương với việc người d&acirc;n sẽ phải đ&oacute;ng th&ecirc;m từ 20.900 tỉ đồng đến 29.200 tỉ đồng nữa.<br />\r\n<br />\r\nCon số tăng ch&oacute;ng mặt như vậy v&igrave; sao? V&igrave; Bộ T&agrave;i ch&iacute;nh đ&atilde; tăng thuế đất l&ecirc;n cả chục lần. Theo luật Thuế sử dụng đất phi n&ocirc;ng nghiệp năm 2010, diện t&iacute;ch đất trong hạn mức chỉ phải đ&oacute;ng mức thuế suất 0,03 %, nay thuế suất đ&atilde; tăng l&ecirc;n 0,3 % - 0,4% đối với đất ở; từ 0,23 % - 0,3 % với đất sản xuất kinh doanh, 0,39 - 0,52 % đối với đất nh&agrave; h&agrave;ng.<br />\r\n<br />\r\nDo vậy, ngay cả khi dự thảo của Bộ T&agrave;i ch&iacute;nh &ldquo;h&agrave;o ph&oacute;ng&rdquo; đưa những trường hợp phải nộp thuế dưới 50.000 đồng v&agrave;o diện miễn thuế (hiện nay v&agrave;i ngh&igrave;n đồng cũng thu), th&igrave; mức thu ng&acirc;n s&aacute;ch vẫn tăng rất cao, đồng nghĩa với mức đ&oacute;ng g&oacute;p của người d&acirc;n tăng ch&oacute;ng mặt.<br />\r\nTrong khi dư luận đang tập trung v&agrave;o việc đ&aacute;nh thuế căn nh&agrave; đầu ti&ecirc;n, mức thuế suất tăng đối với đất chưa thu h&uacute;t được sự ch&uacute; &yacute; đ&aacute;ng kể. Tuy nhi&ecirc;n, điểm ph&aacute;t sinh mức đ&oacute;ng g&oacute;p ch&iacute;nh sẽ từ thuế đất, chứ kh&ocirc;ng phải thuế nh&agrave;. Theo &ocirc;ng Phạm Đ&igrave;nh Thi, trong số 22.700 tỉ đến 31.000 tỉ dự kiến thu được, chỉ c&oacute; khoảng 700 tỉ đồng từ thuế nh&agrave;, c&ograve;n lại l&agrave; thuế đất.<br />\r\n<br />\r\n<strong>Căn hộ chung cư 100 m2 khu L&aacute;ng Hạ sẽ phải nộp thuế 5,8 triệu/năm</strong><br />\r\n<br />\r\nSau khi đề nghị thu thuế t&agrave;i sản của Bộ T&agrave;i ch&iacute;nh đưa ra, kh&aacute; nhiều người lo ngại việc phải đ&oacute;ng thuế, bởi ở c&aacute;c đ&ocirc; thị lớn, rất &iacute;t căn hộ chung cư dưới 700 triệu đồng.<br />\r\n<br />\r\nTin mừng l&agrave; gi&aacute; mua nh&agrave; kh&ocirc;ng phải gi&aacute; để t&iacute;nh thuế. Tin kh&ocirc;ng mừng l&agrave; cho d&ugrave; như vậy, chủ c&aacute;c căn hộ chung cư vẫn c&oacute; thể phải nộp thuế, v&igrave; ngưỡng 700 triệu đang được nhiều chuy&ecirc;n gia cho l&agrave; chưa c&oacute; cơ sở v&agrave; kh&aacute; thấp, sẽ &ldquo;tận thu&rdquo; đến cả những người ngh&egrave;o.<br />\r\n<br />\r\nTheo l&yacute; giải của Bộ T&agrave;i ch&iacute;nh, gi&aacute; t&iacute;nh thuế đối với căn hộ chung cư sẽ gồm 2 phần: gi&aacute; đất + gi&aacute; nh&agrave;. Gi&aacute; đất sẽ được t&iacute;nh bằng diện t&iacute;ch căn hộ x hệ số 0,2 (l&agrave; hệ số do Bộ T&agrave;i ch&iacute;nh đặt ra v&agrave; chưa l&yacute; giải căn cứ - PV) x gi&aacute; 1 m2 đất do UBND cấp tỉnh c&ocirc;ng bố tại thời điểm t&iacute;nh thuế. Gi&aacute; nh&agrave; sẽ l&agrave; diện t&iacute;ch căn hộ x gi&aacute; 1 m2 nh&agrave; x&acirc;y dựng mới theo từng cấp, hạng nh&agrave; do UBND cấp tỉnh quyết định, căn cứ tr&ecirc;n suất vốn đầu tư x&acirc;y dựng do Bộ X&acirc;y dựng ban h&agrave;nh.<br />\r\n<br />\r\nĐối với nh&agrave; đ&atilde; qua sử dụng, gi&aacute; t&iacute;nh thuế sẽ l&agrave; gi&aacute; trị nh&agrave; t&iacute;nh theo c&ocirc;ng thức tr&ecirc;n x tỷ lệ chất lượng c&ograve;n lại của nh&agrave; do UBND cấp tỉnh ban h&agrave;nh theo thời gian sử dụng nh&agrave; tại thời điểm t&iacute;nh thuế (hiện nay, UBND cấp tỉnh đang ban h&agrave;nh tỷ lệ chất lượng c&ograve;n lại của nh&agrave; để t&iacute;nh lệ ph&iacute; trước bạ đối với nh&agrave;).<br />\r\n<br />\r\nĐể đảm bảo t&iacute;nh ổn định của gi&aacute; t&iacute;nh thuế, thuận lợi cho người nộp thuế trong việc k&ecirc; khai thuế, Bộ T&agrave;i ch&iacute;nh đề nghị quy định gi&aacute; t&iacute;nh thuế được ổn định 5 năm.<br />\r\n<br />\r\nĐể dễ h&igrave;nh dung hơn, v&iacute; dụ một người sở hữu căn hộ chung cư cao cấp 100 m2 tại L&aacute;ng Hạ, nơi UBND TP.H&agrave; Nội c&ocirc;ng bố gi&aacute; đất &aacute;p dụng đến 2019 l&agrave; 74 triệu đồng/m2, suất vốn đầu tư chung cư tr&ecirc;n 20 tầng Bộ X&acirc;y dựng ban h&agrave;nh năm 2017 l&agrave; 10,81 triệu đồng/m2, gi&aacute; t&iacute;nh thuế của căn hộ sẽ l&agrave;: 100 x 0,2 x 74 + 100 x 10,81 = 2,561 tỉ đồng. Như vậy, sau khi trừ định mức miễn thuế 700 triệu đồng, số thuế chủ căn hộ phải nộp sẽ l&agrave; hơn 5,8 triệu đồng/năm.<br />\r\n<br />\r\nCũng cần phải n&oacute;i l&agrave; với c&aacute;ch t&iacute;nh n&agrave;y, căn hộ b&igrave;nh d&acirc;n ở ng&aacute;ch A ng&otilde; B L&aacute;ng Hạ gi&aacute; 3 tỉ đồng cũng sẽ phải đ&oacute;ng thuế ngang căn hộ cao cấp mặt đường L&aacute;ng Hạ 10 tỉ đồng.<br />\r\n&nbsp;</p>\r\n\r\n<p><strong>Giảm nợ đọng thuế, giảm chi, thay v&igrave; chỉ tận thu thuế</strong><br />\r\n<br />\r\n&ldquo;Bộ T&agrave;i ch&iacute;nh cần đưa ra những l&yacute; do thuyết phục hơn về cơ sở đưa ra ngưỡng 700 triệu v&agrave; thuế suất 0,3 - 0,4 % v&agrave; phải đ&aacute;nh gi&aacute; được t&aacute;c động của ch&iacute;nh s&aacute;ch, về ng&acirc;n s&aacute;ch, t&iacute;nh khả thi, đảm bảo c&ocirc;ng bằng, t&aacute;c động đến đời sống của người d&acirc;n. Căn cứ đưa ra đ&atilde; ph&ugrave; hợp hay chưa?<br />\r\n<br />\r\nHiện c&oacute; thể nh&igrave;n thấy bất cập l&agrave; đ&aacute;nh c&ugrave;ng một mức đối với c&aacute;c c&ocirc;ng tr&igrave;nh x&acirc;y dựng kể cả n&oacute; ở vị tr&iacute; đắc địa hay trong ng&otilde;. Cần đảm bảo nguy&ecirc;n tắc của việc đ&aacute;nh thuế t&agrave;i sản l&agrave; phải c&ocirc;ng khai, minh bạch v&agrave; c&ocirc;ng bằng. Tăng thuế chỉ l&agrave; giải ph&aacute;p cuối c&ugrave;ng th&ocirc;i, Bộ T&agrave;i ch&iacute;nh phải l&agrave;m rất nhiều giải ph&aacute;p kh&aacute;c, li&ecirc;n quan đến tận thu thuế, giảm nợ đọng thuế, giảm chi, cơ cấu lại nguồn chi&rdquo; (TS Cấn Văn Lực, Gi&aacute;m đốc Trường đ&agrave;o tạo c&aacute;n bộ BIDV)</p>\r\n\r\n<p><br />\r\n<em><strong>DiaOcOnline.vn - Theo Thanh ni&ecirc;n</strong></em></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Từ kh&oacute;a:</strong></p>\r\n', '', 95, '/uploads/news/22a9f79dba6f4d9a982032b36aad1d7f.jpg', 'ap-luat-thue-tai-san-thu-ngan-sach-tu-nha-dat-tang-toi-1700-', 'vn', 0, '["1"]', '2018-04-17 18:27:58', '2018-04-16 00:00:00'),
(2, 'Mở rộng, ngầm hóa công trình trụ sở UBND TP.HCM 129 năm tuổi', NULL, 'Từ ngày 16.4 - 1.5, phương án thiết kế quy hoạch chi tiết và kiến trúc công trình xây dựng mở rộng, nâng cấp trụ sở HĐND, UBND TP.HCM (86 Lê Thánh Tôn, Q.1) được trưng bày tại 92 Lê Thánh Tôn để người dân tham quan, góp ý.', 'Từ ngày 16.4 - 1.5, phương án thiết kế quy hoạch chi tiết và kiến trúc công trình xây dựng mở rộng, nâng cấp trụ sở HĐND, UBND TP.HCM (86 Lê Thánh Tôn, Q.1) được trưng bày tại 92 Lê Thánh Tôn để người dân tham quan, góp ý.', '', '<p><strong>Từ ng&agrave;y 16.4 - 1.5, phương &aacute;n thiết kế quy hoạch chi tiết v&agrave; kiến tr&uacute;c c&ocirc;ng tr&igrave;nh x&acirc;y dựng mở rộng, n&acirc;ng cấp trụ sở HĐND, UBND TP.HCM (86 L&ecirc; Th&aacute;nh T&ocirc;n, Q.1) được trưng b&agrave;y tại 92 L&ecirc; Th&aacute;nh T&ocirc;n để người d&acirc;n tham quan, g&oacute;p &yacute;.</strong><br />\r\n&nbsp;</p>\r\n\r\n<table border="0" cellpadding="0" cellspacing="0" style="width:200px">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt="" src="http://image.diaoconline.vn/tin-tuc/2018/04/16/E81-ngamhoa_1.jpg" />\r\n			<p><em>Phối cảnh tổng thể c&ocirc;ng tr&igrave;nh x&acirc;y dựng mở rộng, n&acirc;ng cấp trụ sở HĐND, UBND TP.HCM. ẢNH: Đ&Igrave;NH PH&Uacute; CHỤP LẠI TỪ TRIỂN L&Atilde;M</em></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><br />\r\nTại lễ khai mạc trưng b&agrave;y triển l&atilde;m do Sở Quy hoạch Kiến tr&uacute;c TP.HCM tổ chức s&aacute;ng nay, &ocirc;ng Nguyễn Thanh To&agrave;n, Ph&oacute; gi&aacute;m đốc Sở Quy hoạch Kiến tr&uacute;c cho biết phương &aacute;n được Hội đồng tuyển chọn quốc gia chọn do C&ocirc;ng ty GENSLER - c&ocirc;ng ty tư vấn thiết kế kiến tr&uacute;c, quy hoạch h&agrave;ng đầu thế giới, c&oacute; trụ sở tại Mỹ thực hiện, từng được xếp hạng thứ 2 trong số 100 c&ocirc;ng ty kiến tr&uacute;c lớn nhất thế giới, thực hiện.<br />\r\n<br />\r\nHội đồng tuyển chọn quốc gia chọn phương &aacute;n do C&ocirc;ng ty GENSLER đề xuất từ đầu th&aacute;ng 11.2017, sau nhiều lần g&oacute;p &yacute;, chỉnh sửa, phương &aacute;n ho&agrave;n chỉnh được trưng b&agrave;y triển l&atilde;m để người d&acirc;n tham quan, g&oacute;p &yacute; từ ng&agrave;y 16.4 - 1.5, trước khi triển khai x&acirc;y dựng tr&ecirc;n thực tế.<br />\r\n<br />\r\nTheo phương &aacute;n của C&ocirc;ng ty GENSLER, diện t&iacute;ch khu&ocirc;n vi&ecirc;n dự &aacute;n rộng hơn 18.000m2, diện t&iacute;ch x&acirc;y dựng hơn 14.000m2, bốn ph&iacute;a l&agrave; mặt tiền đường L&ecirc; Th&aacute;nh T&ocirc;n - Pasteur - L&yacute; Tự Trọng - Đồng Khởi. &Yacute; tưởng khi l&ecirc;n phương &aacute;n thiết kế l&agrave; g&igrave;n giữ t&iacute;nh văn h&oacute;a, lịch sử của c&ocirc;ng tr&igrave;nh kiến tr&uacute;c bảo tồn, hướng đến sự hiện đại, năng động, tiết kiệm năng lượng, th&acirc;n thiện với thi&ecirc;n nhi&ecirc;n của t&ograve;a nh&agrave; mới, ph&ugrave; hợp với bối cảnh đ&ocirc; thị của thế kỷ 21, tạo được dấu ấn ri&ecirc;ng v&agrave; tạo được vẻ đẹp trường tồn cho c&ocirc;ng tr&igrave;nh&hellip; Do đ&oacute;, C&ocirc;ng ty GENSLER đ&atilde; đưa ra &yacute; tưởng h&igrave;nh khối - l&agrave; sự giao thoa của văn h&oacute;a, lịch sử l&acirc;u đời của TP.HCM trong bối cảnh d&ograve;ng chảy mạnh mẽ của nền kinh tế.<br />\r\n&nbsp;</p>\r\n\r\n<table border="0" cellpadding="0" cellspacing="0" style="width:200px">\r\n	<tbody>\r\n		<tr>\r\n			<td><em><img alt="" src="http://image.diaoconline.vn/tin-tuc/2018/04/16/521-ngamhoa_2.jpg" /><br />\r\n			Phối cảnh tổng thể c&ocirc;ng tr&igrave;nh x&acirc;y dựng mở rộng, n&acirc;ng cấp trụ sở HĐND, UBND TP.HCM nh&igrave;n từ phố đi bộ Nguyễn Huệ. ẢNH: Đ&Igrave;NH PH&Uacute; CHỤP LẠI TỪ TRIỂN L&Atilde;M</em></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table border="0" cellpadding="0" cellspacing="0" style="width:200px">\r\n	<tbody>\r\n		<tr>\r\n			<td><em><img alt="" src="http://image.diaoconline.vn/tin-tuc/2018/04/16/6F8-ngamhoa_3.jpg" /><br />\r\n			H&igrave;nh khối c&ocirc;ng tr&igrave;nh x&acirc;y dựng mở rộng, n&acirc;ng cấp trụ sở HĐND, UBND TP.HCM nh&igrave;n từ ph&iacute;a đường L&yacute; Tự Trọng. ẢNH: Đ&Igrave;NH PH&Uacute; CHỤP LẠI TỪ TRIỂN L&Atilde;M</em></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><br />\r\n<strong>Hạ ngầm 2 tầng l&agrave;m việc dưới mặt đất</strong><br />\r\n<br />\r\nC&ocirc;ng tr&igrave;nh kiến tr&uacute;c mới l&agrave; t&ograve;a nh&agrave; 4 tầng hầm, 6 tầng nổi bao gồm tất cả c&aacute;c ph&acirc;n khu chức năng l&agrave;m việc, tiếp d&acirc;n, đ&oacute;n kh&aacute;ch, thư viện, hội trường, tham quan&hellip;<br />\r\nVề bố cục, một trong những &yacute; tưởng t&aacute;o bạo của đồ &aacute;n thiết kế l&agrave; hạ ngầm 2 tầng l&agrave;m việc dưới mặt đất, đưa s&acirc;n vườn v&agrave; &aacute;nh s&aacute;ng tự nhi&ecirc;n xuống dưới l&ograve;ng đất để giảm chiều cao c&ocirc;ng tr&igrave;nh x&acirc;y mới. Đặc biệt, tầng m&aacute;i l&agrave; s&acirc;n vườn rộng lớn g&oacute;p v&agrave;o khoảng xanh cho TP, đồng thời c&ograve;n l&agrave; nơi lưu trữ nước mưa t&aacute;i sử dụng v&agrave;o việc chăm s&oacute;c s&acirc;n vườn, c&acirc;y xanh trong<br />\r\n<br />\r\nt&ograve;a nh&agrave;. Mặt tiền t&ograve;a nh&agrave; được thiết kế &ldquo;th&ocirc;ng minh&rdquo; với những thanh lam chắn nắng v&agrave; lấy s&aacute;ng c&oacute; thể tự động điều chỉnh g&oacute;c nghi&ecirc;ng theo hướng nắng nhằm bảo vệ t&ograve;a nh&agrave; khỏi bức xạ mặt trời, tiết kiệm năng lượng.<br />\r\n<br />\r\nC&aacute;c sảnh đ&oacute;n của khối nh&agrave; l&agrave;m việc UBND, HĐND TP được bố tr&iacute; trang trọng ph&iacute;a đường Pasteur, trong khi sảnh của c&aacute;c sở v&agrave; tiếp d&acirc;n được bố tr&iacute; ở ph&iacute;a mặt đường L&yacute; Tự Trọng. Tại tầng s&acirc;n vườn trung t&acirc;m sẽ c&oacute; một hội trường đa năng 800 chỗ, v&agrave; một ph&ograve;ng họp cho HĐND TP khoảng 400 chỗ. Trung t&acirc;m điều h&agrave;nh &ldquo;th&agrave;nh phố th&ocirc;ng minh&rdquo; sẽ được đặt tại đ&acirc;y, s&aacute;t với trung t&acirc;m th&ocirc;ng tin, thư viện để phục vụ c&ocirc;ng t&aacute;c truy xuất dữ liệu dễ d&agrave;ng.<br />\r\n<br />\r\nTại t&ograve;a nh&agrave; bảo tồn, sảnh đ&oacute;n tiếp kh&aacute;ch quan trọng của t&ograve;a nh&agrave; cũ (khối nh&agrave; 86 L&ecirc; Th&aacute;nh T&ocirc;n được bảo tồn nghi&ecirc;m ngặt) vẫn được giữ nguy&ecirc;n, sẽ l&agrave; nơi đ&oacute;n tiếp c&aacute;c đo&agrave;n kh&aacute;ch đối nội, đối ngoại; phần c&ograve;n lại sẽ l&agrave; kh&ocirc;ng gian triển l&atilde;m, trưng b&agrave;y về lịch sử ph&aacute;t triển của t&ograve;a nh&agrave; trụ sở HĐND, UBND TP.HCM, đồng thời l&agrave; nơi tổ chức sự kiện, đ&oacute;n người d&acirc;n, du kh&aacute;ch v&agrave; học sinh tham quan.<br />\r\n&nbsp;</p>\r\n\r\n<table border="0" cellpadding="0" cellspacing="0" style="width:200px">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt="" src="http://image.diaoconline.vn/tin-tuc/2018/04/16/098-ngamhoa_4.jpg" />\r\n			<p><em>Thiết kế mặt bằng chi tiết c&ocirc;ng tr&igrave;nh x&acirc;y dựng mở rộng, n&acirc;ng cấp trụ sở HĐND, UBND TP.HCM. ẢNH: Đ&Igrave;NH PH&Uacute; CHỤP LẠI TỪ TRIỂN L&Atilde;M</em></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table border="0" cellpadding="0" cellspacing="0" style="width:200px">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt="" src="http://image.diaoconline.vn/tin-tuc/2018/04/16/4F5-ngamhoa_5.jpg" />\r\n			<p><em>Khối nh&agrave; mặt tiền đường L&ecirc; Th&aacute;nh T&ocirc;n tuổi đời 129 năm tuổi được bảo tồn. Đ&acirc;y l&agrave; một trong những c&ocirc;ng tr&igrave;nh kiến tr&uacute;c cổ nổi tiếng bậc nhất của TP.HCM n&oacute;i ri&ecirc;ng v&agrave; cả nước n&oacute;i chung. ẢNH: Đ&Igrave;NH PH&Uacute;</em></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><br />\r\n<strong>Tăng tối đa t&iacute;nh năng tương t&aacute;c</strong><br />\r\n<br />\r\n&Ocirc;ng Nguyễn Thanh To&agrave;n cho rằng trong rất nhiều phương &aacute;n đề ra, phương &aacute;n được chọn c&oacute; một trong những đặc điểm quan trọng l&agrave; c&ocirc;ng tr&igrave;nh được thiết kế để tăng tối đa t&iacute;nh năng tương t&aacute;c với người d&acirc;n v&agrave; tăng tối đa t&iacute;nh tương t&aacute;c nội bộ, kết nối với kh&ocirc;ng gian xanh của c&ocirc;ng vi&ecirc;n Chi Lăng, c&ocirc;ng vi&ecirc;n Bảo t&agrave;ng Lịch sử c&ugrave;ng với trục đường hoa Nguyễn Huệ tạo th&agrave;nh điểm đến cho người d&acirc;n.<br />\r\n<br />\r\nRi&ecirc;ng về giải quyết vấn đề giao th&ocirc;ng khu vực, song h&agrave;nh với c&aacute;c trục đường Pasteur, L&yacute; Tự Trọng, Đồng Khởi, mặt tiền c&ocirc;ng tr&igrave;nh l&ugrave;i s&acirc;u v&agrave;o th&ecirc;m 6m với 2 l&agrave;n xe &ocirc; t&ocirc;, vỉa h&egrave; d&agrave;nh cho người đi bộ c&oacute; m&aacute;i che&hellip;, tạo điều kiện thuận lợi cho việc đi lại.<br />\r\n<br />\r\nTheo &ocirc;ng Nguyễn Thanh To&agrave;n, những ưu điểm nổi bật đ&oacute; mục đ&iacute;ch nhằm ph&aacute;t huy tối đa t&iacute;nh tương t&aacute;c giữa kiến tr&uacute;c với cộng đồng, x&atilde; hội, tạo điều kiện tốt hơn trong việc phục vụ d&acirc;n, người d&acirc;n tiếp cận dễ d&agrave;ng, nhất l&agrave; khi người d&acirc;n đến l&agrave;m việc, tham quan trụ sở.<br />\r\n&nbsp;</p>\r\n\r\n<p>Trụ sở HĐND, UBND TP.HCM (86 L&ecirc; Th&aacute;nh T&ocirc;n, P.Bến Ngh&eacute;, Q.1; nằm ngay đầu phố đi bộ Nguyễn Huệ) l&agrave; một trong những c&ocirc;ng tr&igrave;nh kiến tr&uacute;c cổ nổi tiếng của TP.HCM n&oacute;i ri&ecirc;ng v&agrave; cả nước n&oacute;i chung, được x&acirc;y dựng từ năm 1889, đến nay đ&atilde; 129 năm tuổi, do kiến tr&uacute;c sư Femand Gard&egrave;s thiết kế, m&ocirc; phỏng theo kiểu những lầu chu&ocirc;ng ở miền bắc nước Ph&aacute;p.<br />\r\n<br />\r\nThời Ph&aacute;p thuộc, t&ograve;a nh&agrave; n&agrave;y c&oacute; t&ecirc;n l&agrave; H&ocirc;tel de ville trong tiếng Ph&aacute;p, hay Dinh x&atilde; T&acirc;y trong tiếng Việt. Đến thời Việt Nam Cộng H&ograve;a gọi l&agrave; T&ograve;a đ&ocirc; ch&aacute;nh S&agrave;i G&ograve;n, l&agrave; nơi l&agrave;m việc v&agrave; hội họp của ch&iacute;nh quyền. Từ sau ng&agrave;y đất nước thống nhất đến nay, t&ograve;a nh&agrave; l&agrave; nơi l&agrave;m việc của HĐND, UBND TP.HCM.<br />\r\n<br />\r\nNăm 2015, sau khi tổ chức cuộc thi về &yacute; tưởng s&aacute;ng tạo phương &aacute;n thiết kế khu trung t&acirc;m h&agrave;nh ch&iacute;nh mới của TP.HCM, l&atilde;nh đạo UBND TP.HCM cơ bản thống nhất chọn phương &aacute;n của một c&ocirc;ng ty Nhật Bản để l&agrave;m đồ &aacute;n thiết kế x&acirc;y dựng trong thời gian tới.<br />\r\n<br />\r\nKhu trung t&acirc;m h&agrave;nh ch&iacute;nh mới của TP.HCM nằm trong &ocirc; phố L&ecirc; Th&aacute;nh T&ocirc;n, Pasteur, L&yacute; Tự Trọng v&agrave; Đồng Khởi. Khối c&ocirc;ng tr&igrave;nh hiện hữu mặt tiền đường L&ecirc; Th&aacute;nh T&ocirc;n (d&agrave;i từ Đồng Khởi đến Pasteur) sẽ được bảo tồn. Ri&ecirc;ng d&atilde;y nh&agrave; ph&iacute;a sau v&agrave; trụ sở c&aacute;c sở: GTVT, TT-TT, TN-MT sẽ được th&aacute;o dỡ để x&acirc;y dựng mới, dự kiến sẽ bố tr&iacute; 8 cơ quan nh&agrave; nước với 95 ph&ograve;ng ban trực thuộc, tương lai c&oacute; khoảng 1.700 người l&agrave;m việc.<br />\r\n<br />\r\nUBND TP.HCM thời gian qua đ&atilde; nhiều lần họp b&agrave;n về kế hoạch x&acirc;y dựng mới v&agrave; n&acirc;ng cấp c&ocirc;ng tr&igrave;nh kiến tr&uacute;c 129 năm tuổi n&oacute;i tr&ecirc;n để l&agrave;m trung t&acirc;m h&agrave;nh ch&iacute;nh mới. Tuy nhi&ecirc;n, thời điểm khởi c&ocirc;ng cụ thể đang chờ &yacute; kiến quyết định của Thường trực Th&agrave;nh ủy TP.HCM.</p>\r\n\r\n<p><br />\r\n<br />\r\n<em><strong>DiaOcOnline.vn - Theo Thanh ni&ecirc;n</strong></em></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Từ kh&oacute;a:</strong></p>\r\n', '', 95, '/uploads/news/60543489f3c28636e6e8e696f0fe17a1.jpg', 'mo-rong-ngam-hoa-cong-trinh-tru-so-ubnd-tphcm-129-nam-tuoi', 'vn', 0, '["0","1"]', '2018-04-17 18:17:41', '2018-04-16 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `ci_orders`
--

DROP TABLE IF EXISTS `ci_orders`;
CREATE TABLE IF NOT EXISTS `ci_orders` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `number_invoice` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `customer_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `shipping_address` bigint(20) NOT NULL,
  `phone_number` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `coupon_id` bigint(20) NOT NULL,
  `type_payment` tinyint(1) NOT NULL,
  `total_payment` double NOT NULL,
  `order_date` datetime NOT NULL,
  `status` tinyint(4) NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `note` text COLLATE utf8_unicode_ci NOT NULL,
  `created_date` datetime NOT NULL,
  `update_date` datetime NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT AUTO_INCREMENT=9 ;

--
-- Dumping data for table `ci_orders`
--

INSERT INTO `ci_orders` (`id`, `number_invoice`, `user_id`, `customer_name`, `email`, `shipping_address`, `phone_number`, `coupon_id`, `type_payment`, `total_payment`, `order_date`, `status`, `address`, `note`, `created_date`, `update_date`) VALUES
(3, 'O001', 0, 'Lucjfer', 'lucjfer0407@gmail.com', 0, '01627062224', 0, 1, 34580000, '2018-04-08 15:35:02', 1, 'hcm', '', '2018-04-08 15:35:02', '2018-04-08 15:35:02'),
(4, 'O002', 0, 'Lucjfer', 'lucjfer0407@gmail.com', 0, '01627062224', 0, 1, 10990000, '2018-04-08 15:36:34', 1, 'ahb', '', '2018-04-08 15:36:34', '2018-04-08 15:36:34'),
(5, 'O003', 0, 'Lucjfer', 'lucjfer0407@gmail.com', 0, '01627062224', 0, 1, 13500000, '2018-04-08 15:37:21', 1, 'abc', '', '2018-04-08 15:37:21', '2018-04-08 15:37:21'),
(6, 'O004', 0, 'Lucjfer', 'lucjfer0407@gmail.com', 0, '01627062224', 0, 2, 23590000, '2018-04-08 15:37:37', 1, 'abc', '', '2018-04-08 15:37:37', '2018-04-08 15:37:37'),
(7, 'O005', 0, 'Lucjfer', 'lucjfer0407@gmail.com', 0, '01627062224', 0, 1, 23590000, '2018-04-08 15:38:39', 1, 'dascasc', 'ascascascasc', '2018-04-08 15:38:39', '2018-04-08 15:38:39'),
(8, 'O080420180008', 0, 'Lucjfer', 'lucjfer0407@gmail.com', 0, '01627062224', 0, 1, 24980000, '2018-04-08 16:46:15', 1, 'asc', 'asc', '2018-04-08 16:46:15', '2018-04-08 17:00:31');

-- --------------------------------------------------------

--
-- Table structure for table `ci_order_details`
--

DROP TABLE IF EXISTS `ci_order_details`;
CREATE TABLE IF NOT EXISTS `ci_order_details` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `order_id` bigint(20) NOT NULL,
  `product_id` bigint(20) NOT NULL,
  `product_option_value_id` bigint(20) NOT NULL,
  `product_sub_option_value_id` bigint(20) NOT NULL,
  `quantity` int(11) NOT NULL,
  `base_price` double NOT NULL,
  `total_price` double NOT NULL,
  `more_info` text COLLATE utf8_unicode_ci NOT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT AUTO_INCREMENT=19 ;

--
-- Dumping data for table `ci_order_details`
--

INSERT INTO `ci_order_details` (`id`, `order_id`, `product_id`, `product_option_value_id`, `product_sub_option_value_id`, `quantity`, `base_price`, `total_price`, `more_info`, `created_date`) VALUES
(11, 3, 37, 0, 0, 1, 10990000, 10990000, '[[{"name_option":"","name_option_value":"","price":0}]]', '2018-04-08 15:35:02'),
(12, 3, 36, 0, 0, 1, 23590000, 23590000, '[[{"name_option":"","name_option_value":"","price":0}]]', '2018-04-08 15:35:02'),
(13, 4, 37, 0, 0, 1, 10990000, 10990000, '[[{"name_option":"","name_option_value":"","price":0}]]', '2018-04-08 15:36:34'),
(14, 5, 35, 0, 0, 1, 13500000, 13500000, '[[{"name_option":"","name_option_value":"","price":0}]]', '2018-04-08 15:37:21'),
(15, 6, 36, 0, 0, 1, 23590000, 23590000, '[[{"name_option":"","name_option_value":"","price":0}]]', '2018-04-08 15:37:37'),
(16, 7, 36, 0, 0, 1, 23590000, 23590000, '[[{"name_option":"","name_option_value":"","price":0}]]', '2018-04-08 15:38:40'),
(17, 8, 37, 0, 0, 1, 10990000, 10990000, '[[{"name_option":"","name_option_value":"","price":0}]]', '2018-04-08 16:46:15'),
(18, 8, 37, 0, 0, 1, 10990000, 13990000, '{"257":{"368":{"name_option":"Ram","name_option_value":"8GB","price":1000000}},"258":{"370":{"name_option":"SSD","name_option_value":"120GB","price":1500000}},"259":{"371":{"name_option":"Color","name_option_value":"#000000","price":500000}}}', '2018-04-08 16:46:15');

-- --------------------------------------------------------

--
-- Table structure for table `ci_pages`
--

DROP TABLE IF EXISTS `ci_pages`;
CREATE TABLE IF NOT EXISTS `ci_pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `page_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `short_content` text COLLATE utf8_unicode_ci NOT NULL,
  `content` mediumint(9) NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ci_partner`
--

DROP TABLE IF EXISTS `ci_partner`;
CREATE TABLE IF NOT EXISTS `ci_partner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `name_en` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description_en` text COLLATE utf8_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `publish` tinyint(1) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_date` datetime NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ci_phap_ly`
--

DROP TABLE IF EXISTS `ci_phap_ly`;
CREATE TABLE IF NOT EXISTS `ci_phap_ly` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_date` datetime NOT NULL,
  `update_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `ci_phap_ly`
--

INSERT INTO `ci_phap_ly` (`id`, `name`, `created_date`, `update_date`) VALUES
(1, 'Sổ hồng', '2018-04-13 10:44:01', '2018-04-13 10:44:01'),
(2, 'Giấy đỏ', '2018-04-13 10:44:08', '2018-04-13 10:44:08'),
(3, 'Giấy tay', '2018-04-13 10:44:13', '2018-04-13 10:44:13'),
(4, 'Đang hợp thức hóa', '2018-04-13 10:44:24', '2018-04-13 10:44:24'),
(5, 'Giấy tờ hợp lệ', '2018-04-13 10:44:33', '2018-04-13 10:44:33'),
(6, 'Chủ quyền tư nhân', '2018-04-13 10:44:45', '2018-04-13 10:44:45'),
(7, 'Hợp đồng', '2018-04-13 10:44:54', '2018-04-13 10:44:54'),
(8, 'Không xác định', '2018-04-13 10:44:59', '2018-04-13 10:44:59');

-- --------------------------------------------------------

--
-- Table structure for table `ci_posts`
--

DROP TABLE IF EXISTS `ci_posts`;
CREATE TABLE IF NOT EXISTS `ci_posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title_en` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `short_content` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `short_content_en` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `content_en` longtext COLLATE utf8_unicode_ci NOT NULL,
  `featured_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `language` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT AUTO_INCREMENT=2 ;

--
-- Dumping data for table `ci_posts`
--

INSERT INTO `ci_posts` (`id`, `title`, `title_en`, `description`, `short_content`, `short_content_en`, `content`, `content_en`, `featured_image`, `slug`, `language`, `created_date`) VALUES
(1, 'THAY THẾ PIN LAPTOP', '', 'Không phải mọi loại pin laptop đều hoạt động hết công suất sau một thời gian sử dụng. Thực tế là nhiều người đã không biết hoặc không thể giữ cho pin laptop hoạt động thời gian lâu nhất sau mỗi lần sạc. Nếu sạc và sử dụng không đúng cách, sạc pin không và', 'Không phải mọi loại pin laptop đều hoạt động hết công suất sau một thời gian sử dụng. Thực tế là nhiều người đã không biết hoặc không thể giữ cho pin laptop hoạt động thời gian lâu nhất sau mỗi lần sạc. Nếu sạc và sử dụng không đúng cách, sạc pin không và', '', '<p>Kh&ocirc;ng phải mọi loại pin laptop đều hoạt động hết c&ocirc;ng suất sau một thời gian sử dụng. Thực tế l&agrave; nhiều người đ&atilde; kh&ocirc;ng biết hoặc kh&ocirc;ng thể giữ cho pin laptop hoạt động thời gian l&acirc;u nhất sau mỗi lần sạc. Nếu sạc v&agrave; sử dụng kh&ocirc;ng đ&uacute;ng c&aacute;ch, sạc pin kh&ocirc;ng v&agrave;o, pin sử dụng mau hết th&igrave; đ&atilde; đến l&uacute;c bạn n&ecirc;n thay pin, để thuận tiện cho c&ocirc;ng việc, học tập v&agrave; giải tr&iacute;.</p>\r\n\r\n<p>Những lỗi pin laptop thường gặp phải:</p>\r\n\r\n<p>- Pin laptop hiện dấu &quot;X&quot; m&agrave;u đỏ</p>\r\n\r\n<p>- Lỗi Pin Laptop sạc kh&ocirc;ng v&agrave;o &ldquo;Plugged in, not charging&rdquo;</p>\r\n\r\n<p>- Pin laptop đang sạc nhưng khi r&uacute;t sạc ra th&igrave; laptop bị mất nguồn</p>\r\n\r\n<p>- Pin laptop sạc l&uacute;c được l&uacute;c kh&ocirc;ng</p>\r\n\r\n<p>- Pin sử dụng nhanh hết</p>\r\n\r\n<p>Khi thấy những biểu hiện đ&oacute; th&igrave; tốt nhất l&agrave; bạn n&ecirc;n thay pin mới:</p>\r\n\r\n<p>- Thay Pin laptop Tại KHOLAPTOP được bảo h&agrave;nh 06 th&aacute;ng.</p>\r\n\r\n<p>- Thời gian thay pin laptop, m&aacute;y t&iacute;nh, macbook nhanh ch&oacute;ng, lấy ngay tại chỗ.</p>\r\n\r\n<p>- Quy tr&igrave;nh l&agrave;m việc r&otilde; r&agrave;ng, minh bạch v&agrave; nghi&ecirc;m t&uacute;c ho&agrave;n to&agrave;n về thời gian thay pin laptop.</p>\r\n\r\n<h3>C&Aacute;C DỊCH VỤ VỀ PIN LAPTOP TẠI TRUNG T&Acirc;M:</h3>\r\n\r\n<p>- Thay Pin laptop ch&iacute;nh ch&atilde;ng</p>\r\n\r\n<p>- Thay pin laptop Macbook</p>\r\n\r\n<p>- Thay pin laptop Sony&nbsp;</p>\r\n\r\n<p>- Thay pin laptop Asus</p>\r\n\r\n<p>- Thay pin laptop Acer</p>\r\n\r\n<p>- Thay pin laptop Dell</p>\r\n\r\n<p>- Thay pin laptop Samsung</p>\r\n\r\n<p>- Thay pin laptop Lenovo</p>\r\n\r\n<p>&nbsp;- Thay pin laptop HP</p>\r\n\r\n<p>- Thay pin laptop Toshiba</p>\r\n\r\n<p><strong><em>H&atilde;y đến sửa chữa v&agrave; thay thế Pin laptop tại Số 9 Th&aacute;i H&agrave;, để được hưởng chế độ dịch vụ tốt nhất</em></strong></p>', '', '/uploads/posts/37654672d18595c24bbbd7344b40a238.jpg', 'thay-the-pin-laptop-', '', '2018-04-08 22:11:11');

-- --------------------------------------------------------

--
-- Table structure for table `ci_producer`
--

DROP TABLE IF EXISTS `ci_producer`;
CREATE TABLE IF NOT EXISTS `ci_producer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `publish` tinyint(1) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_date` datetime NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ci_products`
--

DROP TABLE IF EXISTS `ci_products`;
CREATE TABLE IF NOT EXISTS `ci_products` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `product_code` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `product_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `product_name_en` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `sale_price` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `content_en` longtext COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `description_en` text COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `is_feature` int(11) NOT NULL,
  `is_new` int(11) NOT NULL,
  `update_date` datetime NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT AUTO_INCREMENT=38 ;

--
-- Dumping data for table `ci_products`
--

INSERT INTO `ci_products` (`id`, `product_code`, `product_name`, `product_name_en`, `price`, `sale_price`, `content`, `content_en`, `description`, `description_en`, `title`, `meta_description`, `slug`, `status`, `is_feature`, `is_new`, `update_date`, `created_date`) VALUES
(35, 'P060420180035', 'DELL INSPIRON 15R N5567 M5I5353 (I57200-8-1TB-AMD) GRAY', '', 13500000, '', '<p>H&agrave;ng ph&acirc;n phối của Dell Việt Nam. Core i5-7200U 2.5Ghz 8192MB 1TB DVDRW 15.6&quot; HD WLED webcam bluetooth AMD Radeon R7 M445 2G DDR5 VGA Weight 2.4kg. Gray Color. Made in China. Brand New 100%. &nbsp;Gi&aacute; đ&atilde; bao gồm VAT 10%</p>', '', '<p><strong>H&agrave;ng ph&acirc;n phối của Dell Việt Nam.</strong><br />\r\n<strong>Core i5-7200U 2.5Ghz 8192MB 1TB</strong>&nbsp;DVDRW 15.6&quot; HD WLED<br />\r\n<strong>webcam bluetooth&nbsp;AMD Radeon R7 M445 2G DDR5 VGA</strong><br />\r\nWeight 2.4kg.&nbsp;<strong>Gray Color</strong>.<br />\r\nMade in China. Brand New 100%.&nbsp;<br />\r\nGi&aacute; đ&atilde; bao gồm VAT 10%</p>', '', 'DELL INSPIRON 15R N5567 M5I5353 (I57200-8-1TB-AMD) GRAY', 'Hàng phân phối của Dell Việt Nam. Core i5-7200U 2.5Ghz 8192MB 1TB DVDRW 15.6" HD WLED webcam bluetooth AMD Radeon R7 M445 2G DDR5 VGA Weight 2.4kg. Gray Color. Made in China. Brand New 100%.  Giá đã bao gồm VAT 10%', 'dell-inspiron-15r-n5567-m5i5353-i57200-8-1tb-amd-gray-35', 1, 1, 1, '0000-00-00 00:00:00', '2018-04-06 15:19:12'),
(36, 'P060420180036', 'HP ENVY 13-AD140TU -3CH47PA', '', 23590000, '', '<p><strong>Bảo h&agrave;nh:&nbsp;</strong>12 Th&aacute;ng<br>\r\n<strong>Kho:&nbsp;</strong>C&ograve;n h&agrave;ng<br>\r\n<strong>SKU:&nbsp;</strong>1151-003-657401</p>\r\n\r\n<p>Core i7 8550U, 1.8 upto 4Ghz, 8GB DDR4, SSD 256GB, Intel UHD620, 13.3&quot; full HD, Led_key, 1.23 kg, Win 10H. Gold Color Made in China. Brand New 100%.&nbsp; Gi&aacute; đ&atilde; gồm VAT 10%</p>', '', '<table>\r\n	<tbody>\r\n		<tr>\r\n			<td rowspan="1" style="vertical-align:top">\r\n			<p><strong>Product number</strong></p>\r\n			</td>\r\n			<td rowspan="1" style="vertical-align:top">\r\n			<p>3CH47PA</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan="1" style="vertical-align:top">\r\n			<p><strong>Product name</strong></p>\r\n			</td>\r\n			<td rowspan="1" style="vertical-align:top">\r\n			<p>HP ENVY - 13-ad140tu</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan="1" style="vertical-align:top">\r\n			<p><strong>Microprocessor</strong></p>\r\n			</td>\r\n			<td rowspan="1" style="vertical-align:top">\r\n			<p>Intel&reg; Core&trade; i7-8550U (1.8 GHz base frequency, up to 4 GHz with Intel&reg; Turbo Boost Technology, 8 MB cache, 4 cores)</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan="1" style="vertical-align:top">\r\n			<p><strong>Memory, standard</strong></p>\r\n			</td>\r\n			<td rowspan="1" style="vertical-align:top">\r\n			<p>8 GB LPDDR3-1866 SDRAM (onboard)</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan="1" style="vertical-align:top">\r\n			<p><strong>Video graphics</strong></p>\r\n			</td>\r\n			<td rowspan="1" style="vertical-align:top">\r\n			<p>Intel&reg; UHD Graphics 620</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan="1" style="vertical-align:top">\r\n			<p><strong>Hard drive</strong></p>\r\n			</td>\r\n			<td rowspan="1" style="vertical-align:top">\r\n			<p>256 GB PCIe&reg; NVMe&trade; M.2 SSD</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan="1" style="vertical-align:top">\r\n			<p><strong>Display</strong></p>\r\n			</td>\r\n			<td rowspan="1" style="vertical-align:top">\r\n			<p>13.3&quot; diagonal FHD IPS BrightView WLED-backlit (1920 x 1080)</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan="1" style="vertical-align:top">\r\n			<p><strong>Keyboard</strong></p>\r\n			</td>\r\n			<td rowspan="1" style="vertical-align:top">\r\n			<p>Full-size island-style backlit keyboard</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan="1" style="vertical-align:top">\r\n			<p><strong>Pointing device</strong></p>\r\n			</td>\r\n			<td rowspan="1" style="vertical-align:top">\r\n			<p>HP Imagepad with multi-touch gesture support</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan="1" style="vertical-align:top">\r\n			<p><strong>Wireless connectivity</strong></p>\r\n			</td>\r\n			<td rowspan="1" style="vertical-align:top">\r\n			<p>Intel&reg; 802.11a/b/g/n/ac (2x2) Wi-Fi&reg; and Bluetooth&reg; 4.2 Combo</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan="1" style="vertical-align:top">\r\n			<p><strong>Expansion slots</strong></p>\r\n			</td>\r\n			<td rowspan="1" style="vertical-align:top">\r\n			<p>1 microSD media card reader</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan="1" style="vertical-align:top">\r\n			<p><strong>External ports</strong></p>\r\n			</td>\r\n			<td rowspan="1" style="vertical-align:top">\r\n			<p>1 headphone/microphone combo; 2 USB 3.1 Gen 1 (1 HP Sleep and Charge); 2 USB 3.1 Type-C&trade; Gen 1 (Data Transfer up to 5 Gb/s, DP1.2, HP Sleep and Charge)</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan="1" style="vertical-align:top">\r\n			<p><strong>Dimensions (W x D x H)</strong></p>\r\n			</td>\r\n			<td rowspan="1" style="vertical-align:top">\r\n			<p>30.54 x 21.56 x 1.39 cm</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan="1" style="vertical-align:top">\r\n			<p><strong>Weight</strong></p>\r\n			</td>\r\n			<td rowspan="1" style="vertical-align:top">\r\n			<p>Starting at 1.23 kg</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan="1" style="vertical-align:top">\r\n			<p><strong>Power supply type</strong></p>\r\n			</td>\r\n			<td rowspan="1" style="vertical-align:top">\r\n			<p>45 W AC power adapter</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan="1" style="vertical-align:top">\r\n			<p><strong>Battery type</strong></p>\r\n			</td>\r\n			<td rowspan="1" style="vertical-align:top">\r\n			<p>6-cell, 53.6 Wh Li-ion polymer</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan="1" style="vertical-align:top">\r\n			<p><strong>Battery life mixed usage</strong></p>\r\n			</td>\r\n			<td rowspan="1" style="vertical-align:top">\r\n			<p>Up to 14 hours and 15 minutes</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan="1" style="vertical-align:top">\r\n			<p><strong>Video Playback Battery life</strong></p>\r\n			</td>\r\n			<td rowspan="1" style="vertical-align:top">\r\n			<p>Up to 12 hours and 30 minutes</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan="1" style="vertical-align:top">\r\n			<p><strong>Webcam</strong></p>\r\n			</td>\r\n			<td rowspan="1" style="vertical-align:top">\r\n			<p>HP Wide Vision HD Camera with integrated dual array digital microphone</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan="1" style="vertical-align:top">\r\n			<p><strong>Audio features</strong></p>\r\n			</td>\r\n			<td rowspan="1" style="vertical-align:top">\r\n			<p>Bang &amp; Olufsen, quad speakers, HP Audio Boost</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', '', 'HP ENVY 13-AD140TU -3CH47PA', 'HP ENVY 13-AD140TU -3CH47PA', 'hp-envy-13-ad140tu--3ch47pa-35', 1, 1, 1, '0000-00-00 00:00:00', '2018-04-06 16:54:51'),
(37, 'P060420180037', 'ASUS A540UP-GO097T', '', 10990000, '', '<p><strong>Bảo h&agrave;nh:&nbsp;</strong>24 Th&aacute;ng</p>\r\n\r\n<p><strong>Kho:&nbsp;</strong>C&ograve;n h&agrave;ng</p>\r\n\r\n<p><strong>SKU:&nbsp;</strong>1151-005-1065403</p>\r\n\r\n<p>Core i5-7200U 2.5Ghz 4096MB 500GB&nbsp;DVDRW 15.6&quot; HD WLED webcam bluetooth AMD Radeon R5 M420 2GB VGA Windows 10. Weight 2.0kg. Blue Color. Made in China. Brand New 100%.&nbsp; Gi&aacute; đ&atilde; gồm VAT 10%</p>', '', '<p><strong>Core i5-7200U 2.5GHz 4096MB 500GB</strong>&nbsp;14.0&quot; HD WLED<br />\r\n<strong>webcam&nbsp;&nbsp;AMD&nbsp;Radeon R5 M420 2GB VGA</strong><br />\r\n<strong>Windows 10</strong>. Weight 1.75 kg.&nbsp;<strong>Blue&nbsp;Color.</strong><br />\r\nMade in China. Brand New 100%.<br />\r\nGi&aacute; đ&atilde; gồm VAT 10%</p>', '', 'ASUS A540UP-GO097T', 'ASUS A540UP-GO097T', 'asus-a540up-go097t-37', 1, 1, 1, '0000-00-00 00:00:00', '2018-04-06 17:05:58');

-- --------------------------------------------------------

--
-- Table structure for table `ci_product_categories`
--

DROP TABLE IF EXISTS `ci_product_categories`;
CREATE TABLE IF NOT EXISTS `ci_product_categories` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `product_id` bigint(20) NOT NULL,
  `category_id` bigint(20) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT AUTO_INCREMENT=84 ;

--
-- Dumping data for table `ci_product_categories`
--

INSERT INTO `ci_product_categories` (`id`, `product_id`, `category_id`) VALUES
(77, 35, 68),
(78, 36, 75),
(83, 37, 77);

-- --------------------------------------------------------

--
-- Table structure for table `ci_product_images`
--

DROP TABLE IF EXISTS `ci_product_images`;
CREATE TABLE IF NOT EXISTS `ci_product_images` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `product_id` bigint(20) NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT AUTO_INCREMENT=100 ;

--
-- Dumping data for table `ci_product_images`
--

INSERT INTO `ci_product_images` (`id`, `product_id`, `image`, `created_date`) VALUES
(93, 35, '/uploads/products/b2e21cf4c62f97c661a00514e7529a86.gif', '2018-04-06 15:21:35'),
(94, 36, '/uploads/products/30933595678cb83c738714ab082e035e.png', '2018-04-06 16:54:51'),
(95, 37, '/uploads/products/0ced0c777dea9b51adb0c43237404a6a.jpg', '2018-04-06 16:58:56'),
(97, 1, '/uploads/bds/09afe20e586a629fba28154a11a9246d.jpg', '2018-04-17 03:13:36'),
(98, 2, '/uploads/bds/31be2c85b893ebc4ae780010c23480df.jpg', '2018-04-17 03:16:38'),
(99, 3, '/uploads/bds/e57a937f6ed726d425812e5f50fa0365.jpg', '2018-04-17 03:18:13');

-- --------------------------------------------------------

--
-- Table structure for table `ci_product_option`
--

DROP TABLE IF EXISTS `ci_product_option`;
CREATE TABLE IF NOT EXISTS `ci_product_option` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(250) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Color, Size',
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT AUTO_INCREMENT=260 ;

--
-- Dumping data for table `ci_product_option`
--

INSERT INTO `ci_product_option` (`id`, `product_id`, `name`, `created_date`) VALUES
(246, '34', 'Cpu', '2018-04-06 15:17:22'),
(257, '37', 'Ram', '2018-04-07 04:54:28'),
(258, '37', 'SSD', '2018-04-07 04:54:28'),
(259, '37', 'Color', '2018-04-07 04:54:28');

-- --------------------------------------------------------

--
-- Table structure for table `ci_product_option_value`
--

DROP TABLE IF EXISTS `ci_product_option_value`;
CREATE TABLE IF NOT EXISTS `ci_product_option_value` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `product_option_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` double NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT AUTO_INCREMENT=373 ;

--
-- Dumping data for table `ci_product_option_value`
--

INSERT INTO `ci_product_option_value` (`id`, `product_id`, `product_option_id`, `name`, `price`) VALUES
(368, 37, 257, '8GB', 1000000),
(369, 37, 257, '16GB', 3000000),
(370, 37, 258, '120GB', 1500000),
(371, 37, 259, '#000000', 500000),
(372, 37, 259, '#00ff00', 200000);

-- --------------------------------------------------------

--
-- Table structure for table `ci_product_price`
--

DROP TABLE IF EXISTS `ci_product_price`;
CREATE TABLE IF NOT EXISTS `ci_product_price` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `product_id` bigint(20) NOT NULL,
  `product_option_value_id` bigint(20) NOT NULL,
  `price` double NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_date` datetime NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ci_projects`
--

DROP TABLE IF EXISTS `ci_projects`;
CREATE TABLE IF NOT EXISTS `ci_projects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title_en` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `short_content` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `short_content_en` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `content_en` longtext COLLATE utf8_unicode_ci NOT NULL,
  `featured_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `language` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_date` datetime NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT AUTO_INCREMENT=4 ;

--
-- Dumping data for table `ci_projects`
--

INSERT INTO `ci_projects` (`id`, `name`, `title`, `title_en`, `description`, `short_content`, `short_content_en`, `content`, `content_en`, `featured_image`, `slug`, `url`, `language`, `created_date`, `update_date`) VALUES
(3, 'Garden Riverside Villa', 'Garden Riverside Villa', '', 'Khu Dân Cư Thanh Niên - Garden Riverside Villas ™ là dự án tiếp giáp với 3 mặt sông, không khí trong xanh và thoáng mát. Khu Dân Cư Thanh Niên - Garden Riverside Villas là nơi để để hưởng thụ cuộc sống thiên nhiên trong lành giữa thành phố nhộn nhịp hối h', 'Khu Dân Cư Thanh Niên - Garden Riverside Villas ™ là dự án tiếp giáp với 3 mặt sông, không khí trong xanh và thoáng mát. Khu Dân Cư Thanh Niên - Garden Riverside Villas là nơi để để hưởng thụ cuộc sống thiên nhiên trong lành giữa thành phố nhộn nhịp hối h', '', '<p><strong>Tổng quan dự &aacute;n</strong></p>\r\n\r\n<p>&nbsp;Khu D&acirc;n Cư Thanh Ni&ecirc;n - Garden Riverside Villas &trade; l&agrave; dự &aacute;n tiếp gi&aacute;p với 3 mặt s&ocirc;ng, kh&ocirc;ng kh&iacute; trong xanh v&agrave; tho&aacute;ng m&aacute;t. Khu D&acirc;n Cư Thanh Ni&ecirc;n - Garden Riverside Villas l&agrave; nơi để để hưởng thụ cuộc sống thi&ecirc;n nhi&ecirc;n trong l&agrave;nh giữa th&agrave;nh phố nhộn nhịp hối hả.&nbsp;</p>\r\n\r\n<p>T&ecirc;n Dự &Aacute;n: Khu D&acirc;n Cư Thanh Ni&ecirc;n - Garden Riverside Villas</p>\r\n\r\n<p>Địa điểm: X&atilde; Phước Lộc, huyện Nh&agrave; B&egrave;</p>\r\n\r\n<p>Quy m&ocirc;: 35ha</p>\r\n\r\n<p>Chủ đầu tư: C&ocirc;ng ty cổ phần đầu tư x&acirc;y dựng Thanh Ni&ecirc;n<br />\r\n<br />\r\n<img alt="" src="http://image.diaoconline.vn/du-an/2018/04/12/thumb-2E5-tongquan(31).jpg" /><br />\r\n&nbsp;</p>\r\n\r\n<p><strong>Vị tr&iacute; dự &aacute;n</strong></p>\r\n\r\n<p>&nbsp;Khu D&acirc;n Cư Thanh Ni&ecirc;n - Garden Riverside Villas&trade; nằm tr&ecirc;n trục đường Phạm H&ugrave;ng nối d&agrave;i, tọa lạc tại khu vực tiếp gi&aacute;p giữa huyện Nh&agrave; B&egrave; v&agrave; Khu Đ&ocirc; thị mới ph&iacute;a Nam th&agrave;nh phố, thuộc địa b&agrave;n x&atilde; Phước Lộc, huyện Nh&agrave; B&egrave;, c&aacute;ch trục đường Nguyễn Văn Linh 3km (con đường huyết mạch v&agrave; mang t&iacute;nh chiến lược của khu Nam S&agrave;i G&ograve;n, nối liền th&agrave;nh phố Hồ Ch&iacute; Minh &ndash; khu Đ&ocirc; thị mới Ph&uacute; Mỹ Hưng v&agrave; c&aacute;c tỉnh miền T&acirc;y Nam Bộ).</p>\r\n\r\n<p>Khu D&acirc;n Cư Thanh Ni&ecirc;n - Garden Riverside Villas c&aacute;ch trung t&acirc;m Quận 1 khoảng 10 km n&ecirc;n chỉ mất 20 ph&uacute;t để đến trung t&acirc;m th&agrave;nh phố v&agrave; chỉ khoảng 10 ph&uacute;t để tới trung t&acirc;m khu Đ&ocirc; thị mới Ph&uacute; Mỹ Hưng, rất thuận tiện về giao th&ocirc;ng dễ d&agrave;ng tiếp cận được c&aacute;c tiện &iacute;ch tại trung t&acirc;m Kinh tế, t&agrave;i ch&iacute;nh, thương mại&hellip;của TP.HCM. Garden Riverside Villas c&aacute;ch cầu Nguyễn Tri Phương 5 ph&uacute;t xe m&aacute;y. Hơn nữa, Garden Riverside Villas c&ograve;n gần trường Quốc tế Anh Việt, v&agrave; c&aacute;c khu đ&ocirc; thị Đại Ph&uacute;c, T30, Intresco...<br />\r\n<br />\r\n<img alt="" src="http://image.diaoconline.vn/du-an/2018/04/12/thumb-066-vitri(29).jpg" /><br />\r\n&nbsp;</p>\r\n\r\n<p><strong>Tiện &iacute;ch dự &aacute;n</strong></p>\r\n\r\n<p>&nbsp;Tiện &iacute;ch trong dự &aacute;n: Trung t&acirc;m thương mại, C&ocirc;ng vi&ecirc;n c&acirc;y xanh, c&ocirc;ng vi&ecirc;n bờ s&ocirc;ng d&agrave;i hơn 1km đ&atilde; h&igrave;nh th&agrave;nh, Trường học mẫu gi&aacute;o, trường cấp 1...</p>\r\n\r\n<p>Tiện &iacute;ch xung quang dự &aacute;n: si&ecirc;u thị Lotte, si&ecirc;u thị Co-op Mart, hệ thống trung t&acirc;m thương mại hiện đại &ndash; dịch vụ t&agrave;i ch&iacute;nh ng&acirc;n h&agrave;ng của khu đ&ocirc; thị mới Ph&uacute; Mỹ Hưng, trường đại học RMIT, trường đại học T&ocirc;n Đức Thắng, trường đại học T&agrave;i ch&iacute;nh Marketing, bệnh viện 30/4, bệnh viện FV, bệnh viện T&acirc;m Đức &hellip;<br />\r\n<br />\r\n<img alt="" src="http://image.diaoconline.vn/du-an/2018/04/12/thumb-D0C-tienich(32).jpg" /></p>\r\n', '', '', '', '', '', '2018-04-15 08:58:07', '2018-04-15 09:01:57');

-- --------------------------------------------------------

--
-- Table structure for table `ci_provinces`
--

DROP TABLE IF EXISTS `ci_provinces`;
CREATE TABLE IF NOT EXISTS `ci_provinces` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `province_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_date` datetime NOT NULL,
  `update_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `ci_provinces`
--

INSERT INTO `ci_provinces` (`id`, `province_name`, `slug`, `created_date`, `update_date`) VALUES
(7, 'Hồ Chí Minh', 'ho-chi-minh', '2018-04-11 18:12:25', '2018-04-11 18:12:25');

-- --------------------------------------------------------

--
-- Table structure for table `ci_real_estate_type`
--

DROP TABLE IF EXISTS `ci_real_estate_type`;
CREATE TABLE IF NOT EXISTS `ci_real_estate_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_date` datetime NOT NULL,
  `update_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=19 ;

--
-- Dumping data for table `ci_real_estate_type`
--

INSERT INTO `ci_real_estate_type` (`id`, `name`, `slug`, `created_date`, `update_date`) VALUES
(1, 'Đất vườn', 'dat-vuon', '2018-04-13 11:01:30', '2018-04-13 11:01:30'),
(2, 'Căn hộ dich vụ', 'can-ho-dich-vu', '2018-04-13 11:02:03', '2018-04-13 11:02:03'),
(3, 'Khách Sạn - Nhà Phố', 'khach-san-nha-pho', '2018-04-13 11:02:11', '2018-04-13 11:02:11'),
(4, 'Villa - Biệt thự', 'villa-biet-thu', '2018-04-13 11:03:07', '2018-04-13 11:03:07'),
(5, 'Nhà phố', 'nha-pho', '2018-04-13 11:03:29', '2018-04-13 11:03:29'),
(6, 'Nhà tạm', 'nha-tam', '2018-04-13 11:03:35', '2018-04-13 11:03:35'),
(7, 'Văn phòng', 'van-phong', '2018-04-13 11:03:40', '2018-04-13 11:03:40'),
(8, 'Căn hộ chung cư', 'can-ho-chung-cu', '2018-04-13 11:03:45', '2018-04-13 11:03:45'),
(9, 'Căn hộ cao cấp', 'can-ho-cao-cap', '2018-04-13 11:03:49', '2018-04-13 11:03:49'),
(10, 'Đất dự án - Quy hoạch', 'dat-du-an-quy-hoach', '2018-04-13 11:03:55', '2018-04-13 11:03:55'),
(11, 'Đất ở - Đất thổ cư', 'dat-o-dat-tho-cu', '2018-04-13 11:04:01', '2018-04-13 11:04:01'),
(12, 'Đất lâm nghiệp', 'dat-lam-nghiep', '2018-04-13 11:04:05', '2018-04-13 11:04:05'),
(13, 'Đất nông nghiệp', 'dat-nong-nghiep', '2018-04-13 11:04:09', '2018-04-13 11:04:09'),
(14, 'Đất cho sản xuất', 'dat-cho-san-xuat', '2018-04-13 11:04:15', '2018-04-13 11:04:15'),
(15, 'Nhà Kho - Xưởng', 'nha-kho-xuong', '2018-04-13 11:04:19', '2018-04-13 11:04:19'),
(16, 'Nhà hàng - Khách sạn', 'nha-hang-khach-san', '2018-04-13 11:04:24', '2018-04-13 11:04:24'),
(17, 'Mặt bằng - Cửa hàng', 'mat-bang-cua-hang', '2018-04-13 11:04:29', '2018-04-13 11:04:29'),
(18, 'Phòng trọ', 'phong-tro', '2018-04-13 11:04:33', '2018-04-13 11:04:33');

-- --------------------------------------------------------

--
-- Table structure for table `ci_search_price`
--

DROP TABLE IF EXISTS `ci_search_price`;
CREATE TABLE IF NOT EXISTS `ci_search_price` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `from_price` int(11) NOT NULL,
  `to_price` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `ci_search_price`
--

INSERT INTO `ci_search_price` (`id`, `from_price`, `to_price`) VALUES
(1, 0, 6000000);

-- --------------------------------------------------------

--
-- Table structure for table `ci_settings`
--

DROP TABLE IF EXISTS `ci_settings`;
CREATE TABLE IF NOT EXISTS `ci_settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value` text COLLATE utf8_unicode_ci NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT AUTO_INCREMENT=733 ;

--
-- Dumping data for table `ci_settings`
--

INSERT INTO `ci_settings` (`id`, `key`, `value`, `created_date`) VALUES
(719, 'logoFE', '/uploads/system/f4655703865ee73d19cd0b460ca33e41.png', '2018-04-18 04:11:03'),
(720, 'favicon', '', '2018-04-18 04:11:03'),
(721, 'defaultPageTitle', 'Dia oc online', '2018-04-18 04:11:03'),
(722, 'copyrightOnFooter', '<p>Copyright © 2007 - 2016 DiaOcOnline Corp. ® <br />\r\nGhi rõ nguồn "DiaOcOnline.vn" khi phát hành lại thông tin từ website này.<br />\r\nCông ty Cổ phần Địa ốc Trực Tuyến. Lầu 1, Phòng 102 tòa nhà OfficeSpot, 79C Điện Biên Phủ, phường Đakao, Quận 1, TP.HCM, Viet Nam. <br />\r\nTel: (028) 39115304 - Fax: (028) 39115360</p>\r\n', '2018-04-18 04:11:03'),
(723, 'copyrightOnFooter_image', '', '2018-04-18 04:11:03'),
(724, 'copyrightOnFooter_right', '<p>Giấy phép MXH số 285/GP-BTTTT cấp ngày 14/06/2017 <br />\r\nĐơn vị chủ quản: CÔNG TY CỔ PHẦN ĐỊA ỐC TRỰC TUYẾN</p>\r\n', '2018-04-18 04:11:03'),
(725, 'googleAnalytics', '', '2018-04-18 04:11:03'),
(726, 'facebook', 'http://facebook.com', '2018-04-18 04:11:03'),
(727, 'googleplus', 'https://google.com', '2018-04-18 04:11:03'),
(728, 'twitter', 'https://twitter.com', '2018-04-18 04:11:03'),
(729, 'youtube', 'http://youtube.com', '2018-04-18 04:11:03'),
(730, 'linkedin', 'https://www.linkedin.com/', '2018-04-18 04:11:03'),
(731, 'companyCellPhone', '0909 480 599(Mr. Giang)', '2018-04-18 04:11:03'),
(732, 'companyPhone', '', '2018-04-18 04:11:03');

-- --------------------------------------------------------

--
-- Table structure for table `ci_streets`
--

DROP TABLE IF EXISTS `ci_streets`;
CREATE TABLE IF NOT EXISTS `ci_streets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `street_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ward_id` int(11) NOT NULL,
  `district_id` int(11) NOT NULL,
  `province_id` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `update_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `ci_streets`
--

INSERT INTO `ci_streets` (`id`, `street_name`, `ward_id`, `district_id`, `province_id`, `created_date`, `update_date`) VALUES
(1, 'street name', 1, 4, 7, '2018-04-12 09:29:58', '2018-04-12 11:26:37');

-- --------------------------------------------------------

--
-- Table structure for table `ci_users`
--

DROP TABLE IF EXISTS `ci_users`;
CREATE TABLE IF NOT EXISTS `ci_users` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `role_id` tinyint(1) NOT NULL,
  `application_id` tinyint(1) NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `full_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `birth_date` date NOT NULL,
  `verify_code` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `is_first_login` tinyint(1) NOT NULL,
  `avarta` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `background` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_date` datetime NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT AUTO_INCREMENT=2 ;

--
-- Dumping data for table `ci_users`
--

INSERT INTO `ci_users` (`id`, `role_id`, `application_id`, `username`, `email`, `password`, `password_hash`, `first_name`, `last_name`, `full_name`, `phone`, `gender`, `birth_date`, `verify_code`, `is_first_login`, `avarta`, `background`, `status`, `created_date`, `update_date`) VALUES
(1, 1, 1, 'admin', 'lucjfer0407@gmail.com', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Lucjer', 'Devil', 'Lucjer Devil', '115', 'Nam', '0000-00-00', '', 0, '/uploads/admin/257fae197f0739d58db77577b679f25b.png', '/uploads/admin/landscape3.jpg', 1, '2018-03-12 01:04:03', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `ci_utilities`
--

DROP TABLE IF EXISTS `ci_utilities`;
CREATE TABLE IF NOT EXISTS `ci_utilities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_date` datetime NOT NULL,
  `update_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Dumping data for table `ci_utilities`
--

INSERT INTO `ci_utilities` (`id`, `name`, `created_date`, `update_date`) VALUES
(1, 'Đầy đủ tiện nghi', '2018-04-13 10:34:25', '2018-04-13 10:34:25'),
(2, 'Chỗ đậu xe hơi', '2018-04-13 10:34:47', '2018-04-13 10:34:47'),
(3, 'Sân vườn', '2018-04-13 10:34:56', '2018-04-13 10:34:56'),
(4, 'Hồ bơi', '2018-04-13 10:35:18', '2018-04-13 10:35:18'),
(5, 'Tiện kinh doanh', '2018-04-13 10:35:25', '2018-04-13 10:35:25'),
(6, 'Tiện để ở', '2018-04-13 10:35:31', '2018-04-13 10:35:31'),
(7, 'Tiện làm văn phòng', '2018-04-13 10:35:39', '2018-04-13 10:35:39'),
(8, 'Tiện cho sản xuất', '2018-04-13 10:35:48', '2018-04-13 10:35:48'),
(9, 'Cho sinh viên thuê', '2018-04-13 10:35:57', '2018-04-13 10:35:57');

-- --------------------------------------------------------

--
-- Table structure for table `ci_wards`
--

DROP TABLE IF EXISTS `ci_wards`;
CREATE TABLE IF NOT EXISTS `ci_wards` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ward_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `district_id` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `update_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `ci_wards`
--

INSERT INTO `ci_wards` (`id`, `ward_name`, `district_id`, `created_date`, `update_date`) VALUES
(1, 'Phường 3', 4, '2018-04-12 09:16:28', '2018-04-12 10:12:42');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
