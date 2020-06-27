-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2020 at 03:42 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(255) NOT NULL,
  `name` varchar(30) NOT NULL,
  `age` varchar(3) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `doctor_id` int(255) NOT NULL,
  `complain` varchar(1000) NOT NULL,
  `date` varchar(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `name`, `age`, `email`, `phone_number`, `doctor_id`, `complain`, `date`) VALUES
(1, 'Mary Ann', '30', 'maryann@gmail.com', '0904527483', 1, 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusantium tenetur placeat quo, aut totam consequatur. Accusamus, corporis. Eveniet exercitationem mollitia temporibus laborum at consequuntur', '5-12-2020'),
(2, 'Jane Doe', '28', 'janedoe@gmail.com', '090346732733', 2, 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod corporis recusandae asperiores consectetur ipsam optio quam magnam harum, numquam dolores eveniet adipisci saepe amet nesciunt, vitae laborum minima nemo sequi.', '12-05-2020'),
(3, 'osamwonyi abraham osas', '20', 'scriptureosas@gmail.com', '08132349040', 1, 'I am facing heart challenge. my gf broke my heart', '12-05-2020');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(255) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `specialty` varchar(100) NOT NULL,
  `photo` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `name`, `email`, `phone_number`, `specialty`, `photo`) VALUES
(1, 'John Doe', 'johndoe@gmail.com', '08083442343', 'Neurosurgery', './assets/img/5eb95dae42653.jpg'),
(2, 'Jill Abernathy', 'jillabernathy@gmail.com', '08143234212', 'Cardio Vascular Surgery', './assets/img/5eb9c1e5c19c2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(255) NOT NULL,
  `title` varchar(80) NOT NULL,
  `post` varchar(500) NOT NULL,
  `date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `post`, `date`) VALUES
(4, 'Expectant mothers have no excu', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusantium tenetur placeat quo, aut totam consequatur. Accusamus, corporis. Eveniet exercitationem mollitia temporibus laborum at consequuntur quia magnam quo corporis modi deleniti culpa ex, esse necessitatibus eos eius voluptates tempore veritatis laudantium\r\n', '12-05-2020'),
(5, 'Free HIV tests for 3 months', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusantium tenetur placeat quo, aut totam consequatur. Accusamus, corporis. Eveniet exercitationem mollitia temporibus laborum at consequuntur quia magnam quo corporis modi deleniti culpa ex, esse necessitatibus eos eius voluptates tempore veritatis laudantium', '12-05-2020');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `name` varchar(60) NOT NULL,
  `age` varchar(2) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `age`, `email`, `password`) VALUES
(1, 'Peter Parker', '22', 'peterparker@gmail.com', 'peterparker'),
(2, 'Jane Anne', '31', 'janeanne@gmail.com', 'janeanne'),
(3, 'Enzio Axel', '23', 'enzioaxel@gmail.com', 'enzioaxel'),
(4, 'OSAS', '20', 'scriptureosas@gmail.com', 'jrbisshop');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
