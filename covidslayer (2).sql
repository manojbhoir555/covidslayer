-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 19, 2020 at 08:04 AM
-- Server version: 5.6.49-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `covidslayer`
--

-- --------------------------------------------------------

--
-- Table structure for table `commentry`
--

CREATE TABLE `commentry` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `gameid` int(11) NOT NULL,
  `description` varchar(256) NOT NULL,
  `createdat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `commentry`
--

INSERT INTO `commentry` (`id`, `user_id`, `gameid`, `description`, `createdat`, `updatedat`) VALUES
(1, 1, 3, 'manoj Attack the dragon by 4', '2020-10-19 02:10:46', '2020-10-19 02:10:46'),
(2, 1, 3, 'Dragon Attack the manoj by 9', '2020-10-19 02:10:46', '2020-10-19 02:10:46'),
(3, 1, 4, 'manoj Attack the dragon by 9', '2020-10-19 02:12:32', '2020-10-19 02:12:32'),
(4, 1, 4, 'Dragon Attack the manoj by 7', '2020-10-19 02:12:32', '2020-10-19 02:12:32'),
(5, 1, 4, 'manoj Blast the dragon by  10', '2020-10-19 02:12:39', '2020-10-19 02:12:39'),
(6, 1, 4, 'Dragon Attack the manoj by 4', '2020-10-19 02:12:39', '2020-10-19 02:12:39'),
(7, 1, 4, 'manoj Attack the dragon by 6', '2020-10-19 02:14:23', '2020-10-19 02:14:23'),
(8, 1, 4, 'Dragon Attack the manoj by 5', '2020-10-19 02:14:23', '2020-10-19 02:14:23'),
(9, 1, 4, 'manoj Attack the dragon by 8', '2020-10-19 02:15:41', '2020-10-19 02:15:41'),
(10, 1, 4, 'Dragon Attack the manoj by 8', '2020-10-19 02:15:41', '2020-10-19 02:15:41'),
(11, 1, 4, 'manoj Attack the dragon by 1', '2020-10-19 02:16:25', '2020-10-19 02:16:25'),
(12, 1, 4, 'Dragon Attack the manoj by 3', '2020-10-19 02:16:25', '2020-10-19 02:16:25'),
(13, 1, 4, 'manoj Attack the dragon by 5', '2020-10-19 02:17:11', '2020-10-19 02:17:11'),
(14, 1, 4, 'Dragon Attack the manoj by 4', '2020-10-19 02:17:11', '2020-10-19 02:17:11'),
(15, 1, 4, 'manoj Blast the dragon by  10', '2020-10-19 02:17:17', '2020-10-19 02:17:17'),
(16, 1, 4, 'Dragon Attack the manoj by 1', '2020-10-19 02:17:17', '2020-10-19 02:17:17'),
(17, 1, 4, 'manoj Healing his power by  15', '2020-10-19 02:17:26', '2020-10-19 02:17:26'),
(18, 1, 4, 'Dragon Attack the manoj by 4', '2020-10-19 02:17:26', '2020-10-19 02:17:26'),
(19, 1, 4, 'manoj give up the game to the dragon ', '2020-10-19 02:17:32', '2020-10-19 02:17:32'),
(20, 1, 4, 'manoj Attack the dragon by 6', '2020-10-19 02:31:00', '2020-10-19 02:31:00'),
(21, 1, 4, 'Dragon Attack the manoj by 2', '2020-10-19 02:31:00', '2020-10-19 02:31:00'),
(22, 1, 4, 'manoj Attack the dragon by 9', '2020-10-19 02:31:05', '2020-10-19 02:31:05'),
(23, 1, 4, 'Dragon Attack the manoj by 3', '2020-10-19 02:31:05', '2020-10-19 02:31:05'),
(24, 1, 4, 'manoj Attack the dragon by 3', '2020-10-19 02:31:05', '2020-10-19 02:31:05'),
(25, 1, 4, 'Dragon Attack the manoj by 10', '2020-10-19 02:31:05', '2020-10-19 02:31:05'),
(26, 1, 4, 'manoj Attack the dragon by 9', '2020-10-19 02:31:05', '2020-10-19 02:31:05'),
(27, 1, 4, 'Dragon Attack the manoj by 1', '2020-10-19 02:31:05', '2020-10-19 02:31:05'),
(28, 1, 4, 'manoj Attack the dragon by 6', '2020-10-19 02:31:06', '2020-10-19 02:31:06'),
(29, 1, 4, 'Dragon Attack the manoj by 5', '2020-10-19 02:31:06', '2020-10-19 02:31:06'),
(30, 1, 4, 'manoj Attack the dragon by 2', '2020-10-19 02:31:06', '2020-10-19 02:31:06'),
(31, 1, 4, 'Dragon Attack the manoj by 8', '2020-10-19 02:31:06', '2020-10-19 02:31:06'),
(32, 1, 4, 'manoj Attack the dragon by 1', '2020-10-19 02:31:06', '2020-10-19 02:31:06'),
(33, 1, 4, 'Dragon Attack the manoj by 9', '2020-10-19 02:31:06', '2020-10-19 02:31:06'),
(34, 1, 4, 'manoj Attack the dragon by 6', '2020-10-19 02:31:06', '2020-10-19 02:31:06'),
(35, 1, 4, 'Dragon Attack the manoj by 7', '2020-10-19 02:31:06', '2020-10-19 02:31:06'),
(36, 1, 4, 'manoj Attack the dragon by 1', '2020-10-19 02:31:06', '2020-10-19 02:31:06'),
(37, 1, 4, 'Dragon Attack the manoj by 10', '2020-10-19 02:31:06', '2020-10-19 02:31:06'),
(38, 1, 4, 'manoj Attack the dragon by 4', '2020-10-19 02:31:06', '2020-10-19 02:31:06'),
(39, 1, 4, 'Dragon Attack the manoj by 6', '2020-10-19 02:31:06', '2020-10-19 02:31:06'),
(40, 1, 4, 'manoj Attack the dragon by 9', '2020-10-19 02:31:07', '2020-10-19 02:31:07'),
(41, 1, 4, 'Dragon Attack the manoj by 4', '2020-10-19 02:31:07', '2020-10-19 02:31:07'),
(42, 1, 4, 'manoj Attack the dragon by 4', '2020-10-19 02:31:07', '2020-10-19 02:31:07'),
(43, 1, 4, 'Dragon Attack the manoj by 3', '2020-10-19 02:31:07', '2020-10-19 02:31:07'),
(44, 1, 4, 'manoj Attack the dragon by 1', '2020-10-19 02:31:07', '2020-10-19 02:31:07'),
(45, 1, 4, 'Dragon Attack the manoj by 4', '2020-10-19 02:31:07', '2020-10-19 02:31:07'),
(46, 1, 4, 'manoj Attack the dragon by 3', '2020-10-19 02:31:07', '2020-10-19 02:31:07'),
(47, 1, 4, 'Dragon Attack the manoj by 9', '2020-10-19 02:31:07', '2020-10-19 02:31:07'),
(48, 1, 4, 'manoj Attack the dragon by 5', '2020-10-19 02:31:09', '2020-10-19 02:31:09'),
(49, 1, 4, 'Dragon Attack the manoj by 7', '2020-10-19 02:31:09', '2020-10-19 02:31:09'),
(50, 1, 4, 'manoj Attack the dragon by 9', '2020-10-19 02:31:09', '2020-10-19 02:31:09'),
(51, 1, 4, 'Dragon Attack the manoj by 10', '2020-10-19 02:31:09', '2020-10-19 02:31:09'),
(52, 1, 4, 'manoj Attack the dragon by 10', '2020-10-19 02:31:09', '2020-10-19 02:31:09'),
(53, 1, 4, 'Dragon Attack the manoj by 2', '2020-10-19 02:31:09', '2020-10-19 02:31:09'),
(54, 1, 4, 'manoj Attack the dragon by 6', '2020-10-19 02:32:01', '2020-10-19 02:32:01'),
(55, 1, 4, 'Dragon Attack the manoj by 5', '2020-10-19 02:32:01', '2020-10-19 02:32:01'),
(56, 1, 4, 'manoj Attack the dragon by 1', '2020-10-19 02:32:02', '2020-10-19 02:32:02'),
(57, 1, 4, 'Dragon Attack the manoj by 9', '2020-10-19 02:32:02', '2020-10-19 02:32:02'),
(58, 1, 4, 'manoj Attack the dragon by 1', '2020-10-19 02:32:03', '2020-10-19 02:32:03'),
(59, 1, 4, 'Dragon Attack the manoj by 1', '2020-10-19 02:32:03', '2020-10-19 02:32:03'),
(60, 1, 4, 'manoj Attack the dragon by 3', '2020-10-19 02:32:03', '2020-10-19 02:32:03'),
(61, 1, 4, 'Dragon Attack the manoj by 5', '2020-10-19 02:32:03', '2020-10-19 02:32:03'),
(62, 1, 4, 'manoj Attack the dragon by 5', '2020-10-19 02:32:04', '2020-10-19 02:32:04'),
(63, 1, 4, 'Dragon Attack the manoj by 1', '2020-10-19 02:32:04', '2020-10-19 02:32:04'),
(64, 1, 4, 'manoj Attack the dragon by 3', '2020-10-19 02:32:04', '2020-10-19 02:32:04'),
(65, 1, 4, 'Dragon Attack the manoj by 3', '2020-10-19 02:32:04', '2020-10-19 02:32:04'),
(66, 1, 4, 'manoj Attack the dragon by 10', '2020-10-19 02:32:04', '2020-10-19 02:32:04'),
(67, 1, 4, 'Dragon Attack the manoj by 8', '2020-10-19 02:32:05', '2020-10-19 02:32:05'),
(68, 1, 4, 'manoj Attack the dragon by 1', '2020-10-19 02:32:05', '2020-10-19 02:32:05'),
(69, 1, 4, 'Dragon Attack the manoj by 5', '2020-10-19 02:32:05', '2020-10-19 02:32:05'),
(70, 1, 4, 'manoj Attack the dragon by 1', '2020-10-19 02:32:05', '2020-10-19 02:32:05'),
(71, 1, 4, 'Dragon Attack the manoj by 10', '2020-10-19 02:32:05', '2020-10-19 02:32:05'),
(72, 1, 4, 'manoj Attack the dragon by 3', '2020-10-19 02:32:05', '2020-10-19 02:32:05'),
(73, 1, 4, 'Dragon Attack the manoj by 1', '2020-10-19 02:32:05', '2020-10-19 02:32:05'),
(74, 1, 4, 'manoj Attack the dragon by 8', '2020-10-19 02:32:06', '2020-10-19 02:32:06'),
(75, 1, 4, 'Dragon Attack the manoj by 3', '2020-10-19 02:32:06', '2020-10-19 02:32:06'),
(76, 1, 4, 'manoj Attack the dragon by 10', '2020-10-19 02:32:06', '2020-10-19 02:32:06'),
(77, 1, 4, 'Dragon Attack the manoj by 3', '2020-10-19 02:32:06', '2020-10-19 02:32:06'),
(78, 1, 4, 'manoj Attack the dragon by 5', '2020-10-19 02:32:06', '2020-10-19 02:32:06'),
(79, 1, 4, 'Dragon Attack the manoj by 6', '2020-10-19 02:32:06', '2020-10-19 02:32:06'),
(80, 1, 4, 'manoj Attack the dragon by 7', '2020-10-19 02:32:07', '2020-10-19 02:32:07'),
(81, 1, 4, 'Dragon Attack the manoj by 6', '2020-10-19 02:32:07', '2020-10-19 02:32:07'),
(82, 1, 4, 'manoj Attack the dragon by 3', '2020-10-19 02:32:07', '2020-10-19 02:32:07'),
(83, 1, 4, 'Dragon Attack the manoj by 4', '2020-10-19 02:32:07', '2020-10-19 02:32:07'),
(84, 1, 4, 'manoj Attack the dragon by 7', '2020-10-19 02:32:08', '2020-10-19 02:32:08'),
(85, 1, 4, 'Dragon Attack the manoj by 4', '2020-10-19 02:32:08', '2020-10-19 02:32:08'),
(86, 1, 4, 'manoj Attack the dragon by 6', '2020-10-19 02:32:08', '2020-10-19 02:32:08'),
(87, 1, 4, 'Dragon Attack the manoj by 2', '2020-10-19 02:32:08', '2020-10-19 02:32:08'),
(88, 1, 4, 'manoj Attack the dragon by 8', '2020-10-19 02:32:08', '2020-10-19 02:32:08'),
(89, 1, 4, 'Dragon Attack the manoj by 2', '2020-10-19 02:32:08', '2020-10-19 02:32:08'),
(90, 1, 4, 'manoj Attack the dragon by 8', '2020-10-19 02:32:08', '2020-10-19 02:32:08'),
(91, 1, 4, 'Dragon Attack the manoj by 10', '2020-10-19 02:32:08', '2020-10-19 02:32:08'),
(92, 1, 4, 'manoj Attack the dragon by 6', '2020-10-19 02:32:09', '2020-10-19 02:32:09'),
(93, 1, 4, 'Dragon Attack the manoj by 3', '2020-10-19 02:32:09', '2020-10-19 02:32:09'),
(94, 1, 5, 'manoj Attack the dragon by 2', '2020-10-19 03:05:56', '2020-10-19 03:05:56'),
(95, 1, 5, 'Dragon Attack the manoj by 2', '2020-10-19 03:05:56', '2020-10-19 03:05:56'),
(96, 1, 5, 'manoj Attack the dragon by 2', '2020-10-19 03:05:59', '2020-10-19 03:05:59'),
(97, 1, 5, 'Dragon Attack the manoj by 9', '2020-10-19 03:05:59', '2020-10-19 03:05:59'),
(98, 1, 5, 'manoj Attack the dragon by 10', '2020-10-19 03:06:01', '2020-10-19 03:06:01'),
(99, 1, 5, 'Dragon Attack the manoj by 10', '2020-10-19 03:06:01', '2020-10-19 03:06:01'),
(100, 1, 5, 'manoj Attack the dragon by 3', '2020-10-19 03:06:05', '2020-10-19 03:06:05'),
(101, 1, 5, 'Dragon Attack the manoj by 5', '2020-10-19 03:06:05', '2020-10-19 03:06:05'),
(102, 1, 5, 'manoj Attack the dragon by 6', '2020-10-19 03:06:07', '2020-10-19 03:06:07'),
(103, 1, 5, 'Dragon Attack the manoj by 6', '2020-10-19 03:06:07', '2020-10-19 03:06:07'),
(104, 1, 5, 'manoj Attack the dragon by 6', '2020-10-19 03:06:09', '2020-10-19 03:06:09'),
(105, 1, 5, 'Dragon Attack the manoj by 5', '2020-10-19 03:06:09', '2020-10-19 03:06:09'),
(106, 1, 5, 'manoj Attack the dragon by 9', '2020-10-19 03:06:10', '2020-10-19 03:06:10'),
(107, 1, 5, 'Dragon Attack the manoj by 4', '2020-10-19 03:06:10', '2020-10-19 03:06:10'),
(108, 1, 5, 'manoj Attack the dragon by 8', '2020-10-19 03:06:11', '2020-10-19 03:06:11'),
(109, 1, 5, 'Dragon Attack the manoj by 1', '2020-10-19 03:06:11', '2020-10-19 03:06:11'),
(110, 1, 5, 'manoj Attack the dragon by 2', '2020-10-19 03:06:13', '2020-10-19 03:06:13'),
(111, 1, 5, 'Dragon Attack the manoj by 10', '2020-10-19 03:06:13', '2020-10-19 03:06:13'),
(112, 1, 5, 'manoj Attack the dragon by 1', '2020-10-19 03:06:15', '2020-10-19 03:06:15'),
(113, 1, 5, 'Dragon Attack the manoj by 9', '2020-10-19 03:06:15', '2020-10-19 03:06:15'),
(114, 1, 5, 'manoj Attack the dragon by 3', '2020-10-19 03:06:16', '2020-10-19 03:06:16'),
(115, 1, 5, 'Dragon Attack the manoj by 2', '2020-10-19 03:06:16', '2020-10-19 03:06:16'),
(116, 1, 5, 'manoj Attack the dragon by 1', '2020-10-19 03:06:17', '2020-10-19 03:06:17'),
(117, 1, 5, 'Dragon Attack the manoj by 9', '2020-10-19 03:06:17', '2020-10-19 03:06:17'),
(118, 1, 5, 'manoj Attack the dragon by 7', '2020-10-19 03:06:18', '2020-10-19 03:06:18'),
(119, 1, 5, 'Dragon Attack the manoj by 3', '2020-10-19 03:06:18', '2020-10-19 03:06:18'),
(120, 1, 5, 'manoj Attack the dragon by 2', '2020-10-19 03:06:19', '2020-10-19 03:06:19'),
(121, 1, 5, 'Dragon Attack the manoj by 10', '2020-10-19 03:06:19', '2020-10-19 03:06:19'),
(122, 1, 5, 'manoj Attack the dragon by 1', '2020-10-19 03:06:20', '2020-10-19 03:06:20'),
(123, 1, 5, 'Dragon Attack the manoj by 10', '2020-10-19 03:06:20', '2020-10-19 03:06:20'),
(124, 1, 5, 'manoj Attack the dragon by 6', '2020-10-19 03:06:21', '2020-10-19 03:06:21'),
(125, 1, 5, 'Dragon Attack the manoj by 10', '2020-10-19 03:06:21', '2020-10-19 03:06:21'),
(126, 1, 6, 'manoj Attack the dragon by 1', '2020-10-19 07:50:28', '2020-10-19 07:50:28'),
(127, 1, 6, 'Dragon Attack the manoj by 2', '2020-10-19 07:50:28', '2020-10-19 07:50:28'),
(128, 1, 6, 'manoj Attack the dragon by 8', '2020-10-19 07:50:30', '2020-10-19 07:50:30'),
(129, 1, 6, 'Dragon Attack the manoj by 3', '2020-10-19 07:50:30', '2020-10-19 07:50:30'),
(130, 1, 6, 'manoj Attack the dragon by 8', '2020-10-19 07:50:31', '2020-10-19 07:50:31'),
(131, 1, 6, 'Dragon Attack the manoj by 2', '2020-10-19 07:50:31', '2020-10-19 07:50:31'),
(132, 1, 6, 'manoj Attack the dragon by 5', '2020-10-19 07:50:34', '2020-10-19 07:50:34'),
(133, 1, 6, 'Dragon Attack the manoj by 2', '2020-10-19 07:50:34', '2020-10-19 07:50:34'),
(134, 1, 6, 'manoj Attack the dragon by 7', '2020-10-19 07:50:35', '2020-10-19 07:50:35'),
(135, 1, 6, 'Dragon Attack the manoj by 10', '2020-10-19 07:50:35', '2020-10-19 07:50:35'),
(136, 1, 6, 'manoj Attack the dragon by 9', '2020-10-19 07:50:37', '2020-10-19 07:50:37'),
(137, 1, 6, 'Dragon Attack the manoj by 4', '2020-10-19 07:50:37', '2020-10-19 07:50:37'),
(138, 1, 6, 'manoj Attack the dragon by 7', '2020-10-19 07:50:38', '2020-10-19 07:50:38'),
(139, 1, 6, 'Dragon Attack the manoj by 10', '2020-10-19 07:50:38', '2020-10-19 07:50:38'),
(140, 1, 6, 'manoj Attack the dragon by 8', '2020-10-19 07:50:39', '2020-10-19 07:50:39'),
(141, 1, 6, 'Dragon Attack the manoj by 6', '2020-10-19 07:50:39', '2020-10-19 07:50:39'),
(142, 1, 6, 'manoj Attack the dragon by 4', '2020-10-19 07:50:40', '2020-10-19 07:50:40'),
(143, 1, 6, 'Dragon Attack the manoj by 10', '2020-10-19 07:50:40', '2020-10-19 07:50:40'),
(144, 1, 6, 'manoj Attack the dragon by 1', '2020-10-19 07:50:42', '2020-10-19 07:50:42'),
(145, 1, 6, 'Dragon Attack the manoj by 3', '2020-10-19 07:50:42', '2020-10-19 07:50:42'),
(146, 1, 6, 'manoj Attack the dragon by 7', '2020-10-19 07:50:43', '2020-10-19 07:50:43'),
(147, 1, 6, 'Dragon Attack the manoj by 9', '2020-10-19 07:50:43', '2020-10-19 07:50:43'),
(148, 1, 6, 'manoj Attack the dragon by 1', '2020-10-19 07:50:44', '2020-10-19 07:50:44'),
(149, 1, 6, 'Dragon Attack the manoj by 1', '2020-10-19 07:50:44', '2020-10-19 07:50:44'),
(150, 1, 6, 'manoj Attack the dragon by 8', '2020-10-19 07:50:46', '2020-10-19 07:50:46'),
(151, 1, 6, 'Dragon Attack the manoj by 9', '2020-10-19 07:50:46', '2020-10-19 07:50:46'),
(152, 1, 6, 'manoj Attack the dragon by 6', '2020-10-19 07:50:48', '2020-10-19 07:50:48'),
(153, 1, 6, 'Dragon Attack the manoj by 6', '2020-10-19 07:50:48', '2020-10-19 07:50:48'),
(154, 1, 6, 'manoj Attack the dragon by 8', '2020-10-19 07:50:49', '2020-10-19 07:50:49'),
(155, 1, 6, 'Dragon Attack the manoj by 1', '2020-10-19 07:50:49', '2020-10-19 07:50:49'),
(156, 1, 6, 'manoj Attack the dragon by 1', '2020-10-19 07:50:52', '2020-10-19 07:50:52'),
(157, 1, 6, 'Dragon Attack the manoj by 4', '2020-10-19 07:50:52', '2020-10-19 07:50:52'),
(158, 1, 6, 'manoj Attack the dragon by 1', '2020-10-19 07:50:52', '2020-10-19 07:50:52'),
(159, 1, 6, 'Dragon Attack the manoj by 1', '2020-10-19 07:50:52', '2020-10-19 07:50:52'),
(160, 1, 6, 'manoj Attack the dragon by 10', '2020-10-19 07:50:53', '2020-10-19 07:50:53'),
(161, 1, 6, 'Dragon Attack the manoj by 4', '2020-10-19 07:50:53', '2020-10-19 07:50:53'),
(162, 1, 6, 'manoj Attack the dragon by 6', '2020-10-19 07:50:55', '2020-10-19 07:50:55'),
(163, 1, 6, 'Dragon Attack the manoj by 9', '2020-10-19 07:50:55', '2020-10-19 07:50:55'),
(164, 1, 6, 'manoj Attack the dragon by 9', '2020-10-19 07:50:57', '2020-10-19 07:50:57'),
(165, 1, 6, 'Dragon Attack the manoj by 9', '2020-10-19 07:50:57', '2020-10-19 07:50:57'),
(166, 1, 7, 'manoj Attack the dragon by 5', '2020-10-19 07:51:10', '2020-10-19 07:51:10'),
(167, 1, 7, 'Dragon Attack the manoj by 2', '2020-10-19 07:51:10', '2020-10-19 07:51:10'),
(168, 1, 7, 'manoj Attack the dragon by 5', '2020-10-19 07:51:12', '2020-10-19 07:51:12'),
(169, 1, 7, 'Dragon Attack the manoj by 5', '2020-10-19 07:51:12', '2020-10-19 07:51:12');

-- --------------------------------------------------------

--
-- Table structure for table `game_master`
--

CREATE TABLE `game_master` (
  `id` int(11) NOT NULL,
  `game_id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `createdat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `player1` int(11) NOT NULL,
  `player2` int(11) NOT NULL,
  `result` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `game_master`
--

INSERT INTO `game_master` (`id`, `game_id`, `userid`, `time`, `createdat`, `updatedat`, `player1`, `player2`, `result`) VALUES
(1, 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, ''),
(2, 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, ''),
(3, 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, ''),
(4, 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 9, -2, 'User'),
(5, 0, 1, 0, '2020-10-19 03:05:54', '2020-10-19 03:05:54', -5, 31, 'Dragon'),
(6, 0, 1, 0, '2020-10-19 07:50:24', '2020-10-19 07:50:24', -1, -14, 'Dragon'),
(7, 0, 1, 0, '2020-10-19 07:51:02', '2020-10-19 07:51:02', 0, 0, ''),
(8, 0, 1, 0, '2020-10-19 07:52:24', '2020-10-19 07:52:24', 0, 0, ''),
(9, 0, 1, 0, '2020-10-19 07:57:23', '2020-10-19 07:57:23', 0, 0, ''),
(10, 0, 1, 0, '2020-10-19 07:57:37', '2020-10-19 07:57:37', 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `avatar` varchar(100) NOT NULL,
  `ipaddress` varchar(256) NOT NULL,
  `status` varchar(11) NOT NULL,
  `createdat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `avatar`, `ipaddress`, `status`, `createdat`, `updatedat`) VALUES
(1, 'manoj', 'manoj.bhoir9@gmail.com', '211c3cb3943fddebb20a93cc23b77577', 'download.jpg', '::1', 'Active', '2020-10-18 00:37:31', '2020-10-18 00:37:31'),
(2, 'manu', 'manu@yopmail.com', '42938ad666db10ec36f2fee69e62b293', 'download.jpg', '::1', 'Active', '2020-10-18 02:58:39', '2020-10-18 02:58:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `commentry`
--
ALTER TABLE `commentry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `game_master`
--
ALTER TABLE `game_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `commentry`
--
ALTER TABLE `commentry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=170;

--
-- AUTO_INCREMENT for table `game_master`
--
ALTER TABLE `game_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
