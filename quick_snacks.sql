-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 18, 2023 at 12:30 AM
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
-- Database: `quick_snacks`
--
CREATE DATABASE IF NOT EXISTS `quick_snacks` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `quick_snacks`;

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `address_id` int(11) DEFAULT NULL,
  `flag` int(11) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(1000) DEFAULT NULL,
  `role` int(11) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `first_name`, `last_name`, `email`, `phone`, `avatar`, `address_id`, `flag`, `username`, `password`, `role`, `created_date`) VALUES
(2, 'Tran Van', 'Chung', 'a@gmail.com', '0987654321', NULL, 1, NULL, NULL, 'b80048afe2f9894cc3316805fd391798a3a99127', NULL, '2023-03-18 06:26:49'),
(3, '', 'Đây là Admin', '', '', NULL, NULL, NULL, 'admin', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 1, '2023-01-16 06:27:04');

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `latitude` decimal(8,6) DEFAULT NULL,
  `longitude` decimal(9,6) DEFAULT NULL,
  `city_id` int(11) DEFAULT NULL,
  `district_id` int(11) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `flag` int(11) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `phone` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`id`, `name`, `latitude`, `longitude`, `city_id`, `district_id`, `address`, `flag`, `first_name`, `last_name`, `phone`) VALUES
(1, NULL, NULL, NULL, 1, 2, '286 Đội Cấn', NULL, 'Tran Van', 'Chung', '0987654321');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `flag` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `code` varchar(255) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `flag` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `code`, `description`, `status`, `parent_id`, `created_date`, `modified_date`, `flag`, `image`) VALUES
(1, 'Easy on Stomach', NULL, NULL, 'active', NULL, '2023-03-01 00:00:00', NULL, NULL, 'easy_on_stomach.jpg'),
(2, 'Smoothies', NULL, NULL, 'active', NULL, '2023-03-01 00:00:00', NULL, NULL, 'smoothies.jpg'),
(3, 'Snacks for Kids', NULL, NULL, 'active', NULL, '2023-03-01 00:00:00', NULL, NULL, 'snacks_for_kids.jpg'),
(4, 'Healthy Snacks', NULL, NULL, 'active', NULL, '2023-03-01 00:00:00', NULL, NULL, 'healthy_snacks.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `name`) VALUES
(1, 'Hà Nội'),
(2, 'Hà Giang'),
(4, 'Cao Bằng'),
(6, 'Bắc Kạn'),
(8, 'Tuyên Quang'),
(10, 'Lào Cai'),
(11, 'Điện Biên'),
(12, 'Lai Châu'),
(14, 'Sơn La'),
(15, 'Yên Bái'),
(17, 'Hòa Bình'),
(19, 'Thái Nguyên'),
(20, 'Lạng Sơn'),
(22, 'Quảng Ninh'),
(24, 'Bắc Giang'),
(25, 'Phú Thọ'),
(26, 'Vĩnh Phúc'),
(27, 'Bắc Ninh'),
(30, 'Hải Dương'),
(31, 'Hải Phòng'),
(33, 'Hưng Yên'),
(34, 'Thái Bình'),
(35, 'Hà Nam'),
(36, 'Nam Định'),
(37, 'Ninh Bình'),
(38, 'Thanh Hóa'),
(40, 'Nghệ An'),
(42, 'Hà Tĩnh'),
(44, 'Quảng Bình'),
(45, 'Quảng Trị'),
(46, 'Thừa Thiên Huế'),
(48, 'Đà Nẵng'),
(49, 'Quảng Nam'),
(51, 'Quảng Ngãi'),
(52, 'Bình Định'),
(54, 'Phú Yên'),
(56, 'Khánh Hòa'),
(58, 'Ninh Thuận'),
(60, 'Bình Thuận'),
(62, 'Kon Tum'),
(64, 'Gia Lai'),
(66, 'Đắk Lắk'),
(67, 'Đắk Nông'),
(68, 'Lâm Đồng'),
(70, 'Bình Phước'),
(72, 'Tây Ninh'),
(74, 'Bình Dương'),
(75, 'Đồng Nai'),
(77, 'Bà Rịa - Vũng Tàu'),
(79, 'Hồ Chí Minh'),
(80, 'Long An'),
(82, 'Tiền Giang'),
(83, 'Bến Tre'),
(84, 'Trà Vinh'),
(86, 'Vĩnh Long'),
(87, 'Đồng Tháp'),
(89, 'An Giang'),
(91, 'Kiên Giang'),
(92, 'Cần Thơ'),
(93, 'Hậu Giang'),
(94, 'Sóc Trăng'),
(95, 'Bạc Liêu'),
(96, 'Cà Mau');

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `city_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`id`, `name`, `city_id`) VALUES
(1, 'Ba Đình', 1),
(2, 'Hoàn Kiếm', 1),
(3, 'Tây Hồ', 1),
(4, 'Long Biên', 1),
(5, 'Cầu Giấy', 1),
(6, 'Đống Đa', 1),
(7, 'Hai Bà Trưng', 1),
(8, 'Hoàng Mai', 1),
(9, 'Thanh Xuân', 1),
(16, 'Sóc Sơn', 1),
(17, 'Đông Anh', 1),
(18, 'Gia Lâm', 1),
(19, 'Từ Liêm', 1),
(20, 'Thanh Trì', 1),
(24, 'Hà Giang', 2),
(26, 'Đồng Văn', 2),
(27, 'Mèo Vạc', 2),
(28, 'Yên Minh', 2),
(29, 'Quản Bạ', 2),
(30, 'Vị Xuyên', 2),
(31, 'Bắc Mê', 2),
(32, 'Hoàng Su Phì', 2),
(33, 'Xín Mần', 2),
(34, 'Bắc Quang', 2),
(35, 'Quang Bình', 2),
(40, 'Cao Bằng', 4),
(42, 'Bảo Lâm', 4),
(43, 'Bảo Lạc', 4),
(44, 'Thông Nông', 4),
(45, 'Hà Quảng', 4),
(46, 'Trà Lĩnh', 4),
(47, 'Trùng Khánh', 4),
(48, 'Hạ Lang', 4),
(49, 'Quảng Uyên', 4),
(50, 'Phục Hoà', 4),
(51, 'Hoà An', 4),
(52, 'Nguyên Bình', 4),
(53, 'Thạch An', 4),
(58, 'Bắc Kạn', 6),
(60, 'Pác Nặm', 6),
(61, 'Ba Bể', 6),
(62, 'Ngân Sơn', 6),
(63, 'Bạch Thông', 6),
(64, 'Chợ Đồn', 6),
(65, 'Chợ Mới', 6),
(66, 'Na Rì', 6),
(70, 'Tuyên Quang', 8),
(72, 'Nà Hang', 8),
(73, 'Chiêm Hóa', 8),
(74, 'Hàm Yên', 8),
(75, 'Yên Sơn', 8),
(76, 'Sơn Dương', 8),
(80, 'Lào Cai', 10),
(82, 'Bát Xát', 10),
(83, 'Mường Khương', 10),
(84, 'Si Ma Cai', 10),
(85, 'Bắc Hà', 10),
(86, 'Bảo Thắng', 10),
(87, 'Bảo Yên', 10),
(88, 'Sa Pa', 10),
(89, 'Văn Bàn', 10),
(94, 'Điện Biên Phủ', 11),
(95, 'Mường Lay', 11),
(96, 'Mường Nhé', 11),
(97, 'Mường Chà', 11),
(98, 'Tủa Chùa', 11),
(99, 'Tuần Giáo', 11),
(100, 'Điện Biên', 11),
(101, 'Điện Biên Đông', 11),
(102, 'Mường Ảng', 11),
(104, 'Lai Châu', 12),
(106, 'Tam Đường', 12),
(107, 'Mường Tè', 12),
(108, 'Sìn Hồ', 12),
(109, 'Phong Thổ', 12),
(110, 'Than Uyên', 12),
(111, 'Tân Uyên', 12),
(116, 'Sơn La', 14),
(118, 'Quỳnh Nhai', 14),
(119, 'Thuận Châu', 14),
(120, 'Mường La', 14),
(121, 'Bắc Yên', 14),
(122, 'Phù Yên', 14),
(123, 'Mộc Châu', 14),
(124, 'Yên Châu', 14),
(125, 'Mai Sơn', 14),
(126, 'Sông Mã', 14),
(127, 'Sốp Cộp', 14),
(132, 'Yên Bái', 15),
(133, 'Nghĩa Lộ', 15),
(135, 'Lục Yên', 15),
(136, 'Văn Yên', 15),
(137, 'Mù Cang Chải', 15),
(138, 'Trấn Yên', 15),
(139, 'Trạm Tấu', 15),
(140, 'Văn Chấn', 15),
(141, 'Yên Bình', 15),
(148, 'Hòa Bình', 17),
(150, 'Đà Bắc', 17),
(151, 'Kỳ Sơn', 17),
(152, 'Lương Sơn', 17),
(153, 'Kim Bôi', 17),
(154, 'Cao Phong', 17),
(155, 'Tân Lạc', 17),
(156, 'Mai Châu', 17),
(157, 'Lạc Sơn', 17),
(158, 'Yên Thủy', 17),
(159, 'Lạc Thủy', 17),
(164, 'Thái Nguyên', 19),
(165, 'Sông Công', 19),
(167, 'Định Hóa', 19),
(168, 'Phú Lương', 19),
(169, 'Đồng Hỷ', 19),
(170, 'Võ Nhai', 19),
(171, 'Đại Từ', 19),
(172, 'Phổ Yên', 19),
(173, 'Phú Bình', 19),
(178, 'Lạng Sơn', 20),
(180, 'Tràng Định', 20),
(181, 'Bình Gia', 20),
(182, 'Văn Lãng', 20),
(183, 'Cao Lộc', 20),
(184, 'Văn Quan', 20),
(185, 'Bắc Sơn', 20),
(186, 'Hữu Lũng', 20),
(187, 'Chi Lăng', 20),
(188, 'Lộc Bình', 20),
(189, 'Đình Lập', 20),
(193, 'Hạ Long', 22),
(194, 'Móng Cái', 22),
(195, 'Cẩm Phả', 22),
(196, 'Uông Bí', 22),
(198, 'Bình Liêu', 22),
(199, 'Tiên Yên', 22),
(200, 'Đầm Hà', 22),
(201, 'Hải Hà', 22),
(202, 'Ba Chẽ', 22),
(203, 'Vân Đồn', 22),
(204, 'Hoành Bồ', 22),
(205, 'Đông Triều', 22),
(206, 'Yên Hưng', 22),
(207, 'Cô Tô', 22),
(213, 'Bắc Giang', 24),
(215, 'Yên Thế', 24),
(216, 'Tân Yên', 24),
(217, 'Lạng Giang', 24),
(218, 'Lục Nam', 24),
(219, 'Lục Ngạn', 24),
(220, 'Sơn Động', 24),
(221, 'Yên Dũng', 24),
(222, 'Việt Yên', 24),
(223, 'Hiệp Hòa', 24),
(227, 'Việt Trì', 25),
(228, 'Phú Thọ', 25),
(230, 'Đoan Hùng', 25),
(231, 'Hạ Hoà', 25),
(232, 'Thanh Ba', 25),
(233, 'Phù Ninh', 25),
(234, 'Yên Lập', 25),
(235, 'Cẩm Khê', 25),
(236, 'Tam Nông', 25),
(237, 'Lâm Thao', 25),
(238, 'Thanh Sơn', 25),
(239, 'Thanh Thuỷ', 25),
(240, 'Tân Sơn', 25),
(243, 'Vĩnh Yên', 26),
(244, 'Phúc Yên', 26),
(246, 'Lập Thạch', 26),
(247, 'Tam Dương', 26),
(248, 'Tam Đảo', 26),
(249, 'Bình Xuyên', 26),
(250, 'Mê Linh', 1),
(251, 'Yên Lạc', 26),
(252, 'Vĩnh Tường', 26),
(253, 'Sông Lô', 26),
(256, 'Bắc Ninh', 27),
(258, 'Yên Phong', 27),
(259, 'Quế Võ', 27),
(260, 'Tiên Du', 27),
(261, 'Từ Sơn', 27),
(262, 'Thuận Thành', 27),
(263, 'Gia Bình', 27),
(264, 'Lương Tài', 27),
(268, 'Hà Đông', 1),
(269, 'Sơn Tây', 1),
(271, 'Ba Vì', 1),
(272, 'Phúc Thọ', 1),
(273, 'Đan Phượng', 1),
(274, 'Hoài Đức', 1),
(275, 'Quốc Oai', 1),
(276, 'Thạch Thất', 1),
(277, 'Chương Mỹ', 1),
(278, 'Thanh Oai', 1),
(279, 'Thường Tín', 1),
(280, 'Phú Xuyên', 1),
(281, 'Ứng Hòa', 1),
(282, 'Mỹ Đức', 1),
(288, 'Hải Dương', 30),
(290, 'Chí Linh', 30),
(291, 'Nam Sách', 30),
(292, 'Kinh Môn', 30),
(293, 'Kim Thành', 30),
(294, 'Thanh Hà', 30),
(295, 'Cẩm Giàng', 30),
(296, 'Bình Giang', 30),
(297, 'Gia Lộc', 30),
(298, 'Tứ Kỳ', 30),
(299, 'Ninh Giang', 30),
(300, 'Thanh Miện', 30),
(303, 'Hồng Bàng', 31),
(304, 'Ngô Quyền', 31),
(305, 'Lê Chân', 31),
(306, 'Hải An', 31),
(307, 'Kiến An', 31),
(308, 'Đồ Sơn', 31),
(309, 'Kinh Dương', 31),
(311, 'Thuỷ Nguyên', 31),
(312, 'An Dương', 31),
(313, 'An Lão', 31),
(314, 'Kiến Thụy', 31),
(315, 'Tiên Lãng', 31),
(316, 'Vĩnh Bảo', 31),
(317, 'Cát Hải', 31),
(318, 'Bạch Long Vĩ', 31),
(323, 'Hưng Yên', 33),
(325, 'Văn Lâm', 33),
(326, 'Văn Giang', 33),
(327, 'Yên Mỹ', 33),
(328, 'Mỹ Hào', 33),
(329, 'Ân Thi', 33),
(330, 'Khoái Châu', 33),
(331, 'Kim Động', 33),
(332, 'Tiên Lữ', 33),
(333, 'Phù Cừ', 33),
(336, 'Thái Bình', 34),
(338, 'Quỳnh Phụ', 34),
(339, 'Hưng Hà', 34),
(340, 'Đông Hưng', 34),
(341, 'Thái Thụy', 34),
(342, 'Tiền Hải', 34),
(343, 'Kiến Xương', 34),
(344, 'Vũ Thư', 34),
(347, 'Phủ Lý', 35),
(349, 'Duy Tiên', 35),
(350, 'Kim Bảng', 35),
(351, 'Thanh Liêm', 35),
(352, 'Bình Lục', 35),
(353, 'Lý Nhân', 35),
(356, 'Nam Định', 36),
(358, 'Mỹ Lộc', 36),
(359, 'Vụ Bản', 36),
(360, 'Ý Yên', 36),
(361, 'Nghĩa Hưng', 36),
(362, 'Nam Trực', 36),
(363, 'Trực Ninh', 36),
(364, 'Xuân Trường', 36),
(365, 'Giao Thủy', 36),
(366, 'Hải Hậu', 36),
(369, 'Ninh Bình', 37),
(370, 'Tam Điệp', 37),
(372, 'Nho Quan', 37),
(373, 'Gia Viễn', 37),
(374, 'Hoa Lư', 37),
(375, 'Yên Khánh', 37),
(376, 'Kim Sơn', 37),
(377, 'Yên Mô', 37),
(380, 'Thanh Hóa', 38),
(381, 'Bỉm Sơn', 38),
(382, 'Sầm Sơn', 38),
(384, 'Mường Lát', 38),
(385, 'Quan Hóa', 38),
(386, 'Bá Thước', 38),
(387, 'Quan Sơn', 38),
(388, 'Lang Chánh', 38),
(389, 'Ngọc Lặc', 38),
(390, 'Cẩm Thủy', 38),
(391, 'Thạch Thành', 38),
(392, 'Hà Trung', 38),
(393, 'Vĩnh Lộc', 38),
(394, 'Yên Định', 38),
(395, 'Thọ Xuân', 38),
(396, 'Thường Xuân', 38),
(397, 'Triệu Sơn', 38),
(398, 'Thiệu Hoá', 38),
(399, 'Hoằng Hóa', 38),
(400, 'Hậu Lộc', 38),
(401, 'Nga Sơn', 38),
(402, 'Như Xuân', 38),
(403, 'Như Thanh', 38),
(404, 'Nông Cống', 38),
(405, 'Đông Sơn', 38),
(406, 'Quảng Xương', 38),
(407, 'Tĩnh Gia', 38),
(412, 'Vinh', 40),
(413, 'Cửa Lò', 40),
(414, 'Thái Hoà', 40),
(415, 'Quế Phong', 40),
(416, 'Quỳ Châu', 40),
(417, 'Kỳ Sơn', 40),
(418, 'Tương Dương', 40),
(419, 'Nghĩa Đàn', 40),
(420, 'Quỳ Hợp', 40),
(421, 'Quỳnh Lưu', 40),
(422, 'Con Cuông', 40),
(423, 'Tân Kỳ', 40),
(424, 'Anh Sơn', 40),
(425, 'Diễn Châu', 40),
(426, 'Yên Thành', 40),
(427, 'Đô Lương', 40),
(428, 'Thanh Chương', 40),
(429, 'Nghi Lộc', 40),
(430, 'Nam Đàn', 40),
(431, 'Hưng Nguyên', 40),
(436, 'Hà Tĩnh', 42),
(437, 'Hồng Lĩnh', 42),
(439, 'Hương Sơn', 42),
(440, 'Đức Thọ', 42),
(441, 'Vũ Quang', 42),
(442, 'Nghi Xuân', 42),
(443, 'Can Lộc', 42),
(444, 'Hương Khê', 42),
(445, 'Thạch Hà', 42),
(446, 'Cẩm Xuyên', 42),
(447, 'Kỳ Anh', 42),
(448, 'Lộc Hà', 42),
(450, 'Đồng Hới', 44),
(452, 'Minh Hóa', 44),
(453, 'Tuyên Hóa', 44),
(454, 'Quảng Trạch', 44),
(455, 'Bố Trạch', 44),
(456, 'Quảng Ninh', 44),
(457, 'Lệ Thủy', 44),
(461, 'Đông Hà', 45),
(462, 'Quảng Trị', 45),
(464, 'Vĩnh Linh', 45),
(465, 'Hướng Hóa', 45),
(466, 'Gio Linh', 45),
(467, 'Đa Krông', 45),
(468, 'Cam Lộ', 45),
(469, 'Triệu Phong', 45),
(470, 'Hải Lăng', 45),
(471, 'Cồn Cỏ', 45),
(474, 'Huế', 46),
(476, 'Phong Điền', 46),
(477, 'Quảng Điền', 46),
(478, 'Phú Vang', 46),
(479, 'Hương Thủy', 46),
(480, 'Hương Trà', 46),
(481, 'A Lưới', 46),
(482, 'Phú Lộc', 46),
(483, 'Nam Đông', 46),
(490, 'Liên Chiểu', 48),
(491, 'Thanh Khê', 48),
(492, 'Hải Châu', 48),
(493, 'Sơn Trà', 48),
(494, 'Ngũ Hành Sơn', 48),
(495, 'Cẩm Lệ', 48),
(497, 'Hoà Vang', 48),
(498, 'Hoàng Sa', 48),
(502, 'Tam Kỳ', 49),
(503, 'Hội An', 49),
(504, 'Tây Giang', 49),
(505, 'Đông Giang', 49),
(506, 'Đại Lộc', 49),
(507, 'Điện Bàn', 49),
(508, 'Duy Xuyên', 49),
(509, 'Quế Sơn', 49),
(510, 'Nam Giang', 49),
(511, 'Phước Sơn', 49),
(512, 'Hiệp Đức', 49),
(513, 'Thăng Bình', 49),
(514, 'Tiên Phước', 49),
(515, 'Bắc Trà My', 49),
(516, 'Nam Trà My', 49),
(517, 'Núi Thành', 49),
(518, 'Phú Ninh', 49),
(519, 'Nông Sơn', 49),
(522, 'Quảng Ngãi', 51),
(524, 'Bình Sơn', 51),
(525, 'Trà Bồng', 51),
(526, 'Tây Trà', 51),
(527, 'Sơn Tịnh', 51),
(528, 'Tư Nghĩa', 51),
(529, 'Sơn Hà', 51),
(530, 'Sơn Tây', 51),
(531, 'Minh Long', 51),
(532, 'Nghĩa Hành', 51),
(533, 'Mộ Đức', 51),
(534, 'Đức Phổ', 51),
(535, 'Ba Tơ', 51),
(536, 'Lý Sơn', 51),
(540, 'Qui Nhơn', 52),
(542, 'An Lão', 52),
(543, 'Hoài Nhơn', 52),
(544, 'Hoài Ân', 52),
(545, 'Phù Mỹ', 52),
(546, 'Vĩnh Thạnh', 52),
(547, 'Tây Sơn', 52),
(548, 'Phù Cát', 52),
(549, 'An Nhơn', 52),
(550, 'Tuy Phước', 52),
(551, 'Vân Canh', 52),
(555, 'Tuy Hòa', 54),
(557, 'Sông Cầu', 54),
(558, 'Đồng Xuân', 54),
(559, 'Tuy An', 54),
(560, 'Sơn Hòa', 54),
(561, 'Sông Hinh', 54),
(562, 'Tây Hoà', 54),
(563, 'Phú Hoà', 54),
(564, 'Đông Hoà', 54),
(568, 'Nha Trang', 56),
(569, 'Cam Ranh', 56),
(570, 'Cam Lâm', 56),
(571, 'Vạn Ninh', 56),
(572, 'Ninh Hòa', 56),
(573, 'Khánh Vĩnh', 56),
(574, 'Diên Khánh', 56),
(575, 'Khánh Sơn', 56),
(576, 'Trường Sa', 56),
(582, 'Phan Rang-Tháp Chàm', 58),
(584, 'Bác Ái', 58),
(585, 'Ninh Sơn', 58),
(586, 'Ninh Hải', 58),
(587, 'Ninh Phước', 58),
(588, 'Thuận Bắc', 58),
(589, 'Thuận Nam', 58),
(593, 'Phan Thiết', 60),
(594, 'La Gi', 60),
(595, 'Tuy Phong', 60),
(596, 'Bắc Bình', 60),
(597, 'Hàm Thuận Bắc', 60),
(598, 'Hàm Thuận Nam', 60),
(599, 'Tánh Linh', 60),
(600, 'Đức Linh', 60),
(601, 'Hàm Tân', 60),
(602, 'Phú Quí', 60),
(608, 'Kon Tum', 62),
(610, 'Đắk Glei', 62),
(611, 'Ngọc Hồi', 62),
(612, 'Đắk Tô', 62),
(613, 'Kon Plông', 62),
(614, 'Kon Rẫy', 62),
(615, 'Đắk Hà', 62),
(616, 'Sa Thầy', 62),
(617, 'Tu Mơ Rông', 62),
(622, 'Pleiku', 64),
(623, 'An Khê', 64),
(624, 'Ayun Pa', 64),
(625, 'Kbang', 64),
(626, 'Đăk Đoa', 64),
(627, 'Chư Păh', 64),
(628, 'Ia Grai', 64),
(629, 'Mang Yang', 64),
(630, 'Kông Chro', 64),
(631, 'Đức Cơ', 64),
(632, 'Chư Prông', 64),
(633, 'Chư Sê', 64),
(634, 'Đăk Pơ', 64),
(635, 'Ia Pa', 64),
(637, 'Krông Pa', 64),
(638, 'Phú Thiện', 64),
(639, 'Chư Pưh', 64),
(643, 'Buôn Ma Thuột', 66),
(644, 'Buôn Hồ', 66),
(645, 'Ea H\'leo', 66),
(646, 'Ea Súp', 66),
(647, 'Buôn Đôn', 66),
(648, 'Cư M\'gar', 66),
(649, 'Krông Búk', 66),
(650, 'Krông Năng', 66),
(651, 'Ea Kar', 66),
(652, 'M\'đrắk', 66),
(653, 'Krông Bông', 66),
(654, 'Krông Pắc', 66),
(655, 'Krông A Na', 66),
(656, 'Lắk', 66),
(657, 'Cư Kuin', 66),
(660, 'Gia Nghĩa', 67),
(661, 'Đắk Glong', 67),
(662, 'Cư Jút', 67),
(663, 'Đắk Mil', 67),
(664, 'Krông Nô', 67),
(665, 'Đắk Song', 67),
(666, 'Đắk R\'lấp', 67),
(667, 'Tuy Đức', 67),
(672, 'Đà Lạt', 68),
(673, 'Bảo Lộc', 68),
(674, 'Đam Rông', 68),
(675, 'Lạc Dương', 68),
(676, 'Lâm Hà', 68),
(677, 'Đơn Dương', 68),
(678, 'Đức Trọng', 68),
(679, 'Di Linh', 68),
(680, 'Bảo Lâm', 68),
(681, 'Đạ Huoai', 68),
(682, 'Đạ Tẻh', 68),
(683, 'Cát Tiên', 68),
(688, 'Phước Long', 70),
(689, 'Đồng Xoài', 70),
(690, 'Bình Long', 70),
(691, 'Bù Gia Mập', 70),
(692, 'Lộc Ninh', 70),
(693, 'Bù Đốp', 70),
(694, 'Hớn Quản', 70),
(695, 'Đồng Phù', 70),
(696, 'Bù Đăng', 70),
(697, 'Chơn Thành', 70),
(703, 'Tây Ninh', 72),
(705, 'Tân Biên', 72),
(706, 'Tân Châu', 72),
(707, 'Dương Minh Châu', 72),
(708, 'Châu Thành', 72),
(709, 'Hòa Thành', 72),
(710, 'Gò Dầu', 72),
(711, 'Bến Cầu', 72),
(712, 'Trảng Bàng', 72),
(718, 'Thủ Dầu Một', 74),
(720, 'Dầu Tiếng', 74),
(721, 'Bến Cát', 74),
(722, 'Phú Giáo', 74),
(723, 'Tân Uyên', 74),
(724, 'Dĩ An', 74),
(725, 'Thuận An', 74),
(731, 'Biên Hòa', 75),
(732, 'Long Khánh', 75),
(734, 'Tân Phú', 75),
(735, 'Vĩnh Cửu', 75),
(736, 'Định Quán', 75),
(737, 'Trảng Bom', 75),
(738, 'Thống Nhất', 75),
(739, 'Cẩm Mỹ', 75),
(740, 'Long Thành', 75),
(741, 'Xuân Lộc', 75),
(742, 'Nhơn Trạch', 75),
(747, 'Vũng Tầu', 77),
(748, 'Bà Rịa', 77),
(750, 'Châu Đức', 77),
(751, 'Xuyên Mộc', 77),
(752, 'Long Điền', 77),
(753, 'Đất Đỏ', 77),
(754, 'Tân Thành', 77),
(755, 'Côn Đảo', 77),
(760, '1', 79),
(761, '12', 79),
(762, 'Thủ Đức', 79),
(763, '9', 79),
(764, 'Gò Vấp', 79),
(765, 'Bình Thạnh', 79),
(766, 'Tân Bình', 79),
(767, 'Tân Phú', 79),
(768, 'Phú Nhuận', 79),
(769, '2', 79),
(770, '3', 79),
(771, '10', 79),
(772, '11', 79),
(773, '4', 79),
(774, '5', 79),
(775, '6', 79),
(776, '8', 79),
(777, 'Bình Tân', 79),
(778, '7', 79),
(783, 'Củ Chi', 79),
(784, 'Hóc Môn', 79),
(785, 'Bình Chánh', 79),
(786, 'Nhà Bè', 79),
(787, 'Cần Giờ', 79),
(794, 'Tân An', 80),
(796, 'Tân Hưng', 80),
(797, 'Vĩnh Hưng', 80),
(798, 'Mộc Hóa', 80),
(799, 'Tân Thạnh', 80),
(800, 'Thạnh Hóa', 80),
(801, 'Đức Huệ', 80),
(802, 'Đức Hòa', 80),
(803, 'Bến Lức', 80),
(804, 'Thủ Thừa', 80),
(805, 'Tân Trụ', 80),
(806, 'Cần Đước', 80),
(807, 'Cần Giuộc', 80),
(808, 'Châu Thành', 80),
(815, 'Mỹ Tho', 82),
(816, 'Gò Công', 82),
(818, 'Tân Phước', 82),
(819, 'Cái Bè', 82),
(820, 'Cai Lậy', 82),
(821, 'Châu Thành', 82),
(822, 'Chợ Gạo', 82),
(823, 'Gò Công Tây', 82),
(824, 'Gò Công Đông', 82),
(825, 'Tân Phú Đông', 82),
(829, 'Bến Tre', 83),
(831, 'Châu Thành', 83),
(832, 'Chợ Lách', 83),
(833, 'Mỏ Cày Nam', 83),
(834, 'Giồng Trôm', 83),
(835, 'Bình Đại', 83),
(836, 'Ba Tri', 83),
(837, 'Thạnh Phú', 83),
(838, 'Mỏ Cày Bắc', 83),
(842, 'Trà Vinh', 84),
(844, 'Càng Long', 84),
(845, 'Cầu Kè', 84),
(846, 'Tiểu Cần', 84),
(847, 'Châu Thành', 84),
(848, 'Cầu Ngang', 84),
(849, 'Trà Cú', 84),
(850, 'Duyên Hải', 84),
(855, 'Vĩnh Long', 86),
(857, 'Long Hồ', 86),
(858, 'Mang Thít', 86),
(859, 'Vũng Liêm', 86),
(860, 'Tam Bình', 86),
(861, 'Bình Minh', 86),
(862, 'Trà Ôn', 86),
(863, 'Bình Tân', 86),
(866, 'Cao Lãnh', 87),
(867, 'Sa Đéc', 87),
(868, 'Hồng Ngự', 87),
(869, 'Tân Hồng', 87),
(870, 'Hồng Ngự', 87),
(871, 'Tam Nông', 87),
(872, 'Tháp Mười', 87),
(873, 'Cao Lãnh', 87),
(874, 'Thanh Bình', 87),
(875, 'Lấp Vò', 87),
(876, 'Lai Vung', 87),
(877, 'Châu Thành', 87),
(883, 'Long Xuyên', 89),
(884, 'Châu Đốc', 89),
(886, 'An Phú', 89),
(887, 'Tân Châu', 89),
(888, 'Phú Tân', 89),
(889, 'Châu Phú', 89),
(890, 'Tịnh Biên', 89),
(891, 'Tri Tôn', 89),
(892, 'Châu Thành', 89),
(893, 'Chợ Mới', 89),
(894, 'Thoại Sơn', 89),
(899, 'Rạch Giá', 91),
(900, 'Hà Tiên', 91),
(902, 'Kiên Lương', 91),
(903, 'Hòn Đất', 91),
(904, 'Tân Hiệp', 91),
(905, 'Châu Thành', 91),
(906, 'Giồng Giềng', 91),
(907, 'Gò Quao', 91),
(908, 'An Biên', 91),
(909, 'An Minh', 91),
(910, 'Vĩnh Thuận', 91),
(911, 'Phú Quốc', 91),
(912, 'Kiên Hải', 91),
(913, 'U Minh Thượng', 91),
(914, 'Giang Thành', 91),
(916, 'Ninh Kiều', 92),
(917, 'Ô Môn', 92),
(918, 'Bình Thuỷ', 92),
(919, 'Cái Răng', 92),
(923, 'Thốt Nốt', 92),
(924, 'Vĩnh Thạnh', 92),
(925, 'Cờ Đỏ', 92),
(926, 'Phong Điền', 92),
(927, 'Thới Lai', 92),
(930, 'Vị Thanh', 93),
(931, 'Ngã Bảy', 93),
(932, 'Châu Thành A', 93),
(933, 'Châu Thành', 93),
(934, 'Phụng Hiệp', 93),
(935, 'Vị Thuỷ', 93),
(936, 'Long Mỹ', 93),
(941, 'Sóc Trăng', 94),
(942, 'Châu Thành', 94),
(943, 'Kế Sách', 94),
(944, 'Mỹ Tú', 94),
(945, 'Cù Lao Dung', 94),
(946, 'Long Phú', 94),
(947, 'Mỹ Xuyên', 94),
(948, 'Ngã Năm', 94),
(949, 'Thạnh Trị', 94),
(950, 'Vĩnh Châu', 94),
(951, 'Trần Đề', 94),
(954, 'Bạc Liêu', 95),
(956, 'Hồng Dân', 95),
(957, 'Phước Long', 95),
(958, 'Vĩnh Lợi', 95),
(959, 'Giá Rai', 95),
(960, 'Đông Hải', 95),
(961, 'Hoà Bình', 95),
(964, 'Cà Mau', 96),
(966, 'U Minh', 96),
(967, 'Thới Bình', 96),
(968, 'Trần Văn Thời', 96),
(969, 'Cái Nước', 96),
(970, 'Đầm Dơi', 96),
(971, 'Năm Căn', 96),
(972, 'Phú Tân', 96),
(973, 'Ngọc Hiển', 96);

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `address_id` int(11) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `flag` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `status` varchar(50) NOT NULL,
  `note` varchar(1000) DEFAULT NULL,
  `account_id` int(11) DEFAULT NULL,
  `location_id` int(11) DEFAULT NULL,
  `address_id` int(11) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `flag` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `status`, `note`, `account_id`, `location_id`, `address_id`, `created_date`, `modified_date`, `flag`) VALUES
(2, 'delivered', NULL, 2, NULL, 1, '2023-03-07 07:20:19', '2023-03-18 06:13:56', NULL),
(4, 'cancel', NULL, 2, NULL, 1, '2023-03-07 07:28:01', '2023-03-18 06:13:47', NULL),
(5, 'waiting', NULL, 2, NULL, 1, '2023-03-07 07:34:38', NULL, NULL),
(6, 'waiting', NULL, 2, NULL, 1, '2023-03-07 07:35:59', NULL, NULL),
(7, 'delivered', NULL, 2, NULL, 1, '2023-03-07 11:46:54', '2023-03-18 06:13:44', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order_item`
--

CREATE TABLE `order_item` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `orginal_price` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_item`
--

INSERT INTO `order_item` (`id`, `product_id`, `order_id`, `quantity`, `orginal_price`, `price`, `created_date`, `modified_date`) VALUES
(1, 56, 2, 1, 40000, 40000, '2023-03-07 07:20:19', NULL),
(3, 57, 4, 1, 30000, 30000, '2023-03-07 07:28:01', NULL),
(4, 58, 5, 1, 30000, 30000, '2023-03-07 07:34:38', NULL),
(5, 56, 6, 1, 40000, 40000, '2023-03-07 07:35:59', NULL),
(6, 11, 7, 1, 40000, 40000, '2023-03-07 11:46:54', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `calorie` float DEFAULT NULL,
  `estimate_time` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `flag` int(11) DEFAULT NULL,
  `element` varchar(1000) DEFAULT NULL,
  `image` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `description`, `price`, `status`, `calorie`, `estimate_time`, `category_id`, `created_date`, `modified_date`, `flag`, `element`, `image`) VALUES
(1, 'Sinh tố bơ', 'Bơ tươi được lấy trực tiếp từ vườn sạch sẽ, không thuốc trừ sâu (Giá sản phẩm đã bao gồm cả ly)', 30000, 'active', 37, 10, 2, '2023-03-05 00:00:00', NULL, NULL, 'Bơ, sữa đặc, đá xay nhuyễn', 'sinhtobo.jpg'),
(2, 'Sinh tố dâu', 'Dâu tươi được lấy trực tiếp từ vườn sạch sẽ, không thuốc trừ sâu (Giá sản phẩm đã bao gồm cả ly)', 40000, 'active', 40, 10, 2, '2023-03-05 00:00:00', NULL, NULL, 'Dâu, sữa đặc, đá xay nhuyễn', 'sinhtodau.jpg'),
(3, 'Sinh tố cam', 'Cam tươi được lấy trực tiếp từ vườn sạch sẽ, không thuốc trừ sâu (Giá sản phẩm đã bao gồm cả ly)', 35000, 'active', 38, 10, 2, '2023-03-05 00:00:00', NULL, NULL, 'Cam, sữa đặc, đá xay nhuyễn', 'sinhtocam.jpg'),
(4, 'Sinh tố dưa hấu', 'Dưa hấu tươi được lấy trực tiếp từ vườn sạch sẽ, không thuốc trừ sâu (Giá sản phẩm đã bao gồm cả ly)', 35000, 'active', 38, 10, 2, '2023-03-05 00:00:00', NULL, NULL, 'Dưa hấu, sữa đặc, đá xay nhuyễn', 'sinhtoduahau.jpg'),
(5, 'Sinh tố chanh leo', 'Chanh leo tươi được lấy trực tiếp từ vườn sạch sẽ, không thuốc trừ sâu (Giá sản phẩm đã bao gồm cả ly)', 35000, 'active', 37, 10, 2, '2023-03-05 00:00:00', NULL, NULL, 'Chanh leo, sữa đặc, đá xay nhuyễn', 'sinhtochanhleo.jpg'),
(6, 'Sinh tố chanh tuyết', 'Chanh tươi được lấy trực tiếp từ vườn sạch sẽ, không thuốc trừ sâu (Giá sản phẩm đã bao gồm cả ly)', 25000, 'active', 36, 10, 2, '2023-03-05 00:00:00', NULL, NULL, 'Chanh, sữa đặc, đá xay nhuyễn', 'sinhtochanhtuyet.jpg'),
(7, 'Sinh tố kiwi', 'Kiwi tươi được lấy trực tiếp từ vườn sạch sẽ, không thuốc trừ sâu (Giá sản phẩm đã bao gồm cả ly)', 40000, 'active', 38, 10, 2, '2023-03-05 00:00:00', NULL, NULL, 'Kiwi, sữa đặc, đá xay nhuyễn', 'sinhtokiwi.jpg'),
(8, 'Sinh tố xoài', 'Xoài tươi được lấy trực tiếp từ vườn sạch sẽ, không thuốc trừ sâu (Giá sản phẩm đã bao gồm cả ly)', 35000, 'active', 37, 10, 2, '2023-03-05 00:00:00', NULL, NULL, 'Xoài. sữa đặc, đá xay nhuyễn', 'sinhtoxoai.jpg'),
(9, 'Thạch zai zai', 'Là sản phẩm chất lượng với đạt chuẩn an toàn thực phẩm', 15000, 'active', 80, 5, 3, '2023-03-06 00:00:00', NULL, NULL, 'Sữa chua,hương liệu.', 'thạch zai zai.jpeg'),
(10, 'Mít sấy 250g', 'Sản phẩm được đóng gói trong môi trường hiện đại, tốt cho sức khỏe', 70000, 'active', 200, 1, 3, '2023-03-06 00:00:00', NULL, NULL, 'Mít sấy khô, hương liệu', 'mitsay.jpg'),
(11, 'Thạch sữa chua', 'Là thực phẩm tốt cho hệ tiêu hoá có nếp cẩm ngon calo thấp', 40000, 'active', 50, 15, 3, '2023-03-06 00:00:00', NULL, NULL, 'Nếp cẩm,sữa chua,xoài.', 'thạch sữa chua.jpeg'),
(12, 'Thach vị hoa quả', 'Cung cấp hoa quả đa dạng cung cấp vitamin c', 100000, 'active', 200, 15, 3, '2023-03-06 00:00:00', NULL, NULL, 'Nho,táo ,cam,mít.', 'thachvitao.jpeg'),
(13, 'Gạo lứt', 'Một sản phẩm tốt cho sức khoẻ và dành cho người ăn kiêng', 150000, 'active', 120, 13, 4, '2023-03-06 00:00:00', NULL, NULL, 'Gạo lứt, hương liệu', 'gaonut.jpeg'),
(14, 'Khoai lang sấy 250g', 'Sản phẩm được đóng gói trong môi trường hiện đại, tốt cho sức khỏe', 60000, 'active', 200, 1, 3, '2023-03-06 00:00:00', NULL, NULL, 'Khoai lang sấy khô, hương liệu', 'khoailangsay.jpg'),
(15, 'Kẹo mochi', 'Sản phẩm luôn dành được nhiều sự yêu thích từ trẻ nhỏ ', 25000, 'active', 200, 8, 3, '2023-03-06 00:00:00', NULL, NULL, 'lúa mạch ,sữa ,đường, bơ', 'kẹomochi.jpeg'),
(16, 'Khoai môn sấy 250g', 'Sản phẩm được đóng gói trong môi trường hiện đại, tốt cho sức khỏe', 60000, 'active', 250, 1, 3, '2023-03-06 00:00:00', NULL, NULL, 'Khoai môn sấy khô, hương liệu', 'khoaimonsay.jpg'),
(17, 'Chuối sấy 250g', 'Sản phẩm được đóng gói trong môi trường hiện đại, tốt cho sức khỏe', 65000, 'active', 200, 1, 3, '2023-03-06 00:00:00', NULL, NULL, 'Chuối sấy khô, hương liệu', 'chuoisay.jpg'),
(18, 'Hoa quả sấy 250g', 'Sản phẩm được đóng gói trong môi trường hiện đại, tốt cho sức khỏe', 70000, 'active', 270, 1, 3, '2023-03-06 00:00:00', NULL, NULL, 'Các loại hoa quả sấy khô, hương liệu', 'hoaquasay.jpg'),
(19, 'Thạch dưa lưới ', 'sảm phẩm đặc biệt được yêu thích vào mùa hè với dưa lưới đạt chuẩn vệ sinh an toàn thực phẩm', 50000, 'active', 130, 30, 3, '2023-03-06 00:00:00', NULL, NULL, 'dưa lưới sữa chua ', 'thachdualuoi.jpeg'),
(20, 'Bánh ăn kiêng vị socola 200g', 'Một sản phẩm tốt cho sức khoẻ và dành cho người ăn kiêng', 70000, 'active', 100, 1, 3, '2023-03-06 00:00:00', NULL, NULL, 'Bột mì, hương liệu.', 'banhsocola.jpg'),
(21, 'Bim bim cà chua', 'Sản phẩm luôn dành được nhiều sự yêu thích từ trẻ nhỏ ', 10000, 'active', 130, 5, 3, '2023-03-06 00:00:00', NULL, NULL, 'Bột mì, hương liệu.', 'bim bim cà chua.jpeg'),
(22, 'Bim bim phô mát', 'Sản phẩm luôn dành được nhiều sự yêu thích từ trẻ nhỏ ', 15000, 'active', 125, 5, 3, '2023-03-06 00:00:00', NULL, NULL, 'bột mì, pho mat', 'bimbimphomat.png'),
(23, 'Kẹo socola', 'Hàng nhập khẩu nhật bản sản phẩm luôn được trẻ em nhật yêu thich', 30000, 'active', 150, 5, 3, '2023-03-06 00:00:00', NULL, NULL, 'Socola, hương liệu', 'keosocola.jpeg'),
(24, 'Ngũ cốc ăn kiêng 250g', 'Một sản phẩm tốt cho sức khoẻ và dành cho người ăn kiêng', 150000, 'active', 300, 1, 4, '2023-03-06 00:00:00', NULL, NULL, 'Các loại hạt, chất điều vị.', 'ngucocankieng.jpg'),
(25, 'Mì trẻ em', 'Sản phẩm luôn dành được nhiều sự yêu thích từ trẻ nhỏ ', 12000, 'active', 150, 5, 3, '2023-03-06 00:00:00', NULL, NULL, 'Mì, trứng hương liệu', 'mitreem.webp'),
(26, 'Bắp cải khô', 'Sản phẩm chay ngon giá tốt ,tốt. cho sức khoẻ', 40000, 'active', 50, 30, 4, '2023-03-06 00:00:00', NULL, NULL, 'Bắp cải, gia vị, đường', 'bapcaikho.jpeg'),
(27, 'Cà tím chiên', 'Sản phẩm chay ngon giúp người mới bắt đầu ăn kiêng', 40000, 'active', 60, 30, 4, '2023-03-06 00:00:00', NULL, NULL, 'Cà tím , gia vị, dầu lạc', 'catimlanbotchienchay.jpeg'),
(28, 'Cà tím luộc', 'Sản phẩm chay ngon giá tốt ,tốt. cho sức khoẻ', 20000, 'active', 30, 15, 4, '2023-03-06 00:00:00', NULL, NULL, 'Cà tím , gia vị', 'catimluoctuongchay.jpeg'),
(29, 'Cơm cháy', 'Sản phẩm chay ngon giá tốt ,tốt. cho sức khoẻ', 60000, 'active', 300, 15, 4, '2023-03-06 00:00:00', NULL, NULL, 'Gạo,dầu lạc', 'comchay.jpeg'),
(30, 'Giò chay', 'Sản phẩm chay ngon giá tốt ,tốt. cho sức khoẻ,hương vị như giò thật', 200000, 'active', 60, 12, 4, '2023-03-06 00:00:00', NULL, NULL, 'Bột sắn,hương liệu,bột gạo', 'gio.jpeg'),
(31, 'Nem chay', 'Sản phẩm chay ngon giá tốt ,tốt. cho sức khoẻ,hương vị như giò thật', 80000, 'active', 60, 12, 4, '2023-03-06 00:00:00', NULL, NULL, 'Miến, nấm,hương liệu', 'giochay.jpeg'),
(32, 'Heo hầm chay', 'Sản phẩm chay ngon giá tốt ,tốt. cho sức khoẻ,hương vị như giò thật', 50000, 'active', 80, 12, 4, '2023-03-06 00:00:00', NULL, NULL, 'Hương liệu,bột sắn,đường', 'heohamchay.jpeg'),
(33, 'Nấm rơm chiên ', 'Sản phẩm chay ngon giá tốt ,tốt. cho sức khoẻ,hương vị như giò thật', 40000, 'active', 90, 15, 4, '2023-03-06 00:00:00', NULL, NULL, 'Nấm,bột mì ,dầu lạc', 'namronchien.jpg'),
(34, 'Sữa tươi nguyên chất', 'Sữa bò nguyên chất đạt tiêu chuẩn an toàn vệ sinh thực phẩm', 100000, 'active', 100, 12, 4, '2023-03-06 00:00:00', NULL, NULL, 'Sữa bò', 'suatuoi.jpeg'),
(35, 'Sa lat trộn', 'Cung cấp đầy đủ vitamin c thiết yếu , rau trồng trong nha kính khép kín', 70000, 'active', 50, 5, 4, '2023-03-06 00:00:00', NULL, NULL, 'Rau tươi,cà chua ,sốt', 'salattron.webp'),
(36, 'Bánh bao nhân thịt', 'Bánh ngon chất lượng đảm bảo phù hợp với người không thích chiên xào', 30000, 'active', 50, 20, 1, '2023-03-06 00:00:00', NULL, NULL, 'Bột gạo, thịt lợn, miến', 'banhbaonhanthit.jpeg'),
(37, 'Bánh bao chay', 'Bánh ngon chất lượng đảm bảo phù hợp với người không thích chiên xào', 20000, 'active', 40, 15, 1, '2023-03-06 00:00:00', NULL, NULL, 'Bột gạo ,hương liệu', 'banhbaochay.jpeg'),
(38, 'Bánh bao nhân ngọt', 'Bánh ngon chất lượng đảm bảo phù hợp với người không thích chiên xào', 25000, 'active', 45, 15, 1, '2023-03-06 00:00:00', NULL, NULL, 'Bột gạo,đường,trứng', 'banhbaonhanngot.jpeg'),
(39, 'Bánh mì pate', 'Bánh ngon,pate lấy trực tiếp từ Hải Phòng', 30000, 'active', 60, 15, 1, '2023-03-06 00:00:00', NULL, NULL, 'Bánh mì,pate', 'banhmipate.jpeg'),
(40, 'Bánh trứng', 'Sản phẩm bán chạy, trứng từ gà kiểm định cho trứng chất lượng tốt', 50000, 'active', 60, 20, 1, '2023-03-06 00:00:00', NULL, NULL, 'Bột mì,trứng,dầu lạc', 'banhtrung.jpeg'),
(41, 'Bắp rang', 'Sản phẩm luôn dành được nhiều sự yêu thích từ trẻ nhỏ ', 40000, 'active', 200, 15, 1, '2023-03-06 00:00:00', NULL, NULL, 'Bắp, bơ, đường,dầu timh luyện', 'baprang.jpeg'),
(42, 'Cá chiên', 'Dành cho người thích ăn cá đảm bảo ngon không tanh', 60000, 'active', 300, 30, 1, '2023-03-06 00:00:00', NULL, NULL, 'cá chép,rô phi', 'cachien.jpeg'),
(43, 'Đùi gà chiên ', 'Đùi được lấy từ gà nông nghiệp an toàn và nhiều dinh dưỡng', 80000, 'active', 450, 30, 1, '2023-03-06 00:00:00', NULL, NULL, 'Đùi gà, bột chiên giòn, bột chiên xù, gia vị.', 'duiga.jpeg'),
(44, 'Cánh gà chiên', 'Cánh được lấy từ gà nông nghiệp an toàn và nhiều dinh dưỡng', 60000, 'active', 400, 30, 1, '2023-03-06 00:00:00', NULL, NULL, 'Cánh gà, bột chiên giòn, bột chiên xù, gia vị.', 'canhgachien.jpg'),
(45, 'Khoai tây chiên ', 'Sản phẩm luôn dành được nhiều sự yêu thích từ trẻ nhỏ ', 30000, 'active', 250, 15, 1, '2023-03-06 00:00:00', NULL, NULL, 'Khoai tây, dầu lạc', 'khoaitaychien.jpeg'),
(46, 'Mực chiên ', 'Mực trứng nhập trực tiếp ở các vùng biển luôn tươi ngon', 80000, 'active', 200, 30, 1, '2023-03-06 00:00:00', NULL, NULL, 'Mực tươi , dầu lạc', 'mucchien.jpeg'),
(47, 'Thịt xiên', 'Sản phẩm luôn dành được nhiều sự yêu thích từ trẻ nhỏ ', 50000, 'active', 250, 30, 1, '2023-03-06 00:00:00', NULL, NULL, 'Thịt lợn, gia vị', 'thitxien.webp'),
(48, 'Xúc xích', 'Sản phẩm luôn dành được nhiều sự yêu thích từ trẻ nhỏ ', 40000, 'active', 300, 20, 1, '2023-03-06 00:00:00', NULL, NULL, 'Thịt hun khói, gia vị', 'xucxich.jpeg'),
(49, 'Pizza phô mai', 'Nguyên liệu sạch, bánh được nướng giòn và đậm vị', 100000, 'active', 400, 30, 1, '2023-03-06 00:00:00', NULL, NULL, 'bột mì, phô mai, gia vị', 'pizzaphomai.jpg'),
(50, 'Pizza ngô bò', 'Nguyên liệu sạch, bánh được nướng giòn và đậm vị', 150000, 'active', 300, 30, 1, '2023-03-06 00:00:00', NULL, NULL, 'Bột mì, thịt bò bằm, phô mai, ngô, gia vị.', 'xucxich.jpeg'),
(51, 'Pizza nấm', 'Nguyên liệu sạch, bánh được nướng giòn và đậm vị', 150000, 'active', 250, 30, 1, '2023-03-06 00:00:00', NULL, NULL, 'Bột mì, nấm đông cô, phô mai, gia vị.', 'pizza.jpeg'),
(52, 'Pizza gà', 'Nguyên liệu sạch, bánh được nướng giòn và đậm vị', 100000, 'active', 250, 30, 1, '2023-03-06 00:00:00', NULL, NULL, 'Bột mì, thịt gà, phô mai, gia vị.', 'pizzaga.jpg'),
(53, 'Pizza xúc xích', 'Nguyên liệu sạch, bánh được nướng giòn và đậm vị', 100000, 'active', 400, 30, 1, '2023-03-06 00:00:00', NULL, NULL, 'Bột mì, xúc xích, phô mai, gia vị.', 'pizzaxucxich.jpg'),
(54, 'Pizza phở', 'Nguyên liệu sạch, bánh được nướng giòn và đậm vị', 120000, 'active', 300, 30, 1, '2023-03-06 00:00:00', NULL, NULL, 'Bột mì, thịt bò, phô mai, gia vị.', 'pizzapho.jpg'),
(55, 'Nước ép bí đao', 'Món nước bí đao này chính là trợ thủ đắc lực, rất tốt cho quá trình giảm cân mà bạn nên thử ngay đó!', 50000, 'active', 50, 20, 2, '2023-03-06 00:00:00', NULL, NULL, 'Bí đao ,đường', 'epbidao.jpeg'),
(56, 'Ép bí đỏ', 'Bí đỏ thì cũng có thể chế biến thành những ly nước ép thơm ngon, bổ dưỡng nữa đấy!', 40000, 'active', 60, 20, 2, '2023-03-06 00:00:00', NULL, NULL, 'Bí đỏ, đường', 'epbido.jpeg'),
(57, 'Ép cà chua', 'Nước ép là một thức uống rất được ưa chuộng bởi độ tươi mát, giải khát hiệu quả.', 30000, 'active', 40, 20, 2, '2023-03-06 00:00:00', NULL, NULL, 'Cà chua ,đường', 'epcachua.jpeg'),
(58, 'Ép cà rốt', 'Ép cà rốt thanh mát để bù nước, bù khoáng chất và tăng cường sức đề kháng nhé!', 30000, 'active', 50, 20, 2, '2023-03-06 00:00:00', NULL, NULL, 'Cà rốt,đường,chanh', 'epcarot.jpeg'),
(59, 'Ép cóc', 'Ép cóc vị chua nhẹ với nhiều vitamin C lợi ích cho sức khỏe rất phù hợp để giải khát ', 40000, 'active', 50, 20, 2, '2023-03-06 00:00:00', NULL, NULL, 'Cóc ,đường', 'epcoc.jpeg'),
(60, 'Ép đào', 'Có nhiều vitamin vừa tốt cho làn da lại còn giúp bạn giải nhiệt cực đã', 50000, 'active', 50, 30, 2, '2023-03-06 00:00:00', NULL, NULL, 'Đào, đường ăn kiêng', 'epdao.jpeg'),
(61, 'Ép dưa lưới', 'Có nhiều vitamin vừa tốt cho làn da lại còn giúp bạn giải nhiệt cực đã', 60000, 'active', 50, 20, 2, '2023-03-06 00:00:00', NULL, NULL, 'Dưa lưới,đường ăn kiêng', 'epdualuoi.jpeg'),
(62, 'Ép lựu', 'Lựu nhập tươi ,cung cấp vitamin cực tốt cho sức khỏe và làn da.', 50000, 'active', 50, 20, 2, '2023-03-06 00:00:00', NULL, NULL, 'Lựu ,đường', 'epluu.jpeg'),
(63, 'Ép mận', 'Mận nhập tươi ,cung cấp vitamin cực tốt cho sức khỏe và làn da.', 50000, 'active', 50, 20, 2, '2023-03-06 00:00:00', NULL, NULL, 'Mận đường', 'epman.jpeg'),
(64, 'Ép quýt', 'Quýt nhập tươi ,cung cấp vitamin cực tốt cho sức khỏe và làn da.', 50000, 'active', 50, 20, 2, '2023-03-06 00:00:00', NULL, NULL, 'Quýt,mật ong', 'epquyt.jpeg'),
(65, 'Bánh hạt tổng hợp', 'Các loại hạt sấy theo công nghệ nhập khẩu,giàu protein', 50000, 'active', 60, 14, 4, '2023-03-06 00:00:00', NULL, NULL, 'Óc chó,hạnh nhân', 'banhHat.jpeg'),
(66, 'Cháo gà', 'Gà nuôi theo tiêu chuẩn sạch, ức gà giúp giảm cân', 30000, 'active', 50, 30, 4, '2023-03-06 00:00:00', NULL, NULL, 'Ức gà , gia vị', 'chaoGa.jpeg'),
(67, 'Cháo yến mạch', 'Tốt cho người huyết áp cao lượng calo thấp', 50000, 'active', 50, 20, 4, '2023-03-06 00:00:00', NULL, NULL, 'Yến mạch, hương liệu', 'chaoYenMach.jpeg'),
(68, 'Chè hạt sen', 'Tốt cho người hay mất ngủ , mát thích hợp vào mùa nóng', 50000, 'active', 80, 5, 4, '2023-03-06 00:00:00', NULL, NULL, 'Hạt sen, long nhãn', 'cheHatSen.jpeg'),
(69, 'Đậu luộc', 'Ngon nhanh no hỗ chợ tốt cho người ăn kiêng', 50000, 'active', 69, 5, 4, '2023-03-06 00:00:00', NULL, NULL, 'Đậu,muối', 'dauLuoc.jpeg'),
(70, 'Sữa chua hoa quả', 'Hoa quả sạch, sản phẩm được nhiều người yêu thích', 50000, 'active', 50, 15, 4, '2023-03-06 00:00:00', NULL, NULL, 'Sữa chua ,dâu tây,xoài', 'suaChuaHoaQua.jpeg'),
(71, 'Súp gà', 'Gà đồi, nấm đông cô tốt cho người suy nhược', 80000, 'active', 140, 30, 4, '2023-03-06 00:00:00', NULL, NULL, 'Nấm ,ngô, gà tươi', 'supGa.jpeg'),
(72, 'Bánh Akido', 'Sản xuất theo công nghệ Nhật Bản bánh ngon', 50000, 'active', 250, 5, 3, '2023-03-06 00:00:00', NULL, NULL, 'Bột mì,socola', 'banhAkido.jpeg'),
(73, 'Bánh bông lan', 'Đủ các mẫu bánh bông lan, bánh mì tươi có nhân và ko nhân hot nhất thị trường .', 30000, 'active', 200, 20, 3, '2023-03-06 00:00:00', NULL, NULL, 'kem,trứng,bột mì', 'banhBonglan.jpeg'),
(74, 'Bánh cam', ' Bánh được chế biến theo công thức truyền thống ,hương vị thơm ngon,đảm bảo vệ sinh an toàn thực phẩm,', 60000, 'active', 150, 15, 3, '2023-03-06 00:00:00', NULL, NULL, 'Bột mì ,vừng', 'banhCam.jpeg'),
(75, 'Bánh chuối', 'Bánh ngon Bánh tươi, không chất bảo quản.', 30000, 'active', 200, 20, 3, '2023-03-06 00:00:00', NULL, NULL, 'Bột mì ,hương liệu', 'banhChuoi.jpeg'),
(76, 'Bánh phô mai', 'Bánh ngon Bánh tươi, không chất bảo quản.', 30000, 'active', 120, 10, 3, '2023-03-06 00:00:00', NULL, NULL, 'Phô mai,bột mì', 'banhFlan.jpeg'),
(77, 'Bánh Pía', 'Bánh ngon Bánh tươi, không chất bảo quản.', 50000, 'active', 150, 20, 3, '2023-03-06 00:00:00', NULL, NULL, 'Bột mì, hương liệu', 'banhPia.jpeg'),
(78, 'Pudding phô mai', 'Món ăn mới lạ calo thấp', 80000, 'active', 120, 20, 3, '2023-03-06 00:00:00', NULL, NULL, 'Phô mai ,hoa quả', 'puddingPhomai.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_address_account` (`address_id`);

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_city_address` (`city_id`),
  ADD KEY `fk_district_address` (`district_id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_city_district` (`city_id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_address_location` (`address_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_account_order` (`account_id`),
  ADD KEY `fk_location_order` (`location_id`),
  ADD KEY `fk_address_order` (`address_id`);

--
-- Indexes for table `order_item`
--
ALTER TABLE `order_item`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_product_order_item` (`product_id`),
  ADD KEY `fk_order_order_item` (`order_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_category_product` (`category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `order_item`
--
ALTER TABLE `order_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `account`
--
ALTER TABLE `account`
  ADD CONSTRAINT `fk_address_account` FOREIGN KEY (`address_id`) REFERENCES `address` (`id`);

--
-- Constraints for table `address`
--
ALTER TABLE `address`
  ADD CONSTRAINT `fk_city_address` FOREIGN KEY (`city_id`) REFERENCES `city` (`id`),
  ADD CONSTRAINT `fk_district_address` FOREIGN KEY (`district_id`) REFERENCES `district` (`id`);

--
-- Constraints for table `district`
--
ALTER TABLE `district`
  ADD CONSTRAINT `fk_city_district` FOREIGN KEY (`city_id`) REFERENCES `city` (`id`);

--
-- Constraints for table `location`
--
ALTER TABLE `location`
  ADD CONSTRAINT `fk_address_location` FOREIGN KEY (`address_id`) REFERENCES `address` (`id`);

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `fk_account_order` FOREIGN KEY (`account_id`) REFERENCES `account` (`id`),
  ADD CONSTRAINT `fk_address_order` FOREIGN KEY (`address_id`) REFERENCES `address` (`id`),
  ADD CONSTRAINT `fk_location_order` FOREIGN KEY (`location_id`) REFERENCES `location` (`id`);

--
-- Constraints for table `order_item`
--
ALTER TABLE `order_item`
  ADD CONSTRAINT `fk_order_order_item` FOREIGN KEY (`order_id`) REFERENCES `order` (`id`),
  ADD CONSTRAINT `fk_product_order_item` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `fk_category_product` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
