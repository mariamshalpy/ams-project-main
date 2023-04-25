-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3308
-- Generation Time: Apr 24, 2023 at 08:32 AM
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
  `id` int(11) NOT NULL,
  `username` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `password` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `username` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `password` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `administrator_mentorship program`
--

CREATE TABLE `administrator_mentorship program` (
  `mentorship_program_id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admin_accounts`
--

CREATE TABLE `admin_accounts` (
  `admin_id` int(11) NOT NULL,
  `account_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admin_alumni`
--

CREATE TABLE `admin_alumni` (
  `Alumni_id` int(11) NOT NULL,
  `Admin_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admin_donations`
--

CREATE TABLE `admin_donations` (
  `admin_id` int(11) NOT NULL,
  `donation_post_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admin_events`
--

CREATE TABLE `admin_events` (
  `event_id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admin_faculty_news_posts`
--

CREATE TABLE `admin_faculty_news_posts` (
  `faculty_news_post_id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL
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
  `BirthDate` int(11) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `PhoneNumber` varchar(50) NOT NULL,
  `Age` int(11) NOT NULL,
  `JobTitle` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `alumni_donation`
--

CREATE TABLE `alumni_donation` (
  `Alumni_id` int(11) NOT NULL,
  `Amount` int(11) NOT NULL,
  `Admin_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `communication`
--

CREATE TABLE `communication` (
  `Alumni_id` int(11) NOT NULL,
  `Content` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `donation_posts`
--

CREATE TABLE `donation_posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `number_of_attendence` int(11) NOT NULL,
  `event_description` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `place_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `event_request`
--

CREATE TABLE `event_request` (
  `Request_id` int(11) NOT NULL,
  `Alumni_id` int(11) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `Description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faculty_news_posts`
--

CREATE TABLE `faculty_news_posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faculty_staff`
--

CREATE TABLE `faculty_staff` (
  `staff_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `phone_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `questions` text NOT NULL,
  `answers` text NOT NULL,
  `admin_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `picture_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `itsupportemail`
--

CREATE TABLE `itsupportemail` (
  `Email_id` int(11) NOT NULL,
  `Alumni_id` int(11) NOT NULL,
  `Description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `it_support`
--

CREATE TABLE `it_support` (
  `ID` int(11) NOT NULL ,
  `FirstName` varchar(20) NOT NULL, 
  `LastName` varchar(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `BirthDate` date NOT NULL,
  `Password` varchar(50) NOT NULL,
  `PhoneNumber`  varchar(50) NOT NULL,
  `JobTitle` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_posts`
--

CREATE TABLE `job_posts` (
  `id` int(11) NOT NULL,
  `company_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `created_at` date NOT NULL,
  `job_description` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `title` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_posts_pictures`
--

CREATE TABLE `job_posts_pictures` (
  `jop_posts_id` int(11) NOT NULL,
  `pictures_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mentorshipprogram`
--

CREATE TABLE `mentorshipprogram` (
  `id` int(11) NOT NULL,
  `name` varchar(50) CHARACTER SET utf16 COLLATE utf16_general_ci NOT NULL,
  `type` varchar(30) CHARACTER SET utf16 COLLATE utf16_general_ci NOT NULL,
  `description` text CHARACTER SET utf16 COLLATE utf16_general_ci NOT NULL,
  `duration` int(11) NOT NULL,
  `place_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pictures`
--

CREATE TABLE `pictures` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `title` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `picture_path` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `place`
--

CREATE TABLE `place` (
  `id` int(11) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `requesttomentorship`
--

CREATE TABLE `requesttomentorship` (
  `Request_id` int(11) NOT NULL,
  `Alumni_id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `Description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `saffevent`
--

CREATE TABLE `saffevent` (
  `eventId` int(11) NOT NULL,
  `placeId` int(11) NOT NULL,
  `date` int(11) NOT NULL,
  `numberOfAttendence` int(11) NOT NULL,
  `eventdescription` varchar(1000) NOT NULL,
  `staffid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `staffaccounts`
--

CREATE TABLE `staffaccounts` (
  `accountId` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `staffid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `stafffaculty news`
--

CREATE TABLE `stafffaculty news` (
  `newsId` int(11) NOT NULL,
  `content` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `date` int(11) NOT NULL,
  `staffid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `staffjobposts`
--

CREATE TABLE `staffjobposts` (
  `postid` int(11) NOT NULL,
  `companyName` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `jobDescription` varchar(500) NOT NULL,
  `tittle` varchar(50) NOT NULL,
  `staafid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `staffmentorship program`
--

CREATE TABLE `staffmentorship program` (
  `mentorshipProgramID` int(11) NOT NULL,
  `place` varchar(50) NOT NULL,
  `staffid` int(11) NOT NULL,
  `tittle` varchar(50) NOT NULL,
  `type` varchar(30) NOT NULL,
  `desription` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `ID` int(11) NOT NULL ,
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
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `administrator_mentorship program`
--
ALTER TABLE `administrator_mentorship program`
  ADD PRIMARY KEY (`mentorship_program_id`,`admin_id`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indexes for table `admin_accounts`
--
ALTER TABLE `admin_accounts`
  ADD PRIMARY KEY (`admin_id`,`account_id`),
  ADD KEY `account_id` (`account_id`);

--
-- Indexes for table `admin_alumni`
--
ALTER TABLE `admin_alumni`
  ADD KEY `Admin_id` (`Admin_id`),
  ADD KEY `Alumni_id` (`Alumni_id`);

--
-- Indexes for table `admin_donations`
--
ALTER TABLE `admin_donations`
  ADD PRIMARY KEY (`admin_id`,`donation_post_id`),
  ADD KEY `donation_post_id` (`donation_post_id`);

--
-- Indexes for table `admin_events`
--
ALTER TABLE `admin_events`
  ADD PRIMARY KEY (`event_id`,`admin_id`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indexes for table `admin_faculty_news_posts`
--
ALTER TABLE `admin_faculty_news_posts`
  ADD PRIMARY KEY (`faculty_news_post_id`,`admin_id`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indexes for table `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `alumni_donation`
--
ALTER TABLE `alumni_donation`
  ADD KEY `Alumni_id` (`Alumni_id`),
  ADD KEY `Admin_id` (`Admin_id`);

--
-- Indexes for table `communication`
--
ALTER TABLE `communication`
  ADD KEY `Alumni_id` (`Alumni_id`);

--
-- Indexes for table `donation_posts`
--
ALTER TABLE `donation_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`),
  ADD KEY `place_id` (`place_id`);

--
-- Indexes for table `event_request`
--
ALTER TABLE `event_request`
  ADD PRIMARY KEY (`Request_id`),
  ADD KEY `Alumni_id` (`Alumni_id`);

--
-- Indexes for table `faculty_news_posts`
--
ALTER TABLE `faculty_news_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty_staff`
--
ALTER TABLE `faculty_staff`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD KEY `admin_id` (`admin_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`),
  ADD KEY `picture_id` (`picture_id`);

--
-- Indexes for table `itsupportemail`
--
ALTER TABLE `itsupportemail`
  ADD PRIMARY KEY (`Email_id`),
  ADD KEY `Alumni_id` (`Alumni_id`);

--
-- Indexes for table `it_support`
--
ALTER TABLE `it_support`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `job_posts`
--
ALTER TABLE `job_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_posts_pictures`
--
ALTER TABLE `job_posts_pictures`
  ADD PRIMARY KEY (`jop_posts_id`,`pictures_id`),
  ADD KEY `pictures_id` (`pictures_id`);

--
-- Indexes for table `mentorshipprogram`
--
ALTER TABLE `mentorshipprogram`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mentorshipprogram_ibfk_1` (`place_id`);

--
-- Indexes for table `pictures`
--
ALTER TABLE `pictures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `place`
--
ALTER TABLE `place`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requesttomentorship`
--
ALTER TABLE `requesttomentorship`
  ADD PRIMARY KEY (`Request_id`),
  ADD KEY `Alumni_id` (`Alumni_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `saffevent`
--
ALTER TABLE `saffevent`
  ADD PRIMARY KEY (`eventId`),
  ADD KEY `staffid` (`staffid`),
  ADD KEY `placeId` (`placeId`);

--
-- Indexes for table `staffaccounts`
--
ALTER TABLE `staffaccounts`
  ADD PRIMARY KEY (`accountId`),
  ADD KEY `staffid` (`staffid`);

--
-- Indexes for table `stafffaculty news`
--
ALTER TABLE `stafffaculty news`
  ADD PRIMARY KEY (`newsId`),
  ADD KEY `staffid` (`staffid`);

--
-- Indexes for table `staffjobposts`
--
ALTER TABLE `staffjobposts`
  ADD PRIMARY KEY (`postid`),
  ADD KEY `staafid` (`staafid`);

--
-- Indexes for table `staffmentorship program`
--
ALTER TABLE `staffmentorship program`
  ADD PRIMARY KEY (`mentorshipProgramID`),
  ADD KEY `staffid` (`staffid`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `alumni`
--
ALTER TABLE `alumni`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `event_request`
--
ALTER TABLE `event_request`
  MODIFY `Request_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faculty_staff`
--
ALTER TABLE `faculty_staff`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `itsupportemail`
--
ALTER TABLE `itsupportemail`
  MODIFY `Email_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `job_posts`
--
ALTER TABLE `job_posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mentorshipprogram`
--
ALTER TABLE `mentorshipprogram`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pictures`
--
ALTER TABLE `pictures`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `place`
--
ALTER TABLE `place`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `requesttomentorship`
--
ALTER TABLE `requesttomentorship`
  MODIFY `Request_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `saffevent`
--
ALTER TABLE `saffevent`
  MODIFY `eventId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `staffaccounts`
--
ALTER TABLE `staffaccounts`
  MODIFY `accountId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stafffaculty news`
--
ALTER TABLE `stafffaculty news`
  MODIFY `newsId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `staffjobposts`
--
ALTER TABLE `staffjobposts`
  MODIFY `postid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `staffmentorship program`
--
ALTER TABLE `staffmentorship program`
  MODIFY `mentorshipProgramID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `account`
--
ALTER TABLE `account`
  ADD CONSTRAINT `account_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Constraints for table `administrator_mentorship program`
--
ALTER TABLE `administrator_mentorship program`
  ADD CONSTRAINT `administrator_mentorship program_ibfk_1` FOREIGN KEY (`mentorship_program_id`) REFERENCES `mentorshipprogram` (`id`),
  ADD CONSTRAINT `administrator_mentorship program_ibfk_2` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`id`);

--
-- Constraints for table `admin_accounts`
--
ALTER TABLE `admin_accounts`
  ADD CONSTRAINT `admin_accounts_ibfk_1` FOREIGN KEY (`account_id`) REFERENCES `account` (`id`),
  ADD CONSTRAINT `admin_accounts_ibfk_2` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`id`);

--
-- Constraints for table `admin_alumni`
--
ALTER TABLE `admin_alumni`
  ADD CONSTRAINT `admin_alumni_ibfk_1` FOREIGN KEY (`Admin_id`) REFERENCES `admin` (`id`),
  ADD CONSTRAINT `admin_alumni_ibfk_2` FOREIGN KEY (`Alumni_id`) REFERENCES `alumni` (`ID`);

--
-- Constraints for table `admin_donations`
--
ALTER TABLE `admin_donations`
  ADD CONSTRAINT `admin_donations_ibfk_1` FOREIGN KEY (`donation_post_id`) REFERENCES `donation_posts` (`id`),
  ADD CONSTRAINT `admin_donations_ibfk_2` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`id`);

--
-- Constraints for table `admin_events`
--
ALTER TABLE `admin_events`
  ADD CONSTRAINT `admin_events_ibfk_1` FOREIGN KEY (`event_id`) REFERENCES `events` (`id`),
  ADD CONSTRAINT `admin_events_ibfk_2` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`id`);

--
-- Constraints for table `admin_faculty_news_posts`
--
ALTER TABLE `admin_faculty_news_posts`
  ADD CONSTRAINT `admin_faculty_news_posts_ibfk_1` FOREIGN KEY (`faculty_news_post_id`) REFERENCES `faculty_news_posts` (`id`),
  ADD CONSTRAINT `admin_faculty_news_posts_ibfk_2` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`id`);

--
-- Constraints for table `alumni_donation`
--
ALTER TABLE `alumni_donation`
  ADD CONSTRAINT `alumni_donation_ibfk_1` FOREIGN KEY (`Alumni_id`) REFERENCES `alumni` (`ID`),
  ADD CONSTRAINT `alumni_donation_ibfk_2` FOREIGN KEY (`Admin_id`) REFERENCES `admin` (`id`);

--
-- Constraints for table `communication`
--
ALTER TABLE `communication`
  ADD CONSTRAINT `communication_ibfk_1` FOREIGN KEY (`Alumni_id`) REFERENCES `alumni` (`ID`);

--
-- Constraints for table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_ibfk_1` FOREIGN KEY (`place_id`) REFERENCES `place` (`id`);

--
-- Constraints for table `event_request`
--
ALTER TABLE `event_request`
  ADD CONSTRAINT `event_request_ibfk_1` FOREIGN KEY (`Alumni_id`) REFERENCES `alumni` (`ID`);

--
-- Constraints for table `faq`
--
ALTER TABLE `faq`
  ADD CONSTRAINT `faq_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`id`);

--
-- Constraints for table `gallery`
--
ALTER TABLE `gallery`
  ADD CONSTRAINT `gallery_ibfk_1` FOREIGN KEY (`picture_id`) REFERENCES `pictures` (`id`);

--
-- Constraints for table `itsupportemail`
--
ALTER TABLE `itsupportemail`
  ADD CONSTRAINT `itsupportemail_ibfk_1` FOREIGN KEY (`Alumni_id`) REFERENCES `alumni` (`ID`);

--
-- Constraints for table `job_posts_pictures`
--
ALTER TABLE `job_posts_pictures`
  ADD CONSTRAINT `job_posts_pictures_ibfk_1` FOREIGN KEY (`jop_posts_id`) REFERENCES `job_posts` (`id`),
  ADD CONSTRAINT `job_posts_pictures_ibfk_2` FOREIGN KEY (`pictures_id`) REFERENCES `pictures` (`id`);

--
-- Constraints for table `mentorshipprogram`
--
ALTER TABLE `mentorshipprogram`
  ADD CONSTRAINT `mentorshipprogram_ibfk_1` FOREIGN KEY (`place_id`) REFERENCES `place` (`id`);

--
-- Constraints for table `requesttomentorship`
--
ALTER TABLE `requesttomentorship`
  ADD CONSTRAINT `requesttomentorship_ibfk_1` FOREIGN KEY (`Alumni_id`) REFERENCES `alumni` (`ID`);

--
-- Constraints for table `saffevent`
--
ALTER TABLE `saffevent`
  ADD CONSTRAINT `saffevent_ibfk_1` FOREIGN KEY (`staffid`) REFERENCES `faculty_staff` (`staff_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `saffevent_ibfk_2` FOREIGN KEY (`placeId`) REFERENCES `place` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `staffaccounts`
--
ALTER TABLE `staffaccounts`
  ADD CONSTRAINT `staffaccounts_ibfk_1` FOREIGN KEY (`staffid`) REFERENCES `faculty_staff` (`staff_id`);

--
-- Constraints for table `stafffaculty news`
--
ALTER TABLE `stafffaculty news`
  ADD CONSTRAINT `stafffaculty news_ibfk_1` FOREIGN KEY (`staffid`) REFERENCES `faculty_staff` (`staff_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `staffjobposts`
--
ALTER TABLE `staffjobposts`
  ADD CONSTRAINT `staffjobposts_ibfk_1` FOREIGN KEY (`staafid`) REFERENCES `faculty_staff` (`staff_id`);

--
-- Constraints for table `staffmentorship program`
--
ALTER TABLE `staffmentorship program`
  ADD CONSTRAINT `staffmentorship program_ibfk_1` FOREIGN KEY (`staffid`) REFERENCES `faculty_staff` (`staff_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
