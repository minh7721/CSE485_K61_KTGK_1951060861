-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 21, 2021 lúc 10:10 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `qlduocpham`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `drugs`
--

CREATE TABLE `drugs` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `barcode` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dose` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cost_price` int(11) NOT NULL,
  `selling_price` int(11) NOT NULL,
  `expiry` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `production_date` date NOT NULL,
  `expiration_date` date NOT NULL,
  `place` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `drugs`
--

INSERT INTO `drugs` (`id`, `name`, `type`, `barcode`, `dose`, `code`, `cost_price`, `selling_price`, `expiry`, `company_name`, `production_date`, `expiration_date`, `place`, `quantity`) VALUES
(1, 'Amocilin', 'Hạ sốt', '12112121', 'uống sau ăn 2v 2 lần', '3123213', 50000, 100000, 'Hết hạn', 'Dược Phẩm', '2021-10-01', '2021-10-29', 'Việt Nam', 100),
(2, 'Panadol', 'Hạ sốt', '12112121', 'uống sau ăn 2v 2 lần', '3123213', 3200, 10000, 'Còn hạn', 'Dược Phẩm', '2021-10-01', '2021-10-29', 'Việt Nam', 1000),
(3, 'Plizer', 'Vaccine', '3123123', '1', '1231', 1111111, 0, 'Còn hạn', 'Plizer', '2021-09-26', '2021-10-27', 'Pháp', 100000),
(4, 'Panadol extra', 'Hạ Sốt', '23123123', '4v 1 ngày', '238293829', 3000, 6000, 'Hết hạn', 'DƯợc phẩm', '2021-09-26', '2021-10-20', 'Việt Nam', 199);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `drugs`
--
ALTER TABLE `drugs`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
