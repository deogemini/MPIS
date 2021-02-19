-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2021 at 09:28 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mpis`
--

-- --------------------------------------------------------

--
-- Table structure for table `jimbo`
--

CREATE TABLE `jimbo` (
  `id` int(11) NOT NULL,
  `jinalajimbo` varchar(255) NOT NULL,
  `mkoa` varchar(255) NOT NULL,
  `wilaya` varchar(255) NOT NULL,
  `kata` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jimbo`
--

INSERT INTO `jimbo` (`id`, `jinalajimbo`, `mkoa`, `wilaya`, `kata`) VALUES
(1, 'Arusha mjini', 'Arusha', 'Arusha', 25),
(13, 'Arumeru Magharibi', 'Arusha', 'Arusha', 27),
(14, 'Longido', 'Arusha', 'Longido', 18),
(15, 'BUBUBU', 'Mjini Magharibi ', 'Magharibi A', 6),
(16, 'MFENESINI', 'Mjini Magharibi ', 'Magharibi A', 7),
(17, 'MTONI', 'Mjini Magharibi ', 'Magharibi A', 5),
(18, 'MWERA', 'Mjini Magharibi ', 'Magharibi A', 6),
(19, 'WELEZO', 'Mjini Magharibi ', 'Magharibi A', 7),
(20, 'DIMANI', 'Mjini Magharibi ', 'Magharibi B', 8),
(21, 'FUONI', 'Mjini Magharibi ', 'Magharibi B', 6),
(22, 'MWANAKWEREKWE', 'Mjini Magharibi ', 'Magharibi B', 7),
(23, 'PANGAWE', 'Mjini Magharibi ', 'Magharibi B', 6),
(24, 'AMANI', 'Mjini Magharibi ', 'Magharibi B', 4),
(25, 'CHUMBUNI', 'Mjini Magharibi ', 'Mjini', 6),
(26, 'Tabora Mjini', 'Tabora', 'tabora', 29),
(27, 'Nzega Mjini', 'Tabora', 'Mjini Nzega', 10),
(28, 'Igunga', 'Tabora', 'Igunga', 16),
(29, 'MANONGA', 'Tabora', 'Igunga', 19),
(30, 'Kaliua', 'Tabora', 'Kaliua', 13),
(31, 'Bukene', 'Tabora', 'Nzega', 19),
(32, 'Nzega Vijijini', 'Tabora', 'Nzega', 19),
(33, 'Sikonge', 'Tabora', 'Sikonge', 20),
(34, 'Urambo', 'Tabora', 'Urambo', 18),
(35, 'Igalula', 'Tabora', 'Uyui', 11),
(36, 'Tabora Kaskizini', 'Tabora', 'Uyui', 19),
(37, 'Tanga Mjini', 'Tanga', 'Jiji la Tanga', 27),
(38, 'Handeni mjini', 'Tanga', 'Mji Handeni', 12),
(39, 'Korogwe Mjini', 'Tanga', 'Korogwe', 11),
(40, 'Bumbuli', 'Tanga', 'Korogwe', 11),
(41, 'Handeni Vijijini', 'Tanga', 'Handeni', 21),
(42, 'Kilindi', 'Tanga', 'Kilindi', 21),
(43, 'Korogwe Vijijini', 'Tanga', 'Korogwe', 29),
(44, 'Lushoto', 'Tanga', 'Lushoto', 15),
(45, 'Mlalo', 'Tanga', 'Lushoto', 18),
(46, 'Mkinga', 'Tanga', 'Mkinga', 22),
(47, 'Muhenza', 'Tanga', 'Muhenza', 37),
(48, 'Pangani', 'Tanga', 'Pangani', 14),
(49, 'Morogoro Mjini', 'Morogoro', 'Morogoro Mjini', 29),
(50, 'Kilombero', 'Morogoro', 'Ifakara', 19),
(51, 'Gairo', 'Morogoro', 'Gairo', 18),
(52, 'Kilosa', 'Morogoro', 'Kilosa', 25),
(53, 'Malinyi', 'Morogoro', 'Malinyi', 10),
(54, 'morogoro kusini', 'Morogoro', 'Morogoro Wilaya', 17),
(55, 'morogoro kusini mashariki', 'Morogoro', 'Morogoro Wilaya', 14),
(56, 'Mvomero', 'Morogoro', 'Mvomero', 30),
(57, 'Ulanga', 'Morogoro', 'Ulanga', 21),
(58, 'Ilala', 'Dar es Salaam', 'Ilala', 10),
(59, 'Segerea', 'Dar es Salaam', 'Ilala', 13),
(60, 'Ukonga', 'Dar es Salaam', 'Ilala', 13),
(61, 'Kigamboni', 'Dar es Salaam', 'Kigamboni', 9),
(62, 'Kawe', 'Dar es Salaam', 'Kinondoni', 10),
(63, 'Kinondoni', 'Dar es Salaam', 'Kinondoni', 10),
(64, 'Mbagala', 'Dar es Salaam', 'Temeke', 10),
(65, 'Temeke', 'Dar es Salaam', 'Temeke', 13),
(66, 'Kibamba', 'Dar es Salaam', 'Ubungo', 8),
(67, 'Moshi Mjini', 'Kilimanjaro', 'Moshi Manispaa', 21),
(68, 'Hai', 'Kilimanjaro', 'Hai', 17),
(69, 'Moshi Vijijini', 'Kilimanjaro', 'Moshi', 16),
(70, 'Vunjo', 'Kilimanjaro', 'Moshi', 16),
(71, 'Mwanga', 'Kilimanjaro', 'Mwanga', 20),
(72, 'Rombo', 'Kilimanjaro', 'Rombo', 28),
(73, 'Same Magharibi', 'Kilimanjaro', 'Same', 20),
(74, 'Same Mashariki', 'Kilimanjaro', 'Same', 14),
(75, 'Siha', 'Kilimanjaro', 'Siha', 17),
(76, 'Simanjiro', 'Manyara', 'Simanjiro', 18),
(77, 'Mbulu Vijijini', 'Kilimanjaro', 'Mbulu', 18),
(78, 'Kiteto', 'Manyara', 'Kiteto', 23),
(79, 'Hangang', 'Manyara', 'Hanang', 33),
(80, 'Babati Vijijini', 'Manyara', 'Babati', 25),
(81, 'Mbulu Mjini', 'Manyara', 'Mbulu Mjini', 17),
(82, 'Babari Mjini', 'Manyara', 'Babati Mji', 8),
(83, 'Meatu', 'Simiyu', 'Meatu', 16),
(84, 'Kisesa', 'Simiyu', 'Meatu', 13),
(85, 'Maswa Magharibi', 'Simiyu', 'Maswa', 17),
(86, 'Maswa Mashariki', 'Simiyu', 'Maswa', 19),
(87, 'Itiilima', 'Simiyu', 'Itilima', 22),
(88, 'Busega', 'Simiyu', 'Busega', 15),
(89, 'Bariadi', 'Simiyu', 'Baridi', 31),
(90, 'Singida Kaskazini', 'Singida', 'Singida', 21),
(91, 'Manyoni Mashariki', 'Singida', 'Itigi', 13),
(92, 'Manyoni Magharibi', 'Singida', 'Manyoni', 19),
(93, 'Iramba Mashariki', 'Singida', 'Mkalama', 17),
(94, 'Singida Mjini', 'Singida', 'Singida Manispaa', 18),
(95, 'Singida Magharibi ', 'Singida', 'Ikungi', 15),
(96, 'Singida Mashariki', 'Singida', 'Ikungi', 13),
(97, 'Iramba Magharibi', 'Singida', 'Iramba', 20),
(98, 'Mbeya Mjini', 'Mbeya', 'Mbeya Jiji', 36),
(99, 'Busekelo', 'Mbeya', 'Busokelo', 13),
(100, 'Chunya', 'Mbeya', 'Chunya', 20),
(101, 'Kyela', 'Mbeya', 'Kyela', 33),
(102, 'Mbarali', 'Mbeya', 'Mbarali', 20),
(103, 'Mbeya Vijijini', 'Mbeya', 'Mbeya', 28),
(104, 'Rungwe', 'Mbeya', 'Rungwe', 29),
(105, 'Iringa Mjini', 'Iringa', 'Iringa Manispaa', 18),
(106, 'Mafinga Mjini', 'Iringa', 'Mafinga', 9),
(107, 'Ismail', 'Iringa', 'Iringa', 13),
(108, 'Kalenga', 'Iringa', 'Iringa', 15),
(109, 'Kilolo', 'Iringa', 'Kilolo', 24),
(110, 'Mufindi Kaskazini', 'Iringa', 'Mufindi', 11),
(111, 'Mufindi Kusini', 'Iringa', 'Mufindi', 16);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `title` varchar(30) NOT NULL,
  `category` varchar(30) NOT NULL,
  `body` text NOT NULL,
  `response` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `category`, `body`, `response`) VALUES
(1, 'table is created but still the', 'maji', 'Kijijini kwetu mtendaji amekula pesa zote za mradi na anasema pesa hazijawasilishwa... ', 'PESA ZETU ATARUDISHA TU'),
(2, 'Lname updated  variable name', 'kilimo', 'tbuiuhyfhb', ''),
(3, 'Lname updated  variable name', 'kilimo', 'tbuiuhyfhb', 'ila kekwwllwlllwlwlwllw'),
(4, 'njaa', 'elimu', 'yetetet', ''),
(5, 'Lname updated  variable name', 'ardhi', 'tadatada', ''),
(6, 'mambo', 'maji', 'haya mambo hayaihitaji hasira', ''),
(7, 'tatizo', 'maji', 'maji hayatoki kwenye , mabomba ya hiinchi', ''),
(8, 'tatizo la maji', 'maji', 'Mabomba hayatoi maji mwezi sasa mbunge wetu utatusaidiaje?', 'Nitafatilia upande wa maji na mito');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `secondname` varchar(30) DEFAULT NULL,
  `lastname` varchar(30) DEFAULT NULL,
  `jimbo` varchar(30) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `birthdate` varchar(20) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `telephone` varchar(15) DEFAULT NULL,
  `chama` varchar(40) DEFAULT NULL,
  `startingdate` varchar(20) DEFAULT NULL,
  `finishingdate` varchar(20) DEFAULT NULL,
  `password` varchar(60) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `secondname`, `lastname`, `jimbo`, `gender`, `birthdate`, `email`, `telephone`, `chama`, `startingdate`, `finishingdate`, `password`, `role`) VALUES
(2, 'deo', 'xx', 'user', 'ukonga', 'male', NULL, NULL, NULL, NULL, NULL, NULL, '12345', 'citizen'),
(6, 'admin', 'tets', 'mbunge', 'ukonga', 'gender', '2011-08-19', 'kelvinmhagama23@gmail.com', '8494898383', 'CHADEMA', '2011-08-19', '2011-08-19', 'ADMIN', 'mbunge'),
(7, 'superadmin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'superadmin', 'superadmin'),
(11, 'maquiz', 'kedmon', 'maquiz', 'Arumeru', 'male', NULL, NULL, NULL, NULL, NULL, NULL, '12345678', 'citizen');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jimbo`
--
ALTER TABLE `jimbo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jimbo`
--
ALTER TABLE `jimbo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
