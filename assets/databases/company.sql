-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 30, 2023 at 07:57 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `company`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `date` date DEFAULT curdate(),
  `checkin_time` time DEFAULT current_timestamp(),
  `checkout_time` time DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `approve` varchar(50) NOT NULL DEFAULT 'await'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `employee_id`, `date`, `checkin_time`, `checkout_time`, `status`, `approve`) VALUES
(124, 1, '2023-11-21', '14:57:01', '14:57:11', 'late', 'accept'),
(125, 4, '2023-11-29', '13:12:49', '22:05:16', 'late', 'await');

-- --------------------------------------------------------

--
-- Table structure for table `company_reviews`
--

CREATE TABLE `company_reviews` (
  `id` int(11) NOT NULL,
  `reviewer_id` int(11) NOT NULL,
  `review_date` date NOT NULL,
  `review` text NOT NULL,
  `score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `company_reviews`
--

INSERT INTO `company_reviews` (`id`, `reviewer_id`, `review_date`, `review`, `score`) VALUES
(4, 9, '2023-11-09', 'Company review', 1),
(8, 10, '2023-11-09', 'Company review', 2),
(10, 23, '2023-11-09', 'Company review', 3),
(15, 9, '2023-11-09', 'Company review', 5),
(16, 25, '2023-11-09', 'Company review', 3),
(19, 92, '2023-11-09', 'Company review', 3),
(23, 22, '2023-11-09', 'Company review', 5),
(24, 3, '2023-11-09', 'Company review', 2),
(34, 92, '2023-11-09', 'Company review', 4),
(35, 13, '2023-11-09', 'Company review', 2),
(36, 17, '2023-11-09', 'Company review', 5),
(39, 18, '2023-11-09', 'Company review', 4),
(42, 1, '2023-11-09', 'Company review', 1),
(43, 10, '2023-11-09', 'Company review', 3),
(45, 41, '2023-11-09', 'Company review', 4),
(48, 10, '2023-11-09', 'Company review', 2),
(50, 4, '2023-11-09', 'Company review', 4),
(52, 2, '2023-11-09', 'Company review', 2),
(55, 7, '2023-11-09', 'Company review', 3),
(56, 41, '2023-11-09', 'Company review', 3),
(57, 10, '2023-11-09', 'Company review', 1),
(58, 17, '2023-11-09', 'Company review', 3),
(60, 6, '2023-11-09', 'Company review', 3),
(64, 51, '2023-11-09', 'Company review', 5),
(68, 24, '2023-11-09', 'Company review', 2),
(73, 41, '2023-11-09', 'Company review', 5),
(76, 51, '2023-11-09', 'Company review', 4),
(86, 18, '2023-11-09', 'Company review', 5),
(90, 29, '2023-11-09', 'Company review', 1),
(91, 13, '2023-11-09', 'Company review', 4),
(96, 20, '2023-11-09', 'Company review', 4),
(98, 3, '2023-11-09', 'Company review', 2),
(101, 10, '2023-11-09', 'Company review', 4),
(104, 7, '2023-11-09', 'Company review', 5),
(105, 21, '2023-11-09', 'Company review', 2),
(106, 29, '2023-11-09', 'Company review', 2),
(112, 24, '2023-11-09', 'Company review', 5),
(114, 23, '2023-11-09', 'Company review', 4),
(115, 4, '2023-11-09', 'Company review', 5),
(121, 22, '2023-11-09', 'Company review', 1),
(124, 3, '2023-11-09', 'Company review', 5),
(125, 3, '2023-11-09', 'Company review', 4),
(126, 25, '2023-11-09', 'Company review', 2),
(127, 41, '2023-11-09', 'Company review', 2),
(131, 22, '2023-11-09', 'Company review', 2),
(135, 1, '2023-11-09', 'Company review', 3),
(136, 10, '2023-11-09', 'Company review', 2),
(138, 13, '2023-11-09', 'Company review', 4),
(139, 28, '2023-11-09', 'Company review', 1),
(140, 8, '2023-11-09', 'Company review', 5),
(142, 4, '2023-11-09', 'Company review', 4),
(143, 21, '2023-11-09', 'Company review', 1),
(145, 3, '2023-11-09', 'Company review', 5),
(146, 30, '2023-11-09', 'Company review', 5),
(158, 10, '2023-11-09', 'Company review', 2),
(159, 12, '2023-11-09', 'Company review', 4),
(161, 15, '2023-11-09', 'Company review', 3),
(165, 15, '2023-11-09', 'Company review', 1),
(168, 30, '2023-11-09', 'Company review', 1),
(169, 92, '2023-11-09', 'Company review', 1),
(177, 27, '2023-11-09', 'Company review', 3),
(178, 1, '2023-11-09', 'Company review', 2),
(180, 28, '2023-11-09', 'Company review', 4),
(192, 19, '2023-11-09', 'Company review', 3),
(193, 7, '2023-11-09', 'Company review', 4),
(203, 7, '2023-11-09', 'Company review', 2),
(207, 41, '2023-11-09', 'Company review', 3),
(208, 24, '2023-11-09', 'Company review', 4),
(212, 2, '2023-11-09', 'Company review', 4),
(214, 11, '2023-11-09', 'Company review', 2),
(215, 3, '2023-11-09', 'Company review', 2),
(218, 23, '2023-11-09', 'Company review', 5),
(220, 29, '2023-11-09', 'Company review', 4),
(222, 21, '2023-11-09', 'Company review', 5),
(226, 9, '2023-11-09', 'Company review', 4),
(232, 8, '2023-11-09', 'Company review', 5),
(233, 26, '2023-11-09', 'Company review', 4),
(234, 28, '2023-11-09', 'Company review', 3),
(236, 6, '2023-11-09', 'Company review', 4),
(237, 28, '2023-11-09', 'Company review', 2),
(242, 25, '2023-11-09', 'Company review', 2),
(247, 30, '2023-11-09', 'Company review', 5),
(248, 3, '2023-11-09', 'Company review', 1),
(250, 4, '2023-11-09', 'Company review', 3),
(253, 10, '2023-11-09', 'Company review', 3),
(255, 12, '2023-11-09', 'Company review', 4),
(263, 11, '2023-11-09', 'Company review', 4),
(264, 24, '2023-11-09', 'Company review', 1),
(266, 41, '2023-11-09', 'Company review', 1),
(268, 26, '2023-11-09', 'Company review', 4),
(270, 1, '2023-11-09', 'Company review', 1),
(271, 41, '2023-11-09', 'Company review', 4),
(275, 30, '2023-11-09', 'Company review', 3),
(281, 41, '2023-11-09', 'Company review', 2),
(286, 8, '2023-11-09', 'Company review', 5),
(289, 41, '2023-11-09', 'Company review', 5),
(290, 6, '2023-11-09', 'Company review', 4),
(292, 13, '2023-11-09', 'Company review', 4),
(293, 21, '2023-11-09', 'Company review', 5),
(295, 21, '2023-11-09', 'Company review', 1),
(297, 51, '2023-11-09', 'Company review', 5),
(299, 14, '2023-11-09', 'Company review', 1),
(300, 18, '2023-11-09', 'Company review', 3),
(301, 13, '2023-11-09', 'Company review', 1),
(304, 26, '2023-11-09', 'Company review', 5),
(307, 14, '2023-11-09', 'Company review', 1),
(315, 17, '2023-11-09', 'Company review', 5),
(321, 51, '2023-11-09', 'Company review', 1),
(324, 15, '2023-11-09', 'Company review', 4),
(326, 26, '2023-11-09', 'Company review', 2),
(328, 13, '2023-11-09', 'Company review', 3),
(334, 4, '2023-11-09', 'Company review', 5),
(335, 5, '2023-11-09', 'Company review', 4),
(338, 8, '2023-11-09', 'Company review', 1),
(340, 4, '2023-11-09', 'Company review', 1),
(344, 1, '2023-11-09', 'Company review', 1),
(345, 16, '2023-11-09', 'Company review', 4),
(347, 22, '2023-11-09', 'Company review', 3),
(352, 14, '2023-11-09', 'Company review', 4),
(353, 29, '2023-11-09', 'Company review', 1),
(354, 15, '2023-11-09', 'Company review', 1),
(355, 22, '2023-11-09', 'Company review', 4),
(357, 12, '2023-11-09', 'Company review', 1),
(359, 5, '2023-11-09', 'Company review', 3),
(360, 11, '2023-11-09', 'Company review', 1),
(363, 18, '2023-11-09', 'Company review', 3),
(364, 18, '2023-11-09', 'Company review', 2),
(371, 18, '2023-11-09', 'Company review', 3),
(376, 27, '2023-11-09', 'Company review', 1),
(377, 11, '2023-11-09', 'Company review', 5),
(381, 12, '2023-11-09', 'Company review', 4),
(389, 92, '2023-11-09', 'Company review', 2),
(390, 51, '2023-11-09', 'Company review', 4),
(392, 51, '2023-11-09', 'Company review', 4),
(398, 92, '2023-11-09', 'Company review', 5),
(399, 28, '2023-11-09', 'Company review', 5),
(400, 92, '2023-11-09', 'Company review', 4),
(401, 10, '2023-11-09', 'Company review', 1),
(402, 51, '2023-11-09', 'Company review', 1),
(408, 24, '2023-11-09', 'Company review', 2),
(410, 29, '2023-11-09', 'Company review', 2),
(412, 30, '2023-11-09', 'Company review', 3),
(414, 51, '2023-11-09', 'Company review', 5),
(417, 12, '2023-11-09', 'Company review', 2),
(418, 19, '2023-11-09', 'Company review', 1),
(420, 4, '2023-11-09', 'Company review', 5),
(422, 27, '2023-11-09', 'Company review', 4),
(425, 21, '2023-11-09', 'Company review', 2),
(426, 15, '2023-11-09', 'Company review', 4),
(428, 24, '2023-11-09', 'Company review', 4),
(430, 13, '2023-11-09', 'Company review', 1),
(437, 29, '2023-11-09', 'Company review', 1),
(441, 23, '2023-11-09', 'Company review', 5),
(445, 92, '2023-11-09', 'Company review', 1),
(447, 51, '2023-11-09', 'Company review', 4),
(448, 25, '2023-11-09', 'Company review', 5),
(449, 12, '2023-11-09', 'Company review', 4),
(451, 3, '2023-11-09', 'Company review', 3),
(453, 17, '2023-11-09', 'Company review', 3),
(455, 16, '2023-11-09', 'Company review', 5),
(456, 41, '2023-11-09', 'Company review', 1),
(459, 24, '2023-11-09', 'Company review', 5),
(460, 1, '2023-11-09', 'Company review', 1),
(464, 28, '2023-11-09', 'Company review', 5),
(465, 16, '2023-11-09', 'Company review', 4),
(466, 41, '2023-11-09', 'Company review', 4),
(473, 23, '2023-11-09', 'Company review', 5),
(475, 23, '2023-11-09', 'Company review', 5),
(483, 2, '2023-11-09', 'Company review', 1),
(486, 24, '2023-11-09', 'Company review', 1),
(490, 24, '2023-11-09', 'Company review', 5),
(496, 24, '2023-11-09', 'Company review', 3),
(501, 2, '2023-11-09', 'Company review', 3),
(502, 20, '2023-11-09', 'Company review', 4),
(511, 23, '2023-11-09', 'Company review', 2),
(516, 12, '2023-11-09', 'Company review', 2),
(517, 2, '2023-11-09', 'Company review', 2),
(521, 20, '2023-11-09', 'Company review', 5),
(525, 28, '2023-11-09', 'Company review', 4),
(527, 9, '2023-11-09', 'Company review', 2),
(528, 8, '2023-11-09', 'Company review', 3),
(531, 2, '2023-11-09', 'Company review', 5),
(533, 24, '2023-11-09', 'Company review', 3),
(534, 16, '2023-11-09', 'Company review', 1),
(539, 24, '2023-11-09', 'Company review', 1),
(540, 11, '2023-11-09', 'Company review', 1),
(542, 17, '2023-11-09', 'Company review', 3),
(544, 30, '2023-11-09', 'Company review', 2),
(545, 8, '2023-11-09', 'Company review', 2),
(550, 22, '2023-11-09', 'Company review', 1),
(554, 11, '2023-11-09', 'Company review', 3),
(555, 24, '2023-11-09', 'Company review', 4),
(558, 30, '2023-11-09', 'Company review', 5),
(560, 8, '2023-11-09', 'Company review', 5),
(565, 51, '2023-11-09', 'Company review', 3),
(570, 2, '2023-11-09', 'Company review', 1),
(590, 26, '2023-11-09', 'Company review', 5),
(591, 30, '2023-11-09', 'Company review', 1),
(592, 27, '2023-11-09', 'Company review', 2),
(593, 51, '2023-11-09', 'Company review', 4),
(594, 26, '2023-11-09', 'Company review', 1),
(595, 26, '2023-11-09', 'Company review', 2),
(597, 9, '2023-11-09', 'Company review', 3),
(599, 9, '2023-11-09', 'Company review', 3),
(601, 27, '2023-11-09', 'Company review', 1),
(605, 26, '2023-11-09', 'Company review', 5),
(610, 18, '2023-11-09', 'Company review', 2),
(631, 7, '2023-11-09', 'Company review', 1),
(632, 12, '2023-11-09', 'Company review', 3),
(635, 20, '2023-11-09', 'Company review', 3),
(640, 23, '2023-11-09', 'Company review', 1),
(654, 14, '2023-11-09', 'Company review', 1),
(657, 1, '2023-11-09', 'Company review', 3),
(659, 25, '2023-11-09', 'Company review', 4),
(660, 92, '2023-11-09', 'Company review', 3),
(661, 24, '2023-11-09', 'Company review', 1),
(662, 28, '2023-11-09', 'Company review', 3),
(663, 17, '2023-11-09', 'Company review', 4),
(668, 11, '2023-11-09', 'Company review', 5),
(669, 15, '2023-11-09', 'Company review', 1),
(673, 18, '2023-11-09', 'Company review', 2),
(678, 11, '2023-11-09', 'Company review', 4),
(681, 19, '2023-11-09', 'Company review', 4),
(684, 4, '2023-11-09', 'Company review', 3),
(685, 23, '2023-11-09', 'Company review', 4),
(688, 3, '2023-11-09', 'Company review', 1),
(694, 27, '2023-11-09', 'Company review', 2),
(695, 21, '2023-11-09', 'Company review', 5),
(698, 13, '2023-11-09', 'Company review', 4),
(700, 26, '2023-11-09', 'Company review', 5),
(702, 20, '2023-11-09', 'Company review', 3),
(707, 2, '2023-11-09', 'Company review', 4),
(713, 25, '2023-11-09', 'Company review', 2),
(714, 14, '2023-11-09', 'Company review', 3),
(715, 41, '2023-11-09', 'Company review', 2),
(718, 20, '2023-11-09', 'Company review', 3),
(722, 41, '2023-11-09', 'Company review', 1),
(723, 26, '2023-11-09', 'Company review', 5),
(724, 16, '2023-11-09', 'Company review', 5),
(728, 26, '2023-11-09', 'Company review', 2),
(730, 14, '2023-11-09', 'Company review', 3),
(732, 20, '2023-11-09', 'Company review', 1),
(734, 25, '2023-11-09', 'Company review', 1),
(736, 13, '2023-11-09', 'Company review', 3),
(737, 20, '2023-11-09', 'Company review', 3),
(739, 30, '2023-11-09', 'Company review', 5),
(741, 24, '2023-11-09', 'Company review', 3),
(744, 6, '2023-11-09', 'Company review', 4),
(745, 14, '2023-11-09', 'Company review', 4),
(746, 9, '2023-11-09', 'Company review', 2),
(748, 22, '2023-11-09', 'Company review', 2),
(750, 27, '2023-11-09', 'Company review', 3),
(752, 9, '2023-11-09', 'Company review', 5),
(754, 29, '2023-11-09', 'Company review', 1),
(755, 23, '2023-11-09', 'Company review', 1),
(758, 9, '2023-11-09', 'Company review', 5),
(764, 41, '2023-11-09', 'Company review', 5),
(775, 29, '2023-11-09', 'Company review', 5),
(777, 8, '2023-11-09', 'Company review', 2),
(778, 41, '2023-11-09', 'Company review', 1),
(779, 2, '2023-11-09', 'Company review', 5),
(782, 17, '2023-11-09', 'Company review', 4),
(787, 15, '2023-11-09', 'Company review', 5),
(788, 29, '2023-11-09', 'Company review', 4),
(789, 21, '2023-11-09', 'Company review', 1),
(791, 25, '2023-11-09', 'Company review', 1),
(794, 17, '2023-11-09', 'Company review', 2),
(795, 21, '2023-11-09', 'Company review', 1),
(797, 22, '2023-11-09', 'Company review', 5),
(800, 6, '2023-11-09', 'Company review', 3),
(812, 7, '2023-11-09', 'Company review', 1),
(813, 6, '2023-11-09', 'Company review', 1),
(815, 51, '2023-11-09', 'Company review', 2),
(816, 1, '2023-11-09', 'Company review', 1),
(819, 4, '2023-11-09', 'Company review', 2),
(823, 17, '2023-11-09', 'Company review', 1),
(824, 15, '2023-11-09', 'Company review', 2),
(825, 22, '2023-11-09', 'Company review', 1),
(835, 7, '2023-11-09', 'Company review', 4),
(839, 28, '2023-11-09', 'Company review', 5),
(844, 22, '2023-11-09', 'Company review', 4),
(847, 19, '2023-11-09', 'Company review', 1),
(849, 5, '2023-11-09', 'Company review', 1),
(852, 23, '2023-11-09', 'Company review', 3),
(855, 22, '2023-11-09', 'Company review', 1),
(863, 26, '2023-11-09', 'Company review', 1),
(864, 3, '2023-11-09', 'Company review', 4),
(865, 15, '2023-11-09', 'Company review', 4),
(868, 1, '2023-11-09', 'Company review', 5),
(869, 2, '2023-11-09', 'Company review', 4),
(873, 12, '2023-11-09', 'Company review', 4),
(875, 5, '2023-11-09', 'Company review', 5),
(879, 16, '2023-11-09', 'Company review', 1),
(885, 23, '2023-11-09', 'Company review', 4),
(889, 41, '2023-11-09', 'Company review', 4),
(891, 92, '2023-11-09', 'Company review', 1),
(893, 51, '2023-11-09', 'Company review', 3),
(896, 9, '2023-11-09', 'Company review', 3),
(898, 19, '2023-11-09', 'Company review', 5),
(902, 15, '2023-11-09', 'Company review', 1),
(906, 20, '2023-11-09', 'Company review', 1),
(908, 12, '2023-11-09', 'Company review', 1),
(914, 12, '2023-11-09', 'Company review', 3),
(922, 9, '2023-11-09', 'Company review', 3),
(927, 27, '2023-11-09', 'Company review', 1),
(928, 11, '2023-11-09', 'Company review', 1),
(933, 16, '2023-11-09', 'Company review', 5),
(937, 12, '2023-11-09', 'Company review', 4),
(941, 13, '2023-11-09', 'Company review', 4),
(942, 12, '2023-11-09', 'Company review', 3),
(943, 13, '2023-11-09', 'Company review', 1),
(947, 29, '2023-11-09', 'Company review', 4),
(951, 6, '2023-11-09', 'Company review', 5),
(953, 10, '2023-11-09', 'Company review', 2),
(954, 5, '2023-11-09', 'Company review', 3),
(955, 5, '2023-11-09', 'Company review', 5),
(957, 8, '2023-11-09', 'Company review', 4),
(959, 14, '2023-11-09', 'Company review', 2),
(960, 7, '2023-11-09', 'Company review', 3),
(961, 8, '2023-11-09', 'Company review', 1),
(963, 16, '2023-11-09', 'Company review', 4),
(967, 23, '2023-11-09', 'Company review', 2),
(968, 13, '2023-11-09', 'Company review', 3),
(969, 26, '2023-11-09', 'Company review', 4),
(971, 41, '2023-11-09', 'Company review', 3),
(974, 12, '2023-11-09', 'Company review', 4),
(975, 11, '2023-11-09', 'Company review', 3),
(977, 17, '2023-11-09', 'Company review', 4),
(981, 9, '2023-11-09', 'Company review', 2),
(982, 12, '2023-11-09', 'Company review', 4),
(983, 51, '2023-11-09', 'Company review', 2),
(1000, 5, '2023-11-09', 'Company review', 2);

-- --------------------------------------------------------

--
-- Table structure for table `contact_infomation`
--

CREATE TABLE `contact_infomation` (
  `id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `phone_number` varchar(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `location` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_infomation`
--

INSERT INTO `contact_infomation` (`id`, `employee_id`, `phone_number`, `email`, `location`) VALUES
(1, 1, '0538060873', 'employee1@company.com', 'Location 5'),
(2, 2, '0144627774', 'employee2@company.com', 'Location 5'),
(3, 3, '0905380127', 'employee3@company.com', 'Location 5'),
(4, 4, '0900572737', 'employee4@company.com', 'Location 4'),
(5, 5, '0962461139', 'employee5@company.com', 'Location 4'),
(6, 6, '0181607297', 'employee6@company.com', 'Location 1'),
(7, 7, '0788388674', 'employee7@company.com', 'Location 4'),
(8, 8, '0344919419', 'employee8@company.com', 'Location 3'),
(9, 9, '0457971168', 'employee9@company.com', 'Location 4'),
(10, 10, '0597177698', 'employee10@company.com', 'Location 4'),
(11, 11, '0224636040', 'employee11@company.com', 'Location 2'),
(12, 12, '0893485763', 'employee12@company.com', 'Location 3'),
(13, 13, '0954505406', 'employee13@company.com', 'Location 1'),
(14, 14, '094231128', 'employee14@company.com', 'Location 5'),
(15, 15, '0199843066', 'employee15@company.com', 'Location 2'),
(16, 16, '0948938389', 'employee16@company.com', 'Location 5'),
(17, 17, '0231242070', 'employee17@company.com', 'Location 4'),
(18, 18, '0853154106', 'employee18@company.com', 'Location 1'),
(19, 19, '0128749675', 'employee19@company.com', 'Location 2'),
(20, 20, '0767857144', 'employee20@company.com', 'Location 1'),
(21, 21, '0430538942', 'employee21@company.com', 'Location 4'),
(22, 22, '0269525884', 'employee22@company.com', 'Location 2'),
(23, 23, '0246141607', 'employee23@company.com', 'Location 3'),
(24, 24, '0250957848', 'employee24@company.com', 'Location 3'),
(25, 25, '0552924938', 'employee25@company.com', 'Location 2'),
(26, 26, '0246953461', 'employee26@company.com', 'Location 1'),
(27, 27, '0715791603', 'employee27@company.com', 'Location 2'),
(28, 28, '0377459585', 'employee28@company.com', 'Location 5'),
(29, 29, '0729607963', 'employee29@company.com', 'Location 4'),
(30, 30, '0465415320', 'employee30@company.com', 'Location 1'),
(41, 41, '0284448446', 'employee41@company.com', 'Location 5'),
(51, 51, '0822572707', 'employee51@company.com', 'Location 5'),
(92, 92, '0946015988', 'employee92@company.com', 'Location 5');

-- --------------------------------------------------------

--
-- Table structure for table `contracts`
--

CREATE TABLE `contracts` (
  `id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `contract_type` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `contract_code` varchar(50) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contracts`
--

INSERT INTO `contracts` (`id`, `employee_id`, `contract_type`, `content`, `start_date`, `end_date`, `contract_code`, `name`) VALUES
(1, 1, 'Full-time', 'Contract content', '2011-01-01', '2015-01-01', '', ''),
(2, 2, 'Full-time', 'Contract content', '2012-01-01', '2012-01-01', '', ''),
(3, 3, 'Full-time', 'Contract content', '2012-01-01', '2018-01-01', '', ''),
(4, 4, 'Part-time', 'Contract content', '2016-01-01', '2013-01-01', '', ''),
(5, 5, 'Full-time', 'Contract content', '2012-01-01', '2018-01-01', '', ''),
(6, 6, 'Intern', 'Contract content', '2017-01-01', '2017-01-01', '', ''),
(7, 7, 'Full-time', 'Contract content', '2015-01-01', '2018-01-01', '', ''),
(8, 8, 'Part-time', 'Contract content', '2019-01-01', '2019-01-01', '', ''),
(9, 9, 'Part-time', 'Contract content', '2016-01-01', '2016-01-01', '', ''),
(10, 10, 'Full-time', 'Contract content', '2018-01-01', '2013-01-01', '', ''),
(11, 11, 'Full-time', 'Contract content', '2010-01-01', '2012-01-01', '', ''),
(12, 12, 'Full-time', 'Contract content', '2014-01-01', '2012-01-01', '', ''),
(13, 13, 'Full-time', 'Contract content', '2015-01-01', '2015-01-01', '', ''),
(14, 14, 'Full-time', 'Contract content', '2014-01-01', '2013-01-01', '', ''),
(15, 15, 'Full-time', 'Contract content', '2014-01-01', '2013-01-01', '', ''),
(16, 16, 'Part-time', 'Contract content', '2010-01-01', '2011-01-01', '', ''),
(17, 17, 'Full-time', 'Contract content', '2016-01-01', '2011-01-01', '', ''),
(18, 18, 'Part-time', 'Contract content', '2013-01-01', '2016-01-01', '', ''),
(19, 19, 'Full-time', 'Contract content', '2017-01-01', '2012-01-01', '', ''),
(20, 20, 'Full-time', 'Contract content', '2015-01-01', '2013-01-01', '', ''),
(21, 21, 'Full-time', 'Contract content', '2010-01-01', '2019-01-01', '', ''),
(22, 22, 'Intern', 'Contract content', '2019-01-01', '2018-01-01', '', ''),
(23, 23, 'Full-time', 'Contract content', '2013-01-01', '2018-01-01', '', ''),
(24, 24, 'Full-time', 'Contract content', '2013-01-01', '2010-01-01', '', ''),
(25, 25, 'Full-time', 'Contract content', '2019-01-01', '2013-01-01', '', ''),
(26, 26, 'Full-time', 'Contract content', '2011-01-01', '2016-01-01', '', ''),
(27, 27, 'Part-time', 'Contract content', '2016-01-01', '2011-01-01', '', ''),
(28, 28, 'Part-time', 'Contract content', '2012-01-01', '2012-01-01', '', ''),
(29, 29, 'Intern', 'Contract content', '2017-01-01', '2011-01-01', '', ''),
(30, 30, 'Full-time', 'Contract content', '2010-01-01', '2013-01-01', '', ''),
(41, 41, 'Part-time', 'Contract content', '2016-01-01', '2013-01-01', '', ''),
(51, 51, 'Full-time', 'Contract content', '2013-01-01', '2012-01-01', '', ''),
(92, 92, 'Full-time', 'Contract content', '2010-01-01', '2010-01-01', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `manager_id` int(11) DEFAULT 0,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`, `manager_id`, `description`) VALUES
(1, 'Kỹ thuật', 1, 'Phòng ban Kỹ thuật chịu trách nhiệm phát triển và duy trì sản phẩm công nghệ của công ty. Các nhóm trong phòng ban này chuyên về việc phát triển phần mềm, nghiên cứu và phát triển sản phẩm, thiết kế sản phẩm, và quản lý dự án. Nhiệm vụ của phòng ban này là đảm bảo sản phẩm công nghệ của công ty luôn ổn định, cải tiến và đáp ứng nhu cầu của khách hàng.'),
(2, 'Kinh doanh', 15, 'Phòng ban Kinh doanh chịu trách nhiệm phát triển chiến lược kinh doanh, tiếp thị sản phẩm và dịch vụ, quản lý quan hệ khách hàng, và đảm bảo công ty đạt được lợi nhuận và tăng trưởng. Nhiệm vụ của họ là tạo cơ hội kinh doanh, tìm kiếm khách hàng mới, và duy trì mối quan hệ với khách hàng hiện tại.'),
(3, 'Tài chính', 92, 'Phòng ban Tài chính quản lý tài chính và nguồn vốn của công ty. Họ thực hiện kế toán, quản lý nguồn vốn, thu thuế, và quản lý ngân sách. Nhiệm vụ chính là đảm bảo công ty duy trì tình hình tài chính ổn định và tăng trưởng bền vững.'),
(4, 'Quản lý sản phẩm', 12, 'Phòng ban Quản lý sản phẩm có nhiệm vụ định hình và quản lý sản phẩm hoặc dịch vụ của công ty để đáp ứng nhu cầu của khách hàng và chiến lược kinh doanh. Họ thường là cầu nối giữa phòng Kỹ thuật và Kinh doanh.'),
(5, 'Hỗ trợ khách hàng', 14, 'Phòng ban Hỗ trợ khách hàng chịu trách nhiệm cung cấp dịch vụ hỗ trợ và giải quyết vấn đề cho khách hàng. Họ đảm bảo khách hàng nhận được sự hỗ trợ và giúp đỡ khi cần.'),
(6, 'Tài nguyên nhân sự', 13, 'Phòng ban Tài nguyên nhân sự quản lý các vấn đề liên quan đến nhân viên, bao gồm tuyển dụng, đào tạo, quản lý mối quan hệ lao động, và chế độ phúc lợi.'),
(7, 'Luật pháp và Bảo mật', 41, 'Phòng ban Luật pháp và Bảo mật đảm bảo công ty tuân thủ tất cả các quy định pháp lý và bảo vệ thông tin quan trọng của công ty.'),
(8, 'Quản lý dự án', 51, 'Phòng ban Quản lý dự án quản lý việc thực hiện và tiến độ các dự án cụ thể trong công ty, đảm bảo chúng được triển khai một cách hiệu quả và đúng hẹn.');

-- --------------------------------------------------------

--
-- Table structure for table `department_reviews`
--

CREATE TABLE `department_reviews` (
  `id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `reviewer_id` int(11) NOT NULL,
  `review_date` date NOT NULL,
  `review` text NOT NULL,
  `score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `department_reviews`
--

INSERT INTO `department_reviews` (`id`, `department_id`, `reviewer_id`, `review_date`, `review`, `score`) VALUES
(5, 1, 15, '2023-11-09', 'Department review', 4),
(6, 7, 6, '2023-11-09', 'Department review', 5),
(16, 5, 28, '2023-11-09', 'Department review', 4),
(20, 3, 23, '2023-11-09', 'Department review', 1),
(21, 8, 7, '2023-11-09', 'Department review', 4),
(22, 2, 6, '2023-11-09', 'Department review', 4),
(23, 8, 1, '2023-11-09', 'Department review', 1),
(24, 4, 14, '2023-11-09', 'Department review', 2),
(28, 3, 27, '2023-11-09', 'Department review', 2),
(30, 2, 24, '2023-11-09', 'Department review', 3),
(32, 1, 3, '2023-11-09', 'Department review', 4),
(34, 1, 92, '2023-11-09', 'Department review', 2),
(39, 1, 4, '2023-11-09', 'Department review', 5),
(40, 7, 26, '2023-11-09', 'Department review', 4),
(41, 1, 92, '2023-11-09', 'Department review', 3),
(42, 6, 16, '2023-11-09', 'Department review', 3),
(45, 5, 6, '2023-11-09', 'Department review', 4),
(47, 1, 14, '2023-11-09', 'Department review', 3),
(50, 4, 15, '2023-11-09', 'Department review', 3),
(53, 5, 23, '2023-11-09', 'Department review', 2),
(54, 7, 15, '2023-11-09', 'Department review', 2),
(56, 8, 51, '2023-11-09', 'Department review', 5),
(64, 7, 41, '2023-11-09', 'Department review', 3),
(67, 8, 14, '2023-11-09', 'Department review', 5),
(77, 5, 1, '2023-11-09', 'Department review', 2),
(78, 4, 13, '2023-11-09', 'Department review', 3),
(80, 3, 2, '2023-11-09', 'Department review', 2),
(84, 2, 7, '2023-11-09', 'Department review', 4),
(86, 6, 28, '2023-11-09', 'Department review', 2),
(87, 1, 20, '2023-11-09', 'Department review', 4),
(89, 4, 8, '2023-11-09', 'Department review', 1),
(90, 3, 2, '2023-11-09', 'Department review', 2),
(92, 3, 22, '2023-11-09', 'Department review', 1),
(93, 6, 29, '2023-11-09', 'Department review', 2),
(94, 7, 15, '2023-11-09', 'Department review', 2),
(99, 8, 18, '2023-11-09', 'Department review', 1),
(103, 4, 92, '2023-11-09', 'Department review', 1),
(107, 1, 26, '2023-11-09', 'Department review', 1),
(109, 2, 10, '2023-11-09', 'Department review', 4),
(114, 4, 8, '2023-11-09', 'Department review', 1),
(115, 1, 92, '2023-11-09', 'Department review', 3),
(116, 2, 15, '2023-11-09', 'Department review', 1),
(120, 4, 15, '2023-11-09', 'Department review', 3),
(122, 4, 1, '2023-11-09', 'Department review', 3),
(127, 7, 9, '2023-11-09', 'Department review', 1),
(130, 2, 21, '2023-11-09', 'Department review', 3),
(139, 2, 26, '2023-11-09', 'Department review', 5),
(142, 2, 7, '2023-11-09', 'Department review', 5),
(143, 8, 7, '2023-11-09', 'Department review', 4),
(158, 1, 24, '2023-11-09', 'Department review', 1),
(163, 3, 26, '2023-11-09', 'Department review', 1),
(164, 2, 12, '2023-11-09', 'Department review', 2),
(166, 6, 27, '2023-11-09', 'Department review', 1),
(167, 6, 25, '2023-11-09', 'Department review', 1),
(168, 8, 1, '2023-11-09', 'Department review', 2),
(169, 8, 30, '2023-11-09', 'Department review', 5),
(171, 3, 19, '2023-11-09', 'Department review', 1),
(174, 2, 7, '2023-11-09', 'Department review', 4),
(178, 8, 23, '2023-11-09', 'Department review', 1),
(183, 8, 16, '2023-11-09', 'Department review', 1),
(184, 3, 22, '2023-11-09', 'Department review', 1),
(186, 3, 7, '2023-11-09', 'Department review', 3),
(192, 6, 13, '2023-11-09', 'Department review', 4),
(193, 3, 20, '2023-11-09', 'Department review', 1),
(194, 1, 13, '2023-11-09', 'Department review', 2),
(195, 1, 51, '2023-11-09', 'Department review', 2),
(198, 6, 5, '2023-11-09', 'Department review', 2),
(209, 7, 4, '2023-11-09', 'Department review', 4),
(210, 3, 25, '2023-11-09', 'Department review', 3),
(219, 2, 6, '2023-11-09', 'Department review', 5),
(222, 1, 41, '2023-11-09', 'Department review', 5),
(228, 5, 12, '2023-11-09', 'Department review', 5),
(232, 4, 29, '2023-11-09', 'Department review', 1),
(236, 4, 20, '2023-11-09', 'Department review', 3),
(238, 3, 24, '2023-11-09', 'Department review', 2),
(240, 5, 12, '2023-11-09', 'Department review', 5),
(245, 1, 25, '2023-11-09', 'Department review', 5),
(246, 7, 15, '2023-11-09', 'Department review', 3),
(247, 6, 15, '2023-11-09', 'Department review', 4),
(250, 5, 16, '2023-11-09', 'Department review', 1),
(252, 3, 21, '2023-11-09', 'Department review', 1),
(253, 4, 9, '2023-11-09', 'Department review', 1),
(254, 5, 28, '2023-11-09', 'Department review', 4),
(259, 5, 6, '2023-11-09', 'Department review', 3),
(275, 4, 24, '2023-11-09', 'Department review', 4),
(277, 4, 20, '2023-11-09', 'Department review', 4),
(279, 8, 17, '2023-11-09', 'Department review', 2),
(282, 1, 3, '2023-11-09', 'Department review', 5),
(283, 5, 24, '2023-11-09', 'Department review', 2),
(284, 1, 3, '2023-11-09', 'Department review', 1),
(287, 6, 9, '2023-11-09', 'Department review', 3),
(289, 8, 24, '2023-11-09', 'Department review', 3),
(295, 8, 24, '2023-11-09', 'Department review', 3),
(301, 2, 1, '2023-11-09', 'Department review', 2),
(302, 4, 12, '2023-11-09', 'Department review', 3),
(325, 3, 14, '2023-11-09', 'Department review', 5),
(334, 8, 13, '2023-11-09', 'Department review', 5),
(346, 5, 4, '2023-11-09', 'Department review', 3),
(349, 4, 10, '2023-11-09', 'Department review', 2),
(350, 7, 16, '2023-11-09', 'Department review', 3),
(351, 2, 18, '2023-11-09', 'Department review', 3),
(352, 6, 4, '2023-11-09', 'Department review', 1),
(353, 6, 9, '2023-11-09', 'Department review', 2),
(356, 4, 27, '2023-11-09', 'Department review', 1),
(358, 2, 26, '2023-11-09', 'Department review', 5),
(371, 5, 28, '2023-11-09', 'Department review', 5),
(372, 5, 3, '2023-11-09', 'Department review', 3),
(373, 5, 15, '2023-11-09', 'Department review', 1),
(375, 3, 19, '2023-11-09', 'Department review', 5),
(381, 8, 29, '2023-11-09', 'Department review', 4),
(382, 1, 4, '2023-11-09', 'Department review', 5),
(387, 3, 23, '2023-11-09', 'Department review', 2),
(388, 7, 30, '2023-11-09', 'Department review', 5),
(390, 5, 6, '2023-11-09', 'Department review', 4),
(391, 6, 21, '2023-11-09', 'Department review', 5),
(392, 8, 6, '2023-11-09', 'Department review', 3),
(393, 8, 23, '2023-11-09', 'Department review', 3),
(395, 2, 22, '2023-11-09', 'Department review', 2),
(397, 8, 13, '2023-11-09', 'Department review', 5),
(399, 8, 51, '2023-11-09', 'Department review', 4),
(403, 3, 28, '2023-11-09', 'Department review', 3),
(411, 3, 18, '2023-11-09', 'Department review', 1),
(412, 8, 21, '2023-11-09', 'Department review', 2),
(416, 7, 18, '2023-11-09', 'Department review', 2),
(417, 1, 23, '2023-11-09', 'Department review', 1),
(418, 4, 10, '2023-11-09', 'Department review', 2),
(421, 2, 27, '2023-11-09', 'Department review', 4),
(424, 8, 14, '2023-11-09', 'Department review', 5),
(427, 3, 3, '2023-11-09', 'Department review', 2),
(428, 2, 92, '2023-11-09', 'Department review', 2),
(430, 3, 27, '2023-11-09', 'Department review', 2),
(439, 6, 24, '2023-11-09', 'Department review', 1),
(441, 6, 51, '2023-11-09', 'Department review', 3),
(442, 8, 30, '2023-11-09', 'Department review', 4),
(443, 2, 4, '2023-11-09', 'Department review', 4),
(445, 4, 26, '2023-11-09', 'Department review', 1),
(448, 8, 5, '2023-11-09', 'Department review', 3),
(452, 2, 51, '2023-11-09', 'Department review', 1),
(460, 6, 21, '2023-11-09', 'Department review', 5),
(462, 1, 92, '2023-11-09', 'Department review', 3),
(466, 5, 15, '2023-11-09', 'Department review', 5),
(469, 6, 4, '2023-11-09', 'Department review', 2),
(470, 2, 11, '2023-11-09', 'Department review', 5),
(471, 6, 28, '2023-11-09', 'Department review', 3),
(478, 8, 7, '2023-11-09', 'Department review', 4),
(480, 5, 26, '2023-11-09', 'Department review', 3),
(481, 8, 18, '2023-11-09', 'Department review', 1),
(487, 3, 28, '2023-11-09', 'Department review', 2),
(489, 8, 18, '2023-11-09', 'Department review', 5),
(491, 5, 14, '2023-11-09', 'Department review', 1),
(492, 7, 9, '2023-11-09', 'Department review', 5),
(493, 2, 6, '2023-11-09', 'Department review', 5),
(494, 2, 12, '2023-11-09', 'Department review', 1),
(497, 1, 12, '2023-11-09', 'Department review', 3),
(501, 3, 28, '2023-11-09', 'Department review', 2),
(502, 5, 20, '2023-11-09', 'Department review', 1),
(508, 8, 24, '2023-11-09', 'Department review', 2),
(513, 3, 15, '2023-11-09', 'Department review', 5),
(516, 7, 5, '2023-11-09', 'Department review', 4),
(521, 3, 1, '2023-11-09', 'Department review', 2),
(523, 7, 14, '2023-11-09', 'Department review', 2),
(528, 7, 3, '2023-11-09', 'Department review', 4),
(529, 8, 4, '2023-11-09', 'Department review', 3),
(531, 3, 16, '2023-11-09', 'Department review', 5),
(538, 7, 2, '2023-11-09', 'Department review', 4),
(539, 4, 92, '2023-11-09', 'Department review', 3),
(545, 7, 26, '2023-11-09', 'Department review', 5),
(547, 1, 12, '2023-11-09', 'Department review', 2),
(549, 1, 9, '2023-11-09', 'Department review', 2),
(551, 6, 4, '2023-11-09', 'Department review', 5),
(552, 7, 29, '2023-11-09', 'Department review', 5),
(553, 5, 29, '2023-11-09', 'Department review', 4),
(555, 8, 16, '2023-11-09', 'Department review', 5),
(557, 7, 23, '2023-11-09', 'Department review', 3),
(559, 2, 27, '2023-11-09', 'Department review', 5),
(561, 1, 5, '2023-11-09', 'Department review', 5),
(562, 5, 3, '2023-11-09', 'Department review', 3),
(564, 6, 5, '2023-11-09', 'Department review', 2),
(568, 4, 20, '2023-11-09', 'Department review', 4),
(572, 5, 27, '2023-11-09', 'Department review', 3),
(576, 1, 11, '2023-11-09', 'Department review', 3),
(580, 5, 28, '2023-11-09', 'Department review', 3),
(583, 3, 16, '2023-11-09', 'Department review', 4),
(584, 4, 1, '2023-11-09', 'Department review', 3),
(585, 8, 12, '2023-11-09', 'Department review', 4),
(588, 5, 27, '2023-11-09', 'Department review', 3),
(590, 5, 11, '2023-11-09', 'Department review', 4),
(591, 3, 29, '2023-11-09', 'Department review', 3),
(592, 8, 6, '2023-11-09', 'Department review', 3),
(600, 3, 7, '2023-11-09', 'Department review', 3),
(605, 6, 13, '2023-11-09', 'Department review', 3),
(606, 5, 12, '2023-11-09', 'Department review', 5),
(613, 6, 19, '2023-11-09', 'Department review', 1),
(616, 3, 16, '2023-11-09', 'Department review', 5),
(618, 7, 7, '2023-11-09', 'Department review', 5),
(620, 2, 26, '2023-11-09', 'Department review', 4),
(625, 6, 24, '2023-11-09', 'Department review', 1),
(629, 3, 5, '2023-11-09', 'Department review', 2),
(631, 8, 19, '2023-11-09', 'Department review', 1),
(632, 4, 18, '2023-11-09', 'Department review', 3),
(637, 3, 26, '2023-11-09', 'Department review', 3),
(640, 2, 7, '2023-11-09', 'Department review', 4),
(641, 4, 22, '2023-11-09', 'Department review', 4),
(646, 6, 7, '2023-11-09', 'Department review', 1),
(647, 5, 30, '2023-11-09', 'Department review', 5),
(649, 3, 5, '2023-11-09', 'Department review', 1),
(654, 3, 8, '2023-11-09', 'Department review', 3),
(656, 1, 6, '2023-11-09', 'Department review', 1),
(664, 3, 27, '2023-11-09', 'Department review', 3),
(665, 6, 4, '2023-11-09', 'Department review', 1),
(668, 3, 27, '2023-11-09', 'Department review', 3),
(669, 3, 7, '2023-11-09', 'Department review', 3),
(670, 5, 25, '2023-11-09', 'Department review', 3),
(671, 7, 27, '2023-11-09', 'Department review', 1),
(673, 8, 26, '2023-11-09', 'Department review', 3),
(674, 2, 21, '2023-11-09', 'Department review', 3),
(681, 6, 7, '2023-11-09', 'Department review', 2),
(684, 3, 8, '2023-11-09', 'Department review', 2),
(688, 4, 30, '2023-11-09', 'Department review', 1),
(692, 7, 13, '2023-11-09', 'Department review', 1),
(702, 3, 25, '2023-11-09', 'Department review', 2),
(704, 1, 15, '2023-11-09', 'Department review', 3),
(705, 4, 29, '2023-11-09', 'Department review', 2),
(708, 5, 16, '2023-11-09', 'Department review', 5),
(709, 2, 18, '2023-11-09', 'Department review', 2),
(710, 1, 18, '2023-11-09', 'Department review', 5),
(711, 5, 14, '2023-11-09', 'Department review', 1),
(715, 4, 3, '2023-11-09', 'Department review', 4),
(719, 7, 6, '2023-11-09', 'Department review', 4),
(720, 2, 10, '2023-11-09', 'Department review', 5),
(726, 2, 8, '2023-11-09', 'Department review', 4),
(728, 4, 27, '2023-11-09', 'Department review', 1),
(729, 4, 24, '2023-11-09', 'Department review', 4),
(730, 1, 2, '2023-11-09', 'Department review', 5),
(733, 7, 6, '2023-11-09', 'Department review', 5),
(734, 1, 6, '2023-11-09', 'Department review', 5),
(735, 3, 5, '2023-11-09', 'Department review', 1),
(737, 2, 23, '2023-11-09', 'Department review', 3),
(738, 8, 17, '2023-11-09', 'Department review', 5),
(740, 1, 14, '2023-11-09', 'Department review', 3),
(742, 6, 1, '2023-11-09', 'Department review', 1),
(745, 2, 27, '2023-11-09', 'Department review', 3),
(746, 2, 15, '2023-11-09', 'Department review', 1),
(747, 3, 24, '2023-11-09', 'Department review', 1),
(748, 1, 7, '2023-11-09', 'Department review', 5),
(750, 7, 28, '2023-11-09', 'Department review', 5),
(754, 4, 13, '2023-11-09', 'Department review', 3),
(755, 8, 23, '2023-11-09', 'Department review', 2),
(757, 6, 25, '2023-11-09', 'Department review', 5),
(758, 2, 5, '2023-11-09', 'Department review', 4),
(759, 1, 26, '2023-11-09', 'Department review', 1),
(768, 2, 23, '2023-11-09', 'Department review', 4),
(773, 1, 25, '2023-11-09', 'Department review', 1),
(775, 1, 11, '2023-11-09', 'Department review', 1),
(783, 5, 13, '2023-11-09', 'Department review', 5),
(785, 1, 9, '2023-11-09', 'Department review', 2),
(786, 2, 7, '2023-11-09', 'Department review', 4),
(790, 1, 7, '2023-11-09', 'Department review', 1),
(791, 5, 18, '2023-11-09', 'Department review', 2),
(793, 1, 3, '2023-11-09', 'Department review', 5),
(801, 2, 1, '2023-11-09', 'Department review', 3),
(803, 2, 20, '2023-11-09', 'Department review', 3),
(804, 6, 16, '2023-11-09', 'Department review', 4),
(808, 2, 13, '2023-11-09', 'Department review', 5),
(809, 2, 23, '2023-11-09', 'Department review', 3),
(815, 8, 6, '2023-11-09', 'Department review', 4),
(817, 3, 21, '2023-11-09', 'Department review', 5),
(819, 3, 20, '2023-11-09', 'Department review', 5),
(822, 6, 21, '2023-11-09', 'Department review', 5),
(828, 2, 4, '2023-11-09', 'Department review', 4),
(835, 1, 27, '2023-11-09', 'Department review', 2),
(839, 5, 51, '2023-11-09', 'Department review', 5),
(846, 4, 4, '2023-11-09', 'Department review', 5),
(850, 3, 30, '2023-11-09', 'Department review', 3),
(853, 4, 92, '2023-11-09', 'Department review', 2),
(859, 8, 4, '2023-11-09', 'Department review', 2),
(862, 6, 24, '2023-11-09', 'Department review', 2),
(864, 5, 14, '2023-11-09', 'Department review', 1),
(868, 5, 30, '2023-11-09', 'Department review', 4),
(877, 5, 4, '2023-11-09', 'Department review', 2),
(878, 7, 92, '2023-11-09', 'Department review', 1),
(880, 1, 8, '2023-11-09', 'Department review', 1),
(882, 7, 26, '2023-11-09', 'Department review', 1),
(886, 1, 7, '2023-11-09', 'Department review', 1),
(889, 3, 27, '2023-11-09', 'Department review', 3),
(891, 1, 21, '2023-11-09', 'Department review', 5),
(893, 3, 22, '2023-11-09', 'Department review', 2),
(894, 7, 10, '2023-11-09', 'Department review', 1),
(895, 3, 15, '2023-11-09', 'Department review', 5),
(896, 6, 21, '2023-11-09', 'Department review', 5),
(898, 5, 7, '2023-11-09', 'Department review', 3),
(903, 8, 22, '2023-11-09', 'Department review', 1),
(906, 1, 8, '2023-11-09', 'Department review', 1),
(907, 7, 24, '2023-11-09', 'Department review', 4),
(910, 8, 3, '2023-11-09', 'Department review', 2),
(911, 6, 14, '2023-11-09', 'Department review', 4),
(912, 4, 13, '2023-11-09', 'Department review', 1),
(913, 3, 22, '2023-11-09', 'Department review', 1),
(914, 8, 30, '2023-11-09', 'Department review', 4),
(915, 6, 29, '2023-11-09', 'Department review', 2),
(920, 6, 27, '2023-11-09', 'Department review', 2),
(925, 1, 19, '2023-11-09', 'Department review', 4),
(926, 1, 5, '2023-11-09', 'Department review', 1),
(928, 6, 8, '2023-11-09', 'Department review', 1),
(930, 2, 24, '2023-11-09', 'Department review', 4),
(933, 1, 12, '2023-11-09', 'Department review', 3),
(934, 4, 26, '2023-11-09', 'Department review', 1),
(936, 7, 92, '2023-11-09', 'Department review', 1),
(937, 6, 3, '2023-11-09', 'Department review', 1),
(944, 6, 28, '2023-11-09', 'Department review', 3),
(946, 6, 28, '2023-11-09', 'Department review', 2),
(947, 5, 4, '2023-11-09', 'Department review', 3),
(949, 7, 22, '2023-11-09', 'Department review', 3),
(952, 1, 11, '2023-11-09', 'Department review', 3),
(953, 8, 9, '2023-11-09', 'Department review', 4),
(955, 7, 13, '2023-11-09', 'Department review', 2),
(958, 8, 15, '2023-11-09', 'Department review', 1),
(961, 3, 21, '2023-11-09', 'Department review', 1),
(969, 3, 22, '2023-11-09', 'Department review', 1),
(970, 4, 1, '2023-11-09', 'Department review', 4),
(972, 1, 26, '2023-11-09', 'Department review', 1),
(973, 4, 14, '2023-11-09', 'Department review', 2),
(975, 1, 30, '2023-11-09', 'Department review', 2),
(976, 4, 30, '2023-11-09', 'Department review', 2),
(978, 8, 12, '2023-11-09', 'Department review', 4),
(980, 5, 30, '2023-11-09', 'Department review', 4),
(990, 2, 4, '2023-11-09', 'Department review', 4),
(993, 5, 16, '2023-11-09', 'Department review', 1),
(999, 3, 7, '2023-11-09', 'Department review', 3),
(1000, 1, 17, '2023-11-09', 'Department review', 3);

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `birthdate` date NOT NULL,
  `start_date` date NOT NULL,
  `work_months` int(11) NOT NULL DEFAULT 0,
  `bio` text DEFAULT NULL,
  `job_title` varchar(255) NOT NULL,
  `rank_id` int(11) DEFAULT 1,
  `department_id` int(11) DEFAULT NULL,
  `team_id` int(11) DEFAULT NULL,
  `avatar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `birthdate`, `start_date`, `work_months`, `bio`, `job_title`, `rank_id`, `department_id`, `team_id`, `avatar`) VALUES
(1, 'Đỗ Hồng Quân', '2008-01-01', '2010-01-01', 0, 'A brief bio of the employee', 'Designer', 4, 1, 1, 'user.jpg'),
(2, 'Employee 2', '2016-01-01', '2017-01-01', 0, 'A brief bio of the employee', 'Manager', 1, 8, 1, 'user.jpg'),
(3, 'Employee 3', '1994-01-01', '2015-01-01', 0, 'A brief bio of the employee', 'Engineer', 1, 4, 1, 'user.jpg'),
(4, 'Employee 4', '1982-01-01', '2019-01-01', 0, 'A brief bio of the employee', 'Manager', 1, 2, 1, 'user.jpg'),
(5, 'Employee 5', '1985-01-01', '2019-01-01', 0, 'A brief bio of the employee', 'Manager', 1, 4, 2, 'user.jpg'),
(6, 'Employee 6', '1983-01-01', '2016-01-01', 0, 'A brief bio of the employee', 'Manager', 1, 3, 2, 'user.jpg'),
(7, 'Employee 7', '2016-01-01', '2012-01-01', 0, 'A brief bio of the employee', 'Engineer', 1, 5, 3, 'user.jpg'),
(8, 'Employee 8', '2007-01-01', '2012-01-01', 0, 'A brief bio of the employee', 'Manager', 1, 2, 3, 'user.jpg'),
(9, 'Employee 9', '1999-01-01', '2012-01-01', 0, 'A brief bio of the employee', 'Manager', 2, 5, 3, 'user.jpg'),
(10, 'Employee 10', '2012-01-01', '2015-01-01', 0, 'A brief bio of the employee', 'Engineer', 2, 8, 5, 'user.jpg'),
(11, 'Employee 11', '2002-01-01', '2010-01-01', 0, 'A brief bio of the employee', 'Designer', 2, 3, 10, 'user.jpg'),
(12, 'Văn Thành', '1988-01-01', '2019-01-01', 0, 'A brief bio of the employee', 'Designer', 3, 2, 11, 'user.jpg'),
(13, 'Long HH', '1993-01-01', '2010-01-01', 0, 'A brief bio of the employee', 'Manager', 3, 3, 8, 'user.jpg'),
(14, 'Trần Thuỳ Linh', '1993-01-01', '2011-01-01', 0, 'A brief bio of the employee', 'Manager', 2, 8, 12, 'user.jpg'),
(15, 'Trần Chung Hiếu', '1987-01-01', '2010-01-01', 0, 'A brief bio of the employee', 'Engineer', 3, 7, 12, 'user.jpg'),
(16, 'Employee 16', '1990-01-01', '2014-01-01', 0, 'A brief bio of the employee', 'Designer', 2, 6, 12, 'user.jpg'),
(17, 'Employee 17', '1990-01-01', '2015-01-01', 0, 'A brief bio of the employee', 'Designer', 1, 7, 6, 'user.jpg'),
(18, 'Employee 18', '2004-01-01', '2014-01-01', 0, 'A brief bio of the employee', 'Designer', 1, 7, 6, 'user.jpg'),
(19, 'Employee 19', '2003-01-01', '2011-01-01', 0, 'A brief bio of the employee', 'Manager', 1, 5, 6, 'user.jpg'),
(20, 'Employee 20', '1987-01-01', '2018-01-01', 0, 'A brief bio of the employee', 'Manager', 1, 6, 4, 'user.jpg'),
(21, 'Employee 21', '1999-01-01', '2010-01-01', 0, 'A brief bio of the employee', 'Manager', 1, 6, 4, 'user.jpg'),
(22, 'Employee 22', '2004-01-01', '2016-01-01', 0, 'A brief bio of the employee', 'Manager', 1, 3, 15, 'user.jpg'),
(23, 'Employee 23', '1984-01-01', '2015-01-01', 0, 'A brief bio of the employee', 'Engineer', 1, 6, 5, 'user.jpg'),
(24, 'Employee 24', '1993-01-01', '2010-01-01', 0, 'A brief bio of the employee', 'Engineer', 1, 7, 4, 'user.jpg'),
(25, 'Employee 25', '1983-01-01', '2014-01-01', 0, 'A brief bio of the employee', 'Manager', 2, 8, 7, 'user.jpg'),
(26, 'Employee 26', '1986-01-01', '2015-01-01', 0, 'A brief bio of the employee', 'Designer', 2, 4, 7, 'user.jpg'),
(27, 'Employee 27', '2002-01-01', '2012-01-01', 0, 'A brief bio of the employee', 'Manager', 2, 6, 7, 'user.jpg'),
(28, 'Employee 28', '2019-01-01', '2012-01-01', 0, 'A brief bio of the employee', 'Designer', 1, 7, 7, 'user.jpg'),
(29, 'Employee 29', '2012-01-01', '2015-01-01', 0, 'A brief bio of the employee', 'Engineer', 2, 7, 9, 'user.jpg'),
(30, 'Employee 30', '1987-01-01', '2010-01-01', 0, 'A brief bio of the employee', 'Engineer', 1, 1, 10, 'user.jpg'),
(41, 'Nguyễn Văn An', '1998-01-01', '2013-01-01', 0, 'A brief bio of the employee', 'Manager', 2, 7, 10, 'user.jpg'),
(51, 'Hoàng Thuỳ Linh', '2016-01-01', '2016-01-01', 0, 'A brief bio of the employee', 'Manager', 2, 5, 10, 'user.jpg'),
(92, 'Bích Phương', '1998-01-01', '2013-01-01', 0, 'A brief bio of the employee', 'Manager', 2, 1, 19, 'user.jpg'),
(101, 'Trần Chung Hiếu', '2023-11-17', '2023-11-22', 0, '', 'fasdasdfasdf', 1, 5, 8, 'user.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `employee_history`
--

CREATE TABLE `employee_history` (
  `id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `job_title` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee_history`
--

INSERT INTO `employee_history` (`id`, `employee_id`, `department_id`, `job_title`, `start_date`, `end_date`) VALUES
(1, 1, 8, 'Engineer', '2018-01-01', '2014-01-01'),
(2, 2, 6, 'Manager', '2013-01-01', '2017-01-01'),
(3, 3, 5, 'Designer', '2010-01-01', '2011-01-01'),
(4, 4, 6, 'Analyst', '2012-01-01', '2012-01-01'),
(5, 5, 4, 'Analyst', '2014-01-01', '2012-01-01'),
(6, 6, 1, 'Engineer', '2018-01-01', '2011-01-01'),
(7, 7, 3, 'Manager', '2014-01-01', '2011-01-01'),
(8, 8, 3, 'Engineer', '2013-01-01', '2015-01-01'),
(9, 9, 7, 'Engineer', '2017-01-01', '2018-01-01'),
(10, 10, 1, 'Designer', '2010-01-01', '2018-01-01'),
(11, 11, 2, 'Manager', '2017-01-01', '2018-01-01'),
(12, 12, 3, 'Engineer', '2019-01-01', '2012-01-01'),
(13, 13, 4, 'Manager', '2017-01-01', '2012-01-01'),
(14, 14, 7, 'Engineer', '2016-01-01', '2010-01-01'),
(15, 15, 5, 'Engineer', '2018-01-01', '2010-01-01'),
(16, 16, 7, 'Engineer', '2016-01-01', '2012-01-01'),
(17, 17, 4, 'Manager', '2016-01-01', '2011-01-01'),
(18, 18, 6, 'Engineer', '2016-01-01', '2015-01-01'),
(19, 19, 8, 'Manager', '2015-01-01', '2014-01-01'),
(20, 20, 6, 'Engineer', '2016-01-01', '2014-01-01'),
(21, 21, 3, 'Manager', '2011-01-01', '2010-01-01'),
(22, 22, 8, 'Engineer', '2016-01-01', '2014-01-01'),
(23, 23, 2, 'Engineer', '2016-01-01', '2016-01-01'),
(24, 24, 3, 'Manager', '2016-01-01', '2013-01-01'),
(25, 25, 1, 'Engineer', '2015-01-01', '2011-01-01'),
(26, 26, 2, 'Manager', '2013-01-01', '2016-01-01'),
(27, 27, 2, 'Manager', '2011-01-01', '2013-01-01'),
(28, 28, 4, 'Engineer', '2017-01-01', '2016-01-01'),
(29, 29, 2, 'Engineer', '2010-01-01', '2013-01-01'),
(30, 30, 7, 'Manager', '2016-01-01', '2011-01-01'),
(41, 41, 2, 'Manager', '2019-01-01', '2016-01-01'),
(51, 51, 1, 'Manager', '2017-01-01', '2010-01-01'),
(92, 92, 2, 'Manager', '2019-01-01', '2018-01-01');

-- --------------------------------------------------------

--
-- Table structure for table `employee_reviews`
--

CREATE TABLE `employee_reviews` (
  `id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `reviewer_id` int(11) NOT NULL,
  `review_date` date NOT NULL,
  `review` text NOT NULL,
  `score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee_reviews`
--

INSERT INTO `employee_reviews` (`id`, `employee_id`, `reviewer_id`, `review_date`, `review`, `score`) VALUES
(2, 6, 51, '2023-11-09', 'Employee review', 3),
(22, 6, 5, '2023-11-09', 'Employee review', 1),
(34, 17, 15, '2023-11-09', 'Employee review', 2),
(38, 26, 12, '2023-11-09', 'Employee review', 5),
(44, 17, 1, '2023-11-09', 'Employee review', 3),
(47, 29, 26, '2023-11-09', 'Employee review', 3),
(48, 27, 14, '2023-11-09', 'Employee review', 5),
(50, 11, 28, '2023-11-09', 'Employee review', 1),
(62, 23, 51, '2023-11-09', 'Employee review', 5),
(68, 24, 51, '2023-11-09', 'Employee review', 5),
(70, 10, 28, '2023-11-09', 'Employee review', 1),
(86, 27, 24, '2023-11-09', 'Employee review', 3),
(94, 8, 22, '2023-11-09', 'Employee review', 5),
(111, 1, 25, '2023-11-09', 'Employee review', 2),
(113, 24, 24, '2023-11-09', 'Employee review', 3),
(125, 92, 29, '2023-11-09', 'Employee review', 4),
(151, 9, 26, '2023-11-09', 'Employee review', 1),
(161, 6, 9, '2023-11-09', 'Employee review', 2),
(163, 11, 16, '2023-11-09', 'Employee review', 3),
(169, 92, 19, '2023-11-09', 'Employee review', 1),
(176, 16, 51, '2023-11-09', 'Employee review', 1),
(178, 12, 5, '2023-11-09', 'Employee review', 5),
(184, 14, 51, '2023-11-09', 'Employee review', 1),
(192, 92, 11, '2023-11-09', 'Employee review', 4),
(193, 51, 24, '2023-11-09', 'Employee review', 4),
(198, 18, 10, '2023-11-09', 'Employee review', 5),
(207, 4, 12, '2023-11-09', 'Employee review', 3),
(226, 13, 7, '2023-11-09', 'Employee review', 5),
(231, 51, 25, '2023-11-09', 'Employee review', 4),
(235, 29, 1, '2023-11-09', 'Employee review', 1),
(245, 27, 16, '2023-11-09', 'Employee review', 5),
(255, 17, 51, '2023-11-09', 'Employee review', 1),
(260, 16, 8, '2023-11-09', 'Employee review', 5),
(265, 14, 5, '2023-11-09', 'Employee review', 5),
(267, 10, 2, '2023-11-09', 'Employee review', 4),
(269, 51, 10, '2023-11-09', 'Employee review', 5),
(282, 21, 27, '2023-11-09', 'Employee review', 4),
(285, 23, 11, '2023-11-09', 'Employee review', 5),
(291, 22, 26, '2023-11-09', 'Employee review', 4),
(299, 18, 15, '2023-11-09', 'Employee review', 1),
(311, 16, 5, '2023-11-09', 'Employee review', 4),
(331, 14, 15, '2023-11-09', 'Employee review', 2),
(344, 9, 17, '2023-11-09', 'Employee review', 3),
(384, 24, 12, '2023-11-09', 'Employee review', 5),
(388, 24, 27, '2023-11-09', 'Employee review', 4),
(392, 20, 7, '2023-11-09', 'Employee review', 4),
(403, 18, 19, '2023-11-09', 'Employee review', 2),
(406, 2, 2, '2023-11-09', 'Employee review', 1),
(414, 51, 24, '2023-11-09', 'Employee review', 4),
(422, 6, 27, '2023-11-09', 'Employee review', 1),
(424, 7, 2, '2023-11-09', 'Employee review', 5),
(430, 29, 18, '2023-11-09', 'Employee review', 1),
(434, 41, 17, '2023-11-09', 'Employee review', 3),
(439, 92, 2, '2023-11-09', 'Employee review', 2),
(441, 1, 1, '2023-11-09', 'Employee review', 1),
(443, 92, 10, '2023-11-09', 'Employee review', 4),
(444, 26, 17, '2023-11-09', 'Employee review', 1),
(451, 4, 1, '2023-11-09', 'Employee review', 5),
(464, 14, 7, '2023-11-09', 'Employee review', 5),
(471, 12, 19, '2023-11-09', 'Employee review', 3),
(472, 41, 26, '2023-11-09', 'Employee review', 1),
(477, 15, 28, '2023-11-09', 'Employee review', 5),
(480, 29, 22, '2023-11-09', 'Employee review', 2),
(490, 17, 1, '2023-11-09', 'Employee review', 3),
(496, 24, 1, '2023-11-09', 'Employee review', 2),
(500, 4, 22, '2023-11-09', 'Employee review', 5),
(502, 15, 18, '2023-11-09', 'Employee review', 3),
(505, 20, 29, '2023-11-09', 'Employee review', 5),
(518, 24, 15, '2023-11-09', 'Employee review', 1),
(524, 92, 8, '2023-11-09', 'Employee review', 3),
(530, 92, 1, '2023-11-09', 'Employee review', 2),
(531, 20, 28, '2023-11-09', 'Employee review', 4),
(532, 10, 13, '2023-11-09', 'Employee review', 2),
(538, 25, 30, '2023-11-09', 'Employee review', 4),
(542, 24, 28, '2023-11-09', 'Employee review', 4),
(564, 2, 27, '2023-11-09', 'Employee review', 2),
(578, 7, 19, '2023-11-09', 'Employee review', 4),
(586, 26, 29, '2023-11-09', 'Employee review', 4),
(592, 23, 11, '2023-11-09', 'Employee review', 5),
(602, 30, 29, '2023-11-09', 'Employee review', 3),
(615, 29, 7, '2023-11-09', 'Employee review', 3),
(616, 8, 1, '2023-11-09', 'Employee review', 5),
(630, 19, 9, '2023-11-09', 'Employee review', 5),
(633, 15, 19, '2023-11-09', 'Employee review', 3),
(643, 13, 41, '2023-11-09', 'Employee review', 4),
(644, 26, 21, '2023-11-09', 'Employee review', 2),
(652, 13, 14, '2023-11-09', 'Employee review', 2),
(670, 13, 19, '2023-11-09', 'Employee review', 3),
(681, 10, 30, '2023-11-09', 'Employee review', 1),
(685, 8, 21, '2023-11-09', 'Employee review', 4),
(686, 30, 13, '2023-11-09', 'Employee review', 4),
(693, 1, 30, '2023-11-09', 'Employee review', 3),
(722, 12, 27, '2023-11-09', 'Employee review', 1),
(738, 6, 5, '2023-11-09', 'Employee review', 1),
(760, 9, 14, '2023-11-09', 'Employee review', 3),
(762, 5, 24, '2023-11-09', 'Employee review', 1),
(774, 28, 27, '2023-11-09', 'Employee review', 3),
(778, 3, 4, '2023-11-09', 'Employee review', 1),
(810, 92, 27, '2023-11-09', 'Employee review', 3),
(815, 15, 26, '2023-11-09', 'Employee review', 5),
(820, 18, 25, '2023-11-09', 'Employee review', 4),
(841, 51, 29, '2023-11-09', 'Employee review', 5),
(849, 25, 5, '2023-11-09', 'Employee review', 3),
(854, 41, 25, '2023-11-09', 'Employee review', 1),
(876, 11, 30, '2023-11-09', 'Employee review', 1),
(879, 10, 2, '2023-11-09', 'Employee review', 4),
(884, 21, 21, '2023-11-09', 'Employee review', 3),
(889, 8, 26, '2023-11-09', 'Employee review', 1),
(927, 20, 9, '2023-11-09', 'Employee review', 5),
(930, 22, 15, '2023-11-09', 'Employee review', 1),
(937, 3, 24, '2023-11-09', 'Employee review', 1),
(970, 51, 5, '2023-11-09', 'Employee review', 4),
(972, 13, 41, '2023-11-09', 'Employee review', 4),
(973, 3, 20, '2023-11-09', 'Employee review', 5),
(981, 28, 5, '2023-11-09', 'Employee review', 3),
(999, 51, 21, '2023-11-09', 'Employee review', 3);

-- --------------------------------------------------------

--
-- Table structure for table `leave_requests`
--

CREATE TABLE `leave_requests` (
  `id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `reason` text NOT NULL,
  `status` varchar(255) NOT NULL,
  `create_at` date NOT NULL DEFAULT current_timestamp(),
  `update_at` date NOT NULL DEFAULT current_timestamp(),
  `approve_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `leave_requests`
--

INSERT INTO `leave_requests` (`id`, `employee_id`, `start_date`, `end_date`, `reason`, `status`, `create_at`, `update_at`, `approve_at`) VALUES
(1002, 1, '2023-11-29', '2023-11-29', 'đâsdasdasd', 'pending', '2023-11-29', '2023-11-29', '2023-11-29');

-- --------------------------------------------------------

--
-- Table structure for table `login_infomation`
--

CREATE TABLE `login_infomation` (
  `id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login_infomation`
--

INSERT INTO `login_infomation` (`id`, `employee_id`, `username`, `password`) VALUES
(1, 1, 'user1', 'password1'),
(2, 2, 'user2', 'password2'),
(3, 3, 'user3', 'password3'),
(4, 4, 'user4', 'password4'),
(5, 5, 'user5', 'password5'),
(6, 6, 'user6', 'password6'),
(7, 7, 'user7', 'password7'),
(8, 8, 'user8', 'password8'),
(9, 9, 'user9', 'password9');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `create_at` date DEFAULT current_timestamp(),
  `update_at` date DEFAULT current_timestamp(),
  `status` varchar(255) NOT NULL DEFAULT 'unread'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `employee_id`, `title`, `content`, `create_at`, `update_at`, `status`) VALUES
(2, 3, 'Notification 2', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(6, 23, 'Notification 6', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(8, 17, 'Notification 8', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(10, 15, 'Notification 10', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(11, 13, 'Notification 11', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(15, 51, 'Notification 15', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(18, 16, 'Notification 18', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(21, 8, 'Notification 21', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(22, 6, 'Notification 22', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(23, 30, 'Notification 23', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(25, 9, 'Notification 25', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(26, 41, 'Notification 26', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(27, 10, 'Notification 27', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(28, 92, 'Notification 28', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(29, 92, 'Notification 29', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(34, 8, 'Notification 34', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(37, 7, 'Notification 37', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(38, 11, 'Notification 38', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(47, 8, 'Notification 47', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(50, 4, 'Notification 50', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(51, 21, 'Notification 51', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(55, 12, 'Notification 55', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(57, 30, 'Notification 57', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(60, 41, 'Notification 60', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(63, 1, 'Notification 63', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(66, 16, 'Notification 66', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(67, 11, 'Notification 67', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(71, 15, 'Notification 71', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(75, 21, 'Notification 75', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(82, 26, 'Notification 82', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(87, 2, 'Notification 87', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(89, 21, 'Notification 89', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(91, 7, 'Notification 91', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(92, 17, 'Notification 92', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(104, 12, 'Notification 104', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(105, 23, 'Notification 105', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(107, 17, 'Notification 107', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(108, 23, 'Notification 108', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(110, 28, 'Notification 110', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(113, 23, 'Notification 113', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(114, 3, 'Notification 114', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(115, 1, 'Notification 115', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(118, 13, 'Notification 118', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(123, 2, 'Notification 123', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(126, 30, 'Notification 126', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(129, 13, 'Notification 129', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(130, 17, 'Notification 130', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(132, 12, 'Notification 132', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(133, 3, 'Notification 133', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(135, 29, 'Notification 135', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(142, 20, 'Notification 142', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(145, 7, 'Notification 145', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(148, 8, 'Notification 148', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(150, 24, 'Notification 150', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(160, 5, 'Notification 160', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(165, 21, 'Notification 165', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(168, 5, 'Notification 168', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(174, 14, 'Notification 174', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(181, 16, 'Notification 181', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(186, 3, 'Notification 186', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(188, 29, 'Notification 188', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(192, 41, 'Notification 192', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(193, 8, 'Notification 193', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(195, 5, 'Notification 195', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(197, 30, 'Notification 197', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(198, 23, 'Notification 198', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(199, 29, 'Notification 199', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(203, 4, 'Notification 203', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(204, 30, 'Notification 204', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(205, 21, 'Notification 205', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(207, 24, 'Notification 207', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(211, 3, 'Notification 211', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(212, 26, 'Notification 212', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(216, 28, 'Notification 216', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(217, 19, 'Notification 217', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(222, 6, 'Notification 222', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(225, 16, 'Notification 225', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(226, 5, 'Notification 226', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(230, 9, 'Notification 230', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(231, 7, 'Notification 231', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(232, 3, 'Notification 232', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(234, 3, 'Notification 234', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(238, 51, 'Notification 238', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(239, 8, 'Notification 239', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(242, 30, 'Notification 242', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(245, 21, 'Notification 245', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(249, 10, 'Notification 249', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(252, 22, 'Notification 252', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(255, 30, 'Notification 255', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(257, 20, 'Notification 257', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(259, 30, 'Notification 259', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(261, 15, 'Notification 261', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(263, 6, 'Notification 263', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(266, 28, 'Notification 266', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(267, 5, 'Notification 267', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(268, 19, 'Notification 268', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(281, 6, 'Notification 281', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(282, 30, 'Notification 282', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(292, 18, 'Notification 292', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(293, 26, 'Notification 293', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(298, 12, 'Notification 298', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(299, 20, 'Notification 299', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(304, 41, 'Notification 304', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(310, 17, 'Notification 310', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(313, 13, 'Notification 313', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(314, 9, 'Notification 314', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(319, 23, 'Notification 319', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(320, 23, 'Notification 320', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(321, 20, 'Notification 321', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(325, 9, 'Notification 325', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(326, 13, 'Notification 326', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(328, 28, 'Notification 328', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(330, 26, 'Notification 330', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(334, 19, 'Notification 334', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(335, 30, 'Notification 335', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(336, 18, 'Notification 336', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(338, 41, 'Notification 338', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(344, 26, 'Notification 344', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(345, 8, 'Notification 345', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(349, 9, 'Notification 349', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(351, 12, 'Notification 351', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(352, 1, 'Notification 352', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(357, 17, 'Notification 357', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(363, 27, 'Notification 363', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(368, 20, 'Notification 368', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(370, 9, 'Notification 370', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(372, 25, 'Notification 372', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(373, 17, 'Notification 373', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(376, 16, 'Notification 376', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(381, 27, 'Notification 381', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(384, 27, 'Notification 384', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(386, 14, 'Notification 386', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(387, 1, 'Notification 387', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(392, 41, 'Notification 392', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(393, 17, 'Notification 393', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(394, 9, 'Notification 394', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(400, 51, 'Notification 400', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(402, 29, 'Notification 402', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(403, 24, 'Notification 403', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(404, 24, 'Notification 404', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(405, 21, 'Notification 405', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(406, 22, 'Notification 406', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(409, 4, 'Notification 409', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(414, 11, 'Notification 414', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(417, 19, 'Notification 417', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(418, 3, 'Notification 418', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(419, 13, 'Notification 419', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(430, 11, 'Notification 430', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(434, 25, 'Notification 434', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(439, 23, 'Notification 439', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(442, 3, 'Notification 442', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(445, 2, 'Notification 445', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(449, 92, 'Notification 449', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(451, 16, 'Notification 451', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(454, 27, 'Notification 454', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(461, 17, 'Notification 461', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(462, 7, 'Notification 462', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(463, 9, 'Notification 463', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(464, 2, 'Notification 464', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(466, 15, 'Notification 466', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(469, 12, 'Notification 469', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(470, 25, 'Notification 470', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(472, 30, 'Notification 472', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(473, 17, 'Notification 473', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(475, 7, 'Notification 475', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(479, 30, 'Notification 479', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(484, 6, 'Notification 484', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(486, 28, 'Notification 486', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(487, 23, 'Notification 487', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(488, 2, 'Notification 488', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(489, 22, 'Notification 489', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(502, 29, 'Notification 502', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(503, 26, 'Notification 503', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(504, 27, 'Notification 504', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(505, 14, 'Notification 505', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(507, 4, 'Notification 507', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(509, 26, 'Notification 509', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(512, 21, 'Notification 512', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(515, 3, 'Notification 515', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(516, 92, 'Notification 516', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(524, 26, 'Notification 524', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(527, 3, 'Notification 527', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(531, 24, 'Notification 531', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(532, 19, 'Notification 532', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(534, 5, 'Notification 534', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(538, 14, 'Notification 538', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(541, 30, 'Notification 541', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(543, 12, 'Notification 543', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(544, 7, 'Notification 544', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(546, 14, 'Notification 546', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(550, 24, 'Notification 550', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(554, 8, 'Notification 554', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(555, 6, 'Notification 555', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(556, 29, 'Notification 556', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(557, 30, 'Notification 557', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(561, 22, 'Notification 561', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(563, 20, 'Notification 563', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(564, 1, 'Notification 564', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(565, 26, 'Notification 565', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(567, 30, 'Notification 567', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(577, 92, 'Notification 577', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(582, 30, 'Notification 582', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(583, 14, 'Notification 583', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(585, 28, 'Notification 585', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(588, 7, 'Notification 588', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(590, 27, 'Notification 590', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(595, 20, 'Notification 595', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(599, 13, 'Notification 599', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(602, 23, 'Notification 602', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(606, 16, 'Notification 606', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(607, 16, 'Notification 607', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(608, 15, 'Notification 608', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(610, 29, 'Notification 610', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(612, 25, 'Notification 612', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(613, 5, 'Notification 613', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(616, 4, 'Notification 616', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(620, 16, 'Notification 620', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(622, 19, 'Notification 622', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(623, 6, 'Notification 623', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(624, 30, 'Notification 624', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(632, 30, 'Notification 632', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(637, 4, 'Notification 637', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(638, 21, 'Notification 638', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(640, 5, 'Notification 640', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(642, 16, 'Notification 642', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(644, 7, 'Notification 644', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(650, 27, 'Notification 650', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(651, 22, 'Notification 651', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(652, 12, 'Notification 652', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(654, 16, 'Notification 654', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(656, 41, 'Notification 656', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(660, 92, 'Notification 660', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(662, 24, 'Notification 662', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(669, 51, 'Notification 669', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(671, 20, 'Notification 671', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(675, 14, 'Notification 675', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(678, 19, 'Notification 678', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(684, 17, 'Notification 684', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(687, 51, 'Notification 687', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(693, 3, 'Notification 693', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(695, 9, 'Notification 695', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(697, 41, 'Notification 697', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(702, 51, 'Notification 702', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(707, 92, 'Notification 707', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(710, 4, 'Notification 710', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(711, 23, 'Notification 711', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(712, 19, 'Notification 712', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(713, 2, 'Notification 713', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(714, 41, 'Notification 714', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(715, 29, 'Notification 715', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(719, 30, 'Notification 719', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(720, 22, 'Notification 720', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(726, 27, 'Notification 726', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(727, 2, 'Notification 727', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(734, 13, 'Notification 734', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(736, 19, 'Notification 736', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(737, 26, 'Notification 737', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(757, 2, 'Notification 757', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(758, 21, 'Notification 758', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(760, 16, 'Notification 760', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(765, 20, 'Notification 765', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(767, 28, 'Notification 767', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(769, 1, 'Notification 769', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(771, 5, 'Notification 771', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(772, 9, 'Notification 772', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(775, 41, 'Notification 775', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(776, 29, 'Notification 776', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(779, 20, 'Notification 779', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(784, 24, 'Notification 784', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(786, 11, 'Notification 786', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(788, 9, 'Notification 788', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(792, 1, 'Notification 792', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(796, 12, 'Notification 796', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(803, 5, 'Notification 803', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(806, 16, 'Notification 806', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(811, 16, 'Notification 811', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(817, 6, 'Notification 817', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(818, 3, 'Notification 818', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(819, 7, 'Notification 819', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(823, 29, 'Notification 823', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(825, 8, 'Notification 825', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(827, 17, 'Notification 827', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(830, 5, 'Notification 830', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(831, 29, 'Notification 831', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(834, 16, 'Notification 834', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(838, 15, 'Notification 838', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(840, 41, 'Notification 840', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(845, 1, 'Notification 845', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(855, 9, 'Notification 855', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(858, 92, 'Notification 858', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(862, 18, 'Notification 862', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(864, 30, 'Notification 864', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(866, 4, 'Notification 866', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(869, 27, 'Notification 869', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(872, 20, 'Notification 872', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(873, 22, 'Notification 873', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(874, 9, 'Notification 874', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(875, 22, 'Notification 875', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(877, 6, 'Notification 877', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(879, 14, 'Notification 879', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(883, 18, 'Notification 883', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(885, 92, 'Notification 885', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(888, 11, 'Notification 888', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(890, 22, 'Notification 890', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(892, 20, 'Notification 892', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(893, 26, 'Notification 893', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(897, 17, 'Notification 897', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(910, 9, 'Notification 910', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(920, 4, 'Notification 920', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(922, 3, 'Notification 922', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(927, 6, 'Notification 927', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(932, 22, 'Notification 932', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(934, 14, 'Notification 934', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(936, 8, 'Notification 936', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(942, 15, 'Notification 942', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(944, 30, 'Notification 944', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(954, 17, 'Notification 954', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(955, 4, 'Notification 955', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(956, 6, 'Notification 956', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(958, 11, 'Notification 958', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(960, 26, 'Notification 960', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(963, 18, 'Notification 963', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(968, 9, 'Notification 968', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(970, 11, 'Notification 970', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(977, 27, 'Notification 977', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(978, 28, 'Notification 978', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(979, 23, 'Notification 979', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(981, 51, 'Notification 981', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(983, 8, 'Notification 983', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(986, 2, 'Notification 986', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(987, 14, 'Notification 987', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(988, 21, 'Notification 988', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(990, 6, 'Notification 990', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(998, 28, 'Notification 998', 'Notification content', '2023-11-09', '2023-11-09', 'unread'),
(999, 18, 'Notification 999', 'Notification content', '2023-11-09', '2023-11-09', 'unread');

-- --------------------------------------------------------

--
-- Table structure for table `ranks`
--

CREATE TABLE `ranks` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ranks`
--

INSERT INTO `ranks` (`id`, `name`, `description`) VALUES
(1, 'Staff', 'Nhân viên'),
(2, 'Team Lead', 'Trưởng nhóm'),
(3, 'Manager', 'Quản lý'),
(4, 'Director', 'Giám đốc');

-- --------------------------------------------------------

--
-- Table structure for table `salaries`
--

CREATE TABLE `salaries` (
  `id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `work_days` float DEFAULT NULL,
  `work_hours` float DEFAULT NULL,
  `month` int(2) NOT NULL,
  `year` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `salary_details`
--

CREATE TABLE `salary_details` (
  `id` int(11) NOT NULL,
  `salary_id` int(11) NOT NULL,
  `salary_scale_id` int(11) NOT NULL,
  `salary` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `salary_scales`
--

CREATE TABLE `salary_scales` (
  `id` int(11) NOT NULL,
  `rank_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `value` int(11) NOT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `salary_scales`
--

INSERT INTO `salary_scales` (`id`, `rank_id`, `name`, `value`, `description`) VALUES
(1, 1, 'Lương cơ bản', 10000000, 'Lương cơ bản của nhân viên, tính bằng Việt Nam Đồng'),
(2, 1, 'Nhà ở', 10, 'Phụ cấp nhà ở của nhân viên, tính bằng Việt Nam Đồng'),
(3, 1, 'Xăng xe', 5, 'Phụ cấp xăng xe của nhân viên, tính bằng Việt Nam Đồng'),
(4, 1, 'Bảo hiểm', 10, 'Bảo hiểm của nhân viên, trừ vào lương cơ bản, tính theo phần trăm lương cơ bản'),
(5, 1, 'Thưởng', 5, 'Thưởng của nhân viên, tính theo phần trăm lương cơ bản'),
(6, 1, 'Thâm niên', 2, 'Thâm niên của nhân viên, tính theo phần trăm lương cơ bản'),
(7, 2, 'Lương cơ bản', 15000000, 'Lương cơ bản của nhân viên, tính bằng Việt Nam Đồng'),
(8, 2, 'Nhà ở', 10, 'Phụ cấp nhà ở của nhân viên, tính bằng Việt Nam Đồng'),
(9, 2, 'Xăng xe', 5, 'Phụ cấp xăng xe của nhân viên, tính bằng Việt Nam Đồng'),
(10, 2, 'Bảo hiểm', 12, 'Bảo hiểm của nhân viên, trừ vào lương cơ bản, tính theo phần trăm lương cơ bản'),
(11, 2, 'Thưởng', 10, 'Thưởng của nhân viên, tính theo phần trăm lương cơ bản'),
(12, 2, 'Thâm niên', 5, 'Thâm niên của nhân viên, tính theo phần trăm lương cơ bản'),
(13, 3, 'Lương cơ bản', 20000000, 'Lương cơ bản của nhân viên, tính bằng Việt Nam Đồng'),
(14, 3, 'Nhà ở', 10, 'Phụ cấp nhà ở của nhân viên, tính bằng Việt Nam Đồng'),
(15, 3, 'Xăng xe', 5, 'Phụ cấp xăng xe của nhân viên, tính bằng Việt Nam Đồng'),
(16, 3, 'Bảo hiểm', 15, 'Bảo hiểm của nhân viên, trừ vào lương cơ bản, tính theo phần trăm lương cơ bản'),
(17, 3, 'Thưởng', 12, 'Thưởng của nhân viên, tính theo phần trăm lương cơ bản'),
(18, 3, 'Thâm niên', 8, 'Thâm niên của nhân viên, tính theo phần trăm lương cơ bản'),
(19, 4, 'Lương cơ bản', 50000000, 'Lương cơ bản của nhân viên, tính bằng Việt Nam Đồng'),
(20, 4, 'Nhà ở', 10, 'Phụ cấp nhà ở của nhân viên, tính bằng Việt Nam Đồng'),
(21, 4, 'Xăng xe', 5, 'Phụ cấp xăng xe của nhân viên, tính bằng Việt Nam Đồng'),
(22, 4, 'Bảo hiểm', 20, 'Bảo hiểm của nhân viên, trừ vào lương cơ bản, tính theo phần trăm lương cơ bản'),
(23, 4, 'Thưởng', 15, 'Thưởng của nhân viên, tính theo phần trăm lương cơ bản'),
(24, 4, 'Thâm niên', 10, 'Thâm niên của nhân viên, tính theo phần trăm lương cơ bản');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `team_lead_id` int(11) DEFAULT 0,
  `department_id` int(11) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `team_lead_id`, `department_id`, `description`, `image`) VALUES
(1, 'Phát triển phần mêm', 0, 1, 'Chịu trách nhiệm xây dựng, phát triển và duy trì phần mềm hoặc sản phẩm công nghệ của công ty. Các chức danh bao gồm lập trình viên, kỹ sư phần mềm, kiến trúc sư phần mềm, và tester.', 'team.avif'),
(2, 'Nghiên cứu và phát triển sản phẩm', 0, 1, 'Tập trung vào nghiên cứu, phát triển sản phẩm mới và cải tiến sản phẩm hiện có. Đây có thể là các nhà nghiên cứu, nhà khoa học dữ liệu, và kiến trúc sư sản phẩm.', ''),
(3, 'Thiết kế sản phẩm', 0, 1, 'Tạo ra giao diện người dùng và trải nghiệm người dùng (UI/UX) hấp dẫn cho sản phẩm. Đây bao gồm các nhà thiết kế đồ họa và thiết kế trải nghiệm người dùng.', ''),
(4, 'Quản lý dự án', 0, 1, 'Giám sát tiến độ, quy trình, và nguồn lực của dự án, đảm bảo các dự án được triển khai một cách hiệu quả và đúng hẹn.', ''),
(5, 'Phát triển kế hoạch kinh doanh', 0, 2, 'Đảm bảo công ty có một chiến lược kinh doanh chi tiết, bao gồm phân đoạn thị trường, phân phối sản phẩm, và lợi nhuận dự kiến.', ''),
(6, 'Tiếp thị và quảng cáo', 0, 2, 'Xây dựng chiến dịch tiếp thị để thu hút khách hàng và quảng bá thương hiệu. Đây bao gồm quảng cáo trực tuyến, truyền hình, in ấn, và nhiều chiến dịch khác.', ''),
(7, 'Phân phối và phát triển thị trường', 0, 2, 'Đảm bảo sản phẩm của công ty được đưa ra thị trường và phân phối một cách hiệu quả và nghiên cứu và phát triển thị trường mới.', ''),
(8, 'Phân tích thị trường', 0, 2, 'Theo dõi và đánh giá thị trường, cạnh tranh, và kết quả của chiến dịch tiếp thị để đưa ra quyết định chiến lược.', ''),
(9, 'Kế toán và tài chính', 0, 3, 'Quản lý tài chính của công ty, bao gồm kế toán, quản lý ngân sách, và báo cáo tài chính.', ''),
(10, 'Quản lý nguồn vốn', 0, 3, 'Quản lý việc huy động và quản lý nguồn vốn cho công ty, bao gồm việc tìm kiếm nhà đầu tư và quản lý vốn.', ''),
(11, 'Thu thuế', 0, 3, 'Đảm bảo công ty tuân thủ tất cả các quy định về thuế và thực hiện các khoản thanh toán thuế đúng hạn.', ''),
(12, 'Chi phối sự phát triển và quản lý sản phẩm', 0, 4, 'Đảm bảo sản phẩm hoặc dịch vụ của công ty đáp ứng nhu cầu của khách hàng và phù hợp với chiến lược kinh doanh.', ''),
(13, 'Hỗ trợ và dịch vụ khách hàng', 0, 5, 'Giải quyết câu hỏi, vấn đề và yêu cầu từ khách hàng, đảm bảo họ nhận được hỗ trợ chất lượng.', ''),
(14, 'Tuyển dụng và phát triển nhân sự', 0, 6, 'Tuyển dụng và đào tạo nhân viên mới, quản lý chương trình phát triển nhân viên, và duy trì hồ sơ nhân viên.', ''),
(15, 'Quản lý mối quan hệ lao động', 0, 6, 'Giải quyết các vấn đề liên quan đến mối quan hệ lao động và thúc đẩy sự hài lòng và hiệu suất của nhân viên.', ''),
(16, 'Quản lý lương và phúc lợi', 0, 6, 'Quản lý quá trình trả lương, phúc lợi và chế độ bảo hiểm cho nhân viên.', ''),
(17, 'Quản lý vấn đề pháp lý', 0, 7, 'Đảm bảo công ty tuân thủ tất cả các quy định pháp lý và hợp đồng.', ''),
(18, 'Bảo mật thông tin và quản lý rủi ro', 0, 7, 'Đảm bảo an toàn thông tin và dữ liệu của công ty, đồng thời đối phó với các rủi ro bảo mật.', ''),
(19, 'Quản lý các dự án cụ thể', 0, 8, 'Quản lý việc thực hiện và tiến độ các dự án cụ thể trong công ty, đảm bảo chúng được triển khai một cách hiệu quả và đúng hẹn.', '');

-- --------------------------------------------------------

--
-- Table structure for table `time_regulations`
--

CREATE TABLE `time_regulations` (
  `id` int(11) NOT NULL,
  `time_work` double NOT NULL,
  `checkin_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `time_regulations`
--

INSERT INTO `time_regulations` (`id`, `time_work`, `checkin_time`) VALUES
(1, 8, '09:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `training`
--

CREATE TABLE `training` (
  `id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `location` text NOT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `training`
--

INSERT INTO `training` (`id`, `employee_id`, `name`, `start_date`, `end_date`, `location`, `description`) VALUES
(1, 1, 'Training 1', '2016-01-01', '2012-01-01', 'Location 1', NULL),
(2, 2, 'Training 2', '2011-01-01', '2015-01-01', 'Location 1', NULL),
(3, 3, 'Training 3', '2012-01-01', '2018-01-01', 'Location 3', NULL),
(4, 4, 'Training 4', '2011-01-01', '2010-01-01', 'Location 4', NULL),
(5, 5, 'Training 5', '2010-01-01', '2010-01-01', 'Location 3', NULL),
(6, 6, 'Training 6', '2016-01-01', '2010-01-01', 'Location 4', NULL),
(7, 7, 'Training 7', '2019-01-01', '2018-01-01', 'Location 5', NULL),
(8, 8, 'Training 8', '2011-01-01', '2011-01-01', 'Location 2', NULL),
(9, 9, 'Training 9', '2019-01-01', '2018-01-01', 'Location 4', NULL),
(10, 10, 'Training 10', '2010-01-01', '2011-01-01', 'Location 4', NULL),
(11, 11, 'Training 11', '2014-01-01', '2011-01-01', 'Location 3', NULL),
(12, 12, 'Training 12', '2016-01-01', '2019-01-01', 'Location 3', NULL),
(13, 13, 'Training 13', '2018-01-01', '2019-01-01', 'Location 4', NULL),
(14, 14, 'Training 14', '2016-01-01', '2016-01-01', 'Location 1', NULL),
(15, 15, 'Training 15', '2018-01-01', '2011-01-01', 'Location 2', NULL),
(16, 16, 'Training 16', '2014-01-01', '2019-01-01', 'Location 5', NULL),
(17, 17, 'Training 17', '2012-01-01', '2018-01-01', 'Location 2', NULL),
(18, 18, 'Training 18', '2014-01-01', '2016-01-01', 'Location 5', NULL),
(19, 19, 'Training 19', '2011-01-01', '2011-01-01', 'Location 1', NULL),
(20, 20, 'Training 20', '2011-01-01', '2016-01-01', 'Location 3', NULL),
(21, 21, 'Training 21', '2017-01-01', '2011-01-01', 'Location 5', NULL),
(22, 22, 'Training 22', '2017-01-01', '2012-01-01', 'Location 1', NULL),
(23, 23, 'Training 23', '2012-01-01', '2010-01-01', 'Location 1', NULL),
(24, 24, 'Training 24', '2010-01-01', '2019-01-01', 'Location 4', NULL),
(25, 25, 'Training 25', '2013-01-01', '2014-01-01', 'Location 1', NULL),
(26, 26, 'Training 26', '2015-01-01', '2014-01-01', 'Location 3', NULL),
(27, 27, 'Training 27', '2015-01-01', '2018-01-01', 'Location 4', NULL),
(28, 28, 'Training 28', '2017-01-01', '2018-01-01', 'Location 5', NULL),
(29, 29, 'Training 29', '2015-01-01', '2013-01-01', 'Location 1', NULL),
(30, 30, 'Training 30', '2018-01-01', '2012-01-01', 'Location 2', NULL),
(41, 41, 'Training 41', '2014-01-01', '2019-01-01', 'Location 4', NULL),
(51, 51, 'Training 51', '2018-01-01', '2013-01-01', 'Location 4', NULL),
(92, 92, 'Training 92', '2016-01-01', '2017-01-01', 'Location 1', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employee_id` (`employee_id`);

--
-- Indexes for table `company_reviews`
--
ALTER TABLE `company_reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reviewer_id` (`reviewer_id`);

--
-- Indexes for table `contact_infomation`
--
ALTER TABLE `contact_infomation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employee_id` (`employee_id`);

--
-- Indexes for table `contracts`
--
ALTER TABLE `contracts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employee_id` (`employee_id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department_reviews`
--
ALTER TABLE `department_reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `department_id` (`department_id`),
  ADD KEY `reviewer_id` (`reviewer_id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rank_id` (`rank_id`),
  ADD KEY `department_id` (`department_id`),
  ADD KEY `team_id` (`team_id`);

--
-- Indexes for table `employee_history`
--
ALTER TABLE `employee_history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employee_id` (`employee_id`),
  ADD KEY `department_id` (`department_id`);

--
-- Indexes for table `employee_reviews`
--
ALTER TABLE `employee_reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employee_id` (`employee_id`),
  ADD KEY `reviewer_id` (`reviewer_id`);

--
-- Indexes for table `leave_requests`
--
ALTER TABLE `leave_requests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employee_id` (`employee_id`);

--
-- Indexes for table `login_infomation`
--
ALTER TABLE `login_infomation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employee_id` (`employee_id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employee_id` (`employee_id`);

--
-- Indexes for table `ranks`
--
ALTER TABLE `ranks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salaries`
--
ALTER TABLE `salaries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `salaries_ibfk_1` (`employee_id`);

--
-- Indexes for table `salary_details`
--
ALTER TABLE `salary_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `salary_id` (`salary_id`),
  ADD KEY `salary_scale_id` (`salary_scale_id`);

--
-- Indexes for table `salary_scales`
--
ALTER TABLE `salary_scales`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rank_id` (`rank_id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `department_id` (`department_id`);

--
-- Indexes for table `time_regulations`
--
ALTER TABLE `time_regulations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `training`
--
ALTER TABLE `training`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employee_id` (`employee_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;

--
-- AUTO_INCREMENT for table `company_reviews`
--
ALTER TABLE `company_reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1001;

--
-- AUTO_INCREMENT for table `contact_infomation`
--
ALTER TABLE `contact_infomation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `contracts`
--
ALTER TABLE `contracts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `department_reviews`
--
ALTER TABLE `department_reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1001;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `employee_history`
--
ALTER TABLE `employee_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `employee_reviews`
--
ALTER TABLE `employee_reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1001;

--
-- AUTO_INCREMENT for table `leave_requests`
--
ALTER TABLE `leave_requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1003;

--
-- AUTO_INCREMENT for table `login_infomation`
--
ALTER TABLE `login_infomation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1001;

--
-- AUTO_INCREMENT for table `ranks`
--
ALTER TABLE `ranks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `salaries`
--
ALTER TABLE `salaries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT for table `salary_details`
--
ALTER TABLE `salary_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `salary_scales`
--
ALTER TABLE `salary_scales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `training`
--
ALTER TABLE `training`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendance`
--
ALTER TABLE `attendance`
  ADD CONSTRAINT `attendance_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `company_reviews`
--
ALTER TABLE `company_reviews`
  ADD CONSTRAINT `company_reviews_ibfk_1` FOREIGN KEY (`reviewer_id`) REFERENCES `employees` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `contact_infomation`
--
ALTER TABLE `contact_infomation`
  ADD CONSTRAINT `contact_infomation_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `contracts`
--
ALTER TABLE `contracts`
  ADD CONSTRAINT `contracts_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `department_reviews`
--
ALTER TABLE `department_reviews`
  ADD CONSTRAINT `department_reviews_ibfk_1` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `department_reviews_ibfk_2` FOREIGN KEY (`reviewer_id`) REFERENCES `employees` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `employees_ibfk_1` FOREIGN KEY (`rank_id`) REFERENCES `ranks` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `employees_ibfk_2` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `employees_ibfk_3` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `employee_history`
--
ALTER TABLE `employee_history`
  ADD CONSTRAINT `employee_history_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `employee_history_ibfk_2` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `employee_reviews`
--
ALTER TABLE `employee_reviews`
  ADD CONSTRAINT `employee_reviews_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `employee_reviews_ibfk_2` FOREIGN KEY (`reviewer_id`) REFERENCES `employees` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `leave_requests`
--
ALTER TABLE `leave_requests`
  ADD CONSTRAINT `leave_requests_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `login_infomation`
--
ALTER TABLE `login_infomation`
  ADD CONSTRAINT `login_infomation_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `notifications`
--
ALTER TABLE `notifications`
  ADD CONSTRAINT `notifications_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `salaries`
--
ALTER TABLE `salaries`
  ADD CONSTRAINT `salaries_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `salary_details`
--
ALTER TABLE `salary_details`
  ADD CONSTRAINT `salary_details_ibfk_1` FOREIGN KEY (`salary_id`) REFERENCES `salaries` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `salary_details_ibfk_2` FOREIGN KEY (`salary_scale_id`) REFERENCES `salary_scales` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `salary_scales`
--
ALTER TABLE `salary_scales`
  ADD CONSTRAINT `salary_scales_ibfk_1` FOREIGN KEY (`rank_id`) REFERENCES `ranks` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `teams`
--
ALTER TABLE `teams`
  ADD CONSTRAINT `teams_ibfk_1` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `training`
--
ALTER TABLE `training`
  ADD CONSTRAINT `training_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
