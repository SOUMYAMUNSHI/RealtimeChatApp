-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2024 at 04:22 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chatapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `sl` int(255) NOT NULL,
  `senderId` varchar(255) NOT NULL,
  `receiverId` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `DateTime` varchar(255) NOT NULL,
  `MessageStatus` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`sl`, `senderId`, `receiverId`, `message`, `DateTime`, `MessageStatus`) VALUES
(346, 'SoumyaMunshi', 'MrX', 'hi', '2024-09-30 18:16:54', 0),
(450, 'MrX', 'SoumyaMunshi', 'hello', '2024-09-30 21:07:46', 0),
(666, 'MrX', 'MrY', 'Hello', '', NULL),
(667, 'MrZ', 'MrX', 'Hello', '', NULL),
(668, 'SoumyaMunshi', 'MrY', 'Hello', '', NULL),
(669, 'MrY', 'MrX', 'hello', '2024-10-02 17:56:04', 0),
(670, 'MrX', 'MrY', 'hello', '2024-10-02 17:56:10', 0),
(671, 'MrY', 'MrX', 'd', '2024-10-02 17:56:26', 0),
(672, 'MrX', 'MrY', 'hello', '2024-10-02 17:56:29', 0),
(673, 'MrY', 'MrX', 'full', '2024-10-02 17:56:36', 0),
(674, 'MrY', 'MrX', '', '2024-10-02 17:56:36', 0),
(675, 'MrY', 'MrX', 'full', '2024-10-02 17:56:42', 0),
(676, 'MrX', 'MrY', 'go', '2024-10-02 17:56:52', 0),
(677, 'MrY', 'MrX', 'full', '2024-10-02 17:56:56', 0),
(678, 'MrX', 'MrY', 'ok', '2024-10-02 17:57:02', 0),
(679, 'MrY', 'MrX', 'yes', '2024-10-02 17:57:07', 0),
(680, 'MrY', 'MrX', 'done', '2024-10-02 17:57:11', 0),
(681, 'MrY', 'MrX', 'go', '2024-10-02 17:57:14', 0),
(682, 'MrY', 'MrX', 'go', '2024-10-02 17:57:18', 0),
(683, 'MrY', 'MrX', 'hi', '2024-10-02 17:57:28', 0),
(684, 'MrX', 'MrY', 'hello', '2024-10-02 17:57:31', 0),
(685, 'MrY', 'SoumyaMunshi', 'hi', '2024-10-02 17:57:54', 0),
(686, 'SoumyaMunshi', 'MrY', 'Hello man', '2024-10-02 17:58:06', 0),
(687, 'MrY', 'SoumyaMunshi', 'hi', '2024-10-02 17:58:19', 0),
(688, 'MrY', 'SoumyaMunshi', 'hi', '2024-10-02 17:58:33', 0),
(689, 'MrY', 'SoumyaMunshi', 'hello', '2024-10-02 17:58:40', 0),
(690, 'MrY', 'SoumyaMunshi', 'ok', '2024-10-02 17:58:43', 0),
(691, 'SoumyaMunshi', 'MrY', 'gi', '2024-10-02 17:58:47', 0),
(692, 'SoumyaMunshi', 'MrY', 'ioiou', '2024-10-02 17:58:54', 0),
(693, 'SoumyaMunshi', 'MrY', 'Hello man', '2024-10-02 17:58:57', 0),
(694, 'SoumyaMunshi', 'MrY', 'You ok?', '2024-10-02 17:59:01', 0),
(695, 'SoumyaMunshi', 'MrY', 'ioiou', '2024-10-02 17:59:04', 0),
(696, 'SoumyaMunshi', 'MrY', 'Its me mr x', '2024-10-02 17:59:06', 0),
(697, 'MrY', 'MrX', 'hello', '2024-10-02 18:09:48', 0),
(698, 'MrX', 'MrY', 'ok', '2024-10-02 18:09:52', 0),
(699, 'MrX', 'MrY', 'go', '2024-10-02 18:09:55', 0),
(700, 'MrY', 'MrX', 'hi', '2024-10-02 18:09:58', 0),
(701, 'SoumyaMunshi', 'MrY', 'hello Mr Y its a new message', '2024-10-02 18:11:02', 0),
(702, 'MrY', 'SoumyaMunshi', 'hi', '2024-10-02 18:11:51', 0),
(703, 'SoumyaMunshi', 'MrY', 'gi', '2024-10-02 18:11:55', 0),
(704, 'SoumyaMunshi', 'MrY', 'hello Mr Y its a new message', '2024-10-02 18:12:08', 0),
(705, 'MrY', 'SoumyaMunshi', 'ok', '2024-10-02 18:12:14', 0),
(706, 'MrX', 'SoumyaMunshi', 'hello', '2024-10-02 18:14:58', 0),
(707, 'SoumyaMunshi', 'MrX', 'You ok?', '2024-10-02 18:15:10', 0),
(708, 'MrX', 'SoumyaMunshi', 'yes', '2024-10-02 18:15:18', 0),
(709, 'MrX', 'SoumyaMunshi', 'hello', '2024-10-04 20:50:48', 0),
(710, 'MrX', 'SoumyaMunshi', 'hello', '2024-10-04 20:50:53', 0),
(711, 'MrX', 'SoumyaMunshi', 'hello world', '2024-10-06 09:35:18', 0),
(712, 'SoumyaMunshi', 'MrX', 'You ok?', '2024-10-06 09:35:25', 0),
(713, 'MrX', 'SoumyaMunshi', 'hello1', '2024-10-06 09:35:45', 0),
(714, 'SoumyaMunshi', 'MrX', 'hi', '2024-10-06 09:35:56', 0),
(715, '7319332362', 'SoumyaMunshi', 'Hello', '2024-10-10 19:08:58', 0),
(716, 'SoumyaMunshi', '7319332362', 'Hi', '2024-10-10 19:09:07', 0),
(717, 'SoumyaMunshi', '7319332362', 'hello Mr Y its a new message', '2024-10-10 19:09:18', 0),
(718, '7319332362', 'SoumyaMunshi', 'ok', '2024-10-10 19:09:23', 0),
(719, 'SoumyaMunshi', '7319332362', 'Hello man', '2024-10-10 19:09:48', 0),
(720, '7319332362', 'SoumyaMunshi', 'hello', '2024-10-10 19:09:52', 0),
(721, 'SoumyaMunshi', '7319332362', 'hello Mr Y its a new message', '2024-10-10 19:09:58', 0),
(722, '7319332362', 'SoumyaMunshi', 'as', '2024-10-10 19:10:02', 0),
(723, 'MrX', 'SoumyaMunshi', 'helo', '2024-10-11 19:54:59', 0),
(724, 'MrX', 'aa', 'hi', '2024-10-13 09:39:57', 0),
(725, 'aa', 'MrX', 'You ok?', '2024-10-13 09:40:24', 0),
(726, 'MrX', 'aa', 'go', '2024-10-13 09:40:41', 0),
(727, 'MrX', 'hello', 'hello', '2024-10-13 10:13:02', 0),
(728, 'hello', 'MrX', 'gi', '2024-10-13 10:13:10', 0),
(729, 'MrX', 'hello', 'go', '2024-10-13 10:13:18', 0),
(730, 'hello', 'MrX', 'Hello again', '2024-10-13 10:13:26', 0),
(731, 'MrX', 'hello', 'go', '2024-10-13 10:13:37', 0),
(732, 'hello', 'MrX', 'Hello man', '2024-10-13 10:13:44', 0),
(733, 'MrX', 'SoumyaMunshi', 'hello', '2024-10-14 08:24:14', 0),
(734, 'SoumyaMunshi', 'MrX', 'Hello man', '2024-10-14 08:25:36', 0),
(735, 'SoumyaMunshi', 'MrX', 'You ok?', '2024-10-14 08:35:21', 0),
(736, 'MrX', 'SoumyaMunshi', 'hello', '2024-10-14 08:35:44', 0),
(737, 'MrX', 'SoumyaMunshi', 'go', '2024-10-14 08:37:30', 0),
(738, 'SoumyaMunshi', 'MrX', 'You ok?', '2024-10-14 08:37:47', 0),
(739, 'MrX', 'SoumyaMunshi', 'hello', '2024-10-14 08:38:09', 0),
(740, 'SoumyaMunshi', 'MrX', 'Hello man', '2024-10-14 08:38:20', 0),
(741, 'MrX', 'SoumyaMunshi', 'ok', '2024-10-14 08:38:33', 0),
(742, 'SoumyaMunshi', 'MrX', 'hello Mr Y its a new message', '2024-10-14 08:39:30', 0),
(743, 'MrX', 'SoumyaMunshi', 'hello', '2024-10-14 08:40:06', 0),
(744, 'SoumyaMunshi', 'MrX', 'Hello man', '2024-10-14 08:44:09', 0),
(745, 'MrX', 'SoumyaMunshi', 'ok', '2024-10-14 08:44:15', 0),
(746, 'aa', 'SoumyaMunshi', 'hello', '2024-10-14 19:34:07', 0),
(747, 'MrX', 'SoumyaMunshi', 'hello', '2024-10-16 20:26:18', 0),
(748, 'MrX', 'SoumyaMunshi', 'hi its from mr x', '2024-10-16 20:31:04', 0),
(749, 'SoumyaMunshi', 'MrX', 'Hello again', '2024-10-16 20:31:12', 0),
(750, 'MrX', 'SoumyaMunshi', 'hello', '2024-10-24 17:46:05', 0),
(751, 'SoumyaMunshi', 'MrX', 'hi', '2024-10-24 17:46:24', 0),
(752, 'MrX', 'SoumyaMunshi', 'go', '2024-10-24 17:46:31', 0),
(753, 'SoumyaMunshi', 'MrX', 'hello', '2024-10-24 17:46:41', 0),
(754, 'MrX', 'SoumyaMunshi', 'as', '2024-10-24 17:46:46', 0),
(755, 'MrX', 'SoumyaMunshi', 'hi', '2024-10-24 18:10:27', 0),
(756, 'MrX', 'SoumyaMunshi', 'go', '2024-10-24 18:10:31', 0),
(757, 'SoumyaMunshi', 'MrX', 'hello', '2024-10-24 18:10:41', 0),
(758, 'SoumyaMunshi', 'MrX', 'hello', '2024-10-24 18:11:03', 0),
(759, 'MrX', 'SoumyaMunshi', 'as', '2024-10-24 18:11:12', 0),
(760, 'SoumyaMunshi', 'MrX', 'hi', '2024-10-24 18:11:19', 0),
(761, 'SoumyaMunshi', 'MrX', 'hello', '2024-10-24 18:13:49', 0),
(762, 'MrX', 'SoumyaMunshi', 'hi', '2024-10-24 18:14:04', 0),
(763, 'SoumyaMunshi', 'MrX', 'hello new', '2024-10-24 18:14:24', 0),
(764, 'MrX', 'SoumyaMunshi', 'as', '2024-10-24 18:14:38', 0),
(765, 'SoumyaMunshi', 'MrX', 'hello new', '2024-10-24 18:14:54', 0),
(766, 'MrX', 'SoumyaMunshi', 'ok', '2024-10-24 18:16:53', 0),
(767, 'MrX', 'SoumyaMunshi', 'f', '2024-10-24 18:18:26', 0),
(768, 'MrX', 'SoumyaMunshi', 'ok', '2024-10-24 18:32:42', 0),
(769, 'SoumyaMunshi', 'MrX', 'hi', '2024-10-24 18:32:55', 0),
(770, 'MrX', 'SoumyaMunshi', 'hello', '2024-10-24 18:33:01', 0),
(771, 'SoumyaMunshi', 'MrX', 'do', '2024-10-24 18:33:07', 0),
(772, 'SoumyaMunshi', 'MrX', 'dopfuyhf', '2024-10-24 18:33:18', 0),
(773, 'MrX', 'SoumyaMunshi', 'zfz', '2024-10-24 18:33:23', 0),
(774, 'MrX', 'SoumyaMunshi', 'go', '2024-10-24 18:34:54', 0),
(775, 'SoumyaMunshi', 'MrX', 'do', '2024-10-24 18:35:09', 0),
(776, 'MrX', 'SoumyaMunshi', 'ok', '2024-10-24 18:35:13', 0),
(777, 'SoumyaMunshi', 'MrX', 'do', '2024-10-24 18:35:20', 0),
(778, 'MrX', 'SoumyaMunshi', 'hello', '2024-10-24 18:35:25', 0),
(779, 'SoumyaMunshi', 'MrX', 'how atr yudg', '2024-10-24 18:35:34', 0),
(780, 'MrX', 'SoumyaMunshi', 'hfyajbcjzh', '2024-10-24 18:35:40', 0),
(781, 'SoumyaMunshi', 'MrX', 'how atr yudg', '2024-10-24 18:35:55', 0),
(782, 'MrX', 'SoumyaMunshi', 'hello', '2024-10-24 18:36:03', 0),
(783, 'SoumyaMunshi', 'MrX', 'domnzxccjxh', '2024-10-24 18:36:12', 0),
(784, 'MrY', 'MrX', 'How are you?', '2024-10-24 18:37:17', 0),
(785, 'MrX', 'MrY', 'hello', '2024-10-24 18:37:35', 0),
(786, 'MrY', 'MrX', 'hi', '2024-10-24 18:37:39', 0),
(787, 'MrX', 'MrY', 'ok', '2024-10-24 18:37:44', 0),
(788, 'MrY', 'MrX', 'dfgjy', '2024-10-24 18:37:49', 0),
(789, 'SoumyaMunshi', 'MrY', 'how atr yudg', '2024-10-24 18:38:11', 0),
(790, 'MrY', 'SoumyaMunshi', 'hi', '2024-10-24 18:38:23', 0),
(791, 'SoumyaMunshi', 'MrY', 'domnzxccjxh', '2024-10-24 18:38:32', 0),
(792, 'MrY', 'SoumyaMunshi', 'ok', '2024-10-24 18:38:38', 0),
(793, 'SoumyaMunshi', 'MrY', 'domnzxccjxh', '2024-10-24 18:38:44', 0),
(794, 'SoumyaMunshi', 'MrX', 'do', '2024-10-24 18:57:25', 0),
(795, 'MrX', 'SoumyaMunshi', 'ok', '2024-10-24 18:57:31', 0),
(796, 'SoumyaMunshi', 'MrX', 'jo', '2024-10-24 19:02:22', 0),
(797, 'MrX', 'SoumyaMunshi', 'ho', '2024-10-24 19:02:35', 0),
(798, 'MrX', 'SoumyaMunshi', 'jo', '2024-10-24 19:02:46', 0),
(799, 'MrX', 'SoumyaMunshi', 'kp', '2024-10-24 19:02:52', 0),
(800, 'SoumyaMunshi', 'MrX', 'hi', '2024-10-24 19:02:57', 0),
(801, 'SoumyaMunshi', 'MrX', 'hi', '2024-10-24 19:03:43', 0),
(802, 'MrX', 'SoumyaMunshi', 'fukugSGytc', '2024-10-24 19:04:00', 0),
(803, 'SoumyaMunshi', 'MrX', 'fuvj', '2024-10-24 19:04:10', 0),
(804, 'SoumyaMunshi', 'MrX', 'do', '2024-10-24 19:47:24', 0),
(805, 'MrX', 'SoumyaMunshi', 'ok', '2024-10-24 19:47:29', 0),
(806, 'MrX', 'SoumyaMunshi', 'hello', '2024-10-24 19:47:49', 0),
(807, 'SoumyaMunshi', 'MrX', 'hi', '2024-10-24 19:48:06', 0),
(808, 'MrX', 'SoumyaMunshi', 'hello', '2024-10-24 20:08:18', 0),
(809, 'SoumyaMunshi', 'MrX', 'domnzxccjxh', '2024-10-24 20:08:32', 0),
(810, 'SoumyaMunshi', 'MrX', 'jo', '2024-10-24 20:14:16', 0),
(811, 'MrX', 'SoumyaMunshi', 'as', '2024-10-24 20:14:21', 0),
(812, 'SoumyaMunshi', 'MrX', 'do', '2024-10-24 20:14:44', 0),
(813, 'MrX', 'SoumyaMunshi', 'as', '2024-10-24 20:14:47', 0),
(814, 'MrX', 'SoumyaMunshi', 'ok', '2024-10-24 20:27:04', 0),
(815, 'SoumyaMunshi', 'MrX', 'how atr yudg', '2024-10-24 20:27:07', 0),
(816, 'SoumyaMunshi', 'MrX', 'how atr yudg', '2024-10-24 20:27:47', 0),
(817, 'MrX', 'SoumyaMunshi', 'as', '2024-10-24 20:27:52', 0),
(818, 'MrX', 'SoumyaMunshi', 'hello', '2024-10-24 20:28:52', 0),
(819, 'SoumyaMunshi', 'MrX', 'domnzxccjxh', '2024-10-24 20:28:57', 0),
(820, 'MrX', 'SoumyaMunshi', 'as', '2024-10-24 22:14:15', 0),
(821, 'SoumyaMunshi', 'MrX', 'jo', '2024-10-24 22:14:18', 0),
(822, 'SoumyaMunshi', 'MrX', 'hi', '2024-10-24 22:14:26', 0),
(823, 'MrX', 'SoumyaMunshi', 'ok', '2024-10-24 22:14:30', 0),
(824, 'SoumyaMunshi', 'MrX', 'domnzxccjxh', '2024-10-24 22:14:39', 0),
(825, 'MrX', 'SoumyaMunshi', 'go', '2024-10-24 22:14:43', 0),
(826, 'MrX', 'SoumyaMunshi', 'as', '2024-10-24 22:14:50', 0),
(827, 'MrX', 'SoumyaMunshi', 'hello', '2024-10-24 22:14:59', 0),
(828, 'MrX', 'SoumyaMunshi', 'hello again', '2024-10-24 22:15:07', 0),
(829, 'SoumyaMunshi', 'MrX', 'do', '2024-10-24 22:15:18', 0),
(830, 'MrX', 'SoumyaMunshi', 'f', '2024-10-24 22:15:23', 0),
(831, 'SoumyaMunshi', 'MrX', 'domnzxccjxh', '2024-10-24 22:18:14', 0),
(832, 'MrX', 'SoumyaMunshi', 'go', '2024-10-24 22:18:18', 0),
(833, 'SoumyaMunshi', 'MrX', 'how atr yudg', '2024-10-24 22:18:23', 0),
(834, 'MrX', 'SoumyaMunshi', 'hello again f', '2024-10-24 22:18:30', 0),
(835, 'SoumyaMunshi', 'MrY', 'domnzxccjxh', '2024-10-24 22:20:12', 0),
(836, 'MrY', 'MrX', 'dfgjy', '2024-10-24 22:20:19', 0),
(837, 'MrX', 'MrY', 'ok', '2024-10-24 22:20:45', 0),
(838, 'MrY', 'MrX', 'ok', '2024-10-24 22:20:50', 0),
(839, 'MrX', 'SoumyaMunshi', 'f', '2024-10-24 22:43:49', 0),
(840, 'SoumyaMunshi', 'MrX', 'domnzxccjxh', '2024-10-24 22:43:54', 0),
(841, 'MrX', 'SoumyaMunshi', 'ok', '2024-10-24 22:44:40', 0),
(842, 'SoumyaMunshi', 'MrX', 'domnzxccjxh', '2024-10-24 22:44:45', 0),
(843, 'SoumyaMunshi', 'MrX', 'domnzxccjxh', '2024-10-24 22:45:01', 0),
(844, 'SoumyaMunshi', 'MrX', 'do', '2024-10-25 12:15:21', 0),
(845, 'MrX', 'SoumyaMunshi', 'f', '2024-10-25 12:15:31', 0),
(846, 'SoumyaMunshi', 'MrX', 'domnzxccjxh', '2024-10-25 12:15:39', 0),
(847, 'MrX', 'SoumyaMunshi', 'go', '2024-10-25 12:15:43', 0),
(848, 'SoumyaMunshi', 'MrX', 'do', '2024-10-25 12:15:46', 0),
(849, 'MrX', 'SoumyaMunshi', 'as', '2024-10-25 12:15:51', 0),
(850, 'SoumyaMunshi', 'MrX', 'domnzxccjxh', '2024-10-25 12:15:55', 0),
(851, 'MrX', 'SoumyaMunshi', 'f', '2024-10-25 12:16:00', 0),
(852, 'SoumyaMunshi', 'MrX', 'do', '2024-10-25 12:16:03', 0),
(853, 'MrX', 'SoumyaMunshi', 'ok', '2024-10-25 12:16:12', 0),
(854, 'SoumyaMunshi', 'MrX', 'domnzxccjxh', '2024-10-25 12:16:16', 0),
(855, 'MrX', 'SoumyaMunshi', 'hello', '2024-10-25 12:16:21', 0),
(856, 'SoumyaMunshi', 'MrX', 'domnzxccjxh dsdafsf', '2024-10-25 12:16:27', 0),
(857, 'SoumyaMunshi', 'MrX', 'do', '2024-10-25 12:16:34', 0),
(858, 'MrX', 'SoumyaMunshi', 'ok', '2024-10-25 12:16:37', 0),
(859, 'MrY', 'MrX', 'hi', '2024-10-25 12:17:20', 0),
(860, 'MrX', 'MrY', 'hello', '2024-10-25 12:17:28', 0),
(861, 'MrY', 'MrX', 'ok', '2024-10-25 12:17:37', 0),
(862, 'SoumyaMunshi', 'MrX', 'domnzxccjxh', '2024-10-25 12:17:42', 0),
(863, 'SoumyaMunshi', 'MrY', 'domnzxccjxh', '2024-10-25 12:17:54', 0),
(864, 'SoumyaMunshi', 'MrX', 'hi', '2024-10-25 12:48:27', 0),
(865, 'MrX', 'SoumyaMunshi', 'hi', '2024-10-25 12:48:34', 0),
(866, 'SoumyaMunshi', 'MrX', 'domnzxccjxh', '2024-10-25 12:48:38', 0),
(867, 'MrX', 'SoumyaMunshi', 'go', '2024-10-25 12:48:42', 0),
(868, 'SoumyaMunshi', 'MrX', 'domnzxccjxh', '2024-10-25 12:48:52', 0),
(869, 'MrX', 'SoumyaMunshi', 'hello', '2024-10-25 12:48:58', 0),
(870, 'SoumyaMunshi', 'MrX', 'domnzxccjxh', '2024-10-25 12:49:05', 0),
(871, 'MrX', 'SoumyaMunshi', 'hello', '2024-10-25 12:49:09', 0),
(872, 'MrY', 'MrX', 'ok', '2024-10-25 12:49:27', 0),
(873, 'MrX', 'MrY', 'hello', '2024-10-25 12:49:37', 0),
(874, 'MrY', 'MrX', 'hi', '2024-10-25 12:49:48', 0),
(875, 'MrX', 'MrY', 'hello', '2024-10-25 12:49:55', 0),
(876, 'MrY', 'MrX', 'hi', '2024-10-25 12:49:59', 0),
(877, 'MrX', 'MrY', 'ok', '2024-10-25 12:50:04', 0),
(878, 'MrY', 'SoumyaMunshi', 'hi', '2024-10-25 12:50:19', 0),
(879, 'SoumyaMunshi', 'MrY', 'domnzxccjxh', '2024-10-25 12:50:28', 0),
(880, 'MrY', 'SoumyaMunshi', 'hi', '2024-10-25 12:50:34', 0),
(881, 'SoumyaMunshi', 'MrY', 'jo', '2024-10-25 12:50:42', 0),
(882, 'MrY', 'SoumyaMunshi', 'dfgjy', '2024-10-25 12:50:49', 0),
(883, 'SoumyaMunshi', 'MrY', 'jo', '2024-10-25 12:50:53', 0),
(884, 'MrY', 'SoumyaMunshi', 'hi', '2024-10-25 12:51:01', 0),
(885, 'SoumyaMunshi', 'MrX', 'domnzxccjxh', '2024-10-25 12:51:10', 0),
(886, 'MrX', 'SoumyaMunshi', 'ok', '2024-10-25 12:51:15', 0),
(887, 'SoumyaMunshi', 'MrX', 'jo', '2024-10-25 12:51:25', 0),
(888, 'MrX', 'SoumyaMunshi', 'as', '2024-10-25 12:51:32', 0),
(889, 'SoumyaMunshi', 'aa', 'hi', '2024-10-25 12:52:09', 0),
(890, 'SoumyaMunshi', 'MrX', 'domnzxccjxh', '2024-10-25 12:52:16', 0),
(891, 'SoumyaMunshi', 'MrY', 'domnzxccjxh', '2024-10-25 12:52:22', 0),
(892, 'SoumyaMunshi', 'MrX', 'how atr yudg', '2024-10-25 12:52:29', 0),
(893, 'MrX', 'SoumyaMunshi', 'hello', '2024-10-27 10:57:44', 0),
(894, 'SoumyaMunshi', 'MrX', 'hi', '2024-10-27 10:57:54', 0),
(895, 'MrX', 'SoumyaMunshi', 'ok', '2024-10-27 10:58:00', 0),
(896, 'SoumyaMunshi', 'MrX', 'how are you?', '2024-10-27 10:58:54', 0),
(897, 'SoumyaMunshi', 'MrX', 'hi', '2024-10-27 11:01:50', 0),
(898, 'MrX', 'SoumyaMunshi', 'hello', '2024-10-27 11:01:57', 0),
(899, 'SoumyaMunshi', 'MrX', 'domnzxccjxh', '2024-10-27 11:02:06', 0),
(900, 'MrX', 'SoumyaMunshi', 'ok', '2024-10-27 11:02:11', 0),
(901, 'MrX', 'SoumyaMunshi', 'go', '2024-10-27 11:02:25', 0),
(902, 'SoumyaMunshi', 'MrX', 'how atr yudg', '2024-10-27 11:02:32', 0),
(903, 'MrX', 'SoumyaMunshi', 'HI', '2024-11-08 13:32:01', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tempmessage`
--

CREATE TABLE `tempmessage` (
  `sl` int(11) NOT NULL,
  `senderId` varchar(255) NOT NULL,
  `receiverId` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `DateTime` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `userdetails`
--

CREATE TABLE `userdetails` (
  `sl` int(11) NOT NULL,
  `userSl` varchar(255) NOT NULL,
  `userId` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `DateTime` varchar(255) NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userdetails`
--

INSERT INTO `userdetails` (`sl`, `userSl`, `userId`, `password`, `DateTime`, `status`, `email`) VALUES
(1, '1', 'SoumyaMunshi', 'admin', '28-11-2024 19:58:45', '0', 'demo@gmail.com'),
(2, '2', 'MrX', 'admin', '28-11-2024 19:57:48', '0', 'demo2@dmai.com'),
(3, '', 'MrY', 'admin', '25-10-2024 13:19:33', '0', 'admin@gmail.com'),
(4, '', 'MrZ', 'admin', '14-10-2024 09:16:50', '0', 'admin@gmail.com'),
(5, '', 'demo', 'admin', '14-10-2024 09:16:50', '0', 'demo@gmail.com'),
(10, '22', '12345678910', 'admin', '14-10-2024 09:16:50', '0', '12345678910@gmail.com'),
(11, '23', 'aa', 'admin', '14-10-2024 19:34:25', '0', 'aa@gmail.com'),
(12, '24', 'hello', 'admin', '14-10-2024 19:26:28', '0', 'hello@gamil.com');

-- --------------------------------------------------------

--
-- Table structure for table `userlist`
--

CREATE TABLE `userlist` (
  `userSl` int(255) NOT NULL,
  `userId` varchar(255) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `ActiveStatus` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userlist`
--

INSERT INTO `userlist` (`userSl`, `userId`, `userName`, `ActiveStatus`) VALUES
(1, 'SoumyaMunshi', 'Soumya Munshi Demo', 1),
(2, 'MrX', 'Mr X', 1),
(16, 'MrY', 'Mr Y', 1),
(17, 'MrZ', 'Mr Z', 1),
(21, 'Its_Mr_Noob', 'MrA', 1),
(22, '12345678910', 'Soumya', 1),
(23, 'aa', 'AA', 1),
(24, 'hello', 'hello', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`sl`);

--
-- Indexes for table `tempmessage`
--
ALTER TABLE `tempmessage`
  ADD PRIMARY KEY (`sl`);

--
-- Indexes for table `userdetails`
--
ALTER TABLE `userdetails`
  ADD PRIMARY KEY (`sl`);

--
-- Indexes for table `userlist`
--
ALTER TABLE `userlist`
  ADD PRIMARY KEY (`userSl`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `sl` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=904;

--
-- AUTO_INCREMENT for table `tempmessage`
--
ALTER TABLE `tempmessage`
  MODIFY `sl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=330;

--
-- AUTO_INCREMENT for table `userdetails`
--
ALTER TABLE `userdetails`
  MODIFY `sl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `userlist`
--
ALTER TABLE `userlist`
  MODIFY `userSl` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
