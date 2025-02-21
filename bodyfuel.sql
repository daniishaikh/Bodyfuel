-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2024 at 04:02 PM
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
-- Database: `bodyfuel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ad_id` int(11) NOT NULL,
  `ad_name` text NOT NULL,
  `ad_email` varchar(100) NOT NULL,
  `password` varchar(250) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ad_id`, `ad_name`, `ad_email`, `password`, `date`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$v97Alns3AM5Ga81AxppAUOcMrAGd1UkrAywQFsp4Z68tE8itzQqV.', '2024-03-25'),
(2, 'shahin', 'shahin@gmail.com', '$2y$10$v97Alns3AM5Ga81AxppAUOcMrAGd1UkrAywQFsp4Z68tE8itzQqV.', '2024-03-28'),
(3, 'lukman', 'lukman@gmail.com', '$2y$10$XNHxxS8bgUqIQJmsLlWlSucmIVkc8GFDv56gr5zczaKvalZyrK5/i', '2024-03-29'),
(4, 'faheem', 'faheem@gmail.com', '$2y$10$.yxwaztucQ8vLalZOP.iQeRWwA5zs..J3z4YujwB/Bh/XoXAMHCcy', '2024-03-29');

-- --------------------------------------------------------

--
-- Table structure for table `body_cat`
--

CREATE TABLE `body_cat` (
  `bcat_id` int(11) NOT NULL,
  `category` varchar(50) NOT NULL,
  `cat_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `body_cat`
--

INSERT INTO `body_cat` (`bcat_id`, `category`, `cat_date`) VALUES
(1, 'Chest', '2023-03-28'),
(2, 'Bicep', '2023-03-28'),
(3, 'Tricep', '2023-03-28'),
(4, 'Shoulder', '2023-03-28'),
(5, 'Back', '2023-03-28'),
(6, 'Legs', '2023-03-28');

-- --------------------------------------------------------

--
-- Table structure for table `diet`
--

CREATE TABLE `diet` (
  `diet_id` int(11) NOT NULL,
  `lean_gain` varchar(40) NOT NULL,
  `diet` varchar(1000) NOT NULL,
  `about_diet` varchar(2000) NOT NULL,
  `diet_title` varchar(100) NOT NULL,
  `diet_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `diet`
--

INSERT INTO `diet` (`diet_id`, `lean_gain`, `diet`, `about_diet`, `diet_title`, `diet_date`) VALUES
(5, 'shred', 'Starchy carbs & protein(morning), \r\nSnack & Fats & protein(for snacks),\r\nLunch & Carbs & protein(lunch),\r\nSnack & Carbs & protein(snacks),\r\nDinner & Fats & protein(dinner)', 'A cutting diet, also sometimes referred to as shredding, aims to help someone lose fat and maintain muscle. Bodybuilders and fitness enthusiasts typically use the cutting diet as a short-term program before an event, competition, or as part of their training plan. People use a cutting diet in combination with lifting weights.', 'shred', '2024-04-10'),
(6, 'bulk', 'carbohydrates & healthy fats(Breakfast),  \r\nProtein bars & Cereal bars(Snack),\r\nHigh-Calorie foods(Lunch),\r\nProtein bars & Cereal bars(Snack),\r\nFats & protein(Dinner)', 'Bulking is the muscle-gaining phase. You’re meant to intentionally consume more calories than your body needs for a set period — often 4–6 months. These extra calories provide your body with the necessary fuel to boost muscle size and strength while weight training.', 'Bulk', '2024-04-10');

-- --------------------------------------------------------

--
-- Table structure for table `equipments`
--

CREATE TABLE `equipments` (
  `eqp_id` int(11) NOT NULL,
  `eqp_name` varchar(300) NOT NULL,
  `eqp_weight` varchar(200) NOT NULL,
  `eqp_about` varchar(1000) NOT NULL,
  `eqp_status` varchar(30) NOT NULL,
  `eqp_image` varchar(350) NOT NULL,
  `eqp_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `equipments`
--

INSERT INTO `equipments` (`eqp_id`, `eqp_name`, `eqp_weight`, `eqp_about`, `eqp_status`, `eqp_image`, `eqp_date`) VALUES
(11, 'PEC DECK FLY MACHINE', '200', 'A pec deck machine provides a fairly simple and effective workout for building your major chest muscles. You can adjust the weight based on your fitness level. Along with increasing muscle mass in your chest, this exercise can also strengthen your shoulders and core.', '', 'upload/5.png', '2024-04-10'),
(12, 'FLAT BENCH PRESS', '200', 'The flat bench press is a compound exercise that primarily targets the pectoral muscles, but also engages the triceps and deltoids. It is a staple exercise in strength training and bodybuilding routines due to its ability to stimulate muscle growth and increase upper body strength.', '', 'upload/4.png', '2024-04-10'),
(13, 'DUMBELLS', '80', 'Dumbbells are great for strength training exercises like chest presses, bent over rows, weighted squats, lunges, and bicep curls.', '', 'upload/3.png', '2024-04-10'),
(14, 'CABLE MACHINES', '100', 'A cable machine is a piece of exercise equipment that is commonly found in gyms and fitness centers. This exercise is used for weight training or functional training to target all major muscle groups. It consists of a steel frame that houses a series of pulleys, cables, and weight stacks.', '', 'upload/2.png', '2024-04-10');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `ev_id` int(11) NOT NULL,
  `event_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `event` varchar(200) NOT NULL,
  `ev_about` varchar(2000) NOT NULL,
  `ev_image` varchar(350) NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `event_status` varchar(30) NOT NULL,
  `ev_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`ev_id`, `event_date`, `event`, `ev_about`, `ev_image`, `start_time`, `end_time`, `event_status`, `ev_date`) VALUES
(17, '2024-04-11 03:15:01', 'bench Press challenge', 'Chest strength is about more than physical definition—strong pectoral muscles can help improve posture, benefit breathing and support the surrounding muscles and joints. While building muscle can take time, developing a strong chest doesn’t have to be time-consuming: The key is knowing which exercises to prioritize. Read on to learn more about the importance of chest muscles and discover seven different chest exercises recommended by personal trainers.', 'upload/4.png', '06:30:00', '08:30:00', 'new', '2024-04-11');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feed_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `feed` varchar(2000) NOT NULL,
  `feed_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feed_id`, `user_id`, `feed`, `feed_date`) VALUES
(2, 4, '\r\nLOREM IPSUM GENERATOR\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2023-04-03'),
(3, 6, '', '2024-03-30'),
(5, 8, 'trainer is good\r\n', '2024-04-10');

-- --------------------------------------------------------

--
-- Table structure for table `lean_gain`
--

CREATE TABLE `lean_gain` (
  `lg_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `lg_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lean_gain`
--

INSERT INTO `lean_gain` (`lg_id`, `name`, `lg_date`) VALUES
(1, 'lean', '2023-03-26'),
(2, '', '2023-03-26'),
(3, '', '2023-03-26'),
(4, 'lean', '2023-03-26');

-- --------------------------------------------------------

--
-- Table structure for table `membership`
--

CREATE TABLE `membership` (
  `mem_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `duration` varchar(100) NOT NULL,
  `expiry_date` date DEFAULT NULL,
  `about` varchar(1000) NOT NULL,
  `amount` float NOT NULL,
  `mem_status` varchar(50) NOT NULL,
  `mem_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `membership`
--

INSERT INTO `membership` (`mem_id`, `user_id`, `duration`, `expiry_date`, `about`, `amount`, `mem_status`, `mem_date`) VALUES
(5, 0, '3 month', '2024-07-07', '3 months membership just for Rs.1800', 1800, '', '2024-04-07'),
(6, 0, '1 month', '2024-05-07', '1 month of Gym', 800, '', '2024-04-07');

-- --------------------------------------------------------

--
-- Table structure for table `membership_order`
--

CREATE TABLE `membership_order` (
  `morder_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `mem_id` int(11) NOT NULL,
  `memorder_status` varchar(40) NOT NULL,
  `memorder_date` date NOT NULL,
  `mend_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `membership_order`
--

INSERT INTO `membership_order` (`morder_id`, `user_id`, `mem_id`, `memorder_status`, `memorder_date`, `mend_date`) VALUES
(12, 8, 6, 'approved', '2024-04-11', '2024-05-11'),
(13, 11, 6, 'approved', '2024-03-10', '2024-04-10'),
(15, 11, 5, 'approved', '2024-04-14', '2024-05-14'),
(16, 13, 5, 'approved', '2024-01-13', '2024-04-13'),
(17, 13, 6, 'approved', '2024-04-14', '2024-05-14'),
(21, 14, 5, 'approved', '2024-04-15', '2024-07-15'),
(26, 12, 5, 'approved', '2024-04-15', '2024-07-15');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `pay_id` int(11) NOT NULL,
  `morder_id` int(11) NOT NULL,
  `pay_method` varchar(20) NOT NULL,
  `amount` float NOT NULL,
  `Transaction_no` int(20) NOT NULL,
  `pay_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`pay_id`, `morder_id`, `pay_method`, `amount`, `Transaction_no`, `pay_date`) VALUES
(14, 9, '', 800, 1233, '2024-04-07'),
(15, 10, '', 800, 1234, '2024-04-11'),
(16, 11, '', 800, 1235, '2024-03-10'),
(17, 0, '', 800, 1233, '2024-04-11'),
(18, 0, '', 800, 1233, '2024-04-11'),
(19, 0, '', 800, 1233, '2024-04-11'),
(20, 0, '', 800, 1233, '2024-04-11'),
(21, 0, '', 1800, 1233, '2024-04-11'),
(22, 0, '', 800, 1233, '2024-04-11'),
(23, 12, '', 800, 1233, '2024-04-11'),
(24, 13, '', 800, 1234, '2024-03-10'),
(25, 14, '', 800, 1235, '2024-04-11'),
(26, 15, '', 1800, 1301, '2024-04-14'),
(27, 16, '', 1800, 1302, '2024-01-13'),
(28, 17, '', 800, 1000, '2024-04-14'),
(29, 18, '', 1800, 2000, '2024-04-14'),
(30, 19, '', 800, 1002, '2024-04-14'),
(31, 20, '', 800, 1005, '2024-04-14'),
(32, 21, '', 1800, 2005, '2024-04-15'),
(33, 22, '', 800, 2006, '2024-04-15'),
(34, 23, '', 1800, 2007, '2024-04-15'),
(35, 24, '', 800, 2008, '2024-04-15'),
(36, 25, '', 800, 2010, '2024-04-15'),
(37, 26, '', 1800, 1011, '2024-04-15'),
(38, 27, '', 800, 1013, '2024-04-15'),
(39, 28, '', 1800, 1034, '2024-04-15');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `sch_id` int(11) NOT NULL,
  `slot_id` int(11) NOT NULL,
  `tr_id` int(11) NOT NULL,
  `ftime` time NOT NULL,
  `ttime` time NOT NULL,
  `sch_status` varchar(40) NOT NULL,
  `sch_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`sch_id`, `slot_id`, `tr_id`, `ftime`, `ttime`, `sch_status`, `sch_date`) VALUES
(3, 4, 2, '05:30:00', '12:00:00', '', '2024-04-10'),
(4, 6, 2, '19:30:00', '00:00:00', '', '2024-04-10'),
(5, 7, 1, '12:00:00', '15:30:00', '', '2024-04-10'),
(6, 8, 1, '15:30:00', '17:30:00', '', '2024-04-10'),
(7, 9, 3, '06:00:00', '12:00:00', '', '2024-04-14'),
(8, 10, 3, '16:00:00', '19:00:00', '', '2024-04-14'),
(9, 11, 4, '12:00:00', '16:00:00', '', '2024-04-14'),
(10, 12, 4, '19:00:00', '00:00:00', '', '2024-04-14');

-- --------------------------------------------------------

--
-- Table structure for table `slot`
--

CREATE TABLE `slot` (
  `slot_id` int(11) NOT NULL,
  `tr_id` int(11) NOT NULL,
  `slots` varchar(200) NOT NULL,
  `slot_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `slot`
--

INSERT INTO `slot` (`slot_id`, `tr_id`, `slots`, `slot_date`) VALUES
(4, 2, 'morning', '2024-04-10'),
(6, 2, 'night', '2024-04-10'),
(7, 1, 'afternoon', '2024-04-10'),
(8, 1, 'evening', '2024-04-10'),
(9, 3, 'morning', '2024-04-14'),
(10, 3, 'evening', '2024-04-14'),
(11, 4, 'afternoon', '2024-04-14'),
(12, 4, 'night', '2024-04-14');

-- --------------------------------------------------------

--
-- Table structure for table `slots_book`
--

CREATE TABLE `slots_book` (
  `book_id` int(11) NOT NULL,
  `tr_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `sch_id` int(11) NOT NULL,
  `slot_time` time NOT NULL,
  `slot_status` varchar(40) DEFAULT NULL,
  `book_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `slots_book`
--

INSERT INTO `slots_book` (`book_id`, `tr_id`, `user_id`, `sch_id`, `slot_time`, `slot_status`, `book_date`) VALUES
(1, 2, 2, 1, '00:00:00', 'approved', '2023-04-04'),
(2, 2, 4, 1, '00:00:00', 'approved', '2023-04-11'),
(3, 2, 5, 1, '00:00:00', 'approved', '2023-04-11'),
(4, 1, 8, 5, '00:00:00', 'approved', '2024-04-10'),
(5, 2, 8, 4, '00:00:00', 'approved', '2024-04-10'),
(6, 1, 12, 6, '00:00:00', 'approved', '2024-04-11'),
(7, 1, 13, 5, '00:00:00', 'approved', '2024-04-14'),
(8, 4, 8, 9, '00:00:00', 'approved', '2024-04-14'),
(9, 3, 13, 8, '00:00:00', 'approved', '2024-04-14'),
(10, 3, 13, 7, '00:00:00', 'approved', '2024-04-14');

-- --------------------------------------------------------

--
-- Table structure for table `suggestion`
--

CREATE TABLE `suggestion` (
  `sugg_id` int(11) NOT NULL,
  `workout_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `sugg` varchar(1000) NOT NULL,
  `sugg_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `suggestion`
--

INSERT INTO `suggestion` (`sugg_id`, `workout_id`, `user_id`, `sugg`, `sugg_date`) VALUES
(1, 1, 1, 'uihweuie wj ehfih ewfh fewh f', '2023-04-03'),
(2, 5, 1, 'hjk fekwkf fenf fn ewfn fkw', '2023-04-03'),
(3, 1, 8, 'trainers are good.', '2024-04-10'),
(4, 1, 8, 'Good good', '2024-04-10'),
(5, 3, 8, 'good for you', '2024-04-11'),
(6, 3, 8, '?>alert()', '2024-04-11'),
(7, 3, 8, 'fgfgfgf', '2024-04-11');

-- --------------------------------------------------------

--
-- Table structure for table `suppliment`
--

CREATE TABLE `suppliment` (
  `supp_id` int(11) NOT NULL,
  `supp_name` varchar(300) NOT NULL,
  `supp_about` varchar(1000) NOT NULL,
  `supp_qty` varchar(40) NOT NULL,
  `supp_price` float NOT NULL,
  `supp_image` varchar(350) NOT NULL,
  `supp_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `suppliment`
--

INSERT INTO `suppliment` (`supp_id`, `supp_name`, `supp_about`, `supp_qty`, `supp_price`, `supp_image`, `supp_date`) VALUES
(12, 'CREATINE', 'Creatine is a substance found naturally in muscle cells. It helps your muscles produce energy during heavy lifting or high intensity exercise.', '5', 1000, 'upload/s1.png', '2024-04-10');

-- --------------------------------------------------------

--
-- Table structure for table `trainer`
--

CREATE TABLE `trainer` (
  `tr_id` int(11) NOT NULL,
  `tr_name` text NOT NULL,
  `tr_email` varchar(100) NOT NULL,
  `tr_image` varchar(350) NOT NULL,
  `tr_phone` bigint(12) NOT NULL,
  `tr_age` int(11) NOT NULL,
  `tr_experience` varchar(40) NOT NULL,
  `tr_acheiv` varchar(2000) NOT NULL,
  `tr_password` varchar(250) NOT NULL,
  `tr_status` varchar(40) NOT NULL,
  `tr_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trainer`
--

INSERT INTO `trainer` (`tr_id`, `tr_name`, `tr_email`, `tr_image`, `tr_phone`, `tr_age`, `tr_experience`, `tr_acheiv`, `tr_password`, `tr_status`, `tr_date`) VALUES
(3, 'Shahin', 'shahin@gmail.com', 'upload/face17.jpg', 9495778567, 33, '5', 'Wellness, Personal Training and Fitness Training ', '$2y$10$DnpCG1PWuwvE.nFUsa4EsuFJcgooUcy3N0a9Eh9EpjY8Zox6nlU/G', '', '2024-04-14'),
(4, 'Lukman', 'lukman@gmail.com', 'upload/face3.jpg', 7373568900, 35, '6', 'Proficient in designing and implementing personalized fitness programs for clients based on their individual needs and goals.', '$2y$10$aVrcnHLU3cjCeirGAinvIerr0JpACmWraJ5Gk68s2MKEvkooErpR2', '', '2024-04-14');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `mem_id` int(11) NOT NULL,
  `user_name` text NOT NULL,
  `user_age` int(11) NOT NULL,
  `user_phone` bigint(12) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(250) NOT NULL,
  `user_status` varchar(30) NOT NULL,
  `user_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `mem_id`, `user_name`, `user_age`, `user_phone`, `user_email`, `user_password`, `user_status`, `user_date`) VALUES
(8, 0, 'Danish', 21, 9895775865, 'danish@gmail.com', '$2y$10$.j2RJYFawx9a7C//ua1RYeidvPv1jkLKdWLjgEbimns2ZEKUuMw1q', '', '2024-04-07'),
(9, 0, 'faheem', 21, 8129466660, 'faheem@gmail.com', '$2y$10$FVSaOWR4MCVaTHoSaGY7AeVQePbbGNpkKsB1V5WP3tT/ypRjuvE6S', '', '2024-04-11'),
(10, 0, 'wwqqw', 12, 2222222211, 'wwwwq@gmail.com', '$2y$10$2MbAZ6IpXVCCCkwOlxVM2O7u0T9cxNfv7ijYb.oy7tU728kk70saa', '', '2024-04-11'),
(11, 0, 'aarthik', 18, 2222222213, 'aarthik@gmail.com', '$2y$10$yWNUs5QVgK5Od2vxlUkyxut6naTkQ0rMk7wZvT5XGgSF4uw9msWOG', '', '2024-03-10'),
(12, 0, 'sharath', 16, 789456123, 'sharath@gmail.com', '$2y$10$RYMSV.rOTXg2cv9FdWBLcuh3JLaSgKeitFY0NgOY01wDGFxXGIXI2', '', '2024-04-11'),
(13, 0, 'uvais', 18, 1234567890, 'uvais@gmail.com', '$2y$10$CpV/RC7Kgv6PcX8QbODCWexGzEdmlOzviyNtpQsnyeymnzZVTluge', '', '2024-01-13'),
(14, 0, 'ajaay', 17, 8129455550, 'ajay@gmail.com', '$2y$10$9imqpohmP0lLfwdm.Yw3B.knNaPiHdxWjI4SnBhKAM6w9HK5dGRk2', '', '2024-04-14');

-- --------------------------------------------------------

--
-- Table structure for table `workout`
--

CREATE TABLE `workout` (
  `workout_id` int(11) NOT NULL,
  `bcat_id` int(11) NOT NULL,
  `lean_gain` varchar(40) NOT NULL,
  `workout` varchar(1000) NOT NULL,
  `about_workout` varchar(2000) NOT NULL,
  `workout_image` varchar(250) NOT NULL,
  `workout_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `workout`
--

INSERT INTO `workout` (`workout_id`, `bcat_id`, `lean_gain`, `workout`, `about_workout`, `workout_image`, `workout_date`) VALUES
(1, 2, 'lean', 'hammer,preacher', 'for lean bicep', 'upload/lift.jpg', '2024-04-10'),
(3, 1, 'Bulk', 'dumbell,bench press,fly', 'for bulk chest', 'upload/pexels-andrea-piacquadio-3837757.jpg', '2024-04-10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ad_id`);

--
-- Indexes for table `body_cat`
--
ALTER TABLE `body_cat`
  ADD PRIMARY KEY (`bcat_id`);

--
-- Indexes for table `diet`
--
ALTER TABLE `diet`
  ADD PRIMARY KEY (`diet_id`);

--
-- Indexes for table `equipments`
--
ALTER TABLE `equipments`
  ADD PRIMARY KEY (`eqp_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`ev_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feed_id`);

--
-- Indexes for table `lean_gain`
--
ALTER TABLE `lean_gain`
  ADD PRIMARY KEY (`lg_id`);

--
-- Indexes for table `membership`
--
ALTER TABLE `membership`
  ADD PRIMARY KEY (`mem_id`);

--
-- Indexes for table `membership_order`
--
ALTER TABLE `membership_order`
  ADD PRIMARY KEY (`morder_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`pay_id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`sch_id`);

--
-- Indexes for table `slot`
--
ALTER TABLE `slot`
  ADD PRIMARY KEY (`slot_id`);

--
-- Indexes for table `slots_book`
--
ALTER TABLE `slots_book`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `suggestion`
--
ALTER TABLE `suggestion`
  ADD PRIMARY KEY (`sugg_id`);

--
-- Indexes for table `suppliment`
--
ALTER TABLE `suppliment`
  ADD PRIMARY KEY (`supp_id`);

--
-- Indexes for table `trainer`
--
ALTER TABLE `trainer`
  ADD PRIMARY KEY (`tr_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `workout`
--
ALTER TABLE `workout`
  ADD PRIMARY KEY (`workout_id`),
  ADD KEY `bcat_id` (`bcat_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `body_cat`
--
ALTER TABLE `body_cat`
  MODIFY `bcat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `diet`
--
ALTER TABLE `diet`
  MODIFY `diet_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `equipments`
--
ALTER TABLE `equipments`
  MODIFY `eqp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `ev_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feed_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `lean_gain`
--
ALTER TABLE `lean_gain`
  MODIFY `lg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `membership`
--
ALTER TABLE `membership`
  MODIFY `mem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `membership_order`
--
ALTER TABLE `membership_order`
  MODIFY `morder_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `pay_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `sch_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `slot`
--
ALTER TABLE `slot`
  MODIFY `slot_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `slots_book`
--
ALTER TABLE `slots_book`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `suggestion`
--
ALTER TABLE `suggestion`
  MODIFY `sugg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `suppliment`
--
ALTER TABLE `suppliment`
  MODIFY `supp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `trainer`
--
ALTER TABLE `trainer`
  MODIFY `tr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `workout`
--
ALTER TABLE `workout`
  MODIFY `workout_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `workout`
--
ALTER TABLE `workout`
  ADD CONSTRAINT `bcat_id` FOREIGN KEY (`bcat_id`) REFERENCES `body_cat` (`bcat_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
