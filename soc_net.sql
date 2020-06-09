-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2019 at 08:23 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `soc_net`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `comment` varchar(200) NOT NULL,
  `userid` int(11) NOT NULL,
  `postid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `comment`, `userid`, `postid`) VALUES
(5, 'Samo lomi :D', 12, 45),
(6, 'dobar je pelinkovac al vinjak kida :D', 10, 49),
(7, 'hahahahah pojacaj i zene i pice :D', 10, 46),
(8, 'sija kao macije oci :D', 11, 50),
(9, 'i moja :D', 11, 44),
(10, 'hahahahaha :D', 12, 51),
(11, 'Rakija je zakon :)', 9, 47),
(12, 'tebra vidimo se u kafani tiha noc veceras u 9 :D', 8, 48),
(13, 'Odlican izbor :D', 8, 52),
(14, 'Eto me za pola sata :D', 9, 53),
(15, 'kul :)', 8, 53);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `body` varchar(250) NOT NULL,
  `date` varchar(20) NOT NULL,
  `userid` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `privateStatus` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `body`, `date`, `userid`, `image`, `privateStatus`) VALUES
(44, 'Kafana je moja sudbina!', '2019/04/07', 8, '', 'public'),
(45, 'Pijem pivu i rakiju sljivu garo, garo slomicu te zivu! :)', '2019/04/07', 9, '', 'public'),
(46, 'Sto sam boze tako proklet juce pijan danas opet :D', '2019/04/07', 11, '', 'public'),
(47, 'Od veceras samo vinjak!', '2019/04/07', 10, '', 'public'),
(48, 'Ko hoce u provod? :D', '2019/04/07', 12, '', 'public'),
(49, 'tako je :D', '2019/04/07', 12, 'Dusan1554659217.jpg', 'public'),
(50, 'Sjajan :P', '2019/04/07', 10, 'Konstantin1554659321.jpg', 'public'),
(51, 'Brus i kafana moze li biti bolje? Jos samo Boban da dodje da mi uz jednu rakijicu pokaze smarty :D', '2019/04/07', 11, 'Petar1554659486.jpg', 'public'),
(52, 'Kidaaaa :D', '2019/04/07', 9, 'Nikola1554659693.jpg', 'public'),
(53, 'ko hoce nek dodje ;)', '2019/04/07', 8, 'Milos1554659865.jpg', 'public');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `name`, `lastname`, `email`, `username`, `image`, `password`) VALUES
(8, 'Milos', 'Bjelivuk', 'milosbjelivukcv@gmail.com', 'Milos', '', '$2y$10$vzAGf7/P4osm9mF7/uznl.UUgnWXasqBU1oaO8bYKvMmTOKwZd1le'),
(9, 'Nikola', 'Djukic', 'nikoladjukiccv@gmail.com', 'Nikola', '', '$2y$10$iJG8nTUrc091nmur6i7obe7/kSnf1BtUgP.ZBhwXqifmK6G0XCule'),
(10, 'Konstantin', 'Hadzi-Stancic', 'konstantinstancic@gmail.com', 'Konstantin', '', '$2y$10$i0IZZlhOQyXPattsMTtoh.oNHYR9r.dAWBoxoZrCuboEuEDhYHK0.'),
(11, 'Petar', 'Scepanovic', 'petarscepanovic@gmail.com', 'Petar', '', '$2y$10$Hh2flab0L5gOhdImLSe99O7IedhkXbav792C7EYnZ/JNiKE6kWpHq'),
(12, 'Dusan', 'Jovanovic', 'dusanjovanovic@gmail.com', 'Dusan', '', '$2y$10$denq3GePZeZJwcaLLV/2euv2q1yAz66Hc58etjCcU9DN9JpNYgvCm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `jedan_korisnik_vise_postova` FOREIGN KEY (`userid`) REFERENCES `users` (`uid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
