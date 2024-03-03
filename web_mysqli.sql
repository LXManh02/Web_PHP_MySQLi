-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 03, 2024 lúc 01:15 PM
-- Phiên bản máy phục vụ: 10.4.25-MariaDB
-- Phiên bản PHP: 8.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `web_mysqli`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `admin_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `username`, `password`, `admin_status`) VALUES
(1, 'manhad', 'd358a00eeb7af6ff4020a45869a218ef', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_baiviet`
--

CREATE TABLE `tbl_baiviet` (
  `id` int(11) NOT NULL,
  `tenbaiviet` varchar(100) NOT NULL,
  `tomtat` tinytext NOT NULL,
  `noidung` longtext NOT NULL,
  `id_danhmuc` int(11) NOT NULL,
  `hinhanh` varchar(100) NOT NULL,
  `tinhtrang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_baiviet`
--

INSERT INTO `tbl_baiviet` (`id`, `tenbaiviet`, `tomtat`, `noidung`, `id_danhmuc`, `hinhanh`, `tinhtrang`) VALUES
(3, 'viet gi', '<p>a</p>', '<p>a</p>', 3, '1708586478_cns.jfif', 1),
(4, 'Do thi', '<p><strong>Kh&aacute;i niệm đ&ocirc; thị h&oacute;a l&agrave; g&igrave;</strong>? Đ&ocirc; thị h&oacute;a được hiểu l&agrave; qu&aacute; tr&igrave;nh mở rộng của đ&ocirc; thị, t&iacute;nh theo tỷ lệ phần trăm giữa diện t&', '<p>B&ecirc;n cạnh đ&oacute;, đ&ocirc; thị h&oacute;a c&ograve;n được hiểu l&agrave; qu&aacute; tr&igrave;nh ph&aacute;t triển rộng v&agrave; lối sống th&agrave;nh thị thể hiện qua c&aacute;c mặt: chất lượng cuộc sống, d&acirc;n số, mật độ d&acirc;n số&hellip; Qu&aacute; tr&igrave;nh đ&ocirc; thị h&oacute;a ch&iacute;nh l&agrave; cơ hội để Nh&agrave; nước tổ chức, quy hoạch lại c&aacute;ch thức hoạt động của đ&ocirc; thị, d&acirc;n cư. Theo đ&oacute;, c&aacute;c khu vực c&oacute; tiềm năng ph&aacute;t triển kinh tế, văn h&oacute;a - x&atilde; hội sẽ được quy hoạch theo hệ thống hiện đại. C&aacute;c khu vực chưa c&oacute; điều kiện kinh tế x&atilde; hội hoặc mật độ d&acirc;n số thấp sẽ được điều chỉnh c&aacute;c ng&agrave;nh nghề, quy hoạch ph&ugrave; hợp để tăng cơ hội ph&aacute;t triển trong tương lai.&nbsp;</p>', 5, '1709399584_dth.jfif', 1),
(6, 'a', '<p>Cụ thể ở ph&uacute;t 19 tại trận đấu n&agrave;y, trọng t&agrave;i L&ecirc; Tuấn Kiệt thổi phạt đội L&atilde;o tướng doanh nh&acirc;n Quảng Ng&atilde;i sau một t&igrave;nh huống va&nbsp;</p>', '<p>Cụ thể ở ph&uacute;t 19 tại trận đấu n&agrave;y, trọng t&agrave;i L&ecirc; Tuấn Kiệt thổi phạt đội L&atilde;o tướng doanh nh&acirc;n Quảng Ng&atilde;i sau một t&igrave;nh huống va chạm. Ri&ecirc;ng cầu thủ Hồng Quang nhận thẻ v&agrave;ng v&igrave; lỗi phản ứng v&agrave; x&uacute;c phạm trọng t&agrave;i. Hồng Quang đ&atilde; bất ngờ tung c&uacute; đấm m&oacute;c bằng tay tr&aacute;i v&agrave;o mặt trọng t&agrave;i Tuấn Kiệt khiến vị trọng t&agrave;i n&agrave;y cho&aacute;ng v&aacute;ng đổ ra s&acirc;n. Trọng t&agrave;i Tuấn Kiệt sau đ&oacute; d&ugrave; c&oacute; thể đứng dậy nhưng kh&ocirc;ng thể tiếp tục điều h&agrave;nh trận đấu v&agrave; phải chuyển sang l&agrave;m trọng t&agrave;i b&agrave;n. D&ugrave; vậy, trọng t&agrave;i Tuấn Kiệt su&yacute;t bị cầu thủ Hồng Quang h&agrave;nh hung lần nữa nếu như kh&ocirc;ng được c&aacute;c cầu thủ kh&aacute;c kịp thời ngăn cản. Sự việc đ&atilde; g&acirc;y phẫn nộ mạnh mẽ trong cộng đồng b&oacute;ng đ&aacute;, đặc biệt l&agrave; b&oacute;ng đ&aacute; phong tr&agrave;o tại Việt Nam.</p>', 5, '1709399574_bongda.jfif', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `id_cart` int(11) NOT NULL,
  `id_khachhang` int(11) NOT NULL,
  `code_cart` varchar(10) NOT NULL,
  `cart_status` int(11) NOT NULL,
  `cart_date` varchar(100) NOT NULL,
  `cart_payment` varchar(50) NOT NULL,
  `cart_shipping` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_cart`
--

INSERT INTO `tbl_cart` (`id_cart`, `id_khachhang`, `code_cart`, `cart_status`, `cart_date`, `cart_payment`, `cart_shipping`) VALUES
(52, 23, '5494', 0, '2024-01-13 21:59:13', 'tienmat', 0),
(53, 23, '7230', 1, '2024-01-13 22:00:53', 'chuyenkhoan', 5),
(55, 23, '6124', 1, '2024-01-14 20:32:29', 'tienmat', 5),
(58, 31, '6659', 1, '2024-02-18 15:33:43', 'tienmat', 3),
(59, 31, '1862', 1, '2024-02-18 15:55:41', 'tienmat', 3),
(60, 31, '9690', 0, '2024-02-18 16:15:35', 'chuyenkhoan', 3),
(61, 31, '1399', 1, '2024-02-19 21:21:05', 'tienmat', 3),
(62, 31, '4817', 1, '2024-02-19 21:22:54', 'chuyenkhoan', 3),
(63, 31, '5613', 0, '2024-02-19 21:45:58', 'tienmat', 3),
(64, 31, '691', 1, '2024-02-19 21:56:33', 'chuyenkhoan', 3),
(65, 31, '8087', 1, '2024-02-19 21:57:06', 'tienmat', 3),
(67, 31, '677', 1, '2024-02-19 22:05:32', 'vnpay', 3),
(68, 31, '5658', 1, '2024-02-19 22:06:08', 'tienmat', 3),
(70, 23, '1673', 1, '2024-02-20 23:29:24', 'tienmat', 5),
(71, 0, '9342', 1, '2024-02-20 23:31:26', 'chuyenkhoan', 1),
(72, 0, '9769', 1, '2024-02-20 23:33:27', 'chuyenkhoan', 1),
(73, 23, '680', 0, '2024-02-20 23:34:11', 'chuyenkhoan', 5),
(76, 23, '3979', 1, '2024-02-20 23:47:56', 'tienmat', 5),
(77, 23, '1000', 1, '2024-02-20 23:53:36', 'tienmat', 5),
(78, 0, '9696', 1, '2024-02-20 23:54:43', 'chuyenkhoan', 1),
(79, 23, '9113', 0, '2024-02-20 23:55:11', 'chuyenkhoan', 5),
(80, 23, '3344', 1, '2024-02-22 00:25:38', 'tienmat', 5),
(81, 23, '9271', 1, '2024-02-22 00:28:55', 'tienmat', 5),
(82, 23, '2608', 1, '2024-02-22 00:29:17', 'tienmat', 5),
(83, 23, '1290', 1, '2024-02-22 00:29:39', 'chuyenkhoan', 5),
(84, 23, '1245', 1, '2024-02-22 00:31:28', 'vnpay', 5),
(85, 23, '1435', 1, '2024-02-22 00:31:34', 'chuyenkhoan', 5),
(86, 23, '7263', 1, '2024-02-22 00:31:36', 'chuyenkhoan', 5),
(88, 0, '4650', 1, '2024-02-22 00:32:18', 'momo', 1),
(89, 0, '3743', 1, '2024-02-22 00:33:03', 'momo', 1),
(90, 0, '2254', 1, '2024-02-22 15:38:55', 'tienmat', 1),
(91, 0, '3340', 1, '2024-02-22 15:40:09', 'tienmat', 1),
(92, 0, '8440', 1, '2024-02-22 15:42:51', 'tienmat', 1),
(93, 0, '7691', 1, '2024-02-22 15:43:46', 'chuyenkhoan', 1),
(94, 0, '7028', 1, '2024-02-22 15:45:15', 'chuyenkhoan', 1),
(96, 0, '9611', 1, '2024-02-22 15:57:12', 'chuyenkhoan', 1),
(98, 0, '6406', 1, '2024-02-22 16:03:37', 'chuyenkhoan', 1),
(99, 0, '4999', 1, '2024-02-22 16:04:27', 'tienmat', 1),
(100, 0, '7074', 1, '2024-02-22 16:04:55', 'chuyenkhoan', 1),
(101, 0, '8169', 1, '2024-02-22 16:06:49', 'chuyenkhoan', 1),
(102, 0, '3680', 1, '2024-02-22 16:09:47', 'chuyenkhoan', 1),
(103, 23, '271', 0, '2024-02-22 23:35:25', 'tienmat', 5),
(104, 23, '8220', 0, '2024-02-22 23:45:38', 'chuyenkhoan', 5),
(105, 23, '6344', 1, '2024-02-23 00:09:47', 'chuyenkhoan', 5),
(106, 23, '4447', 1, '2024-02-23 00:09:53', 'chuyenkhoan', 5),
(107, 23, '3431', 1, '2024-02-23 00:11:46', 'chuyenkhoan', 5),
(108, 23, '4274', 1, '2024-02-23 00:15:30', 'chuyenkhoan', 5),
(109, 23, '2725', 1, '2024-02-23 00:16:54', 'chuyenkhoan', 5),
(110, 23, '8911', 1, '2024-02-23 00:20:10', 'chuyenkhoan', 5),
(111, 23, '7165', 1, '2024-02-28 21:33:18', '', 0),
(112, 23, '3831', 1, '2024-02-28 21:33:34', '', 0),
(113, 23, '8313', 1, '2024-02-28 21:58:20', 'vnpay', 5),
(114, 23, '8287', 1, '2024-02-28 22:00:02', 'chuyenkhoan', 5),
(115, 23, '214', 0, '2024-02-28 22:01:12', 'tienmat', 5),
(116, 57, '4539', 0, '2024-03-02 14:36:52', 'tienmat', 0),
(117, 23, '5415', 1, '2024-03-02 17:11:03', 'chuyenkhoan', 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_cart_details`
--

CREATE TABLE `tbl_cart_details` (
  `id_cart_details` int(11) NOT NULL,
  `code_cart` varchar(10) NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `soluongmua` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_cart_details`
--

INSERT INTO `tbl_cart_details` (`id_cart_details`, `code_cart`, `id_sanpham`, `soluongmua`) VALUES
(38, '4185', 8, 2),
(39, '584', 13, 1),
(40, '9132', 13, 1),
(41, '9132', 6, 1),
(42, '9248', 6, 2),
(43, '1806', 12, 2),
(44, '1852', 10, 1),
(45, '2764', 12, 1),
(46, '2764', 11, 1),
(47, '9408', 10, 1),
(48, '4211', 13, 2),
(49, '2415', 12, 1),
(50, '7311', 13, 1),
(51, '1013', 13, 1),
(52, '9513', 13, 1),
(53, '6275', 13, 1),
(54, '5494', 21, 1),
(55, '5494', 20, 1),
(56, '7230', 19, 1),
(57, '327', 17, 1),
(58, '6564', 22, 1),
(59, '755', 15, 1),
(60, '1862', 16, 2),
(61, '9690', 17, 1),
(62, '1399', 18, 1),
(63, '4817', 6, 1),
(64, '5613', 8, 2),
(65, '691', 11, 1),
(66, '677', 13, 1),
(67, '5658', 13, 1),
(68, '5658', 12, 1),
(69, '3636', 13, 1),
(70, '680', 6, 1),
(71, '680', 8, 1),
(72, '9955', 10, 1),
(73, '8806', 10, 1),
(74, '3979', 13, 1),
(75, '1000', 12, 1),
(76, '9113', 8, 1),
(77, '3344', 6, 1),
(78, '9271', 12, 1),
(79, '2608', 12, 1),
(80, '1290', 12, 1),
(81, '1245', 12, 1),
(82, '1435', 12, 1),
(83, '7263', 12, 1),
(84, '271', 15, 1),
(85, '8220', 16, 1),
(86, '8220', 21, 2),
(87, '6344', 20, 1),
(88, '4447', 20, 1),
(89, '3431', 20, 1),
(90, '4274', 20, 1),
(91, '2725', 20, 1),
(92, '8911', 20, 1),
(93, '7165', 16, 1),
(94, '7165', 20, 1),
(95, '8313', 21, 1),
(96, '8287', 16, 1),
(97, '214', 15, 1),
(98, '4539', 22, 2),
(99, '4539', 21, 6),
(100, '5415', 21, 1),
(101, '5415', 20, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_dangky`
--

CREATE TABLE `tbl_dangky` (
  `id_dangky` int(11) NOT NULL,
  `tenkhachhang` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `diachi` varchar(100) NOT NULL,
  `matkhau` varchar(100) NOT NULL,
  `dienthoai` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_dangky`
--

INSERT INTO `tbl_dangky` (`id_dangky`, `tenkhachhang`, `email`, `diachi`, `matkhau`, `dienthoai`) VALUES
(18, 'dsa', 'áddsa', 'dsa', 'c91c03ea6c46a86cbc019be3d71d0a1a', 'dsadsa'),
(19, 'Le Xuan Manh', 'manh@hunre.edu.vn', 'Ha noi', 'c81e728d9d4c2f636f067f89cc14862c', '123'),
(20, 'Le Xuan Manh', 'manh@hunre.edu.vn', 'Ha noi', '202cb962ac59075b964b07152d234b70', '1231231231'),
(21, 'Le Xuan Manh', 'manh@hunre.edu.vn', 'Ha noi', '202cb962ac59075b964b07152d234b70', '3131'),
(22, 'Manh', 'manh@hunre.edu.vn', 'BN', '9f6e6800cfae7749eb6c486619254b9c', '2'),
(23, 'Le manh', 'manhlexuan02@gmail.com', 'BN', '03c7c0ace395d80182db07ae2c30f034', '1231231231'),
(24, 'Le Xuan Manh', 'manh', 'Ha noi', '03c7c0ace395d80182db07ae2c30f034', '1'),
(25, 'Le Xuan Manh', 'manh@hunre.edu.vn', 'Ha noi', '03c7c0ace395d80182db07ae2c30f034', '1231231231'),
(26, 'Nguyễn Đức Dũng', 'dung@gmail.com', 'Thanh Hóa', '625d45c587033e8970af8b4e3fdb575c', '0912345678'),
(27, 'nguyễn khắc hiếu', 'hieu@', 'Nghệ An', '202cb962ac59075b964b07152d234b70', '1231231231'),
(28, 'nguyễn khắc hiếu', 'hieu@', 'Nghệ An', '202cb962ac59075b964b07152d234b70', '1231231231'),
(29, 'Le Xuan Manh', 'manh@hunre.edu.vn', 's', 'c4ca4238a0b923820dcc509a6f75849b', '1'),
(30, 'Le Xuan Manh', 'manh@hunre.edu.vn', 's', 'c4ca4238a0b923820dcc509a6f75849b', '1'),
(31, 'bui trung hieu', 'manhlexuan02@gmail.com', 'Ha noi', '202cb962ac59075b964b07152d234b70', '0912345678'),
(32, 'Le Xuan Manh', 'manhlexuan02@gmail.com', 'Bac ninh', '03c7c0ace395d80182db07ae2c30f034', '0912345678'),
(33, 'LXManh', 'manh@123', 'Bắc Ninh', '202cb962ac59075b964b07152d234b70', '0912345678'),
(34, 'Mạnh Lê', '20111063746@hunre.edu.vn', 'Bắc Ninh', '75f0817da202dfff6c1e8bf6ec5fad8f', '1231231231'),
(35, 'Mạnh Lê', '20111063746@hunre.edu.vn', 'Bắc Ninh', '75f0817da202dfff6c1e8bf6ec5fad8f', '1231231231'),
(37, 'Hieu', 'hieu@123', 'Nghe An', '698d51a19d8a121ce581499d7b701668', '0111111111'),
(38, 'Hieu', 'hieu@123', 'Nghe An', '698d51a19d8a121ce581499d7b701668', '0111111111'),
(41, 'MẠNH', '20111063746@hunre.edu.vn', 'Hà Nội', '0f87486b167470489cfe11021ce3a076', '0967099184'),
(42, 'Le Xuan Manh', 'manhlexuan02@gmail.com', 'Ha noi', '03c7c0ace395d80182db07ae2c30f034', '3131'),
(43, 'Dũng', 'manhlexuan02@gmail.com', 'Ha noi', '03c7c0ace395d80182db07ae2c30f034', '0912345678'),
(44, 'Le Xuan Manh', 'd@123', 'Ha noi', '03c7c0ace395d80182db07ae2c30f034', '0912345678'),
(45, 'Le Xuan Manh', 'd@123', 'Ha noi', '03c7c0ace395d80182db07ae2c30f034', '0912345678'),
(46, 'ManhBN', 'manhlexuan02@gmail.com', 'VN', '202cb962ac59075b964b07152d234b70', '124123'),
(47, 'Le Xuan Manh', 'manh@Bngmai.com', 'Bắc Ninh', 'c4ca4238a0b923820dcc509a6f75849b', '0912345678'),
(48, 'Le Xuan Manh Manh', 'manhlexuan02@gmail.com', 'Ha noi 2', '75f0817da202dfff6c1e8bf6ec5fad8f', '345'),
(49, 'Le Xuan Manh', 'manhlexuan02@gmail.com', 'Bắc Ninh', '03c7c0ace395d80182db07ae2c30f034', '123'),
(50, 'Le Xuan Manh', 'manhlexuan02@gmail.com', 'Bắc Ninh', '03c7c0ace395d80182db07ae2c30f034', '123'),
(51, 'ME', 'manhlexuan02@gmail.com', 'ME', '0a8005f5594bd67041f88c6196192646', '097'),
(52, 'LXM', 'manh123@gmail.com', 'Anh', '202cb962ac59075b964b07152d234b70', '456'),
(53, 'Le Xuan Manh', '20111063746@hunre.edu.vn', 's', '03c7c0ace395d80182db07ae2c30f034', 's'),
(54, 'M', 'manh@hunre.edu.vn', 'Ha noi', '8277e0910d750195b448797616e091ad', '3131'),
(55, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', ''),
(56, 'Le Xuan Manh', 'manhlexuan02@gmail.com', 'Ha noi', '03c7c0ace395d80182db07ae2c30f034', '0912345678'),
(57, 'Le Xuan Manh', 'manhlexuan03@gmail.com', 'Ha noi', '03c7c0ace395d80182db07ae2c30f034', '0912345678');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_danhmuc`
--

CREATE TABLE `tbl_danhmuc` (
  `id_danhmuc` int(11) NOT NULL,
  `tendanhmuc` varchar(100) NOT NULL,
  `thutu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_danhmuc`
--

INSERT INTO `tbl_danhmuc` (`id_danhmuc`, `tendanhmuc`, `thutu`) VALUES
(33, 'Ốp Lưng', 1),
(34, 'Kính Cường Lực', 2),
(35, 'Tai Nghe', 1),
(36, 'Sạc Dự Phòng', 1),
(37, 'Sạc,Cáp sạc', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_danhmucbaiviet`
--

CREATE TABLE `tbl_danhmucbaiviet` (
  `id_baiviet` int(11) NOT NULL,
  `tendanhmuc_baiviet` varchar(255) NOT NULL,
  `thutu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_danhmucbaiviet`
--

INSERT INTO `tbl_danhmucbaiviet` (`id_baiviet`, `tendanhmuc_baiviet`, `thutu`) VALUES
(3, 'Công nghệ số ', 1),
(4, 'Đô thị hóa', 2),
(5, 'Bóng đá', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_momo`
--

CREATE TABLE `tbl_momo` (
  `id_momo` int(11) NOT NULL,
  `partner_code` varchar(50) NOT NULL,
  `order_id` varchar(50) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `order_info` varchar(50) NOT NULL,
  `order_type` varchar(50) NOT NULL,
  `trans_id` varchar(50) NOT NULL,
  `pay_type` varchar(50) NOT NULL,
  `code_cart` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_momo`
--

INSERT INTO `tbl_momo` (`id_momo`, `partner_code`, `order_id`, `amount`, `order_info`, `order_type`, `trans_id`, `pay_type`, `code_cart`) VALUES
(3, 'MOMOBKUN20180529', '1644123235', '250000', 'Thanh toán qua ATM', 'momo_wallet', '2642535948', 'napas', '9554'),
(4, 'MOMOBKUN20180529', '1644126570', '250000', 'Thanh toán qua ATM', 'momo_wallet', '2642536202', 'napas', '3872'),
(5, 'MOMOBKUN20180529', '1645004827', '350000', 'Thanh toán qua ATM', 'momo_wallet', '2644029861', 'napas', '1161');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_sanpham`
--

CREATE TABLE `tbl_sanpham` (
  `id_sanpham` int(11) NOT NULL,
  `masp` varchar(100) NOT NULL,
  `tensp` varchar(100) NOT NULL,
  `giasp` varchar(100) NOT NULL,
  `soluong` int(11) NOT NULL,
  `hinhanh` varchar(100) NOT NULL,
  `tomtat` text NOT NULL,
  `noidung` text NOT NULL,
  `tinhtrang` int(11) NOT NULL,
  `id_danhmuc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_sanpham`
--

INSERT INTO `tbl_sanpham` (`id_sanpham`, `masp`, `tensp`, `giasp`, `soluong`, `hinhanh`, `tomtat`, `noidung`, `tinhtrang`, `id_danhmuc`) VALUES
(15, 'DR003', 'Cáp Đa Năng 4 in 1 Lightning Type C 1m Xmobile', '225000', 15, '1708584763_day2.jpg', '<p>&nbsp;C&aacute;p Đa Năng 4 in 1 Lightning Type C 1m Xmobile DR003 c&oacute; thiết kế th&ocirc;ng minh với 4 đầu cho&nbsp;cho c&ocirc;ng suất tối đa l&ecirc;n đến 60 W, hứa hẹn mang đến cho người d&ugrave;ng trải nghiệm&lt;</p>', '<p>&bull;&nbsp;<a target=\"_blank\" href=\"https://www.thegioididong.com/cap-dien-thoai\">C&aacute;p sạc</a>&nbsp;c&oacute; thiết kế đẹp mắt, vỏ ngo&agrave;i bền bỉ, dễ d&agrave;ng cuốn gọn để bỏ v&agrave;o balo/t&uacute;i x&aacute;ch mang theo đi học, đi l&agrave;m.</p><p>&bull;&nbsp;T&iacute;ch hợp 4 đầu c&aacute;p cho ph&eacute;p người d&ugrave;ng phối gh&eacute;p linh hoạt để sử dụng, như Type C - Type C, Type C - Lightning, USB A - Type C, hoặc USB A - Lightning, tương th&iacute;ch với nhiều thiết bị điện thoại,&nbsp;<a target=\"_blank\" href=\"https://www.thegioididong.com/may-tinh-bang\">m&aacute;y t&iacute;nh bảng</a>, tai nghe,...</p><p>&bull;&nbsp;C&aacute;p c&oacute; khả năng sạc nhanh với c&ocirc;ng suất tối đa l&ecirc;n đến 60 W khi d&ugrave;ng 2 cổng Type C, 27 W cho đầu Type C - Lightning, 15 W cho đầu USB A - Type C, v&agrave; 10 W cho đầu USB A - Lightning.</p><p>&bull;&nbsp;Chiều d&agrave;i d&acirc;y 1 m, đủ d&agrave;i để sạc v&agrave; sử dụng một c&aacute;ch thoải m&aacute;i.</p><p>&bull;&nbsp;<a target=\"_blank\" href=\"https://www.thegioididong.com/cap-dien-thoai-xmobile\">C&aacute;p sạc Xmobile</a>&nbsp;c&oacute; phần chu&ocirc;i c&aacute;p được chế t&aacute;c chỉn chu gi&uacute;p sản phẩm chắc chắn, hạn chế tối đa t&igrave;nh trạng nứt g&atilde;y khi cuộn.</p>', 1, 37),
(16, 'TC021', 'Adapter Sạc USB 12W AVA+ CS-TC021', '90000', 60, '1708538624_cusac1.jpg', '<p>Adapter Sạc USB 12W AVA+ CS-TC021 Trắng sở hữu thiết kế gọn g&agrave;ng, đẹp mắt, sử dụng c&ugrave;ng c&aacute;p sạc để cung cấp nguồn điện cho c&aacute;c thiết bị điện tử của bạn.</p>', '<p>&nbsp;</p><p>&bull;&nbsp;<a target=\"_blank\" href=\"https://www.thegioididong.com/adapter-sac\">Adapter</a>&nbsp;cung cấp d&ograve;ng sạc l&ecirc;n đến&nbsp;12 W&nbsp;gi&uacute;p nạp pin nhanh ch&oacute;ng.&nbsp;</p><p>&bull;&nbsp;Sử dụng với nhiều thiết bị như điện thoại, m&aacute;y t&iacute;nh bảng, sạc dự ph&ograve;ng,... nhờ&nbsp;cổng ra USB.</p><p>&bull;&nbsp;Tương th&iacute;ch đa dạng c&aacute;p sạc th&ocirc;ng dụng hiện nay.&nbsp;</p><p>&bull;&nbsp;Kiểu d&aacute;ng nhỏ nhắn, m&agrave;u trắng sạch đẹp, dễ d&agrave;ng mang chiếc&nbsp;<a target=\"_blank\" href=\"https://www.thegioididong.com/adapter-sac-ava-plus\">Adapter AVA+</a>&nbsp;n&agrave;y theo bạn đến mọi nơi.</p>', 1, 37),
(17, 'A1256', 'Pin sạc dự phòng 10000mAh Type C PD QC 3.0 30W Anker ', '1180000', 10, '1708587011_sacanker.jpg', '<p>Pin sạc dự ph&ograve;ng 10000mAh Type C PD QC 3.0 30W Anker A1256&nbsp;sở hữu gam m&agrave;u sang trọng, thiết kế đẹp mắt, hiệu suất sạc lớn, tương th&iacute;ch với nhiều thiết bị, mang đến cho người d&ugrave;ng những trải nghiệm ho&agrave;n hảo.</p>', '<p>&bull; Thiết kế tối giản, gam m&agrave;u đẹp mắt,&nbsp;<a target=\"_blank\" href=\"https://www.thegioididong.com/sac-dtdd\">pin sạc dự ph&ograve;ng</a>&nbsp;được l&agrave;m từ chất liệu cao cấp v&agrave; bền bỉ, cầm kh&aacute; chắc tay. K&iacute;ch thước nhỏ gọn, c&oacute; thể mang theo bất cứ đ&acirc;u m&agrave; kh&ocirc;ng lo chiếm diện t&iacute;ch.</p><p>&bull;&nbsp;<a target=\"_blank\" href=\"https://www.thegioididong.com/sac-dtdd-anker\">Pin sạc dự ph&ograve;ng Anker</a>&nbsp;t&iacute;ch hợp c&ocirc;ng nghệ sạc nhanh Power Delivery c&ugrave;ng c&ocirc;ng nghệ&nbsp;Quick Charge 3.0&nbsp;gi&uacute;p sạc thiết bị nhanh ch&oacute;ng, r&uacute;t ngắn thời gian chờ sạc, bạn c&oacute; thể nạp pin cho chiếc iPhone 13 đến 50% chỉ trong 30 ph&uacute;t.</p><p>&bull; Dung lượng pin 10.000 mAh, hiệu suất l&ecirc;n đến 55% cho ph&eacute;p bạn c&oacute; thể sạc thiết bị nhiều lần, tương đương với việc sạc chiếc iPhone 14 được khoảng hơn 1 lần (tuỳ t&igrave;nh trạng pin của m&aacute;y).</p><p>&bull; C&ocirc;ng suất sạc được thương hiệu Anker trang bị l&ecirc;n đến 30 W gi&uacute;p bạn c&oacute; thể sạc pin cho c&aacute;c thiết bị điện tử phổ biến hiện nay như: điện thoại, laptop, tai nghe,...</p><p>&bull; Hiển thị r&otilde; r&agrave;ng thời gian sạc c&ograve;n lại v&agrave; dung lượng pin hiện tại tr&ecirc;n mặt&nbsp;<a target=\"_blank\" href=\"https://www.thegioididong.com/sac-dtdd-10000mah\">pin sạc dự ph&ograve;ng 10000 mAh</a>&nbsp;v&ocirc; c&ugrave;ng tiện lợi.&nbsp;</p>', 1, 36),
(18, 'ETE41', 'Tai nghe Bluetooth True Wireless OPPO ENCO Buds 2 ', '790000', 7, '1709398729_tai nghe blt sony.jpeg', '<p>Thiết kế dạng tr&ograve;n mới lạ, m&agrave;u sắc thời thượng, sang trọng</p>', '<p>Phần hộp đựng của&nbsp;<a target=\"_blank\" href=\"https://www.thegioididong.com/sp-287888\">tai nghe Bluetooth True Wireless OPPO ENCO Buds 2 ETE41</a>&nbsp;mang kiểu d&aacute;ng thiết kế dạng tr&ograve;n tr&ocirc;ng kh&aacute; lạ mắt với khối lượng gọn nhẹ. Nắp hộp c&oacute; thể đ&oacute;ng, mở dễ d&agrave;ng c&ugrave;ng phần bản lề v&ocirc; c&ugrave;ng chắc chắn. Sở hữu bề mặt b&oacute;ng bao bọc trọn vẹn hộp đựng gi&uacute;p tai nghe th&ecirc;m phần thời thượng, sang chảnh, ph&ugrave; hợp với mọi đối tượng.</p><p>Phần đệm n&uacute;m tai nghe vừa kh&iacute;t v&agrave;o tai cộng th&ecirc;m phần housing được thiết kế kh&aacute; d&agrave;i gi&uacute;p hạn chế rơi, tuột v&agrave; cho khả năng sử dụng thoải m&aacute;i trong mọi hoạt động kể cả chơi thể thao hoặc chạy bộ nhiều giờ liền.</p>', 1, 35),
(19, 'MPU73', 'Ốp lưng Magsafe iPhone 14 Pro Max Nhựa trong Apple MPU73', '635000', 18, '1708584579_oplungip.jpg', '<p>Mafsafe iphone</p>', '<p>&bull;&nbsp;Sử dụng cho điện thoại&nbsp;<a target=\"_blank\" href=\"https://www.thegioididong.com/dtdd/iphone-14-pro-max\">iPhone 14 Pro Max</a>.</p><p>&bull;&nbsp;<a target=\"_blank\" href=\"https://www.thegioididong.com/op-lung-flipcover\">Ốp lưng</a>&nbsp;bảo vệ điện thoại chống trầy xước, va chạm.</p><p>&bull;&nbsp;Với chất liệu&nbsp;nhựa trong&nbsp;đơn giản, tinh tế.</p><p>&bull;&nbsp;<a target=\"_blank\" href=\"https://www.thegioididong.com/op-lung-flipcover-iphone\">Ốp lưng Apple</a>&nbsp;hỗ trợ sạc kh&ocirc;ng d&acirc;y&nbsp;MagSafe&nbsp;tiện lợi kh&ocirc;ng cần th&aacute;o ốp.</p><p>&bull;&nbsp;Thiết kế ốp &ocirc;m trọn th&acirc;n m&aacute;y, cầm chắc tay.</p><p>&nbsp;</p>', 1, 33),
(20, 'OS24U', 'Miếng dán kính cường lực Samsung Galaxy S24 Ultra UniQ', '324000', 35, '1708584746_cuonglucss.jpg', '<p>&Ocirc;́p lưng S24Ultra</p>', '<ul><li>Sản phẩm được chế t&aacute;c d&agrave;nh ri&ecirc;ng cho điện thoại&nbsp;<a target=\"_blank\" href=\"https://www.thegioididong.com/dtdd/samsung-galaxy-s24-ultra-5g\">Samsung Galaxy S24 Ultra</a>.</li><li><a target=\"_blank\" href=\"https://www.thegioididong.com/mieng-dan-man-hinh?g=mieng-dan-kinh\">Miếng d&aacute;n k&iacute;nh</a>&nbsp;l&agrave;m từ k&iacute;nh thủy tinh cao cấp, cho khả năng bảo vệ tốt.</li><li>Hạn chế b&aacute;m bẩn, dấu v&acirc;n tay, giữ cho m&aacute;y lu&ocirc;n sạch sẽ.</li><li><a target=\"_blank\" href=\"https://www.thegioididong.com/mieng-dan-man-hinh\">Miếng d&aacute;n m&agrave;n h&igrave;nh</a>&nbsp;mỏng nhẹ, cho thao t&aacute;c vuốt, chạm dễ d&agrave;ng.</li></ul>', 1, 34),
(21, 'KIP15', 'Miếng dán kính cường lực chống nhìn trộm iPhone 15 ', '300000', 7, '1708586946_cuonglucip.jpg', '<p>Kính cường lực tr&ocirc;́ng nhìn tr&ocirc;̣m IPhone</p>', '<ul><li><a target=\"_blank\" href=\"https://www.thegioididong.com/mieng-dan-man-hinh\">Miếng d&aacute;n m&agrave;n h&igrave;nh</a>&nbsp;si&ecirc;u mỏng chỉ 0.33 mm cho mọi thao t&aacute;c cảm ứng ch&iacute;nh x&aacute;c.</li><li>L&agrave;m từ k&iacute;nh High Alumium c&oacute; độ cứng 9H cho khả năng chống va đập, trầy xước cao.</li><li><a target=\"_blank\" href=\"https://www.thegioididong.com/mieng-dan-man-hinh?g=mieng-dan-kinh\">Miếng d&aacute;n k&iacute;nh</a>&nbsp;trang bị lớp chống nh&igrave;n trộm, gi&uacute;p bảo mật an to&agrave;n th&ocirc;ng tin khi ở nơi c&ocirc;ng cộng.</li><li><a target=\"_blank\" href=\"https://www.thegioididong.com/mieng-dan-man-hinh?g=dan-mat-truoc\">Miếng d&aacute;n mặt trước</a>&nbsp;bền bỉ, hạn chế b&aacute;m bụi, b&aacute;m dấu v&acirc;n tay tối đa.</li></ul>', 1, 34),
(22, 'BS531', 'Sạc không dây MagPro 2 in 1 15W Baseus BS-W531 ', '1277000', 14, '1709452696_cusac2.jpg', '<p>Đế sạc kh&ocirc;ng d&acirc;y 2 in 1 15W MagPro Baseus BS-W531&nbsp;c&oacute; thiết kế nhỏ gọn, khối lượng nhẹ, c&ocirc;ng suất sạc tối đa l&ecirc;n đến 15 W, sạc c&ugrave;ng l&uacute;c cho 3 thiết bị, đem đến cho bạn trải nghiệm sử dụng tuyệt vời.</p>', '<p>&bull;&nbsp;Đế sạc c&oacute; h&igrave;nh dạng khối lập phương nhỏ gọn, thiết kế gi&aacute; đỡ nam ch&acirc;m ở mặt tr&ecirc;n vừa giữ chặt&nbsp;<a target=\"_blank\" href=\"https://www.thegioididong.com/dtdd\">điện thoại</a>&nbsp;khi sạc, vừa hỗ trợ n&acirc;ng điện thoại l&ecirc;n 1 g&oacute;c nghi&ecirc;ng l&yacute; tưởng, tối ưu trải nghiệm xem cho người d&ugrave;ng.</p><p>&bull;&nbsp;Khối lượng đế sạc gọn nhẹ, dễ d&agrave;ng mang theo&nbsp;<a target=\"_blank\" href=\"https://www.thegioididong.com/adapter-sac\">adapter sạc</a>&nbsp;khi đi c&ocirc;ng t&aacute;c, đi du lịch hoặc c&aacute;c hoạt động h&agrave;ng ng&agrave;y.</p><p>&bull;&nbsp;Sản phẩm c&oacute; thể sạc c&ugrave;ng l&uacute;c 3 thiết bị, bao gồm 1 điện thoại (sạc kh&ocirc;ng d&acirc;y, tối đa 15 W), 1 tai nghe TWS (sạc kh&ocirc;ng d&acirc;y, tối đa 5 W) v&agrave; 1 thiết bị kh&aacute;c qua cổng Type C (sạc c&oacute; d&acirc;y, tối đa 5 W).</p><p>&bull;&nbsp;T&iacute;ch hợp sẵn d&acirc;y c&aacute;p Type C gi&uacute;p nhận năng lượng cho bộ sạc, c&oacute; thể cuốn d&acirc;y c&aacute;p v&ograve;ng theo th&acirc;n đế sạc cực kỳ gọn g&agrave;ng khi kh&ocirc;ng d&ugrave;ng tới.</p><p>&bull;&nbsp;<a target=\"_blank\" href=\"https://www.thegioididong.com/adapter-sac-baseus\">Adapter sạc&nbsp;Baseus</a>&nbsp;tương th&iacute;ch với nhiều d&ograve;ng điện thoại, tai nghe TWS,... c&oacute; hỗ trợ sạc kh&ocirc;ng d&acirc;y.</p>', 1, 37);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_thongke`
--

CREATE TABLE `tbl_thongke` (
  `id` int(11) NOT NULL,
  `ngaydat` varchar(100) NOT NULL,
  `donhang` int(11) NOT NULL,
  `doanhthu` varchar(100) NOT NULL,
  `soluongban` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_thongke`
--

INSERT INTO `tbl_thongke` (`id`, `ngaydat`, `donhang`, `doanhthu`, `soluongban`) VALUES
(1, '2024-01-01', 1, '50', 2),
(2, '2024-01-02', 32, '150', 6),
(3, '2024-01-03', 312, '32', 1),
(7, '2024-01-04', 3122, '323', 13),
(8, '2024-01-05', 13, '42', 132),
(9, '2023-12-25', 133, '42', 132),
(10, '2023-10-25', 131, '421', 1321),
(15, '2024-02-18', 2, '225000', 2),
(19, '2024-02-22', 2, '915000', 1),
(20, '2024-03-02', 2, '4579000', 8);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_vanchuyen`
--

CREATE TABLE `tbl_vanchuyen` (
  `id_ship` int(11) NOT NULL,
  `ten` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `diachi` varchar(200) NOT NULL,
  `ghichu` varchar(255) NOT NULL,
  `id_dangky` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_vanchuyen`
--

INSERT INTO `tbl_vanchuyen` (`id_ship`, `ten`, `phone`, `diachi`, `ghichu`, `id_dangky`) VALUES
(1, 'Lê Xuân Mạnh', '0967099184', 'Bắc Ninh', 'Giao hàng nhanh vào', 0),
(2, 'Lê Xuân Mạnh', '0967099184', 'Ha noi', 'Giao hàng nhanh vào', 0),
(3, 'Lê Xuân Mạnh', '0967099184', 'Bắc Ninh', 'Giao hàng nhanh nhé', 31),
(4, 'Lê Xuân Mạnh', '0967099184', 'Ha noi', 'Giao hàng nhanh vào d', 33),
(5, 'Lê Xuân Mạnh', '0967099184', 'Tu son Bac ninh', 'Nhanh', 23);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_vnpay`
--

CREATE TABLE `tbl_vnpay` (
  `id_vnpay` int(11) NOT NULL,
  `vnp_amount` varchar(50) NOT NULL,
  `vnp_bankCode` varchar(50) NOT NULL,
  `vnp_banktranno` varchar(50) NOT NULL,
  `vnp_cardtype` varchar(50) NOT NULL,
  `vnp_orderinfo` varchar(100) NOT NULL,
  `vnp_paydate` varchar(50) NOT NULL,
  `vnp_tmncode` varchar(50) NOT NULL,
  `vnp_transactionno` varchar(50) NOT NULL,
  `code_cart` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_vnpay`
--

INSERT INTO `tbl_vnpay` (`id_vnpay`, `vnp_amount`, `vnp_bankCode`, `vnp_banktranno`, `vnp_cardtype`, `vnp_orderinfo`, `vnp_paydate`, `vnp_tmncode`, `vnp_transactionno`, `code_cart`) VALUES
(4, '25000000', 'NCB', '20220206115602', 'ATM', 'Thanh toán đơn hàng đặt tại web', '20220206115533', 'UD2KZW06', '13682669', '2844'),
(5, '25000000', 'NCB', '20220206124857', 'ATM', 'Thanh toán đơn hàng đặt tại web', '20220206124854', 'UD2KZW06', '13682671', '6140');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Chỉ mục cho bảng `tbl_baiviet`
--
ALTER TABLE `tbl_baiviet`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`id_cart`);

--
-- Chỉ mục cho bảng `tbl_cart_details`
--
ALTER TABLE `tbl_cart_details`
  ADD PRIMARY KEY (`id_cart_details`);

--
-- Chỉ mục cho bảng `tbl_dangky`
--
ALTER TABLE `tbl_dangky`
  ADD PRIMARY KEY (`id_dangky`);

--
-- Chỉ mục cho bảng `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  ADD PRIMARY KEY (`id_danhmuc`);

--
-- Chỉ mục cho bảng `tbl_danhmucbaiviet`
--
ALTER TABLE `tbl_danhmucbaiviet`
  ADD PRIMARY KEY (`id_baiviet`);

--
-- Chỉ mục cho bảng `tbl_momo`
--
ALTER TABLE `tbl_momo`
  ADD PRIMARY KEY (`id_momo`);

--
-- Chỉ mục cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD PRIMARY KEY (`id_sanpham`),
  ADD KEY `id_danhmuc` (`id_danhmuc`);

--
-- Chỉ mục cho bảng `tbl_thongke`
--
ALTER TABLE `tbl_thongke`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_vanchuyen`
--
ALTER TABLE `tbl_vanchuyen`
  ADD PRIMARY KEY (`id_ship`);

--
-- Chỉ mục cho bảng `tbl_vnpay`
--
ALTER TABLE `tbl_vnpay`
  ADD PRIMARY KEY (`id_vnpay`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tbl_baiviet`
--
ALTER TABLE `tbl_baiviet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT cho bảng `tbl_cart_details`
--
ALTER TABLE `tbl_cart_details`
  MODIFY `id_cart_details` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT cho bảng `tbl_dangky`
--
ALTER TABLE `tbl_dangky`
  MODIFY `id_dangky` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT cho bảng `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  MODIFY `id_danhmuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT cho bảng `tbl_danhmucbaiviet`
--
ALTER TABLE `tbl_danhmucbaiviet`
  MODIFY `id_baiviet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `tbl_momo`
--
ALTER TABLE `tbl_momo`
  MODIFY `id_momo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  MODIFY `id_sanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `tbl_thongke`
--
ALTER TABLE `tbl_thongke`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `tbl_vanchuyen`
--
ALTER TABLE `tbl_vanchuyen`
  MODIFY `id_ship` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `tbl_vnpay`
--
ALTER TABLE `tbl_vnpay`
  MODIFY `id_vnpay` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
