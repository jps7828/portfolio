-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2022 at 12:58 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

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
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `about_us_id` int(11) NOT NULL,
  `about_us_heading` text NOT NULL,
  `about_us_title` text NOT NULL,
  `about_us_image_1` varchar(50) NOT NULL,
  `about_us_image_2` varchar(50) NOT NULL,
  `about_us_image_3` varchar(50) NOT NULL,
  `about_us_caption_1` text NOT NULL,
  `about_us_caption_2` text NOT NULL,
  `about_us_caption_3` text NOT NULL,
  `about_us_details` text NOT NULL,
  `about_us_status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`about_us_id`, `about_us_heading`, `about_us_title`, `about_us_image_1`, `about_us_image_2`, `about_us_image_3`, `about_us_caption_1`, `about_us_caption_2`, `about_us_caption_3`, `about_us_details`, `about_us_status`) VALUES
(2, '', 'Web Development', 'assets/web/images/about/logo.png', '', '', '																																						', '', '', '<p>Developing websites on various popular platforms like PHP (Codeigniter).</p>\r\n', 'Active'),
(3, '', 'Web Designing', '', '', '', '<i data-feather=\"book-open\"></i>', '', '', '<p>Web Designing</p>\r\n', 'Active'),
(4, '', 'Static 2 Dynamic', '', '', '', '<i data-feather=\"tv\"></i>', '', '', '<p>Converting static websites into the dynamic one, for easy content updates</p>\r\n', 'Active'),
(5, '', 'Mobile Optimised', '', '', '', '<i data-feather=\"twitch\"></i>', '', '', '<p>Well optimised mobile ready websites, relieving from the need of mobile apps.</p>\r\n', 'Active'),
(6, '', 'Lightening Websites', 'assets/web/images/about_us/200671image_1.png', '', '', '<i data-feather=\"wifi\"></i>', '', '', '<p>Always on edge websites ready to show in seconds even on slower internet.</p>\r\n', 'Active'),
(7, '', 'Personal Portfolio', 'assets/web/images/about_us/121696image_1.png', '', '', '<i data-feather=\"slack\"></i>', '', '', '<p>Developing and designing personal portfolio website for professional touch.</p>\r\n', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `background`
--

CREATE TABLE `background` (
  `background_id` int(11) NOT NULL,
  `background_name` varchar(30) NOT NULL,
  `background_image_1` varchar(100) NOT NULL,
  `background_status` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `background`
--

INSERT INTO `background` (`background_id`, `background_name`, `background_image_1`, `background_status`) VALUES
(1, 'about_us', 'assets/web/images/background_images/748969image_1.png', 'Active'),
(2, 'Team', 'assets/web/images/background_images/413059image_1.png', 'Active'),
(3, 'Products', 'assets/web/images/background_images/943813image_1.png', 'Active'),
(4, 'Skills', 'assets/web/images/background_images/887005image_1.png', 'Active'),
(5, 'E_portal', 'assets/web/images/background_images/577057image_1.png', 'Active'),
(6, 'contact_us', 'assets/web/images/background_images/410145image_1.png', 'Active'),
(7, 'resources', 'assets/web/images/background_images/649684image_1.png', 'Active'),
(8, 'Blog', 'assets/web/images/background_images/m4.jpg', 'Deactive'),
(9, 'Gallery', 'assets/web/images/background_images/359914image_1.png', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `blog_id` int(11) NOT NULL,
  `blog_title` varchar(100) NOT NULL,
  `blog_image_1` varchar(100) NOT NULL,
  `blog_description` text NOT NULL,
  `blog_date` date NOT NULL,
  `blog_link` varchar(100) NOT NULL,
  `blog_status` varchar(11) NOT NULL,
  `com_route_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`blog_id`, `blog_title`, `blog_image_1`, `blog_description`, `blog_date`, `blog_link`, `blog_status`, `com_route_id`) VALUES
(4, 'Latest Techniques of production management', 'assets/web/images/blogs/610349image_1.png', 'Jiribam is the western gate of the state and it is the largest and the most important Urban centre in the Western part of Manipur acting as a commercial and administrative centre. The town is situated at a distance of 223 km from Imphal city, the state capital. It enjoys heavy rainfall and the climate is moderately hot and humidious compared to other parts of the State.It is linked by NH-53, while passing through the breath of the state, connecting Silchar town of Cachar district in Assam and with rest of the country. Jiribam is the only rail-head in the state.Jribam is the commercial and sub-divisional headquarter. It is linked with all the important towns and city and many villages within and outside the state, acting as subsidiary commercial center in the state. A vast hinterland resources area for the economic development of the town, the district as well as the state should be materialized in modern India since its influence extends throughout the state. The topography of Jiribam town is plain interrupted by a ridge in the middle. Topography of Jiribam is the extension of Cachar valley. The plain has a formation of alluvial deposition by the Jiri river. And it is a fitting nomenclature that this sub-division is named after this resourceful Jiri river. The ridge runs north to south from the centre of the town and intermingles with the highland of Aglapur. On both the sides of the ridge there are alluvial plain. Most of the settlements are found on this highland. The plain area is fertile due to alluvial soil and is generally used for cultivation. The general slope of the town is from north to south.\r\n\r\nMuch variety of natural vegetation is found to keep the greenery of Jiribam& its environs constant. This region is favourable for the development of the town & its hinther land and for its future widespread.\r\nDrainage system of Jiribam region is greatly influenced by Jiri River, which flows North to South. And a number of nullahs & streamlets that joined each other forming small streams, which in turn joined Jiri rivers in various points.', '2021-03-18', 'latest-techniques-of-production-management', 'Active', 61),
(5, 'Best tools for production management', 'assets/web/images/blogs/680277image_1.png', '<p>Jiribam is the western gate of the state and it is the largest and the most important Urban centre in the Western part of Manipur acting as a commercial and administrative centre. The town is situated at a distance of 223 km from Imphal city, the state capital. It enjoys heavy rainfall and the climate is moderately hot and humidious compared to other parts of the State.It is linked by NH-53, while passing through the breath of the state, connecting Silchar town of Cachar district in Assam and with rest of the country. Jiribam is the only rail-head in the state.Jribam is the commercial and sub-divisional headquarter. It is linked with all the important towns and city and many villages within and outside the state, acting as subsidiary commercial center in the state. A vast hinterland resources area for the economic development of the town, the district as well as the state should be materialized in modern India since its influence extends throughout the state. The topography of Jiribam town is plain interrupted by a ridge in the middle. Topography of Jiribam is the extension of Cachar valley. The plain has a formation of alluvial deposition by the Jiri river. And it is a fitting nomenclature that this sub-division is named after this resourceful Jiri river. The ridge runs north to south from the centre of the town and intermingles with the highland of Aglapur. On both the sides of the ridge there are alluvial plain. Most of the settlements are found on this highland. The plain area is fertile due to alluvial soil and is generally used for cultivation. The general slope of the town is from north to south.</p>\r\n\r\n<p>Much variety of natural vegetation is found to keep the greenery of Jiribam&amp; its environs constant. This region is favourable for the development of the town &amp; its hinther land and for its future widespread.<br />\r\nDrainage system of Jiribam region is greatly influenced by Jiri River, which flows North to South. And a number of nullahs &amp; streamlets that joined each other forming small streams, which in turn joined Jiri rivers in various points.</p>\r\n', '2021-03-04', 'best-tools-for-production-management', 'Active', 62),
(6, 'marketing practices', 'assets/web/images/blogs/813677image_1.png', '<p>Jiribam is the western gate of the state and it is the largest and the most important Urban centre in the Western part of Manipur acting as a commercial and administrative centre. The town is situated at a distance of 223 km from Imphal city, the state capital. It enjoys heavy rainfall and the climate is moderately hot and humidious compared to other parts of the State.It is linked by NH-53, while passing through the breath of the state, connecting Silchar town of Cachar district in Assam and with rest of the country. Jiribam is the only rail-head in the state.Jribam is the commercial and sub-divisional headquarter. It is linked with all the important towns and city and many villages within and outside the state, acting as subsidiary commercial center in the state. A vast hinterland resources area for the economic development of the town, the district as well as the state should be materialized in modern India since its influence extends throughout the state. The topography of Jiribam town is plain interrupted by a ridge in the middle. Topography of Jiribam is the extension of Cachar valley. The plain has a formation of alluvial deposition by the Jiri river. And it is a fitting nomenclature that this sub-division is named after this resourceful Jiri river. The ridge runs north to south from the centre of the town and intermingles with the highland of Aglapur. On both the sides of the ridge there are alluvial plain. Most of the settlements are found on this highland. The plain area is fertile due to alluvial soil and is generally used for cultivation. The general slope of the town is from north to south.</p>\r\n\r\n<p>Much variety of natural vegetation is found to keep the greenery of Jiribam&amp; its environs constant. This region is favourable for the development of the town &amp; its hinther land and for its future widespread.<br />\r\nDrainage system of Jiribam region is greatly influenced by Jiri River, which flows North to South. And a number of nullahs &amp; streamlets that joined each other forming small streams, which in turn joined Jiri rivers in various points.</p>\r\n', '2021-03-01', 'marketing-practices', 'Active', 63);

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `clients_id` int(11) NOT NULL,
  `clients_name` varchar(20) NOT NULL,
  `clients_image_1` varchar(255) NOT NULL,
  `clients_caption` text NOT NULL,
  `clients_status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`clients_id`, `clients_name`, `clients_image_1`, `clients_caption`, `clients_status`) VALUES
(41, 'Nisarg', 'assets/web/images/clients/nisarg.png', '', 'Active'),
(42, 'Hillstar Nagaland', 'assets/web/images/clients/hillstarnagaland.png', '', 'Active'),
(43, 'JSM', 'assets/web/images/clients/jsm.png', '', 'Active'),
(44, 'Crisil', 'assets/web/images/clients/crisil.png', '', 'Active'),
(45, 'Fusion Craft', 'assets/web/images/clients/fusioncraft.png', '', 'Active'),
(46, 'PPV Kohima', 'assets/web/images/clients/ppvkohima.png', '', 'Active'),
(47, 'Mpisfurti', 'assets/web/images/clients/mpisfurti.png', '', 'Active'),
(48, 'Cane Processing', 'assets/web/images/clients/caneprocessing.png', '', 'Active'),
(49, 'Kauna', 'assets/web/images/clients/kpcimp.png', '', 'Active'),
(50, 'Woodbased', 'assets/web/images/clients/woodbasedfurniture.png', '', 'Active'),
(51, 'Pulse', 'assets/web/images/clients/pulse.png', '', 'Active'),
(52, 'Honey Manipur', 'assets/web/images/clients/honeyprocessingmanipur.png', '', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `com_basic_details`
--

CREATE TABLE `com_basic_details` (
  `com_basic_details_id` int(11) NOT NULL,
  `com_basic_site_name` varchar(100) NOT NULL,
  `com_basic_logo` text NOT NULL,
  `com_basic_logo_other` text NOT NULL,
  `com_basic_favicon` text NOT NULL,
  `com_basic_meta_title` text NOT NULL,
  `com_basic_meta_key` text NOT NULL,
  `com_basic_meta_description` text NOT NULL,
  `com_basic_email` varchar(50) NOT NULL,
  `com_basic_email_alt` varchar(50) NOT NULL,
  `com_basic_contact` varchar(15) NOT NULL,
  `com_basic_contact_alt` varchar(15) NOT NULL,
  `com_basic_address` text NOT NULL,
  `com_basic_address_alt` text NOT NULL,
  `com_basic_location` text NOT NULL,
  `com_basic_map` text NOT NULL,
  `com_basic_about_us` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `com_basic_rating` text NOT NULL,
  `com_basic_aim` text NOT NULL,
  `com_basic_video` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `com_basic_details`
--

INSERT INTO `com_basic_details` (`com_basic_details_id`, `com_basic_site_name`, `com_basic_logo`, `com_basic_logo_other`, `com_basic_favicon`, `com_basic_meta_title`, `com_basic_meta_key`, `com_basic_meta_description`, `com_basic_email`, `com_basic_email_alt`, `com_basic_contact`, `com_basic_contact_alt`, `com_basic_address`, `com_basic_address_alt`, `com_basic_location`, `com_basic_map`, `com_basic_about_us`, `com_basic_rating`, `com_basic_aim`, `com_basic_video`) VALUES
(1, 'JPS', 'assets/web/images/logo/logo.png', 'assets/web/images/logo/logo_other.png', 'assets/web/images/logo/favicon.png', 'JPS Portfolio Website Jitendra Pratap Singh', '', '<p>JPS Portfolio Website Jitendra Pratap Singh custom online resume cv document github</p>\r\n', 'jps7828@gmail.com', 'jit78285@gmail.com', '7828550802', '9575757055', '<p>Rajokari, South Delhi, Delhi, Bharat</p>\r\n', '<p>Harakhpur, Mandhata, Pratapgarh, Uttar Pradesh, Bharat</p>\r\n', '<p>Rajokari, South Delhi, Delhi, Bharat</p>\r\n', '<p><iframe height=\"600\" src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14023.990580455998!2d77.09744267603372!3d28.509718575187115!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d1938456789c7%3A0x45a757aa37e73026!2sAMBIENCE%20MALL%2C%20GURUGRAM!5e0!3m2!1sen!2sin!4v1640507543953!5m2!1sen!2sin\" style=\"border:0;\" width=\"800\"></iframe></p>\r\n', '<p>A Web Developer aspiring to become a core member of strategy building team, where I can utilize my knowledge, skills and attitude towards the growth of organization.</p>\r\n', '', 'A Web Developer aspiring to become a core member of strategy building team, where I can utilize my knowledge, skills and attitude towards the growth of organization.', '');

-- --------------------------------------------------------

--
-- Table structure for table `com_route`
--

CREATE TABLE `com_route` (
  `com_route_id` int(11) NOT NULL,
  `com_route_type` varchar(10) NOT NULL COMMENT 'Internal,External',
  `com_route_old_link` text NOT NULL,
  `com_route_new_link` text NOT NULL,
  `com_route_external_link` text NOT NULL,
  `com_route_category` varchar(30) NOT NULL,
  `com_route_meta_title` varchar(20) NOT NULL,
  `com_route_meta_key` text NOT NULL,
  `com_route_meta_tag` text NOT NULL,
  `com_route_meta_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `com_route`
--

INSERT INTO `com_route` (`com_route_id`, `com_route_type`, `com_route_old_link`, `com_route_new_link`, `com_route_external_link`, `com_route_category`, `com_route_meta_title`, `com_route_meta_key`, `com_route_meta_tag`, `com_route_meta_description`) VALUES
(200, 'Internal', 'portfolios/portfolio1', 'fusion-craft', '', 'portfolios', 'fusion craft', 'fusion craft', 'fusion craft', 'fusion craft'),
(201, 'Internal', 'portfolios/portfolio2', 'ssow-bhopal', '', 'portfolios', 'ssow bhopal', 'ssow bhopal', 'ssow bhopal', 'ssow bhopal'),
(202, 'Internal', 'portfolios/portfolio3', 'jsm-satna', '', 'portfolios', 'jsm satna', 'jsm satna', 'jsm satna', 'jsm satna'),
(203, 'Internal', 'portfolios/portfolio4', 'crisil', '', 'portfolios', 'crisil', 'crisil', 'crisil', 'crisil'),
(204, 'Internal', 'portfolios/portfolio5', 'gullakk', '', 'portfolios', 'gullakk', 'gullakk', 'gullakk', 'gullakk'),
(205, 'Internal', 'portfolios/portfolio6', 'namsai', '', 'portfolios', 'namsai', 'namsai', 'namsai', 'namsai'),
(206, 'Internal', 'Web/ContactUs/insert', 'save', '', '', '', '', '', ''),
(207, 'Internal', 'Web/Form', 'form', '', '', '', '', '', ''),
(208, 'Internal', 'Home/contact', 'contact', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `contact_us_id` int(11) NOT NULL,
  `contact_us_heading` text NOT NULL,
  `contact_us_image_1` varchar(50) NOT NULL,
  `contact_us_details` text NOT NULL,
  `contact_us_address_line_1` varchar(100) NOT NULL,
  `contact_us_address_line_2` varchar(100) NOT NULL,
  `contact_us_phone` varchar(15) NOT NULL,
  `contact_us_phone_2` varchar(15) NOT NULL,
  `contact_us_email` varchar(30) NOT NULL,
  `contact_us_email_2` varchar(30) NOT NULL,
  `contact_us_timing` varchar(50) NOT NULL,
  `contact_us_location` text NOT NULL,
  `contact_us_status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `e_portal`
--

CREATE TABLE `e_portal` (
  `e_portal_id` int(11) NOT NULL,
  `e_portal_name` varchar(30) NOT NULL,
  `com_route_id` int(11) NOT NULL,
  `e_portal_heading` varchar(50) NOT NULL,
  `e_portal_image_1` varchar(50) NOT NULL,
  `e_portal_image_2` varchar(50) NOT NULL,
  `e_portal_image_3` varchar(50) NOT NULL,
  `e_portal_details` text NOT NULL,
  `e_portal_ordering` int(11) NOT NULL,
  `e_portal_status` varchar(10) NOT NULL,
  `e_portal_link` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` int(10) NOT NULL,
  `feedback_title` text NOT NULL,
  `feedback_subject` varchar(50) NOT NULL,
  `feedback_name` varchar(50) NOT NULL,
  `feedback_email` varchar(50) NOT NULL,
  `feedback_phone` varchar(20) NOT NULL,
  `feedback` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_id`, `feedback_title`, `feedback_subject`, `feedback_name`, `feedback_email`, `feedback_phone`, `feedback`) VALUES
(140, '', 'resume updated', 'Jitendra Pratap Singh', 'jps7828@gmail.com', '7828550802', 'kkkkkkkkk');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `gallery_id` int(11) NOT NULL,
  `gallery_name` varchar(30) NOT NULL,
  `gallery_heading` text NOT NULL,
  `gallery_image_1` varchar(50) NOT NULL,
  `gallery_ordering` int(11) NOT NULL,
  `gallery_status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`gallery_id`, `gallery_name`, `gallery_heading`, `gallery_image_1`, `gallery_ordering`, `gallery_status`) VALUES
(54, 'Training', '', 'assets/web/images/gallery/t1.jpeg', 0, 'Active'),
(55, 'Training', '', 'assets/web/images/gallery/t2.jpeg', 0, 'Active'),
(56, 'Training', '', 'assets/web/images/gallery/t3.jpeg', 0, 'Active'),
(57, 'Training', '', 'assets/web/images/gallery/t4.jpeg', 0, 'Active'),
(58, 'Training', '', 'assets/web/images/gallery/t5.jpeg', 0, 'Active'),
(59, 'Training', '', 'assets/web/images/gallery/t6.jpeg', 0, 'Active'),
(60, 'Training', '', 'assets/web/images/gallery/t7.jpeg', 0, 'Active'),
(61, 'Training', '', 'assets/web/images/gallery/t8.jpeg', 0, 'Active'),
(62, 'Training', '', 'assets/web/images/gallery/t1.jpeg', 0, 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `menu_id` int(11) NOT NULL,
  `menu_name` varchar(50) NOT NULL,
  `menu_type` varchar(20) NOT NULL,
  `sub_menu_of` varchar(50) NOT NULL,
  `menu_main_menu_id` int(11) NOT NULL,
  `menu_show_in` varchar(20) NOT NULL,
  `menu_ordering` int(11) NOT NULL,
  `menu_link` varchar(50) NOT NULL,
  `link` varchar(50) NOT NULL,
  `menu_status` varchar(10) NOT NULL,
  `com_route_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menu_id`, `menu_name`, `menu_type`, `sub_menu_of`, `menu_main_menu_id`, `menu_show_in`, `menu_ordering`, `menu_link`, `link`, `menu_status`, `com_route_id`) VALUES
(38, 'home', 'main_menu', '', 0, '', 1, '#home', '', 'Active', 0),
(39, 'about', 'main_menu', '', 0, '', 2, '#about', '', 'Active', 0),
(40, 'portfolio', 'main_menu', '', 0, '', 3, '#portfolio', '', 'Active', 0),
(41, 'resume', 'main_menu', '', 0, '', 4, '#resume', '', 'Active', 0),
(42, 'clients', 'main_menu', '', 0, '', 5, '#clients', '', 'Active', 0),
(43, 'pricing', 'main_menu', '', 0, '', 6, '#pricing', '', 'Active', 0),
(44, 'blog', 'main_menu', '', 0, '', 7, '#blog', '', 'Active', 0),
(45, 'contacts', 'main_menu', '', 0, '', 8, '#contacts', '', 'Active', 0);

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE `page` (
  `page_id` int(11) NOT NULL,
  `page_name` varchar(30) NOT NULL,
  `page_used_for` varchar(50) NOT NULL,
  `page_image_1` varchar(50) NOT NULL,
  `page_image_2` varchar(50) NOT NULL,
  `page_image_3` varchar(50) NOT NULL,
  `page_content_1` text NOT NULL,
  `page_content_2` text NOT NULL,
  `page_content_3` text NOT NULL,
  `page_status` varchar(10) NOT NULL,
  `page_link` varchar(50) NOT NULL,
  `link` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `portfolio_id` int(11) NOT NULL,
  `portfolio_name` varchar(50) NOT NULL,
  `portfolio_category` varchar(100) NOT NULL,
  `com_route_id` int(11) NOT NULL,
  `portfolio_heading` text NOT NULL,
  `portfolio_image_1` varchar(50) NOT NULL,
  `portfolio_image_2` varchar(50) NOT NULL,
  `portfolio_image_3` varchar(50) NOT NULL,
  `portfolio_details` text NOT NULL,
  `portfolio_ordering` int(11) NOT NULL,
  `portfolio_status` varchar(10) NOT NULL,
  `portfolio_link` varchar(50) NOT NULL,
  `portfolio_category_link` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`portfolio_id`, `portfolio_name`, `portfolio_category`, `com_route_id`, `portfolio_heading`, `portfolio_image_1`, `portfolio_image_2`, `portfolio_image_3`, `portfolio_details`, `portfolio_ordering`, `portfolio_status`, `portfolio_link`, `portfolio_category_link`) VALUES
(1, 'fusion craft', '', 200, 'Dresses & Art', 'assets/web/images/portfolio/749055image_1.png', '', '', '', 0, 'Active', 'https://fusioncraft.in', ''),
(2, 'ssow bhopal', '', 201, 'Stitching & Design', 'assets/web/images/portfolio/914089image_1.png', '', '', '', 0, 'Active', 'https://ssowbpl.in/', ''),
(3, 'jsm satna', '', 202, 'Wood Works', 'assets/web/images/portfolio/246482image_1.png', '', '', '', 0, 'Active', 'https://www.jsmsatna.com/', ''),
(4, 'crisil', '', 203, 'Website Development', 'assets/web/images/portfolio/488865image_1.png', '', '', '', 0, 'Active', 'https://www.crisilinfotech.com', ''),
(5, 'gullakk', '', 204, 'Shopping Website', 'assets/web/images/portfolio/888512image_1.png', '', '', '', 0, 'Active', 'https://www.gullakk.com/', ''),
(6, 'namsai', '', 205, 'Aloevera Products', 'assets/web/images/portfolio/595007image_1.png', '', '', '', 0, 'Active', 'https://namsaiorg.in', '');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_category` varchar(100) NOT NULL,
  `com_route_id` int(11) NOT NULL,
  `product_heading` text NOT NULL,
  `product_image_1` varchar(50) NOT NULL,
  `product_image_2` varchar(50) NOT NULL,
  `product_image_3` varchar(50) NOT NULL,
  `product_details` text NOT NULL,
  `product_ordering` int(11) NOT NULL,
  `product_status` varchar(10) NOT NULL,
  `product_link` varchar(50) NOT NULL,
  `product_category_link` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_category`, `com_route_id`, `product_heading`, `product_image_1`, `product_image_2`, `product_image_3`, `product_details`, `product_ordering`, `product_status`, `product_link`, `product_category_link`) VALUES
(130, 'Rosemary', '', 183, '', 'assets/web/images/products/676017image_1.png', '', '', 'Salvia Rosmarinus, commonly known as rosemary, is a shrub with fragrant, evergreen, needle-like leaves and white, pink, purple, or blue flowers, native to the Mediterranean region. Upon cultivation, the leaves, twigs, and flowering apices are extracted for use. Rosemary is used as a decorative plant in gardens. The leaves are used to flavour various foods, such as stuffing and roast meats. Rosemary contains a number of phytochemicals, including rosmarinic acid, camphor, caffeic acid, ursolic acid, betulinic acid, carnosic acid, and carnosol. Rosemary essential oil contains 10–20% camphor. Rosemary oil is used for purposes of fragrant bodily perfumes or to emit an aroma into a room. It is also burnt as incense, and used in shampoos and cleaning products. They have a bitter, astringent taste and a characteristic aroma which complements many cooked foods. Herbal tea can be made from the leaves. When roasted with meats or vegetables, the leaves impart a mustard-like aroma with an additional fragrance of charred wood that goes well with barbecued foods.', 0, 'Active', 'rosemary', ''),
(131, 'Tejpatta', '', 184, '', 'assets/web/images/products/742007image_1.png', '', '', 'Cinnamomum tamala, Indian bay leaf, also known as tejpat, tezapatta, Malabar leaf, Indian bark, Indian cassia, or malabathrum, is a tree in the family Lauraceae that is native to India, Bangladesh, Nepal, Bhutan, and China. It can grow up to 20 m (66 ft) tall. Its leaves have a clove-like aroma with a hint of peppery taste; they are used for culinary and medicinal purposes. There are five types of tezpat leaves and they impart a strong cassia- or cinnamon- like aroma to dishes, while the bay laurel leaf\'s aroma is more reminiscent of pine and lemon. Contents that gives it aromatic attributes are Beta-caryophyllene, Linalool, Caryophyllene oxide, Eugenol. Tejpatta is used extensively in the cuisines of India, Nepal, and Bhutan, particularly in the Moghul cuisine of North India and Nepal and in tsheringma herbal tea in Bhutan. It is called biryani aaku or bagharakku in Telugu', 0, 'Active', 'tejpatta', ''),
(132, 'Tulsi', '', 185, '', 'assets/web/images/products/640852image_1.png', '', '', 'Ocimum tenuiflorum (synonym Ocimum sanctum), commonly known as holy basil or tulsi, is an aromatic perennial plant in the family Lamiaceae. It is native to the Indian subcontinent and widespread as a cultivated plant throughout the Southeast Asian tropics. Holy basil is an erect, many-branched subshrub, 30–60 cm (12–24 in) tall with hairy stems. Leaves are green or purple, they are strongly scented and have a decussate phyllotaxy. Some of the phytochemical constituents of tulsi are oleanolic acid, ursolic acid, rosmarinic acid, eugenol, carvacrol, linalool, and β-caryophyllene (about 8%). Tulsi essential oil consists mostly of\r\neugenol (~70%) β-elemene (~11.0%), β-caryophyllene (~8%), and germacrene (~2%), with the balance being made up of various trace compounds, mostly terpenes. Tulsi has been used in Ayurveda and Siddha practices for its supposed treatment of diseases.', 0, 'Active', 'tulsi', ''),
(133, 'Tulsi Oil', '', 186, '', 'assets/web/images/products/493167image_1.png', '', '', 'Ocimum tenuiflorum (synonym Ocimum sanctum), commonly known as holy basil or tulsi, is an aromatic perennial plant in the family Lamiaceae. It is native to the Indian subcontinent and widespread as a cultivated plant throughout the Southeast Asian tropics. Holy basil is an erect, many-branched subshrub, 30–60 cm (12–24 in) tall with hairy stems. Leaves are green or purple, they are strongly scented and have a decussate phyllotaxy. Some of the phytochemical constituents of tulsi are oleanolic acid, ursolic acid, rosmarinic acid, eugenol, carvacrol, linalool, and β-caryophyllene (about 8%). Tulsi essential oil consists mostly of eugenol (~70%) β-elemene (~11.0%), β-caryophyllene (~8%), and germacrene (~2%), with the balance being made up of various trace compounds, mostly terpenes.Tulsi has been used in Ayurveda and Siddha practices for its supposed treatment of diseases.', 0, 'Active', 'tulsi-oil', ''),
(134, 'Dry Herbs', '', 187, '', 'assets/web/images/products/363747image_1.png', '', '', 'Dried herbs, as the name suggests are herbs that have been cleaned, sorted and dried in the sun. Dried herbs are more convenient and less expensive than fresh ones. However, one must remember that most herbs take on a different flavour after drying. Most commonly consist of a mixture of various herbs like sage, thyme, basil, mint, marjoram, and savoury etc.', 0, 'Active', 'dry-herbs', ''),
(135, 'Kutki', '', 188, '', 'assets/web/images/products/955134image_1.png', '', '', 'Picrorhiza kurroa is one of the major income-generating non-timber forest products found in the Nepalese Himalayas. It is one of the oldest medicinal plants traded from Karnali zone. It is a perennial herb and is used as a substitute for Indian gentian. It is found far away from the community and takes from hours to days to walk to its growing habitat. It has been reported that Picrorhiza has been harvested to near extinction. Leaves: 5-15 cm long leaves, almost all at the base, often withered. Rhizomes of the plant are 15-25 cm long and woody. Fruits: 1.3 cm long. The chemical composition of Picrorhiza Kurroa include Kutkin, a bitter glycoside that contains two C-9 iridoid glycosides-Picroside I and Kutakoside.', 0, 'Active', 'kutki', ''),
(136, 'Raw Ginger', '', 189, '', 'assets/web/images/products/803963image_1.png', '', '', 'Ginger is a very popular spice used worldwide. Ginger can be used for a variety of food or medicine items such as vegetables, candy, soda, pickles, and alcoholic beverages. In India, planting the irrigated ginger crop is usually done in the months between March and June as those months account for the beginning of the monsoon, or rainy season. For farming the size of the seed ginger, called rhizome, is essential to the production of ginger. The larger the rhizome piece, the faster ginger will be produced and therefore the faster it will be sold onto the market. Harvesting should be done between four and five months of planting (for fully mature/dry ginger 8-10months). Traditionally, the rhizome is gathered when the stalk withers; it is immediately scalded, or washed and scraped, to kill it and prevent sprouting. In 2018, global production of ginger was 2.8 million tonnes, led by India with 32% of the world total.', 0, 'Active', 'raw-ginger', ''),
(137, 'Kapoor Kachri', '', 190, '', 'assets/web/images/products/585558image_1.png', '', '', 'The Indian medicinal system (Ayurveda) described Kapoor kachri species as having pungent, light, bitter, strong, healing properties. The species is also an ingredient of some traditional Chinese medicine (TCM), traditional Tibetan medicine and Unani medicine. The powder and decoction of the rhizome are used for a variety of conditions. The rhizome is also chewed by the inhabitants of Uttarakhand to clean their mouths and freshen their breath. The fruit of this species may be cooked and eaten with lentils in savoury dishes. Crushed rhizomes, both fresh and dried, are very aromatic with a fragrant, somewhat pungent smell similar to orris root but more powerful. In Manipur, the rhizome is cooked to prepare chutney. \"Abir\", a fragrant coloured powder marketed for religious ceremonies, is prepared from its dried rhizomes. In Himachal Pradesh, leaves are used in making mats for the home, combined with wheat straw, enhancing the durability of the product. The aromatic dried root of this plant is often used as incense in Ethiopia. The essential oil has a fragrance somewhat like hyacinths with a long-lasting scent.', 0, 'Active', 'kapoor-kachri', ''),
(138, 'Oregano', '', 191, '', 'assets/web/images/products/366097image_1.png', '', '', 'Oregano is a culinary herb, used for the flavour of its leaves, which can be more flavorful when dried than fresh. It has an aromatic, warm, and slightly bitter taste, which can vary in intensity. Many subspecies and strains of oregano have been developed by humans over centuries for their unique flavours or other characteristics. Tastes range from spicy or astringent to more complicated and sweet. The essential oil of oregano is composed primarily of monoterpenoids and monoterpenes, with the relative concentration of each compound\r\nvarying widely across geographic origin and other factors. Over 60 different compounds have been identified, with the primary ones being carvacrol and thymol ranging to over 80%, while lesser abundant compounds include p-cymene, γ-terpinene, caryophyllene, spathulenol, germacrene D, β-fenchyl alcohol and δ-terpineol. There, it is most frequently used with roasted, fried, or grilled vegetables, meat, and fish. Oregano combines well with spicy foods popular in southern Italy. Dried oregano is often added as the aromatic and flavorful topping The dried and ground leaves are most often used in Greece to add flavour to Greek salad, and is usually added to the lemon-olive oil sauce that accompanies fish or meat grills and casseroles.', 0, 'Active', 'oregano', '');

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `product_category_id` int(11) NOT NULL,
  `product_category_name` varchar(50) NOT NULL,
  `product_category_image` varchar(50) NOT NULL,
  `product_category_status` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`product_category_id`, `product_category_name`, `product_category_image`, `product_category_status`) VALUES
(1, 'Dohar', '', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `resources`
--

CREATE TABLE `resources` (
  `resources_id` int(11) NOT NULL,
  `resources_name` varchar(50) NOT NULL,
  `resources_heading` text NOT NULL,
  `resources_file` text NOT NULL,
  `resources_image` varchar(50) NOT NULL,
  `resources_status` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resources`
--

INSERT INTO `resources` (`resources_id`, `resources_name`, `resources_heading`, `resources_file`, `resources_image`, `resources_status`) VALUES
(1, 'Brochure', 'Company Profile', 'assets/web/images/brochure/383232file.png', 'assets/web/images/brochure/997321image.png', 'Active'),
(2, 'Brochure', 'Product', 'assets/web/images/brochure/195694file.png', 'assets/web/images/brochure/435281image.png', 'Active'),
(3, 'Brochure', 'Training', 'assets/web/images/brochure/224755file.png', 'assets/web/images/brochure/704169image.png', 'Active'),
(4, 'Catalogue', 'products', 'assets/web/images/brochure/377819file.png', 'assets/web/images/brochure/558420image.png', 'Active'),
(5, 'Company Profile', '', 'assets/web/images/brochure/120270file.png', 'assets/web/images/brochure/244171image.png', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `role_ab_user`
--

CREATE TABLE `role_ab_user` (
  `role_ab_user_id` bigint(20) NOT NULL,
  `role_ab_user_username` varchar(50) NOT NULL,
  `role_ab_user_password` varchar(600) NOT NULL,
  `site_ab_id` int(11) NOT NULL,
  `role_ab_user_status` varchar(20) NOT NULL,
  `role_aa_usertype_id` varchar(30) NOT NULL,
  `role_ab_user_name` varchar(50) NOT NULL,
  `role_ab_user_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role_ab_user`
--

INSERT INTO `role_ab_user` (`role_ab_user_id`, `role_ab_user_username`, `role_ab_user_password`, `site_ab_id`, `role_ab_user_status`, `role_aa_usertype_id`, `role_ab_user_name`, `role_ab_user_image`) VALUES
(1, 'admin', 'BhWMI+o5Chbrtypaajri3afWTApssCH7dcrDoHWiSqoghhjVFoSOfmDVCZH4XjPhEGyAlTlikgWguAiU/ReEXA==', 1, 'Enabled', '2', 'Ravi', 'asset/site_images/role_user/868747file1.png'),
(2, 'crisil', 'Nm1tU24yUzVJT1N5QzNKMjlneUJKUT09OjoDe2d+gR4HgTu+ZRMwxBtw', 1, 'Enabled', '2', 'crisil', 'asset/site_images/role_user/700848file1.png'),
(13, 'admins', 'TVpFYzR2SzRuaXVoTmpGZXRZVFpjdz09OjpG+vrUa2crOYQpUlO1YRFE', 0, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `service_id` int(11) NOT NULL,
  `service_name` varchar(30) NOT NULL,
  `com_route_id` int(11) NOT NULL,
  `service_heading` varchar(50) NOT NULL,
  `service_image_1` varchar(50) NOT NULL,
  `service_image_2` varchar(50) NOT NULL,
  `service_image_3` varchar(50) NOT NULL,
  `service_details` text NOT NULL,
  `service_ordering` int(11) NOT NULL,
  `service_status` varchar(10) NOT NULL,
  `service_link` varchar(50) NOT NULL,
  `link` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `skill_id` int(11) NOT NULL,
  `skill_name` varchar(30) NOT NULL,
  `skill_video` text NOT NULL,
  `com_route_id` int(11) NOT NULL,
  `skill_heading` varchar(50) NOT NULL,
  `skill_image_1` varchar(50) NOT NULL,
  `skill_image_2` varchar(50) NOT NULL,
  `skill_image_3` varchar(50) NOT NULL,
  `skill_details` text NOT NULL,
  `skill_ordering` int(11) NOT NULL,
  `skill_status` varchar(10) NOT NULL,
  `skill_link` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`skill_id`, `skill_name`, `skill_video`, `com_route_id`, `skill_heading`, `skill_image_1`, `skill_image_2`, `skill_image_3`, `skill_details`, `skill_ordering`, `skill_status`, `skill_link`) VALUES
(5, 'PHP', '', 192, '', 'assets/web/images/skills/762435image_1.svg', '', '', '', 1, 'Active', ''),
(6, 'Codeigniter', '', 193, '', 'assets/web/images/skills/671576image_1.png', '', '', '', 2, 'Active', ''),
(7, 'javascript', '', 194, '', 'assets/web/images/skills/955965image_1.svg', '', '', '', 3, 'Active', ''),
(8, 'mysql', '', 195, '', 'assets/web/images/skills/768482image_1.svg', '', '', '', 4, 'Active', ''),
(9, 'bootstrap', '', 196, '', 'assets/web/images/skills/929825image_1.svg', '', '', '', 5, 'Active', ''),
(10, 'HTML', '', 197, '', 'assets/web/images/skills/396731image_1.svg', '', '', '', 6, 'Active', ''),
(11, 'css', '', 198, '', 'assets/web/images/skills/151040image_1.svg', '', '', '', 7, 'Active', ''),
(12, 'github', '', 199, '', 'assets/web/images/skills/119677image_1.svg', '', '', '', 8, 'Active', '');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `slider_id` int(11) NOT NULL,
  `slider_name` varchar(20) NOT NULL,
  `slide_name` varchar(20) NOT NULL,
  `slider_heading` text NOT NULL,
  `slider_sub_heading` text NOT NULL,
  `slider_image_1` varchar(50) NOT NULL,
  `slider_caption` text NOT NULL,
  `slider_status` varchar(10) NOT NULL,
  `slider_video` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slider_id`, `slider_name`, `slide_name`, `slider_heading`, `slider_sub_heading`, `slider_image_1`, `slider_caption`, `slider_status`, `slider_video`) VALUES
(3, 'Home', 'slide_1', 'Value Addition of Medicinal and Aromatic Plants Cluster', 'Sponsored By Ministry Of MSME Under SFURTI Scheme', 'assets/web/images/slider/118154image_1.png', '', 'Active', ''),
(6, 'Testimonial', 'Ravi Prakash', 'Crisil Infotech', 'Web App Development', 'assets/web/images/slider/483500image_1.png', '<p>I would highly recommend him for all the development purposes, fastest achiever and work completion. Services are well documented and logical to our needs. We are very excited to be working with him, Over just a short period of time I can tell that we are going to be doing business with him again and again.</p>\r\n', 'Active', ''),
(7, 'Testimonial', 'Hemant Chanchlani', 'Director - Vaiotech', 'Website Development', 'assets/web/images/slider/574260image_1.png', '<p>Prompt customer support and services, highly motivated towards completion of work. Regular updates.</p>\r\n', 'Active', ''),
(8, 'Testimonial', 'Sanjay Adtani', 'sanjayadtani.com', 'Web & App Development', 'assets/web/images/slider/310696image_1.png', '<p>Put the work and get it done always before time to be sure the work will be completed in time limit. On Time Delivery always.</p>\r\n', 'Active', ''),
(39, 'Testimonial', 'Shradha Singh', 'senior PHP developer', 'Development', 'assets/web/images/slider/496971image_1.png', '<p>Little instructions and the work is done. Easy to understand the projects along with the status of development.</p>\r\n', 'Active', ''),
(40, 'Testimonial', 'Ruchika Shah', 'Nisarg Agripreneurship', 'Website Development', 'assets/web/images/slider/722065image_1.png', '<p>Great company to work with. It&rsquo;s almost as if they are an employee working along with you, They handle my PHP development work, web design, web hosting.</p>\r\n', 'Active', '');

-- --------------------------------------------------------

--
-- Table structure for table `social_network`
--

CREATE TABLE `social_network` (
  `social_network_id` int(11) NOT NULL,
  `social_network_name` varchar(20) NOT NULL,
  `social_network_icon` varchar(30) NOT NULL,
  `social_network_link` varchar(50) NOT NULL,
  `social_network_status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `social_network`
--

INSERT INTO `social_network` (`social_network_id`, `social_network_name`, `social_network_icon`, `social_network_link`, `social_network_status`) VALUES
(1, 'github', 'github', 'https://github.com/jps7828', 'Active'),
(3, 'facebook', 'facebook', 'http://www.facebook.com/JPS7828', 'Active'),
(4, 'linkedin', 'linkedin', 'http://www.linkedin.com/in/jps7828/', 'Active'),
(5, 'twitter ', 'twitter', 'http://twitter.com/jps7828', 'Active'),
(6, 'email', 'mail', 'mailto:jps7828@gmail.com', 'Active'),
(7, 'website', 'monitor', 'https://jps7828.herokuapp.com/', 'Active'),
(8, 'mobile', 'phone-call', 'callto:7828550802', 'Active'),
(9, 'whatsapp', 'message-circle', 'https://api.whatsapp.com/send?phone=917828550802&t', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `subscription`
--

CREATE TABLE `subscription` (
  `subscription_id` int(11) NOT NULL,
  `subscription_email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subscription`
--

INSERT INTO `subscription` (`subscription_id`, `subscription_email`) VALUES
(67, 'test@mail.com');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `team_id` int(11) NOT NULL,
  `team_type` varchar(30) NOT NULL,
  `team_name` varchar(50) NOT NULL,
  `team_designation` varchar(30) NOT NULL,
  `team_image_1` varchar(50) NOT NULL,
  `team_details` text NOT NULL,
  `team_status` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`about_us_id`);

--
-- Indexes for table `background`
--
ALTER TABLE `background`
  ADD PRIMARY KEY (`background_id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`clients_id`);

--
-- Indexes for table `com_basic_details`
--
ALTER TABLE `com_basic_details`
  ADD PRIMARY KEY (`com_basic_details_id`);

--
-- Indexes for table `com_route`
--
ALTER TABLE `com_route`
  ADD PRIMARY KEY (`com_route_id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`contact_us_id`);

--
-- Indexes for table `e_portal`
--
ALTER TABLE `e_portal`
  ADD PRIMARY KEY (`e_portal_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`gallery_id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`page_id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`portfolio_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`product_category_id`);

--
-- Indexes for table `resources`
--
ALTER TABLE `resources`
  ADD PRIMARY KEY (`resources_id`);

--
-- Indexes for table `role_ab_user`
--
ALTER TABLE `role_ab_user`
  ADD PRIMARY KEY (`role_ab_user_id`),
  ADD UNIQUE KEY `role_ab_user_username` (`role_ab_user_username`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`skill_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Indexes for table `social_network`
--
ALTER TABLE `social_network`
  ADD PRIMARY KEY (`social_network_id`);

--
-- Indexes for table `subscription`
--
ALTER TABLE `subscription`
  ADD PRIMARY KEY (`subscription_id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`team_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `about_us_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `background`
--
ALTER TABLE `background`
  MODIFY `background_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `clients_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `com_basic_details`
--
ALTER TABLE `com_basic_details`
  MODIFY `com_basic_details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `com_route`
--
ALTER TABLE `com_route`
  MODIFY `com_route_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=209;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `contact_us_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `e_portal`
--
ALTER TABLE `e_portal`
  MODIFY `e_portal_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `gallery_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
  MODIFY `page_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `portfolio_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=139;

--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
  MODIFY `product_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `resources`
--
ALTER TABLE `resources`
  MODIFY `resources_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `role_ab_user`
--
ALTER TABLE `role_ab_user`
  MODIFY `role_ab_user_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `skill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `social_network`
--
ALTER TABLE `social_network`
  MODIFY `social_network_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `subscription`
--
ALTER TABLE `subscription`
  MODIFY `subscription_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `team_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
