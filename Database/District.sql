-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 13, 2023 at 02:56 PM
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
-- Database: `QuickSnacks`
--

-- --------------------------------------------------------

--
-- Table structure for table `District`
--

CREATE TABLE `District` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `city_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `District`
--

INSERT INTO `District` (`id`, `name`, `city_id`) VALUES
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `District`
--
ALTER TABLE `District`
  ADD PRIMARY KEY (`id`),
  ADD KEY `PK_CityDistrict` (`city_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `District`
--
ALTER TABLE `District`
  ADD CONSTRAINT `PK_CityDistrict` FOREIGN KEY (`city_id`) REFERENCES `City` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
