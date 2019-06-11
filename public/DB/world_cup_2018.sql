-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2018 at 05:50 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `world_cup_2018`
--

-- --------------------------------------------------------

--
-- Table structure for table `awards`
--

CREATE TABLE `awards` (
  `Awards_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Winner` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `awards`
--

INSERT INTO `awards` (`Awards_name`, `Winner`, `created_at`, `updated_at`) VALUES
('Champion Trophy', 'France', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('FIFA Fair Play', 'Spain', NULL, NULL),
('Golden Ball', 'Luka Modric', NULL, NULL),
('Golden Boot', 'Hary Kane', NULL, NULL),
('Golden Glove', 'Thibaut Courtois', NULL, NULL),
('Runner Up', 'Croatia', NULL, NULL),
('Third Place', 'Belgium', NULL, NULL),
('Young Player ', 'Kylian Mbappe', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `Comment` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `User_ID` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `Comment`, `User_ID`, `created_at`, `updated_at`) VALUES
(1, 'Wonderful design .I am really really impressed', 2, '2018-08-28 14:15:42', '2018-08-28 14:15:42');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `Country` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Country_Image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Flag` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Coach` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Coach_Image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Groupp` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MP` int(11) NOT NULL,
  `W` int(11) NOT NULL,
  `D` int(11) NOT NULL,
  `L` int(11) NOT NULL,
  `GF` int(11) NOT NULL,
  `GA` int(11) NOT NULL,
  `PM` int(11) NOT NULL,
  `PTS` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`Country`, `Country_Image`, `Flag`, `Coach`, `Coach_Image`, `Groupp`, `MP`, `W`, `D`, `L`, `GF`, `GA`, `PM`, `PTS`, `created_at`, `updated_at`) VALUES
('Argentina', 'arg', 'arg', 'JORGE SAMPAOLI ', '', 'D', 3, 1, 1, 1, 3, 5, -2, 4, NULL, NULL),
('Australia', 'aus', 'aus', 'BERT VAN MARWIJK', '', 'C', 3, 0, 1, 2, 2, 5, -3, 1, NULL, NULL),
('Begium', 'bel', 'bel', 'ROBERTO MARTINEZ', '', 'G', 3, 3, 0, 0, 9, 2, 7, 9, NULL, NULL),
('Brazil', 'bra', 'bra', 'TITE', '', 'E', 3, 2, 1, 0, 5, 1, 4, 7, NULL, NULL),
('Colombia', 'col', 'col', 'JOSE PEKERMAN', '', 'H', 3, 2, 0, 1, 5, 2, 3, 6, NULL, NULL),
('Costa Rica', 'crc', 'crc', 'OSCAR RAMIREZ', '', 'E', 3, 0, 1, 2, 2, 5, -3, 1, NULL, NULL),
('Croatia', 'cro', 'cro', 'ZLATKO DALIC', '', 'D', 3, 3, 0, 0, 7, 1, 6, 9, NULL, NULL),
('Denmark', 'den', 'den', 'AGE HAREIDE', '', 'C', 3, 1, 2, 0, 2, 1, 1, 5, NULL, NULL),
('Egypt', 'egy', 'egy', 'HECTOR CUPER', '', 'A', 3, 0, 0, 3, 2, 6, -4, 0, NULL, NULL),
('England', 'eng', 'eng', 'GARETH SOUTHGATE', '', 'G', 3, 2, 0, 1, 8, 3, 5, 6, NULL, NULL),
('France', 'fra', 'fra', 'DIDIER DESCHAMPS', '', 'C', 3, 2, 1, 0, 3, 1, 2, 7, NULL, NULL),
('Germany', 'ger', 'ger', 'JOACHIM LOEW', '', 'F', 3, 1, 0, 2, 2, 4, -2, 3, NULL, NULL),
('Iceland', 'isl', 'isl', 'HEIMIR HALLGRIMSSON', '', 'D', 3, 0, 1, 2, 2, 5, -3, 1, NULL, NULL),
('Iran', 'irn', 'irn', 'CARLOS QUEIROZ', '', 'B', 3, 1, 1, 1, 2, 2, 0, 4, NULL, NULL),
('Japan', 'jpn', 'jpn', 'AKIRA NISHINO ', '', 'H', 3, 1, 1, 1, 4, 4, 0, 4, NULL, NULL),
('Korea Republic', 'kor', 'kor', 'SHIN TAEYONG', '', 'F', 3, 1, 0, 2, 3, 3, 0, 3, NULL, NULL),
('Mexico', 'mex', 'mex', 'JUAN CARLOS OSORIO', '', 'F', 3, 2, 0, 1, 3, 4, -1, 6, NULL, NULL),
('Morocco', 'mar', 'mar', 'HERVE RENARD', '', 'B', 3, 0, 1, 2, 2, 4, -2, 1, NULL, NULL),
('Nigeria', 'nga', 'nga', 'GERNOT ROHR', '', 'D', 3, 1, 0, 2, 3, 4, -1, 3, NULL, NULL),
('Panama', 'pan', 'pan', 'HERNAN GOMEZ', '', 'G', 3, 0, 0, 3, 2, 11, -9, 0, NULL, NULL),
('Peru', 'per', 'per', 'RICARDO GARECA', '', 'C', 3, 1, 0, 2, 2, 2, 0, 3, NULL, NULL),
('Poland', 'pol', 'pol', 'ADAM NAWALKA', '', 'H', 3, 1, 0, 2, 2, 5, -3, 3, NULL, NULL),
('Portugal', 'por', 'por', 'FERNANDO SANTOS', '', 'B', 3, 1, 2, 0, 5, 4, 1, 5, NULL, NULL),
('Russia', 'rus', 'rus', 'STANISLAV CHERCHESOV', '', 'A', 3, 2, 0, 1, 8, 4, 4, 6, NULL, NULL),
('Saudi Arabia', 'ksa', 'ksa', 'JUAN ANTONIO PIZZI', '', 'A', 3, 1, 0, 2, 2, 7, -5, 3, NULL, NULL),
('Senegal', 'sen', 'sen', 'ALIOU CISSE', '', 'H', 3, 1, 1, 1, 4, 4, 0, 4, NULL, NULL),
('Serbia', 'srb', 'srb', 'MLADEN KRSTAJIC', '', 'E', 3, 1, 0, 2, 2, 4, -2, 3, NULL, NULL),
('Spain', 'esp', 'esp', 'FERNANDO HIERRO', '', 'B', 3, 1, 2, 0, 6, 5, 1, 5, NULL, NULL),
('Sweden', 'swe', 'swe', 'JANNE ANDERSSON', '', 'F', 3, 2, 0, 1, 5, 2, 3, 6, NULL, NULL),
('Switzerland', 'sui', 'sui', 'VLADIMIR PETKOVIC', '', 'E', 3, 1, 2, 0, 5, 4, 1, 5, NULL, NULL),
('Tunisia', 'tun', 'tun', 'NABIL MAALOUL', '', 'G', 3, 1, 0, 2, 5, 8, -3, 3, NULL, NULL),
('Uruguay', 'uru', 'uru', 'OSCAR TABAREZ', '', 'A', 3, 3, 0, 0, 5, 0, 5, 9, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `matches`
--

CREATE TABLE `matches` (
  `Match_id` int(10) UNSIGNED NOT NULL,
  `Team1_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Team1_goal` int(11) NOT NULL,
  `Team2_goal` int(11) NOT NULL,
  `Team2_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Man_of_the_match` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Round` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Stadium_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Date_time` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `matches`
--

INSERT INTO `matches` (`Match_id`, `Team1_name`, `Team1_goal`, `Team2_goal`, `Team2_name`, `Man_of_the_match`, `Round`, `Stadium_name`, `Date_time`, `created_at`, `updated_at`) VALUES
(1, 'Russia', 5, 0, 'Saudi Arabia', 'Denis Cheryshev', 'Group', 'Luzhniki Stadium', '14 June 2018 18.00 local time', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(12, '2018_07_26_230319_create_groups_table', 1),
(17, '2018_07_26_233153_create_players_table', 2),
(18, '2018_07_26_233618_create_stadiums_table', 3),
(19, '2018_07_26_234058_create_matches_table', 4),
(20, '2018_07_26_234450_create_awards_table', 5),
(21, '2018_08_02_232728_add__image_to_groups', 6),
(22, '2014_10_12_000000_create_users_table', 7),
(23, '2014_10_12_100000_create_password_resets_table', 7),
(24, '2018_08_04_005522_drop__player_name_from_awards', 8),
(25, '2018_08_28_192940_create_comments_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

CREATE TABLE `players` (
  `Player_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Image` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Age` int(11) NOT NULL,
  `Country` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Position` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Jersey_number` int(11) NOT NULL,
  `Match_played` int(11) NOT NULL,
  `Goals` int(11) NOT NULL,
  `Assists` int(11) NOT NULL,
  `Attempts` int(11) NOT NULL,
  `Yellow_card` int(11) NOT NULL,
  `Red_card` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`Player_name`, `Image`, `Age`, `Country`, `Position`, `Jersey_number`, `Match_played`, `Goals`, `Assists`, `Attempts`, `Yellow_card`, `Red_card`, `created_at`, `updated_at`) VALUES
('Antoine GRIEZMANN', 'ANTOINE GRIEZMANN', 27, 'France', 'Forward', 7, 7, 4, 2, 21, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('Eden HAZARD', 'Eden HAZARD', 27, 'Begium', 'Forward', 10, 6, 3, 2, 17, 1, 0, NULL, NULL),
('Lionel Messi', 'Lionel Messi', 31, 'Argentina', 'Forward', 10, 4, 1, 2, 17, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('MILE JEDINAK', 'MILE JEDINAK', 34, 'Australia', 'Midfielder', 15, 3, 2, 0, 6, 1, 0, NULL, NULL),
('Philippe COUTINHO', 'Philippe COUTINHO', 26, 'Brazil', 'Midfielder', 11, 5, 2, 2, 22, 1, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `stadiums`
--

CREATE TABLE `stadiums` (
  `Stadium_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `Image` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Host_city` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Location` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Capacity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stadiums`
--

INSERT INTO `stadiums` (`Stadium_name`, `Description`, `Image`, `Host_city`, `Location`, `Capacity`, `created_at`, `updated_at`) VALUES
('Ekaterinburg Arena', 'History : \r\n<br><br>\r\nHome to one of the country\'s oldest football clubs, FC Ural, the stadium was built in 1953. Since then, it has been refurbished on a number of occasions. The last of these refits has been made for the 2018 FIFA World Cup™. On each occasion, however, the stadium\'s historical façade remained untouched, as an architectural legacy. Architectural and decorative features typical of Soviet neo-Classicism were used lavishly in the construction of the stands, along with decorative art in the form of sculptures, vases and banners.\r\n<br><br>\r\nDesign : \r\n<br><br>\r\nThe stadium retains its recognisable historical façade, although a roof and temporary stands was installed for Russia 2018.', 'Ekaterina Arena.jpg', 'Ekaterinburg', 'Repin Street', 33061, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('Fisht Stadium', 'History : \r\n<br>\r\n<br>\r\nLocated in the Olympic Park in Imeretin Valley in Sochi, Fisht Stadium was built for the Winter Olympics in February 2014, and hosted the opening and closing ceremonies.The stadium has been reconstructed for the 2018 FIFA World Cup™ and was re-opened in 2017, where the venue hosted FIFA Confederations Cup matches.\r\n<br><br>\r\nDesign :\r\n<br><br>\r\nFisht Stadium was originally named after Mount Fisht, a peak in the Caucasus range of mountains. In the local language, Adygeyan, \"fisht\" means \"white head\". The silhouette of the arena, which was designed by British architects, resembles a snow-capped mountain peak.', 'Fisht Stadium.jpg', 'Sochi', 'Olympic Park, Adler district', 44287, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('Kaliningrad Stadium', 'Kaliningrad Stadium was built for Russia 2018 on Oktyabrsky Island, right in the heart of Kaliningrad. The selection of Kaliningrad as a host city has prompted the local authorities to develop the island, which for many centuries has been a wilderness, left largely untouched. After the 2018 World Cup, a new residential development will be built around the stadium, with parks, quays and embankments alongside the Pregola river.\r\n\r\nKaliningrad Stadium is a multi-purpose venue. As well as football matches, it will host other sporting events and concerts.', 'Kaliningrad Stadium.jpg', 'Kaliningrad', 'Oktyabrsky Island', 33973, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('Kazan Arena', 'Kazan Arena was built in preparation for the Summer World University Games in 2013, when it hosted the opening and closing ceremonies. A football pitch was installed once the games were over. The stadium hosted its first match in August 2013, when Rubin Kazan drew 1:1 with Lokomotiv Moscow, and also served as a FIFA Confederations Cup 2017 venue.\r\n\r\nKazan Arena was designed by the same firm of architects as Wembley Stadium and Emirates Stadium in London. It has a unique design, which blends seamlessly into Kazan\'s urban landscape. Viewed from above, the arena, which stands on the banks of the Kazanka river, resembles a water-lily.', 'Kazan Arena.jpg', 'Kazan', 'Chistopolskaya Street, Novo-Savinovsky district', 42873, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('Luzhniki Stadium', 'The main stadium for Russia 2018 was originally built to host the first nationwide summer Spartakiad in 1956. Since then, Luzhniki Stadium has hosted a multitude of major sporting and cultural events, including the 1980 Summer Olympics, world championships in ice hockey, athletics and rugby and concerts featuring some of the world\'s greatest musicians. Throughout this period, however, football has played a special role, with the stadium having hosted more than 3,000 matches.\r\n\r\nLuzhniki Stadium is the venue for most of the matches played by the Russian national football team, and at various times it has also served as the home stadium for Moscow\'s Spartak, CSKA and Torpedo clubs. It has also hosted the finals of the two main competitions in European club football: the final of the 1999 UEFA Cup (now known as the Europa League), in which Italian side Parma beat French club Olympique Marseille 3:0, and the UEFA Champions League final in 2008, when, in driving rain and with 74,000 spectators looking on, an all-English affair ended with Manchester United defeating Chelsea in a dramatic penalty shoot-out.\r\n\r\nWork to rebuild Luzhniki Stadium for Russia 2018 began in 2013. One of the crucial aspects of the project was preserving the historical façade of the stadium, which has become one of Moscow\'s true landmarks. Inside, the stadium was totally refurbished: the athletics track was removed, the stands moved closer to the pitch and made rectangular, the gradient adjusted and two extra tiers added. Luzhniki Stadium\'s capacity was increased from 78,000 to 80,000.', 'Luzhniki Stadium.jpg', 'Moscow', 'Luzhniki Sports Complex', 78011, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('Mordovia Arena', 'Work on Mordovia Arena began in 2010, the 1000th anniversary of the unification of the Mordovian people with Russia\'s other ethnic groups. The arena is located in the centre of the city, on the bank of the Insar river.\r\n\r\nDesign\r\nThe stadium has been designed in the shape of an oval. Its bright range of colours, combining orange, red and white, honours the distinctive colour palette of Mordovia\'s arts and crafts.', 'Mordovia Arena.jpg', 'Saransk', 'The Insar river basin', 41685, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('Nizhny Novgorod Stadium', 'Nizhny Novgorod Stadium is being built in one of the city\'s most picturesque locations, at the confluence of the Volga and Oka rivers, near the Alexander Nevsky Cathedral. The area offers a wonderful view of the Nizhny Novgorod Kremlin, situated on the other side of the Oka.\r\n\r\nNizhny Novgorod Stadium\'s design is inspired by aspects of nature in the Volga region - water and wind. At the same time, given its location near the city\'s most historic districts, the building must have a silhouette that is restrained and severe. Its light basic structure, made up of fine triangular supports arranged in a circle, supports a semi-transparent undulating façade that conceals the bowl of the stadium. The building is surrounded by a walkway connected by stairs inclined at a tangent, highlighting the flow of the stadium. By evening, the various façades will be lit up, highlighting their plasticity and airiness.', 'Nizhny Novgorod Stadium.jpg', 'Nizhny Novgorod', 'Confluence of the Oka and Volga rivers', 43319, NULL, NULL),
('Rostov Arena', 'Rostov Arena is situated on the left bank of the Don River. Buoyed by its selection as a host city, Rostov-on-Don will be able to expand in size by developing its left bank, where the local tourism facilities and restaurants have traditionally attracted locals and visitors alike.\r\n\r\nRostov Arena\'s original design blends harmoniously into the picturesque landscape. The shape of the arena\'s roof imitates the meanderings of the Don River. The varying heights of the stands allow spectators to savour not only what is happening on the pitch, but also to enjoy views of Rostov-on-Don. From the left bank of the Don, the city looks particularly beautiful.', 'Rostov Arena.jpg', 'Rostov-on-Don', 'Left bank of the river Don, the Grebnoy canal area', 43472, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('Saint Petersburg Stadium', 'Saint Petersburg\'s new, super-modern stadium is built on the site of the Kirov Stadium on Krestovsky Island, which, in its day, was one of the country\'s largest stadiums, with a capacity of 110,000. The tender to build Saint Petersburg Stadium was won by the renowned Japanese architect Kisho Kurosawa. The stadium hosted the Opening Match and Final of the 2017 FIFA Confederations Cup.\r\n\r\nDesign\r\nThe architect\'s vision for Saint Petersburg Stadium was of a spaceship that has landed on the shores of the Gulf of Finland. The seven-storey building is 79 metres high. Technologically, Saint Petersburg Stadium is one of the world\'s most modern arenas. Equipped with a retractable roof and a sliding pitch, it\'s able to host any type of event at any time of year - even in winter, the temperature inside the stadium is 15 degrees Celsius.', 'Saint Petersburg Stadium.jpg', 'Saint Petersburg', 'Krestovsky Island', 64468, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('Samara Arena', 'Samara Arena is in the Radiotsentr district. The stadium is surrounded by a residential development and good-quality infrastructure. Stadium construction officially started on 21 July 2014.\r\n\r\nSamara Arena\'s design concept is dominated by the theme of space, as a tribute to the traditions of the region, and its renowned aerospace sector. A light, metallic hi-tech basic structure of weight-bearing supports will provide a cover over the stands, which will be 60 metres high. By evening, the whole structure will be lit up, emphasising the stadium\'s expressive design.', 'Samara Arena.jpg', 'Samara', 'Radiotsentr district', 41970, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('Spartak Stadium', 'Spartak Moscow, the \"people\'s team\", is one of Russia\'s most popular football clubs. And yet, ever since it was founded in 1922, it has had to make do without its own stadium. The club has played home games at Moscow\'s Dynamo, Luzhniki and Lokomotiv stadiums, at the Khimki Arena just outside Moscow and even in Ekaterinburg.\r\n\r\nIn spring 2010, on the site of Moscow\'s former airfield in the district of Tushino, Spartak started building its own 45,000-seater stadium. The venue hosted its first match on 5 September 2014, when Spartak drew 1:1 with Red Star Belgrade, and was also a 2017 FIFA Confederations Cup stadium.\r\n\r\nSpartak Stadium\'s appearance is a matter of great pride. Its façade takes the form of chain mail consisting of hundreds of little diamonds representing the Spartak logo. The façade can be changed depending on which team is playing. For Spartak matches, the arena is bathed in red-and-white; when the national team is in town, it switches to the colours of the Russian flag.\r\n\r\nSpartak Stadium also houses the Spartak Moscow museum, the official fan club and the club shop. A new underground station has opened nearby.', 'Spartak Stadium.jpg', 'Moscow', 'Tushino', 44190, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('Volgograd Arena', 'Volgograd Arena was built on the site of the Central stadium, at the foot of the Mamayev Kurgan war memorial. The location of the previous stadium is a Mecca for local football supporters, with the more seasoned among them able to remember European victory over Manchester United and domestic battles with Spartak Moscow.\r\n\r\nThe stadium\'s façade takes the form of an inverted, truncated cone with an open lattice structure, lending the entire building a monumental solidity. The design for the façade supports and the windbreaks embody aspects of a Victory Day firework display. The special way in which the stadium\'s roof has been constructed, with cables reminiscent of the spokes of the wheel on a bicycle, lends the arena an extra element of airiness.', 'Volgograd Arena.jpg', 'Volgograd', 'Central Park', 43713, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Sohag', 'Sohag@rana.com', '$2y$10$FWqzSbrQtS7s/XBM2W4j3e5CjDsqI4CDh/eDiDJkACZqbaN3alI8a', '3o1eU6bca85XCWtwB1jK1kbUvQLJF1W09jG85rFE7GcdHxQnXBMv8IohFZGW', '2018-08-03 06:10:48', '2018-08-03 06:10:48'),
(2, 'Sohag', 'shg@rana.com', '$2y$10$aess6BP4knXJ19TWHoDShO8IPGRv.JoJztWTxRGoImJsJZulpuhyC', 'djn2zDpCWifaBCbNu9IhDmWO6VZgShsxPGVmP5DMgXeYM4BGbGCj0JJBiZ2v', '2018-08-28 10:44:31', '2018-08-28 10:44:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `awards`
--
ALTER TABLE `awards`
  ADD PRIMARY KEY (`Awards_name`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_user_id_foreign` (`User_ID`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`Country`);

--
-- Indexes for table `matches`
--
ALTER TABLE `matches`
  ADD PRIMARY KEY (`Match_id`),
  ADD KEY `matches_stadium_name_foreign` (`Stadium_name`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`Player_name`),
  ADD KEY `players_country_foreign` (`Country`);

--
-- Indexes for table `stadiums`
--
ALTER TABLE `stadiums`
  ADD PRIMARY KEY (`Stadium_name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `matches`
--
ALTER TABLE `matches`
  MODIFY `Match_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`User_ID`) REFERENCES `users` (`id`);

--
-- Constraints for table `matches`
--
ALTER TABLE `matches`
  ADD CONSTRAINT `matches_stadium_name_foreign` FOREIGN KEY (`Stadium_name`) REFERENCES `stadiums` (`Stadium_name`);

--
-- Constraints for table `players`
--
ALTER TABLE `players`
  ADD CONSTRAINT `players_country_foreign` FOREIGN KEY (`Country`) REFERENCES `groups` (`Country`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
