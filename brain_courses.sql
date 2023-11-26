-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Hazırlanma Vaxtı: 26 Noy, 2023 saat 16:58
-- Server versiyası: 8.0.30
-- PHP Versiyası: 8.0.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Verilənlər Bazası: `brain_courses`
--

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `admin`
--

CREATE TABLE `admin` (
  `a_id` int NOT NULL,
  `a_username` varchar(255) NOT NULL,
  `a_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Sxemi çıxarılan cedvel `admin`
--

INSERT INTO `admin` (`a_id`, `a_username`, `a_password`) VALUES
(1, 'ayxan', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `category`
--

CREATE TABLE `category` (
  `cg_id` int NOT NULL,
  `cg_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Sxemi çıxarılan cedvel `category`
--

INSERT INTO `category` (`cg_id`, `cg_name`) VALUES
(2, 'Language'),
(3, 'IT'),
(5, 'Texniki fənnlər'),
(6, 'Humanitar fənnlər');

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `courses`
--

CREATE TABLE `courses` (
  `c_id` int NOT NULL,
  `c_title_en` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `c_title_rus` varchar(255) NOT NULL,
  `c_title_az` varchar(255) NOT NULL,
  `c_desc_en` varchar(400) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `c_desc_rus` varchar(400) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `c_desc_az` varchar(400) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `c_img` varchar(255) NOT NULL,
  `c_category` varchar(255) NOT NULL,
  `c_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Sxemi çıxarılan cedvel `courses`
--

INSERT INTO `courses` (`c_id`, `c_title_en`, `c_title_rus`, `c_title_az`, `c_desc_en`, `c_desc_rus`, `c_desc_az`, `c_img`, `c_category`, `c_status`) VALUES
(5, 'History', 'Всеобщая история', '', 'Learn history', 'Учите историю', 'Kursumuz həftə içi 3 gün davam edir və günaşırı 2 saat intervalı ilə tədris olunur. Bu kurs sayəsində abituriyentlər ümumi tarix fənni üzrə yüksək biliyə yiyələnə bilərlər. Müraciət etməyə tələsin! Qiymət : 80 AZN/ay.', 'UI_History-1-2048x1423.png', '6', '1'),
(6, 'Physics', 'Физика', 'Fizika', 'Learn physics', '0', 'Kursumuz həftə içi 3 gün davam edir və günaşırı 2 saat intervalı ilə tədris olunur. Bu kurs sayəsində abituriyentlər ümumi tarix fənni üzrə yüksək biliyə yiyələnə bilərlər. Müraciət etməyə tələsin! Qiymət : 80 AZN/ay.', 'physics.png', '5', '1'),
(7, 'English', 'Английский язык', 'İngilis dili', 'Dünyanın hər yerində keçirilən bu dili dərindən öyrənin! Yazılın, 50 AZN/ay.', '0', 'Kursumuz həftə içi 3 gün davam edir və günaşırı 2 saat intervalı ilə tədris olunur. Bu kurs sayəsində abituriyentlər ümumi tarix fənni üzrə yüksək biliyə yiyələnə bilərlər. Müraciət etməyə tələsin! Qiymət : 80 AZN/ay.', 'events_kurs_20211.jpg', '2', '1'),
(8, 'Javascript', 'JavaScript', 'JavaScript', 'Kursumuz həftə içi 3 gün davam edir və günaşırı 1.5 saat intervalı ilə tədris olunur. Bu kurs sayəsində proqramlaşdırmanın Front-end sahəsi üzrə yüksək biliyə yiyələnə bilərlər. Müraciət etməyə tələsin! Qiymət : 170 AZN/ay.', '0', 'Kursumuz həftə içi 3 gün davam edir və günaşırı 1 saat intervalı ilə tədris olunur. Bu kurs sayəsində abituriyentlər ümumi tarix fənni üzrə yüksək biliyə yiyələnə bilərlər. Müraciət etməyə tələsin! Qiymət : 80 AZN/ay.', 'main-image.png', '3', '1'),
(9, 'Math', 'Математика', 'Riyaziyyat', 'Kursumuz həftə içi 3 gün davam edir və günaşırı 1.5 saat intervalı ilə tədris olunur. Bu kurs sayəsində abituriyentlər riyaziyyat fənni üzrə yüksək biliyə yiyələnə bilərlər. Müraciət etməyə tələsin! Qiymət : 70 AZN/ay.', '0', 'Kursumuz həftə içi 3 gün davam edir və günaşırı 1 saat intervalı ilə tədris olunur. Bu kurs sayəsində abituriyentlər riyaziyyat fənni üzrə yüksək biliyə yiyələnə bilərlər. Müraciət etməyə tələsin! Qiymət : 80 AZN/ay.', 'riyaziyyat-hazirligi.jpg', '5', '1'),
(10, 'Chemistry', 'Химия', 'Kimya', 'Kursumuz həftə içi 3 gün davam edir və günaşırı 1.5 saat intervalı ilə tədris olunur. Bu kurs sayəsində abituriyentlər kimya fənni üzrə yüksək biliyə yiyələnə bilərlər. Müraciət etməyə tələsin! Qiymət : 70 AZN/ay.', '0', 'Kursumuz həftə içi 3 gün davam edir və günaşırı 1 saat intervalı ilə tədris olunur. Bu kurs sayəsində abituriyentlər kimya fənni üzrə yüksək biliyə yiyələnə bilərlər. Müraciət etməyə tələsin! Qiymət : 80 AZN/ay.', 'kimya_kurslar.jpg', '5', '1'),
(11, 'Russian language', 'Русский язык', 'Rus dili', '', '', '', 'rus_dili.jpg', '2', '1');

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `partners`
--

CREATE TABLE `partners` (
  `p_id` int NOT NULL,
  `p_title_en` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `p_title_rus` varchar(255) NOT NULL,
  `p_title_az` varchar(255) NOT NULL,
  `p_link` varchar(255) NOT NULL,
  `p_img` varchar(255) NOT NULL,
  `p_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Sxemi çıxarılan cedvel `partners`
--

INSERT INTO `partners` (`p_id`, `p_title_en`, `p_title_rus`, `p_title_az`, `p_link`, `p_img`, `p_status`) VALUES
(1, 'Courses \"Zafar\"', 'Курсы \"Зафар\"', 'Zəfər Kursları', 'https://www.zefer.edu.az/', '277580918_286642190301377_913944197239725282_n.jpg', '1'),
(2, 'English', 'Английский язык', 'İngilis dili', 'https://www.edx.org/learn/english', 'events_kurs_2021.jpg', '1');

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `slider`
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
-- Sxemi çıxarılan cedvel `slider`
--

INSERT INTO `slider` (`sl_id`, `sl_title_en`, `sl_title_ru`, `sl_title_az`, `sl_description_en`, `sl_description_ru`, `sl_description_az`, `sl_link`, `sl_img`, `sl_status`) VALUES
(1, 'English', 'Английский язык', 'İngilis dili', 'Know english', 'Учите англ', 'İngilis dili dünyada beynəlxalq dil kimi tanınır. Bu dili bilənlər həm yaxşı sənətə yiyələnə bilərlər, həm də yiyələndiyi sənət üzrə peşəkarlaşıb yüksək maaşa işləyə bilərlər.', 'www.english.com', 'events_kurs_2021.jpg', '1'),
(2, 'Russian language', 'Русский язык', 'Rus dili', 'Know russian language', 'Учите Русский', 'Rus dili oyrenmekle bir cox xarici olkelerde islemek imkani elde edin.', 'www.rus.com', 'rus_dili.jpg', '1'),
(3, 'JavaScript', 'JavaScript Ru', 'JavaScript Az', 'Learn JS', 'Учите JS', 'Js öyrənin', 'www.javascript.com', 'main-image.png', '1');

--
-- Indexes for dumped tables
--

--
-- Cədvəl üçün indekslər `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Cədvəl üçün indekslər `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cg_id`);

--
-- Cədvəl üçün indekslər `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`c_id`);

--
-- Cədvəl üçün indekslər `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`p_id`);

--
-- Cədvəl üçün indekslər `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`sl_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- Cədvəl üçün AUTO_INCREMENT `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Cədvəl üçün AUTO_INCREMENT `category`
--
ALTER TABLE `category`
  MODIFY `cg_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Cədvəl üçün AUTO_INCREMENT `courses`
--
ALTER TABLE `courses`
  MODIFY `c_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Cədvəl üçün AUTO_INCREMENT `partners`
--
ALTER TABLE `partners`
  MODIFY `p_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Cədvəl üçün AUTO_INCREMENT `slider`
--
ALTER TABLE `slider`
  MODIFY `sl_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
