-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 02, 2020 lúc 08:32 AM
-- Phiên bản máy phục vụ: 10.4.13-MariaDB
-- Phiên bản PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `mylara`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill`
--

CREATE TABLE `bill` (
  `id` int(10) UNSIGNED NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ho` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diachi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dienthoai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bill`
--

INSERT INTO `bill` (`id`, `customer_id`, `email`, `ho`, `ten`, `diachi`, `dienthoai`, `created_at`, `updated_at`) VALUES
(1, NULL, 'info@vietseo.com', 'Nguyễn Ngọc', 'Sơn', 'gò vấp HCM', '546435345', '2020-09-01 20:41:56', '2020-09-01 20:41:56'),
(2, NULL, 'info@vietseo.com', 'Nguyễn Ngọc', 'Sơn', 'gò vấp HCM', '43543543', '2020-09-01 20:44:54', '2020-09-01 20:44:54'),
(3, NULL, 'info@vietseo.com', 'Nguyễn Ngọc', 'Sơn', 'gò vấp HCM', '43543543', '2020-09-01 20:50:03', '2020-09-01 20:50:03'),
(4, NULL, 'facebook.com', 'Nguyễn Ngọc', 'Sơn', 'gò vấp HCM', '43543543', '2020-09-01 20:51:46', '2020-09-01 20:51:46'),
(5, NULL, 'facebook.com', 'Nguyễn Ngọc', 'Sơn', 'gò vấp HCM', '43543543', '2020-09-01 20:52:28', '2020-09-01 20:52:28'),
(6, NULL, 'info@vietseo.com', 'Nguyễn Ngọc', 'Sơn', 'gò vấp HCM', '43543543', '2020-09-01 21:06:55', '2020-09-01 21:06:55'),
(7, NULL, 'info@vietseo.com', 'Nguyễn Ngọc', 'Sơn', 'gò vấp HCM', '43543543', '2020-09-01 21:07:23', '2020-09-01 21:07:23'),
(8, NULL, 'info@vietseo.com', 'Nguyễn Ngọc', 'Sơn', 'gò vấp HCM', '43543543', '2020-09-01 21:08:51', '2020-09-01 21:08:51'),
(9, NULL, 'hoursea.vn@gmail.com', 'Nguyễn Ngọc', 'Sơn', 'gò vấp HCM', '43543543', '2020-09-01 21:09:43', '2020-09-01 21:09:43'),
(10, NULL, 'info@vietseo.com', 'Nguyễn Ngọc', 'Sơn', 'gò vấp HCM', '43543543', '2020-09-01 21:10:32', '2020-09-01 21:10:32'),
(11, NULL, 'facebook.com', 'Nguyễn Ngọc', 'Sơn', 'gò vấp HCM', '43543543', '2020-09-01 21:11:33', '2020-09-01 21:11:33'),
(12, NULL, 'info@vietseo.com', 'Nguyễn Ngọc', 'Sơn', 'gò vấp HCM', '43543543', '2020-09-01 21:13:17', '2020-09-01 21:13:17'),
(13, NULL, 'info@vietseo.com', 'Nguyễn Ngọc', 'Sơn', 'gò vấp HCM', '43543543', '2020-09-01 21:15:44', '2020-09-01 21:15:44'),
(14, NULL, 'info@vietseo.com', 'Nguyễn Ngọc', 'Sơn', 'gò vấp HCM', '43543543', '2020-09-01 21:24:01', '2020-09-01 21:24:01'),
(15, NULL, 'info@vietseo.com', 'Nguyễn Ngọc', 'Sơn', 'gò vấp HCM', '43543543', '2020-09-01 21:25:54', '2020-09-01 21:25:54'),
(16, NULL, 'info@vietseo.com', 'Nguyễn Ngọc', 'Sơn', 'gò vấp HCM', '43543543', '2020-09-01 21:30:19', '2020-09-01 21:30:19'),
(17, NULL, 'info@vietseo.com', 'Nguyễn Ngọc', 'Sơn', 'gò vấp HCM', '43543543', '2020-09-01 21:31:58', '2020-09-01 21:31:58'),
(18, NULL, 'info@vietseo.com', 'Nguyễn Ngọc', 'Sơn', 'gò vấp HCM', '43543543', '2020-09-01 21:33:41', '2020-09-01 21:33:41');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `billdetail`
--

CREATE TABLE `billdetail` (
  `id` int(10) UNSIGNED NOT NULL,
  `bill_id` int(11) NOT NULL,
  `variation_id` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `billdetail`
--

INSERT INTO `billdetail` (`id`, `bill_id`, `variation_id`, `soluong`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, '2020-09-01 20:41:56', '2020-09-01 20:41:56'),
(2, 1, 7, 1, '2020-09-01 20:41:57', '2020-09-01 20:41:57'),
(3, 1, 4, 4, '2020-09-01 20:41:57', '2020-09-01 20:41:57'),
(4, 1, 5, 2, '2020-09-01 20:41:57', '2020-09-01 20:41:57'),
(5, 2, 1, 2, '2020-09-01 20:44:55', '2020-09-01 20:44:55'),
(6, 2, 3, 3, '2020-09-01 20:44:55', '2020-09-01 20:44:55'),
(7, 2, 5, 5, '2020-09-01 20:44:55', '2020-09-01 20:44:55'),
(8, 3, 1, 1, '2020-09-01 20:50:04', '2020-09-01 20:50:04'),
(9, 3, 7, 1, '2020-09-01 20:50:04', '2020-09-01 20:50:04'),
(10, 4, 1, 1, '2020-09-01 20:51:46', '2020-09-01 20:51:46'),
(11, 4, 7, 1, '2020-09-01 20:51:47', '2020-09-01 20:51:47'),
(12, 5, 1, 1, '2020-09-01 20:52:28', '2020-09-01 20:52:28'),
(13, 6, 1, 1, '2020-09-01 21:06:55', '2020-09-01 21:06:55'),
(14, 6, 7, 1, '2020-09-01 21:06:55', '2020-09-01 21:06:55'),
(15, 7, 1, 1, '2020-09-01 21:07:23', '2020-09-01 21:07:23'),
(16, 7, 7, 1, '2020-09-01 21:07:24', '2020-09-01 21:07:24'),
(17, 8, 1, 1, '2020-09-01 21:08:52', '2020-09-01 21:08:52'),
(18, 9, 1, 2, '2020-09-01 21:09:43', '2020-09-01 21:09:43'),
(19, 10, 1, 2, '2020-09-01 21:10:32', '2020-09-01 21:10:32'),
(20, 10, 7, 1, '2020-09-01 21:10:32', '2020-09-01 21:10:32'),
(21, 11, 1, 1, '2020-09-01 21:11:33', '2020-09-01 21:11:33'),
(22, 11, 7, 1, '2020-09-01 21:11:33', '2020-09-01 21:11:33'),
(23, 11, 10, 3, '2020-09-01 21:11:33', '2020-09-01 21:11:33'),
(24, 12, 7, 2, '2020-09-01 21:13:17', '2020-09-01 21:13:17'),
(25, 12, 1, 1, '2020-09-01 21:13:17', '2020-09-01 21:13:17'),
(26, 13, 2, 3, '2020-09-01 21:15:44', '2020-09-01 21:15:44'),
(27, 13, 3, 4, '2020-09-01 21:15:44', '2020-09-01 21:15:44'),
(28, 13, 7, 1, '2020-09-01 21:15:44', '2020-09-01 21:15:44'),
(29, 14, 3, 3, '2020-09-01 21:24:01', '2020-09-01 21:24:01'),
(30, 14, 7, 1, '2020-09-01 21:24:01', '2020-09-01 21:24:01'),
(31, 15, 1, 1, '2020-09-01 21:25:54', '2020-09-01 21:25:54'),
(32, 15, 7, 1, '2020-09-01 21:25:54', '2020-09-01 21:25:54'),
(33, 16, 1, 2, '2020-09-01 21:30:19', '2020-09-01 21:30:19'),
(34, 16, 7, 1, '2020-09-01 21:30:19', '2020-09-01 21:30:19'),
(35, 17, 1, 2, '2020-09-01 21:31:58', '2020-09-01 21:31:58'),
(36, 17, 7, 1, '2020-09-01 21:31:58', '2020-09-01 21:31:58'),
(37, 18, 1, 1, '2020-09-01 21:33:41', '2020-09-01 21:33:41'),
(38, 18, 7, 1, '2020-09-01 21:33:41', '2020-09-01 21:33:41');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` int(10) UNSIGNED NOT NULL,
  `tendanhmuc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `tendanhmuc`) VALUES
(1, 'Giày cổ lửng'),
(2, 'Giày cổ cao'),
(3, 'Giày cổ thấp'),
(4, 'Giày tây'),
(5, 'Giày lười');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customers`
--

CREATE TABLE `customers` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `matkhau` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ho` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diachi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dienthoai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_08_28_152007_create_customers_table', 1),
(5, '2020_08_28_155904_create_bill_table', 1),
(6, '2020_08_28_155924_create_billdetail_table', 1),
(7, '2020_08_28_160030_create_product_table', 1),
(8, '2020_08_28_160115_create_category_table', 1),
(9, '2020_08_28_162329_create_variation_table', 1),
(10, '2020_09_01_143024_create_shoppingcart_table', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `tensanpham` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `motangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `motadai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinhanh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nhanhieu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `category_id`, `tensanpham`, `motangan`, `motadai`, `hinhanh`, `nhanhieu`) VALUES
(1, 1, 'Giày đế rộng', 'Giày đế rộng làm bằng da thuộc.', 'Giày đế rộngiày đế rộngiày đế rộngiày đế rộngiày đế rộng', 'abc.jpg,abc1.jpg,abc2.jpg,abc3.jpg,abc4.jpg', 'Kevin Cain'),
(2, 2, 'Giày đế mỏng', 'Giày đế mỏng làm bằng da cá sấu.', 'Giày đế mỏngGiày đế mỏngGiày đế mỏngGiày đế mỏngGiày đế mỏngGiày đế mỏng', 'def.jpg', 'ISO 9002'),
(3, 2, 'Giày Bata', 'Giày Bata làm từ cao su.', 'Giày Bata Giày Bata Giày Bata Giày Bata Giày Bata Giày Bata ', 'sandal-knit.jpg', 'Seal');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `shoppingcart`
--

CREATE TABLE `shoppingcart` (
  `identifier` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instance` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `matkhau` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ho` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `variation`
--

CREATE TABLE `variation` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `mausac` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kichco` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `variation`
--

INSERT INTO `variation` (`id`, `product_id`, `mausac`, `kichco`, `gia`) VALUES
(1, 1, 'yellow', 'SM', 15000),
(2, 1, 'violet', 'SM', 17000),
(3, 1, 'blue', 'XL', 26000),
(4, 1, 'red', 'XL', 39000),
(5, 1, 'green', 'M', 24000),
(6, 1, 'black', 'M', 56000),
(7, 2, 'green', 'XL', 22000),
(8, 2, 'black', 'SM', 41000),
(9, 2, 'black', 'XL', 31000),
(10, 1, 'green', 'XL', 88000);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `billdetail`
--
ALTER TABLE `billdetail`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customers_email_unique` (`email`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `shoppingcart`
--
ALTER TABLE `shoppingcart`
  ADD PRIMARY KEY (`identifier`,`instance`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Chỉ mục cho bảng `variation`
--
ALTER TABLE `variation`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `billdetail`
--
ALTER TABLE `billdetail`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `variation`
--
ALTER TABLE `variation`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
