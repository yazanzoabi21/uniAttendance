-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2023 at 07:44 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `university`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(20) NOT NULL,
  `Password` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `Password`) VALUES
(92030059, 55532);

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `class_id` int(255) NOT NULL,
  `Course_Name` varchar(40) NOT NULL,
  `Course_Code` varchar(40) NOT NULL,
  `Room` varchar(15) NOT NULL,
  `Name_Of_Doctor` varchar(40) NOT NULL,
  `hour` text NOT NULL,
  `Years` year(4) NOT NULL,
  `Semester` varchar(70) NOT NULL,
  `day` text NOT NULL,
  `section` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`class_id`, `Course_Name`, `Course_Code`, `Room`, `Name_Of_Doctor`, `hour`, `Years`, `Semester`, `day`, `section`) VALUES
(83, 'Operating systdem', 'CENG460', '1', '2', '2.00_3.15', 2023, 'Spring', 'T TH', 'A'),
(84, 'network lab', 'CENG450l', '1', '2', '9.30_10.45', 2023, 'Spring', 'M', 'A'),
(85, 'scripting lab', 'CENG455l', '2', '3', '11.00_12.15', 2023, 'Spring', 'T', 'B'),
(86, 'Electronic', 'EENG250', '1', '24', '8.00_9.15', 2023, 'Fall', 'M W', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `classesofinstructor`
--

CREATE TABLE `classesofinstructor` (
  `id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `classesofinstructor`
--

INSERT INTO `classesofinstructor` (`id`, `class_id`) VALUES
(2, 83),
(2, 84),
(3, 85),
(24, 86);

-- --------------------------------------------------------

--
-- Table structure for table `classesofstudents`
--

CREATE TABLE `classesofstudents` (
  `class_id` int(11) NOT NULL,
  `Student_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `classesofstudents`
--

INSERT INTO `classesofstudents` (`class_id`, `Student_id`) VALUES
(83, 2),
(83, 3),
(83, 58),
(84, 2),
(84, 58),
(85, 3),
(86, 3),
(86, 58);

-- --------------------------------------------------------

--
-- Table structure for table `day`
--

CREATE TABLE `day` (
  `id` int(11) NOT NULL,
  `day` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `day`
--

INSERT INTO `day` (`id`, `day`) VALUES
(1, 'M W'),
(2, 'T TH'),
(3, 'F'),
(4, 'M'),
(5, 'T'),
(6, 'W'),
(7, 'TH'),
(8, 'M W T TH');

-- --------------------------------------------------------

--
-- Table structure for table `hour`
--

CREATE TABLE `hour` (
  `id` int(11) NOT NULL,
  `hour` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hour`
--

INSERT INTO `hour` (`id`, `hour`) VALUES
(1, '8.00_9.15'),
(2, '9.30_10.45'),
(3, '11.00_12.15'),
(4, '12.30_1.45'),
(5, '2.00_3.15'),
(6, '3.30_4.45'),
(7, '5.00_6.15');

-- --------------------------------------------------------

--
-- Table structure for table `registered`
--

CREATE TABLE `registered` (
  `d_id` int(40) NOT NULL,
  `p_id` int(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registered`
--

INSERT INTO `registered` (`d_id`, `p_id`) VALUES
(5555, 3),
(4444, 2),
(4444, 1),
(5555, 40);

-- --------------------------------------------------------

--
-- Table structure for table `registeredstudents`
--

CREATE TABLE `registeredstudents` (
  `id` int(11) NOT NULL,
  `Student_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id` int(11) NOT NULL,
  `room` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `room`) VALUES
(1, '1'),
(2, '2'),
(3, '3'),
(4, '4');

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `id` int(11) NOT NULL,
  `section` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`id`, `section`) VALUES
(1, 'A'),
(2, 'B'),
(3, 'C'),
(4, 'D'),
(5, 'E');

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE `semester` (
  `id` int(11) NOT NULL,
  `semester` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`id`, `semester`) VALUES
(1, 'Fall'),
(2, 'Spring'),
(3, 'Summer');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `Student_id` int(11) NOT NULL,
  `Name` text NOT NULL,
  `Last_Name` text NOT NULL,
  `Email` text NOT NULL,
  `Phone` int(11) NOT NULL,
  `major` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`Student_id`, `Name`, `Last_Name`, `Email`, `Phone`, `major`) VALUES
(2, 'Line', 'Boudone', 'lineboudone@gmail.com', 81868484, 'CENG'),
(3, 'Ali', 'Jamil', 'alijamil@gmail.com', 76869695, 'CSCI'),
(58, 'Fatima', 'Saleh', 'fatimaelsaleh@gmail.com', 71654512, 'TENG');

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `id` int(20) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Last_Name` varchar(40) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Major` varchar(40) NOT NULL,
  `Phone` int(20) NOT NULL,
  `password` text NOT NULL,
  `role` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`id`, `Name`, `Last_Name`, `Email`, `Major`, `Phone`, `password`, `role`) VALUES
(1, 'ghayath', 'Boudone', 'ghayathboudone', 'CSCI', 71712529, '1', 'Manager'),
(2, 'omar', 'Boudone', 'omaralBoudone@gmail.com', 'TENG', 71863213, '2', 'Instructor'),
(3, 'yazan', 'zoabi', 'yazanalzoabi@gmail.com', 'BIO', 81455468, '3', 'Instructor'),
(4, 'Moulham', 'Boudone', 'moulhamalboudone@gmail.com', 'MATH', 71863130, '4', 'Instructor'),
(5, 'Ahmad', 'Khoder', 'ahmadkhoder@gmail.com', 'IT', 89789465, '5', 'IT'),
(24, 'raed', 'dnawi', 'raeddnawi@gmail.com', 'EENG', 82896532, '123', 'Instructor');

-- --------------------------------------------------------

--
-- Table structure for table `year`
--

CREATE TABLE `year` (
  `id` int(11) NOT NULL,
  `year` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `year`
--

INSERT INTO `year` (`id`, `year`) VALUES
(1, 2023),
(2, 2024),
(3, 2025),
(4, 2026),
(5, 2027);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `classesofinstructor`
--
ALTER TABLE `classesofinstructor`
  ADD KEY `registered_ibfk_3` (`id`),
  ADD KEY `registered_ibfk_4` (`class_id`);

--
-- Indexes for table `classesofstudents`
--
ALTER TABLE `classesofstudents`
  ADD PRIMARY KEY (`class_id`,`Student_id`),
  ADD KEY `registered_ibfk_7` (`Student_id`);

--
-- Indexes for table `day`
--
ALTER TABLE `day`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hour`
--
ALTER TABLE `hour`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registered`
--
ALTER TABLE `registered`
  ADD KEY `registered_ibfk_1` (`d_id`),
  ADD KEY `registered_ibfk_2` (`p_id`);

--
-- Indexes for table `registeredstudents`
--
ALTER TABLE `registeredstudents`
  ADD KEY `registered_ibfk_1` (`id`),
  ADD KEY `registered_ibfk_2` (`Student_id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`Student_id`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`id`,`Email`);

--
-- Indexes for table `year`
--
ALTER TABLE `year`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `class_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `day`
--
ALTER TABLE `day`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `hour`
--
ALTER TABLE `hour`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `semester`
--
ALTER TABLE `semester`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `Student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `year`
--
ALTER TABLE `year`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `classesofinstructor`
--
ALTER TABLE `classesofinstructor`
  ADD CONSTRAINT `registered_ibfk_3` FOREIGN KEY (`id`) REFERENCES `tbluser` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `registered_ibfk_4` FOREIGN KEY (`class_id`) REFERENCES `classes` (`class_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `classesofstudents`
--
ALTER TABLE `classesofstudents`
  ADD CONSTRAINT `registered_ibfk_6` FOREIGN KEY (`class_id`) REFERENCES `classes` (`class_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `registered_ibfk_7` FOREIGN KEY (`Student_id`) REFERENCES `students` (`Student_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `registeredstudents`
--
ALTER TABLE `registeredstudents`
  ADD CONSTRAINT `registered_ibfk_1` FOREIGN KEY (`id`) REFERENCES `tbluser` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `registered_ibfk_2` FOREIGN KEY (`Student_id`) REFERENCES `students` (`Student_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
