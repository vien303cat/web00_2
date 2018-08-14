-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- 主機: 127.0.0.1
-- 產生時間： 2018-08-14 16:26:29
-- 伺服器版本: 10.1.31-MariaDB
-- PHP 版本： 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `db00_2`
--

-- --------------------------------------------------------

--
-- 資料表結構 `marquee`
--

CREATE TABLE `marquee` (
  `marquee_seq` int(10) NOT NULL,
  `marquee_txt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `marquee_display` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `marquee`
--

INSERT INTO `marquee` (`marquee_seq`, `marquee_txt`, `marquee_display`) VALUES
(2, '轉知臺北教育大學與臺灣師大合辦第11屆麋研齋全國硬筆書法比賽活動', 1),
(3, '轉知:法務部辦理「第五屆法規知識王網路闖關競賽辦法', 1),
(4, '轉知2012年全國青年水墨創作大賽活動', 1),
(5, '欣榮圖書館101年悅讀達人徵文比賽，歡迎全校師生踴躍投稿參加', 1),
(6, ' 轉知:教育是人類升沉的樞紐-2013教師生命成長營', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `member`
--

CREATE TABLE `member` (
  `member_seq` int(10) UNSIGNED NOT NULL,
  `member_acc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `member_pw` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `member`
--

INSERT INTO `member` (`member_seq`, `member_acc`, `member_pw`) VALUES
(1, 'admin', '1234');

-- --------------------------------------------------------

--
-- 資料表結構 `mvim`
--

CREATE TABLE `mvim` (
  `mvim_seq` int(10) UNSIGNED NOT NULL,
  `mvim_img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `mvim_display` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `mvim`
--

INSERT INTO `mvim` (`mvim_seq`, `mvim_img`, `mvim_display`) VALUES
(4, '1534278328.swf', 1),
(5, '1534278332.swf', 1),
(6, '1534278336.swf', 1),
(7, '1534278341.swf', 1),
(8, '1534278348.gif', 1),
(9, '1534278353.gif', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `title`
--

CREATE TABLE `title` (
  `title_seq` int(10) NOT NULL,
  `title_img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_txt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_display` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `title`
--

INSERT INTO `title` (`title_seq`, `title_img`, `title_txt`, `title_display`) VALUES
(1, '1534272026.jpg', '卓越科技大學校園資訊系', 0),
(2, '1534272311.jpg', '卓越科技大學校園資訊系', 1),
(5, '1534273556.jpg', '卓越科技大學校園資訊系', 0),
(6, '1534273561.jpg', '卓越科技大學校園資訊系', 0);

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `marquee`
--
ALTER TABLE `marquee`
  ADD PRIMARY KEY (`marquee_seq`);

--
-- 資料表索引 `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`member_seq`);

--
-- 資料表索引 `mvim`
--
ALTER TABLE `mvim`
  ADD PRIMARY KEY (`mvim_seq`);

--
-- 資料表索引 `title`
--
ALTER TABLE `title`
  ADD PRIMARY KEY (`title_seq`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `marquee`
--
ALTER TABLE `marquee`
  MODIFY `marquee_seq` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- 使用資料表 AUTO_INCREMENT `member`
--
ALTER TABLE `member`
  MODIFY `member_seq` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表 AUTO_INCREMENT `mvim`
--
ALTER TABLE `mvim`
  MODIFY `mvim_seq` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- 使用資料表 AUTO_INCREMENT `title`
--
ALTER TABLE `title`
  MODIFY `title_seq` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
