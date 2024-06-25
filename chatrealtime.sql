-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 25, 2024 lúc 05:43 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `chatrealtime`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `groupchat`
--

CREATE TABLE `groupchat` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `leader` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `groupchat`
--

INSERT INTO `groupchat` (`id`, `name`, `leader`, `created_at`, `updated_at`) VALUES
(1, 'Nhom 1', 1, '2024-06-15 11:27:41', '2024-06-15 11:27:41'),
(2, 'Trao đổi kiến thức', 1, '2024-06-18 08:59:07', '2024-06-18 08:59:07');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `groupchat_detail`
--

CREATE TABLE `groupchat_detail` (
  `id` int(11) NOT NULL,
  `groupchat_id` int(11) NOT NULL,
  `menber_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `groupchat_detail`
--

INSERT INTO `groupchat_detail` (`id`, `groupchat_id`, `menber_id`, `created_at`, `updated_at`) VALUES
(1, 1, 2, '2024-06-15 11:27:41', '2024-06-15 11:27:41'),
(2, 1, 3, '2024-06-15 11:27:41', '2024-06-15 11:27:41'),
(3, 1, 4, '2024-06-15 11:27:41', '2024-06-15 11:27:41'),
(4, 2, 4, '2024-06-18 08:59:07', '2024-06-18 08:59:07'),
(5, 2, 5, '2024-06-18 08:59:07', '2024-06-18 08:59:07'),
(6, 2, 7, '2024-06-18 08:59:07', '2024-06-18 08:59:07'),
(7, 2, 9, '2024-06-18 08:59:07', '2024-06-18 08:59:07'),
(8, 2, 10, '2024-06-18 08:59:07', '2024-06-18 08:59:07'),
(9, 2, 11, '2024-06-18 08:59:07', '2024-06-18 08:59:07');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('dangquocphong2001@gmail.com', '$2y$10$9Ok5XrtZmZYRCmiWkeRnterNlvH9jmz28PxJxTGWXR4uoALRdB3PO', '2024-06-22 23:51:37'),
('keira.schimmel@example.com', '$2y$10$8kqM6l4o5xwQnpY4UXcI3O3JVEw4hh7Ovi938nG0AdeMZKmTur1KW', '2024-06-20 01:51:46');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `image`) VALUES
(1, 'Nguyen Van A', 'nguyenvana@gmail.com', '2024-06-13 19:51:18', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '8biB8bbpx2Xk3D9qj41yBQnbqsx8ae3qnfRFAFEmcXjouPT6YVlGFkjqNMoC', '2024-06-13 19:51:19', '2024-06-13 19:51:19', 'https://gcs.tripi.vn/public-tripi/tripi-feed/img/474072oeB/anh-dai-dien-buon-ngau_023706184.jpg'),
(2, 'Nguyen Van B', 'nguyenvanb@gmail.com', '2024-06-13 19:51:18', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'aggF2HZ2qJmf9adm1uWtDsKgja0guYEhmb69xJe4TXiqN8zBDXuXaZFEeBYM', '2024-06-13 19:51:19', '2024-06-13 19:51:19', 'https://hoanghamobile.com/tin-tuc/wp-content/uploads/2023/07/avatar-dep-10-1.jpg'),
(3, 'Nguyen Van C', 'nguyenvanc@gmail.com', '2024-06-13 19:51:18', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'EEkQVsYvXWu5GYUMwpgizy41a7ejUu6BTZYvn5lYT2CfaP5zyps5EOoHejgp', '2024-06-13 19:51:19', '2024-06-13 19:51:19', 'https://anhcuoiviet.vn/wp-content/uploads/2022/11/avatar-dep-dang-yeu-nu-5.jpg'),
(4, 'Nguyen Van D', 'nguyenvand@gmail.com', '2024-06-13 19:51:18', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'mqLRS7gQu5', '2024-06-13 19:51:19', '2024-06-13 19:51:19', 'https://khoinguonsangtao.vn/wp-content/uploads/2022/07/avatar-cute-2.jpg'),
(5, 'Nguyen Van E', 'nguyenvane@gmail.com', '2024-06-13 19:51:18', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'yDtgCIBTNu', '2024-06-13 19:51:19', '2024-06-13 19:51:19', 'https://www.vietnamworks.com/hrinsider/wp-content/uploads/2023/12/anh-den-ngau.jpeg'),
(6, 'Nguyen Van G', 'nguyenvang@gmail.com', '2024-06-13 19:51:18', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'V2UZO1N03s', '2024-06-13 19:51:19', '2024-06-20 03:33:59', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQStGWFC81EPZrBLB1cHKEKKzRXOnJMUjhzgw&s'),
(7, 'Nguyen Van H', 'nguyenvanh@gmail.com', '2024-06-13 19:51:18', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'TrGcWwEfAz', '2024-06-13 19:51:19', '2024-06-13 19:51:19', 'https://antimatter.vn/wp-content/uploads/2023/01/hinh-anh-avatar-dep-cute-ngau.jpg'),
(8, 'Nguyen Van I', 'nguyenvani@gmail.com', '2024-06-13 19:51:18', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'c3WZsGoQbF', '2024-06-13 19:51:19', '2024-06-13 19:51:19', 'https://www.vietnamfineart.com.vn/wp-content/uploads/2023/07/anh-avatar-dep-cho-con-gai-8.png'),
(9, 'Nguyen Van K', 'nguyenvank@gmail.com', '2024-06-13 19:51:18', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'duGgo2Z0hd', '2024-06-13 19:51:19', '2024-06-13 19:51:19', 'https://taimienphi.vn/tmp/cf/aut/UCJh-I6e5-pGG8-5NjT-O83K-mmJy-eZta-9nqH-anh-dai-dien-dep-cute-1.jpg'),
(10, 'Nguyen Van L', 'nguyenvanl@gmail.com', '2024-06-13 19:51:18', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'JO0SCiJDag', '2024-06-13 19:51:19', '2024-06-13 19:51:19', 'https://tiemchupanh.com/wp-content/uploads/2023/07/9342fea1a56739ba80054fa7d4cdb91f-683x1024.jpg');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `groupchat`
--
ALTER TABLE `groupchat`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `groupchat_detail`
--
ALTER TABLE `groupchat_detail`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `groupchat`
--
ALTER TABLE `groupchat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `groupchat_detail`
--
ALTER TABLE `groupchat_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
