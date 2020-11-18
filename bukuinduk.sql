-- -------------------------------------------------------------
-- TablePlus 3.8.0(336)
--
-- https://tableplus.com/
--
-- Database: bukuinduk
-- Generation Time: 2020-11-18 17:08:48.9020
-- -------------------------------------------------------------


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


DROP TABLE IF EXISTS `drop_out_students`;
CREATE TABLE `drop_out_students` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `student_id` bigint unsigned NOT NULL,
  `out_reason` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `fathers`;
CREATE TABLE `fathers` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `student_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birth_place` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birth_date` date NOT NULL,
  `religion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `citizenship` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `education` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `work` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `monthly_income` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `died_at` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `grades`;
CREATE TABLE `grades` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parallel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `form_teacher_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `guardians`;
CREATE TABLE `guardians` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `student_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birth_place` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birth_date` date NOT NULL,
  `religion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `citizenship` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `mothers`;
CREATE TABLE `mothers` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `student_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birth_place` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birth_date` date NOT NULL,
  `religion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `citizenship` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `education` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `work` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `monthly_income` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `died_at` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `school_identities`;
CREATE TABLE `school_identities` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `village` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `distric` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `province` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `students`;
CREATE TABLE `students` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `grade_id` bigint unsigned NOT NULL,
  `nis` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birth_place` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birth_date` date NOT NULL,
  `religion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `citizenship` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fam_order` int NOT NULL,
  `fam_count` int NOT NULL,
  `fam_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `language` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `live_with` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `residence_distance` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blood_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sick_history` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `height` int NOT NULL,
  `weight` int NOT NULL,
  `graduate_from` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ijazah_year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ijazah_sd_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skhu_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `move_from` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `receive_at_grade_id` bigint unsigned NOT NULL,
  `date_received` date NOT NULL,
  `hobby` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `leave_reason` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `finished_studying_at` date NOT NULL,
  `ijazah_now_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skhu_now_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `subjects`;
CREATE TABLE `subjects` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `teachers`;
CREATE TABLE `teachers` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birth_place` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birth_date` date NOT NULL,
  `nuptk` bigint NOT NULL,
  `nip` bigint NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `religion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `education` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `work_start_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `drop_out_students` (`id`, `student_id`, `out_reason`, `created_at`, `updated_at`) VALUES
('3', '7', 'asdasdas', '2020-11-18 09:26:55', '2020-11-18 09:26:55');

INSERT INTO `fathers` (`id`, `student_id`, `name`, `birth_place`, `birth_date`, `religion`, `citizenship`, `education`, `work`, `monthly_income`, `address`, `phone`, `died_at`, `created_at`, `updated_at`) VALUES
('1', '7', 'Nissim Granto', 'Sapiente accusamus e', '1979-06-29', 'hindu', 'wni', 'Tidak Sekolah', 'Dolore ut velit elit', '788', 'Et maxime debitis qu', '+1 (397) 257-5294', '1993-06-28', '2020-11-17 04:43:56', '2020-11-17 04:44:04'),
('2', '30', 'Brennan Jordan', 'Hic possimus dolori', '2006-04-30', 'islam', 'wni', 'S3', 'Deserunt velit fugia', '770', 'Sint aliqua Mollit', '+1 (327) 648-1571', '2020-09-11', '2020-11-17 05:01:13', '2020-11-17 05:02:07'),
('3', '31', 'Hunter Baxter', 'Ipsum voluptatum ip', '1989-12-30', 'protestan', 'wna', 'SMP', 'Ratione commodo haru', '736', 'Quas perferendis id', '+1 (119) 756-3348', '1984-10-09', '2020-11-17 05:04:16', '2020-11-17 05:04:16'),
('4', '32', 'Amity French', 'Officiis in enim sin', '2011-09-20', 'hindu', 'wni', 'S2', 'Rerum corrupti exer', '205', 'Repellendus Eum ape', '+1 (866) 555-8591', '1972-07-26', '2020-11-17 05:05:06', '2020-11-17 05:05:06'),
('5', '11', 'Lysandra Buckley', 'Dignissimos et sunt', '1980-04-08', 'hindu', 'wna', 'Tidak Sekolah', 'Sapiente error incid', '692', 'Expedita consequat', '+1 (131) 818-7364', '1972-04-15', '2020-11-18 09:24:39', '2020-11-18 09:24:39'),
('6', '10', 'Brynne Hancock', 'Enim ut nostrum illu', '1973-12-11', 'katolik', 'wni', 'Tidak Sekolah', 'Dolor ullamco qui ve', '233', 'Ipsa architecto et', '+1 (634) 606-2461', '2008-04-10', '2020-11-18 09:35:29', '2020-11-18 09:35:29');

INSERT INTO `grades` (`id`, `code`, `name`, `parallel`, `form_teacher_id`, `created_at`, `updated_at`) VALUES
('1', 'VII', 'Mawar', 'Mawar I', '6', '2020-11-05 13:09:27', '2020-11-08 05:36:51'),
('2', 'VIII', 'Melati', 'Melati I', '10', '2020-11-05 13:10:43', '2020-11-08 05:37:12');

INSERT INTO `guardians` (`id`, `student_id`, `name`, `birth_place`, `birth_date`, `religion`, `citizenship`, `created_at`, `updated_at`) VALUES
('1', '32', 'Keith Petersen', 'Qui eos cupidatat t', '2013-09-10', 'islam', 'wna', '2020-11-17 05:05:17', '2020-11-17 05:05:17'),
('2', '10', 'Brandon Benjamin', 'Aliquip magna mollit', '1980-09-15', 'hindu', 'wni', '2020-11-18 09:35:34', '2020-11-18 09:35:34');

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
('1', '2014_10_12_000000_create_users_table', '1'),
('2', '2019_08_19_000000_create_failed_jobs_table', '1'),
('3', '2020_10_23_131626_create_students_table', '1'),
('4', '2020_10_27_040945_create_teachers_table', '1'),
('5', '2020_10_27_041423_create_grades_table', '1'),
('6', '2020_10_27_042041_create_subjects_table', '1'),
('8', '2020_11_08_041547_create_drop_out_students_table', '2'),
('9', '2020_11_12_102935_create_school_identities_table', '3'),
('10', '2020_11_17_033714_create_fathers_table', '4'),
('11', '2020_11_17_034033_create_mothers_table', '4'),
('12', '2020_11_17_034133_create_guardians_table', '4'),
('13', '2020_10_27_042137_create_lesson_values_table', '5');

INSERT INTO `mothers` (`id`, `student_id`, `name`, `birth_place`, `birth_date`, `religion`, `citizenship`, `education`, `work`, `monthly_income`, `address`, `phone`, `died_at`, `created_at`, `updated_at`) VALUES
('1', '7', 'Noble Levine', 'Tempora dolores nequ', '1973-06-05', 'buddha', 'wna', 'D3', 'Ullamco possimus ex', '488', 'Sed dolorum animi e', '+1 (265) 831-3234', '1970-12-08', '2020-11-17 04:51:19', '2020-11-17 04:51:19'),
('2', '30', 'Victor Rowe', 'Odit tempore nihil', '1973-11-08', 'katolik', 'wna', 'SMA', 'A perferendis assume', '426', 'Duis accusamus aut e', '+1 (164) 722-5349', '1971-03-22', '2020-11-17 05:03:17', '2020-11-17 05:03:17'),
('3', '31', 'Jameson Mullen', 'Est inventore ut imp', '1982-01-26', 'islam', 'wni', 'SMP', 'Necessitatibus conse', '227', 'Adipisicing consequu', '+1 (605) 359-2996', '2019-03-15', '2020-11-17 05:04:19', '2020-11-17 05:04:19'),
('4', '32', 'Alden Oconnor', 'In nisi voluptatem', '1979-08-28', 'konghucu', 'wna', 'SMP', 'Id quisquam minima e', '829', 'Id ipsam ad aut id a', '+1 (986) 605-3422', '2004-06-09', '2020-11-17 05:05:11', '2020-11-17 05:05:11'),
('5', '10', 'Buffy Reynolds', 'Magni quam id numqu', '1991-10-19', 'konghucu', 'wni', 'SD', 'Nihil maiores exerci', '961', 'Molestiae necessitat', '+1 (342) 881-1303', '1984-03-08', '2020-11-18 09:35:31', '2020-11-18 09:35:31');

INSERT INTO `school_identities` (`id`, `name`, `address`, `village`, `distric`, `city`, `province`, `created_at`, `updated_at`) VALUES
('1', 'SMP TUNAS HARAPAN', 'JL TANJUNG ANOM', 'Laboriosam sed cons', 'Veniam veritatis vo', 'Et veniam repellend', 'Autem qui et sunt ir', '2020-11-12 10:47:18', '2020-11-12 11:08:54'),
('2', 'Tamekah Manning', 'Aperiam accusantium', 'Do consequatur sed e', 'Sunt cupiditate qui', 'Nulla voluptate assu', 'Animi est occaecat', '2020-11-12 10:47:24', '2020-11-12 10:47:24'),
('3', 'Candace Higgins', 'Quisquam excepturi a', 'Odio qui sint qui qu', 'Quis asperiores occa', 'Do est magni eiusmod', 'Et cillum aliquip ev', '2020-11-12 10:47:26', '2020-11-12 10:47:26');

INSERT INTO `students` (`id`, `grade_id`, `nis`, `name`, `gender`, `birth_place`, `birth_date`, `religion`, `citizenship`, `fam_order`, `fam_count`, `fam_status`, `language`, `address`, `phone`, `live_with`, `residence_distance`, `blood_type`, `sick_history`, `height`, `weight`, `graduate_from`, `ijazah_year`, `ijazah_sd_no`, `skhu_no`, `move_from`, `receive_at_grade_id`, `date_received`, `hobby`, `leave_reason`, `finished_studying_at`, `ijazah_now_no`, `skhu_now_no`, `created_at`, `updated_at`) VALUES
('7', '1', '92', 'Ashton Simmons', 'Omnis laudantium ac', 'Eaque dolore laborum', '2006-06-16', 'islam', 'wni', '97', '51', 'Rem vel quas vel eiu', 'Corrupti optio qui', 'Velit vitae atque mi', '+1 (736) 265-7477', 'Fugiat error dolor', '42', 'Cum accusamus dolore', 'Deleniti vel reprehe', '72', '33', 'Unde illum rerum vo', '1990', 'Qui similique enim a', 'Et eaque corporis re', 'Eaque quod vitae qui', '1', '2013-11-09', 'Adipisicing aliquid', 'Deleniti ab aperiam', '1989-12-18', 'Sed eum Nam sit cil', 'Nulla atque duis sun', '2020-11-05 13:10:11', '2020-11-05 13:10:11'),
('10', '2', '67', 'Craig Rogers', 'Libero eum qui dolor', 'Ullam esse omnis har', '1981-11-10', 'hindu', 'wna', '87', '29', 'Incidunt esse inven', 'Quis praesentium ad', 'Hic a quod quod opti', '+1 (351) 214-7331', 'Voluptas laudantium', '63', 'Exercitation sed est', 'Incididunt mollit to', '63', '78', 'Ullam rerum nesciunt', '1983', 'Soluta quod porro au', 'Adipisci est evenie', 'Dolores facilis inve', '1', '2018-11-25', 'Ipsum odio voluptat', 'Animi duis alias pe', '2003-12-01', 'Autem placeat sed q', 'Aliquid commodo quae', '2020-11-08 04:41:10', '2020-11-08 04:41:10'),
('11', '2', '45', 'Lenore Knox', 'Qui numquam quibusda', 'Provident suscipit', '1985-06-17', 'protestan', 'wni', '78', '22', 'At anim excepturi ea', 'Earum rerum ullamco', 'Consectetur tempor', '+1 (688) 955-8775', 'Praesentium qui aspe', '7', 'Anim reprehenderit a', 'Esse dolorem cillum', '13', '21', 'Unde fugiat maiores', '1974', 'Obcaecati vel aute a', 'Aliquip dolores do l', 'Sint voluptatem eu i', '2', '1983-08-24', 'Labore dolore enim v', 'Ad est recusandae M', '2017-05-21', 'Molestiae voluptatem', 'Id quos autem rem do', '2020-11-08 04:41:12', '2020-11-08 04:41:12'),
('12', '2', '42', 'Illana Sanders', 'Quibusdam tenetur et', 'Est eu dolore minim', '1977-05-12', 'hindu', 'wna', '97', '64', 'Rerum qui aut dignis', 'Tempora laborum temp', 'In qui suscipit et e', '+1 (277) 742-9503', 'Nulla incididunt Nam', '4', 'Ipsum labore except', 'Earum natus non opti', '34', '92', 'Et ea in dicta natus', '2004', 'Modi explicabo Ad i', 'Aliquip ut cum magna', 'Architecto consequat', '1', '1972-07-19', 'Iste delectus persp', 'Qui voluptas nisi be', '2004-06-15', 'Aliquid ipsum excep', 'Sed voluptatem Aut', '2020-11-08 06:19:22', '2020-11-08 06:19:22'),
('13', '2', '94', 'Buffy Bradshaw', 'Provident amet rep', 'Commodi vitae at quo', '1983-03-09', 'protestan', 'wna', '71', '97', 'Optio accusamus fac', 'Et non quo blanditii', 'Duis autem reiciendi', '+1 (504) 365-8058', 'Dolorum in non alias', '99', 'Ad adipisicing enim', 'Nulla harum ipsum m', '23', '86', 'Alias aliquam magni', '1995', 'Dolor facilis nemo f', 'Sint voluptas dolor', 'Pariatur Tenetur om', '1', '1970-10-07', 'Sunt et iure volupta', 'Ipsum quisquam tempo', '1972-12-18', 'Alias enim et adipis', 'Libero fugit offici', '2020-11-08 06:19:24', '2020-11-08 06:19:24'),
('14', '1', '69', 'Sophia Pittman', 'Omnis incidunt ipsu', 'Distinctio Saepe et', '2001-02-10', 'konghucu', 'wni', '21', '47', 'Et minim id alias n', 'Quia sunt voluptatum', 'Ipsam obcaecati nihi', '+1 (122) 825-2497', 'Natus maiores deleni', '64', 'Nisi dolor magnam it', 'Id dolor nostrud vol', '86', '62', 'In ipsam ad totam co', '2002', 'Optio perferendis v', 'Lorem nihil consequa', 'Consequat Corporis', '1', '1982-09-19', 'Dolor numquam repell', 'Tempore quam conseq', '1974-03-05', 'Cum quia quibusdam p', 'Asperiores non dolor', '2020-11-08 06:19:26', '2020-11-08 06:19:26'),
('15', '2', '85', 'Mariam Norton', 'Aliquam amet qui mo', 'Elit laudantium ad', '2010-12-29', 'konghucu', 'wna', '83', '44', 'Reprehenderit id no', 'Nesciunt quam excep', 'Esse aspernatur sed', '+1 (371) 526-7413', 'Do sint eum elit au', '85', 'Et omnis molestias p', 'Fugiat harum ullam v', '1', '43', 'Sed magnam recusanda', '2017', 'Ut animi nesciunt', 'Debitis aliquid anim', 'Labore culpa dolore', '2', '2006-07-15', 'Atque nesciunt quas', 'Qui quas debitis inc', '1975-08-20', 'Qui irure et occaeca', 'Ut et nulla ad ipsum', '2020-11-08 06:19:26', '2020-11-08 06:19:26'),
('16', '1', '4', 'Charissa Mccray', 'Dolor quos vel volup', 'Consequatur sequi u', '1996-08-17', 'hindu', 'wna', '60', '52', 'Maxime sunt cumque v', 'Sunt distinctio Min', 'Et non autem dolor q', '+1 (966) 395-6444', 'Vitae rerum explicab', '29', 'Ipsa commodi in sit', 'Quibusdam eos dolor', '97', '55', 'Omnis blanditiis do', '1989', 'Sunt deserunt explic', 'Libero ipsum aliquam', 'Quis vitae dolor dol', '1', '1972-08-30', 'Ut occaecat maxime v', 'Totam ut consectetur', '1988-01-24', 'Sed cum ea eos mole', 'Dolore excepturi nis', '2020-11-08 06:19:29', '2020-11-08 06:19:29'),
('17', '2', '83', 'Freya Fitzpatrick', 'Tempore ex enim ius', 'Ipsa ex eligendi au', '2013-09-09', 'protestan', 'wni', '60', '54', 'Assumenda quasi nost', 'Non qui ut rem sunt', 'Ut perferendis est i', '+1 (964) 196-9681', 'Sed beatae sit cupid', '79', 'Distinctio Autem te', 'Dolorum voluptatibus', '46', '92', 'Neque ea similique n', '2003', 'Excepturi ut fugit', 'Perspiciatis odio i', 'Dolore autem Nam nul', '2', '1972-04-06', 'Elit atque dolor es', 'Aut eum veniam in c', '1971-06-19', 'Animi facere veniam', 'Aut quis suscipit vo', '2020-11-08 06:19:31', '2020-11-08 06:19:31'),
('18', '1', '77', 'Alyssa Bell', 'Voluptate modi ut au', 'Repudiandae modi asp', '1981-05-12', 'protestan', 'wni', '74', '71', 'Et occaecat ut offic', 'Debitis deserunt mol', 'Eum et tempora alias', '+1 (812) 811-8585', 'Voluptas enim at mol', '98', 'Sed labore lorem inc', 'Eligendi proident a', '88', '44', 'Voluptatem Ab nobis', '1975', 'Dolores corrupti ve', 'Neque sunt sit in s', 'Ea illum optio dis', '1', '1981-08-26', 'In est id ipsum non', 'Omnis earum quos des', '1987-10-28', 'Sint sint eos anim', 'Laudantium nesciunt', '2020-11-08 06:19:44', '2020-11-08 06:19:44'),
('19', '2', '41', 'Josiah Kidd', 'Quae doloremque est', 'Quidem sunt sit la', '1997-05-16', 'islam', 'wni', '7', '87', 'Aperiam corrupti ne', 'Iusto hic cupidatat', 'Et sit voluptates mo', '+1 (522) 617-1301', 'Sunt voluptatibus e', '81', 'Voluptates dolor quo', 'Vel ut nostrud volup', '59', '13', 'In est molestiae mol', '1986', 'Nam pariatur Aut qu', 'Natus sunt praesenti', 'Ipsum cupidatat repu', '1', '2015-03-28', 'A omnis ipsa non qu', 'Autem id et cupidita', '2010-01-21', 'Sunt quis nemo ut so', 'Voluptate non quia e', '2020-11-08 06:19:46', '2020-11-08 06:19:46'),
('20', '1', '39', 'Michael Jenkins', 'Ut et id dolore et', 'Laboriosam officia', '1994-01-26', 'katolik', 'wni', '39', '50', 'Corporis iusto repud', 'Incidunt aliqua Si', 'Rem dolorem perferen', '+1 (591) 566-8901', 'Architecto autem ull', '73', 'Sit quo sed lorem v', 'Labore doloribus duc', '90', '31', 'Dolor dolor sit ver', '1990', 'Repellendus Quod po', 'Nobis tempora minus', 'Debitis natus est d', '1', '1997-05-27', 'Esse consectetur a', 'Cillum qui expedita', '1975-08-20', 'Ut officia perferend', 'Non sequi sit moles', '2020-11-08 06:19:47', '2020-11-08 06:19:47'),
('21', '2', '93', 'Leo Mullen', 'Dolorem dolorem esse', 'Distinctio Id fuga', '1973-08-11', 'konghucu', 'wni', '57', '18', 'Incididunt possimus', 'Consequatur Itaque', 'Provident magna aut', '+1 (402) 679-6779', 'Anim cupidatat aute', '93', 'Sapiente sed veniam', 'Modi id molestiae e', '14', '43', 'Voluptas veniam quo', '2018', 'Totam omnis perferen', 'Consectetur consect', 'Consequatur eaque vo', '1', '1986-01-07', 'In exercitationem si', 'Perspiciatis perfer', '1970-05-07', 'Minima sit iusto Na', 'Dolores placeat quo', '2020-11-08 06:19:49', '2020-11-08 06:19:49'),
('22', '1', '76', 'Barrett Savage', 'Harum debitis libero', 'Accusantium incididu', '1977-11-29', 'konghucu', 'wna', '71', '41', 'Sint aut vel modi vo', 'Labore obcaecati vel', 'Quod aliquam laborio', '+1 (323) 924-3938', 'Ea officia temporibu', '76', 'Deleniti commodi rep', 'Accusamus delectus', '32', '79', 'Iusto hic eos pariat', '2014', 'Ut nulla mollit cons', 'Minim dolore sit nu', 'Id molestiae reicie', '1', '1994-02-06', 'Assumenda et cumque', 'Aliquam velit exped', '1997-07-21', 'Est ea id proident', 'Impedit voluptate q', '2020-11-08 06:19:50', '2020-11-08 06:19:50'),
('23', '2', '49', 'Liberty Ayers', 'Eaque delectus maio', 'Voluptatum est vel i', '2011-01-05', 'konghucu', 'wna', '36', '89', 'Ullam laboris illum', 'Autem aut sit adipi', 'Voluptatem nisi opti', '+1 (754) 141-9677', 'Omnis quia voluptate', '17', 'Error dolore reprehe', 'Irure corrupti nihi', '92', '17', 'A dolore fuga Qui q', '2002', 'Dolor aspernatur eiu', 'Nihil quisquam illum', 'Ea a qui aut nihil u', '2', '1979-03-18', 'Natus dolore elit n', 'Est commodo aut non', '1997-10-07', 'Autem occaecat ducim', 'Sed aut dolor doloru', '2020-11-08 06:19:50', '2020-11-08 06:19:50'),
('24', '2', '41', 'Chloe Craft', 'Aspernatur culpa fu', 'Vitae culpa archite', '1986-09-29', 'islam', 'wna', '70', '64', 'Excepteur sed optio', 'Rem amet et expedit', 'Dolore eligendi volu', '+1 (526) 867-6237', 'Quia in rerum nobis', '50', 'Magnam natus sed vol', 'Non adipisci adipisi', '40', '83', 'Facere eum quibusdam', '1987', 'Dolorem consectetur', 'Dolor earum dolorem', 'Harum voluptatem por', '2', '1981-08-21', 'Ut dolore ipsum duci', 'Quidem quibusdam et', '2005-03-21', 'Excepteur quis nulla', 'Cumque quo velit par', '2020-11-08 06:19:51', '2020-11-08 06:19:51'),
('25', '2', '85', 'Zeus Lucas', 'Aut fugit aliquip q', 'Quo alias omnis ut a', '1990-05-14', 'buddha', 'wni', '22', '66', 'Velit in beatae repu', 'Qui alias quam sed u', 'Dolore exercitation', '+1 (496) 233-3581', 'Saepe iste at in inc', '73', 'Esse labore minima', 'Delectus ea proiden', '24', '4', 'Eos dignissimos off', '2015', 'Voluptatibus molesti', 'Rerum quasi qui in v', 'Tempor aut consequat', '1', '1994-04-19', 'Deserunt natus facer', 'Quis ut qui assumend', '2008-05-15', 'Rerum laudantium il', 'Adipisicing est sit', '2020-11-17 04:54:15', '2020-11-17 04:54:15'),
('26', '1', '49', 'Dustin Good', 'Vel aliqua Ut velit', 'Obcaecati dignissimo', '1993-09-01', 'islam', 'wni', '71', '47', 'Exercitation elit t', 'Voluptatem Lorem ve', 'Quo blanditiis labor', '+1 (496) 708-7165', 'Tenetur officia volu', '14', 'Molestiae elit qui', 'Nesciunt eaque magn', '92', '21', 'Quia quam nihil ut s', '2008', 'Impedit similique o', 'Reprehenderit archit', 'Voluptate officia co', '2', '2001-05-31', 'Sunt qui quo dolore', 'Aliquip incididunt u', '1985-09-27', 'Reprehenderit perfe', 'Ut quia hic exercita', '2020-11-17 04:54:42', '2020-11-17 04:54:42'),
('27', '1', '90', 'Yardley Potts', 'Tempora corporis ull', 'Iure irure unde even', '1989-10-09', 'protestan', 'wna', '3', '92', 'In quo dolore amet', 'Itaque illum accusa', 'Commodi aliquid mole', '+1 (413) 543-7002', 'Non dolorum ipsum si', '84', 'Eius assumenda esse', 'Voluptate magni ea r', '10', '63', 'Temporibus voluptas', '2008', 'Velit nulla officia', 'Numquam natus adipis', 'Omnis qui eum ad qui', '2', '2012-12-14', 'Id nemo explicabo', 'Aliquip aliquam blan', '2008-02-20', 'Et quod consectetur', 'Enim eius esse nihil', '2020-11-17 04:56:24', '2020-11-17 04:56:24'),
('28', '1', '42', 'Deanna Dennis', 'Dolorum voluptatum i', 'Pariatur Reprehende', '2000-06-10', 'katolik', 'wni', '19', '13', 'Quia quos quae aperi', 'Cupiditate fugiat e', 'Et aliqua Neque pra', '+1 (356) 572-7345', 'Porro ex accusantium', '18', 'Dolor aliquam culpa', 'Non exercitationem i', '56', '7', 'Officia officia amet', '1994', 'Ea sunt quae quam vo', 'Qui itaque cupiditat', 'Est voluptatum sed s', '2', '2009-03-22', 'Enim rerum deleniti', 'Labore accusantium u', '1970-06-21', 'Quam possimus dolor', 'Voluptatem saepe ver', '2020-11-17 04:56:34', '2020-11-17 04:56:34'),
('29', '2', '4', 'Ori Lara', 'Quas eos et consequ', 'Est occaecat ut iste', '2001-05-19', 'katolik', 'wni', '48', '96', 'Et odit voluptatum u', 'Sed pariatur Non iu', 'Ipsam esse totam ul', '+1 (733) 975-3527', 'Voluptatem voluptati', '46', 'Consequuntur iure ip', 'Velit nostrud eaque', '70', '33', 'Quam accusamus recus', '1995', 'Dolorem reiciendis u', 'Enim nesciunt velit', 'Animi laborum eum d', '1', '1999-12-25', 'Irure et hic nostrud', 'Non incidunt fuga', '1973-03-24', 'Voluptate voluptates', 'Eu consequat Provid', '2020-11-17 05:01:06', '2020-11-17 05:01:06'),
('30', '1', '53', 'Gage Jefferson', 'Eum sint nihil fugi', 'Sunt corporis sit', '1983-11-10', 'protestan', 'wna', '64', '53', 'Facere voluptatum ad', 'Dignissimos voluptat', 'Illum esse molestia', '+1 (926) 501-8319', 'Incidunt id est fug', '18', 'Quo esse reprehende', 'Labore culpa eum nih', '66', '99', 'Dolorem quos a delec', '2005', 'Repellendus Nihil b', 'Assumenda maiores mo', 'Porro et est optio', '1', '2013-09-21', 'Voluptas officiis su', 'Ex esse consequatur', '1996-11-23', 'Ex sit eu voluptas q', 'Velit error sed dis', '2020-11-17 05:01:08', '2020-11-17 05:02:48'),
('31', '1', '62', 'Lev Barrera', 'Eum duis laborum vol', 'Quaerat quam irure e', '2010-11-10', 'islam', 'wni', '37', '63', 'Delectus cillum bea', 'Illum ad qui velit', 'Et aliquip explicabo', '+1 (982) 238-3681', 'Illum et voluptates', '6', 'Tenetur elit archit', 'Esse odit hic vel a', '30', '41', 'Porro mollitia quasi', '1997', 'Sit obcaecati dolor', 'Laborum ea nobis ut', 'Quia adipisci aliqui', '1', '1979-08-03', 'Assumenda voluptate', 'Velit veritatis quo', '2000-10-06', 'Sit iusto numquam en', 'Ducimus laudantium', '2020-11-17 05:03:40', '2020-11-17 05:03:40'),
('32', '1', '27', 'Fletcher Hodges', 'Dicta aperiam volupt', 'Non tempore incidid', '1987-11-02', 'hindu', 'wni', '15', '18', 'Minus architecto ver', 'Perferendis labore d', 'Repudiandae sit cupi', '+1 (336) 318-9877', 'Quas voluptatum ulla', '35', 'Nihil non aut magna', 'Aspernatur cupidatat', '7', '65', 'Iusto eaque dolor am', '2011', 'Molestiae dicta repu', 'Enim aute voluptas t', 'Quia anim ad omnis q', '1', '2016-08-10', 'Fugiat cillum sed i', 'Et voluptatum fuga', '2016-12-02', 'Porro sit vero exped', 'Officiis est in sint', '2020-11-17 05:05:02', '2020-11-17 05:05:02');

INSERT INTO `subjects` (`id`, `code`, `name`, `type`, `created_at`, `updated_at`) VALUES
('1', 'BI', 'Bahasa Indonesia', 'qqqq', '2020-10-27 10:37:47', '2020-11-05 13:18:02'),
('2', 'MM', 'Matematika', 'MM', '2020-11-05 13:12:04', '2020-11-05 13:18:20');

INSERT INTO `teachers` (`id`, `code`, `name`, `birth_place`, `birth_date`, `nuptk`, `nip`, `position`, `level`, `gender`, `religion`, `address`, `phone`, `education`, `status`, `work_start_date`, `created_at`, `updated_at`) VALUES
('1', 'DNW', 'Davis Newton wanda', 'Magni consequatur a', '2002-08-08', '29', '4', 'Minus qui sunt dolor', 'Dolore ullamco cumqu', 'pria', 'konghucu', 'Sit culpa officia do babi', '+1 (716) 116-6586', 'sd', 'Dolorem non est et', '1996-10-16', '2020-10-27 07:09:00', '2020-11-08 05:42:09'),
('2', 'GR002', 'Beverly Fischer', 'Adipisicing inventor', '2005-10-06', '46', '65', 'In dignissimos porro', 'Nam distinctio Exer', 'wanita', 'hindu', 'Assumenda autem enim', '+1 (257) 999-1664', 'd3', 'In consequatur Cons', '1990-04-20', '2020-10-27 07:32:09', '2020-11-08 05:37:36'),
('3', 'GR003', 'Doris Fry', 'Ratione aute quidem', '1977-11-05', '49', '24', 'Suscipit tempor beat', 'Laborum eiusmod veni', 'wanita', 'buddha', 'Omnis est eos ullam', '+1 (516) 458-1154', 's3', 'Fuga Nisi quia mole', '1992-04-20', '2020-10-27 11:23:23', '2020-11-08 05:37:42'),
('4', 'GR004', 'Amy Barrera', 'Anim necessitatibus', '2002-01-26', '53', '27', 'Eum et id perferendi', 'Quibusdam ea blandit', 'wanita', 'katolik', 'Incidunt nisi volup', '+1 (515) 453-3059', 's3', 'Ullamco impedit est', '2011-01-02', '2020-10-27 11:23:26', '2020-11-08 05:38:00'),
('5', 'GR005', 'Drew Vega', 'Vel irure incidunt', '1988-06-01', '47', '68', 'Quo minim omnis magn', 'Maxime mollitia pers', 'pria', 'protestan', 'Et autem voluptatibu', '+1 (295) 688-8432', 'smp', 'Quae nihil omnis eni', '2004-02-22', '2020-10-27 11:23:29', '2020-11-08 05:38:05'),
('6', 'MST', 'Moses Taylor', 'Laborum Pariatur E', '2004-06-23', '45', '33', 'Commodi elit enim q', 'Aut nihil aspernatur', 'wanita', 'protestan', 'Libero exercitatione', '+1 (995) 449-9992', 'sma', 'Sit repudiandae ull', '1999-06-28', '2020-10-27 11:23:43', '2020-11-08 05:40:41'),
('7', 'GR007', 'Duncan Huff', 'Et quia aut sed aliq', '2001-12-25', '86', '11', 'Pariatur Praesentiu', 'Cupidatat sint ut cu', 'pria', 'islam', 'Assumenda proident', '+1 (721) 797-5702', 's2', 'Pariatur Autem ut v', '2009-11-14', '2020-10-27 11:23:49', '2020-11-08 05:38:18'),
('8', 'GR008', 'Herman Hartman', 'Ducimus delectus c', '1974-11-23', '25', '49', 'Officia non deleniti', 'Id cupiditate consec', 'pria', 'protestan', 'Autem quo quasi cons', '+1 (208) 748-2463', 'sma', 'In incidunt dolore', '1994-04-17', '2020-10-27 11:23:52', '2020-11-08 05:38:23'),
('9', 'GR010', 'Aquila Strong', 'Enim sunt alias omni', '1993-09-18', '41', '47', 'Maxime id architecto', 'Ipsa velit voluptas', 'pria', 'hindu', 'Perspiciatis totam', '+1 (959) 907-1928', 'smp', 'Asperiores consequat', '2002-03-31', '2020-10-27 11:46:03', '2020-11-08 05:40:07'),
('10', 'XVC', 'Xavier Cain', 'Ut provident molest', '2020-01-27', '36', '94', 'Tempor dolore commod', 'Illo quia consequatu', 'pria', 'konghucu', 'Adipisci reprehender', '+1 (588) 835-8213', 's3', 'Consequat Non eu qu', '2003-12-04', '2020-10-27 11:46:21', '2020-11-08 05:42:29'),
('11', 'Consectetur nihil di', 'Fallon Allison', 'Expedita iste dolore', '1988-08-08', '49', '82', 'Quos cillum Nam aliq', 'Ad libero quisquam d', 'pria', 'hindu', 'Non minima ut ad con', '+1 (682) 344-6768', 'sd', 'Est consequatur Es', '2018-02-11', '2020-10-27 11:46:35', '2020-10-27 11:46:35');

INSERT INTO `users` (`id`, `name`, `username`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
('1', 'Super Admin', 'superadmin', '$2y$10$Bb1vc6lxyy9ue80XJHUxeeLmBftZnTH37VpJbTp40Apon9ydCF3cG', NULL, '2020-10-27 05:00:22', '2020-10-27 05:00:22');



/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;