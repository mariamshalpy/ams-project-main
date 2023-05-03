-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2023 at 09:42 PM
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
-- Database: `ams_1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `FirstName` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `LastName` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Email` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Password` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `FirstName`, `LastName`, `Email`, `Password`) VALUES
(1, 'youssef', 'ismael', 'youssef@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `administrator_mentorship program`
--

CREATE TABLE `administrator_mentorship program` (
  `MentorshipProgramId` int(11) NOT NULL,
  `AdminId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admin_alumni`
--

CREATE TABLE `admin_alumni` (
  `AlumniId` int(11) NOT NULL,
  `AdminId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admin_events`
--

CREATE TABLE `admin_events` (
  `EventId` int(11) NOT NULL,
  `AdminId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admin_faculty_news_posts`
--

CREATE TABLE `admin_faculty_news_posts` (
  `FacultyNewsPostId` int(11) NOT NULL,
  `AdminId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `alumni`
--

CREATE TABLE `alumni` (
  `ID` int(11) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `BirthDate` date NOT NULL,
  `Password` varchar(50) NOT NULL,
  `PhoneNumber` varchar(50) NOT NULL,
  `JobTitle` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `alumni`
--

INSERT INTO `alumni` (`ID`, `FirstName`, `LastName`, `Email`, `Address`, `BirthDate`, `Password`, `PhoneNumber`, `JobTitle`) VALUES
(1, 'Menna', 'Hefny', 'menna@gmail.com', '33-mokkatam', '0000-00-00', '1234', '01094764271', 'Software engineer'),
(2, 'mariam', '', 'mariaamali88@gmail.com', 'asas', '2023-03-31', '78787', '7895201', 'engineerrr');

-- --------------------------------------------------------

--
-- Table structure for table `communication`
--

CREATE TABLE `communication` (
  `ID` int(11) NOT NULL,
  `email_to` varchar(50) NOT NULL,
  `email_from` varchar(50) NOT NULL,
  `content` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `communication`
--

INSERT INTO `communication` (`ID`, `email_to`, `email_from`, `content`, `role`) VALUES
(1, 'menna@gmail.com', 'mariamali88@gmail.com', '', 'alumni'),
(2, 'menna@gmail.com', 'mariamali88@gmail.com', 'hello', 'alumni'),
(3, 'menna@gmail.com', 'mariamali88@gmail.com', 'hello', 'alumni'),
(4, 'menna@gmail.com', 'mariamali88@gmail.com', 'hello', 'alumni'),
(5, 'menna@gmail.com', 'mariamali88@gmail.com', 'hello', 'alumni'),
(6, 'menna@gmail.com', 'mariamali88@gmail.com', 'hello', 'alumni'),
(7, 'menna@gmail.com', 'mariamali88@gmail.com', 'hello', 'alumni'),
(8, 'menna@gmail.com', 'mariamali88@gmail.com', 'hello', 'alumni'),
(9, 'menna@gmail.com', 'mariamali88@gmail.com', 'hello', 'alumni'),
(10, 'menna@gmail.com', 'mariamali88@gmail.com', 'hello', 'alumni'),
(11, 'menna@gmail.com', 'mariamali88@gmail.com', 'hello', 'alumni'),
(12, 'menna@gmail.com', 'mariamali88@gmail.com', 'hello', 'alumni'),
(13, 'menna@gmail.com', 'mariamali88@gmail.com', 'hello', 'alumni'),
(14, 'y@gmail.com', 'mariamali88@gmail.com', 'hello', 'alumni'),
(15, 'y@gmail.com', 'mariamali88@gmail.com', 'hello', 'alumni'),
(16, 'menna', 'mariam', 'hello', 'alumni'),
(17, 'mariam', 'mariam', 'hi', 'alumni'),
(18, 'mariam', 'soha', 'hello', 'alumni'),
(19, 'menna', 'mariam', 'hi', 'student'),
(20, 'amal', 'mariam', 'hello', 'alumni'),
(21, 'menna', 'mariam', 'hello', 'alumni'),
(22, 'mariam', 'menna', 'hello', 'alumni'),
(23, 'mariam', 'marwan@gmail.com', 'hi ', 'student'),
(24, 'marimshalpy123@gmail.com', 'marwan@gmail.com', 'hi ', 'student');

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `ID` int(11) NOT NULL,
  `alumni_email` varchar(50) NOT NULL,
  `Amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `ID` int(11) NOT NULL,
  `Date` date NOT NULL,
  `NumberOfAttendence` int(11) NOT NULL,
  `EventDescription` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `PlaceId` int(11) NOT NULL,
  `name` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`ID`, `Date`, `NumberOfAttendence`, `EventDescription`, `PlaceId`, `name`) VALUES
(1, '2023-05-19', 10, 'good', 1, 'software');

-- --------------------------------------------------------

--
-- Table structure for table `event_request`
--

CREATE TABLE `event_request` (
  `ID` int(11) NOT NULL,
  `alumni_email` varchar(50) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `Description` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `event_request`
--

INSERT INTO `event_request` (`ID`, `alumni_email`, `Type`, `Description`, `name`, `status`) VALUES
(1, 'menna@gmail.com', 'Plan', 'asasas', 'web', 'pending'),
(2, 'menna@gmail.com', 'Plan', 'java oop', 'opo', 'pending'),
(3, 'menna@gmail.com', 'Participate', 'c oop', 'software', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_news_posts`
--

CREATE TABLE `faculty_news_posts` (
  `ID` int(11) NOT NULL,
  `Title` varchar(255) DEFAULT NULL,
  `Content` text DEFAULT NULL,
  `CreatedAt` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faculty_news_posts`
--

INSERT INTO `faculty_news_posts` (`ID`, `Title`, `Content`, `CreatedAt`) VALUES
(1, 'Top student of the year.', 'cdbfvdh eduifbsi fbvueiwb  cbwuebcicfiwb cibfcbcnwdfbicv fencifc', '2023-05-01'),
(2, 'Top student of the year.', 'cdbfvdh eduifbsi fbvueiwb  cbwuebcicfiwb cibfcbcnwdfbicv fencifc', '2023-05-01'),
(3, 'fcsd c afsefvdsv.', 'frgesrhb ndsb fbds , mjuvn h  bbuesciofaspvm', '2023-05-10');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `Questions` text NOT NULL,
  `Answers` text NOT NULL,
  `AdminId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`Questions`, `Answers`, `AdminId`) VALUES
('how are you?', 'fine', 1),
('what is your feedback?', 'very good', 1),
('how are you?', 'fine', 1),
('what is your feedback?', 'very good', 1);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `ID` int(11) NOT NULL,
  `name` varchar(11) NOT NULL,
  `content` varchar(11) NOT NULL,
  `role` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`ID`, `name`, `content`, `role`) VALUES
(1, '0', '0', '0'),
(2, 'mariam', 'very good', 'alumni'),
(3, 'marrrrriam', 'very good', 'alumni'),
(4, 'marrrrriam', 'very good', 'alumni'),
(5, 'marrrrriam', 'very good', 'alumni'),
(6, 'mariam ali', 'goo', 'alumni'),
(7, 'mariam ali', 'goo', 'alumni'),
(8, 'mariaamali8', 'goo', 'alumni'),
(9, 'mariaamali8', 'goo', 'alumni'),
(10, 'mariaamali8', 'goo', 'alumni'),
(11, 'mariam', 'good', 'alumni'),
(12, 'menna', 'very good', 'alumni'),
(13, 'mariam', 'good', 'alumni'),
(14, 'marwan two', 'swdwsdw', 'student'),
(15, 'marwan ali', 'fffsf', 'student');

-- --------------------------------------------------------

--
-- Table structure for table `it_support_email`
--

CREATE TABLE `it_support_email` (
  `ID` int(11) NOT NULL,
  `email_to` varchar(50) NOT NULL,
  `email_from` varchar(50) NOT NULL,
  `content` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_posts`
--

CREATE TABLE `job_posts` (
  `ID` int(11) NOT NULL,
  `CompanyName` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `CreatedAt` date NOT NULL,
  `JobDescription` varchar(60) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Title` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mentorshipprogram`
--

CREATE TABLE `mentorshipprogram` (
  `ID` int(11) NOT NULL,
  `Name` varchar(50) CHARACTER SET utf16 COLLATE utf16_general_ci NOT NULL,
  `Type` varchar(30) CHARACTER SET utf16 COLLATE utf16_general_ci NOT NULL,
  `Description` text CHARACTER SET utf16 COLLATE utf16_general_ci NOT NULL,
  `Duration` int(11) NOT NULL,
  `PlaceId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mentorshipprogram`
--

INSERT INTO `mentorshipprogram` (`ID`, `Name`, `Type`, `Description`, `Duration`, `PlaceId`) VALUES
(1, 'web developer', 'technicalcourse', 'good', 20, 1);

-- --------------------------------------------------------

--
-- Table structure for table `place`
--

CREATE TABLE `place` (
  `ID` int(11) NOT NULL,
  `Name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `place`
--

INSERT INTO `place` (`ID`, `Name`, `Date`) VALUES
(1, 'maadi', '2023-05-05');

-- --------------------------------------------------------

--
-- Table structure for table `requesttomentorship`
--

CREATE TABLE `requesttomentorship` (
  `ID` int(11) NOT NULL,
  `alumni_email` varchar(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `Description` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `requesttomentorship`
--

INSERT INTO `requesttomentorship` (`ID`, `alumni_email`, `Name`, `Type`, `Description`, `status`) VALUES
(1, 'menna@gmail.com', 'php', 'alumni', 'php oop', 'pending'),
(2, 'menna@gmail.com', 'java', 'alumni', 'java oop', 'pending'),
(3, 'menna@gmail.com', 'c', 'TechnicalCourse', 'c oop', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `saffevent`
--

CREATE TABLE `saffevent` (
  `EventId` int(11) NOT NULL,
  `name` varchar(70) NOT NULL,
  `Date` int(11) NOT NULL,
  `NumberOfAttendence` int(11) NOT NULL,
  `EventDescription` varchar(1000) NOT NULL,
  `StaffId` int(11) NOT NULL,
  `place` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `ID` int(11) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `BirthDate` date NOT NULL,
  `Password` varchar(50) NOT NULL,
  `PhoneNumber` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `stafffaculty news`
--

CREATE TABLE `stafffaculty news` (
  `ID` int(11) NOT NULL,
  `Content` varchar(50) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `Date` date NOT NULL,
  `StaffId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `staffjobposts`
--

CREATE TABLE `staffjobposts` (
  `ID` int(11) NOT NULL,
  `CompanyName` varchar(50) NOT NULL,
  `Date` date NOT NULL,
  `JobDescription` varchar(500) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `StaffId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `staffmentorship program`
--

CREATE TABLE `staffmentorship program` (
  `MentorshipProgramId` int(11) NOT NULL,
  `Place` varchar(50) NOT NULL,
  `StaffId` int(11) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `Type` varchar(30) NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `Duration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `ID` int(11) NOT NULL,
  `FirstName` varchar(20) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `BirthDate` date NOT NULL,
  `Password` varchar(50) NOT NULL,
  `PhoneNumber` varchar(20) NOT NULL,
  `JobTitle` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`ID`, `FirstName`, `LastName`, `Email`, `Address`, `BirthDate`, `Password`, `PhoneNumber`, `JobTitle`) VALUES
(1, 'Marwan', 'Ali', 'marwan3', 'marwan@gmail.com', '1985-05-10', '1234', '123456', 'frontend developer'),
(2, 'Marwan', 'Ali', 'marwan@gmail', '33-madinaty', '2003-03-30', '1234', '01615651', 'frontend developer'),
(3, 'Menna', 'Hefny', 'menna@gmail.com', '33-mokkatam', '2004-01-25', '1234', '01094764271', 'Software engineer');

-- --------------------------------------------------------

--
-- Table structure for table `support`
--

CREATE TABLE `support` (
  `ID` int(11) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `BirthDate` date NOT NULL,
  `Password` varchar(50) NOT NULL,
  `PhoneNumber` int(11) NOT NULL,
  `JobTitle` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `survey`
--

CREATE TABLE `survey` (
  `ID` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `content` varchar(50) NOT NULL,
  `rate` int(11) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `survey`
--

INSERT INTO `survey` (`ID`, `name`, `content`, `rate`, `role`) VALUES
(1, 'mariam', 'csdw', 4, 'student'),
(2, 'mariam', 'gngfngn', 5, 'student');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `administrator_mentorship program`
--
ALTER TABLE `administrator_mentorship program`
  ADD PRIMARY KEY (`MentorshipProgramId`,`AdminId`),
  ADD KEY `admin_id` (`AdminId`);

--
-- Indexes for table `admin_alumni`
--
ALTER TABLE `admin_alumni`
  ADD KEY `Admin_id` (`AdminId`),
  ADD KEY `Alumni_id` (`AlumniId`);

--
-- Indexes for table `admin_events`
--
ALTER TABLE `admin_events`
  ADD PRIMARY KEY (`EventId`,`AdminId`),
  ADD KEY `admin_id` (`AdminId`);

--
-- Indexes for table `admin_faculty_news_posts`
--
ALTER TABLE `admin_faculty_news_posts`
  ADD PRIMARY KEY (`FacultyNewsPostId`,`AdminId`),
  ADD KEY `admin_id` (`AdminId`);

--
-- Indexes for table `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `communication`
--
ALTER TABLE `communication`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `name` (`name`),
  ADD KEY `place_id` (`PlaceId`);

--
-- Indexes for table `event_request`
--
ALTER TABLE `event_request`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `faculty_news_posts`
--
ALTER TABLE `faculty_news_posts`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD KEY `admin_id` (`AdminId`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `it_support_email`
--
ALTER TABLE `it_support_email`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `job_posts`
--
ALTER TABLE `job_posts`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `mentorshipprogram`
--
ALTER TABLE `mentorshipprogram`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Name` (`Name`),
  ADD KEY `mentorshipprogram_ibfk_1` (`PlaceId`);

--
-- Indexes for table `place`
--
ALTER TABLE `place`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `requesttomentorship`
--
ALTER TABLE `requesttomentorship`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Name` (`Name`);

--
-- Indexes for table `saffevent`
--
ALTER TABLE `saffevent`
  ADD PRIMARY KEY (`EventId`),
  ADD KEY `staffid` (`StaffId`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `stafffaculty news`
--
ALTER TABLE `stafffaculty news`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `staffid` (`StaffId`);

--
-- Indexes for table `staffjobposts`
--
ALTER TABLE `staffjobposts`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `StaffId` (`StaffId`);

--
-- Indexes for table `staffmentorship program`
--
ALTER TABLE `staffmentorship program`
  ADD PRIMARY KEY (`MentorshipProgramId`),
  ADD KEY `staffid` (`StaffId`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `support`
--
ALTER TABLE `support`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `survey`
--
ALTER TABLE `survey`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `alumni`
--
ALTER TABLE `alumni`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `communication`
--
ALTER TABLE `communication`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `donation`
--
ALTER TABLE `donation`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `event_request`
--
ALTER TABLE `event_request`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `faculty_news_posts`
--
ALTER TABLE `faculty_news_posts`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `it_support_email`
--
ALTER TABLE `it_support_email`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `job_posts`
--
ALTER TABLE `job_posts`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mentorshipprogram`
--
ALTER TABLE `mentorshipprogram`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `place`
--
ALTER TABLE `place`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `requesttomentorship`
--
ALTER TABLE `requesttomentorship`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `saffevent`
--
ALTER TABLE `saffevent`
  MODIFY `EventId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `stafffaculty news`
--
ALTER TABLE `stafffaculty news`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `staffjobposts`
--
ALTER TABLE `staffjobposts`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `staffmentorship program`
--
ALTER TABLE `staffmentorship program`
  MODIFY `MentorshipProgramId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `support`
--
ALTER TABLE `support`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `survey`
--
ALTER TABLE `survey`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `administrator_mentorship program`
--
ALTER TABLE `administrator_mentorship program`
  ADD CONSTRAINT `administrator_mentorship program_ibfk_1` FOREIGN KEY (`MentorshipProgramId`) REFERENCES `mentorshipprogram` (`ID`),
  ADD CONSTRAINT `administrator_mentorship program_ibfk_2` FOREIGN KEY (`AdminId`) REFERENCES `admin` (`ID`);

--
-- Constraints for table `admin_alumni`
--
ALTER TABLE `admin_alumni`
  ADD CONSTRAINT `admin_alumni_ibfk_1` FOREIGN KEY (`AdminId`) REFERENCES `admin` (`ID`),
  ADD CONSTRAINT `admin_alumni_ibfk_2` FOREIGN KEY (`AlumniId`) REFERENCES `alumni` (`ID`);

--
-- Constraints for table `admin_events`
--
ALTER TABLE `admin_events`
  ADD CONSTRAINT `admin_events_ibfk_1` FOREIGN KEY (`EventId`) REFERENCES `events` (`ID`),
  ADD CONSTRAINT `admin_events_ibfk_2` FOREIGN KEY (`AdminId`) REFERENCES `admin` (`ID`);

--
-- Constraints for table `admin_faculty_news_posts`
--
ALTER TABLE `admin_faculty_news_posts`
  ADD CONSTRAINT `admin_faculty_news_posts_ibfk_1` FOREIGN KEY (`FacultyNewsPostId`) REFERENCES `faculty_news_posts` (`ID`),
  ADD CONSTRAINT `admin_faculty_news_posts_ibfk_2` FOREIGN KEY (`AdminId`) REFERENCES `admin` (`ID`);

--
-- Constraints for table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_ibfk_1` FOREIGN KEY (`PlaceId`) REFERENCES `place` (`ID`);

--
-- Constraints for table `faq`
--
ALTER TABLE `faq`
  ADD CONSTRAINT `faq_ibfk_1` FOREIGN KEY (`AdminId`) REFERENCES `admin` (`ID`);

--
-- Constraints for table `mentorshipprogram`
--
ALTER TABLE `mentorshipprogram`
  ADD CONSTRAINT `mentorshipprogram_ibfk_1` FOREIGN KEY (`PlaceId`) REFERENCES `place` (`ID`);

--
-- Constraints for table `stafffaculty news`
--
ALTER TABLE `stafffaculty news`
  ADD CONSTRAINT `stafffaculty news_ibfk_1` FOREIGN KEY (`StaffId`) REFERENCES `staff` (`ID`);

--
-- Constraints for table `staffjobposts`
--
ALTER TABLE `staffjobposts`
  ADD CONSTRAINT `staffjobposts_ibfk_1` FOREIGN KEY (`StaffId`) REFERENCES `staff` (`ID`);

--
-- Constraints for table `staffmentorship program`
--
ALTER TABLE `staffmentorship program`
  ADD CONSTRAINT `staffmentorship program_ibfk_1` FOREIGN KEY (`StaffId`) REFERENCES `staff` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
