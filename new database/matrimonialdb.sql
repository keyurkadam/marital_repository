-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 18, 2019 at 08:12 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `matrimonialdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin_user`
--

DROP TABLE IF EXISTS `tbl_admin_user`;
CREATE TABLE IF NOT EXISTS `tbl_admin_user` (
  `admin_user_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_user_name` varchar(100) NOT NULL,
  `admin_user_pwd` varchar(100) NOT NULL,
  `admin_user_email` varchar(100) NOT NULL,
  `admin_user_phone` varchar(100) NOT NULL,
  `admin_user_mobile` varchar(100) NOT NULL,
  `admin_user_doj` date NOT NULL,
  `admin_user_last_login` datetime NOT NULL,
  PRIMARY KEY (`admin_user_id`),
  KEY `admin_user_id` (`admin_user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin_user`
--

INSERT INTO `tbl_admin_user` (`admin_user_id`, `admin_user_name`, `admin_user_pwd`, `admin_user_email`, `admin_user_phone`, `admin_user_mobile`, `admin_user_doj`, `admin_user_last_login`) VALUES
(2, 'admin', 'admin', 'admin@gmail.com', '', '9909437540', '2017-12-20', '2017-12-20 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_banner_ads`
--

DROP TABLE IF EXISTS `tbl_banner_ads`;
CREATE TABLE IF NOT EXISTS `tbl_banner_ads` (
  `banner_id` int(11) NOT NULL AUTO_INCREMENT,
  `banner_place` enum('Top','Bottom','Left','Right','Center') NOT NULL,
  `banner_href` longtext NOT NULL,
  `banner_start_date` date NOT NULL,
  `banner_end_date` date NOT NULL,
  `banner_image` longtext NOT NULL,
  `banner_amount` int(11) NOT NULL,
  `banner_status` enum('Active','In-Active') NOT NULL,
  PRIMARY KEY (`banner_id`),
  KEY `banner_id` (`banner_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_caste`
--

DROP TABLE IF EXISTS `tbl_caste`;
CREATE TABLE IF NOT EXISTS `tbl_caste` (
  `caste_id` int(11) NOT NULL AUTO_INCREMENT,
  `caste_name` varchar(100) NOT NULL,
  `caste_sort_order` int(11) NOT NULL,
  `caste_status` enum('Active','In-Active') NOT NULL,
  `religion_id` int(11) NOT NULL,
  PRIMARY KEY (`caste_id`),
  KEY `caste_id` (`caste_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_city`
--

DROP TABLE IF EXISTS `tbl_city`;
CREATE TABLE IF NOT EXISTS `tbl_city` (
  `city_id` int(11) NOT NULL AUTO_INCREMENT,
  `city_name` varchar(100) NOT NULL,
  `state_id` int(11) NOT NULL,
  PRIMARY KEY (`city_id`),
  KEY `city_id` (`city_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_city`
--

INSERT INTO `tbl_city` (`city_id`, `city_name`, `state_id`) VALUES
(1, 'Surat', 1),
(2, 'Ahmedabad', 1),
(3, 'Pune', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cms`
--

DROP TABLE IF EXISTS `tbl_cms`;
CREATE TABLE IF NOT EXISTS `tbl_cms` (
  `cms_about_us` longtext NOT NULL,
  `cms_contact_us` longtext NOT NULL,
  `cms_help` longtext NOT NULL,
  `cms_faq` longtext NOT NULL,
  `cms_privacy_policy` longtext NOT NULL,
  `cms_terms_condition` longtext NOT NULL,
  `cms_disclaimer` longtext NOT NULL,
  `cms_wedding_resources` longtext NOT NULL,
  `cms_copyright` longtext NOT NULL,
  `cms_trade_mark` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_cms`
--

INSERT INTO `tbl_cms` (`cms_about_us`, `cms_contact_us`, `cms_help`, `cms_faq`, `cms_privacy_policy`, `cms_terms_condition`, `cms_disclaimer`, `cms_wedding_resources`, `cms_copyright`, `cms_trade_mark`) VALUES
('h', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_country`
--

DROP TABLE IF EXISTS `tbl_country`;
CREATE TABLE IF NOT EXISTS `tbl_country` (
  `country_id` int(11) NOT NULL AUTO_INCREMENT,
  `country_name` varchar(100) NOT NULL,
  `country_code` varchar(100) NOT NULL,
  `country_std_code` varchar(100) NOT NULL,
  PRIMARY KEY (`country_id`),
  KEY `country_id` (`country_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_country`
--

INSERT INTO `tbl_country` (`country_id`, `country_name`, `country_code`, `country_std_code`) VALUES
(1, 'INDIA', '', ''),
(2, 'AMERICA', '', ''),
(3, 'indonesia', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_event`
--

DROP TABLE IF EXISTS `tbl_event`;
CREATE TABLE IF NOT EXISTS `tbl_event` (
  `event_id` int(11) NOT NULL AUTO_INCREMENT,
  `event_name` varchar(100) NOT NULL,
  `event_description` longtext NOT NULL,
  `event_date` date NOT NULL,
  `event_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `event_image` longtext NOT NULL,
  PRIMARY KEY (`event_id`),
  KEY `event_id` (`event_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

DROP TABLE IF EXISTS `tbl_feedback`;
CREATE TABLE IF NOT EXISTS `tbl_feedback` (
  `feedback_id` int(11) NOT NULL AUTO_INCREMENT,
  `feedback_name` varchar(100) NOT NULL,
  `feedback_company_name` varchar(100) NOT NULL,
  `feedback_email` varchar(100) NOT NULL,
  `feedback_mobile_no` varchar(100) NOT NULL,
  `feedback_address` longtext NOT NULL,
  `feedback_message` longtext NOT NULL,
  `feedback_date` date NOT NULL,
  PRIMARY KEY (`feedback_id`),
  KEY `feedback_id` (`feedback_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hobby`
--

DROP TABLE IF EXISTS `tbl_hobby`;
CREATE TABLE IF NOT EXISTS `tbl_hobby` (
  `hobby_id` int(11) NOT NULL AUTO_INCREMENT,
  `hobby_name` varchar(100) NOT NULL,
  PRIMARY KEY (`hobby_id`),
  KEY `hobby_id` (`hobby_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_hobby`
--

INSERT INTO `tbl_hobby` (`hobby_id`, `hobby_name`) VALUES
(1, 'Reading'),
(2, 'Travelling'),
(3, 'biking'),
(4, 'hiking'),
(5, 'photography'),
(6, 'working out'),
(7, 'swimming'),
(8, 'bowling'),
(9, 'dancing'),
(10, 'cooking'),
(11, 'painting');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_interest`
--

DROP TABLE IF EXISTS `tbl_interest`;
CREATE TABLE IF NOT EXISTS `tbl_interest` (
  `interest_id` int(11) NOT NULL AUTO_INCREMENT,
  `interest_name` varchar(100) NOT NULL,
  PRIMARY KEY (`interest_id`),
  KEY `interest_id` (`interest_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_member`
--

DROP TABLE IF EXISTS `tbl_member`;
CREATE TABLE IF NOT EXISTS `tbl_member` (
  `member_id` int(11) NOT NULL AUTO_INCREMENT,
  `member_name` varchar(100) NOT NULL,
  `member_father_name` varchar(100) NOT NULL,
  `member_gender` enum('Male','Female') NOT NULL,
  `member_address` longtext NOT NULL,
  `member_desc` longtext NOT NULL,
  `country_id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `member_other_city` varchar(100) NOT NULL,
  `member_postal_code` varchar(100) NOT NULL,
  `member_phone` varchar(100) NOT NULL,
  `member_mobile_no` varchar(100) NOT NULL,
  `member_email` varchar(100) NOT NULL,
  `member_password` varchar(100) NOT NULL,
  `member_gol` varchar(100) NOT NULL,
  `member_mother_tongue_id` int(11) NOT NULL,
  `member_dob` date NOT NULL,
  `member_age` int(11) NOT NULL,
  `member_blood_group` enum('A+','B+','O+','A-','B-','O-','AB+','AB-') NOT NULL,
  `member_birth_place` varchar(100) NOT NULL,
  `member_birth_time` varchar(100) NOT NULL,
  `member_belive_horoscope` enum('Yes','No') NOT NULL,
  `member_shani_mangal` enum('Yes','No') NOT NULL,
  `member_shani_mangal_desc` varchar(100) NOT NULL,
  `member_education` varchar(100) NOT NULL,
  `member_occupation` varchar(100) NOT NULL,
  `member_other_occupation` varchar(100) NOT NULL,
  `member_annual_income` varchar(100) NOT NULL,
  `member_job_desc` longtext NOT NULL,
  `member_height` varchar(100) NOT NULL,
  `member_weight` varchar(100) NOT NULL,
  `member_smoke` enum('Yes','No','Occasionally') NOT NULL,
  `member_drink` enum('Yes','No','Occasionally') NOT NULL,
  `member_diet` enum('Veg','Non-Veg','Occasionally Non-veg','Eggetarian','Jain','Vegan') NOT NULL,
  `member_skin_tone` enum('Very Fair','Fair','Tan','Dark') NOT NULL,
  `member_body_type` enum('Athletic','Average','Slim','Fat') NOT NULL,
  `member_spectacles` enum('Yes','No') NOT NULL,
  `member_spectables_no` varchar(100) NOT NULL,
  `member_physical_disable` enum('Yes','No') NOT NULL,
  `member_physical_disable_desc` longtext NOT NULL,
  `member_parents_alive` enum('Yes','No') NOT NULL,
  `member_father_occupation` varchar(100) NOT NULL,
  `member_mother_occupation` varchar(100) NOT NULL,
  `member_brother` int(11) NOT NULL,
  `member_sister` int(11) NOT NULL,
  `member_married_brother` int(11) NOT NULL,
  `member_married_sister` int(11) NOT NULL,
  `member_marital_status` enum('Single','Divorced','Widowed','Separated') NOT NULL,
  `member_children_girl` int(11) NOT NULL,
  `member_children_boy` int(11) NOT NULL,
  `member_residence_status` enum('Own','Rent','Not Applicable') NOT NULL,
  `member_nri_candidates_applicable` enum('Yes','No') NOT NULL,
  `member_expectation` longtext NOT NULL,
  `member_photo1` longtext NOT NULL,
  `member_photo2` longtext NOT NULL,
  `member_photo3` longtext NOT NULL,
  `member_photo4` longtext NOT NULL,
  `member_photo5` longtext NOT NULL,
  `member_doj` date NOT NULL,
  `member_profile_status` enum('Private','Public') NOT NULL,
  `member_status` enum('Active','In-Active','Blocked') NOT NULL,
  PRIMARY KEY (`member_id`),
  KEY `member_id` (`member_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_member`
--

INSERT INTO `tbl_member` (`member_id`, `member_name`, `member_father_name`, `member_gender`, `member_address`, `member_desc`, `country_id`, `state_id`, `city_id`, `member_other_city`, `member_postal_code`, `member_phone`, `member_mobile_no`, `member_email`, `member_password`, `member_gol`, `member_mother_tongue_id`, `member_dob`, `member_age`, `member_blood_group`, `member_birth_place`, `member_birth_time`, `member_belive_horoscope`, `member_shani_mangal`, `member_shani_mangal_desc`, `member_education`, `member_occupation`, `member_other_occupation`, `member_annual_income`, `member_job_desc`, `member_height`, `member_weight`, `member_smoke`, `member_drink`, `member_diet`, `member_skin_tone`, `member_body_type`, `member_spectacles`, `member_spectables_no`, `member_physical_disable`, `member_physical_disable_desc`, `member_parents_alive`, `member_father_occupation`, `member_mother_occupation`, `member_brother`, `member_sister`, `member_married_brother`, `member_married_sister`, `member_marital_status`, `member_children_girl`, `member_children_boy`, `member_residence_status`, `member_nri_candidates_applicable`, `member_expectation`, `member_photo1`, `member_photo2`, `member_photo3`, `member_photo4`, `member_photo5`, `member_doj`, `member_profile_status`, `member_status`) VALUES
(1, 'keyur', 'sjndjn', 'Male', 'sd', '', 1, 1, 1, 'wdnf', '395', '2583691470', '8527419630', 'kadamkeyur@gmail.com', '234', 'sdd', 0, '1997-12-14', 0, 'A+', 'dfd', '5', 'No', 'No', 'sfdd', 'dfd', 'ff', 'df', '2000', 'dfd', '5', '50', 'Yes', 'Yes', 'Veg', 'Very Fair', 'Average', 'Yes', '5', 'No', 'dfdf', 'Yes', 'dfdf', '', 1, 1, 1, 1, 'Single', 0, 0, 'Own', 'Yes', 'fdf', '1.jpg', 'dfdf', 'dfdf', 'dfdf', 'dfd', '2018-01-01', 'Private', 'Active'),
(2, 'vidhi', 'ssdd', 'Female', 'dsdsadd', 'hgdvskbscakhdvsdv hdv hdvg bu vanab.', 1, 1, 2, 'surat', '395', '8529637410', '9875326410', 'vidhi@gmail.com', '123', 'dufh', 3, '1997-01-18', 45, 'A+', 'surat', '05', 'No', 'No', 'dsdsd', 'asdsd', 'sdssf', 'sdscd', '5200', 'sdxxs', '5', '50', 'Yes', 'Yes', 'Veg', 'Very Fair', 'Slim', 'No', '2', 'No', 'smjbsdn', 'Yes', 'sddsd', '', 1, 1, 1, 1, 'Single', 0, 0, 'Own', 'Yes', 'dfdfddfd', 'a8.jpg', 'p2.jpg', 'p3.jpg', 'p4.jpg', 'p4.jpg', '2018-01-14', 'Public', 'Active'),
(3, 'shivani', 'dfdfdf', 'Female', 'dfbdfbh', 'hjdnod pdjbdd qwq zdf u jfbenf hvsddh  vsvdh hgs', 1, 1, 1, 'surat', '395', '9654783210', '8866247723', 'shivani@gmail.com', '123', 'dgvfvh', 3, '1997-04-25', 21, 'A+', 'surat', '5', 'No', 'No', 'df', 'hhdgf', 'djf', 'fb', '5200', 'jbdfhdb', '5', '50', 'Yes', 'Yes', 'Veg', 'Very Fair', 'Slim', 'Yes', '2', 'No', 'dbfdhfh', 'Yes', 'gdyg', '', 1, 1, 1, 1, 'Single', 0, 0, 'Own', 'No', 'dfdhg', 'p14.jpg', 'jdb', 'djfb', 'djb', 'db', '2018-01-01', 'Public', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_member_hobbies`
--

DROP TABLE IF EXISTS `tbl_member_hobbies`;
CREATE TABLE IF NOT EXISTS `tbl_member_hobbies` (
  `member_hobby_id` int(11) NOT NULL AUTO_INCREMENT,
  `member_id` int(11) NOT NULL,
  `hobby_id` int(11) NOT NULL,
  PRIMARY KEY (`member_hobby_id`),
  KEY `member_hobby_id` (`member_hobby_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_member_interest`
--

DROP TABLE IF EXISTS `tbl_member_interest`;
CREATE TABLE IF NOT EXISTS `tbl_member_interest` (
  `member_id` int(11) NOT NULL,
  `interest_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_member_old`
--

DROP TABLE IF EXISTS `tbl_member_old`;
CREATE TABLE IF NOT EXISTS `tbl_member_old` (
  `member_id` int(11) NOT NULL AUTO_INCREMENT,
  `member_name` varchar(100) NOT NULL,
  `member_gender` enum('Male','Female') NOT NULL,
  `member_matrimonial_id` varchar(100) NOT NULL,
  `member_address` longtext NOT NULL,
  `country_id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `member_phone` varchar(100) NOT NULL,
  `member_mobile` varchar(100) NOT NULL,
  `member_email` varchar(100) NOT NULL,
  `member_password` varchar(100) NOT NULL,
  `member_total_views` int(11) NOT NULL,
  `member_status` enum('Active','In-Active','New','Paid','Banned','Lapsed') NOT NULL,
  `member_is_featured` enum('Yes','No') NOT NULL,
  `member_dob` date NOT NULL,
  `member_maritial_status` enum('Single','Widowed','Divorced','Separated') NOT NULL,
  `member_no_of_children` int(11) NOT NULL,
  `member_children_live_with` enum('Living With Me','Not Living With Me') NOT NULL,
  `member_reference_by` enum('Advertisements','Friends','Search Engines','Others') NOT NULL,
  `member_birth_place` varchar(100) NOT NULL,
  `member_resident_status` enum('owned','on rent') NOT NULL,
  `member_created_by` enum('self','parents','guardian','son','daughter','brother','sister','friend','Relative','Member of Marriage Bureau') NOT NULL,
  `education_id` int(11) NOT NULL,
  `member_education_details` longtext NOT NULL,
  `member_employed_in` enum('Business','Defence','Government','Not Employed','Private','Public Sector','Others') NOT NULL,
  `occupation_id` int(11) NOT NULL,
  `member_occupation_details` longtext NOT NULL,
  `member_annual_income` longtext NOT NULL,
  `religion_id` int(11) NOT NULL,
  `caste_id` int(11) NOT NULL,
  `member_subcaste` varchar(100) NOT NULL,
  `mother_tongue_id` int(11) NOT NULL,
  `star_id` int(11) NOT NULL,
  `moon_sign_id` int(11) NOT NULL,
  `member_horoscope_match` longtext NOT NULL,
  `member_manglik` enum('Yes','No') NOT NULL,
  `member_gothra` varchar(100) NOT NULL,
  `member_height` varchar(100) NOT NULL,
  `member_blood_group` enum('A+','A-','B+','B-','AB+','AB-','O+','O-') NOT NULL,
  `member_complexion` enum('Fair','Brown','Black') NOT NULL,
  `member_smoke` enum('Yes','No') NOT NULL,
  `member_weight` varchar(100) NOT NULL,
  `member_body_type` enum('Over-Weight','Fit','Thin') NOT NULL,
  `member_diet` enum('Veg','Non-Veg','Eggetarian') NOT NULL,
  `member_drink` enum('Yes','No') NOT NULL,
  `member_family_details` longtext NOT NULL,
  `member_family_values` enum('Traditional','Orthodox','Liberal','Moderate') NOT NULL,
  `member_family_status` enum('Rich','Upper Middle Class','High Class','Middle Class','Do not Want to tell at this time') NOT NULL,
  `member_mother_name` varchar(100) NOT NULL,
  `member_father_name` varchar(100) NOT NULL,
  `member_no_of_brothers` int(11) NOT NULL,
  `member_no_of_elder_brothers` int(11) NOT NULL,
  `member_no_of_younger_brothers` int(11) NOT NULL,
  `member_no_of_sisters` int(11) NOT NULL,
  `member_no_of_elder_sisters` int(11) NOT NULL,
  `member_no_of_younger_sisters` int(11) NOT NULL,
  `member_no_of_married_brothers` int(11) NOT NULL,
  `member_no_of_married_sisters` int(11) NOT NULL,
  `member_family_type` enum('Seperate Family','Joint Family') NOT NULL,
  `member_family_origin` varchar(100) NOT NULL,
  `member_father_occupation` varchar(100) NOT NULL,
  `member_mother_occupation` varchar(100) NOT NULL,
  `member_looking_for` enum('None','Never Married','Widowed','Divorced','Seperated') NOT NULL,
  `member_partner_age_from` int(11) NOT NULL,
  `member_partner_age_to` int(11) NOT NULL,
  `member_partner_expectation` longtext NOT NULL,
  `member_partner_country` int(11) NOT NULL,
  `member_partner_height_from` varchar(100) NOT NULL,
  `member_partner_height_to` varchar(100) NOT NULL,
  `member_partner_complexion` enum('Does Not Matter','Very Fair','Fair','Wheatish','Wheatish Medium','Wheatish Brown','Dark') NOT NULL,
  `member_partner_education` enum('Does Not Matter','Bachelors','Masters','Doctorate','Diploma','Professional Degrees','Medicine','Trade School','High School - 10th','Higher Secondary - 12th','Less Than High Schol') NOT NULL,
  `member_partner_reiligion` int(11) NOT NULL,
  `member_partner_caste` int(11) NOT NULL,
  `member_partner_resident_status` enum('Does Not Matter','Citizen','Permanant Resident','Student Visa','Temperory Visa','Work Permit') NOT NULL,
  `member_description` longtext NOT NULL,
  PRIMARY KEY (`member_id`),
  KEY `member_id` (`member_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_member_photo`
--

DROP TABLE IF EXISTS `tbl_member_photo`;
CREATE TABLE IF NOT EXISTS `tbl_member_photo` (
  `member_photo_id` int(11) NOT NULL AUTO_INCREMENT,
  `member_id` int(11) NOT NULL,
  `member_photo1` longtext NOT NULL,
  `member_photo1_status` enum('Approve','Decline') NOT NULL,
  `member_photo2` longtext NOT NULL,
  `member_photo2_status` enum('Approve','Decline') NOT NULL,
  `member_photo3` longtext NOT NULL,
  `member_photo3_status` enum('Approve','Decline') NOT NULL,
  `member_scanned_horroscope` longtext NOT NULL,
  PRIMARY KEY (`member_photo_id`),
  KEY `member_photo_id` (`member_photo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_member_plan`
--

DROP TABLE IF EXISTS `tbl_member_plan`;
CREATE TABLE IF NOT EXISTS `tbl_member_plan` (
  `member_plan_id` int(11) NOT NULL AUTO_INCREMENT,
  `member_id` int(11) NOT NULL,
  `plan_id` int(11) NOT NULL,
  `member_plan_start_date` date NOT NULL,
  `member_plan_end_date` date NOT NULL,
  `member_plan_views` int(11) NOT NULL,
  `member_plan_status` enum('Active','In-Active') NOT NULL,
  PRIMARY KEY (`member_plan_id`),
  KEY `member_plan_id` (`member_plan_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mother_tongue`
--

DROP TABLE IF EXISTS `tbl_mother_tongue`;
CREATE TABLE IF NOT EXISTS `tbl_mother_tongue` (
  `mother_tongue_id` int(11) NOT NULL AUTO_INCREMENT,
  `mother_tongue_name` varchar(100) NOT NULL,
  PRIMARY KEY (`mother_tongue_id`),
  KEY `mother_tongue_id` (`mother_tongue_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_mother_tongue`
--

INSERT INTO `tbl_mother_tongue` (`mother_tongue_id`, `mother_tongue_name`) VALUES
(1, 'english'),
(2, 'hindi'),
(3, 'gujarati');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_partner_preference`
--

DROP TABLE IF EXISTS `tbl_partner_preference`;
CREATE TABLE IF NOT EXISTS `tbl_partner_preference` (
  `partner_id` int(11) NOT NULL AUTO_INCREMENT,
  `member_id` int(11) NOT NULL,
  `partner_age` varchar(100) NOT NULL,
  `partner_marital_status` enum('Single','Divorced','Widowed','Separated') NOT NULL,
  `partner_body_type` enum('Athletic','Average','Slim','Fat') NOT NULL,
  `partner_skin_tone` enum('Very Fair','Fair','Tan','Dark') NOT NULL,
  `partner_height` int(11) NOT NULL,
  `partner_weight` int(11) NOT NULL,
  `partner_diet` enum('Veg','Non-Veg','Occasionally Non-veg','Eggetarian','Jain','Vegan') NOT NULL,
  `partner_manglik` enum('Yes','No') NOT NULL,
  `partner_mother_tongue_id` int(11) NOT NULL,
  `partner_education` varchar(100) NOT NULL,
  `partner_occupation` varchar(100) NOT NULL,
  `partner_country_residency` varchar(100) NOT NULL,
  `partner_state` varchar(100) NOT NULL,
  `partner_residency_status` enum('Own','Rent','Not Applicable') NOT NULL,
  PRIMARY KEY (`partner_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_partner_preference`
--

INSERT INTO `tbl_partner_preference` (`partner_id`, `member_id`, `partner_age`, `partner_marital_status`, `partner_body_type`, `partner_skin_tone`, `partner_height`, `partner_weight`, `partner_diet`, `partner_manglik`, `partner_mother_tongue_id`, `partner_education`, `partner_occupation`, `partner_country_residency`, `partner_state`, `partner_residency_status`) VALUES
(1, 2, '20 to 26', 'Single', 'Athletic', 'Fair', 150, 50, 'Non-Veg', 'No', 1, 'dfdf', 'dsff', 'india', 'gujarat', 'Own');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_photo`
--

DROP TABLE IF EXISTS `tbl_photo`;
CREATE TABLE IF NOT EXISTS `tbl_photo` (
  `photo_id` int(11) NOT NULL AUTO_INCREMENT,
  `photo_title` longtext NOT NULL,
  `photo_file` longtext NOT NULL,
  `photo_album_id` int(11) NOT NULL,
  PRIMARY KEY (`photo_id`),
  KEY `photo_id` (`photo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_photo_album`
--

DROP TABLE IF EXISTS `tbl_photo_album`;
CREATE TABLE IF NOT EXISTS `tbl_photo_album` (
  `photo_album_id` int(11) NOT NULL AUTO_INCREMENT,
  `photo_album_name` varchar(100) NOT NULL,
  `photo_album_description` longtext NOT NULL,
  PRIMARY KEY (`photo_album_id`),
  KEY `photo_album_id` (`photo_album_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_plan`
--

DROP TABLE IF EXISTS `tbl_plan`;
CREATE TABLE IF NOT EXISTS `tbl_plan` (
  `plan_id` int(11) NOT NULL AUTO_INCREMENT,
  `plan_name` varchar(100) NOT NULL,
  `plan_profile_views` int(11) NOT NULL,
  `plan_days_validity` int(11) NOT NULL,
  `plan_amount` int(11) NOT NULL,
  `plan_description` longtext NOT NULL,
  `plan_status` enum('Active','In-Active') NOT NULL,
  PRIMARY KEY (`plan_id`),
  KEY `plan_id` (`plan_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_religion`
--

DROP TABLE IF EXISTS `tbl_religion`;
CREATE TABLE IF NOT EXISTS `tbl_religion` (
  `religion_id` int(11) NOT NULL AUTO_INCREMENT,
  `religion_name` varchar(100) NOT NULL,
  `religion_sort_order` int(11) NOT NULL,
  `religion_status` enum('Active','In-Active') NOT NULL,
  PRIMARY KEY (`religion_id`),
  KEY `religion_id` (`religion_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_religion`
--

INSERT INTO `tbl_religion` (`religion_id`, `religion_name`, `religion_sort_order`, `religion_status`) VALUES
(1, 'Hindus', 1, 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_settings`
--

DROP TABLE IF EXISTS `tbl_settings`;
CREATE TABLE IF NOT EXISTS `tbl_settings` (
  `settings_website_title` longtext NOT NULL,
  `settings_meta_keywords` longtext NOT NULL,
  `settings_meta_desc` longtext NOT NULL,
  `settings_website_name` varchar(100) NOT NULL,
  `settings_logo` longtext NOT NULL,
  `settings_currency_code` varchar(100) NOT NULL,
  `settings_currency_symbol` varchar(100) NOT NULL,
  `settings_address` longtext NOT NULL,
  `settings_phone` varchar(100) NOT NULL,
  `settings_fax` varchar(100) NOT NULL,
  `settings_contact_email` varchar(100) NOT NULL,
  `settings_map_address` varchar(100) NOT NULL,
  `settings_toll_free` varchar(100) NOT NULL,
  `settings_small_logo` longtext NOT NULL,
  `settings_footer_logo` longtext NOT NULL,
  `settings_favicon` longtext NOT NULL,
  `facebook_url` longtext NOT NULL,
  `google_plus_url` longtext NOT NULL,
  `twitter_url` longtext NOT NULL,
  `pinterest_url` longtext NOT NULL,
  `instagram_url` longtext NOT NULL,
  `settings_show_badges` int(1) NOT NULL,
  `settings_single_min_qty` int(11) NOT NULL,
  `settings_total_min_qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_settings`
--

INSERT INTO `tbl_settings` (`settings_website_title`, `settings_meta_keywords`, `settings_meta_desc`, `settings_website_name`, `settings_logo`, `settings_currency_code`, `settings_currency_symbol`, `settings_address`, `settings_phone`, `settings_fax`, `settings_contact_email`, `settings_map_address`, `settings_toll_free`, `settings_small_logo`, `settings_footer_logo`, `settings_favicon`, `facebook_url`, `google_plus_url`, `twitter_url`, `pinterest_url`, `instagram_url`, `settings_show_badges`, `settings_single_min_qty`, `settings_total_min_qty`) VALUES
('Darji Samaj Matrimonial', 'Darji Samaj Matrimonial', 'Darji Samaj Matrimonial', 'Darji Samaj Matrimonial', 'VqjXB_09xqv_58340118_gaj_logo_100.png', 'Rs.', '', '1st Floor, Shop No. 1084, Vankar Textile Market,\r\nRing Road, Surat, Gujarat, 395002', '82389 23571', '0', 'hiralsaree1@gmail.com', '', '', 'laumr_kx4F5_48811127_', 'laumr_kx4F5_48811127_', 'laumr_kx4F5_48811127_', 'http://www.facebook.com', 'http://www.google.com', 'http://www.twitter.com', 'http://www.pinterest.com', 'http://www.instagram.com', 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_settings_old`
--

DROP TABLE IF EXISTS `tbl_settings_old`;
CREATE TABLE IF NOT EXISTS `tbl_settings_old` (
  `settings_meta_title` longtext NOT NULL,
  `settings_meta_description` longtext NOT NULL,
  `settings_meta_tag_keywords` longtext NOT NULL,
  `settings_business_name` varchar(100) NOT NULL,
  `settings_owner_name` varchar(100) NOT NULL,
  `settings_address` longtext NOT NULL,
  `settings_geo_code` varchar(100) NOT NULL,
  `settings_geo_code_label` varchar(100) NOT NULL,
  `settings_email` varchar(100) NOT NULL,
  `settings_telephone` varchar(100) NOT NULL,
  `settings_mobile` varchar(100) NOT NULL,
  `settings_fax` varchar(100) NOT NULL,
  `settings_opening_times` longtext NOT NULL,
  `settings_comment` longtext NOT NULL,
  `country_id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `settings_logo` longtext NOT NULL,
  `settings_favicon` longtext NOT NULL,
  `settings_smtp_host` varchar(100) NOT NULL,
  `settings_smtp_username` varchar(100) NOT NULL,
  `settings_smtp_password` varchar(100) NOT NULL,
  `settings_smtp_port` varchar(100) NOT NULL,
  `settings_smtp_timeout` varchar(100) NOT NULL,
  `settings_google_analytics` longtext NOT NULL,
  `settings_currency_code` varchar(100) NOT NULL,
  `settings_currency_symbol` varchar(100) NOT NULL,
  `settings_toll_free_number` varchar(100) NOT NULL,
  `settings_small_logo` longtext NOT NULL,
  `settings_footer_logo` longtext NOT NULL,
  `settings_facebook_url` longtext NOT NULL,
  `settings_google_url` longtext NOT NULL,
  `settings_twitter_url` longtext NOT NULL,
  `settings_linkedin_url` longtext NOT NULL,
  `settings_instagram_url` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_settings_old`
--

INSERT INTO `tbl_settings_old` (`settings_meta_title`, `settings_meta_description`, `settings_meta_tag_keywords`, `settings_business_name`, `settings_owner_name`, `settings_address`, `settings_geo_code`, `settings_geo_code_label`, `settings_email`, `settings_telephone`, `settings_mobile`, `settings_fax`, `settings_opening_times`, `settings_comment`, `country_id`, `state_id`, `city_id`, `settings_logo`, `settings_favicon`, `settings_smtp_host`, `settings_smtp_username`, `settings_smtp_password`, `settings_smtp_port`, `settings_smtp_timeout`, `settings_google_analytics`, `settings_currency_code`, `settings_currency_symbol`, `settings_toll_free_number`, `settings_small_logo`, `settings_footer_logo`, `settings_facebook_url`, `settings_google_url`, `settings_twitter_url`, `settings_linkedin_url`, `settings_instagram_url`) VALUES
('sample', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slider`
--

DROP TABLE IF EXISTS `tbl_slider`;
CREATE TABLE IF NOT EXISTS `tbl_slider` (
  `slider_id` int(11) NOT NULL AUTO_INCREMENT,
  `slider_title` longtext NOT NULL,
  `slider_image` longtext NOT NULL,
  `slider_href` longtext NOT NULL,
  `slider_order` int(11) NOT NULL,
  `slider_content` longtext NOT NULL,
  `slider_content_position` varchar(100) NOT NULL,
  `slider_status` enum('Active','In-Active') NOT NULL,
  PRIMARY KEY (`slider_id`),
  KEY `slider_id` (`slider_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_slider`
--

INSERT INTO `tbl_slider` (`slider_id`, `slider_title`, `slider_image`, `slider_href`, `slider_order`, `slider_content`, `slider_content_position`, `slider_status`) VALUES
(1, 'new slider', 'VcMlB_7eq0P_70548950_BANNER-2.jpg', 'http://www.google.com', 1, '', '', 'Active'),
(2, 'new slider check', 'BOZzd_eaFxB_88612946_kota-silk-sarees.jpg', 'http://www.google.com', 1, 'helo', '10', 'Active'),
(3, 'New', 'wFLgE_NqBze_54989563_Wedding-Sarees-Online.jpg', '', 0, '', '', 'Active'),
(4, 'Wedding Sarees', 'pauCy_2JvL7_80500916_weddingsaree.jpg', '', 0, '', '', 'In-Active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sms_provider`
--

DROP TABLE IF EXISTS `tbl_sms_provider`;
CREATE TABLE IF NOT EXISTS `tbl_sms_provider` (
  `sms_provider_id` int(11) NOT NULL AUTO_INCREMENT,
  `sms_provider_name` varchar(100) NOT NULL,
  `sms_provider_url` longtext NOT NULL,
  `sms_provider_user` varchar(100) NOT NULL,
  `sms_provider_password` varchar(100) NOT NULL,
  `sms_provider_status` enum('Active','In-Active') NOT NULL,
  PRIMARY KEY (`sms_provider_id`),
  KEY `sms_provider_id` (`sms_provider_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_staff`
--

DROP TABLE IF EXISTS `tbl_staff`;
CREATE TABLE IF NOT EXISTS `tbl_staff` (
  `staff_id` int(11) NOT NULL AUTO_INCREMENT,
  `staff_name` varchar(100) NOT NULL,
  `staff_username` varchar(100) NOT NULL,
  `staff_email` varchar(100) NOT NULL,
  `staff_password` varchar(100) NOT NULL,
  `staff_about` longtext NOT NULL,
  `staff_status` enum('Active','In-Active') NOT NULL,
  `staff_doj` date NOT NULL,
  `staff_last_login_date` datetime NOT NULL,
  PRIMARY KEY (`staff_id`),
  KEY `staff_id` (`staff_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_state`
--

DROP TABLE IF EXISTS `tbl_state`;
CREATE TABLE IF NOT EXISTS `tbl_state` (
  `state_id` int(11) NOT NULL AUTO_INCREMENT,
  `state_name` varchar(100) NOT NULL,
  `country_id` int(11) NOT NULL,
  PRIMARY KEY (`state_id`),
  KEY `state_id` (`state_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_state`
--

INSERT INTO `tbl_state` (`state_id`, `state_name`, `country_id`) VALUES
(1, 'GUJARAT', 1),
(2, 'MAHARASHTRA', 1),
(3, 'PUNJAB', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subscribe`
--

DROP TABLE IF EXISTS `tbl_subscribe`;
CREATE TABLE IF NOT EXISTS `tbl_subscribe` (
  `subscribe_id` int(11) NOT NULL AUTO_INCREMENT,
  `subscribe_name` varchar(100) NOT NULL,
  `subscribe_email` varchar(100) NOT NULL,
  `subscribe_phone` varchar(100) NOT NULL,
  `subscribe_status` enum('Subscribe','Unsubscribe') NOT NULL,
  `member_id` int(11) NOT NULL,
  PRIMARY KEY (`subscribe_id`),
  KEY `subscribe_id` (`subscribe_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subscribe_email`
--

DROP TABLE IF EXISTS `tbl_subscribe_email`;
CREATE TABLE IF NOT EXISTS `tbl_subscribe_email` (
  `subscribe_email_id` int(11) NOT NULL AUTO_INCREMENT,
  `campaign_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  PRIMARY KEY (`subscribe_email_id`),
  KEY `subscribe_email_id` (`subscribe_email_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subscribe_email_campaign`
--

DROP TABLE IF EXISTS `tbl_subscribe_email_campaign`;
CREATE TABLE IF NOT EXISTS `tbl_subscribe_email_campaign` (
  `campaign_id` int(11) NOT NULL AUTO_INCREMENT,
  `campaign_subject` longtext NOT NULL,
  `campaign_message` longtext NOT NULL,
  `campaign_status` enum('Active','In-Active') NOT NULL,
  `campaign_date_time` datetime NOT NULL,
  PRIMARY KEY (`campaign_id`),
  KEY `campaign_id` (`campaign_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_success_story`
--

DROP TABLE IF EXISTS `tbl_success_story`;
CREATE TABLE IF NOT EXISTS `tbl_success_story` (
  `success_story_id` int(11) NOT NULL AUTO_INCREMENT,
  `success_story_bride_name` varchar(100) NOT NULL,
  `success_story_bride_matri_id` varchar(100) NOT NULL,
  `success_story_groom_name` varchar(100) NOT NULL,
  `success_story_groom_matri_id` varchar(100) NOT NULL,
  `success_story_wedding_date` date NOT NULL,
  `success_story_mobile_number` varchar(100) NOT NULL,
  `success_story_contact_address` longtext NOT NULL,
  `success_story_comments` longtext NOT NULL,
  `success_story_wedding_photo` longtext NOT NULL,
  `success_story_status` enum('Active','In-Active') NOT NULL,
  PRIMARY KEY (`success_story_id`),
  KEY `success_story_id` (`success_story_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_video`
--

DROP TABLE IF EXISTS `tbl_video`;
CREATE TABLE IF NOT EXISTS `tbl_video` (
  `video_id` int(11) NOT NULL AUTO_INCREMENT,
  `video_title` longtext NOT NULL,
  `video_youtube_url` longtext NOT NULL,
  `video_status` enum('Active','In-Active') NOT NULL,
  PRIMARY KEY (`video_id`),
  KEY `video_id` (`video_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
