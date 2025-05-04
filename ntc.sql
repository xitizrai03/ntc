-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2025 at 05:41 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ntc`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `phone`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin', '9876543210');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `fullname`, `email`, `message`) VALUES
(1, 'sushan khaitu', 'sushan@gmail.com', 'hello'),
(2, 'kshiti\\ rai', 'kshitrai@gmail.com', 'I want help.\r\n'),
(3, 'dewass rai', 'dewasrai@gmail.com', 'i want to create a new account '),
(4, 'KSHITIJ RAI ', 'xitizrai@gmail.com', 'k cha khabar hjr;\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `description`, `image`, `created_at`) VALUES
(3, 'TU exam notice ', '7yh sem exam ', 'uploads/viber_image_2025-03-02_18-14-17-336.jpg', '2025-03-16 04:20:36'),
(14, 'UP COMMING VIVA.', '📢 Pascal College Announces Upcoming Viva Examinations on Baisakh 10, 11, and 12\r\n\r\nPascal National College, Kathmandu – April 15, 2025\r\n\r\nPascal National College has officially announced the schedule for the upcoming viva examinations, which will be held on Baisakh 10, 11, and 12. This examination is a crucial part of the academic assessment for final-year students, especially those enrolled in internship or project-based courses.\r\n\r\nStudents are advised to prepare thoroughly, as the viva will cover both theoretical understanding and practical application of their projects or internship experiences. The evaluation will be conducted by a panel of faculty members and external examiners, ensuring a fair and comprehensive assessment.\r\n\r\nThe college administration has requested all students to check their individual schedules, which will be posted on the college notice board and official student portal in the coming days.\r\n\r\nImportant Reminders for Students:\r\n\r\nArrive at least 30 minutes before your scheduled time.\r\n\r\nBring your college ID and necessary documents (project report, internship letter, etc.).\r\n\r\nDress formally and be prepared to discuss your work in detail.\r\n\r\nThe college wishes all students the best of luck in their viva and encourages them to approach the examination with confidence and professionalism.\r\n\r\nFor more updates, stay connected with the official Pascal College notice board and website.', 'uploads/viber_image_2025-04-15_10-48-06-933.jpg', '2025-04-15 05:50:46'),
(15, 'UP COMMING VIVA.', '📢 Pascal College Announces Upcoming Viva Examinations on Baisakh 10, 11, and 12\r\n\r\nPascal National College, Kathmandu – April 15, 2025\r\n\r\nPascal National College has officially announced the schedule for the upcoming viva examinations, which will be held on Baisakh 10, 11, and 12. This examination is a crucial part of the academic assessment for final-year students, especially those enrolled in internship or project-based courses.\r\n\r\nStudents are advised to prepare thoroughly, as the viva will cover both theoretical understanding and practical application of their projects or internship experiences. The evaluation will be conducted by a panel of faculty members and external examiners, ensuring a fair and comprehensive assessment.\r\n\r\nThe college administration has requested all students to check their individual schedules, which will be posted on the college notice board and official student portal in the coming days.\r\n\r\nImportant Reminders for Students:\r\n\r\nArrive at least 30 minutes before your scheduled time.\r\n\r\nBring your college ID and necessary documents (project report, internship letter, etc.).\r\n\r\nDress formally and be prepared to discuss your work in detail.\r\n\r\nThe college wishes all students the best of luck in their viva and encourages them to approach the examination with confidence and professionalism.\r\n\r\nFor more updates, stay connected with the official Pascal College notice board and website.', 'uploads/viber_image_2025-04-15_10-48-06-933.jpg', '2025-04-15 05:54:57');

-- --------------------------------------------------------

--
-- Table structure for table `main_events`
--

CREATE TABLE `main_events` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `main_event` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `registration_forms`
--

CREATE TABLE `registration_forms` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `province` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `municipality` varchar(255) NOT NULL,
  `ward_no` int(11) NOT NULL,
  `tole` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `post_at_retirement` varchar(255) NOT NULL,
  `pension_lease_no` varchar(255) NOT NULL,
  `office` varchar(255) NOT NULL,
  `date_commencement` date NOT NULL,
  `date_decision_grant` date NOT NULL,
  `date_retirement` date NOT NULL,
  `membership_no` varchar(255) NOT NULL,
  `registration_no` varchar(255) NOT NULL,
  `date_fillup` date NOT NULL,
  `place` varchar(255) NOT NULL,
  `auth_file_path` varchar(255) NOT NULL,
  `photo_path` varchar(255) NOT NULL,
  `otp` varchar(10) NOT NULL,
  `email` varchar(255) NOT NULL DEFAULT 'NOT NULL',
  `password` varchar(255) NOT NULL DEFAULT 'NOT NULL',
  `role` varchar(50) DEFAULT 'user',
  `ban_user` varchar(10) DEFAULT 'false'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration_forms`
--

INSERT INTO `registration_forms` (`id`, `name`, `surname`, `address`, `province`, `district`, `municipality`, `ward_no`, `tole`, `telephone`, `mobile`, `dob`, `post_at_retirement`, `pension_lease_no`, `office`, `date_commencement`, `date_decision_grant`, `date_retirement`, `membership_no`, `registration_no`, `date_fillup`, `place`, `auth_file_path`, `photo_path`, `otp`, `email`, `password`, `role`, `ban_user`) VALUES
(1, 'my full name', 'my full name', 'full street address', 'state name', 'state name', 'chainpur', 1, '(123) 456-7890', '(123) 456-7890', '9811703383', '2025-04-22', '(123) 456-7890', '(123) 456-7890', '(123) 456-7890', '2025-04-09', '2025-04-16', '2025-04-23', '(123) 456-7890', '(123) 456-7890', '2025-04-09', '(123) 456-7890', '', 'uploads/authorization/bikash-shrestha-2077-7-internship-report-backend-developer.pdf', '4197', 'NOT NULL', 'NOT NULL', 'user', 'false'),
(2, 'my full name', 'my full name', 'full street address', 'state name', 'state name', 'chainpur', 6, '(123) 456-7890', '(123) 456-7890', '9811703383', '2002-01-05', '(123) 456-7890', '(123) 456-7890', '(123) 456-7890', '2024-01-29', '2024-02-29', '2025-04-29', '(123) 456-7890', '(123) 456-7890', '2025-04-29', 'ktm', '', 'uploads/authorization/bikash-shrestha-2077-7-internship-report-backend-developer.pdf', '4642', 'NOT NULL', 'NOT NULL', 'user', 'false'),
(3, 'kshitij ', 'Rai', 'chainpur ', 'koshi', 'sankhuwasva', 'chainpur', 5, 'Hospital chok ', '029570104', '9862363963', '2002-01-05', 'HR', '1234567890', 'NTC', '2020-01-01', '2025-01-01', '2025-01-01', '32393239', '(123) 456-7890', '2025-04-29', 'jhawlakhel', '', 'uploads/photos/Q8.png', '2518', 'NOT NULL', 'NOT NULL', 'user', 'false'),
(4, 'my full name', 'my full name', 'full street address', 'state name', 'state name', 'chainpur', 6, '(123) 456-7890', '(123) 456-7890', '9862363963', '2002-01-01', '(123) 456-7890', '(123) 456-7890', '(123) 456-7890', '2025-04-29', '2025-04-29', '2025-04-29', '(123) 456-7890', '(123) 456-7890', '2025-04-29', '(123) 456-7890', '', 'uploads/authorization/spm-lab.pdf', '9628', 'NOT NULL', 'NOT NULL', 'user', 'false'),
(5, 'Raju', 'Rai', 'full street address', 'state name', 'state name', 'chainpur', 6, '(123) 456-7890', '(123) 456-7890', '9862363963', '2002-01-01', '(123) 456-7890', '(123) 456-7890', '(123) 456-7890', '2025-04-29', '2025-04-29', '2025-04-29', '(123) 456-7890', '(123) 456-7890', '2025-04-29', '(123) 456-7890', '', 'uploads/authorization/spm-lab.pdf', '8361', 'NOT NULL', 'NOT NULL', 'user', 'false'),
(7, 'my full name', 'my full name', 'full street address', 'state name', 'state name', 'chainpur', 6, '(123) 456-7890', '(123) 456-7890', '9811703383', '2025-04-29', '(123) 456-7890', '(123) 456-7890', '(123) 456-7890', '2025-04-29', '2025-04-29', '2025-04-29', '(123) 456-7890', '(123) 456-7890', '2025-04-29', '(123) 456-7890', '', 'uploads/authorization/bikash-shrestha-2077-7-internship-report-backend-developer.pdf', '5087', 'NOT NULL', 'NOT NULL', 'user', 'false'),
(8, 'chitiz', 'Rai ', 'chainpur ', 'koshi', 'sankhuwasva', 'chainpur', 6, 'hospital chok ', '0295701904', '9862363963', '2002-01-05', 'HR', '(123) 456-7890', 'NTC', '2020-01-01', '2021-01-01', '2025-01-01', '32393239', '(123) 456-7890', '2025-04-29', 'jhawlakhel', '', 'uploads/authorization/kshitij rai (12) mid defence internship report.pdf', '5573', 'chitiz@gmail.com', '$2y$10$eIwiYmSPI/1ywuXT1WQ.a.OPBeUz1w5jBcPNlHbWB7wvN4z/.R2ta', 'user', 'false'),
(9, 'chitiz', 'Rai', 'full street address', 'state name', 'state name', 'chainpur', 6, 'me@mydomain.com', '(123) 456-7890', '9862363963', '2002-01-01', 'me@mydomain.com', 'me@mydomain.com', 'me@mydomain.com', '2025-04-29', '2025-04-29', '2025-04-29', 'me@mydomain.com', 'me@mydomain.com', '2025-04-29', 'me@mydomain.com', '', 'uploads/authorization/kshitij rai (12) mid defence internship report.pdf', '2649', 'chitiz@gmail.com', 'chitiz', 'user', 'false'),
(10, 'chitiz', 'Rai', 'full street address', 'state name', 'state name', 'chainpur', 6, 'me@mydomain.com', '(123) 456-7890', '9862363963', '2002-01-01', 'me@mydomain.com', '(123) 456-7890', 'NTC', '2025-04-29', '2025-04-29', '2025-04-29', '32393239', 'me@mydomain.com', '2025-04-29', 'me@mydomain.com', '', 'uploads/authorization/kshitij rai (12) mid defence internship report.pdf', '1031', 'chitiz@gmail.com', 'chitiz', 'user', 'false'),
(11, 'my full name', 'my full name', 'full street address', 'state name', 'state name', 'chainpur', 6, 'me@mydomain.com', '(123) 456-7890', '9862363963', '2025-04-29', 'me@mydomain.com', 'me@mydomain.com', 'me@mydomain.com', '2025-04-29', '2025-04-29', '2025-04-29', 'me@mydomain.com', 'me@mydomain.com', '2025-04-29', 'me@mydomain.com', '', 'uploads/authorization/kshitij rai (12) mid defence internship report.pdf', '6935', 'chitiz@gmail.com', 'xitiz ', 'user', 'false'),
(12, 'chitiz ', 'rai', 'full street address', 'state name', 'state name', 'chainpur', 6, 'me@mydomain.com', '(123) 456-7890', '9862363963', '2025-04-29', 'me@mydomain.com', 'me@mydomain.com', 'me@mydomain.com', '2025-04-29', '2025-04-29', '2025-04-29', 'me@mydomain.com', 'me@mydomain.com', '2025-04-29', 'me@mydomain.com', '', 'uploads/authorization/kshitij rai (12) mid defence internship report.pdf', '8303', 'chitiz@gmail.com', 'xitizrai', 'user', 'false'),
(13, 'my full name', 'my full name', 'full street address', 'state name', 'state name', 'chainpur', 6, 'me@mydomain.com', '(123) 456-7890', '9876543219', '2025-05-04', 'me@mydomain.com', 'me@mydomain.com', 'me@mydomain.com', '2025-05-04', '2025-05-14', '2025-05-30', 'me@mydomain.com', 'me@mydomain.com', '2025-05-04', 'me@mydomain.com', '', 'uploads/authorization/cp.pdf', '4791', 'raju@gmail.com', 'rajusir', 'user', 'false'),
(14, 'my full name', 'my full name', 'full street address', 'state name', 'state name', 'chainpur', 2, 'me@mydomain.com', '(123) 456-7890', '9876543219', '2025-05-19', 'me@mydomain.com', 'me@mydomain.com', 'me@mydomain.com', '2025-05-05', '2025-05-07', '2025-05-15', 'me@mydomain.com', 'me@mydomain.com', '2025-05-20', 'me@mydomain.com', '', 'uploads/authorization/cp.pdf', '9837', 'chitiz@gmail.com', 'jokerloves', 'user', 'false');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `otp` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `ban_user` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `email`, `password`, `phone`, `dob`, `otp`, `role`, `ban_user`) VALUES
(3, 'admin', 'admin@gmail.com', 'admin', '0123456789', '2025-03-05', '5210', 'admin', 'false'),
(11, 'myself', 'myself@gmail.com', 'myself', '123456789', '2025-03-16', '9598', 'user', 'false'),
(16, 'aashma', 'aashma@gmail.com', 'aashma', '888888888', '2025-04-21', '4931', 'user', 'false'),
(17, 'xitiz rai', 'xitizrai03@gmail.com', 'kshitij', '9862363963', '2025-04-28', '6933', 'user', 'false'),
(18, 'bishal limbu ', 'bishal@gmail.com', 'bishal', '989898989', '2025-04-28', '5038', 'user', 'false'),
(19, 'aashma', 'aashma@gmail.com', 'aashma', '983213213', '2025-04-29', '8626', 'user', 'false'),
(20, 'aashma', 'aashma@gmail.com', 'aashma', '983213213', '2025-04-29', '6609', 'user', 'false');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `main_events`
--
ALTER TABLE `main_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration_forms`
--
ALTER TABLE `registration_forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `main_events`
--
ALTER TABLE `main_events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registration_forms`
--
ALTER TABLE `registration_forms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
