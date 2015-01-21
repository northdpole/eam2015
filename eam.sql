-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 21, 2015 at 09:06 PM
-- Server version: 5.5.40-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `eam`
--

-- --------------------------------------------------------

--
-- Table structure for table `Article`
--

CREATE TABLE IF NOT EXISTS `Article` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `content` longtext CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Title` varchar(128) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Article`
--

INSERT INTO `Article` (`id`, `date`, `content`, `Title`) VALUES
(0, '2015-01-01', 'art1', 'foo'),
(1, '2015-01-27', 'asdfasdfasdfadsfasdfasdf', 'bar'),
(100, '2015-01-20', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in laoreet mauris. Nulla facilisi. Phasellus pellentesque accumsan urna vel vestibulum. Nam eu ante et ipsum cursus ullamcorper. Proin tempus leo quam, porta mollis magna fringilla at. Praesent mollis sem eu libero ultricies sodales. Nulla accumsan mattis velit, ac iaculis lacus finibus vel. Morbi placerat tortor at efficitur fermentum. Fusce interdum bibendum velit et lacinia.\r\n\r\nFusce urna tortor, maximus eu fermentum at, finibus nec neque. Sed accumsan convallis odio posuere fermentum. Mauris ultrices magna purus, vel interdum orci finibus et. Integer at elit sit amet eros eleifend scelerisque nec a lectus. Vivamus vestibulum non quam non lobortis. Praesent euismod purus in tincidunt volutpat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aliquam ac massa leo. Aenean ipsum mauris, egestas ac porttitor vitae, tristique quis sapien. Donec vitae est nec ex luctus molestie sit amet sed ante. Nunc elit lacus, laoreet eu nisi vel, suscipit imperdiet massa. Nullam vitae ligula id nulla varius molestie. Donec dictum egestas purus vel vulputate. Sed velit nulla, ultricies sit amet eleifend sit amet, maximus et ipsum.', 'Συντάξεις/Πληροφορίες'),
(101, '2015-01-14', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in laoreet mauris. Nulla facilisi. Phasellus pellentesque accumsan urna vel vestibulum. Nam eu ante et ipsum cursus ullamcorper. Proin tempus leo quam, porta mollis magna fringilla at. Praesent mollis sem eu libero ultricies sodales. Nulla accumsan mattis velit, ac iaculis lacus finibus vel. Morbi placerat tortor at efficitur fermentum. Fusce interdum bibendum velit et lacinia.\r\n\r\nFusce urna tortor, maximus eu fermentum at, finibus nec neque. Sed accumsan convallis odio posuere fermentum. Mauris ultrices magna purus, vel interdum orci finibus et. Integer at elit sit amet eros eleifend scelerisque nec a lectus. Vivamus vestibulum non quam non lobortis. Praesent euismod purus in tincidunt volutpat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aliquam ac massa leo. Aenean ipsum mauris, egestas ac porttitor vitae, tristique quis sapien. Donec vitae est nec ex luctus molestie sit amet sed ante. Nunc elit lacus, laoreet eu nisi vel, suscipit imperdiet massa. Nullam vitae ligula id nulla varius molestie. Donec dictum egestas purus vel vulputate. Sed velit nulla, ultricies sit amet eleifend sit amet, maximus et ipsum.', 'Εισφορές/Πληροφορίες'),
(102, '2015-01-29', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in laoreet mauris. Nulla facilisi. Phasellus pellentesque accumsan urna vel vestibulum. Nam eu ante et ipsum cursus ullamcorper. Proin tempus leo quam, porta mollis magna fringilla at. Praesent mollis sem eu libero ultricies sodales. Nulla accumsan mattis velit, ac iaculis lacus finibus vel. Morbi placerat tortor at efficitur fermentum. Fusce interdum bibendum velit et lacinia.\r\n\r\nFusce urna tortor, maximus eu fermentum at, finibus nec neque. Sed accumsan convallis odio posuere fermentum. Mauris ultrices magna purus, vel interdum orci finibus et. Integer at elit sit amet eros eleifend scelerisque nec a lectus. Vivamus vestibulum non quam non lobortis. Praesent euismod purus in tincidunt volutpat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aliquam ac massa leo. Aenean ipsum mauris, egestas ac porttitor vitae, tristique quis sapien. Donec vitae est nec ex luctus molestie sit amet sed ante. Nunc elit lacus, laoreet eu nisi vel, suscipit imperdiet massa. Nullam vitae ligula id nulla varius molestie. Donec dictum egestas purus vel vulputate. Sed velit nulla, ultricies sit amet eleifend sit amet, maximus et ipsum.', 'Προυποθέσεις/ΦΕΚ'),
(500, '2015-01-15', '<span>\r\n        <div>\r\n            \r\n            <a id="dnn_ctr1046_FAQs_lstFAQs_ctl00_lnkQ2" class="SubHead" href="javascript:__doPostBack(''dnn$ctr1046$FAQs$lstFAQs$ctl00$lnkQ2'','''')"><div class="Normal">\r\n<b><font color="#000080"><p><font face="Tahoma" size="2">????? ???? ?????????. ?? ?????? ?? ???? ?? ?? ??????;</font></p></font></b>\r\n</div></a>\r\n            \r\n            <div id="dnn_ctr1046_FAQs_lstFAQs_ctl00_pnl" style="width:100%;">\r\n		\r\n                <span id="dnn_ctr1046_FAQs_lstFAQs_ctl00_A2"></span>\r\n	</div>\r\n        </div>\r\n    </span><br><span>\r\n        <div>\r\n            \r\n            <a id="dnn_ctr1046_FAQs_lstFAQs_ctl01_lnkQ2" class="SubHead" href="javascript:__doPostBack(''dnn$ctr1046$FAQs$lstFAQs$ctl01$lnkQ2'','''')"><div class="Normal">\r\n<b><font color="#000080"><p><font face="Tahoma" size="2">??? ?????????? ??? ??? ???????? ??? ??? ???? ?? ??????? ?? ???????? ???????. ?? ?????? ?? ????;</font></p></font></b>\r\n</div></a>\r\n            \r\n            <div id="dnn_ctr1046_FAQs_lstFAQs_ctl01_pnl" style="width:100%;">\r\n		\r\n                <span id="dnn_ctr1046_FAQs_lstFAQs_ctl01_A2"></span>\r\n	</div>\r\n        </div>\r\n    </span><br><span>\r\n        <div>\r\n            \r\n            <a id="dnn_ctr1046_FAQs_lstFAQs_ctl02_lnkQ2" class="SubHead" href="javascript:__doPostBack(''dnn$ctr1046$FAQs$lstFAQs$ctl02$lnkQ2'','''')"><div class="Normal">\r\n<b><font color="#000080"><p><font face="Tahoma" size="2">?? ????????????? ??? ???????? ????? ??????? ??? ???????? ??? ???????? ????????????. ?????;</font></p></font></b>\r\n</div></a>\r\n            \r\n            <div id="dnn_ctr1046_FAQs_lstFAQs_ctl02_pnl" style="width:100%;">\r\n		\r\n                <span id="dnn_ctr1046_FAQs_lstFAQs_ctl02_A2"></span>\r\n	</div>\r\n        </div>\r\n    </span><br><span>\r\n        <div>\r\n            \r\n            <a id="dnn_ctr1046_FAQs_lstFAQs_ctl03_lnkQ2" class="SubHead" href="javascript:__doPostBack(''dnn$ctr1046$FAQs$lstFAQs$ctl03$lnkQ2'','''')"><div class="Normal">\r\n<b><font color="#000080"><p><font face="Tahoma" size="2">???? ?? ??????? ???????? ?? ???? ???? ??? ??? ????? ?????????????. </font></p></font></b>\r\n</div></a>\r\n            \r\n            <div id="dnn_ctr1046_FAQs_lstFAQs_ctl03_pnl" style="width:100%;">\r\n		\r\n                <span id="dnn_ctr1046_FAQs_lstFAQs_ctl03_A2"></span>\r\n	</div>\r\n        </div>\r\n    </span><br><span>\r\n        <div>\r\n            \r\n            <a id="dnn_ctr1046_FAQs_lstFAQs_ctl04_lnkQ2" class="SubHead" href="javascript:__doPostBack(''dnn$ctr1046$FAQs$lstFAQs$ctl04$lnkQ2'','''')"><div class="Normal">\r\n<b><font color="#000080"><p><font face="Tahoma" size="2">????? ???????????? ??????? ???? ??? ???????? ?? ?????? ?? ??? ?????? ???? ???????. ?? ?????? ?? ????;</font></p></font></b>\r\n</div></a>\r\n            \r\n            <div id="dnn_ctr1046_FAQs_lstFAQs_ctl04_pnl" style="width:100%;">\r\n		\r\n                <span id="dnn_ctr1046_FAQs_lstFAQs_ctl04_A2"></span>\r\n	</div>\r\n        </div>\r\n    </span><br><span>\r\n        <div>\r\n            \r\n            <a id="dnn_ctr1046_FAQs_lstFAQs_ctl05_lnkQ2" class="SubHead" href="javascript:__doPostBack(''dnn$ctr1046$FAQs$lstFAQs$ctl05$lnkQ2'','''')"><div class="Normal">\r\n<b><font color="#000080"><p><font face="Tahoma" size="2">??? ???????? ???? ????? ??????? ??????????? ??? ??? ??????????? ??? ?????????????.</font></p></font></b>\r\n</div></a>\r\n            \r\n            <div id="dnn_ctr1046_FAQs_lstFAQs_ctl05_pnl" style="width:100%;">\r\n		\r\n                <span id="dnn_ctr1046_FAQs_lstFAQs_ctl05_A2"></span>\r\n	</div>\r\n        </div>\r\n    </span><br><span>\r\n        <div>\r\n            \r\n            <a id="dnn_ctr1046_FAQs_lstFAQs_ctl06_lnkQ2" class="SubHead" href="javascript:__doPostBack(''dnn$ctr1046$FAQs$lstFAQs$ctl06$lnkQ2'','''')"><div class="Normal">\r\n<b><font color="#000080"><p><font face="Tahoma" size="2">??? ???????? ???? ??? 2009 ???? ??? ??????? ??? ??????? ?? ??? ?.3655/2008 ?????????? 50% ??????? ????? ??????? ?????? ???????? ??? ??????? ??????????? ??? ? ????????? ??? ????? ????????? ?????????. ?? ??????? ?? ???? ??? ?????????;</font></p></font></b>\r\n</div></a>\r\n            \r\n            <div id="dnn_ctr1046_FAQs_lstFAQs_ctl06_pnl" style="width:100%;">\r\n		\r\n                <span id="dnn_ctr1046_FAQs_lstFAQs_ctl06_A2"></span>\r\n	</div>\r\n        </div>\r\n    </span><br><span>\r\n        <div>\r\n            \r\n            <a id="dnn_ctr1046_FAQs_lstFAQs_ctl07_lnkQ2" class="SubHead" href="javascript:__doPostBack(''dnn$ctr1046$FAQs$lstFAQs$ctl07$lnkQ2'','''')"><div class="Normal">\r\n<b><font color="#000080"><p><font face="Tahoma" size="2">????? ?????????? ????? / ????? ??????? / ????? ??????? ??? ? ????????? ??? ??? ???????? ????????. ?? ?????? ?? ????;</font></p></font></b>\r\n</div></a>\r\n            \r\n            <div id="dnn_ctr1046_FAQs_lstFAQs_ctl07_pnl" style="width:100%;">\r\n		\r\n                <span id="dnn_ctr1046_FAQs_lstFAQs_ctl07_A2"></span>\r\n	</div>\r\n        </div>\r\n    </span><br><span>\r\n        <div>\r\n            \r\n            <a id="dnn_ctr1046_FAQs_lstFAQs_ctl08_lnkQ2" class="SubHead" href="javascript:__doPostBack(''dnn$ctr1046$FAQs$lstFAQs$ctl08$lnkQ2'','''')"><div class="Normal">\r\n<b><font color="#000080"><p><font face="Tahoma" size="2">???? ?? ???? ??????????? ???????????. ??? ??? ??????;</font></p></font></b>\r\n</div></a>\r\n            \r\n            <div id="dnn_ctr1046_FAQs_lstFAQs_ctl08_pnl" style="width:100%;">\r\n		\r\n                <span id="dnn_ctr1046_FAQs_lstFAQs_ctl08_A2"></span>\r\n	</div>\r\n        </div>\r\n    </span><br><span>\r\n        <div>\r\n            \r\n            <a id="dnn_ctr1046_FAQs_lstFAQs_ctl09_lnkQ2" class="SubHead" href="javascript:__doPostBack(''dnn$ctr1046$FAQs$lstFAQs$ctl09$lnkQ2'','''')"><div class="Normal">\r\n<b><font color="#000080"><p><font face="Tahoma" size="2">? ????????? ??? ??? ??????? ???????? ?????. ?? ?? ????;</font></p></font></b>\r\n</div></a>\r\n            \r\n            <div id="dnn_ctr1046_FAQs_lstFAQs_ctl09_pnl" style="width:100%;">\r\n		\r\n                <span id="dnn_ctr1046_FAQs_lstFAQs_ctl09_A2"></span>\r\n	</div>\r\n        </div>\r\n    </span><br><span>\r\n        <div>\r\n            \r\n            <a id="dnn_ctr1046_FAQs_lstFAQs_ctl10_lnkQ2" class="SubHead" href="javascript:__doPostBack(''dnn$ctr1046$FAQs$lstFAQs$ctl10$lnkQ2'','''')"><div class="Normal">\r\n<b><font color="#000080"><p><font face="Tahoma" size="2">??? ??? ????? ??????????? ??? ??????? ??????????. ?? ?????? ?? ????;</font></p></font></b>\r\n</div></a>\r\n            \r\n            <div id="dnn_ctr1046_FAQs_lstFAQs_ctl10_pnl" style="width:100%;">\r\n		\r\n                <span id="dnn_ctr1046_FAQs_lstFAQs_ctl10_A2"></span>\r\n	</div>\r\n        </div>\r\n    </span><br><span>\r\n        <div>\r\n            \r\n            <a id="dnn_ctr1046_FAQs_lstFAQs_ctl11_lnkQ2" class="SubHead" href="javascript:__doPostBack(''dnn$ctr1046$FAQs$lstFAQs$ctl11$lnkQ2'','''')"><div class="Normal">\r\n<b><font color="#000080"><p><font face="Tahoma" size="2">????? ???????? ????????? ??? ????????? ???? ?????????? ???? ??????? ???. ??? ???????? ?? ??????? ??? ???????? ???;</font></p></font></b>\r\n</div></a>\r\n            \r\n            <div id="dnn_ctr1046_FAQs_lstFAQs_ctl11_pnl" style="width:100%;">\r\n		\r\n                <span id="dnn_ctr1046_FAQs_lstFAQs_ctl11_A2"></span>\r\n	</div>\r\n        </div>\r\n    </span><br><span>\r\n        <div>\r\n            \r\n            <a id="dnn_ctr1046_FAQs_lstFAQs_ctl12_lnkQ2" class="SubHead" href="javascript:__doPostBack(''dnn$ctr1046$FAQs$lstFAQs$ctl12$lnkQ2'','''')"><div class="Normal">\r\n<b><font color="#000080"><p><font face="Tahoma" size="2">???? ?? ??????? 2.000????. ????? ?? ???????;</font></p></font></b>\r\n</div></a>\r\n            \r\n            <div id="dnn_ctr1046_FAQs_lstFAQs_ctl12_pnl" style="width:100%;">\r\n		\r\n                <span id="dnn_ctr1046_FAQs_lstFAQs_ctl12_A2"></span>\r\n	</div>\r\n        </div>\r\n    </span>', '');

-- --------------------------------------------------------

--
-- Table structure for table `articleCategories`
--

CREATE TABLE IF NOT EXISTS `articleCategories` (
  `article_id` int(11) NOT NULL,
  `categ_id` int(11) NOT NULL,
  KEY `article_id` (`article_id`,`categ_id`),
  KEY `categ_id` (`categ_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `articleCategories`
--

INSERT INTO `articleCategories` (`article_id`, `categ_id`) VALUES
(0, 0),
(1, 1),
(100, 100),
(100, 101),
(100, 101),
(101, 102),
(102, 102),
(102, 102);

-- --------------------------------------------------------

--
-- Table structure for table `Category`
--

CREATE TABLE IF NOT EXISTS `Category` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Category`
--

INSERT INTO `Category` (`id`, `name`) VALUES
(0, 'cat1'),
(1, 'cat2'),
(100, 'Pensions'),
(101, 'Nosilia'),
(102, 'Eisfores');

-- --------------------------------------------------------

--
-- Table structure for table `Document`
--

CREATE TABLE IF NOT EXISTS `Document` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `content` longtext NOT NULL,
  `Title` varchar(128) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Document`
--

INSERT INTO `Document` (`id`, `date`, `content`, `Title`) VALUES
(0, '2015-01-01', 'doc1', 'foo'),
(1, '2015-01-27', 'asdfasdfasdfadsfasdfasdf', 'bar'),
(3, '2015-01-14', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ornare magna eu lacus faucibus, sed vulputate erat facilisis. Curabitur tincidunt tincidunt fermentum. Suspendisse gravida justo massa, hendrerit rutrum erat commodo a. Integer a euismod turpis, vel ultricies diam. Proin efficitur accumsan diam eget molestie. Praesent at est in ipsum bibendum tincidunt. Aenean bibendum finibus diam, quis dignissim diam vestibulum ac. Praesent sed ligula a orci malesuada finibus. Nulla facilisis neque vel nisl convallis lobortis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nunc et hendrerit leo. Vivamus ac tempus nunc, at tincidunt magna. Suspendisse aliquam sit amet tortor sit amet ultricies. Sed venenatis magna eu ultricies fringilla. Donec dapibus ac nisi eu efficitur. Donec rutrum facilisis arcu sit amet condimentum. Proin suscipit faucibus neque ac blandit. Fusce tincidunt consectetur turpis. Maecenas non mollis tortor, eget ornare sapien. Praesent eleifend aliquet diam nec mattis. Morbi eu tellus magna. Maecenas non est sed magna tincidunt efficitur vel in sem. Etiam semper elementum quam, vel consequat odio fermentum non. Etiam efficitur, mi a dictum ultrices, sapien est lobortis elit, vitae mollis nibh dolor id tortor. Nunc eget lacinia justo, quis pretium dolor. Pellentesque feugiat nunc tortor, nec sagittis elit lobortis non.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ornare magna eu lacus faucibus, sed vulputate erat facilisis. Curabitur tincidunt tincidunt fermentum. Suspendisse gravida justo massa, hendrerit rutrum erat commodo a. Integer a euismod turpis, vel ultricies diam. Proin efficitur accumsan diam eget molestie. Praesent at est in ipsum bibendum tincidunt. Aenean bibendum finibus diam, quis dignissim diam vestibulum ac. Praesent sed ligula a orci malesuada finibus. Nulla facilisis neque vel nisl convallis lobortis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nunc et hendrerit leo. Vivamus ac tempus nunc, at tincidunt magna. Suspendisse aliquam sit amet tortor sit amet ultricies. Sed venenatis magna eu ultricies fringilla. Donec dapibus ac nisi eu efficitur. Donec rutrum facilisis arcu sit amet condimentum. Proin suscipit faucibus neque ac blandit. Fusce tincidunt consectetur turpis. Maecenas non mollis tortor, eget ornare sapien. Praesent eleifend aliquet diam nec mattis. Morbi eu tellus magna. Maecenas non est sed magna tincidunt efficitur vel in sem. Etiam semper elementum quam, vel consequat odio fermentum non. Etiam efficitur, mi a dictum ultrices, sapien est lobortis elit, vitae mollis nibh dolor id tortor. Nunc eget lacinia justo, quis pretium dolor. Pellentesque feugiat nunc tortor, nec sagittis elit lobortis non.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ornare magna eu lacus faucibus, sed vulputate erat facilisis. Curabitur tincidunt tincidunt fermentum. Suspendisse gravida justo massa, hendrerit rutrum erat commodo a. Integer a euismod turpis, vel ultricies diam. Proin efficitur accumsan diam eget molestie. Praesent at est in ipsum bibendum tincidunt. Aenean bibendum finibus diam, quis dignissim diam vestibulum ac. Praesent sed ligula a orci malesuada finibus. Nulla facilisis neque vel nisl convallis lobortis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nunc et hendrerit leo. Vivamus ac tempus nunc, at tincidunt magna. Suspendisse aliquam sit amet tortor sit amet ultricies. Sed venenatis magna eu ultricies fringilla. Donec dapibus ac nisi eu efficitur. Donec rutrum facilisis arcu sit amet condimentum. Proin suscipit faucibus neque ac blandit. Fusce tincidunt consectetur turpis. Maecenas non mollis tortor, eget ornare sapien. Praesent eleifend aliquet diam nec mattis. Morbi eu tellus magna. Maecenas non est sed magna tincidunt efficitur vel in sem. Etiam semper elementum quam, vel consequat odio fermentum non. Etiam efficitur, mi a dictum ultrices, sapien est lobortis elit, vitae mollis nibh dolor id tortor. Nunc eget lacinia justo, quis pretium dolor. Pellentesque feugiat nunc tortor, nec sagittis elit lobortis non.', '');

-- --------------------------------------------------------

--
-- Table structure for table `DocumentCategories`
--

CREATE TABLE IF NOT EXISTS `DocumentCategories` (
  `document_id` int(11) NOT NULL,
  `categ_id` int(11) NOT NULL,
  KEY `document_id` (`document_id`),
  KEY `categ_id` (`categ_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `DocumentCategories`
--

INSERT INTO `DocumentCategories` (`document_id`, `categ_id`) VALUES
(0, 0),
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `User`
--

CREATE TABLE IF NOT EXISTS `User` (
  `id` int(11) NOT NULL,
  `name` varchar(128) COLLATE utf8_bin NOT NULL,
  `surname` varchar(128) COLLATE utf8_bin NOT NULL,
  `address` varchar(128) COLLATE utf8_bin NOT NULL,
  `postcode` varchar(128) COLLATE utf8_bin NOT NULL,
  `city` varchar(128) COLLATE utf8_bin NOT NULL,
  `afm` varchar(128) CHARACTER SET latin1 NOT NULL,
  `kyt` varchar(128) CHARACTER SET latin1 NOT NULL,
  `amka` varchar(128) CHARACTER SET latin1 NOT NULL,
  `retired` varchar(128) CHARACTER SET latin1 NOT NULL,
  `pensionNo` varchar(128) CHARACTER SET latin1 NOT NULL,
  `iban` varchar(128) CHARACTER SET latin1 NOT NULL,
  `bank` varchar(128) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `User`
--

INSERT INTO `User` (`id`, `name`, `surname`, `address`, `postcode`, `city`, `afm`, `kyt`, `amka`, `retired`, `pensionNo`, `iban`, `bank`) VALUES
(0, 'asdf', '????', '3 ????? 5 a', '1234a', '?????? ??????a', '341234a', '12341234a', '9870987a', '1', '987698762', '9876986897698698672', '????2'),
(1, '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `UserDocuments`
--

CREATE TABLE IF NOT EXISTS `UserDocuments` (
  `categ_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  KEY `categ_id` (`categ_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `UserDocuments`
--

INSERT INTO `UserDocuments` (`categ_id`, `user_id`) VALUES
(0, 0),
(1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `userSubscriptions`
--

CREATE TABLE IF NOT EXISTS `userSubscriptions` (
  `userid` int(11) NOT NULL,
  `categ_id` int(11) NOT NULL,
  KEY `categ_id` (`categ_id`),
  KEY `user_id` (`userid`,`categ_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userSubscriptions`
--

INSERT INTO `userSubscriptions` (`userid`, `categ_id`) VALUES
(0, 0),
(0, 0),
(0, 1),
(0, 100),
(0, 101),
(1, 1);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `articleCategories`
--
ALTER TABLE `articleCategories`
  ADD CONSTRAINT `articleCategories_ibfk_1` FOREIGN KEY (`article_id`) REFERENCES `Article` (`id`),
  ADD CONSTRAINT `articleCategories_ibfk_2` FOREIGN KEY (`categ_id`) REFERENCES `Category` (`id`);

--
-- Constraints for table `DocumentCategories`
--
ALTER TABLE `DocumentCategories`
  ADD CONSTRAINT `DocumentCategories_ibfk_1` FOREIGN KEY (`document_id`) REFERENCES `Document` (`id`),
  ADD CONSTRAINT `DocumentCategories_ibfk_2` FOREIGN KEY (`categ_id`) REFERENCES `Category` (`id`);

--
-- Constraints for table `userSubscriptions`
--
ALTER TABLE `userSubscriptions`
  ADD CONSTRAINT `userSubscriptions_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `User` (`id`),
  ADD CONSTRAINT `userSubscriptions_ibfk_2` FOREIGN KEY (`categ_id`) REFERENCES `Category` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
