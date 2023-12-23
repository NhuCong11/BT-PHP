-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2023 at 03:15 PM
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
-- Database: `mydatabase`
--
CREATE DATABASE IF NOT EXISTS `mydatabase` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `mydatabase`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'Công', 'yeusangtao96@gmail.com', 'bec63cf77720d1b30bce6643c80116dc');

-- --------------------------------------------------------

--
-- Table structure for table `franchise`
--

CREATE TABLE `franchise` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `investment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `franchise`
--

INSERT INTO `franchise` (`id`, `name`, `email`, `phone`, `address`, `investment`) VALUES
(3, 'Nguyễn Như Công', 'yeusangtao96@gmail.com', '0982155291', 'Hà Nội', '700 triệu - 1 tỷ'),
(4, 'Nguyen Nhu Cong', 'yeusangtao96@gmail.com', '0982155291', 'Hà Nội', '500 triệu - 700 triệu');

-- --------------------------------------------------------

--
-- Table structure for table `instant`
--

CREATE TABLE `instant` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `price` varchar(20) DEFAULT NULL,
  `discount` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `instant`
--

INSERT INTO `instant` (`id`, `title`, `image`, `price`, `discount`) VALUES
(25, 'Instant Milk Tea - Strawberry - Set 6 Ly', '../assets/images/Order/6ly_hong.png', '165.000đ', '165.000đ'),
(26, 'Instant Milk Tea - Original - Set 6 ly', '../assets/images/Order/6ly_vang.png', '26.000đ', '26.000đ'),
(27, 'Instant Milk Tea - Strawberry', '../assets/images/Order/Stawberry-Milk-Tea.jpg', '25.000đ', '25.000đ'),
(28, 'Instant Milk Tea - Original', '../assets/images/Order/Original-Milk-Tea.jpg', '49.000đ', '25.000đ');

-- --------------------------------------------------------

--
-- Table structure for table `order_cart`
--

CREATE TABLE `order_cart` (
  `id` int(100) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `customize` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(255) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_cart`
--

INSERT INTO `order_cart` (`id`, `title`, `image`, `customize`, `quantity`, `name`, `address`, `phone`) VALUES
(2, 'Trà Dứa Nhiệt Đới', 'Tra-Dua-Nhiet-Doi-2-copy.jpg', '70% đường,100% đá,', 1, 'quang anh', 'Hà Nội', '0982155291');

-- --------------------------------------------------------

--
-- Table structure for table `order_fresh_fruit`
--

CREATE TABLE `order_fresh_fruit` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `price` varchar(20) DEFAULT NULL,
  `discount` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_fresh_fruit`
--

INSERT INTO `order_fresh_fruit` (`id`, `title`, `image`, `price`, `discount`) VALUES
(44, 'Trà đào dâu tây kem phô mai', '../assets/images/Order/Dau-Tam-Kem-Pho-Mai-2-copy.jpg', '46.000đ', '25.000đ'),
(45, 'Trà mận hạt sen', '../assets/images/Order/tra-man-hat-sen.png', '48.000đ', '25.000đ'),
(46, 'ô long xoài kem cà phê', '../assets/images/Order/O-Long-xoai-kem-coffee.jpg', '49.000đ', '25.000đ'),
(47, 'Trà đào bưởi hồng trân châu baby', '../assets/images/Order/Tra-dao-buoi-hong-tran-chau-baby.jpg', '38.000đ', '25.000đ'),
(48, 'Trà xoài bưởi hồng', '../assets/images/Order/tra-xoai-buoi-hong.png', '38.000đ', '25.000đ'),
(49, 'probi bưởi trân châu sương mai', '../assets/images/Order/Probi-buoi-tran-chau-suong-mai.jpg', '42.000đ', '25.000đ'),
(50, 'probi xoài trân châu sương mai', '../assets/images/Order/probi_xoai_tran_chau_suong_mai.jpg', '42.000đ', '25.000đ'),
(51, 'Trà xoài xanh', '../assets/images/Order/tra_xanh_xoai.jpg', '25.000đ', '25.000đ'),
(52, 'trà dâu tằm pha lê tuyết', '../assets/images/Order/Tra-Dau-Tam-Pha-Le-Tuyet.jpg', '42.000đ', '25.000đ'),
(53, 'Hồng trà bưởi mật ong', '../assets/images/Order/hong_tra_buoi_mat_ong.jpg', '42.000đ', '25.000đ');

-- --------------------------------------------------------

--
-- Table structure for table `order_hots`
--

CREATE TABLE `order_hots` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `price` varchar(20) DEFAULT NULL,
  `discount` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_hots`
--

INSERT INTO `order_hots` (`id`, `title`, `image`, `price`, `discount`) VALUES
(0, 'Combo Trà sữa 14k', 'combo.jpeg', '90.000đ', '60.000đ'),
(1, 'Trà sữa phô mai tươi', 'Tra-sua-pho-mai-tuoi.png', '28.000đ', '25.000đ'),
(2, 'Trà đào dâu tây kem', 'Tra-Sua-Dau-Tay-2-copy.jpg', '48.000đ', '40.000đ'),
(3, 'Sữa chua mận hạt sen', 'sua-chua-man-hat-sen-.png', '38.000đ', '30.000đ'),
(4, 'Trà Mận Hạt Sen', 'tra-man-hat-sen.png', '48.000đ', '38.000đ'),
(5, 'Ô Long Xoài Kem Cà Phê', 'O-Long-xoai-kem-coffee.jpg', '40.000đ', '25.000đ'),
(6, 'Trà Đào Bưởi Hồng Trân Châu Baby', 'Tra-dao-buoi-hong-tran-chau-baby.jpg', '48.000đ', '25.000đ'),
(7, 'Instant Milk Tea - Strawberry - Set 6 Ly', '6ly_hong.png', '165.000đ', '155.000đ'),
(8, 'Instant Milk Tea - Original - Set 6 ly', '6ly_vang.png', '160.000đ', '150.000đ'),
(9, 'Instant Milk Tea - Strawberry', 'Stawberry-Milk-Tea.jpg', '26.000đ', '24.000đ'),
(10, 'Instant Milk Tea - Original', 'Original-Milk-Tea.jpg', '25.000đ', '20.000đ'),
(11, 'Trà Xoài Bưởi Hồng', 'trà-xoài-bưởi-hồng.png', '38.000đ', '25.000đ'),
(12, 'Trà Bưởi Hồng Kem Phô Mai', 'hong_tra_buoi_mat_ong.jpg', '48.000đ', '25.000đ'),
(13, 'Choco Ngũ Cốc Kem Cafe', 'choco-ngũ-cốc-kem-cafe.png', '30.000đ', '28.000đ'),
(14, 'Hồng Trà Ngũ Cốc Kem Cafe', 'hong-tra-ngu-coc-kem-cafe.png', '30.000đ', '28.000đ'),
(15, 'Royal Pearl Milk Coffee', 'Royal-Pearl-Milk-Coffee.png', '38.000đ', '22.000đ'),
(16, 'Grass Jelly Milk Coffee', 'Grass-Jelly-Milk-Coffee.png', '38.000đ', '22.000đ'),
(17, 'Tiger Sugar', 'TS_TIGER_SUGAR.jpg', '28.000đ', '26.000đ'),
(18, 'Trà Sữa Trân Châu Hoàng Gia', 'Tra-Sua-Tran-Chau-Hoang-Gia.jpg', '26.000đ', '25.000đ'),
(19, 'Trà sữa Ba Anh Em', 'Tra-Sua-Ba-Anh-Em-1-copy.jpg', '26.000đ', '25.000đ'),
(20, 'Trà Sữa Panda', 'Tra-Sua-Panda.jpg', '26.000đ', '25.000đ'),
(21, 'Trà Sữa Kim Cương Đen Okinawa', 'Tra-Sua-Kim-Cuong-Den-Okinawa-2-copy.jpg', '26.000đ', '25.000đ'),
(22, 'Ô Long Kem Phô Mai', 'oolong-kem-pho-mai.png', '28.000đ', '25.000đ'),
(23, 'Trà dứa nhiệt đới', 'Tra-Dua-Nhiet-Doi-2-copy.jpg', '30.000đ', '28.000đ'),
(24, 'Trà Sữa Hạnh Phúc', 'Tra-Sua-Hanh-Phuc-1-copy.jpg', '25.000đ', '24.000đ');

-- --------------------------------------------------------

--
-- Table structure for table `order_macchiato_cream`
--

CREATE TABLE `order_macchiato_cream` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `price` varchar(20) DEFAULT NULL,
  `discount` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_macchiato_cream`
--

INSERT INTO `order_macchiato_cream` (`id`, `title`, `image`, `price`, `discount`) VALUES
(54, 'Trà xoài bưởi hồng kem phô mai', '../assets/images/Order/tra-xoai-bươi-hông-kem-pho-mai.png', '48.000đ', '25.000đ'),
(55, 'Choco ngũ cốc kem cafe', '../assets/images/Order/choco-ngũ-cốc-kem-cafe.png', '30.000đ', '30.000đ'),
(56, 'Hồng trà ngũ cốc kem cà phê', '../assets/images/Order/hong-tra-ngu-coc-kem-cafe.png', '30.000đ', '30.000đ'),
(57, 'Dâu tằm kem phô mai', '../assets/images/Order/Dau-Tam-Kem-Pho-Mai-2-copy.jpg', '28.000đ', '25.000đ'),
(58, 'Hồng trà kem phô mai', '../assets/images/Order/Hong-Tra-Kem-Pho-Mai-2-copy.jpg', '26.000đ', '25.000đ'),
(59, 'Trà xanh kem phô mai', '../assets/images/Order/Tra-Xanh-Kem-Pho-Mai.jpg', '26.000đ', '25.000đ'),
(60, 'matcha kem phô mai', '../assets/images/Order/matcha-kem-pho-mai.png', '48.000đ', '25.000đ');

-- --------------------------------------------------------

--
-- Table structure for table `order_milk_tea`
--

CREATE TABLE `order_milk_tea` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `price` varchar(20) DEFAULT NULL,
  `discount` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_milk_tea`
--

INSERT INTO `order_milk_tea` (`id`, `title`, `image`, `price`, `discount`) VALUES
(29, 'Combo Trà sữa 14k', '../assets/images/Order/combo.jpeg', '56.000đ', '90.000đ'),
(30, 'Trà Sữa Phô Mai Tươi', '../assets/images/Order/Tra-sua-pho-mai-tuoi.png', '28.000đ', '25.000đ'),
(31, 'Trà Xanh', '../assets/images/Order/Tra-Xanh.jpg', '32.000đ', '25.000đ'),
(32, 'Sữa Tươi Trân Châu Baby Kem Café', '../assets/images/Order/sua_tuoi_tran_chau_baby_kem_cafe.jpg', '49.000đ', '25.000đ'),
(33, 'Oolong Trân Châu Baby Kem Café', '../assets/images/Order/Oolong-tran-chau-baby-kem-cafe.jpg', '49.000đ', '25.000đ'),
(34, 'Trà Xanh Sữa Vị Nhài', '../assets/images/Order/Tra-Xanh-Sua-Vi-Nhai.jpg', '20.000đ', '20.000đ'),
(35, 'Trà Sữa Matcha', '../assets/images/Order/Tra-Sua-Matcha.jpg', '40.000đ', '25.000đ'),
(36, 'Trà Sữa Ô Long', '../assets/images/Order/Tra-O-Long-Sua-2-copy.jpg', '22.000đ', '22.000đ'),
(37, 'Ô Long Thái Cực', '../assets/images/Order/O-Long-Thai-Cuc-2-copy.jpg', '45.000đ', '25.000đ'),
(38, 'Hồng Trà', '../assets/images/Order/Hong-Tra-2-copy.jpg', '32.000đ', '25.000đ'),
(39, 'Matcha Đậu Đỏ', '../assets/images/Order/matcha-dau-do.jpg', '40.000đ', '25.000đ'),
(40, 'Trà Sữa Socola', '../assets/images/Order/Tra-Sua-Socola.jpg', '22.000đ', '22.000đ'),
(41, 'Trà Sữa Bạc Hà', '../assets/images/Order/Tra-Sua-Bac-Ha-2-copy.jpg', '22.000đ', '22.000đ'),
(42, 'Trà sữa dâu tây', '../assets/images/Order/Tra-Sua-Dau-Tay-2-copy.jpg', '22.000đ', '22.000đ'),
(43, 'Trà Sữa', '../assets/images/Order/Tra-Sua-1-copy.jpg', '20.000đ', '20.000đ');

-- --------------------------------------------------------

--
-- Table structure for table `order_sua_chua`
--

CREATE TABLE `order_sua_chua` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` varchar(20) NOT NULL,
  `discount` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_sua_chua`
--

INSERT INTO `order_sua_chua` (`id`, `title`, `image`, `price`, `discount`) VALUES
(61, 'Sữa chua mận hạt sen', '../assets/images/Order/sua-chua-man-hat-sen-.png', '48.000đ', '25.000đ'),
(62, 'Sữa chua dâu tằm hoàng kim', '../assets/images/Order/sua-chua-dau-tam-hoang-kim.png', '30.000đ', '25.000đ');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'Như Công', 'yeusangtao96@gmail.com', 'bec63cf77720d1b30bce6643c80116dc'),
(3, 'Đạt', 'ytbs1vn@gmail.com', '25d55ad283aa400af464c76d713c07ad'),
(4, 'quang anh', 'abc@gmail.com', '25d55ad283aa400af464c76d713c07ad');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `franchise`
--
ALTER TABLE `franchise`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `instant`
--
ALTER TABLE `instant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_cart`
--
ALTER TABLE `order_cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_fresh_fruit`
--
ALTER TABLE `order_fresh_fruit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_hots`
--
ALTER TABLE `order_hots`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_macchiato_cream`
--
ALTER TABLE `order_macchiato_cream`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_milk_tea`
--
ALTER TABLE `order_milk_tea`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_sua_chua`
--
ALTER TABLE `order_sua_chua`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `franchise`
--
ALTER TABLE `franchise`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `order_cart`
--
ALTER TABLE `order_cart`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `order_sua_chua`
--
ALTER TABLE `order_sua_chua`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Database: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Table structure for table `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(10) UNSIGNED NOT NULL,
  `dbase` varchar(255) NOT NULL DEFAULT '',
  `user` varchar(255) NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `query` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Table structure for table `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) NOT NULL,
  `col_name` varchar(64) NOT NULL,
  `col_type` varchar(64) NOT NULL,
  `col_length` text DEFAULT NULL,
  `col_collation` varchar(64) NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) DEFAULT '',
  `col_default` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Table structure for table `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `table_name` varchar(64) NOT NULL DEFAULT '',
  `column_name` varchar(64) NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `transformation` varchar(255) NOT NULL DEFAULT '',
  `transformation_options` varchar(255) NOT NULL DEFAULT '',
  `input_transformation` varchar(255) NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) NOT NULL,
  `settings_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

-- --------------------------------------------------------

--
-- Table structure for table `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) NOT NULL,
  `export_type` varchar(10) NOT NULL,
  `template_name` varchar(64) NOT NULL,
  `template_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

--
-- Dumping data for table `pma__export_templates`
--

INSERT INTO `pma__export_templates` (`id`, `username`, `export_type`, `template_name`, `template_data`) VALUES
(1, 'root', 'server', 'sql', '{\"quick_or_custom\":\"quick\",\"what\":\"sql\",\"db_select[]\":[\"mydatabase\",\"phpmyadmin\",\"test\"],\"aliases_new\":\"\",\"output_format\":\"sendit\",\"filename_template\":\"@SERVER@\",\"remember_template\":\"on\",\"charset\":\"utf-8\",\"compression\":\"none\",\"maxsize\":\"\",\"codegen_structure_or_data\":\"data\",\"codegen_format\":\"0\",\"csv_separator\":\",\",\"csv_enclosed\":\"\\\"\",\"csv_escaped\":\"\\\"\",\"csv_terminated\":\"AUTO\",\"csv_null\":\"NULL\",\"csv_columns\":\"something\",\"csv_structure_or_data\":\"data\",\"excel_null\":\"NULL\",\"excel_columns\":\"something\",\"excel_edition\":\"win\",\"excel_structure_or_data\":\"data\",\"json_structure_or_data\":\"data\",\"json_unicode\":\"something\",\"latex_caption\":\"something\",\"latex_structure_or_data\":\"structure_and_data\",\"latex_structure_caption\":\"Cấu trúc của bảng @TABLE@\",\"latex_structure_continued_caption\":\"Cấu trúc của bảng @TABLE@ (còn nữa)\",\"latex_structure_label\":\"tab:@TABLE@-structure\",\"latex_relation\":\"something\",\"latex_comments\":\"something\",\"latex_mime\":\"something\",\"latex_columns\":\"something\",\"latex_data_caption\":\"Nội dung của bảng @TABLE@\",\"latex_data_continued_caption\":\"Nội dung của bảng @TABLE@ (còn nữa)\",\"latex_data_label\":\"tab:@TABLE@-data\",\"latex_null\":\"\\\\textit{NULL}\",\"mediawiki_structure_or_data\":\"data\",\"mediawiki_caption\":\"something\",\"mediawiki_headers\":\"something\",\"htmlword_structure_or_data\":\"structure_and_data\",\"htmlword_null\":\"NULL\",\"ods_null\":\"NULL\",\"ods_structure_or_data\":\"data\",\"odt_structure_or_data\":\"structure_and_data\",\"odt_relation\":\"something\",\"odt_comments\":\"something\",\"odt_mime\":\"something\",\"odt_columns\":\"something\",\"odt_null\":\"NULL\",\"pdf_report_title\":\"\",\"pdf_structure_or_data\":\"data\",\"phparray_structure_or_data\":\"data\",\"sql_include_comments\":\"something\",\"sql_header_comment\":\"\",\"sql_use_transaction\":\"something\",\"sql_compatibility\":\"NONE\",\"sql_structure_or_data\":\"structure_and_data\",\"sql_create_table\":\"something\",\"sql_auto_increment\":\"something\",\"sql_create_view\":\"something\",\"sql_create_trigger\":\"something\",\"sql_backquotes\":\"something\",\"sql_type\":\"INSERT\",\"sql_insert_syntax\":\"both\",\"sql_max_query_size\":\"50000\",\"sql_hex_for_binary\":\"something\",\"sql_utc_time\":\"something\",\"texytext_structure_or_data\":\"structure_and_data\",\"texytext_null\":\"NULL\",\"yaml_structure_or_data\":\"data\",\"\":null,\"as_separate_files\":null,\"csv_removeCRLF\":null,\"excel_removeCRLF\":null,\"json_pretty_print\":null,\"htmlword_columns\":null,\"ods_columns\":null,\"sql_dates\":null,\"sql_relation\":null,\"sql_mime\":null,\"sql_disable_fk\":null,\"sql_views_as_tables\":null,\"sql_metadata\":null,\"sql_drop_database\":null,\"sql_drop_table\":null,\"sql_if_not_exists\":null,\"sql_simple_view_export\":null,\"sql_view_current_user\":null,\"sql_or_replace_view\":null,\"sql_procedure_function\":null,\"sql_truncate\":null,\"sql_delayed\":null,\"sql_ignore\":null,\"texytext_columns\":null}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) NOT NULL,
  `tables` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Table structure for table `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) NOT NULL DEFAULT '',
  `db` varchar(64) NOT NULL DEFAULT '',
  `table` varchar(64) NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp(),
  `sqlquery` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) NOT NULL,
  `item_name` varchar(64) NOT NULL,
  `item_type` varchar(64) NOT NULL,
  `db_name` varchar(64) NOT NULL,
  `table_name` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Table structure for table `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) NOT NULL,
  `tables` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Dumping data for table `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('root', '[{\"db\":\"mydatabase\",\"table\":\"users\"},{\"db\":\"mydatabase\",\"table\":\"order_sua_chua\"},{\"db\":\"mydatabase\",\"table\":\"order_macchiato_cream\"},{\"db\":\"mydatabase\",\"table\":\"order_milk_tea\"},{\"db\":\"mydatabase\",\"table\":\"instant\"},{\"db\":\"mydatabase\",\"table\":\"order_hots\"},{\"db\":\"mydatabase\",\"table\":\"order_fresh_fruit\"}]');

-- --------------------------------------------------------

--
-- Table structure for table `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) NOT NULL DEFAULT '',
  `master_table` varchar(64) NOT NULL DEFAULT '',
  `master_field` varchar(64) NOT NULL DEFAULT '',
  `foreign_db` varchar(64) NOT NULL DEFAULT '',
  `foreign_table` varchar(64) NOT NULL DEFAULT '',
  `foreign_field` varchar(64) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Table structure for table `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) NOT NULL DEFAULT '',
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `search_name` varchar(64) NOT NULL DEFAULT '',
  `search_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `table_name` varchar(64) NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT 0,
  `x` float UNSIGNED NOT NULL DEFAULT 0,
  `y` float UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `table_name` varchar(64) NOT NULL DEFAULT '',
  `display_field` varchar(64) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) NOT NULL,
  `db_name` varchar(64) NOT NULL,
  `table_name` varchar(64) NOT NULL,
  `prefs` text NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

-- --------------------------------------------------------

--
-- Table structure for table `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) NOT NULL,
  `table_name` varchar(64) NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text NOT NULL,
  `schema_sql` text DEFAULT NULL,
  `data_sql` longtext DEFAULT NULL,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `config_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Dumping data for table `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2023-12-02 14:21:40', '{\"Console\\/Mode\":\"collapse\",\"lang\":\"vi\"}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) NOT NULL,
  `tab` varchar(64) NOT NULL,
  `allowed` enum('Y','N') NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Table structure for table `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) NOT NULL,
  `usergroup` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Indexes for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indexes for table `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Indexes for table `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indexes for table `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indexes for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Indexes for table `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indexes for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indexes for table `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indexes for table `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indexes for table `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indexes for table `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indexes for table `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indexes for table `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Database: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;
--
-- Database: `thuchanh`
--
CREATE DATABASE IF NOT EXISTS `thuchanh` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `thuchanh`;

-- --------------------------------------------------------

--
-- Table structure for table `sinhvien`
--

CREATE TABLE `sinhvien` (
  `masv` int(11) NOT NULL,
  `hoten` varchar(200) NOT NULL,
  `gioitinh` varchar(200) NOT NULL,
  `hinhanh` varchar(200) NOT NULL,
  `quequan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sinhvien`
--

INSERT INTO `sinhvien` (`masv`, `hoten`, `gioitinh`, `hinhanh`, `quequan`) VALUES
(1, 'Nguyễn Như Công', 'Nam', '1702463000_Tham_quan_doanh_nghiep_22032023.jpg', 'Hà Nội'),
(3, 'Phùng Đề Mạc', 'Nữ', '1702463819_001Pb9yIly1harctz7gclj61le2u0kjm02.jpg', 'Trung quốc');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD PRIMARY KEY (`masv`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sinhvien`
--
ALTER TABLE `sinhvien`
  MODIFY `masv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
