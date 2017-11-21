-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2017-09-21 17:52:10
-- 服务器版本： 5.7.18-0ubuntu0.16.04.1
-- PHP Version: 7.0.19-1+deb.sury.org~xenial+2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doraDB`
--

-- --------------------------------------------------------

--
-- 表的结构 `donator_info`
--

CREATE TABLE `donator_info` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `graduate_year` int(4) NOT NULL,
  `mail` varchar(30) NOT NULL,
  `tel` varchar(30) NOT NULL,
  `donate_number` int(10) NOT NULL,
  `timestamp` int(20) NOT NULL,
  `feedback` tinyint(1) NOT NULL DEFAULT '0',
  `keep_secert` int(1) NOT NULL DEFAULT '0' COMMENT '是否公开'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `donator_info`
--

INSERT INTO `donator_info` (`id`, `name`, `graduate_year`, `mail`, `tel`, `donate_number`, `timestamp`, `feedback`, `keep_secert`) VALUES
(1, '毛帅', 2013, 'falsemaoshuai@xiyouant.org', '2147483647', 500, 1476977995, 1, 0),
(2, '周从军', 2015, 'falsezhoucongjun@xiyouant.org', '2147483647', 300, 1476978057, 1, 0),
(11, '瞿祥轩', 2012, 'quxiangxuan@xiyouant.org', '13407175819', 500, 1477393915, 1, 1),
(13, '王凯', 2016, 'wangkai8a8@163.com', '13299128270', 60, 1478095809, 1, 0),
(14, '陈雍', 2014, 'chishubiao@qq.com', '18710829206', 0, 1478095849, 0, 0),
(18, '陈涛德', 2016, '15594648695@163.com', '15594648695', 60, 1478096375, 1, 1),
(19, '张鹏波', 2014, '778590502@qq.com', '18589071181', 200, 1478096810, 1, 0),
(23, '赵双', 2016, '523830742@qq.com', '13572959469', 0, 1478153929, 0, 0),
(24, '刘平', 2013, 'liupin0906@163.com', '18516126413', 333, 1478154339, 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donator_info`
--
ALTER TABLE `donator_info`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `donator_info`
--
ALTER TABLE `donator_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
