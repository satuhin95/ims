-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2020 at 02:47 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ims`
--

-- --------------------------------------------------------

--
-- Table structure for table `advanced_salary`
--

CREATE TABLE `advanced_salary` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `emp_id` int(11) NOT NULL,
  `month` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `advanced_salary`
--

INSERT INTO `advanced_salary` (`id`, `emp_id`, `month`, `year`, `amount`, `created_at`, `updated_at`) VALUES
(1, 1, 'janaury', '2010', 1000.00, NULL, NULL),
(2, 6, 'janaury', '2020', 5000.00, '2020-04-24 09:37:00', NULL),
(3, 6, 'August', '2020', 2222.00, '2020-04-24 09:48:48', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `attendences`
--

CREATE TABLE `attendences` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `emp_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `year` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `edit_date` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `month` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attendences`
--

INSERT INTO `attendences` (`id`, `emp_id`, `date`, `year`, `edit_date`, `status`, `month`, `created_at`, `updated_at`) VALUES
(3, 1, '2026-04-20', '2020', '26_04_20', 'present', 'April', NULL, NULL),
(4, 6, '2026-04-20', '2020', '26_04_20', 'present', 'April', NULL, NULL),
(5, 7, '2026-04-20', '2020', '26_04_20', 'absence', 'April', NULL, NULL),
(6, 8, '2026-04-20', '2020', '26_04_20', 'present', 'April', NULL, NULL),
(7, 1, '2028-04-20', '2020', '28_04_20', 'present', 'April', NULL, '2020-04-27 22:45:08'),
(8, 6, '2028-04-20', '2020', '28_04_20', 'present', 'April', NULL, '2020-04-27 22:45:08'),
(9, 7, '2028-04-20', '2020', '28_04_20', 'present', 'April', NULL, '2020-04-27 22:45:08'),
(10, 8, '2028-04-20', '2020', '28_04_20', 'present', 'April', NULL, '2020-04-27 22:45:08');

-- --------------------------------------------------------

--
-- Table structure for table `catagories`
--

CREATE TABLE `catagories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cat_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `catagories`
--

INSERT INTO `catagories` (`id`, `cat_name`, `created_at`, `updated_at`) VALUES
(1, 'Food', NULL, NULL),
(2, 'Spost', NULL, NULL),
(3, 'Mens', NULL, NULL),
(4, 'Women', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shopname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `acount_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `acount_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_branch` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `picture` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `contact`, `address`, `shopname`, `acount_name`, `acount_number`, `bank_name`, `bank_branch`, `picture`, `created_at`, `updated_at`) VALUES
(1, 'saif', 'saif@gmail.com', '01521231285', 'Dhaka', 'ddd', 'saif', '2010', 'fffff', 'ffff', 'public/images/customer/1664736522590902.jpg', '2020-04-23 04:34:25', NULL),
(2, 'hasan', 'Hasan@gmail.com', '01521231285', 'Dhaka', 'DDR', 'hasan', '2020', 'islamic bank', 'Dhaka', 'public/images/customer/1665220639946696.jpg', '2020-04-28 12:49:15', NULL),
(3, 'Anis', 'anis@gmail.com', '01521231282', 'Cumilla', 'Anis Shop', 'anis', '2012', 'islamic bank', 'Moradnogor', 'public/images/customer/1665220716924070.jpg', '2020-04-28 12:50:28', NULL),
(4, 'Arif', 'arif@gmail.com', '01881099963', 'Comilla', 'Arif Fram', 'Arif', '202020', 'islamic bank', 'cantonment', 'public/images/customer/1665233310304288.jpg', '2020-04-28 16:10:38', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `experience` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salary` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vacation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `email`, `contact`, `address`, `picture`, `experience`, `salary`, `vacation`, `created_at`, `updated_at`) VALUES
(1, 'saif', 'saif@gmail.com', '01521231285', 'comilla', 'public/images/employee/1664669076332605.jpg', '1 year', '10000', '10', '2020-04-22 10:42:23', NULL),
(6, 'Babu', 'babu@gmail.com', '01521231285', 'babu@gmail.com', 'public/images/employee/1664846110381185.jpg', '2 years', '12000', '12', '2020-04-24 09:36:16', NULL),
(7, 'Hasan', 'Hasan@gmail.com', '01521231281', 'Khulna', 'public/images/employee/1664916347224263.jpg', '2 years', '16000', '10', '2020-04-25 04:12:39', NULL),
(8, 'Mina', 'mina@gmail.com', '01521231283', 'USA', 'public/images/employee/1665021272398401.jpg', '2 years', '15000', '15', '2020-04-26 08:00:24', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `details` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` double(8,2) NOT NULL,
  `month` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`id`, `details`, `amount`, `month`, `date`, `created_at`, `updated_at`) VALUES
(1, 'Brackfast', 50.00, 'February', '2020-04-25', NULL, NULL),
(2, 'Computer', 12000.00, 'january', '2020-04-25', '2020-04-25 16:10:38', NULL),
(3, 'Coffee', 200.00, 'january', '2020-04-26', '2020-04-26 03:41:00', NULL),
(4, 'Lanch', 250.00, 'April', '2020-04-26', '2020-04-26 04:42:26', NULL),
(5, 'Print', 150.00, 'April', '2020-04-27', '2020-04-26 04:42:53', NULL),
(6, 'Lunch', 290.00, 'February', '2020-02-01', '2020-04-26 06:35:34', NULL);

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
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_04_22_070757_create_employees_table', 2),
(5, '2020_04_23_032911_create_customers_table', 3),
(6, '2020_04_23_092658_create_suppliers_table', 4),
(7, '2020_04_24_021809_create_salaries_table', 5),
(8, '2020_04_24_080604_create_advanced_salary_table', 6),
(9, '2020_04_24_081010_create_advanced_salary_table', 7),
(10, '2020_04_24_081315_create_advanced_salary_table', 8),
(11, '2020_04_25_050153_create_catagories_table', 9),
(12, '2020_04_25_072735_create_products_table', 10),
(13, '2020_04_25_152728_create_expenses_table', 11),
(14, '2020_04_26_080757_create_attendences_table', 12),
(15, '2020_04_28_050414_create_settings_table', 13),
(16, '2020_04_29_052250_create_orders_table', 14),
(17, '2020_04_29_052411_create_orderdetails_table', 14);

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quentity` int(11) NOT NULL,
  `unitcost` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orderdetails`
--

INSERT INTO `orderdetails` (`id`, `order_id`, `product_id`, `quentity`, `unitcost`, `total`, `created_at`, `updated_at`) VALUES
(1, 5, 2, 3, '550', '1996.5', NULL, NULL),
(2, 5, 3, 3, '200', '726', NULL, NULL),
(3, 5, 5, 4, '150', '726', NULL, NULL),
(4, 6, 3, 3, '200', '726', NULL, NULL),
(5, 6, 4, 4, '120', '580.8', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `order_date` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT current_timestamp(),
  `order_status` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_product` int(11) NOT NULL,
  `sub_total` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vat` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pay` double(8,2) DEFAULT NULL,
  `due` double(8,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `order_date`, `order_status`, `total_product`, `sub_total`, `vat`, `total`, `payment_status`, `pay`, `due`, `created_at`, `updated_at`) VALUES
(5, 4, '2020-04-29 12:47:01', 'pending', 10, '2,850.00', '598.50', '3,448.50', 'HandCash', 0.00, 0.00, NULL, NULL),
(6, 3, '2020-04-29 12:52:22', 'pending', 7, '1,080.00', '226.80', '1,306.80', 'HandCash', 1306.80, 0.00, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_id` int(11) NOT NULL,
  `sup_id` int(11) NOT NULL,
  `product_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_godaon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_route` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `buy_date` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expire_date` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `buying_price` double(8,2) NOT NULL,
  `selling_price` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `cat_id`, `sup_id`, `product_code`, `product_godaon`, `product_route`, `product_image`, `buy_date`, `expire_date`, `buying_price`, `selling_price`, `created_at`, `updated_at`) VALUES
(2, 'Sari', 4, 1, 's123', '1', 'h2', 'public/images/product/1664958455964415.jpg', '2020-04-25', '2020-05-09', 500.00, 550.00, '2020-04-25 15:21:57', NULL),
(3, 'watch', 3, 1, 'w123', '2', 'a1', 'public/images/product/1664958522003600.jpg', '2020-04-25', '2020-04-22', 150.00, 200.00, '2020-04-25 15:23:00', NULL),
(4, 'shirt', 3, 1, 's123', '1', 's1', 'public/images/product/s1.jpg', '43949', '44311', 110.00, 120.00, '2020-04-28 03:45:25', '2020-04-28 03:45:25'),
(5, 'shirt1', 3, 1, 's124', '1', 's1', 'public/images/product/s2.jpg', '43949', '44312', 125.00, 150.00, '2020-04-28 03:45:25', '2020-04-28 03:45:25');

-- --------------------------------------------------------

--
-- Table structure for table `salaries`
--

CREATE TABLE `salaries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `emp_id` int(11) NOT NULL,
  `salary_month` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paid_amount` float NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_contact` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_zip` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_logo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shop` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `acount_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `acount_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_branch` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `name`, `email`, `contact`, `address`, `type`, `shop`, `acount_name`, `acount_number`, `bank_name`, `bank_branch`, `created_at`, `updated_at`) VALUES
(1, 'saif1', 'saif@gmail.com', '01521231283', 'comilla', 'distributor', 'ddd', 'saif', '2010', 'islamic bank', 'cantonment', '2020-04-23 11:05:42', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$lGAtfRTjSNfsnCxOmbWjsuc7GROnz9qlT56eQ/GCRMEIO5wIZqc3.', NULL, '2020-04-21 22:25:19', '2020-04-21 22:25:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advanced_salary`
--
ALTER TABLE `advanced_salary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendences`
--
ALTER TABLE `attendences`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `catagories`
--
ALTER TABLE `catagories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
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
-- Indexes for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salaries`
--
ALTER TABLE `salaries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `advanced_salary`
--
ALTER TABLE `advanced_salary`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `attendences`
--
ALTER TABLE `attendences`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `catagories`
--
ALTER TABLE `catagories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `orderdetails`
--
ALTER TABLE `orderdetails`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `salaries`
--
ALTER TABLE `salaries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
