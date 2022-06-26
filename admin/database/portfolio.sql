-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 26, 2022 at 03:34 PM
-- Server version: 8.0.29
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `sub_title` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `details` text COLLATE utf8mb4_general_ci NOT NULL,
  `image` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `active_status` tinyint NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `title`, `sub_title`, `details`, `image`, `active_status`) VALUES
(7, 'Title no 07', 'Sub_title no 07', 'Details no 07', NULL, 0),
(8, 'Title 08', 'sub_title NO 08', 'Details NO 08 ', '1656006879.png', 0),
(9, 'Hello Bangladesh ', 'Bangladesh Jindabad', 'A lot of details here and there ', '1656065779.jpg', 0),
(10, 'Our Next title ', 'Sub title here ', 'Our Details here ', '1656245678.png', 1),
(11, 'Lorem ipsum dolor sit amet consectetur', 'adipisicing elit. Fugit deleniti, ut, harum voluptatum veritatis exercitationem ', 'quisquam excepturi facere ullam porro consequuntur ad ipsum molestias ab suscipit? Delectus mollitia, enim eos est quibusdam iure. Id voluptates cumque ad aut alias enim totam architecto nulla', '1656245896.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int NOT NULL,
  `category_name` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `active_status` tinyint NOT NULL DEFAULT '1' COMMENT '0=InActive, 1=Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `active_status`) VALUES
(1, 'Web Design ', 0),
(2, 'Web Development', 1),
(3, 'Graphic Design ', 1),
(4, 'Budget Scheduling', 0),
(5, 'Account Officer', 0),
(6, 'Web Designer', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact_messages`
--

CREATE TABLE `contact_messages` (
  `id` int NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `message` text COLLATE utf8mb4_general_ci NOT NULL,
  `active_status` tinyint NOT NULL DEFAULT '1' COMMENT '0=In Active, 1=Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_messages`
--

INSERT INTO `contact_messages` (`id`, `name`, `email`, `subject`, `message`, `active_status`) VALUES
(1, 'Harunur Rashid ', 'harun@gmail.com', 'kichuna akhono ', 'ki ar komu khali error khai', 0),
(2, 'Nahzad Faruk', 'nahzad@gmail.com', 'need support at this moment', 'dlaoierna gandorfiaeinrfa ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int NOT NULL,
  `contact_topic` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `contact_details` text COLLATE utf8mb4_general_ci NOT NULL,
  `icon_name` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `active_status` tinyint NOT NULL DEFAULT '1' COMMENT '0=In Active,1=Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `contact_topic`, `contact_details`, `icon_name`, `active_status`) VALUES
(1, 'Our new topic ', 'a doauod n adofuoadnf vnaodroe ', 'hammer design icon ', 1),
(2, 'Need Support', 'A lot of discussion about all things', 'hudai icon ', 0),
(3, 'Marketplace support ', 'I need market place support about fiverr and upwork', 'market icon name ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `designations`
--

CREATE TABLE `designations` (
  `id` int NOT NULL,
  `designation_name` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `active_status` tinyint NOT NULL DEFAULT '1' COMMENT '0=In Active, 1= Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `designations`
--

INSERT INTO `designations` (`id`, `designation_name`, `active_status`) VALUES
(2, 'Web Developer', 1),
(3, 'Graphic Designer', 1),
(4, 'CEO, Founder', 1),
(5, 'Web Designer', 1);

-- --------------------------------------------------------

--
-- Table structure for table `our_clients`
--

CREATE TABLE `our_clients` (
  `id` int NOT NULL,
  `clients_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `designation_id` int NOT NULL,
  `client_image` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `client_review` text COLLATE utf8mb4_general_ci NOT NULL,
  `active_status` tinyint NOT NULL DEFAULT '1' COMMENT '0=In Active, 1=Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `our_clients`
--

INSERT INTO `our_clients` (`id`, `clients_name`, `designation_id`, `client_image`, `client_review`, `active_status`) VALUES
(1, 'Albert Aienstain', 1, 'image03.jpg', 'kdaoir ejadkjfao asdfiaud aksdjcvfauidir dvnauidhf a adlsfoaid ', 0),
(2, 'Doglas Myuer', 3, '1656152670.', 'Hello worlds ', 0),
(3, 'Alex Hales', 2, '1656163666.jpg', 'hello hello all ', 1),
(4, 'Cris Gyle', 1, '1656163799.png', 'lorem ipsum dollor sit amet.', 1),
(5, 'Donald Trump', 3, 'image03.jpg', 'jasdiorfa pndasidrf anakideraswe ', 0),
(6, 'Doglas Honda', 2, '1656221307.png', 'hgfuytdyutyc', 1),
(7, 'Emanuel Macro ', 4, '1656244463.png', 'habi jabi habi jabi ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `our_projects`
--

CREATE TABLE `our_projects` (
  `id` int NOT NULL,
  `category_id` int NOT NULL,
  `project_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `project_link` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `project_thumb` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `active_status` tinyint NOT NULL DEFAULT '1' COMMENT '0=InActive,1=Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `our_projects`
--

INSERT INTO `our_projects` (`id`, `category_id`, `project_name`, `project_link`, `project_thumb`, `active_status`) VALUES
(5, 3, 'LMS ', 'www.devnahzad.com ', '1656069010.jpg', 0),
(6, 2, 'Our new project', 'www.devnahzad.com ', '1656072295.jpg', 0),
(7, 3, 'Notun Project', 'www.testlink.com', '1656072438.jpg', 0),
(8, 1, 'LMS ', 'www.devnahzad.com ', '1656074779.gif', 0),
(9, 2, 'LMS ', 'www.devnahzad.com ', '1656164074.png', 1),
(10, 3, 'Our new project', 'www.testlink.com', '1656164100.png', 1),
(11, 2, 'LMS ', 'www.devnahzad.com ', '1656175479.png', 0),
(12, 2, 'Our new project', 'www.testlink.com', '1656176093.png', 0),
(13, 3, 'New Project ', 'www.devnahzad.com ', '1656176355.png', 1),
(14, 2, 'Notun Project', 'www.app.sorobindu.com', '1656176397.gif', 0),
(15, 3, 'Notun Project', 'www.testlink.com', '1656176934.gif', 0),
(16, 2, 'Our new project', 'www.testlink.com', '1656177843.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `our_staff`
--

CREATE TABLE `our_staff` (
  `id` int NOT NULL,
  `staff_name` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `designation_id` int NOT NULL,
  `staff_image` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `twitter` text COLLATE utf8mb4_general_ci NOT NULL,
  `facebook` text COLLATE utf8mb4_general_ci NOT NULL,
  `linkdin` text COLLATE utf8mb4_general_ci NOT NULL,
  `instagram` text COLLATE utf8mb4_general_ci NOT NULL,
  `active_status` tinyint NOT NULL DEFAULT '1' COMMENT '0=In Active, 1= Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `our_staff`
--

INSERT INTO `our_staff` (`id`, `staff_name`, `designation_id`, `staff_image`, `twitter`, `facebook`, `linkdin`, `instagram`, `active_status`) VALUES
(1, 'Nahzad Faruk', 2, 'image01.jpg', 'twitter link', 'facebook link', 'linkdin link', 'instagram link', 0),
(2, 'Loyed Wilson', 4, '1656244789.png', 'twitter link thakbe ', 'facebook link thakbe ', 'linkdin link thakbe ', 'instagram link thakbe', 1),
(3, 'Lara Wilson ', 2, '1656244932.png', 'twitter link thakbe ', 'facebook link thakbe ', 'linkdin link thakbe ', 'instagram link thakbe', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `id` int NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `sub_title` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `details` text COLLATE utf8mb4_general_ci NOT NULL,
  `page_no` tinyint NOT NULL,
  `active_status` tinyint NOT NULL DEFAULT '1' COMMENT '0=In Active, 1= Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`id`, `title`, `sub_title`, `details`, `page_no`, `active_status`) VALUES
(1, 'Our First Title ', 'Sub TItle here What a shot mama', 'dfkahdirak  avdoauporji amnpaovduaop alnlvfaudorf ', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int NOT NULL,
  `service_name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `service_details` text COLLATE utf8mb4_general_ci NOT NULL,
  `icon_name` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `design_status` tinyint NOT NULL,
  `active_status` tinyint NOT NULL DEFAULT '1' COMMENT '0=InActive,1=Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_name`, `service_details`, `icon_name`, `design_status`, `active_status`) VALUES
(6, 'hello nahzad faruk', 'Hay, Bangladesh ', 'icon-gear', 1, 1),
(7, 'hello nahzad faruk', 'Our bangladesh is beautifull', 'icon-home', 1, 0),
(8, 'Lorem ipsum ', 'Bangladesh is best  ', 'Winning team', 1, 1),
(9, 'Eibar ga kaj ta holo ', 'ki koccho munshir mao', 'Hami ar ki komu', 1, 0);

--
-- Indexes for dumped tables
--

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
-- Indexes for table `contact_messages`
--
ALTER TABLE `contact_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `designations`
--
ALTER TABLE `designations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_clients`
--
ALTER TABLE `our_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_projects`
--
ALTER TABLE `our_projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_staff`
--
ALTER TABLE `our_staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact_messages`
--
ALTER TABLE `contact_messages`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `designations`
--
ALTER TABLE `designations`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `our_clients`
--
ALTER TABLE `our_clients`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `our_projects`
--
ALTER TABLE `our_projects`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `our_staff`
--
ALTER TABLE `our_staff`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
