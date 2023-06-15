-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2023 at 01:29 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `no_school`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_chan`
--

CREATE TABLE `tbl_chan` (
  `ch_id` int(11) NOT NULL,
  `ch_code` varchar(255) NOT NULL,
  `ch_subject` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_chan`
--

INSERT INTO `tbl_chan` (`ch_id`, `ch_code`, `ch_subject`) VALUES
(1, 'p1', 'ประถมศึกษาปีที่ 1'),
(2, 'p2', 'ประถมศึกษาปีที่ 2'),
(3, 'p3', 'ประถมศึกษาปีที่ 3'),
(4, 'p4', 'ประถมศึกษาปีที่ 4'),
(5, 'p5', 'ประถมศึกษาปีที่ 5'),
(6, 'p6', 'ประถมศึกษาปีที่ 6');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_grade`
--

CREATE TABLE `tbl_grade` (
  `gr_id` int(11) NOT NULL,
  `gr_number` varchar(255) NOT NULL,
  `gr_year` varchar(255) NOT NULL,
  `gr_turm` varchar(255) NOT NULL,
  `gr_chan` varchar(255) NOT NULL,
  `gr_code` varchar(255) NOT NULL,
  `gr_startpoint` decimal(10,2) NOT NULL,
  `gr_midpoint` decimal(10,2) NOT NULL,
  `gr_finalpoint` decimal(10,2) NOT NULL,
  `gr_total` decimal(10,2) NOT NULL,
  `gr_roila` decimal(10,2) NOT NULL,
  `gr_gpa` decimal(10,2) NOT NULL,
  `gr_saveby` varchar(255) NOT NULL,
  `gr_savedate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kpi`
--

CREATE TABLE `tbl_kpi` (
  `kpi_id` int(11) NOT NULL,
  `kpi_licode` varchar(255) NOT NULL,
  `kpi_code` varchar(255) NOT NULL,
  `kpi_subject` varchar(255) NOT NULL,
  `kpi_point` int(11) NOT NULL,
  `kpi_saveby` varchar(255) NOT NULL,
  `kpi_savedate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_kpi`
--

INSERT INTO `tbl_kpi` (`kpi_id`, `kpi_licode`, `kpi_code`, `kpi_subject`, `kpi_point`, `kpi_saveby`, `kpi_savedate`) VALUES
(11, 'kpi1', 'vitp1101', 'ตัวชี้วัดที่ 1', 10, '', '2023-03-12'),
(12, 'kpi2', 'vitp1101', 'ตัวชี้วัดที่ 1', 10, '', '2023-03-12'),
(13, 'kpi3', 'vitp1101', 'ตัวชี้วัดที่ 1', 10, '', '2023-03-12'),
(14, 'kpi4', 'vitp1101', 'ตัวชี้วัดที่ 1', 10, '', '2023-03-12'),
(15, 'kpi5', 'vitp1101', 'ตัวชี้วัดที่ 1', 5, '', '2023-03-12'),
(16, 'kpi6', 'vitp1101', 'ตัวชี้วัดที่ 1', 5, '', '2023-03-12'),
(17, 'kpi7', 'vitp1101', 'ตัวชี้วัดที่ 1', 5, '', '2023-03-12'),
(18, 'kpi8', 'vitp1101', 'ตัวชี้วัดที่ 1', 5, '', '2023-03-12'),
(19, 'kpi9', 'vitp1101', 'ตัวชี้วัดที่ 1', 5, '', '2023-03-12'),
(20, 'kpi10', 'vitp1101', 'ตัวชี้วัดที่ 1', 5, '', '2023-03-12');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_listwicha`
--

CREATE TABLE `tbl_listwicha` (
  `li_id` int(11) NOT NULL,
  `li_code` varchar(255) NOT NULL,
  `li_subject` varchar(255) NOT NULL,
  `li_detail` text NOT NULL,
  `li_class` varchar(255) NOT NULL,
  `li_kpi` int(11) NOT NULL,
  `li_study` int(11) NOT NULL,
  `li_startpoint` int(11) NOT NULL,
  `li_midpoint` int(11) NOT NULL,
  `li_finalpoint` int(11) NOT NULL,
  `li_teacher` varchar(255) NOT NULL,
  `li_maihed` text NOT NULL,
  `li_saveby` varchar(255) NOT NULL,
  `li_savedate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_listwicha`
--

INSERT INTO `tbl_listwicha` (`li_id`, `li_code`, `li_subject`, `li_detail`, `li_class`, `li_kpi`, `li_study`, `li_startpoint`, `li_midpoint`, `li_finalpoint`, `li_teacher`, `li_maihed`, `li_saveby`, `li_savedate`) VALUES
(1, 'vitp1101', 'วิทยาศาสตร์ ป.1', 'วิทยาศาสตร์สำหรับ ป.1', 'p1', 10, 0, 70, 0, 30, 'นางสาวลินดา มาลาคำ', 'ไม่มีหมายเหตุ', 'linda malakum', '2023-03-12');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_member`
--

CREATE TABLE `tbl_member` (
  `me_id` int(11) NOT NULL,
  `me_number` varchar(255) NOT NULL,
  `me_user` varchar(255) NOT NULL,
  `me_pass` varchar(255) NOT NULL,
  `me_name` varchar(255) NOT NULL,
  `me_sex` enum('men','wemen','','') NOT NULL,
  `me_position` varchar(255) NOT NULL,
  `me_type` enum('student','teacher','','') NOT NULL,
  `me_class` enum('user','boss','admin','') NOT NULL,
  `me_born` date NOT NULL,
  `me_tel` varchar(255) NOT NULL,
  `me_status` enum('active','wait','ban','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_member`
--

INSERT INTO `tbl_member` (`me_id`, `me_number`, `me_user`, `me_pass`, `me_name`, `me_sex`, `me_position`, `me_type`, `me_class`, `me_born`, `me_tel`, `me_status`) VALUES
(1, 'non100001', 'admin', 'sumet022', 'administrator', 'men', 'admin', 'teacher', 'admin', '1984-10-12', '0826589856', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_startpoint`
--

CREATE TABLE `tbl_startpoint` (
  `sta_id` int(11) NOT NULL,
  `sta_number` varchar(255) NOT NULL,
  `sta_year` varchar(255) NOT NULL,
  `sta_turm` varchar(255) NOT NULL,
  `sta_code` varchar(255) NOT NULL,
  `sta_startpoint` int(11) NOT NULL,
  `sta_saveby` varchar(255) NOT NULL,
  `sta_savedate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student`
--

CREATE TABLE `tbl_student` (
  `stu_id` int(11) NOT NULL,
  `stu_code` varchar(255) NOT NULL,
  `stu_sex` varchar(255) NOT NULL,
  `stu_name` varchar(255) NOT NULL,
  `stu_born` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_student`
--

INSERT INTO `tbl_student` (`stu_id`, `stu_code`, `stu_sex`, `stu_name`, `stu_born`) VALUES
(1, '1234', 'ชาย', 'สุเมธ ชูรัตน์', '1984-02-22'),
(2, '1247', 'หญิง', 'ใจดี พาวิไล', '1985-02-20'),
(3, '1245', 'หญิง', 'บุญสาน พิลาอาพิตร์', '2023-06-20'),
(4, '12548', 'ชาย', 'ทองดำ คำดี', '2023-06-16'),
(5, '12457', 'ชาย', 'เหลือเฟือ มากมาย', '2023-06-23'),
(6, '41578', 'หญิง', 'อุบล ทองดี', '2023-06-22'),
(7, '12488', 'ชาย', 'ทดสอบ ชอบใจ', '2023-06-14'),
(8, '1247', 'หญิง', 'ยินดี ปรีดา', '2023-06-27'),
(9, '4544', 'หญิง', 'กกกกกก', '2023-06-15'),
(10, 'ดดดดดดดดดดดด', 'ชาย', 'ดดดดดดดดดดดดดดดดด', '2023-06-16'),
(11, 'กกกกกกกกกกกกก', 'ชาย', 'ดดดดดดดดดดดดดด', '2023-06-21'),
(12, 'กกกกกกกกกกกกกกกกกกก', 'ชาย', 'ดดดดดดดดดดดดดดดดดดด', '2023-06-07'),
(13, '7777777777', 'ชาย', '55555555555555', '2023-06-22');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_teacher`
--

CREATE TABLE `tbl_teacher` (
  `te_id` int(11) NOT NULL,
  `te_number` varchar(255) NOT NULL,
  `te_name` varchar(255) NOT NULL,
  `te_class` varchar(255) NOT NULL,
  `te_sex` enum('man','woman','','') NOT NULL,
  `te_tel` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_wicha`
--

CREATE TABLE `tbl_wicha` (
  `wi_id` int(11) NOT NULL,
  `wi_code` varchar(255) NOT NULL,
  `wi_subject` text NOT NULL,
  `wi_detail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_wicha`
--

INSERT INTO `tbl_wicha` (`wi_id`, `wi_code`, `wi_subject`, `wi_detail`) VALUES
(1, 'vit', 'วิทยาศาสตร์', 'วิชาวิทยาศาสตร์');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_chan`
--
ALTER TABLE `tbl_chan`
  ADD PRIMARY KEY (`ch_id`);

--
-- Indexes for table `tbl_grade`
--
ALTER TABLE `tbl_grade`
  ADD PRIMARY KEY (`gr_id`);

--
-- Indexes for table `tbl_kpi`
--
ALTER TABLE `tbl_kpi`
  ADD PRIMARY KEY (`kpi_id`);

--
-- Indexes for table `tbl_listwicha`
--
ALTER TABLE `tbl_listwicha`
  ADD PRIMARY KEY (`li_id`);

--
-- Indexes for table `tbl_member`
--
ALTER TABLE `tbl_member`
  ADD PRIMARY KEY (`me_id`);

--
-- Indexes for table `tbl_startpoint`
--
ALTER TABLE `tbl_startpoint`
  ADD PRIMARY KEY (`sta_id`);

--
-- Indexes for table `tbl_student`
--
ALTER TABLE `tbl_student`
  ADD PRIMARY KEY (`stu_id`);

--
-- Indexes for table `tbl_teacher`
--
ALTER TABLE `tbl_teacher`
  ADD PRIMARY KEY (`te_id`);

--
-- Indexes for table `tbl_wicha`
--
ALTER TABLE `tbl_wicha`
  ADD PRIMARY KEY (`wi_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_chan`
--
ALTER TABLE `tbl_chan`
  MODIFY `ch_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_grade`
--
ALTER TABLE `tbl_grade`
  MODIFY `gr_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_kpi`
--
ALTER TABLE `tbl_kpi`
  MODIFY `kpi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_listwicha`
--
ALTER TABLE `tbl_listwicha`
  MODIFY `li_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_member`
--
ALTER TABLE `tbl_member`
  MODIFY `me_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_startpoint`
--
ALTER TABLE `tbl_startpoint`
  MODIFY `sta_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_student`
--
ALTER TABLE `tbl_student`
  MODIFY `stu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_teacher`
--
ALTER TABLE `tbl_teacher`
  MODIFY `te_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_wicha`
--
ALTER TABLE `tbl_wicha`
  MODIFY `wi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
