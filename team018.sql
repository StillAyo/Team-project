-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 16, 2020 at 08:47 PM
-- Server version: 5.5.64-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `team018`
--

-- --------------------------------------------------------

--
-- Table structure for table `call_log`
--

CREATE TABLE `call_log` (
  `callno` int(11) NOT NULL,
  `callerid` int(11) NOT NULL,
  `operatorid` int(11) NOT NULL,
  `time` text NOT NULL,
  `reason` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `call_log`
--

INSERT INTO `call_log` (`callno`, `callerid`, `operatorid`, `time`, `reason`) VALUES
(4, 23, 1, '2019-11-1 12:00:00', 'Check up'),
(10, 33333, 1, '2020-06-17 21:30', 'Mouse not responding'),
(11, 123, 6598, '2019-05-16 16:41', 'Unable to Log in'),
(12, 11111, 7403, '2019-10-11 13:11', 'Cannot connect to the Network'),
(13, 22945, 76345, '2019-03-11 08:41', 'Sound is not working'),
(14, 22945, 92356, '2019-03-14 12:34', 'Check Up'),
(15, 33333, 7403, '2019-09-17 19:08', 'Unable to access particular files'),
(16, 33389, 92356, '2018-10-19 13:02', 'Computer is running slow'),
(17, 34544, 6598, '2019-12-11 10:12', 'Cannot connect to the printer'),
(18, 34544, 6598, '2019-12-13 11:37', 'Check Up'),
(19, 43339, 92356, '2019-10-30 16:23', 'Possible Virus'),
(20, 48241, 76345, '2019-10-30 17:56', 'Keyboard is broken'),
(36, 44556, 1, '2019-11-15 14:00', 'Problem with WiFi'),
(38, 33333, 1, '2019-11-05 14:00', 'Problem with Excel'),
(41, 33333, 1, '2019-11-06 13:00', 'New problem'),
(67, 22222, 1, '2000-05-01 01:05', 'Broken Printer'),
(69, 34544, 1, '2019-11-12 22:58', 'printer broken'),
(70, 33333, 1, '2019-11-12 13:59', 'New problem'),
(71, 33333, 1, '2019-11-12 12:32', 'checkup on printers'),
(72, 34533, 1, '2019-11-12 12:34', 'printer'),
(78, 11111, 1, '2020-02-14 02:57', 'Python not working'),
(79, 5678, 1, '2020-02-11 12:55', 'Test 11/02/2020'),
(80, 123, 1, '2020-02-11 13:02', '123'),
(81, 5678, 1, '2020-02-11 14:03', 'Nwe problem'),
(82, 5678, 1, '2020-02-11 14:15', 'qwert'),
(87, 43339, 1, '2020-02-11 14:44', 'Test'),
(88, 43339, 1, '2020-02-11 14:44', 'Test'),
(89, 43339, 1, '2020-02-11 20:16', 'New Problem'),
(90, 111111, 1, '2020-02-21 04:56', 'No work'),
(91, 5678, 1, '2020-02-11 20:46', 'Test'),
(92, 22212, 1, '2020-02-12 14:06', 'testing'),
(93, 22212, 1, '2020-02-12 14:06', 'testing'),
(94, 11111, 1, '2020-02-12 16:05', 'testing'),
(95, 22222, 1, '220108 12:35', 'checkup about call'),
(96, 22222, 1, '220108 12:35', 'checkup about call'),
(97, 34544, 1, 'svsv saves', 'dsvds'),
(98, 34544, 1, 'dsgdg sedges', 'agg'),
(99, 34544, 1, 'dsgdg sedges', 'agg'),
(100, 34544, 1, 'dsgdg sedges', 'agg'),
(101, 5678, 1, '2020-02-13 10:39', 'test'),
(102, 23134, 1, '2020-02-13 11:13', 'fatal error'),
(103, 23134, 1, '2020-02-13 11:13', 'fatal error'),
(104, 23134, 1, '2020-02-13 11:13', 'fatal error'),
(105, 23134, 1, '2020-02-13 11:13', 'fatal error'),
(106, 23134, 1, '2020-02-13 11:13', 'fatal error'),
(107, 23134, 1, '2020-02-13 11:13', 'fatal error'),
(108, 23134, 1, '2020-02-13 11:13', 'fatal error'),
(109, 23134, 1, '2020-02-13 11:13', 'fatal error'),
(110, 23134, 1, '2020-02-13 11:13', 'fatal error'),
(111, 23134, 1, '2020-02-13 11:13', 'fatal error'),
(112, 23134, 1, '2020-02-13 11:13', 'fatal error'),
(113, 23134, 1, '2020-02-13 11:13', 'fatal error'),
(114, 34544, 1, 'dsgdg sedges', 'agg'),
(115, 34544, 1, 'gfcgf fchgc', 'hgcyh'),
(116, 34544, 1, 'hgjv j', 'jh'),
(117, 34544, 1, '2020-02-13 17:25', 'Mailbox broke'),
(118, 34544, 1, '2020-02-13 17:25', 'Mailbox broke'),
(119, 34544, 1, '2020-02-13 17:25', 'Mailbox broke'),
(120, 34544, 1, '2020-02-13 17:25', 'Mailbox broke'),
(121, 34544, 1, '2020-02-13 17:25', 'Mailbox broke'),
(122, 34544, 1, '2020-02-13 17:25', 'Mailbox broke'),
(123, 34544, 1, '2020-02-13 17:25', 'Mailbox broke'),
(124, 34544, 1, '2020-02-13 17:25', 'Mailbox broke'),
(125, 34544, 1, '2020-02-13 17:25', 'Mailbox broke'),
(126, 34544, 1, '2020-02-13 17:25', 'Mailbox broke'),
(127, 34544, 1, '2020-02-13 17:25', 'Mailbox broke'),
(128, 34544, 1, '2020-02-13 17:25', 'Mailbox broke'),
(129, 34544, 1, '2020-02-13 17:25', 'Mailbox broke'),
(130, 34544, 1, '2020-02-13 17:25', 'Mailbox broke'),
(131, 34544, 1, '2020-02-13 17:25', 'Mailbox broke');

-- --------------------------------------------------------

--
-- Table structure for table `equipmemt`
--

CREATE TABLE `equipmemt` (
  `serial_no` int(11) NOT NULL,
  `type` text NOT NULL,
  `make` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `equipmemt`
--

INSERT INTO `equipmemt` (`serial_no`, `type`, `make`) VALUES
(1234567890, 'Laptop', 'HP'),
(2147483647, 'Laptop', 'Mac'),
(2147483647, 'Laptop', 'Mac'),
(1930452950, 'Laptop', 'Windows'),
(2147483647, 'Laptop', 'Windows'),
(2147483647, 'Printer', 'HP'),
(2147483647, 'Printer', 'HP'),
(2147483647, 'Printer', 'HP'),
(2147483647, 'Printer', 'HP'),
(2147483647, 'Printer', 'HP');

-- --------------------------------------------------------

--
-- Table structure for table `liscensing`
--

CREATE TABLE `liscensing` (
  `software` text NOT NULL,
  `liscensed` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `liscensing`
--

INSERT INTO `liscensing` (`software`, `liscensed`) VALUES
('Excel', 0),
('Word', 0),
('Powerpoint', 0),
('Access', 0),
('Outlook', 0),
('Python', 0),
('Notepad++', 0),
('Eclipse', 0),
('Visual Studio', 0),
('One Drive', 0);

-- --------------------------------------------------------

--
-- Table structure for table `live`
--

CREATE TABLE `live` (
  `problem_no` int(11) NOT NULL,
  `specialist_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `live`
--

INSERT INTO `live` (`problem_no`, `specialist_id`) VALUES
(21, 1234),
(22, 1234),
(23, 1234),
(24, 1234),
(25, 5678),
(26, 5678),
(27, 5678),
(28, 5678),
(29, 9011),
(30, 9011),
(50, 9453),
(111, 5678),
(122, 1234),
(123, 9011),
(126, 9011),
(127, 5678),
(128, 5678);

-- --------------------------------------------------------

--
-- Table structure for table `personnel`
--

CREATE TABLE `personnel` (
  `id` char(5) NOT NULL,
  `name` text NOT NULL,
  `job` text NOT NULL,
  `dept` text NOT NULL,
  `telno` char(11) NOT NULL,
  `site_id` int(11) NOT NULL,
  `password_hash` varchar(128) DEFAULT NULL,
  `salt` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='table to store employee details';

--
-- Dumping data for table `personnel`
--

INSERT INTO `personnel` (`id`, `name`, `job`, `dept`, `telno`, `site_id`, `password_hash`, `salt`) VALUES
('0123', 'Issy Bennett', 'Accountant', 'Finance', '52769032165', 234, 'cf80cd8aed482d5d1527d7dc72fceff84e6326592848447d2dc0b0e87dfc9a90', '8dbf4e644b5b31ec999e4cb0aea5153dd28cfde62deb7af1bf...'),
('11111', 'john smith', 'operator', 'IT', '02345456463', 234, 'cf80cd8aed482d5d1527d7dc72fceff84e6326592848447d2dc0b0e87dfc9a90', '8dbf4e644b5b31ec999e4cb0aea5153dd28cfde62deb7af1bf781fe39413e83b'),
('11254', 'Clara Andrews', 'Specialist', 'IT', '72903358156', 234, 'cf80cd8aed482d5d1527d7dc72fceff84e6326592848447d2dc0b0e87dfc9a90', '8dbf4e644b5b31ec999e4cb0aea5153dd28cfde62deb7af1bf...'),
('1234', 'Will Smith', 'Specialist', 'IT', '18364927479', 234, 'cf80cd8aed482d5d1527d7dc72fceff84e6326592848447d2dc0b0e87dfc9a90', '21d733e8c47e0d1b6d6397472f99b221e13fc3e3bb3890b0b17e4442cba982f5'),
('22222', 'phil rivers', 'ceo', 'corporate', '11111111111', 234, 'cf80cd8aed482d5d1527d7dc72fceff84e6326592848447d2dc0b0e87dfc9a90', '1160af85f1369c839173e687f3b46d50be53642752b171669b150dedd5e594f0'),
('22945', 'David Oliver', 'Sales Assistant', 'Sales', '09946721634', 234, 'cf80cd8aed482d5d1527d7dc72fceff84e6326592848447d2dc0b0e87dfc9a90', '8dbf4e644b5b31ec999e4cb0aea5153dd28cfde62deb7af1bf...'),
('33333', 'phil rivers', 'office assistant', 'accounting', '63863792736', 234, 'cf80cd8aed482d5d1527d7dc72fceff84e6326592848447d2dc0b0e87dfc9a90', 'c5995f86c3b87515d41ef5e5fc589e3885a5b521ecd0a5aa8dba73eeb86a4a85'),
('33789', 'George Jones', 'Financial Advisor', 'Finance', '4588939210', 234, 'cf80cd8aed482d5d1527d7dc72fceff84e6326592848447d2dc0b0e87dfc9a90', '1160af85f1369c839173e687f3b46d50be53642752b171669b150dedd5e594f0'),
('34544', 'matthew witty', 'mailman', 'mail', '09567373733', 234, 'cf80cd8aed482d5d1527d7dc72fceff84e6326592848447d2dc0b0e87dfc9a90', '04b2914ad075a329a0e88fe4fe55ba66122073e5c706a1e6cdd11d094c5bc43a'),
('43339', 'Julia Martin', 'COO', 'Corporate', '78923587530', 234, 'cf80cd8aed482d5d1527d7dc72fceff84e6326592848447d2dc0b0e87dfc9a90', '3d911e9fc0823130a201bcbc66a9e45955833e374899752afede35250921f952'),
('48241', 'Sally Greenwood', 'Sales Manager', 'Sales', '16389366046', 234, 'cf80cd8aed482d5d1527d7dc72fceff84e6326592848447d2dc0b0e87dfc9a90', '8dbf4e644b5b31ec999e4cb0aea5153dd28cfde62deb7af1bf'),
('5678', 'Chris Paul', 'Specialist', 'IT', '73097392739', 234, 'cf80cd8aed482d5d1527d7dc72fceff84e6326592848447d2dc0b0e87dfc9a90', '3d911e9fc0823130a201bcbc66a9e45955833e374899752afede35250921f952'),
('7748', 'Sam Wiles', 'CFO', 'Corporate', '63998120437', 234, 'cf80cd8aed482d5d1527d7dc72fceff84e6326592848447d2dc0b0e87dfc9a90', '41b6a4df3bc31f28fd6e08dc4d7894b3eca77f6342ab72150033281950bd124e'),
('9011', 'Kyle Lowry', 'Specialist', 'IT', '36246234623', 234, 'cf80cd8aed482d5d1527d7dc72fceff84e6326592848447d2dc0b0e87dfc9a90', '5bde0dba55ed3c51196f41f06cfb468d6a6ed8af8d33e9e9ed6f7a5fcb2f9f39'),
('9453', 'Ben Simmons', 'Specialist', 'IT', '47462836748', 234, 'cf80cd8aed482d5d1527d7dc72fceff84e6326592848447d2dc0b0e87dfc9a90', '41b6a4df3bc31f28fd6e08dc4d7894b3eca77f6342ab72150033281950bd124e');

-- --------------------------------------------------------

--
-- Table structure for table `problem`
--

CREATE TABLE `problem` (
  `problem_no` int(11) NOT NULL,
  `type` text NOT NULL,
  `serial_no` int(11) NOT NULL,
  `description` text NOT NULL,
  `personnel_id` text NOT NULL,
  `date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `problem`
--

INSERT INTO `problem` (`problem_no`, `type`, `serial_no`, `description`, `personnel_id`, `date`) VALUES
(111, 'Software', 12345, 'Python crashed', '43339', '2020-02-11'),
(116, 'Network', 11221, 'Network blocked', '43339', '2020-02-11'),
(117, 'Hardware', 11111, 'Caps button broken on keyboard', '5678', '2020-02-11'),
(118, 'Hardware', 11111, 'Webcam not working', '5678', '2020-02-11'),
(119, 'Hardware', 11111, 'Microphone only works sometimes', '5678', '2020-02-11'),
(120, 'Software', 11111, 'Excel is blocked', '5678', '2020-02-11'),
(121, 'Hardware', 231231, 'The printer has been down for nearly 2 days', '22212', '2020-02-12'),
(122, 'Software', 231231, 'Mailbox is broken', '11111', '2020-02-12'),
(123, 'Software', 231231, 'Photoshop is outdated, cannot merge files', '11111', '2020-02-12'),
(124, 'Network', 231231, 'Download speed keeps spiking', '11111', '2020-02-12'),
(125, 'Hardware', 231231, 'Need a new mouse', '11111', '2020-02-12'),
(126, 'Hardware', 122, 'Drivers are outdated and need reinstalling', '5678', '2020-02-13'),
(127, 'Network', 23154, 'Upload speed is too slow, unable to do webinar', '23134', '2020-02-13'),
(128, 'Network', 23154, 'Intranet is down', '23134', '2020-02-13'),
(129, 'Network', 23154, 'Intranet is down...', '23134', '2020-02-13'),
(130, 'Hardware', 2147483647, 'Mailbox broke', '34544', '2020-02-13');

-- --------------------------------------------------------

--
-- Table structure for table `problem_type`
--

CREATE TABLE `problem_type` (
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `problem_type`
--

INSERT INTO `problem_type` (`type`) VALUES
('Hardware'),
('Network'),
('Software');

-- --------------------------------------------------------

--
-- Table structure for table `resolved`
--

CREATE TABLE `resolved` (
  `problem_no` int(11) NOT NULL,
  `solution` text NOT NULL,
  `date` text NOT NULL,
  `notes` text,
  `specialist_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resolved`
--

INSERT INTO `resolved` (`problem_no`, `solution`, `date`, `notes`, `specialist_id`) VALUES
(1, 'Software Update', '23-10-2019', 'Notepad ++, new software update was needed', 9453),
(2, 'Reconnect to the network', '23-10-2019', NULL, 99823),
(3, 'Ran Anti-Virus Software', '17-10-2019', 'Norton 3.0 was used', 5678),
(4, 'Replace keyboard', '08-10-2019', 'Because of sticky keys', 11254),
(5, 'Reconnect WiFi', '2019-11-03', NULL, 1),
(6, 'Change Password', '23-11-2019', 'Password Expired', 11254),
(7, 'Re installed Excel', '2019-11-06', 'License key expired', 1),
(8, 'Software Update', '20-11-2019', 'Outlook new update', 1234),
(9, 'Delete Old Files', '09-12-2019', 'Disk Space was full', 9011),
(10, 'Give Permissions to user', '14-10-2019', 'Giving access to functions that are needed', 9453),
(11, 'Reconnect to the Network', '18-10-2019', NULL, 99823),
(12, 'Ran Anti-Virus Software', '30-10-2019', 'Norton 3.0 was used', 5678),
(16, 'Cleared auto-save cache', '2019-11-01', 'Don\'t have lots if other programs running whilst using photoshop', 1),
(29, 'Ran Anti-Virus software', '2019-11-10', 'Norton 3.0 Was used', 5678),
(30, 'Updated Python to latest Version', '2019-11-13', 'Visit python website to update', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sites`
--

CREATE TABLE `sites` (
  `site_id` int(11) NOT NULL,
  `country` text NOT NULL,
  `branch_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sites`
--

INSERT INTO `sites` (`site_id`, `country`, `branch_name`) VALUES
(234, 'United Kingdom', 'London'),
(235, 'France', 'Strasbourg'),
(236, 'United Kingdom', 'Manchester'),
(237, 'United Kingdom', 'Bristol'),
(238, 'Spain', 'Seville');

-- --------------------------------------------------------

--
-- Table structure for table `specialist_strengths`
--

CREATE TABLE `specialist_strengths` (
  `specialist_id` int(11) NOT NULL,
  `specialism` int(11) NOT NULL,
  `experience` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `specialist_strengths`
--

INSERT INTO `specialist_strengths` (`specialist_id`, `specialism`, `experience`) VALUES
(1234, 1, 4),
(5678, 0, 3),
(9011, 0, 4),
(9453, 1, 1),
(11254, 1, 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `call_log`
--
ALTER TABLE `call_log`
  ADD PRIMARY KEY (`callno`);

--
-- Indexes for table `live`
--
ALTER TABLE `live`
  ADD PRIMARY KEY (`problem_no`,`specialist_id`);

--
-- Indexes for table `personnel`
--
ALTER TABLE `personnel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `problem`
--
ALTER TABLE `problem`
  ADD PRIMARY KEY (`problem_no`);

--
-- Indexes for table `problem_type`
--
ALTER TABLE `problem_type`
  ADD PRIMARY KEY (`type`);

--
-- Indexes for table `resolved`
--
ALTER TABLE `resolved`
  ADD PRIMARY KEY (`problem_no`);

--
-- Indexes for table `sites`
--
ALTER TABLE `sites`
  ADD PRIMARY KEY (`site_id`);

--
-- Indexes for table `specialist_strengths`
--
ALTER TABLE `specialist_strengths`
  ADD UNIQUE KEY `specialist_id` (`specialist_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `call_log`
--
ALTER TABLE `call_log`
  MODIFY `callno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;

--
-- AUTO_INCREMENT for table `problem`
--
ALTER TABLE `problem`
  MODIFY `problem_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
