-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2020 at 05:08 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phongthuy`
--

-- --------------------------------------------------------

--
-- Table structure for table `billdetails`
--

CREATE TABLE `billdetails` (
  `id` int(10) NOT NULL,
  `bill_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `quantity` int(255) NOT NULL,
  `price` int(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `billdetails`
--

INSERT INTO `billdetails` (`id`, `bill_id`, `product_id`, `quantity`, `price`, `created_at`, `updated_at`) VALUES
(17, 19, 1, 1, 350000, '2018-06-14 10:50:35', '2018-06-14 10:50:35'),
(18, 19, 3, 1, 350000, '2018-06-14 10:50:35', '2018-06-14 10:50:35'),
(19, 20, 46, 1, 370000, '2018-06-14 10:51:30', '2018-06-14 10:51:30'),
(20, 21, 1, 1, 350000, '2018-06-14 12:28:04', '2018-06-14 12:28:04'),
(21, 22, 1, 3, 350000, '2018-06-14 18:27:43', '2018-06-14 18:27:43'),
(22, 23, 9, 1, 350000, '2020-12-12 19:15:49', '2020-12-12 19:15:49');

-- --------------------------------------------------------

--
-- Table structure for table `bills`
--

CREATE TABLE `bills` (
  `id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `date_order` date NOT NULL,
  `total` int(10) NOT NULL,
  `payment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bills`
--

INSERT INTO `bills` (`id`, `customer_id`, `date_order`, `total`, `payment`, `note`, `created_at`, `updated_at`) VALUES
(19, 40, '2018-06-14', 700000, '1', 'Giao vào ngày t7,cn', '2018-06-14 10:50:35', '2018-06-14 10:50:35'),
(20, 41, '2018-06-14', 370000, '2', 'Giao vào t2,t3', '2018-06-14 10:51:30', '2018-06-14 10:51:30'),
(21, 42, '2018-06-14', 350000, '1', 'Mua hàng', '2018-06-14 12:28:04', '2018-06-14 12:28:04'),
(22, 43, '2018-06-15', 1050000, '1', 'Mua hàng', '2018-06-14 18:27:43', '2018-06-14 18:27:43');

-- --------------------------------------------------------

--
-- Table structure for table `categorys`
--

CREATE TABLE `categorys` (
  `id` int(10) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `parent_id` int(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categorys`
--

INSERT INTO `categorys` (`id`, `name`, `parent_id`, `created_at`, `updated_at`) VALUES
(2, 'Vòng Tay Phong Thủy', 0, '2018-05-28 10:25:18', '2018-05-28 10:25:18'),
(3, 'Vòng Cổ', 0, '2018-05-28 10:25:38', '2018-05-28 10:25:38'),
(4, 'Vật Phẩm Phong Thủy', 0, '2018-05-28 10:25:48', '2018-05-28 10:25:48'),
(5, 'Bộ Sưu Tập', 0, '2018-05-28 20:05:15', '2018-05-28 20:05:15'),
(6, 'Trang Sức', 0, '2018-06-01 16:55:46', '2018-05-28 20:05:26'),
(7, 'Vòng Tay Mệnh Kim', 2, '2018-06-11 08:28:27', '2018-06-11 01:28:27'),
(8, 'Vòng Tay Mệnh Mộc', 2, '2018-05-28 20:06:54', '2018-05-28 20:06:54'),
(10, 'Vòng Tay Mệnh Thủy', 2, '2018-05-28 20:07:50', '2018-05-28 20:07:50'),
(13, 'Vòng Tay Mệnh Hỏa', 2, '2018-05-28 20:08:32', '2018-05-28 20:08:32'),
(14, 'Vòng Tay Mệnh Thổ', 2, '2018-05-28 20:08:41', '2018-05-28 20:08:41'),
(15, 'Mặt Dây Hồ Ly', 3, '2018-05-28 20:18:04', '2018-05-28 20:18:04'),
(17, 'Mặt Dây Phật Bản Mệnh', 3, '2018-05-28 20:18:38', '2018-05-28 20:18:38'),
(18, 'Mặt Dây Ve Sầu', 3, '2018-05-28 20:18:59', '2018-05-28 20:18:59'),
(19, 'Mặt Dây Hoa Mẫu Đơn', 3, '2018-05-28 20:19:34', '2018-05-28 20:19:34'),
(20, 'Mặt Dây Phật Quan Âm', 3, '2018-05-28 20:21:08', '2018-05-28 20:21:08'),
(21, 'Mặt Dây Tùy Hưu', 3, '2018-05-28 20:22:04', '2018-05-28 20:22:04'),
(22, 'Mặt Dây Phật Di Lặc', 3, '2018-05-28 20:27:24', '2018-05-28 20:27:24'),
(24, 'Mặt Dây Phật Tổ', 3, '2018-05-28 20:29:02', '2018-05-28 20:29:02'),
(25, 'Quả Cầu Phong Thủy', 4, '2018-05-28 20:45:20', '2018-05-28 20:45:20'),
(26, 'Tùy Hưu', 4, '2018-05-28 20:45:44', '2018-05-28 20:45:44'),
(27, 'Cây Tài Lộc', 4, '2018-05-28 20:46:24', '2018-05-28 20:46:24'),
(28, 'Mặt Dây Hồ Lô', 3, '2018-05-28 21:00:49', '2018-05-28 21:00:49'),
(29, 'Cóc Tài Lộc', 4, '2018-05-28 21:01:18', '2018-05-28 21:01:18'),
(30, 'Tượng Phật Di Lặc', 4, '2018-05-28 21:02:05', '2018-05-28 21:02:05'),
(31, 'Tháp Văn Xương', 4, '2018-05-28 21:02:29', '2018-05-28 21:02:29'),
(32, 'Vật Phẩm Phong Thủy Oto', 4, '2018-05-28 21:03:33', '2018-05-28 21:03:33'),
(33, 'Bộ Sản Phẩm Khuyến Mãi', 5, '2018-05-28 21:05:01', '2018-05-28 21:05:01'),
(34, 'Bộ Sưu Tập Nam Đẹp', 5, '2018-05-28 21:05:18', '2018-05-28 21:05:18'),
(35, 'Bộ Sưu Tập Nữ Đẹp', 5, '2018-05-28 21:05:30', '2018-05-28 21:05:30'),
(36, 'Mặt Đá', 6, '2018-05-29 02:24:39', '2018-05-29 02:24:39'),
(37, 'Dây đeo bọc bạc', 6, '2018-05-29 02:26:10', '2018-05-29 02:26:10'),
(38, 'Nhẫn Đá Phong Thủy', 6, '2018-05-29 02:26:33', '2018-05-29 02:26:33'),
(39, 'Dây Chuyền', 6, '2018-05-29 02:26:54', '2018-05-29 02:26:54'),
(40, 'Hoa Tai', 6, '2018-05-29 02:27:02', '2018-05-29 02:27:02'),
(41, 'Charm Bạc', 6, '2018-05-29 02:27:20', '2018-05-29 02:27:20'),
(42, 'Charm Vàng', 6, '2018-05-29 02:27:31', '2018-05-29 02:27:31');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `name`, `email`, `content`, `created_at`, `updated_at`) VALUES
(3, 'Nguyễn Thị Hồng Nhung', 'hongnhungcit@gmail.com', 'Sản phẩm đúng như hình , giá rẻ , vote 5 sao :D :D', '2018-06-10 11:16:37', '2018-06-10 11:16:37'),
(4, 'Hà Vũ Nguyên', 'havunguyen@gmail.com', 'Giao hàng nhanh chóng !', '2018-06-13 02:04:45', '2018-06-13 02:04:45'),
(5, 'Lê Nho Vĩnh', 'vinhnho@gmail.com', 'Sản phẩm chất lượng tốt', '2018-06-13 02:29:12', '2018-06-13 02:29:12'),
(6, 'ándnadnan', 'asdansdasnd@gmail.com', 'shsfjdsfsdf', '2018-09-23 18:17:06', '2018-09-23 18:17:06');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `title`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Nhân', 'nguyenvannhan.cit@gmail.com', 'hello', 'hello', '2018-06-11 23:24:18', '2018-06-11 23:24:18');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(10) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phonenumber` int(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `address`, `phonenumber`, `created_at`, `updated_at`) VALUES
(40, 'Nguyễn Văn Nhân', 'nguyenvannhan.cit@gmail.com', 'ĐiệnBàn -QuảngNam', 1264899290, '2018-06-14 10:50:35', '2018-06-14 10:50:35'),
(41, 'Hà Vũ Nguyên', 'havunguyen@gmail.com', 'Quế Sơn - Quảng Nam', 1265899456, '2018-06-14 10:51:30', '2018-06-14 10:51:30'),
(42, 'Lê Nho Vĩnh', 'vunhnho@gmail.com', 'Quế Sơn - Quảng Nam', 1654961845, '2018-06-14 12:28:04', '2018-06-14 12:28:04'),
(43, 'Nguyễn Văn Nam', 'nam@gmail.com', 'Quảng Nam', 1264866577, '2018-06-14 18:27:43', '2018-06-14 18:27:43'),
(44, 'doan van tinh', 'tinh5969@gmail.com', 'đà nẵng', 965893632, '2020-12-12 19:15:26', '2020-12-12 19:15:26'),
(45, 'doan van tinh', 'tinh5969@gmail.com', 'đà nẵng', 965893632, '2020-12-12 19:15:49', '2020-12-12 19:15:49');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(10) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `name`, `image`, `content`, `created_at`, `updated_at`) VALUES
(1, 'TUẦN VÀNG KHUYẾN MÃI TẠI TRANG SỨC PHONG THỦY PHƯỚC LỘC', 'tuan-vang-khuyen-mai.jpg', '\r\n\r\n<div class=\"Page_NEWCT_NEWCM_content\" style=\"font-size: 14px; line-height: 20px; color: rgb(70, 70, 70); font-family: Roboto, sans-serif;\">\r\n<p style=\"text-align:justify\"><em>Tuần v&agrave;ng khuyến m&atilde;i l&agrave; sự kiện được mong chờ nhất trong năm của những người y&ecirc;u th&iacute;ch trang sức phong thủy tr&ecirc;n cả nước.</em></p>\r\n\r\n<p style=\"text-align:justify\">Nhằm đem đến cơ hội mua sắm trang sức phong thủy lớn nhất trong năm, Trang sức phong thủy Mixi đem đến cho qu&yacute; kh&aacute;ch h&agrave;ng chương tr&igrave;nh ưu đ&atilde;i khủng: &ldquo;TUẦN V&Agrave;NG KHUYẾN M&Atilde;I&rdquo;</p>\r\n\r\n<p style=\"text-align:justify\"><img src=\"http://localhost/DaPhongThuy/resources/upload/news/tuan-vang-khuyen-mai.jpg\" alt=\"\" >\r\n</p>\r\n\r\n<ul>\r\n	<li style=\"text-align:justify\">Từ ng&agrave;y 03/04 đến ng&agrave;y 09/04, khi kh&aacute;ch h&agrave;ng mua sắm với gi&aacute; trị đơn h&agrave;ng (GTĐH) từ 790.000đ đến 1.500.000đ sẽ được GIẢM GI&Aacute; NGAY&nbsp;10% GTĐH.</li>\r\n	<li style=\"text-align:justify\">Đặc biệt hơn, kh&aacute;ch h&agrave;ng mua sắm với GTĐH từ 1.500.000đ trở l&ecirc;n&nbsp;sẽ được ƯU Đ&Atilde;I TỚI 15% TỔNG GTĐH.</li>\r\n</ul>\r\n\r\n<p style=\"text-align:justify\">MUA C&Agrave;NG NHIỀU, ƯU Đ&Atilde;I C&Agrave;NG LỚN.</p>\r\n\r\n<p style=\"text-align:justify\"><em>Lưu &yacute;: chương tr&igrave;nh kh&ocirc;ng&nbsp;&aacute;p dụng với c&aacute;c sản phẩm v&agrave;ng, li&ecirc;n quan đến v&agrave;ng; c&aacute;c sản phẩm gia c&ocirc;ng bọc v&agrave;ng, bọc bạc.</em></p>\r\n\r\n<p style=\"text-align:justify\">Xem c&aacute;c sản phẩm v&ograve;ng tay phong thủy tại:&nbsp;<a href=\"\" style=\"text-decoration-line: none; background-color: rgb(229, 229, 229); border-radius: 2px; padding: 2px 7px; color: rgb(51, 51, 51); margin: 0px; line-height: 30px;\">V&ograve;ng tay phong thủy Phước Lộc</a></p>\r\n\r\n<p style=\"text-align:justify\">Xem c&aacute;c sản phẩm mặt d&acirc;y phong thủy tại:&nbsp;<a href=\"\" style=\"text-decoration-line: none; background-color: rgb(229, 229, 229); border-radius: 2px; padding: 2px 7px; color: rgb(51, 51, 51); margin: 0px; line-height: 30px;\">Mặt d&acirc;y phong thủy Phước Lộc</a></p>\r\n\r\n<p style=\"text-align:justify\">Xem c&aacute;c vật phẩm phong thủy tại:&nbsp;<a href=\"\" style=\"text-decoration-line: none; background-color: rgb(229, 229, 229); border-radius: 2px; padding: 2px 7px; color: rgb(51, 51, 51); margin: 0px; line-height: 30px;\">Vật phẩm phong thủy Phước Lộc</a></p>\r\n\r\n<p style=\"text-align:justify\">H&atilde;y nhanh tay đặt h&agrave;ng tại Trang sức phong thủy Phước Lộc để rước t&agrave;i lộc, đem may mắn về gia đ&igrave;nh bạn.</p>\r\n</div>', '2020-12-19 12:01:05', '0000-00-00 00:00:00'),
(2, 'Bộ sản phẩm vòng tay Tặng mùa hè 2018', '2.jpg', '<div class=\"Page_NEWCT_Sapo\" style=\"font-size: 14px; line-height: 20px; font-weight: bold; color: rgb(70, 70, 70); font-family: Roboto, sans-serif;\">Bộ sản phẩm v&ograve;ng tay Tặng năm mới 2018</div>\r\n\r\n<div class=\"Page_NEWCT_NEWCM_content\" style=\"font-size: 14px; line-height: 20px; color: rgb(70, 70, 70); font-family: Roboto, sans-serif;\">\r\n<p style=\"text-align:justify\">&nbsp;Để thay cho lời ch&uacute;c mừng năm mới&nbsp;v&agrave; cũng l&agrave; dịp để Trang sức phong thủy Phước Lộc b&agrave;y tỏ sự cảm ơn đến kh&aacute;ch h&agrave;ng đ&atilde; tin tưởng sản phẩm của ch&uacute;ng t&ocirc;i. Trang sức phong thủy <span style=\"color:rgb(70, 70, 70); font-family:roboto,sans-serif; font-size:14px\">Phước Lộc&nbsp;</span>xin gửi đến qu&yacute; kh&aacute;ch h&agrave;ng&nbsp;<strong>Chương tr&igrave;nh si&ecirc;u khuyến m&atilde;i m&ugrave;a h&egrave;&nbsp;2018&nbsp;</strong>v&ocirc; c&ugrave;ng hấp dẫn&nbsp;<strong>&ldquo; Mua 1 tặng 3&rdquo;.</strong></p>\r\n\r\n<p style=\"text-align:justify\"><strong>CHƯƠNG TR&Igrave;NH KHUYẾN M&Atilde;I Tựu Trường MUA 1 TẶNG 3</strong></p>\r\n\r\n<p style=\"text-align:justify\">- Qu&yacute; kh&aacute;ch h&agrave;ng sẽ được<strong>&nbsp;tặng 1 V&ograve;ng tay may</strong>&nbsp;mắn mix hạt d&acirc;u tằm.</p>\r\n\r\n<p style=\"text-align:justify\">-&nbsp;<strong>Tặng 1 M&oacute;c treo Ch&igrave;a</strong>&nbsp;Kh&oacute;a tiện lợi xinh xắn từ <span style=\"color:rgb(70, 70, 70); font-family:roboto,sans-serif; font-size:14px\">Phước Lộc</span>.</p>\r\n\r\n<p style=\"text-align:justify\">-<strong>&nbsp;ĐẶC BIỆT</strong>&nbsp;kh&aacute;ch h&agrave;ng được<strong>&nbsp;tặng 01 sản phẩm v&ograve;ng tay đ&aacute;</strong>&nbsp;phong thủy <span style=\"color:rgb(70, 70, 70); font-family:roboto,sans-serif; font-size:14px\">Phước Lộc&nbsp;</span>nằm trong&nbsp; BSP Tặng của <span style=\"color:rgb(70, 70, 70); font-family:roboto,sans-serif; font-size:14px\">Phước Lộc&nbsp;</span>m&ugrave;a h&egrave; &nbsp;2018&nbsp;( trị gi&aacute; 340.000 đồng).&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">-&nbsp;<strong>Điều kiện &aacute;p dụng</strong>&nbsp;khuyến m&atilde;i:<span style=\"font-family:roboto,sans-serif\">Tổng gi&aacute; trị h&oacute;a đơn tr&ecirc;n 1,500.000 đồng ( Trừ sản phẩm v&agrave;ng).</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-family:roboto,sans-serif\">- Địa điểm &Aacute;p Dụng: &Aacute;p dụng đặt h&agrave;ng Online v&agrave; mua h&agrave;ng tại hệ thống cửa h&agrave;ng </span><span style=\"color:rgb(70, 70, 70); font-family:roboto,sans-serif; font-size:14px\">Phước Lộc&nbsp;</span><span style=\"font-family:roboto,sans-serif\">.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-family:roboto,sans-serif\">- Thời gian &aacute;p dụng KM: Từ ng&agrave;y 10/6/2017 đến hết ng&agrave;y 1/8/2018.</span></p>\r\n\r\n<p style=\"text-align:justify\"><strong>BSP v&ograve;ng tay đ&aacute; phong thủy tặng năm mới 2018&nbsp;bao gồm c&aacute;c sản phẩm:</strong></p>\r\n\r\n<p style=\"text-align:justify\"><strong></strong></p>\r\n\r\n<p style=\"text-align:justify\"><strong></strong></p>\r\n\r\n<p style=\"text-align:justify\"><strong><img alt=\"\" src=\"http://localhost/project_laravel/resources/upload/images/29340135_2039456136316745_4376457181354792303_n.jpg\" style=\"height:350px; width:500pxpx\" /></strong></p>\r\n\r\n<p style=\"text-align:justify\"><strong>Cam kết khi mua h&agrave;ng tại Phước Lộc:</strong></p>\r\n\r\n<p style=\"text-align:justify\">- Phước Lộc cam kết chỉ cung cấp đ&aacute; tự nhi&ecirc;n, năng dương t&iacute;ch cực.</p>\r\n\r\n<p style=\"text-align:justify\">- To&agrave;n bộ sản phẩm đưa tới qu&yacute; kh&aacute;ch h&agrave;ng phải đạt c&aacute;c chỉ ti&ecirc;u của quy tr&igrave;nh kiểm định.</p>\r\n\r\n<p style=\"text-align:justify\">- Trang sức phong thủy b&aacute;n ra đều được TR&Igrave; CH&Uacute; ( được niệm cầu t&agrave;i, lộc, an, ph&aacute;t huy năng lượng tiềm t&agrave;ng của đ&aacute;) trước khi trao đến tay qu&yacute; kh&aacute;ch h&agrave;ng để đem lại &yacute; nghĩa phong thuỷ tốt nhất.</p>\r\n\r\n<p style=\"text-align:justify\">- Kh&aacute;ch h&agrave;ng được tư vấn ho&agrave;n to&agrave;n miễn ph&iacute;.</p>\r\n</div>', '2020-12-19 12:35:45', '2018-06-08 06:36:44'),
(3, 'GỢI Ý NHỮNG MÓN QUÀ CHO BÉ MÙA TỰU TRƯỜNG', '3.jpg', '<p style=\"text-align:justify\">Chọn những m&oacute;n qu&agrave; đảm bảo an to&agrave;n v&agrave; chất lượng: khi chọn qu&agrave; cho b&eacute;, điều rất quan trọng c&aacute;c bạn cần quan t&acirc;m ch&iacute;nh l&agrave; chất lượng sản phẩm. H&atilde;y chọn một m&oacute;n qu&agrave; đẹp, &yacute; nghĩa v&agrave; hơn hết phải đảm bảo an to&agrave;n.&nbsp;Chọn qu&agrave; Ph&ugrave; hợp với độ tuổi v&agrave; giới t&iacute;nh: để tạo điều kiện b&eacute; ph&aacute;t triển tốt nhất. H&atilde;y tặng c&aacute;c b&eacute; nh&agrave; bạn một m&oacute;n đồ chơi ph&ugrave; hợp với lứa tuổi, đẹp mắt v&agrave; đặc biệt l&agrave; tốt cho sức khỏe của c&aacute;c b&eacute;,&nbsp;c&oacute; như vậy b&eacute; mới th&iacute;ch th&uacute; v&agrave; c&oacute; nhiều kỉ niệm đẹp về tuổi thơ.</p>\r\n\r\n<p style=\"text-align:justify\"><a href=\"\" style=\"text-decoration-line: none; background-color: rgb(229, 229, 229); border-radius: 2px; padding: 2px 7px; color: rgb(51, 51, 51); margin: 0px; line-height: 30px;\">Đ&aacute; qu&yacute; phong thủy Phước Lộc</a>&nbsp;lu&ocirc;n d&agrave;nh sự quan t&acirc;m đặc biệt với c&aacute;c b&eacute; y&ecirc;u n&ecirc;n ch&uacute;ng t&ocirc;i đ&atilde; tạo n&ecirc;n những sản phẩm an to&agrave;n, chất lượng v&agrave; đặc biệt d&agrave;nh ri&ecirc;ng cho c&aacute;c b&eacute; y&ecirc;u trong dịp Hè n&agrave;y.</p>\r\n\r\n<p style=\"text-align:justify\">Để thay những lời n&oacute;i y&ecirc;u thương của cha mẹ v&agrave; những lời ch&uacute;c tốt l&agrave;nh m&agrave; cha mẹ d&agrave;nh cho b&eacute;. &nbsp;Phước Lộc ch&uacute;ng t&ocirc;i biến n&oacute; th&agrave;nh h&agrave;nh động với&nbsp;<strong>chương tr&igrave;nh khuyến mại lớn&nbsp;</strong>chưa từng thấy trong dịp gi&aacute;ng sinh với&nbsp;<a href=\"\" style=\"text-decoration-line: none; background-color: rgb(229, 229, 229); border-radius: 2px; padding: 2px 7px; color: rgb(51, 51, 51); margin: 0px; line-height: 30px;\">bộ sưu tập v&ograve;ng tay cho b&eacute;</a>&nbsp;y&ecirc;u. V&agrave; chương tr&igrave;nh khuyến m&atilde;i d&agrave;nh ri&ecirc;ng cho c&aacute;c sản phẩm tặng b&eacute; y&ecirc;u:</p>\r\n\r\n<p style=\"text-align:justify\">- Mixi&nbsp;sẽ tặng bạn chương tr&igrave;nh khuyễn m&atilde;i&nbsp;<strong>mua 1 tặng 2</strong>&nbsp;cho h&oacute;a đơn trị gi&aacute; từ 390.000 đồng.</p>\r\n\r\n<p style=\"text-align:justify\">-&nbsp;<strong>Tặng v&ograve;ng tay Chỉ đỏ</strong>&nbsp;mix hạt d&acirc;u tằm v&agrave;&nbsp;<strong>M&oacute;c treo Ch&igrave;a Kh&oacute;a&nbsp;</strong>cho kh&aacute;ch h&agrave;ng.</p>\r\n\r\n<p style=\"text-align:justify\">- Chương&nbsp;tr&igrave;nh khuyến m&atilde;i &aacute;p dụng&nbsp;<strong>từ ng&agrave;y 1/6/ 2018 đến 15/8/ 2018.</strong></p>\r\n\r\n<div style=\"color: rgb(70, 70, 70); font-family: Roboto, sans-serif; font-size: 14px;\"><strong><a href=\"\" style=\"text-decoration-line: none; background-color: rgb(229, 229, 229); border-radius: 2px; padding: 2px 7px; color: rgb(51, 51, 51); margin: 0px; font-weight: normal; line-height: 30px; text-align: justify;\">Bộ sưu tập v&ograve;ng tay cho b&eacute;</a></strong>&nbsp;dịp Hè 2018</div>\r\n\r\n<div style=\"color: rgb(70, 70, 70); font-family: Roboto, sans-serif; font-size: 14px;\"></div>', '2020-12-19 12:34:56', '2018-06-08 06:43:26');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) NOT NULL,
  `category_id` int(10) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `price` int(255) NOT NULL,
  `promotion_price` int(255) NOT NULL,
  `material` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `meaning` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `size` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `image_list` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `price`, `promotion_price`, `material`, `meaning`, `size`, `status`, `image_list`, `created_at`, `updated_at`) VALUES
(1, 7, 'Vòng tay Mệnh Kim Trắng', 350000, 320000, 'Đá Mắt Mèo', 'Tình Duyên', '10li', 'Còn hàng', 'menhkim1.jpg', '2018-05-29 08:41:38', '2018-05-29 08:41:38'),
(2, 7, 'Vòng tay Mệnh Kim 2', 350000, 0, 'Đá Mắt Mèo', 'Sức Khỏe', '8li', 'Còn hàng', 'menhkim2.jpg', '2018-06-01 17:38:25', '2018-05-29 08:53:19'),
(3, 7, 'Vòng tay Mệnh Kim 3', 350000, 330000, 'Đá Mắt Mèo', 'Công Việc', '8li', 'Hết hàng', 'menhkim3.jpg', '2018-06-01 17:39:42', '2018-05-29 08:55:34'),
(4, 7, 'Vòng tay Mệnh Kim 4', 350000, 320000, 'Đá Hổ Phách', 'Sức Khỏe', '12li', 'Còn hàng', 'menhkim4.jpg', '2018-06-01 17:39:42', '2018-05-29 09:05:50'),
(5, 7, 'Vòng tay Mệnh Kim Nâu Đất', 350000, 0, 'Đá Hổ Phách', 'Bình An', '14li', 'Còn hàng', 'menhkim5.jpg', '2018-05-29 09:13:43', '2018-05-29 09:13:43'),
(6, 7, 'Vòng tay Mệnh Kim Nâu Đất', 380000, 350000, 'Đá Hổ Phách', 'Tài Lộc', '10li', 'Còn hàng', 'menhkim6.jpg', '2018-05-30 08:36:24', '2018-05-29 09:15:35'),
(7, 7, 'Vòng tay Mệnh Kim 5', 400000, 360000, 'Đá Mắt Mèo', 'Tài Lộc', '10li', 'Còn hàng', 'menhkim5.jpg', '2018-06-11 14:07:28', '2018-06-11 02:38:30'),
(8, 7, 'Vòng tay Mệnh Kim 6', 360000, 0, 'Đá Mắt Mèo', 'Tình Duyên', '10li', 'Còn hàng', 'menhkim8.jpg', '2018-06-01 17:39:42', '2018-05-29 09:25:34'),
(9, 8, 'Vòng tay Mệnh Mộc 1', 350000, 330000, 'Đá Mắt Mèo', 'Tình Duyên', '8li', 'Còn hàng', 'menhmoc1.jpg', '2018-06-01 17:39:42', '2018-05-29 09:27:20'),
(10, 8, 'Vòng tay Mệnh Mộc Đen', 450000, 0, 'Đá Thạch Anh', 'Tài Lộc', '12li', 'Còn hàng', 'menhmoc2.jpg', '2018-05-29 09:29:04', '2018-05-29 09:29:04'),
(11, 8, 'Vòng tay Mệnh Mộc Tình Duyên', 300000, 0, 'Đá Thạch Anh', 'Tình Duyên', '14li', 'Hết hàng', 'menhmoc3.jpg', '2018-05-30 08:39:43', '2018-05-29 09:31:05'),
(12, 8, 'Vòng tay Mệnh Mộc xanh lá', 350000, 0, 'Đá Mã Não', 'Sức Khỏe', '10li', 'Còn hàng', 'menhmoc4.jpg', '2018-05-29 09:32:32', '2018-05-29 09:32:32'),
(13, 8, 'Vòng tay Mệnh Mộc xanh nước', 350000, 330000, 'Đá Mắt Mèo', 'Tình Duyên', '8li', 'Còn hàng', 'menhmoc5.jpg', '2018-05-29 09:33:27', '2018-05-29 09:33:27'),
(14, 8, 'Vòng tay Mệnh Mộc tài lộc', 390000, 350000, 'Đá Mã Não', 'Tài Lộc', '12li', 'Còn hàng', 'menhmoc6.jpg', '2018-05-29 09:37:30', '2018-05-29 09:37:30'),
(15, 8, 'Vòng tay Mệnh Mộc bình an', 380000, 0, 'Đá Mã Não', 'Bình An', '14li', 'Còn hàng', 'menhmoc7.jpg', '2018-05-29 09:38:46', '2018-05-29 09:38:46'),
(16, 8, 'Vòng tay Mệnh Mộc Học Tập', 380000, 320000, 'Đá Aquamarine', 'Học Vấn', '12li', 'Còn hàng', 'menhmoc8.jpg', '2018-05-29 09:49:02', '2018-05-29 09:49:02'),
(17, 8, 'Vòng tay Mệnh Mộc xanh đen', 380000, 0, 'Đá Thạch Anh', 'Bình An', '10li', 'Còn hàng', 'menhmoc9.jpg', '2018-05-29 09:55:41', '2018-05-29 09:55:41'),
(18, 8, 'Vòng tay Mệnh Mộc xanh nước', 300000, 0, 'Đá Thạch Anh', 'Tình Duyên', '12li', 'Còn hàng', 'menhmoc10.jpg', '2018-05-30 08:36:58', '2018-05-29 09:58:52'),
(19, 10, 'Vòng Tay Mệnh Thủy trắng xanh', 380000, 0, 'Đá Mắt Mèo', 'Công Việc', '8li', 'Còn hàng', 'menhthuy1.jpg', '2018-05-29 10:03:10', '2018-05-29 10:03:10'),
(20, 10, 'Vòng Tay Mệnh Thủy trắng vàng', 350000, 330000, 'Đá Mắt Mèo', 'Học Vấn', '10li', 'Còn hàng', 'menhthuy2.jpg', '2018-05-29 10:04:23', '2018-05-29 10:04:23'),
(21, 10, 'Vòng Tay Mệnh Thủy xanh', 360000, 320000, 'Đá Mắt Mèo', 'Tài Lộc', '12li', 'Hết hàng', 'menhthuy3.jpg', '2018-05-30 08:39:55', '2018-05-29 10:10:05'),
(22, 10, 'Vòng Tay Mệnh Thủy xanh đen', 390000, 0, 'Đá Mắt Mèo', 'Tình Duyên', '14li', 'Còn hàng', 'menhthuy4.jpg', '2018-05-29 10:11:08', '2018-05-29 10:11:08'),
(23, 10, 'Vòng Tay Mệnh Thủy trắng đen', 400000, 0, 'Đá Thạch Anh', 'Tình Duyên', '10li', 'Còn hàng', 'menhthuy5.jpg', '2018-05-29 10:12:14', '2018-05-29 10:12:14'),
(24, 10, 'Vòng Tay Mệnh Thủy đen', 350000, 0, 'Đá Thạch Anh', 'Tình Duyên', '8li', 'Hết hàng', 'menhthuy6.jpg', '2018-05-30 08:40:02', '2018-05-29 10:34:58'),
(25, 10, 'Vòng Tay Mệnh Thủy trắng', 400000, 330000, 'Đá Thạch Anh', 'Tình Duyên', '10li', 'Còn hàng', 'menhthuy7.jpg', '2018-05-29 10:35:59', '2018-05-29 10:35:59'),
(26, 13, 'Vòng Tay Mệnh Hỏa xanh đỏ', 350000, 0, 'Đá Thạch Anh', 'Tình Duyên', '8li', 'Còn hàng', 'menhoa1.jpg', '2018-05-29 11:14:17', '2018-05-29 11:14:17'),
(27, 13, 'Vòng Tay Mệnh Hỏa đỏ', 400000, 330000, 'Đá Mã Não', 'Tình Duyên', '10li', 'Còn hàng', 'menhhoa2.jpg', '2018-05-29 11:15:09', '2018-05-29 11:15:09'),
(28, 13, 'Vòng Tay Mệnh Hỏa đỏ', 390000, 0, 'Đá Mã Não', 'Tài Lộc', '8li', 'Còn hàng', 'menhhoa3.jpg', '2018-05-29 11:58:30', '2018-05-29 11:58:30'),
(29, 13, 'Vòng Tay Mệnh Hỏa xanh lá', 380000, 330000, 'Đá Thạch Anh', 'Công Việc', '10li', 'Còn hàng', 'menhhoa4.jpg', '2018-05-29 11:59:28', '2018-05-29 11:59:28'),
(30, 13, 'Vòng Tay Mệnh Hỏa hồng', 350000, 0, 'Đá Thạch Anh', 'Tài Lộc', '12li', 'Còn hàng', 'menhhoa5.jpg', '2018-05-29 12:00:10', '2018-05-29 12:00:10'),
(31, 13, 'Vòng Tay Mệnh Hỏa xanh đỏ', 400000, 0, 'Đá Thạch Anh', 'Bình An', '14li', 'Còn hàng', 'menhhoa6.jpg', '2018-05-29 12:01:03', '2018-05-29 12:01:03'),
(32, 14, 'Vòng Tay Mệnh Thổ hồng nâu', 350000, 320000, 'Đá Mắt Mèo', 'Tình Duyên', '8li', 'Còn hàng', 'menhtho1.jpg', '2018-05-29 12:01:59', '2018-05-29 12:01:59'),
(35, 14, 'Vòng Tay Mệnh Thổ hồng tím', 400000, 0, 'Đá Aquamarine', 'Bình An', '14li', 'Còn hàng', 'menhtho4.jpg', '2018-05-29 12:04:57', '2018-05-29 12:04:57'),
(36, 14, 'Vòng Tay Mệnh Thổ nâu tím', 380000, 0, 'Đá Mắt Mèo', 'Tình Duyên', '10li', 'Còn hàng', 'menhtho6.jpg', '2018-05-29 12:05:57', '2018-05-29 12:05:57'),
(37, 14, 'Vòng Tay Mệnh Thổ đỏ', 390000, 0, 'Đá Thạch Anh', 'Tình Duyên', '12li', 'Còn hàng', 'menhtho5.jpg', '2018-05-29 12:06:38', '2018-05-29 12:06:38'),
(38, 14, 'Vòng Tay Mệnh Thổ tím', 380000, 0, 'Đá Mã Não', 'Tài Lộc', '10li', 'Còn hàng', 'menhtho7.jpg', '2018-05-29 12:07:58', '2018-05-29 12:07:58'),
(39, 14, 'Vòng Tay Mệnh Thổ nâu đỏ', 400000, 0, 'Đá Thạch Anh', 'Học Vấn', '8li', 'Còn hàng', 'menhtho2.jpg', '2018-05-29 12:10:01', '2018-05-29 12:10:01'),
(40, 14, 'Vòng Tay Mệnh Thổ nâu tím', 350000, 0, 'Đá Mắt Mèo', 'Bình An', '12li', 'Còn hàng', 'menhtho3.jpg', '2018-05-29 12:10:40', '2018-05-29 12:10:40'),
(41, 15, 'Mặt Dây Hồ Ly 1', 290000, 0, 'Đá Thạch Anh', 'Tình Duyên', '8li', 'Còn hàng', 'dayholy1.jpg', '2018-05-29 12:19:32', '2018-05-29 12:19:32'),
(42, 15, 'Mặt Dây Hồ Ly 2', 290000, 270000, 'Đá Mắt Mèo', 'Tình Duyên', '8li', 'Còn hàng', 'dayholy2.jpg', '2018-05-29 12:22:09', '2018-05-29 12:22:09'),
(43, 15, 'Mặt Dây Hồ Ly 3', 290000, 200000, 'Đá Thạch Anh', 'Tình Duyên', '10li', 'Còn hàng', 'holy3.jpg', '2018-05-31 07:42:26', '2018-05-31 07:42:26'),
(44, 15, 'Mặt Dây Hồ Ly 4', 290000, 0, 'Đá Thạch Anh', 'Tình Duyên', '10li', 'Còn hàng', 'holy4.jpg', '2018-05-31 07:44:22', '2018-05-31 07:44:22'),
(45, 17, 'Mặt Dây Phật Bản Mệnh', 350000, 0, 'Đá Thạch Anh', 'Bình An', '14li', 'Còn hàng', 'phatbanmenh1.jpg', '2018-05-31 07:45:53', '2018-05-31 07:45:53'),
(46, 17, 'Mặt Dây Phật Bản Mệnh 2', 370000, 0, 'Đá Hổ Phách', 'Bình An', '12li', 'Còn hàng', 'phatbanmenh2.jpg', '2018-05-31 07:50:35', '2018-05-31 07:50:35'),
(47, 17, 'Mặt Dây Phật Bản Mệnh 3', 380000, 0, 'Đá Aquamarine', 'Bình An', '14li', 'Còn hàng', 'phatbanmenh3.jpg', '2018-05-31 07:53:29', '2018-05-31 07:53:29'),
(48, 18, 'Mặt Dây Ve Sầu', 250000, 0, 'Đá Thạch Anh', 'Học Vấn', '14li', 'Còn hàng', 'vesau1.jpg', '2018-05-31 07:56:32', '2018-05-31 07:56:32'),
(49, 18, 'Mặt Dây Ve Sầu 2', 250000, 0, 'Đá Thạch Anh', 'Học Vấn', '14li', 'Còn hàng', 'vesau2.jpg', '2018-05-31 07:57:22', '2018-05-31 07:57:22'),
(50, 18, 'Mặt Dây Ve Sầu 3', 300000, 0, 'Đá Thạch Anh', 'Học Vấn', '14li', 'Còn hàng', 'vesau3.jpg', '2018-05-31 08:00:20', '2018-05-31 08:00:20'),
(51, 19, 'Mặt Dây Hoa Mẫu Đơn', 250000, 210000, 'Đá Aquamarine', 'Sức Khỏe', '14li', 'Còn hàng', 'hoamaudon1.jpg', '2018-05-31 08:29:05', '2018-05-31 08:29:05'),
(52, 19, 'Mặt Dây Hoa Mẫu Đơn 2', 290000, 0, 'Đá Thạch Anh', 'Sức Khỏe', '14li', 'Còn hàng', 'hoamaudon2.jpg', '2018-05-31 08:33:00', '2018-05-31 08:33:00'),
(53, 19, 'Mặt Dây Hoa Mẫu Đơn 3', 250000, 0, 'Đá Thạch Anh', 'Sức Khỏe', '8li', 'Hết hàng', 'hoammaudon3.jpg', '2018-05-31 08:34:12', '2018-05-31 08:34:12'),
(54, 21, 'Mặt Dây Tùy Hưu', 350000, 310000, 'Đá Mắt Mèo', 'Tài Lộc', '14li', 'Còn hàng', 'daytuyhuu2.jpg', '2018-05-31 08:36:46', '2018-05-31 08:36:46'),
(55, 21, 'Mặt Dây Tùy Hưu 2', 350000, 0, 'Đá Thạch Anh', 'Tài Lộc', '14li', 'Còn hàng', 'daytuyhuu1.jpg', '2018-05-31 08:37:37', '2018-05-31 08:37:37'),
(56, 21, 'Mặt Dây Tùy Hưu 3', 350000, 0, 'Đá Thạch Anh', 'Tài Lộc', '14li', 'Còn hàng', 'daytuyhuu3.jpg', '2018-05-31 08:40:02', '2018-05-31 08:40:02'),
(57, 21, 'Mặt Dây Tùy Hưu 4', 370000, 330000, 'Đá Hổ Phách', 'Tài Lộc', '14li', 'Còn hàng', 'daytuyhuu4.jpg', '2018-05-31 08:42:17', '2018-05-31 08:42:17'),
(58, 21, 'Mặt Dây Tùy Hưu 5', 360000, 0, 'Đá Thạch Anh', 'Tài Lộc', '14li', 'Còn hàng', 'daytuyhu5.jpg', '2018-05-31 08:45:03', '2018-05-31 08:45:03'),
(59, 21, 'Mặt Dây Tùy Hưu 6', 380000, 350000, 'Đá Hổ Phách', 'Tài Lộc', '14li', 'Còn hàng', 'daytuyhuu6.jpg', '2018-05-31 08:46:31', '2018-05-31 08:46:31'),
(60, 22, 'Mặt Dây Phật Di Lặc', 400000, 350000, 'Đá Thạch Anh', 'Sức Khỏe', '14li', 'Hết hàng', 'dilac1.jpg', '2018-05-31 08:48:53', '2018-05-31 08:48:53'),
(61, 22, 'Mặt Dây Phật Di Lặc 2', 390000, 0, 'Đá Hổ Phách', 'Sức Khỏe', '14li', 'Còn hàng', 'dilac2.jpg', '2018-05-31 08:49:36', '2018-05-31 08:49:36'),
(62, 22, 'Mặt Dây Phật Di Lặc 3', 380000, 0, 'Đá Thạch Anh', 'Sức Khỏe', '14li', 'Còn hàng', 'dilac3.jpg', '2018-05-31 08:50:40', '2018-05-31 08:50:40'),
(63, 22, 'Mặt Dây Phật Di Lặc 4', 390000, 0, 'Đá Hổ Phách', 'Sức Khỏe', '14li', 'Còn hàng', 'dilac4.jpg', '2018-05-31 08:51:31', '2018-05-31 08:51:31'),
(64, 24, 'Mặt Dây Phật Tổ', 350000, 320000, 'Đá Thạch Anh', 'Bình An', '14li', 'Còn hàng', 'phatto1.jpg', '2018-05-31 09:04:36', '2018-05-31 09:04:36'),
(65, 24, 'Mặt Dây Phật Tổ 2', 350000, 0, 'Đá Hổ Phách', 'Bình An', '14li', 'Còn hàng', 'phatto2.jpg', '2018-05-31 09:12:25', '2018-05-31 09:12:25'),
(66, 24, 'Mặt Dây Phật Tổ 3', 380000, 0, 'Đá Hổ Phách', 'Bình An', '14li', 'Hết hàng', 'phatto3.jpg', '2018-05-31 09:22:58', '2018-05-31 09:22:58'),
(67, 28, 'Mặt Dây Hồ Lô', 290000, 0, 'Đá Thạch Anh', 'Tài Lộc', '14li', 'Còn hàng', 'holo1.jpg', '2018-05-31 09:23:46', '2018-05-31 09:23:46'),
(68, 28, 'Mặt Dây Hồ Lô 2', 290000, 270000, 'Đá Hổ Phách', 'Bình An', '8li', 'Còn hàng', 'holo2.jpg', '2018-05-31 09:24:28', '2018-05-31 09:24:28'),
(69, 28, 'Mặt Dây Hồ Lô 3', 290000, 0, 'Đá Hổ Phách', 'Bình An', '14li', 'Còn hàng', 'holo3.jpg', '2018-05-31 09:25:36', '2018-05-31 09:25:36'),
(70, 25, 'Quả Cầu Phong Thủy', 900000, 850000, 'Đá Thạch Anh', 'Công Việc', '14li', 'Còn hàng', 'quacau1.jpg', '2018-05-31 09:29:11', '2018-05-31 09:29:11'),
(71, 25, 'Quả Cầu Phong Thủy 2', 900000, 0, 'Đá Hổ Phách', 'Công Việc', '14li', 'Còn hàng', 'quacau2.jpg', '2018-05-31 09:29:54', '2018-05-31 09:29:54'),
(72, 25, 'Quả Cầu Phong Thủy 3', 850000, 0, 'Đá Hổ Phách', 'Công Việc', '14li', 'Còn hàng', 'quacau3.jpg', '2018-05-31 09:30:42', '2018-05-31 09:30:42'),
(73, 26, 'Tùy Hưu', 350000, 0, 'Đá Thạch Anh', 'Tài Lộc', '10li', 'Còn hàng', 'tuyhuu1.jpg', '2018-05-31 09:31:34', '2018-05-31 09:31:34'),
(74, 26, 'Tùy Hưu 2', 380000, 0, 'Đá Thạch Anh', 'Tài Lộc', '10li', 'Còn hàng', 'tuyhuu2.jpg', '2018-05-31 09:32:46', '2018-05-31 09:32:46'),
(75, 26, 'Tùy Hưu các loại', 350000, 0, 'Đá Mã Não', 'Tài Lộc', '14li', 'Còn hàng', 'tuyhuu3.jpg', '2018-05-31 09:35:43', '2018-05-31 09:35:43'),
(76, 26, 'Tùy Hưu 3', 350000, 0, 'Đá Thạch Anh', 'Tài Lộc', '14li', 'Còn hàng', 'tuyhuu4.jpg', '2018-05-31 09:40:09', '2018-05-31 09:40:09'),
(77, 27, 'Cây Tài Lộc', 500000, 450000, 'Đá Thạch Anh', 'Công Việc', '14li', 'Còn hàng', 'caytailoc1.jpg', '2018-05-31 09:41:20', '2018-05-31 09:41:20'),
(78, 27, 'Cây Tài Lộc  2', 500000, 0, 'Đá Thạch Anh', 'Công Việc', '14li', 'Còn hàng', 'caytailoc2.jpg', '2018-05-31 09:43:19', '2018-05-31 09:43:19'),
(79, 29, 'Cóc Tài Lộc', 800000, 0, 'Đá Thạch Anh', 'Công Việc', '14li', 'Còn hàng', 'coctailoc1.jpg', '2018-05-31 10:01:30', '2018-05-31 10:01:30'),
(80, 29, 'Cóc Tài Lộc 2', 800000, 0, 'Đá Hổ Phách', 'Công Việc', '14li', 'Còn hàng', 'coctailoc2.jpg', '2018-05-31 10:02:34', '2018-05-31 10:02:34'),
(81, 29, 'Cóc Tài Lộc  3', 800000, 0, 'Đá Mã Não', 'Công Việc', '14li', 'Còn hàng', 'coctailoc3.jpg', '2018-05-31 10:03:41', '2018-05-31 10:03:41'),
(82, 30, 'Tượng Phật Di Lặc', 1500000, 1450000, 'Đá Thạch Anh', 'Bình An', '14li', 'Còn hàng', 'pahtdilac1.jpg', '2018-05-31 23:45:52', '2018-05-31 23:45:52'),
(83, 30, 'Tượng Phật Di Lặc 2', 1500000, 0, 'Đá Thạch Anh', 'Bình An', '14li', 'Còn hàng', 'phatdilac2.jpg', '2018-05-31 23:46:25', '2018-05-31 23:46:25'),
(84, 30, 'Tượng Phật Di Lặc 3', 1500000, 0, 'Đá Mã Não', 'Bình An', '14li', 'Còn hàng', 'phatdilac3.jpg', '2018-05-31 23:47:27', '2018-05-31 23:47:27'),
(85, 31, 'Tháp Văn Xương 1', 2000000, 0, 'Đá Aquamarine', 'Bình An', '8li', 'Còn hàng', 'thapvanxuong1.jpg', '2018-05-31 23:52:50', '2018-05-31 23:52:50'),
(86, 31, 'Tháp Văn Xương 2', 2000000, 1900000, 'Đá Mã Não', 'Bình An', '14li', 'Còn hàng', 'thapvanxuong2.jpg', '2018-05-31 23:53:33', '2018-05-31 23:53:33'),
(87, 31, 'Tháp Văn Xương 3', 1900000, 0, 'Đá Thạch Anh', 'Bình An', '14li', 'Còn hàng', 'thapvanxuong3.jpg', '2018-05-31 23:54:53', '2018-05-31 23:54:53'),
(88, 32, 'Vật Phẩm Phong Thủy Oto', 350000, 320000, 'Đá Thạch Anh', 'Công Việc', '14li', 'Còn hàng', 'oto1.jpg', '2018-05-31 23:55:43', '2018-05-31 23:55:43'),
(89, 32, 'Vật Phẩm Phong Thủy Oto 2', 380000, 0, 'Đá Hổ Phách', 'Công Việc', '14li', 'Còn hàng', 'oto2.jpg', '2018-05-31 23:56:23', '2018-05-31 23:56:23'),
(90, 32, 'Vật Phẩm Phong Thủy Oto 3', 380000, 0, 'Đá Hổ Phách', 'Công Việc', '14li', 'Còn hàng', 'oto3.jpg', '2018-05-31 23:56:59', '2018-05-31 23:56:59'),
(91, 32, 'Vật Phẩm Phong Thủy Oto 4', 380000, 0, 'Đá Mã Não', 'Công Việc', '14li', 'Còn hàng', 'oto4.jpg', '2018-05-31 23:57:41', '2018-05-31 23:57:41'),
(92, 33, 'Bộ Sưu Tập Khuyến Mãi 1', 380000, 330000, 'Đá Thạch Anh', 'Tài Lộc', '12li', 'Còn hàng', 'khuyenmai1.jpg', '2018-05-31 23:59:01', '2018-05-31 23:59:01'),
(93, 33, 'Bộ Sưu Tập Khuyến Mãi 2', 390000, 350000, 'Đá Hổ Phách', 'Tài Lộc', '10li', 'Còn hàng', 'khuyenmai2.jpg', '2018-06-01 00:00:01', '2018-06-01 00:00:01'),
(94, 33, 'Bộ Sưu Tập Khuyến Mãi 3', 380000, 350000, 'Đá Thạch Anh', 'Tình Duyên', '12li', 'Còn hàng', 'khuyenmai3.jpg', '2018-06-01 00:20:41', '2018-06-01 00:20:41'),
(95, 33, 'Bộ Sưu Tập Khuyến Mãi 4', 390000, 330000, 'Đá Thạch Anh', 'Sức Khỏe', '10li', 'Còn hàng', 'khuyenmai4.jpg', '2018-06-01 00:21:41', '2018-06-01 00:21:41'),
(96, 33, 'Bộ Sưu Tập Khuyến Mãi 5', 350000, 330000, 'Đá Hổ Phách', 'Tài Lộc', '8li', 'Còn hàng', 'khuyenmai5.jpg', '2018-06-01 00:23:12', '2018-06-01 00:23:12'),
(97, 34, 'Bộ Sưu Tập Nam', 380000, 0, 'Đá Thạch Anh', 'Tài Lộc', '12li', 'Còn hàng', 'bstnam1.jpg', '2018-06-01 00:23:58', '2018-06-01 00:23:58'),
(98, 34, 'Bộ Sưu Tập Nam 2', 380000, 0, 'Đá Hổ Phách', 'Bình An', '12li', 'Còn hàng', 'bstnam2.jpg', '2018-06-01 00:24:41', '2018-06-01 00:24:41'),
(99, 34, 'Bộ Sưu Tập Nam 3', 390000, 0, 'Đá Hổ Phách', 'Tài Lộc', '8li', 'Còn hàng', 'bstnam3.jpg', '2018-06-01 00:25:16', '2018-06-01 00:25:16'),
(100, 34, 'Bộ Sưu Tập Nam 4', 380000, 0, 'Đá Thạch Anh', 'Bình An', '12li', 'Còn hàng', 'bstnam4.jpg', '2018-06-01 00:26:03', '2018-06-01 00:26:03'),
(101, 35, 'Bộ Sưu Tập Nữ', 380000, 0, 'Đá Thạch Anh', 'Tình Duyên', '10li', 'Còn hàng', 'bstnu1.jpg', '2018-06-01 00:27:14', '2018-06-01 00:27:14'),
(102, 35, 'Bộ Sưu Tập Nữ 2', 380000, 0, 'Đá Thạch Anh', 'Tình Duyên', '10li', 'Còn hàng', 'bstnu2.jpg', '2018-06-01 00:28:00', '2018-06-01 00:28:00'),
(103, 35, 'Bộ Sưu Tập Nữ 3', 380000, 0, 'Đá Mắt Mèo', 'Tài Lộc', '8li', 'Còn hàng', 'bstnu3.jpg', '2018-06-01 00:28:39', '2018-06-01 00:28:39'),
(104, 36, 'Mặt Đá 1', 500000, 0, 'Đá Thạch Anh', 'Tình Duyên', '14li', 'Còn hàng', 'matda1.jpg', '2018-06-01 00:30:20', '2018-06-01 00:30:20'),
(105, 36, 'Mặt Đá 2', 500000, 450000, 'Đá Hổ Phách', 'Tình Duyên', '14li', 'Còn hàng', 'matda2.jpg', '2018-06-01 00:30:56', '2018-06-01 00:30:56'),
(106, 36, 'Mặt Đá 3', 450000, 0, 'Đá Thạch Anh', 'Sức Khỏe', '14li', 'Còn hàng', 'matda3.jpg', '2018-06-01 00:31:34', '2018-06-01 00:31:34'),
(107, 36, 'Mặt Đá 4', 500000, 0, 'Đá Mắt Mèo', 'Tài Lộc', '8li', 'Còn hàng', 'matda5.jpg', '2018-06-01 00:32:18', '2018-06-01 00:32:18'),
(108, 36, 'Mặt Đá 5', 400000, 0, 'Đá Hổ Phách', 'Tài Lộc', '14li', 'Còn hàng', 'matda6.jpg', '2018-06-01 00:33:04', '2018-06-01 00:33:04'),
(109, 37, 'Dây Đeo Bọc Bạc 1', 600000, 550000, 'Đá Thạch Anh', 'Sức Khỏe', '14li', 'Còn hàng', 'bocbac1.jpg', '2018-06-01 00:33:48', '2018-06-01 00:33:48'),
(110, 37, 'Dây Đeo Bọc Bạc 2', 600000, 0, 'Đá Mắt Mèo', 'Tài Lộc', '8li', 'Còn hàng', 'bocbac2.jpg', '2018-06-01 00:34:47', '2018-06-01 00:34:47'),
(111, 37, 'Dây Đeo Bọc Bạc 3', 570000, 550000, 'Đá Mắt Mèo', 'Tài Lộc', '8li', 'Còn hàng', 'bocbac3.jpg', '2018-06-01 00:35:28', '2018-06-01 00:35:28'),
(112, 38, 'Nhẫn Đá Phong Thủy 3', 800000, 750000, 'Đá Mắt Mèo', 'Tài Lộc', '8li', 'Còn hàng', 'nhan1.jpg', '2018-06-01 00:36:10', '2018-06-01 00:36:10'),
(113, 38, 'Nhẫn Đá Phong Thủy 1', 750000, 0, 'Đá Thạch Anh', 'Tình Duyên', '8li', 'Còn hàng', 'nhan2.jpg', '2018-06-01 00:37:37', '2018-06-01 00:37:37'),
(114, 38, 'Nhẫn Đá Phong Thủy 2', 650000, 0, 'Đá Mắt Mèo', 'Tài Lộc', '10li', 'Còn hàng', 'nhan3.jpg', '2018-06-01 00:38:16', '2018-06-01 00:38:16'),
(115, 39, 'Dây Chuyền Phong Thủy', 1100000, 0, 'Đá Mắt Mèo', 'Bình An', '14li', 'Còn hàng', 'daychuyen1.jpg', '2018-06-01 00:39:32', '2018-06-01 00:39:32'),
(116, 39, 'Dây Chuyền Phong Thủy  2', 1500000, 0, 'Đá Mắt Mèo', 'Bình An', '14li', 'Còn hàng', 'daychuyen2.jpg', '2018-06-01 00:40:38', '2018-06-01 00:40:38'),
(117, 39, 'Dây Chuyền Phong Thủy 3', 1200000, 0, 'Đá Thạch Anh', 'Tình Duyên', '10li', 'Còn hàng', 'daychuyen3.jpg', '2018-06-01 00:41:51', '2018-06-01 00:41:51'),
(118, 39, 'Dây Chuyền Phong Thủy 4', 1200000, 0, 'Đá Thạch Anh', 'Tài Lộc', '10li', 'Còn hàng', 'daychuyen4.jpg', '2018-06-01 00:43:05', '2018-06-01 00:43:05'),
(119, 40, 'Hoa Tai', 500000, 450000, 'Đá Thạch Anh', 'Tình Duyên', '8li', 'Hết hàng', 'hoatai1.jpg', '2018-06-01 00:46:11', '2018-06-01 00:46:11'),
(120, 40, 'Hoa Tai', 500000, 450000, 'Đá Thạch Anh', 'Tình Duyên', '8li', 'Còn hàng', 'hoatai1.jpg', '2018-06-01 00:46:54', '2018-06-01 00:46:54'),
(121, 40, 'Hoa Tai 2', 500000, 0, 'Đá Mắt Mèo', 'Tình Duyên', '8li', 'Còn hàng', 'hoatai2.jpg', '2018-06-01 00:47:30', '2018-06-01 00:47:30'),
(122, 40, 'Hoa Tai 3', 550000, 0, 'Đá Mắt Mèo', 'Tình Duyên', '12li', 'Còn hàng', 'hoatai3.jpg', '2018-06-01 00:48:24', '2018-06-01 00:48:24'),
(123, 41, 'Champ Bạc', 20000, 0, 'bạc', 'Không', 'nhỏ', 'Còn hàng', 'bac1.jpg', '2018-06-01 00:54:25', '2018-06-01 00:54:25'),
(124, 42, 'Champ Vàng', 25000, 0, 'bạc', 'Không', 'nhỏ', 'Còn hàng', 'vang1.jpg', '2018-06-01 00:55:02', '2018-06-01 00:55:02'),
(125, 42, 'Champ Vàng 2', 30000, 0, 'bạc', 'Không', 'nhỏ', 'Còn hàng', 'champvang2.jpg', '2018-06-01 00:55:49', '2018-06-01 00:55:49');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int(10) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(9, 'Nguyễn Văn Nhân', 'nhan123', 'nguyenvannhan.cit@gmail.com', '$2y$10$.uDc32nv.9oVJpKQphnhiepV9iVWAixJ8igoN5se3KwlxxrY7pyUO', 2, 'rO3rdLfTIex0syVBn2HZq54riyVBO09PeqQ79hGD0k9zEic0XGYXIm8TTtUr', '2018-06-14 08:57:00', '2018-06-14 08:57:00'),
(10, 'A', 'admin123', 'admin@gmail.com', '$2y$10$sn6TfMUdSsmDuRdUPUKSauNVN0UJkgKFamU7evTxFgkuBu.Qs0fZS', 2, 'l6WotMqWPRziHlflJfvlOr6g4IVV82POgeMkkWKsu92CKu2SXfyfbT7ff5zr', '2018-06-14 11:37:20', '2018-06-14 11:37:20'),
(11, 'Nguyễn Văn Nam', 'nam123', 'nam@gmail.com', '$2y$10$AO.aAkurTwoCHJoL4//Ooed4/5U4skB4akl9afggUbqiGhZWqxRca', 2, 'QaHtULwJtD4CNzsLxquN1MsEu5yAHGoFWkWq70l1DWlpjtkdbgVvqDo1dEeB', '2018-06-14 18:25:30', '2018-06-14 18:25:30'),
(12, 'nvn', 'nvn', 'nvn@gmail.com', '$2y$10$30ofcy36P4rdnDCIO.UZveIPCsK8SJql04XtJoPwa9e6ewo781Mte', 2, 'f3I4ijaChPSOGK5lTzARCMJdhWJrqVh26C7RfegLaJcn4WSs5E45X6yJxecr', '2018-09-23 18:22:29', '2018-09-23 18:22:29'),
(13, 'tinhdoan', 'poketh3', 'tinhd5969@gmail.com', '$2y$10$4V4.7daQI10.c/PesCUwSOoCiF0vOP.1rnxCWofNE2B9r2.Jndm5O', 1, 'iiWoLZwm9vd77iaT6CakuOWVIuIXsx0XF5U6ttdCIwM4xh6BGVCV3PnTqBmy', '2020-11-14 04:09:17', '2020-11-14 04:09:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `billdetails`
--
ALTER TABLE `billdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categorys`
--
ALTER TABLE `categorys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `billdetails`
--
ALTER TABLE `billdetails`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `bills`
--
ALTER TABLE `bills`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `categorys`
--
ALTER TABLE `categorys`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
