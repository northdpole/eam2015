-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 21, 2015 at 04:04 PM
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
  `content` longtext NOT NULL,
  `Title` varchar(128) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Article`
--

INSERT INTO `Article` (`id`, `date`, `content`, `Title`) VALUES
(100, '2015-01-20', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in laoreet mauris. Nulla facilisi. Phasellus pellentesque accumsan urna vel vestibulum. Nam eu ante et ipsum cursus ullamcorper. Proin tempus leo quam, porta mollis magna fringilla at. Praesent mollis sem eu libero ultricies sodales. Nulla accumsan mattis velit, ac iaculis lacus finibus vel. Morbi placerat tortor at efficitur fermentum. Fusce interdum bibendum velit et lacinia.\r\n\r\nFusce urna tortor, maximus eu fermentum at, finibus nec neque. Sed accumsan convallis odio posuere fermentum. Mauris ultrices magna purus, vel interdum orci finibus et. Integer at elit sit amet eros eleifend scelerisque nec a lectus. Vivamus vestibulum non quam non lobortis. Praesent euismod purus in tincidunt volutpat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aliquam ac massa leo. Aenean ipsum mauris, egestas ac porttitor vitae, tristique quis sapien. Donec vitae est nec ex luctus molestie sit amet sed ante. Nunc elit lacus, laoreet eu nisi vel, suscipit imperdiet massa. Nullam vitae ligula id nulla varius molestie. Donec dictum egestas purus vel vulputate. Sed velit nulla, ultricies sit amet eleifend sit amet, maximus et ipsum.', 'Pensions'),
(101, '2015-01-14', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in laoreet mauris. Nulla facilisi. Phasellus pellentesque accumsan urna vel vestibulum. Nam eu ante et ipsum cursus ullamcorper. Proin tempus leo quam, porta mollis magna fringilla at. Praesent mollis sem eu libero ultricies sodales. Nulla accumsan mattis velit, ac iaculis lacus finibus vel. Morbi placerat tortor at efficitur fermentum. Fusce interdum bibendum velit et lacinia.\r\n\r\nFusce urna tortor, maximus eu fermentum at, finibus nec neque. Sed accumsan convallis odio posuere fermentum. Mauris ultrices magna purus, vel interdum orci finibus et. Integer at elit sit amet eros eleifend scelerisque nec a lectus. Vivamus vestibulum non quam non lobortis. Praesent euismod purus in tincidunt volutpat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aliquam ac massa leo. Aenean ipsum mauris, egestas ac porttitor vitae, tristique quis sapien. Donec vitae est nec ex luctus molestie sit amet sed ante. Nunc elit lacus, laoreet eu nisi vel, suscipit imperdiet massa. Nullam vitae ligula id nulla varius molestie. Donec dictum egestas purus vel vulputate. Sed velit nulla, ultricies sit amet eleifend sit amet, maximus et ipsum.', 'Eisfores'),
(102, '2015-01-29', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in laoreet mauris. Nulla facilisi. Phasellus pellentesque accumsan urna vel vestibulum. Nam eu ante et ipsum cursus ullamcorper. Proin tempus leo quam, porta mollis magna fringilla at. Praesent mollis sem eu libero ultricies sodales. Nulla accumsan mattis velit, ac iaculis lacus finibus vel. Morbi placerat tortor at efficitur fermentum. Fusce interdum bibendum velit et lacinia.\r\n\r\nFusce urna tortor, maximus eu fermentum at, finibus nec neque. Sed accumsan convallis odio posuere fermentum. Mauris ultrices magna purus, vel interdum orci finibus et. Integer at elit sit amet eros eleifend scelerisque nec a lectus. Vivamus vestibulum non quam non lobortis. Praesent euismod purus in tincidunt volutpat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aliquam ac massa leo. Aenean ipsum mauris, egestas ac porttitor vitae, tristique quis sapien. Donec vitae est nec ex luctus molestie sit amet sed ante. Nunc elit lacus, laoreet eu nisi vel, suscipit imperdiet massa. Nullam vitae ligula id nulla varius molestie. Donec dictum egestas purus vel vulputate. Sed velit nulla, ultricies sit amet eleifend sit amet, maximus et ipsum.', 'Nosilia');

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
(300, '2015-01-14', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ornare magna eu lacus faucibus, sed vulputate erat facilisis. Curabitur tincidunt tincidunt fermentum. Suspendisse gravida justo massa, hendrerit rutrum erat commodo a. Integer a euismod turpis, vel ultricies diam. Proin efficitur accumsan diam eget molestie. Praesent at est in ipsum bibendum tincidunt. Aenean bibendum finibus diam, quis dignissim diam vestibulum ac. Praesent sed ligula a orci malesuada finibus. Nulla facilisis neque vel nisl convallis lobortis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nunc et hendrerit leo. Vivamus ac tempus nunc, at tincidunt magna. Suspendisse aliquam sit amet tortor sit amet ultricies. Sed venenatis magna eu ultricies fringilla. Donec dapibus ac nisi eu efficitur. Donec rutrum facilisis arcu sit amet condimentum. Proin suscipit faucibus neque ac blandit. Fusce tincidunt consectetur turpis. Maecenas non mollis tortor, eget ornare sapien. Praesent eleifend aliquet diam nec mattis. Morbi eu tellus magna. Maecenas non est sed magna tincidunt efficitur vel in sem. Etiam semper elementum quam, vel consequat odio fermentum non. Etiam efficitur, mi a dictum ultrices, sapien est lobortis elit, vitae mollis nibh dolor id tortor. Nunc eget lacinia justo, quis pretium dolor. Pellentesque feugiat nunc tortor, nec sagittis elit lobortis non.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ornare magna eu lacus faucibus, sed vulputate erat facilisis. Curabitur tincidunt tincidunt fermentum. Suspendisse gravida justo massa, hendrerit rutrum erat commodo a. Integer a euismod turpis, vel ultricies diam. Proin efficitur accumsan diam eget molestie. Praesent at est in ipsum bibendum tincidunt. Aenean bibendum finibus diam, quis dignissim diam vestibulum ac. Praesent sed ligula a orci malesuada finibus. Nulla facilisis neque vel nisl convallis lobortis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nunc et hendrerit leo. Vivamus ac tempus nunc, at tincidunt magna. Suspendisse aliquam sit amet tortor sit amet ultricies. Sed venenatis magna eu ultricies fringilla. Donec dapibus ac nisi eu efficitur. Donec rutrum facilisis arcu sit amet condimentum. Proin suscipit faucibus neque ac blandit. Fusce tincidunt consectetur turpis. Maecenas non mollis tortor, eget ornare sapien. Praesent eleifend aliquet diam nec mattis. Morbi eu tellus magna. Maecenas non est sed magna tincidunt efficitur vel in sem. Etiam semper elementum quam, vel consequat odio fermentum non. Etiam efficitur, mi a dictum ultrices, sapien est lobortis elit, vitae mollis nibh dolor id tortor. Nunc eget lacinia justo, quis pretium dolor. Pellentesque feugiat nunc tortor, nec sagittis elit lobortis non.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ornare magna eu lacus faucibus, sed vulputate erat facilisis. Curabitur tincidunt tincidunt fermentum. Suspendisse gravida justo massa, hendrerit rutrum erat commodo a. Integer a euismod turpis, vel ultricies diam. Proin efficitur accumsan diam eget molestie. Praesent at est in ipsum bibendum tincidunt. Aenean bibendum finibus diam, quis dignissim diam vestibulum ac. Praesent sed ligula a orci malesuada finibus. Nulla facilisis neque vel nisl convallis lobortis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nunc et hendrerit leo. Vivamus ac tempus nunc, at tincidunt magna. Suspendisse aliquam sit amet tortor sit amet ultricies. Sed venenatis magna eu ultricies fringilla. Donec dapibus ac nisi eu efficitur. Donec rutrum facilisis arcu sit amet condimentum. Proin suscipit faucibus neque ac blandit. Fusce tincidunt consectetur turpis. Maecenas non mollis tortor, eget ornare sapien. Praesent eleifend aliquet diam nec mattis. Morbi eu tellus magna. Maecenas non est sed magna tincidunt efficitur vel in sem. Etiam semper elementum quam, vel consequat odio fermentum non. Etiam efficitur, mi a dictum ultrices, sapien est lobortis elit, vitae mollis nibh dolor id tortor. Nunc eget lacinia justo, quis pretium dolor. Pellentesque feugiat nunc tortor, nec sagittis elit lobortis non.', '');

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
(100, 300);

-- --------------------------------------------------------

--
-- Table structure for table `User`
--

CREATE TABLE IF NOT EXISTS `User` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL,
  `amka` varchar(128) NOT NULL,
  `afm` varchar(128) NOT NULL,
  `trapeza` varchar(128) NOT NULL,
  `firstname` varchar(128) NOT NULL,
  `lastname` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `User`
--

INSERT INTO `User` (`id`, `role`, `amka`, `afm`, `trapeza`, `firstname`, `lastname`, `password`) VALUES
(0, 'ASDF', 'LKH', 'LKJH', 'LKJ', 'HLKJ', 'HLK', 'JHL'),
(1, 'LKH', 'LK', 'HLK', 'H', 'KLH', 'LK', 'JHLKJH');

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
