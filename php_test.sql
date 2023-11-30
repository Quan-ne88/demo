-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2023 at 04:41 AM
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
-- Database: `php_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int(11) NOT NULL,
  `ma_khach_hang` int(11) NOT NULL,
  `ma_san_pham` int(11) NOT NULL,
  `noi_dung` varchar(100) NOT NULL,
  `binh_luan_vao` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(11) NOT NULL,
  `tieu_de` varchar(30) NOT NULL,
  `tao_ngay` timestamp NOT NULL DEFAULT current_timestamp(),
  `cap_nhat_ngay` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `tieu_de`, `tao_ngay`, `cap_nhat_ngay`) VALUES
(1, 'Điện thoại', '2020-10-29 01:24:54', '2020-10-29 01:24:54'),
(2, 'Laptop', '2020-10-30 16:49:05', '2020-10-30 16:49:05'),
(4, 'asdsa', '2023-11-21 16:26:39', '2023-11-21 16:26:39');

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

CREATE TABLE `donhang` (
  `id` int(11) NOT NULL,
  `ma_khach_hang` int(11) NOT NULL,
  `ho_va_ten` varchar(250) NOT NULL,
  `email` varchar(200) NOT NULL,
  `dia_chi` varchar(30) NOT NULL,
  `so_dien_thoai` varchar(30) NOT NULL,
  `trang_thai` enum('1','2','3') NOT NULL DEFAULT '1',
  `tao_ngay` timestamp NOT NULL DEFAULT current_timestamp(),
  `cap_nhat_ngay` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `donhangchitiet`
--

CREATE TABLE `donhangchitiet` (
  `id` int(11) NOT NULL,
  `ma_don_hang` int(11) NOT NULL,
  `ma_san_pham` int(11) NOT NULL,
  `so_luong` int(11) NOT NULL,
  `don_gia` int(11) NOT NULL,
  `tao_ngay` timestamp NOT NULL DEFAULT current_timestamp(),
  `cap_nhat_ngay` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `id` int(11) NOT NULL,
  `ma_vai_tro` int(11) NOT NULL,
  `ten_dang_nhap` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `ho_va_ten` varchar(100) NOT NULL,
  `mat_khau` varchar(50) NOT NULL,
  `kich_hoat` enum('1','2') NOT NULL DEFAULT '1',
  `tao_ngay` timestamp NOT NULL DEFAULT current_timestamp(),
  `cap_nhat_ngay` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`id`, `ma_vai_tro`, `ten_dang_nhap`, `email`, `ho_va_ten`, `mat_khau`, `kich_hoat`, `tao_ngay`, `cap_nhat_ngay`) VALUES
(1, 1, 'admin', 'admin1@gmail.com', 'Nguyen Van Admin', '6c342a8183d3412a408354ae8a2c5653', '1', '2020-11-12 21:43:13', '2020-11-12 21:43:13'),
(4, 2, 'user', 'test1@gmail.com', 'Nguyen Van User', 'eb340b07f717b1e6d8e774ff87668b32', '1', '2023-11-17 04:23:37', '2023-11-17 04:23:37');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `ten` varchar(30) NOT NULL,
  `gia` int(11) NOT NULL,
  `giam_gia` int(11) NOT NULL,
  `hinh_anh` varchar(30) NOT NULL,
  `mo_ta` mediumtext NOT NULL,
  `ma_danh_muc` int(11) NOT NULL,
  `tao_ngay` timestamp NOT NULL DEFAULT current_timestamp(),
  `cap_nhat_ngay` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id`, `ten`, `gia`, `giam_gia`, `hinh_anh`, `mo_ta`, `ma_danh_muc`, `tao_ngay`, `cap_nhat_ngay`) VALUES
(1, 'Apple iPhone 101', 1699999, 8000, 'DIOT-02-removebg-preview.png', '&lt;p&gt;San pham 1&lt;/p&gt;\r\n', 1, '2023-11-16 14:36:47', '2023-11-16 14:36:47'),
(2, 'Samsung Galaxy 10', 200000, 8000, '2.png', 'San pham 2', 1, '2023-11-16 14:36:47', '2023-11-16 14:36:47'),
(3, 'Redmi Note 7 Pro', 200000, 8000, '3.png', 'San pham 3', 1, '2023-11-16 14:36:47', '2023-11-16 14:36:47'),
(4, 'Apple iPhone 10', 200000, 8000, '4.png', 'San pham 4', 1, '2023-11-16 14:36:47', '2023-11-16 14:36:47'),
(5, 'MacBook Pro 2022', 250000000, 250000, 'macbook-1.jpg', 'San pham 4', 2, '2023-11-16 14:36:47', '2023-11-16 14:36:47'),
(6, 'Iphone 15 màu hồng', 20900000, 18000000, 'ip-15-pink.jpg', 'Trong khi 2 đại diện cao cấp nhất của gia đình iPhone 15 là 15 Pro và 15 Pro Max đang làm mưa làm gió khắp nơi. Thì 2 đại diện cùng dòng nhưng ở phân khúc phổ thông cũng rất đáng nhận được sự quan tâm của các bạn.\r\niPhone 15 128GB Mới 100% giữ lại những gì tinh túy nhất của các thế hệ tiền nhiệm, cả 2 phiên bản iPhone 15 thường và iPhone 15 Plus đã được cách tân “mạnh mẽ” trong năm 2023 với Dynamic Island. Điều này đồng nghĩa với việc thiết kế tai thỏ (Notch) từ nay sẽ không còn nữa!\r\nVề phần vóc dáng thì 2 dòng sản phẩm hướng tới người dùng phổ thông vẫn không có quá nhiều khác biệt. Khung máy được làm bằng kim loại, màn hình cường lực chống xước và mặt lưng tráng gương vẫn được xem là thiết kế “Quốc Dân” trong các năm vừa qua của nhà Táo.\r\n\r\nSau Dynamic Island phải kể đến tone màu pastel của iPhone 15 và 15 Plus mang hơi hướng nhẹ nhàng nhưng vô cùng sang trọng và đẳng cấp. Cụ thể, iPhone 15 Thường và 15 Plus sẽ có 5 tông màu chủ đạo: Đen, Xanh da trời, xanh lá cây, vàng và hồng.', 1, '2023-11-16 14:36:47', '2023-11-16 14:36:47');

-- --------------------------------------------------------

--
-- Table structure for table `vaitro`
--

CREATE TABLE `vaitro` (
  `id` int(11) NOT NULL,
  `ten` varchar(100) NOT NULL,
  `tao_ngay` timestamp NOT NULL DEFAULT current_timestamp(),
  `cap_nhat_ngay` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vaitro`
--

INSERT INTO `vaitro` (`id`, `ten`, `tao_ngay`, `cap_nhat_ngay`) VALUES
(1, 'Admin', '2023-11-16 12:13:15', '2023-11-16 12:13:15'),
(2, 'User', '2023-11-16 12:13:15', '2023-11-16 12:13:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_id_customer` (`ma_khach_hang`),
  ADD KEY `fk_id_product` (`ma_san_pham`);

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user_id` (`ma_khach_hang`);

--
-- Indexes for table `donhangchitiet`
--
ALTER TABLE `donhangchitiet`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_order_id` (`ma_don_hang`),
  ADD KEY `fk_ma_san_pham` (`ma_san_pham`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_id_role` (`ma_vai_tro`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_cateid` (`ma_danh_muc`);

--
-- Indexes for table `vaitro`
--
ALTER TABLE `vaitro`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `donhang`
--
ALTER TABLE `donhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `donhangchitiet`
--
ALTER TABLE `donhangchitiet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `vaitro`
--
ALTER TABLE `vaitro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `fk_id_customer` FOREIGN KEY (`ma_khach_hang`) REFERENCES `khachhang` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_id_product` FOREIGN KEY (`ma_san_pham`) REFERENCES `sanpham` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `fk_user_id` FOREIGN KEY (`ma_khach_hang`) REFERENCES `khachhang` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `donhangchitiet`
--
ALTER TABLE `donhangchitiet`
  ADD CONSTRAINT `fk_ma_san_pham` FOREIGN KEY (`ma_san_pham`) REFERENCES `sanpham` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_order_id` FOREIGN KEY (`ma_don_hang`) REFERENCES `donhang` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD CONSTRAINT `fk_id_role` FOREIGN KEY (`ma_vai_tro`) REFERENCES `vaitro` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `fk_cateid` FOREIGN KEY (`ma_danh_muc`) REFERENCES `danhmuc` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
