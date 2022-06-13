-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2022 at 10:59 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Email`, `password`) VALUES
('aliseif@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `cashier`
--

CREATE TABLE `cashier` (
  `Email` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `ID` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cashier`
--

INSERT INTO `cashier` (`Email`, `password`, `ID`) VALUES
('ahmed@gmail.com', 'ahmed2000', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cashiers`
--

CREATE TABLE `cashiers` (
  `ID` int(11) NOT NULL,
  `name` varchar(70) NOT NULL,
  `Status` varchar(200) NOT NULL,
  `Account` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cashiers`
--

INSERT INTO `cashiers` (`ID`, `name`, `Status`, `Account`) VALUES
(1, 'karim', 'promoted', 'disabled'),
(2, 'ali', 'not promoted', 'enabled'),
(3, 'ali', 'promoted', 'enabled'),
(4, 'ali', 'promoted', 'enabled');

-- --------------------------------------------------------

--
-- Table structure for table `customizesandwich`
--

CREATE TABLE `customizesandwich` (
  `ID` int(11) NOT NULL,
  `parent_ingredient` varchar(20) NOT NULL,
  `image` varchar(250) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` decimal(5,0) NOT NULL,
  `quantity` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customizesandwich`
--

INSERT INTO `customizesandwich` (`ID`, `parent_ingredient`, `image`, `name`, `price`, `quantity`) VALUES
(1, 'bread', '9_Grain_Bread.JPG', '9-Grain Wheat Bread', '20', 200),
(2, 'bread', 'white toast.JFIF', 'White toast', '16', 300),
(3, 'sauce', 'BBQ.JFIF', 'BBQ sauce', '5', 300),
(4, 'bread', 'Petit-pain.JPG', 'Petit pain', '12', 125),
(6, 'sauce', 'ranch.JPG', 'Ranch', '7', 500),
(7, 'protein', 'nuggets.JFIF', 'Chicken nuggets', '25', 140);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `ID` int(100) NOT NULL,
  `parent_menu` varchar(100) NOT NULL,
  `image` varchar(250) NOT NULL,
  `name` varchar(70) NOT NULL,
  `description` varchar(500) NOT NULL,
  `Price` double NOT NULL,
  `quantity` int(250) NOT NULL,
  `Rating` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`ID`, `parent_menu`, `image`, `name`, `description`, `Price`, `quantity`, `Rating`) VALUES
(1, 'Beef', 'BerryJuice.jpeg', 'fillet', 'ay haga', 100, 60, 3),
(2, 'Beef', 'GrandGriledSteak.jpg', 'Grand Griled Steak', '340 gms. of Marinated Grilled Fillet survied with pasta or rise and our special souce.\r\n', 296.4, 40, 3),
(3, 'Beef', 'steakfajita.jpeg', 'Grand Steak Fajita ', '500 gms. of Grilled Marinated Filler Served With Your Choice of Two Sauces, Four Side Dishes, And Our Special Rocca Salad.', 262.19, 40, 4),
(4, 'Beef', 'grilledsteakandchicken.jpeg', 'Grilled steak and chicken', '150 grams of steak and grilled chicken Served With some greens and your Choice Pasta or rise.', 296.5, 30, 5),
(5, 'Beef', 'jalapenosteak.jpeg', 'Jalapeno Steak', '340 gms. Fillet Sauteed, Jalapeno, Onion, Mushroom, Colored Peppers With Melted Cheddar Cheese.\r\n', 296.39, 65, 4),
(6, 'Beef', 'steakandchrimp.jpeg', 'Fillet Shrimp La Creme ', '300 Grams of grilled steak with 100 Grams of Shrimps survied with pasta or rise and our special souce.', 319.19, 50, 4),
(7, 'Beef', 'GrilledTurkeySteak.png', 'Grilled Turkey Steak', '260 gms. of Marinated Grilled Turkey Steak Served With Your Choice Of Sauce.\r\n', 193, 30, 5),
(8, 'chicken', 'GrilledChicken.png', 'Grilled Chicken', '500 gms. of Grilled Marinated Filler Served With Your Choice of Two Sauces, Four Side Dishes, And Our Special Rocca Salad\r\n', 193.79, 40, 4),
(9, 'chicken', 'farkha.jpg', 'Chicken', 'One large chicken with our special smokey souce.', 230, 110, 5),
(10, 'chicken', 'wings.jpg', 'Grand Wings', '12 Korean grilled wings crispy, sticky and spicy with bafllow souce.', 290, 220, 5),
(11, 'chicken', 'sheshtawook.jpg', 'sheshtawook', '250 grams. of Chicken thighs with our special spices on the grill, served with tomatoes, onions and Grand\'s special sauces', 190, 900, 4),
(13, 'chicken', 'grilledsteakandchicken.jpeg', 'Grilled steak and chicken', '150 grams of steak and grilled chicken Served With some greens and your Choice Pasta or rise.', 296.5, 30, 4),
(14, 'burgers', 'BlackBunCheeseBurger.jpeg', 'Black Cheese Burger', 'Two smached paties burger with american cheese ,lettuce and two black buns surved with fries and soda.', 140, 130, 5),
(15, 'burgers', 'ClassicBeefBurger.jpeg', 'Classic Beef Burger', '200 grams. Beef burger paity, lettuse, fresh onions, Grand\'s sause, pickles surved with cheesy fries and soda ', 120, 80, 4),
(16, 'burgers', 'BeefBaconEggs.jpeg', 'Beef Bacon Eggs Burger', 'smashed paity, our special sauce, cheddar cheese, Beef bacon, one omlet egg, mayonnaise', 160, 50, 5),
(17, 'burgers', 'SpinachBeefBurger.jpeg', 'Spinach Beef Burger', 'Beef burger paity, Beef bacon, smoked tebas sauce, cheddar cheese, pickles, lettuce.', 130, 80, 4),
(18, 'burgers', 'chickenburger.jpg', 'Classic Chicken burger', 'Fried chicken Breast, smoked turkey, lettuce cheddar cheese, grand\'s sauce and BBQ sauce.', 110, 90, 3),
(20, 'salads', 'ChickenSalad.jpeg', 'Chicken Salad', 'salty cured ham, juicy chicken breasts, crunchy croutons and a creamy dressing', 110, 110, 4),
(21, 'salads', 'GreenSalad.jpeg', 'Green Salad', 'Mixed greens, avocado, tomatoes, our black bean salad, shredded cheese, tortilla strips, Southwest ranch dressing.', 90, 100, 5),
(23, 'dessert', 'BerryBacoCake.WEBP', 'Berry Baco Cake', 'Fold in 140g (5oz) of the blackberries with a rubber spatula.', 90, 30, 5),
(154, 'classics', 'OrangeJuice.jpeg', 'Orange Juice', '', 50, 20, 5);

-- --------------------------------------------------------

--
-- Table structure for table `qualitycontrol`
--

CREATE TABLE `qualitycontrol` (
  `ID` int(100) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qualitycontrol`
--

INSERT INTO `qualitycontrol` (`ID`, `Email`, `password`) VALUES
(1, 'qc@gmail.com', 'qc123');

-- --------------------------------------------------------

--
-- Table structure for table `registeration`
--

CREATE TABLE `registeration` (
  `ID` int(100) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Address` varchar(20) NOT NULL,
  `Mobile` bigint(10) NOT NULL,
  `National_ID` int(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `Gender` enum('Male','Female','Other') NOT NULL,
  `image` varchar(250) NOT NULL,
  `rate` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registeration`
--

INSERT INTO `registeration` (`ID`, `Name`, `Address`, `Mobile`, `National_ID`, `Email`, `password`, `Gender`, `image`, `rate`) VALUES
(198, 'arafa', 'maadi', 1010329448, 2147483647, 'mad@gmail.com', '123', 'Male', 'hussein.png', 0),
(201, 'ali', 'maadi', 100000, 0, 'ali@gmail.com', 'ali2000', 'Male', 'aly.png', 0),
(202, 'seif', 'maadi', 1015412228, 0, 'seif@gmail.com', 'seif2002', 'Male', 'sayo.jpg', 0),
(203, 'karim', 'maadi', 152765, 99999, 'karim@gmail.com', 'karim2002', 'Male', 'karim.png', 0),
(204, 'youssef', 'nasr', 4797648, 88888, 'youssef@gmail.com', 'youissef2002', 'Male', 'hamasa.png', 0),
(213, 'ali yasser', 'haram', 1010329448, 2147483647, 'ali2011315@miuegypt.edu.eg', 'ali', 'Male', 'aly.png', 0),
(214, 'ali yasser', 'haram', 1010329448, 2147483647, 'ali2011315@miuegypt.edu.eg', 'ali', 'Male', 'aly.png', 0),
(215, 'Rating', 'maadi', 22020202, 2147483647, 'KarimSherif02@gmail.com', 'ali', 'Male', '9_Grain_Bread.jpg', 0),
(222, 'aly', 'maadi', 1015412228, 32884323, 'aly@gmail.com', 'aly30000', 'Male', 'aly.png', 0),
(236, '', '', 0, 0, '', '', '', '', 0),
(237, '', '', 0, 0, '', '', '', '', 0),
(238, '', '', 0, 0, '', '', '', '', 0),
(239, 'seif', 'maadi', 1015412228, 0, 'aliyasser360@gmail.com', 'seif2002', 'Male', 'aly.png', 0),
(240, '', '', 0, 0, '', '', '', '', 0),
(241, '', '', 0, 0, '', '', '', '', 0),
(242, '', '', 0, 0, '', '', '', '', 0),
(243, '', '', 0, 0, '', '', '', '', 0),
(244, '', '', 0, 0, '', '', '', '', 0),
(245, '', '', 0, 0, '', '', '', '', 0),
(246, '', '', 0, 0, '', '', '', '', 0),
(247, '', '', 0, 0, '', '', '', '', 0),
(248, '', '', 0, 0, '', '', '', '', 0),
(249, 'ali yasser', 'maadi', 1010329448, 2147483647, 'aliyasser360@gmail.com', '123', 'Male', '11.jpeg', 0),
(250, '', '', 0, 0, '', '', '', '', 0),
(251, '', '', 0, 0, '', '', '', '', 0),
(252, '', '', 0, 0, '', '', '', '', 0),
(253, '', '', 0, 0, '', '', '', '', 0),
(254, '', '', 0, 0, '', '', '', '', 0),
(255, '', '', 0, 0, '', '', '', '', 0),
(256, '', '', 0, 0, '', '', '', '', 0),
(257, '', '', 0, 0, '', '', '', '', 0),
(258, '', '', 0, 0, '', '', '', '', 0),
(259, '', '', 0, 0, '', '', '', '', 0),
(260, '', '', 0, 0, '', '', '', '', 0),
(261, '', '', 0, 0, '', '', '', '', 0),
(262, '', '', 0, 0, '', '', '', '', 0),
(263, '', '', 0, 0, '', '', '', '', 0),
(264, '', '', 0, 0, '', '', '', '', 0),
(265, '', '', 0, 0, '', '', '', '', 0),
(266, '', '', 0, 0, '', '', '', '', 0),
(267, '', '', 0, 0, '', '', '', '', 0),
(268, '', '', 0, 0, '', '', '', '', 0),
(269, '', '', 0, 0, '', '', '', '', 0),
(270, '', '', 0, 0, '', '', '', '', 0),
(271, '', '', 0, 0, '', '', '', '', 0),
(272, '', '', 0, 0, '', '', '', '', 0),
(273, '', '', 0, 0, '', '', '', '', 0),
(274, '', '', 0, 0, '', '', '', '', 0),
(275, '', '', 0, 0, '', '', '', '', 0),
(276, '', '', 0, 0, '', '', '', '', 0),
(277, '', '', 0, 0, '', '', '', '', 0),
(278, '', '', 0, 0, '', '', '', '', 0),
(279, '', '', 0, 0, '', '', '', '', 0),
(280, '', '', 0, 0, '', '', '', '', 0),
(281, '', '', 0, 0, '', '', '', '', 0),
(282, '', '', 0, 0, '', '', '', '', 0),
(283, '', '', 0, 0, '', '', '', '', 0),
(284, '', '', 0, 0, '', '', '', '', 0),
(285, '', '', 0, 0, '', '', '', '', 0),
(286, '', '', 0, 0, '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `usercomments`
--

CREATE TABLE `usercomments` (
  `ID` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Comments` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usercomments`
--

INSERT INTO `usercomments` (`ID`, `Name`, `Comments`) VALUES
(1, 'ahmed', 'the burger is good'),
(2, 'hassan', 'so nice grilled chicken');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cashier`
--
ALTER TABLE `cashier`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `cashiers`
--
ALTER TABLE `cashiers`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `customizesandwich`
--
ALTER TABLE `customizesandwich`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `qualitycontrol`
--
ALTER TABLE `qualitycontrol`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `registeration`
--
ALTER TABLE `registeration`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `usercomments`
--
ALTER TABLE `usercomments`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cashier`
--
ALTER TABLE `cashier`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cashiers`
--
ALTER TABLE `cashiers`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customizesandwich`
--
ALTER TABLE `customizesandwich`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=155;

--
-- AUTO_INCREMENT for table `qualitycontrol`
--
ALTER TABLE `qualitycontrol`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `registeration`
--
ALTER TABLE `registeration`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=287;

--
-- AUTO_INCREMENT for table `usercomments`
--
ALTER TABLE `usercomments`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
