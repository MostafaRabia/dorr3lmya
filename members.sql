-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Värd: localhost
-- Tid vid skapande: 11 jul 2017 kl 01:17
-- Serverversion: 10.1.19-MariaDB
-- PHP-version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databas: `5irzadExams`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `members`
--

CREATE TABLE `members` (
  `id` int(10) NOT NULL,
  `id_member` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumpning av Data i tabell `members`
--

INSERT INTO `members` (`id`, `id_member`) VALUES
(378, 1367543469981849),
(379, 2008420769377722),
(380, 710558672486105),
(381, 325089884581353),
(382, 1866780603641053),
(383, 1140441909436019),
(384, 1293901507402194),
(385, 755882224593968),
(386, 1566042230114667),
(387, 467954900217635),
(388, 1920001768288481),
(389, 791514317696437),
(390, 1963606710523984),
(391, 460773824282957),
(392, 1079694865495372),
(393, 324669257957780),
(394, 425285941191319),
(395, 1085658671569436),
(396, 1234487106661990),
(397, 483705778642526),
(398, 837382699761485),
(399, 1148236085321134),
(400, 498204770518738),
(401, 339221786496676),
(402, 1923948914542870),
(403, 1086405651491212),
(404, 492160524462657),
(405, 467843140243098),
(406, 1849242418728882),
(407, 1961090394170603),
(408, 321881381572933),
(409, 1838567553138291),
(410, 502001963464578),
(411, 556269388096329),
(412, 248882678961522),
(413, 2004981083067306),
(414, 1880397295559601),
(415, 693404460829963),
(416, 450261835352739),
(417, 587522564968819),
(418, 1452608161493871),
(419, 1977469575870423),
(420, 645142769030368),
(421, 1682039198771387),
(422, 1956033271350513),
(423, 1777035009254949),
(424, 1986957844874667),
(425, 1680568038917219),
(426, 258164158000602),
(427, 665032213693456),
(428, 340562853030378),
(429, 1592710467419883),
(430, 1945290965760556),
(431, 741112312739397),
(432, 1909431012641510),
(433, 208480676344569),
(434, 495130717486174),
(435, 495613584108165),
(436, 1780193142271461),
(437, 759329967562029),
(438, 440895716292924),
(439, 1703780009931394),
(440, 685398541651948),
(441, 339902373096927),
(442, 1696660537295473),
(443, 1363814893732528),
(444, 196989960832717),
(445, 325257397900061),
(446, 357412451341854),
(447, 2329581530601335),
(448, 1957001567901227),
(449, 481896125477119),
(450, 1799589507019499),
(451, 796360003878849),
(452, 493558157661126),
(453, 233815803796831),
(454, 667468843445012),
(455, 1916548691918446),
(456, 1874672679522188),
(457, 488754264808622),
(458, 1948744255404678),
(459, 2000335506853286),
(460, 1999958320290442),
(461, 1233699276736089),
(462, 1420244088054605),
(463, 881472795351834),
(464, 780089478839284),
(465, 1272454322876480),
(466, 1901274246799139),
(467, 1942578902624465),
(468, 1475573029176468),
(469, 1931269923800310),
(470, 584513745270191),
(471, 455566988131860),
(472, 1803021983047320),
(473, 826230344210569),
(474, 345433055875738),
(475, 684628418397612),
(476, 252648905230357),
(477, 2010594022299596),
(478, 1400345996723323),
(479, 396842850712912),
(480, 1251380288306157),
(481, 1693125014031664),
(482, 1176873349124457),
(483, 2023138004585881),
(484, 203636023497951),
(485, 236753216832825),
(486, 830412387125505),
(487, 1361527633964633),
(488, 1900822776834018),
(489, 1392297190866797),
(490, 458177601231174),
(491, 1887158688202433),
(492, 473667369651955),
(493, 1411184652263647),
(494, 1972445729650537),
(495, 10209510193218980),
(496, 316493882143687);

--
-- Index för dumpade tabeller
--

--
-- Index för tabell `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT för dumpade tabeller
--

--
-- AUTO_INCREMENT för tabell `members`
--
ALTER TABLE `members`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=497;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;