-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2023 at 06:32 AM
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
-- Database: `web_btl`
--

-- --------------------------------------------------------

--
-- Table structure for table `dangnhap`
--

CREATE TABLE `dangnhap` (
  `id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `role` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dangnhap`
--

INSERT INTO `dangnhap` (`id`, `user`, `password`, `name`, `role`) VALUES
(2, '123', '321', '', 0),
(3, 'sondeptrai', '12333', '', 0),
(4, 's', 's', '', 0),
(5, 'admin', '1', '', 1),
(6, 'danhson245203@gmail.com', '1', '', 0),
(7, 'danhson245203@gmail.com', '1', '', 0),
(9, 'son123', '231', '', 0),
(10, '1', '2', 'son', 0),
(51, 'son', '123', 'son', 0),
(52, 'son121', '123', 'son', 0);

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(11) NOT NULL,
  `tendanhmuc` varchar(255) NOT NULL,
  `linkdanhmuc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `tendanhmuc`, `linkdanhmuc`) VALUES
(1, 'ĐỒ ĂN NHANH', 'doannhanh.php'),
(2, 'BBQ', 'bbq.php'),
(3, 'ĐỒ UỐNG', 'douong.php');

-- --------------------------------------------------------

--
-- Table structure for table `giohang`
--

CREATE TABLE `giohang` (
  `id` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `tittle` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `soluong` int(11) NOT NULL DEFAULT 1,
  `thumbnail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `giohang`
--

INSERT INTO `giohang` (`id`, `user`, `category`, `tittle`, `price`, `soluong`, `thumbnail`) VALUES
(25, 2, 'ĐỒ ĂN NHANH', '2', 20000, 0, ' https://th.bing.com/th/id/OIP.-BJ5K_Gy5YcQd9YkCm5pYwAAAA?pid=ImgDet&rs=1'),
(40, 2, '', '', 0, 0, ' '),
(41, 2, 'ĐỒ ĂN NHANH', '1rr ', 1111, 0, ' https://www.huongnghiepaau.com/wp-content/uploads/2019/01/hamburger-nhan-thit-heo.jpg'),
(42, 2, 'ĐỒ ĂN NHANH', '1rr ', 1111, 0, ' https://www.huongnghiepaau.com/wp-content/uploads/2019/01/hamburger-nhan-thit-heo.jpg'),
(43, 2, 'ĐỒ ĂN NHANH', '1rr ', 1111, 0, ' https://www.huongnghiepaau.com/wp-content/uploads/2019/01/hamburger-nhan-thit-heo.jpg'),
(44, 2, 'ĐỒ ĂN NHANH', '1rr ', 1111, 0, ' https://www.huongnghiepaau.com/wp-content/uploads/2019/01/hamburger-nhan-thit-heo.jpg'),
(45, 2, 'ĐỒ ĂN NHANH', '1rr ', 1111, 0, ' https://www.huongnghiepaau.com/wp-content/uploads/2019/01/hamburger-nhan-thit-heo.jpg'),
(46, 2, 'ĐỒ ĂN NHANH', '1rr ', 1111, 0, ' https://www.huongnghiepaau.com/wp-content/uploads/2019/01/hamburger-nhan-thit-heo.jpg'),
(47, 2, 'ĐỒ ĂN NHANH', '1rr ', 1111, 0, ' https://www.huongnghiepaau.com/wp-content/uploads/2019/01/hamburger-nhan-thit-heo.jpg'),
(48, 2, 'ĐỒ ĂN NHANH', '2323', 20000, 0, ' https://th.bing.com/th/id/OIP.GiCwSHDnkqNMQ-pTGbtMTgHaFO?pid=ImgDet&rs=1'),
(49, 2, 'ĐỒ ĂN NHANH', '2323', 20000, 0, ' https://th.bing.com/th/id/OIP.GiCwSHDnkqNMQ-pTGbtMTgHaFO?pid=ImgDet&rs=1'),
(50, 2, 'ĐỒ ĂN NHANH', '2323', 20000, 0, ' https://th.bing.com/th/id/OIP.GiCwSHDnkqNMQ-pTGbtMTgHaFO?pid=ImgDet&rs=1'),
(51, 2, 'ĐỒ ĂN NHANH', '2323', 20000, 0, ' https://th.bing.com/th/id/OIP.GiCwSHDnkqNMQ-pTGbtMTgHaFO?pid=ImgDet&rs=1'),
(57, 52, 'ĐỒ ĂN NHANH', '1rr ', 1111, 0, ' https://www.huongnghiepaau.com/wp-content/uploads/2019/01/hamburger-nhan-thit-heo.jpg'),
(58, 52, 'ĐỒ ĂN NHANH', '2323', 20000, 0, ' https://th.bing.com/th/id/OIP.GiCwSHDnkqNMQ-pTGbtMTgHaFO?pid=ImgDet&rs=1'),
(59, 52, 'ĐỒ ĂN NHANH', '1rr ', 1111, 0, ' https://www.huongnghiepaau.com/wp-content/uploads/2019/01/hamburger-nhan-thit-heo.jpg'),
(233, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(234, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(235, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(236, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(237, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(238, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(239, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(240, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(241, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(242, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(243, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(244, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(245, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(246, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(247, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(248, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(249, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(250, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(251, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(252, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(253, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(254, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(255, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(256, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(257, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(258, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(259, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(260, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(261, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(262, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(263, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(264, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(265, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(266, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(267, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(268, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(269, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(270, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(271, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(272, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(273, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(274, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(275, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(276, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(277, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(278, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(279, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(280, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(281, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(282, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(283, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(284, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(285, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(286, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(287, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(288, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(289, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(290, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(291, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(292, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(293, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(294, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(295, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(296, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(297, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(298, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(299, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(300, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(301, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(302, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(303, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(304, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(305, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(306, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(307, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(308, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(309, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(310, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(311, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(312, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(313, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(314, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(315, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(316, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(317, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(318, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(319, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(320, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(321, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(322, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(323, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(324, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(325, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(326, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(327, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(328, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(329, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(330, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(331, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(332, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(333, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(334, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(335, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(336, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(337, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(338, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(339, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(340, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(341, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(342, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(343, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(344, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(345, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(346, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(347, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(348, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(349, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(350, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(351, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(352, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(353, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(354, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(355, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(356, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(357, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(358, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(359, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(360, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(361, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(362, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(363, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(364, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(365, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(366, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(367, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(368, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(369, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(370, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(371, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(372, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(373, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(374, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(375, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(376, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(377, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(378, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(379, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(380, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(381, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(382, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(383, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(384, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(385, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(386, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(387, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(388, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(389, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(390, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(391, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(392, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(393, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(394, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(395, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(396, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(397, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(398, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(399, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(400, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(401, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(402, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(403, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(404, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(405, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(406, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(407, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(408, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(409, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(410, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(411, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(412, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(413, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(414, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(415, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(416, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(417, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(418, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(419, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(420, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(421, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(422, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(423, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(424, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(425, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(426, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(427, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(428, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(429, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(430, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(431, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(432, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(433, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(434, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(435, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(436, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(437, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(438, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(439, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(440, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(441, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(442, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(443, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(444, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(445, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(446, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(447, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(448, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(449, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(450, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(451, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(452, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(453, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(454, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(455, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(456, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(457, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(458, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(459, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(460, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(461, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(462, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(463, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(464, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(465, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(466, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(467, 4, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png');

-- --------------------------------------------------------

--
-- Table structure for table `order_admin`
--

CREATE TABLE `order_admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `sdt` int(11) NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `ghichu` varchar(500) NOT NULL,
  `user` int(11) NOT NULL,
  `donhang` varchar(255) NOT NULL,
  `tongtien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_admin`
--

INSERT INTO `order_admin` (`id`, `name`, `sdt`, `diachi`, `ghichu`, `user`, `donhang`, `tongtien`) VALUES
(47, '123', 1231, '132', '123321', 51, '</br> 1. Khoai tây lắc vị BBQ(vừa)</br> 2. khoai viên rong biển</br> 3. Súp bí bỏ', 70),
(48, '312', 123, '123', '123', 51, '</br> 1. Khoai tây lắc vị BBQ(vừa)</br> 2. Khoai tây lắc vị BBQ(vừa)</br> 3. khoai viên rong biển</br> 4. khoai viên rong biển</br> 5. khoai viên rong biển</br> 6. Súp bí bỏ</br> 7. Súp bí bỏ</br> 8. Súp bí bỏ</br> 9. Súp bí bỏ', 195);

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `category_id` varchar(11) NOT NULL,
  `tittle` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `thumbnail` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id`, `category_id`, `tittle`, `price`, `thumbnail`) VALUES
(20, 'ĐỒ ĂN NHANH', 'Khoai tây lắc vị BBQ(vừa)', 30, 'https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai-16.png'),
(21, 'ĐỒ ĂN NHANH', 'khoai viên rong biển', 25, 'https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/k/h/khoai_rong_bien_do_1.png'),
(22, 'ĐỒ ĂN NHANH', 'Súp bí bỏ', 15, 'https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/s/_/s_p_b_.png'),
(23, 'ĐỒ ĂN NHANH', 'Bánh xoài đào', 10, 'https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/p/m/pmp-plated.png'),
(24, 'ĐỒ ĂN NHANH', 'Kem socola', 15, 'https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/1/9/192dcb48e7393a-kemsocola16.png'),
(25, 'ĐỒ ĂN NHANH', 'Hot dog nước ngọt lớn', 35, 'https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/h/o/hotdog_web-02.png'),
(26, 'ĐỒ UỐNG', 'Cacao sữa đá', 25, 'https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/2/a/2a5c8bbe5aca67-2mienggaran19.png'),
(27, 'ĐỒ UỐNG', 'Trà xoài đào', 15, 'https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/0/f/0f550a170bb756-tradao.png'),
(28, 'ĐỒ UỐNG', 'Pepsi lớn', 17, 'https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/6/f/6fcdee718437bf-pepsi.png'),
(29, 'ĐỒ UỐNG', '7UP lớn', 17, 'https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/7/1/71434bb9342048-7up.png'),
(30, 'ĐỒ UỐNG', 'Mirinda lớn', 17, 'https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/1/c/1cd70b5383c11d-mirinda.png'),
(31, 'ĐỒ UỐNG', 'Nước suối aquafina', 8, 'https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/1/a/1a00ca58bc00e1-b4ab7d469cee70aquaffina01.png'),
(33, 'BBQ', 'Miếng gà sốt cay', 35, 'https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/g/_/g_s_t_cay_1.png'),
(34, 'BBQ', 'Đùi gà giòn', 32, 'https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/1/_/1_mi_ng_ggvv_png_1.png'),
(35, 'BBQ', 'Cơm gà giòn pepsi lớn', 58, 'https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/c/_/c_m_g_n_c.png'),
(36, 'BBQ', 'Mì ý sốt bò bằm', 20, 'https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/m/_/m__2.png'),
(37, 'BBQ', 'Miếng gà sốt cay cơm', 60, 'https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/2/_/2_ga_sot_cay_khoai_nc.png'),
(38, 'BBQ', 'COMBO 322K ', 322, 'https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/p/h/phan_an_app_295k.png'),
(39, 'ĐỒ ĂN NHANH', 'Kem ốc quế', 5, 'https://kenh14cdn.com/2016/img20160407112359366.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dangnhap`
--
ALTER TABLE `dangnhap`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user` (`user`);

--
-- Indexes for table `order_admin`
--
ALTER TABLE `order_admin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user` (`user`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dangnhap`
--
ALTER TABLE `dangnhap`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `giohang`
--
ALTER TABLE `giohang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=537;

--
-- AUTO_INCREMENT for table `order_admin`
--
ALTER TABLE `order_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `giohang`
--
ALTER TABLE `giohang`
  ADD CONSTRAINT `giohang_ibfk_1` FOREIGN KEY (`user`) REFERENCES `dangnhap` (`id`);

--
-- Constraints for table `order_admin`
--
ALTER TABLE `order_admin`
  ADD CONSTRAINT `order_admin_ibfk_1` FOREIGN KEY (`user`) REFERENCES `dangnhap` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
