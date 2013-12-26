-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2013 年 12 月 26 日 18:15
-- 服务器版本: 5.5.34
-- PHP 版本: 5.3.10-1ubuntu3.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `paymentlib`
--

-- --------------------------------------------------------

--
-- 表的结构 `activekeyinfor`
--

CREATE TABLE IF NOT EXISTS `activekeyinfor` (
  `keyid` varchar(20) COLLATE utf8_bin NOT NULL,
  `creatdata` date NOT NULL,
  `productid` varchar(20) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`keyid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- 表的结构 `ad_data`
--

CREATE TABLE IF NOT EXISTS `ad_data` (
  `userid` varchar(20) COLLATE utf8_bin NOT NULL,
  `password` varchar(20) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- 转存表中的数据 `ad_data`
--

INSERT INTO `ad_data` (`userid`, `password`) VALUES
('dxy', 'dxy123123');

-- --------------------------------------------------------

--
-- 表的结构 `ad_promocode`
--

CREATE TABLE IF NOT EXISTS `ad_promocode` (
  `promoid` varchar(20) COLLATE utf8_bin NOT NULL,
  `returncode` varchar(20) COLLATE utf8_bin NOT NULL,
  `phonenum` varchar(20) COLLATE utf8_bin NOT NULL,
  `success` varchar(4) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`promoid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- 转存表中的数据 `ad_promocode`
--

INSERT INTO `ad_promocode` (`promoid`, `returncode`, `phonenum`, `success`) VALUES
('faljejfoa', 'owgaoj', 'jwgoif', '5'),
('214231', '412341', '34212431', '5'),
('wafwga', 'awegaeg', 'afewgawg', '5'),
('123123', '123', '123123', '5'),
('123', '123', '123', '5'),
('1234', '123', '123', '5'),
('12345', '0020', '1231', '5'),
('1231231', '123', '123', '5');

-- --------------------------------------------------------

--
-- 表的结构 `orderinfor`
--

CREATE TABLE IF NOT EXISTS `orderinfor` (
  `orderid` varchar(20) COLLATE utf8_bin NOT NULL,
  `productid` varchar(20) COLLATE utf8_bin NOT NULL,
  `orderprice` int(10) NOT NULL,
  `ordercontent` varchar(30) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`orderid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- 表的结构 `paylist`
--

CREATE TABLE IF NOT EXISTS `paylist` (
  `userid` varchar(20) COLLATE utf8_bin NOT NULL,
  `lantype` varchar(10) COLLATE utf8_bin NOT NULL,
  `devicetype` varchar(20) COLLATE utf8_bin NOT NULL,
  `productid` varchar(20) COLLATE utf8_bin NOT NULL,
  `orderid` varchar(20) COLLATE utf8_bin NOT NULL,
  `amount` int(11) NOT NULL COMMENT '支付价格',
  `success` varchar(3) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`userid`,`productid`,`orderid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- 转存表中的数据 `paylist`
--

INSERT INTO `paylist` (`userid`, `lantype`, `devicetype`, `productid`, `orderid`, `amount`, `success`) VALUES
('user', 'cn', 'phone', '0', 'azThEtmTZsIsaZG', 4, '5'),
('user', 'cn', 'phone', '0', 'KhYJRAYfq1jn52V', 4, '5'),
('user', 'cn', 'phone', '0', '48wiDC9Dg7RLROR', 4, '5'),
('user', 'cn', 'phone', '0', 'O2eaYE2IqMycNTG', 4, '5'),
('user', 'cn', 'phone', '0', 'lgD3bg14Nc9NUnq', 4, '5'),
('user', 'cn', 'phone', '0', 'WiMaqmJaxZuI6gm', 4, '5'),
('user', 'cn', 'phone', '0', 'PvLZDlxgqO64xVy', 4, '5'),
('user', 'cn', 'phone', '0', 'y7NQcRnUiSbbXgk', 4, '5'),
('user', 'cn', 'phone', '0', 'o6ialQCNsk0tgVU', 4, '5'),
('user', 'cn', 'phone', '0', 'WQiAQMSNEKQtmHi', 4, '5'),
('user', 'cn', 'phone', '0', 'NvOW54X30lPiiz2', 4, '5'),
('user', 'cn', 'phone', '0', 'GUhgP3GLdrWNfEc', 4, '5'),
('user', 'cn', 'phone', '0', 'RUIK8vIwUkewahz', 4, '5'),
('user', 'cn', 'phone', '0', '9q4BuaCpqMrqfR6', 4, '5'),
('user', 'cn', 'phone', '0', 'Rsm9uB2OrJJFDAt', 4, '5'),
('user', 'cn', 'phone', '0', 'UhgdQBhWU8dQB0q', 4, '5'),
('user', 'cn', 'phone', '0', 'k7O2SmDLZd4NsEt', 4, '5'),
('user', 'cn', 'phone', '0', 'mfUFmJSB65w5ncZ', 4, '5'),
('user', 'cn', 'phone', '0', 'Anop3YyulxDPpb7', 4, '5'),
('user', 'cn', 'phone', '0', 'yMHMFo5Et4g17Ey', 4, '5');

-- --------------------------------------------------------

--
-- 表的结构 `productinfor`
--

CREATE TABLE IF NOT EXISTS `productinfor` (
  `productid` varchar(20) COLLATE utf8_bin NOT NULL,
  `productdata` varchar(20) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`productid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- 表的结构 `userinfor`
--

CREATE TABLE IF NOT EXISTS `userinfor` (
  `userid` varchar(20) COLLATE utf8_bin NOT NULL,
  `password` varchar(20) COLLATE utf8_bin NOT NULL,
  `usermail` varchar(20) COLLATE utf8_bin NOT NULL,
  `username` varchar(20) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
