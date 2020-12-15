-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 15, 2020 at 09:48 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nescbd_laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Who we are', 'With the growing demand from the guardians for educating their children in English Medium School and in absence/shortage of quality educational instituitions, it has been ascertained that an English Medium School and College in this port city of Chittagong.\r\nIn the light of a group of enthusiastic promoters of education decided to take up a project to establish an English Medium School & College following national curriculum in the year of 2012. The rationales behind this inspiration are as follows,\r\nFirstly, the students studying in English Medium institution definitely have an edge over other general students in pursuance of higher education or securing job both at home and abroad.\r\nSecondly, our children are imbued with national culture, tradition and heritage to become worthy citizen of Bangladesh so that they do not forget that they are the sons of this soil.\r\nFinally, against the background of fast eroding moral and religious values, efforts are taken so that the children uphold the religious and moral values.', 'school_building.jpg', '2020-11-05 18:25:36', '2020-11-17 05:23:52');

-- --------------------------------------------------------

--
-- Table structure for table `administrations`
--

CREATE TABLE `administrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `degree` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `administrations`
--

INSERT INTO `administrations` (`id`, `name`, `degree`, `role`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Dr. Mohammed Yusuf', 'MBBS,MBA(Finance & Banking)', 'Managing Director', 'image_1605520697.jpg', '2020-11-16 09:58:17', '2020-11-16 09:58:17');

-- --------------------------------------------------------

--
-- Table structure for table `admissions`
--

CREATE TABLE `admissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `admission_type` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_eng` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_bng` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `nationality` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `religion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `father_name_eng` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `father_name_bng` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mother_name_eng` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mother_name_bng` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `per_add` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `mailing_add` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sla` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `moi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_place` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `find_out` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `curricular` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `challanged` int(11) NOT NULL,
  `father_occupation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mother_occupation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `father_nid` int(11) NOT NULL,
  `mother_nid` int(11) NOT NULL,
  `father_contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mother_contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `father_fb` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother_fb` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transports` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admissions`
--

INSERT INTO `admissions` (`id`, `admission_type`, `email`, `name_eng`, `name_bng`, `dob`, `nationality`, `religion`, `father_name_eng`, `father_name_bng`, `mother_name_eng`, `mother_name_bng`, `per_add`, `mailing_add`, `sla`, `moi`, `last_place`, `find_out`, `curricular`, `challanged`, `father_occupation`, `mother_occupation`, `father_nid`, `mother_nid`, `father_contact`, `mother_contact`, `father_fb`, `mother_fb`, `transports`, `created_at`, `updated_at`) VALUES
(13, 'New Admission', 'ghdfdf@gmail.com', 'tyty', 'tyty', '2020-12-17', 'tyty', 'tyty', 'tyt', 'tyty', 'tyt', 'tyyt', 'ttyty', 'dfdf@gmail.com', 'fghgh', 'ghgh', 'ghgh', '1', 'ghgh', 1, 'ghgh', 'ghgh', 4224, 424, '4242', '4242', 'xvv', 'ggfg', '1', '2020-12-14 09:38:52', '2020-12-14 09:38:52');

-- --------------------------------------------------------

--
-- Table structure for table `birthdays`
--

CREATE TABLE `birthdays` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `dob` date NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `classId` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `birthdays`
--

INSERT INTO `birthdays` (`id`, `dob`, `name`, `class`, `classId`, `created_at`, `updated_at`) VALUES
(4, '2020-12-08', 'hth', 'ththt', 'tht', NULL, NULL),
(5, '2020-12-08', 'hth', 'ththt', 'tht', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blank_forms`
--

CREATE TABLE `blank_forms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_eng` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `father_name_eng` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mother_name_eng` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Principal', 'Principal', '2020-11-10 09:45:58', '2020-11-17 04:20:39'),
(2, 'Co-ordinator', 'Co-ordinator', '2020-11-10 09:46:15', '2020-11-17 04:22:15'),
(3, 'Asst.Teacher', 'Asst.Teacher', '2020-11-10 09:46:30', '2020-11-10 09:46:30'),
(4, 'Jr.Teacher', 'Jr.Teacher', '2020-11-10 09:46:51', '2020-11-10 09:46:51'),
(6, 'Managing director', 'managing director', '2020-11-16 11:32:37', '2020-11-16 11:32:37'),
(7, 'Director', 'Director', '2020-11-17 04:19:15', '2020-11-17 04:19:15');

-- --------------------------------------------------------

--
-- Table structure for table `category_doctor`
--

CREATE TABLE `category_doctor` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `doctor_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `class_times`
--

CREATE TABLE `class_times` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `class` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `summer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `winter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `class_times`
--

INSERT INTO `class_times` (`id`, `class`, `summer`, `winter`, `created_at`, `updated_at`) VALUES
(1, 'Play, Nursery ', '8:15 AM - 11:20 AM', '8:30 AM - 11:35 AM', NULL, NULL),
(2, 'KG, STD I & II', '8:15 AM - 12:45 PM', '8:30 AM - 1:00 PM', NULL, NULL),
(3, 'STD III To Class IX', '8:15 AM - 1:30 PM', '8:30 AM - 1:45 PM', NULL, NULL),
(4, 'Entrance Time', '8:30 AM', '8:15 AM', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `curriculams`
--

CREATE TABLE `curriculams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time_to` time NOT NULL,
  `time_from` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dental_college_categories`
--

CREATE TABLE `dental_college_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dental_college_posts`
--

CREATE TABLE `dental_college_posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `degree` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `education` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Experiences` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fb` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `speech` text COLLATE utf8mb4_unicode_ci,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `name`, `desc`, `image`, `degree`, `education`, `Experiences`, `address`, `phone`, `email`, `fb`, `twitter`, `instagram`, `speech`, `website`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Fakhrul Abedin', 'asst.Teacher', 'image_1605005443.jpg', 'B.S.S', 'CU', '5y', 'chattogram', 'n/a', 'nesc.bd@gmail.com', '#', '#', '#', NULL, NULL, 1, '2020-11-10 10:26:58', '2020-11-10 10:50:43'),
(6, 'Md. Asad Ullah Adil', 'Principal, NESC', 'image_1605596259.jpg', 'B.A (Hon\'s), M.A (English), IIUC M.A (Al-Hadith- IU), L.L.B (NU)', 'B.A (Hon\'s), M.A (English), IIUC M.A (Al-Hadith- IU), L.L.B (NU)', '8', '130, Chatteswari Road, Chawkbazar, Chittagong (Medical College Hostel Gate in Ops)', '017006171', 'nesc.bd@gmail.com', 'https://www.facebook.com/asad.adil.58', NULL, NULL, 'I am delighted to welcome you to the National English School Chittagong. With the grace of almighty Allah, National English School Chittagong was founded in 2012 in the heart of the port city. Since it\'s inception our school has been successfully serving the community and continues to be a school of choice of our local area.\r\nWe offer a broad and varied curriculum and a warm, caring, encouraging and intimate environment which enables our students to reach their own personal level of excellence in the area of an academia, sport, culture and arts.\r\nWe have implemented our own educational method by focusing on the creating of next generation leaders with high ideal and humanity. This is why our motto is, \"Learners today, Leaders tomorrow.\'\r\nWe are fortunate to have a talented, highly committed teachers here to ensure the learning environment of our students is the best it can be. We are committed to work collaborate with parents to nurture an individual who possesses love for nation, society, community, moral and family values. \r\nWe also expect that we as a family will encourage students to persevere in face of challenges and adopt never give up spirit.\r\nThe achievements of our school in academics (100% A grade with GPA-5 in PECE and JSC exam) and extra curricular activities have been significant in the past several years. Here we collaborate , inspire and own to achieve our students dreams.\r\nOur commitment at National English School Chittagong is to provide a safe positive, rigorous learning environment that will empower students to become creative problem solvers, critical thinkers and inspired learners prepared for careers and life in the twenty first century .', NULL, 1, '2020-11-17 05:37:35', '2020-11-17 06:57:39'),
(7, 'Dr. Mohammed Yusuf', 'Managing Director, NESC', 'image/img.jpg', 'MBBS,MBA(Finance & Banking)', 'MBBS,MBA(Finance & Banking)', '10', '130, Chatteswari Road, Chawkbazar, Chittagong (Medical College Hostel Gate in Ops)', '017006171', 'nesc.bd@gmail.com', NULL, NULL, NULL, NULL, NULL, 1, '2020-11-17 05:50:08', '2020-11-17 05:50:08');

-- --------------------------------------------------------

--
-- Table structure for table `facilities`
--

CREATE TABLE `facilities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `facilities`
--

INSERT INTO `facilities` (`id`, `title`, `description`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'Regular Classes', 'We are taking classes in regular basis so that students can learn everyday and make them learned  in proper way.', 'fas fa-user-graduate', '2020-11-10 09:04:42', '2020-11-10 09:04:42'),
(2, 'Sports Facilities', 'School sports facilities are used to deliver the formal curriculum, increase participation levels and provide facilities for the wider community.', 'fas fa-running', '2020-11-10 09:15:43', '2020-11-10 09:15:43'),
(3, 'Adequate Classrooms', 'Adequate classrooms to accommodate students  in comfortable learning environment.', 'fas fa-school', '2020-11-16 06:34:37', '2020-11-16 06:36:11'),
(4, 'Certified Teachers', 'Certified teachers to address the educational and interpersonal needs of students.', 'fas fa-user-check', '2020-11-16 06:39:27', '2020-11-16 06:39:27'),
(5, 'Safety First', 'Delivery of education in a safe and healthy environment.', 'fas fa-hard-hat', '2020-11-16 06:44:41', '2020-11-16 06:44:41'),
(6, 'Religious Practice', 'Against the background of fast eroding moral and religious values, efforts are taken so that the children uphold religious and moral values.', 'fas fa-praying-hands', '2020-11-16 06:54:40', '2020-11-16 06:54:40');

-- --------------------------------------------------------

--
-- Table structure for table `facilities_descriptions`
--

CREATE TABLE `facilities_descriptions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `facilities_ID` int(11) NOT NULL,
  `descriptions` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `facilities_descriptions`
--

INSERT INTO `facilities_descriptions` (`id`, `facilities_ID`, `descriptions`, `created_at`, `updated_at`) VALUES
(33, 1, 'We are taking classes in regular basis.', NULL, NULL),
(34, 1, 'students can learn everyday and make them learned  in proper way.', NULL, NULL),
(35, 2, 'School sports facilities are used to deliver the formal curriculum', NULL, NULL),
(36, 2, 'increase participation levels', NULL, NULL),
(37, 2, 'provide facilities for the wider community.', NULL, NULL),
(38, 3, 'Adequate classrooms to accommodate students', NULL, NULL),
(39, 3, 'comfortable learning environment.', NULL, NULL),
(40, 4, 'Certified teachers to address the educational', NULL, NULL),
(41, 4, 'interpersonal needs of students.', NULL, NULL),
(42, 5, 'Delivery of education in a safe', NULL, NULL),
(43, 5, 'healthy environment.', NULL, NULL),
(44, 6, 'Against the background of fast eroding moral', NULL, NULL),
(45, 6, 'and religious values', NULL, NULL),
(46, 6, 'efforts are taken ', NULL, NULL),
(47, 6, 'so that the children uphold religious and moral values.', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) NOT NULL,
  `gallery_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `gallery_title`, `created_at`, `updated_at`) VALUES
(1, 'Chess Competition 2019', '2020-11-16 07:28:38', '2020-11-16 07:28:38'),
(5, 'Class party 2019', '2020-11-16 09:32:15', '2020-11-16 09:32:15'),
(8, 'Classroom', '2020-11-16 09:48:15', '2020-11-16 09:48:15'),
(11, 'Crafts', '2020-12-14 06:54:55', '2020-12-14 06:54:55'),
(12, 'Eid Reunion 2019', '2020-12-14 07:08:07', '2020-12-14 07:08:07'),
(13, 'Pitha Utshab 2018', '2020-12-14 07:08:59', '2020-12-14 07:08:59'),
(14, 'Website Inauguration', '2020-12-14 07:09:25', '2020-12-14 07:09:25');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_image_lists`
--

CREATE TABLE `gallery_image_lists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gallery_title_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gallery_image_lists`
--

INSERT INTO `gallery_image_lists` (`id`, `gallery_title_id`, `photo`, `created_at`, `updated_at`) VALUES
(37, '1', '8344933c01.jpg', '2020-12-14 06:51:43', '2020-12-14 06:51:43'),
(38, '5', 'd3600caded.jpg', '2020-12-14 06:52:13', '2020-12-14 06:52:13'),
(39, '8', '977ce4eb71.JPG', '2020-12-14 06:52:29', '2020-12-14 06:52:29'),
(40, '11', '6ca40a2e06.jpg', '2020-12-14 07:07:18', '2020-12-14 07:07:18'),
(41, '12', '9fe7aa0150.jpg', '2020-12-14 07:08:27', '2020-12-14 07:08:27'),
(42, '13', '802d8ec432.jpg', '2020-12-14 07:09:08', '2020-12-14 07:09:08'),
(43, '14', '70f2e19ca0.jpg', '2020-12-14 07:09:32', '2020-12-14 07:09:32');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_09_09_121627_create_categories_table', 1),
(5, '2020_10_05_091123_create_doctors_table', 1),
(6, '2020_10_05_091759_create_category_doctor_table', 1),
(7, '2020_10_08_075534_create_shedules_table', 1),
(8, '2020_10_10_041641_create_abouts_table', 1),
(9, '2020_10_10_090744_create_missions_table', 1),
(10, '2020_10_12_042244_create_administrations_table', 1),
(11, '2020_10_14_060500_create_facilities_table', 1),
(12, '2020_10_15_052930_create_dental_college_categories_table', 1),
(13, '2020_10_15_071506_create_dental_college_posts_table', 1),
(14, '2020_10_21_055814_create_curriculams_table', 1),
(15, '2020_10_24_045118_create_admissions_table', 1),
(16, '2020_10_25_060334_create_notices_table', 1),
(20, '2020_11_26_194449_create_news_table', 2),
(22, '2020_11_28_181420_create_payment_rules_table', 4),
(25, '2020_11_29_044056_create_payment_numbers_table', 5),
(27, '2020_11_29_100455_create_blank_forms_table', 6),
(35, '2020_11_30_064118_create_principal_s_m_s_table', 9),
(38, '2014_10_12_000000_create_users_table', 1),
(39, '2014_10_12_100000_create_password_resets_table', 1),
(40, '2019_08_19_000000_create_failed_jobs_table', 1),
(41, '2020_09_09_121627_create_categories_table', 1),
(42, '2020_10_05_091123_create_doctors_table', 1),
(43, '2020_10_05_091759_create_category_doctor_table', 1),
(44, '2020_10_08_075534_create_shedules_table', 1),
(45, '2020_10_10_041641_create_abouts_table', 1),
(46, '2020_10_10_090744_create_missions_table', 1),
(47, '2020_10_12_042244_create_administrations_table', 1),
(48, '2020_10_14_060500_create_facilities_table', 1),
(49, '2020_10_15_052930_create_dental_college_categories_table', 1),
(50, '2020_10_15_071506_create_dental_college_posts_table', 1),
(51, '2020_10_21_055814_create_curriculams_table', 1),
(52, '2020_10_24_045118_create_admissions_table', 1),
(53, '2020_10_25_060334_create_notices_table', 1),
(54, '2020_10_28_154546_create_galleries_table', 1),
(55, '2020_11_26_194449_create_news_table', 1),
(56, '2020_11_28_181420_create_payment_rules_table', 1),
(57, '2020_11_29_044056_create_payment_numbers_table', 1),
(58, '2020_11_29_100455_create_blank_forms_table', 1),
(59, '2020_11_30_064118_create_principal_s_m_s_table', 1),
(60, '2020_11_30_101642_create_birthdays_table', 1),
(61, '2020_12_06_191754_create_facilities_descriptions_table', 1),
(62, '2020_12_11_110042_create_class_times_table', 10),
(63, '2020_12_12_070243_create_teacher_designations_table', 11),
(64, '2020_12_12_072704_create_teacher_lists_table', 12),
(65, '2020_12_13_085209_create_galleries_table', 13),
(66, '2020_12_13_094230_create_gallery_image_lists_table', 14),
(67, '2020_12_14_051421_create_birthdays_table', 15);

-- --------------------------------------------------------

--
-- Table structure for table `missions`
--

CREATE TABLE `missions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment_numbers`
--

CREATE TABLE `payment_numbers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `paymentNumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transaction_ID` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment_rules`
--

CREATE TABLE `payment_rules` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `payment_rules` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `principal_s_m_s`
--

CREATE TABLE `principal_s_m_s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `leftSide` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `rightSide` longtext COLLATE utf8mb4_unicode_ci,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `principal_s_m_s`
--

INSERT INTO `principal_s_m_s` (`id`, `title`, `leftSide`, `rightSide`, `name`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Chairman\'s Message', 'With immense pride and great pleasure I welcome you to the National English School Chittagong website. With the most mercy of Almighty Allah, National English School was founded in 2012 in the main point of this port city.\r\nI invite you to navigate through our “online activities” to help you understand lucidly how our school provides the best environment for your little ones. Our institutions have marched forward to spread the light of education and pave the path of academic soundness & Moral excellence for every student.\r\nThe value and environment we provide for our children are sustainable. My sincere thanks to the school’s Principal, teachers, staffs, students & parents.\r\nOnce again I welcome you and sincerely hope that our website will rouse your interest and encourage you to take a step towards making one more positive difference in your life\r\nThank you and stay blessed.\r\n\r\nChairman, NESC.', NULL, 'Gulam Saifuddin Ahmed', 'Chairman.jpg', NULL, '2020-12-14 09:28:59'),
(2, 'Managing Director’s Message', '\r\nI am delighted to welcome you to the National English School Chittagong. With the grace of Almighty Allah, National English School Chittagong was founded in 2012 in the heart of this port city. Since our school has been successfully serving the community and suffices to be a school of choice for our local area.\r\nOur vision to “Educate, Enlighten and Empower”. We offer a varied curriculum and an encouraging and intimate environment which enable our students to reach their own perfection in the area of an academia, sports, culture and arts.\r\nOur motto is “Learners today, leaders tomorrow” our educational method by focusing on the creation of next generation leaders with high ideals. We also focus on morality and academic soundness.\r\nWe are enriched with highly committed teachers and dedicated staffs to confirm the school environment for students.\r\nLooking forward your co-operation in foreknowledge.\r\n', '', 'Dr. Mohammed Yusuf', 'Managing Director.jpg', NULL, NULL),
(3, 'Principal\'s Message', 'I am delighted to welcome you to the National English School Chittagong. With the grace of Almighty Allah, National English School Chittagong was founded in 2012 in the heart of this port city. Since its inception our school has been successfully serving the community and continues to be a school of choice for our local area.\r\nWe offer a broad and varied curriculum and a warm, caring, encouraging and intimate environment which enables our students to reach their own personal levels of excellence in the area of an academia, sport, culture and arts.\r\nWe have implemented our own educational method by focusing on the creation of next generation leaders with high ideals and humanity. That’s why our motto is “Learners today, Ieaders tomorow”.\r\nWe are fortunate to have talented, highly committed teachers here to ensure the learning environment of our students is the best it can be. We are committed to collaborate with parents to nurture an individual who possesses love for nation, society, community and moral and family values.\r\nWe also expect that we as a family will encourage students to persevere in face of challenges and adopt never give up spirit.\r\nThe achievements of our school in academic (100% A grade with GPA-5 in PECE and JSC exam) and extra curricular activities have been significant in the past several years. Here we collaborate, inspire and own to achieve our students dreams.\r\nOur commitment at National English School Chittagong is to provide a safe, positive, rigorous learning environment that will empower students to become creative problem solvers, critical thinkers and inspired learners prepared for careers and life in the twenty-first century.\r\nSeeking your cooperation in anticipation.\r\n', 'We have implemented our own educational method by focusing on the creation of next generation leaders with high ideals and humanity. That’s why our motto is “Learners today leaders tomorrow”.', 'Md. Asad Ullah Adil', 'Principal.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `shedules`
--

CREATE TABLE `shedules` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `day` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teacher_designations`
--

CREATE TABLE `teacher_designations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teacher_designations`
--

INSERT INTO `teacher_designations` (`id`, `designation`, `created_at`, `updated_at`) VALUES
(1, 'Principal', NULL, NULL),
(2, 'Co-ordinator', NULL, NULL),
(3, 'Assistant Teacher', NULL, NULL),
(4, 'Junior Teacher', NULL, NULL),
(5, 'Culture Teacher', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `teacher_lists`
--

CREATE TABLE `teacher_lists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `designation_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teacherName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qualification` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'Aslam Hossain', 'admin@gmail.com', NULL, '$2y$10$yEvevNtUID6BogdS6uUOleJE4ykzjOll6hihYK3nWq7ANzH25oceK', NULL, '2020-12-14 10:44:35', '2020-12-14 10:44:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `administrations`
--
ALTER TABLE `administrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admissions`
--
ALTER TABLE `admissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `birthdays`
--
ALTER TABLE `birthdays`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blank_forms`
--
ALTER TABLE `blank_forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_doctor`
--
ALTER TABLE `category_doctor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_doctor_doctor_id_foreign` (`doctor_id`),
  ADD KEY `category_doctor_category_id_foreign` (`category_id`);

--
-- Indexes for table `class_times`
--
ALTER TABLE `class_times`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `curriculams`
--
ALTER TABLE `curriculams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dental_college_categories`
--
ALTER TABLE `dental_college_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dental_college_posts`
--
ALTER TABLE `dental_college_posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dental_college_posts_category_id_foreign` (`category_id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facilities`
--
ALTER TABLE `facilities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facilities_descriptions`
--
ALTER TABLE `facilities_descriptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery_image_lists`
--
ALTER TABLE `gallery_image_lists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `missions`
--
ALTER TABLE `missions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payment_numbers`
--
ALTER TABLE `payment_numbers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_rules`
--
ALTER TABLE `payment_rules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `principal_s_m_s`
--
ALTER TABLE `principal_s_m_s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shedules`
--
ALTER TABLE `shedules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher_designations`
--
ALTER TABLE `teacher_designations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher_lists`
--
ALTER TABLE `teacher_lists`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `administrations`
--
ALTER TABLE `administrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admissions`
--
ALTER TABLE `admissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `birthdays`
--
ALTER TABLE `birthdays`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `blank_forms`
--
ALTER TABLE `blank_forms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `category_doctor`
--
ALTER TABLE `category_doctor`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `class_times`
--
ALTER TABLE `class_times`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `curriculams`
--
ALTER TABLE `curriculams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dental_college_categories`
--
ALTER TABLE `dental_college_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dental_college_posts`
--
ALTER TABLE `dental_college_posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `facilities`
--
ALTER TABLE `facilities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `facilities_descriptions`
--
ALTER TABLE `facilities_descriptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `gallery_image_lists`
--
ALTER TABLE `gallery_image_lists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `missions`
--
ALTER TABLE `missions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment_numbers`
--
ALTER TABLE `payment_numbers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment_rules`
--
ALTER TABLE `payment_rules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `principal_s_m_s`
--
ALTER TABLE `principal_s_m_s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `shedules`
--
ALTER TABLE `shedules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teacher_designations`
--
ALTER TABLE `teacher_designations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `teacher_lists`
--
ALTER TABLE `teacher_lists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `category_doctor`
--
ALTER TABLE `category_doctor`
  ADD CONSTRAINT `category_doctor_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `category_doctor_doctor_id_foreign` FOREIGN KEY (`doctor_id`) REFERENCES `doctors` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `dental_college_posts`
--
ALTER TABLE `dental_college_posts`
  ADD CONSTRAINT `dental_college_posts_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `dental_college_categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
