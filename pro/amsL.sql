-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2023 at 02:11 PM
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
-- Database: `ams`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `ID` int(11) NOT NULL,
  `Email` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Password` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `RoleId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(1, 'amal', 'ali', 'amal@gmail.com', '1234');

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
-- Table structure for table `admin_accounts`
--

CREATE TABLE `admin_accounts` (
  `AdminId` int(11) NOT NULL,
  `AccountId` int(11) NOT NULL
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
(1, 'Menna', 'Hefny', 'menna@gmail.com', '33-mokkatam', '0000-00-00', '1234', '01094764271', 'Software engineer');

-- --------------------------------------------------------

--
-- Table structure for table `communication`
--

CREATE TABLE `communication` (
  `AlumniId` int(11) NOT NULL,
  `Content` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `ID` int(11) NOT NULL,
  `alumni_email` int(11) NOT NULL,
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
  `PlaceId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `event_request`
--

CREATE TABLE `event_request` (
  `RequestId` int(11) NOT NULL,
  `AlumniId` int(11) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `Description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
('what is your feedback?', 'very good', 1);

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `ID` int(11) NOT NULL,
  `PictureId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `it_support`
--

CREATE TABLE `it_support` (
  `ID` int(11) NOT NULL,
  `FirstName` varchar(20) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `BirthDate` date NOT NULL,
  `Password` varchar(50) NOT NULL,
  `PhoneNumber` varchar(50) NOT NULL,
  `JobTitle` varchar(50) NOT NULL,
  `RoleId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `it_support_emails`
--

CREATE TABLE `it_support_emails` (
  `ID` int(11) NOT NULL,
  `email` int(11) NOT NULL,
  `issue` int(11) NOT NULL,
  `it_reply` varchar(50) NOT NULL,
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
-- Table structure for table `job_posts_pictures`
--

CREATE TABLE `job_posts_pictures` (
  `JopPostsId` int(11) NOT NULL,
  `PicturesId` int(11) NOT NULL
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

-- --------------------------------------------------------

--
-- Table structure for table `pictures`
--

CREATE TABLE `pictures` (
  `ID` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Description` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Title` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `PicturePath` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `place`
--

CREATE TABLE `place` (
  `ID` int(11) NOT NULL,
  `Name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `requesttomentorship`
--

CREATE TABLE `requesttomentorship` (
  `RequestId` int(11) NOT NULL,
  `AlumniId` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `Description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `ID` int(11) NOT NULL,
  `Name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`ID`, `Name`) VALUES
(1, 'Admin'),
(2, 'student');

-- --------------------------------------------------------

--
-- Table structure for table `saffevent`
--

CREATE TABLE `saffevent` (
  `EventId` int(11) NOT NULL,
  `PlaceId` int(11) NOT NULL,
  `Date` int(11) NOT NULL,
  `NumberOfAttendence` int(11) NOT NULL,
  `EventDescription` varchar(1000) NOT NULL,
  `StaffId` int(11) NOT NULL
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
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Age` int(11) NOT NULL,
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
  `Description` varchar(1000) NOT NULL
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `role_id` (`RoleId`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `administrator_mentorship program`
--
ALTER TABLE `administrator_mentorship program`
  ADD PRIMARY KEY (`MentorshipProgramId`,`AdminId`),
  ADD KEY `admin_id` (`AdminId`);

--
-- Indexes for table `admin_accounts`
--
ALTER TABLE `admin_accounts`
  ADD PRIMARY KEY (`AdminId`,`AccountId`),
  ADD KEY `account_id` (`AccountId`);

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
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `communication`
--
ALTER TABLE `communication`
  ADD KEY `Alumni_id` (`AlumniId`);

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
  ADD KEY `place_id` (`PlaceId`);

--
-- Indexes for table `event_request`
--
ALTER TABLE `event_request`
  ADD PRIMARY KEY (`RequestId`),
  ADD KEY `Alumni_id` (`AlumniId`);

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
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `picture_id` (`PictureId`);

--
-- Indexes for table `it_support`
--
ALTER TABLE `it_support`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `it_support_emails`
--
ALTER TABLE `it_support_emails`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `job_posts`
--
ALTER TABLE `job_posts`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `job_posts_pictures`
--
ALTER TABLE `job_posts_pictures`
  ADD PRIMARY KEY (`JopPostsId`,`PicturesId`),
  ADD KEY `pictures_id` (`PicturesId`);

--
-- Indexes for table `mentorshipprogram`
--
ALTER TABLE `mentorshipprogram`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `mentorshipprogram_ibfk_1` (`PlaceId`);

--
-- Indexes for table `pictures`
--
ALTER TABLE `pictures`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `place`
--
ALTER TABLE `place`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `requesttomentorship`
--
ALTER TABLE `requesttomentorship`
  ADD PRIMARY KEY (`RequestId`),
  ADD KEY `Alumni_id` (`AlumniId`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `saffevent`
--
ALTER TABLE `saffevent`
  ADD PRIMARY KEY (`EventId`),
  ADD KEY `staffid` (`StaffId`),
  ADD KEY `placeId` (`PlaceId`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`ID`);

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
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `alumni`
--
ALTER TABLE `alumni`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `donation`
--
ALTER TABLE `donation`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `event_request`
--
ALTER TABLE `event_request`
  MODIFY `RequestId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `it_support_emails`
--
ALTER TABLE `it_support_emails`
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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pictures`
--
ALTER TABLE `pictures`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `place`
--
ALTER TABLE `place`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `requesttomentorship`
--
ALTER TABLE `requesttomentorship`
  MODIFY `RequestId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `saffevent`
--
ALTER TABLE `saffevent`
  MODIFY `EventId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `account`
--
ALTER TABLE `account`
  ADD CONSTRAINT `account_ibfk_1` FOREIGN KEY (`RoleId`) REFERENCES `roles` (`ID`);

--
-- Constraints for table `administrator_mentorship program`
--
ALTER TABLE `administrator_mentorship program`
  ADD CONSTRAINT `administrator_mentorship program_ibfk_1` FOREIGN KEY (`MentorshipProgramId`) REFERENCES `mentorshipprogram` (`ID`),
  ADD CONSTRAINT `administrator_mentorship program_ibfk_2` FOREIGN KEY (`AdminId`) REFERENCES `admin` (`ID`);

--
-- Constraints for table `admin_accounts`
--
ALTER TABLE `admin_accounts`
  ADD CONSTRAINT `admin_accounts_ibfk_1` FOREIGN KEY (`AccountId`) REFERENCES `account` (`ID`),
  ADD CONSTRAINT `admin_accounts_ibfk_2` FOREIGN KEY (`AdminId`) REFERENCES `admin` (`ID`);

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
-- Constraints for table `communication`
--
ALTER TABLE `communication`
  ADD CONSTRAINT `communication_ibfk_1` FOREIGN KEY (`AlumniId`) REFERENCES `alumni` (`ID`);

--
-- Constraints for table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_ibfk_1` FOREIGN KEY (`PlaceId`) REFERENCES `place` (`ID`);

--
-- Constraints for table `event_request`
--
ALTER TABLE `event_request`
  ADD CONSTRAINT `event_request_ibfk_1` FOREIGN KEY (`AlumniId`) REFERENCES `alumni` (`ID`);

--
-- Constraints for table `faq`
--
ALTER TABLE `faq`
  ADD CONSTRAINT `faq_ibfk_1` FOREIGN KEY (`AdminId`) REFERENCES `admin` (`ID`);

--
-- Constraints for table `gallery`
--
ALTER TABLE `gallery`
  ADD CONSTRAINT `gallery_ibfk_1` FOREIGN KEY (`PictureId`) REFERENCES `pictures` (`ID`);

--
-- Constraints for table `job_posts_pictures`
--
ALTER TABLE `job_posts_pictures`
  ADD CONSTRAINT `job_posts_pictures_ibfk_1` FOREIGN KEY (`JopPostsId`) REFERENCES `job_posts` (`ID`),
  ADD CONSTRAINT `job_posts_pictures_ibfk_2` FOREIGN KEY (`PicturesId`) REFERENCES `pictures` (`ID`);

--
-- Constraints for table `mentorshipprogram`
--
ALTER TABLE `mentorshipprogram`
  ADD CONSTRAINT `mentorshipprogram_ibfk_1` FOREIGN KEY (`PlaceId`) REFERENCES `place` (`ID`);

--
-- Constraints for table `requesttomentorship`
--
ALTER TABLE `requesttomentorship`
  ADD CONSTRAINT `requesttomentorship_ibfk_1` FOREIGN KEY (`AlumniId`) REFERENCES `alumni` (`ID`);

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
