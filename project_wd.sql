-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2021 at 07:29 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_wd`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'devang', 'devang');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `img` varchar(300) NOT NULL,
  `title` varchar(40) NOT NULL,
  `short_desc` text NOT NULL,
  `price` varchar(40) NOT NULL,
  `quantity` varchar(40) NOT NULL,
  `q1` varchar(70) NOT NULL,
  `q2` varchar(70) NOT NULL,
  `p1` varchar(70) NOT NULL,
  `p2` varchar(70) NOT NULL,
  `long_desc` text NOT NULL,
  `category` varchar(20) NOT NULL,
  `submittedby` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `img`, `title`, `short_desc`, `price`, `quantity`, `q1`, `q2`, `p1`, `p2`, `long_desc`, `category`, `submittedby`) VALUES
(4, 'image/sugar.png', 'Sugar Free Gold Pellets', 'Provides natural sweetness without the calories\r\nUseful for overweight, Diabetic, and health-conscious people', '250', '500 pellets', 'Pack of 2', 'Pack of 4', '500', '1000', 'Sugar Free Gold Pellets is a healthier alternative to sugar. It is made from Aspartame, a protein derivative. It is a nutritious, safe and ideal low- calorie sugar substitute, giving the sweetness and taste of sugar but with negligible calories. Sugar Free Gold helps to cut down on excess calories of sugar to keep you fit and healthy.', 'health', ''),
(5, 'uploads/tea.png', 'Organic India Tulsi Green Tea Classic', 'Mixture of natural herbs that is rich in antioxidants and phytonutrientsHas stress relieving and rejuvenating properties', '148', '1 Box1 box of 25 tea bags', 'Pack of 2', 'Pack of 4', '296', '20', 'Organic India Tulsi Green Tea is an antioxidant and helps in weight management. It helps in cases of obesity, anti-aging, and high cholesterol.', 'Winter Product', 'admin'),
(6, 'image/red.png', 'Dabur Red Toothpaste', 'Helps to counter toothache and bad breath\r\nHelps to fight dental diseases like plaque, stain, and malodour', '130', '300 gm Toothpaste', 'Pack of 2', 'Pack of 4', '260', '520', 'Dabur Red Paste contains ingredients which help to keep all dental problems away and helps to provide stronger and healthier teeth. It provides relief from bad breath, tooth sensitivity and brittle teeth.\r\n', 'user benefits', ''),
(8, 'image/dabur.jpg', 'Dabur Chyawanprash 1Kg', 'An ayurvedic nutritional supplement rich in antioxidants and Vitamin C\r\nExcellent immune booster and enhances energy\r\nHelps the body fight against infections\r\nHelps improve digestion and normalizes blood pressure', '309', '1 kg Paste', 'Pack of 2', 'Pack of 4', '618', '1236', 'Dabur Chyawanprash 1Kg is an ayurvedic health supplement comprising 41 Ayurvedic herbs that boost the immunity, protects the body from infections like cough & cold etc. caused by various micro-organisms and weather change. This effectively helps to restore youth and vitality and can be taken by people of all ages.\r\n', 'immunity booster ', ''),
(15, 'uploads/crosin.jpg', 'crosin', 'it is used for skin care', '1088', '1', '2', '3', '', '', 'it is used for skin care', 'Winter Product', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `title` (`title`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
