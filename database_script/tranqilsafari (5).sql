-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2024 at 03:00 AM
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
-- Database: `tranqilsafari`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `I_ID` int(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` int(20) NOT NULL,
  `inq_type` varchar(200) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `privacy` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`I_ID`, `first_name`, `last_name`, `email`, `mobile`, `inq_type`, `message`, `privacy`) VALUES
(1, 'tom', 'odel', 'tom@gmail.com', 2147483647, 'customer', 'I want to inquire about the safari trip on 24th may', 0),
(2, 'sam', 'smith', 'smith@gmail.com', 744521365, 'bePartner', 'I would like to invest in your company', 0),
(3, 'sole', 'Hunter', 'hunter@gmail.com', 2147483647, 'partner', 'I would like to schedule a meeting with you  on next Monday', 0);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` int(100) NOT NULL,
  `Date` date NOT NULL,
  `name` varchar(100) NOT NULL,
  `comment` varchar(1500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_id`, `Date`, `name`, `comment`) VALUES
(1, '2024-05-08', '0', 'profile wenternberine'),
(2, '2024-05-14', '0', 'fantastique'),
(3, '2024-05-15', 'mooose', 'sam altman is the best');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL,
  `full_name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `street` varchar(400) NOT NULL,
  `city` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `zip_code` int(100) NOT NULL,
  `name_on_card` varchar(500) NOT NULL,
  `credit_card_number` int(11) NOT NULL,
  `exp_month` date NOT NULL,
  `exp_year` date NOT NULL,
  `cvv` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `full_name`, `email`, `street`, `city`, `country`, `zip_code`, `name_on_card`, `credit_card_number`, `exp_month`, `exp_year`, `cvv`) VALUES
(1, 'sara', 'test4@gmail.com', 'locahost', 'Camp', 'USA', 123456, 'vawanmea', 2147483647, '0000-00-00', '0000-00-00', 456),
(2, 'master', 'mihisara@gmail.com', 'authur Lane', 'Kandy', 'sri lanka', 1154, 'fhusdhg', 111, '0000-00-00', '0000-00-00', 22);

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `reservation_ID` int(50) NOT NULL,
  `user_ID` int(50) NOT NULL,
  `tour_ID` int(50) NOT NULL,
  `tour_name` varchar(250) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `duration` int(10) NOT NULL,
  `no_of_people` int(50) NOT NULL,
  `amount` double NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`reservation_ID`, `user_ID`, `tour_ID`, `tour_name`, `first_name`, `last_name`, `start_date`, `end_date`, `duration`, `no_of_people`, `amount`, `email`, `phone`) VALUES
(1, 8, 4, '', 'samantha', 'odel', NULL, NULL, 0, 4, 2000, 'test4@gmail.com', 77899),
(2, 8, 6, '', 'samantha', 'odel', NULL, NULL, 0, 2, 800, 'test4@gmail.com', 77899),
(3, 8, 8, '', 'nidimathai', 'mata', NULL, NULL, 0, 4, 608, 'test4@gmail.com', 77894),
(4, 8, 4, 'this is amazing', 'user01', 'odel', NULL, NULL, 0, 1, 500, 'user02@gmail.com', 77899),
(5, 8, 4, 'this is amazing', 'sam', 'tom', '2024-05-01', '2024-05-31', 0, 15, 7500, 'veenath@gmail.com', 77899),
(6, 8, 4, 'this is amazing', 'sora', 'AI', '2024-05-02', '2024-06-06', 0, 5, 2500, 'sora@gmail.com', 78945612),
(7, 8, 4, 'this is amazing', 'sam', 'sora', '2024-05-02', '2024-05-02', 0, 8, 4000, 'user01@gmail.com', 77899),
(8, 8, 4, 'this is amazing', 'sam', 'odel', '2024-05-07', '2024-05-24', 0, 1, 500, 'user01@gmail.com', 77899),
(9, 8, 4, 'this is amazing', 'sam', 'odel', '2024-05-07', '2024-05-24', 0, 1, 500, 'user01@gmail.com', 77899);

-- --------------------------------------------------------

--
-- Table structure for table `reset`
--

CREATE TABLE `reset` (
  `feedback_id` int(15) NOT NULL,
  `test1` int(75) NOT NULL,
  `ters2` int(100) NOT NULL,
  `test3` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tours`
--

CREATE TABLE `tours` (
  `tour_ID` int(100) NOT NULL,
  `title` varchar(75) NOT NULL,
  `description` varchar(500) NOT NULL,
  `location` varchar(50) NOT NULL,
  `price` float NOT NULL,
  `image` varchar(100) NOT NULL,
  `tour_type` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tours`
--

INSERT INTO `tours` (`tour_ID`, `title`, `description`, `location`, `price`, `image`, `tour_type`) VALUES
(4, 'Lion Watching', 'Amboseli National Park is in Kenya near the border of Tanzania.  The park encompasses 151 square miles (392 sq km).  It is part of the larger ecosystem that stretches across Kenya and Tanzania covering an area of 3,100 square miles (8,000 sq km).\r\n\r\n', 'Amboseli National Park', 500, 'tourpacks.jpg', 'safari'),
(5, 'giraffe Watching', 'Cruse through the jungle ', 'Mole National Park', 500, 'test1.jpg', 'safari'),
(7, 'Serengeti National Park', 'Serengeti National Park is located in Tanzania and is part of the larger Serengeti ecosystem which covers 12,000 square miles (30,000 sq km) and includes several other game reserves.  The national park itself covers an area of 5,700 square miles (14,750 sq km).  It is a GANP Ambassador Park and runs contiguously with the Masai Mara in Kenya.', 'Africa', 999, 'tourpack1.jpg', 'safari'),
(9, 'Ruaha National Park\r\n', 'Ruaha National Park is located just south of the central midpoint of Tanzania.    The national park encompasses an area of 7,809 square miles (20,226 sq km) making it the largest national park in Tanzania and one of the largest in Africa.', 'Africa', 666, 'admin-back.jpg', 'safari'),
(10, 'Wildlife Tracking Camps', 'These camps teach campers how to identify animal tracks and signs. Campers learn about different animal species, their habitats, and how to track them in the wild.', 'Willpathu national park', 999, 'test1.jpg', 'camp'),
(11, 'Luxurious Tented Safari Camp', 'Immerse yourself in luxury amidst the wilderness. Spacious, en-suite canvas tents feature private verandas overlooking the savannah. Enjoy guided game drives, bush walks with Maasai warriors, and relax by the infinity pool overlooking the Mara River.', 'Masai Mara, Kenya', 999, 'home1.jpg', 'Camp'),
(12, 'Family-Friendly Safari Lodge ', 'This lodge caters to families with spacious rooms, a children\'s pool, and supervised activities. Go on game drives specifically designed for families, with shorter durations and interactive elements. Learn about elephant conservation efforts and participate in educational programs.', 'Addo Elephant National Park, South Africa', 0, 'slide-1.jpg', 'Camp'),
(13, 'Budget Safari Camp ', 'This basic campsite offers a budget-friendly way to experience Etosha National Park. Camp in your own tent or rent a basic bungalow. Public amenities include restrooms, showers, and a communal kitchen. Enjoy self-guided game drives from a network of waterholes inside the park.', 'Etosha National Park, Namibia', 800, 'jung.jpg', 'Camp');

-- --------------------------------------------------------

--
-- Table structure for table `useraccounts`
--

CREATE TABLE `useraccounts` (
  `user_ID` int(100) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(100) NOT NULL,
  `type` varchar(10) NOT NULL,
  `contact` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `useraccounts`
--

INSERT INTO `useraccounts` (`user_ID`, `first_name`, `last_name`, `email`, `password`, `type`, `contact`) VALUES
(7, 'user01', 'person', 'user01@gmail.com', 'cc03e747a6afbbcbf8be7668acfebee5', 'user', 0),
(8, 'tom', 'sin', 'test4@gmail.com', '47ec2dd791e31e2ef2076caf64ed9b3d', 'user', 0),
(9, 'veenath', 'mihisara', 'vee@gmail.com', '16d7a4fca7442dda3ad93c9a726597e4', 'user', 0),
(10, 'veenath1', 'mihisara1', 'vee1@gmail.com', '16d7a4fca7442dda3ad93c9a726597e4', 'user', 0),
(11, 'tom', 'jerry', 'jertom@gmail.com', '16d7a4fca7442dda3ad93c9a726597e4', 'user', 0),
(12, 'admintha', 'adambara', 'ad@gmail.com', '8770a902ff36d8d365c8fb5f371fae7b', 'admin', 123456),
(13, 'vest', 'london', 'vee@ts.com', '827ccb0eea8a706c4c34a16891f84e7b', 'user', 78965412),
(14, 'sam', 'altman', 'sam@ts.com', '827ccb0eea8a706c4c34a16891f84e7b', 'admin', 779965486);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`I_ID`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`reservation_ID`);

--
-- Indexes for table `reset`
--
ALTER TABLE `reset`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `tours`
--
ALTER TABLE `tours`
  ADD PRIMARY KEY (`tour_ID`);

--
-- Indexes for table `useraccounts`
--
ALTER TABLE `useraccounts`
  ADD PRIMARY KEY (`user_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `I_ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `reservation_ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `reset`
--
ALTER TABLE `reset`
  MODIFY `feedback_id` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tours`
--
ALTER TABLE `tours`
  MODIFY `tour_ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `useraccounts`
--
ALTER TABLE `useraccounts`
  MODIFY `user_ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
