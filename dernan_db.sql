-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2024 at 10:44 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dernan_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin@admin.com', '$2y$12$EqlLzzWvJO.tdmmwoTCsz.rab2hq8Dpnjd7xvy1HlG4UIaj7IpAee', '2024-08-27 20:07:01', '2024-08-27 20:07:01');

-- --------------------------------------------------------

--
-- Table structure for table `applicant_logins`
--

CREATE TABLE `applicant_logins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `verified_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `applicant_logins`
--

INSERT INTO `applicant_logins` (`id`, `user_name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Solomon', 'yeboahs324@gmail.com', NULL, '2024-08-28 02:05:18', '2024-08-28 02:05:18'),
(2, 'Solomon', 'yeboahs324@gmail.com', NULL, '2024-08-28 02:08:00', '2024-08-28 02:08:00'),
(3, 'Jhoker', 'yeboahs324@gmail.com', NULL, '2024-08-28 02:10:23', '2024-08-28 02:10:23'),
(4, 'Philip', 'yeboahs324@gmail.com', NULL, '2024-08-28 02:12:10', '2024-08-28 02:12:10'),
(5, 'Melinda', 'yeboahs324@gmail.com', NULL, '2024-08-28 02:15:21', '2024-08-28 02:15:21'),
(6, 'Fitz', 'yeboahs324@gmail.com', NULL, '2024-08-28 02:17:14', '2024-08-28 02:17:14'),
(7, 'Simmons', 'yeboahs324@gmail.com', NULL, '2024-08-28 02:48:06', '2024-08-28 02:48:06'),
(8, 'Solomon', 'yeboahs324@gmail.com', NULL, '2024-08-28 02:48:48', '2024-08-28 02:48:48'),
(9, 'Hahahahahahaha', 'yeboahs324@gmail.com', NULL, '2024-08-28 02:49:49', '2024-08-28 02:49:49'),
(10, 'Solomon', 'yeboahs324@gmail.com', NULL, '2024-08-28 10:47:31', '2024-08-28 10:47:31'),
(11, 'Grant Ward', 'yeboahs324@gmail.com', NULL, '2024-08-29 07:13:36', '2024-08-29 07:13:36'),
(12, 'Matthew', 'yeboahs324@gmail.com', NULL, '2024-08-29 07:17:47', '2024-08-29 07:17:47'),
(13, 'Solomon', 'yeboahs324@gmail.com', NULL, '2024-08-29 07:30:01', '2024-08-29 07:30:01'),
(14, 'Simmons', 'yeboahs324@gmail.com', NULL, '2024-08-29 07:35:59', '2024-08-29 07:35:59');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('5c785c036466adea360111aa28563bfd556b5fba', 'i:4;', 1724793762),
('5c785c036466adea360111aa28563bfd556b5fba:timer', 'i:1724793761;', 1724793761);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_details`
--

CREATE TABLE `job_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `applicant_id` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `current_employer` varchar(255) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `company_address` varchar(255) NOT NULL,
  `position_held` varchar(255) NOT NULL,
  `duration_of_employment_from` varchar(255) NOT NULL,
  `duration_of_employment_to` varchar(255) NOT NULL,
  `responsilibities` text NOT NULL,
  `current_employer2` varchar(255) NOT NULL,
  `company_name2` varchar(255) NOT NULL,
  `company_address2` varchar(255) NOT NULL,
  `position_held2` varchar(255) NOT NULL,
  `duration_of_employment_from2` varchar(255) NOT NULL,
  `duration_of_employment_to2` varchar(255) NOT NULL,
  `responsilibities2` text NOT NULL,
  `post_jobs_id` bigint(20) UNSIGNED DEFAULT NULL,
  `institution_name` varchar(255) NOT NULL,
  `certificate` varchar(255) NOT NULL,
  `year_of_graduation` varchar(255) NOT NULL,
  `year_began` varchar(255) NOT NULL,
  `institution_name2` varchar(255) NOT NULL,
  `certificate2` varchar(255) NOT NULL,
  `year_of_graduation2` varchar(255) NOT NULL,
  `year_began2` varchar(255) NOT NULL,
  `institution_name3` varchar(255) NOT NULL,
  `certificate3` varchar(255) NOT NULL,
  `year_of_graduation3` varchar(255) NOT NULL,
  `year_began3` varchar(255) NOT NULL,
  `school_name` varchar(255) NOT NULL,
  `secondary_certificate` varchar(255) NOT NULL,
  `year_of_completion` varchar(255) NOT NULL,
  `referee_name` varchar(255) NOT NULL,
  `referee_position` varchar(255) NOT NULL,
  `referee_company` varchar(255) NOT NULL,
  `referee_number` varchar(255) NOT NULL,
  `referee_email` varchar(255) NOT NULL,
  `referee_name2` varchar(255) NOT NULL,
  `referee_position2` varchar(255) NOT NULL,
  `referee_company2` varchar(255) NOT NULL,
  `referee_number2` varchar(255) NOT NULL,
  `referee_email2` varchar(255) NOT NULL,
  `skills_certificate` varchar(255) NOT NULL,
  `reason` text NOT NULL,
  `availability` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `cv` varchar(255) NOT NULL,
  `cerificates_acquired` varchar(255) NOT NULL,
  `cover_letter` varchar(255) NOT NULL,
  `other_relevant_doc` varchar(255) NOT NULL,
  `agreement` varchar(255) NOT NULL,
  `signature` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_details`
--

INSERT INTO `job_details` (`id`, `applicant_id`, `first_name`, `middle_name`, `last_name`, `dob`, `gender`, `nationality`, `address`, `number`, `email`, `current_employer`, `company_name`, `company_address`, `position_held`, `duration_of_employment_from`, `duration_of_employment_to`, `responsilibities`, `current_employer2`, `company_name2`, `company_address2`, `position_held2`, `duration_of_employment_from2`, `duration_of_employment_to2`, `responsilibities2`, `post_jobs_id`, `institution_name`, `certificate`, `year_of_graduation`, `year_began`, `institution_name2`, `certificate2`, `year_of_graduation2`, `year_began2`, `institution_name3`, `certificate3`, `year_of_graduation3`, `year_began3`, `school_name`, `secondary_certificate`, `year_of_completion`, `referee_name`, `referee_position`, `referee_company`, `referee_number`, `referee_email`, `referee_name2`, `referee_position2`, `referee_company2`, `referee_number2`, `referee_email2`, `skills_certificate`, `reason`, `availability`, `image`, `cv`, `cerificates_acquired`, `cover_letter`, `other_relevant_doc`, `agreement`, `signature`, `date`, `status`, `created_at`, `updated_at`) VALUES
(1, 'ID9838', 'Yeboah', 'Solomon', 'Opoku', '2023-08-19', 'Male', 'Ghanaian', 'Dome Pillar 2', '0576760647', 'yeboahs324@gmail.com', 'Ducimus laboriosam', 'Ratione quas possimu', 'Consectetur optio ', 'Sit quia enim quia ', '1970-03', '2003-08', 'Expedita quo rerum s', 'Eu ut amet sint qu', 'Id vel tempore temp', 'Magni sit a sit mol', 'Incidunt duis et en', '1991-05', '1977-03', 'Et est iusto reicien', NULL, 'Qui quo nostrum ex e', 'Consectetur quos si', '2022-05', '2019-05', 'Dolor laboriosam er', 'Hic qui totam nemo N', '2022-09', '2014-05', 'Nemo ut quia volupta', 'Laboriosam praesent', '1979-12', '1984-09', 'Ullam in minim delen', 'Aperiam praesentium ', '2000-01', 'Laboris ullamco reru', 'Cupidatat et fugiat', 'Facere enim saepe ex', 'Blanditiis quae eius', 'ads21b00223y@ait.edu.gh', 'Quos incididunt veli', 'Dolore tenetur quia ', 'Commodi facere dolor', 'Nemo amet similique', 'ads21b00223y@ait.edu.gh', 'Voluptatem Ex conse', 'Non reiciendis quis ', 'Immediately', 'IM_FB_IMG_1650470153767.jpg', 'CV_Yeboah_certificate.pdf', 'CA_Microsoft Learn Student Ambassador Certificate.pdf', 'CL_Yeboah_certificate.pdf', 'ORD_Microsoft Learn Student Ambassador Certificate.pdf', '[\"I Agree\"]', 'Est odit consequatur', '1977-04-14', 'Rejected', '2024-08-27 20:17:08', '2024-08-27 21:41:25'),
(2, 'ID4860', 'Philip', 'J', 'Coulson', '2024-08-31', 'Male', 'Ghanaian', 'Dome Pillar 2', '0576760647', 'yeboahsolomon483@gmail.com', 'Dolores harum volupt', 'Ipsa perspiciatis ', 'Deserunt est eos et', 'Necessitatibus paria', '2006-08', '2005-06', 'Sed consequuntur sed', 'Voluptas natus totam', 'Commodi ipsa libero', 'Est iusto assumenda', 'Ex provident corrup', '2016-12', '1973-05', 'Velit soluta volupt', NULL, 'Culpa molestiae ut s', 'Non deleniti exceptu', '1970-12', '2020-07', 'Veniam omnis culpa', 'Nihil eum quia provi', '1989-01', '2012-10', 'Nam quod molestiae u', 'Dolorum cupiditate n', '2002-02', '1970-02', 'Illum consequatur ', 'Amet aut temporibus', '1991-01', 'Quod ut ea consequat', 'Iure sit consequatu', 'Deserunt et neque si', 'Sint praesentium do ', 'yeboahsolomon483@gmail.com', 'Deserunt enim nulla ', 'Autem est laborum no', 'Cillum natus fugit ', 'Molestiae tempora do', 'yeboahsolomon483@gmail.com', 'Et anim doloremque e', 'Nihil aut est cilluv fbojcjnpoejf', 'Immediately', 'IM_IMG-20211106-WA0000.jpg', 'CV_student_practical_web_dbase_FT.docx', 'CA_Chapter 166 - Fairy Tail 100 Years Ques.pdf', 'CL_student_practical_web_dbase_FT.docx', 'ORD_Chapter 166 - Fairy Tail 100 Years Ques.pdf', '[\"I Agree\"]', 'Dolore ad dolore vol', '2007-06-24', 'Accepted', '2024-08-27 20:22:09', '2024-08-27 20:31:12');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_08_17_070814_create_admins_table', 1),
(5, '2024_08_17_070849_create_job_details_table', 1),
(6, '2024_08_18_194118_create_positions_table', 1),
(7, '2024_08_24_183331_create_applicant_logins_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `positions`
--

CREATE TABLE `positions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `position` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `positions`
--

INSERT INTO `positions` (`id`, `position`, `status`, `created_at`, `updated_at`) VALUES
(1, 'IT Manager', 'Available', '2024-08-27 20:22:40', '2024-08-27 20:22:40'),
(2, 'HR Manager', 'Available', '2024-08-27 20:22:50', '2024-08-27 20:22:50'),
(3, 'Secretary', 'Available', '2024-08-27 20:22:56', '2024-08-27 20:22:56'),
(4, 'Accountant', 'Available', '2024-08-27 20:23:04', '2024-08-27 20:23:04');

-- --------------------------------------------------------

--
-- Table structure for table `post_jobs`
--

CREATE TABLE `post_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_id` varchar(255) NOT NULL,
  `job_title` varchar(255) NOT NULL,
  `job_type` varchar(255) NOT NULL,
  `position_id` bigint(20) UNSIGNED DEFAULT NULL,
  `job_description` text NOT NULL,
  `education` text NOT NULL,
  `experience` text NOT NULL,
  `personal_attributes` text NOT NULL,
  `skills_competencies` text NOT NULL,
  `deadline` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_jobs`
--

INSERT INTO `post_jobs` (`id`, `job_id`, `job_title`, `job_type`, `position_id`, `job_description`, `education`, `experience`, `personal_attributes`, `skills_competencies`, `deadline`, `status`, `created_at`, `updated_at`) VALUES
(1, 'JID3967', 'HR Manager', 'Part Time', 2, 'Impedit facere alia', 'Nostrud quas beatae', 'Eum do ad temporibus', 'Eaque quos aut occae', 'Ab non illo ab eius', '15th September,2024', 'Available', '2024-08-27 20:23:23', '2024-08-27 20:23:23'),
(2, 'JID4885', 'Eveniet aute hic ip', 'Part Time', 4, 'Quo rerum reprehende', 'Sunt ut ullam quibu', 'Quas labore sint tem', 'Vitae aliqua Enim q', 'Impedit voluptatem', 'Pariatur Facilis mo', 'Available', '2024-08-27 20:24:26', '2024-08-27 20:24:26'),
(3, 'JID5995', 'IT Manager', 'Part Time', 1, 'uhg ygiuhi jiojoo', 'Bachelor’s degree in Human Resources, Business Administration, or related field. Master’s degree or HR certification (e.g., SHRM-CP, PHR) preferred.', 'Minimum of 3 years of experience in human resources management. Proven experience in recruitment, employee relations, performance management, and policy development.', '98u 8uhyi iopjo', 'Strong understanding of digital marketing tools and techniques.', '15th September,2024', 'Available', '2024-08-27 20:24:56', '2024-08-27 20:24:56');

-- --------------------------------------------------------

--
-- Table structure for table `referee_testimonies`
--

CREATE TABLE `referee_testimonies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `document` varchar(255) NOT NULL,
  `job_details_id` bigint(20) UNSIGNED DEFAULT NULL,
  `testimony` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('u1L58ZcjogbUsmBJBx7s9CU5lpEQaHPUz5W419vv', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZXJaMktkbEVSTUp6bVAxOURidHJISlBxUHFxUTNVRVg5ZDNmcjdVUiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC92ZXJpZnktZW1haWwiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1724920577);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `applicant_logins`
--
ALTER TABLE `applicant_logins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_details`
--
ALTER TABLE `job_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `job_details_post_jobs_id_index` (`post_jobs_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `positions`
--
ALTER TABLE `positions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_jobs`
--
ALTER TABLE `post_jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_jobs_position_id_index` (`position_id`);

--
-- Indexes for table `referee_testimonies`
--
ALTER TABLE `referee_testimonies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `referee_testimonies_job_details_id_index` (`job_details_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `applicant_logins`
--
ALTER TABLE `applicant_logins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `job_details`
--
ALTER TABLE `job_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `positions`
--
ALTER TABLE `positions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `post_jobs`
--
ALTER TABLE `post_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `referee_testimonies`
--
ALTER TABLE `referee_testimonies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `job_details`
--
ALTER TABLE `job_details`
  ADD CONSTRAINT `job_details_post_jobs_id_foreign` FOREIGN KEY (`post_jobs_id`) REFERENCES `post_jobs` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `post_jobs`
--
ALTER TABLE `post_jobs`
  ADD CONSTRAINT `post_jobs_position_id_foreign` FOREIGN KEY (`position_id`) REFERENCES `positions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `referee_testimonies`
--
ALTER TABLE `referee_testimonies`
  ADD CONSTRAINT `referee_testimonies_job_details_id_foreign` FOREIGN KEY (`job_details_id`) REFERENCES `job_details` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
