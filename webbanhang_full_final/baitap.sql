-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 25, 2014 at 08:08 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `baitap`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`) VALUES
(1, 'Äá»“ng há»“'),
(2, 'Nháº«n ÄÃ´i'),
(3, 'Nháº«n cÆ°á»›i'),
(4, 'Láº¯c tay'),
(5, 'DÃ¢y chuyá»n');

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE IF NOT EXISTS `hoadon` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `email` text COLLATE utf8_unicode_ci NOT NULL,
  `dienthoai` int(11) NOT NULL,
  `cmnd` int(11) NOT NULL,
  `diachi` text COLLATE utf8_unicode_ci NOT NULL,
  `tinhtrang` int(11) NOT NULL,
  `idsp` char(11) COLLATE utf8_unicode_ci NOT NULL,
  `id_admin` int(11) NOT NULL,
  `ngay_mua` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=104 ;

--
-- Dumping data for table `hoadon`
--

INSERT INTO `hoadon` (`id`, `name`, `email`, `dienthoai`, `cmnd`, `diachi`, `tinhtrang`, `idsp`, `id_admin`, `ngay_mua`) VALUES
(1, 'John', 'P.O. Box 841, 5597 Eu Street', 2147483647, 436985757, '4038 Vel Ave', 1, '4', 8, '2014-12-10'),
(2, 'Clark', '454-3306 In St.', 2147483647, 957750874, 'P.O. Box 747, 1526 Amet Rd.', 1, '4', 10, '2014-12-13'),
(3, 'Tana', '8017 Dignissim Ave', 2147483647, 599223592, '449-5519 Lorem, St.', 0, '9', 3, '2013-12-20'),
(4, 'Maia', '3939 Orci Av.', 2147483647, 429454020, '5561 Magna Street', 0, '10', 4, '2013-08-12'),
(5, 'Dustin', '1987 Mauris Av.', 2147483647, 118371710, '806-1030 Aliquet St.', 0, '19', 5, '2014-07-23'),
(6, 'Vance', 'Ap #613-4873 Non, Rd.', 2147483647, 206993210, '6236 Aliquet. Avenue', 0, '17', 6, '2013-07-10'),
(7, 'Alfreda', 'P.O. Box 330, 2523 Eget Ave', 2147483647, 874164360, '5990 Ipsum St.', 0, '6', 7, '2013-09-18'),
(8, 'Naida', 'P.O. Box 383, 3688 Sem St.', 2147483647, 984786124, 'P.O. Box 930, 3755 Id Avenue', 0, '16', 5, '2013-08-07'),
(9, 'Hashim', 'Ap #520-423 Magna Avenue', 2147483647, 875825000, 'P.O. Box 723, 7522 Eget Av.', 1, '19', 2, '2013-03-13'),
(10, 'Allen', '320-4999 Nunc Rd.', 1102999922, 867726295, '2303 Semper. Street', 1, '18', 9, '2012-06-06'),
(11, 'MacKensie', 'P.O. Box 405, 3810 Cras Av.', 2147483647, 504484295, 'P.O. Box 710, 1238 Velit Rd.', 0, '14', 10, '2013-02-13'),
(12, 'Maile', 'Ap #735-2418 Ut Road', 212323816, 416619910, '400-4162 Risus. Ave', 1, '2', 2, '2013-01-16'),
(13, 'Travis', '673-3351 Ut St.', 1323118226, 225162043, 'P.O. Box 800, 792 Dolor Road', 0, '18', 2, '2013-04-18'),
(14, 'Rose', '311-1037 Lobortis Rd.', 1584688244, 157131141, 'P.O. Box 819, 5474 Scelerisque St.', 1, '19', 10, '2014-01-07'),
(15, 'Zelenia', '144-1961 Nam Ave', 2147483647, 808407645, '9396 Praesent Street', 1, '14', 3, '2013-09-11'),
(16, 'Stone', 'Ap #188-5163 Faucibus. Road', 1612296505, 546428968, '636-7434 Magna. Av.', 1, '3', 4, '2014-06-10'),
(17, 'Colton', '842-9181 Convallis Avenue', 330235604, 570172788, '944-109 Arcu Av.', 1, '7', 2, '2014-12-16'),
(18, 'Joy', 'P.O. Box 891, 4070 Sit St.', 1548860892, 934203970, '3639 Parturient St.', 1, '11', 1, '2013-06-12'),
(19, 'Channing', '159-3547 Vulputate Avenue', 2147483647, 315350983, 'P.O. Box 307, 198 Pharetra. Ave', 0, '11', 1, '2013-08-14'),
(20, 'Devin', '1917 Sed Avenue', 2147483647, 748993256, 'Ap #290-6359 Imperdiet St.', 1, '10', 9, '2013-09-17'),
(21, 'Georgia', 'P.O. Box 981, 8917 Nullam Avenue', 2147483647, 416913231, 'P.O. Box 834, 9882 Nulla Avenue', 0, '3', 1, '2013-04-16'),
(22, 'Macon', 'Ap #120-2903 In St.', 2147483647, 341022185, 'P.O. Box 862, 5514 Natoque Rd.', 1, '19', 1, '2012-08-07'),
(23, 'Elaine', 'P.O. Box 946, 6404 Mauris Av.', 2147483647, 247081405, 'P.O. Box 155, 1232 Gravida Rd.', 0, '7', 5, '2013-02-05'),
(24, 'Chaim', '9217 Pharetra. Rd.', 2147483647, 225661920, 'Ap #724-5517 Aliquet, Rd.', 0, '15', 9, '2014-05-06'),
(25, 'Gray', 'P.O. Box 582, 2388 Eu St.', 846628372, 304237619, '8593 Lorem St.', 0, '5', 1, '2014-07-09'),
(26, 'Flynn', 'P.O. Box 487, 7885 Urna Av.', 2147483647, 580703282, 'Ap #369-6698 Vitae Ave', 0, '12', 5, '2013-07-16'),
(27, 'Daniel', '545-9710 Urna St.', 2147483647, 299357661, '5686 Suspendisse Street', 0, '12', 4, '2014-06-18'),
(28, 'Micah', 'Ap #951-7691 Cras Street', 2147483647, 494690995, '6804 Amet Rd.', 1, '7', 2, '2014-06-18'),
(29, 'Elizabeth', 'P.O. Box 698, 2327 Cursus St.', 2147483647, 621157101, '9837 Varius Av.', 0, '14', 2, '2014-05-07'),
(30, 'Jared', 'P.O. Box 147, 7634 Vel Av.', 2147483647, 889589818, '279-478 Tempus Ave', 0, '11', 1, '2014-04-16'),
(31, 'Suki', 'Ap #634-3922 Velit. Rd.', 2147483647, 511118804, 'Ap #981-8052 Orci Rd.', 1, '1', 10, '2014-03-12'),
(32, 'Brett', '6713 Sem Rd.', 2147483647, 383233166, 'P.O. Box 930, 7287 Convallis, St.', 1, '10', 7, '2014-02-05'),
(33, 'Steven', 'P.O. Box 124, 9202 Bibendum. Road', 2147483647, 526971353, 'P.O. Box 977, 6645 Fringilla Ave', 0, '11', 9, '2014-12-02'),
(34, 'Nissim', '8665 Phasellus Rd.', 2147483647, 961111894, '216-9732 Consequat St.', 1, '11', 6, '2014-01-07'),
(35, 'Ahmed', 'P.O. Box 193, 651 Amet Av.', 583124268, 393986884, 'P.O. Box 485, 5027 Et St.', 0, '2', 8, '2013-12-10'),
(36, 'Lana', '5143 Ipsum. Av.', 2147483647, 640667581, 'Ap #848-8486 Aliquam Street', 1, '6', 8, '2014-08-05'),
(37, 'Walker', 'Ap #144-5000 Nam Street', 2147483647, 937434572, '629-6402 Blandit Rd.', 0, '14', 3, '2014-07-09'),
(38, 'Patrick', 'P.O. Box 523, 1515 Nulla. Road', 2147483647, 841574251, 'P.O. Box 127, 3721 Bibendum. Rd.', 1, '2', 6, '2013-10-22'),
(39, 'Aimee', '1825 Consequat Rd.', 2147483647, 515544083, '209-3348 Duis Street', 1, '6', 1, '2013-08-07'),
(40, 'Pandora', 'Ap #811-3311 Ut St.', 2147483647, 374328174, 'Ap #781-7498 Erat, Av.', 1, '12', 8, '2014-02-12'),
(41, 'Alma', '4264 Velit St.', 1953059225, 473768147, 'P.O. Box 778, 2699 Ipsum. Street', 1, '18', 1, '2014-06-10'),
(42, 'Nehru', '1717 Urna, Street', 2147483647, 319754778, '817-9156 Metus St.', 1, '14', 1, '2014-06-17'),
(43, 'Cameran', '169-6817 Non, Road', 2147483647, 758068807, 'P.O. Box 860, 7883 Montes, Road', 0, '19', 5, '2014-03-04'),
(44, 'Dolan', 'P.O. Box 951, 7723 Odio. Street', 2147483647, 466348429, '7010 Pellentesque Rd.', 0, '11', 6, '2014-03-12'),
(45, 'Tallulah', 'P.O. Box 374, 1617 Semper, Rd.', 2093572680, 519751874, '691-7515 Interdum. Av.', 0, '18', 1, '2014-03-11'),
(46, 'Kennedy', '481-2914 Mus. St.', 2147483647, 743524992, '9897 Donec Av.', 0, '17', 4, '2014-10-15'),
(47, 'Bianca', 'Ap #751-1298 A St.', 1032350790, 197666908, 'Ap #320-4823 Porta St.', 0, '19', 4, '2014-12-09'),
(48, 'Fatima', '4401 A Rd.', 2147483647, 762217554, '973-3112 Est Rd.', 1, '7', 5, '2014-12-10'),
(49, 'Lareina', 'P.O. Box 518, 1143 Fermentum Ave', 1529635850, 895081095, '209-5564 Massa. Rd.', 0, '15', 2, '2014-08-05'),
(50, 'Isaiah', '3160 Dui, Av.', 2147483647, 836828941, '589-432 Leo. Avenue', 1, '13', 7, '2014-06-11'),
(51, 'Keith', 'Ap #742-6760 Pharetra St.', 379869207, 905683465, 'Ap #695-1964 Nibh. Rd.', 1, '6', 7, '2014-05-06'),
(52, 'Xerxes', 'P.O. Box 157, 175 Dolor. Street', 2147483647, 579055415, '824-1772 Vel, Road', 1, '12', 1, '2014-04-09'),
(53, 'Conan', 'P.O. Box 123, 6188 Risus. Av.', 2147483647, 943126158, 'P.O. Box 124, 9437 Non Ave', 1, '16', 7, '2014-03-04'),
(54, 'Callie', 'P.O. Box 227, 5644 Risus. St.', 2147483647, 381416126, 'P.O. Box 473, 1480 Magna Av.', 0, '14', 3, '2014-02-12'),
(55, 'Noble', '3635 Eros Street', 2147483647, 696460751, 'P.O. Box 202, 3865 Eget St.', 0, '2', 7, '2014-07-15'),
(56, 'Gage', 'Ap #872-4798 Feugiat Road', 1287155108, 940003181, 'Ap #360-8365 Gravida Av.', 1, '6', 7, '2014-09-10'),
(57, 'Randall', '5639 Risus. Street', 2012792587, 584481581, '389-2623 Tempor Road', 0, '17', 9, '2014-10-16'),
(58, 'Jerry', 'P.O. Box 355, 6444 Auctor Ave', 1960402199, 955340842, 'P.O. Box 652, 3781 Vitae Street', 0, '20', 10, '2014-12-03'),
(59, 'Lana', 'Ap #720-2773 Vivamus Ave', 2147483647, 431833875, 'Ap #829-9741 Aliquam, Avenue', 0, '12', 8, '2014-12-17'),
(60, 'Daphne', 'Ap #783-482 A Ave', 2147483647, 894131291, '5391 Nunc Rd.', 1, '16', 6, '2014-09-09'),
(61, 'Henry', '192-2759 A Street', 2147483647, 124045451, '6391 Sem, St.', 0, '7', 2, '2014-03-05'),
(62, 'Stuart', 'Ap #670-8646 Fusce Ave', 2147483647, 344082207, 'P.O. Box 747, 4703 Orci, St.', 0, '15', 1, '2014-10-09'),
(63, 'Kane', 'P.O. Box 114, 4482 Parturient Rd.', 2147483647, 463549454, 'Ap #994-2676 Mollis Rd.', 0, '12', 5, '2014-08-12'),
(64, 'Cyrus', 'Ap #284-3464 Lectus. Rd.', 2147483647, 143262600, 'P.O. Box 401, 6799 Enim. Av.', 0, '2', 8, '2014-07-15'),
(65, 'Chastity', '9421 Augue, St.', 2147483647, 154790176, '115-4729 Pretium Road', 1, '20', 3, '2014-06-10'),
(66, 'Dominique', 'Ap #538-6563 Arcu. St.', 2147483647, 706857187, '6124 Suspendisse Av.', 1, '13', 6, '2014-06-10'),
(67, 'Clayton', 'Ap #521-6364 Massa St.', 2147483647, 625121667, '6882 Hendrerit Ave', 0, '8', 10, '2014-05-12'),
(68, 'Tanek', 'P.O. Box 754, 2895 Nibh Rd.', 2147483647, 192929021, '738-8196 Vitae, Avenue', 0, '17', 2, '2014-04-15'),
(69, 'Dakota', '1286 Semper Rd.', 2147483647, 330788150, 'P.O. Box 418, 5271 Auctor Street', 0, '10', 1, '2014-03-12'),
(70, 'Jarrod', 'P.O. Box 108, 4703 Pede. Street', 2147483647, 296750622, '2605 Cubilia Road', 1, '7', 4, '2014-03-12'),
(71, 'Murphy', '1188 Nunc Road', 2147483647, 988984077, '150-7432 Integer Street', 0, '9', 8, '2014-01-14'),
(72, 'George', '574-6492 Mi, Rd.', 2147483647, 927839418, '595-8329 Orci, St.', 0, '4', 2, '2014-01-07'),
(73, 'Ifeoma', '6598 Lorem Rd.', 2147483647, 631220231, 'Ap #994-5309 Eget, Road', 0, '7', 2, '2013-12-09'),
(74, 'Rigel', 'P.O. Box 153, 7158 Magna. Rd.', 2147483647, 809343939, '1845 Curae; Rd.', 1, '1', 8, '2013-09-16'),
(75, 'Upton', 'P.O. Box 475, 7201 Semper Av.', 2147483647, 487048542, 'P.O. Box 293, 4117 Eget, Street', 1, '7', 8, '2014-12-09'),
(76, 'Petra', 'P.O. Box 273, 647 Nisl Rd.', 2147483647, 227652734, '320-997 Non Rd.', 0, '14', 4, '2014-10-07'),
(77, 'Althea', 'P.O. Box 159, 9807 Congue, Rd.', 2147483647, 920851644, 'Ap #928-3678 Arcu. St.', 0, '9', 8, '2014-08-05'),
(78, 'Rose', '234-5717 Hendrerit Rd.', 1413845080, 937372436, 'P.O. Box 601, 1751 Aenean Road', 1, '15', 2, '2014-03-04'),
(79, 'Tyrone', '645-5658 Vel, Street', 1060051980, 320810886, 'P.O. Box 492, 7858 Velit St.', 1, '10', 5, '2013-12-18'),
(80, 'Carl', '299-5369 Enim Street', 2147483647, 342722527, '464-683 Donec Avenue', 0, '16', 4, '2013-11-05'),
(81, 'Sarah', 'Ap #684-6502 Donec Rd.', 1162199952, 884155703, 'Ap #444-372 Semper Av.', 1, '14', 3, '2014-01-07'),
(82, 'Myra', '9789 Donec Av.', 1976560810, 510714258, 'Ap #754-7177 Fringilla. Rd.', 0, '2', 7, '2014-07-16'),
(83, 'Daniel', 'Ap #652-3269 Lorem, St.', 2147483647, 680450465, 'Ap #839-9084 Tempor St.', 0, '7', 8, '2013-10-15'),
(84, 'Louis', 'Ap #856-9465 Eget Av.', 2147483647, 868547511, '458-5399 Metus St.', 1, '11', 7, '2013-09-09'),
(85, 'Berk', '2556 Molestie Street', 2147483647, 916231106, 'P.O. Box 384, 1179 Imperdiet Ave', 1, '19', 10, '2014-02-05'),
(86, 'Adele', 'P.O. Box 376, 9690 Commodo Street', 2147483647, 211591301, 'Ap #720-4181 Semper Street', 1, '5', 10, '2013-10-09'),
(87, 'Hilda', '924-1860 Neque. St.', 2147483647, 394647157, 'Ap #802-5558 Justo Road', 1, '10', 4, '2013-10-09'),
(88, 'Anika', 'P.O. Box 178, 712 Magna Rd.', 2147483647, 197967171, '464-3692 Cras St.', 0, '6', 1, '2014-01-08'),
(89, 'Desirae', 'Ap #919-337 Nibh. Rd.', 2147483647, 434507442, '489-7501 Nisi St.', 0, '6', 5, '2014-07-15'),
(90, 'Beverly', '7973 Sodales. Street', 917753312, 461432473, 'Ap #492-9265 Vel, Av.', 1, '16', 10, '2014-08-06'),
(91, 'Reed', 'Ap #838-7110 Donec St.', 2147483647, 901824975, 'P.O. Box 935, 230 Tincidunt Avenue', 0, '5', 1, '2014-10-15'),
(92, 'Gail', 'P.O. Box 413, 2878 Pede. St.', 829389660, 297236428, '7128 Hendrerit St.', 1, '11', 8, '2014-08-06'),
(93, 'Carla', '612-8088 Egestas. Street', 1689313919, 199740080, '5618 Lectus Street', 1, '16', 2, '2014-09-17'),
(94, 'Penelope', '3621 Nec Ave', 1468461064, 794250391, 'Ap #413-6811 Libero Avenue', 1, '9', 7, '2014-03-05'),
(95, 'Carter', '6741 Et, Rd.', 2147483647, 309904553, 'Ap #299-9029 Ridiculus Ave', 0, '17', 9, '2013-12-18'),
(96, 'Diana', '3112 Vivamus Rd.', 2147483647, 791179630, 'Ap #529-6825 Lorem Street', 0, '4', 2, '2013-10-22'),
(97, 'Elaine', '5241 Fringilla Avenue', 2147483647, 823302426, 'Ap #242-305 Sodales. Road', 0, '19', 1, '2013-12-24'),
(98, 'Eliana', 'Ap #532-6848 Ultrices Street', 2147483647, 641033329, 'Ap #893-1772 Pede. Street', 0, '8', 7, '2014-02-04'),
(99, 'Clio', '439-2138 Sed St.', 2147483647, 231714893, '1440 Eu, Avenue', 0, '7', 8, '2014-02-04'),
(100, 'Leslie', '440 Malesuada Rd.', 2147483647, 972131845, 'P.O. Box 371, 2792 Aliquam St.', 1, '15', 4, '2014-10-14'),
(101, '', '', 0, 0, '', 0, ' 2 43', 0, '0000-00-00'),
(102, '', '', 0, 0, '', 0, ' 2 43', 0, '0000-00-00'),
(103, 'Æ°', 'Æ°', 3, 3, 'Æ°', 1, ' 2 10 43', 1, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `nsx`
--

CREATE TABLE IF NOT EXISTS `nsx` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `diachi` text COLLATE utf8_unicode_ci NOT NULL,
  `sdt` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=101 ;

--
-- Dumping data for table `nsx`
--

INSERT INTO `nsx` (`id`, `name`, `diachi`, `sdt`) VALUES
(0, 'Orient', 'Ap #344-8480 Sociis Rd.', 800),
(1, 'Romanson', '304 Auctor Rd.', 315),
(2, 'Olym pianus', '218-7327 Elit Rd.', 56),
(3, 'Graiden', 'P.O. Box 300, 5186 Mollis Street', 55),
(4, 'Timon', 'P.O. Box 242, 7624 Mauris. Avenue', 7624),
(5, 'Sasha', 'P.O. Box 783, 4815 Eros Avenue', 7778),
(6, 'Edward', 'P.O. Box 396, 214 Mi Av.', 0),
(7, 'Orientzz', '477-2359 Ac Ave', 800),
(8, 'Fuller', '8930 Lorem St.', 0),
(9, 'Joan', '976-2592 Justo Avenue', 0),
(10, 'Heather', 'Ap #921-3152 Tellus Rd.', 0),
(11, 'Brenna', '166-5097 Sem Avenue', 0),
(12, 'Colorado', '3326 Cras Street', 70),
(13, 'Kim', 'Ap #828-3006 Neque. St.', 7624),
(14, 'Norman', '8345 Sit Street', 0),
(15, 'Wade', '738-8154 Magna. Rd.', 845),
(16, 'Ali', '394-2746 Nec Street', 800),
(17, 'Anastasia', 'P.O. Box 402, 2624 Odio. Ave', 0),
(18, 'Carlos', '9688 Accumsan Ave', 0),
(19, 'Zena', '2190 Maecenas Road', 0),
(20, 'Fitzgerald', '433-321 Natoque Street', 0),
(21, 'Samantha', '4688 Urna Av.', 0),
(22, 'Adrian', 'Ap #544-8922 Ligula Av.', 0),
(23, 'Basia', 'P.O. Box 124, 9298 Tincidunt Avenue', 0),
(24, 'Silas', '6727 Fringilla Rd.', 815),
(25, 'Zephr', 'Ap #415-1883 Fusce St.', 0),
(26, 'Raja', 'Ap #149-4525 Blandit Road', 500),
(27, 'Mason', '6617 Non Ave', 0),
(28, 'Roary', 'Ap #345-1232 Eu Street', 55),
(29, 'Kaitlin', 'Ap #675-6666 Ac, Road', 7624),
(30, 'Daria', 'Ap #264-1980 Rhoncus Av.', 0),
(31, 'Rinah', '111-7194 Ligula. St.', 500),
(32, 'Ian', 'P.O. Box 948, 257 Elit Ave', 56),
(33, 'Kim', 'P.O. Box 943, 8871 Metus St.', 800),
(34, 'Ava', '368-1028 Quisque Av.', 0),
(35, 'Colt', '8125 Ligula Road', 0),
(36, 'Anne', 'Ap #664-8289 A, St.', 55),
(37, 'Axel', 'P.O. Box 741, 6988 Pellentesque Road', 0),
(38, 'Anjolie', 'Ap #995-3643 Laoreet, Road', 76),
(39, 'Doris', '383-8943 Sem St.', 7624),
(40, 'Remedios', 'P.O. Box 974, 7308 Suspendisse Avenue', 800),
(41, 'Wesley', '594-6651 Lacinia Rd.', 898),
(42, 'Marsden', '940-7443 Varius Avenue', 500),
(43, 'Lillith', 'P.O. Box 667, 6732 Urna Street', 0),
(44, 'Michelle', 'Ap #451-1844 Tincidunt Rd.', 0),
(45, 'Justina', 'P.O. Box 211, 3906 Arcu. Ave', 800),
(46, 'Cora', '5108 Sed Rd.', 0),
(47, 'Lacy', '889-3685 Est, Rd.', 70),
(48, 'Alana', 'Ap #122-9185 Justo Rd.', 0),
(49, 'Jena', '895-7919 Consequat Rd.', 800),
(50, 'Hayfa', '3980 Nibh. Rd.', 0),
(51, 'Georgia', 'P.O. Box 572, 4708 Luctus, St.', 0),
(52, 'Quemby', 'P.O. Box 851, 933 Ultrices. Street', 0),
(53, 'Hu', 'P.O. Box 254, 1559 Sed Avenue', 0),
(54, 'Uriel', 'Ap #224-2500 Imperdiet St.', 362),
(55, 'Carolyn', 'Ap #654-8415 Lacus Road', 845),
(56, 'Yeo', 'P.O. Box 484, 6394 At, St.', 0),
(57, 'Sigourney', 'Ap #518-8964 Id, Street', 500),
(58, 'Jillian', '4512 Ultricies St.', 800),
(59, 'Rhonda', 'Ap #619-7740 Felis Street', 56),
(60, 'Nissim', '968 Semper Road', 301),
(61, 'Nola', '6879 Praesent Avenue', 926),
(62, 'Gareth', '850-9954 Turpis. Avenue', 7624),
(63, 'Tamekah', '639-8172 Lacus. Road', 76),
(64, 'Abraham', 'Ap #489-8329 Viverra. Rd.', 812),
(65, 'Blair', 'Ap #923-413 Placerat, Avenue', 0),
(66, 'Vincent', 'P.O. Box 882, 5191 Vel, Av.', 845),
(67, 'Charity', 'Ap #824-6567 Tempor, Ave', 0),
(68, 'Yoshi', '3951 Nisi Road', 800),
(69, 'Noelle', '7107 Eu, Rd.', 800),
(70, 'Rudyard', '715-4664 Erat St.', 0),
(71, 'April', 'P.O. Box 644, 8180 Imperdiet Avenue', 0),
(72, 'Sybil', '5759 Malesuada. Street', 344),
(73, 'Minerva', '641-9282 Ac St.', 339),
(74, 'Sylvester', 'P.O. Box 873, 1060 Vehicula Ave', 70),
(75, 'Vera', 'Ap #520-7586 Etiam Avenue', 800),
(76, 'Raja', '785-7114 Ornare Rd.', 869),
(77, 'Mona', '6540 Ut Street', 500),
(78, 'Henry', 'P.O. Box 287, 3682 Enim St.', 0),
(79, 'Kane', 'Ap #841-447 Non, St.', 70),
(80, 'Bert', 'Ap #463-4969 Proin St.', 55),
(81, 'Duncan', '553-5435 Ornare, Road', 800),
(82, 'Maile', '160-7920 Pellentesque St.', 55),
(83, 'Lenore', '587-1996 Ornare, Road', 0),
(84, 'Donovan', '5509 Vulputate Rd.', 0),
(85, 'Tamara', '358-9173 Iaculis Rd.', 76),
(86, 'Ori', '780-9353 Auctor St.', 0),
(87, 'Ira', 'Ap #742-4938 Faucibus Ave', 800),
(88, 'Fiona', '610-8742 Turpis. St.', 70),
(89, 'Lance', 'P.O. Box 999, 5277 In Av.', 0),
(90, 'Kadeem', '3519 Mauris Street', 0),
(91, 'Katelyn', 'Ap #770-2003 Fusce Road', 845),
(92, 'Gavin', 'Ap #153-457 Luctus St.', 0),
(93, 'Callie', 'P.O. Box 522, 9058 Mauris St.', 845),
(94, 'Zeus', 'P.O. Box 287, 5250 Pede Avenue', 70),
(95, 'Melanie', '7392 Sem Street', 999),
(96, 'Bert', '3022 Ut Road', 800),
(97, 'Freya', '861-4174 Lectus. Ave', 800),
(98, 'Nayda', '651-733 Urna Av.', 7355),
(99, 'Vladimir', '810-8970 Integer Street', 0),
(100, 'Daksjx', 'Viet nam', 948385542);

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE IF NOT EXISTS `sanpham` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `gia` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `ghichu` text COLLATE utf8_unicode_ci NOT NULL,
  `loaisanpham` text COLLATE utf8_unicode_ci NOT NULL,
  `img` text COLLATE utf8_unicode_ci NOT NULL,
  `idnsx` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=102 ;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id`, `name`, `gia`, `soluong`, `ghichu`, `loaisanpham`, `img`, `idnsx`) VALUES
(1, 'arcu.', 349892, 89, 'khong co gi', '5', 'h1.jpg', 5),
(2, 'ligula.', 387490, 27, 'khong co gi', '1', 'h2.jpg', 0),
(3, 'fermentum', 507459, 10, 'khong co gi', '2', 'h3.jpg', 2),
(4, 'eu,', 928406, 82, 'khong co gi', '7', 'h4.jpg', 1),
(5, 'Cras', 544039, 87, 'khong co gi', '5', 'h5.jpg', 2),
(6, 'Nunc', 537369, 79, 'khong co gi', '4', 'h6.jpg', 0),
(7, 'nunc', 271931, 25, 'khong co gi', '7', 'h7.jpg', 1),
(8, 'vestibulum,', 432157, 13, 'khong co gi', '7', 'h8.jpg', 2),
(9, 'semper', 542630, 6, 'khong co gi', '7', 'h9.jpg', 0),
(10, 'quis', 473048, 43, 'khong co gi', '1', 'h10.jpg', 2),
(11, 'arcu', 791068, 31, 'khong co gi', '1', 'h11.jpg', 2),
(12, 'Integer', 278572, 93, 'khong co gi', '3', 'h12.jpg', 5),
(13, 'diam', 463532, 25, 'khong co gi', '5', 'h13.jpg', 98),
(14, 'Praesent', 698907, 94, 'khong co gi', '1', 'h14.jpg', 2),
(15, 'ultricies', 761816, 31, 'khong co gi', '3', 'h15.jpg', 94),
(16, 'In', 877118, 14, 'khong co gi', '4', 'h16.jpg', 55),
(17, 'pharetra,', 922669, 17, 'khong co gi', '4', 'h17.jpg', 32),
(18, 'eleifend', 145343, 65, 'khong co gi', '4', 'h18.jpg', 1),
(19, 'sem.', 419471, 88, 'khong co gi', '3', 'h19.jpg', 0),
(20, 'ac', 778576, 5, 'khong co gi', '1', 'h20.jpg', 0),
(21, 'amet,', 975880, 91, 'khong co gi', '5', 'h1.jpg', 77),
(22, 'sed', 435904, 31, 'khong co gi', '4', 'h2.jpg', 2),
(23, 'eget,', 761340, 56, 'khong co gi', '7', 'h3.jpg', 0),
(24, 'vulputate', 568710, 81, 'khong co gi', '4', 'h4.jpg', 0),
(25, 'Donec', 841519, 15, 'khong co gi', '1', 'h5.jpg', 0),
(26, 'placerat.', 590924, 2, 'khong co gi', '3', 'h6.jpg', 2),
(27, 'vulputate,', 460005, 9, 'khong co gi', '1', 'h7.jpg', 1),
(28, 'ultrices', 221117, 59, 'khong co gi', '1', 'h8.jpg', 0),
(29, 'Nulla', 666038, 67, 'khong co gi', '1', 'h9.jpg', 2),
(30, 'enim,', 350057, 87, 'khong co gi', '2', 'h10.jpg', 48),
(31, 'Aliquam', 687916, 85, 'khong co gi', '3', 'h11.jpg', 53),
(32, 'consequat', 847203, 78, 'khong co gi', '4', 'h12.jpg', 54),
(33, 'turpis.', 611833, 16, 'khong co gi', '5', 'h13.jpg', 86),
(34, 'erat', 764813, 51, 'khong co gi', '5', 'h14.jpg', 52),
(35, 'pretium', 440645, 96, 'khong co gi', '4', 'h15.jpg', 22),
(36, 'ridiculus', 749854, 70, 'khong co gi', '3', 'h16.jpg', 87),
(37, 'sit', 286660, 78, 'khong co gi', '2', 'h17.jpg', 20),
(38, 'rhoncus.', 188364, 43, 'khong co gi', '7', 'h18.jpg', 2),
(39, 'rutrum.', 663805, 64, 'khong co gi', '7', 'h19.jpg', 0),
(40, 'euismod', 562386, 29, 'khong co gi', '3', 'h40.jpg', 2),
(41, 'Mauris', 330002, 68, 'khong co gi', '2', 'h1.jpg', 66),
(42, 'tempor,', 418665, 37, 'khong co gi', '7', 'h2.jpg', 0),
(43, 'Pellentesque', 967192, 39, 'khong co gi', '4', 'h3.jpg', 1),
(44, 'Nulla', 296640, 3, 'khong co gi', '3', 'h4.jpg', 0),
(45, 'interdum.', 718975, 17, 'khong co gi', '1', 'h5.jpg', 1),
(46, 'lectus', 476871, 82, 'khong co gi', '5', 'h6.jpg', 1),
(47, 'sit', 504671, 91, 'khong co gi', '3', 'h7.jpg', 1),
(48, 'dapibus', 389259, 2, 'khong co gi', '7', 'h8.jpg', 0),
(49, 'sociis', 274027, 65, 'khong co gi', '1', 'h9.jpg', 1),
(50, 'eget', 817617, 28, 'khong co gi', '5', 'h10.jpg', 60),
(101, '1a', 2, 3, 'ráº¥t Ä‘áº¹p', '1', 'hinhanh/10.php', 0);

-- --------------------------------------------------------

--
-- Table structure for table `thanhvien`
--

CREATE TABLE IF NOT EXISTS `thanhvien` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` text COLLATE utf8_unicode_ci NOT NULL,
  `pass` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=101 ;

--
-- Dumping data for table `thanhvien`
--

INSERT INTO `thanhvien` (`id`, `user`, `pass`) VALUES
(1, 'admin', '123'),
(2, 'Joshua', '7607'),
(3, 'Lance', '6950'),
(4, 'Brittany', '5602'),
(5, 'Judith', '2757'),
(6, 'Jolie', '5803'),
(7, 'Cally', '2528'),
(8, 'Tad', '9722'),
(9, 'Steven', '4470'),
(10, 'Stephen', '3381');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
