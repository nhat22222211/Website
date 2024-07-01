-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 29, 2024 at 07:03 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thuexe`
--

-- --------------------------------------------------------

--
-- Table structure for table `binh_luan`
--

CREATE TABLE `binh_luan` (
  `id` int NOT NULL,
  `id_xe` int NOT NULL,
  `id_kh` int NOT NULL,
  `ngay` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `noi_dung` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `binh_luan`
--

INSERT INTO `binh_luan` (`id`, `id_xe`, `id_kh`, `ngay`, `noi_dung`, `created_at`, `updated_at`) VALUES
(3, 2, 7, '18-06-2024', 'có bán ko', '2024-06-18 09:29:59', '2024-06-18 09:29:59');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `khach_hang`
--

CREATE TABLE `khach_hang` (
  `id` int NOT NULL,
  `idsp` int DEFAULT NULL,
  `iduser` int DEFAULT NULL,
  `ho_ten` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `sdt` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `ngaythue` date NOT NULL,
  `sogio` int NOT NULL,
  `vitri` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `dongia` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `tiendatcoc` text COLLATE utf8mb4_general_ci,
  `tongtien` text COLLATE utf8mb4_general_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `khach_hang`
--

INSERT INTO `khach_hang` (`id`, `idsp`, `iduser`, `ho_ten`, `email`, `sdt`, `ngaythue`, `sogio`, `vitri`, `dongia`, `tiendatcoc`, `tongtien`, `created_at`, `updated_at`) VALUES
(2, 1, NULL, 'sản phẩm', 'nhat234@gmail.com', '0202002000', '2024-06-12', 3, 'Đà Nẵng', '120000', '6000000', '6360000', '2024-06-12 14:11:02', '2024-06-12 14:11:02'),
(3, 1, NULL, 'sản phẩm', 'nhat234@gmail.com', '0202002000', '2024-06-10', 5, 'thành phố hồ chí minh new', '100000', '6000000', '6500000', '2024-06-12 14:14:28', '2024-06-12 14:14:28'),
(4, 1, NULL, 'li', 'nhat234@gmail.com', '0202002000', '2024-06-05', 4, 'thành phố hồ chí minh nè ', '100000', '6000000', '6400000', '2024-06-16 14:25:46', '2024-06-16 14:25:46'),
(5, 1, 6, 'ly ', 'itc123@gmail.com', '0202002000', '2024-06-11', 50, 'địa chỉ mới đặt nè', '100000', '6000000', '11000000', '2024-06-16 14:56:33', '2024-06-16 14:56:33'),
(6, 1, 1, 'sản phẩm', 'itc123@gmail.com', '0202002000', '2024-06-19', 3, 'thành phố hồ chí minh', '100000', '6000000', '6300000', '2024-06-28 07:32:06', '2024-06-28 07:32:06'),
(7, 1, 1, 'sản phẩm', 'itc123@gmail.com', '0202002000', '2024-06-06', 1, 'Hà Nội', '100000', '6000000', '6100000', '2024-06-28 07:48:28', '2024-06-28 07:48:28'),
(8, 1, 1, 'sản phẩm', 'itc123@gmail.com', '0202002000', '2024-06-17', 1, 'Đà Nẵng', '100000', '6000000', '6100000', '2024-06-28 07:50:00', '2024-06-28 07:50:00'),
(9, 1, 7, 'ly', 'itc123@gmail.com', '0202002000', '2024-06-15', 2, 'test nè', '100000', '6000000', '6200000', '2024-06-28 08:56:03', '2024-06-28 08:56:03'),
(10, 1, 7, 'ly', 'itc123@gmail.com', '0202002000', '2024-05-31', 2, 'test nè', '100000', '6000000', '6200000', '2024-06-28 09:00:38', '2024-06-28 09:00:38');

-- --------------------------------------------------------

--
-- Table structure for table `khoa`
--

CREATE TABLE `khoa` (
  `makhoa` int UNSIGNED NOT NULL,
  `tenkhoa` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `loai_xe`
--

CREATE TABLE `loai_xe` (
  `id` int NOT NULL,
  `ten_loai` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `loai_xe`
--

INSERT INTO `loai_xe` (`id`, `ten_loai`) VALUES
(1, 'Số tự động'),
(2, 'Số sàn');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_11_02_191614_taobang_monhoc', 1),
(6, '2023_11_02_193641_taobang_khoa', 1),
(7, '2023_11_02_194832_taobang_sinhvien', 1),
(8, '2023_11_02_203807_taobang_lophoc', 1),
(9, '2023_11_07_161104_taobang_taobanglophocmoi', 1),
(10, '2023_11_07_175619_taobang_kq', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `diachi` varchar(100) NOT NULL,
  `sodienthoai` varchar(100) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `roles` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `diachi`, `sodienthoai`, `email_verified_at`, `password`, `roles`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'sản phẩm', 'nhat234@gmail.com', 'thành phố hồ chí minh', '0202002000', NULL, '$2y$10$1QfB.zQ.jI0NEiJCTt3BG.FL411riIyUtYAKMdUjIWYBkzFylaTiy', '', NULL, '2024-06-10 08:36:31', '2024-06-10 08:36:31'),
(2, 'li', 'nhat234@gmail.com', 'thành phố hồ chí minh', '0202002000', NULL, '$2y$10$0vRXQt2aXlRzhGEbBSmSMORrn5qCvOIaKKzc8/K4mybQYlwKWDwXK', '', NULL, '2024-06-10 08:52:07', '2024-06-10 08:52:07'),
(3, 'sản phẩm', 'nhat234@gmail.com', 'thành phố hồ chí minh', '0202002000', NULL, '$2y$10$JesVo.wI/p0SN9YGmeumZejQUPQ8p9YKOY4ltGO9pDWyJiaKcmWfG', '', NULL, '2024-06-10 09:10:53', '2024-06-10 09:10:53'),
(4, 'li', 'nhat234@gmail.com', 'thành phố hồ chí minh', '0202002000', NULL, '$2y$10$LZLmK/voao7gEpNKN7GRzezK4kxpT26W55zVOL7lUhwPmRg0F2yj2', '', NULL, '2024-06-16 14:05:13', '2024-06-16 14:05:13'),
(6, 'li', 'nhat234@gmail.com', 'thành phố hồ chí minh', '0202002000', NULL, '$2y$10$dgF.eYREczVjone3l8q8zeBhX1vp/Lc0.UIS0PpqlKpfWWSUpY.7q', '', NULL, '2024-06-16 14:05:33', '2024-06-16 14:05:33'),
(7, 'ly', 'itc123@gmail.com', 'thành phố hồ chí minh', '0202002000', NULL, '$2y$10$Dk14bso.UC1Te3w87RbC7.fZnuC5.bQdXqpsT3cC0j4rc30Q54v3K', 'admin', NULL, '2024-06-18 02:29:13', '2024-06-18 02:29:13');

-- --------------------------------------------------------

--
-- Table structure for table `xe`
--

CREATE TABLE `xe` (
  `id` int NOT NULL,
  `ten_xe` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `mota` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `don_gia` float NOT NULL,
  `giam_gia` float NOT NULL,
  `vitri` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `chongoi` int DEFAULT NULL,
  `img` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `id_loai` int NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `xe`
--

INSERT INTO `xe` (`id`, `ten_xe`, `mota`, `don_gia`, `giam_gia`, `vitri`, `chongoi`, `img`, `id_loai`, `created_at`, `updated_at`) VALUES
(1, 'MG5 2022', 'MG5 2023 là một chiếc xe sedan cỡ trung với thiết kế hiện đại và sự tiện nghi hiện đại. - Động cơ 1.5L đáp ứng mọi nhu cầu đi lại cùng với nội thất rộng rãi tạo ra môi trường thoải mái cho mọi hành trình. - Hệ thống giải trí thông minh, tính năng an toàn độc đáo và mức giá hấp dẫn làm cho MG5 2023 trở thành một lựa chọn tốt trong phân khúc của nó.', 120000, 100000, 'Sala-Thủ Thiêm', 7, 'mg5.jpg', 1, '2024-06-21 00:30:57', '2024-06-21 00:31:27'),
(2, 'Toyota Vios nè', 'Toyota Vios 2023 ra mắt tại thị trường Việt Nam với ba phiên bản, bao gồm: Toyota Vios 1.5E-MT, Toyota Vios 1.5E-CVT và Toyota Vios 1.5G-CVT. Sở hữu ngoại thất trẻ trung, cá tính cùng những cải tiến trong thiết kế nội thất và các tính năng an toàn, Toyota Vios có thể đáp ứng nhu cầu đa dạng của mọi khách hàng. Toyota Vios 2023 sở hữu ngoại thất trẻ trung, cá tính với phần đầu xe góc cạnh. Phía trên đầu xe và hai cạnh bên lồng vào nhau tạo nên hiệu ứng 3D mạnh mẽ, giúp tổng thể xe trở nên hài hòa. Những đường dập nổi chạy dọc thân xe tạo cảm giác khỏe khoắn và vững chãi. Thiết kế này cũng tạo mối liên kết chặt chẽ giữa phần đầu xe và các chi tiết ở đuôi xe, mang đến một tổng thể hoàn chỉnh. Đuôi xe được thiết kế dập nổi ở hai bên cản sau, kết hợp với cản dưới cùng màu cách điệu mang lại dáng vẻ khỏe khoắn và vững chãi.', 150000, 120000, 'Quận Bình Thạnh', 4, '1718960692-products.jpg', 1, '2024-06-21 00:30:57', '2024-06-21 09:04:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `khoa`
--
ALTER TABLE `khoa`
  ADD PRIMARY KEY (`makhoa`);

--
-- Indexes for table `loai_xe`
--
ALTER TABLE `loai_xe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `xe`
--
ALTER TABLE `xe`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `binh_luan`
--
ALTER TABLE `binh_luan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `khach_hang`
--
ALTER TABLE `khach_hang`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `khoa`
--
ALTER TABLE `khoa`
  MODIFY `makhoa` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `loai_xe`
--
ALTER TABLE `loai_xe`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `xe`
--
ALTER TABLE `xe`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
