-- phpMyAdmin SQL Dump
-- version 4.6.5.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: 2017 年 3 月 22 日 13:35
-- サーバのバージョン： 5.6.34
-- PHP Version: 7.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `EC`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `ec_item`
--

CREATE TABLE `ec_item` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `img` varchar(100) DEFAULT NULL,
  `seibetu` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `create_datetime` datetime DEFAULT NULL,
  `update_datetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `ec_item`
--

INSERT INTO `ec_item` (`id`, `name`, `price`, `img`, `seibetu`, `status`, `stock`, `create_datetime`, `update_datetime`) VALUES
(1, '【Nudie Jeans(ヌーディージーンズ)】GRIM TIM CRYSPY SECRETS デニム', 29640, '04191c40e9fc0a94bb3debc978c2f31efae89785.png', 1, 1, 5, '2017-03-14 04:45:09', '2017-03-17 01:21:16'),
(2, '【Nudie Jeans(ヌーディージーンズ)】SKINNY LIN FRESH BREEZE デニム', 27840, '45c72e21c43f4a8787a41d3c007f807c45d3692f.png', 1, 1, 10, '2017-03-14 06:30:43', '2017-03-17 01:21:18'),
(3, '【Nudie Jeans(ヌーディージーンズ)】SKINNY LIN「ORG．SPRING BLUE」', 24680, 'c05e4cf8b5148788e0d8ce185bd0795cf2669c7d.png', 0, 1, 5, '2017-03-14 08:53:45', '2017-03-16 04:18:52'),
(4, '【Nudie Jeans(ヌーディージーンズ)】Funky Frank Turn Downs', 30960, '37b23774cb5f6fd7430f271b7bc5dd462111899c.png', 0, 1, 5, '2017-03-14 10:17:12', '2017-03-14 10:35:49'),
(5, '【桃太郎ジーンズ】15.7oz 特濃インディゴ出陣タイトストレート', 21620, 'b0971bfa240c567db65cfb4e69545b6fbeede72a.png', 1, 1, 5, '2017-03-16 03:12:44', '2017-03-16 03:20:34'),
(6, '【桃太郎ジーンズ】銅丹14.7oz特濃セルビッチデニムタイトストレート', 21620, 'a7465dd9ebaa429e0c52c23996f787140bdb5fb3.png', 1, 1, 5, '2017-03-16 03:16:00', '2017-03-16 03:19:33'),
(7, '【桃太郎ジーンズ】銅丹14.7oz特濃セルビッチデニムスリムテーパード', 21620, 'b24e8302885f81cd997fff89ec2d9863180e215a.png', 1, 1, 5, '2017-03-16 03:19:10', '2017-03-16 03:19:50'),
(8, '【桃太郎ジーンズ】インディゴ レディース　ローライズ・タイトストレート', 20820, 'f66ae300abe42dd8c47f006e67a5231f3c1ec80c.png', 0, 1, 3, '2017-03-16 03:24:18', '2017-03-16 04:12:56'),
(9, '【桃太郎ジーンズ】出陣15.7oz特濃レディース　デニムスカート', 17940, 'bd9f38914d72d9e0e3363845fd42e2978439aa4f.png', 0, 1, 3, '2017-03-16 03:26:50', '2017-03-16 04:23:27'),
(10, '【DIESEL(ディーゼル)】SLEENKER L.30 TROUSERS', 43720, '1ab33b233ef4846d2fe35410d4c5d6679b82bc1b.png', 1, 1, 1, '2017-03-16 03:43:47', '2017-03-17 23:37:46'),
(11, '【DIESEL(ディーゼル)】12.5oz ARY L.32 TROUSERS', 21520, 'b600a8c2e6f8803d63e591f049a6e79f4dedefff.png', 0, 1, 1, '2017-03-16 03:48:23', '2017-03-16 04:27:28'),
(12, '【DIESEL(ディーゼル)】THOMMER L.32 TROUSERS', 35640, '49a9dc4a12f8b91337a9dac0f0c5103de7258f20.png', 1, 1, 1, '2017-03-16 03:53:25', '2017-03-16 03:53:25'),
(13, '【DIESEL(ディーゼル)】9.5oz SKINZEE-LOW-ZIP L.30', 39640, '39f5c75b4bc1fbc56c75988baf05a2fadc99c0df.png', 0, 1, 1, '2017-03-16 03:57:34', '2017-03-17 23:38:05'),
(14, '【桃太郎ジーンズ】15.7oz 特濃インディゴクラシックスリムストレート', 22620, '087d1e4f68f3ceb9a4aada14f3ad6d13736becb5.png', 1, 1, 1, '2017-03-16 04:04:48', '2017-03-17 23:37:55'),
(15, '【DIESEL(ディーゼル)】FAYZA-NE SP Sweat jeans.', 51820, 'ec509dc9648fbe4e63d6eef3237ee50e180a6eb2.png', 0, 1, 1, '2017-03-16 17:13:13', '2017-03-16 17:13:13'),
(16, '【A.P.C(アーペーセー)】JEAN SAILOR　H16 ストレート、ショート丈. ルーズシルエット', 21840, '069f1e65941c9ca1bb37721cb75cbfb089cdd7fa.png', 0, 1, 1, '2017-03-16 17:18:54', '2017-03-16 17:28:23'),
(17, '【A.P.C(アーペーセー)】SHORT CALI　16A　ストレート、ショートカット', 13780, '9b473b829b385b8d2682edf6ac6edefbcb71338c.png', 0, 1, 1, '2017-03-16 17:22:22', '2017-03-16 17:27:44'),
(18, '【A.P.C(アーペーセー)】PETIT NEW STANDARD', 22680, '2f1dc148047cf1b2b577739ff5771b640893d81a.png', 1, 1, 1, '2017-03-16 17:24:52', '2017-03-16 17:24:52'),
(19, '【G-star RAW(ジースターロウ)】5620 G-Star Elwood 3D Tapered Jeans', 19440, 'e5237bc71f26ee4f5ec7ad3e4bffd52ba446f612.png', 1, 1, 1, '2017-03-16 17:36:31', '2017-03-16 17:36:31'),
(20, '【G-star RAW(ジースターロウ)】Powel 3D Tapered', 22890, '9343ec65632c0de48bfdbe15948b17510ce9135b.png', 1, 1, 1, '2017-03-16 17:38:49', '2017-03-16 17:38:49'),
(21, '【G-star RAW(ジースターロウ)】5620 Mid Skinny', 14960, '4d5a33b9e3f5e262b175acd272c315cc67086c09.png', 0, 1, 1, '2017-03-16 17:40:47', '2017-03-16 17:40:47'),
(22, '【G-star RAW(ジースターロウ)】Arc 3D Low Boyfriend', 24840, 'f27ecedb0dd799cdb93f80d96527718b3770f5a0.png', 0, 1, 1, '2017-03-16 17:42:47', '2017-03-16 17:42:47'),
(23, '【G-star RAW(ジースターロウ)】 Revend Super Slim', 28080, '4ec8d61a40d50d6a84b9b34d5b6717f4bb33b40f.png', 1, 1, 1, '2017-03-16 17:45:25', '2017-03-16 17:45:25'),
(24, '【Acne Studios(アクネストゥディオズ)】ACNE STUDIOS SKIN5 MID VTG', 31320, 'ed1d33ae0115d8cb5fbd3e870e7eadb3bcf3f5d2.png', 0, 1, 1, '2017-03-16 17:51:12', '2017-03-16 17:51:12'),
(25, '【Acne Studios(アクネストゥディオズ)】ACNE STUDIOS Patti One', 30240, '99fbd2138c30a4ced080f2d50f8e92907f89d1f2.png', 0, 1, 1, '2017-03-16 17:53:24', '2017-03-16 17:53:24'),
(26, '【CHEAP MONDAY(チープマンデー)】Mid Spray Dawning Blue', 12060, '9ec3f1d4eefe44855e7d7df24472a75b6ef09705.png', 0, 1, 1, '2017-03-16 17:58:10', '2017-03-16 17:58:10'),
(27, '【CHEAP MONDAY(チープマンデー)】Second Skin Edit', 11340, '5be042f9e08907a4f0593bbe6d088706ca6a32c3.png', 1, 1, 1, '2017-03-16 18:00:57', '2017-03-16 18:00:57'),
(28, '【CHEAP MONDAY(チープマンデー)】Tight Turnout Black', 11340, 'a4a8fa389015dcec7ea03e396506703b8ed33ff7.png', 1, 1, 1, '2017-03-16 18:03:03', '2017-03-16 18:03:03'),
(29, '【CHEAP MONDAY(チープマンデー)】Tight Pure Blue', 9640, 'f7335807749bc369c4852c2bc37d4875810191bc.png', 1, 1, 1, '2017-03-16 18:04:55', '2017-03-16 18:04:55');

-- --------------------------------------------------------

--
-- テーブルの構造 `ec_order`
--

CREATE TABLE `ec_order` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `ec_order`
--

INSERT INTO `ec_order` (`id`, `user_id`, `price`, `created_date`) VALUES
(1, 2, 29640, '2017-03-16 19:56:44'),
(2, 2, 49360, '2017-03-16 20:08:25'),
(3, 2, 21620, '2017-03-16 20:29:02'),
(4, 2, 24680, '2017-03-16 20:35:21');

-- --------------------------------------------------------

--
-- テーブルの構造 `ec_order_detail`
--

CREATE TABLE `ec_order_detail` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `ec_order_detail`
--

INSERT INTO `ec_order_detail` (`id`, `order_id`, `item_id`, `amount`, `price`, `created_date`) VALUES
(1, 1, 1, 1, 29640, '2017-03-16 19:56:44'),
(2, 2, 3, 2, 24680, '2017-03-16 20:08:25'),
(3, 3, 7, 1, 21620, '2017-03-16 20:29:02'),
(4, 4, 3, 1, 24680, '2017-03-16 20:35:21');

-- --------------------------------------------------------

--
-- テーブルの構造 `ec_user`
--

CREATE TABLE `ec_user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `ec_user`
--

INSERT INTO `ec_user` (`id`, `name`, `email`, `password`, `created_date`, `updated_date`) VALUES
(1, '末吉 勝', 'sue.yoyoyo0713@docomo.ne.jp', '4a7d1ed414474e4033ac29ccb8653d9b', '2017-03-12 18:16:14', '0000-00-00 00:00:00'),
(2, 'テスト', 'test@example.com', '4a7d1ed414474e4033ac29ccb8653d9b', '2017-03-16 03:07:36', '0000-00-00 00:00:00'),
(3, '末吉', 'test@example.com', '4a7d1ed414474e4033ac29ccb8653d9b', '2017-03-16 20:10:32', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ec_item`
--
ALTER TABLE `ec_item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ec_order`
--
ALTER TABLE `ec_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ec_order_detail`
--
ALTER TABLE `ec_order_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ec_user`
--
ALTER TABLE `ec_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ec_item`
--
ALTER TABLE `ec_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `ec_order`
--
ALTER TABLE `ec_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `ec_order_detail`
--
ALTER TABLE `ec_order_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `ec_user`
--
ALTER TABLE `ec_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
