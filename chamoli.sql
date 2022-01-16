-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2021 at 05:09 PM
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
-- Database: `chamoli`
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
(2, '                 Sponsored By Ministry Of MSME Under SFURTI Scheme               ', 'Value Addition of Medicinal and Aromatic Plants Cluster Chamoli, Uttarakhand', 'assets/web/images/about_us/200671image_1.png', 'assets/web/images/about_us/642776image_2.png', 'assets/web/images/about_us/304223image_3.jpg', '', '', '', '<p><strong>We The Value Addition of Medicinal and Aromatic Plants Cluster Chamoli, Uttarakhand</strong> is supported by the Scheme of Fund for Regeneration of Traditional Industries (SFURTI) of the Ministry of MSME, Government of India, we are working to transform traditional farming from an occupation to a respectful profession and enable artisans to earn consistently high returns by reducing risk factors. We are working towards providing hand-holding support to artisans by solving the agricultural upgradation activities for traditional Medicinal and Aromatic Plants plants in the region. We have been functioning to carry out economic development for local artisans within the cluster. The vision of the organization is <strong>&ldquo;to empower the deprived and vulnerable sections of the community, by enhancing their knowledge and awareness, thus providing them with sustainable avenues for growth and development&rdquo;</strong>.</p>\r\n\r\n<p><strong>Value Addition of Medicinal and Aromatic Plants Cluster Chamoli, Uttarakhand Origin of Cluster:</strong></p>\r\n\r\n<p>Chamoli proved itself &ldquo;the most spectacular in its natural assets; be it scenery, valley aspects, water-edges, floristic varieties, dramatic landform or the climatic cardinalities&rdquo;. Lack of livelihood opportunities, modern amenities and services for decent living in rural areas lead to the migration of people to urban areas. There are wide gaps in the availability of physical and social infrastructure between rural and urban areas. To address these issues, there is envisaged as a self-sustainable and viable model of service delivery to be managed through an implementation framework between local people, public authorities and the private sector. The Government support would be in the form of finding the right type of management structure to develop and maintain rural infrastructure, empowering such management structure and providing initial economic support. Farming plays a vital part in the mountainous region of Uttarakhand state. Farmers of this hilly state are very hard working; they toil through the day, starting with the house works, nurturing children and livestock, going out for fodder, fuel, drinking water and NTFP collection for sustaining livelihoods. In the midst of all these worries, a hill farmer remains firmly devoted to his/her work, keeps him/her composure and is honest. Enhancing social security for these farmers and setting up the processing industry and management of natural resources, medicinal plants cultivation etc. can enhance employment opportunities both for men and women in this region, which will result in less migration. The remote area of this state has inadequate networking of transport and other basic supporting facilities, which come in the way for proper benefits of agriculture, horticulture and other developmental programmes conducted by state and other organizations About 70% population of the targeted region is engaged in agriculture. More than 96 per cent of the total female workers and about 78% of the total male workers are engaged in agricultural pursuits. There are some other major sources of livelihood such as Electronic Goods, Bakery, Wool Industries, Oil Extraction, Spice Industries, Tyre Retreating, Dairy, Wooden Furniture, Agriculture Equipments, Mini Flour Mills, Namkeen, Optical Assembling, Photo Framing, Beauty Parlour, Sweets Boxes, Motor Cycle / Scooter Repairing, Digital Photo Video Coverage, Computer Training, Steel Fabrication are among some other key economic activities of the region. Besides this, the agriculture sectors remain the main economic activity of the region however is poorly developed primarily due to the inaccessibility and vulnerability of this mountain region.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Objectives:</strong></p>\r\n\r\n<p>1. Upgradation of tools.</p>\r\n\r\n<p>2. Implementation of better and improved labour management techniques.</p>\r\n\r\n<p>3. Using various activities for capacity building for training.</p>\r\n\r\n<p>4. Installation of processing and value addition facility in the cluster.</p>\r\n\r\n<p>5. Provision of markets other than traditional local markets, by the formation of Farmer&rsquo;s Producers Organisation (FPOs) by increasing quality control enabling the possibility of export.</p>\r\n\r\n<p>6. To involve more farmers from the area to become a part of this cluster, for raising a general economic level of the cluster as well to boost the local economy.</p>\r\n\r\n<p>7. Brand establishment by highlighting the organic nature of agriculture in the targeted area giving the product produced in the cluster a unique value-added perspective.</p>\r\n\r\n<p>8. Establish a market chain leading to increased income of the cultivators in secondary sectors as well.</p>\r\n', 'Active'),
(3, '                          Sponsored By Ministry Of MSME Under SFURTI Scheme                   ', 'Value Addition of Medicinal and Aromatic Plants Cluster Chamoli, Uttarakhand', 'assets/web/images/about_us/121696image_1.png', 'assets/web/images/about_us/964578image_2.png', 'assets/web/images/about_us/925056image_3.jpg', '', '<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', '<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', '<p><strong>&quot; Zandu Foundation for Health Care (ZFHC)&rdquo;</strong> is working in the Chamoli, Uttarakhand for promotion of commercial cultivation of medicinal and aromatic plants with association with several Govt. Departments/Institutions. Besides this, the foundation is engaged in providing the training program to the farmers of the targeted regions for the last 6-7 years. When district Chamoli is examined closely, agriculture emerges as the main activity. Since most of the land is under forest cover, there is very little scope for diversification. However, due to the constant effects of Govt. of Uttarakhand, the farmers of the regions have started diversification of alternative farm-based activities like horticultural crops, medicinal and aromatic plants and some have also tried to extract the potential of animal husbandry activities like dairy and poultry. To increase the farmer&rsquo;s income through diversification of agriculture, promotion of medicinal and aromatic plants.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Our Focus:</strong></p>\r\n\r\n<p>1. To provide better employment opportunities and to increase the marketability of products.</p>\r\n\r\n<p>2. To develop a cluster with equal participation of local women artisans.</p>\r\n\r\n<p>3. To apply modern custom-based farming techniques.</p>\r\n\r\n<p>4. To organize the artisans and traditional industries into clusters for better competitiveness.</p>\r\n\r\n<p>5. Skill training and economical uplifting with modern tools and technologies.</p>\r\n\r\n<p>6. To increase the beneficiary income in the cluster as well for promoting micro and small social enterprises in the region.</p>\r\n\r\n<p>7. To provide better management and processing/value addition.</p>\r\n\r\n<p>8. To enhance the technical skill of artisans as well as technician, extension workers, entrepreneurs and other operating in the sector.</p>\r\n\r\n<p>9. Creating tangible common/community-based assets to support the developmental requirements in the cluster.</p>\r\n\r\n<p>10. To introduce the latest marketing techniques and brand building.</p>\r\n', 'Active');

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
(1, 'Chamoli', 'assets/web/images/logo/164210image_1.png', 'assets/web/images/logo/gem.svg', 'assets/web/images/logo/633655image_3.png', 'Value Addition of Medicinal and Aromatic Plants Cluster', '', '', 'vksbisht@gmail.com', '', '7500475044', '7983306660', '<p>Value Addition of Medicinal and Aromatic Plants Cluster Chamoli, Uttarakhand</p>\r\n', '', '', '<p><iframe height=\"600\" src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d57957.67186113506!2d84.94706125282386!3d24.783312176996304!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f32a440a1b3c1f%3A0xcef6b223bdbf34a6!2sGaya%2C%20Bihar!5e0!3m2!1sen!2sin!4v1619152041223!5m2!1sen!2sin\" style=\"border:0;\" width=\"800\"></iframe></p>\r\n', 'We The Value Addition of Medicinal and Aromatic Plants Cluster Chamoli, Uttarakhand is supported by the Scheme of Fund for Regeneration of Traditional Industries (SFURTI) of the Ministry of MSME, Government of India', '', 'We are a society working under the Ministry Of MSME -SFURTI Scheme -Centre for Rural Development. To carry out economic development program through KVI (Khadi and Village Industries), to provide shelter to the poor and needy, to  mobilize the rural poor towards a welfare society. To create rural masses motivated, self-aware and self-reliant towards rural development and reconstruction prospects of all faculties by organizing awareness and training camps on various aspects  at suitable rural places/centers and also by providing direct and helpful detailed information and adequate knowledge, guidelines/help about rural reconstruction programs with a special view to  accelerating communal, national and international integrity with peaceful harmony.', '');

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
(9, 'Internal', 'Web/AboutUs/who_we_are', 'about-us', '', 'Menu', 'About Us', 'About Us', 'About Us', 'About Us'),
(10, 'Internal', 'Web/ContactUs', 'contact-us', '', 'Menu', 'Contact Us', 'Contact Us', 'Contact Us', 'Contact Us'),
(11, 'Internal', 'Web/OurTeam', 'our-team', '', 'Menu', 'Our Team', 'Our Team', 'Our Team', 'Our Team'),
(20, 'Internal', 'Web/Skills', 'skill-and-training', '', '', '', '', '', ''),
(21, 'Internal', 'Web/E_portal', 'e-portal', '', '', '', '', '', ''),
(34, 'Internal', 'Web/AboutUs/what_we_do', 'what-we-do', '', 'Menu', 'Contact Us', 'Contact Us', 'Contact Us', 'Contact Us'),
(46, 'Internal', 'Web/Resources/brochure', 'brochure', '', '', '', '', '', ''),
(48, 'Internal', 'Web/Products', 'products', '', 'Products', '', '', '', ''),
(57, 'Internal', 'Web/Gallery', 'gallery', '', '', '', '', '', ''),
(58, 'Internal', 'Web/AboutUs/who_we_are', 'who-we-are', '', 'Menu', 'Contact Us', 'Contact Us', 'Contact Us', 'Contact Us'),
(61, 'Internal', 'Web/Blogs/blog/4', 'latest-techniques-of-production-management', '', 'Blogs', 'Latest Techniques of', 'Latest Techniques of production management', 'Latest Techniques of production management', 'Latest Techniques of production management'),
(62, 'Internal', 'Web/Blogs/blog/5', 'best-tools-for-production-management', '', 'Blogs', 'Best tools for produ', 'Best tools for production management', 'Best tools for production management', 'Best tools for production management'),
(63, 'Internal', 'Web/Blogs/blog/6', 'marketing-practices', '', 'Blogs', 'marketing practices', 'marketing practices', 'marketing practices', 'marketing practices'),
(64, 'Internal', 'Web/Blogs', 'blogs', '', '', '', '', '', ''),
(170, 'Internal', 'Web/Resources/catalogue', 'catalogue', '', '', '', '', '', ''),
(171, 'Internal', 'Web/Products/product/116', 'moringa-dried-leaves', '', 'Products', 'Moringa Dried Leaves', 'Moringa Dried Leaves', 'Moringa Dried Leaves', 'Moringa Dried Leaves'),
(172, 'Internal', 'Web/Products/product/117', 'moringa-based-paper-pulp', '', 'Products', 'Moringa Based Paper ', 'Moringa Based Paper Pulp', 'Moringa Based Paper Pulp', 'Moringa Based Paper Pulp'),
(173, 'Internal', 'Web/Products/product/118', 'moringa-dried-powder', '', 'Products', 'Moringa Dried Powder', 'Moringa Dried Powder', 'Moringa Dried Powder', 'Moringa Dried Powder'),
(174, 'Internal', 'Web/Products/product/119', 'cattle-feed', '', 'Products', 'Cattle Feed', 'Cattle Feed', 'Cattle Feed', 'Cattle Feed'),
(175, 'Internal', 'Web/Resources/company_profile', 'profile', '', '', '', '', '', ''),
(176, 'Internal', 'Web/Products/product/120', 'fresh-turmeric', '', 'Products', 'Fresh Turmeric', 'Fresh Turmeric', 'Fresh Turmeric', 'Fresh Turmeric'),
(177, 'Internal', 'Web/Products/product/121', 'fresh-herbs', '', 'Products', 'Fresh Herbs', 'Fresh Herbs', 'Fresh Herbs', 'Fresh Herbs'),
(178, 'Internal', 'Web/Products/product/122', 'curcumin-95-pure', '', 'Products', 'Curcumin 95% Pure', 'Curcumin 95% Pure', 'Curcumin 95% Pure', 'Curcumin 95% Pure'),
(179, 'Internal', 'Web/Products/product/123', 'turmeric-oil', '', 'Products', 'Turmeric Oil', 'Turmeric Oil', 'Turmeric Oil', 'Turmeric Oil'),
(180, 'Internal', 'Web/Products/product/124', 'curcumin-capsule', '', 'Products', 'Curcumin Capsule', 'Curcumin Capsule', 'Curcumin Capsule', 'Curcumin Capsule'),
(181, 'Internal', 'Web/Products/product/125', 'mushroom', '', 'Products', 'mushroom', 'mushroom', 'mushroom', 'mushroom'),
(182, 'Internal', 'Web/Products/product/129', 'n-a', '', 'Products', '', '', '', ''),
(183, 'Internal', 'Web/Products/product/130', 'rosemary', '', 'Products', 'Rosemary', 'Rosemary', 'Rosemary', 'Rosemary'),
(184, 'Internal', 'Web/Products/product/131', 'tejpatta', '', 'Products', 'Tejpatta', 'Tejpatta', 'Tejpatta', 'Tejpatta'),
(185, 'Internal', 'Web/Products/product/132', 'tulsi', '', 'Products', 'Tulsi', 'Tulsi', 'Tulsi', 'Tulsi'),
(186, 'Internal', 'Web/Products/product/133', 'tulsi-oil', '', 'Products', 'Tulsi Oil', 'Tulsi Oil', 'Tulsi Oil', 'Tulsi Oil'),
(187, 'Internal', 'Web/Products/product/134', 'dry-herbs', '', 'Products', 'Dry Herbs', 'Dry Herbs', 'Dry Herbs', 'Dry Herbs'),
(188, 'Internal', 'Web/Products/product/135', 'kutki', '', 'Products', 'Kutki', 'Kutki', 'Kutki', 'Kutki'),
(189, 'Internal', 'Web/Products/product/136', 'raw-ginger', '', 'Products', 'Raw Ginger', 'Raw Ginger', 'Raw Ginger', 'Raw Ginger'),
(190, 'Internal', 'Web/Products/product/137', 'kapoor-kachri', '', 'Products', 'Kapoor Kachri', 'Kapoor Kachri', 'Kapoor Kachri', 'Kapoor Kachri'),
(191, 'Internal', 'Web/Products/product/138', 'oregano', '', 'Products', 'Oregano', 'Oregano', 'Oregano', 'Oregano');

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
(62, '', '', 'test', 'test@mail.com', '', 'this ');

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
(1, 'Home', 'main_menu', '', 0, 'Top', 1, '/', '', 'Active', 0),
(4, 'Product & Services', 'main_menu', '', 0, 'Top', 4, 'products', '', 'Active', 0),
(5, 'Skill & Training', 'main_menu', '', 0, 'Top', 5, 'skill-and-training', '', 'Active', 0),
(6, 'E - Portal', 'main_menu', '', 0, 'Top', 6, 'e-portal', '', 'Active', 0),
(16, 'About Us', 'main_menu', '', 0, 'Top', 2, 'about-us', '', 'Active', 9),
(17, 'Contact Us', 'main_menu', '', 0, 'Top', 7, 'contact-us', '', 'Active', 10),
(18, 'Our Team', 'main_menu', '', 0, 'Top', 3, 'our-team', '', 'Deactive', 11),
(27, 'Resources', 'main_menu', '', 0, '', 8, 'resources', '', 'Active', 0),
(30, 'Brochure', 'sub_menu', '', 27, '', 0, 'brochure', '', 'Active', 0),
(31, 'Gallery', 'sub_menu', 'Resources', 27, '', 0, 'gallery', '', 'Active', 0),
(32, 'Who We Are', 'sub_menu', 'About Us', 16, '', 1, 'who-we-are', '', 'Active', 0),
(33, 'What We Do', 'sub_menu', 'About Us', 16, '', 2, 'what-we-do', '', 'Active', 0),
(34, 'Our Team', 'sub_menu', 'About Us', 16, '', 3, 'our-team', '', 'Active', 0),
(35, 'Blogs', 'sub_menu', 'Resources', 27, '', 3, 'blogs', '', 'Deactive', 0),
(36, 'Catalogues', 'sub_menu', 'Downloads', 27, '', 3, 'catalogue', '', 'Active', 0),
(37, 'Company Profile', 'sub_menu', 'Resources', 27, '', 0, 'profile', '', 'Active', 0);

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
(1, 'Inventory Management', '<p><iframe frameborder=\"0\" height=\"315\" src=\"https://www.youtube.com/embed/_DiqEGcWY0Y\" width=\"560\"></iframe></p>\r\n', 30, 'Day 1 of Inventory Management', 'assets/web/images/809125image_1.jpg', '', '', '', 0, 'Active', ''),
(2, 'Inventory Management', '<p><iframe frameborder=\"0\" height=\"315\" src=\"https://www.youtube.com/embed/_DiqEGcWY0Y\" width=\"560\"></iframe></p>\r\n', 31, 'Day 2 of Inventory Management', 'assets/web/images/561112image_1.png', '', '', '', 0, 'Active', ''),
(3, 'Digital Marketing', '<p><iframe frameborder=\"0\" height=\"315\" src=\"https://www.youtube.com/embed/S9xyJAcyaQQ\" width=\"560\"></iframe></p>\r\n', 32, 'Day 1 Digital Marketing', 'assets/web/images/300010image_1.png', '', '', '', 0, 'Active', ''),
(4, 'Digital Marketing', '<iframe frameborder=\"0\" height=\"315\" src=\"https://www.youtube.com/embed/lgB99yM-IKA\" width=\"560\"></iframe>', 30, 'Day 2 Digital Marketing', 'assets/web/images/843728image_1.jpg', '', '', '', 0, 'Active', '');

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
(6, 'Testimonial', 'slide_1', 'Hemant', '', 'assets/web/images/slider/t3.png', 'Good quality Herbs. Value for money', 'Active', ''),
(7, 'Testimonial', 'slide_2', 'Anmol Sharma', '', 'assets/web/images/slider/t2.png', 'The product reached in time, was properly packed, and is the same as mentioned.', 'Active', ''),
(8, 'Testimonial', 'slide_3', 'Puneet', '', 'assets/web/images/slider/t3.png', 'Superb products, meets my expectation - quality, packing, cleanliness all up to the mark.', 'Active', ''),
(13, 'Associates', 'slide_1', 'Amazon', '', 'assets/web/images/slider/amazon.svg', '', 'Active', ''),
(14, 'Associates', 'slide_2', 'GEM', '', 'assets/web/images/slider/gem.svg', '', 'Active', ''),
(29, 'Associates', 'slide_3', 'Nisarg', '', 'assets/web/images/slider/697066image_1.png', '', 'Active', ''),
(37, 'Home', 'slide_2', 'Value Addition of Medicinal and Aromatic Plants Cluster ', 'Sponsored By Ministry Of MSME Under SFURTI Scheme', 'assets/web/images/slider/875204image_1.png', '', 'Active', ''),
(38, 'Associates', 'slide_4', '', '', 'assets/web/images/slider/117128image_1.svg', '', 'Active', ''),
(39, 'Testimonial', 'slide_4', '', '', 'assets/web/images/slider/120720image_1.png', 'Genuine product with good quality, the aroma lasts longer than expected.', 'Active', ''),
(40, 'Testimonial', 'slide_5', '', '', 'assets/web/images/slider/506931image_1.png', 'One stop for good quality aromatic herbs.', 'Active', '');

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
(1, 'facebook', 'fa fa-facebook', '#', 'Active'),
(3, 'youtube', 'fa fa-youtube', '#', 'Active'),
(4, 'linkedin', 'fa fa-linkedin', '#', 'Active'),
(5, 'twitter ', 'fa fa-twitter', '#', 'Active');

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
-- Dumping data for table `team`
--

INSERT INTO `team` (`team_id`, `team_type`, `team_name`, `team_designation`, `team_image_1`, `team_details`, `team_status`) VALUES
(1, '', 'Nodal Agency', '', 'assets/web/images/team/415722image_1.png', 'Process and Product Development Center, (PPDC), Agra', 'Active'),
(2, '', 'Implementing Agency', '', 'assets/web/images/team/807038image_1.png', 'Zandu Foundation, Chamoli, Uttarakhand', 'Active'),
(3, '', 'Technical Agency', '', 'assets/web/images/team/737057image_1.png', 'AVVS, Lucknow, Uttar Pradesh', 'Active'),
(4, '', 'CDE', '', 'assets/web/images/team/149768image_1.png', '', 'Deactive');

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
  MODIFY `about_us_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
-- AUTO_INCREMENT for table `com_basic_details`
--
ALTER TABLE `com_basic_details`
  MODIFY `com_basic_details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `com_route`
--
ALTER TABLE `com_route`
  MODIFY `com_route_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=192;

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
  MODIFY `feedback_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `gallery_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
  MODIFY `page_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `skill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `social_network`
--
ALTER TABLE `social_network`
  MODIFY `social_network_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
