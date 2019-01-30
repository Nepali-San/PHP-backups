-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2017 at 12:11 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_news2`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `salt` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `created_at` date NOT NULL,
  `last_login` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `name`, `username`, `email`, `salt`, `password`, `created_at`, `last_login`) VALUES
(1, 'San', 'San-360', 'sanneupane1024@gmail.com', '5989908907c28', 'd4242a4fd1310e56f5f593f848c57df198ee9b18', '2017-07-18', '2017-09-03 11:10:21'),
(5, 'admin', 'admin', 'admin@gmail.com', '59985d5141cb8', '2c062d1abc37cff3faec50d440679cfa0b0db8f1', '2017-08-19', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `modified_by` varchar(50) DEFAULT NULL,
  `modified_at` datetime DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `name`, `created_by`, `created_at`, `modified_by`, `modified_at`, `status`) VALUES
(3, 'News', 'San-360', '2017-08-01 00:00:00', 'San-360', '2017-08-18 17:18:15', 1),
(9, 'Sports', 'San-360', '2017-08-01 00:00:00', 'San-360', '2017-08-18 17:18:37', 1),
(10, 'Politics', 'San-360', '2017-08-18 17:18:51', 'San-360', '2017-08-19 17:43:33', 1),
(11, 'National', 'San-360', '2017-08-18 17:19:24', NULL, NULL, 1),
(12, 'International', 'San-360', '2017-08-18 17:19:56', NULL, NULL, 1),
(13, 'Health', 'San-360', '2017-08-18 17:20:17', NULL, NULL, 1),
(14, 'Technology', 'San-360', '2017-08-18 17:20:26', NULL, NULL, 1),
(15, 'Economics', 'San-360', '2017-08-18 17:20:49', 'San-360', '2017-08-19 17:43:58', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_news`
--

CREATE TABLE `tbl_news` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `short_desc` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(250) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `featured` tinyint(1) NOT NULL DEFAULT '0',
  `created_by` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `modified_by` varchar(50) DEFAULT NULL,
  `modified_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_news`
--

INSERT INTO `tbl_news` (`id`, `title`, `category`, `short_desc`, `description`, `image`, `status`, `featured`, `created_by`, `created_at`, `modified_by`, `modified_at`) VALUES
(67, 'title', 'News', 'kdjflk,djfk', 'kljfldka', '1_horses.jpg', 1, 1, 'San-360', '2017-08-06 10:54:08', 'San-360', '2017-08-19 17:37:23'),
(68, 'dkljflkdjfioejl', 'Health', 'kjkdfjdlfjeoijo', 'lkcjlfd', 'the-flash.png', 1, 0, 'San-360', '2017-08-07 15:12:48', 'San-360', '2017-08-24 13:51:26'),
(69, 'titlekdfjl', 'News', 'dlfjelkdhkjfh', 'dlfjlej', '12lightning12.jpg', 1, 1, 'San-360', '2017-08-07 16:10:34', 'san-360', '2017-08-29 13:07:46'),
(71, 'Won the cup', 'News', 'He won the cup here in Butwal.', 'it was a final tournament and is successfully completed...', 'animalaffection14.jpg', 1, 1, 'San-360', '2017-08-08 13:32:51', 'San-360', '2017-08-19 17:37:54'),
(72, 'kdjfldjkaldf', 'News', 'aljdflk', 'ldfjl', '1920x1080px.jpg', 1, 1, 'San-360', '2017-08-09 09:08:04', 'San-360', '2017-08-19 17:38:10'),
(73, 'New news', 'Economics', 'Nothing', 'Nothing', NULL, 0, 0, 'San-360', '2017-08-19 12:38:31', 'San-360', '2017-08-24 13:51:50'),
(74, 'titel', 'News', 'sjljfedjl', 'dlkjfal;joeijldl', 'Cute.jpg', 1, 0, 'san-360', '2017-08-29 12:36:08', 'san-360', '2017-08-29 13:10:20'),
(75, 'Chinaâ€™s quantum submarine detector could seal So', 'Technology', 'On 21 June, the Chinese Academy of Sciences hailed', 'On 21 June, the Chinese Academy of Sciences hailed a breakthrough â€“ a major upgrade to a kind of quantum device that measures magnetic fields. The announcement vanished after a journalist pointed out the inventionâ€™s potential military implications: it could help China lock down the South China Sea.  â€œI was surprised by the removal,â€ says Stephen Chen of the South China Morning Post, who raised the issue. â€œI have been covering Chinese science for many years, and it is rare.â€  Magnetometers have been used to detect submarines since the second world war. They are able to do this because they can measure an anomaly in Earthâ€™s magnetic field â€“ like one caused by a massive hunk of metal.  But todayâ€™s devices can only detect a submarine at fairly short range, so tend to be used to home in on the location once the sub has already been spotted on sonar.  Superconducting fix You could widen their range if you had a magnetometer based on a superconducting quantum interference device, or SQUID. Superconducting magnetometers are exquisitely sensitive, but their promise has been limited to the lab. Out in the real world, they are quickly overwhelmed by background noise as minuscule as changes in Earthâ€™s magnetic field caused by distant solar storms.  Given that level of sensitivity, you can forget about mounting such a sensor on an airplane, for example. The US Navy gave up work on superconducting magnetometers to pursue less sensitive but more mature technologies.  Learn more about quantum theory: In our expert talk at New Scientist Live in London The new magnetometer, built by Xiaoming Xie and colleagues at the Shanghai Institute of Microsystem and Information Technology, uses not one SQUID but an array of them. The idea is that by comparing their readings, researchers can cancel out some of the extra artefacts generated by motion. This â€œwould be relevant to an anti-submarine warfare deviceâ€, says David Caplin at Imperial College London, who works on magnetic sensors.  Although the announcement concerning Xieâ€™s work has been removed, several of the previous papers culminating in this breakthrough are still available.  The achievement points to an airborne device that can detect submarines from several kilometres away rather than just a few hundred metres. This would be catastrophic for NATO submarines, which have been honed to run ever more quietly, using clever technology that prevents them from being heard or detected on sonar. Their magnetic signature is much harder to eliminate.  Noise problem Could China soon have the most sensitive submarine detector in the world? No Western navies are known to have SQUID detectors.  Researchers estimate that a SQUID magnetometer of this type could detect a sub from 6 kilometres away, and Caplin says that with better noise suppression the range could be much greater.  Not everyone is convinced the Chinese magnetometer is ready for deployment. Cathy Foley at CSIRO, the Australian government research agency, says there are several difficulties with turning a SQUID into a sub-hunter â€“ for example dealing with background magnetic noise. Nobody has yet solved all of these problems, although she says the rate of Chinese progress means they may well be first to succeed.  SQUIDs are only one of the ways that China has been upgrading its anti-submarine capability over the last few years. The â€œUnderwater Great Wallâ€, a string of submerged sensors, buoys and drone submarines, is thought to be close to completion. The project will help China extend its offshore surveillance zone.  Beijing has long wanted to change the rules of engagement in its waters. Earlier this year it drafted new laws requiring any foreign submarine to get approval before entering Chinese waters, and once there, to stay surfaced and display its national flag. â€œCan the Chinese make these systems work reliably while in motion in the air or underwater? Weâ€™ll be watching their progress closely,â€ says Foley.', 'b6kdhy.jpg', 1, 0, 'san-360', '2017-08-29 14:10:28', NULL, NULL),
(76, 'NASA insists it is going to Mars, but it really ca', 'Technology', 'NASA wants you to know it is on a Journey to Mars.', 'NASA wants you to know it is on a Journey to Mars. For the last few years, the space agency has done everything it can to work those three words into press releases, public statements and YouTube videos. Nearly all of NASAâ€™s current activities, it says, will culminate in landing humans on the Red Planet in the 2030s.  But recently, NASA has admitted this journey is going nowhere fast. Last month, its chief of human space flight, William Gerstenmaier, acknowledged that the space agency doesnâ€™t have the cash to put people on Mars, even with small increases in its budget to keep up with inflation.  â€œI canâ€™t put a date on humans on Mars,â€ Gerstenmaier told a meeting of the American Institute for Aeronautics and Astronautics. â€œAt the budget levels we described â€“ this roughly 2 per cent increase â€“ we donâ€™t have the surface systems available for Mars.â€  This admission ruffled few feathers in the world of space policy, where the fact that NASAâ€™s Mars plans are vague and unlikely to come off is an open secret. After all, the current Journey to Mars campaign is just the latest in a string of unrealised exploration plans (see timeline).  So is it time for NASA to give up on Mars? Perhaps someone else could do it first?', 'gettyimages-528988120-800x533.jpg', 1, 0, 'san-360', '2017-08-29 14:14:19', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD KEY `tbl_category_ibfk_1` (`created_by`),
  ADD KEY `tbl_category_ibfk_2` (`modified_by`);

--
-- Indexes for table `tbl_news`
--
ALTER TABLE `tbl_news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tbl_news_ibfk_1` (`created_by`),
  ADD KEY `tbl_news_ibfk_2` (`modified_by`),
  ADD KEY `tbl_news_ibfk_3` (`category`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `tbl_news`
--
ALTER TABLE `tbl_news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD CONSTRAINT `tbl_category_ibfk_1` FOREIGN KEY (`created_by`) REFERENCES `tbl_admin` (`username`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_category_ibfk_2` FOREIGN KEY (`modified_by`) REFERENCES `tbl_admin` (`username`) ON UPDATE CASCADE;

--
-- Constraints for table `tbl_news`
--
ALTER TABLE `tbl_news`
  ADD CONSTRAINT `tbl_news_ibfk_1` FOREIGN KEY (`created_by`) REFERENCES `tbl_admin` (`username`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_news_ibfk_2` FOREIGN KEY (`modified_by`) REFERENCES `tbl_admin` (`username`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_news_ibfk_3` FOREIGN KEY (`category`) REFERENCES `tbl_category` (`name`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
