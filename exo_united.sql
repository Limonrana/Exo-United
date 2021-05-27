-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2020 at 01:38 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `exo_united`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `about_sec_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_sec_content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_sec_image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_details_content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_icon_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_title_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_content_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_link_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_icon_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_title_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_content_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_link_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_icon_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_title_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_content_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_link_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quote_title_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quote_content_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quote_charity_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quote_title_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quote_content_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quote_charity_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quote_title_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quote_content_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quote_charity_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `about_sec_title`, `about_sec_content`, `about_sec_image`, `about_details_content`, `service_icon_1`, `service_title_1`, `service_content_1`, `service_link_1`, `service_icon_2`, `service_title_2`, `service_content_2`, `service_link_2`, `service_icon_3`, `service_title_3`, `service_content_3`, `service_link_3`, `quote_title_1`, `quote_content_1`, `quote_charity_1`, `quote_title_2`, `quote_content_2`, `quote_charity_2`, `quote_title_3`, `quote_content_3`, `quote_charity_3`, `created_at`, `updated_at`) VALUES
(1, 'A FEW WORDS ABOUT US', '<p>Our goal is to provide our customers with the most convenient and enjoyable lottery purchasing experience.</p>\r\n<p>It&rsquo;s not just what we do, it&rsquo;s who we are. From past to present, we are a success story still in the making.With an enthusiasm to serve, our commitment to providing fun and fair games is matched by our desire to make a positive difference in the community.</p>\r\n<ul class=\"cmn-list\">\r\n<li>Playing It Global for Over a Decade</li>\r\n<li>Play from Anywhere in the World</li>\r\n<li>Absolutely No Commissions Taken</li>\r\n<li>A Simple and Secure Service</li>\r\n<li>Winning Made Easy</li>\r\n</ul>', 'uploads/others/GS7G2qgVGM7xS0Sx51pcUb0z8LnneghN9qMK5KXclEA0m0xoQh.jpg', '<div id=\"shopify-section-transparency-content-callout\" class=\"shopify-section\">\r\n<section>\r\n<div class=\"transparency__content-callout\">\r\n<h2>Omaze offers dream-come-true experiences online that anyone has the chance to win.</h2>\r\n</div>\r\n</section>\r\n</div>\r\n<div data-content-block=\"1\">\r\n<div id=\"shopify-section-transparency-content-block\" class=\"shopify-section\">\r\n<section>\r\n<div class=\"transparency__content-block\">\r\n<p class=\"block-0\">Our model democratizes traditional auction-giving by offering everyone the chance to have a once-in-a-lifetime experience. Through the Omaze platform, people from more than 180 countries have made donations that support over 350 charities, driving substantial levels of awareness for their work, and significantly more money than traditional methods.</p>\r\n<p class=\"block-0\">In order to maximize impact for the causes we support, we provide a full suite of turnkey services focused on storytelling and removing the friction from fundraising. Our marketing team is behind all those Instagram ads you see, our tech team built this website you&rsquo;re on, our customer experience team handles requests from around the world, Charities Aid Foundation America gets your money to the cause you supported, and so much more.</p>\r\n<div id=\"shopify-section-transparency-content-title-one\" class=\"shopify-section\">\r\n<section>\r\n<div class=\"transparency__content-title\">\r\n<h2 id=\"transparency__content-title--one\" style=\"text-align: center;\">Where Your Money Goes</h2>\r\n</div>\r\n</section>\r\n</div>\r\n<div data-content-block=\"3\">\r\n<div id=\"shopify-section-transparency-content-block\" class=\"shopify-section\">\r\n<section>\r\n<div class=\"transparency__content-block\">\r\n<p class=\"block-0\">When you contribute $10 for the chance to win a celebrity experience (set visit, dinner date, tickets to a premiere, etc.), $6 is donated to charity, $2.50 on average goes towards marketing expenses and credit card fees, and Omaze nets the remaining $1.50. A $10 contribution for the chance to win a prize-based experience (like a car, vacation or tuition) breaks down as follows: $1.50 is donated to charity; $7 typically goes to sourcing and shipping the prize, covering the winner&rsquo;s taxes, marketing the experience, and processing credit card fees; and $1.50 goes to Omaze. These experiences require substantially more resources to secure the prize and help spread the word.<br /><br />It&rsquo;s an investment, but it pays off. Our for-profit model enables us to expand our marketing services far beyond what&rsquo;s usually done in the nonprofit space, and therefore increase the total dollars raised for our partners. That&rsquo;s why we look at charities and their funds a little differently&mdash;we maximize the total amount raised, not just the percentage that goes to the organization. And how do we amplify the raise? By investing money in services that will expand the reach of the campaign, and therefore the number of donors.</p>\r\n</div>\r\n</section>\r\n</div>\r\n</div>\r\n<div id=\"shopify-section-transparency-content-title-two\" class=\"shopify-section\">\r\n<section>\r\n<div class=\"transparency__content-title\">\r\n<h2 id=\"transparency__content-title--two\">We believe in impact over percentages.</h2>\r\n</div>\r\n</section>\r\n</div>\r\n</div>\r\n</section>\r\n</div>\r\n</div>', 'fa fa-users', 'Our Experiences', 'One of the core advantages of playing an online lotto is that it is both safe and secure. So, there is no need for you to queue, or visit a retail store, to get tickets.', 'http://127.0.0.1:8000/experience', 'fa fa-users', 'Our Blogs', 'One of the core advantages of playing an online lotto is that it is both safe and secure. So, there is no need for you to queue, or visit a retail store, to get tickets.', 'http://127.0.0.1:8000/blog', 'fa fa-users', 'Our Winners', 'One of the core advantages of playing an online lotto is that it is both safe and secure. So, there is no need for you to queue, or visit a retail store, to get tickets.', 'http://127.0.0.1:8000/winners', 'Lauren Paul', 'We did an experience that raised $40K at auction. It netted us over $1M on Omaze. That makes an enormous difference for the girls we serve.', 'Kind Campaign', 'Joey Parris', 'Exo-United provides marketing, content, tech and fulfillment services we simply can’t afford or get anywhere else. It’s these investments and expertise that drive the huge return.', 'GivePower', 'Isha Sesay', 'Exo experiences raise us 2–40x what we can earn at auctions or galas, and are way more time efficient.', 'W.E. Can Lead', '2020-07-04 12:29:09', '2020-07-04 06:43:20');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_super` tinyint(1) NOT NULL DEFAULT 0,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `is_super`, `email_verified_at`, `password`, `remember_token`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Limon Rana', 'limonrana515@gmail.com', 0, NULL, '$2y$10$zKK05BGNrJWxegzX0Z5M0ewsw8Vx5DaL9wJAkUGVjJQY4OtsvR2Ye', 'mA2DkQorxI6LxarTIpj9XJ5FsrXxRG4FRXVrXYh2RjbXeU20FZZBR6j6Q1DI', 1, NULL, '2020-05-24 16:35:03');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `banner_heading` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_subheading` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bg_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_bg_main` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `banner_heading`, `banner_subheading`, `button_text`, `button_link`, `bg_image`, `is_bg_main`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Test banner for you', 'Exo United is an online Sweepstakes platform inspired by a few Exo United lover\'s fantasies of the ultimate Sweepstakes platform.', 'Experience', 'http://127.0.0.1:8000/trending/experience', 'uploads/experience/mUJEoF7sILFusP3lPOUntehzvOeHbtSSEtyVYxkQTaHPUGyGxx.jpg', 0, 1, '2020-07-03 10:27:32', '2020-07-04 19:49:14'),
(4, 'Test banner for you', 'Exo United is an online Sweepstakes platform inspired by a few Exo United lover\'s fantasies of the ultimate Sweepstakes platform.', 'Read More', '#', 'uploads/others/jCe1e6LJaNTZ3611WK8BCGQAN12ReQegUU4tFb7hg861XPsSej.jpg', 1, 0, '2020-07-04 19:29:25', '2020-07-04 19:48:26');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `slug`, `created_at`, `updated_at`) VALUES
(33, 'Car', 'car', '2020-06-29 20:48:30', '2020-07-17 15:11:56'),
(34, 'House', 'house', '2020-06-29 20:48:42', '2020-07-17 15:12:08'),
(35, 'Travel', 'travel', '2020-06-29 20:48:55', '2020-07-17 15:12:22'),
(36, 'Entertainment', 'entertainment', '2020-06-29 20:49:11', '2020-07-17 15:12:33'),
(37, 'Exo United', 'exo-united', '2020-06-29 20:49:27', '2020-07-17 15:15:36'),
(38, 'Test', 'test', '2020-07-04 19:52:57', '2020-07-17 15:15:28'),
(39, 'Covid 19', 'covid-19', '2020-07-14 17:04:52', '2020-07-17 15:14:54');

-- --------------------------------------------------------

--
-- Table structure for table `charities`
--

CREATE TABLE `charities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `charity_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `charity_logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `charities`
--

INSERT INTO `charities` (`id`, `charity_name`, `charity_logo`, `created_at`, `updated_at`) VALUES
(1, 'Dempsey Center', 'uploads/charity/xRKBlXAmMY8p38IR1iQJ.png', '2020-06-28 20:44:03', '2020-07-03 09:13:13'),
(3, 'Test Charity', 'uploads/charity/qEAWy25sSUGicq69ox7n.png', '2020-06-28 14:58:40', '2020-07-03 09:16:12'),
(4, 'UCLA Health', 'uploads/charity/Ugd1JgmLJaJScUICtpQa.jpg', '2020-06-29 20:58:21', '2020-07-03 09:14:48'),
(5, 'PATH', 'uploads/charity/Ic7tvU7Qg8UlA0OJoE91.png', '2020-06-30 23:18:28', '2020-07-03 09:15:02'),
(6, 'Free Hugs', 'uploads/charity/KvcVFUgWooeyPQvmMtRO.png', '2020-06-30 23:25:16', '2020-07-03 09:15:11'),
(7, 'Robin Hood', 'uploads/charity/0uCbNXGC4HxaIKnofT2s.png', '2020-06-30 23:31:14', '2020-07-03 09:15:20');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `left_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `left_content` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notification_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `right_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `right_content` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `right_details_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `right_phone_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `right_phone_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `right_email_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `right_email_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `right_bg_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `map_latitude` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `map_longitude` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `left_title`, `left_content`, `notification_email`, `right_title`, `right_content`, `right_details_title`, `right_phone_1`, `right_phone_2`, `right_email_1`, `right_email_2`, `right_bg_image`, `map_latitude`, `map_longitude`, `created_at`, `updated_at`) VALUES
(1, 'Get In Touch', 'If you have any questions or queries our helpful support team will be more than happy to assist.', 'limonrana515@gmail.com', 'We Are Available', '24 Hours A Day, 365 Days A Year', 'Contact Us', '01764548224', '8018967983', 'limonrana515@gmail.com', 'limonrana513@gmail.com', 'uploads/others/DyB7XDDSVpIH947idjHrFjuiEdeHqg25cGvyubXdMWNkFbVleH.jpg', '40.730610', '-73.935242', '2020-07-04 10:35:24', '2020-07-04 04:53:51');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `coupon_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coupon_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `coupon_name`, `coupon_code`, `discount`, `created_at`, `updated_at`) VALUES
(1, 'Eid Coupon', 'eid10', '10', '2020-05-27 12:29:19', '2020-05-27 12:29:19'),
(2, 'Eid Coupon 50', 'eid50', '50', '2020-05-27 12:31:37', '2020-05-27 12:31:37'),
(7, 'Eid Coupon5', 'eid5', '5', '2020-05-27 12:45:16', '2020-05-27 12:45:16'),
(8, 'Eid Coupon57', 'eid57', '57', '2020-05-27 12:45:32', '2020-05-27 12:45:32');

-- --------------------------------------------------------

--
-- Table structure for table `drawns`
--

CREATE TABLE `drawns` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `experience_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `free_user_id` bigint(20) DEFAULT NULL,
  `order_id` bigint(20) UNSIGNED DEFAULT NULL,
  `entry_id` bigint(20) UNSIGNED DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `drawns`
--

INSERT INTO `drawns` (`id`, `experience_id`, `user_id`, `free_user_id`, `order_id`, `entry_id`, `status`, `created_at`, `updated_at`) VALUES
(14, 4, 5, NULL, 4, 4, 1, '2020-07-14 00:48:06', '2020-07-14 00:48:06');

-- --------------------------------------------------------

--
-- Table structure for table `entrylevels`
--

CREATE TABLE `entrylevels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `experience_id` bigint(20) UNSIGNED DEFAULT NULL,
  `entry_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `entry_quantity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `entry_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `entry_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `entry_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `recommend_badge` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `entrylevels`
--

INSERT INTO `entrylevels` (`id`, `experience_id`, `entry_title`, `entry_quantity`, `entry_description`, `entry_price`, `entry_image`, `recommend_badge`, `status`, `created_at`, `updated_at`) VALUES
(4, 4, '250 Entries', '250', '250 entires Buy for you.', '50', 'uploads/experience/vS0xLMtMiWAoKthsY9yWlnHQeJ5mpbjjJBu5BdtXt5bMT7CtKd.png', 'Most Popular', 1, '2020-06-29 16:10:31', '2020-06-29 16:51:52'),
(7, 22, '100 entries to win', '100', '100 chances to win a 2020 Corvette Stingray Z51 and $40,000', '10', 'uploads/experience/8BxHr7lcL6wdPSwwK3k7Pzdyi5pTnW9psbDF8sXwNXXcnDAsqu.png', NULL, 1, '2020-06-29 21:12:22', '2020-06-29 21:12:22'),
(8, 22, '250 entries to win', '250', '250 chances to win a 2020 Corvette Stingray Z51 and $40,000', '25', 'uploads/experience/CO0m4loRYVRo60psKLQ2QlU1sRDgmIn46VqTtEDs7xb6fb2u36.png', 'Most Popular!', 1, '2020-06-29 21:14:46', '2020-06-29 21:14:46'),
(9, 22, '1000 entries to win', '1000', '1000 chances to win a 2020 Corvette Stingray Z51 and $40,000', '50', 'uploads/experience/B7XAALhKMV1sPdLpZ21JkFanzGmh6nIYV8oSM0xnub5Z6BtHQM.png', 'double entries!', 1, '2020-06-29 21:16:12', '2020-06-29 21:16:12'),
(10, 22, '2000 entries to win', '2000', '2000 chances to win a 2020 Corvette Stingray Z51 and $40,000', '100', 'uploads/experience/GHcR2yhqcTPECnHrLigphf9emqPH3gAkVgMBznm64XsL3GFCcp.jpg', 'double entries!', 1, '2020-06-29 21:17:12', '2020-06-29 21:17:12'),
(11, 24, '100 entries to win', '100', '100 chances to Win and Customize the Tiny Home of Your Dreams', '10', 'uploads/experience/IiQ9IzAVE1FCq56KvAoAk253KjA1OzJIOwKOBz0aAdPCIwpzjU.png', NULL, 1, '2020-06-30 23:35:24', '2020-06-30 23:35:24'),
(12, 24, '250 entries to win', '250', '250 chance to Win and Customize the Tiny Home of Your Dreams', '25', 'uploads/experience/d2VmkPvIzs1etOGGZe9nQALUAYZxS7ZFB44YIAG1KUYndcFrdX.png', 'Most Popular!', 1, '2020-06-30 23:36:31', '2020-06-30 23:36:31'),
(13, 24, '1000 entries to win', '1000', '250 chance to Win and Customize the Tiny Home of Your Dreams', '50', 'uploads/experience/hKPYHiOMhHF1PrQBkHBiPAHj9lwND5SFRvawbnwFB6vOdf8ZNz.png', 'double entries!', 1, '2020-06-30 23:37:17', '2020-06-30 23:37:17'),
(14, 25, '250 entries to win', '250', '250 chance to Win a Weeklong Vacation in a Nantucket Beach House', '25', 'uploads/experience/hxyKgPPXqGhk9hGa6bOdYA8tJ4m81cWSJBw85e6z5tZ3CUzWEH.png', 'Most Popular!', 1, '2020-06-30 23:38:03', '2020-06-30 23:38:03'),
(15, 25, '1000 entries to win', '1000', '1000 chance to Win a Weeklong Vacation in a Nantucket Beach House', '50', 'uploads/experience/q3mbSB6SNQW3qhlkYtgylw5ExtfUDXZYNDfpLJslOssaiC4vj9.png', 'double entries!', 1, '2020-06-30 23:38:36', '2020-06-30 23:38:36'),
(16, 26, '100 entries to win', '100', '100 chance to Play Football with the New York Giants in Your Backyard & Score a Super Bowl Ring', '10', 'uploads/experience/FsxBQ5WsARC5le8k0MqkhSqgOhYcIOLznlHmsY3WnQCegOA5Mx.png', 'Most Popular!', 1, '2020-06-30 23:39:35', '2020-06-30 23:39:35'),
(17, 26, '250 entries to win', '250', '250 chance to Play Football with the New York Giants in Your Backyard & Score a Super Bowl Ring', '25', 'uploads/experience/qTLGdhMJE90030DNvwc1EXR8DeZEudTJ5yD0eYXlpSIHSwveXu.png', NULL, 1, '2020-06-30 23:40:06', '2020-06-30 23:40:06'),
(18, 22, 'Test entry', '5000', '5000 chances to win a 2020 Corvette Stingray Z51 and $40,000', '1000', 'uploads/experience/9xzz0EOAnFMI2zwNspIcpUdlfM2kcDNaznw665I39naR0gfPC0.jpg', NULL, 1, '2020-07-04 20:02:49', '2020-07-04 20:02:49');

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
-- Table structure for table `footers`
--

CREATE TABLE `footers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `footer_logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_logo_size` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_right_text_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_right_number_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_right_text_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_right_number_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `newsletter_heading` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `newsletter_subheading` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `copyright_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `social_icon_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `social_icon_link_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `social_icon_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `social_icon_link_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `social_icon_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `social_icon_link_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `social_icon_4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `social_icon_link_4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footers`
--

INSERT INTO `footers` (`id`, `footer_logo`, `footer_logo_size`, `footer_right_text_1`, `footer_right_number_1`, `footer_right_text_2`, `footer_right_number_2`, `newsletter_heading`, `newsletter_subheading`, `copyright_text`, `social_icon_1`, `social_icon_link_1`, `social_icon_2`, `social_icon_link_2`, `social_icon_3`, `social_icon_link_3`, `social_icon_4`, `social_icon_link_4`, `created_at`, `updated_at`) VALUES
(1, 'uploads/others/Jzyjt6DvJEA03X1HD7M7703XCAdS9pfONcwlpNdqr8y5aqmWhQ.png', '150px', 'TOTAL MEMBERS', '123504', 'TOTAL WINNER', '1034', 'Email Newsletters', 'Subscribe now and receive weekly newsletter for latest draw and offer news and much more!', '© 2020 <a href=\"http://127.0.0.1:8000/\">Exo United</a> - All Rights Reserved.', 'fa fa-facebook', '#', 'fa fa-twitter', '#', 'fa fa-google-plus', '#', 'fa fa-instagram', '#', NULL, '2020-07-03 08:47:41');

-- --------------------------------------------------------

--
-- Table structure for table `free_entries`
--

CREATE TABLE `free_entries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `exp_id` int(11) DEFAULT NULL,
  `order_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `free_entries`
--

INSERT INTO `free_entries` (`id`, `exp_id`, `order_id`, `name`, `phone`, `email`, `address`, `city`, `zip`, `country`, `state`, `created_at`, `updated_at`) VALUES
(6, 25, 18, 'James N Dostal', '8018967983', 'limonrana512@gmail.com', '215 N Aberdeen St #307b', 'Chicago', '60607', 'United States', 'IL', '2020-07-10 14:24:04', '2020-07-10 14:24:04'),
(7, 4, 19, 'Free Users', '8018967983', 'limonrana515@gmail.com', '215 N Aberdeen St #307b', 'Chicago', '60607', 'United States', 'IL', '2020-07-10 16:01:10', '2020-07-10 16:01:10');

-- --------------------------------------------------------

--
-- Table structure for table `headers`
--

CREATE TABLE `headers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo_size` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `headers`
--

INSERT INTO `headers` (`id`, `phone`, `email`, `logo`, `logo_size`, `created_at`, `updated_at`) VALUES
(1, '+8801764548224', 'info@exounited.com', 'uploads/others/opOkdMS7kjmyrNUd0hjixaAu2fIhIUktL8dmXxAQoxITeKqNuY.png', '120px', NULL, '2020-07-03 06:34:29');

-- --------------------------------------------------------

--
-- Table structure for table `homenexts`
--

CREATE TABLE `homenexts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `choose_us_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `choose_us_subtitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `choose_title_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `choose_title_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `choose_title_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `choose_title_4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `choose_title_5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `choose_title_6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `choose_content_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `choose_content_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `choose_content_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `choose_content_4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `choose_content_5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `choose_content_6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `choose_icon_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `choose_icon_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `choose_icon_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `choose_icon_4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `choose_icon_5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `choose_icon_6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `choose_us_bg` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `work_step_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `work_step_subtitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `work_step_heading_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `work_step_heading_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `work_step_heading_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `work_step_subheading_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `work_step_subheading_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `work_step_subheading_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `work_step_icon_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `work_step_icon_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `work_step_icon_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `work_step_video_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `work_step_bg` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `winner_sec_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `winner_sec_subtitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `winner_sec_btn_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `winner_display` int(11) DEFAULT NULL,
  `user_sec_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_sec_subtitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `countdown_title_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `countdown_title_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `countdown_title_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `countdown_title_4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `countdown_value_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `countdown_value_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `countdown_value_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `countdown_value_4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_sec_btn_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `homenexts`
--

INSERT INTO `homenexts` (`id`, `choose_us_title`, `choose_us_subtitle`, `choose_title_1`, `choose_title_2`, `choose_title_3`, `choose_title_4`, `choose_title_5`, `choose_title_6`, `choose_content_1`, `choose_content_2`, `choose_content_3`, `choose_content_4`, `choose_content_5`, `choose_content_6`, `choose_icon_1`, `choose_icon_2`, `choose_icon_3`, `choose_icon_4`, `choose_icon_5`, `choose_icon_6`, `choose_us_bg`, `work_step_title`, `work_step_subtitle`, `work_step_heading_1`, `work_step_heading_2`, `work_step_heading_3`, `work_step_subheading_1`, `work_step_subheading_2`, `work_step_subheading_3`, `work_step_icon_1`, `work_step_icon_2`, `work_step_icon_3`, `work_step_video_link`, `work_step_bg`, `winner_sec_title`, `winner_sec_subtitle`, `winner_sec_btn_text`, `winner_display`, `user_sec_title`, `user_sec_subtitle`, `countdown_title_1`, `countdown_title_2`, `countdown_title_3`, `countdown_title_4`, `countdown_value_1`, `countdown_value_2`, `countdown_value_3`, `countdown_value_4`, `user_sec_btn_text`, `created_at`, `updated_at`) VALUES
(1, 'Why You Will Donate?', 'Exo United makes playing the world\'s largest sweepstakes easy and fun.', 'Biggest sweepstakes', 'No commission on Winnings', 'Safe and Secure Donating', 'Instant Winning Gift', 'Performance Gift', 'Dedicated Support', 'One of the core advantages of playing an online lotto is that it is both safe and secure. So, there is no need for you to queue, or visit a retail store, to get tickets.', 'One of the core advantages of playing an online lotto is that it is both safe and secure. So, there is no need for you to queue, or visit a retail store, to get tickets.', 'One of the core advantages of playing an online lotto is that it is both safe and secure. So, there is no need for you to queue, or visit a retail store, to get tickets.', 'One of the core advantages of playing an online lotto is that it is both safe and secure. So, there is no need for you to queue, or visit a retail store, to get tickets.', 'One of the core advantages of playing an online lotto is that it is both safe and secure. So, there is no need for you to queue, or visit a retail store, to get tickets.', 'One of the core advantages of playing an online lotto is that it is both safe and secure. So, there is no need for you to queue, or visit a retail store, to get tickets.', 'fa fa-car', 'fa fa-trophy', 'fa fa-shield', 'fa fa-money', 'fa fa-gift', 'fa fa-life-ring', 'uploads/others/biXOMGKKXx8SybFEhrIcHrbPIubRzi9CJgp1laaO8dAIVuwxZw.png', 'How It Works', 'Exo United is the best way to win these exciting gift from anywhere in the world.', 'Choose', 'Entry', 'Win', 'Choose your package & get your dream', 'Complete your purchase', 'Start dreaming, you\'re almost there', 'fa fa-check', 'fa fa-shopping-cart', 'fa fa-gift', 'fKNdoxRld34', 'uploads/others/VXoqWsXs6dDN4GnLpWS3UhkrZlodtPv8lEgdzcU31ICvpn4HUt.png', 'Latest Winner', 'Check your exo united results online, find all the exo united winning numbers and see if you won the latest exo united jackpots!', 'Meet Our More Winners', 2, 'Our Users Around The World', 'Over the years we have provided millions of players with tickets to lotteries across the globe and enjoyed having more than one million winners', 'Donation users', 'Total in placed donation', 'Help in project', 'Biggest ever Project', '30 k', '$ 5.9 M', '40 P', '$ 2 M', 'Join With Us', NULL, '2020-07-06 08:06:43');

-- --------------------------------------------------------

--
-- Table structure for table `homes`
--

CREATE TABLE `homes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `offer_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `offer_content` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `offer_heading_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `offer_subheading_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `offer_button_text_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `offer_button_link_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `offer_image_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `offer_heading_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `offer_subheading_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `offer_button_text_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `offer_button_link_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `offer_image_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `offer_heading_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `offer_subheading_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `offer_button_text_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `offer_button_link_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `offer_image_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `featured_exp_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `featured_exp_subtitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `featured_exp_display` int(11) DEFAULT NULL,
  `exo_exp_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `exo_exp_subtitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `exo_exp_display` int(11) DEFAULT NULL,
  `last_exp_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_exp_subtitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_exp_display` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `homes`
--

INSERT INTO `homes` (`id`, `offer_title`, `offer_content`, `offer_heading_1`, `offer_subheading_1`, `offer_button_text_1`, `offer_button_link_1`, `offer_image_1`, `offer_heading_2`, `offer_subheading_2`, `offer_button_text_2`, `offer_button_link_2`, `offer_image_2`, `offer_heading_3`, `offer_subheading_3`, `offer_button_text_3`, `offer_button_link_3`, `offer_image_3`, `featured_exp_title`, `featured_exp_subtitle`, `featured_exp_display`, `exo_exp_title`, `exo_exp_subtitle`, `exo_exp_display`, `last_exp_title`, `last_exp_subtitle`, `last_exp_display`, `created_at`, `updated_at`) VALUES
(1, 'Our Offers From', 'Exo united raises money for charity by offering incredible experiences', 'COVID-19 Relief', 'We are raises money for charity', 'View More', 'http://127.0.0.1:8000/experience/covid-19', 'uploads/others/TI0bMDP3bzwAhixqUkfIaNfB5m1RJUh6CGf1K2X5sX06x5uD2a.png', 'Cars/Houses', 'We are raises money for charity', 'View More', 'http://127.0.0.1:8000/experience/car', 'uploads/others/9aYbUjQApG1DTWbNnZbCBEa9nkqpie1uvzazWrD5NJQJ2GfglZ.png', 'Entertainment', 'We are raises money for charity', 'View More', 'http://127.0.0.1:8000/experience/entertainment', 'uploads/others/KNPGgc4IPoITwq2PBToOzNDyUmUbb9x00oDIO1IrOl4OV1iCSs.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-07-17 15:31:03');

-- --------------------------------------------------------

--
-- Table structure for table `icons`
--

CREATE TABLE `icons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `icon_class` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`icon_class`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `icons`
--

INSERT INTO `icons` (`id`, `icon_class`, `created_at`, `updated_at`) VALUES
(1, '[\"fa-500px\", \"fa-address-book\", \"fa-address-book-o\", \"fa-address-card\", \"fa-address-card-o\", \"fa-adjust\", \"fa-adn\", \"fa-align-center\", \"fa-align-justify\", \"fa-align-left\", \"fa-align-right\", \"fa-amazon\", \"fa-ambulance\", \"fa-american-sign-language-interpreting\", \"fa-anchor\", \"fa-android\", \"fa-angellist\", \"fa-angle-double-down\", \"fa-angle-double-left\", \"fa-angle-double-right\", \"fa-angle-double-up\", \"fa-angle-down\", \"fa-angle-left\", \"fa-angle-right\", \"fa-angle-up\", \"fa-apple\", \"fa-archive\", \"fa-area-chart\", \"fa-arrow-circle-down\", \"fa-arrow-circle-left\", \"fa-arrow-circle-o-down\", \"fa-arrow-circle-o-left\", \"fa-arrow-circle-o-right\", \"fa-arrow-circle-o-up\", \"fa-arrow-circle-right\", \"fa-arrow-circle-up\", \"fa-arrow-down\", \"fa-arrow-left\", \"fa-arrow-right\", \"fa-arrow-up\", \"fa-arrows\", \"fa-arrows-alt\", \"fa-arrows-h\", \"fa-arrows-v\", \"fa-asl-interpreting\", \"fa-assistive-listening-systems\", \"fa-asterisk\", \"fa-at\", \"fa-audio-description\", \"fa-automobile\", \"fa-backward\", \"fa-balance-scale\", \"fa-ban\", \"fa-bandcamp\", \"fa-bank\", \"fa-bar-chart\", \"fa-bar-chart-o\", \"fa-barcode\", \"fa-bars\", \"fa-bath\", \"fa-bathtub\", \"fa-battery\", \"fa-battery-0\", \"fa-battery-1\", \"fa-battery-2\", \"fa-battery-3\", \"fa-battery-4\", \"fa-battery-empty\", \"fa-battery-full\", \"fa-battery-half\", \"fa-battery-quarter\", \"fa-battery-three-quarters\", \"fa-bed\", \"fa-beer\", \"fa-behance\", \"fa-behance-square\", \"fa-bell\", \"fa-bell-o\", \"fa-bell-slash\", \"fa-bell-slash-o\", \"fa-bicycle\", \"fa-binoculars\", \"fa-birthday-cake\", \"fa-bitbucket\", \"fa-bitbucket-square\", \"fa-bitcoin\", \"fa-black-tie\", \"fa-blind\", \"fa-bluetooth\", \"fa-bluetooth-b\", \"fa-bold\", \"fa-bolt\", \"fa-bomb\", \"fa-book\", \"fa-bookmark\", \"fa-bookmark-o\", \"fa-braille\", \"fa-briefcase\", \"fa-btc\", \"fa-bug\", \"fa-building\", \"fa-building-o\", \"fa-bullhorn\", \"fa-bullseye\", \"fa-bus\", \"fa-buysellads\", \"fa-cab\", \"fa-calculator\", \"fa-calendar\", \"fa-calendar-check-o\", \"fa-calendar-minus-o\", \"fa-calendar-o\", \"fa-calendar-plus-o\", \"fa-calendar-times-o\", \"fa-camera\", \"fa-camera-retro\", \"fa-car\", \"fa-caret-down\", \"fa-caret-left\", \"fa-caret-right\", \"fa-caret-square-o-down\", \"fa-caret-square-o-left\", \"fa-caret-square-o-right\", \"fa-caret-square-o-up\", \"fa-caret-up\", \"fa-cart-arrow-down\", \"fa-cart-plus\", \"fa-cc\", \"fa-cc-amex\", \"fa-cc-diners-club\", \"fa-cc-discover\", \"fa-cc-jcb\", \"fa-cc-mastercard\", \"fa-cc-paypal\", \"fa-cc-stripe\", \"fa-cc-visa\", \"fa-certificate\", \"fa-chain\", \"fa-chain-broken\", \"fa-check\", \"fa-check-circle\", \"fa-check-circle-o\", \"fa-check-square\", \"fa-check-square-o\", \"fa-chevron-circle-down\", \"fa-chevron-circle-left\", \"fa-chevron-circle-right\", \"fa-chevron-circle-up\", \"fa-chevron-down\", \"fa-chevron-left\", \"fa-chevron-right\", \"fa-chevron-up\", \"fa-child\", \"fa-chrome\", \"fa-circle\", \"fa-circle-o\", \"fa-circle-o-notch\", \"fa-circle-thin\", \"fa-clipboard\", \"fa-clock-o\", \"fa-clone\", \"fa-close\", \"fa-cloud\", \"fa-cloud-download\", \"fa-cloud-upload\", \"fa-cny\", \"fa-code\", \"fa-code-fork\", \"fa-codepen\", \"fa-codiepie\", \"fa-coffee\", \"fa-cog\", \"fa-cogs\", \"fa-columns\", \"fa-comment\", \"fa-comment-o\", \"fa-commenting\", \"fa-commenting-o\", \"fa-comments\", \"fa-comments-o\", \"fa-compass\", \"fa-compress\", \"fa-connectdevelop\", \"fa-contao\", \"fa-copy\", \"fa-copyright\", \"fa-creative-commons\", \"fa-credit-card\", \"fa-credit-card-alt\", \"fa-crop\", \"fa-crosshairs\", \"fa-css3\", \"fa-cube\", \"fa-cubes\", \"fa-cut\", \"fa-cutlery\", \"fa-dashboard\", \"fa-dashcube\", \"fa-database\", \"fa-deaf\", \"fa-deafness\", \"fa-dedent\", \"fa-delicious\", \"fa-desktop\", \"fa-deviantart\", \"fa-diamond\", \"fa-digg\", \"fa-dollar\", \"fa-dot-circle-o\", \"fa-download\", \"fa-dribbble\", \"fa-drivers-license\", \"fa-drivers-license-o\", \"fa-dropbox\", \"fa-drupal\", \"fa-edge\", \"fa-edit\", \"fa-eercast\", \"fa-eject\", \"fa-ellipsis-h\", \"fa-ellipsis-v\", \"fa-empire\", \"fa-envelope\", \"fa-envelope-o\", \"fa-envelope-open\", \"fa-envelope-open-o\", \"fa-envelope-square\", \"fa-envira\", \"fa-eraser\", \"fa-etsy\", \"fa-eur\", \"fa-euro\", \"fa-exchange\", \"fa-exclamation\", \"fa-exclamation-circle\", \"fa-exclamation-triangle\", \"fa-expand\", \"fa-expeditedssl\", \"fa-external-link\", \"fa-external-link-square\", \"fa-eye\", \"fa-eye-slash\", \"fa-eyedropper\", \"fa-fa\", \"fa-facebook\", \"fa-facebook-f\", \"fa-facebook-official\", \"fa-facebook-square\", \"fa-fast-backward\", \"fa-fast-forward\", \"fa-fax\", \"fa-feed\", \"fa-female\", \"fa-fighter-jet\", \"fa-file\", \"fa-file-archive-o\", \"fa-file-audio-o\", \"fa-file-code-o\", \"fa-file-excel-o\", \"fa-file-image-o\", \"fa-file-movie-o\", \"fa-file-o\", \"fa-file-pdf-o\", \"fa-file-photo-o\", \"fa-file-picture-o\", \"fa-file-powerpoint-o\", \"fa-file-sound-o\", \"fa-file-text\", \"fa-file-text-o\", \"fa-file-video-o\", \"fa-file-word-o\", \"fa-file-zip-o\", \"fa-files-o\", \"fa-film\", \"fa-filter\", \"fa-fire\", \"fa-fire-extinguisher\", \"fa-firefox\", \"fa-first-order\", \"fa-flag\", \"fa-flag-checkered\", \"fa-flag-o\", \"fa-flash\", \"fa-flask\", \"fa-flickr\", \"fa-floppy-o\", \"fa-folder\", \"fa-folder-o\", \"fa-folder-open\", \"fa-folder-open-o\", \"fa-font\", \"fa-font-awesome\", \"fa-fonticons\", \"fa-fort-awesome\", \"fa-forumbee\", \"fa-forward\", \"fa-foursquare\", \"fa-free-code-camp\", \"fa-frown-o\", \"fa-futbol-o\", \"fa-gamepad\", \"fa-gavel\", \"fa-gbp\", \"fa-ge\", \"fa-gear\", \"fa-gears\", \"fa-genderless\", \"fa-get-pocket\", \"fa-gg\", \"fa-gg-circle\", \"fa-gift\", \"fa-git\", \"fa-git-square\", \"fa-github\", \"fa-github-alt\", \"fa-github-square\", \"fa-gitlab\", \"fa-gittip\", \"fa-glass\", \"fa-glide\", \"fa-glide-g\", \"fa-globe\", \"fa-google\", \"fa-google-plus\", \"fa-google-plus-circle\", \"fa-google-plus-official\", \"fa-google-plus-square\", \"fa-google-wallet\", \"fa-graduation-cap\", \"fa-gratipay\", \"fa-grav\", \"fa-group\", \"fa-h-square\", \"fa-hacker-news\", \"fa-hand-grab-o\", \"fa-hand-lizard-o\", \"fa-hand-o-down\", \"fa-hand-o-left\", \"fa-hand-o-right\", \"fa-hand-o-up\", \"fa-hand-paper-o\", \"fa-hand-peace-o\", \"fa-hand-pointer-o\", \"fa-hand-rock-o\", \"fa-hand-scissors-o\", \"fa-hand-spock-o\", \"fa-hand-stop-o\", \"fa-handshake-o\", \"fa-hard-of-hearing\", \"fa-hashtag\", \"fa-hdd-o\", \"fa-header\", \"fa-headphones\", \"fa-heart\", \"fa-heart-o\", \"fa-heartbeat\", \"fa-history\", \"fa-home\", \"fa-hospital-o\", \"fa-hotel\", \"fa-hourglass\", \"fa-hourglass-1\", \"fa-hourglass-2\", \"fa-hourglass-3\", \"fa-hourglass-end\", \"fa-hourglass-half\", \"fa-hourglass-o\", \"fa-hourglass-start\", \"fa-houzz\", \"fa-html5\", \"fa-i-cursor\", \"fa-id-badge\", \"fa-id-card\", \"fa-id-card-o\", \"fa-ils\", \"fa-image\", \"fa-imdb\", \"fa-inbox\", \"fa-indent\", \"fa-industry\", \"fa-info\", \"fa-info-circle\", \"fa-inr\", \"fa-instagram\", \"fa-institution\", \"fa-internet-explorer\", \"fa-intersex\", \"fa-ioxhost\", \"fa-italic\", \"fa-joomla\", \"fa-jpy\", \"fa-jsfiddle\", \"fa-key\", \"fa-keyboard-o\", \"fa-krw\", \"fa-language\", \"fa-laptop\", \"fa-lastfm\", \"fa-lastfm-square\", \"fa-leaf\", \"fa-leanpub\", \"fa-legal\", \"fa-lemon-o\", \"fa-level-down\", \"fa-level-up\", \"fa-life-bouy\", \"fa-life-buoy\", \"fa-life-ring\", \"fa-life-saver\", \"fa-lightbulb-o\", \"fa-line-chart\", \"fa-link\", \"fa-linkedin\", \"fa-linkedin-square\", \"fa-linode\", \"fa-linux\", \"fa-list\", \"fa-list-alt\", \"fa-list-ol\", \"fa-list-ul\", \"fa-location-arrow\", \"fa-lock\", \"fa-long-arrow-down\", \"fa-long-arrow-left\", \"fa-long-arrow-right\", \"fa-long-arrow-up\", \"fa-low-vision\", \"fa-magic\", \"fa-magnet\", \"fa-mail-forward\", \"fa-mail-reply\", \"fa-mail-reply-all\", \"fa-male\", \"fa-map\", \"fa-map-marker\", \"fa-map-o\", \"fa-map-pin\", \"fa-map-signs\", \"fa-mars\", \"fa-mars-double\", \"fa-mars-stroke\", \"fa-mars-stroke-h\", \"fa-mars-stroke-v\", \"fa-maxcdn\", \"fa-meanpath\", \"fa-medium\", \"fa-medkit\", \"fa-meetup\", \"fa-meh-o\", \"fa-mercury\", \"fa-microchip\", \"fa-microphone\", \"fa-microphone-slash\", \"fa-minus\", \"fa-minus-circle\", \"fa-minus-square\", \"fa-minus-square-o\", \"fa-mixcloud\", \"fa-mobile\", \"fa-mobile-phone\", \"fa-modx\", \"fa-money\", \"fa-moon-o\", \"fa-mortar-board\", \"fa-motorcycle\", \"fa-mouse-pointer\", \"fa-music\", \"fa-navicon\", \"fa-neuter\", \"fa-newspaper-o\", \"fa-object-group\", \"fa-object-ungroup\", \"fa-odnoklassniki\", \"fa-odnoklassniki-square\", \"fa-opencart\", \"fa-openid\", \"fa-opera\", \"fa-optin-monster\", \"fa-outdent\", \"fa-pagelines\", \"fa-paint-brush\", \"fa-paper-plane\", \"fa-paper-plane-o\", \"fa-paperclip\", \"fa-paragraph\", \"fa-paste\", \"fa-pause\", \"fa-pause-circle\", \"fa-pause-circle-o\", \"fa-paw\", \"fa-paypal\", \"fa-pencil\", \"fa-pencil-square\", \"fa-pencil-square-o\", \"fa-percent\", \"fa-phone\", \"fa-phone-square\", \"fa-photo\", \"fa-picture-o\", \"fa-pie-chart\", \"fa-pied-piper\", \"fa-pied-piper-alt\", \"fa-pied-piper-pp\", \"fa-pinterest\", \"fa-pinterest-p\", \"fa-pinterest-square\", \"fa-plane\", \"fa-play\", \"fa-play-circle\", \"fa-play-circle-o\", \"fa-plug\", \"fa-plus\", \"fa-plus-circle\", \"fa-plus-square\", \"fa-plus-square-o\", \"fa-podcast\", \"fa-power-off\", \"fa-print\", \"fa-product-hunt\", \"fa-puzzle-piece\", \"fa-qq\", \"fa-qrcode\", \"fa-question\", \"fa-question-circle\", \"fa-question-circle-o\", \"fa-quora\", \"fa-quote-left\", \"fa-quote-right\", \"fa-ra\", \"fa-random\", \"fa-ravelry\", \"fa-rebel\", \"fa-recycle\", \"fa-reddit\", \"fa-reddit-alien\", \"fa-reddit-square\", \"fa-refresh\", \"fa-registered\", \"fa-remove\", \"fa-renren\", \"fa-reorder\", \"fa-repeat\", \"fa-reply\", \"fa-reply-all\", \"fa-resistance\", \"fa-retweet\", \"fa-rmb\", \"fa-road\", \"fa-rocket\", \"fa-rotate-left\", \"fa-rotate-right\", \"fa-rouble\", \"fa-rss\", \"fa-rss-square\", \"fa-rub\", \"fa-ruble\", \"fa-rupee\", \"fa-s15\", \"fa-safari\", \"fa-save\", \"fa-scissors\", \"fa-scribd\", \"fa-search\", \"fa-search-minus\", \"fa-search-plus\", \"fa-sellsy\", \"fa-send\", \"fa-send-o\", \"fa-server\", \"fa-share\", \"fa-share-alt\", \"fa-share-alt-square\", \"fa-share-square\", \"fa-share-square-o\", \"fa-shekel\", \"fa-sheqel\", \"fa-shield\", \"fa-ship\", \"fa-shirtsinbulk\", \"fa-shopping-bag\", \"fa-shopping-basket\", \"fa-shopping-cart\", \"fa-shower\", \"fa-sign-in\", \"fa-sign-language\", \"fa-sign-out\", \"fa-signal\", \"fa-signing\", \"fa-simplybuilt\", \"fa-sitemap\", \"fa-skyatlas\", \"fa-skype\", \"fa-slack\", \"fa-sliders\", \"fa-slideshare\", \"fa-smile-o\", \"fa-snapchat\", \"fa-snapchat-ghost\", \"fa-snapchat-square\", \"fa-snowflake-o\", \"fa-soccer-ball-o\", \"fa-sort\", \"fa-sort-alpha-asc\", \"fa-sort-alpha-desc\", \"fa-sort-amount-asc\", \"fa-sort-amount-desc\", \"fa-sort-asc\", \"fa-sort-desc\", \"fa-sort-down\", \"fa-sort-numeric-asc\", \"fa-sort-numeric-desc\", \"fa-sort-up\", \"fa-soundcloud\", \"fa-space-shuttle\", \"fa-spinner\", \"fa-spoon\", \"fa-spotify\", \"fa-square\", \"fa-square-o\", \"fa-stack-exchange\", \"fa-stack-overflow\", \"fa-star\", \"fa-star-half\", \"fa-star-half-empty\", \"fa-star-half-full\", \"fa-star-half-o\", \"fa-star-o\", \"fa-steam\", \"fa-steam-square\", \"fa-step-backward\", \"fa-step-forward\", \"fa-stethoscope\", \"fa-sticky-note\", \"fa-sticky-note-o\", \"fa-stop\", \"fa-stop-circle\", \"fa-stop-circle-o\", \"fa-street-view\", \"fa-strikethrough\", \"fa-stumbleupon\", \"fa-stumbleupon-circle\", \"fa-subscript\", \"fa-subway\", \"fa-suitcase\", \"fa-sun-o\", \"fa-superpowers\", \"fa-superscript\", \"fa-support\", \"fa-table\", \"fa-tablet\", \"fa-tachometer\", \"fa-tag\", \"fa-tags\", \"fa-tasks\", \"fa-taxi\", \"fa-telegram\", \"fa-television\", \"fa-tencent-weibo\", \"fa-terminal\", \"fa-text-height\", \"fa-text-width\", \"fa-th\", \"fa-th-large\", \"fa-th-list\", \"fa-themeisle\", \"fa-thermometer\", \"fa-thermometer-0\", \"fa-thermometer-1\", \"fa-thermometer-2\", \"fa-thermometer-3\", \"fa-thermometer-4\", \"fa-thermometer-empty\", \"fa-thermometer-full\", \"fa-thermometer-half\", \"fa-thermometer-quarter\", \"fa-thermometer-three-quarters\", \"fa-thumb-tack\", \"fa-thumbs-down\", \"fa-thumbs-o-down\", \"fa-thumbs-o-up\", \"fa-thumbs-up\", \"fa-ticket\", \"fa-times\", \"fa-times-circle\", \"fa-times-circle-o\", \"fa-times-rectangle\", \"fa-times-rectangle-o\", \"fa-tint\", \"fa-toggle-down\", \"fa-toggle-left\", \"fa-toggle-off\", \"fa-toggle-on\", \"fa-toggle-right\", \"fa-toggle-up\", \"fa-trademark\", \"fa-train\", \"fa-transgender\", \"fa-transgender-alt\", \"fa-trash\", \"fa-trash-o\", \"fa-tree\", \"fa-trello\", \"fa-tripadvisor\", \"fa-trophy\", \"fa-truck\", \"fa-try\", \"fa-tty\", \"fa-tumblr\", \"fa-tumblr-square\", \"fa-turkish-lira\", \"fa-tv\", \"fa-twitch\", \"fa-twitter\", \"fa-twitter-square\", \"fa-umbrella\", \"fa-underline\", \"fa-undo\", \"fa-universal-access\", \"fa-university\", \"fa-unlink\", \"fa-unlock\", \"fa-unlock-alt\", \"fa-unsorted\", \"fa-upload\", \"fa-usb\", \"fa-usd\", \"fa-user\", \"fa-user-circle\", \"fa-user-circle-o\", \"fa-user-md\", \"fa-user-o\", \"fa-user-plus\", \"fa-user-secret\", \"fa-user-times\", \"fa-users\", \"fa-vcard\", \"fa-vcard-o\", \"fa-venus\", \"fa-venus-double\", \"fa-venus-mars\", \"fa-viacoin\", \"fa-viadeo\", \"fa-viadeo-square\", \"fa-video-camera\", \"fa-vimeo\", \"fa-vimeo-square\", \"fa-vine\", \"fa-vk\", \"fa-volume-control-phone\", \"fa-volume-down\", \"fa-volume-off\", \"fa-volume-up\", \"fa-warning\", \"fa-wechat\", \"fa-weibo\", \"fa-weixin\", \"fa-whatsapp\", \"fa-wheelchair\", \"fa-wheelchair-alt\", \"fa-wifi\", \"fa-wikipedia-w\", \"fa-window-close\", \"fa-window-close-o\", \"fa-window-maximize\", \"fa-window-minimize\", \"fa-window-restore\", \"fa-windows\", \"fa-won\", \"fa-wordpress\", \"fa-wpbeginner\", \"fa-wpexplorer\", \"fa-wpforms\", \"fa-wrench\", \"fa-xing\", \"fa-xing-square\", \"fa-y-combinator\", \"fa-y-combinator-square\", \"fa-yahoo\", \"fa-yc\", \"fa-yc-square\", \"fa-yelp\", \"fa-yen\", \"fa-yoast\", \"fa-youtube\", \"fa-youtube-play\", \"fa-youtube-square\"]', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `h_menu_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `h_menu_1_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `h_menu_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `h_menu_2_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `h_menu_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `h_menu_3_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `h_menu_4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `h_menu_4_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `h_menu_5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `h_menu_6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `h_menu_7` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `h_menu_8` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `h_menu_9` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `f_menu_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `f_menu_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `f_menu_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `f_menu_4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `f_menu_5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `f_menu_6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `f_menu_7` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `f_menu_8` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `f_menu_9` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `f_menu_10` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `h_menu_1`, `h_menu_1_link`, `h_menu_2`, `h_menu_2_link`, `h_menu_3`, `h_menu_3_link`, `h_menu_4`, `h_menu_4_link`, `h_menu_5`, `h_menu_6`, `h_menu_7`, `h_menu_8`, `h_menu_9`, `f_menu_1`, `f_menu_2`, `f_menu_3`, `f_menu_4`, `f_menu_5`, `f_menu_6`, `f_menu_7`, `f_menu_8`, `f_menu_9`, `f_menu_10`, `created_at`, `updated_at`) VALUES
(1, 'Car', NULL, 'Travel', 'travel', 'Entertainment', 'entertainment', 'Covid 19', 'covid-19', 'Winners', 'Blog', 'About', 'Sign In', 'Cart', 'About us', 'Winners', 'Experience', 'Blog', 'Contact us', 'Login', 'Get Support', 'Terms & Conditions', 'Privacy Policy', 'Exo Roles', '2020-07-11 00:44:50', '2020-07-17 15:28:07');

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_05_23_032643_create_admins_table', 1),
(8, '2020_05_24_224155_create_categories_table', 2),
(10, '2020_05_24_224525_create_brands_table', 3),
(11, '2020_05_27_180257_create_coupons_table', 4),
(12, '2020_05_28_062632_create_newsletters_table', 5),
(17, '2020_06_01_065646_create_postcategories_table', 7),
(18, '2020_06_01_065717_create_postsubcategories_table', 7),
(19, '2020_06_01_065745_create_posttags_table', 7),
(22, '2020_06_02_061821_create_icons_table', 9),
(24, '2014_10_12_000000_create_users_table', 11),
(25, '2018_12_23_120000_create_shoppingcart_table', 12),
(26, '2020_06_09_141424_create_settings_table', 12),
(27, '2020_06_09_142502_create_profiles_table', 12),
(34, '2020_06_13_100514_create_seos_table', 16),
(38, '2020_06_01_065556_create_posts_table', 19),
(40, '2020_06_18_204058_create_tag_posts_table', 20),
(46, '2020_06_28_190250_create_entrylevels_table', 25),
(47, '2020_06_28_191320_create_charities_table', 25),
(49, '2020_05_28_165631_create_products_table', 26),
(50, '2020_06_10_200751_create_orders_table', 27),
(51, '2020_06_10_200911_create_order_details_table', 27),
(53, '2020_07_01_034322_create_drawns_table', 27),
(56, '2020_07_01_034046_create_winners_table', 28),
(57, '2020_07_03_112046_create_banners_table', 29),
(58, '2020_07_03_112139_create_headers_table', 29),
(59, '2020_07_03_112213_create_footers_table', 29),
(60, '2020_07_04_082409_create_pages_table', 30),
(62, '2020_07_04_095840_create_contacts_table', 31),
(64, '2020_07_04_114241_create_abouts_table', 32),
(65, '2020_06_03_014849_create_wishlists_table', 33),
(66, '2020_06_10_201158_create_shipping_methods_table', 33),
(67, '2020_06_24_010134_create_homes_table', 34),
(68, '2020_07_04_182904_create_homenexts_table', 35),
(69, '2020_07_10_191016_create_free_entries_table', 36),
(71, '2020_06_15_162959_create_roles_table', 37),
(74, '2020_07_11_000750_create_menus_table', 38);

-- --------------------------------------------------------

--
-- Table structure for table `newsletters`
--

CREATE TABLE `newsletters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `newsletters`
--

INSERT INTO `newsletters` (`id`, `email`, `created_at`, `updated_at`) VALUES
(6, 'rxdiscreetmedshop@mail.ru', '2020-07-17 15:42:54', '2020-07-17 15:42:54');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `free_user_id` int(11) DEFAULT NULL,
  `exp_id` int(11) DEFAULT NULL,
  `payment_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transaction_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ran_order_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `refund` int(11) NOT NULL DEFAULT 0,
  `month` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `free_user_id`, `exp_id`, `payment_id`, `payment_type`, `transaction_id`, `ran_order_id`, `order_amount`, `name`, `email`, `phone`, `address`, `city`, `state`, `zip`, `country`, `status`, `refund`, `month`, `date`, `year`, `created_at`, `updated_at`) VALUES
(1, 5, NULL, 25, 'card_1H0BRcLONLOo7OHkie9MuTtM', 'stripe', 'txn_1H0BRdLONLOo7OHkf4lqBVR7', 'EXO-885663', '25.00', 'Md Rana Shiekh', 'limonrana512@gmail.com', '01764548224', 'Bosila, Mohammodpur', 'Dhaka', 'Dhaka', '1212', 'Bangladesh', '1', 0, '07', '01-07-2020', '2020', '2020-06-30 12:17:16', '2020-07-01 13:18:07'),
(2, 5, NULL, 25, 'card_1H1IQnLONLOo7OHku1csdsxv', 'stripe', 'txn_1H1IQpLONLOo7OHkCBR1jTTj', 'EXO-838128', '50.00', 'Md Rana Shiekh', 'limonrana512@gmail.com', '01764548224', 'Bosila, Mohammodpur', 'Dhaka', 'Dhaka', '1212', 'Bangladesh', '1', 0, '07', '04-07-2020', '2020', '2020-07-04 14:57:55', '2020-07-04 14:57:55'),
(3, 5, NULL, 4, 'card_1H1NRbLONLOo7OHkNkUs1Gpc', 'stripe', 'txn_1H1NRcLONLOo7OHkOC0zGbAp', 'EXO-369085', '50.00', 'Md Rana Shiekh', 'limonrana512@gmail.com', '01764548224', 'Bosila, Mohammodpur', 'Dhaka', 'Dhaka', '1212', 'Bangladesh', '2', 0, '07', '05-07-2020', '2020', '2020-07-04 20:19:03', '2020-07-14 00:48:06'),
(4, 5, NULL, 4, 'card_1H2K3bLONLOo7OHkqUQnZoB0', 'stripe', 'txn_1H2K3cLONLOo7OHksAH20qd2', 'EXO-570208', '50.00', 'Md Rana Shiekh', 'limonrana512@gmail.com', '01764548224', 'Bosila, Mohammodpur', 'Dhaka', 'Dhaka', '1212', 'Bangladesh', '2', 0, '07', '07-07-2020', '2020', '2020-07-07 10:54:12', '2020-07-14 00:48:06'),
(5, 7, NULL, 4, 'card_1H2K9dLONLOo7OHk9WY3MMk9', 'stripe', 'txn_1H2K9fLONLOo7OHkQYodd98X', 'EXO-295733', '50.00', 'Limon Rana', 'webcoder.rana515@gmail.com', '01622987205', 'Mirpur-12', 'Dhaka', 'Dhaka', '1207', 'Bangladesh', '2', 0, '07', '07-07-2020', '2020', '2020-07-07 11:00:26', '2020-07-14 00:48:06'),
(6, 7, NULL, 4, 'card_1H2KAMLONLOo7OHknwdXQ4kv', 'stripe', 'txn_1H2KAQLONLOo7OHkRkyLvs6v', 'EXO-302635', '50.00', 'Limon Rana', 'webcoder.rana515@gmail.com', '01622987205', 'Mirpur-12', 'Dhaka', 'Dhaka', '1207', 'Bangladesh', '2', 0, '07', '07-07-2020', '2020', '2020-07-07 11:01:13', '2020-07-14 00:48:06'),
(7, 8, NULL, 4, 'card_1H2KDcLONLOo7OHkBPuPlEze', 'stripe', 'txn_1H2KDdLONLOo7OHkiSLNiRel', 'EXO-563318', '50.00', 'Md Rana Test', 'limonrana513@gmail.com', '01845568990', 'Mirpur-10', 'Dhaka', 'Dhaka', '1209', 'Bangladesh', '2', 0, '07', '07-07-2020', '2020', '2020-07-07 11:04:33', '2020-07-14 00:48:06'),
(8, 8, NULL, 4, 'card_1H2KISLONLOo7OHkT4q2Xhfj', 'stripe', 'txn_1H2KITLONLOo7OHkt9u8sQOy', 'EXO-319396', '50.00', 'Md Rana Test', 'limonrana513@gmail.com', '01845568990', 'Mirpur-10', 'Dhaka', 'Dhaka', '1209', 'Bangladesh', '2', 0, '07', '07-07-2020', '2020', '2020-07-07 11:09:32', '2020-07-14 00:48:06'),
(9, 2, NULL, 22, 'ABJY9A5LNTNPE', 'paypal', '2CX54338F1271932M', 'EXO-5f086ffd189b6', '100.00', 'New Customer', 'limonrana517@gmail.com', '2543523233', '1814  Emma Street', 'Lakeview', 'Texas', '79239', 'Bangladesh', '1', 0, '07', '10-07-2020', '2020', '2020-07-10 07:55:21', '2020-07-10 07:55:21'),
(10, 2, NULL, 22, 'card_1H3N7oLONLOo7OHkEYy1fNnM', 'stripe', 'txn_1H3N7qLONLOo7OHknY4ViSoW', 'EXO-443535', '50.00', 'New Customer', 'limonrana517@gmail.com', '2543523233', '1814  Emma Street', 'Lakeview', 'Texas', '79239', 'Bangladesh', '1', 0, '07', '10-07-2020', '2020', '2020-07-10 08:22:52', '2020-07-10 08:22:52'),
(11, 5, NULL, 25, 'ABJY9A5LNTNPE', 'paypal', '6L359675YB8726844', 'EXO-879078', '25.00', 'Md Rana Shiekh', 'limonrana512@gmail.com', '01764548224', 'Bosila, Mohammodpur', 'Dhaka', 'Dhaka', '1212', 'Bangladesh', '1', 0, '07', '10-07-2020', '2020', '2020-07-10 08:49:15', '2020-07-10 08:49:15'),
(12, 2, NULL, 25, 'ABJY9A5LNTNPE', 'paypal', '5f08a99bb07b7', 'EXO-533584', '50.00', 'New Customer', 'limonrana517@gmail.com', '2543523233', '1814  Emma Street', 'Lakeview', 'Texas', '79239', 'Bangladesh', '1', 0, '07', '10-07-2020', '2020', '2020-07-10 11:47:07', '2020-07-10 11:47:07'),
(13, 2, NULL, 25, 'ABJY9A5LNTNPE', 'paypal', 'EC-22M748760E324683S', 'EXO-857794', '50.00', 'New Customer', 'limonrana517@gmail.com', '2543523233', '1814  Emma Street', 'Lakeview', 'Texas', '79239', 'Bangladesh', '1', 0, '07', '10-07-2020', '2020', '2020-07-10 11:48:39', '2020-07-10 11:48:39'),
(18, NULL, 6, 25, 'Free-5f08ce647ad9d', 'FREE', 'Free-5f08ce647ad9d', 'EXO-674891', '0.00', 'James N Dostal FREE', 'limonrana512@gmail.com', '8018967983', '215 N Aberdeen St #307b', 'Chicago', 'IL', '60607', 'United States', '1', 0, '07', '10-07-2020', '2020', '2020-07-10 14:24:04', '2020-07-10 15:35:56'),
(19, NULL, 7, 4, 'Free-5f08e52679da1', 'FREE', 'Free-5f08e52679da1', 'EXO-212154', '0.00', 'Free Users', 'limonrana515@gmail.com', '8018967983', '215 N Aberdeen St #307b', 'Chicago', 'IL', '60607', 'United States', '2', 0, '07', '10-07-2020', '2020', '2020-07-10 16:01:10', '2020-07-14 00:48:06'),
(20, 5, NULL, 25, 'card_1H5HVcLONLOo7OHk2euLX8kK', 'stripe', 'txn_1H5HVeLONLOo7OHkmHOtDjLi', 'EXO-785964', '50.00', 'Md Rana Shiekh', 'limonrana512@gmail.com', '01764548224', 'Bosila, Mohammodpur', 'Dhaka', 'Dhaka', '1212', 'Bangladesh', '1', 0, '07', '15-07-2020', '2020', '2020-07-15 14:47:21', '2020-07-15 14:47:21'),
(21, 5, NULL, 22, 'ABJY9A5LNTNPE', 'paypal', 'EC-44H82890HX3976048', 'EXO-170902', '25.00', 'Md Rana Shiekh', 'limonrana512@gmail.com', '01764548224', 'Bosila, Mohammodpur', 'Dhaka', 'Dhaka', '1212', 'Bangladesh', '1', 0, '07', '15-07-2020', '2020', '2020-07-15 14:58:57', '2020-07-15 14:58:57');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `entry_id` bigint(20) UNSIGNED NOT NULL,
  `exp_id` bigint(20) UNSIGNED NOT NULL,
  `exp_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `entry_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `entry_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `review` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `entry_id`, `exp_id`, `exp_title`, `entry_title`, `quantity`, `entry_price`, `total_price`, `review`, `created_at`, `updated_at`) VALUES
(1, 1, 14, 25, 'Win a Weeklong Vacation in a Nantucket Beach House', '250 Entries', '1', '25', '25', NULL, '2020-07-01 13:18:07', '2020-07-01 13:18:07'),
(2, 2, 15, 25, 'Win a Weeklong Vacation in a Nantucket Beach House', '1000Entries', '1', '50', '50', NULL, '2020-07-04 14:57:55', '2020-07-04 14:57:55'),
(3, 3, 4, 4, 'Win a 2020 Porsche Taycan Turbo and $20,000', '250Entries', '1', '50', '50', NULL, '2020-07-04 20:19:03', '2020-07-04 20:19:03'),
(4, 4, 4, 4, 'Win a 2020 Porsche Taycan Turbo and $20,000', '250Entries', '1', '50', '50', NULL, '2020-07-07 10:54:12', '2020-07-07 10:54:12'),
(5, 5, 4, 4, 'Win a 2020 Porsche Taycan Turbo and $20,000', '250Entries', '1', '50', '50', NULL, '2020-07-07 11:00:26', '2020-07-07 11:00:26'),
(6, 6, 4, 4, 'Win a 2020 Porsche Taycan Turbo and $20,000', '250Entries', '1', '50', '50', NULL, '2020-07-07 11:01:13', '2020-07-07 11:01:13'),
(7, 7, 4, 4, 'Win a 2020 Porsche Taycan Turbo and $20,000', '250Entries', '1', '50', '50', NULL, '2020-07-07 11:04:33', '2020-07-07 11:04:33'),
(8, 8, 4, 4, 'Win a 2020 Porsche Taycan Turbo and $20,000', '250Entries', '1', '50', '50', NULL, '2020-07-07 11:09:32', '2020-07-07 11:09:32'),
(9, 9, 10, 22, 'Win a 2020 Corvette Stingray Z51 and $40,000', '2000Entries', '1', '100', '100', NULL, '2020-07-10 07:55:21', '2020-07-10 07:55:21'),
(10, 10, 9, 22, 'Win a 2020 Corvette Stingray Z51 and $40,000', '1000Entries', '1', '50', '50', NULL, '2020-07-10 08:22:53', '2020-07-10 08:22:53'),
(11, 11, 14, 25, 'Win a Weeklong Vacation in a Nantucket Beach House', '250Entries', '1', '25', '25', NULL, '2020-07-10 08:49:15', '2020-07-10 08:49:15'),
(12, 12, 15, 25, 'Win a Weeklong Vacation in a Nantucket Beach House', '1000Entries', '1', '50', '50', NULL, '2020-07-10 11:47:07', '2020-07-10 11:47:07'),
(13, 13, 15, 25, 'Win a Weeklong Vacation in a Nantucket Beach House', '1000Entries', '1', '50', '50', NULL, '2020-07-10 11:48:39', '2020-07-10 11:48:39'),
(18, 18, 0, 25, 'Win a Weeklong Vacation in a Nantucket Beach House', 'Free Entries', '1', '0.00', '0.00', NULL, '2020-07-10 14:24:04', '2020-07-10 14:24:04'),
(19, 19, 0, 4, 'Win a 2020 Porsche Taycan Turbo and $20,000', 'Free Entries', '1', '0.00', '0.00', NULL, '2020-07-10 16:01:10', '2020-07-10 16:01:10'),
(20, 20, 15, 25, 'Win a Weeklong Vacation in a Nantucket Beach House', '1000Entries', '1', '50', '50', NULL, '2020-07-15 14:47:21', '2020-07-15 14:47:21'),
(21, 21, 8, 22, 'Win a 2020 Corvette Stingray Z51 and $40,000', '250Entries', '1', '25', '25', NULL, '2020-07-15 14:58:57', '2020-07-15 14:58:57');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `page_title`, `page_content`, `created_at`, `updated_at`) VALUES
(1, 'Privacy Policy', '<section class=\"privacy_content row\">\r\n<section class=\"privacy_content row\">\r\n<section class=\"privacy_paragraph\">\r\n<p><strong>Privacy Policy</strong></p>\r\n<p>This Omaze.com Privacy Policy (&ldquo;Policy&rdquo;) describes the privacy practices, policies and procedures of Omaze, Inc., (&ldquo;Omaze,&rdquo; &ldquo;we,&rdquo; &ldquo;us,&rdquo; or &ldquo;our&rdquo;). We want you to know that protecting your personal information is very important to us, and we respect your privacy. This Policy applies to all users of www.omaze.com (the &ldquo;Website&rdquo;) and explains what information we collect, how we collect it, how we protect it, and when we disclose it to third parties. Please note that this Policy applies only to our online information-gathering and dissemination practices, and does not apply to any of our practices conducted offline.</p>\r\n<p>PLEASE READ THIS POLICY CAREFULLY. BY ENTERING ACCESSING, BROWSING, SUBMITTING INFORMATION TO, OR OTHERWISE USING THIS WEBSITE, YOU ACKNOWLEDGE AND AGREE TO OUR PRIVACY PRACTICES, POLICIES AND PROCEDURES. IF YOU DO NOT AGREE TO THIS POLICY, DO NOT ACCESS OR USE THIS WEBSITE.&nbsp; WE MAY UPDATE THIS POLICY FROM TIME TO TIME, SO PLEASE CHECK THIS POLICY PERIODICALLY FOR CHANGES.</p>\r\n<p>(Please note, if you are registering for or participating in an Omaze sweepstakes contest, participation is subject to our&nbsp;<a href=\"https://www.omaze.com/pages/rules\" target=\"_blank\" rel=\"noopener noreferrer\">Official Sweepstakes Rules and Regulations</a>&nbsp;and any other rules and regulations applicable to such competition (collectively, the &ldquo;Rules&rdquo;). If this Policy conflicts with or is inconsistent with a statement in the Rules concerning your privacy, the terms of the Rules will take precedence.)</p>\r\n<p><strong>Summary</strong></p>\r\n<p>The notifications provided by this Policy include:</p>\r\n<ul>\r\n<li>What personally identifiable information we collect through the Website.</li>\r\n<li>How we use the information we collect.</li>\r\n<li>With whom the information may be shared.</li>\r\n<li>The kind of procedures we employ in an effort to hinder the unauthorized access, use or disclosure of information you provide to us.</li>\r\n<li>Information related to third-party websites.</li>\r\n<li>The laws that apply to those accessing the Website</li>\r\n<li>How you can learn about changes to the Privacy Policy</li>\r\n<li>How you can amend the information we collect on you</li>\r\n<li>Rights related to the European Union&rsquo;s General Data Protection Regulation</li>\r\n</ul>\r\n<p><strong>&nbsp;</strong></p>\r\n<p><strong>What Information Do We Collect Through The Website?</strong></p>\r\n<p>Omaze collects both personally identifiable information and non-personally identifiable information via our Website. When we refer simply to the term information in this Policy we are referring to how Omaze collects, uses, or shares both the personally identifiable, and non-personally identifiable information.</p>\r\n<p>Personally identifiable information refers to information that when used alone or with other relevant data, can identify an individual (the &ldquo;PII&rdquo;). Omaze does not collect any PII unless you provide it voluntarily. If you do not want us to collect PII, you can simply decide not to submit it to us. The PII we collect may include:</p>\r\n<ul>\r\n<li>name;</li>\r\n<li>date of birth;</li>\r\n<li>contact information, such as name, postal address, email address and telephone number;</li>\r\n<li>other personal information you provide to us on our website and other data collected automatically through the website, as applicable.</li>\r\n</ul>\r\n<p>We also collect certain non-personal information (data in a form that does not support direct association with any specific person or individual) by automated means when you visit the Website (the &ldquo;Non-PII&rdquo;).&nbsp;</p>\r\n<p><strong>Collection of PII</strong></p>\r\n<p>The circumstances in which you might provide to us PII include, but are not limited to, the following:</p>\r\n<p><u>Account creation information.</u>&nbsp;You can create a personal shopping account with Omaze, and if you do so you will be required to provide us with certain PII. This account will allow you to shop faster and easier, and to check on order status and history. In creating this account, you authorize Omaze to store your name, birthday, email address, telephone number and shipping and billing addresses. You should keep your account information current and complete. Please see our&nbsp;<a href=\"https://www.omaze.com/pages/terms\" target=\"_blank\" rel=\"noopener noreferrer\">Terms &amp; Conditions</a>&nbsp;regarding how you can update or correct the information associated with your account. Your account will have a password that you will create; you are responsible for maintaining the confidentiality of your user name and password. You may not use another person\'s account or password without their permission and you should protect the confidentiality of your account and password information by logging out of your account at the end of each shopping session.</p>\r\n<p><u>Sweepstakes, contests and promotion information.</u>&nbsp;You can participate in Omaze sweepstakes, contests, and promotions as long as you meet eligibility requirements and comply with all applicable rules. As part of your participation, you will be required to provide us with PII, including your name, mailing address, e-mail address and other information in order to administer the promotion, notify winners, etc.</p>\r\n<p><u>Mailing list information.</u>&nbsp;You can opt to be added to the Omaze mailing list. If you do so, you will be asked to provide us with your email address. Subscriptions to the mailing list can be cancelled at any time.</p>\r\n<p><u>Submitting a request.</u>&nbsp;When you submit a request or comment to our customer service department you will be asked to provide your email address, and depending upon the nature of your inquiry you may provide us with your PII.&nbsp;</p>\r\n<p><u>Survey information.</u>&nbsp;When you complete a survey on-line, we may ask for certain information from you (some of which may be PII), including your age, zip code, shopping habits, e-mail and/or mailing address.</p>\r\n<p><strong>Collection of Non-Personally Identifiable Information</strong></p>\r\n<p>We also collect certain Non-PII when you visit the Website.&nbsp; Much of this Non-PII is collected through the use of third-party tracking services, which includes Google Analytics, and other means, as further described below.</p>\r\n<p><em><u>Google Analytics</u></em></p>\r\n<p><em>&nbsp;</em></p>\r\n<p>Our Website use Google Analytics (and in the future may use other similar sites or services), a web analytics service provided by Google, Inc. (\"Google\"), to better assist us in understanding how the Website is used. Google Analytics will place cookies on your computer that will generate information that we select about your use of the Website, including your computer\'s IP address. That information will be transmitted to and stored by Google. The information will be used for the purpose of evaluating consumer use of the Website, compiling reports on Website activity for our use, and providing other services relating to Website activity and usage. Google may also transfer this information to third parties where required to do so by law, or where such third parties process the information on Google\'s behalf. You may refuse the use of cookies by selecting the appropriate settings on your browser. Please note that by doing so, you may not be able to use the full functionality of the Website. The use of cookies by Google Analytics is covered by Google\'s privacy policy. From time to time, we may enter into agreements with other third party providers for web analytic and other similar services. If we enter into such an agreement, we may share your information, including personal information, with the provider or such provider may have access to and collect your information on our behalf. Your information, including personal information, may be stored with the provider.</p>\r\n<p>&nbsp;</p>\r\n</section>\r\n</section>\r\n</section>\r\n<section class=\"privacy_content row\">\r\n<section class=\"privacy_content row\">\r\n<section class=\"privacy_paragraph\">\r\n<p>You can find out more information about Google Analytics cookies here:&nbsp;<a class=\"sc-kqlzXE ggPFux focus-visible\" title=\"https://developers.google.com/analytics/devguides/collection/analyticsjs/cookie-usage\" href=\"https://developers.google.com/analytics/devguides/collection/analyticsjs/cookie-usage\" data-focus-visible-added=\"\">https://developers.google.com/analytics/devguides/collection/analyticsjs/cookie-usage</a>.&nbsp;To opt-out of Google Analytics relating to your use of our Sites, you can download and install the Browser Plugin available via this link:<a class=\"sc-kqlzXE ggPFux\" title=\"https://tools.google.com/dlpage/gaoptout?hl=en\" href=\"https://tools.google.com/dlpage/gaoptout?hl=en\">&nbsp;</a><a title=\"https://tools.google.com/dlpage/gaoptout\" href=\"https://tools.google.com/dlpage/gaoptout?hl=en\" target=\"_blank\" rel=\"noopener noreferrer\">https://tools.google.com/dlpage/gaoptout?hl=en</a>.</p>\r\n</section>\r\n</section>\r\n</section>\r\n<section class=\"privacy_content row\">\r\n<section class=\"privacy_paragraph\">\r\n<p><em><u>Cookies</u></em></p>\r\n<p>Cookies are bits of electronic information that a website can transfer to a visitor&rsquo;s hard drive to help tailor and keep records of his or her visit. Cookies allow website operators to better customize visits to the site to the visitor&rsquo;s individual preferences. Many commercial websites use cookies. We may use cookies on our Website to allow us to, among other things, measure activity, to personalize your experience, and to track your status or progress when requesting information. If you choose, you can set your browser to reject cookies or you can manually delete individual or all of the cookies on your computer by following your browser&rsquo;s help file directions. However, if your browser is set to reject cookies or you manually delete cookies, you may have some trouble accessing and using some of the pages and features that are currently on our Website, or that we may put on our Website in the future.</p>\r\n<p><em><u>Web Beacons</u></em></p>\r\n<p>Certain pages on the Website contain &ldquo;web beacons&rdquo; (also known as Internet tags, pixel tags and clear GIFs). These web beacons allow third parties to obtain information such as the IP address of the computer that downloaded the page on which the beacon appears, the URL of the page on which the beacon appears, the time the page containing the beacon was viewed, the type of browser used to view the page, and the information in cookies set by the third party. Web beacons also may be used to track whether you have opened an HTML email. When the email is opened, a part of the code that makes up the HTML page calls a web server to load the web beacon that then generates a record showing that the email has been viewed. Web beacons may also recognize when the email was opened, how many times it was forwarded and which URLs (links within the email) were clicked.</p>\r\n<p><em><u>IP Addresses</u></em></p>\r\n<p>When you visit and interact with the Website, Omaze and third parties with whom we have contracted to provide services for us may collect Internet Protocol addresses (each an &ldquo;IP Address&rdquo;), as well as browser type, Internet service provider (ISP), referring/exit pages, platform type, date/time stamp, and page navigation. An IP Address is a unique identifier number that certain electronic devices used to identify and to communicate with each other on the Internet; your Internet Service Provider automatically assigns an IP Address to the computer that you are using. We gather this information to track web site visitor movement in the aggregate, and to gather broad demographic information for aggregate use. Our goal in gathering this information is to learn how our customers and the public are using our service. We may use this information to enhance our Website or for other lawful purposes.</p>\r\n<p><em><u>Do Not Track Notice</u></em></p>\r\n<p>Your browser and other mechanisms may permit you to send do-not-track signals or other similar signals to express your preferences regarding online tracking. To the extent you employ such browser do-not-track signals or other similar mechanisms, we will use commercially reasonable efforts to honor such requests received by us to the extent we have the capacity and resources to identify and process your request. Due to the potential for rapid and diverse developments of technology in this area, we cannot guarantee that we can process every type of request that exists or may be developed in the future. As noted above, third parties, such as our advertising partners, may collect data that relates to you. We cannot control third parties\' responses to do-not-track signals or other such mechanisms. Third parties\' use of data relating to you and responsiveness to do-not-track signals is governed by their respective privacy policies.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>How We May Use This Information?</strong></p>\r\n<p>Our primary purpose in collecting information about you is to provide you with services or information that you request or to process your payments. In addition, we may aggregate the PII that you provide with the PII that other users provide in order to conduct research, analysis, or studies for our own purposes (i.e., not related to providing you with specific services), including improving our services and future sweepstakes.</p>\r\n<p>We may also use the information that you provide to us to communicate with you about our current activities, future events and sweepstakes or to notify you about any changes to our services. If you decide that you would no longer like to receive such messages you can opt-out from receiving such emails from Omaze. In order to opt-out you can click on an unsubscribe link provided at the bottom of every commercial e-mail that you receive from Omaze. If you opt-out, you will continue to receive communications from us relating to any payments you make or other services you request or purchase. If you decide at a later time that you would like to receive commercial emails from us, you may be able to re-add yourself to our communication list.</p>\r\n<p><strong>How May We Share Your Information?</strong></p>\r\n<p>We may disclose all of the information (described herein) that we collect, as stated in this Policy including in accordance with the terms set forth in this section.&nbsp; Except as stated in this Policy and as detailed below, we do not rent, sell, or share your information with other people or companies.&nbsp; The following describes how we may share your information:</p>\r\n<p><u>&nbsp;</u></p>\r\n<p><u>Sharing Your Information with Subcontractors.</u>&nbsp;In our efforts to provide the best quality service and experience to you, we may share information with subcontractors that provide us with services. These services may include, among other things, helping to provide services that you request, helping to create or maintain our databases, helping to research and analyze the people who request services information from us, and/or helping to process payment card information.</p>\r\n<p><u>Sharing Your Information as Permitted by Law.</u>&nbsp;We may share your information with others as required by, or permitted by, law. This may include sharing your PII with governmental entities, or third parties in response to subpoenas, court orders, other legal processes, or as we believe is necessary to exercise our legal rights, to defend against legal claims that have been brought against us, or to defend against possible legal claims that we determine in our sole discretion might be brought against us.</p>\r\n<p><u>Sharing Your Information with Law Enforcement.</u>&nbsp;We may report to law enforcement agencies any activities that we reasonably believe to be unlawful, or that we reasonably believe may aid a law enforcement investigation into unlawful activity. In addition, we reserve the right to release your information to law enforcement agencies if we determine, in our sole judgment, that either you have violated our policies or the release of your information may protect the rights, property or safety of Omaze, you, or another person.</p>\r\n<p><u>Business Transition.</u>&nbsp;If Omaze becomes involved in a merger, acquisition, or any form of sale or transfer of some or all of its assets, your information will be transferred to the acquiring entity.</p>\r\n<p><u>Your Comments.</u>&nbsp;If you post a Comment to our Website, the information that you choose to post, including any personal information that you choose to post, may be available generally to the public.</p>\r\n<p><u>Marketing Companies.</u>&nbsp;As a general rule, we only provide limited, Non-PII (e.g., the city, or the state, in which a device is located or information about your search or posting history) usually in conjunction with a randomly assigned number or a number assigned to your Omaze account and not in conjunction with your name. However, for certain campaigns, we may provide third party advertisers with your email address which may be used by such companies to provide you with information about other products, services or companies.</p>\r\n<p><u>Sharing Your Information with Charities and Prize Providers.</u>&nbsp;If you enter a sweepstakes, whether by making a donation or using an alternate method of entry, make a donation in connection with entering into a sweepstakes, you agree that we may share your name and contact information with Charities Aid Foundation America (&ldquo;CAFA&rdquo;), a U.S. 501(c)(3) tax-exempt public charity that is the legal recipient of all donations through the Omaze platform, as well as the charity we designate as the benefiting charity for such sweepstakes and with any entity providing prizes for that sweepstakes, each of which may use your information for marketing purposes. If a designated benefiting charity is ultimately determined to be ineligible to receive a grant from CAFA, your information will not be sent to such charity.</p>\r\n<p><u>Sweepstakes Winners.</u>&nbsp;As further explained in our Rules, by entering into a sweepstakes, you grant us the right to disclose name, biographical information, pictures/portraits, video images, likenesses and/or voice to the general public if you are a sweepstakes winner.</p>\r\n<p><u>Credit Card Information.</u>&nbsp;Please note, when you use a credit card to make a donation, you are actually being redirected to our third party provider. WE DO NOT COLLECT, ACCESS, STORE OR PROCESS ANY CREDIT CARD INFORMATION.</p>\r\n<p><strong>How Do We Protect Your Information?</strong></p>\r\n<p>We employ reasonable physical and administrative safeguards to protect your personal information.&nbsp; While we will use such efforts, we cannot and will not insure the security of your information. Accordingly, we assume no liability for any disclosure of data due to errors in transmission, unauthorized third party access or other acts of third parties, or acts or omissions beyond our reasonable control.</p>\r\n<p><strong>Third Party Websites; Advertisements</strong></p>\r\n<p>Our Website or our emails may link to a variety of third-party social media sites and/or websites &ndash; such as YouTube, Twitter, Facebook and others - as a service to you, and in order to provide you additional information and/or content related to the work that we do, or additional venues in which you can learn about and discuss the activities of Omaze.&nbsp; We may also allow third parties to place advertisements on the Website.&nbsp; Please note that we have no affiliation with any of these other parties and/or websites, and cannot control and are not responsible for the information collection, use, and disclosure practices of such third parties; we encourage you to review and understand their privacy practices and policies, if any, before using providing any personally identifying information to them or initiating any financial transactions.&nbsp; We are not responsible for the content or information of these websites, or any other use of the linked website.&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>In regard to the advertisements that may appear on the Website, you have a right to opt-out of such personalized targeted ads. Our advertising partners are members of the Network Advertising Initiative; to opt out of targeted ads served by our advertising partners, or any or all Network Advertising Initiative members, click&nbsp;<a href=\"https://optout.networkadvertising.org/?c=1\" target=\"_blank\" rel=\"noopener noreferrer\">here</a>. Please note that when you opt-out using this method the Network Advertising Initiative will place an opt-out cookie on your computer. If you delete, block, or otherwise restrict cookies, you may need to renew your opt-out choice. Once you have opted out, our advertising partners will no longer use information they have collected to help deliver targeted advertisements.</p>\r\n<p><strong>Children&rsquo;s Privacy</strong></p>\r\n<p>We do not knowingly collect, use, or disclose personally identifiable information about visitors younger than 13 years of age. If you are under the age of 13, you are expressly prohibited from accessing/viewing the Website. If you are the parent or guardian of a child under 13 years of age and believe that they have disclosed personally identifiable information to us, please contact us at privacy-requests@omaze.com&nbsp; so that we may delete your child&rsquo;s information.</p>\r\n<p><strong>What if I Provide Information from Outside the United States?</strong></p>\r\n<p>Our Website is hosted in the United States and is governed by US law, and each Sweepstakes drawing takes place within the United States. Accordingly, by submitting any personal information to Omaze or enter a sweepstakes, you are transferring your personal information to the United States and you consent to such transfer.&nbsp; We do not represent or warrant that the Website, or any part thereof, is appropriate or available for use in any particular geographic location. If you choose to access our Website, you do so on your own initiative and at your own risk, and are responsible for complying with all local laws, rules, and regulations applicable in your jurisdiction. If you are visiting the Website from outside the United States, please be aware that your information will be transferred to, stored and processed in the United States where our servers are located and our central database is operated. The data protection and other laws of the United States and other countries might not be as comprehensive as those in your country. By using the Website, you consent to your information being transferred to our facilities and to the facilities of those third parties with whom we share it as described in this Policy.</p>\r\n<p><strong>Notice To&nbsp;</strong><strong>European Union Area, Switzerland &amp; United Kingdom Residents</strong></p>\r\n<p>This Policy is intended to provide adequate and consistent safeguards for the handling of personal information in accordance with Directive 95/46/EC of the European Parliament and of the Council of 24 October 1995 on the protection of individuals with regard to the processing of personal data and on the free movement of such data (&ldquo;the Directive&rdquo;) and all the relevant transposing legislation of the Directive in the European Union/European Economic Area, the Swiss Federal Data Protection Act, as such laws may from time to time be amended and valid during the application of this Policy, and any other privacy laws, regulations and principles concerning the collection, storage, use, transfer and other processing of personal data transferred from users in the European Economic Area, the United Kingdom or Switzerland (the &ldquo;EU Users&rdquo;) to the United States including but not limited to the Regulation (EU) 2016/679 of the European Parliament and of the Council of 27 April 2016 on the protection of natural persons with regard to the processing of personal data and on the free movement of such data, and repealing Directive 95/46/EC (the &ldquo;General Data Protection Regulation&rdquo; or &ldquo;GDPR&rdquo;)) as of its entry into force on 25 May 2018.&nbsp; Omaze has developed this GDPR Privacy Notice to provide additional information about how we handle the PII collected via our Website that is subject to GDPR when we are the controller of that information. The following provisions apply only to EU Users.</p>\r\n<p><strong>Purpose of this GDPR Privacy Notice</strong></p>\r\n<p>This GDPR Privacy Notice explains how we process PII that is subject to GDPR, and also sets out individuals\' rights related to our processing of such PII.</p>\r\n<p><strong>&nbsp;</strong></p>\r\n<p><strong>Purpose and Legal Bases For Our Use Of Your PII</strong></p>\r\n<p>Our processing of PII is justified by a \"legal basis\", that is, a specific condition. We may use PII for the following purposes, in each case as justified by a legal basis:</p>\r\n<p><strong>&nbsp;</strong></p>\r\n<p><u>Website administration</u></p>\r\n<p>We use may use your PII for the effective administration of the Website, to fulfill and/or address your requests, or to provide the functionalities and features as further described herein.&nbsp;</p>\r\n<p><em>&nbsp;</em></p>\r\n<p><em>Purpose and Legal Bases for our Use of your PII</em></p>\r\n<p><em>This processing is necessary to establish, exercise or defend our legal claims and rights. It is in our legitimate interest or a third party\'s legitimate interest to use your PII in such a way to ensure that we provide the very best client service we can to you or others and comply with our professional and ethical duties as attorneys, consistent with applicable law. In some cases, this processing is necessary to perform a contract to which you are a party.</em></p>\r\n<p>&nbsp;</p>\r\n<p><u>Business administration and legal compliance</u></p>\r\n<p>We use PII for the following business administration and legal compliance purposes:</p>\r\n<ul>\r\n<li>To perform and maintain information for the purposes of performing conflicts of interest searches.</li>\r\n<li>To comply with our legal obligations (including Know Your Client, Anti-Money Laundering, Anti-Bribery, conflicts or similar obligations including, but without limitation, maintaining regulatory insurance).</li>\r\n<li>To enforce our legal rights. To investigate and/or settle inquiries or disputes.</li>\r\n<li>To comply with any applicable law, court order, other judicial process, law enforcement requests or the requirements of a regulator.</li>\r\n<li>To enforce our agreements with you.</li>\r\n<li>To protect the rights, property or safety of us or third parties, including our other clients and users of the Website or our Services.</li>\r\n<li>To maintain our records.</li>\r\n<li>To process business transaction data, such as in connection with a merger, or a restructuring, or sale.</li>\r\n<li>To use as otherwise required or permitted by law, consistent with these purposes.</li>\r\n</ul>\r\n<p><em>Purpose and legal bases for our use of your PII</em></p>\r\n<p><em>It is necessary to enforce, establish or defend our legal rights, or to protect the rights of third parties. This processing is necessary to comply with EEA legal obligations imposed upon us. It is in our legitimate interest or a third party\'s legitimate interest to use your PII to comply with other legal obligations. In some cases, this processing will be necessary to perform a contract to which you are a party.</em></p>\r\n<p>&nbsp;</p>\r\n<p><u>Marketing and promotions</u></p>\r\n<p>We may use PII for marketing and promotional purposes, such as to send you news and newsletters, or to otherwise contact you about products or information we think may interest you, by email and direct (postal) mail. We may also use it develop new services and determine how to market our services.</p>\r\n<p><em>&nbsp;</em></p>\r\n<p><em>Purpose and legal bases for our use of your PII</em></p>\r\n<p><em>It is in our legitimate interest to use your PII for marketing purposes in order to develop and grow our business and services and promote the reputation of our firm. We will, where required by applicable law, obtain your consent to send such communications.</em></p>\r\n<p>&nbsp;</p>\r\n<p><u>Client insight and analytics</u></p>\r\n<p>We use PII to better understand how you and others use our services or our Website, so that we can improve our Website and services, develop new features, tools, offerings, services and the like, and for other research and analytical purposes. We also use the information we collect to measure the effectiveness of our online content and how visitors use our Website and our services. We may use this information and the insights we have derived for marketing purposes or to make decisions about events, news and information that may be of interest to clients, prospective clients, Website users and others.</p>\r\n<p><em>&nbsp;</em></p>\r\n<p><em>Purpose and legal bases for our use of your PII</em></p>\r\n<p><em>It is in our legitimate interest to use your PII in such a way to ensure that we provide the very best Services to our clients and others in order to develop and grow our business and Services and promote the reputation of our firm.</em></p>\r\n<p>&nbsp;</p>\r\n<p><u>Prevent misconduct, abuse and misuse</u></p>\r\n<p>Subject to our professional and ethical duties, we use PII where we believe necessary to investigate, prevent or take action regarding illegal activities, suspected fraud, situations involving potential threats to the safety of any person, or violations of our Terms of Use. We also use PII to protect and secure the Website and our information systems and networks.</p>\r\n<p><em>&nbsp;</em></p>\r\n<p><em>Purpose and legal bases for our use of your PII</em></p>\r\n<p><em>This processing is necessary to comply with EEA legal obligations imposed upon us. It is necessary to enforce, establish or defend our legal rights, or to protect the rights of third parties. It is in our legitimate interest or a third party\'s legitimate interest to use your PII to comply with other legal obligations. In some cases, this processing will be necessary to perform a contract to which you are a party.</em></p>\r\n<p><strong>&nbsp;</strong></p>\r\n<p><strong>Retention of Personal Data</strong></p>\r\n<p>In general, we will retain relevant PII of Website visitors for at least 1 year from the date of our last interaction with you and in compliance with our obligations under applicable laws, or for longer if we are required to do so according to our regulatory obligations or where we believe necessary to establish, defend, or protect our legal rights and interests or those of others.</p>\r\n<p><strong>&nbsp;</strong></p>\r\n<p><strong>Third Party Contractors and Other Data Processors</strong></p>\r\n<p>We may appoint subcontractor data processors as required to deliver the services, such as, without limitation, IT systems or software providers, IT Support service providers, and document and information storage providers, who will process PII on our behalf and at our direction. We conduct an appropriate level of due diligence and put in place contractual documentation in relation to any sub-contractor to ensure that they process PII appropriately and according to our legal and regulatory obligations.</p>\r\n<p><strong>&nbsp;</strong></p>\r\n<p><strong>Your Information and Your Choices; Withdrawal of Consent</strong></p>\r\n<p>GDPR provides EU Users with additional rights in respect to the PII we hold about you, including the following rights:</p>\r\n<ul>\r\n<li><strong>Your right of access</strong></li>\r\n</ul>\r\n<p>If you ask us, we will confirm whether we are processing your PII and, if necessary, provide you with a copy of that PII (along with certain other details). If you require additional copies, we may need to charge a reasonable fee.</p>\r\n<ul>\r\n<li><strong>Your right to correction (rectification)</strong></li>\r\n</ul>\r\n<p>If the PII we hold about you is inaccurate or incomplete, you are entitled to request to have it corrected. If you are entitled to have information corrected and if we have shared your PII with others, we will let them know about the rectification where possible. If you ask us, we will also tell you, where possible and lawful to do so, with whom we have shared your PII so that you can contact them directly.</p>\r\n<ul>\r\n<li><strong>Your right to erasure</strong></li>\r\n</ul>\r\n<p>You can ask us to delete or remove your PII in some circumstances, such as where we no longer need it or if you withdraw your consent (where applicable). If you are entitled to erasure and if we have shared your PII with others, we will let them know about the erasure where possible. If you ask us, we will also tell you, where it is possible and lawful for us to do so, with whom we have shared your PII with so that you can contact them directly.</p>\r\n<ul>\r\n<li><strong>Your right to restrict (block) processing</strong></li>\r\n</ul>\r\n<p>You can ask us to restrict the processing of your PII in certain circumstances, such as where you contest the accuracy of that PII or you object to us. If you are entitled to restriction and if we have shared your PII with others, we will let them know about the restriction where it is possible for us to do so. If you ask us, we will also tell you, where it is possible and lawful for us to do so, with whom we have shared your PII so that you can contact them directly.</p>\r\n<ul>\r\n<li><strong>Your right to data portability</strong></li>\r\n</ul>\r\n<p>You have the right, in certain circumstances, to receive a copy of PII we\'ve obtain from you in a structured, commonly used and machine readable format, and to reuse it elsewhere or to ask us to transfer this to a third party of your choice.</p>\r\n<ul>\r\n<li><strong>Your rights in relation to automated decision-making and profiling</strong></li>\r\n</ul>\r\n<p>You have the right not to be subject to a decision when it\'s based on automatic processing, including profiling, if it produces a legal effect or similarly significantly affects you, unless such profiling is necessary for entering into, or the performance of, a contract between you and us.</p>\r\n<ul>\r\n<li><strong>Your right to withdraw consent</strong></li>\r\n</ul>\r\n<p>If we rely on your consent (or explicit consent) as our legal basis for processing your PII, you have the right to withdraw that consent at any time.</p>\r\n<ul>\r\n<li><strong>Your right to lodge a complaint with the supervisory authority</strong></li>\r\n</ul>\r\n<p>If you have a concern about any aspect of our privacy practices, including the way we\'ve handled your PII, you can report it to the relevant supervisory authority.</p>\r\n<p>Please note that some of these rights may be limited where we have an overriding legitimate interest or legal obligation to continue to process the PII, or where the PII may be exempt from disclosure due to applicable law, the applicable rules of professional conduct, attorney-client privilege, legal professional privilege, other applicable privileges or protections, or professional secrecy obligations.&nbsp; Additionally, there may be circumstances in which we are not legally required to comply with your request because of the laws in your jurisdiction or because of exemptions provided in data protection legislation in general, and GDPR in particular. Finally, please note that we are not responsible for removing or deleting information from the databases of third parties (such as service providers) with whom we have shared information about you, but we will make the request on your behalf for such removal/deletion.</p>\r\n<p><strong>&nbsp;</strong></p>\r\n<p><strong>Where We Transfer Your Personal Information</strong></p>\r\n<p>Omaze is located in the United States; when you submit personal information to us, or when others provide personal information to us, we will receive it and process it in the United States.</p>\r\n<p><strong>&nbsp;</strong></p>\r\n<p><strong>Children&rsquo;s Privacy/Note To Parents Of Children Residing in The EEA, Switzerland And UK</strong></p>\r\n<p><strong>&nbsp;</strong></p>\r\n<p>Except as may be provided by a parent or guardian, we do not knowingly collect, use, or disclose PII about visitors to our Website that are less than 16 years of age; please note that if you are a parent or guardian we ask that you do not provide confidential or sensitive information &ndash; including any medical or health related information - to us directly through this Website, or by email to any of the contact email addresses listed on this Website. If a child under the age of 16 submits information to us through any part of the Website and we becomes aware that the user submitting the information is under the age of 16, the information provided will be deleted as soon as it is discovered and not used for any purpose. If you are the parent or guardian of a child under 16 years of age and believe that they have disclosed PII to us, please contact us at&nbsp;privacy-requests@omaze.com and be sure to include in your message the same user name and password and/or email address that you believe your child submitted, if applicable.&nbsp;</p>\r\n<p><strong>&nbsp;</strong></p>\r\n<p><strong>How to Contact Us</strong></p>\r\n<p>If you have any questions about this GDPR Privacy Notice or want to exercise your rights set out in this GDPR Privacy Notice, please contact us at&nbsp; privacy-requests@omaze.com or at the address below.</p>\r\n<p>&nbsp;</p>\r\n<p>Omaze, Inc.<br />Attn: Privacy</p>\r\n<p>P.O. Box 866, 9942 Culver Blvd, Culver City, CA 90232</p>\r\n<p><strong>&nbsp;</strong></p>\r\n<p><strong>Changes to This GDPR Privacy Notice</strong></p>\r\n<p>We may make changes to this GDPR Privacy Notice from time to time, to reflect changes in our practices. We may also make changes as required to comply with changes in applicable law or regulatory requirements. Where we materially change this Privacy Notice, we will take steps to notify you (such as by posting a notice on the Website or via email), and where required by applicable law to obtain your consent.</p>\r\n<p><strong>&nbsp;</strong></p>\r\n<p><strong>How and When is the Policy Updated? How are You Notified of these Changes?</strong></p>\r\n<p>We reserve the right to modify or amend this Policy at any time by posting the revised Policy on our Website. If there are changes or additions to this Policy, we will post those changes here or in other formats for you to review. Each version of this Policy will be identified at the end of this document by its effective date. Your continued use of the Website after the effective date of any modification to the Policy will be deemed to be your agreement to any changed terms.</p>\r\n<p><strong>How to Contact Us</strong></p>\r\n<p>If you have any questions or concerns regarding this Policy, please contact us at service@omaze.com, or Omaze, Inc., P.O. Box 866, 9942 Culver Blvd, Culver City, CA 90232. If we need, or are required, to contact you concerning any event that involves your information we may decide to do so by email, telephone, or mail.</p>\r\n<p>This Policy is effective as of January 2020.</p>\r\n<p><strong><u>&nbsp;</u></strong></p>\r\n<p><strong><u>&nbsp;</u></strong></p>\r\n<p><strong><u>&nbsp;</u></strong></p>\r\n<p><strong><u>CALIFORNIA PRIVACY RIGHTS</u></strong></p>\r\n<p>If you are a California resident, you may have certain rights under California law, including but not limited to the California Consumer Privacy Act of 2018 (&ldquo;CCPA&rdquo;).&nbsp; This California Privacy Statement (&ldquo;CA Privacy Statement&rdquo;) supplements the information contained in the Omaze Privacy Notice above and applies solely to visitors, users, and others who reside in the State of California (&ldquo;CA Resident(s)&rdquo;, &ldquo;you&rdquo; or &ldquo;your&rdquo;). Any terms defined in the CCPA have the same meaning when used in this CA Privacy Statement.</p>\r\n<p>&nbsp;</p>\r\n<p><u>Your Rights and Choices&nbsp;</u></p>\r\n<p>The CCPA provides CA Residents with specific rights regarding their Personal Information. The CCPA defines Personal Information as any information that &ldquo;identifies, relates to, describes, is capable of being associated with, or could reasonably be linked, directly or indirectly, with a particular consumer or household&rdquo; (hereinafter, &ldquo;PII&rdquo;).&nbsp; This CA Privacy Statement describes your CCPA rights in relation to our use of your PII, and explains how to exercise those rights.</p>\r\n<p><u>&nbsp;</u></p>\r\n<p><u>Right to Know/Access</u>.</p>\r\n<p>&nbsp;</p>\r\n<p>As a California Resident, you have a right to know:</p>\r\n<ul>\r\n<li>The categories of PII we have collected, sold, or disclosed for business purposes about you;</li>\r\n<li>The categories of sources from which we collected your PII;</li>\r\n<li>The business or commercial purpose for collecting or sharing your PII;</li>\r\n<li>The categories of third parties with whom we have shared, sold, or disclosed for business purposes your PII; and</li>\r\n<li>The specific pieces of your PII we have collected.</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<p><u>Portability Rights</u></p>\r\n<p>As part of your &ldquo;right of access&rdquo;, you have the right to request that we provide your PII to you.&nbsp; Once we receive and confirm your &ldquo;verifiable consumer request&rdquo; (as describe below) we will provide the PII we have collected and currently hold to you &ldquo;in a portable and, to the extent technically feasible, in a readily usable format.</p>\r\n<p><em>&nbsp;</em></p>\r\n<p><u>Right of Deletion</u></p>\r\n<p>As a California Resident, you have a right to request that we delete the PII we have collected from or about you, subject to certain exceptions. Once we receive and confirm your verifiable request (as described below), we will delete (and ask our service providers to delete) your PII from our records, unless an exception applies.</p>\r\n<p>Please note, we may deny your deletion request if retaining the information is necessary for us or our service providers to:</p>\r\n<ol>\r\n<li>Complete the transaction for which we collected the PII, provide a good or service that you requested, take actions reasonably anticipated within the context of our ongoing business relationship with you, or otherwise perform our contract with you.</li>\r\n<li>Detect security incidents, protect against malicious, deceptive, fraudulent, or illegal activity, or prosecute those responsible for such activities.</li>\r\n<li>Debug products to identify and repair errors that impair existing intended functionality.</li>\r\n<li>Exercise free speech, ensure the right of another consumer to exercise their free speech rights, or exercise another right provided for by law.</li>\r\n<li>Comply with the California Electronic Communications Privacy Act (Cal. Penal Code &sect; 1546&nbsp;<em>seq.</em>).</li>\r\n<li>Enable solely internal uses that are reasonably aligned with consumer expectations based on your relationship with us.</li>\r\n<li>Comply with a legal obligation.</li>\r\n<li>Make other internal and lawful uses of that information that are compatible with the context in which you provided it.</li>\r\n</ol>\r\n<p><u>Process To Submit A Request</u></p>\r\n<p>&nbsp;</p>\r\n<p>To submit a verified request for your PII you may click&nbsp;<a href=\"mailto:privacy-requests@omaze.com\" target=\"_blank\" rel=\"noopener noreferrer\">here&nbsp;</a>or call toll-free at 800-435-1976. You may also designate an authorized agent to submit a request on your behalf by clicking<a href=\"mailto:privacy-requests@omaze.com\">&nbsp;here</a>&nbsp;or calling toll-free at 800-435-1976 and then also submitting written proof of such authorization via 800-435-1976.</p>\r\n<p><em>&nbsp;</em></p>\r\n<p><u>Verification; Verification Method</u></p>\r\n<p>Only you - or a person registered with the California Secretary of State that you authorize to act on your behalf - may make a verifiable consumer request related to your PII. You may also make a verifiable consumer request on behalf of your minor child. In order to ensure we do not inadvertently delete your PII based on a fraudulent request, we will verify your identity before we respond to your request. To verify your identity, we will generally match the identifying information provided in your request with the information we have on file about you. Depending on the sensitivity of the PII requested to be deleted, we may also utilize more stringent verification methods to verify your identity, including but not limited to requesting additional information from you. &nbsp;&nbsp;Please note you may only make a verifiable request for access (and data portability) twice within a 12-month period.&nbsp; To be considered a verifiable consumer request, you must:</p>\r\n<ul>\r\n<li>Provide sufficient information that allows us to reasonably verify you are the person about whom we collected PII or an authorized representative.</li>\r\n<li>Describe your request with sufficient detail that allows us to properly understand, evaluate, and respond to it.</li>\r\n</ul>\r\n<p>We cannot respond to your request or provide you with PII if we cannot verify your identity or authority to make the request and confirm the PII relates to you.&nbsp; Making a verifiable consumer request does not require you to create an account with us.&nbsp; We will only use PII provided in a verifiable consumer request to verify the requestor\'s identity or authority to make the request.</p>\r\n<p><u>Response Timing and Format</u></p>\r\n<p>We endeavor to respond to a verifiable consumer request within 45 days of its receipt.&nbsp; If we require more time (up to 90 days), we will inform you of the reason and extension period in writing.&nbsp; If you have an account with us, we will deliver our written response to that account.&nbsp; If you do not have an account with us, we will deliver our written response by mail or electronically, at your option.&nbsp; Any disclosures we provide will only cover the 12-month period preceding the verifiable consumer request\'s receipt.&nbsp; The response we provide will also explain the reasons we cannot comply with a request, if applicable.&nbsp; For data portability requests, we will select a format to provide your PII that is readily useable and should allow you to transmit the information from one entity to another entity without hindrance.</p>\r\n<p>We do not charge a fee to process or respond to your verifiable consumer request unless it is excessive, repetitive, or manifestly unfounded.&nbsp; If we determine that the request warrants a fee, we will tell you why we made that decision and provide you with a cost estimate before completing your request.</p>\r\n<p><u>&nbsp;</u></p>\r\n<p><u>Right to Opt-Out</u></p>\r\n<p>&nbsp;</p>\r\n<p>As a California resident, you have the right to opt-out of the sale of your PII to third parties. To exercise this right, please click&nbsp;<a href=\"https://www.omaze.com/pages/do-not-sell-my-personal-information\">here.</a></p>\r\n<p><u>&nbsp;</u></p>\r\n<p><u>Right of Non-Discrimination</u></p>\r\n<p>You have a right to exercise your rights under the CCPA without suffering discrimination. Accordingly, we will not discriminate against you in any way if you choose to exercise your rights under the CCPA. &nbsp;&nbsp;Unless permitted by the CCPA, we will not:</p>\r\n<ul>\r\n<li>Deny you goods or services.</li>\r\n<li>Charge you different prices or rates for goods or services, including through granting discounts or other benefits, or imposing penalties.</li>\r\n<li>Provide you a different level or quality of goods or services.</li>\r\n<li>Suggest that you may receive a different price or rate for goods or services or a different level or quality of goods or services.</li>\r\n</ul>\r\n<p><u>California Minors</u></p>\r\n<p>&nbsp;</p>\r\n<p>If you are a California resident under the age of 18, California Business and Professions Code &sect; 22581 permits you to request and obtain removal of content or information you have publicly posted on our Website. To make such a request, please send an email with a detailed description of the specific content or information to&nbsp;<a href=\"mailto:privacy-requests@omaze.com\">privacy-requests@omaze.com</a>. Please be aware that such a request does not ensure complete or comprehensive removal of the content or information you have posted and there may be circumstances in which the law does not require or allow removal even if requested.</p>\r\n<p><u>&nbsp;</u></p>\r\n<p><u>Shine The Light</u></p>\r\n<p>&nbsp;</p>\r\n<p>California Civil Code &sect; 1798.83 permits you to request information regarding the disclosure of your PII by us to third parties for their direct marketing purposes. To make such a request, please send an email to&nbsp;<a href=\"mailto:privacy-requests@omaze.com\">privacy-requests@omaze.com</a>&nbsp;or write us at: Omaze, Inc., P.O. Box 866, 9942 Culver Blvd, Culver City, CA 90232. Please be sure to include &ldquo;California - Shine The Light Request&rdquo; in the subject line.</p>\r\n<p><u>&nbsp;</u></p>\r\n<p><u>Information We Collect</u></p>\r\n<p>As noted above, we may collect some of your PII.&nbsp; In the table below we have indicated those categories of PII that we have collected from California Residents within the last twelve (12) months:</p>\r\n<table width=\"100%\">\r\n<tbody>\r\n<tr>\r\n<td width=\"27%\">\r\n<p><strong>Category</strong></p>\r\n</td>\r\n<td width=\"60%\">\r\n<p><strong>Examples</strong></p>\r\n</td>\r\n<td width=\"11%\">\r\n<p><strong>Collected</strong></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td width=\"27%\">\r\n<p>A. Identifiers.</p>\r\n</td>\r\n<td width=\"60%\">\r\n<p>May include: A real name, alias, postal address, unique personal identifier, online identifier, Internet Protocol address, email address, account name, Social Security number, driver\'s license number, passport number, or other similar identifiers.</p>\r\n</td>\r\n<td width=\"11%\">\r\n<p>YES</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td width=\"27%\">\r\n<p>B. PII categories listed in the California Customer Records statute (Cal. Civ. Code &sect; 1798.80(e)).</p>\r\n</td>\r\n<td width=\"60%\">\r\n<p>May Include: Name, signature, Social Security number, physical characteristics or description, address, telephone number, passport number, driver\'s license or state identification card number, insurance policy number, education, employment, employment history, bank account number, credit card number, debit card number, or any other financial information, medical information, or health insurance information. Some PII included in this category may overlap with other categories.</p>\r\n</td>\r\n<td width=\"11%\">\r\n<p>YES</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td width=\"27%\">\r\n<p>C. Protected classification characteristics under California or federal law.</p>\r\n</td>\r\n<td width=\"60%\">\r\n<p>May Include: Age (40 years or older), race, color, ancestry, national origin, citizenship, religion or creed, marital status, medical condition, physical or mental disability, sex (including gender, gender identity, gender expression, pregnancy or childbirth and related medical conditions), sexual orientation, veteran or military status, genetic information (including familial genetic information).</p>\r\n</td>\r\n<td width=\"11%\">\r\n<p>NO</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td width=\"27%\">\r\n<p>D. Commercial information.</p>\r\n</td>\r\n<td width=\"60%\">\r\n<p>May Include: Records of personal property, products or services purchased, obtained, or considered, or other purchasing or consuming histories or tendencies.</p>\r\n</td>\r\n<td width=\"11%\">\r\n<p>NO</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td width=\"27%\">\r\n<p>E. Biometric information.</p>\r\n</td>\r\n<td width=\"60%\">\r\n<p>May Include: Genetic, physiological, behavioral, and biological characteristics, or activity patterns used to extract a template or other identifier or identifying information, such as, fingerprints, faceprints, and voiceprints, iris or retina scans, keystroke, gait, or other physical patterns, and sleep, health, or exercise data.</p>\r\n</td>\r\n<td width=\"11%\">\r\n<p>NO</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td width=\"27%\">\r\n<p>F. Internet or other similar network activity.</p>\r\n</td>\r\n<td width=\"60%\">\r\n<p>May include: Browsing history, search history, information on a consumer\'s interaction with a website, application, or advertisement.</p>\r\n</td>\r\n<td width=\"11%\">\r\n<p>&nbsp;YES</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td width=\"27%\">\r\n<p>G. Geolocation data.</p>\r\n</td>\r\n<td width=\"60%\">\r\n<p>May include: Physical location or movements.</p>\r\n</td>\r\n<td width=\"11%\">\r\n<p>&nbsp;NO</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td width=\"27%\">\r\n<p>H. Sensory data.</p>\r\n</td>\r\n<td width=\"60%\">\r\n<p>May include: Audio, electronic, visual, thermal, olfactory, or similar information.</p>\r\n</td>\r\n<td width=\"11%\">\r\n<p>NO</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td width=\"27%\">\r\n<p>I. Professional or employment-related information.</p>\r\n</td>\r\n<td width=\"60%\">\r\n<p>May include: Current or past job history or performance evaluations.</p>\r\n</td>\r\n<td width=\"11%\">\r\n<p>NO</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td width=\"27%\">\r\n<p>J. Non-public education information (per the Family Educational Rights and Privacy Act (20 U.S.C. Section 1232g, 34 C.F.R. Part 99)).</p>\r\n</td>\r\n<td width=\"60%\">\r\n<p>May include: Education records directly related to a student maintained by an educational institution or party acting on its behalf, such as grades, transcripts, class lists, student schedules, student identification codes, student financial information, or student disciplinary records.</p>\r\n</td>\r\n<td width=\"11%\">\r\n<p>NO</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td width=\"27%\">\r\n<p>K. Inferences drawn from other PII.</p>\r\n</td>\r\n<td width=\"60%\">\r\n<p>May Include: Profile reflecting a person\'s preferences, characteristics, psychological trends, predispositions, behavior, attitudes, intelligence, abilities, and aptitudes.</p>\r\n</td>\r\n<td width=\"11%\">\r\n<p>&nbsp;</p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p>&nbsp;</p>\r\n<p>Please note that PII does not include:</p>\r\n<ul>\r\n<li>Publicly available information from government records.</li>\r\n<li>De-identified or aggregated consumer information.</li>\r\n</ul>\r\n<p>Omaze obtain the categories of PII listed above from the following categories of sources:</p>\r\n<ul>\r\n<li>Directly from you when you use our Website. For example, from forms you complete or products and services you purchase.</li>\r\n<li>Indirectly from you when you use our Website. For example, from tracking your actions on our Website (as further described in our Privacy Notice or through information we collect in the course of providing services).</li>\r\n<li>Directly and indirectly from activity when you use our Website.</li>\r\n<li>Directly from our clients/customers or their agents. For example, from documents that our clients provide to us related to the services for which they engage us.</li>\r\n<li>Indirectly from our clients/customers or their agents. For example, through information we collect from our clients in the course of providing services to them.</li>\r\n</ul>\r\n<p><u>Use of PII</u></p>\r\n<p>We may use or disclose the PII we collect for one or more of the following business purposes:</p>\r\n<ul>\r\n<li>To fulfill or meet the reason for which the information is provided.</li>\r\n<li>To provide you with information, products or services that you request from us.</li>\r\n<li>To provide you with content, and other notices, events or news, that may be of interest to you.</li>\r\n<li>To carry out our obligations and enforce our rights arising from any contracts entered into between you and us, including for billing.</li>\r\n<li>To improve our Website and present its contents to you.</li>\r\n<li>As necessary or appropriate to protect the rights, property or safety of us, our clients or others.</li>\r\n<li>To respond to law enforcement requests and as required by applicable law, court order, or governmental regulations.</li>\r\n<li>As described to you when collecting your PII or as otherwise set forth in the CCPA.</li>\r\n<li>To evaluate or conduct a merger, divestiture, restructuring, reorganization, dissolution, or other sale or transfer of some or all of our assets, whether as a going concern or as part of bankruptcy, liquidation, or similar proceeding, in which PII held by us is among the assets transferred.</li>\r\n</ul>\r\n<p>We will not collect additional categories of PII or use the PII we collected for materially different, unrelated, or incompatible purposes without providing you notice.</p>\r\n<p><u>Sharing PII</u></p>\r\n<p>We may disclose your PII to a third party for a business purpose.&nbsp; When we disclose PII for a business purpose, we enter a contract that describes the purpose and requires the recipient to both keep that PII confidential and not use it for any purpose except performing the contract.</p>\r\n<p>In the preceding twelve (12) months, we have disclosed the following categories of PII for a business purpose:</p>\r\n<p>Category A:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Identifiers.<br />Category B:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; California Customer Records PII categories.<br />Category I:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Professional or employment-related information.</p>\r\n<p>We disclose your PII for a business purpose to the following categories of third parties:</p>\r\n<ul>\r\n<li>Our affiliates.</li>\r\n<li>Service providers.</li>\r\n<li>Third parties to whom you or your agents authorize us to disclose your PII in connection with products or services we provide to you.</li>\r\n</ul>\r\n<p><u>Selling PII</u></p>\r\n<p>In the preceding twelve (12) months, we have not sold any PII.</p>\r\n<p><u>Contact Information</u></p>\r\n<p>If you have any questions or comments about this notice, our Privacy Statement, the ways in which we collect and use your PII, your choices and rights regarding such use, or wish to exercise your rights under California law, please do not hesitate to contact us at:</p>\r\n<p>Phone: 800-435-1976<a href=\"https://hornellp.com/umbraco/hornellp.com\"><br /></a>Email: privacy@omaze.com</p>\r\n<p>Postal P: Omaze, Inc., P.O. Box 866, 9942 Culver Blvd, Culver City, CA 90232</p>\r\n</section>\r\n</section>', NULL, '2020-07-04 02:46:56');
INSERT INTO `pages` (`id`, `page_title`, `page_content`, `created_at`, `updated_at`) VALUES
(2, 'Terms & Conditions', '<p>PLEASE READ THIS AGREEMENT CAREFULLY. THIS IS A BINDING CONTRACT.</p>\r\n<p><br />This Terms of Use (this ToU) sets forth the terms and conditions under which Omaze, Inc. (Omaze, we, or us) provides you access to, and governs your use of, the website located at Omaze.com (the Site), and the Omaze applications made available through the Site (the Software) and the information, content, features and services provided through the Site (together with the Software, collectively, the Service).</p>\r\n<p>YOUR USE OF THE SITE AND/OR THE SERVICE, OR BY CLICKING &ldquo;I ACCEPT&rdquo; IF PRESENTED WITH THIS TOU IN A CLICK-THROUGH FORMAT, SIGNIFIES YOUR AGREEMENT TO THIS TOU AND CONSTITUTES YOUR BINDING ACCEPTANCE OF THIS TOU, INCLUDING ANY MODIFICATIONS THAT OMAZE MAKES FROM TIME TO TIME. If you do not agree to this ToU, you may not use the Site or the Service.</p>\r\n<p><br />You may not use the Service and you may not accept this ToU if you are not sixteen years of age or older. If you accept this ToU, you represent that you have the legal capacity to be bound by it. Omaze may amend this ToU at any time by posting the amended Terms of Use on the Site, and you agree that you will be bound by any changes to this ToU. The date of last revision of this ToU is included at the top of this page. Omaze may make changes to the Site and/or the Service at any time. You understand that Omaze may discontinue or restrict your use of the Site and/or the Service for any reason or no reason with or without notice.</p>\r\n<p>&nbsp;</p>\r\n<ol>\r\n<li>Privacy Policy.</li>\r\n</ol>\r\n<p>By clicking &ldquo;I ACCEPT&rdquo; or using the Site or the Service, you represent that you have read and consent to our Privacy Policy in addition to this ToU. Omaze may revise the Privacy Policy at any time, and the new versions will be posted on the Site. If at any point you do not agree to any portion of the Privacy Policy, you must immediately stop using the Site and/or the Service.</p>\r\n<p>&nbsp;</p>\r\n<ol start=\"2\">\r\n<li>The Services.</li>\r\n</ol>\r\n<p>The Omaze Site provides certain promotions on the Site (Campaigns) for a chance to win unique, amazing, or once-in-a-lifetime experiences (Prizes) and receive rewards traditionally unavailable to the general public. Participants may enter Campaigns by creating an Account (defined below) and by either using Omaze&rsquo;s Free Alternate Methods of Entry, by making a donation, or by using any other free to use mechanisms that we provide from time to time. No purchase, payment or other financial contribution is necessary to enter or win a Campaign and Omaze&rsquo;s Free Alternate Methods of Entry is always available for all Campaigns. &nbsp;Void where prohibited by law. In addition, if you are registering for or participating in a Campaign, participation is subject to our Official Sweepstakes Rules and Regulations and any other rules and regulations applicable to such Campaign (collectively, Rules). If this ToU conflicts with or is inconsistent with any Rules, such Rules will govern and be given precedence. Occasionally where law permits, we may offer different types of Campaign than sweepstakes, which will have their own rules and terms.<br />Omaze reserves the right to add, change, modify, suspend or discontinue any portion of the Service, in its sole discretion, at any time. Your use of the Site and/or the Service, including the availability of new services through the Site, shall be subject to this ToU. In addition, Omaze may impose limits on any portion of the Service or restrict your access to portions of or the entire Site in its sole discretion without notice or liability.</p>\r\n<p>&nbsp;</p>\r\n<ol start=\"3\">\r\n<li>Donations.</li>\r\n</ol>\r\n<p>In addition to our free methods of entry, each Campaign allows you to support one or more causes (each a Designated Grantee) by making a monetary donation (each a Donation) to Charities Aid Foundation America (CAFA), a U.S. 501(c)(3) tax-exempt public charity, Federal Tax ID # 43-1634280. CAFA has partnered with Omaze to make giving internationally and domestically safe, easy and effective for donors by raising charitable donations from members of the public to fund monetary grants to other organizations, including the Designated Grantees featured on our Campaign pages.</p>\r\n<p><br />For most Campaigns on the Omaze platform, approximately 10 - 15 business days following CAFA&rsquo;s receipt of donations, and so long as the Designated Grantee continues to qualify as an eligible recipient of CAFA grants, CAFA will make a grant to the Designated Grantee equal to the net proceeds received as part of the Campaign. For certain Campaigns in which Omaze&rsquo;s fee is based on a percentage of the Donations net of all cost and expenses, an initial grant is made approximately 10 &ndash; 15 business days following the end of the Campaign, and a final grant (the initial grant and final grant are collectively equal to the net proceeds) is made approximately 60-90 days following the close of the Campaign, after reconciliation of all expenses.</p>\r\n<p><br />The net proceeds to be distributed by CAFA as grants is generally equal to the total Donations received in connection with a Campaign less the costs and expenses associated with that Campaign, which include advertising, payment processing, Prize fulfillment (other than Prizes or experiences that are donated), and the costs of making the Campaign a success. In addition, as part of the net proceeds calculation, approximately 15% of every Donation goes to Omaze to cover the cost of providing and maintaining the technology and team that makes this all happen. See the section of each Campaign page called &ldquo;Stuff Our Lawyers Want You to Read&rdquo; for the specific calculation of net proceeds applicable to the Campaign.</p>\r\n<p><br />While CAFA takes all reasonable steps to attempt to grant donated funds to the Designated Grantee listed on the Campaign page, including pre-qualifying the Designated Grantee for a grant, CAFA retains exclusive legal control over all Donations. In the rare cases when a Designated Grantee fails to meet the requirements of CAFA\'s&nbsp;<a href=\"https://www.cafamerica.org/validation/\">grantmaking policies and procedures</a>, CAFA reserves the right to reassign funds to another organization of its choice, and will aim to grant the funds to another organization that supports a similar charitable cause.</p>\r\n<p><br />Anyone who donates through the Omaze platform is making a donation to CAFA, and receives chances to win Prizes, however, no Donation is required to enter to win a Campaign, and a Donation does not increase your chances of winning a Campaign.&nbsp; Because a Donation is not required to enter, and because CAFA is a U.S. tax-exempt charity, all Donations made by U.S. donors through the Omaze platform are tax-deductible to the extent allowed by law. &nbsp;If your Donation is accompanied by a Campaign perk, the amount of your Donation that is deductible for U.S. federal income tax purposes may be limited to the excess of the amount contributed over the value of goods or services provided.&nbsp; If you have any questions regarding your tax obligations, you should consult with your own tax advisor.&nbsp; In the event that you need a duplicate or replacement receipt for tax purposes, you can contact&nbsp;weloveyou@omaze.com.&nbsp; Except in the event of fraud and a valid chargeback by a credit card issuer, all Donations are non-refundable.</p>\r\n<p>&nbsp;</p>\r\n<ol start=\"4\">\r\n<li>Refunds, returns, and exchanges</li>\r\n</ol>\r\n<p>Your Donation through the Omaze platform supports an awesome cause and enters you to win an awesome prize(s). Donations are non-refundable once a Campaign has closed. If your Donation is accompanied by a Campaign perk, please note that delivery time varies based on the item; specifics about shipment will be listed in the product description. Due to the exclusive nature of all Campaign perks, we apologize for not being able to accommodate exchanges. We will only refund donations if we&rsquo;re unable to deliver the perk you were promised.</p>\r\n<p>&nbsp;</p>\r\n<ol start=\"5\">\r\n<li>Internet Access.</li>\r\n</ol>\r\n<p>You are responsible for any Internet connection and telecommunication fees and charges that you incur when accessing the Site and/or the Service.</p>\r\n<p>&nbsp;</p>\r\n<ol start=\"6\">\r\n<li>Accounts.</li>\r\n</ol>\r\n<p>To use certain portions of the Site and Service, you will be directed to register on the Site and create a user profile or account (Account). Eligibility is limited to persons equal to or over the age of 13, or to persons who have reached the age of majority in their countries of residence. Void in countries on the United States list of embargoed countries. As part of the registration process, you may be asked to submit your name, address, email address, date of birth and/or similar information and to select a password. You agree that all information you provide to Omaze for purposes of creating an account (Registration Information) will be true, accurate, current and complete and your failure to provide such information shall constitute a breach of this ToU and may result in the immediate termination of your Account. You shall (i) promptly update your Registration Information to keep it true, accurate, current and complete; and (ii) maintain the confidentiality of your password.</p>\r\n<p><br />In creating an Account, you shall not (a) select or use the email address or user name of another person with the intent to impersonate that person, (b) use a name subject to the rights of any other person without authorization, (c) use an email address or user name that is profane, offensive or otherwise inappropriate or (d) allow any other party to use your Account and/or password except as set forth herein.<br />You may not share or transfer any Account. You may not disclose your password to anyone. You agree to immediately notify Omaze by sending an email to&nbsp;service@omaze.com&nbsp;of any known or suspected unauthorized use(s) of your Account or any known or suspected breach of security, including loss, theft or unauthorized disclosure of your password. You understand and agree that you shall be liable for all activities that occur under any Account created for your use, even if such activities were not committed by you. Omaze is not responsible for any loss or damage arising from your failure to maintain the confidentiality of your password.</p>\r\n<p><br />Omaze employees, directors, managers and their respective immediate family members (i.e., parents, spouses, domestic partners, siblings and children) or any other person residing in the same household as an Omaze, employee, director or manager may not win the offered Campaigns.</p>\r\n<p>&nbsp;</p>\r\n<ol start=\"7\">\r\n<li>Termination of Account.</li>\r\n</ol>\r\n<p>You understand and agree that you have no ownership rights in your Account and Omaze may stop offering the Service at any time. Further, Omaze may cancel your Account, delete all of your Registration Information and any other information you have provided through the Site (collectively, User Content) associated with your Account at any time, without notice, for any reason or no reason including, without limitation, your violation of this ToU. Omaze will not be liable for any damages or loss resulting from the removal of any User Content from the Site and/or the Service. You may cancel your Account at any time and cancellation will take effect immediately. Omaze reserves the right to temporarily or permanently restrict or block access to the Site and/or the Service to any users who have had their Accounts cancelled.</p>\r\n<p>&nbsp;</p>\r\n<ol start=\"8\">\r\n<li>Limited License to Use Site and Service.</li>\r\n</ol>\r\n<p>Subject to all of the terms and conditions of this ToU, Omaze hereby grants you a limited, non-exclusive, personal, non-sublicensable, non-assignable license to access and use the Site and Service. The Site and Service may only be used for personal and non-commercial purposes and must at all times be used in accordance with this ToU and rules, restrictions and/or documentation set forth by Omaze from time to time. All modifications and enhancements to the Site and Service remain the sole property of Omaze. You agree not to license, create derivative works from, transfer, sell or re-sell any information, content, or services obtained from the Site. You understand that Omaze, in its sole discretion, may at any time for any reason suspend or terminate any license hereunder and disable the Site, or any part thereof including any Service, without prior notice. Omaze reserves the right to add or remove features or functions to the Site or Service at any time in its sole discretion. Notwithstanding anything to the contrary herein, you may not: (i) cause, permit or authorize the modification, creation of derivative works, translation, reverse engineering, decompiling, disassembling or hacking of the Site or Service; (iii) sell, assign, rent, lease, act as a service bureau, or grant rights in the Site or Service, including, without limitation, through sublicense, to any other entity without the prior written consent of Omaze; or (iv) make any false, misleading or deceptive statement or representation regarding Omaze and/or the Site or Service.</p>\r\n<p>&nbsp;</p>\r\n<ol start=\"9\">\r\n<li>Use of Site and Service.</li>\r\n</ol>\r\n<p>You agree that you will not, in connection with your use of the Site, or Service, violate any applicable law or regulation. Without limiting the foregoing, you agree not to (i) make available through the Site any material or information that infringes any copyright, trademark, patent, trade secret, or other right of any party (including rights of privacy or publicity); (ii) institute, assist, or become involved in any type of attack including, without limitation, denial of service attacks, upon the Site and/or the Service or otherwise attempt to disrupt the Site and/or the Service or any other person&rsquo;s use of the Site and/or the Service; or (iii) attempt to gain unauthorized access to the Site, Service, Accounts registered to other users, or the computer systems or networks connected to the Site and/or the Service. Furthermore, you may not use the Site to develop, generate, transmit or store information that: (a) is defamatory, harmful, abusive, obscene or hateful; (b) in any way obstructs or otherwise interferes with the normal performance of another person&rsquo;s use of the Site and/or the Service, (c) performs any unsolicited commercial communication not permitted by applicable law; (d) constitutes harassment or a violation of privacy or threatens other people or groups of people; (e) is harmful to children in any manner; (f) violates any applicable law, regulation or ordinance; (g) makes any false, misleading or deceptive statement or representation regarding Omaze and/or the Site or Service or (h) constitutes phishing, pharming or impersonates any other person, or steals or assumes any person&rsquo;s identity (whether a real identity or online nickname or alias).</p>\r\n<p><br />You agree that you will not (i) obtain or attempt to obtain any information from the Site including, without limitation, email information of other Account holders or other Software data; (ii) intercept, examine or otherwise observe any proprietary communications protocol used by the Site or Software, whether through the use of a network analyzer, packet sniffer or other device; (iii) use any type of bot, spider, virus, clock, timer, counter, worm, software lock, drop dead device, Trojan-horse routing, trap door, time bomb or any other codes, instructions or third-party software that is designed to provide a means of surreptitious or unauthorized access to, or distort, delete, damage or disassemble, the Site or Software; or (iv) or use any type of bot, software, or any other codes, instructions or third-party software that is designed enter you into a sweepstakes (or multiple sweepstakes) automatically or in any way that would provide you with an unfair advantage over individuals that enter manually. &nbsp;</p>\r\n<p><br />You understand that all data, information, text, software, graphics, video, messages, tags, or other materials (Content), whether publicly posted or privately transmitted, on the Site or through the use of the Site or the Service, are the sole responsibility of the person posting or transmitting such Content. Omaze does not control the Content posted on the Site or transmitted through the use of the Site or the Service and, as such, Omaze does not guarantee, and shall not be responsible for any deficiencies relating to, the accuracy, reliability or quality of such Content. Further, you acknowledge that Omaze may or may not pre-screen Content that is displayed on the Site or transmitted through the use of the Site or the Service. You understand that by visiting the Site or using the Service, you may be exposed to Content that you may consider to be offensive, indecent or objectionable. Under no circumstances will Omaze be liable in any way for any user-generated Content including, but not limited to, any errors or omissions in any Content, or any loss or damage of any kind incurred as a result of the use of any Content posted, emailed, transmitted or otherwise made available on the Site or through the use of the Site or the Service.</p>\r\n<p><br />The Site may provide forums and/or chat features enabling users to post user observations and comments. We cannot guarantee that other members or users will not use the ideas and/or information that you share. If you have ideas and/or information that you want to remain confidential and/or do not want others to use, do not post them via the Site. We shall have no responsibility to evaluate, use or compensate you for any ideas and/or information that you submit on the Site or through the use of the Site or Service.</p>\r\n<p><br />All comments, feedback, suggestions, ideas, and other submissions that you disclose, submit or offer to us in connection with your use of the Site or Service, such as your suggestions regarding improvements that we make to the Site or Service (collectively, Comments) will become our exclusive property. Such disclosure, submission or offer of any Comments shall constitute an assignment to us of all worldwide right, title and interest in all patent, copyright, trademark, and all other intellectual property and other rights whatsoever in and to the Comments and a waiver of any claim based on moral rights, unfair competition, breach of implied contract, breach of confidentiality, and any other legal theory relating to submissions. Thus, we will own exclusively all such right, title and interest and shall not be limited in any way in the use, commercial or otherwise, of any Comments. You should not submit any Comments to us if you do not wish to assign such rights to us. We are and will be under no obligation: (i) to maintain any Comments in confidence; (ii) to pay to you or any third party any compensation for any Comments; or (iii) to respond to any Comments. You are and shall remain solely responsible for the content of any Comments you make. By posting Comments or any other content, you warrant and represent that you own the rights to such or are otherwise authorized to post, distribute, display, perform, transmit, or otherwise distribute such Comments and content and grant us the right to do the same. You hereby irrevocably waive any claims based on moral rights and similar theories, if any.</p>\r\n<p><br />Your User Content, and the contents of all of your Comments and other online communications (including without limitation chat text, voice communications, IP addresses and your personal information) may be accessed and monitored as necessary to provide the Service and may be disclosed: (i) when we have a good faith belief that we are required to disclose the information in response to legal process (for example, a court order, search warrant or subpoena); (ii) to satisfy any applicable laws or regulations (iii) where we believe that the Site or Service is being used in the commission of a crime, including to report such criminal activity or to exchange information with other companies and organizations for the purposes of fraud protection and credit risk reduction; (iv) when we have a good faith belief that there is an emergency that poses a threat to the health and/or safety of you, another person or the public generally; and (v) in order to protect the rights or property of Omaze, including to enforce this ToU. By entering into this ToU, you hereby provide your irrevocable consent to such monitoring, access and disclosure.</p>\r\n<p><br />When accessing the Site you agree to obey the law and to respect the intellectual property rights of others. Your use of the Site is at all times governed by and subject to laws regarding copyright ownership and use of intellectual property. You agree not to upload, download, display, perform, transmit, or otherwise distribute any information or content in violation of any third party&rsquo;s copyrights, trademarks, or other intellectual property or proprietary rights. You shall be solely responsible for any violations of any relevant laws and for any infringements of third party rights caused by any content you provide or transmit, or that is provided or transmitted using your account. The burden of proving that any content does not violate any laws or third party rights rests solely with you.</p>\r\n<p><br />The Site and the Service are operated by Omaze in the United States. Those who choose to access the Site, and/or the Service from locations outside the United States do so on their own initiative and are responsible for compliance with applicable local laws.</p>\r\n<p>&nbsp;</p>\r\n<ol start=\"10\">\r\n<li>Third-Party Products.</li>\r\n</ol>\r\n<p>Third party services, content, information and products may be made available by Omaze on or through the Site (Third Party Products). Third Party Products are provided solely for the convenience of Site users and Omaze makes no representations or warranties regarding any Third Party Products and takes no responsibility and assumes no liability for any Third Party Products. Third Party Products are subject to the applicable terms and policies of the third parties that offer them.</p>\r\n<p>&nbsp;</p>\r\n<ol start=\"11\">\r\n<li>Hyperlinks.</li>\r\n</ol>\r\n<p>Links from the Site. The Site may contain links to websites operated by other parties. Omaze provides these links to other websites as a convenience and use of these sites is at your own risk. The linked sites are not under the control of Omaze, and Omaze is not responsible for the content available on the other sites. Such links do not imply Omaze&rsquo;s endorsement of information or material on any other site and Omaze disclaims all liability with regard to your access to and use of such linked websites.</p>\r\n<p><br />Links to the Site. You may not place a link to the Site on another website without our prior written consent and, without limiting the foregoing, you must adhere to Omaze&rsquo;s linking policy as follows: (i) the appearance, position and other aspects of the link may not be such as to damage or dilute the goodwill associated with Omaze and/or its licensors&rsquo; names and trademarks, (ii) the appearance, position and other attributes of the link may not create the false appearance that your organization or entity is sponsored by, affiliated with, or associated with Omaze, (iii) when selected by a user, the link must display the Site on full-screen and not within a frame on the linking site, and (iv) Omaze reserves the right to revoke its consent to the link at any time and in its sole discretion.</p>\r\n<p>&nbsp;</p>\r\n<ol start=\"12\">\r\n<li>Omaze Intellectual Property and Intellectual Property Infringement.</li>\r\n</ol>\r\n<p>The interfaces, content, arrangement and layout of the Site including, but not limited to, the Omaze trademark and logo, designs, text, artwork, graphics, images, buttons, user interfaces, information and other content, and any compilation of the foregoing (Omaze Intellectual Property) are the property of Omaze, except where otherwise noted, and are protected from copying, imitation, communication, or simulation under U.S. and international laws and may not be reproduced, modified, communicated, displayed, distributed, or transmitted without the prior written permission of Omaze. You understand and acknowledge that, by visiting the Site, you do not acquire or obtain by implication or otherwise, any license or right to use or make additional copies of any materials or information displayed on the Site. You agree not to display or use any Omaze Intellectual Property or third party content located on the Site in any manner not expressly permitted under this ToU.</p>\r\n<p><br />We respect the copyrights of others and expect our users to do the same. We have a policy of terminating users who repeatedly infringe the copyrights of others. If you learn or believe that the Site or Service or any information on the Site, including any Content, infringes upon any copyright or other intellectual property that you own or control, you may file a notice under our Intellectual Property Policy. In the event of any third party claim that the Site or Service infringes that third party&rsquo;s intellectual property rights, we will be solely responsible for the investigation, defense, settlement and discharge of any such intellectual property infringement claim.</p>\r\n<p>&nbsp;</p>\r\n<ol start=\"13\">\r\n<li>Disclaimer of Warranties.</li>\r\n</ol>\r\n<p>THE SITE, SOFTWARE AND THE SERVICE ARE PROVIDED ON AN AS IS AND AS AVAILABLE BASIS FOR YOUR USE, WITHOUT WARRANTIES OF ANY KIND, EITHER EXPRESS OR IMPLIED, INCLUDING WITHOUT LIMITATION, WARRANTIES OF SATISFACTORY QUALITY, MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE, TITLE, NON-INFRINGEMENT, AND THOSE ARISING FROM COURSE OF DEALING OR USAGE OF TRADE. OMAZE MAKES NO WARRANTY AS TO THE QUALITY, ACCURACY, COMPLETENESS OR RELIABILITY OF ANY CONTENT AVAILABLE THROUGH, OR THE PERFORMANCE OF, THE SITE, THE SOFTWARE OR THE SERVICE. YOU ARE RESPONSIBLE FOR VERIFYING ANY INFORMATION BEFORE RELYING ON IT. USE OF THE SITE, THE SOFTWARE AND/OR THE SERVICE IS AT YOUR SOLE RISK. OMAZE DOES NOT WARRANT THAT YOU WILL BE ABLE TO ACCESS OR USE THE SITE, THE SOFTWARE AND/OR THE SERVICE AT THE TIMES OR LOCATIONS OF YOUR CHOOSING; THAT THE OPERATION OF THE SITE, THE SOFTWARE OR THE SERVICE WILL BE UNINTERRUPTED OR ERROR-FREE; THAT DEFECTS WILL BE CORRECTED; THAT THE SITE, THE SOFTWARE OR THE SERVICE IS FREE OF VIRUSES OR OTHER HARMFUL COMPONENTS.<br />OMAZE PROVIDES NO WARRANTY OR GUARANTY OF ANY KIND THAT THE SITE, THE SOFTWARE OR THE SERVICE WILL MEET YOUR EXPECTATIONS OR REQUIREMENTS.</p>\r\n<p><br />Because some states or jurisdictions do not allow the disclaimer of implied warranties, the foregoing disclaimers may not apply to you.</p>\r\n<p>&nbsp;</p>\r\n<ol start=\"14\">\r\n<li>Limitation of Liability; Sole and Exclusive Remedy.</li>\r\n</ol>\r\n<p>TO THE MAXIMUM EXTENT PERMITTED BY LAW, IN NO EVENT SHALL OMAZE OR ANY OF ITS AFFILIATES, TOGETHER WITH ITS RESPECTIVE DIRECTORS, OFFICERS, SHAREHOLDERS, EMPLOYEES AND AGENTS, BE LIABLE WITH RESPECT TO ANY SUBJECT MATTER OF THIS TOU, WHETHER BASED IN CONTRACT, TORT (INCLUDING NEGLIGENCE), STRICT LIABILITY OR OTHER LEGAL OR EQUITABLE THEORY FOR (I) FOR ANY LOST OR CORRUPTED DATA, LOST PROFITS, LOSS OR DAMAGE TO ANY COMPUTER, MOBILE PHONE OR OTHER DEVICE OR ANY INDIRECT, INCIDENTAL, CONSEQUENTIAL, OR SPECIAL OR EXEMPLARY DAMAGES ARISING OUT OF OR IN ANY WAY CONNECTED WITH ACCESS TO OR USE OF THE SITE, THE SOFTWARE AND/OR THE SERVICE, EVEN IF OMAZE AND/OR ITS AFFILIATES HAVE BEEN ADVISED OF THE POSSIBILITY OF SUCH DAMAGES; (II) THE USE OR THE INABILITY TO USE THE SITE, THE SOFTWARE OR THE SERVICE; (III) UNAUTHORIZED ACCESS TO OR ALTERATION OF YOUR TRANSMISSIONS OR DATA; (IV) STATEMENTS OR CONDUCT OF ANY THIRD PARTY ON THE SITE; (V) ANY OTHER MATTER RELATING TO THE SITE, THE SOFTWARE OR THE SERVICE; OR (VI) THE COST OF PROCURING SUBSTITUTE GOODS, SERVICES OR TECHNOLOGY. TO THE FULL EXTENT PERMISSIBLE UNDER APPLICABLE LAW, OMAZE&rsquo;S AGGREGATE LIABILITY TO YOU OR ANY THIRD PARTY IN ANY CIRCUMSTANCE SHALL NOT EXCEED ONE HUNDRED DOLLARS ($100). YOU ACKNOWLEDGE AND AGREE THAT YOUR SOLE REMEDY FOR ANY PROBLEMS OR DISSATISFACTION WITH THE SITE, THE SOFTWARE OR ANY PORTION OF THE SERVICE IS TO TERMINATE YOUR ACCOUNT AND DISCONTINUE USE OF THE SITE, THE SOFTWARE AND THE SERVICE.</p>\r\n<p><br />Because some states or jurisdictions do not allow the exclusion or the limitation of liability for consequential or incidental damages, in such states or jurisdictions, the liability of Omaze and its affiliates shall be limited to the fullest extent permitted by law.</p>\r\n<p>&nbsp;</p>\r\n<ol start=\"15\">\r\n<li>Indemnification.</li>\r\n</ol>\r\n<p>You agree to defend, indemnify and hold Omaze, and its successors and assigns, and their respective officers, directors, affiliates, agents and employees, harmless from and against any and all claims, actions, proceedings and suits and all related liabilities, losses, damages, judgments, settlements, penalties, fines, costs and expenses (including, without limitation, reasonable attorney&rsquo;s fees and costs) arising out of or relating to (i) your use or misuse of the Site, the Software or the Service, (ii) your breach or alleged breach of this ToU, including, without limitation, a breach or alleged breach of any representation or warranty by you in this ToU; (iii) your violation of any law, rule, regulation or rights of others in connection with your use of the Site, the Software or the Service, or (iv) infringement, violation or misappropriation of any copyright, trade secret, or any other intellectual property rights or the violation of any property or privacy right arising from any of the User Content or Comments that you post on the Site or transmit through the Service.</p>\r\n<p>&nbsp;</p>\r\n<ol start=\"16\">\r\n<li>Governing Law; Jurisdiction.</li>\r\n</ol>\r\n<p>This ToU shall be is governed by, and will be construed under, the laws of the United States of America and the law of the State of California, without regard to choice of law principles. All disputes arising out of or related to your use of the Site, the Software and/or the Service shall be subject to the exclusive jurisdiction of the state and federal courts located within Los Angeles County, California and you agree to submit to the personal jurisdiction of such courts.</p>\r\n<p>&nbsp;</p>\r\n<ol start=\"17\">\r\n<li>General.</li>\r\n</ol>\r\n<p>17.1. Amendments/Revisions. This ToU may only be amended and/or revised in writing by Omaze (including by publishing such revisions by Omaze on the Site.</p>\r\n<p><br />17.2. Relationship of Parties. You agree that no joint venture, partnership, employment, or agency relationship exists between you and Omaze as a result of this ToU or your use of the Site, the Software or the Service.</p>\r\n<p><br />17.3. Assignment. Omaze may assign this ToU, in whole or in part, to any person or entity at any time with or without your consent. You may not assign this ToU without Omaze\'s prior written consent, and any unauthorized assignment by you shall be null and void.</p>\r\n<p><br />17.4. Severability. If any of the provisions of this ToU is found to be invalid or unenforceable, then that provision will be construed in a manner consistent with applicable laws to reflect, as nearly as possible, the original intentions of the parties, and the remaining provisions shall remain in full force and effect.</p>\r\n<p><br />17.5. Attorneys\' Fees. In the event any litigation is brought by either party in connection with this ToU, the prevailing party in such litigation shall be entitled to recover from the other party all the reasonable costs, attorneys\' fees and other expenses incurred by such prevailing party in the litigation.</p>\r\n<p><br />17.6. No Waiver. Our failure to enforce any provision of this ToU shall in no way be construed to be a present or future waiver of such provision, nor in any way affect the right of any party to enforce each and every such provision thereafter. The express waiver by us of any provision, condition or requirement of this ToU shall not constitute a waiver of any future obligation to comply with such provision, condition or requirement.</p>\r\n<p><br />17.7. Notices. All notices given by you or required under this ToU shall be in writing and addressed to: Omaze, Inc, P.O. Box 866, 9942 Culver Blvd, Culver City, CA 90232, Attn: Omaze Customer Service.</p>\r\n<p><br />17.8. Equitable Remedies. You hereby agree that Omaze would be irreparably damaged if the terms of this ToU were not specifically enforced, and therefore you agree that we shall be entitled, without bond, other security, or proof of damages, to appropriate equitable remedies with respect to breaches of this ToU, in addition to such other remedies as we may otherwise have available to us under applicable laws.</p>\r\n<p><br />17.9. Entire Agreement. This ToU, including the documents expressly incorporated by reference, constitutes the entire agreement between you and us with respect to the Site, the Software and the Service and supersedes all prior or contemporaneous communications, whether electronic, oral or written, between you and us with respect to the Site, the Software and/or the Service.</p>\r\n<p>&nbsp;</p>\r\n<ol start=\"18\">\r\n<li>Prize wheel.</li>\r\n</ol>\r\n<p>18.1 Wheel spins will be offered, subject to Omaze&rsquo;s discretion, either (a) at no cost; and/or (b) as a thank you for donations made. Entry multipliers may not be applied towards wheel spins. VOID WHERE PROHIBITED.</p>\r\n<p><br />18.2. Allow up to 8 weeks to receive certain rewards. Reward fulfillment may require additional information and processing. All information collected is subject to the privacy policy stated on Omaze.com.</p>\r\n<p><br />All questions and concerns regarding this ToU should be directed to&nbsp;service@omaze.com</p>', NULL, '2020-07-04 02:57:34');
INSERT INTO `pages` (`id`, `page_title`, `page_content`, `created_at`, `updated_at`) VALUES
(3, 'Exo Official Rules', '<section class=\"row\">\r\n<section class=\"row\">\r\n<section class=\"rules_section\">\r\n<p><strong>LEGAL STUFF:</strong><br />Omaze provides a fundraising platform that leverages the power of storytelling and technology to radically change charitable giving. Among the prizes offered to benefit worthy causes, some incredible once-in-a-lifetime opportunities are donated by influencers and brands. Omaze.com allows almost anybody (see restrictions below) to enter a sweepstakes and have an equal chance of winning. Pretty cool, right? And it&rsquo;s legit, too. There are lots of laws in place to protect our donors and ensure everything&rsquo;s fair. So please enjoy these long, detailed, official rules so that you have all the information you need before entering any of the sweepstakes or campaigns advertised on our website.</p>\r\n<ul>A few things to note:\r\n<li>You can always enter any campaign for free (although we hope you&rsquo;ll consider showing some love to the charity offering the Prize&mdash;it is, after all, a great cause).</li>\r\n<li>Certain parts of these rules are required by different laws. To make sure you notice them, we use BIG, SCARY, BOLD CAPITAL LETTERS for those sections.</li>\r\n<li>These official rules apply to every sweepstakes campaign we run&mdash;but sometimes we also have extra information or requirements. In those cases, we publish extra rules on the campaign page. Usually those rules work with these, but occasionally, we may need to adjust some of these rules for that campaign. We&rsquo;ll tell you about those changes on the campaign page.</li>\r\n</ul>\r\n</section>\r\n<section class=\"rules_section\">\r\n<p><strong>HERE ARE THE BIG, BOLD, SCARY LETTERS:</strong></p>\r\n<p><strong>WHEN YOU MAKE A DONATION, WE GIVE YOU ENTRIES INTO THE DRAWING. IT&rsquo;S OUR WAY OF SAYING THANKS. CAMPAIGNS MAY ALSO INCLUDE CAMPAIGN PERKS THAT ARE GUARANTEED, IN ADDITION TO PRIZES THAT ARE REWARDED BY A RANDOM DRAWING. NO PURCHASE NECESSARY TO ENTER ANY SWEEPSTAKES.</strong></p>\r\n<p><strong>VOID WHERE OTHERWISE PROHIBITED OR RESTRICTED BY LAW. ALL FEDERAL, STATE AND LOCAL LAWS AND REGULATIONS APPLY.</strong></p>\r\n</section>\r\n<section class=\"rules_section\">\r\n<p><strong>HOW IT WORKS.</strong><br />Each campaign is a great big team effort. First, we (Omaze, Inc., or just &ldquo;Omaze&rdquo; to our friends) work with Charities Aid Foundation America (&ldquo;CAFA&rdquo;), a U.S. 501(c)(3) tax-exempt public charity, which receives all donations made through Omaze&rsquo;s online platform (&ldquo;Platform&rdquo;) and makes grants to awesome charitable causes (we call them each a &ldquo;Designated Grantee&rdquo;). See section 3 of the&nbsp;<a href=\"https://www.omaze.com/pages/terms\" target=\"_blank\" rel=\"noopener noreferrer\">Terms of Use</a>&nbsp;for more information on donations and CAFA&rsquo;s grantmaking process. In partnership with CAFA, our campaigns bring together Designated Grantees and often well-known companies, brands, talent and celebrities who can serve as prize providers (&ldquo;Prize Providers&rdquo;) and who allow the use of their logo and name on our Platform. The prizes (&ldquo;Prizes&rdquo;) are ones that almost anybody (see restrictions below) can enter to win.</p>\r\n<p>You don&rsquo;t have to make a donation to enter a sweepstakes, but if you do, we give you entries as a thank you. We may also offer certain guaranteed perks and incentives (&ldquo;Perks&rdquo;). Perks are not part of the sweepstakes&mdash;they&rsquo;re based on donations.</p>\r\n</section>\r\n<section class=\"rules_section\">\r\n<p><strong>HOW TO ENTER A SWEEPSTAKES.</strong><br />Omaze offers different ways to enter a sweepstakes, and it&rsquo;s really easy to do any of the methods of entry.</p>\r\n<p><em>To make a donation.</em><br /><br />Visit omaze.com, choose the fundraising campaign that speaks to you and feed your karma by completing the registration form.</p>\r\n<p><em>To enter for free.</em></p>\r\n</section>\r\n</section>\r\n</section>\r\n<section class=\"row\">\r\n<section class=\"row\">\r\n<section class=\"row\">\r\n<section class=\"row\">\r\n<section class=\"rules_section\">\r\n<p data-favro-document-key=\"50adbc12d777d26706fdf0e7\" data-pm-slice=\"1 1 [&quot;bullet_list&quot;,null,&quot;list_item&quot;,null]\"><span class=\"author\" data-authorid=\"CaeoGZRyQuuMDNsz3\">Go to the campaign page on omaze.com</span><span class=\"author\" data-authorid=\"CaeoGZRyQuuMDNsz3\">&nbsp;and scroll down the page. See the &ldquo;Enter Without Contributing&rdquo; section? Click it and fill out the form before the deadline.</span></p>\r\n</section>\r\n<section class=\"rules_section\"></section>\r\n<section class=\"rules_section\">\r\n<p><strong>ENTRY WEIGHTING.</strong><br />Equality matters to us at Omaze: we use a system so that entries are treated equally. Each free entry is automatically assigned 2,000 entries (equivalent to the donation entries you get when you donate $100). Regardless of how you enter, including by donation, for campaigns that start between December 13, 2019 and May 14, 2020, the maximum number of entries for any one person is 25,000 entries per person per campaign. For campaigns that start after May 14, 2020, the maximum number of entries for any one person is reduced to 6,000 entries per person per campaign.</p>\r\n</section>\r\n</section>\r\n</section>\r\n</section>\r\n</section>\r\n<section class=\"row\">\r\n<section class=\"rules_section\"></section>\r\n<section class=\"rules_section\">\r\n<p><strong>WHO CAN ENTER A CAMPAIGN?</strong></p>\r\n<p>We love everybody; however, some countries don&rsquo;t love sweepstakes. So, we have to restrict entries from those countries. This means that most campaigns are open to legal residents of the 50 United States and the District of Columbia, and most countries around the world, but they&rsquo;re void in all countries on the United States list of embargoed countries, as well as in countries where local laws prohibit entry into sweepstakes. We also may have to limit certain campaigns to specific countries. If we do so, we publish that in special rules on the campaign page.</p>\r\n<p>Also, to keep things fair, full-time and part-time employees of Omaze, CAFA, any Charity, or Prize Provider for the applicable campaign, and members of their household and immediate families (i.e., parents, spouses, domestic partners, siblings, and children), are not eligible to enter. Additionally, any individual that uses a bot, software, or any other codes, instructions or third-party software for the purpose of automatically entering into a sweepstakes (or multiple sweepstakes) or in any way that provides an unfair advantage over individuals that enter manually, will be disqualified from the sweepstakes they entered and all future sweepstakes, subject to Omaze&rsquo;s sole discretion.</p>\r\n<p>From time to time we may set limitations on how frequently someone can be eligible to win a Major or Minor prize within a specified time period. In those cases, a &ldquo;Major&rdquo; prize is listed as the Grand Prize of a particular sweepstakes. A &ldquo;Minor&rdquo; prize is any prize other than the Grand Prize.</p>\r\n<p>Individuals may not receive more than one Major prize within the same 18 month period. This limitation applies across all Omaze sweepstakes. Individuals may not receive more than one Minor prize within a particular sweepstakes. For a specific sweepstakes we may define Major / Minor prize differently or revise any prize limitation.</p>\r\n<p>Finally, sometimes your country may allow you to enter a sweepstakes but not allow you to receive a certain Prize. It&rsquo;s your responsibility to review any specific restrictions before claiming that Prize or making a donation.</p>\r\n<p>In all cases, campaigns are void where prohibited by law.</p>\r\n</section>\r\n<section class=\"rules_section\">\r\n<p><strong>WHEN CAN I ENTER A CAMPAIGN?</strong><br />The start and end date for each campaign is listed on the campaign page. Unless otherwise specified, we usually start campaigns at 12:00:01 A.M. Pacific Time (&ldquo;PT&rdquo;) and end at 11:59:59 P.M. PT on the days specified. We call this time period the &ldquo;Campaign Window&rdquo;.</p>\r\n</section>\r\n<section class=\"rules_section\">\r\n<p><strong>HOW DO I KNOW IF I WON?</strong></p>\r\n<p>Within 10 business days of campaign close, we&rsquo;ll use an automated random drawing process to draw a potential winner(s) for that campaign. A confirmation process, which may include a background check, will then take place to ensure the potential winner meets the legal standards required. Winner and, if applicable, their guest(s) agree to cooperate fully with Omaze in Omaze conducting any background check(s), which includes providing information requested by Omaze including, but not limited to, full legal names and addresses. If the Prize includes meeting a celebrity, meeting a public figure, or attending a special event and any background check indicates, in Omaze&rsquo;s sole discretion, that the potential winner or the potential winner&rsquo;s guest(s) pose a danger to or may harm the reputation of any person or entity involved in the sweepstakes, Omaze may disqualify said winner and move on to the next randomly drawn potential winner. Pending a positive outcome of the confirmation process, an Omaze representative will notify the potential winner via email and/or phone. The potential winner must respond within the time period designated in the notification, or Omaze may move on to another randomly drawn potential winner. Before confirming a potential winner as the winner, Omaze may require the potential winner to confirm their eligibility. Once that&rsquo;s done, the potential winner and guest(s) must execute and return all required documents within the time frame specified by Omaze. If you do not execute and return all required documents within the time frame specified by Omaze, you will forfeit the Prize and Omaze will move on to another randomly drawn potential winner.</p>\r\n<p>Travel companions are also required to sign a liability/publicity release prior to issuance of tickets. Additionally, travel companions/guests of the winner may be subject to a background check, which may impact their ability to participate in the prize.</p>\r\n</section>\r\n<section class=\"rules_section\">\r\n<p><strong>WHAT ARE THE RESTRICTIONS OR CONDITIONS ON A PRIZE?</strong></p>\r\n<p>We describe each Prize at the campaign page and in any special campaign rules, including the approximate retail value for that Prize. Look at the section called &ldquo;Stuff Our Lawyers Want You to Read&rdquo; for lots of details.</p>\r\n<p>Some Prizes have extra restrictions or conditions. We post these in the specific rules for that campaign, too. For all travel Prizes, you have to travel on the dates and itinerary specified by Omaze and all airfare is coach class and hotel accommodations are standard class, unless otherwise specified. Any meetings with celebrities are subject to security and background checks. For international travel, you are responsible for obtaining all necessary travel authorizations, visas, or other documentation. All other expenses are your responsibility. Travel restrictions, conditions and limitations may apply. The Prize value may vary depending on point of departure, travel dates and fare/rate fluctuations. And because stuff happens, we can&rsquo;t be responsible for any cancellations, delays, diversions or substitutions, or any act or omission of any third person with respect to the trip. Lost or stolen tickets, travel vouchers or certificates or similar items once they are in your possession, will not be replaced. Winner and guest must travel on same itinerary. If you or your guest are, in our opinion or the opinion of our partners, obnoxious, threatening, abusive, or harassing before or during the trip or Prize, Omaze and its partners reserve the right to deny or terminate the trip or Prize, in whole or in part, and move on to the next randomly drawn winner if the Prize has not yet been delivered.</p>\r\n<p>Your guest must be of legal age of majority in his/her jurisdiction of residence, or your child or legal ward (unless otherwise approved by us).</p>\r\n<p>If you live within a one hundred (100) mile radius of the site where the Prize is to be performed, we may provide ground transportation or a stipend for ground transportation instead. Additionally, any and all expenses not specified in the section titled &ldquo;Stuff our Lawyers Want You to Read&rdquo;, including, but not limited to, checked baggage fees, meals and gratuities, are the sole responsibility of the winner and the winner&rsquo;s guest(s).</p>\r\n<p>We spend a lot of time thinking up the most amazing Prizes possible, so, unless specified otherwise in the special campaign rules, Prizes can&rsquo;t be transferred or substituted, except that we can substitute a Prize of equal or greater value. Unless otherwise specified in the special campaign rules, in the event that a portion of a prize goes unused, it may not be substituted, transferred, or redeemed for cash.</p>\r\n<p>And you might not love taxes, but they&rsquo;re your responsibility and you have to pay them. We&rsquo;ll give you a W9 form so you can tell Uncle Sam what you owe. All winners that receive a Prize with an approximate retail value of $600 or more will be issued a Form 1099.</p>\r\n</section>\r\n<section class=\"rules_section\">\r\n<p><strong>WINNER PROMOTION</strong><br />By accepting the Prize, you agree that we can use your name, address (city and state), photograph, voice and/or other likeness and Prize information to tell everyone how awesome the Prize was. This means we can include you in advertising and trade and promotional materials for Omaze, in any form of media (including media that&rsquo;s not yet known), and that we can do so without any additional compensation. This only applies unless otherwise prohibited by law.</p>\r\n</section>\r\n<section class=\"rules_section\">\r\n<p><strong>HOW WE USE YOUR INFORMATION</strong></p>\r\n<p>We want to get to know you! And so do our Charities and Prize Providers. So when you enter a sweepstakes, we&rsquo;ll collect some information about you. Check out our privacy policy at&nbsp;<a href=\"https://www.omaze.com/privacy\">www.omaze.com/privacy</a>&nbsp;to see what we collect and how we use it. If you choose to enter a sweepstakes, you agree to our privacy policy. You can always choose not to enter, but where&rsquo;s the fun in that?</p>\r\n</section>\r\n<section class=\"rules_section\">\r\n<p><strong>SHOULDN\'T THERE BE MORE LEGAL STUFF?</strong></p>\r\n<p>We&rsquo;re glad you asked! In order to keep our lawyer&rsquo;s blood pressure within a reasonable range, we have to tell you the following:</p>\r\n<ul>\r\n<li>Sponsor, Prize Providers, Charities and Promotional Partners (the &ldquo;Released Parties&rdquo;) are not responsible for illegible, lost, late, incomplete, misdirected, or undeliverable email; or for any computer, telephone, satellite, cable, network, electronic or internet hardware or software malfunctions, failures, connections, or availability, or garbled, corrupt or jumbled transmissions, service provider/internet/website/use net accessibility, availability, or traffic congestion, or any technical, typographical, or other error, or unauthorized human intervention, or the incorrect or inaccurate capture of registration information, or the failure to capture, or loss of, any such information.</li>\r\n<li>By entering sweepstakes, you agree: (a) to be bound by these Official Rules and by all applicable laws and decisions of Sponsor, which shall be binding and final; (b) to waive any rights to claim ambiguity with respect to these Official Rules; (c) to waive all of your rights to bring any claim, action, or proceeding against any of the Released Parties in connection with that sweepstakes; and (d) to forever and irrevocably agree to release, defend, indemnify, and hold harmless each of the Released Parties from any and all claims, lawsuits, judgments, causes of action, proceedings, demands, fines, penalties, liability costs and expenses (including, without limitation, reasonable outside attorneys&rsquo; fees) that may arise in connection with your participation in a sweepstakes (including any Prize).</li>\r\n<li>In the event of a dispute regarding entries received from multiple users having the same email account, the authorized subscriber of the email account at the time of entry will be deemed to be the entrant and must comply with these rules. Authorized account subscriber is the natural person who is assigned the email address by the Internet Service Provider (ISP), online service provider, or other organization responsible for assigning email addresses.</li>\r\n</ul>\r\n</section>\r\n<section class=\"rules_section\">\r\n<p><strong>HOW DO I KNOW THIS IS FOR REAL?</strong><br />Just send a self-addressed stamped envelope to: Omaze, Inc., c/o Winner List, P.O. Box 866, 9942 Culver Blvd, Culver City, CA 90232 no later than 30 days after the end date of a Campaign Window, and we&rsquo;ll send you a list of the winners.</p>\r\n</section>\r\n<section class=\"rules_section\">\r\n<p><strong>WHAT IF WE DON\'T GET ALONG?</strong></p>\r\n<p>We love you. And we hope you always love us too. But if you don&rsquo;t, you agree that any and all disputes and disagreements between us will be governed by laws of the State of California and you will bring any claims only in the Federal and State courts located in Los Angeles, California. You also agree that unless you are prohibited from law in doing so, you promise you will bring any and all disputes, claims and causes of action against Omaze individually, without resort to any form of class action. Finally, unless the law prohibits you from doing so, you agree to waive the right to claim any damages whatsoever, including, but not limited to, punitive, consequential, direct, or indirect damages and participants further waive all rights to have damages multiplied or increased.</p>\r\n<p>&copy; 2020 Omaze, Inc. All Rights Reserved. These Official Rules may not be reprinted or republished in whole or in part without the prior written consent of Omaze.</p>\r\n</section>\r\n</section>', NULL, '2020-07-04 02:51:47');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('user1@gmail.com', '$2y$10$crwit/nXKoqAEHIf7qSqCOOlHksMk4iOufyQe8LnU.dflZtvyNghi', '2020-05-23 17:03:24'),
('limonrana515@gmail.com', '$2y$10$7Fn91itlkJYBgMnb7dcoZO0VoSedtsHmD9jD0.PI8tS8pB/FOkU3y', '2020-07-15 11:14:58'),
('limonrana513@gmail.com', '$2y$10$2GEQnsxSrqai9QWpirhv4uyWEls97AA0yX7.Gnj2sk54njDAzZQAu', '2020-07-15 12:43:11');

-- --------------------------------------------------------

--
-- Table structure for table `postcategories`
--

CREATE TABLE `postcategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_name_bn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `postcategories`
--

INSERT INTO `postcategories` (`id`, `category_name_en`, `category_name_bn`, `created_at`, `updated_at`) VALUES
(1, 'Coupon', 'কুপন', '2020-06-01 01:45:23', '2020-06-01 01:45:23'),
(2, 'Event', 'ইভেন্ট', '2020-06-01 01:47:29', '2020-06-01 01:51:29'),
(3, 'Sports', NULL, '2020-06-01 01:51:48', '2020-06-01 01:51:48'),
(4, 'Education', NULL, '2020-06-01 01:52:01', '2020-06-01 01:52:01'),
(5, 'National', NULL, '2020-06-01 01:52:12', '2020-06-01 01:52:12'),
(6, 'Laptop', NULL, '2020-06-01 01:52:25', '2020-06-01 01:52:51'),
(7, 'Smartphone', NULL, '2020-06-01 01:52:39', '2020-06-01 01:52:57'),
(8, 'Desktop', NULL, '2020-06-01 01:53:07', '2020-06-01 01:53:07'),
(11, 'Laptop Accessories', NULL, '2020-06-01 01:54:44', '2020-06-01 01:54:44'),
(12, 'Computer Accessories', NULL, '2020-06-01 01:54:51', '2020-06-01 01:54:51');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_title_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_title_bn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` bigint(20) DEFAULT NULL,
  `tag_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_description_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_description_bn` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `featured_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `post_title_en`, `post_title_bn`, `category_id`, `tag_name`, `slug`, `post_description_en`, `post_description_bn`, `video_link`, `featured_image`, `status`, `created_at`, `updated_at`) VALUES
(8, 'Best Laptop 2020', NULL, 6, 'HP Laptop,Dell Laptop,Gaming', 'best-laptop-2020', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', NULL, 'Best Laptop 2020', 'uploads/posts/AXMzmxqQyBPRfjb7rv5P3eWzFHdOlmb0D6ctKdExxiE5qtWgL7.jpg', 1, '2020-06-18 14:53:05', '2020-06-22 13:43:44'),
(9, 'Post Format - Image Gallery', NULL, 2, 'Official,New', 'post-format---image-gallery', '<p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla nunc dui, tristique in semper vel, congue sed ligula.</p>\r\n<p>Nam dolor ligula, faucibus id sodales in, auctor fringilla libero. Pellentesque pellentesque tempor tellus eget hendrerit. Morbi id aliquam ligula. Aliquam id dui sem. Proin rhoncus consequat nisl, eu ornare mauris tincidunt vitae. Nulla aliquet turpis eget sodales scelerisque. Ut accumsan rhoncus sapien a dignissim. Sed vel ipsum nunc. Aliquam erat volutpat. Donec et dignissim elit. Etiam condimentum, ante sed rutrum auctor, quam arcu consequat massa, at gravida enim velit id nisl.</p>\r\n<p>Nullam non felis odio. Praesent aliquam magna est, nec volutpat quam aliquet non. Cras ut lobortis massa, a fringilla dolor. Quisque ornare est at felis consectetur mollis. Aliquam vitae metus et enim posuere ornare. Praesent sapien erat, pellentesque quis sollicitudin eget, imperdiet bibendum magna. Aenean sit amet odio est.</p>\r\n<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Mauris quis est lobortis odio dignissim rutrum. Pellentesque blandit lacinia diam, a tincidunt felis tempus eget.</p>\r\n<p>Donec egestas metus non vehicula accumsan. Pellentesque sit amet tempor nibh. Mauris in risus lorem. Cras malesuada gravida massa eget viverra. Suspendisse vitae dolor erat. Morbi id rhoncus enim. In hac habitasse platea dictumst. Aenean lorem diam, venenatis nec venenatis id, adipiscing ac massa. Nam vel dui eget justo dictum pretium a rhoncus ipsum. Donec venenatis erat tincidunt nunc suscipit, sit amet bibendum lacus posuere. Sed scelerisque, dolor a pharetra sodales, mi augue consequat sapien, et interdum tellus leo et nunc. Nunc imperdiet eu libero ut imperdiet.</p>\r\n<p>Nunc varius ornare tortor. In dignissim quam eget quam sodales egestas. Nullam imperdiet velit feugiat, egestas risus nec, rhoncus felis. Suspendisse sagittis enim aliquet augue consequat facilisis. Nunc sit amet eleifend tellus. Etiam rhoncus turpis quam. Vestibulum eu lacus mattis, dignissim justo vel, fermentum nulla. Donec pharetra augue eget diam dictum, eu ullamcorper arcu feugiat.</p>\r\n<p>Proin ut ante vitae magna cursus porta. Aenean rutrum faucibus augue eu convallis. Phasellus condimentum elit id cursus sodales. Vivamus nec est consectetur, tincidunt augue at, tempor libero.</p>', NULL, 'Post Format - Image Gallery', 'uploads/posts/iSzM9CZH1NvS3mG21fESOixe0Y6dZCYZmSmapArNxaPQkOAk8j.jpg', 1, '2020-06-22 13:47:32', '2020-06-22 16:18:44'),
(10, 'Best Smart Phone 2020', NULL, 7, 'Gaming,Official,Hard Use,New', 'best-smart-phone-2020', '<p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla nunc dui, tristique in semper vel, congue sed ligula.</p>\r\n<p>Nam dolor ligula, faucibus id sodales in, auctor fringilla libero. Pellentesque pellentesque tempor tellus eget hendrerit. Morbi id aliquam ligula. Aliquam id dui sem. Proin rhoncus consequat nisl, eu ornare mauris tincidunt vitae. Nulla aliquet turpis eget sodales scelerisque. Ut accumsan rhoncus sapien a dignissim. Sed vel ipsum nunc. Aliquam erat volutpat. Donec et dignissim elit. Etiam condimentum, ante sed rutrum auctor, quam arcu consequat massa, at gravida enim velit id nisl.</p>\r\n<p>Nullam non felis odio. Praesent aliquam magna est, nec volutpat quam aliquet non. Cras ut lobortis massa, a fringilla dolor. Quisque ornare est at felis consectetur mollis. Aliquam vitae metus et enim posuere ornare. Praesent sapien erat, pellentesque quis sollicitudin eget, imperdiet bibendum magna. Aenean sit amet odio est.</p>\r\n<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Mauris quis est lobortis odio dignissim rutrum. Pellentesque blandit lacinia diam, a tincidunt felis tempus eget.</p>\r\n<p>Donec egestas metus non vehicula accumsan. Pellentesque sit amet tempor nibh. Mauris in risus lorem. Cras malesuada gravida massa eget viverra. Suspendisse vitae dolor erat. Morbi id rhoncus enim. In hac habitasse platea dictumst. Aenean lorem diam, venenatis nec venenatis id, adipiscing ac massa. Nam vel dui eget justo dictum pretium a rhoncus ipsum. Donec venenatis erat tincidunt nunc suscipit, sit amet bibendum lacus posuere. Sed scelerisque, dolor a pharetra sodales, mi augue consequat sapien, et interdum tellus leo et nunc. Nunc imperdiet eu libero ut imperdiet.</p>\r\n<p>Nunc varius ornare tortor. In dignissim quam eget quam sodales egestas. Nullam imperdiet velit feugiat, egestas risus nec, rhoncus felis. Suspendisse sagittis enim aliquet augue consequat facilisis. Nunc sit amet eleifend tellus. Etiam rhoncus turpis quam. Vestibulum eu lacus mattis, dignissim justo vel, fermentum nulla. Donec pharetra augue eget diam dictum, eu ullamcorper arcu feugiat.</p>\r\n<p>Proin ut ante vitae magna cursus porta. Aenean rutrum faucibus augue eu convallis. Phasellus condimentum elit id cursus sodales. Vivamus nec est consectetur, tincidunt augue at, tempor libero.</p>', NULL, 'v=cVEemOmHw9Y', 'uploads/posts/wXpkSHZ2SF1EOYTU2d71o7nwkzQkvUyHtJkoBAtMZwS2BPcJpU.png', 1, '2020-06-22 13:50:29', '2020-06-22 13:50:29'),
(11, 'Top 5 iPhone in 2020', NULL, 7, 'Gaming,Hard Use', 'top-5-iphone-in-2020', '<p>Donec egestas metus non vehicula accumsan. Pellentesque sit amet tempor nibh. Mauris in risus lorem. Cras malesuada gravida massa eget viverra. Suspendisse vitae dolor erat. Morbi id rhoncus enim. In hac habitasse platea dictumst. Aenean lorem diam, venenatis nec venenatis id, adipiscing ac massa. Nam vel dui eget justo dictum pretium a rhoncus ipsum. Donec venenatis erat tincidunt nunc suscipit, sit amet bibendum lacus posuere. Sed scelerisque, dolor a pharetra sodales, mi augue consequat sapien, et interdum tellus leo et nunc. Nunc imperdiet eu libero ut imperdiet.</p>\r\n<p>Nunc varius ornare tortor. In dignissim quam eget quam sodales egestas. Nullam imperdiet velit feugiat, egestas risus nec, rhoncus felis. Suspendisse sagittis enim aliquet augue consequat facilisis. Nunc sit amet eleifend tellus. Etiam rhoncus turpis quam. Vestibulum eu lacus mattis, dignissim justo vel, fermentum nulla. Donec pharetra augue eget diam dictum, eu ullamcorper arcu feugiat.</p>\r\n<p>Proin ut ante vitae magna cursus porta. Aenean rutrum faucibus augue eu convallis. Phasellus condimentum elit id cursus sodales. Vivamus nec est consectetur, tincidunt augue at, tempor libero.</p>', NULL, 'v=cVEemOmHw9Y', 'uploads/posts/YggE341byQYAiPcV6lT72MsOgWeK9UV5e7DnKecUqtHgqssG1T.jpg', 1, '2020-06-22 14:41:35', '2020-06-22 14:41:35');

-- --------------------------------------------------------

--
-- Table structure for table `posttags`
--

CREATE TABLE `posttags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tag_name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag_name_bn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posttags`
--

INSERT INTO `posttags` (`id`, `tag_name_en`, `tag_name_bn`, `created_at`, `updated_at`) VALUES
(1, 'HP Laptop', NULL, '2020-06-01 12:13:33', '2020-06-01 12:13:33'),
(2, 'Dell Laptop', NULL, '2020-06-01 12:13:45', '2020-06-01 12:13:45'),
(3, 'Gaming', NULL, '2020-06-01 12:13:59', '2020-06-01 12:13:59'),
(4, 'Official', NULL, '2020-06-01 12:14:12', '2020-06-01 12:14:12'),
(5, 'Hard Use', NULL, '2020-06-01 12:14:34', '2020-06-01 12:14:34'),
(6, 'Soft Use', NULL, '2020-06-01 12:14:46', '2020-06-01 12:14:46'),
(7, 'New', NULL, '2020-06-01 12:15:04', '2020-06-01 12:15:04'),
(8, 'Used', NULL, '2020-06-01 12:15:12', '2020-06-01 12:15:12');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `exp_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `exp_subtitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `exp_content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `end_time` date DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `charity_id` bigint(20) UNSIGNED DEFAULT NULL,
  `featured_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gallery_image_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gallery_image_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `info_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `info_content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `info_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `benefit_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `benefit_content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `benefit_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `legal_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `legal_content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `drawn` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `exp_title`, `exp_subtitle`, `exp_content`, `end_time`, `category_id`, `charity_id`, `featured_image`, `gallery_image_1`, `gallery_image_2`, `info_title`, `info_content`, `info_image`, `benefit_title`, `benefit_content`, `benefit_image`, `legal_title`, `legal_content`, `slug`, `seo_title`, `seo_slug`, `meta_description`, `meta_keywords`, `status`, `drawn`, `created_at`, `updated_at`) VALUES
(4, 'Win a 2020 Porsche Taycan Turbo and $20,000', 'Support Dempsey Center and', '<p><strong>YOU WILL:&nbsp;</strong></p>\r\n<ul>\r\n<li>\r\n<p>Drive off in Porsche&rsquo;s first all-electric vehicle, the 2020 Taycan Turbo (with the taxes and shipping costs covered!)</p>\r\n</li>\r\n<li>\r\n<p>Enjoy the performance and quality you know and love from Porsche, combined with the revolutionary technology that makes it electric</p>\r\n</li>\r\n<li>\r\n<p>Score $20,000 cash to spend however you want</p>\r\n</li>\r\n<li>\r\n<p>Have the option to go to LA (flights and hotel included) to receive the keys from Porsche-lover Patrick Dempsey&nbsp;</p>\r\n</li>\r\n</ul>\r\n<p><em>Your safety and peace of mind is our top priority, so we&rsquo;ll make sure to deliver this prize to the winner when it&rsquo;s safe.&nbsp;</em></p>', '2020-07-07', 33, 1, 'uploads/experience/a9Ajxgg5rymvVi1H5HckbjXmZMujJ6nxWW2dOkRLFfrlszkgd3.png', 'uploads/experience/8Y1Bf96phtqRgcJ91opQH4pqzaQ1ZKAGD12M4N0w3iY1Vts5Yv.png', 'uploads/experience/kp2hWrfiUC8SgHcUVj15Xca5PJKkj48aARgfb7LKTlLLAYBMc2.png', 'what you\'ll get', '<p>Say &ldquo;goodbye&rdquo; to the days of paying at the pump, and &ldquo;hello&rdquo; to your very own 2020 Porsche Taycan Turbo. This is Porsche&rsquo;s very first all-electric vehicle and it&rsquo;s setting the gold standard for performance, luxury and practicality. The best part of all is that you&rsquo;ll be one of the first to own one! We&rsquo;re even throwing in $20,000 cash for you to spend on whatever you want. And to really make this dream come true, you&rsquo;ll get the keys to your sweet new ride from Patrick Dempsey himself! Flights and hotel, plus the car&rsquo;s taxes and shipping costs are covered.&nbsp;</p>\r\n<ul>\r\n<li>Maximum Seating: 5 seats</li>\r\n<li>Transmission: Automatic</li>\r\n<li>Engine: 2 Permanent Magnet Synchronous Motors</li>\r\n<li>Drivetrain: AWD</li>\r\n<li>Exterior/Interior Color: Volcano Grey Metallic/Basalt Black &amp; Atacama Beige</li>\r\n<li>Charge Range: 201 miles&nbsp;</li>\r\n<li>Top Speed: 161 mph</li>\r\n<li>Maximum Horsepower: 616 HP (670 HP using Overboost Power with Launch Control)</li>\r\n<li>Maximum Torque: 626 lb-ft</li>\r\n<li>Acceleration: 0-60 mph in 3 seconds</li>\r\n<li>MSRP (Car + Cash): $200,000</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<div class=\"oz-wysigyg__fame-callout\">\r\n<p>No donation or payment is necessary to enter or win this sweepstakes.</p>\r\n</div>', 'uploads/experience/wDeVmDFrsFdOcsejYNYEpL4anaP7B12syd7r206z2WWnla8y6d.png', 'who you\'ll help', '<p>The Dempsey Center is committed to making life better for people managing the impact of cancer, including cancer patients, survivors, caregivers and family members of all ages. Their services include oncology massage therapy, acupuncture, counseling and support groups, movement and fitness classes, and nutrition education. Your donation will help ensure all services are provided at no cost.</p>', 'uploads/experience/euAxBGngK5sFNdGfUpzXn21IfWyNGPiEMvMPwkgjHFxt8T0HPl.png', 'stuff our lawyers want you to read', '<p><strong>Winners:</strong></p>\r\n<p>You (&ldquo;Winner&rdquo;)</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Timing:</strong></p>\r\n<p>TBD</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Location:</strong></p>\r\n<p>TBD</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Sponsor:</strong></p>\r\n<p>Omaze, Inc. (&ldquo;Sponsor&rdquo;)</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Charity:</strong></p>\r\n<p>Dempsey Center (\"Charity\")</p>\r\n<p>&nbsp;</p>\r\n<p>All donations made in connection with a fundraising campaign are paid to Charities Aid Foundation of America (&ldquo;CAFA&rdquo;), an IRS-recognized, U.S. public charity whose mission is to make giving internationally and domestically safe, easy and effective for U.S. donors. CAFA prequalifies each Charity as an eligible recipient of CAFA grants. At the end of each fundraising campaign, so long as the Charity continues to qualify as an eligible recipient of CAFA grants, CAFA will make a grant to the Charity of the net proceeds of the fundraising campaign.*</p>', 'win-a-2020-porsche-taycan-turbo-and-$20000', 'Win a 2020 Porsche Taycan Turbo and $20,000', 'win-a-2020-porsche-taycan-turbo-and-$20000', 'Give a donation and get a car.', 'Car,Donate', 1, 1, '2020-06-29 03:05:21', '2020-07-14 00:48:06'),
(22, 'Win a 2020 Corvette Stingray Z51 and $40,000', 'Support Ronald Reagan UCLA Medical Center and', '<p><strong>YOU WILL:&nbsp;</strong></p>\r\n<ul>\r\n<li>\r\n<p>Be the proud owner of the sold-out 2020 Corvette Stingray Z51 (with the taxes and shipping costs covered!)</p>\r\n</li>\r\n<li>\r\n<p>Enjoy the power and precision of the first mid-engine model in Corvette&rsquo;s history</p>\r\n</li>\r\n<li>\r\n<p>Score $20,000 cash to spend however you want</p>\r\n</li>\r\n</ul>', '2020-08-26', 33, 4, 'uploads/experience/z3RAWAAXJCXa9IXkLFh4JKuLvyZ3i7GqmCKMByNTStwj6ruo9G.jpg', 'uploads/experience/UMyUGNEcUrvdHNr3tWPKkFPq1lGaloe5c1QlQLO6QSgnet4bq5.jpg', 'uploads/experience/qIyYQ5kKqDNuqistmZdGZbZLEjkpA9DPESBBCRacbM2iWLHOd4.jpg', 'what you\'ll get', '<p>The Corvette Stingray Z51 is the most exciting American-made muscle car in the past 50 years and the very first mid-engine model in Corvette&rsquo;s history. But the best part? It&rsquo;s all yours! This baby has the highest performance package and interior trim package available. We&rsquo;re talking perks like upgraded suspension, performance exhaust system and more. Its front trunk can store the removable hardtop and have extra space. Plus, we&rsquo;re hooking you up with $20,000 cash to spend however you want! The car&rsquo;s taxes and shipping costs are covered.&nbsp;</p>\r\n<ul>\r\n<li>Maximum Seating: 2 seats</li>\r\n<li>Transmission: Tremec 8-speed dual-clutch automatic</li>\r\n<li>Engine: 6.2 liter V8</li>\r\n<li>Drivetrain: Rear-wheel drive with Electronic Limited Slip Differential</li>\r\n<li>Exterior/Interior Color: Torch Red/Two-tone Black &amp; Adrenaline Red&nbsp;</li>\r\n<li>Top Speed: 184 mph</li>\r\n<li>Maximum Horsepower: 495 HP at 6,450 RPM</li>\r\n<li>Maximum Torque: 470 lb-ft at 5,150 RPM</li>\r\n<li>Acceleration: 0-60 mph in 2.8 seconds</li>\r\n<li>MSRP (Car + Cash): $100,725</li>\r\n<li>Cash Alt: $75,543</li>\r\n<li>Special Features: Brembo performance brakes, high performance and run-flat summer-only tires, Z51 performance exhaust, rear spoiler, 14-speaker Bose Performance Series sound system, 8-inch touchscreen infotainment system, wireless phone charging, rear and front-facing cameras, 8-way power seating with heating and more</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<div class=\"oz-wysigyg__fame-callout\">\r\n<p>No donation or payment is necessary to enter or win this sweepstakes.</p>\r\n</div>', 'uploads/experience/FNucWLfo5RPa0KnsaoKfb0ZkaR4fdlKdDLXFol1wkKU2Q6NsD9.jpg', 'who you\'ll help', '<p>Ronald Reagan UCLA Medical Center saved the lives of both our founder, Matt Pohlson, and Donut Media&rsquo;s editor in chief, James Pumphrey&mdash;and now we&rsquo;re joining forces to support this incredible hospital that means so much to us. Matt had flatlined and needed an ECMO machine (a system that provides cardiac and respiratory support, allowing the heart and lungs to rest prior to and during surgery), but he wouldn\'t survive the ambulance ride to the machine. So for the first time in Southern California, UCLA brought a mobile ECMO unit to a patient&hellip; and they saved Matt. Since then, the mobile ECMO has become a more common practice and has saved over 50 other people! Your contribution will help build out this program, fund a new UCLA Health Ambulance and support other UCLA Health System initiatives that saved Matt and James. 15% of all contributions will support the UCLA Medical Center. The remaining funds raised cover fees and other costs like the prize, taxes, shipping and more.</p>', 'uploads/experience/Gilak4sXw2XXXpopu1DXjb5sltX7SAMOByF0D2sZwVPm5PMCTI.jpg', 'stuff our lawyers want you to read', '<p><strong>Winners:<br /></strong>You (&ldquo;Winner&rdquo;)</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Sweepstakes Start Date:<br /></strong>Jun 30, 2020</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Deadline to Enter:<br /></strong>August 29, 2020 at 11:59pm PT</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Winner Announced:<br /></strong>On or around September 2, 2020</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Approximate Retail Value:<br /></strong>$100,725</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Timing:<br /></strong>TBD</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Location:<br /></strong>TBD</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Sponsor:<br /></strong>Omaze, Inc. (&ldquo;Sponsor&rdquo;)</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Designated Grantee:<br /></strong>Ronald Reagan UCLA Medical Center&nbsp;(\"Designated Grantee\")</p>\r\n<p>&nbsp;</p>\r\n<p>All donations made in connection with a fundraising campaign are paid to Charities Aid Foundation of America (&ldquo;CAFA&rdquo;), an IRS-recognized, U.S. public charity whose mission is to make giving internationally and domestically safe, easy and effective for U.S. donors. CAFA prequalifies each grantee that has been designated; &ldquo;Designated Grantee&rdquo;,&nbsp; as an eligible recipient of CAFA grants. At the end of each fundraising campaign, so long as the Designated Grantee continues to qualify as an eligible recipient of CAFA grants, CAFA will make a grant to the Designated Grantee of the net proceeds of the fundraising campaign.*</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Prize Provider:<br /></strong>Omaze, Inc. (\"Prize Provider\")</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Details</strong>: Winner will receive a 2020 Chevrolet Corvette Stingray Z51 and $20,000 USD.</p>\r\n<p>&nbsp;</p>\r\n<p>In the United States (US), the Grand Prize will be delivered with US sales tax, shipping fees, and registration fees, paid. If the winner is a US resident, Omaze will also provide 25% of the ARV, excluding any cash prize component, to the US winner to put towards any required US income taxes.</p>\r\n<p>&nbsp;</p>\r\n<p>In all other countries the Grand Prize will be shipped (net of all taxes) to the nearest deliverable location, at the Winner\'s expense. Any applicable import duties, registration costs, or further taxes or duties of any nature due in the destination country will be the responsibility of the Winner.</p>\r\n<p>&nbsp;</p>\r\n<p>Should the winner not wish to take delivery of the Grand Prize, the Winner may elect to take a cash alternative which is 75% of the ARV. Please note that no additional funds will be provided, if the cash alternative is elected.&nbsp; This specifically includes but is not limited to a US resident not receiving the 25% that would have been provided for taxes.</p>\r\n<p>&nbsp;</p>\r\n<p>Omaze reserves the right not to deliver a prize to certain countries. In such case, the winner will be required to take the cash alternative.</p>\r\n<p>&nbsp;</p>\r\n<p>The vehicle prize is to be provided on an &ldquo;as is&rdquo; basis without any representations and warranties whatsoever. Sponsor does not represent or warrant that the vehicle adheres to or is in compliance with any applicable country, state or federal safety, environmental and/or other standards and requirements in order for the vehicle to be legally operational or certified for use on public roadways. It is the sole responsibility of the winner to evaluate the vehicle and ensure that it satisfies all applicable standards and legal requirements for its intended use and operation.</p>\r\n<p>&nbsp;</p>\r\n<p>All third party names and trademarks are the property of their respective owners.&nbsp;This sweepstake is not sponsored, endorsed, or affiliated in any way with Chevrolet or their affiliates.&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Age to Enter</strong>: You must be at least 18 years old to win.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Ineligible Countries</strong>: Winners must not be residents of Belgium, Cuba, Iran, Iraq, Italy, North Korea, Singapore, Sudan, Syria or Thailand</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Eligibility Notes:</strong></p>\r\n<p>In certain countries, local rules and laws may restrict or prohibit the award of certain prizes or impose additional restrictions on participation. Entry is subject to all local laws. See our&nbsp;<a href=\"https://www.omaze.com/rules\">Sweepstakes Official Rules</a>&nbsp;for more details. Employees, officers, and directors of Sponsor, Designated Charity, or Prize Provider, and members of their immediate families and households, are not eligible to win.</p>\r\n<p>&nbsp;</p>\r\n<p>Individuals may not receive more than one grand prize within the same 18 month period. Individuals may not receive more than one minor prize within the same sweepstakes.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>How to Enter:<br /></strong>Visit Omaze.com to utilize any of our methods of entry.. See our&nbsp;<a href=\"https://www.omaze.com/rules\">Sweepstakes Official Rules</a>&nbsp;for more details. Odds of winning depend on the number of entries held.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Winner Confirmation Process:</strong></p>\r\n<p>Within 10 business days of campaign close, we&rsquo;ll use an automated random drawing process to draw a potential winner(s) for that campaign. A confirmation process, which may include a background check, will then take place to ensure the potential winner meets the legal standards required. Winner and, if applicable, their guest(s) agree to cooperate fully with Omaze in Omaze conducting any background check(s), which includes providing information requested by Omaze including, but not limited to, full legal names and addresses. If the Prize includes meeting a celebrity, meeting a public figure, or attending a special event and any background check indicates, in Omaze&rsquo;s sole discretion, that the potential winner or the potential winner&rsquo;s guest(s) pose a danger to or may harm the reputation of any person or entity involved in the sweepstakes, Omaze may disqualify said winner and move on to the next randomly drawn potential winner. Pending a positive outcome of the confirmation process, an Omaze representative will notify the potential winner via email and/or phone. The potential winner must respond within the time period designated in the notification, or Omaze may move on to another randomly drawn potential winner. Before confirming a potential winner as the winner, Omaze may require the potential winner to confirm their eligibility. Once that&rsquo;s done, the potential winner and guest(s) must execute and return all required documents within the time frame specified by Omaze. If you do not execute and return all required documents within the time frame specified by Omaze, you will forfeit the Prize and Omaze will move on to another randomly drawn potential winner.</p>\r\n<p><br />NO PURCHASE, PAYMENT, OR CONTRIBUTION NECESSARY TO ENTER OR WIN. Contributing will not improve chances of winning. Void where prohibited.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Transparency:</strong></p>\r\n<p>At Omaze, we believe fundraising should be about impact, not percentages. Our model allows us, in partnership with Charities Aid Foundation America (we call them CAFA), to really make a difference and disrupt the way society traditionally thinks about charitable giving.</p>\r\n<p>&nbsp;</p>\r\n<p>Here&rsquo;s how it works: Omaze and CAFA work together to offer incredible prizes and experiences that anyone can potentially win. You don&rsquo;t have to donate to enter, but if you do, your donation to CAFA is then used to make a charitable grant to a great cause, which we love. Omaze pays for everything that&rsquo;s needed to run the sweepstakes, which means the only ones taking a chance are the entrants (you!)&mdash;not the&nbsp; designated grantee. The organizations can spend less time worrying about raising funds, and instead focus their energy on doing awesome work.</p>\r\n<p>&nbsp;</p>\r\n<p>*Omaze invests in securing the prizes for certain campaigns like this one, so for these, from every dollar you donate, 15 cents is retained by CAFA, all of which is then used by CAFA to make a grant to the Designated Grantee. If there are multiple Designated Grantees then grants of equal share are made to each Designated Grantee. 70 cents is typically used to actually get the prize, process payments and advertise to awesome people like you (&nbsp;these campaigns require more significant marketing efforts by Omaze and do not rely (or rely to a much smaller degree) on the work and name of celebrities to help raise awareness and promote the campaign). The remaining amount of your dollar, approximately 15 cents goes to Omaze&mdash;it&rsquo;s used to cover the cost of providing and maintaining the technology and team that makes this all happen.</p>\r\n<p>&nbsp;</p>\r\n<p>The result? Causes get a grant with no risk and no overhead or investment, our lucky winners get awesome prizes, and everyone else gets to help a great cause and spread joy!</p>\r\n<p>&nbsp;</p>\r\n<p>To learn more about how we support causes in partnership with CAFA, see our&nbsp;<a href=\"https://www.omaze.com/pages/terms\">Terms of Use</a>.</p>', 'win-a-2020-corvette-stingray-z51-and-$40000', 'Win a 2020 Corvette Stingray Z51 and $40,000', 'win-a-2020-corvette-stingray-z51-and-$40000', 'Win a 2020 Corvette Stingray Z51 and $40,000', 'Car,Corvette Z51', 1, 0, '2020-06-29 21:10:23', '2020-06-29 23:44:31'),
(24, 'Win and Customize the Tiny Home of Your Dreams', 'Support PATH and', '<p><strong>YOU WILL:&nbsp;</strong></p>\r\n<ul>\r\n<li>\r\n<p>Win your very own tiny home built by Modern Tiny Living (up to a $100,000 value, plus the taxes are covered!)</p>\r\n</li>\r\n<li>\r\n<p>Fully customize the home of your dreams&mdash;whether you want to add solar panels, a party deck on the roof, cozy sleeping lofts or a home office&nbsp;</p>\r\n</li>\r\n<li>\r\n<p>Downsize without downgrading: Enjoy the highest quality craftsmanship, materials and appliances on the market</p>\r\n</li>\r\n</ul>\r\n<p><em>Your safety and peace of mind is our top priority, so we&rsquo;ll make sure to deliver this prize to the winner when it&rsquo;s safe.&nbsp;</em></p>', '2020-07-30', 34, 5, 'uploads/experience/RrtkQPLOoekxNQEmhiwZXskF7pIKcD27VaV5cWKk2Z6i8K3fep.png', 'uploads/experience/hzSK7qObaN3pg6HMyB4JMuuf9pjn1F19thUBRHXiyxkJGz9VWO.jpg', 'uploads/experience/Yumj4f1M1AjfacM4HMLsjsL7Vmy2e6G2E2XY8eOjKq5X1ZJj7e.jpg', 'what you\'ll get', '<p>Are you ready to become the architect of the life you want? You are? Good. Because you just scored a fully custom tiny home! You&rsquo;ll work with the amazing Modern Tiny Living team to create the perfect tiny home for you. That&rsquo;s right&mdash;tiny, one-of-a-kind and all yours. Want to add a rock climbing wall? Go green with solar panels and a greywater system? Fill your &ldquo;empty nest&rdquo; with hardwood floors and all the shiplap? The sky&rsquo;s the limit! Because a tiny home is about so much more than living tiny. It&rsquo;s your freedom on wheels. Your passive income. Your reminder to focus on who matters, no what. It&rsquo;s four walls, a roof and plenty of room for all your dreams. (And no need to worry about the taxes, we&rsquo;ve got those covered.)</p>\r\n<p>&nbsp;</p>\r\n<div class=\"oz-wysigyg__fame-callout\">\r\n<p>No donation or payment is necessary to enter or win this sweepstakes.</p>\r\n</div>', 'uploads/experience/7j0FVpjUO71pnIQCG5HAYfVKQMMoZtuzOd4YP5XPaYGKLcXSKC.png', 'who you\'ll help', '<p>PATH is on a mission to end homelessness, and now more than ever their work is saving lives. While the rest of California stays at home, those experiencing homelessness don&rsquo;t have anywhere to turn, and PATH will remain on the front lines of the COVID-19 crisis to help our most vulnerable. Simultaneously, PATH will continue their work toward ending homeless for as many Californians as possible. That&rsquo;s why your donation to this experience will help transform the existing first floor of PATH into a hub of vital support services for thousands of homeless individuals. And to commemorate your generosity toward this life-changing project, your name will be featured on the wall inside the hub once the renovation is done!&nbsp;&nbsp;</p>\r\n<p>The&nbsp;<strong>Omaze Community Hub</strong>&nbsp;will be a welcoming space that provides a center for employment preparation, placement assistance for those in need of permanent housing and so much more.</p>\r\n<p>Thanks to you, this incredible organization can continue to meet the critical needs of those they serve, and keep those in their care safe and healthy.</p>', 'uploads/experience/bklauhUjZC7JRd48GDXQUuN8SOGnFmPAlRTagVl4Undmm6Cdzj.png', 'stuff our lawyers want you to read', '<p><strong>Winners:<br /></strong>You (&ldquo;Winner&rdquo;)&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Sweepstakes Start Date:<br /></strong>April 7, 2020</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Deadline to Enter:<br /></strong>July 9, 2020 at 11:59pm PT</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Winner Announced:<br /></strong>On or around July 29, 2020</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Approximate Retail Value:<br /></strong>$100,000</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Timing:<br /></strong>TBD</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Location:<br /></strong>TBD</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Sponsor:<br /></strong>Omaze, Inc. (&ldquo;Sponsor&rdquo;)</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Designated Grantee:<br /></strong>PATH (\"Designated Grantee\")</p>\r\n<p>&nbsp;</p>\r\n<p>All donations made in connection with a fundraising campaign are paid to Charities Aid Foundation of America (&ldquo;CAFA&rdquo;), an IRS-recognized, U.S. public charity whose mission is to make giving internationally and domestically safe, easy and effective for U.S. donors. CAFA prequalifies each Designated Grantee as an eligible recipient of CAFA grants. At the end of each fundraising campaign, so long as the Designated Grantee&nbsp; continues to qualify as an eligible recipient of CAFA grants, CAFA will make a grant to the designated Grantee of the net proceeds of the fundraising campaign.*</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Prize Provider:<br /></strong>Omaze, Inc and Modern Tiny Living (\"Prize Provider\")</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Grand Prize Details:&nbsp;</strong>Winner will receive a custom tiny home built by Modern Tiny Living up to a $100,000 value.&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>Omaze will also provide 25% of the ARV, excluding any cash prize component, to the US winner to put towards any required US income taxes.</p>\r\n<p>&nbsp;</p>\r\n<p>All third party names and trademarks are the property of their respective owners.&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Age to Enter:&nbsp;</strong>You must be at least 18 years old to win.&nbsp;</p>\r\n<p><strong>Eligible Countries:&nbsp;</strong>You must be a US resident (Alaska and Hawaii excluded).</p>\r\n<p><strong>Eligibility Notes:</strong>&nbsp;In certain countries, local rules and laws may restrict or prohibit the award of certain prizes or impose additional restrictions on participation. Entry is subject to all local laws. See our&nbsp;<a href=\"https://www.omaze.com/rules\">Sweepstakes Official Rules</a>&nbsp;for more details. Employees, officers, and directors of Sponsor, Designated Grantee , or Prize Provider, and members of their immediate families and households, are not eligible to win.</p>\r\n<p>&nbsp;</p>\r\n<p>Individuals may not receive more than one grand prize within the same 18 month period. Individuals may not receive more than one minor prize within the same sweepstakes.</p>\r\n<p><strong>How to Enter:<br /></strong>Visit Omaze.com to utilize any of our methods of entry.. See our&nbsp;<a href=\"https://www.omaze.com/rules\">Sweepstakes Official Rules</a>&nbsp;for more details. Odds of winning depend on the number of entries held.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Winner Confirmation Process:</strong></p>\r\n<p>Within 10 business days of campaign close, we&rsquo;ll use an automated random drawing process to draw a potential winner(s) for that campaign. A confirmation process, which may include a background check, will then take place to ensure the potential winner meets the legal standards required. Winner and, if applicable, their guest(s) agree to cooperate fully with Omaze in Omaze conducting any background check(s), which includes providing information requested by Omaze including, but not limited to, full legal names and addresses. If the Prize includes meeting a celebrity, meeting a public figure, or attending a special event and any background check indicates, in Omaze&rsquo;s sole discretion, that the potential winner or the potential winner&rsquo;s guest(s) pose a danger to or may harm the reputation of any person or entity involved in the sweepstakes, Omaze may disqualify said winner and move on to the next randomly drawn potential winner. Pending a positive outcome of the confirmation process, an Omaze representative will notify the potential winner via email and/or phone. The potential winner must respond within the time period designated in the notification, or Omaze may move on to another randomly drawn potential winner. Before confirming a potential winner as the winner, Omaze may require the potential winner to confirm their eligibility. Once that&rsquo;s done, the potential winner and guest(s) must execute and return all required documents within the time frame specified by Omaze. If you do not execute and return all required documents within the time frame specified by Omaze, you will forfeit the Prize and Omaze will move on to another randomly drawn potential winner.</p>\r\n<p>Travel companions are also required to sign a liability/publicity release prior to issuance of tickets. Additionally, travel companions/guests of the winner may be subject to a background check, which may impact their ability to participate in the Prize.</p>\r\n<p><br />NO PURCHASE, PAYMENT, OR CONTRIBUTION NECESSARY TO ENTER OR WIN. Contributing will not improve chances of winning. Void where prohibited.&nbsp;</p>\r\n<p><strong>Transparency:</strong></p>\r\n<p>At Omaze, we believe fundraising should be about impact, not percentages. Our model allows us, in partnership with Charities Aid Foundation America (we call them CAFA), to really make a difference and disrupt the way society traditionally thinks about charitable giving.</p>\r\n<p>&nbsp;</p>\r\n<p>Here&rsquo;s how it works: Omaze and CAFA work together to offer incredible prizes and experiences that anyone can potentially win. You don&rsquo;t have to donate to enter, but if you do, your donation to CAFA is then used to make a charitable grant to a great cause, which we love. Omaze pays for everything that&rsquo;s needed to run the sweepstakes, which means the only ones taking a chance are the entrants (you!)&mdash;not the Designated Grantee . The&nbsp; organizations can spend less time worrying about raising funds, and instead focus their energy on doing awesome work.</p>\r\n<p>&nbsp;</p>\r\n<p>*Omaze also invests in securing the prizes for the typical certain Omaze Owned campaigns like this one, so for these, from every dollar you donate, 15 cents is retained by CAFA, all of which is then used by CAFA to make a grant to the associated Designated Grantee. If there are multiple charities,&nbsp; Designated Grantees then grants of equal share are made to each Designated Grantee. 70 cents is typically used to actually get the prize, process payments and advertise to awesome people like you (these campaigns require more significant marketing efforts by Omaze and do not rely (or rely to a much smaller degree) on the work and name of celebrities to help raise awareness and promote the campaign). The remaining amount of your dollar, approximately 15 cents&nbsp; of your dollar goes to Omaze&mdash;it&rsquo;s used to cover the cost of providing and maintaining the technology and team that makes this all happen.</p>\r\n<p>&nbsp;</p>\r\n<p>The result? Causes get a guaranteed grant with no risk and no overhead or investment, our lucky winners get awesome prizes, and everyone else gets to help a great cause and spread joy!&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>To learn more about how we support causes in partnership with CAFA, see our&nbsp;<a href=\"https://www.omaze.com/pages/terms\">Terms of Use</a>.</p>', 'win-and-customize-the-tiny-home-of-your-dreams', 'Win and Customize the Tiny Home of Your Dreams', 'win-and-customize-the-tiny-home-of-your-dreams', 'Win and Customize the Tiny Home of Your Dreams', 'Home,House', 1, 0, '2020-06-30 23:21:55', '2020-06-30 23:21:55'),
(25, 'Win a Weeklong Vacation in a Nantucket Beach House', 'Support Free Hugs Project and', '<p><strong>YOU AND 3 GUESTS WILL:</strong></p>\r\n<ul>\r\n<li>\r\n<p>Spend 7 days/6 nights at a vacation home steps from the beach on Nantucket (flights included!)</p>\r\n</li>\r\n<li>\r\n<p>Enjoy $2,000 to help you discover all of the island&rsquo;s charms&mdash;from whale watching and biking, to fresh lobster rolls and endless ice cream cones&nbsp;</p>\r\n</li>\r\n<li>\r\n<p>Support the Free Hugs Project&rsquo;s work helping the homeless community through COVID-19 and beyond</p>\r\n</li>\r\n</ul>\r\n<p><em>Your safety and peace of mind is our top priority, so we&rsquo;ll make sure this trip is scheduled when it&rsquo;s safe. You&rsquo;ll have until&nbsp;</em><strong><em>December 31, 2022</em></strong><em>&nbsp;to travel.</em></p>', '2020-08-06', 35, 6, 'uploads/experience/FNZ0S2p4YpU5WQJmkk9bEjVR9Hd1dPkb6NK13xMQsiwum076WP.png', 'uploads/experience/V0gR3Mm9Z9D6Vse3TuEZMd5mLEgz7VvFhS9Jxiviee4A7mBVx2.jpg', 'uploads/experience/vd2NUFw6IisZUZeAzynLJ7GfD5Zr8vU4eBsyUnXCaz0qHkcbz0.jpg', 'what you\'ll do', '<p>Home to gorgeous beaches, historic sites and lobster bloody mary&rsquo;s (!), Nantucket is the perfect summer getaway spot. And you&rsquo;ve scored a weeklong vacation to experience its charms for yourself! We&rsquo;re putting you and your three guests up in a lovely vacation home with easy beach access, plus giving you $2,000 to fully enjoy your chic week in the sun. Take a picturesque bike ride through the dunes. Visit the second oldest lighthouse in the US. Eat the best ice cream of your life at The Juice Bar. (The line is worth the wait. Trust us.) Or step out your door and head to the beach... just because you can. Flights and house rental included!</p>\r\n<p>&nbsp;</p>\r\n<div class=\"oz-wysigyg__fame-callout\">\r\n<p>No donation or payment is necessary to enter or win this sweepstakes.</p>\r\n</div>', 'uploads/experience/Ot7QorKCaoM59Uk6jEmQ4kHgueC7QTTKkKL1rB9qP14kQrBQRA.png', 'who you\'ll help', '<p>Founded by documentary filmmaker, motivational speaker and peace activist Ken E. Nwadike Jr. (aka &ldquo;Free Hugs Guy\"), the Free Hugs Project gained popularity when Nwadike made major news headlines for his peacekeeping efforts and de-escalation of violence during protests, riots and political rallies. Today, the Free Hugs Project is on a mission to spread love, inspire change and rebuild communities during times of crisis. Your generosity will help the Free Hugs Project support the homeless community with protective masks, hygiene kits, meals and other essentials during the COVID-19 pandemic and beyond.</p>', 'uploads/experience/jxSYixwdL1vTfzsgZzrDDSoP6cHvoVzm7ROUiaLVzeplgn0epz.png', 'stuff our lawyers want you to read', '<p><strong>Winners:<br /></strong>You (&ldquo;Winner&rdquo;) + 3 (&ldquo;Guests&rdquo;)&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Sweepstakes Start Date:<br /></strong>May 28, 2020</p>\r\n<p><strong>Deadline to Enter:<br /></strong>August 13, 2020&nbsp;at 11:59pm PT</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Winner Announced:<br /></strong>On or around&nbsp;September 2, 2020</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Approximate Retail Value:<br /></strong>$12,000</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Timing:<br /></strong>TBD; must be booked by December 31, 2022</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Location:<br /></strong>Nantucket, MA</p>\r\n<p><strong>Sponsor</strong>:<br />Omaze, Inc. (&ldquo;Sponsor&rdquo;)</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Designated Grantee</strong>:<br />Free Hugs Project&nbsp;(\"Charity\")</p>\r\n<p>All donations made in connection with a fundraising campaign are paid to Charities Aid Foundation of America (&ldquo;CAFA&rdquo;), an IRS-recognized, U.S. public Designated Grantee&nbsp; whose mission is to make giving internationally and domestically safe, easy and effective for U.S. donors. CAFA prequalifies each Designated Grantee as an eligible recipient of CAFA grants. At the end of each fundraising campaign, so long as the Designated Grantee&nbsp; continues to qualify as an eligible recipient of CAFA grants, CAFA will make a grant to theDesignated Grantee of the net proceeds of the fundraising campaign.*</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Prize Provider:</strong><br />Omaze, Inc.&nbsp;(\"Prize Provider\")</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Grand Prize Details</strong>:&nbsp;Winner and 3 guests will receive a 7 day/6 night trip to Nantucket, MA and a $2,000 USD stipend. Flights and hotel included.</p>\r\n<p>&nbsp;</p>\r\n<p>Omaze may permit Winner to receive a cash alternative prize in the amount of $9,000 (United States Dollars) in Winner&rsquo;s sole discretion (the &ldquo;Cash Option&rdquo;). If Winner elects the Cash Option, Winner will be solely responsible for all applicable taxes.</p>\r\n<p>&nbsp;</p>\r\n<p>All third party names and trademarks are the property of their respective owners.&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Age to Enter</strong>:&nbsp;You must be at least 16 years old to win.&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Ineligible Countries</strong>: Winners must not be residents of Belgium, Cuba, Iran, Iraq, Italy, North Korea, Singapore, Sudan, Syria or Thailand.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Eligibility Notes:</strong>&nbsp;Winners under 18 years of age must be accompanied by a parent or legal guardian as their Guest.&nbsp;Guests must be of legal age of majority in his/her jurisdiction of residence (and at least 18), unless Winner is the legal guardian of Guests and Guests are at least 5 years of age or older at the time of travel. In addition to Winner requirements (detailed below), Guests must complete and return a publicity and liability release prior to departure. If Winner is the legal guardian of Guests, Winner must execute and return all required documents on behalf of such child or legal ward.</p>\r\n<p>If Winner and/or Guests reside outside the country where experience will take place, Winner and/or Guests must have current, valid passports, and be able to travel to the experience location(s). If they are unable to travel to the experience location(s), they will forfeit the prize. In certain countries, local rules and laws may restrict or prohibit the award of certain prizes or impose additional restrictions on participation. Entry is subject to all local laws. See our&nbsp;<a href=\"https://www.omaze.com/rules\">Sweepstakes Official Rules</a>&nbsp;for more details. Employees, officers, and directors of Sponsor, Designated Grantee , or Prize Provider, and members of their immediate families and households, are not eligible to win.</p>\r\n<p>Individuals may not receive more than one grand prize within the same 18 month period. Individuals may not receive more than one minor prize within the same sweepstakes.</p>\r\n<p><strong>How to Enter:<br /></strong>Visit Omaze.com to utilize any of our methods of entry.. See our&nbsp;<a href=\"https://www.omaze.com/rules\">Sweepstakes Official Rules</a>&nbsp;for more details. Odds of winning depend on the number of entries held.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Winner Confirmation Process:</strong></p>\r\n<p>Within 10 business days of campaign close, we&rsquo;ll use an automated random drawing process to draw a potential winner(s) for that campaign. A confirmation process, which may include a background check, will then take place to ensure the potential winner meets the legal standards required. Winner and, if applicable, their guest(s) agree to cooperate fully with Omaze in Omaze conducting any background check(s), which includes providing information requested by Omaze including, but not limited to, full legal names and addresses. If the Prize includes meeting a celebrity, meeting a public figure, or attending a special event and any background check indicates, in Omaze&rsquo;s sole discretion, that the potential winner or the potential winner&rsquo;s guest(s) pose a danger to or may harm the reputation of any person or entity involved in the sweepstakes, Omaze may disqualify said winner and move on to the next randomly drawn potential winner. Pending a positive outcome of the confirmation process, an Omaze representative will notify the potential winner via email and/or phone. The potential winner must respond within the time period designated in the notification, or Omaze may move on to another randomly drawn potential winner. Before confirming a potential winner as the winner, Omaze may require the potential winner to confirm their eligibility. Once that&rsquo;s done, the potential winner and guest(s) must execute and return all required documents within the time frame specified by Omaze. If you do not execute and return all required documents within the time frame specified by Omaze, you will forfeit the Prize and Omaze will move on to another randomly drawn potential winner.</p>\r\n<p>Travel companions are also required to sign a liability/publicity release prior to issuance of tickets. Additionally, travel companions/guests of the winner may be subject to a background check, which may impact their ability to participate in the Prize.</p>\r\n<p><br />NO PURCHASE, PAYMENT, OR CONTRIBUTION NECESSARY TO ENTER OR WIN. Contributing will not improve chances of winning. Void where prohibited.&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Transparency:</strong></p>\r\n<p>At Omaze, we believe fundraising should be about impact, not percentages. Our model allows us, in partnership with Charities Aid Foundation America (we call them CAFA), to really make a difference and disrupt the way society traditionally thinks about charitable giving.</p>\r\n<p>Here&rsquo;s how it works: Omaze and CAFA work together to offer incredible prizes and experiences that anyone can potentially win. You don&rsquo;t have to donate to enter, but if you do, your donation to CAFA is then used to make a charitable grant to a great cause, which we love. Omaze pays for everything that&rsquo;s needed to run the sweepstakes, which means the only ones taking a chance are the entrants (you!)&mdash;not the Designated Grantee . The&nbsp; organizations can spend less time worrying about raising funds, and instead focus their energy on doing awesome work.</p>\r\n<p>&nbsp;</p>\r\n<p>*Omaze also invests in securing the prizes for the typical&nbsp; certain Omaze Owned campaigns like this one, so for these, from every dollar you donate, 15 cents is retained by CAFA, all of which is then used by CAFA to make a grant to the associated Designated Grantee. If there are multiple charities,&nbsp; Designated Grantees then grants of equal share are made to each Designated Grantee. 70 cents is typically used to actually get the prize, process payments and advertise to awesome people like you (these campaigns require more significant marketing efforts by Omaze and do not rely (or rely to a much smaller degree) on the work and name of celebrities to help raise awareness and promote the campaign). The remaining amount of your dollar, approximately 15 cents&nbsp; of your dollar goes to Omaze&mdash;it&rsquo;s used to cover the cost of providing and maintaining the technology and team that makes this all happen.</p>\r\n<p>&nbsp;</p>\r\n<p>In calculating net proceeds, we first account for the hard costs, which include the grand prize and secondary prizes as well as items like content, marketing and credit card transaction fees. After those are accounted for, eighty percent of the remaining net revenue (i.e., the net proceeds)&nbsp;is then used by CAFA to make a grant to the designated grantee, and twenty percent of the net revenue goes to Omaze, to support the team&rsquo;s work running the fundraiser.&nbsp;If there are multiple charities,&nbsp; Designated Grantees then grants of equal share are made to each Designated Grantee.&nbsp;</p>\r\n<p>The result? Causes get a guaranteed grant with no risk and no overhead or investment, our lucky winners get awesome prizes, and everyone else gets to help a great cause and spread joy!&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>To learn more about how we support causes in partnership with CAFA, see our&nbsp;<a href=\"https://www.omaze.com/pages/terms\">Terms of Use</a>.</p>', 'win-a-weeklong-vacation-in-a-nantucket-beach-house', 'Win a Weeklong Vacation in a Nantucket Beach House', 'win-a-weeklong-vacation-in-a-nantucket-beach-house', 'Win a Weeklong Vacation in a Nantucket Beach House', 'Travel,tour', 1, 0, '2020-06-30 23:28:05', '2020-06-30 23:28:05');
INSERT INTO `products` (`id`, `exp_title`, `exp_subtitle`, `exp_content`, `end_time`, `category_id`, `charity_id`, `featured_image`, `gallery_image_1`, `gallery_image_2`, `info_title`, `info_content`, `info_image`, `benefit_title`, `benefit_content`, `benefit_image`, `legal_title`, `legal_content`, `slug`, `seo_title`, `seo_slug`, `meta_description`, `meta_keywords`, `status`, `drawn`, `created_at`, `updated_at`) VALUES
(26, 'Play Football with the New York Giants in Your Backyard & Score a Super Bowl Ring', 'Support Robin Hood and', '<p><strong>YOU AND 3 FRIENDS WILL:</strong></p>\r\n<ul>\r\n<li>\r\n<p>Team up with Eli Manning, Michael Strahan, Phil Simms and Justin Tuck for a game of touch football in your own backyard*</p>\r\n</li>\r\n<li>\r\n<p>Be coached by team owners, John Mara and Steve Tisch, and officiated by legendary sportscasters Mike Tirico and Bob Costas</p>\r\n</li>\r\n<li>\r\n<p>Receive your own Super Bowl ring (just for the winner), take a photo with the Giants&rsquo; Super Bowl trophies and celebrate over a catered dinner</p>\r\n</li>\r\n</ul>\r\n<p><em>Your safety and peace of mind is our top priority, so this experience will be scheduled when it&rsquo;s safe to travel and convenient for our partners.</em></p>', '2020-09-23', 36, 7, 'uploads/experience/QCzKEnkHGdjXsPCjR2h1LZ9SpjdZgZKFmX9YhKa8HLh44Dl7G4.png', 'uploads/experience/ES7ZjFJ612uTmon5HFQX2HFleejAK2oBy2rJ4eyo7hGmqDBwS4.png', NULL, 'what you\'ll do', '<p>Are you ready for some (touch) football? You&rsquo;re about to live every Giants fan&rsquo;s dream and play with Super Bowl champions Eli Manning, Michael Strahan, Phil Simms and Justin Tuck on your home turf. And we mean that literally. The G-Men are headed to your home for the ultimate game of four-on-four with your friends. The coaches: John Mara and Steve Tisch. The referees: Mike Tirico and Bob Costas. As for the game? Anything can happen! Maybe you&rsquo;ll catch the football with your helmet. Or rack up four sacks. Or learn the Stomp You Out dance. No matter what, you&rsquo;ll celebrate over a catered team dinner, take a photo with all four of the Giants&rsquo; Super Bowl trophies and even be presented with your very own Super Bowl ring.&nbsp;</p>\r\n<p><em>*If you live outside the tri-state area, or don&rsquo;t have a backyard, the game will be played at the team&rsquo;s practice facility. Your flights and hotel will be covered!</em></p>\r\n<p>&nbsp;</p>\r\n<div class=\"oz-wysigyg__fame-callout\">\r\n<p>No donation or payment is necessary to enter or win this sweepstakes.</p>\r\n</div>', 'uploads/experience/mJpQjRaQBSUWD1r7SIJAi5UomdDU937zGuczU5WeQCdYzRENkA.png', 'who you\'ll help', '<p>Robin Hood is New York City&rsquo;s largest poverty-fighting organization. For over thirty years, they&rsquo;ve been finding, fueling and creating the most impactful and scalable solutions to lift families out of poverty in New York City. They&rsquo;re currently focused on raising funds for those hit hardest by COVID-19: the 1.8 million New Yorkers already living in poverty, and the many others who, overnight, found themselves on the brink of it. Robin Hood will deploy your support to vulnerable New Yorkers and the organizations on the frontlines that serve them during the COVID-19 pandemic and its aftermath.&nbsp;</p>', 'uploads/experience/9f3oklgvY5kJdQxb3FiUdE2iZGdxmYeoiKUW32nfErnVU1IXfk.png', 'stuff our lawyers want you to read', '<p><strong>Winners:<br /></strong>You (&ldquo;Winner&rdquo;) + 3 (&ldquo;Guests&rdquo;)&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Sweepstakes Start Date:<br /></strong>May 8, 2020</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Deadline to Enter:<br /></strong>August 4, 2020 at 11:59pm PT</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Winner Announced:<br /></strong>On or around August 19, 2020</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Approximate Retail Value:<br /></strong>$25,000</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Timing:<br /></strong>TBD</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Location:<br /></strong>TBD</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Sponsor:<br /></strong>Omaze, Inc. (&ldquo;Sponsor&rdquo;)</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Designated Grantee:<br /></strong>Robin Hood Foundation (\"Designated Grantee\")</p>\r\n<p>&nbsp;</p>\r\n<p>All donations made in connection with a fundraising campaign are paid to Charities Aid Foundation of America (&ldquo;CAFA&rdquo;), an IRS-recognized, U.S. public charity whose mission is to make giving internationally and domestically safe, easy and effective for U.S. donors. CAFA prequalifies each Designated Grantee as an eligible recipient of CAFA grants. At the end of each fundraising campaign, so long as the Designated Grantee&nbsp; continues to qualify as an eligible recipient of CAFA grants, CAFA will make a grant to the Designated Grantee&nbsp; of the net proceeds of the fundraising campaign.*</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Prize Provider:<br /></strong>Omaze and The New York Giants (\"Prize Provider\")</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Grand Prize Details:&nbsp;</strong>Eli Manning, Michael Strahan, Phil Simms and Justin Tuck will visit Winner&rsquo;s house to play a game of touch football with Winner and 3 Guests. Two Giants players will be co-captains of each team. Team owners John Mara and Steve Tisch will each be a team coach. The game will be officiated by sportscasters Mike Tirico and Bob Costas. After the game, the group will pose for a photo with all four Giants Championship trophies and then have dinner together in Winner&rsquo;s home. The winner will also receive a Giants Championship ring.&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>New York Giants players and owners and sportscasters are subject to availability.&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Age to Enter:</strong>&nbsp;You must be at least 18 years old to win.&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Eligibility Notes:&nbsp;</strong></p>\r\n<p>Winner must be a resident of the United States.&nbsp;</p>\r\n<p>Winner must live in the NYC tri-state area for the backyard football game to take place at the winner&rsquo;s house, subject to the approval of Omaze. If Winner does not live in the NYC tri-state area, and/or does not have a backyard, and/or Omaze deems the winner\'s house or backyard is not suitable for any reason, the entire experience will take place at the New York Giants practice facility instead. Date of experience to be determined by Omaze in its sole discretion.</p>\r\n<p>&nbsp;</p>\r\n<p>If the backyard game takes place at the New York Giants practice facility, Winner and 3 Guests will be flown out to New York and will stay at a 4-star hotel for 2 nights. Two hotel rooms will be provided.&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>The NYC tri-state area covers all five boroughs of New York City, Nassau and Suffolk County in Long Island, Westchester County, Bergen, Passaic and Hudson Counties in New Jersey, and Fairfield County in Connecticut.</p>\r\n<p>&nbsp;</p>\r\n<p>Each guest must be of legal age of majority in his/her jurisdiction of residence (and at least 18), unless Winner is the parent / legal guardian of Guest. No individual younger than 5 years of age may be a Guest. In addition to Winner requirements (detailed below), Guest must complete and return a publicity and liability release prior to departure. If a Guest is a minor, then the Winner must execute and return all required documents on behalf of such minor child.</p>\r\n<p>&nbsp;</p>\r\n<p>Entry is subject to all local laws. See our&nbsp;<a href=\"https://www.omaze.com/rules\">Sweepstakes Official Rules</a>&nbsp;for more details. Employees, officers, and directors of Sponsor, Designated Grantee , or Prize Provider, and members of their immediate families and households, are not eligible to win.</p>\r\n<p>&nbsp;</p>\r\n<p>Individuals may not receive more than one grand prize within the same 18 month period. Individuals may not receive more than one minor prize within the same sweepstakes.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>How to Enter:<br /></strong>Visit Omaze.com to utilize any of our methods of entry. See our&nbsp;<a href=\"https://www.omaze.com/rules\">Sweepstakes Official Rules</a>&nbsp;for more details. Odds of winning depend on the number of entries held.</p>\r\n<p><strong>Winner Confirmation Process:</strong></p>\r\n<p>Within 10 business days of campaign close, we&rsquo;ll use an automated random drawing process to draw a potential winner(s) for that campaign. A confirmation process, which may include a background check, will then take place to ensure the potential winner meets the legal standards required. Winner and, if applicable, their guest(s) agree to cooperate fully with Omaze in Omaze conducting any background check(s), which includes providing information requested by Omaze including, but not limited to, full legal names and addresses. If the Prize includes meeting a celebrity, meeting a public figure, or attending a special event and any background check indicates, in Omaze&rsquo;s sole discretion, that the potential winner or the potential winner&rsquo;s guest(s) pose a danger to or may harm the reputation of any person or entity involved in the sweepstakes, Omaze may disqualify said winner and move on to the next randomly drawn potential winner. Pending a positive outcome of the confirmation process, an Omaze representative will notify the potential winner via email and/or phone. The potential winner must respond within the time period designated in the notification, or Omaze may move on to another randomly drawn potential winner. Before confirming a potential winner as the winner, Omaze may require the potential winner to confirm their eligibility. Once that&rsquo;s done, the potential winner and guest(s) must execute and return all required documents within the time frame specified by Omaze. If you do not execute and return all required documents within the time frame specified by Omaze, you will forfeit the Prize and Omaze will move on to another randomly drawn potential winner.</p>\r\n<p>&nbsp;</p>\r\n<p>Travel companions are also required to sign a liability/publicity release prior to issuance of tickets. Additionally, travel companions/guests of the winner may be subject to a background check, which may impact their ability to participate in the Prize.</p>\r\n<p><br />NO PURCHASE, PAYMENT, OR CONTRIBUTION NECESSARY TO ENTER OR WIN. Contributing will not improve chances of winning. Void where prohibited.&nbsp;</p>\r\n<p><strong>Transparency:</strong></p>\r\n<p>At Omaze, we believe fundraising should be about impact, not percentages. Our model allows us, in partnership with Charities Aid Foundation America (we call them CAFA), to really make a difference and disrupt the way society traditionally thinks about charitable giving.</p>\r\n<p>Here&rsquo;s how it works: Omaze and CAFA work together to offer incredible prizes and experiences that anyone can potentially win. You don&rsquo;t have to donate to enter, but if you do, your donation to CAFA is then used to make a charitable grant to a great cause, which we love. Omaze pays for everything that&rsquo;s needed to run the sweepstakes, which means the only ones taking a chance are the entrants (you!)&mdash;not the Designated Grantee . The&nbsp; organizations can spend less time worrying about raising funds, and instead focus their energy on doing awesome work.</p>\r\n<p>&nbsp;</p>\r\n<p>*This means that for the typical campaign, from every dollar you donate, 60 cents is used by CAFA to make a grant to the associated charity. If there are multiple charities, then grants of equal share are made to each charity. Of the remaining 40 cents, 25 cents is typically used to pay for things like advertising, payment processing and the costs of making the campaign a success&mdash;including providing the prize. Then the last 15 cents goes to Omaze and is used to cover the cost of providing and maintaining the technology and team that makes this all happen.</p>\r\n<p>&nbsp;</p>\r\n<p>The result? Causes get a guaranteed grant with no risk and no overhead or investment, our lucky winners get awesome prizes, and everyone else gets to help a great cause and spread joy!&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>To learn more about how we support causes in partnership with CAFA, see our&nbsp;<a href=\"https://www.omaze.com/pages/terms\">Terms of Use</a>.</p>', 'play-football-with-the-new-york-giants-in-your-backyard-&-score-a-super-bowl-ring', 'Play Football with the New York Giants in Your Backyard & Score a Super Bowl Ring', 'play-football-with-the-new-york-giants-in-your-backyard-&-score-a-super-bowl-ring', 'Play Football with the New York Giants in Your Backyard & Score a Super Bowl Ring', 'Football', 1, 0, '2020-06-30 23:33:37', '2020-06-30 23:33:37');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `admin_id` int(11) NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `admin_id`, `avatar`, `phone`, `address_1`, `address_2`, `city`, `zip`, `state`, `country`, `created_at`, `updated_at`) VALUES
(1, 1, 'uploads/users/EimfxohnMsQcyhEPyYfMIszH899mI8eJiKUqje91dluCb502aX.jpg', '01764548224', 'Makeshower, Shahi-anayhola, Ghatail', NULL, 'Tangail', '1976', 'Dhaka', 'Bangladesh', NULL, '2020-07-06 17:26:01'),
(2, 5, 'uploads/users/UXMofBbhwwmXYVTYw8yyj8pHDn5rD5jSIrVsA41hD6rqwZZwV4.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-07-10 17:08:00', '2020-07-10 17:27:22'),
(3, 6, 'uploads/users/y7J08bWWDZKfEzQ32BbQrgwaZZD2JX9ck26zCB4KVRGnJtyQQD.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-07-10 17:33:26', '2020-07-10 17:33:26');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `admin_id` bigint(20) UNSIGNED NOT NULL,
  `posts` bigint(20) UNSIGNED DEFAULT NULL,
  `pages` bigint(20) UNSIGNED DEFAULT NULL,
  `winners` bigint(20) UNSIGNED DEFAULT NULL,
  `coupons` bigint(20) UNSIGNED DEFAULT NULL,
  `ecommerce` bigint(20) UNSIGNED DEFAULT NULL,
  `experience` bigint(20) UNSIGNED DEFAULT NULL,
  `orders` bigint(20) UNSIGNED DEFAULT NULL,
  `entry` bigint(20) UNSIGNED DEFAULT NULL,
  `drawn` bigint(20) UNSIGNED DEFAULT NULL,
  `theme_panel` bigint(20) UNSIGNED DEFAULT NULL,
  `users` bigint(20) UNSIGNED DEFAULT NULL,
  `settings` bigint(20) UNSIGNED DEFAULT NULL,
  `create_admin` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `admin_id`, `posts`, `pages`, `winners`, `coupons`, `ecommerce`, `experience`, `orders`, `entry`, `drawn`, `theme_panel`, `users`, `settings`, `create_admin`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '2020-07-10 22:53:12', '2020-07-10 22:53:12');

-- --------------------------------------------------------

--
-- Table structure for table `seos`
--

CREATE TABLE `seos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_author` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_tag` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_analytics` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fb_pixel` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seos`
--

INSERT INTO `seos` (`id`, `meta_title`, `meta_author`, `meta_tag`, `meta_description`, `google_analytics`, `fb_pixel`, `created_at`, `updated_at`) VALUES
(1, 'Exo United', 'Exo Team', '<meta name=\"google-site-verification\" content=\"cHhiEbHGR8fckpN3SmuS5aV3EyrLK7VZ7NpOqqJRs8g\" />', 'Exo United is a worldwide most popular sweepstake platform. Where you will find your best experience. We are giving 100% satisfaction to our donner. Giving gift our best one.', '<!-- Global site tag (gtag.js) - Google Analytics -->\r\n<script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-147518146-5\"></script>\r\n<script>\r\n  window.dataLayer = window.dataLayer || [];\r\n  function gtag(){dataLayer.push(arguments);}\r\n  gtag(\'js\', new Date());\r\n\r\n  gtag(\'config\', \'UA-147518146-5\');\r\n</script>', '<!-- Facebook Pixel Code -->\r\n<script>\r\n  !function(f,b,e,v,n,t,s)\r\n  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?\r\n  n.callMethod.apply(n,arguments):n.queue.push(arguments)};\r\n  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version=\'2.0\';\r\n  n.queue=[];t=b.createElement(e);t.async=!0;\r\n  t.src=v;s=b.getElementsByTagName(e)[0];\r\n  s.parentNode.insertBefore(t,s)}(window, document,\'script\',\r\n  \'https://connect.facebook.net/en_US/fbevents.js\');\r\n  fbq(\'init\', \'286798092563878\');\r\n  fbq(\'track\', \'PageView\');\r\n</script>\r\n<noscript><img height=\"1\" width=\"1\" style=\"display:none\"\r\n  src=\"https://www.facebook.com/tr?id=286798092563878&ev=PageView&noscript=1\"\r\n/></noscript>\r\n<!-- End Facebook Pixel Code -->', '2020-06-12 13:18:35', '2020-07-08 14:02:48');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `admin_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `provider`, `provider_id`, `email_verified_at`, `password`, `avatar`, `phone`, `address_1`, `address_2`, `city`, `zip`, `state`, `country`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Limon Rana', 'limonrana515@gmail.com', 'github', '66468313', NULL, NULL, 'https://avatars2.githubusercontent.com/u/66468313?v=4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-06-05 03:55:34', '2020-07-06 17:18:21'),
(2, 'New Customer', 'limonrana517@gmail.com', 'google', '104155304188120735569', NULL, NULL, 'https://lh3.googleusercontent.com/a-/AOh14Gh34G8fj_3K3eiLMK-vR8ZgVjAWnq-54JLN1uss', '2543523233', '1814  Emma Street', NULL, 'Lakeview', '79239', 'Texas', 'Bangladesh', NULL, '2020-06-05 04:21:31', '2020-07-10 07:30:37'),
(3, 'Limon Rana', 'user1@gmail.com', NULL, NULL, NULL, '$2y$10$fxDJ4RcakPfasSPo7M9wt.K7SUejagmCemS9QcS.37RJ8lD1CzIdW', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-06-05 04:27:36', '2020-06-05 04:27:36'),
(5, 'Md Rana Shiekh', 'limonrana512@gmail.com', 'google', '117849381215523988563', '2020-07-15 14:44:33', NULL, 'https://lh3.googleusercontent.com/a-/AOh14GhSacKOjBY14OR5KQSo92g7iFDbTW0X7tET2eDz', '01764548224', 'Bosila, Mohammodpur', 'Bosila, Mohammodpur', 'Dhaka', '1212', 'Dhaka', 'Bangladesh', NULL, '2020-06-08 13:10:38', '2020-07-15 14:44:33'),
(6, 'James N Dostal', 'rxdiscreetmedshop@mail.ru', NULL, NULL, NULL, '$2y$10$XsXU4ELbhmU50YN5rcT4gOyJo6.D2I1XA/9bhv6kdWVrSlzD1jI52', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-05-13 11:12:59', '2020-06-14 11:12:59'),
(7, 'Limon Rana', 'webcoder.rana515@gmail.com', 'google', '113119402774136485866', NULL, NULL, 'https://lh4.googleusercontent.com/-j6znQxWt3Ec/AAAAAAAAAAI/AAAAAAAAAAA/AMZuuclWsqw98TJN_d2SyzziQmjHMs-YpA/photo.jpg', '01622987205', 'Mirpur-12', NULL, 'Dhaka', '1207', 'Dhaka', 'Bangladesh', NULL, '2020-06-19 17:39:03', '2020-07-07 10:59:58'),
(8, 'Md Rana Test', 'limonrana513@gmail.com', NULL, NULL, '2020-07-15 12:21:04', '$2y$10$0W/9KfRvRvVQUcTvIjBM8.OrNZwfrWhURD6p.67wum4Cu4Nx43Tj.', NULL, '01845568990', 'Mirpur-10', NULL, 'Dhaka', '1209', 'Dhaka', 'Bangladesh', 'W5IbQHXS5H8CRwWLnNlmiOATP3Rcdt6Y7PswepTZcT8RaGkbejUlmGicdnOj', '2020-07-07 11:02:27', '2020-07-15 12:21:04');

-- --------------------------------------------------------

--
-- Table structure for table `winners`
--

CREATE TABLE `winners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `winner_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `exp_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `winner_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `exp_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `winner_content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `winner_review` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `winner_review_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `donation_title` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `donation_content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `featured_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gallery_image_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gallery_image_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `donation_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `winners`
--

INSERT INTO `winners` (`id`, `title`, `winner_name`, `exp_title`, `winner_address`, `exp_date`, `winner_content`, `winner_review`, `winner_review_title`, `donation_title`, `donation_content`, `slug`, `featured_image`, `gallery_image_1`, `gallery_image_2`, `donation_image`, `seo_title`, `seo_slug`, `meta_keywords`, `meta_description`, `created_at`, `updated_at`) VALUES
(1, 'Jeep Gladiator Rubicon', 'Ben S.', 'Win a 2020 Porsche Taycan Turbo and $20,000', 'Rigby, ID', '2020-08-26', '<h3>HERE&rsquo;S WHAT WENT DOWN:</h3>\r\n<p class=\"\">Ben comes from a family of Jeep lovers: &ldquo;My family has always loved Jeeps. The first pickup truck I ever drove was a Jeep. My grandpa owned them and so did my dad. They are just awesome machines!&rdquo;</p>\r\n<p class=\"\">And now he&rsquo;s the proud new owner of a gorgeous and fully updated 2020 Jeep Gladiator Rubicon!</p>\r\n<p class=\"\">What&rsquo;s one word to describe his new ride? &ldquo;Shiny &mdash; people stare when I go by.&rdquo;</p>\r\n<p class=\"\">Who&rsquo;s Ben most excited to drive around? &ldquo;My wife. We love going for drives and on dates.&rdquo;</p>\r\n<p class=\"\">What&rsquo;s his favorite thing about his new ride? &ldquo;The new car smell and its high &lsquo;this is so much fun&rsquo; factor!&rdquo;</p>\r\n<p class=\"\">Congrats Ben!</p>', 'I have always wanted to own a Jeep! Our family will have a great time taking it camping, fishing, or just out for a drive.', 'Ben', 'TEAM RUBICON', '<p>Team Rubicon unites the skills and experience of our nation\'s military veterans with first responders to rapidly deploy emergency response teams following natural disasters. Utilizing veterans\' unique skills increases the efficacy of their disaster response and provides veterans the chance to rediscover their sense of purpose, identity and community, aiding a healthy transition back to civilian life.</p>', 'jeep-gladiator-rubicon', 'uploads/winners/W0UVAORQpuIwaTFv25FzyGadEIeVp6FJIoaCtXReZYeE4pvAtS.jpg', 'uploads/winners/A9VoOLlJfYqREMEHq1Pzn2HNtn1VRw8Yb5eIpiC1CIutq3NJYM.jpeg', 'uploads/winners/cNhXVjdaYajB8wgnF1KVHMbUIDWQKhrOJdIVJ1Rde0Bqe69J0Y.jpg', 'uploads/winners/qUxxMrxPzy5oKaS40fflpsuaVy8aSW10JvB7gTxxvA8RL6nGzH.jpg', 'Jeep Gladiator Rubicon', 'jeep-gladiator-rubicon', 'Winner', 'Jeep Gladiator Rubicon', '2020-07-02 08:06:19', '2020-07-02 13:40:51'),
(3, 'Tesla® Model 3 Performance', 'Linda F.', 'Win a 2020 Corvette Stingray Z51 and $40,000', 'Madison, AL', '2020-08-26', '<h3>HERE&rsquo;S WHAT LINDA SAID:</h3>\r\n<p class=\"\">&ldquo;The whole experience really took me by surprise. The most memorable part was the thrill of trying out the acceleration for the first time. I&rsquo;ve never owned a car that had that much torque!&rdquo;</p>\r\n<p class=\"\">Check out the photos to see Linda and her new ride.</p>', 'Exo-united arranged for me to receive the car in my choice of color, and it was delivered right to my house by a friendly team!', 'Linda', 'GIVEPOWER', '<p>2.1 billion people lack access to clean water, but GivePower is on a mission to change that. GivePower is a nonprofit that uses its deep solar energy expertise to provide clean water, food security and light to communities in need around the world. They&rsquo;ve provided solar-powered electricity access to more than 400,000 people in 17 countries. They have powered over 2,700 schools and electrified remote ranger stations to help with wildlife conservation efforts.</p>', 'tesla®-model-3-performance', 'uploads/winners/KiOPvoUGw1Ck8Hx2iRaJyqCLMN9SqKdzE8QhRYwYKMp8irkIct.jpg', 'uploads/winners/Vc6NVdki0jtik91O1dsClwr4Kn6q2mrhFL01DRzKOf4pz4lqiP.jpg', 'uploads/winners/LQ6trI1k1mykBykuEYSxPbtH3JEYkQSWsrOVCuSW8Nde0A3jxD.jpg', 'uploads/winners/SldmVQ72WHvDKUlGnTtT0hwtjY9P99i7HXMpY1UpBJNalTaUZn.jpg', 'Tesla® Model 3 Performance', 'tesla®-model-3-performance', 'tesla', 'Tesla® Model 3 Performance', '2020-07-02 13:49:53', '2020-07-02 13:49:53'),
(4, 'Test Template', 'Rana', 'Play Football with the New York Giants in Your Backyard & Score a Super Bowl Ring', '215 N Aberdeen St #307b', '2020-09-23', '<h3>HERE&rsquo;S WHAT LINDA SAID:</h3>\r\n<p class=\"\">&ldquo;The whole experience really took me by surprise. The most memorable part was the thrill of trying out the acceleration for the first time. I&rsquo;ve never owned a car that had that much torque!&rdquo;</p>\r\n<p class=\"\">Check out the photos to see Linda and her new ride.</p>', 'Exo-united arranged for me to receive the car in my choice of color, and it was delivered right to my house by a friendly team!', 'Rana', 'GIVEPOWER', '<p>.1 billion people lack access to clean water, but GivePower is on a mission to change that. GivePo</p>', 'test-template', 'uploads/winners/LIecua0y02QMbodA1iXjOquNQ0yML7RwOQdcpz2ECHA7kvLNQL.jpg', 'uploads/winners/eNKhnjlFPJJ9b9k6wfrkxVln6V1uZ2QTJBI7XHfcxgEWPN1bsV.jpg', 'uploads/winners/TbzrA2G0AAN3wc44fN1ADBMh4RBF7iawjdBla7ovK2UuKs2PpK.jpg', 'uploads/winners/DPANwZ9CRIArQ0qcAgg2syFg4FTSCl21YFsZPlvB97ba2upAi4.jpg', 'Test Template', 'test-template', NULL, NULL, '2020-07-04 20:14:18', '2020-07-04 20:14:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `charities`
--
ALTER TABLE `charities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `drawns`
--
ALTER TABLE `drawns`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `entrylevels`
--
ALTER TABLE `entrylevels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footers`
--
ALTER TABLE `footers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `free_entries`
--
ALTER TABLE `free_entries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `headers`
--
ALTER TABLE `headers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homenexts`
--
ALTER TABLE `homenexts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homes`
--
ALTER TABLE `homes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `icons`
--
ALTER TABLE `icons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletters`
--
ALTER TABLE `newsletters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `postcategories`
--
ALTER TABLE `postcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posttags`
--
ALTER TABLE `posttags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seos`
--
ALTER TABLE `seos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `winners`
--
ALTER TABLE `winners`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `charities`
--
ALTER TABLE `charities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `drawns`
--
ALTER TABLE `drawns`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `entrylevels`
--
ALTER TABLE `entrylevels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `footers`
--
ALTER TABLE `footers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `free_entries`
--
ALTER TABLE `free_entries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `headers`
--
ALTER TABLE `headers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `homenexts`
--
ALTER TABLE `homenexts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `homes`
--
ALTER TABLE `homes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `icons`
--
ALTER TABLE `icons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `newsletters`
--
ALTER TABLE `newsletters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `postcategories`
--
ALTER TABLE `postcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `posttags`
--
ALTER TABLE `posttags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `seos`
--
ALTER TABLE `seos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `winners`
--
ALTER TABLE `winners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
