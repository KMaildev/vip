-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2022 at 09:22 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vip_design`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `id` int(10) UNSIGNED NOT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`id`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'http://royalgatecompany.com/admin/uploads/files/me9uidofz61_tqn.jpg,http://royalgatecompany.com/admin/uploads/files/wg2q0isu9dp6yjb.jpg,http://royalgatecompany.com/admin/uploads/files/5h0ykf_pmgbevdw.jpg,http://royalgatecompany.com/admin/uploads/files/nf71ap6_juzthme.jpg', NULL, NULL),
(2, 'http://royalgatecompany.com/admin/uploads/files/me9uidofz61_tqn.jpg,http://royalgatecompany.com/admin/uploads/files/wg2q0isu9dp6yjb.jpg,http://royalgatecompany.com/admin/uploads/files/5h0ykf_pmgbevdw.jpg,http://royalgatecompany.com/admin/uploads/files/nf71ap6_juzthme.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `media` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `upload_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `description`, `media`, `upload_date`, `created_at`, `updated_at`) VALUES
(1, 'The 9 Best Guideline For The Construction', 'Building information models (BIMs) are files (often but not always in proprietary formats and containing proprietary data) that can be extracted, exchanged, or networked to support decision-making regarding a building or other built asset.', 'https://www.kinglionconstruction.com/admin/uploads/files/l1az3mp2dfucoq9.jpg', '2022-08-11', NULL, NULL),
(2, 'WHY PAY ATTENTION TO SITEWORK?', 'The Excavation Foreman generally focuses on the most efficient method to get his required work items done. Generally the excavator\'s goals can be visualized if the dirt were being moved with a stick; pushed from the high areas to the nearest low areas with a minimum of carrying. Sometimes the most efficient method for the Excavation Foreman is also the best plan for the entire project. Many times, though, project complexities exist that are beyond the excavator’s scope of work. In these cases, the Construction Supervisor should make sure the planning considers what is best for the entire project, not just for the Excavator.\r\n\r\n', 'https://linn-construction.com/admin/uploads/files/wexh3ntjc6oubvr.jpg', '2022-08-11', NULL, NULL),
(3, 'The 9 Best Guideline For The Construction', 'Building information models (BIMs) are files (often but not always in proprietary formats and containing proprietary data) that can be extracted, exchanged, or networked to support decision-making regarding a building or other built asset.', 'https://www.kinglionconstruction.com/admin/uploads/files/l1az3mp2dfucoq9.jpg', '2022-08-11', NULL, NULL),
(4, 'WHY PAY ATTENTION TO SITEWORK?', 'The Excavation Foreman generally focuses on the most efficient method to get his required work items done. Generally the excavator\'s goals can be visualized if the dirt were being moved with a stick; pushed from the high areas to the nearest low areas with a minimum of carrying. Sometimes the most efficient method for the Excavation Foreman is also the best plan for the entire project. Many times, though, project complexities exist that are beyond the excavator’s scope of work. In these cases, the Construction Supervisor should make sure the planning considers what is best for the entire project, not just for the Excavator.\r\n\r\n', 'https://linn-construction.com/admin/uploads/files/wexh3ntjc6oubvr.jpg', '2022-08-11', NULL, NULL),
(5, 'The 9 Best Guideline For The Construction', 'Building information models (BIMs) are files (often but not always in proprietary formats and containing proprietary data) that can be extracted, exchanged, or networked to support decision-making regarding a building or other built asset.', 'https://www.kinglionconstruction.com/admin/uploads/files/l1az3mp2dfucoq9.jpg', '2022-08-11', NULL, NULL),
(6, 'WHY PAY ATTENTION TO SITEWORK?', 'The Excavation Foreman generally focuses on the most efficient method to get his required work items done. Generally the excavator\'s goals can be visualized if the dirt were being moved with a stick; pushed from the high areas to the nearest low areas with a minimum of carrying. Sometimes the most efficient method for the Excavation Foreman is also the best plan for the entire project. Many times, though, project complexities exist that are beyond the excavator’s scope of work. In these cases, the Construction Supervisor should make sure the planning considers what is best for the entire project, not just for the Excavator.\r\n\r\n', 'https://linn-construction.com/admin/uploads/files/wexh3ntjc6oubvr.jpg', '2022-08-11', NULL, NULL),
(7, 'The 9 Best Guideline For The Construction', 'Building information models (BIMs) are files (often but not always in proprietary formats and containing proprietary data) that can be extracted, exchanged, or networked to support decision-making regarding a building or other built asset.', 'https://www.kinglionconstruction.com/admin/uploads/files/l1az3mp2dfucoq9.jpg', '2022-08-11', NULL, NULL),
(8, 'WHY PAY ATTENTION TO SITEWORK?', 'The Excavation Foreman generally focuses on the most efficient method to get his required work items done. Generally the excavator\'s goals can be visualized if the dirt were being moved with a stick; pushed from the high areas to the nearest low areas with a minimum of carrying. Sometimes the most efficient method for the Excavation Foreman is also the best plan for the entire project. Many times, though, project complexities exist that are beyond the excavator’s scope of work. In these cases, the Construction Supervisor should make sure the planning considers what is best for the entire project, not just for the Excavator.\r\n\r\n', 'https://linn-construction.com/admin/uploads/files/wexh3ntjc6oubvr.jpg', '2022-08-11', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `submit_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `subject` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `message`, `submit_date`, `created_at`, `updated_at`, `subject`) VALUES
(2, 'Mg Mg', 'mgmg@gmail.com', '09123123123', 'Hello', '2022-08-29', '2022-08-29 02:00:17', '2022-08-29 02:00:17', 'Hello');

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
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(4, '2022_08_29_072606_create_contacts_table', 1),
(5, '2022_08_29_082225_add_subject_to_contacts_table', 2),
(6, '2022_08_29_084718_create_activities_table', 3),
(7, '2022_08_29_091841_create_blogs_table', 4),
(9, '2022_08_30_030430_create_projects_table', 5);

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
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(10) UNSIGNED NOT NULL,
  `project_title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_location` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_area` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `finished_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `main_photo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_gallery` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `project_title`, `project_location`, `project_area`, `finished_date`, `description`, `main_photo`, `project_gallery`, `project_status`, `created_at`, `updated_at`) VALUES
(1, 'Construction ', 'Yangon', '20x60', '1.1.2022', 'အကြမ်းထည်းပီးစိးပီး ရေမိးဆေး လိုအပ်ချက်တွေ ကျန်နေသေးတဲ့ စုပေါင်းလှုဒါန်းထားတဲ့ဘုန်းဘုန်းကျောင်းလေး ကိုဗာစ်ကဖြစ်\r\nကို စစ်က ညစ်နဲ့ ပြည်သူတွေ အားနည်းနေကြပြီ\r\nပြည်သူပြည်သားတွေ စိးပွားရေးလူမှု့ရေး ကျန်းမာရေး အရေးသုံးပါး \r\nရေစုန်မျောပြီ  \r\nအသက်ရှင်သန်အောင် နေကြဖို့နဲ့ အစားအသောက်\r\nမှန်ကန်စွာ စားသောက်နေထိုင်ဖို့အဓိက မှာပြစေ\r\nအမှောင်ပြီးရင် အလင်းသစ်ရစမြဲ့မို့ အားတင်းထားပါ\r\nမိတ်ဆွေများ\r\n', 'https://linn-construction.com/admin/uploads/files/uv29yxsj_g35e4q.jpg', 'https://linn-construction.com/admin/uploads/files/uv29yxsj_g35e4q.jpg,https://linn-construction.com/admin/uploads/files/yf1itk0q7wz_so5.jpg,https://linn-construction.com/admin/uploads/files/chy3tl8ukmbsv1g.jpg', 'Completed', NULL, NULL),
(2, 'Construction ', 'Yangon', '20x60', '1.1.2022', 'အကြမ်းထည်းပီးစိးပီး ရေမိးဆေး လိုအပ်ချက်တွေ ကျန်နေသေးတဲ့ စုပေါင်းလှုဒါန်းထားတဲ့ဘုန်းဘုန်းကျောင်းလေး ကိုဗာစ်ကဖြစ်\r\nကို စစ်က ညစ်နဲ့ ပြည်သူတွေ အားနည်းနေကြပြီ\r\nပြည်သူပြည်သားတွေ စိးပွားရေးလူမှု့ရေး ကျန်းမာရေး အရေးသုံးပါး \r\nရေစုန်မျောပြီ  \r\nအသက်ရှင်သန်အောင် နေကြဖို့နဲ့ အစားအသောက်\r\nမှန်ကန်စွာ စားသောက်နေထိုင်ဖို့အဓိက မှာပြစေ\r\nအမှောင်ပြီးရင် အလင်းသစ်ရစမြဲ့မို့ အားတင်းထားပါ\r\nမိတ်ဆွေများ\r\n', 'https://linn-construction.com/admin/uploads/files/uv29yxsj_g35e4q.jpg', 'https://linn-construction.com/admin/uploads/files/uv29yxsj_g35e4q.jpg,https://linn-construction.com/admin/uploads/files/yf1itk0q7wz_so5.jpg', 'Completed', NULL, NULL),
(3, 'Construction ', 'Yangon', '20x60', '1.1.2022', 'အကြမ်းထည်းပီးစိးပီး ရေမိးဆေး လိုအပ်ချက်တွေ ကျန်နေသေးတဲ့ စုပေါင်းလှုဒါန်းထားတဲ့ဘုန်းဘုန်းကျောင်းလေး ကိုဗာစ်ကဖြစ်\r\nကို စစ်က ညစ်နဲ့ ပြည်သူတွေ အားနည်းနေကြပြီ\r\nပြည်သူပြည်သားတွေ စိးပွားရေးလူမှု့ရေး ကျန်းမာရေး အရေးသုံးပါး \r\nရေစုန်မျောပြီ  \r\nအသက်ရှင်သန်အောင် နေကြဖို့နဲ့ အစားအသောက်\r\nမှန်ကန်စွာ စားသောက်နေထိုင်ဖို့အဓိက မှာပြစေ\r\nအမှောင်ပြီးရင် အလင်းသစ်ရစမြဲ့မို့ အားတင်းထားပါ\r\nမိတ်ဆွေများ\r\n', 'https://linn-construction.com/admin/uploads/files/uv29yxsj_g35e4q.jpg', 'https://linn-construction.com/admin/uploads/files/uv29yxsj_g35e4q.jpg,https://linn-construction.com/admin/uploads/files/yf1itk0q7wz_so5.jpg', 'Completed', NULL, NULL),
(4, 'Construction ', 'Yangon', '20x60', '1.1.2022', 'အကြမ်းထည်းပီးစိးပီး ရေမိးဆေး လိုအပ်ချက်တွေ ကျန်နေသေးတဲ့ စုပေါင်းလှုဒါန်းထားတဲ့ဘုန်းဘုန်းကျောင်းလေး ကိုဗာစ်ကဖြစ်\r\nကို စစ်က ညစ်နဲ့ ပြည်သူတွေ အားနည်းနေကြပြီ\r\nပြည်သူပြည်သားတွေ စိးပွားရေးလူမှု့ရေး ကျန်းမာရေး အရေးသုံးပါး \r\nရေစုန်မျောပြီ  \r\nအသက်ရှင်သန်အောင် နေကြဖို့နဲ့ အစားအသောက်\r\nမှန်ကန်စွာ စားသောက်နေထိုင်ဖို့အဓိက မှာပြစေ\r\nအမှောင်ပြီးရင် အလင်းသစ်ရစမြဲ့မို့ အားတင်းထားပါ\r\nမိတ်ဆွေများ\r\n', 'https://linn-construction.com/admin/uploads/files/uv29yxsj_g35e4q.jpg', 'https://linn-construction.com/admin/uploads/files/uv29yxsj_g35e4q.jpg,https://linn-construction.com/admin/uploads/files/yf1itk0q7wz_so5.jpg', 'Completed', NULL, NULL),
(5, 'Construction ', 'Yangon', '20x60', '1.1.2022', 'အကြမ်းထည်းပီးစိးပီး ရေမိးဆေး လိုအပ်ချက်တွေ ကျန်နေသေးတဲ့ စုပေါင်းလှုဒါန်းထားတဲ့ဘုန်းဘုန်းကျောင်းလေး ကိုဗာစ်ကဖြစ်\r\nကို စစ်က ညစ်နဲ့ ပြည်သူတွေ အားနည်းနေကြပြီ\r\nပြည်သူပြည်သားတွေ စိးပွားရေးလူမှု့ရေး ကျန်းမာရေး အရေးသုံးပါး \r\nရေစုန်မျောပြီ  \r\nအသက်ရှင်သန်အောင် နေကြဖို့နဲ့ အစားအသောက်\r\nမှန်ကန်စွာ စားသောက်နေထိုင်ဖို့အဓိက မှာပြစေ\r\nအမှောင်ပြီးရင် အလင်းသစ်ရစမြဲ့မို့ အားတင်းထားပါ\r\nမိတ်ဆွေများ\r\n', 'https://linn-construction.com/admin/uploads/files/uv29yxsj_g35e4q.jpg', 'https://linn-construction.com/admin/uploads/files/uv29yxsj_g35e4q.jpg,https://linn-construction.com/admin/uploads/files/yf1itk0q7wz_so5.jpg', 'Completed', NULL, NULL),
(6, 'Construction ', 'Yangon', '20x60', '1.1.2022', 'အကြမ်းထည်းပီးစိးပီး ရေမိးဆေး လိုအပ်ချက်တွေ ကျန်နေသေးတဲ့ စုပေါင်းလှုဒါန်းထားတဲ့ဘုန်းဘုန်းကျောင်းလေး ကိုဗာစ်ကဖြစ်\r\nကို စစ်က ညစ်နဲ့ ပြည်သူတွေ အားနည်းနေကြပြီ\r\nပြည်သူပြည်သားတွေ စိးပွားရေးလူမှု့ရေး ကျန်းမာရေး အရေးသုံးပါး \r\nရေစုန်မျောပြီ  \r\nအသက်ရှင်သန်အောင် နေကြဖို့နဲ့ အစားအသောက်\r\nမှန်ကန်စွာ စားသောက်နေထိုင်ဖို့အဓိက မှာပြစေ\r\nအမှောင်ပြီးရင် အလင်းသစ်ရစမြဲ့မို့ အားတင်းထားပါ\r\nမိတ်ဆွေများ\r\n', 'https://linn-construction.com/admin/uploads/files/uv29yxsj_g35e4q.jpg', 'https://linn-construction.com/admin/uploads/files/uv29yxsj_g35e4q.jpg,https://linn-construction.com/admin/uploads/files/yf1itk0q7wz_so5.jpg', 'Completed', NULL, NULL),
(7, 'Construction ', 'Yangon', '20x60', '1.1.2022', 'အကြမ်းထည်းပီးစိးပီး ရေမိးဆေး လိုအပ်ချက်တွေ ကျန်နေသေးတဲ့ စုပေါင်းလှုဒါန်းထားတဲ့ဘုန်းဘုန်းကျောင်းလေး ကိုဗာစ်ကဖြစ်\r\nကို စစ်က ညစ်နဲ့ ပြည်သူတွေ အားနည်းနေကြပြီ\r\nပြည်သူပြည်သားတွေ စိးပွားရေးလူမှု့ရေး ကျန်းမာရေး အရေးသုံးပါး \r\nရေစုန်မျောပြီ  \r\nအသက်ရှင်သန်အောင် နေကြဖို့နဲ့ အစားအသောက်\r\nမှန်ကန်စွာ စားသောက်နေထိုင်ဖို့အဓိက မှာပြစေ\r\nအမှောင်ပြီးရင် အလင်းသစ်ရစမြဲ့မို့ အားတင်းထားပါ\r\nမိတ်ဆွေများ\r\n', 'https://linn-construction.com/admin/uploads/files/uv29yxsj_g35e4q.jpg', 'https://linn-construction.com/admin/uploads/files/uv29yxsj_g35e4q.jpg,https://linn-construction.com/admin/uploads/files/yf1itk0q7wz_so5.jpg', 'Completed', NULL, NULL),
(8, 'Construction ', 'Yangon', '20x60', '1.1.2022', 'အကြမ်းထည်းပီးစိးပီး ရေမိးဆေး လိုအပ်ချက်တွေ ကျန်နေသေးတဲ့ စုပေါင်းလှုဒါန်းထားတဲ့ဘုန်းဘုန်းကျောင်းလေး ကိုဗာစ်ကဖြစ်\r\nကို စစ်က ညစ်နဲ့ ပြည်သူတွေ အားနည်းနေကြပြီ\r\nပြည်သူပြည်သားတွေ စိးပွားရေးလူမှု့ရေး ကျန်းမာရေး အရေးသုံးပါး \r\nရေစုန်မျောပြီ  \r\nအသက်ရှင်သန်အောင် နေကြဖို့နဲ့ အစားအသောက်\r\nမှန်ကန်စွာ စားသောက်နေထိုင်ဖို့အဓိက မှာပြစေ\r\nအမှောင်ပြီးရင် အလင်းသစ်ရစမြဲ့မို့ အားတင်းထားပါ\r\nမိတ်ဆွေများ\r\n', 'https://linn-construction.com/admin/uploads/files/uv29yxsj_g35e4q.jpg', 'https://linn-construction.com/admin/uploads/files/uv29yxsj_g35e4q.jpg,https://linn-construction.com/admin/uploads/files/yf1itk0q7wz_so5.jpg', 'Completed Project', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `login_session_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password_expire_date` datetime DEFAULT '2022-11-30 00:00:00',
  `password_reset_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `login_session_key`, `email_status`, `password_expire_date`, `password_reset_key`) VALUES
(1, 'Admin', 'admin@gmail.com', '0000-00-00 00:00:00', '$2y$10$Hqfw68n3nj6yFoDGaL7CbedNKTKg4tkoYi52XYqhL1YG0bR7.KXiS', '1', '0000-00-00 00:00:00', '2022-08-30 05:30:00', NULL, NULL, '2022-11-30 00:00:00', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `projects`
--
ALTER TABLE `projects`
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
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
