-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2016-08-16 14:31:30
-- 服务器版本： 5.5.49
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hsdcw`
--

-- --------------------------------------------------------

--
-- 表的结构 `hsdcw_comment`
--

CREATE TABLE IF NOT EXISTS `hsdcw_comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `arcticle_id` int(11) NOT NULL COMMENT '文章id',
  `username` varchar(20) NOT NULL COMMENT '评论者',
  `head` varchar(100) NOT NULL COMMENT '评论者头像',
  `content` tinytext NOT NULL COMMENT '评论内容',
  `time` int(11) NOT NULL COMMENT '评论时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='评论新闻表' AUTO_INCREMENT=34 ;

--
-- 转存表中的数据 `hsdcw_comment`
--

INSERT INTO `hsdcw_comment` (`id`, `arcticle_id`, `username`, `head`, `content`, `time`) VALUES
(1, 12, 'aa', '', '0', 0),
(2, 12, 'aa', '', '0', 1464538951),
(3, 9, 'aa', '', '0', 1464539082),
(4, 9, 'aa', '', '0', 1464539104),
(5, 9, 'aa', '', 'sssddss', 1464539227),
(6, 9, 'aa', '', 'sssddsssa', 1464539260),
(7, 9, 'aa', '', 'sssddsssax', 1464539314),
(8, 17, 'aa', '', '陈楚生', 1464540374),
(9, 13, 'aa', '', 'hhh', 1464612532),
(10, 17, 'aa', '', '股市怎么样', 1464621393),
(11, 17, 'aa', '', '股市怎么样', 1464621396),
(12, 17, 'aa', '', '是吗啊', 1464622450),
(13, 17, 'aa', '', '光辉岁月', 1464622515),
(14, 17, 'aa', '', '花满楼', 1464622717),
(15, 17, 'aa', '', '人名币贬值', 1464835366),
(16, 17, 'aa', '', '北京故宫', 1464847316),
(17, 15, 'aa', '', '哈哈', 1464851849),
(18, 17, 'aa', '', '123', 1465011049),
(19, 17, 'aa', '', 'nbbn', 1465011071),
(20, 9, 'aa', '', 'aa', 1465902335),
(21, 9, 'aa', '', 'dddd', 1465902347),
(22, 9, '蓝宝石', '', 'ddd', 1465902391),
(23, 17, '蓝宝石', '', 'fgfg', 1465903404),
(24, 17, '蓝宝石', '', 'fgfg', 1465903407),
(25, 17, '蓝宝石', '', 'fgfg', 1465903408),
(26, 17, '蓝宝石', '', 'fgfg', 1465903408),
(27, 17, '蓝宝石', '', 'fgfg', 1465903410),
(28, 17, 'aa', '', 'gg', 1465908976),
(29, 16, 'aa', '', 'gg', 1466070733),
(30, 15, 'aa', '', '支付成功后跳转的页', 1466077221),
(31, 15, 'aa', '', '支付成功后跳转的页', 1466077225),
(32, 15, 'aa', '', '支付成功后跳转的页', 1466077226),
(33, 15, '蓝宝石', '', '支付成功后跳转的页', 1466077269);

-- --------------------------------------------------------

--
-- 表的结构 `hsdcw_diqu`
--

CREATE TABLE IF NOT EXISTS `hsdcw_diqu` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `pid` int(11) NOT NULL,
  `name` varchar(12) NOT NULL,
  `time` int(10) NOT NULL,
  `display` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='地区分类表' AUTO_INCREMENT=24 ;

--
-- 转存表中的数据 `hsdcw_diqu`
--

INSERT INTO `hsdcw_diqu` (`id`, `pid`, `name`, `time`, `display`) VALUES
(1, 0, '黄石', 0, 0),
(2, 0, '大冶', 0, 0),
(3, 0, '阳新', 0, 0),
(4, 0, '武汉', 0, 0),
(5, 1, '黄石港', 0, 0),
(6, 1, '西塞山', 0, 0),
(7, 1, '花湖', 0, 0),
(8, 1, '团城山', 0, 0),
(9, 1, '下陆', 0, 0),
(10, 1, '铁山', 0, 0),
(11, 2, '市区', 0, 0),
(12, 2, '其他', 0, 0),
(13, 3, '市区', 0, 0),
(14, 3, '其他', 0, 0),
(15, 4, '洪山区', 0, 0),
(16, 4, '武昌区', 0, 0),
(17, 4, '江夏区', 0, 0),
(18, 4, '硚口区', 0, 0),
(19, 4, '汉阳区', 0, 0),
(20, 4, '青山区', 0, 0),
(21, 4, '江岸区', 0, 0),
(22, 4, '东西湖区', 0, 0),
(23, 4, '东湖高新区', 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `hsdcw_house`
--

CREATE TABLE IF NOT EXISTS `hsdcw_house` (
  `gid` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '商品主键',
  `shopid` smallint(5) unsigned NOT NULL,
  `cid` smallint(5) unsigned NOT NULL,
  `lid` smallint(5) unsigned NOT NULL,
  `main_title` varchar(30) NOT NULL DEFAULT '' COMMENT '商品主标题',
  `sub_title` varchar(255) NOT NULL DEFAULT '' COMMENT '商品副标题',
  `price` int(7) NOT NULL DEFAULT '0' COMMENT '商品价格',
  `old_price` decimal(7,1) NOT NULL DEFAULT '0.0' COMMENT '原价',
  `mianji` int(10) unsigned NOT NULL COMMENT '房子面积',
  `huxing` smallint(5) unsigned NOT NULL COMMENT '户型',
  `buy` smallint(6) NOT NULL DEFAULT '0' COMMENT '购买人数',
  `goods_img` varchar(60) NOT NULL COMMENT '商品图',
  `end_time` int(10) unsigned NOT NULL COMMENT '下架时间',
  `begin_time` int(10) unsigned NOT NULL COMMENT '上架时间',
  `display` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT '是否展示',
  PRIMARY KEY (`gid`),
  UNIQUE KEY `gid` (`gid`),
  KEY `fk_group_goods_group_shop_idx` (`shopid`),
  KEY `fk_group_goods_group_category1_idx` (`cid`),
  KEY `fk_group_goods_group_locality1_idx` (`lid`),
  KEY `gid_2` (`gid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='房产栏目商品表' AUTO_INCREMENT=94 ;

--
-- 转存表中的数据 `hsdcw_house`
--

INSERT INTO `hsdcw_house` (`gid`, `shopid`, `cid`, `lid`, `main_title`, `sub_title`, `price`, `old_price`, `mianji`, `huxing`, `buy`, `goods_img`, `end_time`, `begin_time`, `display`) VALUES
(7, 1, 4, 7, '花湖中央美地', '仅售70元！价值100元的鱼婆婆代金券1张，除酒水外全场通用。', 3982, '100.0', 113, 2, 118, '/Upload/20160529/1464490300311636.png', 1379260800, 1378092300, 0),
(8, 1, 10, 9, '下陆中学教师楼', '仅售298元！价值854元的俏江南4人餐。精致时尚、新派川菜，朋友欢聚、家庭欢聚理想之地，俏江南，全球品质，中国气质！', 4500, '854.0', 100, 3, 129, '/Upload/20160529/1464490563813515.jpg', 1379260800, 1378092300, 0),
(82, 1, 4, 11, '中观村楼盘', '仅售50元！价值100元的新辣道鱼火锅代金券1张，健康好美味，开心自己搭配~', 5200, '100.0', 132, 4, 102, '/Upload/20160604/1460104026490_000.jpg', 1379433600, 1378092300, 0),
(83, 1, 4, 12, '【5店通用】口福居', '仅售98元！价值256元的口福居双人餐，美味欢乐与您分享。', 2300, '256.0', 120, 3, 113, 'upload/201308/46121376819393.jpg', 1379260800, 1378092300, 0),
(84, 1, 4, 3, '【5店通用】口福居', '仅售198元！价值504元的口福居4人餐，美味欢乐与您分享。', 6200, '504.0', 130, 4, 124, 'upload/201308/47341376819394.jpg', 1379260800, 1378092300, 0),
(85, 1, 4, 4, '【安贞】鱼婆婆', '仅售78元！价值179元的鱼婆婆2-3人餐，鲜嫩风味，等你来享。', 5000, '179.0', 123, 3, 85, 'upload/201308/12651376819394.jpg', 1379260800, 1378092300, 0),
(86, 1, 4, 5, '西城区', '仅售148元！价值324元的鱼婆婆4-6人餐，鲜嫩风味，等你来享。', 4500, '324.0', 110, 3, 96, 'upload/201308/6291376819394.jpg', 1379260800, 1378092300, 0),
(87, 1, 4, 6, '大兴', '仅售75元！价值100元的口福居代金券1张，全场通用。口口留香，福满心头~', 7300, '100.0', 140, 4, 107, 'upload/201308/17431376819403.jpg', 1379260800, 1378092300, 0),
(90, 1, 10, 9, '六里桥', '仅售198元！价值438元的俏江南双人餐。北京地区7店可用。浪漫时光，甜蜜共享~', 6300, '438.0', 112, 3, 90, '/Upload/20160604/1460082359608_000.jpg', 1379260800, 1378092300, 0),
(91, 0, 0, 7, '四惠2', '四惠', 2800, '200.0', 90, 2, 0, '', 0, 0, 0),
(92, 0, 0, 15, '海悦公馆', '', 4100, '0.0', 123, 3, 0, '/Upload/20160604/1460430167293_000.jpg', 0, 0, 0),
(93, 0, 0, 17, '新明嘉园', '', 3600, '0.0', 231, 4, 0, '/Upload/20160604/1461566378610_000.jpg', 0, 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `hsdcw_news`
--

CREATE TABLE IF NOT EXISTS `hsdcw_news` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cateid` int(11) NOT NULL COMMENT '新闻类别id',
  `title` varchar(100) DEFAULT NULL,
  `keywords` varchar(150) DEFAULT NULL,
  `tag` varchar(40) NOT NULL COMMENT 'tag标签',
  `description` varchar(200) DEFAULT NULL,
  `desc_image` varchar(200) DEFAULT NULL COMMENT '上传的图片',
  `source` varchar(15) NOT NULL,
  `content` mediumtext,
  `display` int(2) NOT NULL,
  `type` int(2) NOT NULL,
  `eye` int(11) NOT NULL COMMENT '浏览器量',
  `time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='新闻表' AUTO_INCREMENT=19 ;

--
-- 转存表中的数据 `hsdcw_news`
--

INSERT INTO `hsdcw_news` (`id`, `cateid`, `title`, `keywords`, `tag`, `description`, `desc_image`, `source`, `content`, `display`, `type`, `eye`, `time`) VALUES
(4, 1, 'das', 'ss', '', 'sad', '/Upload/20160509/573039c04bb27.jpg|', '', '&lt;p&gt;大厦&lt;br/&gt;&lt;/p&gt;', 0, 0, 47, 1462778310),
(5, 0, '发生的', '的的', '', '大厦', NULL, '', '&lt;p&gt;发生的&lt;br/&gt;&lt;/p&gt;', 0, 0, 0, 1462778422),
(6, 2, 'das', 'aa', '', 'aa', NULL, '', '&lt;p&gt;das &lt;br/&gt;&lt;/p&gt;', 0, 0, 31, 1462896000),
(7, 3, 'dd', 'ssss', '', 'sss', '/Upload/20160509/57303bad01e27.jpg|', '', '', 0, 2, 43, 1462896000),
(8, 4, '陈楚生', '陈楚生', '', '有没有人告诉你', '|', '', 'fsdfsdfsdfsd', 1, 2, 0, 1463882092),
(9, 1, 'fdsfsdfdsfsd', 'fsdf', '', 'fdsfsd', NULL, '', '<p>fsdfsdfsd<br/></p>', 0, 3, 28, 1462779233),
(10, 1, 'dsad', 'das', '', 'dsad', '/Upload/20160509/573038f3b6d62.jpg|/Upload/20160509/573038f3b6d62.jpg|', '', '&lt;p&gt;打算打打打&lt;br/&gt;&lt;/p&gt;', 0, 3, 6, 1462779480),
(11, 1, 'PHP 中有个 strip_tags 函数可以方便地去除 HTML 标签。\necho strip_tags(“Hello <bWorld</b”); // 去除 HTML、XM、', 'PHP 中有个 strip_tags 函数可以方便地去除 HTML 标签。\necho strip_tags(“Hello <bWorld</b”); // 去除 HTML、XML 以及 PHP 的标签。\n对于非标准的 HTML 代码也能正确的去除：', '', '大厦', '/Upload/20160509/573038f3b6d62.jpg|/Upload/20160509/573038f3b6d62.jpg|', '', '<p>在没有指明表单类型的时，各浏览器对缺省类型值可能会不一样，在这里IE8缺省值为 type="submit"，所以在IE8中出现了两次提交。<br/><br/>所以将type="submit"<br/><br/>=><br/>type="button"\r\n\r\n        </p>', 0, 3, 25, 1462723200),
(12, 1, '中国教育公平吗？', '中国教育公平吗？', '', '中国教育公平吗？', NULL, '', '中国教育公平吗？', 0, 3, 19, 1463901104),
(13, 2, '2050后中国会发展成什么样子？', '2050后中国会发展成什么样子？', '黄石网', '2050后中国会发展成什么样子？', NULL, '黄石新闻网', '<p>2050后中国会发展成什么样子？</p>', 0, 2, 92, 1463901529),
(14, 4, '2080后中国的人均年收入会超过40万吗？', '2080后中国的人均年收入会超过40万吗？', '', '2080后中国的人均年收入会超过40万吗？', NULL, '', '2080后中国的人均年收入会超过40万吗？', 0, 3, 48, 1463902528),
(15, 2, '我要找个好工作', '我要找个好工作', '外网', '我要找个好工作', '/Upload/20160526/57470688dec98.png|', '黄石网', '<p><span style="color: rgb(85, 85, 85); font-family: &#39;microsoft yahei&#39;; font-size: 15px; line-height: 35px; background-color: rgb(255, 255, 255);"><img src="/Upload/20160529/1464490563813515.jpg" title="1464490563813515.jpg" alt="TPHBL)T@35)S[7)HGPCLM0L.jpg"/></span></p><p><span style="color: rgb(85, 85, 85); font-family: &#39;microsoft yahei&#39;; font-size: 15px; line-height: 35px; background-color: rgb(255, 255, 255);">alipay_config.php    （基本参数配置页面，填写商家的支付宝安全校验码，合作id,支付宝帐号等内容）</span><br style="color: rgb(85, 85, 85); font-family: &#39;microsoft yahei&#39;; font-size: 15px; line-height: 35px; white-space: normal; background-color: rgb(255, 255, 255);"/><span style="color: rgb(85, 85, 85); font-family: &#39;microsoft yahei&#39;; font-size: 15px; line-height: 35px; background-color: rgb(255, 255, 255);">index.php            （提供给商家的接入页面，包含了物流信息，商品信息等内容）</span><br style="color: rgb(85, 85, 85); font-family: &#39;microsoft yahei&#39;; font-size: 15px; line-height: 35px; white-space: normal; background-color: rgb(255, 255, 255);"/><span style="color: rgb(85, 85, 85); font-family: &#39;microsoft yahei&#39;; font-size: 15px; line-height: 35px; background-color: rgb(255, 255, 255);">return_url.php       （跳转页面，买家支付成功后跳转的页面，仅当买家支付成功后跳转一次。）</span><br style="color: rgb(85, 85, 85); font-family: &#39;microsoft yahei&#39;; font-size: 15px; line-height: 35px; white-space: normal; background-color: rgb(255, 255, 255);"/><span style="color: rgb(85, 85, 85); font-family: &#39;microsoft yahei&#39;; font-size: 15px; line-height: 35px; background-color: rgb(255, 255, 255);">notify_url.php       （异步通知，下单成功后，支付宝服务器通知商户服务，并把这笔订单的状态通知给商户，商户根据返回的这笔订单的状态，修改网站订单的状态，比如等待买家付款状态，买家已经付款等待卖家发货.....）</span><br style="color: rgb(85, 85, 85); font-family: &#39;microsoft yahei&#39;; font-size: 15px; line-height: 35px; white-space: normal; background-color: rgb(255, 255, 255);"/><br style="color: rgb(85, 85, 85); font-family: &#39;microsoft yahei&#39;; font-size: 15px; line-height: 35px; white-space: normal; background-color: rgb(255, 255, 255);"/><br style="color: rgb(85, 85, 85); font-family: &#39;microsoft yahei&#39;; font-size: 15px; line-height: 35px; white-space: normal; background-color: rgb(255, 255, 255);"/><span style="color: rgb(85, 85, 85); font-family: &#39;microsoft yahei&#39;; font-size: 15px; line-height: 35px; background-color: rgb(255, 255, 255);">alipay_service.php    支付核心类文件（建议不要修改）</span><br style="color: rgb(85, 85, 85); font-family: &#39;microsoft yahei&#39;; font-size: 15px; line-height: 35px; white-space: normal; background-color: rgb(255, 255, 255);"/><span style="color: rgb(85, 85, 85); font-family: &#39;microsoft yahei&#39;; font-size: 15px; line-height: 35px; background-color: rgb(255, 255, 255);">alipay_notify.php     返回核心类文件（建议不要修改）</span><br style="color: rgb(85, 85, 85); font-family: &#39;microsoft yahei&#39;; font-size: 15px; line-height: 35px; white-space: normal; background-color: rgb(255, 255, 255);"/><br style="color: rgb(85, 85, 85); font-family: &#39;microsoft yahei&#39;; font-size: 15px; line-height: 35px; white-space: normal; background-color: rgb(255, 255, 255);"/><span style="color: rgb(85, 85, 85); font-family: &#39;microsoft yahei&#39;; font-size: 15px; line-height: 35px; background-color: rgb(255, 255, 255);">2、文件内容说明： </span><br style="color: rgb(85, 85, 85); font-family: &#39;microsoft yahei&#39;; font-size: 15px; line-height: 35px; white-space: normal; background-color: rgb(255, 255, 255);"/><span style="color: rgb(85, 85, 85); font-family: &#39;microsoft yahei&#39;; font-size: 15px; line-height: 35px; background-color: rgb(255, 255, 255);">alipay_config.php 文件 </span><br style="color: rgb(85, 85, 85); font-family: &#39;microsoft yahei&#39;; font-size: 15px; line-height: 35px; white-space: normal; background-color: rgb(255, 255, 255);"/><span style="color: rgb(85, 85, 85); font-family: &#39;microsoft yahei&#39;; font-size: 15px; line-height: 35px; background-color: rgb(255, 255, 255);">-- show_url     = ""                     &#39;商户网站的网址。</span><br style="color: rgb(85, 85, 85); font-family: &#39;microsoft yahei&#39;; font-size: 15px; line-height: 35px; white-space: normal; background-color: rgb(255, 255, 255);"/><span style="color: rgb(85, 85, 85); font-family: &#39;microsoft yahei&#39;; font-size: 15px; line-height: 35px; background-color: rgb(255, 255, 255);">-- seller_email    = ""                     &#39;请填写签约支付宝账号，</span><br style="color: rgb(85, 85, 85); font-family: &#39;microsoft yahei&#39;; font-size: 15px; line-height: 35px; white-space: normal; background-color: rgb(255, 255, 255);"/><span style="color: rgb(85, 85, 85); font-family: &#39;microsoft yahei&#39;; font-size: 15px; line-height: 35px; background-color: rgb(255, 255, 255);">-- partner    = ""             &#39;填写签约支付宝账号对应的partnerID，</span><br style="color: rgb(85, 85, 85); font-family: &#39;microsoft yahei&#39;; font-size: 15px; line-height: 35px; white-space: normal; background-color: rgb(255, 255, 255);"/><span style="color: rgb(85, 85, 85); font-family: &#39;microsoft yahei&#39;; font-size: 15px; line-height: 35px; background-color: rgb(255, 255, 255);">-- key        = ""    &#39;填写签约账号对应的安全校验码</span><br style="color: rgb(85, 85, 85); font-family: &#39;microsoft yahei&#39;; font-size: 15px; line-height: 35px; white-space: normal; background-color: rgb(255, 255, 255);"/><span style="color: rgb(85, 85, 85); font-family: &#39;microsoft yahei&#39;; font-size: 15px; line-height: 35px; background-color: rgb(255, 255, 255);">如何获取支付宝帐号，安全校验码和partner </span><br style="color: rgb(85, 85, 85); font-family: &#39;microsoft yahei&#39;; font-size: 15px; line-height: 35px; white-space: normal; background-color: rgb(255, 255, 255);"/><span style="color: rgb(85, 85, 85); font-family: &#39;microsoft yahei&#39;; font-size: 15px; line-height: 35px; background-color: rgb(255, 255, 255);">&#39;登陆 www.alipay.com 后, 点商家服务,可以看到支付宝安全校验码和合作id,导航栏的下面 </span><br style="color: rgb(85, 85, 85); font-family: &#39;microsoft yahei&#39;; font-size: 15px; line-height: 35px; white-space: normal; background-color: rgb(255, 255, 255);"/><span style="color: rgb(85, 85, 85); font-family: &#39;microsoft yahei&#39;; font-size: 15px; line-height: 35px; background-color: rgb(255, 255, 255);">notify_url                   交易过程中服务器通知的页面 要用 http://格式的完整路径，例如     http://www.alipay.com/alipay/notify_url.php 注意文件位置请填写正确</span><br style="color: rgb(85, 85, 85); font-family: &#39;microsoft yahei&#39;; font-size: 15px; line-height: 35px; white-space: normal; background-color: rgb(255, 255, 255);"/><span style="color: rgb(85, 85, 85); font-family: &#39;microsoft yahei&#39;; font-size: 15px; line-height: 35px; background-color: rgb(255, 255, 255);">return_url                   付完款后跳转的页面 要用 http://格式的完整路径, 例如           http://www.alipay.com/alipay/return_url.php 注意文件位置请填写正确。</span><br style="color: rgb(85, 85, 85); font-family: &#39;microsoft yahei&#39;; font-size: 15px; line-height: 35px; white-space: normal; background-color: rgb(255, 255, 255);"/><br style="color: rgb(85, 85, 85); font-family: &#39;microsoft yahei&#39;; font-size: 15px; line-height: 35px; white-space: normal; background-color: rgb(255, 255, 255);"/><span style="color: rgb(85, 85, 85); font-family: &#39;microsoft yahei&#39;; font-size: 15px; line-height: 35px; background-color: rgb(255, 255, 255);">index.php 文件</span><br style="color: rgb(85, 85, 85); font-family: &#39;microsoft yahei&#39;; font-size: 15px; line-height: 35px; white-space: normal; background-color: rgb(255, 255, 255);"/><span style="color: rgb(85, 85, 85); font-family: &#39;microsoft yahei&#39;; font-size: 15px; line-height: 35px; background-color: rgb(255, 255, 255);">按照alipay_config.php文件进行配置，然后修改商品名称，商品描述，外部商家订单号等</span><br style="color: rgb(85, 85, 85); font-family: &#39;microsoft yahei&#39;; font-size: 15px; line-height: 35px; white-space: normal; background-color: rgb(255, 255, 255);"/><span style="color: rgb(85, 85, 85); font-family: &#39;microsoft yahei&#39;; font-size: 15px; line-height: 35px; background-color: rgb(255, 255, 255);">logistics_fee             物流配送费用</span><br style="color: rgb(85, 85, 85); font-family: &#39;microsoft yahei&#39;; font-size: 15px; line-height: 35px; white-space: normal; background-color: rgb(255, 255, 255);"/><span style="color: rgb(85, 85, 85); font-family: &#39;microsoft yahei&#39;; font-size: 15px; line-height: 35px; background-color: rgb(255, 255, 255);">logistics_payment         物流配送费用付款方式：SELLER_PAY(卖家支付)、BUYER_PAY(买家支 付)、                                 BUYER_PAY_AFTER_RECEIVE(货到付款)</span><br style="color: rgb(85, 85, 85); font-family: &#39;microsoft yahei&#39;; font-size: 15px; line-height: 35px; white-space: normal; background-color: rgb(255, 255, 255);"/><span style="color: rgb(85, 85, 85); font-family: &#39;microsoft yahei&#39;; font-size: 15px; line-height: 35px; background-color: rgb(255, 255, 255);">logistics_type            物流配送方式：POST(平邮)、EMS(EMS)、EXPRESS(其他快递)</span><br style="color: rgb(85, 85, 85); font-family: &#39;microsoft yahei&#39;; font-size: 15px; line-height: 35px; white-space: normal; background-color: rgb(255, 255, 255);"/><br style="color: rgb(85, 85, 85); font-family: &#39;microsoft yahei&#39;; font-size: 15px; line-height: 35px; white-space: normal; background-color: rgb(255, 255, 255);"/><span style="color: rgb(85, 85, 85); font-family: &#39;microsoft yahei&#39;; font-size: 15px; line-height: 35px; background-color: rgb(255, 255, 255);">3、return_url 与 notify_url 的区别</span><br style="color: rgb(85, 85, 85); font-family: &#39;microsoft yahei&#39;; font-size: 15px; line-height: 35px; white-space: normal; background-color: rgb(255, 255, 255);"/><span style="color: rgb(85, 85, 85); font-family: &#39;microsoft yahei&#39;; font-size: 15px; line-height: 35px; background-color: rgb(255, 255, 255);">买家付款成功后,如果接口中指定有return_url ,买家付完款后会跳到 return_url所在的页面,这个页面可以展示给客户看,这个页面只有付款成功才会跳转.</span><br style="color: rgb(85, 85, 85); font-family: &#39;microsoft yahei&#39;; font-size: 15px; line-height: 35px; white-space: normal; background-color: rgb(255, 255, 255);"/><br style="color: rgb(85, 85, 85); font-family: &#39;microsoft yahei&#39;; font-size: 15px; line-height: 35px; white-space: normal; background-color: rgb(255, 255, 255);"/><span style="color: rgb(85, 85, 85); font-family: &#39;microsoft yahei&#39;; font-size: 15px; line-height: 35px; background-color: rgb(255, 255, 255);">notify_url: 服务器后台通知,这个页面是程序后台运行的(买家和卖家都看不到),买家付完款后,支付宝会调用notify_url这个页面所在的页面并把相应的参数传 递到这个页面,这个页面根据支付宝传递过来的参数修改网站订单的状态,更新完订单后需要在页面上打印出一个success 给支付宝,如果反馈给支付宝的不是success,支付宝会继续调用这个页面. </span></p>', 0, 3, 75, 1464272524),
(16, 2, '头条新闻', '头条新闻', '头条新闻', '头条新闻', '/Upload/20160526/57470cae5ad56.jpg|', '头条新闻', '<p>头条新闻</p>', 0, 3, 40, 1464274097),
(17, 2, 'FusionCharts入门指南123', 'FusionCharts入门指南', '1222', 'FusionCharts入门指南', '/Upload/20160604/57524c2c1edba.jpg|', '中国新闻网', '<p style="margin-top: 0px; white-space: normal; padding: 0px; border: 0px; font-size: 14px; text-align: justify; word-wrap: break-word; word-break: break-all; text-indent: 2em; color: rgb(68, 68, 68); font-family: &#39;Microsoft YaHei&#39;, 微软雅黑, Helvetica, Arial, &#39;Lucida Grande&#39;, Tahoma, sans-serif; line-height: 22.4px; background-color: rgb(255, 255, 255);">最近在项目中做了一个自定义指标配置的功能，其中的指标展现部分使用的<a title="fusioncharts" href="http://www.fusioncharts.com/" style="margin: 0px; padding: 0px 0px 0px 20px; border: 0px; color: rgb(68, 68, 68); text-decoration: none; background: url(http://www.huqiwen.com/wp-content/themes/Ality/img/link.png) 0% 50% no-repeat;">FusionCharts</a>，这个图表的功能强大，入门简单。</p><h1 style="white-space: normal; margin: 0px; padding: 0px; border: 0px; font-size: 14px; color: rgb(68, 68, 68); font-family: &#39;Microsoft YaHei&#39;, 微软雅黑, Helvetica, Arial, &#39;Lucida Grande&#39;, Tahoma, sans-serif; line-height: 22.4px; background-color: rgb(255, 255, 255);">一、下载相关文件</h1><p style="margin-top: 0px; white-space: normal; padding: 0px; border: 0px; font-size: 14px; text-align: justify; word-wrap: break-word; word-break: break-all; text-indent: 2em; color: rgb(68, 68, 68); font-family: &#39;Microsoft YaHei&#39;, 微软雅黑, Helvetica, Arial, &#39;Lucida Grande&#39;, Tahoma, sans-serif; line-height: 22.4px; background-color: rgb(255, 255, 255);">首先从官方网站下载相关的内容，下载地址：http://www.fusioncharts.com/download/trials/。</p><p style="margin-top: 0px; white-space: normal; padding: 0px; border: 0px; font-size: 14px; text-align: justify; word-wrap: break-word; word-break: break-all; text-indent: 2em; color: rgb(68, 68, 68); font-family: &#39;Microsoft YaHei&#39;, 微软雅黑, Helvetica, Arial, &#39;Lucida Grande&#39;, Tahoma, sans-serif; line-height: 22.4px; background-color: rgb(255, 255, 255);">其中的fusioncharts是一些常用的指标类型，如饼图、折线图、柱状图等等。</p><p style="margin-top: 0px; white-space: normal; padding: 0px; border: 0px; font-size: 14px; text-align: justify; word-wrap: break-word; word-break: break-all; text-indent: 2em; color: rgb(68, 68, 68); font-family: &#39;Microsoft YaHei&#39;, 微软雅黑, Helvetica, Arial, &#39;Lucida Grande&#39;, Tahoma, sans-serif; line-height: 22.4px; background-color: rgb(255, 255, 255);">官方下载地址：http://www.fusioncharts.com/Downloads/Evals/FusionCharts_XT_Evaluation.zip</p><p style="margin-top: 0px; white-space: normal; padding: 0px; border: 0px; font-size: 14px; text-align: justify; word-wrap: break-word; word-break: break-all; text-indent: 2em; color: rgb(68, 68, 68); font-family: &#39;Microsoft YaHei&#39;, 微软雅黑, Helvetica, Arial, &#39;Lucida Grande&#39;, Tahoma, sans-serif; line-height: 22.4px; background-color: rgb(255, 255, 255);">FusionWidgets是一些像仪表盘、温度计、计量仪等类弄的图表。</p><p style="margin-top: 0px; white-space: normal; padding: 0px; border: 0px; font-size: 14px; text-align: justify; word-wrap: break-word; word-break: break-all; text-indent: 2em; color: rgb(68, 68, 68); font-family: &#39;Microsoft YaHei&#39;, 微软雅黑, Helvetica, Arial, &#39;Lucida Grande&#39;, Tahoma, sans-serif; line-height: 22.4px; background-color: rgb(255, 255, 255);">官方下载地址：http://www.fusioncharts.com/Downloads/Evals/FusionWidgets_XT_Trial.zip</p><p style="margin-top: 0px; white-space: normal; padding: 0px; border: 0px; font-size: 14px; text-align: justify; word-wrap: break-word; word-break: break-all; text-indent: 2em; color: rgb(68, 68, 68); font-family: &#39;Microsoft YaHei&#39;, 微软雅黑, Helvetica, Arial, &#39;Lucida Grande&#39;, Tahoma, sans-serif; line-height: 22.4px; background-color: rgb(255, 255, 255);">官方所有下载地址：包括以上和powecharts、map等。</p><p style="margin-top: 0px; white-space: normal; padding: 0px; border: 0px; font-size: 14px; text-align: justify; word-wrap: break-word; word-break: break-all; text-indent: 2em; color: rgb(68, 68, 68); font-family: &#39;Microsoft YaHei&#39;, 微软雅黑, Helvetica, Arial, &#39;Lucida Grande&#39;, Tahoma, sans-serif; line-height: 22.4px; background-color: rgb(255, 255, 255);">http://www.fusioncharts.com/downloads/Evals/FusionChartsSuiteXTEval.zip</p><p style="margin-top: 0px; white-space: normal; padding: 0px; border: 0px; font-size: 14px; text-align: justify; word-wrap: break-word; word-break: break-all; text-indent: 2em; color: rgb(68, 68, 68); font-family: &#39;Microsoft YaHei&#39;, 微软雅黑, Helvetica, Arial, &#39;Lucida Grande&#39;, Tahoma, sans-serif; line-height: 22.4px; background-color: rgb(255, 255, 255);">从官方网站上下载的是试用版，在图表的左上角会有一个Fusioncharts的水印（破解版就是去除这个水印，破解版可以到网上搜索，这里不再提供），如下图所示：</p><h1 style="white-space: normal; margin: 0px; padding: 0px; border: 0px; font-size: 14px; color: rgb(68, 68, 68); font-family: &#39;Microsoft YaHei&#39;, 微软雅黑, Helvetica, Arial, &#39;Lucida Grande&#39;, Tahoma, sans-serif; line-height: 22.4px; background-color: rgb(255, 255, 255);">二、如何学习</h1><p style="margin-top: 0px; white-space: normal; padding: 0px; border: 0px; font-size: 14px; text-align: justify; word-wrap: break-word; word-break: break-all; text-indent: 2em; color: rgb(68, 68, 68); font-family: &#39;Microsoft YaHei&#39;, 微软雅黑, Helvetica, Arial, &#39;Lucida Grande&#39;, Tahoma, sans-serif; line-height: 22.4px; background-color: rgb(255, 255, 255);">破解版是去掉了上面的水印，相对于正式版没有其他的区别，所以代码的书写上是一样的。这里是以3.2版本为例的。</p><p style="margin-top: 0px; white-space: normal; padding: 0px; border: 0px; font-size: 14px; text-align: justify; word-wrap: break-word; word-break: break-all; text-indent: 2em; color: rgb(68, 68, 68); font-family: &#39;Microsoft YaHei&#39;, 微软雅黑, Helvetica, Arial, &#39;Lucida Grande&#39;, Tahoma, sans-serif; line-height: 22.4px; background-color: rgb(255, 255, 255);">将下载的压缩包解压，双击里面的Index.html页面，会打开一个主页，里面显示有文档、示例等，其中的Documentation是文档，里面有详细的说明第一个的xml、json的示例，是学习使用的最佳文档。</p><p style="margin-top: 0px; white-space: normal; padding: 0px; border: 0px; font-size: 14px; text-align: justify; word-wrap: break-word; word-break: break-all; text-indent: 2em; color: rgb(68, 68, 68); font-family: &#39;Microsoft YaHei&#39;, 微软雅黑, Helvetica, Arial, &#39;Lucida Grande&#39;, Tahoma, sans-serif; line-height: 22.4px; background-color: rgb(255, 255, 255);">Chart Gallery算是一个快速导览，里面提供一些效果的展示。</p><p style="margin-top: 0px; white-space: normal; padding: 0px; border: 0px; font-size: 14px; text-align: justify; word-wrap: break-word; word-break: break-all; text-indent: 2em; color: rgb(68, 68, 68); font-family: &#39;Microsoft YaHei&#39;, 微软雅黑, Helvetica, Arial, &#39;Lucida Grande&#39;, Tahoma, sans-serif; line-height: 22.4px; background-color: rgb(255, 255, 255);">Live Deom常用图表的示例。</p><p style="margin-top: 0px; white-space: normal; padding: 0px; border: 0px; font-size: 14px; text-align: justify; word-wrap: break-word; word-break: break-all; text-indent: 2em; color: rgb(68, 68, 68); font-family: &#39;Microsoft YaHei&#39;, 微软雅黑, Helvetica, Arial, &#39;Lucida Grande&#39;, Tahoma, sans-serif; line-height: 22.4px; background-color: rgb(255, 255, 255);">如果在这些里面不方便查找自己想要的，可以点击code目录，code目录下面有具体第一个图表的示例。点击相应的文件夹即可浏览示例代码。<img src="http://localhost/Upload/20160529/1464490946117175.png" title="1464490946117175.png" alt="fusioncharts.png"/></p><h1 style="white-space: normal; margin: 0px; padding: 0px; border: 0px; font-size: 14px; color: rgb(68, 68, 68); font-family: &#39;Microsoft YaHei&#39;, 微软雅黑, Helvetica, Arial, &#39;Lucida Grande&#39;, Tahoma, sans-serif; line-height: 22.4px; background-color: rgb(255, 255, 255);">三、如何编写</h1><p style="margin-top: 0px; white-space: normal; padding: 0px; border: 0px; font-size: 14px; text-align: justify; word-wrap: break-word; word-break: break-all; text-indent: 2em; color: rgb(68, 68, 68); font-family: &#39;Microsoft YaHei&#39;, 微软雅黑, Helvetica, Arial, &#39;Lucida Grande&#39;, Tahoma, sans-serif; line-height: 22.4px; background-color: rgb(255, 255, 255);">1、使用时首先将charts目录复制到自己的项目工程的某一个目录下面。</p><p style="margin-top: 0px; white-space: normal; padding: 0px; border: 0px; font-size: 14px; text-align: justify; word-wrap: break-word; word-break: break-all; text-indent: 2em; color: rgb(68, 68, 68); font-family: &#39;Microsoft YaHei&#39;, 微软雅黑, Helvetica, Arial, &#39;Lucida Grande&#39;, Tahoma, sans-serif; line-height: 22.4px; background-color: rgb(255, 255, 255);">2、在页面中引入jquery的库（可以是charts目录下面的jquery，也可以是外部的）</p><p style="margin-top: 0px; white-space: normal; padding: 0px; border: 0px; font-size: 14px; text-align: justify; word-wrap: break-word; word-break: break-all; text-indent: 2em; color: rgb(68, 68, 68); font-family: &#39;Microsoft YaHei&#39;, 微软雅黑, Helvetica, Arial, &#39;Lucida Grande&#39;, Tahoma, sans-serif; line-height: 22.4px; background-color: rgb(255, 255, 255);">3、引入FusionCharts.js库，这个库的路径是在charts目录下面，也就是图表所在的目录。</p><p style="margin-top: 0px; white-space: normal; padding: 0px; border: 0px; font-size: 14px; text-align: justify; word-wrap: break-word; word-break: break-all; text-indent: 2em; color: rgb(68, 68, 68); font-family: &#39;Microsoft YaHei&#39;, 微软雅黑, Helvetica, Arial, &#39;Lucida Grande&#39;, Tahoma, sans-serif; line-height: 22.4px; background-color: rgb(255, 255, 255);">4、在页面中开始编写代码。示例（计量仪）代码如下：</p><pre style="margin-top: 0px; margin-bottom: 5px; padding: 0px; border: 0px; font-size: 14px; text-align: justify; word-wrap: break-word; word-break: break-all; color: rgb(68, 68, 68); line-height: 22.4px; background-color: rgb(255, 255, 255);"><br/></pre><p style="margin-top: 0px; white-space: normal; padding: 0px; border: 0px; font-size: 14px; text-align: justify; word-wrap: break-word; word-break: break-all; text-indent: 2em; color: rgb(68, 68, 68); font-family: &#39;Microsoft YaHei&#39;, 微软雅黑, Helvetica, Arial, &#39;Lucida Grande&#39;, Tahoma, sans-serif; line-height: 22.4px; background-color: rgb(255, 255, 255);">5、为简单示意，就调了一个相关比较简单的图表，其他图表只是中间的JSON数据有区别，其他地方区别不大。</p><p style="margin-top: 0px; white-space: normal; padding: 0px; border: 0px; font-size: 14px; text-align: justify; word-wrap: break-word; word-break: break-all; text-indent: 2em; color: rgb(68, 68, 68); font-family: &#39;Microsoft YaHei&#39;, 微软雅黑, Helvetica, Arial, &#39;Lucida Grande&#39;, Tahoma, sans-serif; line-height: 22.4px; background-color: rgb(255, 255, 255);">6、逐行解释意思：</p><p style="margin-top: 0px; white-space: normal; padding: 0px; border: 0px; font-size: 14px; text-align: justify; word-wrap: break-word; word-break: break-all; text-indent: 2em; color: rgb(68, 68, 68); font-family: &#39;Microsoft YaHei&#39;, 微软雅黑, Helvetica, Arial, &#39;Lucida Grande&#39;, Tahoma, sans-serif; line-height: 22.4px; background-color: rgb(255, 255, 255);"><strong style="margin: 0px; padding: 0px; border: 0px;">new FusionCharts：</strong>这是新建一个图表对象，其中第一个参数为相对应的图表地址；第二个参数此图表的ID，用于在其他地方调用；第三个参数是宽；第四个是高；第五个为是否debug模式，0为否；第六个参数为是否注册js，也就是js和flash是否可以相互通信调有。一般为1.</p><p style="margin-top: 0px; white-space: normal; padding: 0px; border: 0px; font-size: 14px; text-align: justify; word-wrap: break-word; word-break: break-all; text-indent: 2em; color: rgb(68, 68, 68); font-family: &#39;Microsoft YaHei&#39;, 微软雅黑, Helvetica, Arial, &#39;Lucida Grande&#39;, Tahoma, sans-serif; line-height: 22.4px; background-color: rgb(255, 255, 255);"><strong style="margin: 0px; padding: 0px; border: 0px;">var json</strong>:这里为我自己定义的json对象数据，FusionCharts支持XML和json两种数据格式，我这里是使用的json。</p><p style="margin-top: 0px; white-space: normal; padding: 0px; border: 0px; font-size: 14px; text-align: justify; word-wrap: break-word; word-break: break-all; text-indent: 2em; color: rgb(68, 68, 68); font-family: &#39;Microsoft YaHei&#39;, 微软雅黑, Helvetica, Arial, &#39;Lucida Grande&#39;, Tahoma, sans-serif; line-height: 22.4px; background-color: rgb(255, 255, 255);"><strong style="margin: 0px; padding: 0px; border: 0px;">myChart.setJSONData(json)：</strong>将前面的数据传入到FusionCharts中。这里可以使用xml的，代码为myChart.setXMLData（xml）。如果是远程加载的，为myChart.setXMLUrl（url）。</p><p style="margin-top: 0px; white-space: normal; padding: 0px; border: 0px; font-size: 14px; text-align: justify; word-wrap: break-word; word-break: break-all; text-indent: 2em; color: rgb(68, 68, 68); font-family: &#39;Microsoft YaHei&#39;, 微软雅黑, Helvetica, Arial, &#39;Lucida Grande&#39;, Tahoma, sans-serif; line-height: 22.4px; background-color: rgb(255, 255, 255);"><strong style="margin: 0px; padding: 0px; border: 0px;">myChart.render("chartContainer")：</strong>渲染FusionCharts。里面的参数为html元素的容器ID。也主是在哪一个容器里面显示此图表。</p><p style="margin-top: 0px; white-space: normal; padding: 0px; border: 0px; font-size: 14px; text-align: justify; word-wrap: break-word; word-break: break-all; text-indent: 2em; color: rgb(68, 68, 68); font-family: &#39;Microsoft YaHei&#39;, 微软雅黑, Helvetica, Arial, &#39;Lucida Grande&#39;, Tahoma, sans-serif; line-height: 22.4px; background-color: rgb(255, 255, 255);">这样就完成了图表的显示。不同的图表中在于其中json或者xml数据的区别，和图表的一些元数据，如使用哪一个图表、宽、高等信息。其他一样，具体的可以看文档。</p><p><br/></p>', 0, 1, 299, 1464490959);

-- --------------------------------------------------------

--
-- 表的结构 `hsdcw_news_category`
--

CREATE TABLE IF NOT EXISTS `hsdcw_news_category` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id',
  `pid` int(11) NOT NULL COMMENT '父级pid',
  `newsname` varchar(30) NOT NULL COMMENT '新闻列表标题',
  `display` int(11) NOT NULL COMMENT '是否展示',
  `sort` int(11) NOT NULL COMMENT '排序',
  `time` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `newsname` (`newsname`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='新闻类别表' AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `hsdcw_news_category`
--

INSERT INTO `hsdcw_news_category` (`id`, `pid`, `newsname`, `display`, `sort`, `time`) VALUES
(1, 0, '新闻类', 0, 0, 0),
(2, 1, '黄石要闻', 0, 0, 0),
(3, 1, '黄石民生', 0, 0, 0),
(4, 1, '湖北新闻', 0, 0, 0),
(5, 1, '国内国际', 0, 0, 0),
(6, 1, '文娱体育', 0, 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `hsdcw_user`
--

CREATE TABLE IF NOT EXISTS `hsdcw_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(10) NOT NULL,
  `password` varchar(32) NOT NULL,
  `logintime` int(11) NOT NULL,
  `lock` smallint(2) NOT NULL,
  `type` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `hsdcw_user`
--

INSERT INTO `hsdcw_user` (`id`, `username`, `password`, `logintime`, `lock`, `type`) VALUES
(1, 'a@qq.com', '202cb962ac59075b964b07152d234b70', 0, 0, 0),
(2, 'b@qq.com', '202cb962ac59075b964b07152d234b70', 0, 0, 1);

-- --------------------------------------------------------

--
-- 表的结构 `hsdcw_vipuser`
--

CREATE TABLE IF NOT EXISTS `hsdcw_vipuser` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `username` varchar(15) NOT NULL COMMENT '用户名',
  `password` int(32) NOT NULL COMMENT '密码',
  `time` int(11) NOT NULL COMMENT '登录时间',
  `lock` tinyint(2) NOT NULL COMMENT '是否锁定',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='会员注册登记表' AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `hsdcw_vipuser`
--

INSERT INTO `hsdcw_vipuser` (`id`, `username`, `password`, `time`, `lock`) VALUES
(1, 'aa', 123, 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
