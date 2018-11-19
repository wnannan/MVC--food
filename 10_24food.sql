-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2018-11-19 09:14:13
-- 服务器版本： 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `10.24food`
--

-- --------------------------------------------------------

--
-- 表的结构 `category`
--

CREATE TABLE `category` (
  `cid` int(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `pid` int(10) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `category`
--

INSERT INTO `category` (`cid`, `title`, `thumb`, `pid`) VALUES
(1, '美食', '/10.24food/uploadimg/2018-11-05/1541402301314.webp', 0),
(2, '商超便利', '/10.24food/uploadimg/2018-11-05/1541402315236.webp', 0),
(3, '午餐', '/10.24food/uploadimg/2018-11-05/1541402331686.webp', 0),
(4, '水果', '/10.24food/uploadimg/2018-11-05/154140234423.webp', 0),
(5, '医药健康', '/10.24food/uploadimg/2018-11-05/1541402354284.webp', 0),
(6, '浪漫鲜花', '/10.24food/uploadimg/2018-11-05/1541402366112.webp', 0),
(7, '厨房生鲜', '/10.24food/uploadimg/2018-11-05/1541402377245.webp', 0),
(8, '地方小吃', '/10.24food/uploadimg/2018-11-05/1541402386167.webp', 0),
(9, '地方菜系', '/10.24food/uploadimg/2018-11-05/1541402266737.webp', 0),
(10, '简餐便当', '/10.24food/uploadimg/2018-10-31/154097243512.webp', 1),
(11, '面食粥点', '/10.24food/uploadimg/2018-10-31/1540972465787.webp', 1),
(12, '小吃炸串', '/10.24food/uploadimg/2018-11-01/154103301923.webp', 1),
(13, '香锅冒菜', '/10.24food/uploadimg/2018-11-01/1541033010702.webp', 1),
(14, '地方菜系', '/10.24food/uploadimg/2018-11-01/1541033002328.webp', 1),
(15, '汉堡披萨', '/10.24food/uploadimg/2018-11-01/1541032994798.webp', 1);

-- --------------------------------------------------------

--
-- 表的结构 `goods`
--

CREATE TABLE `goods` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `des` varchar(255) NOT NULL,
  `discount` varchar(10) NOT NULL,
  `price` varchar(10) NOT NULL,
  `count` int(10) NOT NULL DEFAULT '0',
  `gid` int(10) NOT NULL,
  `sid` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `goods`
--

INSERT INTO `goods` (`id`, `title`, `thumb`, `des`, `discount`, `price`, `count`, `gid`, `sid`) VALUES
(1, '麻酱凉皮', '/10.24food/uploadimg/2018-11-10/1541826785317.webp', '', '8.99', '8.99', 0, 34, 14),
(2, '麻辣凉皮', '/10.24food/uploadimg/2018-11-10/1541826835602.webp', '', '8.99', '8.99', 0, 34, 14),
(3, '麻酱凉面', '/10.24food/uploadimg/2018-11-10/1541826886535.webp', '', '8.99', '8.99', 0, 34, 14),
(4, '手抓饼+时蔬+鸡柳', '/10.24food/uploadimg/2018-11-10/1541826958560.webp', '', '12', '12', 0, 35, 14),
(5, '手抓饼+时蔬+烤肠', '/10.24food/uploadimg/2018-11-10/154182699132.webp', '', '11', '11', 0, 35, 14),
(6, '手抓饼+时蔬+火腿', '/10.24food/uploadimg/2018-11-10/1541827018546.webp', '', '9', '9', 0, 35, 14),
(7, '手抓饼+时蔬', '/10.24food/uploadimg/2018-11-10/1541827040129.webp', '', '6', '6', 0, 35, 14),
(8, '土豆丝卷饼', '/10.24food/uploadimg/2018-11-10/1541827085669.webp', '', '5', '5', 0, 35, 14),
(9, '手抓饼+时蔬+鸡排', '/10.24food/uploadimg/2018-11-10/1541827144329.webp', '', '12', '12', 0, 36, 14),
(10, '荷叶馍+鸡柳', '/10.24food/uploadimg/2018-11-10/1541827201439.webp', '', '7', '7', 0, 37, 14),
(11, '荷叶馍+鸡排', '/10.24food/uploadimg/2018-11-10/1541827226361.webp', '', '7', '7', 0, 37, 14),
(12, '荷叶馍+鸡蛋+火腿', '/10.24food/uploadimg/2018-11-10/1541827252439.webp', '', '7', '7', 0, 37, 14),
(13, '荷叶馍+鸡蛋', '/10.24food/uploadimg/2018-11-10/1541827275438.webp', '', '4.5', '4.5', 0, 37, 14),
(14, '沙拉烤肉拌饭+饮料', '/10.24food/uploadimg/2018-11-10/1541827535700.webp', '', '16.8', '16.8', 0, 38, 14),
(15, '千岛烤肉拌饭+饮料', '/10.24food/uploadimg/2018-11-10/1541827563353.webp', '', '16.8', '16.8', 0, 38, 14),
(16, '千岛烤肉拌饭', '/10.24food/uploadimg/2018-11-10/1541827586430.webp', '', '14.8', '14.8', 0, 38, 14),
(17, '番茄烤肉拌饭', '/10.24food/uploadimg/2018-11-10/1541827650558.webp', '', '14.8', '14.8', 0, 38, 14),
(18, '沙拉烤肉拌饭+煎蛋+烤肠+饮料', '/10.24food/uploadimg/2018-11-10/1541827826212.webp', '', '15', '15', 0, 39, 14),
(19, '千岛烤肉拌饭+煎蛋+烤肠+饮料', '/10.24food/uploadimg/2018-11-10/1541827906819.webp', '', '16.1', '16.1', 0, 39, 14),
(20, '番茄烤肉拌饭+煎蛋+烤肠+饮料', '/10.24food/uploadimg/2018-11-10/1541827939293.webp', '', '16', '16', 0, 39, 14),
(21, '黑胡椒烤肉拌饭+煎蛋+烤肠+饮料', '/10.24food/uploadimg/2018-11-10/1541827954607.webp', '', '16', '16', 0, 39, 14),
(22, '孜然烤肉拌饭+煎蛋+烤肠+饮料', '/10.24food/uploadimg/2018-11-10/154182799785.webp', '', '16', '16', 0, 39, 14),
(23, '黑胡椒烤肉拌饭+烤肠+饮料', '/10.24food/uploadimg/2018-11-10/1541828249818.webp', '', '21', '21', 0, 40, 14),
(24, '番茄烤肉拌饭+烤肠+饮料', '/10.24food/uploadimg/2018-11-10/1541828322979.webp', '', '21', '21', 0, 40, 14),
(25, '沙拉烤肉拌饭+烤肠+饮料', '/10.24food/uploadimg/2018-11-10/1541828345972.webp', '', '21', '21', 0, 40, 14),
(26, '孜然烤肉拌饭+烤肠+饮料', '/10.24food/uploadimg/2018-11-10/1541828357937.webp', '', '21', '21', 0, 40, 14),
(29, '牛肉烧麦（4只装）', '/10.24food/uploadimg/2018-11-15/1542267368244.webp', '月售94份', '10.8', '10.8', 0, 44, 3),
(30, '鲜肉白菜锅贴（5只装）', '/10.24food/uploadimg/2018-11-15/1542267848991.webp', '选用新鲜猪肉和白菜做馅 主要原料: 白菜, 面粉, 猪肉', '12.8', '12.8', 0, 44, 3),
(31, '素三鲜锅贴（每份5个）', '/10.24food/uploadimg/2018-11-15/1542267932376.webp', ' 主要原料: 鸡蛋, 韭菜, 面粉', '11.8', '11.8', 0, 44, 3),
(32, '清火白粥', '/10.24food/uploadimg/2018-11-15/1542268259248.webp', '月售75份', '6.8', '6.8', 0, 48, 3),
(33, '青菜粥', '/10.24food/uploadimg/2018-11-15/1542268321182.webp', '好评率100%', '10', '10', 0, 48, 3),
(34, '青菜香菇粥', '/10.24food/uploadimg/2018-11-15/1542268369541.webp', '好评率100%', '15', '15', 0, 48, 3),
(35, '南瓜粥', '/10.24food/uploadimg/2018-11-15/1542268539284.webp', '营养成分/每100g:能量(kcal)71，蛋白质(g)1.5,脂肪(g)0.2,碳水化合物(g)15.9,钠(mg)0.8', '13', '13', 0, 47, 3);

-- --------------------------------------------------------

--
-- 表的结构 `goodstype`
--

CREATE TABLE `goodstype` (
  `gid` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `id` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `goodstype`
--

INSERT INTO `goodstype` (`gid`, `title`, `id`) VALUES
(48, '全素粥类Plain congee', 3),
(47, '曼玲甜粥Sweet congee', 3),
(46, '营养肉粥meat congee', 3),
(45, '曼玲特色specialty', 3),
(44, '曼玲新品New product', 3),
(10, '和合盖饭', 1),
(11, '和合套餐', 1),
(12, '米菜分开', 1),
(13, '暖心晚餐', 1),
(14, '小食小菜', 1),
(15, '饮品汤羹', 1),
(17, '汉堡炸鸡', 12),
(18, '米饭', 12),
(19, '配餐小吃', 12),
(20, '热饮', 12),
(21, '冷饮', 12),
(22, '套餐', 12),
(23, '调料', 12),
(24, '顾客须知', 12),
(25, '多人订餐教程', 13),
(26, '漏选菜品处理', 13),
(27, '新鲜时蔬', 13),
(28, '精品丸子', 13),
(29, '健康吃肉', 13),
(30, '轻松主食', 13),
(31, '养颜甜品', 13),
(32, '饮料', 13),
(33, '关于青蔬捞烫', 13),
(34, '凉皮', 14),
(35, '进店必买', 14),
(36, '手抓饼', 14),
(37, '荷叶馍', 14),
(38, '烤肉拌饭', 14),
(39, '烤肉拌饭煎蛋套餐', 14),
(40, '烤肉饭套餐', 14),
(41, '饮料', 14),
(49, '海鲜粥类Seafood congee', 3),
(50, '曼玲蒸品Steamed products', 3),
(51, '特色点心dim sum', 3),
(52, '佐餐小菜pickles', 3),
(53, '料包', 3),
(54, '精致套餐Package', 3);

-- --------------------------------------------------------

--
-- 表的结构 `manage`
--

CREATE TABLE `manage` (
  `id` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `thumb` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `manage`
--

INSERT INTO `manage` (`id`, `username`, `password`, `thumb`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', '/10.24food/static/images/14.jpg');

-- --------------------------------------------------------

--
-- 表的结构 `orderextra`
--

CREATE TABLE `orderextra` (
  `rid` int(10) NOT NULL,
  `count` int(10) NOT NULL,
  `discount` int(10) NOT NULL,
  `numbers` int(10) NOT NULL,
  `des` varchar(255) NOT NULL,
  `price` int(10) NOT NULL,
  `gid` int(10) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `sid` int(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `id` int(10) NOT NULL,
  `oid` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `orderextra`
--

INSERT INTO `orderextra` (`rid`, `count`, `discount`, `numbers`, `des`, `price`, `gid`, `thumb`, `sid`, `title`, `id`, `oid`) VALUES
(1, 0, 9, 3, '', 9, 34, '/10.24food/uploadimg/2018-11-10/1541826785317.webp', 14, '麻酱凉皮', 1, 1),
(2, 0, 7, 5, '月售75份', 7, 48, '/10.24food/uploadimg/2018-11-15/1542268259248.webp', 3, '清火白粥', 32, 2),
(3, 0, 10, 4, '好评率100%', 10, 48, '/10.24food/uploadimg/2018-11-15/1542268321182.webp', 3, '青菜粥', 33, 3),
(4, 0, 9, 1, '', 9, 34, '/10.24food/uploadimg/2018-11-10/1541826835602.webp', 14, '麻辣凉皮', 2, 4),
(5, 0, 9, 1, '', 9, 34, '/10.24food/uploadimg/2018-11-10/1541826886535.webp', 14, '麻酱凉面', 3, 4),
(6, 0, 12, 1, '', 12, 35, '/10.24food/uploadimg/2018-11-10/1541826958560.webp', 14, '手抓饼+时蔬+鸡柳', 4, 4),
(7, 0, 7, 4, '月售75份', 7, 48, '/10.24food/uploadimg/2018-11-15/1542268259248.webp', 3, '清火白粥', 32, 5),
(8, 0, 5, 4, '', 5, 35, '/10.24food/uploadimg/2018-11-10/1541827085669.webp', 14, '土豆丝卷饼', 8, 6),
(9, 0, 12, 1, '', 12, 36, '/10.24food/uploadimg/2018-11-10/1541827144329.webp', 14, '手抓饼+时蔬+鸡排', 9, 6),
(10, 0, 12, 3, '', 12, 35, '/10.24food/uploadimg/2018-11-10/1541826958560.webp', 14, '手抓饼+时蔬+鸡柳', 4, 7),
(11, 0, 9, 2, '', 9, 34, '/10.24food/uploadimg/2018-11-10/1541826785317.webp', 14, '麻酱凉皮', 1, 8),
(12, 0, 12, 1, '', 12, 35, '/10.24food/uploadimg/2018-11-10/1541826958560.webp', 14, '手抓饼+时蔬+鸡柳', 4, 8),
(13, 0, 21, 1, '', 21, 40, '/10.24food/uploadimg/2018-11-10/1541828249818.webp', 14, '黑胡椒烤肉拌饭+烤肠+饮料', 23, 9),
(14, 0, 21, 1, '', 21, 40, '/10.24food/uploadimg/2018-11-10/1541828322979.webp', 14, '番茄烤肉拌饭+烤肠+饮料', 24, 9),
(15, 0, 21, 1, '', 21, 40, '/10.24food/uploadimg/2018-11-10/1541828345972.webp', 14, '沙拉烤肉拌饭+烤肠+饮料', 25, 9),
(16, 0, 9, 4, '', 9, 34, '/10.24food/uploadimg/2018-11-10/1541826785317.webp', 14, '麻酱凉皮', 1, 10),
(17, 0, 9, 1, '', 9, 34, '/10.24food/uploadimg/2018-11-10/1541826835602.webp', 14, '麻辣凉皮', 2, 10),
(18, 0, 9, 1, '', 9, 34, '/10.24food/uploadimg/2018-11-10/1541826886535.webp', 14, '麻酱凉面', 3, 10),
(19, 0, 12, 1, '', 12, 35, '/10.24food/uploadimg/2018-11-10/1541826958560.webp', 14, '手抓饼+时蔬+鸡柳', 4, 10);

-- --------------------------------------------------------

--
-- 表的结构 `orders`
--

CREATE TABLE `orders` (
  `oid` int(10) NOT NULL,
  `discount` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `numbers` int(10) NOT NULL,
  `fee` int(10) NOT NULL,
  `uid` int(10) NOT NULL,
  `ctime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(10) DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `orders`
--

INSERT INTO `orders` (`oid`, `discount`, `total`, `numbers`, `fee`, `uid`, `ctime`, `status`) VALUES
(1, '24.27', '26.97', 3, 3, 1, '2018-11-15 09:42:42', 1),
(2, '30.60', '34.00', 5, 3, 1, '2018-11-15 10:24:52', 1),
(3, '36.00', '40.00', 4, 3, 1, '2018-11-15 10:25:23', 1),
(4, '26.98', '29.98', 3, 3, 1, '2018-11-15 10:26:15', 1),
(5, '24.48', '27.20', 4, 3, 1, '2018-11-15 10:26:30', 1),
(6, '28.80', '32.00', 5, 3, 1, '2018-11-15 10:26:50', 1),
(7, '32.40', '36.00', 3, 3, 1, '2018-11-15 10:50:30', 1),
(8, '26.98', '29.98', 3, 3, 1, '2018-11-15 10:52:44', 1),
(9, '56.70', '63.00', 3, 3, 1, '2018-11-16 01:46:09', 1),
(10, '59.35', '65.94', 7, 3, 1, '2018-11-16 07:00:45', 1);

-- --------------------------------------------------------

--
-- 表的结构 `shop`
--

CREATE TABLE `shop` (
  `id` int(10) UNSIGNED NOT NULL,
  `shopname` varchar(255) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `sale` int(10) NOT NULL DEFAULT '0',
  `score` int(10) NOT NULL DEFAULT '5',
  `notice` varchar(255) NOT NULL,
  `fee` varchar(255) NOT NULL,
  `views` varchar(255) NOT NULL,
  `slogan` varchar(255) NOT NULL,
  `stype` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `cid` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `shop`
--

INSERT INTO `shop` (`id`, `shopname`, `thumb`, `sale`, `score`, `notice`, `fee`, `views`, `slogan`, `stype`, `phone`, `cid`) VALUES
(1, '和合谷（国贸店）', '/10.24food/uploadimg/2018-11-02/1541148222937.webp', 0, 3, '为保证出餐的及时性，20份以上，请提前打电话沟通', '配送费￥2', '/10.24food/uploadimg/2018-11-02/1541148231987.webp,/10.24food/uploadimg/2018-11-02/154114823221.webp,/10.24food/uploadimg/2018-11-02/1541148231247.webp', '', '简餐', '7975599', 10),
(3, '曼玲粥店(新民店)', '/10.24food/uploadimg/2018-11-02/15411500992.webp', 0, 5, '公告：因爱而生，专注做粥，只为给你更好的，我们一直在用心！', '配送费￥4', '/10.24food/uploadimg/2018-11-02/1541150102393.webp,/10.24food/uploadimg/2018-11-02/1541150102180.webp', '', '包子粥店, 简餐', '15735198889', 11),
(14, '卷饼大王', '/10.24food/uploadimg/2018-11-10/1541822327172.webp', 0, 5, '公告：欢迎光临，用餐高峰期请提前下单，谢谢。', '配送费￥4', '/10.24food/uploadimg/2018-11-10/1541822334710.webp,/10.24food/uploadimg/2018-11-10/1541822334301.webp', '', '地方小吃', '18003510681', 12),
(13, '青蔬捞烫(清控店)', '/10.24food/uploadimg/2018-11-10/154181976454.webp', 0, 5, '公告：青蔬捞烫秉持食物本来的味道，一切原汁原味，故本店没有麻酱、麻油、蒜泥等调味料。请谅解。', '配送费￥1.5', '/10.24food/uploadimg/2018-11-10/1541819783457.webp,/10.24food/uploadimg/2018-11-10/1541819783245.webp', '青蔬捞烫 找回自然的你，让健康游刃有余！', '麻辣烫, 简餐', '19903433887', 10),
(12, '迈德思客炸鸡汉堡(太原总店)', '/10.24food/uploadimg/2018-11-10/1541819339138.webp', 0, 5, '公告：欢迎光临，用餐高峰期请提前下单，谢谢。', '配送费￥1.5', '/10.24food/uploadimg/2018-11-10/1541819345393.webp,/10.24food/uploadimg/2018-11-10/1541819345527.webp', '', '汉堡, 炸鸡炸串', '18536841271', 15);

-- --------------------------------------------------------

--
-- 表的结构 `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `thumb` varchar(255) DEFAULT '/10.24food/static/images/login.png',
  `password` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `username` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `users`
--

INSERT INTO `users` (`id`, `thumb`, `password`, `phone`, `username`) VALUES
(1, '/10.24food/static/images/login.png', '111111', '12311112222', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `goodstype`
--
ALTER TABLE `goodstype`
  ADD PRIMARY KEY (`gid`);

--
-- Indexes for table `manage`
--
ALTER TABLE `manage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderextra`
--
ALTER TABLE `orderextra`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`oid`);

--
-- Indexes for table `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `category`
--
ALTER TABLE `category`
  MODIFY `cid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- 使用表AUTO_INCREMENT `goods`
--
ALTER TABLE `goods`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- 使用表AUTO_INCREMENT `goodstype`
--
ALTER TABLE `goodstype`
  MODIFY `gid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
--
-- 使用表AUTO_INCREMENT `manage`
--
ALTER TABLE `manage`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- 使用表AUTO_INCREMENT `orderextra`
--
ALTER TABLE `orderextra`
  MODIFY `rid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- 使用表AUTO_INCREMENT `orders`
--
ALTER TABLE `orders`
  MODIFY `oid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- 使用表AUTO_INCREMENT `shop`
--
ALTER TABLE `shop`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- 使用表AUTO_INCREMENT `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
