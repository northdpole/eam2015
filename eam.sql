-- phpMyAdmin SQL Dump
-- version 4.2.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Jan 21, 2015 at 09:46 PM
-- Server version: 5.5.38
-- PHP Version: 5.6.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `eam`
--

-- --------------------------------------------------------

--
-- Table structure for table `Article`
--

CREATE TABLE `Article` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `content` longtext CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Title` varchar(128) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
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
(550, '2015-01-14', 'Από τις 12 Δεκεμβρίου 2011 ενεργοποιείται το Νέο Σύστημα Καταβολής των Νοσηλίων «απευθείας» στους Τραπεζικούς Λογαριασμούς των ασφαλισμένων.</br>\r\nΗ καταβολή νοσηλίων από το Ταμείο πλέον καταργείται.</br>\r\nΠροσοχή :\r\nΕίναι ΑΠΑΡΑΙΤΗΤΟ πλέον ο ΑΜΕΣΑ ασφαλισμένος να έχει δηλώσει το ΙΒΑΝ του τραπεζικού του λογαριασμού μέσω :\r\nα) αίτησης ή\r\nβ) απευθείας από τον ίδιο μέσω του διαδικτύου.\r\n</br>\r\nΑπουσία αριθμού ΙΒΑΝ δεν γίνεται αποδεκτή η παραλαβή των δικαιολογητικών Νοσηλίων από κανένα υποκατάστημα.</br>\r\n</br>\r\n<a href="<?php echo BASEDIR ?>/htdocs/pdf/new_system.pdf" target="_blank"> Περισσότερα.</a>', 'ΝΕΟ σύστημα καταβολής Νοσηλίων'),
(551, '2015-01-20', 'Οι μέχρι 31/12/1992 ασφαλισμένοι (παλαιοί ασφαλισμένοι), οι οποίοι την 01/01/2007 είχαν ηλικία άνω των πενήντα πέντε ετών και είχαν υπαχθεί υποχρεωτικά στον Κλάδο Επικουρικής Ασφάλισης (αρ.13 Ν.3518/06), διαγράφονται από τον Κλάδο Επικουρικής Ασφάλισης του ΕΤΑΑ/ΤΕΑΜΕΔΕ αναδρομικά από 01/01/2007, τα δε ποσά των ασφαλιστικών εισφορών που τους παρακρατήθηκαν επιστρέφονται ως αχρεωστήτως καταβληθέντα , μετά από υποβολή σχετικής αίτησης (άρθρ.59Ν3996/11).</br>\r\n<a href="<?php echo BASEDIR ?>/htdocs/pdf/delete.pdf" target="_blank">Περισσότερα</a>', 'Διαγραφή απο Κλάδο Επικουρικής Ασφάλισης'),
(552, '2015-01-06', 'Φέτος θα ισχύσει για ΕΚΤΗ χρονιά το σύστημα της κράτησης θέσεων στις κατασκηνώσεις.\r\n</br>\r\nΟι ασφαλισμένοι μας θα πρέπει να επικοινωνούν με τη κατασκήνωση της αρεσκείας τους, να δηλώνουν τον ασφαλιστικό τους φορέα, να ενημερώνονται για τη πληρότητά της στη περίοδο που τους ενδιαφέρει και τέλος να προχωρούν σε κράτηση θέσης για το παιδί τους.\r\n</br>\r\nΟι κρατήσεις μπορούν να γίνονται μόνο σε συμβεβλημένες με το ΕΤΑΑ-ΤΣΜΕΔΕ κατασκηνώσεις και για τις περιόδους που αυτές θα συνεργαστούν με το Ταμείο\r\n<a href="<?php echo BASEDIR ?>/htdocs/pdf/delete.pdf" target="_blank">Περισσότερα</a>', 'Κατασκηνώσεις');

-- --------------------------------------------------------

--
-- Table structure for table `articleCategories`
--

CREATE TABLE `articleCategories` (
  `article_id` int(11) NOT NULL,
  `categ_id` int(11) NOT NULL
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
(102, 102),
(550, 101),
(551, 100),
(552, 102);

-- --------------------------------------------------------

--
-- Table structure for table `Category`
--

CREATE TABLE `Category` (
  `id` int(11) NOT NULL,
  `name` varchar(128) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Category`
--

INSERT INTO `Category` (`id`, `name`) VALUES
(0, 'cat1'),
(1, 'cat2'),
(100, 'Συντάξεις'),
(101, 'Νοσήλια'),
(102, 'Παροχές');

-- --------------------------------------------------------

--
-- Table structure for table `Document`
--

CREATE TABLE `Document` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `content` longtext NOT NULL,
  `Title` varchar(128) NOT NULL
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

CREATE TABLE `DocumentCategories` (
  `document_id` int(11) NOT NULL,
  `categ_id` int(11) NOT NULL
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

CREATE TABLE `User` (
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
  `bank` varchar(128) COLLATE utf8_bin NOT NULL
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

CREATE TABLE `UserDocuments` (
  `categ_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
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

CREATE TABLE `userSubscriptions` (
  `userid` int(11) NOT NULL,
  `categ_id` int(11) NOT NULL
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
-- Indexes for dumped tables
--

--
-- Indexes for table `Article`
--
ALTER TABLE `Article`
 ADD PRIMARY KEY (`id`), ADD KEY `id` (`id`);

--
-- Indexes for table `articleCategories`
--
ALTER TABLE `articleCategories`
 ADD KEY `article_id` (`article_id`,`categ_id`), ADD KEY `categ_id` (`categ_id`);

--
-- Indexes for table `Category`
--
ALTER TABLE `Category`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Document`
--
ALTER TABLE `Document`
 ADD PRIMARY KEY (`id`), ADD KEY `id` (`id`);

--
-- Indexes for table `DocumentCategories`
--
ALTER TABLE `DocumentCategories`
 ADD KEY `document_id` (`document_id`), ADD KEY `categ_id` (`categ_id`);

--
-- Indexes for table `User`
--
ALTER TABLE `User`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `UserDocuments`
--
ALTER TABLE `UserDocuments`
 ADD KEY `categ_id` (`categ_id`), ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `userSubscriptions`
--
ALTER TABLE `userSubscriptions`
 ADD KEY `categ_id` (`categ_id`), ADD KEY `user_id` (`userid`,`categ_id`);

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
