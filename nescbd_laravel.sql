-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 28, 2020 at 03:07 AM
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
(2, 'Who we are', 'With the growing demand from the guardians for educating their children in English Medium School and in absence/shortage of quality educational instituitions, it has been ascertained that an English Medium School and College in this port city of Chittagong.\r\nIn the light of a group of enthusiastic promoters of education decided to take up a project to establish an English Medium School & College following national curriculum in the year of 2012. The rationales behind this inspiration are as follows,\r\nFirstly, the students studying in English Medium institution definitely have an edge over other general students in pursuance of higher education or securing job both at home and abroad.\r\nSecondly, our children are imbued with national culture, tradition and heritage to become worthy citizen of Bangladesh so that they do not forget that they are the sons of this soil.\r\nFinally, against the background of fast eroding moral and religious values, efforts are taken so that the children uphold the religious and moral values.', 'image_1604997217.jpg', '2020-11-05 18:25:36', '2020-11-17 05:23:52');

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

INSERT INTO `admissions` (`id`, `email`, `name_eng`, `name_bng`, `dob`, `nationality`, `religion`, `father_name_eng`, `father_name_bng`, `mother_name_eng`, `mother_name_bng`, `per_add`, `mailing_add`, `sla`, `moi`, `last_place`, `find_out`, `curricular`, `challanged`, `father_occupation`, `mother_occupation`, `father_nid`, `mother_nid`, `father_contact`, `mother_contact`, `father_fb`, `mother_fb`, `transports`, `created_at`, `updated_at`) VALUES
(3, 'forkanalam295@gmail.com', 'asdf', 'asdf', '2020-11-14', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asd', 'asdf', 'asdf', 'sadf', '1', 'asdf', 0, 'sdf', 'asdf', 234234, 23423, '2342342', '34234234', NULL, NULL, '1', '2020-11-13 18:38:20', '2020-11-13 18:38:20'),
(4, '2a@gmail.com', 'as', 'as', '1994-11-10', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'a@gmail.com', 'fgf', 'fgf', 'fgfg', '1', 'fgfg', 1, 'dsd', 'sds', 22121, 12121, '221', '1212', 'fa.com', 'bf.com', '1', '2020-11-27 20:59:32', '2020-11-27 20:59:32');

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

--
-- Dumping data for table `category_doctor`
--

INSERT INTO `category_doctor` (`id`, `doctor_id`, `category_id`, `created_at`, `updated_at`) VALUES
(9, 3, 3, '2020-11-17 05:08:58', '2020-11-17 05:08:58'),
(11, 6, 1, '2020-11-17 05:37:35', '2020-11-17 05:37:35'),
(12, 7, 6, '2020-11-17 05:50:08', '2020-11-17 05:50:08');

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
(7, 'Dr. Mohammed Yusuf', 'Managing Director, NESC', 'image_1605592208.jpg', 'MBBS,MBA(Finance & Banking)', 'MBBS,MBA(Finance & Banking)', '10', '130, Chatteswari Road, Chawkbazar, Chittagong (Medical College Hostel Gate in Ops)', '017006171', 'nesc.bd@gmail.com', NULL, NULL, NULL, NULL, NULL, 1, '2020-11-17 05:50:08', '2020-11-17 05:50:08');

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
(2, 'Regular Classes', 'We are taking classes in regular basis so that students can learn everyday and make them learned  in proper way.', 'fas fa-user-graduate', '2020-11-10 09:04:42', '2020-11-10 09:04:42'),
(6, 'Sports Facilities', 'School sports facilities are used to deliver the formal curriculum, increase participation levels and provide facilities for the wider community.', 'fas fa-running', '2020-11-10 09:15:43', '2020-11-10 09:15:43'),
(7, 'Adequate Classrooms', 'Adequate classrooms to accommodate students  in comfortable learning environment.', 'fas fa-school', '2020-11-16 06:34:37', '2020-11-16 06:36:11'),
(8, 'Certified Teachers', 'Certified teachers to address the educational and interpersonal needs of students.', 'fas fa-user-check', '2020-11-16 06:39:27', '2020-11-16 06:39:27'),
(9, 'Safety First', 'Delivery of education in a safe and healthy environment.', 'fas fa-hard-hat', '2020-11-16 06:44:41', '2020-11-16 06:44:41'),
(10, 'Religious Practice', 'Against the background of fast eroding moral and religious values, efforts are taken so that the children uphold religious and moral values.', 'fas fa-praying-hands', '2020-11-16 06:54:40', '2020-11-16 06:54:40');

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
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `title`, `image`, `created_at`, `updated_at`) VALUES
(6, 'Sundarban', 'image_1605511564.jpg', '2020-11-16 07:26:04', '2020-11-16 07:26:04'),
(7, 'Science Fair', 'image_1605511696.jpg', '2020-11-16 07:28:16', '2020-11-16 07:28:16'),
(8, 'Students', 'image_1605511718.jpg', '2020-11-16 07:28:38', '2020-11-16 07:28:38'),
(9, 'Victory Day', 'image_1605511811.jpg', '2020-11-16 07:30:11', '2020-11-16 07:30:11'),
(10, 'Online class', 'image_1605512310.jpeg', '2020-11-16 07:38:31', '2020-11-16 07:38:31'),
(11, 'Online class', 'image_1605512332.jpeg', '2020-11-16 07:38:52', '2020-11-16 07:38:52'),
(12, 'Online class', 'image_1605512359.jpeg', '2020-11-16 07:39:19', '2020-11-16 07:39:19'),
(13, 'Parents meeting', 'image_1605512396.jpg', '2020-11-16 07:39:56', '2020-11-16 07:39:56'),
(14, 'Class test', 'image_1605512548.jpg', '2020-11-16 07:42:28', '2020-11-16 07:42:28'),
(15, 'Class party 2019', 'image_1605519134.jpg', '2020-11-16 09:32:15', '2020-11-16 09:32:15'),
(16, 'Class party 2019', 'image_1605519365.jpg', '2020-11-16 09:36:06', '2020-11-16 09:36:06'),
(17, 'Class party 2019', 'image_1605519459.jpg', '2020-11-16 09:37:39', '2020-11-16 09:37:39'),
(18, 'Birthday Party', 'image_1605519566.jpg', '2020-11-16 09:39:26', '2020-11-16 09:39:26'),
(19, 'Science Fair', 'image_1605519687.jpg', '2020-11-16 09:41:27', '2020-11-16 09:41:27'),
(20, 'Science Fair', 'image_1605519783.jpg', '2020-11-16 09:43:03', '2020-11-16 09:43:03'),
(21, 'PECE Dua ending program', 'image_1605519874.jpg', '2020-11-16 09:44:34', '2020-11-16 09:44:34'),
(22, 'PECE Dua ending program', 'image_1605520022.jpg', '2020-11-16 09:47:02', '2020-11-16 09:47:02'),
(23, 'Classroom', 'image_1605520095.jpg', '2020-11-16 09:48:15', '2020-11-16 09:48:15'),
(24, 'Discussion on Ramadan and Iftar', 'image_1605520165.jpg', '2020-11-16 09:49:25', '2020-11-16 09:49:25'),
(25, 'Assembly', 'image_1605520265.jpg', '2020-11-16 09:51:05', '2020-11-16 09:51:05');

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
(17, '2020_10_28_154546_create_galleries_table', 1),
(20, '2020_11_26_194449_create_news_table', 2);

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
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `message`, `created_at`, `updated_at`) VALUES
(1, 'qwwqwNews2', '123654789qwqwq', NULL, '2020-11-26 11:14:30');

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

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`id`, `title`, `description`, `date`, `created_at`, `updated_at`) VALUES
(1, 'Halloween Holiday', 'Halloween is a holiday celebrated each year on October 31, and Halloween 2020 will occur on Saturday, October 31. The tradition originated with the ancient Celtic festival of Samhain, when people would light bonfires and wear costumes to ward off ghosts', '2020-11-12', '2020-11-05 04:12:46', '2020-11-05 04:12:46'),
(2, 'Office2', 'Halloween is a holiday celebrated each year on October 31, and Halloween 2020 will occur on Saturday, October 31. The tradition originated with the ancient Celtic festival of Samhain, when people would light bonfires and wear costumes to ward off ghosts', '2020-11-28', '2020-11-26 07:55:24', '2020-11-26 07:55:55'),
(3, 'Office3', 'Halloween is a holiday celebrated each year on October 31, and Halloween 2020 will occur on Saturday, October 31. The tradition originated with the ancient Celtic festival of Samhain, when people would light bonfires and wear costumes to ward off ghosts', '2020-11-16', '2020-11-26 08:35:33', '2020-11-26 08:35:33'),
(5, 'বাংলা কবিতা', 'বাংলা-কবিতা ডট কম ওয়েবসাইটটি বর্তমান সময়ে বাংলা কবিতার সবচেয়ে জনপ্রিয় ও সমৃদ্ধ ওয়েব পোর্টাল। এ প্রজন্মের শতাধিক কবি আমাদের কবিতার আসরে প্রতিদিন কবিতা প্রকাশ করছেন। কবিতা প্রকাশের পাশাপাশি রয়েছে কবি ও কবিতার উপর নানারকম আলোচনা, কবিতার বই ও আবৃত্তি প্রকাশের সুবিধা। উপস্থিত সদস্যেরা যেমন সমমনা কবি ও সদস্যদের সাথে পরিচিত হতে পারছেন, পাশাপাশি ওয়েবসাইটের সার্বিক আবহে ঋদ্ধ হচ্ছেন বাংলা সাহিত্যের কাব্যিক আবেশে। এছাড়াও এখানে রয়েছে বাংলার খ্যাতিমান কবিদের সহস্রাধিক কবিতার এক সংগ্রহশালা, যা নিয়মিত আরও সমৃদ্ধ হচ্ছে। আপনি যদি সৌখিন কবি, আবৃত্তিকার, অথবা কবিতা-প্রেমী যে কেউ হয়ে থাকেন, তবে জানবেন এই ওয়েবসাইটটি আপনার জন্যেই তৈরি করা হয়েছে!', '2020-11-28', '2020-11-26 10:08:49', '2020-11-26 10:08:49'),
(6, 'Halloween Holiday', 'Halloween is a holiday celebrated each year on October 31, and Halloween 2020 will occur on Saturday, October 31. The tradition originated with the ancient Celtic festival of Samhain, when people would light bonfires and wear costumes to ward off ghosts', '2020-11-12', '2020-11-05 04:12:46', '2020-11-05 04:12:46'),
(7, 'Office2', 'Halloween is a holiday celebrated each year on October 31, and Halloween 2020 will occur on Saturday, October 31. The tradition originated with the ancient Celtic festival of Samhain, when people would light bonfires and wear costumes to ward off ghosts', '2020-11-28', '2020-11-26 07:55:24', '2020-11-26 07:55:55'),
(8, 'Office3', 'Halloween is a holiday celebrated each year on October 31, and Halloween 2020 will occur on Saturday, October 31. The tradition originated with the ancient Celtic festival of Samhain, when people would light bonfires and wear costumes to ward off ghosts', '2020-11-16', '2020-11-26 08:35:33', '2020-11-26 08:35:33'),
(9, 'বাংলা কবিতা', 'বাংলা-কবিতা ডট কম ওয়েবসাইটটি বর্তমান সময়ে বাংলা কবিতার সবচেয়ে জনপ্রিয় ও সমৃদ্ধ ওয়েব পোর্টাল। এ প্রজন্মের শতাধিক কবি আমাদের কবিতার আসরে প্রতিদিন কবিতা প্রকাশ করছেন। কবিতা প্রকাশের পাশাপাশি রয়েছে কবি ও কবিতার উপর নানারকম আলোচনা, কবিতার বই ও আবৃত্তি প্রকাশের সুবিধা। উপস্থিত সদস্যেরা যেমন সমমনা কবি ও সদস্যদের সাথে পরিচিত হতে পারছেন, পাশাপাশি ওয়েবসাইটের সার্বিক আবহে ঋদ্ধ হচ্ছেন বাংলা সাহিত্যের কাব্যিক আবেশে। এছাড়াও এখানে রয়েছে বাংলার খ্যাতিমান কবিদের সহস্রাধিক কবিতার এক সংগ্রহশালা, যা নিয়মিত আরও সমৃদ্ধ হচ্ছে। আপনি যদি সৌখিন কবি, আবৃত্তিকার, অথবা কবিতা-প্রেমী যে কেউ হয়ে থাকেন, তবে জানবেন এই ওয়েবসাইটটি আপনার জন্যেই তৈরি করা হয়েছে!', '2020-11-28', '2020-11-26 10:08:49', '2020-11-26 10:08:49');

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
(1, 'Admin', 'admin@a.com', NULL, '$2y$10$ace1.l3DwLgjeRgm9ZGQ4O7b..Kg1C7f3pJQaInoKv7Ob8O3EF2/u', 'O8i3ICnNODAU8XIBfu2vy7yzPBHjV7Siu1ZWWtMGEPRo28CxhUY3QRqd4ztp', '2020-11-04 04:08:45', '2020-11-04 04:08:45');

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
-- Indexes for table `news`
--
ALTER TABLE `news`
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
-- Indexes for table `shedules`
--
ALTER TABLE `shedules`
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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `category_doctor`
--
ALTER TABLE `category_doctor`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `missions`
--
ALTER TABLE `missions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `shedules`
--
ALTER TABLE `shedules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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