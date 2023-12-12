-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 12, 2023 at 08:10 PM
-- Server version: 8.0.30
-- PHP Version: 8.0.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `brain_courses`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int NOT NULL,
  `a_username` varchar(255) NOT NULL,
  `a_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `a_username`, `a_password`) VALUES
(1, 'ayxan', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cg_id` int NOT NULL,
  `cg_name_en` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `cg_name_az` varchar(255) NOT NULL,
  `cg_name_ru` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cg_id`, `cg_name_en`, `cg_name_az`, `cg_name_ru`) VALUES
(2, 'Language', 'Dil', 'Языки'),
(3, 'IT', 'IT IT', 'Информац.'),
(5, 'Texniki fənnlər', '', ''),
(6, 'Humanitar fənnlər', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `c_id` int NOT NULL,
  `c_title_en` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `c_title_ru` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `c_title_az` varchar(255) NOT NULL,
  `c_desc_en` varchar(400) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `c_desc_ru` varchar(400) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `c_desc_az` varchar(400) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `c_img` varchar(255) NOT NULL,
  `c_category` varchar(255) NOT NULL,
  `c_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`c_id`, `c_title_en`, `c_title_ru`, `c_title_az`, `c_desc_en`, `c_desc_ru`, `c_desc_az`, `c_img`, `c_category`, `c_status`) VALUES
(5, 'History', 'Всеобщая история', 'Tarix', '<p>Learn history</p>\r\n', '<p>Учите историю</p>\r\n', '<p>Kursumuz həftə içi 3 gün davam edir və günaşırı 2 saat intervalı ilə tədris olunur. </p>\r\n', 'UI_History-1-2048x1423.png', '6', '1'),
(6, 'Physics', 'Физика', 'Fizika', '<p>Learn physics</p>\r\n', '<p>0</p>\r\n', '<p>Kursumuz həftə içi 3 gün davam edir və günaşırı 2 saat intervalı ilə tədris olunur.</p>\r\n', 'physics.png', '5', '1'),
(7, 'English', 'Английский язык', 'İngilis dili', 'Dünyanın hər yerində keçirilən bu dili dərindən öyrənin! Yazılın, 50 AZN/ay.', '0', 'Kursumuz həftə içi 3 gün davam edir və günaşırı 2 saat intervalı ilə tədris olunur. Bu kurs sayəsində abituriyentlər ümumi tarix fənni üzrə yüksək biliyə yiyələnə bilərlər. Müraciət etməyə tələsin! Qiymət : 80 AZN/ay.', 'events_kurs_20211.jpg', '2', '1'),
(8, 'Javascript', 'JavaScript', 'JavaScript', 'Kursumuz həftə içi 3 gün davam edir və günaşırı 1.5 saat intervalı ilə tədris olunur. Bu kurs sayəsində proqramlaşdırmanın Front-end sahəsi üzrə yüksək biliyə yiyələnə bilərlər. Müraciət etməyə tələsin! Qiymət : 170 AZN/ay.', '0', 'Kursumuz həftə içi 3 gün davam edir və günaşırı 1 saat intervalı ilə tədris olunur. Bu kurs sayəsində abituriyentlər ümumi tarix fənni üzrə yüksək biliyə yiyələnə bilərlər. Müraciət etməyə tələsin! Qiymət : 80 AZN/ay.', 'main-image.png', '3', '1'),
(9, 'Math', 'Математика', 'Riyaziyyat', 'Kursumuz həftə içi 3 gün davam edir və günaşırı 1.5 saat intervalı ilə tədris olunur. Bu kurs sayəsində abituriyentlər riyaziyyat fənni üzrə yüksək biliyə yiyələnə bilərlər. Müraciət etməyə tələsin! Qiymət : 70 AZN/ay.', '0', 'Kursumuz həftə içi 3 gün davam edir və günaşırı 1 saat intervalı ilə tədris olunur. Bu kurs sayəsində abituriyentlər riyaziyyat fənni üzrə yüksək biliyə yiyələnə bilərlər. Müraciət etməyə tələsin! Qiymət : 80 AZN/ay.', 'riyaziyyat-hazirligi.jpg', '5', '1'),
(10, 'Chemistry', 'Химия', 'Kimya', '<p>Kursumuz həftə içi 3 gün davam edir və günaşırı 1.5 saat intervalı ilə tədris olunur. Bu kurs sayəsində abituriyentlər kimya fənni üzrə yüksək biliyə yiyələnə bilərlər. Müraciət etməyə tələsin! Qiymət : 70 AZN/ay.</p>\r\n', '<p>Kursumuz həftə içi 3 gün davam edir və günaşırı 1.5 saat intervalı ilə tədris olunur. Bu kurs sayəsində abituriyentlər kimya fənni üzrə yüksək biliyə yiyələnə bilərlər. Müraciət etməyə tələsin! Qiymət : 70 AZN/ay. RUS</p>\r\n', '<p>Kursumuz həftə içi 3 gün davam edir və günaşırı 1 saat intervalı ilə tədris olunur. Bu kurs sayəsində abituriyentlər kimya fənni üzrə yüksək biliyə yiyələnə bilərlər. Müraciət etməyə tələsin! Qiymət : 80 AZN/ay.</p>\r\n', 'kimya_kurslar.jpg', '5', '1'),
(11, 'Russian language', 'Русский язык', 'Rus dili', '<p>Eng</p>\r\n', '<p>Rus</p>\r\n', '<p>Aze</p>\r\n', 'rus_dili.jpg', '2', '1');

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `p_id` int NOT NULL,
  `p_title_en` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `p_title_ru` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `p_title_az` varchar(255) NOT NULL,
  `p_link` varchar(255) NOT NULL,
  `p_img` varchar(255) NOT NULL,
  `p_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`p_id`, `p_title_en`, `p_title_ru`, `p_title_az`, `p_link`, `p_img`, `p_status`) VALUES
(1, 'Courses \"Zafar\"', 'Курсы \"Зафар\"', 'Zəfər Kursları', 'https://www.zefer.edu.az/', '277580918_286642190301377_913944197239725282_n.jpg', '1'),
(2, 'English', 'Английский язык', 'İngilis dili', 'https://www.edx.org/learn/english', 'events_kurs_2021.jpg', '1');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `sl_id` int NOT NULL,
  `sl_title_en` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `sl_title_ru` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `sl_title_az` varchar(255) NOT NULL,
  `sl_description_en` varchar(400) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `sl_description_ru` varchar(400) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `sl_description_az` varchar(400) NOT NULL,
  `sl_link` varchar(255) NOT NULL,
  `sl_img` varchar(255) NOT NULL,
  `sl_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`sl_id`, `sl_title_en`, `sl_title_ru`, `sl_title_az`, `sl_description_en`, `sl_description_ru`, `sl_description_az`, `sl_link`, `sl_img`, `sl_status`) VALUES
(1, 'English', 'Английский', 'İngilis dili', '<p>English is recognized as an international language in the world. Those who know this language can master a good art, and can become a professional in the art they have mastered and work for a high salary. C2 level is considered the highest level of English.</p>\r\n', '<p>İngilis dili d&uuml;nyada beynəlxalq dil kimi tanınır. Bu dili bilənlər həm yaxşı sənətə yiyələnə bilərlər, həm də yiyələndiyi sənət &uuml;zrə peşəkarlaşıb y&uuml;ksək maaşa işləyə bilərlər. C2 səviyyə ingilis dili ən y&uuml;ksək səviyyə hesab olunur. Рус</p>\r\n', '<p><span style=\"color:#ffffff\"><strong>İngilis dili d&uuml;nyada beynəlxalq dil kimi tanınır. Bu dili bilənlər həm yaxşı sənətə yiyələnə bilərlər, həm də yiyələndiyi sənət &uuml;zrə peşəkarlaşıb y&uuml;ksək maaşa işləyə bilərlər. C2 səviyyə ingilis dili ən y&uuml;ksək səviyyə hesab olunur.5</strong></span></p>\r\n', 'www.english.com', 'events_kurs_2021.jpg', '1'),
(2, 'Russian language', 'JS RU', 'Rus dili', '<p>Get the opportunity to work in many foreign countries by learning Russian.</p>\r\n', '<p>Rus dili oyrenmekle bir cox xarici olkelerde islemek imkani elde edin. RUS</p>\r\n', '<p><span style=\"color:#ffffff\">Rus dili oyrenmekle bir cox xarici olkelerde islemek imkani elde edin.</span></p>\r\n', 'www.rus.com', 'rus_dili.jpg', '1'),
(3, 'JavaScript ENG', 'JS RU', 'JavaScript Az', '<p>Learn JS</p>\r\n', '<p>JS RU</p>\r\n', '<p><span style=\"color:#ffffff\">Js &ouml;yrənin</span></p>\r\n', 'www.javascript.com', 'main-image.png', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cg_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`sl_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cg_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `c_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `p_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `sl_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
