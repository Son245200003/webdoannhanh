-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2023 at 08:21 AM
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
-- Table structure for table `accout_infor`
--

CREATE TABLE `accout_infor` (
  `id` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `sdt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(4, 's', 's', '', 0),
(5, 'admin', '1', '', 1),
(9, 'son123', '231', '', 0),
(10, '1', '2', 'son', 0),
(51, 'son', '123', 'son', 0),
(52, 'son121', '123', 'son', 0),
(53, 'tranduong', '1', 'duong', 0);

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
(719, 4, 'ĐỒ ĂN NHANH', 'Kem socola', 15, 2, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/1/9/192dcb48e7393a-kemsocola16.png'),
(720, 4, 'ĐỒ ĂN NHANH', 'Bánh xoài đào', 10, 1, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/p/m/pmp-plated.png'),
(721, 4, 'ĐỒ ĂN NHANH', 'Hot dog nước ngọt lớn', 35, 2, ' https://jollibee.com.vn/media/catalog/product/cache/9011257231b13517d19d9bae81fd87cc/h/o/hotdog_web-02.png');

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
  `tongtien` int(11) NOT NULL,
  `Date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_admin`
--

INSERT INTO `order_admin` (`id`, `name`, `sdt`, `diachi`, `ghichu`, `user`, `donhang`, `tongtien`, `Date`) VALUES
(47, '123', 1231, '132', '123321', 51, '</br> 1. Khoai tây lắc vị BBQ(vừa)</br> 2. khoai viên rong biển</br> 3. Súp bí bỏ', 70, ''),
(48, '312', 123, '123', '123', 51, '</br> 1. Khoai tây lắc vị BBQ(vừa)</br> 2. Khoai tây lắc vị BBQ(vừa)</br> 3. khoai viên rong biển</br> 4. khoai viên rong biển</br> 5. khoai viên rong biển</br> 6. Súp bí bỏ</br> 7. Súp bí bỏ</br> 8. Súp bí bỏ</br> 9. Súp bí bỏ', 195, ''),
(49, '123', 123, '132', '123', 51, '</br> 1. Khoai tây lắc vị BBQ(vừa)</br> 2. khoai viên rong biển</br> 3. Súp bí bỏ', 530, ''),
(50, '123', 123, '321', '123', 51, '</br> 1. Khoai tây lắc vị BBQ(vừa) x 2</br> 2. khoai viên rong biển x 2', 110, ''),
(51, 'Nguyễn Danh Sơn', 946704597, 'Đình bảng', 'ship lẹ', 51, '</br> 1. khoai viên rong biển x 1</br> 2. Súp bí bỏ x 1', 40, ''),
(52, 'Nguyễn Danh Sơn', 946704597, 'đình bảng', 'ship lẹ đi cu', 51, '</br> 1. khoai viên rong biển x 3</br> 2. Khoai tây lắc vị BBQ(vừa) x 1</br> 3. Khoai tây lắc vị BBQ(vừa) x 1</br> 4. Súp bí bỏ x 3', 180, ''),
(53, 'Dương', 946704597, 'Đình bảng', 'ship lẹ', 53, '</br> 1. khoai viên rong biển x 4</br> 2. Hot dog nước ngọt lớn x 1', 135, ''),
(54, '123', 123, '123', '123', 51, '</br> 1. khoai viên rong biển x 4</br> 2. Khoai tây lắc vị BBQ(vừa) x 3</br> 3. Súp bí bỏ x 3', 235, ''),
(55, '123', 1, '123', '123', 51, '</br> 1. Khoai tây lắc vị BBQ(vừa) x 5</br> 2. khoai viên rong biển x 3</br> 3. Miếng gà sốt cay x 2', 295, '2023-09-25 11:52:21 '),
(56, 'Danh Sơn ', 946704597, 'từ sơn ', 'Bro', 5, '</br> 1. Khoai tây lắc vị BBQ(vừa) x 1</br> 2. khoai viên rong biển x 1', 55, '2023-09-26 16:28:09'),
(57, 'đâsadsads', 946704597, 'c', 'cs', 51, '</br> 1. khoai viên rong biển x 1</br> 2. Súp bí bỏ x 1</br> 3. Khoai tây lắc vị BBQ(vừa) x 1</br> 4. Miếng gà sốt cay x 1', 105, '2023-09-26 16:39:28'),
(58, 's', 12312, 'ssss', 'ssss', 51, '</br> 1. Khoai tây lắc vị BBQ(vừa) x 1</br> 2. khoai viên rong biển x 1</br> 3. Súp bí bỏ x 1', 70, '2023-09-27 05:21:20');

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
(40, 'BBQ', 'Sườn nướng', 200, 'https://bazaarvietnam.vn/wp-content/uploads/2022/10/Harpers-Bazaar-nhung-dieu-thu-vi-ve-BBQ_05.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tintuc`
--

CREATE TABLE `tintuc` (
  `id` int(11) NOT NULL,
  `anh` varchar(255) NOT NULL,
  `tieude` varchar(255) NOT NULL,
  `noidungchinh` varchar(255) NOT NULL,
  `noidung` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tintuc`
--

INSERT INTO `tintuc` (`id`, `anh`, `tieude`, `noidungchinh`, `noidung`) VALUES
(11, './img/tuyendung.jpg', 'Tuyển dụng', 'Tuyển dụng nhiều vị trí ........', '<p><strong>Giới thiệu:</strong><br />\r\nChillax Coffe Tea l&agrave; c&ocirc;ng ty C&aacute; nh&acirc;n đang hoạt động lĩnh vực Nh&agrave; h&agrave;ng, Kh&aacute;ch sạn tại H&agrave; Nội. Hiện tại ch&uacute;ng t&ocirc;i đang cần tuyển vị trị tr&iacute; &quot;Tuyển nh&acirc;n vi&ecirc;n cho qu&aacute;n cafe&quot; với c&aacute;c kỹ năng như Năng Động, Nhiệt Huyết, Quản L&yacute; Thiết Bị. Bạn sẽ được hưởng c&aacute;c chế độ ph&uacute;c lợi như Du Lịch, Hỗ trợ ph&iacute; đ&agrave;o tạo khi l&agrave;m việc tại Chillax Coffe Tea.<br />\r\nCHILLAX COFFEE TEA 232 Phạm Văng Đồng,Cổ Nhuế tuyển dụng nh&acirc;n vi&ecirc;n<br />\r\nNG&Agrave;Y Đ&Agrave;O TẠO DỰ T&Iacute;NH ( 17/03/2023)<br />\r\n<br />\r\n<strong>1. VỊ TR&Iacute;:</strong>&nbsp;4 BARISTA &ndash; 6 PHỤC VỤ - 2 THU NG&Acirc;N<br />\r\n<br />\r\n<strong>2. Y&Ecirc;U CẦU CHUNG:</strong></p>\r\n\r\n<ul>\r\n	<li>Trung thực, nhanh nhẹn, giao tiếp tốt, th&aacute;i độ tốt</li>\r\n	<li>C&oacute; &yacute; thức vệ sinh sạch sẽ cửa h&agrave;ng</li>\r\n	<li>Cam kết l&agrave;m việc cuối tuần v&agrave; c&aacute;c ng&agrave;y lễ</li>\r\n	<li>Ưu ti&ecirc;n bạn đ&atilde; c&oacute; kinh nghiệm sử dụng được m&aacute;y pha caf&eacute; ( đối với barista)</li>\r\n</ul>\r\n\r\n<p><strong>3. QUYỀN LỢI:</strong></p>\r\n\r\n<ul>\r\n	<li>ĐƯỢC TRAINING MIỄN PH&Iacute; (phải đảm bảo đi đủ để l&agrave;m việc hiệu quả)</li>\r\n	<li>LƯƠNG KHỞI ĐIỂM</li>\r\n	<li>Barista: 20k/1h th&aacute;ng đầu , sau 1 th&aacute;ng thử việc lương 22-25k/1h t&ugrave;y năng lực.</li>\r\n	<li>Thu Ng&acirc;n, Phục vụ : 15k/1h th&aacute;ng đầu, sau thử việc 17k/h.</li>\r\n	<li>Được sắp xếp ca l&agrave;m ph&ugrave; hợp</li>\r\n	<li>L&agrave;m việc m&ocirc;i trường sạch sẽ, năng động</li>\r\n</ul>\r\n\r\n<p><strong>4. THỜI GIAN L&Agrave;M VIỆC :</strong></p>\r\n\r\n<ul>\r\n	<li>Fulltime 7h-15h ; 15h-23h ( đối với barista )</li>\r\n	<li>Part time 7h-12h; 12h-17h ; 17h-23h ( đối với thu ng&acirc;n, phục vụ)</li>\r\n</ul>\r\n\r\n<p>5. ĐỊA ĐIỂM L&Agrave;M VIỆC<br />\r\n<strong>L&agrave;m việc tại:</strong>&nbsp;số 72-TT4, Đường số 10, Khu Đ&ocirc; Thị TP Giao Lưu, 232 Phạm Văn Đồng, Cổ Nhuế 1, HN<br />\r\n(Ưu ti&ecirc;n c&aacute;c bạn ở gần, thuận tiện đi lại)<br />\r\n<strong>Địa điểm l&agrave;m việc:</strong>&nbsp;H&agrave; Nội<br />\r\n<strong>Lương:</strong>&nbsp;5000K VND một th&aacute;ng<br />\r\n<strong>Loại h&igrave;nh c&ocirc;ng việc:</strong>&nbsp;Thỏa thuận thời gian<br />\r\n<strong>Y&ecirc;u cầu:</strong>&nbsp;Chứng Minh Nh&acirc;n D&acirc;n (CMND), Cover Letter<br />\r\n<strong>Quyền lợi:</strong>&nbsp;Du Lịch, Hỗ trợ ph&iacute; đ&agrave;o tạo, M&ocirc;i Trường Chuy&ecirc;n Nghiệp, Thưởng doanh thu, Thưởng Lễ-Tết<br />\r\n<strong>Hạn nộp:</strong>&nbsp;2023-10-06<br />\r\n<strong>Kinh nghiệm:</strong>&nbsp;Kh&ocirc;ng y&ecirc;u cầu kinh nghiệm l&agrave;m việc<br />\r\n<strong>Bằng cấp:</strong>&nbsp;Kh&ocirc;ng y&ecirc;u cầu<br />\r\n<strong>Lĩnh vực:</strong>&nbsp;Dịch vụ -Nh&agrave; h&agrave;ng, Kh&aacute;ch sạn<br />\r\n<strong>Số lượng cần tuyển:</strong>&nbsp;12<br />\r\n<strong>Giới t&iacute;nh:</strong>&nbsp;Kh&ocirc;ng y&ecirc;u cầu</p>\r\n'),
(12, 'https://tse2.mm.bing.net/th?id=OIP.nh9bePqkbeRCeRr4r7y6QAHaE8&pid=Api&P=0&h=180', 'Món mới', 'MUA 1 TẶNG 1 CÀ PHÊ SÁNG tại …', '<p><em>Nắng l&ecirc;n rồi, đi c&agrave; ph&ecirc; th&ocirc;i!</em></p>\r\n\r\n<p><em>MUA 1 TẶNG 1 C&Agrave; PH&Ecirc; S&Aacute;NG tại &hellip;</em></p>\r\n\r\n<p><em><img alt=\"?\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/tf0/2/16/1f449.png\" style=\"height:16px; width:16px\" /></em></p>\r\n\r\n<p><em>&Aacute;p dụng cho TO&Agrave;N BỘ MENU C&Agrave; PH&Ecirc;: Từ c&agrave; ph&ecirc; m&aacute;y Latte, Capu tới Đen, N&acirc;u, Pạc Sỉu truyền thống</em></p>\r\n\r\n<p><em><img alt=\"?\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/tf0/2/16/1f449.png\" style=\"height:16px; width:16px\" />Kh&ocirc;ng giới hạn số lượng ly / đơn h&agrave;ng. Ly được tặng c&oacute; gi&aacute; bằng hoặc thấp hơn ly đầu ti&ecirc;n.</em></p>\r\n\r\n<p><em><img alt=\"?\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/tf0/2/16/1f449.png\" style=\"height:16px; width:16px\" />&Aacute;p dụng tại &hellip; từ 8g &ndash; 10g s&aacute;ng c&aacute;c ng&agrave;y thứ hai, ba, tư, năm h&agrave;ng tuần!</em></p>\r\n\r\n<p><em><img alt=\"?\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t59/2/16/1f4e3.png\" style=\"height:16px; width:16px\" />Giao h&agrave;ng miễn ph&iacute; 30k cho đơn từ 200k</em></p>\r\n\r\n<p><em>Vượt qua c&aacute;m dỗ của chiếc giường ấm &aacute;p v&agrave; bắt đầu một ng&agrave;y mới thật tỉnh t&aacute;o c&ugrave;ng &hellip; n&agrave;o!</em></p>\r\n\r\n<p><em><img alt=\"?\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t16/2/16/1f3e1.png\" style=\"height:16px; width:16px\" />Địa chỉ qu&aacute;n</em></p>\r\n\r\n<p><em>&ndash; Giờ mở cửa: 8:00 đến 18:00 c&aacute;c ng&agrave;y T2 đến T5 v&agrave; đến 21:00 c&aacute;c ng&agrave;y cuối tuần.</em></p>\r\n'),
(14, 'https://jamja.vn/blog/wp-content/uploads/2017/09/thit-heo-rung-nuong-anh-15.jpg', 'Món bò rừng mới', 'BÒ RỪNG NƯỚNG ĐÁXÔNG HƠI!!INGONXUẤT SẮC!!!', '<p><br />\r\nB&Ograve; RỪNG NƯỚNG Đ&Aacute;X&Ocirc;NG HƠI!!INGONXUẤT SẮC!!!</p>\r\n\r\n<p>@B&ograve; Nướng X&egrave;o x&egrave;o, hương thơm quyến rũ trong l&agrave;n kh&oacute;i nghi ng&uacute;t...thiệt l&agrave; hấp dẫn hết biết &agrave;!!<br />\r\n&reg;Thịt b&ograve; rừng dai dai, mềm mềm, quyện với c&aacute;c loại rau rừng v&agrave; &iacute;t vị cay của sa tế l&agrave;m thổi bừng<br />\r\nhương vị của m&oacute;n ăn đặc sắc n&agrave;y!!</p>\r\n\r\n<p>&iquest;&ldquo;MUA NGAY ĐỊI! CHỈ C&Oacute; 150K/KG Đ&Aacute; CUỘI NƯỚNG M&Agrave; ĂN Đ&Atilde; ĐỜILU&Ocirc;N!!@@</p>\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accout_infor`
--
ALTER TABLE `accout_infor`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accout_infor`
--
ALTER TABLE `accout_infor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dangnhap`
--
ALTER TABLE `dangnhap`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `giohang`
--
ALTER TABLE `giohang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=722;

--
-- AUTO_INCREMENT for table `order_admin`
--
ALTER TABLE `order_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

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
