-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2022 at 07:23 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_matrimonial`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bride`
--

CREATE TABLE `tbl_bride` (
  `ps_profile` varchar(100) DEFAULT NULL,
  `ps_name` varchar(100) DEFAULT NULL,
  `ps_gender` varchar(100) DEFAULT NULL,
  `ps_dob` varchar(100) DEFAULT NULL,
  `ps_religion` varchar(100) DEFAULT NULL,
  `ps_caste` varchar(100) DEFAULT NULL,
  `ps_mother_language` varchar(100) DEFAULT NULL,
  `ps_contact` varchar(100) DEFAULT NULL,
  `ps_email` varchar(100) NOT NULL,
  `ps_password` varchar(100) DEFAULT NULL,
  `ps_question` varchar(100) DEFAULT NULL,
  `ps_answer` varchar(100) DEFAULT NULL,
  `ps_marital` varchar(100) DEFAULT NULL,
  `ps_willing` varchar(100) DEFAULT NULL,
  `ps_country` varchar(100) DEFAULT NULL,
  `ps_state` varchar(100) DEFAULT NULL,
  `ps_city` varchar(100) DEFAULT NULL,
  `ps_height` varchar(10) DEFAULT NULL,
  `ps_status` varchar(15) DEFAULT NULL,
  `ps_qualification` varchar(50) DEFAULT NULL,
  `ps_occupation` varchar(50) DEFAULT NULL,
  `ps_fstatus` varchar(50) DEFAULT NULL,
  `ps_ftype` varchar(50) DEFAULT NULL,
  `ps_fvalue` varchar(50) DEFAULT NULL,
  `ps_ehabits` varchar(50) DEFAULT NULL,
  `ps_amyself` varchar(500) DEFAULT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_bride`
--

INSERT INTO `tbl_bride` (`ps_profile`, `ps_name`, `ps_gender`, `ps_dob`, `ps_religion`, `ps_caste`, `ps_mother_language`, `ps_contact`, `ps_email`, `ps_password`, `ps_question`, `ps_answer`, `ps_marital`, `ps_willing`, `ps_country`, `ps_state`, `ps_city`, `ps_height`, `ps_status`, `ps_qualification`, `ps_occupation`, `ps_fstatus`, `ps_ftype`, `ps_fvalue`, `ps_ehabits`, `ps_amyself`, `status`) VALUES
('Myself', 'Patima', 'Female', '03/10/1999', 'Muslim', 'Nadaf', 'Hindi', '8909890987', 'patima@gmail.com', 'Pathima@', 'Who is your hero?', 'rithesh', 'Unmarried', 'No', 'India', 'Mumbai', 'Powai', '5.1-5.5', 'Normal', 'B.Ed', 'Working', 'Upper-Class', 'Joint', 'Liberal', 'Veg/Non Vegetarian', '              hii', 1),
('Myself', 'Raksha', 'Female', '04/07/1995', 'Hindu', 'Devadiga', 'Kannada', '7026465787', 'raksha@gmail.com', 'Raksha@1', 'Who is your hero?', 'shrimurali', 'Unmarried', 'No', 'India', 'Karnataka', 'Udupi', '4.2', 'Normal', 'High School/Secondary', 'Student', 'Middle-Class', 'Joint', 'Traditional', 'Vegetarian', '     I am very simple,god fearing,caring,understanding,trustworthy human being', 1),
('Myself', 'Reema', 'Female', '01/05/1997', 'Hindu', 'Mogaveera', 'Kannada', '9089878767', 'reema@gmail.com', 'Reema@12', 'Who is your hero?', 'yash', 'Unmarried', 'No', 'India', 'Karnataka', 'Udupi', '5.1-5.5', 'Normal', 'Degree', 'Working', 'Upper-Class', 'Joint', 'Modern', 'Veg/Non Vegetarian', '              i am reema', 1),
('Sister', 'Reena', 'Female', '02/09/1988', 'Christian', 'Catholic', 'English', '8989898767', 'reena@gmail.com', 'Reena@12', 'Who is your hero?', 'sachin', 'Unmarried', 'No', 'India', 'Karnataka', 'Mangalore', '5.1-5.5', 'Normal', 'PG', 'Working', 'Upper-Class', 'Joint', 'Arthood', 'Non Vegetarian', '              hii', 1),
('Myself', 'Smitha', 'Female', '03/10/1999', 'Hindu', 'Mogaveera', 'Kannada', '9090987876', 'smitha@gmail.com', 'Smitha@1', 'Who is your hero?', 'sudeep', 'Unmarried', 'No', 'India', 'Karnataka', 'Udupi', '5.1-5.5', 'Normal', 'High School/Secondary', 'Student', 'Middle-Class', 'Joint', 'Traditional', 'Non Vegetarian', '              haii', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bride_preference`
--

CREATE TABLE `tbl_bride_preference` (
  `ps_email` varchar(100) NOT NULL,
  `ps_age` varchar(100) DEFAULT NULL,
  `ps_height` varchar(100) DEFAULT NULL,
  `ps_marital` varchar(100) DEFAULT NULL,
  `ps_mtongue` varchar(100) DEFAULT NULL,
  `ps_pstatus` varchar(100) DEFAULT NULL,
  `ps_ehabbits` varchar(100) DEFAULT NULL,
  `ps_religion` varchar(10) DEFAULT NULL,
  `ps_caste` varchar(15) DEFAULT NULL,
  `ps_qualification` varchar(50) DEFAULT NULL,
  `ps_occupation` varchar(50) DEFAULT NULL,
  `ps_fstatus` varchar(15) DEFAULT NULL,
  `ps_ftype` varchar(15) DEFAULT NULL,
  `ps_fvalue` varchar(15) DEFAULT NULL,
  `ps_country` varchar(100) DEFAULT NULL,
  `ps_location` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_bride_preference`
--

INSERT INTO `tbl_bride_preference` (`ps_email`, `ps_age`, `ps_height`, `ps_marital`, `ps_mtongue`, `ps_pstatus`, `ps_ehabbits`, `ps_religion`, `ps_caste`, `ps_qualification`, `ps_occupation`, `ps_fstatus`, `ps_ftype`, `ps_fvalue`, `ps_country`, `ps_location`) VALUES
('patima@gmail.com', '22-26', '4.5-5.0', 'Unmarried', 'Hindi', 'Normal', 'Veg/Non Vegetarian', 'Muslim', 'Nadaf', 'B.Ed', 'Working', 'Middle-Class', 'Joint', 'Liberal', 'India', 'Powai'),
('raksha@gmail.com', '22-26', '4.5-5.0', 'Unmarried', 'Kannada', 'Normal', 'Vegetarian', 'Hindu', 'Devadiga', 'High School/Secondary', 'Student', 'Middle-Class', 'Joint', 'Traditional', 'India', 'Udupi'),
('reema@gmail.com', '22-26', '5.1-5.5', 'Unmarried', 'Kannada', 'Normal', 'Veg/Non Vegetarian', 'Hindu', 'Mogaveera', 'Degree', 'Student', 'Middle-Class', 'Joint', 'Traditional', 'India', 'Udupi'),
('reena@gmail.com', '18-21', '4.5-5.0', 'Unmarried', 'English', 'Normal', 'Non Vegetarian', 'Christian', 'Catholic', 'PG', 'Working', 'Upper-Class', 'Joint', 'Traditional', 'America', 'Mangalore');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE `tbl_feedback` (
  `ps_email` varchar(15) NOT NULL,
  `f_name` varchar(25) NOT NULL,
  `f_dob` varchar(100) NOT NULL,
  `f_comm` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_groom`
--

CREATE TABLE `tbl_groom` (
  `ps_profile` varchar(100) DEFAULT NULL,
  `ps_name` varchar(100) DEFAULT NULL,
  `ps_gender` varchar(100) DEFAULT NULL,
  `ps_dob` varchar(100) DEFAULT NULL,
  `ps_religion` varchar(100) DEFAULT NULL,
  `ps_caste` varchar(100) DEFAULT NULL,
  `ps_mother_language` varchar(100) DEFAULT NULL,
  `ps_contact` varchar(100) DEFAULT NULL,
  `ps_email` varchar(100) NOT NULL,
  `ps_password` varchar(100) DEFAULT NULL,
  `ps_question` varchar(100) DEFAULT NULL,
  `ps_answer` varchar(100) DEFAULT NULL,
  `ps_marital` varchar(100) DEFAULT NULL,
  `ps_willing` varchar(100) DEFAULT NULL,
  `ps_country` varchar(100) DEFAULT NULL,
  `ps_state` varchar(100) DEFAULT NULL,
  `ps_city` varchar(100) DEFAULT NULL,
  `ps_height` varchar(10) DEFAULT NULL,
  `ps_status` varchar(15) DEFAULT NULL,
  `ps_qualification` varchar(50) DEFAULT NULL,
  `ps_occupation` varchar(50) DEFAULT NULL,
  `ps_fstatus` varchar(50) DEFAULT NULL,
  `ps_ftype` varchar(50) DEFAULT NULL,
  `ps_fvalue` varchar(50) DEFAULT NULL,
  `ps_ehabits` varchar(50) DEFAULT NULL,
  `ps_amyself` varchar(500) DEFAULT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_groom`
--

INSERT INTO `tbl_groom` (`ps_profile`, `ps_name`, `ps_gender`, `ps_dob`, `ps_religion`, `ps_caste`, `ps_mother_language`, `ps_contact`, `ps_email`, `ps_password`, `ps_question`, `ps_answer`, `ps_marital`, `ps_willing`, `ps_country`, `ps_state`, `ps_city`, `ps_height`, `ps_status`, `ps_qualification`, `ps_occupation`, `ps_fstatus`, `ps_ftype`, `ps_fvalue`, `ps_ehabits`, `ps_amyself`, `status`) VALUES
('Myself', 'Asim', 'Male', '02/03/1998', 'Muslim', 'Nadaf', 'Hindi', '8987678989', 'asim@gmail.com', 'Asim@123', 'Who is your hero?', 'naveen', 'Divorced', 'No', 'India', 'Mumbai', 'Powai', '5.1-5.5', 'Normal', 'B.Ed', 'Working', 'Affluent', 'Joint', 'Liberal', 'Veg/Non Vegetarian', '              hii', 1),
('Brother', 'Mahesh', 'Male', '02/07/1984', 'Hindu', 'Devadiga', 'Kannada', '9089890989', 'mahesh@gmail.com', 'Mahesh@1', 'Who is your hero?', 'darshan', 'Unmarried', 'No', 'India', 'Karnataka', 'Udupi', '4.5-5.0', 'Normal', 'High School/Secondary', 'Student', 'Middle-Class', 'Joint', 'Traditional', 'Vegetarian', '              i am simple person', 1),
('Myself', 'Pitar', 'Male', '03/09/1989', 'Christian', 'Catholic', 'English', '7898789898', 'pitar@gmail.com', 'Pitar@12', 'Who is your hero?', 'vijay', 'Unmarried', 'No', 'India', 'Karnataka', 'Mangalore', '5.1-5.5', 'Normal', 'PG', 'working', 'Middle-Class', 'Joint', 'Traditional', 'Vegetarian', '             haii ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_groom_preference`
--

CREATE TABLE `tbl_groom_preference` (
  `ps_email` varchar(100) NOT NULL,
  `ps_age` varchar(100) DEFAULT NULL,
  `ps_height` varchar(100) DEFAULT NULL,
  `ps_marital` varchar(100) DEFAULT NULL,
  `ps_mtongue` varchar(100) DEFAULT NULL,
  `ps_pstatus` varchar(100) DEFAULT NULL,
  `ps_ehabbits` varchar(100) DEFAULT NULL,
  `ps_religion` varchar(10) DEFAULT NULL,
  `ps_caste` varchar(15) DEFAULT NULL,
  `ps_qualification` varchar(50) DEFAULT NULL,
  `ps_occupation` varchar(50) DEFAULT NULL,
  `ps_fstatus` varchar(15) DEFAULT NULL,
  `ps_ftype` varchar(15) DEFAULT NULL,
  `ps_fvalue` varchar(15) DEFAULT NULL,
  `ps_country` varchar(100) DEFAULT NULL,
  `ps_location` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_groom_preference`
--

INSERT INTO `tbl_groom_preference` (`ps_email`, `ps_age`, `ps_height`, `ps_marital`, `ps_mtongue`, `ps_pstatus`, `ps_ehabbits`, `ps_religion`, `ps_caste`, `ps_qualification`, `ps_occupation`, `ps_fstatus`, `ps_ftype`, `ps_fvalue`, `ps_country`, `ps_location`) VALUES
('asim@gmail.com', '22-26', '5.1-5.5', 'Unmarried', 'Hindi', 'Normal', 'Veg/Non Vegetarian', 'Muslim', 'Nadaf', 'B.Ed', 'Working', 'Upper-Class', 'Joint', 'Liberal', 'India', 'Powai'),
('mahesh@gmail.com', '18-21', '4.5-5.0', 'Unmarried', 'Kannada', 'Normal', 'Vegetarian', 'Hindu', 'Devadiga', 'High School/Secondary', 'Student', 'Middle-Class', 'Joint', 'Traditional', 'India', 'Udupi'),
('pitar@gmail.com', '22-26', '4.5-5.0', 'Unmarried', 'English', 'Normal', 'Veg/Non Vegetarian', 'Christian', 'Catholic', 'PG', 'Working', 'Upper-Class', 'Joint', 'Arthood', 'India', 'Mangalore');

-- --------------------------------------------------------

--
-- Stand-in structure for view `tbl_registration`
-- (See below for the actual view)
--
CREATE TABLE `tbl_registration` (
`ps_profile` varchar(100)
,`ps_name` varchar(100)
,`ps_gender` varchar(100)
,`ps_dob` varchar(100)
,`ps_religion` varchar(100)
,`ps_caste` varchar(100)
,`ps_mother_language` varchar(100)
,`ps_contact` varchar(100)
,`ps_email` varchar(100)
,`ps_password` varchar(100)
,`ps_question` varchar(100)
,`ps_answer` varchar(100)
,`ps_marital` varchar(100)
,`ps_willing` varchar(100)
,`ps_country` varchar(100)
,`ps_state` varchar(100)
,`ps_city` varchar(100)
,`ps_height` varchar(10)
,`ps_status` varchar(15)
,`ps_qualification` varchar(50)
,`ps_occupation` varchar(50)
,`ps_fstatus` varchar(50)
,`ps_ftype` varchar(50)
,`ps_fvalue` varchar(50)
,`ps_ehabits` varchar(50)
,`ps_amyself` varchar(500)
);

-- --------------------------------------------------------

--
-- Structure for view `tbl_registration`
--
DROP TABLE IF EXISTS `tbl_registration`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `tbl_registration`  AS SELECT `tbl_groom`.`ps_profile` AS `ps_profile`, `tbl_groom`.`ps_name` AS `ps_name`, `tbl_groom`.`ps_gender` AS `ps_gender`, `tbl_groom`.`ps_dob` AS `ps_dob`, `tbl_groom`.`ps_religion` AS `ps_religion`, `tbl_groom`.`ps_caste` AS `ps_caste`, `tbl_groom`.`ps_mother_language` AS `ps_mother_language`, `tbl_groom`.`ps_contact` AS `ps_contact`, `tbl_groom`.`ps_email` AS `ps_email`, `tbl_groom`.`ps_password` AS `ps_password`, `tbl_groom`.`ps_question` AS `ps_question`, `tbl_groom`.`ps_answer` AS `ps_answer`, `tbl_groom`.`ps_marital` AS `ps_marital`, `tbl_groom`.`ps_willing` AS `ps_willing`, `tbl_groom`.`ps_country` AS `ps_country`, `tbl_groom`.`ps_state` AS `ps_state`, `tbl_groom`.`ps_city` AS `ps_city`, `tbl_groom`.`ps_height` AS `ps_height`, `tbl_groom`.`ps_status` AS `ps_status`, `tbl_groom`.`ps_qualification` AS `ps_qualification`, `tbl_groom`.`ps_occupation` AS `ps_occupation`, `tbl_groom`.`ps_fstatus` AS `ps_fstatus`, `tbl_groom`.`ps_ftype` AS `ps_ftype`, `tbl_groom`.`ps_fvalue` AS `ps_fvalue`, `tbl_groom`.`ps_ehabits` AS `ps_ehabits`, `tbl_groom`.`ps_amyself` AS `ps_amyself` FROM `tbl_groom` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_bride`
--
ALTER TABLE `tbl_bride`
  ADD PRIMARY KEY (`ps_email`);

--
-- Indexes for table `tbl_bride_preference`
--
ALTER TABLE `tbl_bride_preference`
  ADD PRIMARY KEY (`ps_email`),
  ADD KEY `ps_email` (`ps_email`);

--
-- Indexes for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  ADD PRIMARY KEY (`ps_email`),
  ADD KEY `ps_email` (`ps_email`);

--
-- Indexes for table `tbl_groom`
--
ALTER TABLE `tbl_groom`
  ADD PRIMARY KEY (`ps_email`);

--
-- Indexes for table `tbl_groom_preference`
--
ALTER TABLE `tbl_groom_preference`
  ADD PRIMARY KEY (`ps_email`),
  ADD KEY `ps_email` (`ps_email`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_bride_preference`
--
ALTER TABLE `tbl_bride_preference`
  ADD CONSTRAINT `fn_email` FOREIGN KEY (`ps_email`) REFERENCES `tbl_bride` (`ps_email`);

--
-- Constraints for table `tbl_groom_preference`
--
ALTER TABLE `tbl_groom_preference`
  ADD CONSTRAINT `f_email` FOREIGN KEY (`ps_email`) REFERENCES `tbl_groom` (`ps_email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
