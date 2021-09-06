-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2021 at 06:32 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_user`
--

CREATE TABLE `admin_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_user`
--

INSERT INTO `admin_user` (`id`, `name`, `email`, `password`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Naushad kumar  Ahmad', 'naushad@softechproducts.com', '123456', 1, '2021-03-10 06:51:31', '2021-03-10 06:58:24'),
(2, 'sunil kumar verma', 'sunil@softechproducts.com', '123456', 1, '2021-03-10 07:02:00', '2021-03-10 07:02:00');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `banner_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner_detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `banner_title`, `banner_detail`, `banner_image`, `status`, `created_at`, `updated_at`) VALUES
(6, 'Kid Smart  Watches', 'Compra todos tus productos Smart por internet', 'banner-changes-4.jpg', 1, '2021-04-13 05:51:36', '2021-04-14 23:32:57'),
(8, 'Great Range of Exclusive Furniture Packages', 'Exclusive Furniture Packages to Suit every need.', 'banner-changes-5.jpg', 1, '2021-04-13 07:00:58', '2021-04-14 23:33:12'),
(9, 'Extra 25% Off On online payments', 'Get Free Transparent Bra Straps', 'new-banner-6.jpg', 1, '2021-04-13 07:02:25', '2021-04-14 00:59:48');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_name`, `category_detail`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Herbal Medicines', 'Herbal Medicines descriptions', 1, '2021-03-10 07:22:43', '2021-03-10 07:22:43'),
(2, 'Single Herb Products', 'Single Herb Products description', 1, '2021-03-10 23:45:19', '2021-03-10 23:49:19'),
(3, 'Vinegars (Sirka)', 'Vinegars (Sirka) description update', 1, '2021-03-11 00:26:41', '2021-04-13 23:01:53'),
(5, 'Immunity Booster', 'Immunity is the body’s ability to fight various diseases, infections, viruses etc.', 1, '2021-04-14 01:09:49', '2021-04-14 01:09:49'),
(6, 'Hair Care Products', 'Who doesn’t want to sport healthy, shiny, and dense hair?', 1, '2021-04-14 01:10:53', '2021-04-14 01:10:53'),
(7, 'Skin Care Products', 'Skin Care Products description', 1, '2021-04-14 01:11:46', '2021-04-14 01:11:46'),
(8, 'Natural Gond', 'Natural Gond Description', 1, '2021-04-14 01:12:18', '2021-04-14 01:12:18');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `landmark` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pincode` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `mobile` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `username`, `email`, `password`, `first_name`, `last_name`, `address`, `landmark`, `city`, `state`, `country`, `pincode`, `status`, `created_at`, `updated_at`, `mobile`) VALUES
(1, 'phpnaushad', 'naushad@softechproducts.com', '123456', 'Naushad', 'Ahmad', '67/ 5, New Rohtak Rd, NEXA DD Motors', 'Jeevan Mala Hospital', 'Karolbagh', 'Delhi', 'India', 110005, 1, '2021-03-12 06:11:32', '2021-03-12 06:11:32', '07838049941'),
(3, 'uiarjun', 'arjun@softechproducts.com', '123456', 'Arjun', 'kumar', 'Matia mahal new Delhi', 'Near Railway Station', 'Pahadganj', 'Islamabaad', 'Pakistan', 110025, 1, '2021-03-30 04:18:45', '2021-03-30 04:18:45', '7852698547'),
(4, 'seosunil', 'sunil@softechproducts.com', '123456', 'Sunil', 'Kumar', '5th Avenue Gaur City 2', 'Near Taj Highway', 'Noida', 'Uttar Pradesh', 'India', 220001, 1, '2021-03-30 04:25:10', '2021-03-30 04:26:04', '9696857458'),
(8, 'johndoe', 'john@softechproducts.com', '123456', 'John', 'Doe', 'this dummy text', 'Near Taj Highway', 'karolbagh', 'Delhi', 'Pakistan', 456754, 1, '2021-04-02 00:54:32', '2021-04-02 00:54:32', '7838049941'),
(9, 'grnasir', 'nasir@softechproducts.com', '123456', 'Nasir', 'Ahmad', '67/ 5, New Rohtak Rd, Block 67 NEXA DD Motors', 'Near Railway Station', 'Karolbagh', 'Delhi', 'India', 110005, 1, '2021-04-02 01:17:18', '2021-04-02 01:17:18', '9696251525');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2021_02_10_091022_create_admin_user', 2),
(4, '2021_02_12_064730_create_category_table', 2),
(5, '2021_02_13_065006_create_products_table', 2),
(6, '2021_02_23_115848_create_banners_table', 2),
(7, '2021_03_12_055136_create_customers_table', 3),
(8, '2021_03_12_060240_create_orders_table', 4),
(9, '2021_03_12_061654_create_order_items_table', 5),
(10, '2021_03_12_105659_add_column_mobile_to_customers', 6),
(11, '2021_04_08_065156_create_post_tags_table', 7),
(12, '2021_04_08_065430_create_post_category_table', 7),
(13, '2021_04_08_065730_create_posts_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `order_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `courier_amount` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `total_amount` int(11) NOT NULL,
  `payment_mode` int(11) NOT NULL COMMENT '1=COD,2=Online',
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `order_no`, `courier_amount`, `discount`, `total_amount`, `payment_mode`, `status`, `created_at`, `updated_at`) VALUES
(3, 8, 'ATIYA00008\n', 5, 10, 100, 1, 1, '2021-04-02 00:54:32', '2021-04-02 00:54:32'),
(4, 9, 'ATIYA00009\n', 100, 50, 0, 1, 1, '2021-04-02 01:17:18', '2021-04-02 01:17:18');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `quantity`, `price`, `status`, `created_at`, `updated_at`) VALUES
(22, 3, 1, 1, 100, 1, '2021-04-02 00:54:32', '2021-04-02 00:54:32'),
(23, 3, 1, 1, 200, 1, '2021-04-02 00:54:32', '2021-04-02 00:54:32'),
(24, 3, 2, 1, 300, 1, '2021-04-02 00:54:32', '2021-04-02 00:54:32'),
(25, 3, 2, 1, 400, 1, '2021-04-02 00:54:32', '2021-04-02 00:54:32'),
(26, 4, 2, 2, 100, 1, '2021-04-02 01:17:18', '2021-04-02 01:17:18'),
(27, 4, 1, 2, 200, 1, '2021-04-02 01:17:18', '2021-04-02 01:17:18');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_cat_id` bigint(20) UNSIGNED NOT NULL,
  `post_tag_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `quote` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tags` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `post_cat_id`, `post_tag_id`, `title`, `slug`, `description`, `quote`, `image`, `tags`, `status`, `created_at`, `updated_at`) VALUES
(2, 1, 4, 'Unknown Facts About a', 'about-anesthesia', 'Anesthesia sounds a much common term that many people must have heard about if not experiences. Millions of people annually undergo all types of surgery with the help of these pain-relieving medications. And even though these drugs are very prevalent, there are still several facts about them that may surprise you. Here is a list of few unknown facts about anesthesia that you may have missed.', 'Smokers May Need more Anesthesia than Non-Smokers', '20210409072145.png', 1, 1, '2021-04-09 01:51:45', '2021-04-09 01:51:45');

-- --------------------------------------------------------

--
-- Table structure for table `post_category`
--

CREATE TABLE `post_category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_category`
--

INSERT INTO `post_category` (`id`, `title`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Health Type update', 'Health Type update', 1, '2021-04-08 04:07:55', '2021-04-08 04:19:55'),
(2, 'Weight Loss', 'weight-loss', 1, '2021-04-08 04:28:34', '2021-04-08 04:28:34'),
(4, 'Hypertension', 'hypertention', 1, '2021-04-09 01:38:37', '2021-04-09 01:38:37');

-- --------------------------------------------------------

--
-- Table structure for table `post_tags`
--

CREATE TABLE `post_tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_tags`
--

INSERT INTO `post_tags` (`id`, `title`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Fever', 'fever', 1, '2021-04-08 05:00:35', '2021-04-08 05:00:35'),
(3, 'Stomach', 'stomach-problem', 1, '2021-04-09 01:30:08', '2021-04-09 01:30:08'),
(4, 'Dummy tags', 'dummy', 1, '2021-04-09 01:35:35', '2021-04-09 01:35:35'),
(5, 'Diebtic', 'diebtic', 1, '2021-09-04 02:22:03', '2021-09-04 02:22:03');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_sku` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_stock` int(11) NOT NULL,
  `product_grn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `product_name`, `product_image`, `product_detail`, `product_price`, `product_sku`, `product_stock`, `product_grn`, `status`, `created_at`, `updated_at`) VALUES
(1, 3, 'Olive Vinegar', '20210311060117.png', 'Olive vinegar is used for digestion', '120', 'SKU001', 10, 'GRN001', 1, '2021-03-11 00:31:17', '2021-03-11 00:31:17'),
(2, 3, 'Kalonji Vinegar', '20210311060321.png', 'Kalonji Vinegar is used for diabetic', '100', 'SKU002', 10, 'GRN002', 1, '2021-03-11 00:33:21', '2021-03-11 00:33:21'),
(3, 1, 'Husn-e-Sulemani', '20210414065223.jpg', 'Husn E sulemaani is a perfect medicine for those men who think they have lost the power and interest they had or which can give their wife a joyous life.', '1700.00', 'A0009', 10, 'GRN009', 1, '2021-04-14 01:22:23', '2021-04-14 01:22:23'),
(4, 1, 'Rukawat', '20210414065405.jpg', 'This medicine is beneficial in removing problems like premature ejaculation and erectile dysfunction.', '1700.00', 'A0010', 10, 'GRN0010', 1, '2021-04-14 01:24:05', '2021-04-14 01:24:05'),
(5, 1, 'Fina Strength Plus', '20210414065632.jpg', '“Fina Strength Plus” is a rare blend that targets the root cause of your problem and aims at achieving holistic health and overall wellness for Males.', '1500.00', 'A0053', 10, 'GRN0053', 1, '2021-04-14 01:26:32', '2021-04-14 01:26:32'),
(6, 1, 'Sulemani Shilajit', '20210414070153.jpg', 'Shilajit is used to not only reinforce your sexual life, but it also boosts stamina and energy in both men and women.', '2200.00', 'A0052', 10, 'GRN0052', 1, '2021-04-14 01:31:53', '2021-04-14 01:31:53'),
(7, 2, 'Aloe Plus', '20210414070836.jpg', '“Aloe Plus” is primarily prepared for boosting the immune system to fight against bacterial, fungal, and other infections.', '750.00', 'A0033', 10, 'GRN0033', 1, '2021-04-14 01:38:36', '2021-04-14 01:38:36'),
(8, 2, 'Karela Forte', '20210414071350.jpg', 'Karela Forte is a medicine formulated with herbal ingredients which have been used in Unani medication since ages.', '750.00', 'A0037', 10, 'GRN0037', 1, '2021-04-14 01:43:50', '2021-04-14 01:43:50'),
(9, 5, 'Kalonji Prash', '20210414071627.jpg', 'This herb is quite popular due to its medicinal properties. Also known as nigella seeds, kalonji strengthens your immunity and aids digestion.', '950.00', 'A0044', 10, 'GRN0044', 1, '2021-04-14 01:46:27', '2021-04-14 01:46:27'),
(10, 5, 'Majoon Akhrot Prash', '20210414071850.jpg', 'it an absolute immunity booster for fending off any ailment, a growth supplement for augmenting the height, to keep weaknesses of any sort at bay and delivering the body the much-needed strength.', '1750.00', 'A0027', 10, 'GRN0027', 1, '2021-04-14 01:48:50', '2021-04-14 01:48:50'),
(11, 6, 'Kalonji Shampoo', '20210414072105.jpg', 'Kalonji shampoo contains the best selected natural products which provide complete hair care.', '400.00', 'A0042', 10, 'GRN0042', 1, '2021-04-14 01:51:06', '2021-04-14 01:51:06'),
(12, 7, 'Kaloonji Facewash', '20210414072516.jpg', 'Hakim Suleman’s Kaloonji Facewash is a top-notch formula for the removal of unwanted dead cells, impurities, and extra oil from the face.', '399.00', 'A0054', 10, 'GRN0054', 1, '2021-04-14 01:55:16', '2021-04-14 01:55:16'),
(13, 8, 'Gond Jamun', '20210414072751.jpg', 'Hakim Suleman’s Gond Jamun is a natural product with the goodness of Jamun (Block Plum). It is a herbal intake being used from ages for a healthy life and well-being.', '1600.00', 'A0067', 10, 'GRN0067', 1, '2021-04-14 01:57:51', '2021-04-14 01:57:51'),
(14, 8, 'Gond Chilgoza', '20210414072907.jpg', 'Hakim Suleman’s Gond Chilgoza is a natural product, with goodness of Chilgoza (Pine nuts). It is a herbal intake used for a healthy life and well-being of men.', '2200.00', 'A0066', 10, 'GRN0066', 1, '2021-04-14 01:59:07', '2021-04-14 01:59:07');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Naushad Ahmad', 'naushad@softechproducts.com', NULL, '$2y$10$YUtFR6xPBLqVhwUa.YQLlueXrC6sNvjFLrdwNetXQ8Wq.enGd118G', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_user`
--
ALTER TABLE `admin_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_customer_id_foreign` (`customer_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_items_order_id_foreign` (`order_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_post_cat_id_foreign` (`post_cat_id`),
  ADD KEY `posts_post_tag_id_foreign` (`post_tag_id`);

--
-- Indexes for table `post_category`
--
ALTER TABLE `post_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_tags`
--
ALTER TABLE `post_tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_user`
--
ALTER TABLE `admin_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `post_category`
--
ALTER TABLE `post_category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `post_tags`
--
ALTER TABLE `post_tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`);

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`);

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_post_cat_id_foreign` FOREIGN KEY (`post_cat_id`) REFERENCES `post_category` (`id`),
  ADD CONSTRAINT `posts_post_tag_id_foreign` FOREIGN KEY (`post_tag_id`) REFERENCES `post_tags` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
