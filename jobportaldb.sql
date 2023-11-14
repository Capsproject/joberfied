-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 09, 2023 at 08:24 AM
-- Server version: 10.5.20-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobportaldb`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `image_ID` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `image_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image_ID`, `image`, `image_text`) VALUES
(17, NULL, 'romano.png', ''),
(18, NULL, 'Annotation 2023-05-12 183046.png', ''),
(19, NULL, 'peso_logo.png', ''),
(20, NULL, 'ss.png', 'fhfgj'),
(21, NULL, 'peso_logo.png', '');

-- --------------------------------------------------------

--
-- Table structure for table `tblapplicants`
--

CREATE TABLE `tblapplicants` (
  `APPLICANTID` int(11) NOT NULL,
  `FNAME` varchar(90) NOT NULL,
  `LNAME` varchar(90) NOT NULL,
  `MNAME` varchar(90) NOT NULL,
  `ADDRESS` varchar(255) NOT NULL,
  `SEX` varchar(11) NOT NULL,
  `CIVILSTATUS` varchar(30) NOT NULL,
  `BIRTHDATE` date NOT NULL,
  `BIRTHPLACE` varchar(255) NOT NULL,
  `AGE` int(2) NOT NULL,
  `USERNAME` varchar(90) NOT NULL,
  `PASS` varchar(90) NOT NULL,
  `EMAILADDRESS` varchar(90) NOT NULL,
  `CONTACTNO` varchar(90) NOT NULL,
  `DEGREE` text NOT NULL,
  `APPLICANTPHOTO` varchar(255) NOT NULL,
  `NATIONALID` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblapplicants`
--

INSERT INTO `tblapplicants` (`APPLICANTID`, `FNAME`, `LNAME`, `MNAME`, `ADDRESS`, `SEX`, `CIVILSTATUS`, `BIRTHDATE`, `BIRTHPLACE`, `AGE`, `USERNAME`, `PASS`, `EMAILADDRESS`, `CONTACTNO`, `DEGREE`, `APPLICANTPHOTO`, `NATIONALID`) VALUES
(2023016, 'Romano', 'Datinguinoo', 'V.', 'Pilahan, Mabini Batangas', 'Male', 'none', '1998-11-18', 'sili, Mabini Batangas', 24, 'roman', '7164d573b0a473e6214aff5d1b28713e130a941d', 'datinguinooromano@gmail.com', '09500761267', 'gg', 'photos/romano.png', ''),
(2023017, 'Romanz', 'Datinguinoo', 'V.', 'Pilahan, Mabini Batangas', 'Male', 'Single', '1998-11-18', 'Pilahan, Mabini Batangas', 24, 'Romanz', '8beae21e6910b07a6067ff99b9cfa09b76e3f5b1', 'datinguinooromano@gmail.com', '09500761267', 'GG', 'photos/romaz.PNG', ''),
(2023018, 'Nelvin Jaylord', 'Dalangin', 'Aldovino', 'San Juan Mabini, Batangas', 'Male', 'Single', '2001-10-18', 'Mabini Batangas', 21, 'Nelvin Jaylord', '8cb2237d0679ca88db6464eac60da96345513964', 'nelvinjaylorddalangin@gmail.com', '09916902669', 'Senior Highschool Graduate', 'photos/nelvin.jpg', ''),
(2023019, 'Mano', 'Datinguinoo', 'Villanueva', 'Pilahan Mabini Batangas', 'Female', 'Single', '1998-11-18', 'Pilahan Mabini Batangas', 24, 'mano', 'abf1aa4a5e1ac3fe9069b2a7add8400e4e267223', 'datinguinooromano@gmail.com', '09500761267', '', '', ''),
(2023020, 'Romano', 'Datinguinoo', 'Villanueva', 'Pilahan Mabini Batangas', 'Male', 'none', '1998-11-18', 'Pilahan Mabini Batangas', 24, 'romano', 'ff60fe849bc160f17d570663e09de826ab2e55b0', 'datinguinooromano@gmail.com', '09500761267', '', 'photos/romano.png', ''),
(2023021, 'romanz', 'Datinguinoo', '', 'Pilahan Mabini Batangas', 'Male', 'Married', '2001-10-18', 'Pilahan Mabini Batangas', 21, 'romanz', 'c2dd06363a7841420f5ecadd65ccea8c5a048069', 'datinguinooromano@gmail.com', '09123456789', '', '', ''),
(2023022, 'romano', 'datinguinoo', 'V', 'Pilahan', 'Female', 'Married', '1977-03-30', 'pilahan', 46, 'romano', '7f6934ce707535bc1f5c78581500a674549f1492', 'datinguinooromano@gmail.com', '09123456789', '', 'photos/romano.png', ''),
(2023023, 'yerfsdagf', 'ehsgdh', 'v', 'pilhan', 'Male', 'Single', '1993-08-13', 'pilahan', 30, 'romn', 'f00c445b6167327b0ff9fd5334e41b3a469a824c', 'datinguinooromano@gmail.com', '00500761267', '', '', ''),
(2023024, 'mano', 'safgkjafh', 'hfghfgshg', 'sgfhsfghsfgh', 'Female', 'Married', '1995-06-23', 'hgsfhsgfh', 28, 'mano', '7bd02028f3110a4a3d7305276a5aae8305430e8f', 'datinguinooromano@gmail.com', '3513462456', '', '', ''),
(2023025, 'Romano', 'Datinguinoo', 'Villanueva', 'Pilahan Mabini Batangas', 'Male', 'none', '1998-11-08', 'Pilahan Mabini Batangas', 24, 'mano', '183991d7a8b86d523344ed264bdda753928cbe2f', 'datinguinooromano@gmail.com', '09500761267', 'College Level', 'photos/romano.png', ''),
(2023026, 'fghsgdh', 'gfhsfghfs', 'hfgshfsgh', 'hgfsghsgh', 'Female', 'Single', '1996-03-18', 'hfsghfsgh', 27, 'mano', 'e912679edd3fb2a7b408047585a32cb402772307', 'datinguinooromano@gmail.com', '62564767', '', '', ''),
(2023027, 'fasdf', 'adfsdf', 'fdasdfa', 'sadfsaf', 'Female', 'Single', '2001-03-17', 'fasdff', 22, 'mano', 'abf1aa4a5e1ac3fe9069b2a7add8400e4e267223', 'datinguinooromano@gmail.com', '4524264565', '', '', ''),
(2023028, 'Xzc', 'FSDFSAG', 'DGASG', 'GASG', 'Female', 'Widow', '1998-02-14', 'GASG', 25, 'mano', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 'datinguinooromano@gmail.com', '52345236', '', '', ''),
(2023029, 'gfgafg', 'fgafdg', '', 'fgdafgafg', 'Female', 'Married', '1993-02-22', 'dfasfg', 30, '', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 'datinguinooromano@gmail.com', 'afgafg', '', '', ''),
(2023030, 'dfasdfas', 'asdfdsadf', '', 'dsfasdf', 'Female', 'Married', '1993-02-22', 'fsdf', 30, '', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 'datinguinooromano@gmail.com', 'dasfsdf', '', '', ''),
(2023031, 'mano', 'asdf', '', 'dfa', 'Female', 'Single', '1998-11-18', 'dsaff', 24, 'mano', 'e912679edd3fb2a7b408047585a32cb402772307', 'datinguinooromano@gmail.com', '62564562456', '', '', ''),
(2023032, 'fsafafg', 'gdfg', '', 'gfgsf', 'Male', 'Single', '1996-02-15', 'sfgsdf', 27, 'roman', '7164d573b0a473e6214aff5d1b28713e130a941d', 'datinguinooromano@gmail.com', '2454545', '', '', ''),
(2023033, 'mama', 'agfg', 'afg', 'gafgf', 'Male', 'none', '1994-02-15', 'dfgadf', 29, 'roman', '6a784953617134dc084608cd1a066e9aba5e361e', 'datinguinooromano@gmail.com', '1234134', '', '', ''),
(2023034, 'Man0', 'Datinguinoo', 'Villanueva', 'Pilahan Mabini Batangas', 'Male', 'Single', '1998-11-18', 'Pilahan Mabini Batangas', 24, 'Mano', '7bd02028f3110a4a3d7305276a5aae8305430e8f', 'datinguioo@gmail.com', '12345678909', 'GG', '', ''),
(2023035, 'Mano', 'Datinguinoo', 'Villanueva', 'Pilahan Mabini Batangas', 'Male', 'Single', '1998-11-18', 'Pilahan Mabini Batangas', 24, 'mano', '7bd02028f3110a4a3d7305276a5aae8305430e8f', 'mano@gmail.com', '09123456789', 'sfhsfg', '', ''),
(2023036, 'Romano', 'Datinguinoo', 'Villanueva', 'Pilahan Mabini Batangas', 'Male', 'Single', '1998-11-18', 'Pilahan Mabini Batangas', 24, 'Romano', 'ff60fe849bc160f17d570663e09de826ab2e55b0', 'datinguinooromano@gmail.com', '09500761267', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tblattachmentfile`
--

CREATE TABLE `tblattachmentfile` (
  `ID` int(11) NOT NULL,
  `FILEID` varchar(30) DEFAULT NULL,
  `JOBID` int(11) NOT NULL,
  `FILE_NAME` varchar(90) NOT NULL,
  `FILE_LOCATION` varchar(255) NOT NULL,
  `USERATTACHMENTID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblattachmentfile`
--

INSERT INTO `tblattachmentfile` (`ID`, `FILEID`, `JOBID`, `FILE_NAME`, `FILE_LOCATION`, `USERATTACHMENTID`) VALUES
(2, '2147483647', 2, 'Resume', 'photos/27052018124027PLATENO FE95483.docx', 2018013),
(3, '20236912529', 3, 'Resume', 'photos/16092023064612peso_logo.png', 2023016),
(4, '20236912530', 3, 'Resume', 'photos/16092023075217mano.jpg', 2023017),
(5, '20236912532', 4, 'Resume', 'photos/02102023070700dfd joberfied.png', 2023016),
(6, '20236912533', 4, 'Resume', 'photos/14102023040842Neutral Minimalist Modern Professional Accountant Resume.pdf', 2023016),
(7, '20236912535', 5, 'Resume', 'photos/16102023015134service1.jpg', 2023016),
(8, '20236912536', 5, 'Resume', 'photos/22102023072514Neutral Minimalist Modern Professional Accountant Resume.pdf', 2023020),
(9, '20236912539', 9, 'Resume', 'photos/25102023051124Neutral Minimalist Modern Professional Accountant Resume.pdf', 2023020),
(10, '20236912540', 12, 'Resume', 'photos/02112023104609Screenshot (17).png', 2023036),
(11, '20236912541', 14, 'Resume', 'photos/02112023113639Screenshot (8).png', 2023025),
(12, '20236912542', 15, 'Resume', 'photos/03112023034655joberfiedlogo.png', 2023025);

-- --------------------------------------------------------

--
-- Table structure for table `tblautonumbers`
--

CREATE TABLE `tblautonumbers` (
  `AUTOID` int(11) NOT NULL,
  `AUTOSTART` varchar(30) NOT NULL,
  `AUTOEND` int(11) NOT NULL,
  `AUTOINC` int(11) NOT NULL,
  `AUTOKEY` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblautonumbers`
--

INSERT INTO `tblautonumbers` (`AUTOID`, `AUTOSTART`, `AUTOEND`, `AUTOINC`, `AUTOKEY`) VALUES
(1, '02983', 9, 1, 'userid'),
(2, '000', 80, 1, 'employeeid'),
(3, '0', 37, 1, 'APPLICANT'),
(4, '69125', 43, 1, 'FILEID');

-- --------------------------------------------------------

--
-- Table structure for table `tblcategory`
--

CREATE TABLE `tblcategory` (
  `CATEGORYID` int(11) NOT NULL,
  `CATEGORY` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblcategory`
--

INSERT INTO `tblcategory` (`CATEGORYID`, `CATEGORY`) VALUES
(10, 'Technology'),
(11, 'Managerial'),
(12, 'Engineer'),
(13, 'IT'),
(15, 'HR'),
(23, 'Sales'),
(25, 'Finance'),
(27, 'Degital Marketing'),
(28, 'Shipping'),
(29, 'Store'),
(30, 'Photographer');

-- --------------------------------------------------------

--
-- Table structure for table `tblcompany`
--

CREATE TABLE `tblcompany` (
  `COMPANYID` int(11) NOT NULL,
  `COMPANYNAME` varchar(90) NOT NULL,
  `COMPANYADDRESS` varchar(90) NOT NULL,
  `COMPANYCONTACTNO` varchar(30) NOT NULL,
  `COMPANYSTATUS` varchar(90) NOT NULL,
  `COMPANYMISSION` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblcompany`
--

INSERT INTO `tblcompany` (`COMPANYID`, `COMPANYNAME`, `COMPANYADDRESS`, `COMPANYCONTACTNO`, `COMPANYSTATUS`, `COMPANYMISSION`) VALUES
(9, 'DR-Photography', 'Pilahan, Mabini Batangas', '09500761267', '', ''),
(10, 'Art Ko To', 'dgagfdag', '09123456789', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tblemployees`
--

CREATE TABLE `tblemployees` (
  `INCID` int(11) NOT NULL,
  `EMPLOYEEID` varchar(30) NOT NULL,
  `FNAME` varchar(50) NOT NULL,
  `LNAME` varchar(50) NOT NULL,
  `MNAME` varchar(50) NOT NULL,
  `ADDRESS` varchar(90) NOT NULL,
  `BIRTHDATE` date NOT NULL,
  `BIRTHPLACE` varchar(90) NOT NULL,
  `AGE` int(11) NOT NULL,
  `SEX` varchar(30) NOT NULL,
  `CIVILSTATUS` varchar(30) NOT NULL,
  `TELNO` varchar(40) NOT NULL,
  `EMP_EMAILADDRESS` varchar(90) NOT NULL,
  `CELLNO` varchar(30) NOT NULL,
  `POSITION` varchar(50) NOT NULL,
  `WORKSTATS` varchar(90) NOT NULL,
  `EMPPHOTO` varchar(255) NOT NULL,
  `EMPUSERNAME` varchar(90) NOT NULL,
  `EMPPASSWORD` varchar(125) NOT NULL,
  `DATEHIRED` date NOT NULL,
  `COMPANYID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblemployees`
--

INSERT INTO `tblemployees` (`INCID`, `EMPLOYEEID`, `FNAME`, `LNAME`, `MNAME`, `ADDRESS`, `BIRTHDATE`, `BIRTHPLACE`, `AGE`, `SEX`, `CIVILSTATUS`, `TELNO`, `EMP_EMAILADDRESS`, `CELLNO`, `POSITION`, `WORKSTATS`, `EMPPHOTO`, `EMPUSERNAME`, `EMPPASSWORD`, `DATEHIRED`, `COMPANYID`) VALUES
(78, '22', 'fgfdgf', 'fgfg', 'fgfg', 'DATA PRIVACY STATEMENT / CONSENT The Public Employment Service Office (PESO) of the Munici', '1990-02-08', 'fatatfg', 33, 'Female', 'Single', '23525', 'datinguioo@gmail.com', '', 'dsfgfd', '', '', '22', '12c6fc06c99a462375eeb3f43dfd832b08ca9e17', '2023-10-18', 9);

-- --------------------------------------------------------

--
-- Table structure for table `tblfeedback`
--

CREATE TABLE `tblfeedback` (
  `FEEDBACKID` int(11) NOT NULL,
  `APPLICANTID` int(11) NOT NULL,
  `REGISTRATIONID` int(11) NOT NULL,
  `FEEDBACK` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblfeedback`
--

INSERT INTO `tblfeedback` (`FEEDBACKID`, `APPLICANTID`, `REGISTRATIONID`, `FEEDBACK`) VALUES
(4, 2023020, 9, 'Qualification/Work Experience :aaaaaaaaaaaaDATA PRIVACY STATEMENT / CONSENT The Public Employment Service Office (PESO) of the Municipality of Mabini, Batangas recognizes our responsibilities under the Republic Act No. 10173 (Act), also known as the Data Qualification/Work Experience :aaaaaaaaaaaaDATA PRIVACY STATEMENT / CONSENT The Public Employment Service Office (PESO) of the Municipality of Mabini, Batangas recognizes our responsibilities under the Republic Act No. 10173 (Act), also known as the Data Qualification/Work Experience :aaaaaaaaaaaaDATA PRIVACY STATEMENT / CONSENT The Public Employment Service Office (PESO) of the Municipality of Mabini, Batangas recognizes our responsibilities under the Republic Act No. 10173 (Act), also known as the Data Qualification/Work Experience :aaaaaaaaaaaaDATA PRIVACY STATEMENT / CONSENT The Public Employment Service Office (PESO) of the Municipality of Mabini, Batangas recognizes our responsibilities under the Republic Act No. 10173 (Act), also known as the Data Qualification/Work Experience :aaaaaaaaaaaaDATA PRIVACY STATEMENT / CONSENT The Public Employment Service Office (PESO) of the Municipality of Mabini, Batangas recognizes our responsibilities under the Republic Act No. 10173 (Act), also known as the Data Qualification/Work Experience :aaaaaaaaaaaaDATA PRIVACY STATEMENT / CONSENT The Public Employment Service Office (PESO) of the Municipality of Mabini, Batangas recognizes our responsibilities under the Republic Act No. 10173 (Act), also known as the Data Qualification/Work Experience :aaaaaaaaaaaaDATA PRIVACY STATEMENT / CONSENT The Public Employment Service Office (PESO) of the Municipality of Mabini, Batangas recognizes our responsibilities under the Republic Act No. 10173 (Act), also known as the Data Qualification/Work Experience :aaaaaaaaaaaaDATA PRIVACY STATEMENT / CONSENT The Public Employment Service Office (PESO) of the Municipality of Mabini, Batangas recognizes our responsibilities under the Republic Act No. 10173 (Act), also known as the Data Qualification/Work Experience :aaaaaaaaaaaaDATA PRIVACY STATEMENT / CONSENT The Public Employment Service Office (PESO) of the Municipality of Mabini, Batangas recognizes our responsibilities under the Republic Act No. 10173 (Act), also known as the Data Qualification/Work Experience :aaaaaaaaaaaaDATA PRIVACY STATEMENT / CONSENT The Public Employment Service Office (PESO) of the Municipality of Mabini, Batangas recognizes our responsibilities under the Republic Act No. 10173 (Act), also known as the Data Qualification/Work Experience :aaaaaaaaaaaaDATA PRIVACY STATEMENT / CONSENT The Public Employment Service Office (PESO) of the Municipality of Mabini, Batangas recognizes our responsibilities under the Republic Act No. 10173 (Act), also known as the Data ');

-- --------------------------------------------------------

--
-- Table structure for table `tbljob`
--

CREATE TABLE `tbljob` (
  `JOBID` int(11) NOT NULL,
  `COMPANYID` int(11) NOT NULL,
  `CATEGORY` varchar(250) NOT NULL,
  `OCCUPATIONTITLE` varchar(90) NOT NULL,
  `REQ_NO_EMPLOYEES` int(11) NOT NULL,
  `SALARIES` double NOT NULL,
  `DURATION_EMPLOYEMENT` varchar(90) NOT NULL,
  `QUALIFICATION_WORKEXPERIENCE` text NOT NULL,
  `JOBDESCRIPTION` text NOT NULL,
  `PREFEREDSEX` varchar(30) NOT NULL,
  `SECTOR_VACANCY` text NOT NULL,
  `JOBSTATUS` varchar(30) NOT NULL,
  `DATEPOSTED` datetime NOT NULL,
  `JOBPHOTO` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbljob`
--

INSERT INTO `tbljob` (`JOBID`, `COMPANYID`, `CATEGORY`, `OCCUPATIONTITLE`, `REQ_NO_EMPLOYEES`, `SALARIES`, `DURATION_EMPLOYEMENT`, `QUALIFICATION_WORKEXPERIENCE`, `JOBDESCRIPTION`, `PREFEREDSEX`, `SECTOR_VACANCY`, `JOBSTATUS`, `DATEPOSTED`, `JOBPHOTO`) VALUES
(31, 9, 'Engineer', 'Web Developer', 12, 15, '15 Days', 'test', 'test', 'Male/Female', 'test', '', '2023-11-07 10:39:00', 'photos/07112023103959job.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbljobphoto`
--

CREATE TABLE `tbljobphoto` (
  `ID` int(11) NOT NULL,
  `PHOTOID` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `JOBID` int(11) NOT NULL,
  `FILE_NAME` varchar(90) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `FILE_LOCATION` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `JOBPHOTOID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbljobregistration`
--

CREATE TABLE `tbljobregistration` (
  `REGISTRATIONID` int(11) NOT NULL,
  `COMPANYID` int(11) NOT NULL,
  `JOBID` int(11) NOT NULL,
  `APPLICANTID` int(11) NOT NULL,
  `APPLICANT` varchar(90) NOT NULL,
  `REGISTRATIONDATE` date NOT NULL,
  `REMARKS` varchar(255) NOT NULL DEFAULT 'Pending',
  `FILEID` varchar(30) DEFAULT NULL,
  `PENDINGAPPLICATION` tinyint(1) NOT NULL DEFAULT 1,
  `HVIEW` tinyint(1) NOT NULL DEFAULT 1,
  `DATETIMEAPPROVED` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbljobregistration`
--

INSERT INTO `tbljobregistration` (`REGISTRATIONID`, `COMPANYID`, `JOBID`, `APPLICANTID`, `APPLICANT`, `REGISTRATIONDATE`, `REMARKS`, `FILEID`, `PENDINGAPPLICATION`, `HVIEW`, `DATETIMEAPPROVED`) VALUES
(3, 7, 3, 2023016, 'Roman Datinguinoo', '2023-09-16', 'Pending', '20236912529', 1, 1, '2023-09-16 06:46:00'),
(4, 7, 3, 2023017, 'Romanz Datinguinoo', '2023-09-16', 'Pending', '20236912530', 1, 1, '2023-09-16 07:52:00'),
(5, 8, 4, 2023016, 'Roman Datinguinoo', '2023-10-02', 'interview na next week, goodluck!\r\n', '20236912532', 0, 1, '2023-10-07 10:11:29'),
(6, 8, 4, 2023016, 'Roman Datinguinoo', '2023-10-14', 'Pending', '20236912533', 1, 1, '2023-10-14 04:08:00'),
(7, 9, 5, 2023016, 'Romano Datinguinoo', '2023-10-16', 'Pending', '20236912535', 1, 1, '2023-10-16 13:51:00'),
(8, 9, 5, 2023020, 'Romano Datinguinoo', '2023-10-22', 'Address : Pilahan Mabini Batangas\r\nContact No. : 09500761267\r\nEmail Address. : datinguinooromano@gmail.com\r\nSex: Male\r\nAge : 24', '20236912536', 0, 1, '2023-10-24 17:49:21'),
(9, 10, 9, 2023020, 'Romano Datinguinoo', '2023-10-25', 'Qualification/Work Experience :aaaaaaaaaaaaDATA PRIVACY STATEMENT / CONSENT The Public Employment Service Office (PESO) of the Municipality of Mabini, Batangas recognizes our responsibilities under the Republic Act No. 10173 (Act), also known as the Data ', '20236912539', 0, 0, '2023-10-28 15:57:42'),
(10, 9, 12, 2023036, 'Romano Datinguinoo', '2023-11-02', 'Pending', '20236912540', 1, 1, '2023-11-02 10:46:00'),
(11, 9, 14, 2023025, 'bcvb cvbnbnbc', '2023-11-02', 'Pending', '20236912541', 1, 1, '2023-11-02 11:36:00'),
(12, 9, 15, 2023025, 'bcvb cvbnbnbc', '2023-11-03', 'Pending', '20236912542', 1, 1, '2023-11-03 03:46:00');

-- --------------------------------------------------------

--
-- Table structure for table `tblposting`
--

CREATE TABLE `tblposting` (
  `POSTID` int(11) NOT NULL,
  `TEXTPOST` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `PICPOST` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `USERID` varchar(30) NOT NULL,
  `FULLNAME` varchar(40) NOT NULL,
  `USERNAME` varchar(90) NOT NULL,
  `PASS` varchar(90) NOT NULL,
  `ROLE` varchar(30) NOT NULL,
  `PICLOCATION` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`USERID`, `FULLNAME`, `USERNAME`, `PASS`, `ROLE`, `PICLOCATION`) VALUES
('00018', 'P.E.S.O. MABINI', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Administrator', 'photos/peso_logo.png'),
('1', 'Romano Datinguinoo', 'Datinguinoo', 'e912679edd3fb2a7b408047585a32cb402772307', 'Administrator', ''),
('22', 'fgfdgf fgfg', 'fgfg', '12c6fc06c99a462375eeb3f43dfd832b08ca9e17', 'Employee', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblapplicants`
--
ALTER TABLE `tblapplicants`
  ADD PRIMARY KEY (`APPLICANTID`);

--
-- Indexes for table `tblattachmentfile`
--
ALTER TABLE `tblattachmentfile`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblautonumbers`
--
ALTER TABLE `tblautonumbers`
  ADD PRIMARY KEY (`AUTOID`);

--
-- Indexes for table `tblcategory`
--
ALTER TABLE `tblcategory`
  ADD PRIMARY KEY (`CATEGORYID`);

--
-- Indexes for table `tblcompany`
--
ALTER TABLE `tblcompany`
  ADD PRIMARY KEY (`COMPANYID`);

--
-- Indexes for table `tblemployees`
--
ALTER TABLE `tblemployees`
  ADD PRIMARY KEY (`INCID`),
  ADD UNIQUE KEY `EMPLOYEEID` (`EMPLOYEEID`);

--
-- Indexes for table `tblfeedback`
--
ALTER TABLE `tblfeedback`
  ADD PRIMARY KEY (`FEEDBACKID`);

--
-- Indexes for table `tbljob`
--
ALTER TABLE `tbljob`
  ADD PRIMARY KEY (`JOBID`);

--
-- Indexes for table `tbljobphoto`
--
ALTER TABLE `tbljobphoto`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbljobregistration`
--
ALTER TABLE `tbljobregistration`
  ADD PRIMARY KEY (`REGISTRATIONID`);

--
-- Indexes for table `tblposting`
--
ALTER TABLE `tblposting`
  ADD PRIMARY KEY (`POSTID`);

--
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`USERID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tblapplicants`
--
ALTER TABLE `tblapplicants`
  MODIFY `APPLICANTID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2023037;

--
-- AUTO_INCREMENT for table `tblattachmentfile`
--
ALTER TABLE `tblattachmentfile`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tblautonumbers`
--
ALTER TABLE `tblautonumbers`
  MODIFY `AUTOID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblcategory`
--
ALTER TABLE `tblcategory`
  MODIFY `CATEGORYID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `tblcompany`
--
ALTER TABLE `tblcompany`
  MODIFY `COMPANYID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tblemployees`
--
ALTER TABLE `tblemployees`
  MODIFY `INCID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `tblfeedback`
--
ALTER TABLE `tblfeedback`
  MODIFY `FEEDBACKID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbljob`
--
ALTER TABLE `tbljob`
  MODIFY `JOBID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `tbljobphoto`
--
ALTER TABLE `tbljobphoto`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbljobregistration`
--
ALTER TABLE `tbljobregistration`
  MODIFY `REGISTRATIONID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tblposting`
--
ALTER TABLE `tblposting`
  MODIFY `POSTID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
