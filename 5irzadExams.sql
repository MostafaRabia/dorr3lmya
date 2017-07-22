-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 19, 2017 at 08:18 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `5irzadExams`
--

-- --------------------------------------------------------

--
-- Table structure for table `exams`
--

CREATE TABLE `exams` (
  `id` int(10) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fromdate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `todate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fromtime` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `totime` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ques` int(10) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exams`
--

INSERT INTO `exams` (`id`, `name`, `fromdate`, `todate`, `fromtime`, `totime`, `ques`, `updated_at`, `created_at`) VALUES
(19, 'Test', '18 July, 2017', '22 July, 2017', '12:00PM', '12:00PM', 3, '2017-07-19 05:26:30', '2017-07-18 17:36:14');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(10) NOT NULL,
  `id_member` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `id_member`) VALUES
(507, 769810526513864),
(508, 803194496528598),
(509, 1969246579971199),
(510, 2008420769377722),
(511, 710558672486105),
(512, 755882224593968),
(513, 1566042230114667),
(514, 467954900217635),
(515, 791514317696437),
(516, 460773824282957),
(517, 1079694865495372),
(518, 483705778642526),
(519, 837382699761485),
(520, 498204770518738),
(521, 492160524462657),
(522, 1849242418728882),
(523, 556269388096329),
(524, 248882678961522),
(525, 2004981083067306),
(526, 1880397295559601),
(527, 587522564968819),
(528, 1452608161493871),
(529, 1977469575870423),
(530, 645142769030368),
(531, 1682039198771387),
(532, 1956033271350513),
(533, 1777035009254949),
(534, 1680568038917219),
(535, 665032213693456),
(536, 1592710467419883),
(537, 208480676344569),
(538, 759329967562029),
(539, 440895716292924),
(540, 1363814893732528),
(541, 196989960832717),
(542, 1957001567901227),
(543, 481896125477119),
(544, 233815803796831),
(545, 1916548691918446),
(546, 1874672679522188),
(547, 488754264808622),
(548, 2000335506853286),
(549, 1999958320290442),
(550, 1272454322876480),
(551, 684628418397612),
(552, 1176873349124457),
(553, 1361527633964633),
(554, 1900822776834018),
(555, 1887158688202433),
(556, 473667369651955),
(557, 1972445729650537),
(558, 10209510193218980),
(559, 1687698758204440);

-- --------------------------------------------------------

--
-- Table structure for table `permission`
--

CREATE TABLE `permission` (
  `id` int(10) NOT NULL,
  `id_exam` int(10) NOT NULL,
  `id_user` bigint(20) NOT NULL,
  `complete` int(10) NOT NULL,
  `finish` int(10) NOT NULL,
  `ban` int(10) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission`
--

INSERT INTO `permission` (`id`, `id_exam`, `id_user`, `complete`, `finish`, `ban`, `updated_at`, `created_at`) VALUES
(2, 19, 769810526513864, 0, 0, 0, '2017-07-18 17:36:14', '2017-07-18 17:36:14'),
(3, 19, 803194496528598, 0, 0, 0, '2017-07-18 17:36:14', '2017-07-18 17:36:14'),
(4, 19, 1969246579971199, 0, 0, 0, '2017-07-18 17:36:14', '2017-07-18 17:36:14'),
(5, 19, 2008420769377722, 0, 0, 0, '2017-07-18 17:36:14', '2017-07-18 17:36:14'),
(6, 19, 710558672486105, 0, 0, 0, '2017-07-18 17:36:14', '2017-07-18 17:36:14'),
(7, 19, 755882224593968, 0, 0, 0, '2017-07-18 17:36:14', '2017-07-18 17:36:14'),
(8, 19, 1566042230114667, 0, 0, 0, '2017-07-18 17:36:14', '2017-07-18 17:36:14'),
(9, 19, 467954900217635, 0, 0, 0, '2017-07-18 17:36:14', '2017-07-18 17:36:14'),
(10, 19, 791514317696437, 0, 0, 0, '2017-07-18 17:36:14', '2017-07-18 17:36:14'),
(11, 19, 460773824282957, 0, 0, 0, '2017-07-18 17:36:14', '2017-07-18 17:36:14'),
(12, 19, 1079694865495372, 0, 0, 0, '2017-07-18 17:36:14', '2017-07-18 17:36:14'),
(13, 19, 483705778642526, 0, 0, 0, '2017-07-18 17:36:14', '2017-07-18 17:36:14'),
(14, 19, 837382699761485, 0, 0, 0, '2017-07-18 17:36:14', '2017-07-18 17:36:14'),
(15, 19, 498204770518738, 0, 0, 0, '2017-07-18 17:36:14', '2017-07-18 17:36:14'),
(16, 19, 492160524462657, 0, 0, 0, '2017-07-18 17:36:14', '2017-07-18 17:36:14'),
(17, 19, 1849242418728882, 0, 0, 0, '2017-07-18 17:36:14', '2017-07-18 17:36:14'),
(18, 19, 556269388096329, 0, 0, 0, '2017-07-18 17:36:14', '2017-07-18 17:36:14'),
(19, 19, 248882678961522, 0, 0, 0, '2017-07-18 17:36:14', '2017-07-18 17:36:14'),
(20, 19, 2004981083067306, 0, 0, 0, '2017-07-18 17:36:14', '2017-07-18 17:36:14'),
(21, 19, 1880397295559601, 0, 0, 0, '2017-07-18 17:36:14', '2017-07-18 17:36:14'),
(22, 19, 587522564968819, 0, 0, 0, '2017-07-18 17:36:14', '2017-07-18 17:36:14'),
(23, 19, 1452608161493871, 0, 0, 0, '2017-07-18 17:36:14', '2017-07-18 17:36:14'),
(24, 19, 1977469575870423, 0, 0, 0, '2017-07-18 17:36:14', '2017-07-18 17:36:14'),
(25, 19, 645142769030368, 0, 0, 0, '2017-07-18 17:36:14', '2017-07-18 17:36:14'),
(26, 19, 1682039198771387, 0, 0, 0, '2017-07-18 17:36:14', '2017-07-18 17:36:14'),
(27, 19, 1956033271350513, 0, 0, 0, '2017-07-18 17:36:14', '2017-07-18 17:36:14'),
(28, 19, 1777035009254949, 0, 0, 0, '2017-07-18 17:36:14', '2017-07-18 17:36:14'),
(29, 19, 1680568038917219, 0, 0, 0, '2017-07-18 17:36:14', '2017-07-18 17:36:14'),
(30, 19, 665032213693456, 0, 0, 0, '2017-07-18 17:36:15', '2017-07-18 17:36:15'),
(31, 19, 1592710467419883, 3, 1, 0, '2017-07-19 14:37:37', '2017-07-18 17:36:15'),
(32, 19, 208480676344569, 0, 0, 0, '2017-07-18 17:36:15', '2017-07-18 17:36:15'),
(33, 19, 759329967562029, 0, 0, 0, '2017-07-18 17:36:15', '2017-07-18 17:36:15'),
(34, 19, 440895716292924, 0, 0, 0, '2017-07-18 17:36:15', '2017-07-18 17:36:15'),
(35, 19, 1363814893732528, 0, 0, 0, '2017-07-18 17:36:15', '2017-07-18 17:36:15'),
(36, 19, 196989960832717, 0, 0, 0, '2017-07-18 17:36:15', '2017-07-18 17:36:15'),
(37, 19, 1957001567901227, 0, 0, 0, '2017-07-18 17:36:15', '2017-07-18 17:36:15'),
(38, 19, 481896125477119, 0, 0, 0, '2017-07-18 17:36:15', '2017-07-18 17:36:15'),
(39, 19, 233815803796831, 0, 0, 0, '2017-07-18 17:36:15', '2017-07-18 17:36:15'),
(40, 19, 1916548691918446, 0, 0, 0, '2017-07-18 17:36:15', '2017-07-18 17:36:15'),
(41, 19, 1874672679522188, 0, 0, 0, '2017-07-18 17:36:15', '2017-07-18 17:36:15'),
(42, 19, 488754264808622, 0, 0, 0, '2017-07-18 17:36:15', '2017-07-18 17:36:15'),
(43, 19, 2000335506853286, 0, 0, 0, '2017-07-18 17:36:15', '2017-07-18 17:36:15'),
(44, 19, 1999958320290442, 0, 0, 0, '2017-07-18 17:36:15', '2017-07-18 17:36:15'),
(45, 19, 1272454322876480, 0, 0, 0, '2017-07-18 17:36:15', '2017-07-18 17:36:15'),
(46, 19, 684628418397612, 0, 0, 0, '2017-07-18 17:36:15', '2017-07-18 17:36:15'),
(47, 19, 1176873349124457, 0, 0, 0, '2017-07-18 17:36:15', '2017-07-18 17:36:15'),
(48, 19, 1361527633964633, 0, 0, 0, '2017-07-18 17:36:15', '2017-07-18 17:36:15'),
(49, 19, 1900822776834018, 0, 0, 0, '2017-07-18 17:36:15', '2017-07-18 17:36:15'),
(50, 19, 1887158688202433, 0, 0, 0, '2017-07-18 17:36:15', '2017-07-18 17:36:15'),
(51, 19, 473667369651955, 0, 0, 0, '2017-07-18 17:36:15', '2017-07-18 17:36:15'),
(52, 19, 1972445729650537, 0, 0, 0, '2017-07-18 17:36:15', '2017-07-18 17:36:15'),
(53, 19, 10209510193218980, 0, 0, 0, '2017-07-18 17:36:15', '2017-07-18 17:36:15'),
(54, 19, 1687698758204440, 0, 0, 0, '2017-07-18 17:36:15', '2017-07-18 17:36:15');

-- --------------------------------------------------------

--
-- Table structure for table `ques`
--

CREATE TABLE `ques` (
  `id` int(10) NOT NULL,
  `id_exam` int(10) NOT NULL,
  `id_que` int(10) NOT NULL,
  `ques` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ans1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ans2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ans3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ans4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `correct` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ques`
--

INSERT INTO `ques` (`id`, `id_exam`, `id_que`, `ques`, `ans1`, `ans2`, `ans3`, `ans4`, `correct`, `updated_at`, `created_at`) VALUES
(93, 19, 1, 'one', 'one', 'two', 'three', 'four', 'one', '2017-07-18 17:37:19', '2017-07-18 17:37:19'),
(94, 19, 2, 'two', 'one', 'two', 'three', 'four', 'two', '2017-07-18 17:37:31', '2017-07-18 17:37:31'),
(95, 19, 3, 'three', 'one', 'two', 'three', 'four', 'four', '2017-07-18 17:37:40', '2017-07-18 17:37:40');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` int(10) NOT NULL,
  `id_exam` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `question` int(10) DEFAULT NULL,
  `answer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notes` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result` int(10) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `id_exam`, `id_user`, `question`, `answer`, `notes`, `result`, `updated_at`, `created_at`) VALUES
(13, 19, 1, 93, 'one', 'لا توجد ملاحظات للأن', 1, '2017-07-19 14:37:29', '2017-07-19 14:37:29'),
(14, 19, 1, 94, 'three', 'لا توجد ملاحظات للأن', 0, '2017-07-19 14:37:33', '2017-07-19 14:37:33'),
(15, 19, 1, 95, 'four', 'لا توجد ملاحظات للأن', 1, '2017-07-19 14:37:37', '2017-07-19 14:37:37');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `id_user` bigint(20) NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin` int(2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `id_user`, `username`, `email`, `image`, `remember_token`, `admin`, `created_at`, `updated_at`) VALUES
(1, 1592710467419883, 'Mostafa Rabia', 'rabiamostafa00@gmail.com', 'https://graph.facebook.com/v2.9/1592710467419883/picture?type=normal', 'N5p0ZoPbuLWhoQUQoz8y2KnQWnaHCbx384oZ1O9VopLz4tHAWNJ2LTH7yWC7', 1, '2017-07-19 17:46:43', '2017-07-10 18:54:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `exams`
--
ALTER TABLE `exams`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD UNIQUE KEY `name_2` (`name`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permission`
--
ALTER TABLE `permission`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_exam` (`id_exam`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `ques`
--
ALTER TABLE `ques`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_exam` (`id_exam`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_exam` (`id_exam`,`id_user`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `question` (`question`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `exams`
--
ALTER TABLE `exams`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=560;
--
-- AUTO_INCREMENT for table `permission`
--
ALTER TABLE `permission`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=161;
--
-- AUTO_INCREMENT for table `ques`
--
ALTER TABLE `ques`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;
--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `permission`
--
ALTER TABLE `permission`
  ADD CONSTRAINT `id_exam1` FOREIGN KEY (`id_exam`) REFERENCES `exams` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ques`
--
ALTER TABLE `ques`
  ADD CONSTRAINT `id_exam3` FOREIGN KEY (`id_exam`) REFERENCES `exams` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `results`
--
ALTER TABLE `results`
  ADD CONSTRAINT `id_exam` FOREIGN KEY (`id_exam`) REFERENCES `exams` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_user` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `question` FOREIGN KEY (`question`) REFERENCES `ques` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
