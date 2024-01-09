-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 09, 2024 at 04:48 PM
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
(2, 'Languages', 'Dillər', 'Языки'),
(3, 'Programming', 'Proqramlaşdırma', 'Программирование'),
(5, 'Technical subjects', 'Texniki fənnlər', 'Технические предметы'),
(6, 'Humanitarian subjects', 'Humanitar fənnlər', 'Гуманитарные науки');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `ct_id` int NOT NULL,
  `ct_fullname` varchar(255) NOT NULL,
  `ct_phone` varchar(255) NOT NULL,
  `ct_email` varchar(255) NOT NULL,
  `ct_message` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`ct_id`, `ct_fullname`, `ct_phone`, `ct_email`, `ct_message`) VALUES
(1, 'Айхан Мустафаев', '+994556772714', 'ayxan.mustafayev.2004@mail.ru', 'aaaa'),
(2, 'Айхан Мустафаев', '+994556772714', 'ayxan.mustafayev.2004@mail.ru', 'qqqqqqq'),
(3, 'Айхан Мустафаев', '+994556772714', 'ayxan.mustafayev.2004@mail.ru', '11'),
(4, 'Ayxan Mustafayev', '+994556772714', 'ajhanmustafaev@gmail.com', 'aaaaaa');

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
(5, 'History', 'История', 'Tarix', '<p>Welcome to Chronicles of the Past, where history is transformed into a thrilling adventure that reveals secrets and inspires you to delve into the richness of human heritage. This course is designed for those who seek to understand the past in order to better understand the present.</p>\r\n', '<p>Добро пожаловать на курс \"Chronicles of the Past\", где история превращается в захватывающее приключение, раскрывающее тайны и вдохновляющее к погружению в богатство человеческого наследия. Этот курс предназначен для тех, кто стремится понять прошлое, чтобы лучше осознать настоящее.</p>\r\n', '<p>Tarixin sirləri açan və sizi insan irsinin zənginliyinə dərk etməyə ruhlandıran həyəcanverici macəraya çevrildiyi Keçmişin Salnamələrinə xoş gəlmisiniz. Bu kurs bu günü daha yaxşı başa düşmək üçün keçmişi dərk etməyə çalışanlar üçün nəzərdə tutulmuşdur.</p>\r\n', 'UI_History-1-2048x1423.png', '6', '1'),
(6, 'Physics', 'Физика', 'Fizika', '<p>Welcome to an exciting physics course that will open up to you the wonderful world of fundamental laws of nature! \"Exploring the Wonders of Physics\" is a unique opportunity to gain a deeper understanding of key concepts in physics, from invisible quantum phenomena to the study of cosmic horizons.</p>\r\n', '<p>Добро пожаловать на увлекательный курс по физике, который откроет перед вами удивительный мир фундаментальных законов природы! \"Exploring the Wonders of Physics\" – это уникальная возможность глубже понять ключевые концепции физики, начиная от невидимых квантовых явлений и заканчивая изучением космических горизонтов.</p>\r\n', '<p>Sizə təbiətin fundamental qanunlarının gözəl dünyasını açacaq maraqlı fizika kursuna xoş gəlmisiniz! “Fizika möcüzələrinin araşdırılması” görünməz kvant hadisələrindən tutmuş kosmik üfüqlərin tədqiqinə qədər fizikada əsas anlayışları daha dərindən başa düşmək üçün unikal imkandır.</p>\r\n', 'examining-molecular-model_1098-19572-min.jpg', '5', '1'),
(7, 'English', 'Английский язык', 'İngilis dili', '<p>Welcome to the English Mastery course, your path to English fluency! Regardless of your English level, this course provides unique tools and strategies to develop high-level communication skills.</p>\r\n', '<p>Добро пожаловать на курс \"English Mastery\", ваш путь к свободному владению английским языком! Независимо от вашего уровня владения английским, этот курс предоставляет уникальные инструменты и стратегии для развития навыков общения на высоком уровне.</p>\r\n', '<p>İngilis dilini səlis danışmağa aparan yolunuz olan İngilis dili ustalığı kursuna xoş gəlmisiniz! İngilis dili səviyyənizdən asılı olmayaraq, bu kurs yüksək səviyyəli ünsiyyət bacarıqlarını inkişaf etdirmək üçün unikal alətlər və strategiyalar təqdim edir.</p>\r\n', 'glory05-300x200.jpg', '2', '1'),
(8, 'Python Programming Basics', 'Основы Программирования на Python', 'Python Proqramlaşdırma Əsasları', '<p>This course provides a solid introduction to the Python programming language. Students will learn to write efficient code, solve problems, and create simple applications. Suitable for beginners and those seeking a career in software development.</p>\r\n', '<p>Этот курс предоставляет прочное введение в язык программирования Python. Студенты научатся писать эффективный код, решать задачи и создавать простые приложения. Подходит для новичков и тех, кто стремится карьере в сфере разработки программного обеспечения.</p>\r\n', '<p>Bu kurs Python proqramlaşdırma dilinə möhkəm giriş təqdim edir. Tələbələr effektiv kod yazmağı, problemləri həll etməyi və sadə proqramlar yaratmağı öyrənəcəklər. Yeni başlayanlar və proqram təminatı sahəsində karyera qurmaq istəyənlər üçün uyğundur.</p>\r\n', 'main-image.png', '3', '1'),
(9, 'Algebra and Geometry: Basic Mathematics', 'Алгебра и Геометрия: Основы Математики', 'Cəbr və həndəsə: Riyaziyyatın əsasları', '<p>This course provides students with a thorough introduction to the basic concepts of algebra and geometry. Students will deepen their understanding of algebraic operations, equation solving, and basic principles of geometric shapes. The course is suitable for middle and high school students.</p>\r\n', '<p>Этот курс предоставляет студентам тщательное введение в основные понятия алгебры и геометрии. Студенты углубят свое понимание алгебраических операций, решения уравнений и базовых принципов геометрических форм. Курс подходит для студентов средней и старшей школы.</p>\r\n', '<p>Bu kurs tələbələrə cəbr və həndəsənin əsas anlayışlarına hərtərəfli giriş təqdim edir. Şagirdlər cəbri əməliyyatlar, tənliklərin həlli və həndəsi fiqurların əsas prinsipləri haqqında anlayışlarını dərinləşdirəcəklər. Kurs orta və ali məktəb tələbələri üçün uyğundur.</p>\r\n', 'riyaziyyat-hazirligi.jpg', '5', '1'),
(10, 'Fundamentals of Organic Chemistry', 'Основы Органической Химии', 'Üzvi kimyanın əsasları', '<p>This course provides students with an introduction to the world of organic chemistry, including molecular structure, reactions, and properties of organic compounds. Students will also learn about the applications of organic chemistry in modern science and industry.</p>\r\n', '<p>Этот курс предоставляет студентам введение в мир органической химии, включая структуру молекул, реакции и свойства органических соединений. Студенты также узнают о приложениях органической химии в современной науке и промышленности.</p>\r\n', '<p>Bu kurs tələbələri üzvi kimya dünyasına, o cümlədən üzvi birləşmələrin molekulyar quruluşu, reaksiyaları və xassələri ilə tanış edir. Şagirdlər həmçinin üzvi kimyanın müasir elm və sənayedə tətbiqləri ilə tanış olacaqlar.</p>\r\n', 'kimya_kurslar.jpg', '5', '1'),
(11, 'Russian language basics', 'Основы Русского Языка', 'Rus dilinin əsasları', '<p>This course provides students with a strong understanding of the fundamentals of the Russian language. Take extensive classes in grammar, spelling and sentence structure to confidently use Russian in everyday life and business communications.</p>\r\n', '<p>Этот курс предоставляет студентам крепкое понимание основ русского языка. Пройдите обширные занятия по грамматике, орфографии и структуре предложений, чтобы уверенно использовать русский язык в повседневной жизни и бизнес-коммуникациях.</p>\r\n', '<p>Bu kurs tələbələrə rus dilinin əsaslarını güclü şəkildə başa düşməyi təmin edir. Rus dilindən gündəlik həyatda və işgüzar ünsiyyətdə inamla istifadə etmək üçün qrammatika, orfoqrafiya və cümlə quruluşu üzrə geniş dərslər keçin.</p>\r\n', 'qzrwu6edpgmxe1yegabouymp6zrj8eya1.jpg', '2', '1');

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
(1, 'Courses \"Zafar\"', 'Курсы \"Зафар\"', '\"Zəfər\" Kursları', 'https://www.zefer.edu.az/', '277580918_286642190301377_913944197239725282_n.jpg', '1'),
(2, 'Courses \"Hadaf\"', 'Курсы \"Хадаф\"', '\"Hədəf\" kursları', 'https://hedef.edu.az/', 'hedefloqo.jpg', '1'),
(3, 'Courses \"Zeka\"', 'Курсы \"Зека\"', '\"Zəka\" kursları', 'https://zeka.edu.az/az', 'photo_2023-12-27_00-39-08.jpg', '1'),
(4, 'Courses.az', 'Курсы.az', 'Kurslar.az', 'https://kurslar.az/', '255312651_4593631597367718_5504720485939602628_n.png', '1'),
(5, 'Coursetap.az', 'Курстап.az', 'Kurstap.az', 'https://kurstap.az/', 'coverv2.jpg', '1'),
(6, 'Courses \"№1\"', 'Курсы \"№1\"', '\"№1\" Kursları', 'https://nomre1.edu.az/', 'n1.jpg', '1'),
(7, 'Courses \"Globus\"', 'Курсы \"Глобус\"', '\"Qlobus\" Kursları', 'https://www.facebook.com/QlobusKurslari/?locale=az_AZ', 'Без_названия_(1).png', '1');

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
(1, 'English', 'Английский язык', 'İngilis dili', '<p>This course is taught 3 times a week, the first month is 50 AZN, and then 60 AZN.</p>\r\n', '<p>Этот курс преподается 3 раза в неделю, первый месяц стоит 50 AZN, а затем 60 AZN.</p>\r\n', '<p>Bu kursun tədrisi həftə i&ccedil;i 3 dəfə həyata ke&ccedil;irilir, ilk ayı 50 AZN, sonra isə 60 AZN nəzərdə tutulub.</p>\r\n', 'https://skyeng.ru/articles/anglijskij-s-nulya/', 'pngtree-learn-english-transparent-png-free-download-png-image_2702150-removebg-preview1.png', '1'),
(2, 'Russian language', 'Русский язык', 'Rus dili', '<p>Bu kursun tədrisi həftə i&ccedil;i 2 dəfə həyata ke&ccedil;irilir, ilk ayı 60 AZN, sonra isə 70 AZN nəzərdə tutulub.</p>\r\n', '<p>Этот курс преподается два раза в неделю, первый месяц стоит 60 AZN, а затем 70 AZN.</p>\r\n', '<p>Bu kursun tədrisi həftə i&ccedil;i 2 dəfə həyata ke&ccedil;irilir, ilk ayı 60 AZN, sonra isə 70 AZN nəzərdə tutulub.</p>\r\n', 'https://www.lingohut.com/az/l71/rus-dilini-öyrən', 'png-clipart-russian-learning-language-acquisition-study-skills-education-word-logo-russian-removebg-preview.png', '1'),
(3, 'Chemistry', 'Химия', 'Kimya', '<p>This course is taught twice a week and costs AZN 70 per month.</p>\r\n', '<p>Этот курс преподается два раза в неделю и стоит 70 манатов в месяц.</p>\r\n', '<p>Bu kursun tədrisi həftə i&ccedil;i 2 dəfə həyata ke&ccedil;irilir,ayı 70AZN nəzərdə tutulub.</p>\r\n', 'https://play.google.com/store/apps/details?id=com.lahcenappsinc.learn.chemistry&hl=az&gl=US&pli=1', '532-5326768_chemistry-lab-equipment-png-transparent-png-removebg-preview.png', '1'),
(4, 'Math', 'Математика', 'Riyaziyyat', '<p>This course is taught twice a week and costs AZN 60 per month.</p>\r\n', '<p>Этот курс преподается два раза в неделю и стоит 60 манатов в месяц.</p>\r\n', '<p>Bu kursun tədrisi həftə i&ccedil;i 2 dəfə həyata ke&ccedil;irilir,ayı 60AZN nəzərdə tutulub.</p>\r\n\r\n<p>&nbsp;\r\n<p>&nbsp;</p>\r\n</p>\r\n', 'https://uchis-online.ru/blog/soveti-shkolnikam/kak-viuchit-algebru', 'lovepik-hand-drawn-math-exercises-png-image_400495485_wh1200-removebg-preview.png', '1');

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
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`ct_id`);

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
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `ct_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `c_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `p_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `sl_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
